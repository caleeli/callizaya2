#!/bin/bash

# Function to get current git branch
get_current_branch() {
    git rev-parse --abbrev-ref HEAD 2>/dev/null
}

# Function to list remote branches
list_remote_branches() {
    git fetch --quiet 2>/dev/null
    #git branch -r | grep -v HEAD | sed 's/origin\///' | sort -u
}

# Function to prompt user for branch selection
select_branch() {
    local prompt_text="$1"
    local current_branch="$2"
    local default_branch="$3"

    echo ""
    echo "$prompt_text"
    echo "Current branch: $current_branch"
    echo ""

    # Show available branches
    echo "Available branches:"
    list_remote_branches | nl
    echo ""

    # Ask user what to do
    echo "Options:"
    echo "  [Enter] Keep current branch ($current_branch)"
    if [ -n "$default_branch" ] && [ "$default_branch" != "$current_branch" ]; then
        echo "  [d] Switch to default branch ($default_branch)"
    fi
    echo "  [type name] Enter a branch name"
    echo ""

    read -p "Your choice: " choice

    if [ -z "$choice" ]; then
        echo "$current_branch"
    elif [ "$choice" = "d" ] && [ -n "$default_branch" ]; then
        echo "$default_branch"
    else
        echo "$choice"
    fi
}

# Check if running non-interactively (with command-line args)
BRANCH_CORE="$1"
BRANCH_PACKAGE="$2"

# If no args provided, run in interactive mode
if [ -z "$BRANCH_CORE" ] || [ -z "$BRANCH_PACKAGE" ]; then
    echo "===================================="
    echo "ProcessMaker Development Setup Tool"
    echo "===================================="

    # Detect current branch for core
    cd /opt/processmaker 2>/dev/null || { echo "Error: /opt/processmaker not found"; exit 1; }
    CORE_CURRENT=$(get_current_branch)
    [ -z "$CORE_CURRENT" ] && CORE_CURRENT="develop"

    # Detect current branch for package
    if [ -d /opt/packages/package-savedsearch ]; then
        cd /opt/packages/package-savedsearch
        PACKAGE_CURRENT=$(get_current_branch)
        [ -z "$PACKAGE_CURRENT" ] && PACKAGE_CURRENT="develop"
    else
        PACKAGE_CURRENT="develop"
    fi

    # Prompt for core branch
    BRANCH_CORE=$(select_branch "=== ProcessMaker Core ===" "$CORE_CURRENT" "develop")

    # Prompt for package branch
    BRANCH_PACKAGE=$(select_branch "=== Package SavedSearch ===" "$PACKAGE_CURRENT" "develop")

    echo ""
    echo "===================================="
    echo "Selected branches:"
    echo "  Core:    $BRANCH_CORE"
    echo "  Package: $BRANCH_PACKAGE"
    echo "===================================="
    echo ""

    read -p "Continue? [Y/n]: " confirm
    if [ -n "$confirm" ] && [ "$confirm" != "y" ] && [ "$confirm" != "Y" ]; then
        echo "Aborted."
        exit 0
    fi
fi

# ============ CORE SETUP ============

echo ""
echo ">>> Setting up ProcessMaker Core on branch: $BRANCH_CORE"

cd /opt/processmaker

# Backup composer files
[ -f storage/composer.json.bak ] || cp composer.json storage/composer.json.bak
[ -f storage/composer.lock.bak ] || cp composer.lock storage/composer.lock.bak

# Clean untracked files in resources (case-insensitive for Logs/logs folders)
git clean -fd resources/

# Restore tracked files
git restore composer.json composer.lock \
    resources/*

# Fetch and checkout
git fetch
git checkout "$BRANCH_CORE"
git pull

# Restore composer files from backup
cp storage/composer.json.bak composer.json
cp storage/composer.lock.bak composer.lock

# Show current status
git branch

# ============ PACKAGE SETUP ============

echo ""
echo ">>> Setting up Package SavedSearch on branch: $BRANCH_PACKAGE"

# Clone package if doesn't exist
cd /opt/packages

if [ -d package-savedsearch ]; then
    cd package-savedsearch
    CURRENT_PKG_BRANCH=$(get_current_branch)
    if [ "$CURRENT_PKG_BRANCH" != "$BRANCH_PACKAGE" ]; then
        echo "Switching package from $CURRENT_PKG_BRANCH to $BRANCH_PACKAGE..."
        git fetch
        git checkout "$BRANCH_PACKAGE"
    else
        echo "Package already on branch $BRANCH_PACKAGE"
    fi
    git pull
else
    echo "Cloning package-savedsearch..."
    git clone --branch "$BRANCH_PACKAGE" https://github.com/ProcessMaker/package-savedsearch.git
fi

# Create/update symlink
cd /opt/processmaker/vendor/processmaker
if [ "$(readlink package-savedsearch)" != "/opt/packages/package-savedsearch" ]; then
    rm -rf package-savedsearch
    ln -s /opt/packages/package-savedsearch package-savedsearch
    echo "Symlink created: package-savedsearch -> /opt/packages/package-savedsearch"
else
    echo "Symlink already correct."
fi

# Install package-savedsearch
cd /opt/processmaker
composer config --global --auth http-basic.processmaker.repo.packagist.com token 0df7b369d295c842dae46a40f7b694399e9f5d1b45d167e807afdb26424d
composer require justinrainbow/json-schema:^6.5
php artisan package-savedsearch:install

# Cache and other things
APP_RUNNING_IN_CONSOLE=false php artisan route:clear
APP_RUNNING_IN_CONSOLE=false php artisan route:cache
php artisan config:clear
php artisan config:cache

# Show current status
cd /opt/processmaker/vendor/processmaker/package-savedsearch
current_package_branch=$(git rev-parse --abbrev-ref HEAD)
current_package_last_commit_message=$(git log -1 --pretty=%B)
cd /opt/processmaker
current_core_branch=$(git rev-parse --abbrev-ref HEAD)

echo ""
echo "===================================="
echo "Setup complete!"
echo "Core: $current_core_branch"
echo "Package: $current_package_branch"
echo "package-savedsearch: $current_package_last_commit_message"
echo "===================================="

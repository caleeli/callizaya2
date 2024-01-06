<?php

class Project
{
    public function __construct(
        public string $name,
        public string $path,
        public string $mainBranch = 'main',
        public string $userName = 'david',
        public string $userEmail = 'davidcallizaya@gmail.com',
    ) {
    }

    public function run($command)
    {
        $command = mb_convert_encoding($command, 'ISO-8859-1');
        $cwd = getcwd();
        chdir($this->path);
        $output = [];
        $return_var = 0;
        exec($command. ' 2>&1', $output, $return_var);
        $success = $return_var === 0;
        chdir($cwd);
        return [$success, $output ? implode("\n", $output) : ''];
    }

    public function createBranch($name = null)
    {
        $branch = $name ?? 'ai-' . uniqid();
        $this->run("git reset --hard");
        $this->run("git clean -fd");
        $this->run("git checkout {$this->mainBranch}");
        $this->run("git branch -D {$branch}");
        $this->run("git checkout -b {$branch}");
        return $branch;
    }

    public function commitFailedBranch($name, $message)
    {
        $nameF = $name . '-failed-' . date('YmdHis');
        $this->run("git checkout -b {$nameF}");
        $this->run("git add .");
        $message = escapeshellarg("Commit failed branch $name: $message");
        return $this->run("git commit -m {$message}");
    }

    public function commit($message)
    {
        $this->run("git add .");
        $message = escapeshellarg($message);
        return $this->run("git commit -m {$message}");
    }

    public function add($path)
    {
        return $this->run("git add $path");
    }

    public function commitAndMergeToMain($branch, $message): array
    {
        if (empty($branch)) {
            $branch = $this->getCurrentBranch();
        }
        $message = escapeshellarg($message);
        $result = $this->run("git commit -m {$message}");
        if (!$result[0]) {
            return $result;
        }
        $result = $this->run("git checkout {$this->mainBranch}");
        if (!$result[0]) {
            return $result;
        }
        return $this->run("git merge $branch");
    }

    public function getCurrentBranch()
    {
        [$success, $output] = $this->run("git branch --show-current");
        return $success ? $output : '';
    }

    public function runTests()
    {
        return $this->run('php -d xdebug.mode=off vendor/bin/phpunit');
    }

    public function createProject()
    {
        if (!file_exists($this->path)) {
            mkdir($this->path, 0777, true);
        }
        if (!file_exists($this->path)) {
            $userName = escapeshellarg($this->userName);
            $userEmail = escapeshellarg($this->userEmail);
            $this->run(
                "composer create-project laravel/laravel . && ".
                "git init && git branch -m {$this->mainBranch} && ".
                "git config user.name {$userName} && ".
                "git config user.email {$userEmail} && ".
                "git add . && git commit -m 'Initial commit'"
            );
        }
    }

    public function testCommitAndMerge($branch, $message): array
    {
        if (empty($branch)) {
            $branch = $this->getCurrentBranch();
        }
        [$success, $error] = $this->runTests();
        if (!$success) {
            $this->commitFailedBranch($branch, $message);
            return [$success, $error];
        }
        $this->add('.');
        return $this->commitAndMergeToMain($branch, $message);
    }

    public function testAndCommit($message): array
    {
        [$success, $error] = $this->runTests();
        if (!$success) {
            // $this->commit($message);
            return [$success, $error];
        }
        return $this->commit($message);
    }
}

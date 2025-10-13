<?php
header('Content-Type: text/javascript');
?>
export function openLogin() {
    const width = 500;
    const height = 600;
    const left = (screen.width / 2) - (width / 2);
    const top = (screen.height / 2) - (height / 2);
    window.open(
        'https://callizaya.com/api.php/auth/google',
        'Google Login',
        `width=${width},height=${height},top=${top},left=${left}`
    );
};

const listeners = [];
// Register listener for login resolution
export function onLogin(callback) {
    listeners.push(callback);
}

function resolveLogin(data) {
    listeners.forEach((callback) => callback(data));
}

// listen for messages from the popup
window.addEventListener('message', (event) => {
    if (event.origin !== 'https://callizaya.com') {
        // Ignore messages from unknown origins
        return;
    }

    resolveLogin(event.data);
});

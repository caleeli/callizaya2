<?php
header('Content-Type: text/javascript');
?>
console.log('Hello from client.js');
export function authLogin() {
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

// listen for messages from the popup
window.addEventListener('message', (event) => {
    console.log('Received message:', event);
    if (event.origin !== window.location.origin) {
        // Ignore messages from unknown origins
        return;
    }
    const { user, jwt } = event.data;
    console.log('User info:', user);
    console.log('JWT:', jwt);
    // You can now use the user info and JWT as needed
});

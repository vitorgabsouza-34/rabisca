<?php
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => getHost() ?? '',
        'secure' => isHttps(),
        'httponly' => true,
        'samesite' => 'Strict'
    ]);

    session_start();
}

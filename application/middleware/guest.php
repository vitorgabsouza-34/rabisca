<?php
$router->before('GET|POST', '/|/signup|/login|/about|/forgot-password', function () {
    if (isset($_SESSION['user-id'])) {
        redirect('/dashboard');
    }
});

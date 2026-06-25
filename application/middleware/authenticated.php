<?php
$router->before('GET|POST', '/dashboard|/note/(\d+)|/settings', function () {
    if (!isset($_SESSION['user-id'])) {
        redirect('/login');
    }
});

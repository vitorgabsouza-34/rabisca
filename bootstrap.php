<?php
require_once __DIR__ . '/application/helpers/get-host.php';
require_once __DIR__ . '/application/helpers/is-https.php';
require_once __DIR__ . '/application/helpers/terminate.php';
require_once __DIR__ . '/application/helpers/redirect.php';
require_once __DIR__ . '/application/helpers/get-metadata.php';
require_once __DIR__ . '/vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $dotenv->required(['DATABASE_DSN', 'DATABASE_USER', 'DATABASE_PASSWORD'])->notEmpty();
} catch (Exception $exception) {
    terminate('Error loading environment variables: ' . $exception->getMessage());
}

require_once __DIR__ . '/application/configuration/session.php';
require_once __DIR__ . '/application/configuration/application.php';
// require_once BASE_PATH . 'application/configuration/database.php';

$router = new \Bramus\Router\Router();

require_once BASE_PATH . 'application/middleware/authenticated.php';
require_once BASE_PATH . 'application/middleware/guest.php';

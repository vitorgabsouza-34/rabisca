<?php
function terminate(string $message, int $code = 500): void
{
    http_response_code($code);
    error_log($message);

    exit;
}

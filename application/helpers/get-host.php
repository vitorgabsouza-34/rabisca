<?php
function getHost(): string
{
    return ((isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME']) ?? 'localhost') . '/rabisca';
}

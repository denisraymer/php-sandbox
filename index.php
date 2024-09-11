<?php

declare(strict_types=1);

require __DIR__ . '/header.php';

function routing($path = '/'): void
{
    switch ($path) {
        case "/calculator":
            require __DIR__ . '/programs/calculator/index.php';
            echo 'ASD';
            break;
        case "/test-stand":
            require __DIR__ . '/test-stand.php';
            break;
        default:
            break;
    }
}

routing($_SERVER['REQUEST_URI']);

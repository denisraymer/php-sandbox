<?php

declare(strict_types=1);

require __DIR__ . '/header.php';

function routing($path = '/'): void
{
  switch ($path) {
    case "/calculator":
      require __DIR__ . '/programs/calculator/index.php';
      break;
    case "/test-stand":
      require __DIR__ . '/test-stand.php';
      break;
    case "/calculator-oop":
      require __DIR__ . '/oop/calculator_oop/index.php';
      break;
    default:
      break;
  }
}

routing($_SERVER['PATH_INFO']);

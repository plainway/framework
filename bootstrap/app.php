<?php

use Extro\HttpKernel\HttpKernel;

$container = require __DIR__ . '/container.php';
require __DIR__ . '/helpers.php';

return $container->get(HttpKernel::class);

<?php

use Extro\Di\Container;
use Extro\Di\ContainerFactory;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;

/**
 * @return ContainerExceptionInterface&Container
 */
function container(): ContainerInterface
{
    static $container = null;

    if ($container === null) {
        $container = ContainerFactory::create(
            config: require __DIR__ . '/../config/Di.php'
        );
    }

    return $container;
}

return container();

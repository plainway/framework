<?php

namespace App\Config;

use App\Middlewares\Profiler;
use App\Middlewares\RouteHandler;
use App\Middlewares\RouteMatching;
use Extro\RequestHandler\Contracts\MiddlewareConfigInterface;

class Middlewares implements MiddlewareConfigInterface
{
    public function getMiddlewareClasses(): iterable
    {
        return [
            Profiler::class,
            RouteMatching::class,
            RouteHandler::class,
        ];
    }
}

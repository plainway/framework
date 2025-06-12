<?php

namespace App\Config;

use Extro\ViewEngine\Contracts\ConfigInterface;

class View implements ConfigInterface
{
    public function getTemplateDir(): string
    {
        return __DIR__ . '/../resources/views';
    }
}

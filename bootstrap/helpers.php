<?php

use Extro\ViewEngine\View;

function view(string $template, array $data = []): ?string
{
    return container()->get(View::class)->render($template, $data);
}

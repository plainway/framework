<?php

namespace App\Controllers;

use Laminas\Diactoros\Response\HtmlResponse;

class NotFoundPageController
{
    public static function render(): HtmlResponse
    {
        return new HtmlResponse(view('pages/404', [
            'title' => '404 Page Not Found',
        ]), 404);
    }
}

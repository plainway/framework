<?php

namespace App\Controllers;

use Laminas\Diactoros\Response\HtmlResponse;

class WelcomePageController
{
    public function render(): HtmlResponse
    {
        return new HtmlResponse(view('pages/welcome', [
            'title' => 'PlainWay',
        ]));
    }
}

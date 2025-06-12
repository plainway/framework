<?php

use App\Controllers\WelcomePageController;
use Extro\HttpRouter\Facade\Route;

return [
    Route::get('/', [WelcomePageController::class, 'render'])
];

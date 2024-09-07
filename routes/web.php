<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Maker API ' => app()->version()];
});

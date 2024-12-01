<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hola que tal desde el welcome";
});

Route::get('/test', function () {
    return "Hola que tal";
});

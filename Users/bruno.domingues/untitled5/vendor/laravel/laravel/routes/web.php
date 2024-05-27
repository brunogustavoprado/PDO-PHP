<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Página inicial';
});

Route::get('/sobre', function () {
    return 'Página sobre nós';
});

Route::get('/contato', function () {
    return 'Página de contato';
});
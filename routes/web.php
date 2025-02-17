<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});


Route::get('/cached', function () {
    return cache('cached');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('shops.index');
});

Route::get('/1', function () {
    return view('test');
});

Route::get('/2', function () {
    return view('test2');
});
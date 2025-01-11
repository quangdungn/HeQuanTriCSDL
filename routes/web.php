<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home.index1');
})-> name('home1');

Route::get('/trang-chu', function () {
    return view('home.index');
})->name('home');

Route::get('/cua-hang', function () {
    return view('shops.index');
})->name('shop');

Route::get('/dang-nhap', function () {
    return view('home.login');
})->name('login');

Route::get('/dang-ky', function () {
    return view('home.signup');
})-> name('signup');

Route::get('/gio-hang', function () {
    return view('user.cart');
})-> name('cart');

Route::get('/san-pham', function () {
    return view('shops.product');
})-> name('product');

Route::get('/don-hang', function () {
    return view('user.order');
})-> name('order');


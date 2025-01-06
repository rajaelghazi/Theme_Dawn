<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/product', function () {
    return view('ProductPage');
});

Route::get('/checkout', function () {
    return view('Checkout');
});

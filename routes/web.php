<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $nome = "Jose Marcio";

    return view('welcome', ['nome' =>$nome]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});


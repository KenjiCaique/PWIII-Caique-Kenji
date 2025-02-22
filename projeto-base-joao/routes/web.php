<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('greeting');
});
Route::get('/teste2', function () {
    return view('ola');
});
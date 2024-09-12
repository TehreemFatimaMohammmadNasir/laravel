<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/intro', function () {
    return view('introduction');
});

Route::get('/month', function () {
    return view('month');
});
Route::get('/marksheet', function () {
    return view('marksheet');
});


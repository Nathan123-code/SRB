<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/kom1', function () {
    return view('komisi1');
});

Route::get('/kom2', function () {
    return view('komisi2');
});

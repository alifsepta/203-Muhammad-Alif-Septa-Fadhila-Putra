<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});
Route::get('/home', function () {
    return view('Home');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/collection', function () {
    return view('Collection');
});
Route::get('/sign', function () {
    return view('sign');
});

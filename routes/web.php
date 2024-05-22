<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View; 

Route::get('/', function () {
    return view('Welcome');
});
Route::get('/home', function () {
    return view('home');
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

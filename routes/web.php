<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo/timestamp', function () {
    return view('demo.timestamp');
});

Route::get('/demo/geocode', function () {
    return view('demo.geocode');
});

Route::get('/demo/after', function () {
    return view('demo.after');
});

Route::get('/demo/before', function () {
    return view('demo.before');
});

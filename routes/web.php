<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});

Route::prefix('tools')->group(function () {
    Route::get('/bmi', function () {
        return view('tools.bmi');
    });

    Route::get('/tdee', function () {
        return view('tools.tdee');
    });
});
Route::get('/science', function () {
    return view('science');
});



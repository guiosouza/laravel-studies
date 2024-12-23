<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/about', function () {
//     return 'Returning a string from the about route';  // simulating a string response
// });

// Route::get('/about', function () {
//     return ['name' => 'John Doe', 'age' => 30]; // simulating a JSON response
// });

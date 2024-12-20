<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

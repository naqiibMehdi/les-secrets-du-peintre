<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");


Route::get("/quote", function() {
    return view("quote");
})->name("quote");
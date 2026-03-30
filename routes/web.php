<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");


Route::get("/quote", function() {
    return view("quote");
})->name("quote");

Route::get("/courses/coated", function(){
    return view("formations.enduit");
})->name("enduit");
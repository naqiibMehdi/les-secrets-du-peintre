<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");


Route::get("/quote", [QuoteController::class, "create"])->name("quote");
Route::post("/quote", [QuoteController::class, "store"]);


Route::get("/courses/coated", function(){
    return view("formations.enduit");
})->name("enduit");

Route::get("/about", function(){
    return view("about");
})->name("about");
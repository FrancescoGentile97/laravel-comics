<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// route della home
Route::get('/', function () {
    return view("home");
})->name("home");

// route dei personaggi
Route::get("/characters", function () {
    return view("characters");
})->name("characters");

// route dei film

Route::get("/movie", function () {
    return view("movie");
})->name("movie");

// prova route per i fumetti
Route::get("/comics", function(){
    $comics = config("comics");
    return view("partials.comics",[
        "comicsList" => $comics
    ]);
})->name("comics");
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view("/welcome","generos")->name("generos");
Route::view("/Peliculas", "peliculas")->name("Peliculas");
Route::view("/Series", "series")->name("Series");
Route::view("/Login", "login")->name("Login");
Route::view("/Registrarse", "registrarse")->name("Registrarse");

// Route::view("/Inicio", "welcome")->name("Principal");
Route::view("/Inicio", "welcome")->name("Inicio");

Route::view("/Membresia", "membresia")->name("Membresia");
Route::view("/Pago", "membresiap2")->name("Pago");
Route::view("/generos", "generos")->name("generos");







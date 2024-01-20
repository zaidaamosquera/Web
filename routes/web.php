<?php

use App\Http\Controllers\GenerosController;
use App\Http\Controllers\PeliculaController;
use App\Models\Pelicula;
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
Route::get("/RegistrarG",[GenerosController::class,"show"])->name("RegistrarG");

// Route::view("/Inicio", "welcome")->name("Principal");
Route::view("/Inicio", "welcome")->name("Inicio");

Route::view("/Membresia", "membresia")->name("Membresia");
Route::view("/Pago", "membresiap2")->name("Pago");
Route::view("/Pago", "membresiap2")->name("Pago");
Route::view("/generos", "generos")->name("genero");

Route::get('/Registro-Peliculas', [PeliculaController::class,"create"])->name("RegistroPelicula");
Route::get('/Registro-Generos', [GenerosController::class,"create"])->name("RegistroGenero");
Route::post('/Registrar-Peli', [PeliculaController::class,"store"])->name("RegistroPeli");
Route::post('/Registrar-', [GenerosController::class,"store"])->name("RegistroGen");
Route::delete("/RegistrarG/{idGeneros}", [GenerosController::class,"destroy"])->name("DeletG");
Route::patch("/RegistrarG/{idGeneros}", [GenerosController::class,"update"])->name("EditG");





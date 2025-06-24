<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FuncionController;
use App\Http\Controllers\CarteleraController;
use App\Http\Controllers\CompraEntradasController;
use App\Http\Controllers\SeatController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'isAdmin')->group(function ()  {

    Route::get('/', function () {//PRINCIPAL
        return view('welcome');
    })->name('welcome');
    //Rutas proyecto
    Route::resource('user', UserController::class); //gestión de USUARIOS
    Route::resource('sessions', FuncionController::class); //gestión de SESIONES
    Route::resource('films', FilmController::class); //gestión de PELICULAS

    
    Route::get('/lineup/chooseSeat/{id}', [SeatController::class, 'choose'])//ELECCION SITIO
        ->name('lineup.chooseSeat');
    
    //Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group (function (){
     Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    // COMPRA ENTRADAS
    Route::get('/lineup', [CarteleraController::class, 'lineup'])//vista de películas en cartelera
        ->name('lineup.index');
    
});

//CON LA AUTENTIFICACIÓN BREEZE HACE FALTA UNA RUTA HOME
 Route::get('/home', function () {
    return redirect()->route('welcome');
    })->name('home');
 

require __DIR__.'/auth.php';

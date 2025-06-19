<?php

use App\Http\Controllers\CarteleraController;
use App\Http\Controllers\CompraEntradasController;
use App\Http\Controllers\FuncionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

//PRINCIPAL
Route::get('/', function () {//vista principal
    return view('welcome');
})->name('home');

//REGISTRO DE USUARIOS
Route::resource('user', UserController::class);//registro, muestra auto rutas index, show, create, update...
        //->parameters(['user' => 'usuario']);
        //->names('usuarios');

//ADMINISTRACIÓN DE SESIONES
Route::resource('sessions', FuncionController::class);//administración sesiones
        //->names('salas');

Route::resource('films', FilmController::class);


// COMPRA ENTRADAS
Route::get('/lineup', [CarteleraController::class, 'lineup'])//vista de películas en cartelera
        ->name('lineup.index');

Route::get('/lineup/{funcion}/chooseSeat', [CompraEntradasController::class])//elección de sitio
        ->name('lineup.chooseSeat');

Route::get('lineup/{funcion}/chooseSeat/buy', [CompraEntradasController::class])//confirmación de compra
        ->name('lineup.chooseSeat.buy');
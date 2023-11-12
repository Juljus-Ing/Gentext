<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sesiones;
use App\Http\Controllers\registro;
use App\Http\Controllers\textos;

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

Route::get('/', [Sesiones::class, 'inicio'])
    ->middleware('auth')
    ->name('inicio.index'); //Ruta para la vista del inicio

Route::get('/login', [Sesiones::class, 'loggear'])
    ->middleware('guest')
    ->name('login.index'); //Ruta para la vista del login

Route::post('/login', [Sesiones::class, 'logg'])
    ->name('login.logg');

Route::get('/logout', [Sesiones::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');



Route::get('/registro', [registro::class, 'registro'])
    ->middleware('guest')
    ->name('registro.index'); //Ruta para la vista del registro

Route::post('/registro', [registro::class, 'registrar'])
    ->name('registro.registrar');


Route::get('/nuevotexto', [textos::class, 'nuevotexto'])
    ->middleware('auth')
    ->name('nuevotexto.index'); //Ruta para la vista del registro

Route::post('/nuevotexto', [textos::class, 'guardar'])
    ->name('nuevotexto.guardar');


Route::get('/editartexto/{quien}', [textos::class, 'editartexto'])
    ->middleware('auth')
    ->name('editar.index'); //Ruta para la vista de editar

Route::post('/editartexto/{quien}', [textos::class, 'editar'])
    ->name('editartexto.editar');


Route::get('/generardoc/{quien}', [textos::class, 'generardoc'])
    ->middleware('auth')
    ->name('generardoc.index'); //Ruta para generar word

Route::get('/eliminarTexto/{quien}', [textos::class, 'eliminartexto'])
    ->middleware('auth')
    ->name('eliminar.index'); //Ruta para la vista de editar

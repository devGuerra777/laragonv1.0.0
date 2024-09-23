<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{tipo_persona?}', [ContactoController::class,'formulario']); //PUEDE O NO PUEDE TENER ESTE PARAMETRO ?
//IGUAL PUEDE MORIR Y SE LE ASIGNA UN VALOR POR DEFECTO

Route::post('/contacto-recibe',[ContactoController::class,'newContact']);
Route::get('lista',[ContactoController::class,'lista']);

/*RESOURCE CONTROLLER LARAVEL */
Route::resource('noticia',NoticiaController::class);
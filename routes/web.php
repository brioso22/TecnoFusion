<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\UsuariosController;

Route::get('/',[UsuariosController::class,'Login']);
Route::get('/Registro', [UsuariosController::class, 'Registro'])->name('registro');
Route::post('/Registro', [UsuariosController::class, 'create'])->name('registro.post');
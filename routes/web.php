<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\UsuariosController;
use App\Models\Usuarios;

Route::get('/', [UsuariosController::class, 'login'])->name('login');
Route::post('/login', [UsuariosController::class, 'loginIn'])->name('login.post');
Route::get('/registro', [UsuariosController::class, 'registro'])->name('registro');
Route::post('/registro', [UsuariosController::class, 'create'])->name('registro.post');
Route::get('index', [UsuariosController::class, 'index'])->name('index');

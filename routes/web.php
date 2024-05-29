<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\UsuariosController;
use App\Models\Usuarios;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

Route::get('/', [UsuariosController::class, 'login'])->name('login');
//Route::get('/', [UsuariosController::class, 'index'])->name('index');
Route::post('/login', [UsuariosController::class, 'loginIn'])->name('login.post');
//Route::post('/inicio', [UsuariosController::class, 'inicio'])->name('inicio.get');
//Route::post('/inicio', [UsuariosController::class, 'inicio'])->name('inicio.post');
Route::get('/registro', [UsuariosController::class, 'registro'])->name('registro');
Route::post('/registro', [UsuariosController::class, 'create'])->name('registro.post');
Route::get('index', [UsuariosController::class, 'index'])->name('index');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token

    $userExits = Usuarios::where('external_id', $user->id)->where('external_auth','google')->first();

    if($userExits){
        Auth::login($userExits);
    }else{
        $userNew = Usuarios::create([
            'nombre' => $user->name,
            'correo'=> $user->email,
            'external_id'=> $user->id,
            'external_auth'=> 'google',

        ]);
    
        Auth::login($userNew);
    }
    return redirect('/login');
    // $user->token
});


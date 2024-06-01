<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\ReparacionesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VentasController;
use App\Models\Usuarios;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Dotenv\Dotenv;

// routes/web.php

Route::get('/slide', function () {
    return view('index.slide');
});

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

Route::get('/login', [UsuariosController::class, 'login'])->name('login');
Route::post('/login', [UsuariosController::class, 'loginIn'])->name('login.post');
Route::get('/registro', [UsuariosController::class, 'registro'])->name('registro');
Route::post('/registro', [UsuariosController::class, 'create'])->name('registro.post');
Route::get('/', [UsuariosController::class, 'index'])->name('index');
Route::get('/tienda', [VentasController::class, 'index'])->name('tienda');
Route::get('/donaciones', [DonacionesController::class, 'index'])->name('donaciones');
Route::get('/soporteTecnico', [ReparacionesController::class, 'soporte'])->name('soporteTecnico');
Route::get('/preguntas', [UsuariosController::class, 'preguntas'])->name('preguntas');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
})->name('login-google');

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    $userExists = Usuarios::where('external_id', $user->id)->where('external_auth', 'google')->first();

    if ($userExists) {
        Auth::login($userExists);
    } else {
        $userNew = Usuarios::create([
            'nombre' => $user->name,
            'correo' => $user->email,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);

        Auth::login($userNew);
    }
    return redirect('/')->with('success', 'Login con Google exitoso');
})->name('google-callback');

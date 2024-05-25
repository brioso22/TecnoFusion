<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Muestra el formulario de inicio de sesión.
     */
    public function login()
    {
        return view('Usuarios.Login');
    }

    /**
     * Muestra el formulario de registro.
     */
    public function registro()
    {
        return view('Usuarios.Registro');
    }

    /**
     * Crea un nuevo usuario.
     */
    public function create(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // Crear el nuevo usuario
        Usuarios::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
            'password' => bcrypt($request->password), // Asegura la contraseña antes de almacenarla
        ]);
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('registro')->with('success', 'Usuario registrado exitosamente');
    }
}
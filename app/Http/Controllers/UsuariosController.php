<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function login()
    {
        return view('Usuarios.Login');
    }

    public function index()
    {
        return view('index.index');
    }

    public function preguntas()
    {
        return view('preguntas_Frecuentes.preguntasF');
    }

    public function loginIn(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'correo' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        $usuario = Usuarios::where('correo', $request->correo)->first();
        
        if ($usuario && Hash::check($request->password, $usuario->password)) {
            // Iniciar sesión manualmente
            Auth::login($usuario);
            return redirect()->route('index');
        } else {
            // La autenticación falló
            return redirect()->route('login')->with('error', 'Error de usuario o contraseña');
        }
    }

    public function registro()
    {
        return view('Usuarios.Registro');
    }

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
            'password' => Hash::make($request->password), // Asegura la contraseña antes de almacenarla
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('registro')->with('success', 'Usuario registrado exitosamente');
    }
}

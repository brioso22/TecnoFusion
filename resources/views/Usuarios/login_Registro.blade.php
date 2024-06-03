<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('./resours/login.css') }}" rel="stylesheet">

    <style>
body{
    background-image: url('{{ asset("img/bg4.jpg") }}');            
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
    </style>
</head>
<body>

@php
    $url = "login-google";
@endphp

<main>
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>

        <div class="contenedor__login-register">
            <!--Login-->
            <form action="{{ route('login.post') }}" method="POST" class="formulario__login" id="loginForm">
                @csrf
                <h2>Iniciar Sesión</h2>
                <input type="email" placeholder="Correo Electrónico" name="correo" required>
                <input type="password" placeholder="Contraseña" name="password" minlength="8" required>
                <button type="submit">Entrar</button>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="icon-container">
                    <span><i class="fab fa-google" onclick="window.location.href='{{ $url }}'"></i></span>
                    <span><i class="fab fa-microsoft"></i></span>
                    <span><i class="fab fa-apple"></i></span>
                </div>
            </form>

            <!--Register-->
            <form action="{{ route('registro.post') }}" method="POST" class="formulario__register" id="registerForm">
                @csrf
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre" name="nombre" required>
                <input type="text" placeholder="Apellido" name="apellido" required>
                <input type="email" placeholder="Correo Electrónico" name="correo" required>
                <input type="password" placeholder="Contraseña" name="password" minlength="8" required>
                <input type="password" placeholder="Repetir Contraseña" name="password_confirmation" required>
                <button type="submit">Registrarse</button>
                @if ($errors->any())
                    <div style="color: red;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
</main>

<script src="{{ asset('./resours/script.js') }}"></script>

</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>

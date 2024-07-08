<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('./resours/barra.css') }}" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <!--creacion de barra de navegacion posdata: creacion de Marcos, Viva linux XD-->

<div class="nv">
    <nav>
        <img src="{{ asset('img/logo.jpeg') }}" height="50px" width="50px" class="logo">
        <ul class="main-menu">
        <li ><a href="{{ route('index') }}">Home</a></li>
        <li id="locacion"><a href="{{ route('tienda') }}">Tienda</a></li>
        <li ><a href="{{ route('preguntas') }}">Preguntas Frecuentes</a></li>
        <li ><a href="{{ route('donaciones') }}">Donaciones</a></li>
        <li><a href="{{ route('soporteTecnico') }}">Soporte</a></li>
    </ul>
    <ul class="auth-menu">
        <li><a href="{{ route('registro') }}">Sign Up</a></li>
        <li><a href="{{ route('login') }}"><button>Login In</button></a></li>
    </ul>

    </nav>
</div>
</div>

<!--fin de barra de navegacion -->
  
</body>
</html>
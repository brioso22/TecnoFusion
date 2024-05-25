<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

        html, body {
            background-image: url('https://www.xtrafondos.com/wallpapers/retrowave-lineas-montanas-3063.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
            margin: 0;
        }

        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            height: 470px;
            width: 430px;
            background-color: rgba(0, 0, 0, 0.5);
            margin: auto;
        }

        .card-header {
            text-align: center;
            position: relative;
        }

        .card-header h3 {
            color: white;
        }

        .social_icon {
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .social_icon span {
            font-size: 60px;
            margin-left: 10px;
            color: #9032bb;
            cursor: pointer;
            transition: color 0.3s;
        }

        .social_icon span:hover {
            color: white;
        }

        .input-group-prepend span {
            width: 50px;
            background-color: #56008c;
            color: black;
            border: 0;
        }

        input:focus {
            outline: none;
            box-shadow: none;
        }

        .remember {
            color: white;
            display: flex;
            align-items: center;
        }

        .remember input {
            width: 20px;
            height: 20px;
            margin: 0 5px 0 15px;
        }

        .login_btn {
            color: black;
            background-color: #9032bb;
            width: 100px;
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
            text-align: center;
        }

        .links a {
            margin-left: 4px;
        }

        .icon-container {
            display: flex;
            justify-content: flex-start;
            margin-top: 26px;
            white-space: pre;
        }

        .icon-container span {
            font-size: 28px;
            margin: 0 5px;
            color: #555;
            cursor: pointer;
            transition: color 0.3s;
        }

        .icon-container span:hover {
            color: #ff0000;
        }

        .form-group.centered {
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Iniciar Sesión</h3>
                <div class="social_icon d-flex justify-content-end">
                    <!-- Redes sociales si fueran necesarias -->
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Correo" name="correo" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <div class="icon-container">
                        <span><i class="fab fa-google"></i></span>
                        <span><i class="fab fa-microsoft"></i></span>
                        <span><i class="fab fa-apple"></i></span>
                    </div>
                    <br>
                    <div class="remember">
                        <input type="checkbox"> Remember Me
                    </div>
                    <div class="form-group centered">
                        <input type="submit" value="Ingresar" class="btn login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="links">
                    ¿Aun no te has registrado? Pulsa para<a href="{{ route('registro') }}"> Registrarte</a>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider con Dos Imágenes</title>
    <style>
        .slider-frame {
            width: 100%;
            margin: 50px auto;
            overflow: hidden;
            position: relative;
        }
        body {
            margin: 0;
            padding: 0;
            height: 150px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img {
            height: 150px;
            width: auto;
        }
        .slider-frame ul {
            display: flex;
            padding: 0;
            width: 200%;
            animation: slide 15s infinite ease-in-out;
            margin: 0;
        }

        .slider-frame li {
            list-style: none;
            width: 50%;
            flex-shrink: 0;
        }

        .slider-frame img {
            width: 100%;
            display: block;
        }

        @keyframes slide {
            0% { transform: translateX(0); }
            20% { transform: translateX(0); }
            25% { transform: translateX(-50%); }
            45% { transform: translateX(-50%); }
            50% { transform: translateX(-100%); }
            70% { transform: translateX(-100%); }
            75% { transform: translateX(-150%); }
            95% { transform: translateX(-150%); opacity: 1; }
            100% { opacity: 0; transform: translateX(-200%); }
        }
    </style>
</head>
<body>
    <div class="slider-frame">
        <ul>
            <li>
                <img src="{{ asset('img/1.png') }}" alt="Imagen 1">
            </li>
            <li>
                <img src="{{ asset('img/2.png') }}" alt="Imagen 2">
            </li>
            <li>
                <img src="{{ asset('img/3.png') }}" alt="Imagen 3">
            </li>
            <li>
                <img src="{{ asset('img/4.png') }}" alt="Imagen 4">
            </li>
        </ul>
    </div>
</body>
</html>

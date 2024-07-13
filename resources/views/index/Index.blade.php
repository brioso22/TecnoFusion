<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('resours/index.css') }}" rel="stylesheet">
    <link href="{{ asset('resours/barra.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Creación de barra de navegación -->
    <div class="back" style="background-image: url('{{ asset('img/fon.jpeg') }}');">
        <div class="nv">
            <nav>
                <img src="{{ asset('img/logo.jpeg') }}" height="50px" width="50px" class="logo">
                <ul class="main-menu">
                    <li id="locacion"><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('tienda') }}">Tienda</a></li>
                    <li><a href="{{ route('preguntas') }}">Preguntas Frecuentes</a></li>
                    <li><a href="{{ route('donaciones') }}">Donaciones</a></li>
                    <li><a href="{{ route('soporteTecnico') }}">Soporte</a></li>
                </ul>
                <ul class="auth-menu">
                    <li><a href="{{ route('registro') }}">Sign Up</a></li>
                    <li><a href="{{ route('login') }}"><button>Log In</button></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Fin de barra de navegación -->

    <!-- Creación de cuadros con opciones -->
    <center><h1>TECNOFUSION 360 TE OFRECE</h1></center>
    <div class="opciones">
        <div class="div1">
            <center><h3>¿Quienes somos?</h3></center>
            <p>
                <center class="texto">
                    Somos una empresa que tiene como objetivo proponer alternativas sustentables en la reutilización de hardware aparentemente antiguo para algunos estándares pero factible para otros en base a las necesidades de usuarios.
                </center>
            </p>
            <br>
            <center>
                <a href="#Quienes">
                    <button class="arrow-button">IR</button>
                </a>
            </center>
        </div>

        <div class="div2">
            <center><h3>Sobre los productos</h3></center>
            <p>
                <center class="texto">
                    Contamos con una amplia variedad de opciones como lo son: microprocesadores, case, motherboard, periféricos y muchos más, todos diseñados para satisfacer las diversas necesidades tecnológicas.
                </center>
            </p>
            <br>
            <center>
                <a href="#sobrepro">
                    <button class="arrow-button">IR</button>
                </a>
            </center>
        </div>

        <div class="div3">
            <center><h3>Donde encontrarnos</h3></center>
            <p>
                <center class="texto">
                    ¿Deseas buscar un lugar dónde adquirir los equipos en físico? Tecnofusion cuenta con sedes en diversas partes del país, con gusto te indicaremos los puntos más cercanos y convenientes a tu localidad.
                </center>
            </p>
            <br>
            <center>
                <a href="#dondeEn">
                    <button class="arrow-button">IR</button>
                </a>
            </center>
        </div>

        <div class="div4">
            <center><h3>¿App móvil?</h3></center>
            <p>
                <center class="texto">
                    ¿Estás más cómodo en una plataforma móvil? Tecnofusion también piensa en ti. Contamos con una app móvil en desarrollo que tendrá como objetivo mostrarte las características de la tienda de hardware.
                </center>
            </p>
            <br>
            <center>
                <a href="#appM">
                    <button class="arrow-button">IR</button>
                </a>
            </center>
        </div>
    </div>
    <!-- Fin de cuadros de opciones -->

    <br><br><br>

    <center><h1 id="Quienes">¿Quienes Somos?</h1></center>
    <br>
    <div class="TextoDeOpciones1">
        <img src="{{ asset('img/pc1.jpeg') }}" class="imgLapton">
        <div class="c">
            <h2>Tecnofusion 360</h2>
            <div>
                Somos una empresa especializada en el reacondicionamiento de hardware y software. Nuestro objetivo principal es promover la reutilización de hardware de segunda mano, ofreciendo soluciones tecnológicas de alta calidad a costos accesibles y óptimos para nuestros clientes. Nos dedicamos a prolongar la vida útil de los dispositivos electrónicos, brindando alternativas económicas sin comprometer el rendimiento ni la fiabilidad. Además, nos esforzamos por mantener altos estándares de calidad en todos nuestros productos, garantizando que cada cliente reciba el mejor valor posible por su inversión. Con un fuerte compromiso con la sostenibilidad, trabajamos para reducir el desperdicio electrónico y contribuir a un futuro más verde.
            </div>
        </div>
    </div>

    <br><br><br>

    <center><h1 id="sobrepro">Sobre los productos</h1></center>
    <br>
    <div class="TextoDeOpciones2">
        <div class="c2">
            <h2>Tecnofusion 360</h2>
            <br>
            <div>
                Somos una empresa especializada en el reacondicionamiento de equipos de hardware y software, comprometida con la reutilización y la sostenibilidad. Obtendremos nuestros equipos principalmente de empresas que actualizan su tecnología o realizan renovaciones de parque informático. Nuestro objetivo es extender la vida útil de estos equipos mediante procesos rigurosos de restauración y actualización, asegurando que funcionen como nuevos y ofreciendo alternativas accesibles y de alta calidad a nuestros clientes. Aspiramos a reducir el desperdicio electrónico y a contribuir a un futuro más sostenible, proporcionando soluciones tecnológicas confiables y económicas.
            </div>
        </div>
        <img src="{{ asset('img/pcs.jpeg') }}" class="imgLapton">
    </div>

    <br><br>

    <div class="cuadrosContinert">
        <div class="cuadro">
            <h2 id="dondeEn">¿Donde encontrarnos?</h2>
            <br><br>
            <img src="{{ asset('img/map.jpeg') }}" alt="" class="imgGP">
            <br><br>
            <center><p>Puedes pulsar el siguiente botón para visualizar la ubicación de nuestras sucursales.</p></center>
            <br>
            <button class="bMP">IR</button>
        </div>

        <div class="cuadro">
            <h2 id="appM">¿App móvil?</h2>
            <br><br>
            <img src="{{ asset('img/android.jpeg') }}" alt="" class="imgAP">
            <br><br><br>
            <center><p>Contamos con una app móvil en desarrollo para personalizar su uso así que no te pierdas de la experiencia de uso confiable.</p></center>
            <br>
            <button class="bMP">IR</button>
        </div>
    </div>

    <br><br><br>

    <!-- Footer -->
    <footer>
        <div class="RedesContainer">
            <div class="R">
                <a href="#">
                    <div class="layer">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="icon">
                            <i><img src="{{ asset('img/f.png') }}" class="iconsInt" /></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="R">
                <a href="#">
                    <div class="layer">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="icon">
                            <center><i><img src="{{ asset('img/i.png') }}" class="iconsInt" /></i></center>
                        </div>
                    </div>
                </a>
            </div>
            <div class="R">
                <a href="#">
                    <div class="layer">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="icon">
                            <img src="{{ asset('img/x.png') }}" class="iconsInt" />
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </footer>
    <!-- Fin del footer -->
</body>
</html>

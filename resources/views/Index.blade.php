<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])
  <title>TecnoFusion 360</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #005C53;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px 0;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo h1 {
      margin: 0;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    nav ul li {
      margin: 0 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    .auth-buttons button {
      background-color: #9032bb;
      border: none;
      color: #fff;
      padding: 10px 20px;
      margin-left: 10px;
      cursor: pointer;
      border-radius: 5px;
    }

    .auth-buttons button:hover {
      background-color: #751e99;
    }

    .hero {
      background: url('https://img.freepik.com/foto-gratis/configuracion-juegos-angulo-alto-interiores_23-2149829123.jpg?size=626&ext=jpg&ga=GA1.1.1788068356.1716508800&semt=ais_user') no-repeat center center/cover;
      color: #fff;
      text-align: left;
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: flex-start;
      padding-top: 50px;
    }

    .hero .overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero .content {
      position: relative;
      z-index: 1;
      max-width: 600px;
      margin-left: 5%;
    }

    .hero h2 {
      font-size: 3em;
      margin: 0 0 20px 0;
      text-align: center;
    }

    .hero p {
      font-size: 1.2em;
      margin: 0 0 20px 0;
    }

    .hero button {
      background-color: #9032bb;
      border: none;
      color: #fff;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
    }

    .hero button:hover {
      background-color: #9032bb;
    }
  </style>
</head>
<body>
  <div id="app">
    <barra-nav 
      login-url="{{ route('login') }}" 
      register-url="{{ route('registro') }}"
      index="{{ route('index') }}"
      tienda="{{ route('tienda') }}"
      preguntas-f="{{ route('preguntas') }}"
      donaciones="{{ route('donaciones') }}"
      soporte="{{ route('soporteTecnico') }}"

    ></barra-nav>
  </div>

  <script type="module" src="{{ mix('js/app.js') }}"></script>
  <section class="hero">
    <div class="overlay"></div>
    <div class="content">
      <h2>TECNOFUSION 360</h2>
      <p>Somos una empresa comprometida con la excelencia en tecnología. Nuestra misión es proporcionarte la mejor calidad de hardware a precios accesibles, todo al alcance de un clic. En TecnoFusion360, comprendemos tus necesidades tecnológicas y nos esforzamos por ofrecerte soluciones innovadoras que impulsen tu productividad y creatividad.</p>
      <button onclick="location.href='#'">Conócenos</button>
    </div>
  </section>
</body>
</html>

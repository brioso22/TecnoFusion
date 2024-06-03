<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])
  <title>TecnoFusion 360</title>
  <link href="{{ asset('./resours/index.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">

    <barra-nav 
      login-url="{{ route('login') }}" 
      index="{{ route('index') }}"
      tienda="{{ route('tienda') }}"
      preguntas-f="{{ route('preguntas') }}"
      donaciones="{{ route('donaciones') }}"
      soporte="{{ route('soporteTecnico') }}"
    ></barra-nav>
  </div>
  <div>
  <iframe src="{{ url('/slide') }}" width="100%" height="150px" frameborder="1" ></iframe>
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

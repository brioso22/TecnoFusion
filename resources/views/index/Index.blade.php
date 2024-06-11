<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])
  <title>TecnoFusion 360</title>
  <link href="{{ asset('./resours/index.css') }}" rel="stylesheet">
  <style>
    .hero {
      position: relative;
      text-align: center;
      color: white;
      background: url('{{ asset("img/hero-background.jpg") }}') no-repeat center center;
      background-size: cover;
      padding: 50px 20px;
    }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }
    .content {
      position: relative;
      z-index: 2;
      padding: 20px;
    }
    .hero img {
      max-width: 100%;
      height: auto;
      margin: 0 auto;
      display: block;
    }
    .hero button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      font-size: 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease, transform 200ms ease-in-out;
    }
    .hero button:hover {
      background-color: #0056b3;
    }
    .hero button:active {
      transform: scale(0.95);
    }
    .section-content {
      
      max-width: 200dvb;
      margin: 0 auto;
      padding: 2px;
      text-align: left;
      color: white;
      border: 1px solid white;

    }
    .section-content h2 {
      font-size: 2em;
      margin-bottom: 10px;
    }
    .section-content p {
      font-size: 1.2em;
      line-height: 1.6;

    }
    .section-content div{
      border: 1px solid white;

    }
  </style>
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
    
    <div>
      <iframe src="{{ url('/slide') }}" width="100%" height="150px" frameborder="1"></iframe>
    </div>
    
    <script type="module" src="{{ mix('js/app.js') }}"></script>
    <section class="hero">
      <div class="overlay"></div>
      <div class="content">
        <h2>TECNOFUSION 360</h2>
        <p>Somos una empresa comprometida con la excelencia en tecnología. Nuestra misión es proporcionarte la mejor calidad de hardware a precios accesibles, todo al alcance de un clic. En TecnoFusion360, comprendemos tus necesidades tecnológicas y nos esforzamos por ofrecerte soluciones innovadoras que impulsen tu productividad y creatividad.</p>
        <button onclick="location.href='#section-content'">Conócenos</button>
      </div>
      <br><br>
      <img src="{{ asset('img/logo.png') }}" alt="Imagen 4">
    </section>
    <section class="section-content" id="section-content">
      <div>
            <h2>Nuestra Misión</h2>
      <p>Nuestra misión es clara y ambiciosa: ofrecerte productos de alta calidad que satisfagan todas tus necesidades tecnológicas. Creemos firmemente que cada persona y cada negocio merece tener acceso a herramientas que impulsen su productividad y creatividad sin tener que comprometer su presupuesto.</p>
        
      </div>
<div>
        <h2>Lo que Nos Define</h2>
      <p>En <strong>TecnoFusion 360</strong>, comprendemos la importancia de la tecnología en el mundo moderno. No solo vendemos hardware, sino que también ofrecemos soluciones completas diseñadas para mejorar tu vida cotidiana y profesional. Nos esforzamos por mantenernos a la vanguardia de las innovaciones tecnológicas para asegurarnos de que nuestros clientes siempre tengan acceso a los últimos avances.</p>
      
</div>
<div>
  <h2>Nuestras Soluciones</h2>
      <p><strong>Calidad Superior:</strong> Todos nuestros productos pasan por rigurosos controles de calidad para asegurar que solo recibas lo mejor.</p>
      <p><strong>Precios Accesibles:</strong> Creemos que la excelencia no debe ser costosa. Por eso, trabajamos arduamente para ofrecerte precios competitivos sin sacrificar la calidad.</p>
      <p><strong>Accesibilidad:</strong> Con nuestra plataforma en línea, hacer tus compras es tan fácil como un clic. Navega, compara y adquiere los productos que necesitas desde la comodidad de tu hogar o oficina.</p>
      
</div>
<div>
 <h2>Compromiso con Nuestros Clientes</h2>
      <p>Tu satisfacción es nuestra prioridad. Nos enorgullece ofrecer un servicio al cliente excepcional, asesoría personalizada y soporte técnico especializado para que siempre tengas la ayuda que necesitas cuando la necesites.</p>
       
</div>
<div>
  <h2>Únete a la Revolución Tecnológica</h2>
      <p>En <strong>TecnoFusion 360</strong>, no solo vendemos tecnología, sino que también creamos una comunidad de innovadores y creadores. Te invitamos a unirte a nosotros en este emocionante viaje hacia un futuro más brillante y tecnológicamente avanzado.</p>
       
</div>
      
      <div>
           <p>Gracias por elegir <strong>TecnoFusion 360</strong>. Juntos, impulsamos tu productividad y creatividad al siguiente nivel.</p>
   
      </div>
    </section>
    <br>

    <footer>
      <social-icons></social-icons>
    </footer>
  </div>
</body>
</html>

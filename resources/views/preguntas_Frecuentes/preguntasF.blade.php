<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('./resours/preguntasF.css') }}" rel="stylesheet">

    @vite(['resources/js/app.js'])
    <title>Document</title>
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

<br>

<div id="busqueda">

<center id="p"> ¿EN QUÉ PODEMOS AYUDARTE? </center>
<br>
<br>

<div id="barra">
<form action="" method="get">
  <input type="text" placeholder="Buscar...." name="Buscar">
  <button class="Buscar" >Buscar</button>
</form>
</div>
</div>
<br>


<div id="lista">
  <section class="faq-section">
    <h2><center>Preguntas Frecuentes</center></h2>

    <div class="faq">
      <h3>¿Qué es Tecnofusion 360?</h3>
      <p>Tecnofusion 360 es una tienda especializada en la venta de hardware reacondicionado de alta calidad, ofreciendo productos a precios competitivos.</p>
    </div>

    <div class="faq">
      <h3>¿Qué significa que un producto esté reacondicionado?</h3>
      <p>Un producto reacondicionado es un artículo que ha sido devuelto, reparado y probado para asegurarse de que cumple con los estándares de calidad antes de volver a ser vendido.</p>
    </div>

    <div class="faq">
      <h3>¿Los productos reacondicionados tienen garantía?</h3>
      <p>Sí, todos nuestros productos reacondicionados vienen con una garantía que varía según el tipo de producto. Por favor, revisa los detalles específicos en la página del producto.</p>
    </div>

    <div class="faq">
      <h3>¿Cómo puedo realizar una compra?</h3>
      <p>Puedes realizar una compra directamente a través de nuestro sitio web, añadiendo los productos que desees al carrito y siguiendo el proceso de pago.</p>
    </div>

    <div class="faq">
      <h3>¿Cuáles son las opciones de envío?</h3>
      <p>Ofrecemos varias opciones de envío, incluyendo envío estándar y exprés. Los tiempos y costos de envío varían según tu ubicación.</p>
    </div>

    <div class="faq">
      <h3>¿Cómo puedo contactar con el servicio al cliente?</h3>
      <p>Puedes contactarnos a través de nuestra página de contacto en el sitio web, enviando un correo electrónico a soporte@tecnofusion360.com, o llamando al número de atención al cliente.</p>
    </div>
  </section>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const faqs = document.querySelectorAll(".faq h3");
    faqs.forEach(faq => {
      faq.addEventListener("click", function() {
        const answer = this.nextElementSibling;
        if (answer.style.display === "block") {
          answer.style.display = "none";
        } else {
          answer.style.display = "block";
        }
      });
    });
  });

  function searchFAQs() {
    const input = document.getElementById('search-input');
    const filter = input.value.toLowerCase();
    const faqs = document.querySelectorAll('.faq');

    faqs.forEach(faq => {
      const question = faq.querySelector('h3').textContent.toLowerCase();
      const answer = faq.querySelector('p').textContent.toLowerCase();

      if (question.includes(filter) || answer.includes(filter)) {
        faq.style.display = '';
      } else {
        faq.style.display = 'none';
      }
    });
  }
</script>


</body>
</html>
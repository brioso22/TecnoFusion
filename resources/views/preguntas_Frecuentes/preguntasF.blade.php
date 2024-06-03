<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body{
    background-color: #005C53;
  }
  #p{
    font-size: 8dvb;
    color:white;
  }
  #barra{
    display: flex;
    justify-content: center;
  }
  input[type="text"] {

    width: 700px;
  height: 45px;
  padding: 10px;
  border-radius: 10px;
  box-sizing: border-box;
  
  }
#lista{

  background-color: #333;
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border-radius: 10px;
    color:white;
}
#busqueda{
    height: 400px;
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border-radius: 10px;
}

  .Buscar{

    height: 45px;
    width: 110px;
    padding: 10px;
    box-sizing: border-box;
    border-radius: 10px;
    background-color: #333;
    color: white;
    font-weight: bold;
  }


  .search-container {
  max-width: 800px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.search-box {
  display: flex;
  margin-bottom: 20px;
}

.search-box input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px 0 0 5px;
  outline: none;
}

.search-box button {
  padding: 10px 20px;
  border: none;
  background-color: #005C53;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
}


.faq-section {
  max-width: 800px;
  margin: 0 auto;
  padding: 10px;
}

.faq-section h2 {
  margin-bottom: 10px;
}

.faq {
  margin-bottom: 10px;
}

.faq h3 {
  margin: 0;
  cursor: pointer;
  background-color: #333;
  color: #fff;
  padding: 10px;
  border-radius: 2px;
}

.faq p {
  display: none;
  margin-top: 5px;
  background-color: #fff;
  color: #000;
  padding: 10px;
  border: 2px solid #000;
  border-radius: 0;
  width: 100%;
  height: 100px;
  box-sizing: border-box;
}
  
</style>


    @vite(['resources/js/app.js'])
    <title>Document</title>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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



    
</body>
</html>
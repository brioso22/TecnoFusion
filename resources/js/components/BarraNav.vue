<template>
    <header>
      <div class="container">
        <div class="logo">
          <h1>TF 360</h1>
        </div>
        <nav>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Tienda</a></li>
            <li><a href="#">Preguntas Frecuentes</a></li>
            <li><a href="#">Donaciones</a></li>
            <li><a href="#">Soporte Técnico</a></li>
          </ul>
        </nav>
        <div class="auth-buttons">
          <button @click="redirectTo(loginUrl)">Iniciar Sesión</button>
          <button @click="redirectTo(registerUrl)">Registro</button>
        </div>
      </div>
    </header>
  </template>
  
  <script>
  export default {
    name: 'BarraNav',
    props: {
      loginUrl: {
        type: String,
        required: true,
      },
      registerUrl: {
        type: String,
        required: true,
      },
    },
    methods: {
      redirectTo(url) {
        window.location.href = url;
      },
    },
  };
  </script>
  
  <style scoped>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #9032bb; /* Color de fondo agregado */
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
  </style>
  
<template>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <header>
    <div class="container">
      <div class="logo">
        <h1>TF 360</h1>
      </div>
      <nav>
        <ul>
          <li @mouseover="showTooltip('Página de inicio', $event)" @mouseout="hideTooltip">
            <a href="#" @click="redirectTo(index)">Inicio</a>
          </li>
          <li @mouseover="showTooltip('Visita nuestra tienda con promociones y productos inigualables', $event)" @mouseout="hideTooltip">
            <a href="#" @click="redirectTo(tienda)">Tienda</a>
          </li>
          <li @mouseover="showTooltip('Consulta tus dudas recurrentes en la sección de preguntas frecuentes', $event)" @mouseout="hideTooltip">
            <a href="#" @click="redirectTo(preguntasF)">Preguntas Frecuentes</a>
          </li>
          <li @mouseover="showTooltip('¿Tienes hardware que ya no necesites? Haz una donación en nuestra sección especial', $event)" @mouseout="hideTooltip">
            <a href="#" @click="redirectTo(donaciones)">Donaciones</a>
          </li>
          <li @mouseover="showTooltip('Obtén soporte técnico para todos tus equipos', $event)" @mouseout="hideTooltip">
            <a href="#" @click="redirectTo(soporte)">Soporte Técnico</a>
          </li>
        </ul>
      </nav>
      <div class="auth-buttons">
        <button @click="redirectTo(loginUrl)" @mouseover="showTooltip('Inicia sesión', $event)" @mouseout="hideTooltip">Ingresar</button>
      </div>
      <div>
        <img src="./assets/ava.png" class="avatar">
      </div>
    </div>
    <span class="tooltip" v-if="tooltipVisible" :style="{ top: tooltipY + 'px', left: tooltipX + 'px' }">{{ tooltipText }}</span>
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
 
    index: {
      type: String,
      required: true,
    },
    tienda: {
      type: String,
      required: true,
    },
    preguntasF: {
      type: String,
      required: true,
    },
    donaciones: {
      type: String,
      required: true,
    },
    soporte: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      tooltipText: '',
      tooltipVisible: false,
      tooltipX: 0,
      tooltipY: 0,
    };
  },
  methods: {
    redirectTo(url) {
      window.location.href = url;
    },
    showTooltip(text, event) {
      this.tooltipText = text;
      this.tooltipVisible = true;
      this.tooltipX = event.clientX + 10; // offset to avoid mouse cursor overlap
      this.tooltipY = event.clientY + 10;
    },
    hideTooltip() {
      this.tooltipVisible = false;
    },
  },
};
</script>

<style scoped>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #9032bb;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 10px 0;
  position: relative;
  width: 100%;
}

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 10px;
  flex-wrap: nowrap;
}

.logo h1 {
  margin: 0;
  font-size: calc(1em + 1vw);
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}

nav ul li {
  margin: 0 10px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  font-size: calc(0.5em + 0.5vw);
}

.auth-buttons {
  display: flex;
}

.auth-buttons button {
  background-color: #46A2FD;
  border: none;
  color: #fff;
  padding: calc(0.5px + 0.5vw) calc(8px + 1vw);
  margin-left: 5px;
  cursor: pointer;
  border-radius: 5px;
  font-size: calc(0.6em + 0.5vw);
  font-weight: 300;
  font-weight: bold;
}

.auth-buttons button:hover {
  background-color: #fffafa;
  color: #46A2FD;
  transition: color 1s;
}

.avatar {
  width: calc(50px + 0.5vw);
  height: calc(50px + 0.5vw);
}

a:hover, button:hover {
  color: #4CAF50;
  transition: color 1s;
}

.tooltip {
  display: inline-block;
  position: fixed;
  background-color: #333;
  color: #fff;
  padding: 5px 10px;
  border-radius: 5px;
  white-space: nowrap;
  z-index: 1000;
  font-size: 12px;
}
</style>

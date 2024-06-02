<template>
  <header>
    <div class="container">
      <div class="logo">
        <h1>TF 360</h1>
      </div>
      <nav>
        <ul>
          <li @mouseover="showTooltip('Página de incio', $event)" @mouseout="hideTooltip">
            <a href="#" @click="redirectTo(index)">Inicio</a>
          </li>
          <li @mouseover="showTooltip('Visita nuestra tienda con promociones y productos inigualables', $event)" @mouseout="hideTooltip">
            <a href="#" @click="redirectTo(tienda)">Tienda</a>
          </li>
          <li @mouseover="showTooltip('Consulta tu dudades recurrentes en la seccion de preguntas frecuentes', $event)" @mouseout="hideTooltip">
            <a href="#" @click="redirectTo(preguntasF)">Preguntas Frecuentes</a>
          </li>
          <li @mouseover="showTooltip('¿Tienes harware que ya no necesites? Haz una donación en nuestra seccion especial', $event)" @mouseout="hideTooltip">
            <a href="#" @click="redirectTo(donaciones)">Donaciones</a>
          </li>
          <li @mouseover="showTooltip('Obtén soporte técnico para todos tus equipos', $event)" @mouseout="hideTooltip">
            <a href="#" @click="redirectTo(soporte)">Soporte Técnico</a>
          </li>
        </ul>
      </nav>
      <div class="auth-buttons">
        <button @click="redirectTo(loginUrl)" @mouseover="showTooltip('Inicia sesión', $event)" @mouseout="hideTooltip">Iniciar Sesión</button>
        <button @click="redirectTo(registerUrl)" @mouseover="showTooltip('Regístrate', $event)" @mouseout="hideTooltip">Registro</button>
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
    registerUrl: {
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
  height: 150px;
  overflow: hidden;
}

header {
  background-color: #333;
  color: #fff;
  padding: 10px 0;
  position: relative;
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
  position: relative;
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
  font-size: 2.5dvb;
}
</style>

import './bootstrap';
import { createApp } from 'vue';
import BarraNav from './components/BarraNav.vue';

createApp({
  components: {
    'barra-nav': BarraNav,
  },
}).mount('#app');

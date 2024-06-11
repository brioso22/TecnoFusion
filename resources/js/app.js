import './bootstrap';
import { createApp } from 'vue';
import BarraNav from './components/BarraNav.vue';
import SocialIcons from './components/SocialIcons.vue';

const app = createApp({
  components: {
    'barra-nav': BarraNav,
    'social-icons': SocialIcons,
  },
});
app.mount('#app');

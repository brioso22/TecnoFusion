import './bootstrap';
import {createApp} from 'vue';
import BarraNav from './components/BarraNav.vue'


const app = createApp(BarraNav);
app.component("BarraNav-component",BarraNav);
app.mount("#app");
import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler.js";
import '../css/app.scss';
import GoogleMap from './components/GoogleMap.vue';

const app = createApp({
    components: {
        GoogleMap
    }
});
app.mount('#app');

import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler.js";
import '../css/app.scss';
import GoogleMap from './components/GoogleMap.vue';
import BookCard from "./components/BookCard.vue";

const app = createApp({
    components: {
        GoogleMap,
        BookCard
    }
});
app.mount('#app');

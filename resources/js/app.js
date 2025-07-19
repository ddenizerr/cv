import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler.js";
import '../css/app.scss';
import GoogleMap from './components/GoogleMap.vue';
import BookCard from "./components/BookCard.vue";
import Experience from "./components/Experience.vue";
import BookACall from "./components/BookACall.vue";
import Socials from "./components/Socials.vue";

const app = createApp({
    components: {
        GoogleMap,
        BookCard,
        Experience,
        BookACall,
        Socials
    }
});
app.mount('#app');

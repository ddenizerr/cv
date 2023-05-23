import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler.js";
import ProjectsIndex from "./components/projects/ProjectsIndex.vue";
import MainModal from "./components/MainModal.vue";


const app = createApp({
    components: {
        MainModal,
        ProjectsIndex,
    }
});
app.mount('#app');

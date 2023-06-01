import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler.js";
import ProjectsIndex from "./components/dashboard/projects/ProjectsIndex.vue";
import MainModal from "./components/MainModal.vue";
import Index from "./components/app/Index.vue";

const app = createApp({
    components: {
        MainModal,
        ProjectsIndex,
        Index,
    }
});
app.mount('#app');

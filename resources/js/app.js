import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler.js";
import ProjectsIndex from "./components/dashboard/projects/ProjectsIndex.vue";
import MainModal from "./components/MainModal.vue";
import Projects from "./components/app/Projects.vue";

const app = createApp({
    components: {
        MainModal,
        ProjectsIndex,
        Projects,
    }
});
app.mount('#app');

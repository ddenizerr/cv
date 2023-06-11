<template>
    <div class="col-lg-12" v-for="(project,index) in projects">
        <a class="text-decoration-none" @click="">
            <div class="block bg-aqua">
                <div class="block-body p-1 d-flex align-content-center">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-xs-12">
                            <h4 class="block-title font-cinzel"> {{ project.title }} <span class="badge bg-guiness-yellow font-noto">Under Construction</span> <p class="block-details text-muted font-noto"> {{ project.type }}</p></h4>
                            <p class="block-text font-noto">{{ project.description }}</p>
                        </div>
                        <div class="col-lg-6 col-xl-6 col-xs-12">
                            <img class="block-project-image" src="/images/scales.png" alt="scales">
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            projects: {},
        }
    },
    methods: {
        fetchProjects() {
            axios.get('/projects/fetch').then(response => {
                this.projects = response.data.projects;
            });
        }
    },
    mounted() {
        this.fetchProjects();
    }
}
</script>

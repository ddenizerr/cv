<template>
        <div class="col-md-12" v-for="(project,index) in projects">
            <a href="" style="text-decoration: none;" @click="">
                <div class="card" >
                    <img class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{project.title}}</h5>
                        <p class="card-text">{{
                                project.description
                            }}</p>
                        <a href="#" class="btn btn-primary">{{project.type}}</a>
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

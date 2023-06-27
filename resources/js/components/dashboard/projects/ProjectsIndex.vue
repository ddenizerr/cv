<template>
    <h1 class="text-moss">Projects</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>

        <tr v-for="(project,index) in projects">
            <th>{{ project.title }}</th>
            <td>{{ project.description }}</td>
            <td>{{ project.type }}</td>
            <td>
                <button type="button" class="btn bg-teal text-white" @click="showModal(project);">
                    Edit
                </button>
                <button class="btn bg-raspberry text-white" @click="deleteProject(project)">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
    <main-modal v-if="selectedProject" :selected-project="selectedProject"></main-modal>
</template>
<script>
import mainModal from "../../MainModal.vue";
import axios from "axios";

export default {
    components: {mainModal},
    data() {
        return {
            selectedProject: null,
            projects: {},
        }
    },
    methods: {
        showModal(project) {
            this.selectedProject = project;
        },
        deleteProject(project) {
            axios.delete('/projects/' + project.id + '/delete').then(function (response) {
            }).catch(function (error) {
            });
            this.fetchProjects();
        },
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

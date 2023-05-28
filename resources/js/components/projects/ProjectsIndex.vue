<template>
    <h1>projeler gardas</h1>

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
                <button type="button" class="btn btn-primary" @click="showModal(project);">
                    Edit
                </button>
                <button class="btn btn-danger"> Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
    <main-modal v-if="selectedProject" :selected-project="selectedProject"></main-modal>
</template>
<script>
import mainModal from "../MainModal.vue";

export default {
    components: {mainModal},
    props: ['projects'],
    data() {
        return {
            selectedProject:null,
        }
    },
    methods: {
        showModal(project) {
            this.selectedProject = project;
        }

    }
}
</script>

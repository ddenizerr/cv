<template>
    <div class="modal fade" id="projectInfoModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="projectInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="projectInfoModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text">
                </div>
                <div class="modal-footer">
                    <button @click="closeModal()" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button @click="" type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

import axios from 'axios';

export default {
    props: ['project'],
    data() {
        return {
        }
    },
    methods: {
        update() {
            // axios.patch('/projects/update', {
            //     data: this.project,
            // })
        },
        closeModal(){
            this.$parent.showModal = false;
        }
    },
    mounted() {
        this.myModal = new bootstrap.Modal(document.getElementById('projectInfoModal'));
        this.myModal.show();
    }

}
</script>


<style scoped>

</style>

<template>
    <div class="modal fade" id="projectInfoModal" data-bs-backdrop="static" tabindex="-1"
         aria-labelledby="projectInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-moss" id="projectInfoModalLabel">{{selectedProject.title}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-2 p-1">
                            <label class="text-moss" for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Title"
                                   v-model="selectedProject.title">
                        </div>
                        <div class="form-group col-md-12 mb-2 p-1">
                            <label class="text-moss" for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Description"
                                      v-model="selectedProject.description"> </textarea>
                        </div>
                        <div class="form-group col-md-12 mb-2 p-1">
                            <label class="text-moss" for="project-type">Project Type</label>
                            <input name="type" class="form-control" id="project-type" placeholder="Type of project"
                                   v-model="selectedProject.type">
                        </div>
                        <div class="form-group col-md-12 mb-2 p-1">
                            <label class="text-moss" for="project-type">Project Image</label>
                            <input type="file" name="file" class="form-control" id="project-image" accept=".jpeg, .png, .jpg" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button @click="closeModal()" type="button" class="btn bg-moss text-white" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button @click="update()" type="button" class="btn bg-teal text-white">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

import axios from 'axios';

export default {
    props: {
        selectedProject: {
            type: Object,
            required: true,
            validator(value) {
                return value.title != null;
            }
        }
    },
    data() {
        return {}
    },
    methods: {
        update() {
            axios.patch('/projects/' + this.selectedProject.id + '/update', {
                title: this.selectedProject.title,
                description: this.selectedProject.description,
                type: this.selectedProject.type,
                image_path:this.selectedProject.image_path,
            }).then(response => {
                this.$parent.fetchProject();
            }).catch(error => {
                console.log(error);
            });
            this.closeModal();

        },
        closeModal() {
            this.$parent.selectedProject = null;
            this.myModal.hide();
        }
    },
    mounted() {
        this.myModal = new bootstrap.Modal(document.getElementById('projectInfoModal'));
        this.myModal.show();
    }

}
</script>

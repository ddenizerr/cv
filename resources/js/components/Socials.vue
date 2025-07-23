<script setup lang="ts">

</script>

<template>
    <div class=" card align-items-center">
        <a href="https://www.linkedin.com/in/ddenizer" target="_blank" class="text-decoration-none common linkedin">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/ddenizerr" target="_blank" class="text-decoration-none common github">
            <i class="fab fa-github"></i>
        </a>
        <a href="https://www.bloodlink.info" target="_blank" class="text-decoration-none common bloodlink">
            <i class="fa-solid fa-droplet"></i>
        </a>
        <a href="https://www.cypropoly.com" target="_blank" class="text-decoration-none common cypropoly">
            <i class="fa-solid fa-dice"></i>
        </a>

    </div>
</template>

<style scoped>
.card {
    display: flex;
    flex-direction: row;
    align-items: center;
    background-color: white;
    padding: 1.5rem;
    border-radius: 12px;
    gap:  1rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    max-height:  7rem;
}

.common{
    color: #7c3aed;
    font-size: 2rem;
}
.bloodlink:hover{
    color: red;
}

.github:hover{
    color: dodgerblue;
}

.cypropoly:hover{
    color: lightseagreen;
}

.linkedin:hover{
    color: purple;
}
</style>

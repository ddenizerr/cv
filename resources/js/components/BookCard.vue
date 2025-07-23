<script setup>

</script>

<template>
    <div class="book-card">
        <h2 class="title">The Pragmatic Programmer</h2>
        <p class="author">Andrew Hunt & David Thomas</p>

       <div class="book-wrapper">
           <img
               class="cover"
               src="/images/pragmatic-programmer.jpg"
               alt="Book cover: The Pragmatic Programmer"
           />
       </div>

    </div>
</template>

<style scoped>
.book-card {
    border-radius: 16px;
    background-color: white;
    padding: 1rem;
    width: 100%;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    font-family: system-ui, sans-serif;
}

.book-label {
    position: absolute;
    top: 10px;
    left: 10px;
    background: white;
    color: #7D62F4;
    font-weight: bold;
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 0.9rem;
    z-index: auto;
}

.title {
    font-size: 18px;
    font-weight: bold;
    color: rgb(117, 92, 225);
    line-height: 1.3;
    margin: 0 0 4px;
}

.author {
    font-size: 14px;
    color: rgb(112, 90, 215);
    margin-bottom: 16px;
}

.cover {
    width: 100%;
    border-radius: 12px;
    object-fit: cover;
}
</style>

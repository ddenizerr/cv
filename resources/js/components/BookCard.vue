<script setup>

</script>

<template>
    <div class="book-card">
        <p class="book-card-label">What I'm studying</p>
        <h2 class="title">The Pragmatic<br />Programmer</h2>
        <p class="author">Andrew Hunt & David Thomas</p>
        <img
            class="cover"
            src="/images/pragmatic-programmer.jpg"
            alt="Book cover: The Pragmatic Programmer"
        />
    </div>
</template>

<style scoped>
.book-card {
    border-radius: 16px;
    background-color: #f9f9f9;
    padding: 1rem;
    width: 280px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    font-family: system-ui, sans-serif;
}

.book-card-label {
    background-color: #faf8f8;
    color: #795fea;
    font-size: 12px;
    font-weight: bold;
    padding: 6px 12px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.10);
    display: inline-block;
    margin-bottom: 12px;
    border: 1px solid #e0d4f7;
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

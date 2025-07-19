<script setup lang="ts">

</script>

<template>
  <div class="book-call-container">
    <button class="book-call-button">Book a call</button>
    <p class="book-call-text">Feel free to explore my portfolio and reach out — I’d love to connect!</p>
  </div>
</template>

<style scoped>
.book-call-container {
  display: flex;
  align-items: center;
  gap: 1rem;
  background-color: white;
  padding: 1.5rem;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
  max-width: 700px;
  margin: 2rem auto;
}

.book-call-button {
  background-color: #795fea;
  color: white;
  border: none;
  padding: 0.75rem 1.5rem;
  border-radius: 9999px;
  font-weight: 600;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.book-call-button:hover {
  background-color: #333;
}

.book-call-text {
  font-size: 1rem;
  font-weight: 500;
  color: #333;
  max-width: 400px;
}
</style>

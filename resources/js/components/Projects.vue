<script setup lang="ts">

</script>

<template>
  <div class="projects-card">
    <section class="side-projects">
      <h2 class="section-title">Side Projects</h2>
      <div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card p-3">
              <h3 class="project-title">BloodLink</h3>
              <p class="project-desc">A cross-platform app connecting blood donors and recipients across Cyprus and Ireland, built with React Native and Symfony 7 backend.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card p-3">
              <h3 class="project-title">Cypropoly</h3>
              <p class="project-desc">A Cyprus-themed custom Monopoly-style board game designed to reflect cultural landmarks and local humor, developed using 3D printing and community testing sessions.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
  </div>
</template>

<style scoped>
.projects-card {
  background: white;
  border-radius: 20px;
  width: 100%;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
  font-family: system-ui, sans-serif;
  padding: 2rem;
  margin-bottom: 2rem;
}

.side-projects {
  margin-top: 2rem;
}

.section-title {
  font-size: 1.5rem;
  margin-bottom: 1rem;
  font-weight: bold;
}

.project-title {
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
  font-weight: 600;
}

.project-desc {
  font-size: 0.95rem;
  color: #555;
}
</style>

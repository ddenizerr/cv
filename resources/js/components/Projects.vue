<script setup lang="ts">

</script>

<template>
  <div class="projects-card">
    <section class="side-projects">
      <h2 class="section-title">Side Projects</h2>

      <ul class="nav nav-tabs" id="projectTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="bloodlink-tab" data-bs-toggle="tab" data-bs-target="#bloodlink" type="button" role="tab">BloodLink</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="cypropoly-tab" data-bs-toggle="tab" data-bs-target="#cypropoly" type="button" role="tab">Cypropoly</button>
        </li>
      </ul>

      <div class="tab-content p-3 border border-top-0 rounded-bottom">
        <div class="tab-pane fade show active" id="bloodlink" role="tabpanel">
          <h3 class="project-title">BloodLink</h3>
          <p class="project-desc">A cross-platform app connecting blood donors and recipients across Cyprus and Ireland, built with React Native and Symfony 7 backend.</p>
        </div>
        <div class="tab-pane fade" id="cypropoly" role="tabpanel">
          <h3 class="project-title">Cypropoly</h3>
          <p class="project-desc">A Cyprus-themed custom Monopoly-style board game designed to reflect cultural landmarks and local humor, developed using 3D printing and community testing sessions.</p>
        </div>
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

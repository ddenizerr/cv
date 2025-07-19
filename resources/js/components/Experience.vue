<script setup lang="ts">

</script>

<template>
    <div class="experience-card">
        <div class="timeline">
            <div class="entry">
                <div class="dot"></div>
                <div class="content">
                    <h3>Software Engineer @ Apple</h3>
                    <p>Cork, IR - Contract</p>
                </div>
            </div>
            <div class="entry">
                <div class="dot"></div>
                <div class="content">
                    <h3>Software Engineer @ Manta Ray Media</h3>
                    <p> London, UK – Contract</p>
                </div>
            </div>
            <div class="entry">
                <div class="dot"></div>
                <div class="content">
                    <h3>Software Engineer @ CIU</h3>
                    <p> Nicosia, CY – Full Time</p>
                </div>
            </div>
        </div>
        <div class="cv-download">
            <a href="/cv/DenizDenizer.pdf" download class="cv-button">Download CV</a>
        </div>
    </div>
</template>

<style scoped>
.experience-card {
    background: white;
    border-radius: 20px;
    width: fit-content;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    font-family: system-ui, sans-serif;
    position: relative;
    padding-bottom: 4rem;
    height: 100%;
}

.experience-label {
    position: absolute;
    top: 10px;
    left: 10px;
    background: white;
    color: #7D62F4;
    font-weight: bold;
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 0.9rem;
    z-index: 10;
}

.timeline {
    position: relative;
    padding: 2rem;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 37px;
    top: 10px;
    bottom: 0;
    width: 2px;
    background-color: #705ad7;
    z-index: 1;
}

.entry {
    position: relative;
    padding-top: 0.1rem;
    margin-bottom: 2rem;
    padding-left: 1.3rem;
    padding-right: 1.3rem;
}

.dot {
    position: absolute;
    left: 0;
    top: 0.4rem;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #705ad7;
    z-index: 1;
}

.content h3 {
    font-size: 1rem;
    margin: 0;
    font-weight: bold;
}

.content p {
    margin: 0.25rem 0 0;
    font-size: 0.875rem;
    color: #555;
}

.content ul {
    padding-left: 1rem;
    margin: 0.5rem 0 0;
    color: #555;
    font-size: 0.875rem;
}

.content ul li {
    margin-bottom: 0.3rem;
    line-height: 1.4;
}

.cv-download {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
}

.cv-button {
    background-color: #8e44ec;
    color: white;
    padding: 0.6rem 1.2rem;
    border-radius: 6px;
    font-weight: bold;
    font-size: 0.9rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.cv-button:hover {
    background-color: #732dd2;
    transform: scale(1.05);
}
</style>

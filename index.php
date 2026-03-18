<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio | WIPEBRI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="app">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container-fluid px-3">
            <a class="navbar-brand fw-bold" href="#">WIPEBRI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#certificates">Certificates</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Hero -->
    <section id="home" class="hero-section d-flex align-items-center text-center">
        <div class="container">
            <h1 class="fw-bold display-3 mb-3">
                {{ name }}
            </h1>
            <p class="text-muted fs-5 mb-4">
                {{ role }}
            </p>
            <a href="#about" class="btn btn-dark px-4 py-2">
                About Me
            </a>
        </div>
    </section>

    <!-- About Me -->
    <section id="about" class="about-section d-flex align-items-center">
        <div class="container">
            <h2 class="fw-bold text-center mb-3">About Me</h2>

            <div class="row align-items-center">

                <div class="col-md-6 d-flex justify-content-center order-1 order-md-2 mb-4 mb-md-0">

                    <div class="photo-wrapper">
                        <div class="photo-box"></div>
                            <img src="assets/Dwi.png" alt="Foto Dwi" class="about-photo">
                    </div>

                </div>

            <div class="col-md-6 order-2 order-md-1">
                <p class="about-description mb-4">
                    {{ description }}
                </p>
                <h6 class="fw-semibold mt-4 mb-1">Experience</h6>
                <ul class="mb-4 ps-3">
                    <li v-for="exp in experiences">
                        {{ exp }}
                    </li>
                </ul>
                <h6 class="fw-semibold mt-4 mb-1">Skills</h6>

                <div v-for="skill in skills" class="mb-2 small-skill">
                    <div class="d-flex justify-content-between">
                        <small>{{ skill.name }}</small>
                        <small>{{ skill.level }}%</small>
                    </div>
                    <div class="progress skill-progress">
                        <div class="progress-bar bg-dark"
                            :style="{ width: skill.level + '%' }">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Certificates -->
    <section id="certificates" class="cert-section d-flex align-items-center">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Certificates</h2>

            <div class="row g-4 justify-content-center">

                <div class="col-md-4 col-sm-6" v-for="cert in certificates">

                    <div class="card certificate-card h-100 text-center">
                        <img :src="cert.image" class="card-img-top certificate-img" :alt="cert.title">

                        <div class="card-body">
                            <h5 class="card-title">{{ cert.title }}</h5>
                            <p class="card-text text-muted">
                                {{ cert.organization }} - {{ cert.year }}
                            </p>
                        </div>

                    </div>
                    
                </div>

            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white text-center py-3">
        © 2026 WIPEBRI
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
const { createApp } = Vue

createApp({
    data() {
        return {
            name: "",
            role: "",
            description: "",
            skills: [],
            experiences: [],
            certificates: []
        }
    },
    mounted() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            fetch('get_data.php')
                .then(response => response.json())
                .then(data => {
                    this.name = data.profile.name;
                    this.role = data.profile.role;
                    this.description = data.profile.description;
                    this.skills = data.skills;
                    this.experiences = data.experiences;
                    this.certificates = data.certificates;
                })
                .catch(error => console.error('Error fetching data:', error));
        }
    }
}).mount('#app')
</script>

</body>
</html>
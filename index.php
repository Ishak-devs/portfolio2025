<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Ishak Kouici - Développeur Full Stack</title>
    <meta name="description" content="Portfolio de Ishak Kouici, étudiant en Master Conception et Développement d'Applications. Découvrez mes projets, compétences et parcours.">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --dark-color: #1e293b;
            --light-color: #f8fafc;
            --accent-color: #f59e0b;
            --font-main: 'Poppins', sans-serif;
            --font-code: 'Roboto Mono', monospace;
        }
        
        body {
            font-family: var(--font-main);
            background-color: var(--light-color);
            color: var(--dark-color);
            scroll-behavior: smooth;
        }
        
        /* Navbar */
        .navbar {
            background-color: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-family: var(--font-code);
        }
        
        .navbar-brand span {
            color: var(--accent-color);
        }
        
        .nav-link {
            position: relative;
            margin: 0 0.5rem;
            font-weight: 500;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(245, 158, 11, 0.1) 100%);
            padding-top: 80px;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
        }
        
        .hero-title span {
            color: var(--primary-color);
            position: relative;
        }
        
        .hero-title span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 10px;
            background-color: rgba(245, 158, 11, 0.3);
            z-index: -1;
        }
        
        .hero-img {
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            max-height: 500px;
            object-fit: cover;
            border: 5px solid white;
        }
        
        /* Section Titles */
        .section {
            padding: 6rem 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--accent-color);
        }
        
        .section-title p {
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* About Section */
        .about-img {
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            max-height: 500px;
            object-fit: cover;
            border: 5px solid white;
        }
        
        .skill-badge {
            font-size: 0.9rem;
            margin: 0.25rem;
            padding: 0.5rem 0.75rem;
            display: inline-flex;
            align-items: center;
            background-color: white;
            border-radius: 50px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .skill-badge i {
            margin-right: 0.5rem;
            color: var(--primary-color);
        }
        
        /* Projects Section */
        .projects-section {
            background-color: #f1f5f9;
        }
        
        .project-card {
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
            border: none;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .project-img-container {
            height: 200px;
            overflow: hidden;
        }
        
        .project-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .project-card:hover .project-img {
            transform: scale(1.05);
        }
        
        .tech-badge {
            font-size: 0.75rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            background-color: #e2e8f0;
            color: #334155;
        }
        
        /* Contact Section */
        .contact-card {
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: none;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(37, 99, 235, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.2rem;
        }
        
        .email-btn {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s;
        }
        
        .email-btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            color: white;
        }
        
        .email-btn i {
            margin-right: 0.5rem;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .footer-title {
            font-family: var(--font-code);
            margin-bottom: 1.5rem;
        }
        
        .footer-title span {
            color: var(--accent-color);
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            background-color: #334155;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s;
        }
        
        .social-link:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .footer-link {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-link:hover {
            color: var(--accent-color);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .section {
                padding: 4rem 0;
            }
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#home"><span>&lt;</span>Ishak Kouici<span>/&gt;</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title mb-4 animate__animated animate__fadeInDown">Bonjour, je suis <span>Ishak Kouici</span></h1>
                    <h2 class="h1 hero-title mb-4 animate__animated animate__fadeInDown animate__delay-1s">Développeur Full Stack</h2>
                    <p class="lead mb-4 animate__animated animate__fadeIn animate__delay-1s">Étudiant en Master Conception et Développement d'Applications, je crée des solutions innovantes et performantes avec une approche centrée sur l'utilisateur.</p>
                    <div class="d-flex gap-3 animate__animated animate__fadeIn animate__delay-1s">
                        <a href="#projects" class="btn btn-primary btn-lg px-4">Voir mes projets</a>
                        <a href="#contact" class="btn btn-outline-primary btn-lg px-4">Me contacter</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 animate__animated animate__fadeIn animate__delay-2s">
                    <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Ishak Kouici - Développeur Full Stack" 
                         class="img-fluid hero-img">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-title">
                <h2>À propos de moi</h2>
                <p>Découvrez mon parcours, mes compétences et ma passion pour le développement</p>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="photo.jpg"
                         alt="Ishak Kouici - Développeur" 
                         class="img-fluid about-img animate__animated animate__fadeInLeft">
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <h3 class="h2 mb-4">Passionné par le développement d'applications</h3>
                    <p class="mb-4">Actuellement en Master Conception et Développement d'Applications, j'ai acquis une solide expertise en développement web et mobile, ainsi qu'en conception d'interfaces utilisateur intuitives.</p>
                    <p class="mb-4">Mon approche combine rigueur technique et créativité pour concevoir des solutions qui répondent précisément aux besoins des utilisateurs tout en étant esthétiques et performantes.</p>
                    
                    <h4 class="h5 mb-3">Compétences techniques</h4>
                    <div class="d-flex flex-wrap">
                        <span class="skill-badge">
                            <i class="bi bi-filetype-java"></i> Java
                        </span>
                        <span class="skill-badge">
                            <i class="bi bi-phone"></i> Android
                        </span>
                        <span class="skill-badge">
                            <i class="bi bi-filetype-js"></i> JavaScript
                        </span>
                        <span class="skill-badge">
                            <i class="bi bi-filetype-html"></i> HTML/CSS
                        </span>
                        <span class="skill-badge">
                            <i class="bi bi-filetype-php"></i> PHP
                        </span>
                        <span class="skill-badge">
                            <i class="bi bi-database"></i> SQL/NoSQL
                        </span>
                        <span class="skill-badge">
                            <i class="bi bi-git"></i> Git
                        </span>
                        <span class="skill-badge">
                            <i class="bi bi-bootstrap"></i> Bootstrap
                        </span>
                        <span class="skill-badge">
                            <i class="bi bi-filetype-sql"></i> ASP.NET
                        </span>
                        <span class="skill-badge">
                            <i class="bi bi-filetype-xml"></i> XML/JSON
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section projects-section" id="projects">
        <div class="container">
            <div class="section-title">
                <h2>Mes projets</h2>
                <p>Une sélection de mes réalisations les plus significatives</p>
            </div>
            
            <div class="row g-4">
                <!-- Projet 1 - E-commerce -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card card h-100 animate__animated animate__fadeInUp">
                        <div class="project-img-container">
                            <img src="https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="project-img" 
                                 alt="Application E-commerce">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h3 class="h5 card-title mb-0">Plateforme E-commerce</h3>
                                <span class="badge bg-primary">2024</span>
                            </div>
                            <p class="card-text text-muted mb-4">Application mobile de commerce électronique avec système de paiement sécurisé, gestion de catalogue et suivi des commandes.</p>
                            <div class="mt-auto">
                                <div class="mb-3">
                                    <span class="badge tech-badge">PHP</span>
                                    <span class="badge tech-badge">Mysql</span>
                                    <span class="badge tech-badge">API base de données</span>
                                </div>
                                <div class="d-flex gap-3">
                                    <a href="https://github.com/luccsz95/e-commerce-projet" class="btn btn-sm btn-outline-primary d-flex align-items-center">
                                        <i class="bi bi-eye me-2"></i> Github
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                
                
                <!-- Projet 2 - ClasseSpace -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card card h-100 animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="project-img-container">
                            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="project-img" 
                                 alt="Plateforme ClasseSpace">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h3 class="h5 card-title mb-0">ClasseSpace</h3>
                                <span class="badge bg-primary">2025</span>
                            </div>
                            <p class="card-text text-muted mb-4">Plateforme de gestion scolaire complète avec espaces dédiés pour administrateurs, enseignants et étudiants, incluant gestion des notes, emplois du temps et ressources pédagogiques.</p>
                            <div class="mt-auto">
                                <div class="mb-3">
                                    <span class="badge tech-badge">ASP.NET Core</span>
                                    <span class="badge tech-badge">MySQL</span>
                                    <span class="badge tech-badge">Razor Pages</span>
                                    <span class="badge tech-badge">Bootstrap</span>
                                </div>
                                <div class="d-flex gap-3">
                                    <a href="https://projet-forum-1-pyvs.onrender.com" class="btn btn-sm btn-outline-secondary d-flex align-items-center">
                                        <i class="bi bi-github me-2">Docker</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contactez-moi</h2>
                <p>Disponible pour des opportunités.</p>
            </div>
            
            <div class="contact-card card shadow overflow-hidden">
                <div class="row g-0">
                    <div class="col-lg-6 bg-light p-4 p-lg-5">
                        <h3 class="h2 mb-4">Travaillons ensemble</h3>
                        <p class="mb-4">Pour toute proposition, n'hésitez pas à me contacter directement par email.</p>
                        
                        <div class="text-center mt-5">
                            <a href="mailto:kouicicontact@yahoo.com" class="email-btn">
                                <i class="bi bi-envelope-fill"></i> Envoyer un email
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 p-4 p-lg-5">
                        <div class="mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="contact-icon me-3">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="h6 mb-0">Email</h4>
                                    <a href="mailto:kouicicontact@yahoo.com" class="text-decoration-none">kouicicontact@yahoo.com</a>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-3">
                                <div class="contact-icon me-3">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <div>
                                    <h4 class="h6 mb-0">Téléphone</h4>
                                    <a href="tel:+33779774410" class="text-decoration-none">+33 7 79 77 44 10</a>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center">
                                <div class="contact-icon me-3">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div>
                                    <h4 class="h6 mb-0">Localisation</h4>
                                    <p class="mb-0">Paris, France</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-3 justify-content-center">
                            <a href="https://github.com/votreprofil" target="_blank" class="social-link">
                                <i class="bi bi-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/ishak-kouici/" target="_blank" class="social-link">
                                <i class="bi bi-linkedin"></i>
                            </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3 class="footer-title h4"><span>&lt;</span>Ishak Kouici<span>/&gt;</span></h3>
                    <p class="text-muted mt-3">Développeur Full Stack passionné par la création de solutions innovantes et performantes.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="" target="_blank" class="social-link">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/ishak-kouici/" target="_blank" class="social-link">
                            <i class="bi bi-linkedin"></i>
                        </a>
                       
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4">
                    <h4 class="h5 mb-4">Navigation</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="footer-link">Accueil</a></li>
                        <li class="mb-2"><a href="#about" class="footer-link">À propos</a></li>
                        <li class="mb-2"><a href="#projects" class="footer-link">Projets</a></li>
                        <li class="mb-2"><a href="#contact" class="footer-link">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-4">
                    <h4 class="h5 mb-4">Compétences</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Développement Mobile</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Développement Web</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">UI/UX Design</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Base de données</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <a href="mailto:kouicicontact@yahoo.com" class="btn btn-outline-light mt-2">Me contacter</a>
                </div>
            </div>
            
            <hr class="my-4 bg-secondary">
            
            <div class="text-center text-muted">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> Ishak Kouici. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Active le scroll spy
        const scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '.navbar'
        });
        
        // Ajoute la classe active aux liens de navigation
        const navLinks = document.querySelectorAll('.nav-link');
        
        function setActiveLink() {
            const fromTop = window.scrollY + 100;
            
            navLinks.forEach(link => {
                const section = document.querySelector(link.getAttribute('href'));
                
                if (
                    section.offsetTop <= fromTop &&
                    section.offsetTop + section.offsetHeight > fromTop
                ) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }
        
        window.addEventListener('scroll', setActiveLink);
        setActiveLink();
        
        // Animation au défilement
        function animateOnScroll() {
            const elements = document.querySelectorAll('.hero-img, .about-img, .project-card, .contact-card');
            const windowHeight = window.innerHeight;
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                
                if (elementPosition < windowHeight - 100) {
                    element.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }
        
        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll(); // Déclenche au chargement
    </script>
</body>
</html>
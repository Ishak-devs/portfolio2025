<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | [Votre Prénom] [Votre Nom] - Développeur d'Applications</title>
    <meta name="description" content="Portfolio de [Votre Prénom] [Votre Nom], développeur d'applications en licence. Découvrez mes projets, compétences et parcours.">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #0b5ed7;
            --dark-color: #212529;
            --light-color: #f8f9fa;
            --accent-color: #ffc107;
            --font-main: 'Poppins', sans-serif;
            --font-code: 'Roboto Mono', monospace;
        }
        
        body {
            font-family: var(--font-main);
            background-color: var(--light-color);
            color: var(--dark-color);
        }
        
        /* Navbar */
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
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.1) 0%, rgba(255, 193, 7, 0.1) 100%);
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
        }
        
        .hero-title span {
            color: var(--primary-color);
        }
        
        .hero-img {
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            max-height: 500px;
            object-fit: cover;
        }
        
        /* Section Titles */
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: #6c757d;
            max-width: 600px;
        }
        
        /* About Section */
        .about-img {
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            max-height: 500px;
            object-fit: cover;
        }
        
        .skill-badge {
            font-size: 0.9rem;
            margin: 0.25rem;
            padding: 0.5rem 0.75rem;
            display: inline-flex;
            align-items: center;
        }
        
        .skill-badge i {
            margin-right: 0.5rem;
        }
        
        /* Projects Section */
        .project-card {
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1) !important;
        }
        
        .project-img {
            height: 200px;
            object-fit: cover;
        }
        
        .tech-badge {
            font-size: 0.75rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }
        
        /* Contact Section */
        .contact-card {
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(13, 110, 253, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.2rem;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
        }
        
        .footer-title {
            font-family: var(--font-code);
        }
        
        .footer-title span {
            color: var(--accent-color);
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            background-color: #495057;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s;
        }
        
        .social-link:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        .footer-link {
            color: #adb5bd;
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
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><span>&lt;</span>VotreNom<span>/&gt;</span></a>
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
                    <h1 class="hero-title mb-4">Bonjour, je suis <span>[Votre Prénom]</span></h1>
                    <h2 class="h1 hero-title mb-4">Développeur d'Applications</h2>
                    <p class="lead mb-4">Étudiant en licence d'informatique passionné par le développement d'applications mobiles et web. Je crée des solutions innovantes et performantes.</p>
                    <div class="d-flex gap-3">
                        <a href="#projects" class="btn btn-primary btn-lg px-4">Voir mes projets</a>
                        <a href="#contact" class="btn btn-outline-primary btn-lg px-4">Me contacter</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1551033406-611cf9a28f67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Développeur d'applications" 
                         class="img-fluid hero-img">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 my-5" id="about">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2>À propos de moi</h2>
                <p class="mx-auto">Découvrez qui je suis, mes compétences et mon parcours académique</p>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="À propos" 
                         class="img-fluid about-img">
                </div>
                <div class="col-lg-6">
                    <h3 class="h2 mb-4">Développeur d'applications passionné</h3>
                    <p class="mb-4">Je suis actuellement en licence d'informatique, spécialisé dans le développement d'applications. Mon parcours académique m'a permis d'acquérir des bases solides en algorithmique, programmation orientée objet et gestion de bases de données.</p>
                    <p class="mb-4">Je me consacre à la création d'applications à la fois esthétiques et fonctionnelles, en mettant l'accent sur l'expérience utilisateur et les bonnes pratiques de développement.</p>
                    
                    <h4 class="h5 mb-3">Mes compétences techniques</h4>
                    <div class="d-flex flex-wrap">
                        <span class="skill-badge bg-light rounded-pill">
                            <i class="bi bi-filetype-java text-primary"></i> Java
                        </span>
                        <span class="skill-badge bg-light rounded-pill">
                            <i class="bi bi-phone text-primary"></i> Android
                        </span>
                        <span class="skill-badge bg-light rounded-pill">
                            <i class="bi bi-apple text-primary"></i> Swift
                        </span>
                        <span class="skill-badge bg-light rounded-pill">
                            <i class="bi bi-filetype-js text-primary"></i> JavaScript
                        </span>
                        <span class="skill-badge bg-light rounded-pill">
                            <i class="bi bi-phone text-primary"></i> React Native
                        </span>
                        <span class="skill-badge bg-light rounded-pill">
                            <i class="bi bi-database text-primary"></i> SQL
                        </span>
                        <span class="skill-badge bg-light rounded-pill">
                            <i class="bi bi-git text-primary"></i> Git
                        </span>
                        <span class="skill-badge bg-light rounded-pill">
                            <i class="bi bi-filetype-py text-primary"></i> Python
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-5 my-5 bg-light" id="projects">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2>Mes projets</h2>
                <p class="mx-auto">Découvrez une sélection de mes réalisations récentes</p>
            </div>
            
            <div class="row g-4">
                <!-- Projet 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             class="card-img-top project-img" 
                             alt="Application de gestion de tâches">
                        <div class="card-body d-flex flex-column">
                            <h3 class="h5 card-title">TaskMaster</h3>
                            <p class="card-text text-muted">Application mobile de gestion de tâches avec synchronisation cloud et rappels intelligents.</p>
                            <div class="mt-auto">
                                <div class="mb-3">
                                    <span class="tech-badge bg-primary text-white rounded-pill">Android</span>
                                    <span class="tech-badge bg-primary text-white rounded-pill">Kotlin</span>
                                    <span class="tech-badge bg-primary text-white rounded-pill">Firebase</span>
                                </div>
                                <div class="d-flex gap-3">
                                    <a href="#" class="btn btn-sm btn-outline-primary d-flex align-items-center">
                                        <i class="bi bi-eye me-2"></i> Voir le projet
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary d-flex align-items-center">
                                        <i class="bi bi-github me-2"></i> Code source
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Projet 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             class="card-img-top project-img" 
                             alt="Plateforme de recettes">
                        <div class="card-body d-flex flex-column">
                            <h3 class="h5 card-title">ChefConnect</h3>
                            <p class="card-text text-muted">Plateforme web et mobile de partage de recettes avec système de recommandation.</p>
                            <div class="mt-auto">
                                <div class="mb-3">
                                    <span class="tech-badge bg-primary text-white rounded-pill">React Native</span>
                                    <span class="tech-badge bg-primary text-white rounded-pill">Node.js</span>
                                    <span class="tech-badge bg-primary text-white rounded-pill">MongoDB</span>
                                </div>
                                <div class="d-flex gap-3">
                                    <a href="#" class="btn btn-sm btn-outline-primary d-flex align-items-center">
                                        <i class="bi bi-eye me-2"></i> Voir le projet
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary d-flex align-items-center">
                                        <i class="bi bi-github me-2"></i> Code source
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Projet 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             class="card-img-top project-img" 
                             alt="Jeu éducatif">
                        <div class="card-body d-flex flex-column">
                            <h3 class="h5 card-title">EduGame</h3>
                            <p class="card-text text-muted">Jeu éducatif pour enfants avec suivi des progrès et tableau de bord parental.</p>
                            <div class="mt-auto">
                                <div class="mb-3">
                                    <span class="tech-badge bg-primary text-white rounded-pill">Swift</span>
                                    <span class="tech-badge bg-primary text-white rounded-pill">ARKit</span>
                                    <span class="tech-badge bg-primary text-white rounded-pill">Core Data</span>
                                </div>
                                <div class="d-flex gap-3">
                                    <a href="#" class="btn btn-sm btn-outline-primary d-flex align-items-center">
                                        <i class="bi bi-eye me-2"></i> Voir le projet
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary d-flex align-items-center">
                                        <i class="bi bi-github me-2"></i> Code source
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
    <section class="py-5 my-5" id="contact">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2>Contactez-moi</h2>
                <p class="mx-auto">N'hésitez pas à me contacter pour des opportunités ou des collaborations</p>
            </div>
            
            <div class="contact-card card border-0 shadow overflow-hidden">
                <div class="row g-0">
                    <div class="col-lg-6 bg-light p-4 p-lg-5">
                        <h3 class="h2 mb-4">Parlons de votre projet</h3>
                        <p class="mb-4">Je suis toujours ouvert à discuter de nouveaux projets, idées créatives ou opportunités de faire partie de vos visions.</p>
                        
                        <div class="mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="contact-icon me-3">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="h6 mb-0">Email</h4>
                                    <a href="mailto:votre@email.com" class="text-decoration-none">votre@email.com</a>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-3">
                                <div class="contact-icon me-3">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <div>
                                    <h4 class="h6 mb-0">Téléphone</h4>
                                    <a href="tel:+33612345678" class="text-decoration-none">+33 6 12 34 56 78</a>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center">
                                <div class="contact-icon me-3">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div>
                                    <h4 class="h6 mb-0">Localisation</h4>
                                    <p class="mb-0">[Votre Ville], France</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-3">
                            <a href="#" class="social-link">
                                <i class="bi bi-github"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="bi bi-twitter"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 p-4 p-lg-5">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom complet</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="subject" class="form-label">Sujet</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary px-4">Envoyer le message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3 class="footer-title h4 mb-4"><span>&lt;</span>VotreNom<span>/&gt;</span></h3>
                    <p class="text-muted">Développeur d'applications passionné par la création de solutions innovantes et performantes.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="social-link">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4">
                    <h4 class="h5 mb-4">Liens utiles</h4>
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
                        <li class="mb-2"><a href="#" class="footer-link">Mobile</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Web</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">UI/UX</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Bases de données</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <h4 class="h5 mb-4">Newsletter</h4>
                    <p class="text-muted mb-3">Abonnez-vous pour recevoir mes dernières actualités.</p>
                    <form class="d-flex">
                        <input type="email" class="form-control me-2" placeholder="Votre email">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-send"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <hr class="my-4 bg-secondary">
            
            <div class="text-center text-muted">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> [Votre Prénom] [Votre Nom]. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Animation au défilement
        document.addEventListener('DOMContentLoaded', function() {
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.hero-img, .about-img, .project-card, .contact-card');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition < windowHeight - 100) {
                        element.classList.add('animate__animated', 'animate__fadeInUp');
                    }
                });
            };
            
            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Trigger on load
        });
    </script>
</body>
</html>
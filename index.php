<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | [Votre Prénom] [Votre Nom] - Développeur d'Applications</title>
    <meta name="description" content="Portfolio de [Votre Prénom] [Votre Nom], développeur d'applications en licence. Découvrez mes projets, compétences et parcours.">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/favicon.ico">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: var(--font-main);
            line-height: 1.6;
            color: var(--dark-color);
            background-color: var(--light-color);
            overflow-x: hidden;
        }
        
        /* Header */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .logo {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color);
        }
        
        .logo span {
            color: var(--accent-color);
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }
        
        .nav-links a:hover {
            color: var(--primary-color);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-color);
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 5%;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(245, 158, 11, 0.1) 100%);
        }
        
        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        
        .hero-text h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .hero-text h1 span {
            color: var(--primary-color);
        }
        
        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #64748b;
        }
        
        .hero-btns {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            padding: 0.8rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }
        
        .btn-outline {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }
        
        .btn-outline:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }
        
        .hero-image {
            position: relative;
            text-align: center;
        }
        
        .hero-image img {
            max-width: 100%;
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        /* About Section */
        .section {
            padding: 6rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark-color);
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        
        .about-image img {
            max-width: 100%;
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--dark-color);
        }
        
        .about-text p {
            margin-bottom: 1.5rem;
            color: #64748b;
        }
        
        .skills {
            margin-top: 2rem;
        }
        
        .skills h4 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .skill-item {
            background-color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .skill-item i {
            color: var(--primary-color);
        }
        
        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .project-card {
            background-color: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .project-image {
            height: 200px;
            overflow: hidden;
        }
        
        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .project-card:hover .project-image img {
            transform: scale(1.1);
        }
        
        .project-info {
            padding: 1.5rem;
        }
        
        .project-info h3 {
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }
        
        .project-info p {
            color: #64748b;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }
        
        .tech-item {
            background-color: #e2e8f0;
            color: #334155;
            padding: 0.3rem 0.8rem;
            border-radius: 9999px;
            font-size: 0.7rem;
            font-weight: 500;
        }
        
        .project-links {
            display: flex;
            gap: 1rem;
        }
        
        .project-links a {
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }
        
        .project-links a:first-child {
            color: var(--primary-color);
        }
        
        .project-links a:last-child {
            color: var(--dark-color);
        }
        
        /* Contact Section */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            background-color: white;
            border-radius: 1rem;
            padding: 3rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--dark-color);
        }
        
        .contact-info p {
            color: #64748b;
            margin-bottom: 2rem;
        }
        
        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
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
        
        .contact-text h4 {
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }
        
        .contact-text p, .contact-text a {
            color: #64748b;
            text-decoration: none;
            font-size: 0.9rem;
        }
        
        .contact-text a:hover {
            color: var(--primary-color);
        }
        
        .contact-form .form-group {
            margin-bottom: 1.5rem;
        }
        
        .contact-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark-color);
        }
        
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            font-family: var(--font-main);
            transition: border-color 0.3s;
        }
        
        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--primary-color);
        }
        
        .contact-form textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 4rem 5% 2rem;
        }
        
        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 3rem;
        }
        
        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }
        
        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent-color);
        }
        
        .footer-col p {
            color: #cbd5e1;
            margin-bottom: 1.5rem;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            background-color: #334155;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--accent-color);
        }
        
        .footer-bottom {
            max-width: 1400px;
            margin: 3rem auto 0;
            padding-top: 2rem;
            border-top: 1px solid #334155;
            text-align: center;
            color: #94a3b8;
            font-size: 0.9rem;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .hero-content, .about-content, .contact-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .hero-text, .about-text {
                order: 1;
                text-align: center;
            }
            
            .hero-btns {
                justify-content: center;
            }
            
            .skills-list {
                justify-content: center;
            }
            
            .footer-container {
                grid-template-columns: 1fr 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero-text h1 {
                font-size: 2.5rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo"><span>&lt;</span>VotreNom<span>/&gt;</span></div>
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
            <div class="nav-links">
                <a href="#home">Accueil</a>
                <a href="#about">À propos</a>
                <a href="#projects">Projets</a>
                <a href="#contact">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Bonjour, je suis <span>[Votre Prénom]</span></h1>
                <h1>Développeur d'Applications</h1>
                <p>Étudiant en licence d'informatique passionné par le développement d'applications mobiles et web. Je crée des solutions innovantes et performantes.</p>
                <div class="hero-btns">
                    <a href="#projects" class="btn btn-primary">Voir mes projets</a>
                    <a href="#contact" class="btn btn-outline">Me contacter</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="assets/hero-image.jpg" alt="Développeur d'applications">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="section-title">
            <h2>À propos de moi</h2>
            <p>Découvrez qui je suis, mes compétences et mon parcours académique</p>
        </div>
        <div class="about-content">
            <div class="about-image">
                <img src="assets/about-image.jpg" alt="À propos">
            </div>
            <div class="about-text">
                <h3>Développeur d'applications passionné</h3>
                <p>Je suis actuellement en licence d'informatique, spécialisé dans le développement d'applications. Mon parcours académique m'a permis d'acquérir des bases solides en algorithmique, programmation orientée objet et gestion de bases de données.</p>
                <p>Je me consacre à la création d'applications à la fois esthétiques et fonctionnelles, en mettant l'accent sur l'expérience utilisateur et les bonnes pratiques de développement.</p>
                
                <div class="skills">
                    <h4>Mes compétences techniques</h4>
                    <div class="skills-list">
                        <div class="skill-item"><i class="fab fa-java"></i> Java</div>
                        <div class="skill-item"><i class="fab fa-android"></i> Android</div>
                        <div class="skill-item"><i class="fab fa-swift"></i> Swift</div>
                        <div class="skill-item"><i class="fab fa-js"></i> JavaScript</div>
                        <div class="skill-item"><i class="fab fa-react"></i> React Native</div>
                        <div class="skill-item"><i class="fas fa-database"></i> SQL</div>
                        <div class="skill-item"><i class="fab fa-git"></i> Git</div>
                        <div class="skill-item"><i class="fab fa-python"></i> Python</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section" id="projects">
        <div class="section-title">
            <h2>Mes projets</h2>
            <p>Découvrez une sélection de mes réalisations récentes</p>
        </div>
        <div class="projects-grid">
            <!-- Projet 1 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="assets/project1.jpg" alt="Application de gestion de tâches">
                </div>
                <div class="project-info">
                    <h3>TaskMaster</h3>
                    <p>Application mobile de gestion de tâches avec synchronisation cloud et rappels intelligents.</p>
                    <div class="project-tech">
                        <span class="tech-item">Android</span>
                        <span class="tech-item">Kotlin</span>
                        <span class="tech-item">Firebase</span>
                    </div>
                    <div class="project-links">
                        <a href="#"><i class="fas fa-external-link-alt"></i> Voir le projet</a>
                        <a href="#"><i class="fab fa-github"></i> Code source</a>
                    </div>
                </div>
            </div>
            
            <!-- Projet 2 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="assets/project2.jpg" alt="Plateforme de recettes">
                </div>
                <div class="project-info">
                    <h3>ChefConnect</h3>
                    <p>Plateforme web et mobile de partage de recettes avec système de recommandation.</p>
                    <div class="project-tech">
                        <span class="tech-item">React Native</span>
                        <span class="tech-item">Node.js</span>
                        <span class="tech-item">MongoDB</span>
                    </div>
                    <div class="project-links">
                        <a href="#"><i class="fas fa-external-link-alt"></i> Voir le projet</a>
                        <a href="#"><i class="fab fa-github"></i> Code source</a>
                    </div>
                </div>
            </div>
            
            <!-- Projet 3 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="assets/project3.jpg" alt="Jeu éducatif">
                </div>
                <div class="project-info">
                    <h3>EduGame</h3>
                    <p>Jeu éducatif pour enfants avec suivi des progrès et tableau de bord parental.</p>
                    <div class="project-tech">
                        <span class="tech-item">Swift</span>
                        <span class="tech-item">ARKit</span>
                        <span class="tech-item">Core Data</span>
                    </div>
                    <div class="project-links">
                        <a href="#"><i class="fas fa-external-link-alt"></i> Voir le projet</a>
                        <a href="#"><i class="fab fa-github"></i> Code source</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="section-title">
            <h2>Contactez-moi</h2>
            <p>N'hésitez pas à me contacter pour des opportunités ou des collaborations</p>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Parlons de votre projet</h3>
                <p>Je suis toujours ouvert à discuter de nouveaux projets, idées créatives ou opportunités de faire partie de vos visions.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <a href="mailto:votre@email.com">votre@email.com</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Téléphone</h4>
                            <a href="tel:+33612345678">+33 6 12 34 56 78</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Localisation</h4>
                            <p>[Votre Ville], France</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Envoyer le message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h3><span>&lt;</span>VotreNom<span>/&gt;</span></h3>
                <p>Développeur d'applications passionné par la création de solutions innovantes et performantes.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Liens utiles</h3>
                <ul class="footer-links">
                    <li><a href="#home">Accueil</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#projects">Projets</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Compétences</h3>
                <ul class="footer-links">
                    <li><a href="#">Développement Mobile</a></li>
                    <li><a href="#">Développement Web</a></li>
                    <li><a href="#">UI/UX Design</a></li>
                    <li><a href="#">Base de données</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> [Votre Prénom] [Votre Nom]. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Simple JavaScript pour le menu mobile
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
        
        // Animation au défilement
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                    }
                });
            }, {
                threshold: 0.1
            });
            
            document.querySelectorAll('.section, .project-card, .about-content, .contact-container').forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</body>
</html>
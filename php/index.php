<?php
$pageTitle = "Amina Iftikhar | Web Developer";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>

    <!-- =========================
         HERO SECTION
    ========================== -->
    <section class="hero" id="home">

        <div class="hero-content">

            <p class="hero-greeting">
                Hello, I'm
            </p>

            <h1>
                Amina <span>Iftikhar</span>
            </h1>

            <h2>
                Web Developer
            </h2>

            <p class="hero-description">
                I build modern, responsive and user-friendly websites
                using HTML, CSS, JavaScript, PHP and MySQL.
            </p>

            <div class="hero-buttons">

                <a href="#projects" class="btn btn-primary">
                    View My Work
                </a>

                <a href="#contact" class="btn btn-outline">
                    Contact Me
                </a>

            </div>

            <div class="social-links">

                <a href="#" aria-label="GitHub">
                    GitHub
                </a>

                <a href="https://www.linkedin.com/in/amina-shahzadi-87b169435?utm_source=share_via&utm_content=profile&utm_medium=member_android" aria-label="LinkedIn">
                    LinkedIn
                </a>

                <a href="#" aria-label="Email">
                    Email
                </a>

            </div>

        </div>


        <div class="hero-image">

            <div class="image-container">

                <img
             src="assets/images/profile.jpg"
                alt="Amina Iftikhar - Web Developer"
>

            </div>

        </div>

    </section>


    <!-- =========================
         ABOUT SECTION
    ========================== -->
    <section class="section about" id="about">

        <div class="section-heading">

            <p class="section-label">
                Get To Know Me
            </p>

            <h2>
                About <span>Me</span>
            </h2>

        </div>


        <div class="about-container">

            <div class="about-text">

                <h3>
                    I'm Amina, a passionate Web Developer.
                </h3>

                <p>
                    I enjoy creating clean, responsive and interactive
                    websites. I am passionate about learning new
                    technologies and improving my development skills.
                </p>

                <p>
                    My current technical skills include HTML, CSS,
                    JavaScript, PHP and MySQL. I enjoy working on
                    projects that allow me to combine creativity with
                    programming and problem solving.
                </p>

                <p>
                    My goal is to continue growing as a developer and
                    build useful, accessible and professional web
                    applications.
                </p>

                <a href="#contact" class="btn btn-primary">
                    Let's Work Together
                </a>

            </div>


            <div class="about-card">

                <div class="info-item">
                    <span>Role</span>
                    <strong>Web Developer</strong>
                </div>

                <div class="info-item">
                    <span>Frontend</span>
                    <strong>HTML, CSS, JavaScript</strong>
                </div>

                <div class="info-item">
                    <span>Backend</span>
                    <strong>PHP</strong>
                </div>

                <div class="info-item">
                    <span>Database</span>
                    <strong>MySQL</strong>
                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         SKILLS SECTION
    ========================== -->
    <section class="section skills" id="skills">

        <div class="section-heading">

            <p class="section-label">
                My Expertise
            </p>

            <h2>
                Technical <span>Skills</span>
            </h2>

        </div>


        <div class="skills-grid">

            <div class="skill-card">

                <div class="skill-icon">
                    HTML
                </div>

                <h3>HTML5</h3>

                <p>
                    Semantic and structured web pages
                    with accessible markup.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    CSS
                </div>

                <h3>CSS3</h3>

                <p>
                    Responsive layouts, animations,
                    Flexbox and CSS Grid.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    JS
                </div>

                <h3>JavaScript</h3>

                <p>
                    Interactive interfaces and
                    dynamic web functionality.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    PHP
                </div>

                <h3>PHP</h3>

                <p>
                    Server-side development,
                    forms and backend functionality.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    SQL
                </div>

                <h3>MySQL</h3>

                <p>
                    Database design, queries and
                    data management.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    Git
                </div>

                <h3>Git</h3>

                <p>
                    Version control and project
                    management.
                </p>

            </div>

        </div>

    </section>


    <!-- =========================
         SERVICES SECTION
    ========================== -->
    <section class="section services" id="services">

        <div class="section-heading">

            <p class="section-label">
                What I Do
            </p>

            <h2>
                My <span>Services</span>
            </h2>

        </div>


        <div class="services-grid">

            <div class="service-card">

                <span class="service-number">
                    01
                </span>

                <h3>
                    Web Development
                </h3>

                <p>
                    Building modern and responsive websites
                    using clean and maintainable code.
                </p>

            </div>


            <div class="service-card">

                <span class="service-number">
                    02
                </span>

                <h3>
                    Frontend Development
                </h3>

                <p>
                    Creating attractive and interactive
                    user interfaces for different devices.
                </p>

            </div>


            <div class="service-card">

                <span class="service-number">
                    03
                </span>

                <h3>
                    Backend Development
                </h3>

                <p>
                    Developing PHP-based backend systems
                    and database-driven applications.
                </p>

            </div>

        </div>

    </section>


    <!-- =========================
         PROJECTS SECTION
    ========================== -->
    <section class="section projects" id="projects">

        <div class="section-heading">

            <p class="section-label">
                My Recent Work
            </p>

            <h2>
                Featured <span>Projects</span>
            </h2>

        </div>


        <div class="project-filters">

            <button class="filter-btn active" data-filter="all">
                All
            </button>

            <button class="filter-btn" data-filter="frontend">
                Frontend
            </button>

            <button class="filter-btn" data-filter="php">
                PHP
            </button>

            <button class="filter-btn" data-filter="javascript">
                JavaScript
            </button>

        </div>


        <div class="projects-grid">

            <!-- Project 1 -->

            <article class="project-card" data-category="frontend">

                <div class="project-image">

                    <div class="project-placeholder">
                        Project 01
                    </div>

                </div>

                <div class="project-content">

                    <span class="project-category">
                        Frontend
                    </span>

                    <h3>
                        Responsive Website
                    </h3>

                    <p>
                        A modern responsive website created
                        using HTML and CSS.
                    </p>

                    <div class="project-tech">

                        <span>HTML</span>
                        <span>CSS</span>

                    </div>

                    <div class="project-links">

                        <a href="#" target="_blank">
                            GitHub →
                        </a>

                        <a href="#" target="_blank">
                            Live Demo →
                        </a>

                    </div>

                </div>

            </article>


            <!-- Project 2 -->

            <article class="project-card" data-category="javascript">

                <div class="project-image">

                    <div class="project-placeholder">
                        Project 02
                    </div>

                </div>

                <div class="project-content">

                    <span class="project-category">
                        JavaScript
                    </span>

                    <h3>
                        JavaScript Application
                    </h3>

                    <p>
                        An interactive web application
                        developed using JavaScript.
                    </p>

                    <div class="project-tech">

                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>

                    </div>

                    <div class="project-links">

                        <a href="#" target="_blank">
                            GitHub →
                        </a>

                        <a href="#" target="_blank">
                            Live Demo →
                        </a>

                    </div>

                </div>

            </article>


            <!-- Project 3 -->

            <article class="project-card" data-category="php">

                <div class="project-image">

                    <div class="project-placeholder">
                        Project 03
                    </div>

                </div>

                <div class="project-content">

                    <span class="project-category">
                        PHP
                    </span>

                    <h3>
                        PHP & MySQL System
                    </h3>

                    <p>
                        A database-driven web application
                        using PHP and MySQL.
                    </p>

                    <div class="project-tech">

                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>

                    </div>

                    <div class="project-links">

                        <a href="#" target="_blank">
                            GitHub →
                        </a>

                        <a href="#" target="_blank">
                            Live Demo →
                        </a>

                    </div>

                </div>

            </article>

        </div>

    </section>


    <!-- =========================
         EDUCATION SECTION
    ========================== -->
    <section class="section education" id="education">

        <div class="section-heading">

            <p class="section-label">
                My Journey
            </p>

            <h2>
                Education & <span>Experience</span>
            </h2>

        </div>


        <div class="timeline">

            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <span>
                        Education
                    </span>

                    <h3>
                        My Degree
                    </h3>

                    <p class="timeline-date">
                        2024 - 2025
                    </p>

                    <p>
                        I am graduated from GENTRY GIRLS COLLEGE GUJARKHAN.
                    </p>

                </div>

            </div>


            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <span>
                        Experience
                    </span>

                    <h3>
                        Web Development
                    </h3>

                    <p class="timeline-date">
                        Present
                    </p>

                    <p>
                        Started my journey in Web Development 3months Ago.
                        Built personal projects including Portfolio,modern responsive websites.
                        Passionate about building user-friendly clean interfaces while continuously learning new technologies.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         CONTACT SECTION
    ========================== -->
    <section class="section contact" id="contact">

        <div class="section-heading">

            <p class="section-label">
                Get In Touch
            </p>

            <h2>
                Contact <span>Me</span>
            </h2>

            <p>
                Have a project or opportunity in mind?
                I'd love to hear from you.
            </p>

        </div>


        <div class="contact-container">


            <div class="contact-info">

                <h3>
                    Let's talk
                </h3>

                <p>
                    Feel free to contact me if you'd like
                    to discuss a project, collaboration or
                    development opportunity.
                </p>


                <div class="contact-item">

                    <span>Email</span>

                    <a href="mailto:shahzadiamina332@gmail.com">
                        shahzadiamina332@gmail.com
                    </a>

                </div>


                <div class="contact-item">

                    <span>Location</span>

                    <p>
                        Pakistan
                    </p>

                </div>

            </div>


            <form
                class="contact-form"
                action="contact.php"
                method="POST"
            >

                <div class="form-group">

                    <label for="name">
                        Your Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        Your Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="subject">
                        Subject
                    </label>

                    <input
                        type="text"
                        id="subject"
                        name="subject"
                        placeholder="Enter subject"
                    >

                </div>


                <div class="form-group">

                    <label for="message">
                        Message
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        placeholder="Write your message..."
                        required
                    ></textarea>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Send Message
                </button>

            </form>

        </div>

    </section>

</main>


<?php include 'includes/footer.php'; ?>

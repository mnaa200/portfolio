CREATE DATABASE IF NOT EXISTS amina_portfolio;

USE amina_portfolio;


-- ==========================================
-- CONTACT MESSAGES TABLE
-- ==========================================

CREATE TABLE IF NOT EXISTS messages (

    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    email VARCHAR(150) NOT NULL,

    subject VARCHAR(200),

    message TEXT NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


-- ==========================================
-- PROJECTS TABLE
-- ==========================================

CREATE TABLE IF NOT EXISTS projects (

    id INT AUTO_INCREMENT PRIMARY KEY,

    title VARCHAR(150) NOT NULL,

    description TEXT NOT NULL,

    category VARCHAR(50) NOT NULL,

    technologies VARCHAR(255),

    github_url VARCHAR(255),

    live_url VARCHAR(255),

    image VARCHAR(255),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


-- ==========================================
-- SAMPLE PROJECTS
-- ==========================================

INSERT INTO projects
(title, description, category, technologies, github_url, live_url)
VALUES

(
    'Responsive Website',
    'A modern responsive website created using HTML and CSS.',
    'frontend',
    'HTML, CSS',
    '#',
    '#'
),

(
    'JavaScript Application',
    'An interactive web application developed using JavaScript.',
    'javascript',
    'HTML, CSS, JavaScript',
    '#',
    '#'
),

(
    'PHP & MySQL System',
    'A database-driven web application using PHP and MySQL.',
    'php',
    'PHP, MySQL, JavaScript',
    '#',
    '#'
);

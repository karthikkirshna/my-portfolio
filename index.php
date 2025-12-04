<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Portfolio — Dark Edition</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="sidebar">
    <h2 class="logo">DEVfolio</h2>
    <ul class="nav-links">
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#certificates">Certificates</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</div>

<div class="main-content">

<?php if(isset($_GET['sent']) && $_GET['sent']==1): ?>
    <div class="msg success">Message Sent Successfully ✔</div>
<?php elseif(isset($_GET['sent']) && $_GET['sent']==0): ?>
    <div class="msg error">Failed to Send Message ❌</div>
<?php endif; ?>

<section id="hero" class="hero">
    <div>
        <h1>Hello, I'm <span class="accent">Karthik K</span></h1>
        <p class="tagline">Web Developer</p>
        <a href="assets/certificate/Karthycv.pdf" download class="btn">Download Resume</a>
    </div>
    <img src="assets/images/profile.jpg" class="hero-img">
</section>

<section id="about" class="section">
    <h2>About Me</h2>
    <p>
        I'm a passionate developer who enjoys building unique and functional web experiences.
    </p>
</section>

<section id="skills" class="section">
    <h2>Skills</h2>
    <div class="skills-grid">
        <div class="skill">Python</div>
        <div class="skill">Java</div>
        <div class="skill">HTML</div>
        <div class="skill">CSS</div>
        <div class="skill">JavaScript</div>
        <div class="skill">MySQL</div>
    </div>
</section>

<section id="projects" class="section">
    <h2>Projects</h2>
    <div class="projects-grid">
        <div class="card">
            <h3>Portfolio website</h3>
            <p>A personal portfolio website using HTML,CSS,JS and php .</p>
</div>
    </div>
</section>

<section id="certificates" class="section">
    <h2>Certificates</h2>
    <div class="cert-grid">
        <a href="assets/certificate/AppuDW.pdf" target="_blank" class="cert-card">Data Mining</a>
    </div>
</section>

<section id="contact" class="section">
    <h2>Contact</h2>
    <form action="contact.php" method="POST" class="contact-form">
        <input type="hidden" name="hp"> <!-- honeypot -->

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Message</label>
        <textarea name="message" required></textarea>

        <button type="submit" class="btn">Send Message</button>
    </form>
</section>

</div>

<script src="assets/js/script.js"></script>

</body>
</html>
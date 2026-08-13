<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>James Takunda Dinda | Computer Science Portfolio</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


<style>

/* =========================
   GENERAL
========================= */

html{
    scroll-behavior:smooth;
}

body{
    margin:0;
    font-family:'Poppins', sans-serif;
    background:#f7f9fc;
    color:#333;
    overflow-x:hidden;
}

section{
    scroll-margin-top:80px;
}

.section-title{
    font-weight:700;
    margin-bottom:40px;
    text-align:center;
    position:relative;
}

.section-title::after{
    content:"";
    width:60px;
    height:4px;
    background:linear-gradient(90deg,#0d6efd,#6610f2);
    display:block;
    margin:12px auto 0;
    border-radius:20px;
}


/* =========================
   NAVBAR
========================= */

.navbar{
    background:rgba(10,15,30,.95);
    backdrop-filter:blur(10px);
    padding:15px 0;
    transition:.3s;
}

.navbar-brand{
    font-weight:800;
    font-size:22px;
    color:white !important;
}

.navbar-brand span{
    color:#0d6efd;
}

.nav-link{
    color:#ddd !important;
    margin-left:15px;
    transition:.3s;
}

.nav-link:hover{
    color:#0d6efd !important;
}


/* =========================
   HERO
========================= */

.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    position:relative;
    overflow:hidden;

    background:
    radial-gradient(circle at 10% 20%,rgba(13,110,253,.35),transparent 30%),
    radial-gradient(circle at 90% 80%,rgba(102,16,242,.35),transparent 30%),
    #080d1c;

    color:white;
}

.hero::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    border-radius:50%;
    background:rgba(13,110,253,.12);
    top:-200px;
    right:-150px;
    animation:float 8s ease-in-out infinite;
}

.hero::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    border-radius:50%;
    background:rgba(102,16,242,.12);
    bottom:-150px;
    left:-100px;
    animation:float 10s ease-in-out infinite reverse;
}

.hero-content{
    position:relative;
    z-index:2;
}

.profile-img{
    width:190px;
    height:190px;
    object-fit:cover;
    border-radius:50%;
    border:5px solid rgba(255,255,255,.9);
    box-shadow:
        0 0 0 10px rgba(255,255,255,.05),
        0 15px 50px rgba(0,0,0,.4);

    animation:profileFloat 4s ease-in-out infinite;
}

.hero h1{
    font-size:clamp(2.2rem,6vw,4.5rem);
    font-weight:800;
    margin-top:25px;
}

.hero h4{
    color:#cbd5e1;
    font-weight:400;
    line-height:1.8;
    font-size:clamp(1rem,2vw,1.3rem);
}

.hero-buttons{
    margin-top:30px;
}

.btn-main{
    background:linear-gradient(135deg,#0d6efd,#6610f2);
    color:white;
    border:none;
    padding:13px 28px;
    border-radius:50px;
    transition:.3s;
}

.btn-main:hover{
    transform:translateY(-4px);
    box-shadow:0 10px 30px rgba(13,110,253,.4);
    color:white;
}

.btn-outline-light{
    border-radius:50px;
    padding:12px 28px;
}


/* =========================
   ABOUT
========================= */

.about-card{
    border:none;
    border-radius:20px;
    padding:35px;
    background:white;
    box-shadow:0 10px 35px rgba(0,0,0,.07);
    transition:.4s;
}

.about-card:hover{
    transform:translateY(-8px);
}

.about-icon{
    font-size:45px;
    color:#0d6efd;
    margin-bottom:20px;
}


/* =========================
   SKILLS
========================= */

.skill-card{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 10px 35px rgba(0,0,0,.07);
}

.skill{
    margin-bottom:25px;
}

.skill-header{
    display:flex;
    justify-content:space-between;
    font-weight:600;
    margin-bottom:8px;
}

.progress{
    height:10px;
    border-radius:20px;
    background:#e9ecef;
    overflow:hidden;
}

.progress-bar{
    width:0;
    border-radius:20px;
    background:linear-gradient(90deg,#0d6efd,#6610f2);
    transition:width 2s ease;
}


/* =========================
   PROJECTS
========================= */

.project-card{
    background:white;
    border:none;
    border-radius:20px;
    overflow:hidden;
    height:100%;
    box-shadow:0 10px 35px rgba(0,0,0,.07);
    transition:.4s;
}

.project-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 45px rgba(0,0,0,.12);
}

.project-image{
    height:200px;
    background:linear-gradient(135deg,#0d6efd,#6610f2);
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    font-size:65px;
}

.project-content{
    padding:25px;
}

.project-content h4{
    font-weight:700;
}

.tech-badge{
    display:inline-block;
    padding:6px 12px;
    border-radius:20px;
    background:#eef4ff;
    color:#0d6efd;
    font-size:12px;
    margin:4px;
}


/* =========================
   EDUCATION
========================= */

.timeline{
    position:relative;
    max-width:800px;
    margin:auto;
}

.timeline-item{
    background:white;
    padding:30px;
    margin-bottom:25px;
    border-radius:20px;
    box-shadow:0 10px 35px rgba(0,0,0,.07);
    border-left:5px solid #0d6efd;
}


/* =========================
   CONTACT
========================= */

.contact-section{
    background:#080d1c;
    color:white;
}

.contact-box{
    background:rgba(255,255,255,.06);
    border:1px solid rgba(255,255,255,.1);
    padding:35px;
    border-radius:20px;
    backdrop-filter:blur(10px);
}

.contact-item{
    display:flex;
    align-items:center;
    margin-bottom:20px;
}

.contact-icon{
    width:45px;
    height:45px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg,#0d6efd,#6610f2);
    border-radius:50%;
    margin-right:15px;
}

.contact-item a{
    color:white;
    text-decoration:none;
}

.contact-item a:hover{
    color:#0d6efd;
}


/* =========================
   SOCIAL
========================= */

.social-links{
    margin-top:25px;
}

.social-links a{
    display:inline-flex;
    width:45px;
    height:45px;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    background:white;
    color:#111;
    margin:5px;
    transition:.3s;
}

.social-links a:hover{
    transform:translateY(-5px);
    background:#0d6efd;
    color:white;
}


/* =========================
   FOOTER
========================= */

.footer{
    background:#050812;
    color:#9ca3af;
    padding:25px;
}


/* =========================
   BACK TO TOP
========================= */

#backToTop{
    position:fixed;
    right:25px;
    bottom:25px;
    width:45px;
    height:45px;
    border:none;
    border-radius:50%;
    background:linear-gradient(135deg,#0d6efd,#6610f2);
    color:white;
    display:none;
    z-index:999;
}


/* =========================
   ANIMATIONS
========================= */

.fade-up{
    opacity:0;
    transform:translateY(40px);
    transition:1s ease;
}

.fade-up.show{
    opacity:1;
    transform:translateY(0);
}

@keyframes float{

    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(30px);
    }

}

@keyframes profileFloat{

    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-12px);
    }

}


/* =========================
   MOBILE
========================= */

@media(max-width:768px){

    .hero{
        text-align:center;
        padding:120px 20px 80px;
        min-height:auto;
    }

    .profile-img{
        width:150px;
        height:150px;
    }

    .hero h1{
        font-size:2.2rem;
    }

    .hero h4{
        font-size:.95rem;
        line-height:1.7;
    }

    .hero-buttons .btn{
        width:100%;
        margin-bottom:10px;
    }

    .about-card,
    .skill-card,
    .contact-box{
        padding:25px;
    }

    .section-title{
        font-size:1.8rem;
    }

    .project-image{
        height:160px;
    }

}

</style>

</head>


<body>


<!-- =========================
     NAVIGATION
========================= -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

<div class="container">

<a class="navbar-brand" href="#">
James <span>Dinda</span>
</a>

<button
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">

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
<a class="nav-link" href="#skills">Skills</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#projects">Projects</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#education">Education</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#contact">Contact</a>
</li>

</ul>

</div>

</div>

</nav>



<!-- =========================
     HERO
========================= -->

<section id="home" class="hero">

<div class="container hero-content">

<div class="row align-items-center">

<div class="col-lg-8 mx-auto text-center">

<img
src="image/profile.jpg"
alt="James Takunda Dinda"
class="profile-img mb-4"
>

<h1>
James Takunda Dinda
</h1>

<h4>

Computer Science Graduate
<br>

<span class="text-primary">
AI Specialist
</span>
|
Web Developer
|
IT Support
|
Hardware & Software Technician

</h4>


<div class="hero-buttons">

<a href="#contact" class="btn btn-main me-md-2">

<i class="fas fa-envelope"></i>
Contact Me

</a>


<a href="cv.pdf" class="btn btn-outline-light">

<i class="fas fa-download"></i>
Download CV

</a>

</div>

</div>

</div>

</div>

</section>



<!-- =========================
     ABOUT
========================= -->

<section id="about" class="py-5">

<div class="container">

<h2 class="section-title fade-up">

<i class="fas fa-user"></i>
About Me

</h2>


<div class="about-card fade-up">

<div class="text-center">

<i class="fas fa-laptop-code about-icon"></i>

</div>

<p class="lead text-center">

I am a passionate and detail-oriented
<strong>Computer Science graduate</strong>
with expertise in Artificial Intelligence,
Machine Learning, Web Development,
Networking, IT Support and Graphic Design.

</p>

<p class="text-center mb-0">

I enjoy developing innovative software solutions
that solve real-world problems, improve productivity
and create better user experiences.

</p>

</div>

</div>

</section>



<!-- =========================
     SKILLS
========================= -->

<section id="skills" class="py-5">

<div class="container">

<h2 class="section-title fade-up">

<i class="fas fa-code"></i>
Technical Skills

</h2>


<div class="skill-card fade-up">


<div class="skill">

<div class="skill-header">
<span>PHP & MySQL</span>
<span>90%</span>
</div>

<div class="progress">

<div class="progress-bar" data-width="90%"></div>

</div>

</div>


<div class="skill">

<div class="skill-header">
<span>HTML, CSS, Bootstrap & JavaScript</span>
<span>95%</span>
</div>

<div class="progress">

<div class="progress-bar" data-width="95%"></div>

</div>

</div>


<div class="skill">

<div class="skill-header">
<span>Python & Machine Learning</span>
<span>88%</span>
</div>

<div class="progress">

<div class="progress-bar" data-width="88%"></div>

</div>

</div>


<div class="skill">

<div class="skill-header">
<span>Networking & IT Support</span>
<span>85%</span>
</div>

<div class="progress">

<div class="progress-bar" data-width="85%"></div>

</div>

</div>


</div>

</div>

</section>



<!-- =========================
     PROJECTS
========================= -->

<section id="projects" class="py-5 bg-light">

<div class="container">

<h2 class="section-title fade-up">

<i class="fas fa-laptop-code"></i>
Featured Projects

</h2>


<div class="row g-4">


<!-- PROJECT 1 -->

<div class="col-md-6 fade-up">

<div class="project-card">

<div class="project-image">

<i class="fas fa-briefcase"></i>

</div>


<div class="project-content">

<h4>
Work Related Learning Connections
</h4>

<p>

A PHP and MySQL web application designed
to connect students with employers for
industrial attachment opportunities.

</p>


<span class="tech-badge">PHP</span>
<span class="tech-badge">MySQL</span>
<span class="tech-badge">HTML</span>
<span class="tech-badge">CSS</span>


</div>

</div>

</div>



<!-- PROJECT 2 -->

<div class="col-md-6 fade-up">

<div class="project-card">

<div class="project-image">

<i class="fas fa-seedling"></i>

</div>


<div class="project-content">

<h4>
Maize Disease Detection System
</h4>

<p>

A deep learning system capable of identifying
maize leaf diseases from images and providing
automated predictions through a web application.

</p>


<span class="tech-badge">Python</span>
<span class="tech-badge">TensorFlow</span>
<span class="tech-badge">DenseNet201</span>
<span class="tech-badge">Flask</span>


</div>

</div>

</div>


</div>

</div>

</section>



<!-- =========================
     EDUCATION
========================= -->

<section id="education" class="py-5">

<div class="container">

<h2 class="section-title fade-up">

<i class="fas fa-graduation-cap"></i>
Education

</h2>


<div class="timeline fade-up">


<div class="timeline-item">

<h4>
BSc Honours Degree in Computer Science
</h4>

<h6 class="text-primary">
Midlands State University
</h6>

<p>

<strong>Degree Class:</strong>
2.1

</p>

<p>

Studied Computer Science with a strong
focus on software development, artificial
intelligence and information technology.

</p>

</div>



<div class="timeline-item">

<h5>A-Level</h5>

<p>

Mathematics, Physics and Chemistry

</p>

</div>



<div class="timeline-item">

<h5>O-Level</h5>

<p>

10 passes including Mathematics,
English and Integrated Science.

</p>

</div>


</div>

</div>

</section>



<!-- =========================
     CONTACT
========================= -->

<section id="contact" class="contact-section py-5">

<div class="container">

<h2 class="section-title text-white fade-up">

<i class="fas fa-envelope"></i>
Get In Touch

</h2>


<div class="row justify-content-center">

<div class="col-lg-8">

<div class="contact-box fade-up">


<div class="contact-item">

<div class="contact-icon">

<i class="fas fa-envelope"></i>

</div>

<div>

<strong>Email</strong>

<br>

<a href="mailto:jamesdinda263@gmail.com">

jamesdinda263@gmail.com

</a>

</div>

</div>



<div class="contact-item">

<div class="contact-icon">

<i class="fas fa-phone"></i>

</div>

<div>

<strong>Phone</strong>

<br>

<a href="tel:+263774215221">

+263 774 215 221

</a>

</div>

</div>



<div class="contact-item">

<div class="contact-icon">

<i class="fab fa-whatsapp"></i>

</div>

<div>

<strong>WhatsApp</strong>

<br>

<a
href="https://wa.me/263774215221"
target="_blank">

Chat with me on WhatsApp

</a>

</div>

</div>



<div class="text-center mt-4">

<a
href="cv.pdf"
class="btn btn-main">

<i class="fas fa-file-download"></i>

Download My CV

</a>


<div class="social-links">

<!-- Replace # with your real profiles -->

<a href="#" target="_blank">

<i class="fab fa-github"></i>

</a>


<a href="https://www.linkedin.com/in/james-dinda/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BwJFQaIS%2BQBeiHfei5OBDkA%3D%3D" target="_blank">

<i class="fab fa-linkedin-in"></i>

</a>


<a
href="https://wa.me/263774215221"
target="_blank">

<i class="fab fa-whatsapp"></i>

</a>

</div>

</div>


</div>

</div>

</div>

</div>

</section>



<!-- =========================
     FOOTER
========================= -->

<footer class="footer text-center">

<div class="container">

<p class="mb-1">

© <?php echo date('Y'); ?>
James Takunda Dinda

</p>

<small>

Computer Science | AI | Web Development | IT Support

</small>

</div>

</footer>



<!-- BACK TO TOP -->

<button id="backToTop">

<i class="fas fa-arrow-up"></i>

</button>



<!-- BOOTSTRAP JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>

/* =========================
   SCROLL ANIMATION
========================= */

const animatedElements =
document.querySelectorAll('.fade-up');


const observer =
new IntersectionObserver((entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add('show');

}

});

},{
threshold:0.15
});


animatedElements.forEach(element=>{

observer.observe(element);

});



/* =========================
   SKILL BAR ANIMATION
========================= */

const skillBars =
document.querySelectorAll('.progress-bar');


const skillObserver =
new IntersectionObserver((entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

const width =
entry.target.getAttribute('data-width');

entry.target.style.width = width;

}

});

},{
threshold:0.5
});


skillBars.forEach(bar=>{

skillObserver.observe(bar);

});



/* =========================
   BACK TO TOP
========================= */

const backToTop =
document.getElementById('backToTop');


window.addEventListener('scroll',()=>{

if(window.scrollY > 400){

backToTop.style.display = "block";

}else{

backToTop.style.display = "none";

}

});


backToTop.addEventListener('click',()=>{

window.scrollTo({

top:0,
behavior:'smooth'

});

});



/* =========================
   CLOSE MOBILE MENU
========================= */

document.querySelectorAll('.nav-link')
.forEach(link=>{

link.addEventListener('click',()=>{

const navbar =
document.querySelector('.navbar-collapse');

if(navbar.classList.contains('show')){

new bootstrap.Collapse(navbar).hide();

}

});

});

</script>


</body>
</html>
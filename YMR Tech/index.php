<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YMR Tech - AI & Cloud Solutions</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Global Styles */
html {
    scroll-behavior: smooth;
}

body {
    background: #040A22;
    color: white;
    font-family: 'Poppins', sans-serif;
}

/* Navbar Styling */
.navbar {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar-brand, .nav-link {
    color: white !important;
    font-weight: 700;
}

.nav-link:hover {
    color: #ffcc00 !important;
}

/* Carousel */
.carousel-item img {
    width: 100%;
    height: 90vh;
    object-fit: cover;
}

/* Glassmorphism Effect */
.glassmorphism {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Buttons */
.btn-primary {
    background: linear-gradient(45deg, #ffcc00, #ff6b6b);
    border: none;
    transition: 0.3s;
}

.btn-primary:hover {
    background: linear-gradient(45deg, #ff6b6b, #ffcc00);
}

/* About Us Section */
#about {
    padding: 80px 20px;
    text-align: center;
}

#about h2 {
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 40px;
}

#about .glassmorphism {
    padding: 40px;
    border-radius: 15px;
}

#about img {
    width: 100%;
    max-width: 450px;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Services Section */
#services {
    padding: 80px 20px;
    text-align: center;
}

#services h2 {
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 40px;
}

#services .card {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
    width: 100%;
}

#services .card:hover {
    transform: translateY(-5px);
}

#services .card-img-top {
    width: 100%;
    height: 280px;
    object-fit: cover;
    border-radius: 15px 15px 0 0;
}

#services .card-body {
    padding: 20px;
    flex-grow: 1;
}

#services .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

/* Contact Us Section */
#contact {
    padding: 80px 20px;
    text-align: center;
}

#contact h2 {
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 40px;
}

#contact .glassmorphism {
    padding: 40px;
    border-radius: 15px;
}

#contact .row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

#contact .col-md-6 {
    flex: 1;
    max-width: 50%;
    padding: 20px;
}

#contact .form-control {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border: none;
    padding: 12px;
    border-radius: 5px;
}

#contact .form-control::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

#contact button {
    background: #040A22;
    border: none;
    padding: 12px;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: 0.3s;
}

#contact button:hover {
    background: #040A22;
}

/* Make phone numbers clickable */
#contact a[href^="tel"] {
    color: white;
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

#contact a[href^="tel"]:hover {
    color: #ffcc00;
}

/* Responsive Fixes */
@media (max-width: 992px) {
    /* Navbar */
    .navbar-nav {
        text-align: center;
    }

    /* Contact Us: Make Form & Details Stack */
    #contact .row {
        flex-direction: column;
        text-align: center;
    }

    #contact .col-md-6 {
        max-width: 100%;
        text-align: center;
    }

    #contact .form-control {
        text-align: center;
    }

    /* About Us Section: Stack Image Below Text */
    #about .row {
        flex-direction: column-reverse;
        text-align: center;
    }

    #about img {
        max-width: 100%;
        margin-top: 20px;
    }

    /* Services Section: Two Cards Per Row */
    #services .row {
        flex-direction: row;
        justify-content: center;
    }

    #services .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

@media (max-width: 768px) {
    /* Carousel Image Height */
    .carousel-item img {
        height: 50vh;
    }

    /* Services Section: One Card Per Row */
    #services .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 20px; /* Adds space between cards */
    }
}

@media (max-width: 576px) {
    /* Contact Us: Stack Content Fully */
    #contact .row {
        flex-direction: column;
    }

    #contact .col-md-6 {
        max-width: 100%;
    }

    /* Navbar: Center Links */
    .navbar-nav {
        text-align: center;
    }
    #services .col-md-6 {
        margin-bottom: 25px; /* Increases space for smaller screens */
    }
}

    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">YMR Tech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Home Section with Image Slider -->
<section id="home">
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Picture1.png" alt="Slide 1" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="images/image.jpg" alt="Slide 2" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- About Us Section -->
<section id="about">
    <div class="container">
        <h2 class="text-center mb-5">About Us</h2>
        <div class="row align-items-center glassmorphism">
            <!-- Left Side: Text Content -->
            <div class="col-md-6">
                <h3>Empowering Innovation with AI & Cloud Solutions</h3>
                <p>
                    Welcome to YMR Tech, your trusted partner in AI, cloud infrastructure, and data center solutions.
                    We specialize in AI-driven transformation for banking, ERP, cybersecurity, logistics, digital twins,
                    and low-code automation.
                </p>
                <p>
                    Our mission is to provide innovative and scalable solutions that drive efficiency and digital
                    transformation across industries. Join us in shaping the future of technology!
                </p>
            </div>

            <!-- Right Side: Image -->
            <div class="col-md-6 text-center">
                <img src="images/Picture.png" alt="About Us Image" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>


<!-- Our Services Section -->
<section id="services">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card text-center glassmorphism h-100">
                    <img src="images/Data Center.jpg" class="card-img-top" alt="Data Center Services">
                    <div class="card-body">
                        <h5 class="card-title">Data Center Services</h5>
                        <p class="card-text">Secure hybrid & private cloud solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card text-center glassmorphism h-100">
                    <img src="images/Software Development.jpg" class="card-img-top" alt="Software Development">
                    <div class="card-body">
                        <h5 class="card-title">Software Development</h5>
                        <p class="card-text">AI-powered software solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card text-center glassmorphism h-100">
                    <img src="images/AI Solutions.jpg" class="card-img-top" alt="AI Solutions">
                    <div class="card-body">
                        <h5 class="card-title">AI Solutions</h5>
                        <p class="card-text">Custom AI models for various industries.</p>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card text-center glassmorphism h-100">
                    <img src="images/IT Consultancy.jpg" class="card-img-top" alt="IT Consultancy">
                    <div class="card-body">
                        <h5 class="card-title">IT Consultancy</h5>
                        <p class="card-text">Expert IT infrastructure setup & AI integration.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section id="contact">
    <div class="container">
        <h2 class="text-center mb-5">Contact Us</h2>
        <div class="row align-items-center glassmorphism">
            <!-- Left Side: Contact Form -->
            <div class="col-md-6">
                <h4 class="mb-4">Get in Touch</h4>
                <form id="contactForm">
                    <div class="mb-3">
                        <input type="text" id="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" id="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea id="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    <p id="responseMessage" class="mt-3"></p>
                </form>
            </div>

            <!-- Right Side: Contact Details -->
            <div class="col-md-6">
                <h4 class="mb-4">Our Contact Details</h4>
                <p><strong>📍 Address:</strong> Hyderabad, India</p>
                <p><strong>📧 Email:</strong> <a href="mailto:arvind@ymrtech.in" style="color:white;">arvind@ymrtech.in</a></p>
                <p><strong>📞 Phone (India):</strong> 
                    <a href="tel:+919999265155" style="color:white; text-decoration: none;">+91 9999265155</a>
                </p>
                <p><strong>📞 Phone (Russia):</strong> 
                    <a href="tel:+79851768566" style="color:white; text-decoration: none;">+7 9851768566</a>
                </p>
                <p>💡 Let’s collaborate to build next-gen AI and cloud solutions for your business.</p>
            </div>
        </div>
    </div>
</section>


<!-- Bootstrap & JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- AJAX Form Submission -->
<script>
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault();
        let formData = new FormData(this);

        fetch("contact.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById("responseMessage").innerText = data;
            document.getElementById("contactForm").reset();
        })
        .catch(error => console.error("Error:", error));
    });
    document.addEventListener("DOMContentLoaded", function () {
        let navLinks = document.querySelectorAll(".nav-link"); // Select all navigation links
        let navbarToggler = document.querySelector(".navbar-toggler"); // Select the hamburger button
        let navbarCollapse = document.querySelector(".navbar-collapse"); // Select the collapsible menu

        navLinks.forEach(link => {
            link.addEventListener("click", function () {
                if (navbarCollapse.classList.contains("show")) {
                    navbarToggler.click(); // Simulate a click to close the menu
                }
            });
        });
    });
</script>

</body>
</html>

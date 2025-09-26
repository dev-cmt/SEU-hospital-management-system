<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System - Modern Healthcare Solutions</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-hospital me-2"></i>HMS
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#logins">Logins</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-primary" href="hms/user-login.php">Book Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">Modern Healthcare Management System</h1>
                        <p class="hero-subtitle">Providing exceptional healthcare services with cutting-edge technology and compassionate care for our community.</p>
                        <div class="hero-buttons">
                            <a href="#services" class="btn btn-light btn-lg me-3">Our Services</a>
                            <a href="#contact" class="btn btn-outline-light btn-lg">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="assets/images/logo.png" alt="Hospital Logo" class="img-fluid" style="max-width: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Section -->
    <section id="logins" class="login-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Access Your Account</h2>
                <p>Choose your login portal to access the hospital management system</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="login-card">
                        <img src="assets/images/patient.jpg" alt="Patient Login">
                        <div class="login-card-body">
                            <h6><i class="fas fa-user me-2"></i>Patient Login</h6>
                            <p class="text-muted">Access your medical records and appointments</p>
                            <a href="hms/user-login.php" target="_blank" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt me-2"></i>Login
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="login-card">
                        <img src="assets/images/doctor.jpg" alt="Doctor Login">
                        <div class="login-card-body">
                            <h6><i class="fas fa-user-md me-2"></i>Doctor Login</h6>
                            <p class="text-muted">Manage patients and medical records</p>
                            <a href="hms/doctor" target="_blank" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt me-2"></i>Login
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="login-card">
                        <img src="assets/images/admin.jpg" alt="Admin Login">
                        <div class="login-card-body">
                            <h6><i class="fas fa-user-shield me-2"></i>Admin Login</h6>
                            <p class="text-muted">System administration and management</p>
                            <a href="hms/admin" target="_blank" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt me-2"></i>Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Key Features</h2>
                <p>Comprehensive healthcare services designed for your well-being</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h5>Cardiology</h5>
                        <p class="text-muted">Advanced cardiac care with state-of-the-art equipment and experienced cardiologists.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-bone"></i>
                        </div>
                        <h5>Orthopaedic</h5>
                        <p class="text-muted">Specialized orthopedic care for bone and joint conditions with modern treatment approaches.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h5>Neurology</h5>
                        <p class="text-muted">Expert neurological care for complex brain and nervous system disorders.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h5>Pharmacy</h5>
                        <p class="text-muted">Comprehensive pharmaceutical services with medication management and counseling.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h5>Laboratory</h5>
                        <p class="text-muted">Advanced diagnostic laboratory services with quick and accurate test results.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>Quality Care</h5>
                        <p class="text-muted">Highest quality healthcare standards with patient-centered approach and modern facilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-text">
                        <h3>About Our Hospital</h3>
                        <p>Our hospital is committed to providing the highest quality healthcare services to our community. With state-of-the-art facilities and a team of experienced medical professionals, we strive to deliver exceptional patient care and medical excellence.</p>
                        <p>We believe in a patient-centered approach, ensuring that every individual receives personalized care tailored to their specific needs. Our modern facilities are equipped with the latest medical technology to provide accurate diagnoses and effective treatments.</p>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>24/7 Emergency Care</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Expert Medical Staff</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Modern Facilities</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span>Patient-Centered Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-image"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Gallery</h2>
                <p>Take a tour of our modern facilities and medical departments</p>
            </div>
            
            <div class="gallery-filter" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="dental">Dental</button>
                <button class="filter-btn" data-filter="cardiology">Cardiology</button>
                <button class="filter-btn" data-filter="neurology">Neurology</button>
                <button class="filter-btn" data-filter="laboratory">Laboratory</button>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="dental" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/images/gallery/gallery_01.jpg" alt="Dental Care" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="cardiology" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/images/gallery/gallery_02.jpg" alt="Cardiology" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="dental" data-aos="zoom-in" data-aos-delay="300">
                    <img src="assets/images/gallery/gallery_03.jpg" alt="Dental Surgery" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="laboratory" data-aos="zoom-in" data-aos-delay="400">
                    <img src="assets/images/gallery/gallery_04.jpg" alt="Laboratory" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="neurology" data-aos="zoom-in" data-aos-delay="500">
                    <img src="assets/images/gallery/gallery_05.jpg" alt="Neurology" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="neurology" data-aos="zoom-in" data-aos-delay="600">
                    <img src="assets/images/gallery/gallery_06.jpg" alt="Neurology Care" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Contact Us</h2>
                <p>Get in touch with us for any inquiries or appointments</p>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="contact-form" data-aos="fade-up">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fullname" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <h2>Useful Links</h2>
                    <ul>
                        <li><a href="#about"><i class="fas fa-angle-right me-2"></i>About Us</a></li>
                        <li><a href="#services"><i class="fas fa-angle-right me-2"></i>Services</a></li>
                        <li><a href="#logins"><i class="fas fa-angle-right me-2"></i>Logins</a></li>
                        <li><a href="#gallery"><i class="fas fa-angle-right me-2"></i>Gallery</a></li>
                        <li><a href="#contact"><i class="fas fa-angle-right me-2"></i>Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <h2>Contact Information</h2>
                    <address>
                        <i class="fas fa-map-marker-alt me-2"></i>123 Hospital Street, Medical District<br>
                        <i class="fas fa-phone me-2"></i>Phone: +1 (555) 123-4567<br>
                        <i class="fas fa-envelope me-2"></i>Email: <a href="mailto:info@hospital.com">info@hospital.com</a><br>
                        <i class="fas fa-clock me-2"></i>Hours: Monday - Friday: 8:00 AM - 6:00 PM
                    </address>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="copy">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Hospital Management System. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <p>Designed with <i class="fas fa-heart text-danger"></i> for better healthcare</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/script.js"></script>
</body>
</html>
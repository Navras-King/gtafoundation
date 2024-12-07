<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <title>GTA FOUNDATION</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

    <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <!-- <div class="border-end border-primary pe-3">
                                <a href="#" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            </div> -->
                            <div class="ps-3">
                                <a href="mailto:info@gtafoundation.org.np" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>info@gtafoundation.org.np</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-primary pe-3">
                                <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <!-- <div class="dropdown ms-3">
                                <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                                <div class="dropdown-menu rounded">
                                    <a href="#" class="dropdown-item">English</a>
                                    <a href="#" class="dropdown-item">Bangla</a>
                                    <a href="#" class="dropdown-item">French</a>
                                    <a href="#" class="dropdown-item">Spanish</a>
                                    <a href="#" class="dropdown-item">Arabic</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <a href="#" class="navbar-brand p-0">
                        <h1 class="text-primary mb-0">
                            <!-- <i class="fab fa-slack me-2"></i> -->
                            <img src="img/gtalogo.png" width="50" height="50" alt="Logo">
                             GTA Foundation</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 ms-lg-auto">
                            <a href="index.php" class="nav-item nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a>
                            <a href="about.php" class="nav-item nav-link  <?= ($currentPage == 'about.php') ? 'active' : '' ?>">About Us</a>
                            <div class="nav-item dropdown">
                                <a href="service.php" class="nav-item nav-link <?= in_array($currentPage, ['feature.php', 'service.php']) ? 'active' : '' ?>" >
                                    <span class="dropdown-toggle">Services</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="feature.php" class="dropdown-item">Governance</a>
                                    <a href="feature.php" class="dropdown-item">Our Guiding Principles</a>
                                    <a href="feature.php" class="dropdown-item">Human Resource</a>
                                    <a href="feature.php" class="dropdown-item">Quality</a>
                                    <a href="feature.php" class="dropdown-item">Finance &amp; Compliance</a>
                                    <a href="feature.php" class="dropdown-item">Communication</a>
                                </div>
                            </div>
                           
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Working Areas</span>
                                </a>
                                <div class="dropdown-menu">
                                   
                                </div>
                            </div>
                            <a href="team.php" class="nav-item nav-link  <?= ($currentPage == 'team.php') ? 'active' : '' ?>">Team</a>
                            <a href="gallery.php" class="nav-item nav-link  <?= ($currentPage == 'gallery.php') ? 'active' : '' ?>">Gallery</a>
                            <a href="contact.php" class="nav-item nav-link  <?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact Us</a>
                            <!-- <div class="nav-btn px-3">
                                <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0"> Get a Quote</a>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                            <i class="fa fa-phone-alt fa-2x"></i>
                            <div class="position-absolute" style="top: 7px; right: 12px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                        <div class="d-flex flex-column ms-3">
                            <span>Call to Our Experts</span>
                            <a href="tel:+ 0123 456 7890"><span class="text-dark">+977 1 542 8666</span></a>
                        </div>
                    </div> -->
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Builderz - Construction Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction Company Website Template" name="keywords">
    <meta content="Construction Company Website Template" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('assets') ?>/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/lib/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                                <!-- <h1>Builderz</h1> -->
                                <?php foreach ($general_data as $g) { ?>
                                    <h1><?php echo $g->logo; ?></h1>
                                <?php } ?>
                                <!-- <img src="/img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <!-- <p>Mon - Fri, 8:00 - 9:00</p> -->
                                        <?php foreach ($general_data as $g) { ?>
                                            <p><?php echo $g->opening_hour; ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <!-- <p>+012 345 6789</p> -->
                                        <?php foreach ($general_data as $g) { ?>
                                            <p><?php echo $g->call_us; ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="flaticon-send-mail"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <!-- <p>info@example.com</p> -->
                                        <?php foreach ($general_data as $g) { ?>
                                            <p><?php echo $g->email_us; ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="<?php echo base_url('Admin/about/') ?>" class="nav-item nav-link">About</a>
                            <a href="<?php echo base_url('Admin/service/') ?>" class="nav-item nav-link">Service</a>
                            <a href="<?php echo base_url('Admin/team') ?>" class="nav-item nav-link">Team</a>
                            <a href="<?php echo base_url('Admin/projects/') ?>" class="nav-item nav-link">Project</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo base_url('Admin/single_blog/') ?>" class="dropdown-item">Blog Page</a>
                                    <a href="<?php echo base_url('Admin/single_blog/') ?>" class="dropdown-item">Single Page</a>
                                </div>
                            </div>
                            <a href="<?php echo base_url('Admin/contact/') ?>" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn" href="#">Get A Quote</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <?php foreach ($slider_data as $slider) { ?>
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('assets') ?>/img/carousel-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <!-- <p class="animated fadeInRight">We Are Professional</p>
                            <h1 class="animated fadeInLeft">For Your Dream Project</h1> -->

                            <p class="animated fadeInRight"><?php echo $slider->top_headline; ?></p>
                            <h1 class="animated fadeInLeft"><?php echo $slider->main_headline; ?></h1>

                            <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                        </div>
                    </div>
                <?php } ?>

                <div class="carousel-item">
                    <img src="<?php echo base_url('assets') ?>/img/carousel-2.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">Professional Builder</p>
                        <h1 class="animated fadeInLeft">We Build Your Home</h1>
                        <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="<?php echo base_url('assets') ?>/img/carousel-3.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">We Are Trusted</p>
                        <h1 class="animated fadeInLeft">For Your Dream Home</h1>
                        <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                    </div>
                </div>
            </div>


            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->


        <!-- Feature Start-->
        <div class="feature wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-worker"></i>
                            </div>

                            <div class="feature-text">
                                <h3>Expert Worker</h3>
                                <!-- <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p> -->
                                <?php foreach ($general_data as $g) { ?>
                                    <p><?php echo $g->top_description_one ?></p>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-building"></i>
                            </div>

                            <div class="feature-text">
                                <h3>Quality Work</h3>
                                <!-- <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p> -->
                                <?php foreach ($general_data as $g) { ?>
                                    <p><?php echo $g->top_description_tow ?></p>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="feature-text">
                                <h3>24/7 Support</h3>
                                <!-- <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p> -->
                                <?php foreach ($general_data as $g) { ?>
                                    <p><?php echo $g->top_description_three ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Feature End-->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="<?php echo base_url('assets') ?>/img/about.jpg" alt="Image">
                        </div>
                    </div>
                    <?php foreach ($about_data as $a) { ?>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <!-- <p>Welcome to Builderz</p> -->
                                <!-- <h2>25 Years Experience</h2> -->
                                <p><?php echo $a->welcome_to ?></p>
                                <h2><?php echo $a->welcome_heading ?></h2>
                            </div>
                            <div class="about-text">
                                <p><?php echo $a->description ?></p>
                                <p><?php echo $a->description2 ?></p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <!-- About End -->


        <!-- Fact Start -->
        <div class="fact">
            <?php foreach ($about_data as $a) { ?>
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <!-- <h2 data-toggle="counter-up">109</h2> -->
                                        <h2 data-toggle="counter-up"><?php echo $a->total_employee ?></h2>
                                        <p>Expert Workers</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <!-- <h2 data-toggle="counter-up">485</h2> -->
                                        <h2 data-toggle="counter-up"><?php echo $a->total_clients ?></h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <!-- <h2 data-toggle="counter-up">789</h2> -->
                                        <h2 data-toggle="counter-up"><?php echo $a->complete_project ?></h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up"><?php echo $a->running_project ?></h2>
                                        <p>Running Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
        </div>
        <!-- Fact End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Services</p>
                    <h2>We Provide Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo base_url('assets') ?>/img/service-1.jpg" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Building Construction</h3>
                                <a class="btn" href="<?php echo base_url('assets') ?>/img/service-1.jpg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo base_url('assets') ?>/img/service-2.jpg" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>House Renovation</h3>
                                <a class="btn" href="<?php echo base_url('assets') ?>/img/service-2.jpg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo base_url('assets') ?>/img/service-3.jpg" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Architecture Design</h3>
                                <a class="btn" href="<?php echo base_url('assets') ?>/img/service-3.jpg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo base_url('assets') ?>/img/service-4.jpg" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Interior Design</h3>
                                <a class="btn" href="<?php echo base_url('assets') ?>/img/service-4.jpg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo base_url('assets') ?>/img/service-5.jpg" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Fixing & Support</h3>
                                <a class="btn" href="<?php echo base_url('assets') ?>/img/service-5.jpg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo base_url('assets') ?>/img/service-6.jpg" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Painting</h3>
                                <a class="btn" href="<?php echo base_url('assets') ?>/img/service-6.jpg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Video Start -->
        <div class="video wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Team</p>
                    <h2>Meet Our Engineer</h2>
                </div>
                <?php foreach ($team_member as $team) { ?>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                            <div class="team-item">
                                <div class="team-img">
                                    <img src="<?php echo base_url() ?>assets/img/team-1.jpg" alt="Team Image">
                                    <!-- <img height="30" width="40" alt="Image not found" src="<?php //echo base_url('/uploads/' . $team->photo_team_member) 
                                                                                                ?> "> -->
                                </div>
                                <div class="team-text">
                                    <!-- <h2>Adam Phillips</h2> -->
                                    <h2><?php echo $team->name ?></h2>
                                    <!-- <p>CEO & Founder</p> -->
                                    <p><?php echo $team->designation ?></p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href="<?php echo $team->tw ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href="<?php echo $team->fb ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href="<?php echo $team->lindin ?>"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href="<?php echo $team->insta ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="<?php echo base_url('assets') ?>/img/team-2.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Dylan Adams</h2>
                                    <p>Civil Engineer</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="<?php echo base_url('assets') ?>/img/team-3.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Jhon Doe</h2>
                                    <p>Interior Designer</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="<?php echo base_url('assets') ?>/img/team-4.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Josh Dunn</h2>
                                    <p>Painter</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- Team End -->


        <!-- FAQs Start -->
        <div class="faqs">
            <div class="container">
                <div class="section-header text-center">
                    <p>Frequently Asked Question</p>
                    <h2>You May Ask</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="accordion-1">
                            <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="accordion-2">
                            <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.2s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.4s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.5s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->


        <!-- Testimonial Start -->
        <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider-nav">
                            <div class="slider-nav"><img src="<?php echo base_url('assets') ?>/img/testimonial-1.jpg" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="<?php echo base_url('assets') ?>/img/testimonial-2.jpg" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="<?php echo base_url('assets') ?>/img/testimonial-3.jpg" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="<?php echo base_url('assets') ?>/img/testimonial-4.jpg" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="<?php echo base_url('assets') ?>/img/testimonial-1.jpg" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="<?php echo base_url('assets') ?>/img/testimonial-2.jpg" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="<?php echo base_url('assets') ?>/img/testimonial-3.jpg" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="<?php echo base_url('assets') ?>/img/testimonial-4.jpg" alt="Testimonial"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider">

                            <?php foreach ($client as $c) { ?>
                                <div class="slider-item">
                                    <h3><?php echo $c->client_name ?></h3>
                                    <h4><?php echo $c->client_company ?></h4>
                                    <p><?php echo $c->client_opinion ?></p>
                                </div>
                            <?php } ?>


                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Latest Blog</p>
                    <h2>Latest From Our Blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?php echo base_url('assets') ?>/img/blog-1.jpg" alt="Image">
                            </div>
                            <div class="blog-title">
                                <h3>Lorem ipsum dolor sit</h3>
                                <a class="btn" href="">+</a>
                            </div>
                            <div class="blog-meta">
                                <p>By<a href="">Admin</a></p>
                                <p>In<a href="">Construction</a></p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?php echo base_url('assets') ?>/img/blog-2.jpg" alt="Image">
                            </div>
                            <div class="blog-title">
                                <h3>Lorem ipsum dolor sit</h3>
                                <a class="btn" href="">+</a>
                            </div>
                            <div class="blog-meta">
                                <p>By<a href="">Admin</a></p>
                                <p>In<a href="">Construction</a></p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?php echo base_url('assets') ?>/img/blog-3.jpg" alt="Image">
                            </div>
                            <div class="blog-title">
                                <h3>Lorem ipsum dolor sit</h3>
                                <a class="btn" href="">+</a>
                            </div>
                            <div class="blog-meta">
                                <p>By<a href="">Admin</a></p>
                                <p>In<a href="">Construction</a></p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
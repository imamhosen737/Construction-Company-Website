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
                            <a href="<?php echo base_url('Admin/index') ?>">
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
                            <a href="<?php echo base_url('Admin/index/') ?>" class="nav-item nav-link active">Home</a>
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
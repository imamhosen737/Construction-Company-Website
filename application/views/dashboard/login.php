<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css2/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css2/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css2/iofrm-theme9.css">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder " style="text-align:center; margin:0 auto">
                    <h3>Train people well enough so they can leave.</h3>
                    <p>In order to build a rewarding employee experience, you need to understand what matters most to your people.</p>
                    <img src="<?php echo base_url() ?>assets/images/graphic5.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside" style="display: block; text-align: center;">
                            <a href="index.html">
                                <div class="logo text-center">
                                    <img class="logo-size" src="<?php echo base_url() ?>assets/images/icon.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <h4 style="color:#fff;text-align: center;">Login Form</h4>
                        </div>
                        <form method="post" action="<?php echo base_url('Dashboard/login') ?>">
                            <input class="form-control" type="text" name="username" placeholder="Enter Your Username" required>
                            <input class="form-control" type="text" name="password" placeholder="Password" required>
                            <div class="form-button text-center">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                            <p style="color:red;text-align:center"><?php echo $this->session->flashdata('msg'); ?></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>
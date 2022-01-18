<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <!-- <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p> -->
                                <?php foreach($general_data as $g){ ?>
                                <p><i class="fa fa-map-marker-alt"></i><?php echo $g->office_address ?></p>
                                <p><i class="fa fa-phone-alt"></i><?php echo $g->phone ?></p>
                                <p><i class="fa fa-envelope"></i><?php echo $g->email ?></p>
                                <?php } ?>


                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Building Construction</a>
                                <a href="">House Renovation</a>
                                <a href="">Architecture Design</a>
                                <a href="">Interior Design</a>
                                <a href="">Painting</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href=""<?php echo base_url('Admin/about/') ?>"">About Us</a>
                                <a href=""<?php echo base_url('Admin/contact/') ?>"">Contact Us</a>
                                <a href=""<?php echo base_url('Admin/team/') ?>"">Our Team</a>
                                <a href=""<?php echo base_url('Admin/projects/') ?>"">Projects</a>
                                <a href=""<?php echo base_url('Admin/index/') ?>"">Testimonial</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <!-- <h2>Newsletter</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu
                                </p> -->
                                <?php foreach($general_data as $g){ ?>
                                <h2>Newsletter</h2>
                                <p><?php echo $g->footer_news; ?></p>
                                <?php } ?>

                                <div class="form">
                                    <input class="form-control" placeholder="Email here">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <!-- <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p> -->
                            <?php foreach($general_data as $g){ ?>
                            <p>Designed By <a href="https://htmlcodex.com"><?php echo $g->designed_by ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/easing/easing.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/wow/wow.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/lightbox/js/lightbox.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/waypoints/waypoints.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/counterup/counterup.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    </body>
</html>
<a href="<?php echo base_url('index.php/Admin/logout') ?>" class="btn btn-xs btn-danger">Logout</a>
</div>
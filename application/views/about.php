<!-- Nav Bar End -->


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
            </div>
            <div class="col-12">
                <a href="<?php echo base_url('index.php/Admin/index/') ?>">Home</a>
                <a href="<?php echo base_url('index.php/Admin/about/') ?>">About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="<?php echo base_url() ?>assets/img/about.jpg" alt="Image">
                </div>
            </div>
            <?php foreach ($about_data as $a) { ?>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <!-- <p>Welcome to Builderz</p> -->
                        <p><?php echo $a->welcome_to ?></p>
                        <!-- <h2>25 Years Experience</h2> -->
                        <h2><?php echo $a->welcome_heading ?></h2>
                    </div>
                    <div class="about-text">
                        <p><?php echo $a->description ?></p>
                        <p><?php echo $a->description2 ?></p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start -->
<div class="fact">

    <div class="container-fluid">
        <div class="row counters">
            <div class="col-md-6 fact-left wow slideInLeft">
                <?php foreach ($about_data as $ab) { ?>
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-worker"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up"><?php echo $ab->total_employee ?></h2>
                                <p>Expert Workers</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="fact-text">
                                <!-- <h2 data-toggle="counter-up">485</h2> -->
                                <h2 data-toggle="counter-up"><?php echo $ab->total_clients ?></h2>
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
                            <h2 data-toggle="counter-up"><?php echo $ab->complete_project ?></h2>
                            <p>Completed Projects</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-crane"></i>
                        </div>
                        <div class="fact-text">
                            <!-- <h2 data-toggle="counter-up">890</h2> -->
                            <h2 data-toggle="counter-up"><?php echo $ab->running_project ?></h2>
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


<!-- FAQs Start -->
<div class="faqs">
    <?php foreach ($about_data as $a) { ?>
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
                    </div>
                </div> 
                    </div>
                </div>
            <?php } ?>
            </div>
            <!-- FAQs End -->


            <!-- Footer Start -->

            </body>

            </html>
        </div>
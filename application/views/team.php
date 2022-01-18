<!-- Nav Bar End -->


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Team</h2>
            </div>
            <div class="col-12">
                <a href="<?php echo base_url('Admin/index/') ?>">Home</a>
                <a href="<?php echo base_url('Admin/team/') ?>">Our Team</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Team</p>
            <h2>Meet Our Engineer</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <?php foreach ($team_member as $team) { ?>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="<?php echo base_url() ?>assets/img/team-1.jpg" alt="Team Image">
                            <!-- <img height="30" width="40" alt="Image not found" src="<?php //echo base_url('/uploads/' . $team->photo_team_member) ?> "> -->
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
                    <img src="<?php echo base_url() ?>assets/img/team-2.jpg" alt="Team Image">
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
                    <img src="<?php echo base_url() ?>assets/img/team-3.jpg" alt="Team Image">
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
                    <img src="<?php echo base_url() ?>assets/img/team-4.jpg" alt="Team Image">
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
     
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item">
                <div class="team-img">
                    <img src="<?php echo base_url() ?>assets/img/team-1.jpg" alt="Team Image">
                </div>
                <div class="team-text">
                    <h2>Adam Phillips</h2>
                    <p>CEO & Founder</p>
                </div>
                <div class="team-social">
                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="team-item">
                <div class="team-img">
                    <img src="<?php echo base_url() ?>assets/img/team-2.jpg" alt="Team Image">
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
                    <img src="<?php echo base_url() ?>assets/img/team-3.jpg" alt="Team Image">
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
                    <img src="<?php echo base_url() ?>assets/img/team-4.jpg" alt="Team Image">
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
    </div>
    <?php } ?>
</div>
<!-- Team End -->


<!-- Footer Start -->

</body>

</html>
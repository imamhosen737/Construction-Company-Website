 <!-- Page Header Start -->
 <div class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <h2>Contact Us</h2>
             </div>
             <div class="col-12">
                 <a href="<?php echo base_url('index.php/Admin/index/') ?>">Home</a>
                 <a href="<?php echo base_url('index.php/Admin/contact/') ?>">Contact Us</a>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->


 <!-- Contact Start -->
 <div class="contact wow fadeInUp">
     <div class="container">
         <div class="section-header text-center">
             <p>Get In Touch</p>
             <h2>For Any Query</h2>
         </div>
         <div class="row">
             <div class="col-md-6">
                 <?php foreach ($general_data as $g) { ?>
                     <div class="contact-info">
                         <div class="contact-item">
                             <i class="flaticon-address"></i>
                             <div class="contact-text">
                                 <h2>Location</h2>
                                 <!-- <p>123 Street, New York, USA</p> -->

                                 <p><?php echo $g->office_address ?></p>

                             </div>
                         </div>
                         <div class="contact-item">
                             <i class="flaticon-call"></i>
                             <div class="contact-text">
                                 <h2>Phone</h2>
                                 <!-- <p>+012 345 67890</p> -->
                                 <p><?php echo $g->phone ?></p>
                             </div>
                         </div>
                         <div class="contact-item">
                             <i class="flaticon-send-mail"></i>
                             <div class="contact-text">
                                 <h2>Email</h2>
                                 <!-- <p>info@example.com</p> -->
                                 <p><?php echo $g->email ?></p>
                             </div>
                         </div>
                     </div>
                 <?php } ?>
             </div>
             <div class="col-md-6">
                 <?php echo validation_errors(); ?>
                 <div class="contact-form">
                     <div id="success"></div>
                     <?php echo form_open_multipart('Dashboard/contact_msg'); ?>
                     <!-- <form name="sentMessage" id="contactForm" novalidate="novalidate"> -->
                     <div class="control-group">
                         <input type="text" class="form-control" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                         <p class="help-block text-danger"></p>
                     </div>
                     <div class="control-group">
                         <input type="email" class="form-control" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                         <p class="help-block text-danger"></p>
                     </div>
                     <div class="control-group">
                         <input type="text" class="form-control" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                         <p class="help-block text-danger"></p>
                     </div>
                     <div class="control-group">
                         <textarea class="form-control" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                         <p class="help-block text-danger"></p>
                     </div>
                     <div>
                         <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                         <!-- <input type="submit" class="btn" id="sendMessageButton" value="Send Message"> -->
                     </div>
                     <!-- </form> -->
                     <?php echo form_close(); ?>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Contact End -->


 <!-- Footer Start -->

 </body>

 </html>
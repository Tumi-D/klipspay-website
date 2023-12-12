<?php
include_once'hd.php';

?>
<!-- //w3l-header -->
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <h2>Contact Us</h2>
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; Contact</p>
    </div>
  </div>
</section>
<section class="w3l-contact-2 py-5" id="contact">
    <div class="contact-infubd section-gap py-lg-5 py-md-4">
        <div class="container">
            <div class="contact-grids d-grid">
                <div class="contact-left">
                    <h4>Leave us a Message</h4>
                    
                    <div class="hours">
                        <h6 class="info mt-3">Email:</h6>
                        <p> <a href="support@klipspay.com">
                            support@klipspay.com</a></p>
                        <h6 class="info mt-3">Address:</h6>
                        <p> Klips, AYABEN ST. Adenta Municipality, Accra.</p>
                        <h6 class="info mt-3">Contact:</h6>
                        <p class="margin-top"><a href="tel:+(233 3022518454)">+233 3022518454</a></p>
                    </div>
                </div>
                <div class="contact-right">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input">
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="">
                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input">
                        </div>
                        <div class="form-input">
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
                        </div>
                        <button class="btn btn-secondary btn-theme2 submit">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
</div></section>
<!-- contact -->
<section class="w3l-contacts-12" id="">
    <div class="contact-top">
     
        <!-- map -->
        <div class="map map mt-md-0 mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
        <!-- //map -->
    </div>
</section>
<!-- //contact -->
<!-- grids block 5 -->
<?php

include_once'footer.php';


?>



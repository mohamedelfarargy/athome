<?php
include "body/header.php";
?>
        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><span>||</span> Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Contact -->
        <section class="contact-area">
            <div id="map"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                    	<div class="contact-box-tp">
                    		<h4>Contact Info</h4>
                    	</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-box d-flex">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h6>Our Location</h6>
                                        <p>795 South Park Avenue, Long Island, Newyork, NY 94107.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-box d-flex">
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h6>Email Address</h6>
                                        <p>enquery@domain.com <br>help@yourdomain.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-box d-flex">
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h6>Phone Number</h6>
                                        <p>+1 908 875 7678 <br>+1 908 875 7637</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social-link">
                        	<ul class="list-unstyled list-inline">
                        		<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        		<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        		<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        		<li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        		<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        	</ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="contact-form">
                            <h4>Get In Touch</h4>
                            <form id="Form-M">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" id="name_M"  placeholder="Full Name" required=""></p>
                                     </div>
                                    <div class="col-md-6">
                                        <p><input type="text" id="email_M"  placeholder="Email" required=""></p>
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="text" id="subject_M"  placeholder="Subject"></p>
                                    </div>
                                    <div class="col-md-12">
                                        <p><textarea  id="message" placeholder="Message" required=""></textarea></p>
                                    </div>
                                    <div class="col-md-12">
                                        <!-- <button type="submit">Send Message</button> -->
                                        <input type="submit" value="Send" class="btn btn-primary">
                                    </div>
                                </div>
                                <div id="form-messages"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Brand area 2 -->
        <section class="brand2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tp-bnd owl-carousel">
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-01.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-02.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-03.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-04.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-05.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-06.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-07.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Brand area 2 -->
        <?php

include "body/footer.php";
        ?>

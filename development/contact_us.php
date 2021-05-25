<?php
    $page_title = "Contact Us";
    $meta_description = "";
    $meta_keyword = "";
    $active_nav = "contact us";


    include "include/header.inc.php";

?>




        <!-- start body banner -->
        <div class="other-body__banner">
            <div class="banner__image">
                <img class="other-banner__image-block" src="img/banner/banner_lg_2.jpg" alt="">
            </div>
            <!-- end banner image -->

            <!-- start banner content -->
            <div class="other-banner__content">
                <div class="banner__content-wrap wrap__container">
                    <section>
                        <header class=""  
                        data-aos="fade-up"
                        data-aos-offset="100"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                            <h2 class="banner_header-one">
                                Contact Us
                            </h2>
                            <h3 class="banner_header-two">
                                
                            </h3>
                        </header>
                        

                        <!-- <div class="banner__btn-wrap">
                            <a href="" class="banner__btn">view projects</a>
                        </div> -->
                    </section>
                </div>
            </div>
            <!-- end banner content -->
        


            <!-- <section class="example">
                <a href="#body-container" class="scroll-icon">
                    <span class="scroll-icon__dot"></span>
                </a>
            </section> -->
        </div>
        <!-- end body banner -->

        <!-- start body container -->
        <div class="body__container" id="body-container">
            <main>
                <!-- start section about -->
                <section class="section__block section__about">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-5"  
                            data-aos="fade-up"
                            data-aos-offset="100"
                            data-aos-delay="50"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                                
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7776.195879112832!2d77.5983203!3d12.9655844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15d7a5de4879%3A0x8006628bd5096119!2sGopalan%20Enterprises!5e0!3m2!1sen!2sin!4v1619731728594!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            </div>
                            <div class="col-12 col-md-7"
                            data-aos="fade-up"
                            data-aos-offset="100"
                            data-aos-delay="150"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            
                                <!-- <div class="wrap__header">
                                    <h2 class="section__header-primary">
                                        Contact Us
                                    </h2>
                                </div> -->
                                <div class="wrap__detail text-center px-3">
                                    <p class="sub__detail">
                                        Get in Touch
                                    </p>

                                    <form method="post" data-form-title="CONTACT US">
                                        <input type="hidden" data-form-email="true">
                                        <div class="form-group">
                                        <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                                        </div>
                                        <div class="form-group">
                                        <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                                        </div>
                                        <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                                        </div>
                                        <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" class="btn btn__primary">submit</button>
                                        </div>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end section about -->

            </main>
        </div>
        <!-- end body container -->














<?php

include "include/footer.inc.php";

?>
<?php
    $page_title = "Book Consultation";
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
                                Consultation
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
                            
                            <div class="col-12"
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
                                <div class="wrap__detail px-3">
                                    <header class="text-center">
                                        
                                        <h4 class="h3 pb-3">
                                            Consult Our Interior Designers
                                        </h4> 
                                        
                                        <p class="sub__detail">
                                            Have a chat with our interior designers and we will be more than happy to offer you the best of our services.    
                                        </p>
                                    </header>

                                    <form method="post" data-form-title="CONTACT US">
                                        <div class="row">

                                            <div class="col-12 col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="">First Name</label>
                                                    <input type="text" class="form-control" name="name" required="" placeholder="First Name*" data-form-field="Name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="">Last Name</label>
                                                    <input type="text" class="form-control" name="name" required="" placeholder="Last Name*" data-form-field="Name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="">E-mail</label>
                                                    <input type="text" class="form-control" name="name" required="" placeholder="Email*" data-form-field="Name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="">Phone Number</label>
                                                    <input type="text" class="form-control" name="name" required="" placeholder="Phone Number*" data-form-field="Name">
                                                </div>
                                            
                                            </div>
                                            <div class="col-12 col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="">Having Budget In Mind</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Select your budget</option>
                                                        <option value="">Less than 6 Lakhs</option>
                                                        <option value="">6 to 9 Lakhs</option>
                                                        <option value="">9 to 15 Lakhs</option>
                                                        <option value="">15+ Lakhs</option>
                                                    </select>
                                                </div>
                                            
                                            </div><div class="col-12 col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="">Select your location</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Select your location</option>
                                                        <option value="">Bannerghatta</option>
                                                        <option value="">Banashankari</option>
                                                        <option value="">Old mardas road</option>
                                                        <option value="">other</option>
                                                    </select>
                                                </div>
                                            
                                            </div>
                                            <div class="col-12 col-12">
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Any specific requirement</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn__primary">submit</button>
                                            </div>

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
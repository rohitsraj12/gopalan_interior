<?php

    $page_title = "FAQ";
    $meta_description = "";
    $meta_keyword = "";
    $active_nav = "";

    // associative array for FAQ question and answer
    $faq = [
        "1. What kind of spaces does Gopalan Interiors design?" => "Gopalan Interiors offer complete interiors for commercial and residential properties, be it small or big, individual homes, villas or apartments.",
        "2. What is full home design?" => "The term ‘full home design” refers to designing interiors for the entire home i.e., living room, kitchen, dining room, bedroom and any other spaces in your home. This includes modular furniture, services and décor products.",
        "3. Can I get just a part of my home designed?" => "Yes we can work worth you to design a part of your home, be it your living room or modular kitchen. We suggest a consultation with our designer to get a definite answer based on your unique scope of work.",
        "4. I live outside India, but have a property in India. Can Gopalan Interiors design my home?" => "Yes we can surely help you with that. Our designers are trained to manage consultations via email/chat/video. With our proprietary online tools, you can track your home designing from anywhere around the world.",
        "5. Does Gopalan Interiors undertake civil work?" => "Gopalan Interiors offer end-to-end home interiors which includes civil work by our trusted and professional service partners. To know more, please discuss the scope of your requirements with one of our designers.",
    ];

    include "include/header.inc.php";

?>
        <!-- start body banner -->
        <div class="other-body__banner">
            <div class="banner__image">
                <img class="other-banner__image-block" src="img/banner/how_we_work_lg.jpg" alt="">
            </div>
            <!-- end banner image -->

            <!-- start banner content -->
            <div class="other-banner__content">
                <div class="banner__content-wrap wrap__container">
                    <section>
                        <header data-aos="fade-up"
                        data-aos-offset="100"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                            <h2 class="banner_header-one">
                                FAQ
                            </h2>
                            
                        </header>
                    </section>
                </div>
            </div>
            <!-- end banner content -->
        </div>
        <!-- end body banner -->


        
        <!-- start body container -->
        <div class="body__container" id="body-container">
            <main>

                <div class="section__block page__header text-center"
                data-aos="fade-up"
                data-aos-offset="100"
                data-aos-delay="50"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                    <h2 class="section__header-main">
                        FAQ
                    </h2>
                </div>

                <section class="section__block-bottom section__faq">
                    <div class="wrap__container">

                        <?php 
                            //fecthing data from associative array 
                            foreach($faq as $question => $answer){
                                ?>

                                <article class="faq__block" class=""  
                                data-aos="fade-up"
                                data-aos-offset="100"
                                data-aos-delay="50"
                                data-aos-duration="1000"
                                data-aos-easing="ease-in-out">
                                    <header class="faq__question">
                                        <h4 class="sub__detail">
                                            <?php echo $question;?>
                                        </h4>
                                    </header>

                                    <div class="faq__answer">
                                        <p>
                                            <?php echo $answer;?>
                                        </p>
                                    </div>
                                </article>

                                <?php
                            }
                        ?>
                    </div>
                </section>

                <aside class="section__block-bottom section__aside">

                    <section class="aside__contact">
                        <div class="wrap__container">
                            <div class="row">
                                <div class="col-sm-5">
                                    <article>
                                        <header class="wrap__header pb-3"  
                                        data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <h2 class="section__header-main">
                                                Contact Us
                                            </h2>
                                        </header>
                                        <div class="wrap__body" 
                                        data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">

                                            <P>
                                                If you have more queries then please reach us.
                                            </P>

                                            <ul class="contact__lists">
                                                <li>
                                                    <span>E mail</span>: <a href="mailto:interior@gopalanenterprises.com:">Interior@gopalanenterprises.com</a>
                                                </li>
                                                <li>
                                                    <span>Call</span>: <a href="tel:08046824682">080-46824682 (ext: 141/163)</a> 
                                                </li>
                                            </ul>

                                        </div>

                                    </article>

                                </div>

                                <div class="col-sm-7">

                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- <section class="aside__links">
                        
                        <div class="wrap__container">
                            <div class="wrap__header pb-3">
                                <h2 class="section__header-main">
                                    Check these page
                                </h2>
                            </div>
                        </div>
                    </section> -->
                </aside>

            </main>
        </div>
        <!-- end body container -->













<?php

include "include/footer.inc.php";

?>
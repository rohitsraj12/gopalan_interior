<!-- start body footer -->
<div class="body__footer">
            <footer>
                <div class="wrap__container">
                    <div class="row pt-5 pb-3">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="footer__about pt-4">
                                <p class="text-light">
                                At Gopalan Interiors, we believe in giving the best designed interiors for our clients. Our aim is to turn our customer’s dream into reality.     
                                </p>
                            </div>

                            <div class="social__media">
                                <ul class="list-unstyled d-flex">
                                    <li class="mx-2"><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li class="mx-2"><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <!-- <li class="mx-2"><a href=""><i class="fa fa-linkedin"></i></a></li> -->
                                    <li class="mx-2"><a href=""><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="col-12 col-sm-6 col-md-2">
                            <header class="footer__header">
                                Quick Link
                            </header>
                            <div class="footer__body">
                                <ul class="list-unstyled">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about_us.php">How we work</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <!-- <li><a href="portfolio.php">Portfolio</a></li> -->
                                    <li><a href="contact_us.php">Contact us</a></li>
                                    <li><a href="faq.php">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <header class="footer__header">
                                Our Services
                            </header>
                            <div class="footer__body">
                                <ul class="list-unstyled">
                                    <li><a href="residential_interior_design.php">Residential Interior Design</a></li>
                                    <li><a href="commercial_interior_design.php">Commercial Interior Design</a></li>
                                    <li><a href="modular_kitchen_design.php">Modular Kitchen Design</a></li>
                                    <li><a href="custom_furniture_design.php">Custom Furniture Design</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <header class="footer__header">
                                Contact Details
                            </header>
                            <div class="footer__body">
                                <ul class="list-unstyled">
                                    <li><a href="">address: #5/1 Rich Homes, Richmond Road, Bangalore 560025</a></li>
                                    <li><a href="">email: Interior@gopalanenterprises.com</a></li>
                                    <li><a href="tel:08046824682">phone: 080-46824682 (ext: 141/163)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="copy__right">
                    <p class="text-center py-2 m-0">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <a href="https://www.gopalaninteriors.com/">gopalaninteriors.com</a> | <a href="Privacy_policy.html">Privacy Policy</a>
                    </p>
                </div>
            </footer>
        </div>
        <!-- end body footer -->
    </div>
    <!-- end body wrap -->

    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.4/jquery.scrollify.min.js"></script>
    <script src="js/script.js"></script>

    <!-- testimonial parallex -->
    <script>
        (function($) {
        /** change value here to adjust parallax level */
        var parallax = -0.5;

        var $bg_images = $(".section__testimonial");
        var offset_tops = [];
        $bg_images.each(function(i, el) {
            offset_tops.push($(el).offset().top);
        });

        $(window).scroll(function() {
            var dy = $(this).scrollTop();
            $bg_images.each(function(i, el) {
            var ot = offset_tops[i];
            $(el).css("background-position", "50% " + (dy - ot) * parallax + "px");
            });
        });
        })(jQuery);
    </script>

    <!-- load animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="js/mklb.js"></script>

</body>
</html>
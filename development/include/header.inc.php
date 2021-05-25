<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title; ?> | gopalaninteriors.com</title>
    <!-- stylesheet -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mklb.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/demo.css">
</head>

<body>
    <!-- strat body wrap -->
    <div class="body__wrap">
        <!-- start body header -->
        <div class="body__header">
            <div class="hamburger">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <header class="container">
                <!-- start header brand -->
                <div class="header__brand">
                    <a href="">
                        <img class="header__brand-img" src="img/brand/gopalan-interiors-header.png" alt="">
                    </a>
                </div>
                <!-- end header brand -->

                <!-- start header nav -->
                <nav class="header__nav">
                    <ul>
                        <li class="nav__list pt-2"><a href="index.php" class="nav__link <?php if($active_nav == "home"){ echo "nav__active"; }?>">home</a></li>
                        <li class="nav__list pt-2"><a href="about_us.php" class="nav__link <?php if($active_nav == "about us"){ echo "nav__active"; }?>">how it works</a></li>
                        <!-- <li class="nav__list"><a class="nav__link">service <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <div class="sub__nav">
                                <ul>
                                    <li class="sub-nav__list"><a href="architecture.html" class="sub-nav__link">Architecture</a></li>
                                    <li class="sub-nav__list"><a href="floor_plan.html" class="sub-nav__link">Floor Planning</a></li>
                                    <li class="sub-nav__list"><a href="exterior.html" class="sub-nav__link">Exterior Works</a></li>
                                    <li class="sub-nav__list"><a href="interior.html" class="sub-nav__link">Interior Design</a></li>
                                    <li class="sub-nav__list"><a href="home_lighting.html" class="sub-nav__link">Home Lighting</a></li>
                                </ul>
                            </div>
                        </li> -->
                        <!-- <li class="nav__list"><a href="" class="nav__link">portfolio</a></li> -->
                        <li class="nav__list pt-2"><a href="gallery.php" class="nav__link <?php if($active_nav == "gallery"){ echo "nav__active"; }?>">Gallery</a></li>
                        <li class="nav__list pt-2"><a href="portfolio.php" class="nav__link <?php if($active_nav == "portfolio"){ echo "nav__active"; }?>">portfolio</a></li>
                        <li class="nav__list pt-2"><a href="contact_us.php" class="nav__link <?php if($active_nav == "contact us"){ echo "nav__active"; }?>">contact us</a></li>
                        <li class="nav__list"><a href="book_consultation.php" class="btn btn__nav">Free Consultation</a></li>
                    </ul>
                </nav>
                <!-- end header nav -->
            </header>
            
        </div>
        <!-- end body header -->
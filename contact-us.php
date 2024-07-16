<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Delici - Restaurants HTML Template - Menus List</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

</head>

<body>
    <div class="page-wrapper">
        <!-- active link  -->
        <?php $page = 'contact' ?>

        <!-- Preloader -->
        <?php require 'spinner.php' ?>
        <!-- Preloader End -->

        <!-- Main Header-->
        <?php require 'header.php' ?>
        <!--End Main Header -->



        <!--Menu Backdrop-->
        <div class="menu-backdrop"></div>

        <!-- Hidden Navigation Bar -->
        <section class="hidden-bar">
            <!-- Hidden Bar Wrapper -->
            <div class="inner-box">
                <div class="cross-icon hidden-bar-closer"><span class="far fa-close"></span></div>
                <div class="logo-box"><a href="index.html" title="Delici - Restaurants HTML Template"><img
                            src="images/resource/sidebar-logo.png" alt=""
                            title="Delici - Restaurants HTML Template"></a></div>

                <!-- .Side-menu -->
                <div class="side-menu">
                    <ul class="navigation clearfix">
                        <li class=""><a href="index.html">Home</a>
                        </li>
                        <li class="current dropdown"><a href="menu-list.html">Menus</a>
                            <ul>
                                <li><a href="menu-list-1.html">Menu List 1</a></li>
                                <li><a href="menu-list-2.html">Menu List 2</a></li>
                                <li><a href="menu-list-3.html">Menu List 3</a></li>
                                <li><a href="menu-list-4.html">Menu List 4</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="our-chef.html">Our chefs</a></li>
                        <li class="dropdown"><a href="#">Pages</a>
                            <ul>
                                <li><a href="#">Dropdown Menu 1</a></li>
                                <li><a href="#">Dropdown Menu 2</a></li>
                                <li><a href="#">Dropdown Menu 3</a></li>
                                <li class="dropdown"><a href="#">Dropdown Menu 4</a>
                                    <ul>
                                        <li><a href="#">Dropdown Menu level 2</a></li>
                                        <li><a href="#">Dropdown Menu level 2</a></li>
                                        <li><a href="#">Dropdown Menu Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown Lorem 5</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </div>
                <!-- /.Side-menu -->

                <h2>Visit Us</h2>
                <ul class="info">
                    <li>Restaurant St, Delicious City, <br>London 9578, UK</li>
                    <li>Open: 9.30 am - 2.30pm</li>
                    <li><a href="mailto:booking@domainame.com">booking@domainame.com</a></li>
                </ul>
                <div class="separator"><span></span></div>
                <div class="booking-info">
                    <div class="bk-title">Booking request</div>
                    <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
                </div>

            </div>
            <!-- / Hidden Bar Wrapper -->
        </section>
        <!-- / Hidden Bar -->

        <!--Info Back Drop-->
        <div class="info-back-drop"></div>

        <!-- Hidden Bar -->
        <section class="info-bar">
            <div class="inner-box">
                <div class="cross-icon"><span class="far fa-close"></span></div>
                <div class="logo-box"><a href="index.html" title="Delici - Restaurants HTML Template"><img
                            src="images/resource/sidebar-logo.png" alt=""
                            title="Delici - Restaurants HTML Template"></a></div>
                <div class="image-box"><img src="images/resource/sidebar-image.jpg" alt="" title=""></div>

                <h2>Visit Us</h2>
                <ul class="info">
                    <li>Restaurant St, Delicious City, <br>London 9578, UK</li>
                    <li>Open: 9.30 am - 2.30pm</li>
                    <li><a href="mailto:booking@domainame.com">booking@domainame.com</a></li>
                </ul>
                <div class="separator"><span></span></div>
                <div class="booking-info">
                    <div class="bk-title">Booking request</div>
                    <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
                </div>
            </div>
        </section>
        <!--End Hidden Bar -->

        <!-- Inner Banner Section -->
        <section class="inner-banner">
            <div class="image-layer" style="background-image: url(images/background/banner-image-4.jpg);"></div>
            <div class="auto-container">
                <div class="inner">
                    <div class="subtitle"><span>any query ?</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                    <h1><span>Contact Us</span></h1>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Map Section-->
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.8990627968983!2d78.26070637572097!3d17.32041858355548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcbc1005651abcd%3A0xb716c66ec1f5991b!2sSKYLINE%20RESTAURANT!5e0!3m2!1sen!2sin!4v1721101460712!5m2!1sen!2sin"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!--Contact Info Section-->
        <section class="contact-page">
            <div class="left-bg"><img src="images/background/bg-25.png" alt="" title=""></div>
            <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div>
            <!--location Section-->
            <div class="location-center">
                <div class="auto-container">
                    <div class="cinfo-box">
                        <div class="row clearfix">
                            <!--Block-->
                            <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                                    <h4>Lunch Time</h4>
                                    <div class="text">Monday to Sunday <br> 11.00 am - 2.30pm</div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box cp-seprator wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="300ms">
                                    <h4>Contact Info</h4>
                                    <div class="text">Moinabad, Telangana 501504<br>Email :
                                        skylinerestaurantltd@gmail.com</div>
                                    <div class="more-link"><a href="tel:+918008094786" tel>Booking : +91 8008094786</a>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                                    <h4>Dinner Time</h4>
                                    <div class="text">Monday to Sunday<br>5.30 pm - 12.00 pm</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Location form Section-->
            <div class="auto-container">
                <div class="c-page-form-box">
                    <div class="row clearfix">
                        <!--form Section-->
                        <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                            <div class="title-box centered">
                                <h2>Message us</h2>
                                <div class="text desc">Have a question about the our service? We're here to help,
                                    contact us today</div>
                            </div>
                            <div class="default-form reservation-form">
                                <form method="post" action="index.html">
                                    <div class="clearfix">
                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="fieldname" value="" placeholder="Your Name"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="fieldname" value="" placeholder="Your Email"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="field-inner">
                                                <input type="text" name="fieldname" value="" placeholder="Phone Number"
                                                    required="">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="field-inner">
                                                <textarea name="fieldname" placeholder="Special Request"
                                                    required=""></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one clearfix">
                                                <span class="btn-wrap">
                                                    <span class="text-one">send your message</span>
                                                    <span class="text-two">send your message</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--form image Section-->
                        <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                            <img src="images/resource/restaurant.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>




        <!--Main Footer-->
        <?php require 'footer.php' ?>
        <!-- main footer ends-->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom-script.js"></script>
</body>

</html>
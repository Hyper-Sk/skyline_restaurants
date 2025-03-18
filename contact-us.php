<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us - Skyline Restaurants</title>
    <?php require 'links.php' ?>


</head>

<body>
    <div class="page-wrapper">
        <!-- active link  -->
        <?php $page = 'contact' ?>

        <!-- Preloader -->
        <?php //require 'spinner.php' ?>
        <!-- Preloader End -->

        <!-- Main Header-->
        <?php require 'header.php' ?>
        <!--End Main Header -->


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
                                    <div class="text">Monday to Sunday <br> 12:00 PM - 12:00 AM</div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box cp-seprator wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="300ms">
                                    <h4>Contact Info</h4>
                                    <div class="text">Skyline Restaurants, Moinabad, Hyderabad.<br>Email :
                                        skylinerestaurantltd@gmail.com</div>
                                    <div class="more-link"><a href="tel:+918008094786" tel>Booking : +91 8008094786</a>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                                    <h4>Dinner Time</h4>
                                    <div class="text">Monday to Sunday<br>12:00 PM - 12:00 AM</div>
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
                                <form method="post" action="send_contact_form.php">
                                    <div class="clearfix">
                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="name" value="" placeholder="Your Name"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="email" name="email" value="" placeholder="Your Email"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="field-inner">
                                            <input type="tel" name="phone" value="" placeholder="Phone Number"
                                        pattern="[0-9]{10}" required>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="field-inner">
                                                <textarea name="message" placeholder="Special Request"
                                                    required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" 
                                            name="contact_send" class="theme-btn btn-style-one clearfix">
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
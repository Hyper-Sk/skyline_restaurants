<!DOCTYPE html>
<html lang="en">

<head>

    <title>Reservation - Skyline Restaurants</title>
    <?php require 'links.php' ?>

</head>

<body>
    <div class="page-wrapper">

        <!-- active link  -->
        <?php $page = 'reservation' ?>

        <!-- Preloader -->
        <?php //require 'spinner.php' ?>
        <!-- Preloader End -->

        <!-- Main Header-->
        <?php require 'header.php' ?>
        <!--End Main Header -->

        <!-- Inner Banner Section -->
        <section class="inner-banner">
            <div class="image-layer" style="background-image: url(images/background/banner-image-3.jpg);"></div>
            <div class="auto-container">
                <div class="inner">
                    <div class="subtitle"><span>book your table</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                    <h1><span>Reservation</span></h1>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Online Reservation Section-->
        <section class="online-reservation inner-page">
            <div class="left-bg"><img src="images/background/bg-5.png" alt="" title=""></div>
            <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div>
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>Reservation</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                    <h2>Book A Table</h2>
                    <div class="text desc">Restaurant will be open for all days, Sunday night will be closed, All
                        booking payment is secured with credit card, no charges will be aplly for online booking. no
                        refundable.</div>
                    <div class="text request-info">Booking request <a href="#">+91 8008094786</a> or fill out the order
                        form</div>
                </div>
                <div class="default-form reservation-form">
                    <form method="post" action="send.php">
                        <div class="row clearfix">

                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="name" value="" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <input type="tel" name="phone" value="" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <input type="email" name="email" value="" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <span class="alt-icon far fa-user"></span>
                                    <select class="l-icon" name="members">
                                        <option>1 Person</option>
                                        <option>2 Person</option>
                                        <option>3 Person</option>
                                        <option>4 Person</option>
                                        <option>5 Person</option>
                                        <option>6 Person</option>
                                        <option>7 Person</option>
                                        <option>8 Person</option>
                                        <option>9 Person</option>
                                        <option>10 Person</option>
                                        <option>More than 10 Person</option>
                                    </select>
                                    <span class="arrow-icon far fa-angle-down"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <span class="alt-icon far fa-calendar"></span>
                                    <input class="l-icon datepicker" type="text" name="date" value=""
                                        placeholder="DD-MM-YYYY" required readonly>
                                    <span class="arrow-icon far fa-angle-down"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <div class="field-inner">
                                        <span class="alt-icon far fa-clock"></span>
                                        <select class="l-icon" name="time">
                                            <option>08 : 00 am</option>
                                            <option>09 : 00 am</option>
                                            <option>10 : 00 am</option>
                                            <option>11 : 00 am</option>
                                            <option>12 : 00 pm</option>
                                            <option>01 : 00 pm</option>
                                            <option>02 : 00 pm</option>
                                            <option>03 : 00 pm</option>
                                            <option>04 : 00 pm</option>
                                            <option>05 : 00 pm</option>
                                            <option>06 : 00 pm</option>
                                            <option>07 : 00 pm</option>
                                            <option>08 : 00 pm</option>
                                            <option>09 : 00 pm</option>
                                            <option>10 : 00 pm</option>
                                        </select>
                                    </div>
                                    <span class="arrow-icon far fa-angle-down"></span>
                                </div>



                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <textarea name="message" placeholder="Instructions and Message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="send" class="theme-btn btn-style-one clearfix">
                            <span class="btn-wrap">
                                <span class="text-one">book a table</span>
                                <span class="text-two">book a table</span>
                            </span>
                        </button>
                    </form>
                    <!-- <div class="powered-by">Your Message has been sent </div> -->
                </div>
            </div>

            <!--map Section-->
            <div class="map-location-section">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="row clearfix">
                            <div class="reserv-col col-lg-8 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!-- <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.8990627968983!2d78.26070637572097!3d17.32041858355548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcbc1005651abcd%3A0xb716c66ec1f5991b!2sSKYLINE%20RESTAURANT!5e0!3m2!1sen!2sin!4v1721101460712!5m2!1sen!2sin" 
                                    
                                    
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->



                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.8990627968983!2d78.26070637572097!3d17.32041858355548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcbc1005651abcd%3A0xb716c66ec1f5991b!2sSKYLINE%20RESTAURANT!5e0!3m2!1sen!2sin!4v1721101460712!5m2!1sen!2sin"
                                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="info-col col-lg-4 col-md-12 col-sm-12">
                                <div class="inner">
                                    <div class="title">
                                        <h2>Hyderabad</h2>
                                    </div>
                                    <div class="data">
                                        <ul class="info">
                                            <li><strong>Contact Us</strong><br> Sky Line Restaurants, Moinabad, Hyderabad, Telangana <br> Call : +91
                                                8008094786 <br> Email : skylinerestaurantsltd@gmail.com </li>
                                            <div class="separator"><span></span></div>
                                            <li><strong>Lunch Time</strong><br>Monday to Sunday <br>12:00 PM - 12.00 AM
                                            </li>
                                            <li><strong>Dinner Time</strong><br>Monday to Sunday <br>12:00 PM - 12.00 AM
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!--location Section-->
            <!-- <div class="location-center">
                <div class="auto-container">
                    <div class="row clearfix">
                       
                        <div class="location-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                                <div class="icon-box"><img src="images/resource/ny.png" alt=""></div>
                                <h4>New York</h4>
                                <div class="text">Restaurant St, Delicious City, NY. <br>
                                    +88-123-123456<br>booking@domainname.com</div>
                                <div class="more-link"><a href="#">get direction</a></div>
                            </div>
                        </div>

                        
                        <div class="location-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                                <div class="icon-box"><img src="images/resource/dubai.png" alt=""></div>
                                <h4>Dubai</h4>
                                <div class="text">520, Delicious City, Revenu
                                    Db.<br>+88-123-123456<br>booking@domainname.com</div>
                                <div class="more-link"><a href="#">get direction</a></div>
                            </div>
                        </div>

                       
                        <div class="location-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                                <div class="icon-box"><img src="images/resource/paris.png" alt=""></div>
                                <h4>Paris</h4>
                                <div class="text">589, Delicious Avenue PS.<br>+88-123-123456 <br>
                                    booking@domainname.com</div>
                                <div class="more-link"><a href="#">get direction</a></div>
                            </div>
                        </div>

                      
                        <div class="location-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="900ms">
                                <div class="icon-box"><img src="images/resource/toronto.png" alt=""></div>
                                <h4>Toronto</h4>
                                <div class="text">Restaurant St, Delicious City, CA <br> +88-123-123456 <br>
                                    booking@domainname.com</div>
                                <div class="more-link"><a href="#">get direction</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->

        </section>


        <!--Main Footer-->
        <?php require 'footer.php' ?>
        <!-- footer ends  -->
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
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Skyline Restaurants</title>
   <?php require 'links.php' ?>
</head>

<body>
    <div class="page-wrapper">

        <!-- active link  -->
        <?php $page = 'home' ?>

        <!-- Preloader -->
        <?php require 'spinner.php' ?>
        <!-- Preloader End -->

        <!-- Main Header-->
        <?php require 'header.php' ?>
        <!--End Main Header -->

        <!-- Banner Section -->
        <?php require 'components/banner.php' ?>
        <!--End Banner Section -->

        <!--We Offer Section-->
        <?php require 'components/we_offer.php' ?>
        <!--End We Offer Section-->
        
        <!--Story Section-->
        <?php require 'components/story_section.php' ?>
        <!--End Story Section-->
        
        <!--Special Dish Section-->
        <?php require 'components/speacial_dishes.php' ?>
        <!--End Special Dish Section-->

        <!--Menu Section-->
        <?php require 'components/menu.php' ?>
        <!--End Menu Section-->
        
        <!--Special Offer Section-->
        <?php require 'components/speacial_offer.php' ?>
        <!--End Special Offer Section-->
        
        <!--Reservation Section-->
        <!-- <?php //require 'reservation-form.php' ?> -->
        <!--End Reservation Section-->
        
        <!--Why Us Section-->
        <?php require 'components/why_us.php' ?>
        <!--End Why Us Section-->
        
        <!--Featured Links Section-->
        <?php require 'components/featured_link.php' ?>
        <!--End Featured Links Section-->
        
        <!--Team Section-->
        <!-- <?php //require 'team.php'; ?> -->
        <!--End Team Section-->

        <!--Intro Video Section-->
        <?php require 'components/intro_video.php' ?>
        <!--End Intro Video Section-->

        <!--Recnt Updates Section-->
        <!-- <?php //require 'components/events.php'; ?> -->
        <!--End Recnt Updates Section-->

         <!--Testimonials Section-->
         <!-- <?php // require 'components/testimonials.php' ?> -->
         <!--End Testimonials Section-->

        <!--Main Footer-->
        <?php require 'footer.php'; ?>
        <!-- Footer Ends -->

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
    <script src="js/parallax.min.js"></script>
    <script src="js/custom-script.js"></script>
</body>

</html>
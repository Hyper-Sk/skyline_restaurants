<!DOCTYPE html>
<html lang="en">

<head>
<title>About - Skyline Restaurants</title>
   <?php require 'links.php' ?>

</head>

<body>
    <div class="page-wrapper">

        <!-- active link  -->
        <?php $page = 'about' ?>

        <!-- Preloader -->
        <?php //require 'spinner.php' ?>
        <!-- Preloader End -->

        <!-- Main Header-->
        <?php require 'header.php' ?>
        <!--End Main Header -->




        <!-- Inner Banner Section -->
        <section class="inner-banner">
            <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
            <div class="auto-container">
                <div class="inner">
                    <div class="subtitle"><span>our story</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                    <h1><span>About Us</span></h1>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--About Section-->
        <?php require 'components/about_section.php' ?>
        
        
        <!--Fluid Section-->
        <?php require 'components/fluid_section_1.php' ?>
        
        
        <!--Fluid Section-->
        <?php require 'components/fluid_section_2.php' ?>
        
        
        <!--Services Section-->
        <?php require 'components/services_section.php' ?>
        
        
        <!--Testimonials Section-->
        <?php require 'components/testimonials_2.php' ?>
        
        
        <!--Why Us Section-->
        <?php require 'components/why_us_2.php' ?>
        
        
        <!--Gallery Section-->
        <?php require 'components/images_slider.php' ?>
       

        <!--Main Footer-->
        <?php require 'footer.php'; ?>
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
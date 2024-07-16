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
        <?php $page = 'reservation' ?>

        <!-- Preloader -->
        <!-- <?php //require 'spinner.php' ?> -->
        <!-- Preloader End -->

        <!-- Main Header-->
        <?php require 'header.php' ?>
        <!--End Main Header -->

        <!-- Inner Banner Section -->
        <section class="inner-banner">
            <div class="image-layer" style="background-image: url(images/background/banner-image-3.jpg);"></div>
            <div class="auto-container">
                <div class="inner">
                    <div class="subtitle"><span>Request sent</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                    <h1><span>Successfull</span></h1>
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
                    <div class="subtitle"><span>Thanks</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                    <h2>Thanks for the Reservation</h2>
                    <div class="text desc">For any queries class us </div>
                    <div class="text request-info"><a href="#">+91 8008094786</a> </div>
                </div>
               
            </div>

           
       


      

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
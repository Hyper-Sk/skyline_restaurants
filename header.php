<!-- Main Header-->
<header class="main-header header-down">
    <div class="header-top">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-left clearfix">
                    <ul class="top-info clearfix">
                        <li><i class="icon far fa-map-marker-alt"></i>Skyline Restaurants, Moinabad, Telangana</li>
                        <li><i class="icon far fa-clock"></i> Daily : 12:00 PM to 12:00 AM</li>
                    </ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="top-info clearfix">
                        <li><a href="tel:+918008094786"><i class="icon far fa-phone"></i> +91 8008094786</a></li>
                        <li><a href="mailto:skylinerestaurantsltd@gmail.com"><i
                                    class="icon far fa-envelope"></i>skylinerestaurantsltd@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <!-- Main Box -->
            <div class="main-box clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="index.php" title="Skyline Restaurants"><img src="images/logo.png" alt=""
                                title=""></a></div>
                </div>

                <div class="nav-box clearfix">
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <nav class="main-menu">
                            <ul class="navigation clearfix">
                                <li class="<?php if ($page == 'home') {
                                    echo "current";
                                } ?>"><a href="index.php">Home</a>
                                </li>
                                <li class="<?php if ($page == 'about') {
                                    echo "current";
                                } ?>"><a href="about.php">About Us</a></li>
                                <li class="<?php if ($page == 'gallery') {
                                    echo "current";
                                } ?>"><a href="gallery.php">Gallery</a></li>

                                <li class="<?php if ($page == 'plane_menu') {
                                    echo "current";
                                } ?>"><a href="menu-list-2.php">Menu</a></li>

                                <li class="<?php if ($page == 'menus') {
                                    echo "current";
                                } ?>"><a href="menu-list-1.php">Aircraft Menu</a></li>
                                <li class="<?php if ($page == 'history') {
                                    echo "current";
                                } ?>"><a href="plane-history.php">Aircraft History</a></li>

                                <!-- <li class="dropdown"><a href="#">Pages</a>
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
                                        </li> -->
                                <li class="<?php if ($page == 'contact') {
                                    echo "current";
                                } ?>"><a href="contact-us.php">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                    <!--Nav Outer End-->

                    <div class="links-box clearfix">
                        <div class="link link-btn">
                            <a href="reservation-opentable.php" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">Book a table</span>
                                    <span class="text-two">Book a table</span>
                                </span>
                            </a>
                        </div>
                        <div class="link info-toggler">
                            <button class="info-btn">
                                <span class="hamburger">
                                    <span class="top-bun"></span>
                                    <span class="meat"></span>
                                    <span class="bottom-bun"></span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                        <button class="hidden-bar-opener">
                            <span class="hamburger">
                                <span class="top-bun"></span>
                                <span class="meat"></span>
                                <span class="bottom-bun"></span>
                            </span>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>
<!--End Main Header -->


<!--Menu Backdrop-->
<div class="menu-backdrop"></div>

<!-- Hidden Navigation Bar -->
<section class="hidden-bar">
    <!-- Hidden Bar Wrapper -->
    <div class="inner-box">
        <div class="cross-icon hidden-bar-closer"><span class="far fa-close"></span></div>
        <div class="logo-box"><a href="index.php" title=""><img src="images/logo.png" alt="" title=""></a></div>

        <!-- .Side-menu -->
        <div class="side-menu">
            <ul class="navigation clearfix">
                <li class="<?php if ($page == 'home') {
                    echo "current";
                } ?>"><a href="index.php">Home</a></li>

                <li class="<?php if ($page == 'about') {
                    echo "current";
                } ?>"><a href="about.php">About
                        Us</a></li>


                <li class="<?php if ($page == 'gallery') {
                    echo "current";
                } ?>"><a href="gallery.php">Gallery
                        </a></li>

                <li class="<?php if ($page == 'plane_menu') {
                    echo "current";
                } ?>"><a href="menu-list-2.php">Menu</a></li>


                <li class="<?php if ($page == 'menus') {
                    echo "current";
                } ?>"><a href="menu-list-1.php">Aircraft Menu</a></li>




                <li class="<?php if ($page == 'reservation') {
                    echo "current";
                } ?>"><a href="reservation-opentable.php">Book a Table</a></li>
                <li class="<?php if ($page == 'history') {
                    echo "current";
                } ?>"><a href="plane-history.php">Aircraft History</a></li>
                <li class="<?php if ($page == 'contact') {
                    echo "current";
                } ?>"><a href="contact-us.php">Contact Us</a></li>
                <!-- <li class="dropdown"><a href="menu-list-1.php">Menus</a>
                    <ul>
                        <li><a href="menu-list-1.php">Menu List 1</a></li>
                        <li><a href="menu-list-2.php">Menu List 2</a></li>
                        <li><a href="menu-list-3.php">Menu List 3</a></li>
                        <li><a href="menu-list-4.php">Menu List 4</a></li>
                    </ul>
                </li> -->



                <!-- <li class="dropdown"><a href="#">Pages</a>
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
                </li> -->

            </ul>
        </div>
        <!-- /.Side-menu -->

        <h2>Visit Us</h2>
        <ul class="info">
            <li>Skyline Restaurants, Moinabad, Hyderabad, Telangana</li>
            <li>Open: 12:00 PM - 12.00 AM</li>
            <li><a href="mailto:skylinerestaurantsltd@gmail.com">skylinerestaurantsltd@gmail.com</a></li>
        </ul>
        <div class="separator"><span></span></div>
        <div class="booking-info">
            <div class="bk-title">Booking request</div>
            <div class="bk-no"><a href="tel:+918008094786">+91 8008094786</a></div>
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
        <div class="logo-box"><a href="index.php" title=""><img src="images/logo.png" alt="" title=""></a></div>
        <div class="image-box"><img src="images/resource/sidebar-image.jpg" alt="" title=""></div>
        <h2>Visit Us</h2>
        <ul class="info">
            <li>Skyline Restaurants, Moinabad, Hyderabad, Telangana</li>
            <li>Open: 12:00 PM - 12.00 AM</li>
            <li><a href="mailto:skylinerestaurantsltd@gmail.com">skylinerestaurantsltd@gmail.com</a></li>
        </ul>
        <div class="separator"><span></span></div>
        <div class="booking-info">
            <div class="bk-title">Booking Request</div>
            <div class="bk-no"><a href="tel:+918008094786">+91 8008094786</a></div>
        </div>
    </div>
</section>
<!--End Hidden Bar -->
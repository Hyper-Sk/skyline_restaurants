<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Menu - Skyline Restaurants</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />

    <!-- styles  -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/gallery.css" rel="stylesheet" />
    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
  </head>

  <body>
    <div class="page-wrapper">
      <?php $page = 'gallery' ?>
      <!-- Preloader -->
      <!-- <?php //require 'spinner.php' 
        ?> -->
      <!-- Preloader End -->

      <!-- Main Header-->
      <?php require 'header.php' ?>
      <!--End Main Header -->

      <!-- Inner Banner Section -->
      <section class="inner-banner">
        <div
          class="image-layer"
          style="background-image: url(images/gallery/img-12.jpeg)"
        ></div>
        <div class="auto-container">
          <div class="inner">
            <div class="subtitle"><span>Skyline</span></div>
            <div class="pattern-image">
              <img src="images/icons/separator.svg" alt="" title="" />
            </div>
            <h1><span>Gallery</span></h1>
          </div>
        </div>
      </section>
      <!--End Banner Section -->

      <!-- gallery  -->
      <div class="gallery">
        <div class="image__card">
          <img
            src="./images/gallery/img-1.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-2.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-3.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-4.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-5.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-6.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-7.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-8.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-9.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-10.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-11.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-12.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-13.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-14.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-15.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-16.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        <div class="image__card">
          <img
            src="./images/gallery/img-17.jpeg"
            data-index="0"
            alt="Thumbnail 1"
          />
        </div>
        
      </div>

      <div class="viewer" id="viewer">
        <img id="image" src="" alt="Image Viewer" />
        <div class="controls">
          <div class="prev-next">
            <button id="prev-view"><img src="./images/icons/left-arrow.png" alt=""></button>
            <button id="next-view"><img src="./images/icons/right-arrow.png" alt=""></button>
          </div>
          <button id="close-view" class="close-view"> <img src="./images/icons/close.png" alt=""></button>
        </div>
      </div>
      <!--Main Footer-->
      <?php require 'footer.php'; ?>
      <!-- Footer Ends -->
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="icon fa fa-angle-up"></span>
    </div>

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
    <script src="js/imgViewer.js"></script>
  </body>
</html>

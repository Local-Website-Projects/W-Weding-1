<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title> Habibi - Wedding Template</title>
    <?php include('include/css.php'); ?>
</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <?php include('include/preloader.php'); ?>
    <!-- end preloader -->
    <!-- Start header -->
    <?php include('include/header.php'); ?>
    <!-- end of header -->
    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Gallery</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="index.php">Home</a></li>
                            <li>Gallery</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->
    <!-- start wpo-portfolio-section -->
    <section class="wpo-portfolio-section-s2 section-padding pt-120" id="gallery">
        <h2 class="hidden">some</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sortable-gallery">
                        <div class="gallery-filters"></div>
                        <div class="portfolio-grids gallery-container clearfix">
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/7.jpg" class="fancybox"
                                       data-fancybox-group="gall-1">
                                        <img src="assets/images/portfolio/7.jpg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/8.jpg" class="fancybox"
                                       data-fancybox-group="gall-1">
                                        <img src="assets/images/portfolio/8.jpg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/9.jpg" class="fancybox"
                                       data-fancybox-group="gall-1">
                                        <img src="assets/images/portfolio/9.jpg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/10.jpg" class="fancybox"
                                       data-fancybox-group="gall-1">
                                        <img src="assets/images/portfolio/10.jpg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/11.jpg" class="fancybox"
                                       data-fancybox-group="gall-1">
                                        <img src="assets/images/portfolio/11.jpg" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-portfolio-section -->

    <!-- start wpo-partners-section -->
    <section class="wpo-partners-section section-padding pt-0">
        <h2 class="hidden">Partners</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="partner-grids partners-slider owl-carousel">
                        <div class="grid">
                            <img src="assets/images/partners/1.png" alt>
                        </div>
                        <div class="grid">
                            <img src="assets/images/partners/2.png" alt>
                        </div>
                        <div class="grid">
                            <img src="assets/images/partners/3.png" alt>
                        </div>
                        <div class="grid">
                            <img src="assets/images/partners/4.png" alt>
                        </div>
                        <div class="grid">
                            <img src="assets/images/partners/5.png" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-partners-section-->

    <!-- start of wpo-site-footer-section -->
    <?php include('include/footer.php'); ?>
    <!-- end of wpo-site-footer-section -->
    <!-- color-switcher -->
    <?php include('include/color_switcher.php'); ?>

</div>
<!-- end of page-wrapper -->

<!-- All JavaScript files
================================================== -->
<?php include('include/js.php'); ?>
</body>

</html>
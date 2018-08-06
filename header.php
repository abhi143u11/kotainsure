    <!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Kota Insurance | Home</title>
        <meta name="description" content="Medicare supplement insurance">
        <meta name="keywords" content="medigap,medicare supplement,medicare insurance,supplemental insurance,medicare supplement plans,medicare supplement comparison,medicare supplement insurance,medicare advantage,medicare plans,aarp medicare supplements,medigap insurance">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kota Insurance">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="http://localhost/wptheme/wp-content/themes/Kota/img/favicon.ico">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <!-- Add your site or application content here -->
 <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


        <!-- header start -->
        <header>
            <div class="header-top-bar-2 header-border white-bg pt-15 pb-15 d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-9 col-md-9">
                            <div class="header-info text-black">
                                <span> Have any question?</span>
                                <span><a class="btn theme-btn btn-hover" href="tel:8886087050"> 888-608-7050</a></span>
                                <span> support@kotainsure.com</span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-3 col-md-3">
                            <div class="header-social text-center text-md-right">
                                <a href="https://www.facebook.com/kotainsurance">
                                    <i class="icofont icofont-social-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="icofont icofont-social-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="icofont icofont-social-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="icofont icofont-social-instagram"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu-area menu-style-2 d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.php"><img src="http://localhost/wptheme/wp-content/themes/Kota/img/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu menu-white text-right">
                                <nav id="mobile-menu2">

                                    <?php
                                    if (has_nav_menu('primary')) {
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'container' => FALSE,
                                            'menu_class'=>'main',
                                            'fallback_cb' => FALSE,
                                            'depth' => 2
                                                )
                                        );
                                    }
                                    ?>
                                   
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="header-btn text-right">
                                <a class="btn theme-btn btn-hover" href="quote.php">Apply Now
                                    <i class="icofont icofont-location-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

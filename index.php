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
    <body>
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

        <!-- Add your site or application content here -->

        <!-- slider start -->
        <div class="slider-area">
            <div class="slider-active">
                <div class="single-slider slide-height d-flex align-items-center" style="background-image:url(http://localhost/wptheme/wp-content/themes/Kota/img/banner/banner-1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="slide-content text-center">
                                    <h1 data-animation="fadeInUp" data-delay=".5s">Providing easy and <br> reliable <span>Medicare Supplemnt Insurance</span></h1>
                                    <p data-animation="fadeInUp" data-delay="1s"> </p>
                                    <a class="btn" href="quote.php" data-animation="fadeInUp" data-delay="1.5s">Apply Now
                                        <i class="icofont icofont-location-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slide-height d-flex align-items-center" style="background-image:url(http://localhost/wptheme/wp-content/themes/Kota/img/banner/banner-2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10">
                                <div class="slide-content text-left">
                                    <h1 data-animation="fadeInUp" data-delay=".5s">We help pick the<br> right <span>plan for you</span></h1>
                                    <p data-animation="fadeInUp" data-delay="1s"> </p>
                                    <a class="btn" href="contact.php" data-animation="fadeInUp" data-delay="1.5s">Contact Us Now
                                        <i class="icofont icofont-location-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="single-slider slide-height d-flex align-items-center" style="background-image:url(http://localhost/wptheme/wp-content/themes/Kota/img/banner/banner-3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 offset-xl-2">
                                <div class="slide-content text-right">
                                    <h1 data-animation="fadeInUp" data-delay=".5s">Protect Your <br> Family with <span>Insurance</span></h1>
                                    <p data-animation="fadeInUp" data-delay="1s">Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                    erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerc</p>
                                    <a class="btn" href="#" data-animation="fadeInUp" data-delay="1.5s">learn more
                                        <i class="icofont icofont-location-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <!-- slider end -->

        <!-- service start -->
        <div class="service-area pt-115 pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-list mb-60 text-center">
                            <div class="service-icon">
                                <img src="http://localhost/wptheme/wp-content/themes/Kota/img/icon/service-icon3.png" alt="">
                            </div>
                            <div class="service-text">
                                <h3>Supplement Plans</h3>
                                <p>Before you choose a plan let us help you pick up the one that is right for you and your situation. <br><br> <a class="btn theme-btn btn-hover" href="supplement-plans.php"> Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-list mb-60 text-center">
                            <div class="service-icon">
                                <img src="http://localhost/wptheme/wp-content/themes/Kota/img/icon/service-icon2.png" alt="">
                            </div>
                            <div class="service-text">
                                <h3>Dental Plans</h3>
                                <p>Dental coverage is a great addon for any insurance plan. Get covered today.<br><br> <a class="btn theme-btn btn-hover" href="advantage-vs-supplement.php"> Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-list mb-60 text-center">
                            <div class="service-icon">
                                <img src="http://localhost/wptheme/wp-content/themes/Kota/img/icon/service-icon3.png" alt="">
                            </div>
                            <div class="service-text">
                                <h3>Open Enrollment</h3>
                                <p>The best time to purchase Medicare Supplement insurance is during your open enrollment. <br><br> <a class="btn theme-btn btn-hover" href="open-enrollment.php"> Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-list mb-60 text-center">
                            <div class="service-icon">
                                <img src="http://localhost/wptheme/wp-content/themes/Kota/img/icon/service-icon4.png" alt="">
                            </div>
                            <div class="service-text">
                                <h3>Travel Insurance</h3>
                                <p>Duis autem vel eum iriure dolor in he vulputate velit molestie illum dolore eu feugiat veniam nostr exerci Ut wisi veniam
                                    quis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-list mb-60 text-center">
                            <div class="service-icon">
                                <img src="http://localhost/wptheme/wp-content/themes/Kota/img/icon/service-icon5.png" alt="">
                            </div>
                            <div class="service-text">
                                <h3>Car Insurance</h3>
                                <p>Duis autem vel eum iriure dolor in he vulputate velit molestie illum dolore eu feugiat veniam nostr exerci Ut wisi veniam
                                    quis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-list mb-60 text-center">
                            <div class="service-icon">
                                <img src="http://localhost/wptheme/wp-content/themes/Kota/img/icon/service-icon6.png" alt="">
                            </div>
                            <div class="service-text">
                                <h3>Study Insurance</h3>
                                <p>Duis autem vel eum iriure dolor in he vulputate velit molestie illum dolore eu feugiat veniam nostr exerci Ut wisi veniam
                                    quis.
                                </p>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- service end -->



        <!-- who we start -->
        <div class="who-we-aera gray-bg pt-105 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="area-title text-center mb-55">
                            <h2>Who we
                                <span>are</span> and what we do
                            </h2>
                            <p>Kota is committed to aiding you in this crucial process and continuing to be a lifetime of support for your future.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="who-wrapper text-center mb-30">
                            <img src="http://localhost/wptheme/wp-content/themes/Kota/img/img-1.png" alt="">
                            <h3>Customer Driven</h3>
                            <p>At Kota our primary focus is on our customer's experience in getting covered. Our agents are highly trained to put the needs of our customers above everything else.</p>
                            <a href="why-choose-kota.php">Read more
                                <i class="icofont icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="who-wrapper text-center mb-30">
                            <img src="http://localhost/wptheme/wp-content/themes/Kota/img/img-2.png" alt="">
                            <h3>Informed Decisions</h3>
                            <p>We strive to make sure that all of our customers have all the informaiton available to them to make an informed decision that will provide long lasting benefits.</p>
                            <a href="supplement-plans.php">Read more
                                <i class="icofont icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="who-wrapper text-center mb-30">
                            <img src="http://localhost/wptheme/wp-content/themes/Kota/img/img-3.png" alt="">
                            <h3>Peace of Mind</h3>
                            <p>At Kota, we go above and beyond for our customers by taking a personalized look at your life and Health. We will help you find the perfect plan to make sure you are always covered.</p>
                            <a href="about.php">Read more
                                <i class="icofont icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- who we end -->

        <!-- promotion-area start -->
        <div class="promotion-area pt-200 pb-200" style="background-image:url(http://localhost/wptheme/wp-content/themes/Kota/img/bg-2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1">
                        <div class="promotion-text text-center">
                            <h3>Applying for Medigap<br>has never been so easy</h3>
                            <P></P>
                            <div class="video-btn">
                                <a href="quote.php" class="btn theme-btn btn-hover xs-none">Apply Now</a>
                                <!--<a href="https://www.youtube.com/watch?v=3bdm4NBYxII" class="watch-video popup-video">
                                    <i class="far fa-play-circle"></i> <span>Watch Our Video</span>
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- promotion-area end -->

        <!-- cta area start -->
        <div class="cta-area pt-85 pb-55">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="cta-text mb-30">
                            <h3>We take care of you and your family</h3>
                            <p>At Kota we treat all of our customers just like family. This is why you can be rest assured we will make sure you are taken care of.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="cta-dir mb-30">
                            <img src="http://localhost/wptheme/wp-content/themes/Kota/img/icon/cta.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="cta-btn text-left text-lg-right mb-30">
                            <a href="contact.php" class="btn theme-btn btn-hover">
                                <i class="icofont icofont-ui-call"></i> Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta area end -->

        <!-- fact-area start -->
        <!--<div class="fact-count-area bg-cover" style="background-image:url(http://localhost/wptheme/wp-content/themes/Kota/img/bg/fact.jpg)">
            <div class="fact-left">
                <div class="row no-gutters">
                    <div class="col-xl-4">
                        <div class="fact-text theme-bg">
                            <h3> know about our fact</h3>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidu laoreet dolore magna aliquam
                            erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation.</p>
                            <a href="#" class="btn btn-hover">learn more <i class="icofont icofont-location-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="fact-wrapper clearfix">
                            <div class="fact-single">
                                <span>25</span>
                                <h3>Years Experence</h3>
                            </div>
                            <div class="fact-single">
                                <span>89</span>
                                <h3>Win Awards</h3>
                            </div>
                            <div class="fact-single">
                                <span>700</span>
                                <h3>Happy Clients</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- fact-area end -->



        <!-- brand area start -->
        <div class="brand-area pt-80 pb-80">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <a><img src="http://localhost/wptheme/wp-content/themes/Kota/img/carriers/moo-logo-tr.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <a><img src="http://localhost/wptheme/wp-content/themes/Kota/img/carriers/aetna-logo-tr.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <a><img src="http://localhost/wptheme/wp-content/themes/Kota/img/carriers/cigna-logo-tr.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <a><img src="http://localhost/wptheme/wp-content/themes/Kota/img/carriers/moo-logo-tr.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <a><img src="http://localhost/wptheme/wp-content/themes/Kota/img/carriers/aetna-logo-tr.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <a><img src="http://localhost/wptheme/wp-content/themes/Kota/img/carriers/cigna-logo-tr.png" alt=""></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- brand area end -->

        <!-- footer start -->
        <footer>
            <div class="footer-area black-bg pb-50 pt-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-widget mb-30">
                                <h3>Something About Us</h3>
                                <p>Kota was created for people who are looking to secure their future well being. We strive to take your worries out of the equation so you can focus on what matters most, living your best life.</p>
                                <div class="subscribe">
                                    <h4>Subscribe To Our Newsletter</h4>
                                    <form action="http://echomail.braindottech.com/index.php/lists/tn810comav318/subscribe" method="post">
                                        <input type="text" placeholder="Your email" name="EMAIL">
                                        <button type="submit"><i class="icofont icofont-location-arrow"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6">
                            <div class="footer-widget mb-30">
                                <h3>Information</h3>
                                <ul class="footer-link">
                                    <li><a href="#">home</a></li>
                                    <li><a href="about.php">about us</a></li>
                                    <li><a href="faq.php">FAQs</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="quote.php">Apply Now</a></li>
                                    <li><a href="blog-recent.php">News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <h3>Resources</h3>
                                <ul class="footer-link">
                                    <li><a href="http://www.medicare.gov" target="_blank">Medicare.gov</a></li>
                                    <li><a href="resources/2018_medicare_and_you_handbook.pdf" target="_blank">2018 Medicare Handbook</a></li>
                                    <li><a href="http://www.medicare.gov/supplement-other-insurance" target="_blank"">About Medicare Supplements</a></li>
                                    <li><a href="https://www.nipr.com/index.htm" target="_blank"">National Insurance Producers Registry</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-widget mb-30">
                                <h3>Contact Information</h3>
                                <p>Office:<a href="tel:8886087050"><font color="white"> 888-608-7050</font></a> <br>
                                    Email:<font color="white"> support@kotainsure.com</font> <br>
                                    Hours: M - F 9:00 am - 5:00 pm <br>

                                </p>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="copyright-area theme-bg pt-15 pb-15">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="copyright">
                                    <p>All Rights Reserved © Kota Insurance LLC &nbsp;&nbsp; | &nbsp;&nbsp;<a href="privacy-policy.php"><font color="white"> Privacy Policy</font></a> &nbsp;&nbsp; | &nbsp;&nbsp; <a href="terms-of-service.php"><font color="white"> Terms of Service</font></a></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="footer-spcial text-center text-md-right">
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

<!--<script type="text/javascript">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"48f21fa5cbdd3ac7ca27d6d7cc949d5078c4691db5790f0f7a87ddbd7bd8428451bb78f3235c4006e5d8019e69dc15ed", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>-->



                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122454794-1"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag() {
                        dataLayer.push(arguments);
                    }
                    gtag('js', new Date());

                    gtag('config', 'UA-122454794-1');
                </script>


                <!-- Facebook Pixel Code -->
                <script>
                    !function (f, b, e, v, n, t, s)
                    {
                        if (f.fbq)
                            return;
                        n = f.fbq = function () {
                            n.callMethod ?
                                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                        };
                        if (!f._fbq)
                            f._fbq = n;
                        n.push = n;
                        n.loaded = !0;
                        n.version = '2.0';
                        n.queue = [];
                        t = b.createElement(e);
                        t.async = !0;
                        t.src = v;
                        s = b.getElementsByTagName(e)[0];
                        s.parentNode.insertBefore(t, s)
                    }(window, document, 'script',
                            'https://connect.facebook.net/en_US/fbevents.js');
                    fbq('init', '284105282147887');
                    fbq('track', 'PageView');
                </script>
                <noscript><img height="1" width="1" style="display:none"
                               src="https://www.facebook.com/tr?id=284105282147887&ev=PageView&noscript=1"
                               /></noscript>
                <!-- End Facebook Pixel Code -->



                <script src="//platform-api.sharethis.com/js/sharethis.js#property=5b4fa4dac09b4b00110a96f0&product=inline-share-buttons"></script>


                <script>
                    !function () {
                        var t; if (t = window.botsify = window.botsify = window.botsify || [], !t.init)
                            return t.invoked ? void (window.console && console.error && console.error("Botsify snippet included twice.")) : (
                                    t.load = function (e) {
                                        var o, n;	o = document.createElement("script");
                                        e.type = "text/javscript";
                                        o.async = !0;
                                        o.crossorigin = "anonymous";
                                        o.src = "https://botsify.com/web-bot/script/" + e + "/botsify.js";
                                        n = document.getElementsByTagName("script")[0];
                                        n.parentNode.insertBefore(o, n);
                                    });
                    }();
                    botsify.load('BjflE8Hfo3wUNVONHwI9QEyCtvgGR1HHzfs6a0Is');
                </script>


        </footer>
        <!-- footer end -->

<?php wp_footer(); ?>


    </body>
</html>

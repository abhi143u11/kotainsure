<?php

function kota_enqueue() {
    wp_register_style('kota_bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_register_style('kota_owl', get_template_directory_uri().'/css/owl.carousel.min.css');
    wp_register_style('kota_magnific', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_register_style('kota_fontawesome', get_template_directory_uri() . '/css/fontawesome-all.min.css');
    wp_register_style('kota_slick', get_template_directory_uri() . '/css/slick.css');
    wp_register_style('kota_animate', get_template_directory_uri() . '/css/animate.css');
    wp_register_style('kota_meanmenu', get_template_directory_uri() . '/css/meanmenu.css');
    wp_register_style('kota_icofont', get_template_directory_uri() . '/css/icofont.css');
    wp_register_style('kota_default', get_template_directory_uri() . '/css/default.css');
    wp_register_style('kota_style', get_template_directory_uri() . '/css/style.css');
    wp_register_style('kota_responsive', get_template_directory_uri() . '/css/responsive.css');


    wp_enqueue_style('kota_bootstrap');
    wp_enqueue_style('kota_owl');
    wp_enqueue_style('kota_magnific');
    wp_enqueue_style('kota_fontawesome');
    wp_enqueue_style('kota_slick');
    wp_enqueue_style('kota_animate');
    wp_enqueue_style('kota_meanmenu');
    wp_enqueue_style('kota_icofont');
    wp_enqueue_style('kota_default');
    wp_enqueue_style('kota_style');
    wp_enqueue_style('kota_responsive');

    wp_register_script('kota_modernizr', get_template_directory_uri(). '/js/vendor/modernizr-3.5.0.min.js', array(), FALSE, TRUE);
    wp_register_script('kota_jquery', get_template_directory_uri(). '/js/vendor/jquery-1.12.4.min.js', array(), FALSE, TRUE);
    wp_register_script('kota_popper', get_template_directory_uri(). '/js/popper.min.js', array(), FALSE, TRUE);
    wp_register_script('kota_bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array(), FALSE, TRUE);
    wp_register_script('kota_owl', get_template_directory_uri(). '/js/owl.carousel.min.js', array(), FALSE, TRUE);
    wp_register_script('kota_isotope', get_template_directory_uri(). '/js/isotope.pkgd.min.js', array(), FALSE, TRUE);
    wp_register_script('kota_slick', get_template_directory_uri(). '/js/slick.min.js', array(), FALSE, TRUE);
    wp_register_script('kota_form', get_template_directory_uri(). '/js/ajax-form.js', array(), FALSE, TRUE);
    wp_register_script('kota_images', get_template_directory_uri(). '/js/imagesloaded.pkgd.min.js', array(), FALSE, TRUE);
    wp_register_script('kota_magnific_popup', get_template_directory_uri(). '/js/jquery.magnific-popup.min.js', array(), FALSE, TRUE);
    wp_register_script('kota_plugins', get_template_directory_uri(). '/js/plugins.js', array(), FALSE, TRUE);
    wp_register_script('kota_main', get_template_directory_uri(). '/js/main.js', array(), FALSE, TRUE);
    wp_enqueue_script('kota_modernizr');
    wp_enqueue_script('kota_jquery');
    wp_enqueue_script('kota_popper');
    wp_enqueue_script('kota_bootstrap');
    wp_enqueue_script('kota_owl');
    wp_enqueue_script('kota_isotope');
    wp_enqueue_script('kota_slick');
    wp_enqueue_script('kota_form');
    wp_enqueue_script('kota_images');
    wp_enqueue_script('kota_magnific_popup');
    wp_enqueue_script('kota_plugins');
    wp_enqueue_script('kota_main');
}

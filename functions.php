<?php

// if ( function_exists( 'add_theme_support' ) )
// add_theme_support( 'post-thumbnails' );



function capymarket_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('all-css', get_template_directory_uri() . '/assets/css/all.css');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('boxicons-css', get_template_directory_uri() . '/assets/css/boxicons.min.css');
    wp_enqueue_style('bootstrap-icons-css', get_template_directory_uri() . '/assets/css/bootstrap-icons.css');
    wp_enqueue_style('jquery-ui-css', get_template_directory_uri() . '/assets/css/jquery-ui.css');
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.css');
    wp_enqueue_style('swiper-bundle-css', get_template_directory_uri() . '/assets/css/swiper-bundle.css');
    wp_enqueue_style('nice-select-css', get_template_directory_uri() . '/assets/css/nice-select.css');
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('jquery-fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
    wp_enqueue_style('odometer-css', get_template_directory_uri() . '/assets/css/odometer.css');
    wp_enqueue_style('datepicker-css', get_template_directory_uri() . '/assets/css/datepicker.min.css');
    wp_enqueue_style('uiicss-css', get_template_directory_uri() . '/assets/css/uiicss.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'capymarket_styles');


function capymarket_scripts() {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array('jquery'), '1.12.1', true);
    wp_enqueue_script('jquery-timepicker', get_template_directory_uri() . '/js/jquery.timepicker.min.js', array('jquery'), '1.13.0', true);
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), '6.5.8', true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), '3.0.0', true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/js/jquery.nice-select.js', array('jquery'), '1.1.0', true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), '3.5.7', true);
    wp_enqueue_script('morphext', get_template_directory_uri() . '/js/morphext.min.js', array('jquery'), '2.4.4', true);
    wp_enqueue_script('odometer', get_template_directory_uri() . '/js/odometer.min.js', array('jquery'), '0.4.8', true);
    wp_enqueue_script('marquee', get_template_directory_uri() . '/js/jquery.marquee.min.js', array('jquery'), '1.5.0', true);
    wp_enqueue_script('viewport', get_template_directory_uri() . '/js/viewport.jquery.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '3.0.6', true);
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/SmoothScroll.js', array('jquery'), '1.4.10', true);
    wp_enqueue_script('nice-number', get_template_directory_uri() . '/js/jquery.nice-number.min.js', array('jquery'), '1.1.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);
    wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '4.2.2', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'capymarket_scripts');




//add dynamic title //////
function capyMarket_theme_support(){
    
    $defaults = array(
		'height'               => 50,
		'width'                => 50,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
    //thumbnails for post
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('footer');

    // Image Sizes
    add_image_size('min', 50, 50, true);
    add_image_size('medium', 510, 340, true);
    add_image_size('blog', 800, 800, true);
    
}
add_action( 'after_setup_theme', 'capyMarket_theme_support');

function mc4wp_custom_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id' => ''
    ), $atts);

    $form_id = $atts['id'];

    // Check if the Mailchimp for WordPress plugin is active
    if (function_exists('mc4wp_show_form')) {
        return mc4wp_show_form($form_id);
    }

    return ''; // Return empty string if the plugin is not active
}
add_shortcode('mc4wp_form', 'mc4wp_custom_shortcode');





?>
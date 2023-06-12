<?php


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Primary Meta Tags -->
<title>CapyMarket</title>
<meta name="Capy Market" content="All about then — Capybara World">
<meta name="description" content="All about then — Capybara World!">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://capymarket.com">
<meta property="og:title" content="CapyMarket">
<meta property="og:description" content="All about then — Capybara World!">
<meta property="og:image" content="https://capymarket.com/wp-content/uploads/2023/06/Capi05-e1686491109142.png">


    <link rel="shortcut icon" href="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>"">
    <title><?php echo get_bloginfo('name'); ?></title>

    <!-- <link rel="icon" href="assets/images/sm-logo.png" type="image/gif" sizes="20x20"> -->
    

    <?php wp_head(); ?>
</head>

<body>

    <!-- ========== header============= -->
    <header class="header-area style-1">
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <div class="header-logo">
                <?php
                    if(function_exists('the_custom_logo')){
                        // the_custom_logo();
                        $custom_logo_id = get_theme_mod( 'custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                        
                    }
                ?>
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>">
                </a>
                
            </div>  
        </div>
    </header>
        <!-- ========== header end============= -->

            <!-- ========== Breadcumb Start============= -->
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/inner-banner-btm-vec.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Capybara Blog</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">I'll tell you my history!</a></li>
                                <!-- <li class="breadcrumb-item " aria-current="page">Capybara Blog</li> -->
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block">
                    
                    <?php
                        // Array of image file names
                        $images = [
                            'hero1',
                            'hero2',
                            'hero3',
                            'hero4',
                            'hero5'
                        ];

                        // Generate a random index
                        $randomIndex = rand(0, count($images) - 1);

                        // Get the random image file name
                        $randomImage = $images[$randomIndex];

                    ?>

                
                    
                        <div class="banner-img-bg">
                        <img class="w-50" src="<?php echo get_template_directory_uri(); ?>assets/images/bg/inner-banner-vec.png" alt="">
                        </div>
                        <img class="col col-md-6 mx-auto w-75" src="<?php echo get_field($randomImage); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Breadcumb end============= -->
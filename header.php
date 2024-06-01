<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
    <!-- slick slider  -->
    <!-- slickのCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sub/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about/about.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu/menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/access/access.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news/news.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/staff/staff.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single/single.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header_menu">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_name.png" alt="">
                </a>
            </div>

            <div class="modal_bg"></div>
            <nav class="nav">
                <div class="nav_button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="nav_modal">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
                        <li><a href="<?php echo esc_url(home_url('/menu')); ?>">Menu</a></li>
                        <li><a href="<?php echo esc_url(home_url('/news')); ?>">News</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('/staff')); ?>">Staff</a></li>
                        <li><a href="<?php echo esc_url(home_url('/access')); ?>">Access</a></li>
                        <li class="reserve modal-open"><a href="">予約</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        

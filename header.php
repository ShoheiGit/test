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
    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sub/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about/about.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu/menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/access/access.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news/news.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/staff/staff.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single/single.css"> -->
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

            <!-- <div class="modal_bg"></div> -->
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

            <nav class="nav_pc">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
                    <li><a href="<?php echo esc_url(home_url('/menu')); ?>">Menu</a></li>
                    <li><a href="<?php echo esc_url(home_url('/news')); ?>">News</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                    <li><a href="<?php echo esc_url(home_url('/staff')); ?>">Staff</a></li>
                    <li><a href="<?php echo esc_url(home_url('/access')); ?>">Access</a></li>
                    <li class="reserve modal-open"><a href="">予約</a></li>
                </ul>
            </nav>
        </div>

        <div class="top_image">
            <div class="top_text">
                <h2>ハンドケアサロン</h2>
                <p><span>加齢</span>による</p>
                <p>お悩み解決サロン</p>
                <p class="big">漢方アロマ×ハンドケア</p>
                <p>女性のお悩み解決</p>
            </div>
        </div>

        <div class="modal-container">
            <div class="modal-body">
                <div class="modal-close">×</div>
                <div class="modal-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/line_modal.png" alt="">
                </div>
                <a href="https://qr-official.line.me/gs/M_785cyyhi_BW.png?oat_content=qr"><img id="QR" src="<?php echo get_template_directory_uri(); ?>/img/LINE_QR.png" alt=""></a>
                <a href="https://lin.ee/5fRrlnq"><p id="add_friend">追加して予約はこちらをクリック</p></a>
            </div>
        </div>

        <?php if (!is_front_page() && !is_home()): ?>
            <?php if (is_page('menu')): ?>
                <div class="sub_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/room2.png" alt="">
                    <h1>Menu</h1>
                </div>
            <?php elseif (is_page('news')): ?>
                <div class="sub_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/room1.png" alt="">
                    <h1>News</h1>
                </div>
            <?php elseif (is_page('about')): ?>
                <div class="sub_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome.png" alt="">
                    <h1>About Us</h1>
                </div>
            <?php elseif (is_page('staff')): ?>
                <div class="sub_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/kabe.png" alt="">
                    <h1>Staff</h1>
                </div>
            <?php elseif (is_page('access')): ?>
                <div class="sub_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top.jpg" alt="">
                    <h1>Access</h1>
                </div>
            <?php endif; ?>
        <?php endif; ?>
</header>

        

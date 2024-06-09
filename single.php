<?php
/*
Template Name: single Page
*/
get_header(); ?>
        <div class="sub_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/welcome.png" alt="">
            <h1><?php the_title(); ?></h1>
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
    </header>
    <main class="single">
        <div class="content-wrapper">
            <?php the_content(); ?>
        </div>
    </main>
<?php get_footer(); ?>
<?php
/*
Template Name: menu Page
*/
get_header(); ?>
    <main>
        <section class="menu">
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu.jpg" alt="">
        </section>

        <section class="reserve">
            <h2>予約</h2>
            <a href="https://lin.ee/5fRrlnq">
                <img src="<?php echo get_template_directory_uri(); ?>/img/LINE_Brand_icon.png" alt="">
            </a>
            <p>予約をするには<br>公式LINEの登録をお願いします！</p>
            <p class="attention">※画像をクリックすると登録画面に移ります</p>
        </section>
    </main>
    
<?php get_footer(); ?>
<?php
/*
Template Name: menu Page
*/
get_header(); ?>
        <div class="sub_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/room2.png" alt="">
            <h1>Menu</h1>
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
<?php
/*
Template Name: About Page
*/
get_header(); ?>
        <div class="sub_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/welcome.png" alt="">
            <h1>About Us</h1>
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
    <main class="about">
        <section class="onayami">
            <h2>こんなお悩みありませんか？</h2>
            <div class="shoujou">
                <div class="shoujou_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/悩み女性.jpeg" alt="">
                </div>
                <div class="shoujou_text">
                    <ul>
                        <li>肩こり/腰痛/浮腫/自律神経の乱れ/更年期/不眠/頭痛/倦怠感</li>
                        <li>なんだか調子が悪い/朝起きられないなどの曖昧な症状など</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="appeal">
            <div class="appeal_max">
                <div class="appeal_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/oil.jpg" alt="">
                </div>
                <div class="appeal_text">
                    <p>個々の体調に合わせて施術を行い<br>漢方アロマを使用したリンパマッサージで<br>不調を改善します。諦めずにご相談ください。</p>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
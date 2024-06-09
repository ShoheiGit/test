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
                    <p>加齢、水仕事、シミ・シワなど年齢を感じてきた方<br>
                    又はお仕事上で手を見られる場面が多い方<br>
                    顔と同様毛穴が気になる、冷え性、乾燥、、、<br>
                    この様な症状の方オススメです!</p>
                </div>
            </div>
        </section>

        <!-- <section class="omakase">
            <p>そんなお悩み</p>
            <p>漢方アロマサロンの<br>Re.Laxy<br>におまかせください！</p>
        </section>

        <section class="about_oil">
            <div class="about_oil_container">
                <div class="ao_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/oil-removebg.png" alt="">
                </div>
                <div class="ao_text">
                    <h2>漢方アロマとは</h2>
                    <p>漢方＆西洋ハーブの配合</p>
                    <p>漢方ハーブはバイオテクノロジーにより毒素をカットした上で、西洋アロマと同一の手法（水蒸気蒸留法）で抽出しています。<br>漢方ハーブの成分を高濃度で含有しています。</p>
                    <p>吸収性・浸透性に優れるため、短時間で心身の不調緩和が期待できます。</p>
                    <p>使用は「吸う」「塗る」の２通り。<br>煎じて飲むより身体や臓腑への負担が少ないです。</p>
                </div>
            </div>
        </section>
        <section class="oil_point">
            <div class="h2">
                <h2>特徴</h2>
            </div>
            <div class="oil_effect">
                <div class="effects">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/one.png" alt="">
                    <p>呼吸により約0.6秒で大脳辺縁系へ、約0.8秒で肺胞へ</p>
                </div>
                <div class="effects">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/two.png" alt="">
                    <p>塗布では約5分で毛細血管・全身へ到達します</p>
                </div>
                <div class="effects">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/three.png" alt="">
                    <p>使用後は汗や尿とともに体外へ排出<br>体内残留の心配も少なく安心・安全です</p>
                </div>
            </div>
        </section> -->

        <section class="appeal">
            <div class="appeal_max">
                <div class="appeal_text">
                    <p>個々の体調に合わせて施術を行い<br>漢方アロマを使用したリンパマッサージで<br>不調を改善します。諦めずにご相談ください。</p>
                </div>
            </div>
        </section>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>申し訳ありませんが、お探しの情報は見つかりませんでした。</p>
    <?php endif; ?>
    </main>
<?php get_footer(); ?>
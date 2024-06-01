<?php
/*
Template Name: staff Page
*/
get_header(); ?>

        <div class="sub_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kabe.png" alt="">
            <h1>Staff</h1>
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
        <section class="owner">
           <div class="owner_image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/owner.jpg" alt="">
           </div>
           <div class="owner_deg">
                <div class="name">
                    <h2 class="pc">オーナー/セラピスト</h2>
                    <h2 class="sp">オーナー/<br>セラピスト</h2>
                    <h3>松浦　幹</h3>
                    <h4>(Miki Matsuura)</h4>
                </div>
                <div class="achive">
                    <ul>
                        <li>大手エステサロンでスタート</li>
                        <li>美容専門学校で非常勤講師</li>
                        <li>リンパマッサージ店で管理役務</li>
                        <li>女性専用エステサロン<br>メンズエステサロンの経営</li>
                        <li>ウォーキング講師５年</li>
                        <li>エステ全般技術講師</li>
                    </ul>
                </div>
           </div>
        </section>

        <section class="sns">
            <div class="sns_text">
                <p>snsの登録もよろしくお願いします！</p>
            </div>
            <div class="sns_image">
                <a href="https://lin.ee/5fRrlnq">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/LINE_Brand_icon.png" alt="">
                </a>
                <a href="https://www.instagram.com/re.laxy_aroma.co?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Instagram_Glyph_Gradient.png" alt="">
                </a>
            </div>
        </section>

        <section class="comment">
            <p>Re.Laxyでお悩みを解決するとともに<br>28年暦の癒しのプロがもやもやした心を華やかにします！</p>
        </section>
    </main>
<?php get_footer(); ?>
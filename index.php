<?php get_header(); ?>


    <main class="top">
        <section class="about_us">
            <div class="about_text">
                <div class="about_image slider">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/goods2.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/kabe.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/room1.png" alt="">
                </div>
                <div class="about_us_text  scroll_fade">
                    <h2>About Us</h2>
                    <p>気付いたら顔より老けてる手の姿<br>
                    1番仕事する大事な手だからこそ究極のケアが必要</p>
                    <p>顔のお手入れサロンは沢山あるけど手のお手入れサロンはまだ少ない...<br>
                    そんな加齢女性の為に作りました<br>
                    フェイシャル以上のお手入れを目指します</p>
                    <a href="<?php echo esc_url(home_url('/about')); ?>">Read More<span class="dli-arrow-right"></span></a>
                </div>
            </div>
        </section>

        <section class="aroma">
            <div class="max scroll_fade">
                <div class="aroma_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about_image.jpg" alt="">
                </div>
                <div class="aroma_desc">
                    <div class="aroma_text">
                        <h2>漢方アロマ<br>ハンドリンパマッサージ</h2>
                        <h3>漢方アロマとは</h3>
                        <p>漢方の原料となる生薬と<br>西洋のハーフエッセンスをブレンドしたアロマです</p>
                    </div>
                    <div class="aroma_points">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/point.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="menu">
            <h2>Menu</h2>
            <p>個々に寄り添うメニューをご用意しております！</p>
            <div class="menus scroll_fade">
                <article>
                    <img data-lazy="<?php echo get_template_directory_uri(); ?>/img/hand1.jpg" alt="">
                    <p>加齢によるエイジングハンドケア</p>
                    <p class="fee">￥8800</p>
                </article>
                <article>
                    <img data-lazy="<?php echo get_template_directory_uri(); ?>/img/hand2.jpg" alt="">
                    <p>シミ予防・日焼け対策ビタミンハンドケア</p>
                    <p class="fee">￥8800</p>
                </article>
                <article>
                    <img data-lazy="<?php echo get_template_directory_uri(); ?>/img/hand3.jpg" alt="">
                    <p>プルプル♡もっちりの手に集中保湿ハンドケア</p>
                    <p class="fee">￥6600</p>
                </article>
            </div>
            <a href="<?php echo esc_url(home_url('/menu')); ?>">全メニューを見る</a>
        </section>

        <section class="news">
            <div class="news_head scroll_fade">
                <h2>News</h2>
                <p>お知らせ</p>
            </div>
            <div class="articles scroll_fade">
                <?php if(have_posts()) : while(have_posts()):the_post(); ?>
                    <div class="article">
                        
                        <p class="post-title"><a href="<?php the_permalink(); ?>"><?php the_time("Y/m/j") ?><span>　</span><?php the_title(); ?></a></p>
                    </div>
                <?php endwhile; else: ?>
                <?php endif; ?>
                
            </div>
        
        </section>

        <section class="concept">
            <h2>Concept</h2>
            <img class="scroll_fade" src="<?php echo get_template_directory_uri(); ?>/img/handCare.jpg" alt="">
            
        </section>

        <section class="staff">
            <h2>Staff</h2>
            <div class="staff_deg scroll_fade">
                <div class="staff_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/owner.jpg" alt="">
                </div>
                <div class="staff_text">
                    <h3>松浦 幹</h3>
                    <p>オーナー</p>
                    <p>Re.Laxyでお悩みを解決するとともに<br>28年間の癒しのプロが<br>もやもやした心を華やかにします</p>
                    <div class="sns">
                        <a href="https://lin.ee/5fRrlnq"><img src="<?php echo get_template_directory_uri(); ?>/img/LINE_Brand_icon.png" alt=""></a>

                        <a href="https://www.instagram.com/re.laxy_aroma.co?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="<?php echo get_template_directory_uri(); ?>/img/Instagram_Glyph_Gradient.png" alt=""></a>
                    </div>
                </div>
            </dv>
        </section>

    </main>
<?php get_footer(); ?>
    

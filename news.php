<?php
/*
Template Name: news Page
*/
get_header(); ?>

        <div class="sub_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/room1.png" alt="">
            <h1>News</h1>
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
        <?php
        // テンプレートファイルの先頭に以下のコードを追加してください。
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10, // 表示する投稿数を設定
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                <div class="post-item">
                    <div class="post-thumbnail">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('thumbnail');
                        } ?>
                    </div>
                    <div class="post_desc">
                        <div class="post-date">
                            <?php the_time("Y/m/j") ?>
                        </div>
                        <div class="post-title">
                            <?php the_title(); ?>
                        </div>
                        <div class="post-excerpt">
                            <?php echo wp_trim_words( get_the_content(), 20, '...' );  ?>
                        </div>
                    </div>
                </div>
            </a>
                <?php endwhile;
            wp_reset_postdata();
            else :
                echo '<p>投稿が見つかりませんでした。</p>';
            endif;
            ?>


    </main>
    
<?php get_footer(); ?>
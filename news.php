<?php
/*
Template Name: news Page
*/
get_header(); ?>

    <main>
        <section class="news_sub">

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
        </section>


    </main>
    
<?php get_footer(); ?>
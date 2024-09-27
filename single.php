<?php get_header(); ?>

<body class="single">
    <?php get_header('nav'); ?>

    <main>
        <div class="all inner">
            <div class="left">
                <div class="article-btn">
                    <ul>
                        <li><?php previous_post_link('%link', '<i class="fas fa-angle-left"></i>前の記事へ'); ?></li>
                        <li><?php next_post_link('%link', '次の記事へ<i class="fas fa-angle-right"></i>'); ?></li>
                    </ul>
                </div><!-- /.approx -->

                <article>
                    <section class="single-info">
                        <div class="cate">
                            <?php echo get_the_category_list(); ?>
                        </div><!-- /.cate -->
                        <h2><?php the_title(); ?></h2>
                        <div class="time">
                            <i class="fa-regular fa-clock"></i>
                            <p><?php the_time('Y年n月j日'); ?></p>
                        </div><!-- /.time -->
                        <?php
                        if (has_post_thumbnail()):
                            the_post_thumbnail('thumbnail');
                        else:
                        ?>

                            <img src="<?php echo get_theme_file_uri('/images/notThumbnail.png'); ?>" alt="">

                        <?php
                        endif;
                        ?>

                        <!-- もしアイキャッチがなかったら -->

                    </section><!-- /.single-info -->

                    <div class="article-substance">
                        <?php the_content(); ?>
                    </div><!-- /.article-substance -->
                </article>

                <article class="comment">
                    <h2><img src="<?php echo get_theme_file_uri('/images/commentTitle.svg'); ?>" alt="comment"></h2>
                    <?php comments_template(); ?>
                </article><!-- /.comment -->
                <a class="back-index" href="<?php echo home_url('/'); ?>">トップページへ戻る</a>
            </div><!-- /.left -->

            <div class="right single">
                <?php get_sidebar(); ?>
            </div><!-- /.right -->
        </div><!-- /.inner all -->
    </main>

    <?php get_footer(); ?>
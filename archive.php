<?php get_header(); ?>

<body class="index">
    <?php get_header('nav'); ?>

    <main>
        <div class="inner">
            <div class="all">
                <div class="left">
                    <article id="allposts">
                        <h2><img src="<?php echo get_theme_file_uri('/images/allTiltle.svg'); ?>" alt="all articles"></h2>

                        <p class="archive">
                            <?php if (is_category()) : ?>
                                <i class="fa-solid fa-folder"></i>カテゴリー : <?php single_cat_title(); ?>
                            <?php elseif (is_date()) : ?>
                                <i class="fa-solid fa-folder"></i><?php echo get_the_date('Y年n月'); ?>の記事
                            <?php else: ?>
                                <i class="fa-solid fa-folder"></i><?php the_archive_title(); ?>に関する記事
                            <?php endif; ?>
                        </p>

                        <div class="items">
                            <?php if (have_posts()): ?>
                                <?php while (have_posts()): ?>
                                    <?php the_post(); ?>

                                    <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                                        <div class="shine">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="mask">
                                                    <?php
                                                    if (has_post_thumbnail()):
                                                        the_post_thumbnail('thumbnail');
                                                    else:
                                                    ?>
                                                        <img src="<?php echo get_theme_file_uri('/images/notThumbnail.png'); ?>" alt="">
                                                    <?php
                                                    endif;
                                                    ?>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="time">
                                                <i class="fa-regular fa-clock"></i>
                                                <p><?php the_time('Y年n月j日'); ?></p>
                                            </div><!-- /.time -->
                                            <h3><?php the_title(); ?></h3>
                                            <div class="cate">
                                                <?php echo get_the_category_list(); ?>
                                            </div><!-- /.cate -->
                                        </div><!-- /.info -->
                                    </article><!-- /.post -->

                                <?php endwhile; ?>
                            <?php else: ?>
                                <p>記事がありません。</p>
                            <?php endif; ?>

                        </div><!-- /.items -->

                        <div class="nav-page">
                            <?php
                            $arg = array(
                                'prev_text' => '<i class="fas fa-angle-left"></i>',
                                'next_text' => '<i class="fas fa-angle-right"></i>',
                            );
                            the_posts_pagination($arg);
                            ?>
                        </div>
                        </section><!-- /.articles -->
                </div><!-- /.left -->

                <div class="right">
                    <?php get_sidebar(); ?>
                </div><!-- /.right -->
            </div><!-- /.all -->
        </div><!-- /.inner -->

        <section id="profile">
            <div class="inner">
                <h2><img src="<?php echo get_theme_file_uri('/images/profileTitle.svg'); ?>" alt="profile"></h2>
                <div class="prof">
                    <div class="icon">
                        <img class="icon" src="<?php echo get_theme_file_uri('/images/icon.png'); ?>" alt="">
                    </div><!-- /.icon -->

                    <div class="text">
                        <dl>
                            <dt>まちのちさと</dt>
                            <dd>町野千聖</dd>
                        </dl>
                        <ul>
                            <li>トライデントコンピュータ専門学校Webデザイン学科</li>
                            <li>2005年4月10日生まれ</li>
                            <li>趣味：映画鑑賞、音楽、読書、美術館巡り、ねこあつめ</li>
                        </ul>
                        <a href="<?php echo home_url('/contact'); ?>">お問い合わせはこちらまで</a>
                    </div><!-- /.text -->
                </div><!-- /.prof -->
            </div><!-- /.inner -->
        </section><!-- /.profile -->
    </main>

    <?php get_footer(); ?>
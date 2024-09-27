<?php get_header(); ?>

<body>
    <div class="container">
        <?php get_header('nav'); ?>

        <main class="error">
            <div class="inner">
                <article class="error-img">
                    <img src="<?php echo get_theme_file_uri('/images/968820.png'); ?>" alt="">
                </article><!-- /.error-img -->

                <article class="error-text">
                    <h2>４０４</h2>
                    <p>お探しのページが見つかりません。</p>
                    <p>一時的にアクセスできない状況にあるか、</p>
                    <p>移動、または削除された可能性があります。</p>
                    <a href="<?php echo home_url('/'); ?>">トップページへ戻る</a>
                </article><!-- /.error-text -->
            </div><!-- /.inner -->
        </main>

        <?php get_footer(); ?>
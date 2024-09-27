<?php get_header(); ?>

<body class="contact-page">
    <?php get_header('nav'); ?>
    <section id="contact">
        <div class="inner">
            <h2><img src="<?php echo get_theme_file_uri('/images/contactTitle.svg'); ?>" alt=""></h2>
            <?php echo do_shortcode('[contact-form-7 id="fdf85e3" title="ブログお問い合わせ"]'); ?>
            <a class="back-index" href="<?php echo home_url('/'); ?>">トップページへ戻る</a>
        </div><!-- /.inner -->
    </section><!-- /.contact -->
</body>

<?php get_footer(); ?>
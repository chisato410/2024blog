<?php wp_body_open(); ?>
<header>
    <div class="inner">
        <div id="top">
            <h1><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_theme_file_uri('/images/logo.svg'); ?>" alt="ebichiri_"></a></h1>
            <div class="openbtn">
                <img class="" src="<?php echo get_theme_file_uri('/images/menuClose.png'); ?>" alt="menu">
                <p>メニュー</p>
                <img class="noodle" src="<?php echo get_theme_file_uri('/images/menuOpen.png'); ?>" alt="">
            </div><!-- /.opnebtn -->
        </div>
        <nav id="g-nav">
            <ul>
                <li><a href="<?php echo home_url('/#pickup'); ?>">おすすめの記事</a></li>
                <li><a href="<?php echo home_url('/#allposts'); ?>">すべての記事</a></li>
                <li><a href="<?php echo home_url('/#search'); ?>">記事をさがす</a></li>
                <li><a href="<?php echo home_url('/#category'); ?>">カテゴリー</a></li>
                <li><a href="<?php echo home_url('/#profile'); ?>">プロフィール</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
    </div><!-- /.inner -->
</header>
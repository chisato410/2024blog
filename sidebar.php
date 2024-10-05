<a href="#top"><img id="page-top" src="<?php echo get_theme_file_uri('/images/topbtn.png'); ?>" alt="top-button"></a>

<section id="search">
    <h2><img src="<?php echo get_theme_file_uri('/images/searchTitle.svg'); ?>" alt="search"></h2>
    <?php get_search_form(); ?>
</section><!-- /.search -->


<section id="category">
    <h2><img src="<?php echo get_theme_file_uri('/images/categoryTitle.svg'); ?>" alt="category"></h2>
    <div class="cate">
        <?php wp_list_categories(
            array(
                'title_li' => '',
                'show_count' => '1'
            )
        ); ?>
    </div><!--.cate -->
</section><!-- /.category -->

<section id="archive">
    <h2><img src="<?php echo get_theme_file_uri('/images/archiveTitle.svg'); ?>" alt="monthArchive"></h2>
    <div class="month">
        <?php
        $arg = array(
            'type' => 'monthly',
            'show_post_count' => '1',
        );
        wp_get_archives($arg);
        ?>
    </div><!-- /.month -->
</section><!-- /.archive -->
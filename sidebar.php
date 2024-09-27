<a href="#top"><img id="page-top" src="<?php echo get_theme_file_uri('/images/topbtn.png'); ?>" alt="top-button"></a>

<section id="search">
    <h2><img src="<?php echo get_theme_file_uri('/images/searchTitle.svg'); ?>" alt="search"></h2>
    <?php get_search_form(); ?>
</section><!-- /.search -->


<section id="category">
    <h2><img src="<?php echo get_theme_file_uri('/images/categoryTitle.svg'); ?>" alt="category"></h2>
    <div class="cate">
        <!-- <ul>
            <li><a href="#">web</a></li>
            <li><a href="#">デザイン</a></li>
        </ul> -->
        <?php wp_list_categories(
            array(
                'title_li' => '',
                'show_count' => '1'
            )
        ); ?>
    </div><!--.cate -->


</section><!-- /.category -->
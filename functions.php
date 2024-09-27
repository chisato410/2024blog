<?php

function my_theme_support()
{
    //アイキャッチ画像の設定
    add_theme_support('post-thumbnails');
    //タイトルタグの出力
    add_theme_support('title-tag');
    // RSSフィールドの出力
    add_theme_support('automatic-feed-links');
    // HTML5に変換
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

};

add_action('after_setup_theme', 'my_theme_support');

// 余分な画像の生成を防ぐ
add_image_size('medium_large', 0, 0);
add_image_size('1536x1536', 0, 0);
add_image_size('2048x2048', 0, 0);

#区切り文字の変更
function change_title_separator($sep)
{
    $sep = ' | ';
    return $sep;
}
add_filter('document_title_separator', 'change_title_separator');

// コメント入力欄を一番下へ
add_filter('comment_form_fields', 'commentform_bottom');
function commentform_bottom($form_position)
{
    $comment = $form_position['comment'];
    unset($form_position['comment']);
    $form_position['comment'] = $comment;
    return $form_position;
}

//jsを追加
function my_script_output()
{
wp_enqueue_script('my-script', get_theme_file_uri('/index.js'), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_output');

//cssを追加
function my_style_output()
{
    wp_enqueue_style('reset', 'https://cdn.jsdelivr.net/npm/the-new-css-reset/css/reset.min.css');
    wp_enqueue_style('icon-font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet');
    wp_enqueue_style('my-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_style_output');

// 全角スペース繋ぎで複数キーワードを検索するための処理
function convert_fullwidth_space_to_halfwidth($query)
{
    if (is_search() && !is_admin()) {
        $s = $query->get('s');
        $s = str_replace('　', ' ', $s); // 全角スペースを半角スペースに変換
        $query->set('s', $s);
    }
    return $query;
}

add_filter('pre_get_posts', 'convert_fullwidth_space_to_halfwidth');

function SearchFilter($query)
{
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts', 'SearchFilter');

<div class="comment">
    <div class="comment-form">
        <?php
        $args = array(
            'title_reply' => '',
            'comment_notes_before' => '',
            'comment_notes_after'  => '',
            'label_submit' => '送信',
            'fields' => array(
                'author' =>
                '<p class="comment-form-author"><label for="name">名前を入力</label>
                <input id="name" name="name" type="text" placeholder="ニックネームでも可"></p>',
                'email' => '',
            ),
        );
        comment_form($args);
        ?>
    </div>

    <div class="comments-list">
        <?php if (have_comments()): ?>
            <h2><img src="<?php echo get_theme_file_uri('/images/pop.svg'); ?>" alt=""></h2>
            <ol>
                <?php wp_list_comments(); ?>
            </ol>
        <?php endif; ?>
    </div>
</div>
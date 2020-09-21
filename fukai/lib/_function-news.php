<?php

/* ===========================================
 管理画面の「投稿」表示を「お知らせ」へ変更
=========================================== */

function create_post_type_news()
{
    register_post_type(
        'news', // URLになる部分
  array(
      'label' => 'お知らせ', // 管理画面の左メニューに表示されるテキスト
      'labels' => array(
      'all_items' => 'お知らせ一覧'// 管理画面の左メニューの下層に表示されるテキスト
    ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'show_in_rest'  => true,
      'show_ui' => true,
      'supports' => array('title','editor','thumbnail')
    )
    );
    register_taxonomy_for_object_type('category', 'article');
}
add_action('init', 'create_post_type_news');
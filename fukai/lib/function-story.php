<?php
/* ===========================================
 カスタム投稿 story
=========================================== */
function create_post_type_story()
{
    register_post_type(
        'story', // URLになる部分
  array(
      'label' => '所沢と深井醤油', // 管理画面の左メニューに表示されるテキスト
      'labels' => array(
      'all_items' => '所沢と深井醤油一覧'// 管理画面の左メニューの下層に表示されるテキスト
    ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'show_in_rest'  => true,
      'show_ui' => true,
      'supports' => array('title','editor','thumbnail')
    )
    );
}
add_action('init', 'create_post_type_story');

/* ===========================================
カスタム投稿 story パーマリンク 投稿id
=========================================== */
function custom_auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
    // $timestamp = time() ;
    // $date = date("Y/m/d", $timestamp) ;

    if ($post_type == 'story') {
        $slug = $post_ID;
    }
    return $slug;
}
add_filter('wp_unique_post_slug', 'custom_auto_post_slug', 10, 4);
<?php
/* ===========================================
 カスタム投稿 cart
=========================================== */
function create_post_type_cart()
{
    register_post_type(
        'cart', // URLになる部分
  array(
      'label' => 'cart', // 管理画面の左メニューに表示されるテキスト
      'labels' => array(
      'all_items' => 'cart'// 管理画面の左メニューの下層に表示されるテキスト
    ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'show_in_rest'  => true,
      'show_ui' => true,
      'supports' => array('title','thumbnail')
    )
    );
}
add_action('init', 'create_post_type_cart');
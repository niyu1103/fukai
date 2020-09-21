<?php
/* ===========================================
 カスタム投稿 recipe
=========================================== */
function create_post_type_recipe()
{
    register_post_type(
        'recipe', // URLになる部分
  array(
      'label' => 'レシピ', // 管理画面の左メニューに表示されるテキスト
      'labels' => array(
      'all_items' => 'レシピ一覧'// 管理画面の左メニューの下層に表示されるテキスト
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
add_action('init', 'create_post_type_recipe');


/* ===========================================
 カスタムタクソノミー recipe
=========================================== */

function recipe_taxonomy()
{
    register_taxonomy(
        'recipe_cat', // 名称
        'recipe',
        array(
            'label' => 'レシピカテゴリー',
            'hierarchical' => true, // true:階層を持つ固定ページ型
            'show_admin_column' => true // 管理画面の一覧に表示
        )
    );
}
add_action('init', 'recipe_taxonomy');

/* ===========================================
カスタム投稿 recipe パーマリンク 投稿id
=========================================== */
function custom_auto_post_recipe_slug($slug, $post_ID, $post_status, $post_type)
{
    // $timestamp = time() ;
    // $date = date("Y/m/d", $timestamp) ;

    if ($post_type == 'recipe') {
        $slug = $post_ID;
    }
    return $slug;
}
add_filter('wp_unique_post_slug', 'custom_auto_post_recipe_slug', 10, 4);
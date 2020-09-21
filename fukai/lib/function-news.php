<?php
/* ===========================================
 カスタム投稿 news
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
      'supports' => array('title','thumbnail')
    )
    );
}
add_action('init', 'create_post_type_news');


/* ===========================================
 カスタムタクソノミー news
=========================================== */

function news_taxonomy()
{
    register_taxonomy(
        'news_cat',   //カスタムタクソノミー名
    'news',   //このタクソノミーが使われる投稿タイプ
    array(
      'label' => 'お知らせカテゴリー',  //カスタムタクソノミーのラベル
      'labels' => array(
        'popular_items' => 'よく使うお知らせカテゴリー',
        'edit_item' =>'お知らせカテゴリーを編集',
        'add_new_item' => '新規お知らせカテゴリーを追加',
        'search_items' => 'お知らせカテゴリーを検索'
      ),
      'public' => true,  // 管理画面及びサイト上に公開
      'description' => 'お知らせカテゴリーの説明文です。',  //説明文
      'hierarchical' => true, //カテゴリー形式
     'show_in_rest' => true  //Gutenberg で表示
    )
    );
}
add_action('init', 'news_taxonomy');


/* ===========================================
カスタム投稿 news パーマリンク 投稿id
=========================================== */
function custom_auto_post_news_slug($slug, $post_ID, $post_status, $post_type)
{
    // $timestamp = time() ;
    // $date = date("Y/m/d", $timestamp) ;

    if ($post_type == 'news') {
        $slug = $post_ID;
    }
    return $slug;
}
add_filter('wp_unique_post_slug', 'custom_auto_post_news_slug', 10, 4);
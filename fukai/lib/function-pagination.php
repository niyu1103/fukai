<?php

/* ===========================================
 お知らせ詳細ページのページネーションにクラスを付与
=========================================== */

add_filter('previous_post_link', function ($output) {
    return str_replace('<a href=', '<a class="p-pagination__prev p-pagination__num" href=', $output);
});

add_filter('next_post_link', function ($output) {
    return str_replace('<a href=', '<a class="p-pagination__next p-pagination__num" href=', $output);
});


function custom_the_posts_pagination($template)
{
    $template = '
	<div class="p-posts-navigation__wrap">%3$s</div>
	';
    return $template;
}
add_filter('navigation_markup_template', 'custom_the_posts_pagination');

/* ===========================================
 現在のページ数の取得
=========================================== */
function show_page_number()
{
    global $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $max_page = $wp_query->max_num_pages;
    echo $paged;
}


/* ===========================================
 総ページ数の取得
=========================================== */
function max_show_page_number()
{
    global $wp_query;
    $max_page = $wp_query->max_num_pages;
    echo $max_page;
}
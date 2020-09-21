<?php

/* ===========================================
 head要素内 title タグ 出力
=========================================== */

add_theme_support('title-tag');

function wp_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}
add_filter('document_title_separator', 'wp_document_title_separator');
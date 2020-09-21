<?php
/* ===========================================
 抜粋の文字数変更 (TOP NEWS)
=========================================== */
function twpp_change_excerpt_length($length)
{
    if (is_front_page()) {
        $length = 34;
    } else {
        $length = 72;
    }

    return $length;
}

add_filter('excerpt_length', 'twpp_change_excerpt_length', 999);
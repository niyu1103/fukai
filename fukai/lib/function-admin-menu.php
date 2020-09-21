<?php
/* ===========================================
 管理画面から投稿を消す
=========================================== */
add_action('admin_menu', 'remove_menus');
function remove_menus()
{
    remove_menu_page('edit.php'); //投稿メニュー
}
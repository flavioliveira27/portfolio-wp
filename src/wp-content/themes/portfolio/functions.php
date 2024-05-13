<?php
add_theme_support( 'menus' );
require_once("functions/assets.php");
require_once("functions/menu.php");

function my_loginlcustomization() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-style.css" />';
}

add_action('login_head', 'my_loginlcustomization');

add_filter( 'login_display_language_dropdown', '__return_false' );
?>
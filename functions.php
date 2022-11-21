<?php

function pbmbc_theme_scripts() {
    echo "Does this show?";
    wp_enqueue_style('header_styles.css', get_stylesheet_uri() . '/assets/css/header_styles.css', false, '1.1', 'all');
}

add_action('wp_enqueue_scripts', 'pbmbc_theme_scripts');

?>

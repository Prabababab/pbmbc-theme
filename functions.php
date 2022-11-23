<?php

function pbmbc_theme_scripts() {
    wp_enqueue_style('header_styles', get_template_directory_uri() . '/assets/css/header_styles.css', false, '1.1', 'all');
}

add_action('wp_enqueue_scripts', 'pbmbc_theme_scripts');

?>

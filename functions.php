
<?php
/**
* Enqueues child theme stylesheet, loading first the parent theme stylesheet.
*/
function wsr_child_theme_styles() {
    wp_enqueue_style( 'parent-theme-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-theme-style', get_stylesheet_directory_uri() . '/style.css', array('parent-theme-style'), '1.1');
}
add_action( 'wp_enqueue_scripts', 'wsr_child_theme_styles', 11 );
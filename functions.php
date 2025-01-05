<?php
function blankslate_child_enqueue_styles() {
    // Enqueue parent styles
    wp_dequeue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Enqueue child styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'blankslate_child_enqueue_styles', 999);
?>

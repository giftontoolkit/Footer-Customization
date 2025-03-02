<?php
// Enqueue Styles using style.css located in theme directory
function myTM_enqueue_assets_css() {
    // Enqueue style.css
    wp_enqueue_style('myTM-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'myTM_enqueue_assets_css');

// Add Theme Customization Options: Footer
function myTM_customize_footer($wp_customize) {
    // Footer Section
    $wp_customize->add_section('myTM_footer_section', array(
        'title' => __('Footer Customization', 'myTM-theme'),
        'priority' => 120,
    ));

    // Footer Text Setting
    $wp_customize->add_setting('footer_text_setting', array(
        'default' => __('Copyright © 2024', 'myTM-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Saving Footer Text using Control
    $wp_customize->add_control('footer_text_control', array(
        'label' => __('Footer Text', 'myTM-theme'),
        'section' => 'myTM_footer_section',
        'settings' => 'footer_text_setting',
        'type' => 'text',
    ));
}
add_action('customize_register', 'myTM_customize_footer');
?>
<?php
// Enqueue Styles using style.css located in theme directory
function gifton_enqueue_assets_css() {
    // Enqueue style.css
    wp_enqueue_style('gifton-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'gifton_enqueue_assets_css');

// Add Theme Customization Options: Footer
function gifton_customize_footer($wp_customize) {
    // Footer Section
    $wp_customize->add_section('gifton_footer_section', array(
        'title' => __('Footer Customization', 'gifton-theme'),
        'priority' => 120,
    ));

    // Footer Text Setting
    $wp_customize->add_setting('footer_text_setting', array(
        'default' => __('Copyright © 2024', 'gifton-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Saving Footer Text using Control
    $wp_customize->add_control('footer_text_control', array(
        'label' => __('Footer Text', 'gifton-theme'),
        'section' => 'gifton_footer_section',
        'settings' => 'footer_text_setting',
        'type' => 'text',
    ));
}
add_action('customize_register', 'gifton_customize_footer');
?>
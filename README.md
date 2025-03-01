# Footer Customization

## Version 1 (v1)

Ths `functions.php` is given in **v1** folder

We added below function in `functions.php`.

Simply adding the section isn't very useful without adding settings and controls. Here's how you can add a simple text setting to verify the functionality more thoroughly:

```ruby
<?php
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
```

- `add_setting()` creates a setting to store the footer text.
- `add_control()` creates a text input control within the "Footer Customization" section, allowing you to modify the setting.
- `sanitize_text_field` makes sure the entered text is safe.

To see the changes on the front end of your site you will need to add code to your footer.php file to display the data that is being saved in the customizer. The code to display the data will look simular to this.

```ruby
<?php echo esc_html(get_theme_mod('footer_text_setting')); ?>
```

# v1 contains footer.php file as well

see the file in v1 folder

# index.php will call footer.php file by using below code

```ruby
<?php get_footer(); ?>
```

## Output Before above code

![Before our code](/images/before_function.jpg)

## Output After above code

![Before our code](/images/after_function_1.jpg)

![Before our code](/images/after_function_2.jpg)

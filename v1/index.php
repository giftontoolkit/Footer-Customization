<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <h1>Heading in index.php</h1>
    <p>content here</p>

    <h2>Footer section is below</h2>

    <?php get_footer(); ?>
</body>
</html>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo('name'); ?> - Landing Page</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="landing-header">
        <div class="container">
            <h1>Welcome to GIFTON</h1>
            <p>Empowering your eCommerce journey with customization.</p>
            <a href="#features" class="cta-button">Explore Features</a>
        </div>
    </header>

    <section id="features" class="features">
        <div class="container">
            <h2>Why Choose GIFTON?</h2>
            <div class="feature-item">
                <h3>Customizable Themes</h3>
                <p>Build your brand identity with fully customizable designs.</p>
            </div>
            <div class="feature-item">
                <h3>Powerful Plugins</h3>
                <p>Extend your store functionality with custom plugins.</p>
            </div>
            <div class="feature-item">
                <h3>Optimized for Speed</h3>
                <p>Fast loading pages to ensure a seamless shopping experience.</p>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>
</body>
</html>

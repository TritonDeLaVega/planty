<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <section>
    <header class="header">
        <!-- Modification du logo pour le rendre cliquable -->
        <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Logo.jpg" alt="Logo">
            </a>
        </div>
        <div class="menu">
            <a href="<?php echo home_url('/nous-rencontrer'); ?>">Nous rencontrer</a>
            <?php if (is_user_logged_in()) : ?>
                <a href="<?php echo admin_url(); ?>">Admin</a>
            <?php endif; ?>
            <a href="#" class="order-button">Commander</a>
        </div>
    </header>
    </section>
</body>
</html>

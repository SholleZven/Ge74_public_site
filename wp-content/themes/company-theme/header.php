<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}
?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

    <div class="site-header__container">

        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            ?>
            <a
                class="site-header__logo"
                href="<?php echo esc_url(home_url('/')); ?>"
            >
                <?php bloginfo('name'); ?>
            </a>
            <?php
        }
        ?>

        <nav class="site-header__navigation">

            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => false,
            ]);
            ?>

        </nav>

    </div>

</header>
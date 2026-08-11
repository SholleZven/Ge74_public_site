<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}
?>

<footer class="site-footer">

    <div class="site-footer__container">

        <nav class="site-footer__navigation">

            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false,
                'fallback_cb' => false,
            ]);
            ?>

        </nav>

        <div class="site-footer__copyright">

            &copy;
            <?php echo esc_html(date('Y')); ?>

            <?php bloginfo('name'); ?>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
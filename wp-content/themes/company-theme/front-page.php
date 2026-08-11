<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="site-main">

    <?php
    while (have_posts()) :
        the_post();
        ?>

        <div class="page-content">

            <?php the_content(); ?>

        </div>

        <?php
    endwhile;
    ?>

</main>

<?php get_footer(); ?>
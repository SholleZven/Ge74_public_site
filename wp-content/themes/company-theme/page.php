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

        <article
            id="page-<?php the_ID(); ?>"
            <?php post_class('page'); ?>
        >

            <header class="page__header">

                <?php
                the_title(
                    '<h1 class="page__title">',
                    '</h1>'
                );
                ?>

            </header>

            <div class="page__content">

                <?php the_content(); ?>

            </div>

        </article>

        <?php
    endwhile;
    ?>

</main>

<?php get_footer(); ?>
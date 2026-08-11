<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="site-main">

    <?php
    if (have_posts()) :
        ?>

        <?php
        while (have_posts()) :
            the_post();
            ?>

            <article
                id="post-<?php the_ID(); ?>"
                <?php post_class('post'); ?>
            >

                <header class="post__header">

                    <?php
                    the_title(
                        '<h1 class="post__title">',
                        '</h1>'
                    );
                    ?>

                </header>

                <div class="post__content">

                    <?php the_content(); ?>

                </div>

            </article>

            <?php
        endwhile;
        ?>

    <?php else : ?>

        <p>
            <?php esc_html_e(
                'No content found.',
                'company-theme'
            ); ?>
        </p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
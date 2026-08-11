<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="site-main">

    <header class="archive-header">

        <?php
        the_archive_title(
            '<h1 class="archive-header__title">',
            '</h1>'
        );
        ?>

        <?php the_archive_description(
            '<div class="archive-header__description">',
            '</div>'
        ); ?>

    </header>

    <div class="archive-list">

        <?php
        if (have_posts()) :
            ?>

            <?php
            while (have_posts()) :
                the_post();
                ?>

                <article
                    id="post-<?php the_ID(); ?>"
                    <?php post_class('archive-item'); ?>
                >

                    <?php
                    the_title(
                        '<h2 class="archive-item__title">',
                        '</h2>'
                    );
                    ?>

                    <div class="archive-item__excerpt">

                        <?php the_excerpt(); ?>

                    </div>

                </article>

                <?php
            endwhile;
            ?>

        <?php else : ?>

            <p>
                <?php esc_html_e(
                    'No posts found.',
                    'company-theme'
                ); ?>
            </p>

        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>
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
            id="post-<?php the_ID(); ?>"
            <?php post_class('single-post'); ?>
        >

            <header class="single-post__header">

                <?php
                the_title(
                    '<h1 class="single-post__title">',
                    '</h1>'
                );
                ?>

                <div class="single-post__meta">

                    <time datetime="<?php echo esc_attr(
                        get_the_date('c')
                    ); ?>">

                        <?php
                        echo esc_html(
                            get_the_date()
                        );
                        ?>

                    </time>

                </div>

            </header>

            <div class="single-post__content">

                <?php the_content(); ?>

            </div>

        </article>

        <?php
    endwhile;
    ?>

</main>

<?php get_footer(); ?>
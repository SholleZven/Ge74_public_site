<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

$heading = $attributes['heading'] ?? '';
$text = $attributes['text'] ?? '';
$button_text = $attributes['buttonText'] ?? '';
$button_url = $attributes['buttonUrl'] ?? '';
$image_url = $attributes['imageUrl'] ?? '';

?>

<section
    <?php echo get_block_wrapper_attributes([
        'class' => 'hero',
    ]); ?>
>

    <div class="hero__content">

        <?php if ($heading) : ?>

            <h2 class="hero__title">

                <?php
                echo wp_kses_post($heading);
                ?>

            </h2>

        <?php endif; ?>


        <?php if ($text) : ?>

            <div class="hero__text">

                <?php
                echo wp_kses_post($text);
                ?>

            </div>

        <?php endif; ?>


        <?php if ($button_text && $button_url) : ?>

            <a
                class="hero__button"
                href="<?php echo esc_url($button_url); ?>"
            >

                <?php
                echo esc_html($button_text);
                ?>

            </a>

        <?php endif; ?>


        <?php if ($image_url) : ?>

            <img
                class="hero__image"
                src="<?php echo esc_url($image_url); ?>"
                alt=""
            >

        <?php endif; ?>

    </div>

</section>
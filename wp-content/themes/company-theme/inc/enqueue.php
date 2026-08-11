<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

function company_theme_enqueue_assets(): void
{
    $theme_uri = get_template_directory_uri();

    wp_enqueue_style(
        'company-theme',
        $theme_uri . '/assets/build/css/main.css',
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'company-theme',
        $theme_uri . '/assets/build/js/main.js',
        [],
        '1.0.0',
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'company_theme_enqueue_assets'
);
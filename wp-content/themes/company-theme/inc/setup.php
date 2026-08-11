<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

function company_theme_setup(): void
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'company-theme'),
        'footer' => __('Footer Menu', 'company-theme'),
    ]);
}

add_action(
    'after_setup_theme',
    'company_theme_setup'
);
<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register ACF blocks.
 */
function company_theme_register_blocks(): void
{
    $blocks_directory = get_template_directory() . '/blocks';

    if (!is_dir($blocks_directory)) {
        return;
    }

    $block_directories = glob(
        $blocks_directory . '/*',
        GLOB_ONLYDIR
    );

    if (!$block_directories) {
        return;
    }

    foreach ($block_directories as $block_directory) {
        $block_json = $block_directory . '/block.json';

        if (!file_exists($block_json)) {
            continue;
        }

        register_block_type($block_directory);
    }
}

add_action(
    'init',
    'company_theme_register_blocks'
);
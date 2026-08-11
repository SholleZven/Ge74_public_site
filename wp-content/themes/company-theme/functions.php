<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup.
 */
require_once __DIR__ . '/inc/setup.php';

/**
 * Theme assets.
 */
require_once __DIR__ . '/inc/enqueue.php';

/**
 * Custom blocks.
 */
require_once __DIR__ . '/inc/blocks.php';

/**
 * ACF fields.
 */
// require_once __DIR__ . '/inc/acf.php';
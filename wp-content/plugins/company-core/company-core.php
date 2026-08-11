<?php

/**
 * Plugin Name: Company Core
 * Description: Core functionality for the Company website.
 * Version: 1.0.0
 * Author: Company
 * Text Domain: company-core
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/inc/roles.php';
require_once __DIR__ . '/inc/post-types.php';
require_once __DIR__ . '/inc/taxonomies.php';
require_once __DIR__ . '/inc/admin.php';
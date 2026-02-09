<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'wp' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%_f6=Pq9>/%q<(=?X0cU 2k*{i40h P/Kjri}CS&my(`As+$Y&# mqc:gL#)GC>1' );
define( 'SECURE_AUTH_KEY',  'Y<wJ[v{H1P4[3Q}N`^DD*1[uM|iV,{EUFGcawmZw.o(I~-|X)_4vnT8j=TdH%=CK' );
define( 'LOGGED_IN_KEY',    'sTL3Pp5l<2rO12W4(3Fqu<5zg3?o[y)@p88E=S)=Ja$Zu*AiPREw>NNB|QKKW|O-' );
define( 'NONCE_KEY',        '-Ou5`^s#(F8UxZfx4*s)RApGhkBbmn,&d`?(,|_+)<4O)~k-ejML=soS0;;G)/J2' );
define( 'AUTH_SALT',        'Y3( ?xR5(vZCq9U-HsO^Ar|%,vIVJQJUF!uQ [e/HP=Yh[SjHANGAoS]J:4)<1R4' );
define( 'SECURE_AUTH_SALT', '{(7$iLz0&}6~x/q4^Lzy1h9%xfubggK+|!Itcl}v(U-LL43ma2||;+XN&=]k^[H7' );
define( 'LOGGED_IN_SALT',   '/9tP/c<S=%AO`$B$}g8_iqR`L d1//!Z2^!Miev+EuEun1WqP_0j@&-_YRXu8Qfr' );
define( 'NONCE_SALT',       'LKv&%vK1WGnDCp)Y9%j//sBn24nr-AgV#s_Jg_04 >cK=oF{*DwO:5G-@n1~OhJH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

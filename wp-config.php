<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8`jb%^/<D|kdA>Q5:_q{P_yQ14<Ni3ETyO;%2zcR}JNpGi.1dFV>gRW]xl8gm)+I' );
define( 'SECURE_AUTH_KEY',  'Kl.1TDPb3uVB*e7`)lkbK-guLCL|oX6,3_w`wmt2FQ.LH6jwR/B4A^t^ W%KITaP' );
define( 'LOGGED_IN_KEY',    'LhARF>r0$GP}}e1F+yS.L^hBp^tJ G:DW<l>[[ls4N]*O5T`-/tAsD9oT]yt4riX' );
define( 'NONCE_KEY',        'Q`}CLdFxZGg2j=j1p01DzBG?WwmN@`Vvb0@!S{/+rO0/,p1lid@4 cVKM(9`C%>&' );
define( 'AUTH_SALT',        'E&$uQh$WPJ0J3i^i+vP)e2/u6~ ;AFu/iJHiWlSKEJXAHnJ:R^d2a-Q[sWoPY>)5' );
define( 'SECURE_AUTH_SALT', '/+31b*j!8?^EE[5T&YKtDe18P-%f$U8_;@!=@>-.N)Nw&}(dhWE6?~_ i4zdoz_t' );
define( 'LOGGED_IN_SALT',   'QLM!D.]lIkf&-ibgzqi~lg@BJ7DNOvN2i?NO}*G.wNy5@;ex6:gAYDj0(@%OUH,+' );
define( 'NONCE_SALT',       '5OL-rM0~%{cYtk0%T<_V1JsJ]UiD3x6xiB[gJ+gm$a+0M4q=.TWNVurT8Ns;ZZ@w' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

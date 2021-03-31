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
define( 'AUTH_KEY',         'OoXpTY,=EvO[j=nA6wSU(X[4PmubT>gHG7fU.02#<|d&w a|2xGe]^)mQMm:{V]T' );
define( 'SECURE_AUTH_KEY',  'zL_G4[oJN59FXW$=0r`nqo[p=i4Y`<4)fo;aE{!d*o0CB@dY?LVhTo_(Vs1A|Rl:' );
define( 'LOGGED_IN_KEY',    '%]Y$gUi;g5ZN5c/@>FV<KQ^UpGp3(Q=q-:r0e2:%qC&_eAJSW[AB.b,)_7cC,DCC' );
define( 'NONCE_KEY',        '0kr%A>[st1SOaS1>|3bquLg3,}2}>t9zBd>YR`RyYOKBujG8#_zIGQvviN)%k58Y' );
define( 'AUTH_SALT',        'X,UUHftXl=m7YPQauF%h0gY(u~hxJgIx_s[*?Itcy(O!$%~=1P*7!4xG+A<)BHJ[' );
define( 'SECURE_AUTH_SALT', 'F9T,q~1[,,A%bRjOsQz<>2ax@2`1SOL*3T`|1uuvaI}kO)qswl4v2l%w#7w*>j`V' );
define( 'LOGGED_IN_SALT',   'C:^M:/KqB,;Kada=A{z<j5[}D9/MV(}sFN}i:;(.Ai`;n@hd2#J7_4$q[T+fxr86' );
define( 'NONCE_SALT',       '3{G(y&?WNo|HbAQ5A@(SkUa_K*K{H![r~+b}-M:+.EOk#^H{,X%c;.T/AJL7Ts=l' );

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

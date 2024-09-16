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
define( 'DB_NAME', 'ShopBy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'wDu{z^k)o.zX}Z`OC;FV`ZXj_rc3IwI:d @q$jx%[[4HQcUi?4RlIh@/wIzLb*xR' );
define( 'SECURE_AUTH_KEY',  '&3EAJRxB;RO%;_5a]L9]ycSm|4FoN{(u_,0V~.E5[dj>5lqq}((!tlm,D_C;Y|n=' );
define( 'LOGGED_IN_KEY',    'jRJDoKz:gfZ[aJkL?*[.4gM$xC}}_#tZ$j_k|cl]9W]H&A7q3tp_p| Hx!;54YGR' );
define( 'NONCE_KEY',        ',n}:P HfoF1#OyTPK4vgf)C=2CF#ia|t`=f4n(^m4MCxB]Nth~JlqVY]PfhdrrUG' );
define( 'AUTH_SALT',        'KO;E)H]pNW_z|W[.{Ws/;,_{Pe3()##Uw)_.9iX*DP>S:[&[19ag?*JEzrUbrd{B' );
define( 'SECURE_AUTH_SALT', '#Dd|RI4amdX8W(Bv<2}eo^?Qrvf_YXjy_G/G~kYuxJ|Sp_NGnkh|;<?niu)m!G9S' );
define( 'LOGGED_IN_SALT',   '^ j5n~_JA-;vMp8OlOHMC;D3$nVDJRFR9 z5T.rdlq|UIk=R`*:VtWh^;vF.}S.i' );
define( 'NONCE_SALT',       'm A-JpK88RlJI-!V*bHGl}vc-xv-6fivzm+jkd&.]TW5L;*Q~LqYTbM@Q60;(Hud' );

/**#@-*/

/**
 * WordPress database table prefix.
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

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdnet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&JT+6f|CB5x*+E].u|~!2Q7P4[<fewokm<`/vh*x57kMN-v1M#b[A:>%8M/`11z.');
define('SECURE_AUTH_KEY',  'xV(tSkkBN*r?U {+-Wx2cN%C;1k$#;uHRPt.IaV`XZYuC>?qo<g?xkl&bf1$zYIn');
define('LOGGED_IN_KEY',    '&E@.WyA7H)!seID(33T:+4,SE`Wq?gIT3%=u,7^Zs4_Hc_C[K5y~Iw6l8&~NIc$7');
define('NONCE_KEY',        'cD((<67*>r_hG?N(n&qo|EMYzhmUPm5hN[$?c9Ye5<?>#YCKmR#guFMtqW;L[S0m');
define('AUTH_SALT',        'M0e/USBfO m~M;n>7[-y#<R5rile0*y$(9Oqph(!?@1m.Bjzi<j@Dn!4A5n2%pD]');
define('SECURE_AUTH_SALT', '8BsSPF,ryEe=ZSa|^!9&a]B[`OZ`QM9(Nf>WuW=pStx>Vk$]B``><N.%HfjVx^6=');
define('LOGGED_IN_SALT',   'Glx7TuGsD]lJu_IKV$yCYuQF|h8XT:-0|9cn{/Ywj<)qi``4O$.$<:2cnM3JET=u');
define('NONCE_SALT',       ')cC$iY@Huc3^uZ84cd[TH{y9?@QGtZzhkv~%6c#6B1VOrC?iSNkD!v;jLiOQXBn2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

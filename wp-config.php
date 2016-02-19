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
define('DB_NAME', 'personalDB6ehbk');

/** MySQL database username */
define('DB_USER', 'personalDB6ehbk');

/** MySQL database password */
define('DB_PASSWORD', 'yK3E6HV6IW');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '6#S29]eSo0![@RCJ>cNYJ@oV[-|wK[1!VKRCw,vJ7F0YJQBzjr3,@sG08@RCJ4sck');
define('SECURE_AUTH_KEY',  't2;~eKSO9patZ:]-}@cNRN8okrY}>z@nN4:[-KGN40kRkV|wsvgG0jfQ^r.qEA<{');
define('LOGGED_IN_KEY',    'YY}@!rn7>P63mTmTP.q.qEA<A{bXEI{fMfMIyu$jf{3^$MI+lh2;5_~O9S95lWp');
define('NONCE_KEY',        '~C2_*T9S95mWpWS_t#tHD]VC8sZsZ:[w[wKG:G}gdJO51lSlSO~p_pl5|8|ZVCkQ,');
define('AUTH_SALT',        'Pue9|lVZKG-hok5|![wKG5#_WDWGxtdhd1~-_pO9RN8okrY}>z@zN407,jUKG:gdg');
define('SECURE_AUTH_SALT', 'QvgZK-khoV[|}zNJ484oV{<uIEM3nXTXI<u$yi3.>zJ303,jUYIFvfyf3$2;iPLT');
define('LOGGED_IN_SALT',   't6#aXeLHxtK1:dZdZK-w-wd4|[|VGC1:daGZGCthlV5#[|sGCUQ7@nrnU4,>,rQBF');
define('NONCE_SALT',       'kNgR!soscC[_~lK595_hSVS8~psoV5_YUB^njrY7,}>vUFIF{rYUN4zgckR0@,!nN');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

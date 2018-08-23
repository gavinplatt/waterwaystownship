<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'waterway_wpdb956');

/** MySQL database username */
define('DB_USER', 'waterway_wpun567');

/** MySQL database password */
define('DB_PASSWORD', 'kTWtC~GF0Zdl');

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
define('AUTH_KEY',         '[_Byn57$|Tr_,>.-3.{%D+WQ&UkGhRCi=2v1b]G~?lr{Cj-tE:8W0WL@/~ChGs-S');
define('SECURE_AUTH_KEY',  'k9P(6cE0A-}N$kZcQ,Di|%;*Cp~{W{f-n<IVc7_n-)|vjXcRd,Sxxougy@Th/aH0');
define('LOGGED_IN_KEY',    '[zrMvfUe>$}E<Rc,A`%Cp[&m(cyo+cI4l]=m*sErUz?9w9/c^M;J/)zzI^[A6Xez');
define('NONCE_KEY',        'ZXo8,}w:Eye1xSZa(zFR-D];]&+PCvIGOxLQ!0Oid-gx Lt1;uhk`}|@K](XtzY8');
define('AUTH_SALT',        'cv-o1_s:*!6m]u^fapTOa/mtW%;{!A~q?V66=yf8+-T,?8%+6H/;&+hhksW/F<r ');
define('SECURE_AUTH_SALT', 'k$=$mpntR|38INlD]Wsl7!qs=k?`sUAX5p^O`aUTvBD@_IqHQoV!o&H?R8 /ecn6');
define('LOGGED_IN_SALT',   'P996y(33-_:2DCO85V``vP&a,o8OwK> *GeI>:~Shh3+<1Bh3Uzd4{+6w<<j6Wf-');
define('NONCE_SALT',       '#4xT{/l.28 i!v|u%`txfui{|(m3@3Rx)R-o^/c9hrAlZ>Tg[jBqZmwxMD#-{ z:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
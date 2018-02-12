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
define('DB_NAME', 'wordpress_front');

/** MySQL database username */
define('DB_USER', 'wordpress_front');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress_front');

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
define('AUTH_KEY',         '=Ecn{tyTj%P63}wdzV*7&pV&~P7NM}}Cm~A^cfJ7 PAvAMG<7.xWMrMiZV{q-I_3');
define('SECURE_AUTH_KEY',  ' ewlATGgU8K)%@]B!A&bM<{.vRK>*1NaGtH8vnn?Y@_ia_]0AK77blFQ|<6C95Nq');
define('LOGGED_IN_KEY',    '1sTlOHRCT=&/]OqXXX8F-}Z3(hRO_ Jq=kh>]@$)mqOG 2B.+r<Cvm0/*Zny]5@Z');
define('NONCE_KEY',        'VbdNL}g$Z%_oFQxxYOizpJ9CQG*jhBE?WS/?$w@MqUS,Vxb;zc`UW+_7 X .xfl<');
define('AUTH_SALT',        '736PCa8G,=O$A*]xXs sNMHoDVJRPQawm%QWS,Kf[1}$fqvEmmhZSqCAq{h=qs/l');
define('SECURE_AUTH_SALT', 'D]:~r1~zdKh NDXMkx.W~I$CC=c?S@=Y#5Pbh#cc,)sZPH|aawZ6*jp?ccbPUpq&');
define('LOGGED_IN_SALT',   'o[(-{6dd6:tU~h/TEq!H{/Ek;~__Rk~1S%0apk^]>4EhN0VgAe]Cgk:jYk+ pz~Y');
define('NONCE_SALT',       '6)3#:Z.Wi^y,v i//u~|6mNIgbA54&mk)7r2cI`y-u:UX0//wR_iMm+[s+Jo9wKr');

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

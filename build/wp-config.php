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
define('DB_NAME', 'nsr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'kx4-;Ia.=G^;NWB,GR#4w2fk$jgjG3fR&h)nHG~ q)hn$8B9xBYRQEdKiod^>T?+');
define('SECURE_AUTH_KEY',  '{<>Q)T%1KII}&hFA5K|iD8.vR}*d!c#@D@/f|hMVY-l*U$.i.9:+T8(0e:%#Iiiv');
define('LOGGED_IN_KEY',    'WKInv1zizaa=pAP<w,/)6k:k+xlDLc{_0PxKL}Lom{+.5;CV= l<;UU[V6TW^-2s');
define('NONCE_KEY',        'bhUx`m-`u%IPkK=g%eR+}b|)j:pj$;@`f-qYlUICdRxfe)a{=g:H/}o<{lm!G-S*');
define('AUTH_SALT',        '{+_i,s4FG}e-,}6:S@*6^)/YBjDXa#[6<!ru04O6+mP tC-Fyb>6K9>bIC}DlCcC');
define('SECURE_AUTH_SALT', '^E3/;Jm3pWs?ch5Q9IzfWs-Qn4q` 7ok1%,>$Y)T<TOPnNrHqUgg&Xg}XBMK1)]L');
define('LOGGED_IN_SALT',   '!f~J.@KV7@S.;GlS!kVhKifvJ9g5:5F)pdgZ+/93211s+Po{)Vz|03P%wgsD,TDi');
define('NONCE_SALT',       'p:T)bFYk_Q)W6sCQuA5J`fA[.(fF<Vz]&=,;o7eMd3{lGLzIpZIBWk`vJz:A x(/');

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

<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'prm@{.0p[l10= $?NjH2s+:K-?`H`B]<%X8ow>8l~BZe-VmwWOv-O+#9LnB-4y[B');
define('SECURE_AUTH_KEY',  ';*wM+w2+e# P#^_Pe-b, N.0]9F)m%BRz]DvtT1SkP@D+<4tR -1D+gqIXwJ1H8J');
define('LOGGED_IN_KEY',    '{Ty-D){&AhWO>502@s<dKf|4--iaGP:7N{Yvj.zDH4T}!$xAR-)mMYc@FR~8Fr(1');
define('NONCE_KEY',        ')^y*9sK:?tvhcN1#U!cbfoEs($BrgJ&.8zVA!2Mb:-]y;~ :6swq=;V!NX+/VJb$');
define('AUTH_SALT',        'H~!]%G+~K94z4X3y!w^]A,m?Nudo&1S#`.}B)j~!]lI!G  D#r*z~rzop,z+%Eo:');
define('SECURE_AUTH_SALT', '+)KPS9,bw2RIWp:N!}_<2WE/j{9$t<Ayx!3paOP[7KY9A~tbf5A{tLcM7s[EA`,J');
define('LOGGED_IN_SALT',   'e>jBeiEW]Am)6jH>Qnv5<:y7/ox..`]{cI>SbB,Pf2}S5bzkb?:5ucK-C,FO%){>');
define('NONCE_SALT',       'gv+3aDe#XG|G[+2qrZb+|kVJBWe~`]#esgO;1Q3J3-.x^*i#&?YBz*?a/kEe3O|0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

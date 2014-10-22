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
define('DB_NAME', 'michaelallerby');

/** MySQL database username */
define('DB_USER', 'michaelallerby');

/** MySQL database password */
define('DB_PASSWORD', 'Gladwrap#12');

/** MySQL hostname */
define('DB_HOST', 'michaelallerby.db.12050076.hostedresource.com');

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
define('AUTH_KEY',         '<+F<]-=Y7molptg&0p+xj]W]-+J/@:4J}f{kgP;-9*<iu9rTyAuqoX&aDZ&.]KR{');
define('SECURE_AUTH_KEY',  's^#dIyZA L.KOPKj#j # avFYWz0qwP= [EvCnh%&-(:>TuDH5++`+R-b|kUOf#r');
define('LOGGED_IN_KEY',    ']a~9?-:B!2dir4-^`-/YR9rA=69..vN+>>H`dQY+kBKN_g 7?cLT 3U<@]*Nz+TB');
define('NONCE_KEY',        '=-~}5ZX!-7y<#*|bie(3[j++{p^8vt $!Dhl|ywL0x]z[=Ab E$*Rh*G8wSp36t[');
define('AUTH_SALT',        'nSPGxE)`]vHpnWP_VK%-i@|]8fq@Y|c?Ms!]0%|%V~qb*6zU4/W~Y]Hdm|:|WW|Z');
define('SECURE_AUTH_SALT', 'kW+|-P+=V<|LO@.g3D+ayNePr=!|TS!|vcW}+b1ao2NMQnw U@V@:stQn!+phh7S');
define('LOGGED_IN_SALT',   ':Y$~S) |1s9Y{D]/]K:9ooUj>Zlx?-BV&_VE/`7(BXEW#gTb+_wwo`!llv$}M-2I');
define('NONCE_SALT',       'qPN)Jc1/SQ0q.ifh?Ld/V &@R@w#sp7(kBmB2kS<}PGdEx?)5)zg*cy0.!&tJ< _');

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

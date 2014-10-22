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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q0Q$#UC3|du7[!4&@,3j}OZF4d)Q?PUZ3x1){JQJ L6Uj# hH~3Ch_iQ{ NvumG&');
define('SECURE_AUTH_KEY',  '8/_P61>MtwFNiuRyi/A =vis,+L4@394ChOHRZV]Zf>eMJQOmH}:bD|f2eaD..5k');
define('LOGGED_IN_KEY',    'pbB=A#.8fOME`{{>3*II_]DzUd|%i.9@VsBknuEkAzo((`07_A<:22tv!s1r(:>D');
define('NONCE_KEY',        '9kVHNR jnsyZZjQQxr|~#?4jP{:ByrUb`CO/c%op]4y;Lk@eB$P7kwDb<X#F<9Sc');
define('AUTH_SALT',        '#NKz!|jL)1LJL$REu!Tq0ZbXRwCQ#kry2IeCzYqQ`ReC|)c T/A+mvlA{kZz?3~H');
define('SECURE_AUTH_SALT', '6DrIrtl18}i*Qz:XC9TX3D-5<]k4W=}:l=zOYr{m-M{6!J-1A*Btd4lL~px*H94_');
define('LOGGED_IN_SALT',   '=Q?T%69@mZwo[{;|e^-@{!D-@v&XLO U8},8PI1/c[(5iqZ`ZE7c2GQSd7:m9&0X');
define('NONCE_SALT',       'iVPxo+~Phdp[vr&VF`|7f[dL;1mnU;dQ?f&<GwAl/fJek5<fT!~=riZ}nR;SdmKp');

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

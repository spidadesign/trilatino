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
define('DB_NAME', 'trilatino');

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
define('AUTH_KEY',         'b0@aa-&fHMX`Mu=4ooQ[}u|MHrQzP|pnbC~4}EcmSKnv-2ze |c^?Qa&=IU:2mY:');
define('SECURE_AUTH_KEY',  '?DtpUy<+KP/Pe.D&r@{nc.3w^OL3fvnD><|}6u0)Rz2ICh3n!-b=&aQH*aL$X-;U');
define('LOGGED_IN_KEY',    '|</bn4r^zP-kT),,D@BmhIINV.^>JEas~:o7Xh1-&m~U.-Y?AV:pjPe4Sw1<xcP1');
define('NONCE_KEY',        '*%S%ndaOv|I58?bI,^5#y`L,hn<i/xdP(*t{@z7#n<oq.MX+puz. KoGn<!={a:k');
define('AUTH_SALT',        '~^?.=z?dc`HYRepzJHl{rn<dUN`LL-zgk-m[;w_&0 Np7M+Esi+,Hr>0D7p?)I,3');
define('SECURE_AUTH_SALT', '@_W8mJRBRJuIn3!eS9:+^G?k+L>l4Wcb&hvq%K^Z:$#-5mU:dz)9+H|jXFe*@P8M');
define('LOGGED_IN_SALT',   '>t>A=eR7GlA`*n@i)L||#k}j:7uC^IMwDh|v5Iz4n,mt`&x^:o,1]tsyKxh!H,fb');
define('NONCE_SALT',       '8Yqz`i+7@jK6LX.%TN+1([<`V`gSqA/0Ews7Z>bJ<Y|ipTHp :-Y+EkU@]{)f$M2');

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

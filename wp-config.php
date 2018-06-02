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
define('DB_NAME', 'collegianscc');

/** MySQL database username */
define('DB_USER', 'collegianscc');

/** MySQL database password */
define('DB_PASSWORD', 'collegiancentral32');

/** MySQL hostname */
define('DB_HOST', 'mysql.collegian.blackmirrordesign.com');

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
define('AUTH_KEY',         'j9B@m`CaedB3BCTfl~MQP#;GFVKGVd^/y"vCPGRU2^V|?QhER#+"KXs*C@xDtPyr');
define('SECURE_AUTH_KEY',  'g9|mT2%Y+~HfUr)D_s:b5d*F51hbJFKga3oEIkwh!aT8Q(PHOe!G01P%8v&(Vn^u');
define('LOGGED_IN_KEY',    ':/;?*D6Zpl`CRCExP$Z)G$&?)4lSU+`u134zMEQubkz`4dGRjyGXI/gNsrO@%NQh');
define('NONCE_KEY',        'gRCjlSJ`tKdS2~QEo1?x"E!EGC|(t&j;dbH/+_U%jlim0db+_`lI^s6%EV~Sw#em');
define('AUTH_SALT',        '?NryCNLtG``8Hzq7hGjWDx3c"NiZSFebg&%;?|MoZA|lF~h@tJRC92"_&~qL#G7D');
define('SECURE_AUTH_SALT', 'cVZ`z(n#!b(nN3mXp0^k!(md^SV;c_idY@(Se%"McGrDZWT`%wbtOC*|6346|2H9');
define('LOGGED_IN_SALT',   'ca"?)A*JQ:HC&+ByfcZAl:?&%mx2Q;5^Sc_5wHKDUs*Sq/FF1U&?Q(yx^C|AC|`y');
define('NONCE_SALT',       'j(~H$YM38|RbpE(rvjB$e#ss8pf1:L"0%:e(J&uN(cryZ::lLomcpv_ijQR~l%HM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_h5d8jt_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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


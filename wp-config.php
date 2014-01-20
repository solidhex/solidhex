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
define('DB_NAME', 'solidhex');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'yhu4etuq');

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
define('AUTH_KEY',         ',|:a3Alcd8o`Q*5wLhb)|qK*r/Few j],]eMf99[M|kUr>Ux^0mfH9u-SnnR@+8?');
define('SECURE_AUTH_KEY',  '7:rmLS<*EP.yqRe-&-ll2T08*>eiqg@kuK4+_ J:n^;|jJ>r[6S`_+>SWVH-=}:,');
define('LOGGED_IN_KEY',    '+TV12NN|_y._B.ROc_m_A[nMKqQu9<a(YARf32;{[|3p,$=XF&o84~9=d*XvBh#H');
define('NONCE_KEY',        '.O<lK{3f &e|?xZ|uO8wAtv7=rBh<;)-VKol$mOzt00G[82sp<>t,@@V+x@lfXiq');
define('AUTH_SALT',        'avc1zwpslcVqmH|mG[Z.-wT3-_Q0Ux,nXmms}e4{7[IAuh+H|~Z0J)B~2Rc`Nex!');
define('SECURE_AUTH_SALT', '6TrA<!O=n1LGxdNj!vC9uxWn>q(F|hJ-M:p`y<6QfbSk3dpK7ArU[USzT>CAV,^|');
define('LOGGED_IN_SALT',   '_AG ^2tD30T85Dv#6$gCz:0j1;Q/H[1=5vDNUQm[S6itj`e#o$~5jUO&Tn@NS,W:');
define('NONCE_SALT',       'wgdg9dtQ q>&ecN87I8y}4wQW)JXf_|M>q2q0JBu]cMGUCcC1@x`u<JjCZs7@Tb8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sh_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

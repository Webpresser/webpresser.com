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
define('DB_NAME', 'webpresser_main');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'm>+LsY*Pf0itC6gXzOS@n151_vzbl&k,S(EtlEDB<M=.bLToOL|!=6]i-$wnKVV:');
define('SECURE_AUTH_KEY',  'kR{EX]_@Y(-4ZLTb,PMOG-c9j05FmNO,EH]q]Ed%N&a/EbGdV3-#xAcIN^zD73q?');
define('LOGGED_IN_KEY',    'q`ofP#oWw}+7`dY&*hw|>urgLft+O]-hhE|MD#+:8RM E8U/ABe,6>.w,6F3DUZK');
define('NONCE_KEY',        '3Te+YL}`_([|GY0#2j;mp;65<_B{*:i1(/yLj<;q#S;j+lIuAjCC%4g{|0IMS!oD');
define('AUTH_SALT',        'DoXFZF2oRZM(f:x#Tm1Q(~?0K!0@o.Y-m;D3k2e-aK.wBN| yxk=Z>$+GltH/&L#');
define('SECURE_AUTH_SALT', 'Oo`lmaAd.(7NC.MOJ+}nhCK1>wL[N,nQt0;A2kj^YY4:XT`|X,Bx/^*r>!|@@q|c');
define('LOGGED_IN_SALT',   'f-T-(X82OIzp0kT&x&cs(.1WF|87by[n`Qz|n7WWk27_}+f_x_KMu2Oa+w>4bJBM');
define('NONCE_SALT',       '`CMXB5+[mN._yKf*wFQi-]nt7+MkCPjP<{|5j@3/_sKs_ob{2EJYIAInla087gi<');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'claremar_87y4t983njfd98');

/** MySQL database username */
define('DB_USER', 'claremar_f0j398h');

/** MySQL database password */
define('DB_PASSWORD', 'g83754yg9234h');

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
define('AUTH_KEY',         '3nA7uXpQr=lk^k31JMo`YO.`V?ud/Wc4pR(v/&Kh4%Bpz](E8egJG-m-KBEhPGgb');
define('SECURE_AUTH_KEY',  ' -(-$T+.}(*z]ETeZ!k7q8ZGzLwIP{^guhgvoZ(C1BAq2+.N|^oEj/[OI>yyu a=');
define('LOGGED_IN_KEY',    'SQuP[Exrq[+e`GD_9uS@1h+=45FJxEaX5ydD&cU%vEg{GQx59t,]4hUO+5x6;W:T');
define('NONCE_KEY',        '_~50i|~$)(c-UVF~2_A7?C;:AwBIuA&1jchJrA/|PFsoxNwZ%rgj y25EXXBig9S');
define('AUTH_SALT',        '-u[A+3]ye5JlaV8aL|=TN?+U#f+=#=pRr|{<bM2E-:RGEl#-&V~|#k]?`166/9(y');
define('SECURE_AUTH_SALT', '+,tkS-;L<pz%L5_WK4}5hF+tMGn6p^FBx`N^x[udqji@8Ay0H`P*I&5.|n<9JUZM');
define('LOGGED_IN_SALT',   'KE=_EasvZwSd+#g@R{oGBjGZS`]?^oKgz}{qMs4ucNhbD=Sc<]5s{V4|TwUZ-=y~');
define('NONCE_SALT',       'L#^?AE.=>`DP9f?F~)d,%/o  G-Lj4wZ3ZccW-X- X_[;QO+,/9OtN<xZ>[;iE11');

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'claremarie.info');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

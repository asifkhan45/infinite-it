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
define('DB_NAME', 'infinity');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'JZoHw8[e#s!7RR@qMYV*p 2cMXM6?3+.VkcCUFZOev,gMQ2XXq7GeVdL*PjEgIy$');
define('SECURE_AUTH_KEY',  '_GO<l bgzs-t({pWAZJ36dd.R]~]xE$m~Q +VTYsO@o7vI{x$Mnr=In)rvtE7wDh');
define('LOGGED_IN_KEY',    'DDf6i.)0),0RT]h8Wtob/1{_3BB`4o_`idpnb(]%H3Ehd*yS_=O5O#?;b>5KEA0y');
define('NONCE_KEY',        'v[~G1H`4#94eW!TW_A+Q:0e.N[h?lB~/fbq?faNUm~O2`p%%@+bO[YmeA:<t~YUz');
define('AUTH_SALT',        'E@T9Xj^F *~f4fOfwB>IAyp:#;6~_)hCpw];szEhWB6]Od!hi$dJzV]E/>cva3Aw');
define('SECURE_AUTH_SALT', ',h_4g1)7}s,*w:;U$7Ty5T-<E#*x#ho<LsPl[03w-}M@{?cs|gY 3ruPi;Uds-Gt');
define('LOGGED_IN_SALT',   ',X3^_w3#lA,4nIm7KDYZrdldrXAtz!{+xYL=*y4_/H,%}$#Cp= q9me<*0whIe$5');
define('NONCE_SALT',       'WyszI 3w(,l|9=@E[a(QSasCy@Tfd]e=^BZUX[>04bv?bm:q+FkEj-(6.ozopbhp');

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_611_core' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b!?Tap;I#R}Qng{+D_WSvYN4{+{ W!))cs4V_?=|1{|)H;;%BPO[bSC{XL?7=.zQ' );
define( 'SECURE_AUTH_KEY',  'SgUcsYr2}JM+! rhbu36L84C.Ack%{1ZP ~]E#M[!p>8TxnB7cS<6Sz58 =od~h%' );
define( 'LOGGED_IN_KEY',    'o)r%nElsMt|3&H5H0zB1j32>pJUd9rLW+5;<[dt]Gldv7Ye*mf|YQX4[zmpM1MoQ' );
define( 'NONCE_KEY',        '4>9zA1s7dd&3{<bGR)|wYeV{DHYK0f<TCkX{v;KHVB$Qtd.qX8mz:Ws?a8|k`S1o' );
define( 'AUTH_SALT',        '|9G>L?AJ6$;(>KkUnRB)RhZEOi*kRHgyn1KIFa1v!o%D9Aj]ws{,QWTVG~cgawk=' );
define( 'SECURE_AUTH_SALT', '8N;q@b~TxAi?YCqwl:3eagMG988RDKFO Wq[%]uve(Lv29yO:p/T9S&W~Fa#WxUe' );
define( 'LOGGED_IN_SALT',   'Nv.jRa?H,5xkLgEUEegpdC :z~0 w]g0O0?NE4!,Df6B&5g0{9>cLeiU7||PHk(e' );
define( 'NONCE_SALT',       'N)su&y(`xRj6Nz7r38/o/zpw2w+,pL^hZdt4=Of;&@u@0JPkSGGU`][<Kv>S/u*;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

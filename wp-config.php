<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */




//--------------------------------------------------------------------
// DATABASE IS CONNECTED TO AZURE MYSQL FLEXIBLE SERVER DIRECTLY, WHILE EVEN RUNNING LOCALLY
//--------------------------------------------------------------------
define( 'DB_NAME', 'vedant_db' );

/** Database username */
define( 'DB_USER', 'vedant' );

/** Database password */
define( 'DB_PASSWORD', 'Vedant@1997' );

/** Database hostname */
define( 'DB_HOST', 'vedant-mysql.mysql.database.azure.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
//--------------------------------------------------------------------
// DATABASE IS CONNECTED TO AZURE MYSQL FLEXIBLE SERVER DIRECTLY, WHILE EVEN RUNNING LOCALLY
//--------------------------------------------------------------------




//--------------------------------------------------------------------
// THIS NEEDS TO BE ENABLE WHILE WORKING LOCALLY NOT ON PRODUCTION
//--------------------------------------------------------------------
define( 'WP_HOME', 'http://localhost/Vedant-wp' );
define( 'WP_SITEURL', 'http://localhost/Vedant-wp' );
//--------------------------------------------------------------------
// THIS NEEDS TO BE ENABLE WHILE WORKING LOCALLY NOT ON PRODUCTION
//--------------------------------------------------------------------




//--------------------------------------------------------------------
// THIS NEEDS TO BE ENABLE WHILE WORKING ON CLOUD NOT REQUIRED LOCALLY
//--------------------------------------------------------------------

// // To fix mix content and too many redirects error
// if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
//     $_SERVER['HTTPS'] = 'on';
// }

// $http_protocol = 'http://';

// if (!preg_match("/^localhost(:[0-9])/", $_SERVER['HTTP_HOST']) && !preg_match("/^127.0.0.1(:[0-9])/", $_SERVER['HTTP_HOST'])) {
//     $http_protocol = 'https://';
// }

// define('WP_HOME', $http_protocol . $_SERVER['HTTP_HOST']);
// define('WP_SITEURL', $http_protocol . $_SERVER['HTTP_HOST']);

//--------------------------------------------------------------------
// THIS NEEDS TO BE ENABLE WHILE WORKING ON CLOUD
//--------------------------------------------------------------------



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
define( 'AUTH_KEY',         'J0Om.wW`^Uqe<*;+%~P}ty;WN8P$jvk8:7c&C~9+bM`+{Yw77Bd*&|$k;bZMOB#<' );
define( 'SECURE_AUTH_KEY',  '[MH%>P(zjBU<FpPCW:@H(S(-twt5l@{YOB_V65Dh[aN@,MBu7m*0~|@xU):|$}AV' );
define( 'LOGGED_IN_KEY',    ':(Mbq}q|ec{XMS1t%}Q`(UWyuN)+su`]Z[^fLF<@|H [SjN@o qAw9b`$Nj7p@k]' );
define( 'NONCE_KEY',        'dMIcd(F[0(,DTUV]7r|zrdf6-6M #{^>EbC<1h/m4aya&~[8:ec,>161O t(hh{W' );
define( 'AUTH_SALT',        'VQ@Q(_#coan6FT(W9 *5;8a9P+1.0&dFZwH!.XO/0`sj)3&RLRg$`q^)p7LnvgD5' );
define( 'SECURE_AUTH_SALT', 'M$a&Pr=f G|F_Ju%{86+n3%77SIWzr]}14-&>2dWMeMnFj}}8Iq(!bgHvxK66on>' );
define( 'LOGGED_IN_SALT',   'B(xC]Q*J|SL4`h]VntU`&^h}DSNa95VkF_HT9[E/>M>:`w%1 QF|^P|:%CB6M7C5' );
define( 'NONCE_SALT',       '<zVh6lzpzo>%%>tjFBuL3eq2D.w|&/$Nr)M=67vb*sBX2klY~O>-q14Q1UbnKc8r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */




//--------------------------------------------------------------------
// THIS NEEDS TO BE ENABLE FOR ADDITIONAL DEBUG LOGGING
//--------------------------------------------------------------------
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

// LOGS WILL BE STORED INSIDE WP-CONTENT FOLDER ==>> debug.log

//--------------------------------------------------------------------
// // THIS NEEDS TO BE ENABLE FOR ADDITIONAL DEBUG LOGGING
//--------------------------------------------------------------------




/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

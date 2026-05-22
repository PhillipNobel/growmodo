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
define( 'DB_NAME', 'growmodo_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&O*4tJWi1n[XoNV1sRyqP[5MQ,QZsTR3<!U=W4DsC56OHU3HM$EvQ]Vc#8BG2%_b' );
define( 'SECURE_AUTH_KEY',  'h4MKpZR.vlFMWqD*aw-9E`iiJc=Q%.I`Y#O48Kz#/*:J)%cPh{IlA{$R)!L<Us?7' );
define( 'LOGGED_IN_KEY',    'Z#?1Uel~4Y~) q/XQ089Ca-PaDIp}/$SLYe1Yor#!p  9L7bs2-Btt^wkGVLM5Mj' );
define( 'NONCE_KEY',        ']A[|}JaU*z>%UD2nbT`K_kayx8WM!0ZqW~>l.27)iZBk>&?)+b8U0Mebx)7nxc@;' );
define( 'AUTH_SALT',        '9(9~Dd4s`fb[fKIwx];)R|{tc*sCBSr[?sA6k8!FO^3FB];!_wq@fMAEl/Xn&!@Z' );
define( 'SECURE_AUTH_SALT', '[,[A<QhaH#vP#R(]n]fKo 5h7;QM,z***GvDwb+]TQs@?scN~Sk?rvf_L4eJ5=7=' );
define( 'LOGGED_IN_SALT',   '(<D9(58]0$kT(!=$<<%E-zTqL77F7ar#rXwIgbx)V!1p=Tv5q+mtcCywV.^OW,H0' );
define( 'NONCE_SALT',       '_w[@aD(W*9*Y*[;!jd/^ij$/Oj+Y~$.PzTE.s|vH(c{+Nc;x:>m}:?,1SQVWFDzR' );

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
$table_prefix = 'wp_gm_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

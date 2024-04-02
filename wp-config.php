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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'git' );

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
define( 'AUTH_KEY',         'i|pFVFWhe6u{?MuAz1o|+!KKPBy)qH$IO|$A(YM?LXoYg#|lh]]t6lSXjhEnJu;>' );
define( 'SECURE_AUTH_KEY',  'qEuR?*lFC|+[d_]@E(kC/%0;|GOneA!;Dj>f&`fJKu}Go>RgzAq kN%Pmrv)Mo~ ' );
define( 'LOGGED_IN_KEY',    'ZlHx_Lj8;*,N?4p_y$2c|{wy&Ttxiv<o,wKu%p<X(;FL6:*MG`;]a0Ry>Uyss)R9' );
define( 'NONCE_KEY',        'qBH }Joo<^G+G#T?S%JV&rzrcwrm9&SX^k:M[yPAS,(2$!w*oU21n$mZCHsZ[Hd6' );
define( 'AUTH_SALT',        '%FV>pw @xFTtSQ[n~r&SvgEXx.{_jdYTu5kg{5Tm5~AMDhH-lw^nQl4xSeNqiy)H' );
define( 'SECURE_AUTH_SALT', '482wo^$w4~qd8Td((Z^oEYO9^T{;lAgy8i^R2kIR!@(G V*~bPk4fbsf=$=iB@l}' );
define( 'LOGGED_IN_SALT',   '_8[=BsF_X})wP-)Ey]{:1vuffNs%e4;AYHGlO`/0Dg*eRA2N)v|M2JzIV#CpN&R^' );
define( 'NONCE_SALT',       '~m30L?3P `Ide=yQA14pe!*g)5.p#U;`M3cHm=[%~(<jG,E=GCQ_n%?mAsbif/bE' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

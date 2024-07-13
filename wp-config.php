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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yM]J@WxKaY4{&!:iB|Xr-wNcZ&D=e>u[}S^!>; =+h$`dwo8)Pv?p([?/b,w;x(U' );
define( 'SECURE_AUTH_KEY',  'Mhe!//a #fgX-(;2?u^Ke*5/wKjhx%|7OL`gU<xb&]Q+?0A6LwfKV )=~w1a(,9w' );
define( 'LOGGED_IN_KEY',    ' kdiY&Zl:j=k=MKk}?6UEsoS*1,AN-cPu>W:l<JrLv<%|4dYxH@t3!,o%T`;@~LF' );
define( 'NONCE_KEY',        'iwd1u7{u$)KSMe8_O qY9D_JYn]){uIDYHmcx:$lja]BNb4k!}&UeN-?$TD,S6IW' );
define( 'AUTH_SALT',        '/H92_tj&qq+4K62w!3l6:3-`y0uL&Q,#-H,X#8JG4pah5 K.^/he{1g= v~4^Bn?' );
define( 'SECURE_AUTH_SALT', '3Iqz&8Ey_3+8a`xP(1D.FE<G#Am^BL8|jueMus0J/uJw{_LH,pX@[^CcHL$n2FN*' );
define( 'LOGGED_IN_SALT',   '5W)><^g!||1eanBKo1wr/&-/Ue3z9z%pprrMXV%XiJ7BYC8Tz0_Oe9c`->pw&.v}' );
define( 'NONCE_SALT',       '2C)2^xH92{h~poBMJQ.K*6E#Bq(KqeI0}D+dF+Rk{:)8QpBmF<&BVO5O5_.j%`UM' );

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

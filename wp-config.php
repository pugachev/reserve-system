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
define( 'DB_NAME', 'reserve-system' );

/** Database username */
define( 'DB_USER', 'mtake' );

/** Database password */
define( 'DB_PASSWORD', 'Manabu2010' );

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
define( 'AUTH_KEY',         '^V @ >{uBiF.LbwgVG~X}x|Ls(9~4p?H{.x(QL3s#hZbc~p)k5IMT*}!exHq rsD' );
define( 'SECURE_AUTH_KEY',  'y2AWKqB[n<R>eifwXm6:T/D$&}#E4Ue#RE7J`>stfvZASmLOn)*,&<I~.VTKg/_{' );
define( 'LOGGED_IN_KEY',    '=KSm1&b;VXyK^hXo-V4c0-hOgh$-nwkxT&6;7`S~&;73*khbFQOfQQ7]#!{$270!' );
define( 'NONCE_KEY',        'G#x^V]Ln){ow/ _pJCQ$Fo8n|6k xz/:l!4JqOuSHMKsy^InS5@ pN9/Ool-?QV~' );
define( 'AUTH_SALT',        'u*iB*E(FHEQPC7vpY!|rk:l5Y[i=N$3x&0UCZ=P=M)B)=j@C5kqZ@]EGr*$#K,[}' );
define( 'SECURE_AUTH_SALT', '_T1o??kzWJ~Q]}Y&9~o9lkjDQ{JF/~1YaX<|LL#^32t<].%PGE#+PwJ+9x6efV,1' );
define( 'LOGGED_IN_SALT',   '4PT~U~n(@nr@MZiF<ZjfTL4v7KO%`P_.n(#JYxAdmlrtVS(ZOE46[}*Yv:I!ULQp' );
define( 'NONCE_SALT',       ']q,|Nu/Yx6A _IJ6RAv1qWE4oB,8_VdA{efWi#la}(dmpm,I:{}:NK=}y)S,mN#M' );

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

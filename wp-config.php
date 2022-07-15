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
define( 'DB_NAME', 'overeden' );

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
define( 'AUTH_KEY',         '7;;U@xFgxS$(Re|o>UT7*m@_x&)a5IY}v?b$tPvAZ`..f 5[R!znZZwz8%(_/+7U' );
define( 'SECURE_AUTH_KEY',  'toIXmj(w)DNFko;?$+hsg-*h~fRFHK%}<FO!y-w)&}mFa3=D67o%CfMj< ~X82mc' );
define( 'LOGGED_IN_KEY',    'FQJF-G`(}yi,IO0QwP:czr,OD5vTKdH=v[WV>4Bi>%U/?3&kTjG@<T{l&^onUQ~y' );
define( 'NONCE_KEY',        'i{o( AAc%vD#y46.._i@w45}Cj v;</:AazUS(1FV`~2(6B?x!~D$(3iM__5(kTG' );
define( 'AUTH_SALT',        'jAuOYw+L]R#g+q62pQ)y(.GZk.3ukV;N[Oq]F*V/h$n)st660/HaL`;c~NAt_H^e' );
define( 'SECURE_AUTH_SALT', '-g8TDO.)+3/Nf)880Ps 9&oZo8RWc9X99w VH]vR)bnyWg}N%L?{$jx@<gfxT{H^' );
define( 'LOGGED_IN_SALT',   'QY<|T]! b{:Xl|Xg_).I]RrlmWZ )X;1(NO$_O<<HO[o_|Qvf6yDv48jR]O&X)2H' );
define( 'NONCE_SALT',       'Al,!0:a:|K0OV&u{AI%~Yw|EBdie^tEt<haMnJWXv4Ta7Cqx Qez@`JKLel=G,5S' );

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

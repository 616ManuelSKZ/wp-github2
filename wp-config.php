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
define( 'DB_NAME', 'githubdb' );

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
define( 'AUTH_KEY',         'bAmRTjbdJe:rke%~mnc/$gnLL^X<w6/-LETo D#(yTII-|cop1ltBV0!gA[jy~MY' );
define( 'SECURE_AUTH_KEY',  'qO2U)@1k#/oq5q>b8]_?/FFC P|Mt 0@{6O5ec-d[NW+&6G>sshSBC>xVxZe$il~' );
define( 'LOGGED_IN_KEY',    'QcA4#c}Gp9>t0>VXNhot.lO1oPwdE_?L/S``<Kq&b2}LwM:*i3-EY,XuZdapY/z]' );
define( 'NONCE_KEY',        '|968F( k#?!sR8Z17u{4>_@~24T+9zQ:1A.Uy,V+`D&qa5`>mell*3:&p1$!AtMJ' );
define( 'AUTH_SALT',        '8LYu$+kf;p3&yGFr|baI-YFJ&fde1t2.ASSgqVYem/,V(YVr94)~9:61(:^W!SYQ' );
define( 'SECURE_AUTH_SALT', 'l$n>Vgw} ]/BIX2lB:+8/`$RD5D9QBnBqrkywHac&5JX2;?3nmgs.,Y+DEd;+hov' );
define( 'LOGGED_IN_SALT',   '(_]uvkh96~F,tf.nm7<k^0HTjH$U?C+m1d<q%QLA0IGx61?@k;L*$2(`*SO2}-Ys' );
define( 'NONCE_SALT',       'A2!Dy>x3>{~,`6hUZO[O.9xO(B]Grf)^~Ad{|&2X`K=F_|$*3vl6pWB^x)ztyL.u' );

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

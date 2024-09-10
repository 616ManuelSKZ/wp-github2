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
define( 'DB_NAME', 'webejemplo' );

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
define( 'AUTH_KEY',         'k.J@s]%<0V/371/XpeS0Y`Yq~(diUx=|%,}6={&^}K1ud^j+@_y/b}YsB4cDQKnK' );
define( 'SECURE_AUTH_KEY',  '[}?%&G~aLQ9_AF%o-J>CCwtzJi>[1:GSJ<y_P3_k)Z^Gr7QRHKp=)B3:CM]mDo#(' );
define( 'LOGGED_IN_KEY',    ' jY9?u4BS<Nx v3,>lpU#S sgGVNo6G).pa@~3DvUH*RPKkLJF~VYR:/*)h:Zc{%' );
define( 'NONCE_KEY',        '`-&h[yz_8D%lN|_s6R+B`7J~hVhwJ*uhy1jp8AE@T6k<lm)Ef8v]Gb#jlP_PugMa' );
define( 'AUTH_SALT',        '}-;9cq*acaX]Z5 s)4zeDc)nbQYlIxg2(shTu)c5(-RfZleQ%s` m5<qD^fK!Jh`' );
define( 'SECURE_AUTH_SALT', '8>[{)tB[Gw|!H&mb;%d:eGAChc6a ;vzsHwiJ,:1JL}{QtMSm5ora%jo~-D*I![u' );
define( 'LOGGED_IN_SALT',   '$yKlU%6E%YH.Z-(Qn6>j//Qg~^UWqq_|8,c6-G#oxf`nGg/H/y~^B$/LhNpDE8WP' );
define( 'NONCE_SALT',       '/}3nO0GuA,1B^_*|k=ks#B(,D>O/V}I$b~&KFq6`qE19gMvQ|u(_w<9z5y<26p S' );

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

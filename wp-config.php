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
define( 'AUTH_KEY',         '^R}xxqHi=$`E3+KT/76tNUJDR2lIec*qWXWs9[!H~0p(7=sN:rM*U*wKW({*e+j:' );
define( 'SECURE_AUTH_KEY',  'e>jVfYaV1>OEjp*)8s1M 5IJ@jSAwahe+UH0|{Z7X|97vOWH8<%VZ6@-a#n~Y)l8' );
define( 'LOGGED_IN_KEY',    '8Vs;TAQ|eDV`eng-o,uQ>8(p^d^.utBAfMsVXq9/@Y-[m8-s7kG!oK=gX5D[zIE?' );
define( 'NONCE_KEY',        'iQJh=cxKh>}{Em!q&n(h_.?BU*-*mEoQ7mv#S-<!Hd-l^scot2KJ~l>Px?S[xAGL' );
define( 'AUTH_SALT',        '8i!^dpn!2|4m2D1tvUA/<^Ou;|jbg/`%blfD~(/lZYkt?*ITFox;0PsW)4]0Rko[' );
define( 'SECURE_AUTH_SALT', 'XN:ArHTDKE]/{nR8<!C=o7AA_<IvpZP_7DY)*1am4*MS=3wC$ulg,iDe@D(|{H|m' );
define( 'LOGGED_IN_SALT',   'r*X),} aG|G=f(2~3&ML3F>P)TH3gnc.|#o9z)b~@nXbb&-77`EPpa:3}Ixq[x9j' );
define( 'NONCE_SALT',       '$]@+&g]x9f5g#oi2&=:Yq5L_D+XV_*q9Ep=QMW!EX@5iLY?L/DHOBZK;J5tfZ!8?' );

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

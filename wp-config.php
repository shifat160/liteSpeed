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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'litespeed2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'e]W)sC:_OiiI^8Ew-3Cu#xMh{m6B`61OX:7.OAl5RiWWv|E,L`|+_?BK76gH=3cj' );
define( 'SECURE_AUTH_KEY',   'I+Z&D`<R8I|h;/oA0~Rv-~=)|Y39TR|BsXF Ry}T}KjfB-jVaN,~&wOoI} 4=JfG' );
define( 'LOGGED_IN_KEY',     '@H6mp9us8xptfQ[NjQ2=nO0mh_g(L%RMm`y]0ujG#Kf%$=zVRSok7/d[@Ge2]>dW' );
define( 'NONCE_KEY',         'n;W!]<*K#%mG7S?,S}0Bf)akdh1+wE7<AQ]Vsw+5?CfMbW/k1gR;-Y?2{c0Y;R6f' );
define( 'AUTH_SALT',         'WC/9zR: jdB|]Z./d-Ni+or/^KRrJ$%5~Klg)_$Cgjhn4O@6O6:rV`M(ygJvUte8' );
define( 'SECURE_AUTH_SALT',  'aCNpj<I8b-9Fjo8mZuMzgjP]I>E+,?oJBWf]* 7US^^H6{k10mb>3KYod @m]$(P' );
define( 'LOGGED_IN_SALT',    'qO]NVgew]Ej0@6{M)nw$=D2RE|?MJQB.0wsxSF<Z/G>8vhKHVWU%mfnroZ_EFMPz' );
define( 'NONCE_SALT',        'N!ova|6qn-=Sh]lsR0#=8u?JHm``Ptu+F;&^-82c;28g7%GO~7=<)%n04C:E&Mc@' );
define( 'WP_CACHE_KEY_SALT', 'o9Euv.@jC7%FeD/K&|m;&W a/d wAfi]?XQpq+cIv%.`S1]jkfw_Sq[k96dbh<YJ' );


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


/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

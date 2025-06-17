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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          'Ir~f_nCm6X1MZuH~CG?.clfw}$T~#Li2dg|z_8`4g@a652E:@`[eGbEu]DU$KyZE' );
define( 'SECURE_AUTH_KEY',   'yrJu]9ljI7cSf>G2:+c%<u_oxZR(r}Hy+vWe)vFHU=NaHW?]iWD3jp#t)Rq69Crz' );
define( 'LOGGED_IN_KEY',     '8FPtw7^QZ!=G*0nFO^l]l%k3E}^(bLl%bBZRpr>&7^~()^L8NhSsg4}[/%Ls)m0k' );
define( 'NONCE_KEY',         'z#%A6kd^<*|f@>TsHI}OL H#?x$!*7Fjoz20{vCb)vC.hh[c#PT@*_NMP5v;g)}$' );
define( 'AUTH_SALT',         'k3Pj6611UyWEp! Ps[qCv}Mt+>O/72.JW-[W@I@a<YcGf4{%aU?of}:iZ+|:f6wU' );
define( 'SECURE_AUTH_SALT',  '^S$Fh/C2Mu#={X$.&Z<de8f,@v9$+R*Zj[KzT:(M`|u%ZWW3[mf_J[Z_N)E!4YL]' );
define( 'LOGGED_IN_SALT',    '{YB,Q/w{Rv2Gtj?e?$DN9PIZ1E^2CAL`@;N?-Z*@xVH;heLyNh&?vWP_#9*NqW0n' );
define( 'NONCE_SALT',        'P,5}_);S6uJ&CVJClp.yI#|Q6 D-&|Q+PU6OE)xhD]iB4G%1a)lW8Vv=4Z2Z2w:x' );
define( 'WP_CACHE_KEY_SALT', 'S26@59F2vd.6idiqkszGH~5j$[1>DZ$3BAy}b+E)p[l65$~2B;Cx]nCBD5}-|tr,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

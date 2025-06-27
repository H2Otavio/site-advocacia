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
define( 'AUTH_KEY',          '3y.nR`mner(,v7-?Yr:Cwj/>&wn6Ri^$7pG0KbjQ#lnUl61r4dY>_*G!QG93%RUS' );
define( 'SECURE_AUTH_KEY',   'W` F=UWwlm7@Ap/;{z#790ObAh&D0dO=Z:/D}]b&#6|Qg>VfPNQ}j~t{4]?x0guU' );
define( 'LOGGED_IN_KEY',     'n FrS?vIa58&ACnbJLS<ODf2-,gTS{(a3R;*nwZK$Z26GnIF$|BAw>akS0/%hoA_' );
define( 'NONCE_KEY',         '#^gGUH#]7zBl:7|&qHl0$[jDN%6dwK#Dj6O, ;,U(Wi>Bz!Nymo+j<z]8#Rw#zrJ' );
define( 'AUTH_SALT',         '4?q~Ka{.BS%Y$|P `@`M[ Q6-*dOD#1fscL&29;U%gy}%)ONrHr4PHnCx_$r>;KG' );
define( 'SECURE_AUTH_SALT',  '<Rm)}A /c?dy)D!ilc`iSW:4@<56wo3R{VHHX(fTJO],ItUG<od>-{y]{7m/LVPo' );
define( 'LOGGED_IN_SALT',    'gkH4Fb?%`qbp^5;R_2^1_TfUK>,017S$@Fq +N|NydRCnxumg;|F(>Yr.JhBW8J.' );
define( 'NONCE_SALT',        ')TGo2Ps`BYk~:BEbIyOxo>E&G=c)>1e)TRFcAnn/J7y44;Cy;yR[Z(k9F^.AN6~*' );
define( 'WP_CACHE_KEY_SALT', '-:eplgl[.Y)sFlKF>Koe(iodo_-&%F624IkGBaVp2Y)Z}S&@pez!.}mpaJly>@Gf' );


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

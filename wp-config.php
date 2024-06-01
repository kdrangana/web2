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
define( 'DB_NAME', 'web2' );

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
define( 'AUTH_KEY',         'jj*3;cwN#@ (:|24]c[.m8Z]=26*Z{`4jg3:MrPl3[|g$mQUA<eSEr>P{oo5~5M/' );
define( 'SECURE_AUTH_KEY',  '<z=i+AmesT8q28x~c!QUS5m7znvU6tSufNB4D:UP+znX]OHYl4,1K,a[.6y]]flS' );
define( 'LOGGED_IN_KEY',    '6}472tPCl,h`fJ%M$t4gUk}7;/Y/YY6_(x?8=}*;;[}xK/o8r3eoUX+^n pNI@Li' );
define( 'NONCE_KEY',        'Iiw@c0NF2rsmq cJ ]Ufe s^nR-MFWFxyC6`.tv%rUZJ!n:`5L0kAEeg[[m#_%ga' );
define( 'AUTH_SALT',        ':N=UQ@#wG@_o!J`.dU^#.,u?[}!Rns/tZ^htk>4L|n9X( <1w<~G^S+(fd%z7<tg' );
define( 'SECURE_AUTH_SALT', 'bx@`rwdAp3P,)*J[SXqHqg`NP]uhbW4FAmYbK{e~!~Mnd>0<wnv/9.5@i8 ,YTE.' );
define( 'LOGGED_IN_SALT',   'Wz^L/joDqn~l>3(XYMQz.#6>7a]+q>Xz7}_J~oMma/&h(4zk71t_baHsW@6<q*;6' );
define( 'NONCE_SALT',       'PEc[j)bTV!0INs:$j}M&b#>2K^ND_&e{5tS&*_g0o)@NMw/*#[>4scUTfSdA1$G9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kd_';

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

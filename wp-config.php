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
define( 'DB_NAME', 'wp_wordpress' );

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
define( 'AUTH_KEY',         'aud]]S,k:TnL$^AO<F [QfBg`rMHAN3fktpRs(dk]3XLpnk=Honx@sR_zS;z x1r' );
define( 'SECURE_AUTH_KEY',  'h 4Zl6;Ai0K[5#bqB;4Fvl5V_n$,n1IV]Kk.RNy|ohE/4MdC3_bD^p.?1nLonvxl' );
define( 'LOGGED_IN_KEY',    'nI];nE#}nldi8I:fj+A0%En[GiCZc?5`BU`8Vd9RRwM!Q:=t%3<[!]YZEJ;X3m[w' );
define( 'NONCE_KEY',        'DbCU8!1K}0LhPx]kG2m#|H0`p@fVZjrxM6 D^hd*]Z=^Cfjz%F|hCkeNsS8c!EL#' );
define( 'AUTH_SALT',        '[5yMs8Dsj3$+50epQ 1I+m?hTS!W L`SVYe-2@9$)=G,4,G 0OTSR`ASMJ{?WFFa' );
define( 'SECURE_AUTH_SALT', 'TzRl&vt=Z!pWTGF:&,=-Ys0BmLNoB4YE5[i<(3Ac$Qnu-Jh!&}<?Ts.U{~c~YCzZ' );
define( 'LOGGED_IN_SALT',   '+=K^!J|I,+_0N)8]MUe7Pn[^ZCTxM=W:Q`9r8<YRM!TKu`}3Sn9Yik3Rbw8daHh?' );
define( 'NONCE_SALT',       '}*F_!be_.WOU*V DU8v<=f9%lP2x* F^a0JL&aGXTD%OQfJQNOqDqp9w+dZ/2k{J' );

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

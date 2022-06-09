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
define( 'DB_NAME', 'kikilearning' );

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
define( 'AUTH_KEY',         '_Q{6rAo!dUi4]Fl1Ba,>AbLp>,iJe}V?;O<h{G7-dZD(eC}PmTVPg}w-n*zkc} W' );
define( 'SECURE_AUTH_KEY',  'Cvs=?!PDJp{sdKoRd<lC-x*=wBSf<E(hQ<!co:hY8,:5/kO}<tob}LxsRbyrPyDx' );
define( 'LOGGED_IN_KEY',    'LZo>[wKm^f@St|R=)n%v_5H&EPmcV#)jnhDRG9Hko4gSeKzA=<b0b8ayf1io.tQb' );
define( 'NONCE_KEY',        'oNgLq4D )lp? =~I*F$x4uTR?dslly#YalGM]tTt+<,7ru8bU#?e/kA!yH0XMf/6' );
define( 'AUTH_SALT',        'B=6zW#Xm_.~4-cP4dSv5F?+GfMs{sc,<j]_>:~4+Z5Zi2@m{tu8fa X:FU?Z!Vt}' );
define( 'SECURE_AUTH_SALT', 'd}Z]jVx-_Bw=%c~E[-Yvq=MZF=V#h4CTuAoIW81-no@,-V^^C{C@_WFh%G1Mk`rb' );
define( 'LOGGED_IN_SALT',   '4i*l_zB{H[!x.pz9}M*uXMw<Xj.$-Qi.#6/+UcO.60lNxCB]UaduDP^-;NZv 8!m' );
define( 'NONCE_SALT',       '-s%D:IZ46Mj:M`#o-^^H(>j(2=n_P:t ]8P$PNzkk!)$?kYR4SxXDn N9HHi+^t`' );

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

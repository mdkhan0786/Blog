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
define( 'DB_NAME', 'I_K_DBMS' );

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
define( 'AUTH_KEY',         '5OeYqD$pQG>N{XHoL/hc/dF*`J}n`EJn~~rbUdaay(?F|*{Hb69Dr8SjBcX1aAE@' );
define( 'SECURE_AUTH_KEY',  '9lld/6z)]SkkJ!UiAhG.Z6t%XDk|!4**=,ZC))H.S%TtDF ~IB5[R(GM:pO++/dE' );
define( 'LOGGED_IN_KEY',    'DYv;kd)WWw^yCIaN,;zOL^Ko>kr$Y/N0k!D=US=0Uw0}),b>e=yn#C_~BpKC t)#' );
define( 'NONCE_KEY',        '&N~dPEH:t<<-uI*e-gL R`1g-l.LMc;M.}?dktkMomC[$df-)b&dC2 NJH} Oub!' );
define( 'AUTH_SALT',        'Fj$G?4tQn_d,C-N1TklGOwG;R!JSs W>XuEI(;b9+aU?k|*t2UESm=[CB7=9G~(V' );
define( 'SECURE_AUTH_SALT', ']`_E}!O~&0n&jUB&j[VeX`cC0Ru:;vYhZl)~++Qw#V1QIKP,GyVDbO;u#N$NJ>xM' );
define( 'LOGGED_IN_SALT',   'O[{3z>MsrKZOB%OQ!1c:QsCfark;,sYdE%c c(NM y95aJH0vGInLr=bywZN++SE' );
define( 'NONCE_SALT',       '4+oQK20@$]!8b%ml~aX/K98b0%m}9ep#psT~ ( @@b|UCCa8^!?>*[O9Y4D?H*mr' );

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

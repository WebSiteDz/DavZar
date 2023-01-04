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
define( 'DB_NAME', 'davzarts_db' );

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
define( 'AUTH_KEY',         'ttgG(-TDg*m2{TE@qR##,N:Mb7W@)yuN g`jp}g_#a8fJ:w{B|th>%=+uEYe)y[,' );
define( 'SECURE_AUTH_KEY',  'p_;E]{r6VY!g?7[!(>ljZ)ns^cQXWT]dDp*ZB43jdFnHJNlibw7QQy{2>11>{5H0' );
define( 'LOGGED_IN_KEY',    '+l(sK)yi=<*vCD[c+hNd,u$1y9,Ku?((7EgbsQcz*T(fI0.,y>H?I~T%g!5&^zPD' );
define( 'NONCE_KEY',        '[=+m6;:C!hbZln,RABkC:;o<F1O58>,SRgO_+4v?uapwN} q8FD,N2m>(a-rAK;9' );
define( 'AUTH_SALT',        '7d(.eo_lydSr;~7ggZ0WYIHnJJ8B]5g^S1[PQc+bR8qjwKh2(c3Sa +]rVRV2@j-' );
define( 'SECURE_AUTH_SALT', 'aISe.=1`kA#dxonl[u>YCfR^TqmcD^oxc%Tk2OYVqSuKTIc[P2=>:P+}7[q/^w#y' );
define( 'LOGGED_IN_SALT',   'lB<79r(-BfXt=Stqrn(];edX5z)~,47vL.~tT{q9TmbX:C,i_(e0yH{j8`E:4N?0' );
define( 'NONCE_SALT',       'Um}H`47M^X*A[[yS=B;?VKCCur/nGO2pr)L7i*h@igByJxHY4UzSxeZk&)m)hy^c' );

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

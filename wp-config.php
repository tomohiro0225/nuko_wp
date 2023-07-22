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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nukobell' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'JHfzfZ,Zu7c7D5u=#x_<ne,8! gq2Qy+**>}IMXBzSJFSJ/sBS+YZ,f;u+k,q[es' );
define( 'SECURE_AUTH_KEY',  'zv18xL9(NlX$?fPtN=v2q#E:v)juBBHPJHeaP7#[K=}B`P.T5%rg~jO%@ecI1zWp' );
define( 'LOGGED_IN_KEY',    'Uq-,mJA!|YYE$^mV?Y~Hu)`02.sa[/*Ki2}j>mV`B~_3_q%1IZ)iUSJ>JBM1F1?N' );
define( 'NONCE_KEY',        'CjJJd8SIZ-5?ihqi=kuYQ,zH+=gtBc>8y2A#2Dp$LA.I.[0kh{gvr+lA.NO=*e*+' );
define( 'AUTH_SALT',        'Ha?Sh6/bj%UV~ic]vmq~v)dpt/^Mn5~G+&`&=[*OqOZ/OlMJMZU?=67:((0Q [bO' );
define( 'SECURE_AUTH_SALT', '88x=uf0?Iy=WndHrQ=wI>!28<E;ff+<)z*s*t :?n>A97dq3jOA{,c)L^0Y@~U@Y' );
define( 'LOGGED_IN_SALT',   'F6LBD*-0j}=Pt$KgE.GhWC6Y`0jReoLOe67Q#)d$}K]l(KUOo|Z;qT^<*(7@oB! ' );
define( 'NONCE_SALT',       'Nb`[y&(s{DzTd~0tha(rFu[UY`JzxLJez9th.q-1i4D:_)y1!1!.d4lY9rH9ymwA' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

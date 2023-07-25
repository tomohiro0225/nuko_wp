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
define( 'DB_NAME', 'zukan' );

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
define( 'AUTH_KEY',         'DUaKrg<s&pqqb<;v-Z(uW5+|iFJCNQ2w[lu5EEP;fpsG;tFauH[cL7Y[1k[^&JM_' );
define( 'SECURE_AUTH_KEY',  '7>$&wz[wnB}mW!n8{m{/jc1oG FV@UlzoFk!/DUe,Fyt-!KZUgPg{*}&I]R-6+^d' );
define( 'LOGGED_IN_KEY',    '($ Q).Y~sH`Y)Yc2>KI{a1;=9 h[rvo^_JhL!}JZL1S`=C6}pQAxm(WGby5Ye0w7' );
define( 'NONCE_KEY',        '$z9&gO&re)ab:CQWMz/W~Q51Q*=:nD#NgW (@3.U$S8rlrC_kOa&st^NI5vKqwHL' );
define( 'AUTH_SALT',        ')I<LRaL$>8nKZn3^36*jD3&DJzmug!5Di3&dRiOFPH;V^,-Q8LDZUG~S,up+0g-V' );
define( 'SECURE_AUTH_SALT', '0Ys5X#`a,JDVd>?@&t`bva{rpQnz!M>:8GGTexMfOSbo5brm+ J+*Y9B(wteuwad' );
define( 'LOGGED_IN_SALT',   '._|N1j|R %x36z:Ye`tVz+@U-NpQcuL%{E#mxm,c/A!uk{@= n(EyI5;sz/Bf!Yf' );
define( 'NONCE_SALT',       'GTl[u]Ss8sh*>eiK#b;%ng0!~H!N$z:PhtY6wYH9RVxYFF.x#Qou[!3y*wn>7h_+' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

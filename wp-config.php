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
define( 'AUTH_KEY',          ':j)}Y3i~jlmvSm37| q|MK=wkZ0Nqu%5?>V=rzPeiR7Q,T21`@_jEv@Dz[aVG}-g' );
define( 'SECURE_AUTH_KEY',   'ExSwuVFOxe(1NU,2U9^K rg0bhIvUdNXg;.r7MVEv3iihc9UzY>Z#},Qs*$03_ @' );
define( 'LOGGED_IN_KEY',     'B]G}*4DMeR1H24OBFXCw[n>Gan( p>I@d~N.`E`5tYlbh,dc/4Ax`?.2J;Hj&E/#' );
define( 'NONCE_KEY',         '2P!Pv$LK:E,(_caJZY+,&+bo7=`oRO6:Y(v,`A+6Uy(swz_.e{)p?w?~|QtP?10z' );
define( 'AUTH_SALT',         'E#K{sThYx?Q8?= y/*N7S[%c3uJ*T%CCO]y;-]oNsN^|=JyNZNku C~2;+#lAU72' );
define( 'SECURE_AUTH_SALT',  'O=jx}7Wt#TWtmT]Tx?t?UVg2_^_q_eCU01@YObO,@o!3xKhYXMV~8+E+(P-EQ(QH' );
define( 'LOGGED_IN_SALT',    'm[t]]$Eyg;-O,s+vdsWu=:^=~5(WZE_uAp_#KFQF6!z&KP6|u@_<!UK0BhJ-!%x(' );
define( 'NONCE_SALT',        'u<A*H` cf,^c 6RRW@_8I8p$FUYdE?;^pBv6EhX8_ahY3G,Oyky3Q*-9A;glw$uZ' );
define( 'WP_CACHE_KEY_SALT', ')xxhG|`HGGi6A/5+6SHa{][ Vy?]p2yL#8My05p@D:zbP+_L!&/N`C,k8HjF;lc#' );


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

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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '$oRTNXn8CF[ Wwp4cC;T=}C<a93h].zOe.lWO}yz^JGx_}4V,@S_a=:Hk?u0M1[4' );
define( 'SECURE_AUTH_KEY',  'nJlIYI} q2WH7[-/pHcSaTjpyzY#8^(gQr5L4+#D&_lnJU{ 3+|91~^>h^0*zmN{' );
define( 'LOGGED_IN_KEY',    'sn/IA%y?&aN]s5k5Kv*zao,08 `)~|vN=psC}1wIr?hZ/B8n6Ce6-,+|tdcP/+a2' );
define( 'NONCE_KEY',        'Rq&&!qQv!(9C=xt$3-cqH_B^F?1ma$>7tFVF!a~lJMt%|&0,f]ed*njJ,5nR._xn' );
define( 'AUTH_SALT',        '[((i,$Mq]u$;Jk,11KQ?R<*N7[-Hz{/b*/TEg N&NwOI4i2{z:M+C-s=_><j5PN5' );
define( 'SECURE_AUTH_SALT', '70)2=erNr2@xtnBOf@^~fc1Fi@6~-mI[A9^}ht))o1 U*t&By0xQX^Q_@T?tR2;Y' );
define( 'LOGGED_IN_SALT',   'W8a*1L*n&]x0`^?3t[}/5W kSX].kSiXF;PD!aqtjkCPBcy#&9RwdpDK12#wct-4' );
define( 'NONCE_SALT',       '0u)do>>5jTl&Iq|zBUW,8(p7/l9XDpt[s5x!Ko=!AXT)m9k`BIb2q]mbPBos^q/0' );

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

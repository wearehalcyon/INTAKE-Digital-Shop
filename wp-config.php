<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intakedigital.site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P^^6yR~Dn8vT=t=.mVFr/9ppb_ocbjp/E46;HTS]1VKy[y4l{NG>83x=:]Ir00/s' );
define( 'SECURE_AUTH_KEY',  'n=6s1L:S`^NwD;|b.F}6=$$ru|rsQA%]Cd=l.JTp-Do 4+,+S{~JLm&_;hh6$xyZ' );
define( 'LOGGED_IN_KEY',    '.qhN?#b]xdFx&FZX{(YRJgL< Ttg<QOWhy74p3(g&(LDE^|n-:15:~ptE<s=fbCz' );
define( 'NONCE_KEY',        'Y0b&^C)67[ T&HA o&b-D~$M4*wrz[IisN.,wn-i?dW?*^:XAjiulFnO{1A&3s B' );
define( 'AUTH_SALT',        'C(C/%|*O%9kpP _uY4u9`|qaf./}tLFCBZh|,{.A]>U|;EtfKZsq7f|3*G*4D[VK' );
define( 'SECURE_AUTH_SALT', '8R^X4]R+6z^xdBT8(0#9v+b;59^JboFoNd&$[Q0V{0I~{ev%;;{d:yYb]9hc4jQ$' );
define( 'LOGGED_IN_SALT',   'i0X{k)`IdJ)IgzC6uou~TBr76g;Y/jj3kk{Whbt=;6/!m|#U[=)W>=RKh}kv*J*w' );
define( 'NONCE_SALT',       '`cf6~g2~{&}<eVdlAT=j`o%rOdL<a-5rWIc[@C:Y|htmEhUNmo5x@iM+)g=>dWB!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

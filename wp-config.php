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
define( 'DB_NAME', 'david' );

/** Database username */
define( 'DB_USER', 'david' );

/** Database password */
define( 'DB_PASSWORD', 'david101' );

/** Database hostname */
define( 'DB_HOST', 'database-1.czqlz0qsm9xo.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         ' mi|9:6U78]5b1mrJw=YI 0rKpKg}!FdG=l+UhLdbS*x3;Jtg(Gj!Id<#&b>o,9G' );
define( 'SECURE_AUTH_KEY',  'Ag1,>stP~gy:V];YoY>g#IomyfqR2-0b~$6DtK:2t,!62usF!SwnH@VnG1;- Ms3' );
define( 'LOGGED_IN_KEY',    'Z1a!EYF[X4j}vhcw32 Qix^CW%:B5!3S_[#X U(9<eJ>~;F)6^=gM&r pHW&7MV#' );
define( 'NONCE_KEY',        '+=sd,;,_T4mXgfn`ie+S/?%~HPDxIy/pCJHd,}=+jd*:wmK%z?G)s?8&gx0@d=CN' );
define( 'AUTH_SALT',        ':bbPQW+g;n!cWD|:Dg6eh.$s7V!e&7{8-ESJ<wq{YT5!]ocg9h!N;_1,uS rrznr' );
define( 'SECURE_AUTH_SALT', '5]_!p#FK-N,e!NsB(#=$3Tl-J<-(7+YEc~6uz}?a?1&5o>?8dHw{QD jal;OT.F8' );
define( 'LOGGED_IN_SALT',   'Ia+$[pu/];mu;gZqBQgq}T2FCB-4V0akklepjZZid,+q;zcY7XaoS1[g3UQLbIuc' );
define( 'NONCE_SALT',       '4!VNxJNCDN[L|r;`f3G>sSU/%hiF7$2No3y}f5TD`]Y[!,Rs{3!NJ;9r5k:. d/{' );

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

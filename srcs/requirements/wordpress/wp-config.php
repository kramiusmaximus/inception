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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',         '&F-/NP~Kl).e^o7/0)ux]3$`#TJ~LAT8]c8(ov<86<t^GBH,+[v*E`k1SJZ<<Yr(' );
define( 'SECURE_AUTH_KEY',  'vEl~V^M/_KGP! 0`(}?7qCybprw=^nNQX{@ow55mr==FU]Y&zU Je%W_6PmN9]-G' );
define( 'LOGGED_IN_KEY',    '+T$>|;Siw?$@^[A%:4dOSfiuL.kP|TymdSo)x,iFjkR x*~n+afxWr~8.cma`^Pn' );
define( 'NONCE_KEY',        'uy*:x_b(#-m9GV#@4sY/Y6J&zgL_REaJq[TR:6}FU]d)f_F}+4WqV:d`G}q1GpYd' );
define( 'AUTH_SALT',        'phRl[9ib(H0d [,CwSP>rr[73>lY[#tk~gBk_MQjruLg!#&-OJ{b+te}T~h<tIyy' );
define( 'SECURE_AUTH_SALT', '5^pSnpFYT][jOp EN)N ptUf.;2tb<IauMf*Wh_X.R#A|s}IoMx(=bwZK}x23?q#' );
define( 'LOGGED_IN_SALT',   'iDe_oFfg.P/F`Ft]vSa%:sFP:i h]7}WNz?o>5Kp-[mrxB#H`kiB}=Ai*:]KuQnV' );
define( 'NONCE_SALT',       'ttiJaw;/OTAbpUifr6Y/|mtE7P4qT@rN0hn#jg>MH*fZ$SOMAzPif1Ief7z](-:2' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

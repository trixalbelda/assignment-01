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
define( 'DB_NAME', 'the-ceo-mag-assignment-01' );

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
define( 'AUTH_KEY',         '2|m kx$5h%y>fmM|r(9:.O0xC~t=9D-tt{UiQS2qq()$VrDG;4}-]eBb,!IN7vsh' );
define( 'SECURE_AUTH_KEY',  '+.E|]=hMmge?n@X:-dg+EmF{ cTRYnPs$.4<HH)c*iep8At<G4aN~f4R68@m<8uL' );
define( 'LOGGED_IN_KEY',    ',>T]zHm*gd/2pIVwIYm3fze`_zn3w}XWcT$~L,$qJJ8OSiG; RPzjm ko6-dR.8{' );
define( 'NONCE_KEY',        'U}><7 3T!@>K]9@U6f$Lmu:whXeF!#,|uT%V+H9_ph1)zJK6~uBP[@pYVNLga0|Z' );
define( 'AUTH_SALT',        '_LE;*p)6UF$j>2dB}>}AMR$(]Ou?yBq5tl Zhb/ufE*SOht87N?(!1gjc;1O(XR*' );
define( 'SECURE_AUTH_SALT', '_s_3,5C!F?w&A>RdK#oid~>Egfvn[C!U|{8K+~bw=7=#-8LT?>wcfvCcN472S2pw' );
define( 'LOGGED_IN_SALT',   'x#@ei6mOX_xQa{46 &VqDzPMjHdHA+$YU?e/?n#*z<8NMS>-.xz0IDNyDk5&v@z`' );
define( 'NONCE_SALT',       '&Z<]Ml!Ro8y5(P1t1BC[, v?H3uJ&Lv>n{$AwCU;4Qp+B+i#@fz` zC |5kPt*d#' );

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

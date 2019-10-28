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
define( 'DB_NAME', 'wp-blog2019' );

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
define( 'AUTH_KEY',         'GnjhMg-snIjJZ1iUw6agMVHguOn_XcL0335r6mbkn5F$L3?rDnrx+abBm8~O6E.g' );
define( 'SECURE_AUTH_KEY',  'k_NW8X3_~W.rZv|aQJ4>41$<QpkU1a^z+$-m79cw`,$6-$K(oqG*QlKUC#.;LnHl' );
define( 'LOGGED_IN_KEY',    'dbmFmy.A8WEGD@]Z.0k o?_IdD7qyew#itsy hID%RIz:*k(H^HhN%ef1Ub7!ync' );
define( 'NONCE_KEY',        'YPRuPMZZZ6f:U1!)XTL*U@)+u-?4lBAd}!aQRbJ!7,vz8YP[mhE<,IM?wP<elk3T' );
define( 'AUTH_SALT',        'DbksW,[m;1k@6M@CdTPsV6Zl{.z9z;%n4BJ3H#.|uJ%~ h{$6`-BmhP#{vR1Q;9k' );
define( 'SECURE_AUTH_SALT', '9M@&=wr5FaFDe{pT5k{:J6oi$#ig_!b!x*?l_~OTDcZM%Q([bb2nroPc>4Fb,xgm' );
define( 'LOGGED_IN_SALT',   '!iOnAH#_k&dDc_<A?b-FX[r(2s5Uzp!t~JOY$Gl>$*0=T:N~EBV6CY#zY|m`>A=H' );
define( 'NONCE_SALT',       ']1BEZ=~y8&BENQ*GDYjOfHcwA=/+Nb|m7LCfo|?hSIe0B*0~%5q`1Jw=gjEG wpW' );

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

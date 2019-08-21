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
define( 'DB_NAME', 'jbeuscher' );

/** MySQL database username */
define( 'DB_USER', 'jbadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', '32feet' );

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
define( 'AUTH_KEY',         'GE,jls1$.[F7E(^f(BH?Cu Z!js=tkWzbU )(16fPAR_-`nJ0m8X5HOXw:lJP:[3' );
define( 'SECURE_AUTH_KEY',  'c;Fi~6]car%WRafs>awDK&xPD%j4 1{8[_k8%.$Dp/z%-68w>;C0.1F,9]0?ROR=' );
define( 'LOGGED_IN_KEY',    'd}kx!Ke_@_2%<pz^eLooM#O0U-a)SG}D8aNa}X~4JOL`^8D%]*q?-qfLc)zjo&]E' );
define( 'NONCE_KEY',        '5G9/>k7HhYz 1v*h&W!aB;BpX{bvNZ0th~)R9}e4Ryaijkn/Ab0jI(Ds}jFq#)Mz' );
define( 'AUTH_SALT',        'WLmg;^Pkr(,u/E#q1!d9`33^o#7B% 8jD@.:)ZtIY<98/R>eI>,l.T55`Nr0DSGr' );
define( 'SECURE_AUTH_SALT', '$/U/d$NnMa)|845AdDMu-Mwy7{a;{-reHP#lh^yWTn)X%@<$BnzY0B^%RBAzRaj;' );
define( 'LOGGED_IN_SALT',   'LJCrz`8:9nI*-FrjGo~vMW!!CGsC^peVx&.O*@NxLYEd2mKDe%Qi,3[BQQNGv s^' );
define( 'NONCE_SALT',       'U W2gf[/*R-YnKtm8v!`/x-s*^S/w<K|PJ&NMZ@HhGzT!`S[dg}wvUu{!mnsEM0@' );

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

define('FS_METHOD','direct');
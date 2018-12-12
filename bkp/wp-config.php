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
define('DB_NAME', 'thebeuschers');

/** MySQL database username */
define('DB_USER', 'thebeuschers');

/** MySQL database password */
define('DB_PASSWORD', '32feet');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-Ai0ag9]UBrlWi~+PP=,`v,9T-V5U,;*?kNc??bIx,d{W}{!]z=X{&TW-v&0=xny');
	define('SECURE_AUTH_KEY',  'GwHr_iE]W:FS+Df:yoZ3<$]7K<-H^Din|c@KaOpA/?B;pk+;M`(bh`,.6y{g;Q=l');
	define('LOGGED_IN_KEY',    'd!3-~sR=G-ewIJ+B j -OsM<ge!SCHwIIxLv{4{Z@q6;|5GJ5>}wv:X3[CzefdrY');
	define('NONCE_KEY',        '*:DTP+Qt;TPK)k3p]=,;/-6-6=,ao1&qdie02!w=z-P )_h>hW14U(toVmD|n?Wh');
	define('AUTH_SALT',        'h~k:2SoR tJzkJl0IO5=<KF]$PY+KgWl}Y#r)r{zu}xpA^EPy5+M2K#CF10;Ya !');
	define('SECURE_AUTH_SALT', 'R={lnyL@]CLu;G3Wz!CUUw>n40jFD ;=6,GpAWz[1hw*{|(k:QG}56G7wK{j|6|d');
	define('LOGGED_IN_SALT',   'IzenGS8Md_UOJLKR[J%YXSRzi_IE+tja> %rn1XmFYr0b>y3 5LzPL~H s|n+Lu:');
	define('NONCE_SALT',       'y/VzJ(|+=!IIF_h|goc+mJ|&ch=.!oma`cg&cNc <*=H(cm2/+mk+MIn9JrxGX0X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');

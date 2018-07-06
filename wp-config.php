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
define('DB_NAME', 'wp_database_logic');

/** MySQL database username */
define('DB_USER', 'waji');

/** MySQL database password */
define('DB_PASSWORD', 'Jayde2017@');

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
define('AUTH_KEY',         '}CY)W/&=#]&v,T+1nR2Oyj8hv@ 6#4YLsT(<>A@R~;&>5:)[Kzy6=poH4y]!*KI$');
define('SECURE_AUTH_KEY',  '1#4dq6N;?MSH/zr^gTgl0lxGxcmaa?|Xef}6wBG5h10:f,2xjYENsZ]wyX0koZIa');
define('LOGGED_IN_KEY',    '2|!9yfoRFE|4deH_lGKCHOA)*N{+ld10CQn@<1:>O#<{ ;@=o&9;bRbLKfKoKE?$');
define('NONCE_KEY',        '>wj8hs}[%QL_%A}`agC S/I2}/?sX Yr^bGcNdFv N`K;IX>{=6i!$0zt@h4dO!S');
define('AUTH_SALT',        'mt-YRrfNv7p|ls$Ea;bU},(,JPeW12^xSd=5%lNV2DU5M(kgw+4_m/xc-/O2r55H');
define('SECURE_AUTH_SALT', 'L`esQ#acr5?:h`BH.|Lghxc>QxgNjtjbhL/&$H40ZBj4&Bt*MpP@DWVr.x91h.0Z');
define('LOGGED_IN_SALT',   'C`u2I1=P|2yf:^w@JQ?s0B5h,V7@X9d9ls$L.y^PfS|4n^kt@We_qEhY!0`Y0pq`');
define('NONCE_SALT',       'fV>1v)o9UbrFjj{v3sTIC39ajyq;b?fECc4Kl|5w`@}#J/L7bdW9GMzIn.ZzA}}b');

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

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
define('DB_NAME', 'vanthang');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'FS_METHOD', 'direct' );

define('SAVEQUERIES',true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V(eW[_`fVbh1TPweC{e]0q$l:19i.z$xq7aj&lmC8yNt*|S)9_x{kXsfzFq+@6oA');
define('SECURE_AUTH_KEY',  '^OAnO!F5Wyi7V2_oOB%LWTmsH!69*@2hV{t6n+N|bO9- zW(Sf[W!,N{jZpX*a3#');
define('LOGGED_IN_KEY',    'R<H9m~82hQ?-ye7Zxd&0wXF7@y1lENBs=w@_D&ce[4aAfKQGnSr9D1{LZDSLpCJ]');
define('NONCE_KEY',        'NZV1EH=L=ysfXIq5>bl+KN&*3nh00_]H7Zx]>}6eZ_?dae5$d<RGgTmeP&KeHtvK');
define('AUTH_SALT',        'BO(w8_yz %k#O$hY/=RPUnj#d;t,U<n Ht:=>VB!~{^i:d@[6grQkb5jZf%M63(+');
define('SECURE_AUTH_SALT', 'UG?Yj7N2AsbaFdPlpxhBz0),eWc2|#,@r_NC,Awh6|mt;a_Hxk5qH(YK)mv1Q$>x');
define('LOGGED_IN_SALT',   '-0c8@d9LM/`mq`%bCNqU8 V[i$;q|St >2oM@]/?wD.{XEz70`6/;tsG=lh&FY6j');
define('NONCE_SALT',       '9GaG|!v*yDRo4PjBdl8// Mw}3FN-MZ+XBMM^5@a{[>8U`4[0s;ykh}gM5A0>7 R');

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

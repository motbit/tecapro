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
define('DB_NAME', 'tecapro');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'xaH WM>-Ijc8pc gM]/6~<@>|d&!LG9)8`D!up:JRV6Fhkcb_KLL]dKIzN}))J[,');
define('SECURE_AUTH_KEY',  '~vsD,fR]Gq473v,tSkSikVQ=peK#|q9}HZ&BBaHoO-[Y+}aZ(y:I(kq2Na1/O9hJ');
define('LOGGED_IN_KEY',    'g9>=S;{U}K8b`<^H=3[y(!$ENY;f$Wn%c^9**X;0U=dk6#$`_M^-}dcde#/YB%mk');
define('NONCE_KEY',        'TW_kF2Q2&DU$!T^,4;Bbp8aH+ s|h>)k%4Y%%d3ZCw&}pIT1~+p30[B#(fU6qe{p');
define('AUTH_SALT',        'Q.=q]?7F}`SpowT0oz}+~q9!SD^#Ks_b:D Yz}iMw1}): E=h/bnNg~[^u:^#w6N');
define('SECURE_AUTH_SALT', 'u7or-!b{B22tbw=~k[{l;9*_~D<<$<TP5mV -,AQW.RiEzRyE)(+>o,`<A.eJ;31');
define('LOGGED_IN_SALT',   '3l?$=8#i4FuMgs-`tB5i<lWNyWuwHl4wT90/g4D+!t{noR1xO4Amp#e4T:q`ND:t');
define('NONCE_SALT',       '7<mL9.[2+{ CtL*8> T]jt~pyJ5c1!B6C/34wkwXc`_WrB%O0ML*~0@jRWOSt()Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'teca_';

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

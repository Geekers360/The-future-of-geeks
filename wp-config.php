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
define('DB_NAME', 'futureofgeeks');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ZY}-[,Vj$OHiewsx#Z-Aq52}#!wz|a5fzTE4&2up4X QNLEb_gNlIcf>X8c=>*%5');
define('SECURE_AUTH_KEY',  '^mbE(@7Tvw93J(OD|wAnCOfhV~Y?!RIy $JXW]T3h{g3a*%8Ao-P>q@TbozI()v*');
define('LOGGED_IN_KEY',    'H.]^CU$==_pY=MGW@J#wx~6yy(+rbRLA8k:Y/S-%e4z97o#N?{BwzQ3$7=7~RLQ*');
define('NONCE_KEY',        'g3@Z]jw4#.?` U{5uoOB{X}s;>i%Oqk,Sk&+A&/m8%{G{9ajr{$c:,r7l^JK-VON');
define('AUTH_SALT',        '3@FCY$DKc5O4=%E7p?}/]>=1}!9.o`P~.b$*-tey@)tIlDq?Es:i4)fQx1qAgXc.');
define('SECURE_AUTH_SALT', '1v=h4O4%Or5}?8#szkn1BoV/NQTTrK%D6k$s4s Kt_4h&2Bsg%$}4FV8.-XdJ7 2');
define('LOGGED_IN_SALT',   'QPnQz(4J,54D4M+/+;09&f/k`(K7$989Qo_S),fb#=?R`n[ebSWNu)/VW,yEqn/|');
define('NONCE_SALT',       'XehWp}i:Akp9--M,-1ltVbM5IxOi_AM!IO7N)5QIktxIC^I06x;R6UP2>:;t(<+>');

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

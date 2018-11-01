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
define('DB_NAME', 'in4jobs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'BE[KvH;N@6y5[gWR[{A&-DL^HJ|n<f0Ik&n_`.lS%}SHiy5z}1>?nY+<P[notGn!');
define('SECURE_AUTH_KEY',  'z|Xdf@B&]%pC8h::$6=|+rsb|xGAiB_R_CGW@48$Pk4p::dLU}qM[$QB{&?Q+?]M');
define('LOGGED_IN_KEY',    'IdPCVr]q0x]6,gPV.4T_|WOqOA+I&Jj(vVg1MnU>2(&lI^GGysNO=>?G[4H4_KE ');
define('NONCE_KEY',        '75[2qx+77 ,yJt%QNE%^VkG`#eKestE#P>?v|Q^L-`&$gb$4+T&,FT$zw817LPh3');
define('AUTH_SALT',        'fuy6d~JDz7y$;-ukj=$nrIdBJH:1A<kGsq`#fyy$xx-9vhi^*y$MNT_g9FVv/Q?-');
define('SECURE_AUTH_SALT', 'C;F76aB(;7t<#X|j%QaCZ0;Ur6D4[a$!(b{DI.yE8]Su}.e)2,}rT]ppORol2mPz');
define('LOGGED_IN_SALT',   'P>uS:CK9VY`@x9f)k}+2R:C:L?,8B.Mc}%%hNUN2|IFDu/O,BujG}{%%t)Ir/hFy');
define('NONCE_SALT',       '4o-2o5L%U>7qam+Qn6}1Js(OOhNvvN@IwC?}%A_{Jn~J!w49wVvc# +s#<H_fF%G');

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

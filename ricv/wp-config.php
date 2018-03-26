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
define('DB_NAME', 'ricv');

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
define('AUTH_KEY',         '8%;Ip9JU`r%[qhCoCkz?st?V})K~J2qOAJXBcslT=+rNu@h5vv*0Rvo9q%=2i,Vf');
define('SECURE_AUTH_KEY',  'Ag5iI7,g0H77(VgNY=H;[]IQg~N~x6 w<V#QzzM8BEx()Z$m$$!E62lcxsuK37f}');
define('LOGGED_IN_KEY',    'rP4a*ESgi)adp@;4WS0PGdE!zg4J)F]^j+6!96b>C2nHc(D7hH4]98#V/iu`5l9M');
define('NONCE_KEY',        '*5{]3f7giY> ^uNc(q1x)L8!@IRm}.;o=5Nc&w#jHR1wEh]6pAtt3?aH?.[H3QP*');
define('AUTH_SALT',        'vGh<CyS+Wq@y0I{A?c)x>;qB;B{`5OVSY}$BP8n|i/z]rWlp])kX]Cr}~Q;@>g.=');
define('SECURE_AUTH_SALT', '7vYNBtb6Z+`yVT]V0@8Ref]]h:1Vz;FXB,+?2[OGa}qqb1.oP+x!Hut`D])R*r~x');
define('LOGGED_IN_SALT',   'O]kV[c(nwowj&`ZzNv&V}SH};%4t!;0&-Us;:;(o5}nEZH{uX,[*]q-A!~5a69NT');
define('NONCE_SALT',       'i^dSJI4U!;b{P.[5}@l#|=;W +h)0>Dn/$B<(C3`jS]<ynny/%%D.;%/lXUj-#+1');

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

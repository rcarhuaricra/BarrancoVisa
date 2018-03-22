<?php
define('BBLANG', 'es_ES');
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
define('DB_NAME', 'urbanlab');

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
define('AUTH_KEY',         '41y!X}AQ^2E{aFu:g18o7(n9f2*[*sBFN_B0E}I>:-2xCMzb]-Ysb$0ykKnF{ug/');
define('SECURE_AUTH_KEY',  '3)-llFv;VruJLDFe_}BxgPrKN]S7:~G1!e6Ap$XGu $98vm~oaf TzbxCd/VO5Ae');
define('LOGGED_IN_KEY',    'B:8Q87mRC:cR0=#F!=7#a==,X9?ZM8K)n}d>,(aBn2{pOZ(W95|%/yJQX>!cv6um');
define('NONCE_KEY',        '3.t-w*eJ-MYuVu|p-ZECK~b}pwLdH]T-lu+%={fe6M6D?,K%w9}mfB?/#XLm}0Dh');
define('AUTH_SALT',        'F.?-G]?H[qNx`7NeI&K]:y+OKW2PTJD:g7=M8xwy^/R5+E~~Gjoq||6js1eC^$/e');
define('SECURE_AUTH_SALT', 'njxY*q0SJ;n.>M3^W~,dcbc;`RtK>MQYc@2y{mss9@,r/{X*]A<CEv[05/(%my5C');
define('LOGGED_IN_SALT',   'S:_2$%cO*$B,oHG}Z9,Y~R$x]3Lw{ Dx@dC@5Ls%H+O>gmM}o}c9C?!M;B{&P`V_');
define('NONCE_SALT',       'uDcsPR%O$eGLAPO||?3Zg29P;=~ns}}d5#0aQEnlq_vB(8RYQ?Py8V}nZu_oPrz0');

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

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
define('DB_NAME', 'clean_wp_base');

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
define('AUTH_KEY',         '(Z_NZ?3IuYm%K0NNmOO9t(,7(gq+WKV/$_FgHPc=)m5Q+tOhK US%vZ`}TfS[Qe;');
define('SECURE_AUTH_KEY',  'eh`=|TInd)kM1{Je_vXUw@}x]eheMKbSUl4.CKWL*5o,4HZx8Rvh>WVx_F>4^pGy');
define('LOGGED_IN_KEY',    'm!d|S>9on#HS:||R_~`>L.iD1Hj[BHsz><jW&H3WVS,#U`md:JEv:-&4+6!Wz;?p');
define('NONCE_KEY',        ';8O3(-`j0CzpFMGeD&%E+H5b?BJ7%)Fk*bWS+v[6|;8*N<EGg}*LqNImm4Cvy$P@');
define('AUTH_SALT',        '53ZG2DVK_T)aPa73z}arf[Ps5! aI;,lSR}A8*i=bGXo3!NQIv[b%Id.oP7!t$!J');
define('SECURE_AUTH_SALT', 'U2tCq(bzpOTPif<Vx~8nVFwCy~SfJrWxWD4rJ=b]!CI=+rZ.(fvf+8`^#W:$t3a}');
define('LOGGED_IN_SALT',   'E|&iYIEp-J~B>%S7<MvJ633(50U[yXJc.B|%Jb:e?b)DgsZ^@{Dy*d>k$X7Yq8!j');
define('NONCE_SALT',       ':CE*0]hKt=<jI@*bTR4Xw0{-^;M>@.wtyAibobdQP*7:TFKf0}=fpK*!Lw379/_L');

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

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
define('DB_NAME', 'cheapflightsfromtampa_db');

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
define('AUTH_KEY',         ':9C*HP_nZo:hF-qEaoOoBP2wnCu:Ki[qS<()evM4kZo.93|`6vT<hg}5z:hP]unK');
define('SECURE_AUTH_KEY',  '}vCy.2YV5mD{xr.gV1U$VWb9@{N9gcz!AG/a$FRfPte0z-HxyE%`$FzX1zxob(jS');
define('LOGGED_IN_KEY',    'm;Pra^-0JQ>-G2]Dplq:soXX}rz[>SioFue[C+y{J>#fG>BXbpb)G38Dh:p$j4yg');
define('NONCE_KEY',        'dXi`:~/s*]8*alHOaQ{!aq3{Z2`q,Y~hGrd*%a0+g(D-nLp]#f$kpFeCn>sx0Q=-');
define('AUTH_SALT',        'aYdWOyRF/Si!EeO;<O0DJO^6K.N}}uA3UnJ[^>9u@BF#rgUkF|DTepmwNyltug{8');
define('SECURE_AUTH_SALT', 'd4rM5y|tF[3&Wj@Gu61aGw05rQPwwjTk~Y%Q`}(=kPN-Pt=k[+:B@g(2%v$0NE9l');
define('LOGGED_IN_SALT',   '!HB0*~F9yrS|_+}3Q2Wi614M1Xs8,j>ZU91M$Nj_B]nC!WDw2@]*$wcke;QiCE y');
define('NONCE_SALT',       '$sF@X3$J(^K,z,NEe}%nqd]e7 $`^r*.&rDFj,,Yj=^x}-Ez67X]kq)9,:x:?Z;s');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

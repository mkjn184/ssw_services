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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '@5f?[:!W(v_TwRQ)aH._8.V_Eo)M%C$&|t~3HxgPE$zzjRL62BPn8NLMys=dr_B`');
define('SECURE_AUTH_KEY',  'rw}/eu>@h021auJwh>6K`6Hw$tY<Y#dR|EN)^dnL+;$3Fyee({$yH~F)&7^M)Mw0');
define('LOGGED_IN_KEY',    '|4UKsutffN`ocHsM4[L/SM{tO<=FCKjxZX3uZme7PZ:=+jZ7w(|WGKqbc=Hb>D=!');
define('NONCE_KEY',        'wbixa=%7_Eon#*A-/%H{:b;hYc^bN-E!A_mng1X^yAR!v6D#`I_r<wU7wJc!ySZ~');
define('AUTH_SALT',        '#6h8jH63bMHO|I`fF!!7#P2h1m32;^mGGO@Nu+oYvHx7u[0bF}3eBnFiuu4a9KAy');
define('SECURE_AUTH_SALT', ':wmtHPp%v20TX/MJB@G7tCj1D%Jc3I {(zF 0/F{~<~DP?JTh/YJCpFV<~we-Tf?');
define('LOGGED_IN_SALT',   '{pdyQcbp>jM(`[IBBZt}(-+p/3qceIwk5tHPcX7z#<7s:Zn5O}k,:`44>ygZcHnC');
define('NONCE_SALT',       '+k) {YJ@O:(pH/1t5+k7c1]|ECP13&{p+},F{[m MP|WHE^~XUg@..iHD=)~?~){');

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

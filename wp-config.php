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
define('DB_NAME', 'wordpress_levon');

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
define('AUTH_KEY',         'Qi?BkZAL_G[X(IN1e&u/Ny8UEC4UH)~p7Jk3BWZ6OVYcM$4Ui}QMBeWm>J.`` A_');
define('SECURE_AUTH_KEY',  '&iFA7hU-c%QSW6d(yYyUPCcMA;6s2W`6Bon4d6F$wtO:U^>5g(.?>_cOO.CyO|i3');
define('LOGGED_IN_KEY',    'la*~t&e*=< CrGPIuqxNN-QZaj;Lp.4~Z?Inc]DAwXgBy?@,^=gv9}p4KwgY<9yC');
define('NONCE_KEY',        '}JsCga(}<o`oD9TW|uoiQ@qYI^rS|}rrrX<=Q>qNyhY<?z__S#+G#?[HTgq$|#Qg');
define('AUTH_SALT',        '0{EHMz#MqDu&I>Sc8MpM{;3,QdW*FpXOWU&*q1:sN`s8PI)]-$81[[xciFxk)*2/');
define('SECURE_AUTH_SALT', 'i~n- ouIsWBUEYV &*fPlppAHn)7tElWp/MP!q-{v0-X9`,gv}j^iQhK])D]w%G)');
define('LOGGED_IN_SALT',   ']v([$a0QX}VnI&F[j  E_Y`^O@##dNY;JE%lK%/!Ur$2J-Y*(t5b}M_^NJU}!{x)');
define('NONCE_SALT',       'w-#yKjaB,b~m>De. &vO;}9ACyXvC5K0xsK=Np;c+qCt;$]L](Lyv6q)fQ)130jr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'levon_';

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

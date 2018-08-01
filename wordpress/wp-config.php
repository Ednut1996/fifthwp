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
define('DB_NAME', 'fifthwp');

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
define('AUTH_KEY',         '(1z:`yelJbM~zG#~Z/=nRh%4J0.uss-F~}]Bh t%{H&pES}zcU*<=d+#w`*[U*Gc');
define('SECURE_AUTH_KEY',  'O*nc6}aF )yn+5%llBA-whH/Z?7sSj[9h>xc;45yQ1,MvM^MCMMl}AiZS6^CSWM ');
define('LOGGED_IN_KEY',    'hKdkwVf R.Mo(S?]D$_%Cd`hv[( ^+0%t$::L~WAUG=J3|0w4H:e%`,q5l|[Zl3G');
define('NONCE_KEY',        '|o}mn+X/$/oo!w%#s2~2 lb~@FBgHq&CN&I0!EU,wm&je249Dz#Nul!C,m|de3vF');
define('AUTH_SALT',        '^TkY`bY9aKF}S2<,$7`;qLMcxa{Tl-.C<o9l.UlOt+%u:28(R=o5o^FB)px+55_M');
define('SECURE_AUTH_SALT', 'SVrsJ8r5_WB -qGzX4Ue&G^I7^?{,/*;pQ]]F]Sx$#_+K<m tA&22(]W=o#.AU4f');
define('LOGGED_IN_SALT',   'Mr-h<6hAB:]KG+2v_kt~nR=5@b$EW@2-8,by/^W{Qw*8X@>3hUY`#N?vGm2Azr!L');
define('NONCE_SALT',       '5]>nb5I0-rr;#uYU}>9mfG10]G(3hSMu$GO#cPX*NFuOg6Nr63<vN=Agp^Z@r0 [');

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

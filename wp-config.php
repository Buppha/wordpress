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
define('DB_NAME', 'workshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'poppom22936');

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
define('AUTH_KEY',         '(,/.un]*z$8l}_Lzgw8OafM!~}3zT_PdCt|H)@Bl_~.E=[WIR[Q{B<kP%V$Gt6-1');
define('SECURE_AUTH_KEY',  '-*J(?6)/w5d`DuI-^c,;9a7~qzhs#}*2n%D38c+M55:ue|iI9va^0PaCq/%PHm:;');
define('LOGGED_IN_KEY',    '4@Jq&+wFwP]3U(W@tuDVdvok p}x?7r_O/X|ASMhy{N,S-1RqYw[ %T8: +cV:2>');
define('NONCE_KEY',        '#t.zdg{-[[X#j_fe6@Es@B3A<q@=x@4)XI-g6eMT|1|/t/x4`v,m~@I#f!:GxF5D');
define('AUTH_SALT',        '*XkAMlf@TK?y ?x;0rtEe;CBH#xB0nsDq?P[AIco]4_cewja+,9-]p5i~5eypFim');
define('SECURE_AUTH_SALT', '%TdLOi15JD+D9~6et/NcmY6i6c#dnd.h0L_iZUQ]Ff*dJ*u/!`5r@l)Y!3S~0h0!');
define('LOGGED_IN_SALT',   'cxiXkZK[*<[gO?eW%(7M,w)nOpO<:)oJibV<Sp]yafWB>LvK{_G%Vn_7IQps]ZX{');
define('NONCE_SALT',       '$DjRE++JGFhEW(KH1:V-5RK/5t}mbz@#:dgZ9UWZk2>sphb#qj(_!?LK s.<?YX^');

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

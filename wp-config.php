<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('DB_NAME', 'hv');

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
define('AUTH_KEY',         '_L&|f`hy[F?=Z_GxI|.y/wJp*=yhijlPr!lF]]&g{+}LU`$Li]*?L<yN|-NbC9<O');
define('SECURE_AUTH_KEY',  '-*a3dcxhxlQT6s,TNrS5B(tC[ajh%(E`mfCJaD?4,pE~UYH`oYDzf4>U_?h^ime)');
define('LOGGED_IN_KEY',    '8@7Qr^.5C1)VQ|AK3gZ~@`nvdsA_WfQsotPP4QTmI=OG,j]wx#I~E6q=?N0YHFJi');
define('NONCE_KEY',        '+4cvkH@~Gs.COBN44nuUzn~xmRqgCm}oo?Y/k-=WKbM4KVLl.^,UQ]J6a5.,I4l&');
define('AUTH_SALT',        'NU}rt*p`=Q-y46_wkf&3]sU@h-XMHI$wpp!*UV8#s[/s8PCMw%YV?Bqs_0;~U[23');
define('SECURE_AUTH_SALT', '!(9<*;>0dm,eLhA7*3{(%2!2:SZm*0J?=^K|xmdl n|$c(&xU7M3#a=Ri{gYFsLi');
define('LOGGED_IN_SALT',   'VeVbk:{Ne_h&<GF+tX-n%[I[OO 7.uKf{TvVsBG1j0j}3f>Y%Hn;1rY-=t[r@=c`');
define('NONCE_SALT',       '! 9uns1/T*V#F^J6+@VYs;y}.uZ-o-[0W&Bp*tSL((gWkXFLzy+1v{ Zg_oie3fd');

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

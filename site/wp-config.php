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
define('DB_NAME', 'dindb');

/** MySQL database username */
define('DB_USER', 'din');

/** MySQL database password */
define('DB_PASSWORD', 'dinmysqlpassword');

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
define('AUTH_KEY',         '0rm%gUE,<>;0B}DD?3KtD+/`;&@/dk_d+s;YM-whQkox^]R,ml?0{F!$0ii|rzS_');
define('SECURE_AUTH_KEY',  '2UhF&T8T1S};?/j#]0,3amDctN8Yw0`mhMF!tk!ukXc} ,r*H*>Ax<,|{PV]Fi|0');
define('LOGGED_IN_KEY',    'n9Fc;b5Sk&Yd]G/?l;ahTYRMWhP}<vj8Ed).H|BY5R)8oL&2wXa`[5~1KGFUG536');
define('NONCE_KEY',        'dP {Z!JAr{m)eYaAl|4p)b6pA__wY=Fx&E G?]$e5jb>J:fy6/so|q6Q8s2BNjY|');
define('AUTH_SALT',        'vhCky;TTrupaKTJ`qIoa/`s4Ed=pblheig=7ZX:g%+mK:;cs)>>Ke|v}@wjXs&@V');
define('SECURE_AUTH_SALT', ']&S.bW,592asIu:zlR*U BQ3srxF%Ky4v/u/Z4z;SRY~e2S(1)Ms@E9D&j2{G9D2');
define('LOGGED_IN_SALT',   'X6{6Z9b@cV/9[=OY{[v]N1]pjF`Lh@bQ RaGcsxC7dyMVy@V{UE2^]lECDmzmV?I');
define('NONCE_SALT',       ':,@==6CgK@eGIDe&M#KYqxqQO*rxoh smq5SBBLjv>UZ#C+32|dD9Kva`HEs!DjJ');

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

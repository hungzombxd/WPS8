<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'S8_DB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '*1v-D0;O=`Qg/&dduu@Pmn~pn#fHE)KQaeod7;>zf-pYEc9UJa7:k]]ZumTzH[R+');
define('SECURE_AUTH_KEY',  ' B]ZUhW4/Y{iKCiq?g!!K]eq5x+OxzP)F@)h:+u*H5K]DoxXXZ}nCkxSvblGyc5+');
define('LOGGED_IN_KEY',    'oe%~;+`|0SiJQbMNd/I4Eu+.U@~IG*+uESvX+u!^irY?B7+<+;@ejN%o6=&5h3<P');
define('NONCE_KEY',        '7AVrKYKA$|?+ydu$}Q7!:&vXY 86S6Y9#a5,M^$S*wW-3cBy&wssWgc+a1|KSG(c');
define('AUTH_SALT',        ',se63s3-pdGC&Co(KPEp0/{$DY(r`EZ6tX,2p$fD!OdwoMB@@an^)S8mg%nL >j}');
define('SECURE_AUTH_SALT', ':6f,>hzZHg8Ks1jM<Z vfXIr;Vl`Hl>onI;6f.B+/OZhM1La|iy)Z$:V.!z<|puv');
define('LOGGED_IN_SALT',   'Ogfmcp}hQO|K!6B15DkAb~h+;^n-:8x+:pFTh6Xv-v+t+Jbu(|e?1Xn4jypx(pV!');
define('NONCE_SALT',       'TN@Z4iyn79zx(2<Kv`1f-7Ho0UwmJFOh~^Hbc2|c]*0|yY-ZKA&^Oqmc1dE[;*7U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

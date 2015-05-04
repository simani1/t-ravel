<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'travel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '2&X#u8vpsBf<qS0<*}*#Eg0cj|tFwc*-E`LO?D=$WQvC.)|e8o^y6aQii5MB2<:5');
define('SECURE_AUTH_KEY',  'Ih1AIjBlK^IZZJi-RKPap-bl@F2MH|@@Ebl^WXRm]56HRT7}hW1)wV|9GeTY0ro4');
define('LOGGED_IN_KEY',    ' &aL:*xP Doe/:3~Ua owY^5z{OU!9C=!e1>ltWW1.F(0>kg%QI|&6|#+`qNg <p');
define('NONCE_KEY',        '=&a},v+*!PSLVwVuj(8+10.<0~VI+Z)J;aJMp.yQ3Y|(rWS#*;Cd%vu$IxV+>=vf');
define('AUTH_SALT',        'Kn|[I%B SW5a$L5>aMDj|fT|[y`+E]k?x%1.D#vXU}+ai8.4CINEzbHaQnj_i_g7');
define('SECURE_AUTH_SALT', '1 0-atg}N>D8d>Oz@b#*A|JixW$G<UF?EY<zw}XatB|1eK|_dA0zx|^-fKrCk{8*');
define('LOGGED_IN_SALT',   'Pn -oGWqlB:lfxWO[t}LnJ$k[T:tO`I+U^9^4.CNbV$~QS8DM`Bbf:e+xjyCs^)C');
define('NONCE_SALT',       ']Zk*]=`T3^ &qj@%N?BU:t@=m$DB(Kj6=vItPmv7@e6|+{D--_E0m`<.+Zdv|iwh');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

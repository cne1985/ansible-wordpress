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
define('DB_NAME', '{{database_name}}');

/** MySQL database username */
define('DB_USER', '{{database_user}}');

/** MySQL database password */
define('DB_PASSWORD', '{{database_password}}');

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
define('AUTH_KEY',         '7/xo[NDXTZYczS%Ud~bZ_^v@Z>r,`RBw`A:@O~o;2)>dyJ9X=oD2q$`kgDk1Pg6]');
define('SECURE_AUTH_KEY',  '`ynAp7a9O,fqD9a^lBsl]:odN_3-+XXI`bSq /U@>s-Y,N<*Ty]d]d-PX_@,a EG');
define('LOGGED_IN_KEY',    'e{*qY*g8?7?oIJ2=u8+O ob wL~HUgwdq/2+L1l5!|LZ& vE:{dh!HL[.Yx-oEVb');
define('NONCE_KEY',        '(ykNI{KY/cSymujR)?>)vrYLdlr,_H+x,k` Jji*x=-PZVY_w2NsH2DgLfb^% ]^');
define('AUTH_SALT',        '7!Io 1j<R?G*nkMQ2ve`Em8g*E5.&r+i2PI3XaNN|4w0&341]Wc^AL(V0P~^6-I]');
define('SECURE_AUTH_SALT', '{D9!>/ }QE((AC*Z*`(+Y`tY}Lw|V%33z7% a~tVR*H9<Ur^>hA4nvq+Ak5cu;//');
define('LOGGED_IN_SALT',   'c79EbE((X~JauyFV:^.vK]&n$TzP[#}uZ@69K)D?pc6_DGvEqY{~ucBdT=Q14E)z');
define('NONCE_SALT',       'L1PK5[(B*8O;!LTPY3YuepoXzuB.IM[J?0>~1W.:*Ck2w1#!3=^0d+6Ny+T#4$js');

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

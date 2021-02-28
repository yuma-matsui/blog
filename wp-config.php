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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!GMi&)Z,D=tk72)=[tF-,7jgznB=g;QfL4jJ,(PxzVe$zD4hN[*:ulQTo-[^}l](' );
define( 'SECURE_AUTH_KEY',  'MRJ%;uK01`nGGQ4<Q$#4^(92mIOdo}FuUk:v*5jL_5C_t*SshQu[ys5n0Ek#L?c5' );
define( 'LOGGED_IN_KEY',    'c Yq |+Uf:90Mqk/:|UK:@kOK>tz3dO=.o?H76/sRq9jinjmFBRnDbe}Pc59&@$a' );
define( 'NONCE_KEY',        'nC8E@X6[7z!? 8!g.(TE=6D5a%bechM$sH*=xs<6%0y88bOs?BN${S) M tQjL -' );
define( 'AUTH_SALT',        'p]/xUQX$c<}Nxd<KK&OuBbmNzG[88/K;fErh17Ij8)jx6,3Jq`j`@jpK[WD-Y-T2' );
define( 'SECURE_AUTH_SALT', '>h]W02pp|ah58eY064EQ}@q]4X6)jV+,VW92#&|]7:z#0H?yDD5TSBo9|.wq$H#5' );
define( 'LOGGED_IN_SALT',   'i[l!%S$Bo`y:3AE-<aaxq)<F`UfYw9=QeuH04%I[bO>.C72&Td{1DH]1/Jn`o!=D' );
define( 'NONCE_SALT',       'KmI(9Wvs(Q&Gp(eav(zxw%ih##nG&llSfWcX!|t!#p[VztEI#_JQ<7}DH#T5~.C:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

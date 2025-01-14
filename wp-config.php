<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webberita' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e&a%LTZ@@/LKrP>i]4pkiqB&?K=;x5b1n+Zv4%qkyV|6O7.T?OgZm;E/eSTO9$8g' );
define( 'SECURE_AUTH_KEY',  'e4_wY^Wta9~.ftk[Gy=jH!d4bK4UzXck]xa=?#9ZsTL1<lc=i<_!KI=>[$^1b/j|' );
define( 'LOGGED_IN_KEY',    '[2)9,Drh|elHf[-5P778}[J5*!;9JYIW{0;k4QEaUt(N|ywX,uxD0A!TE8~>~SU8' );
define( 'NONCE_KEY',        '!@:Pah&%_InV%~s;W4``EGxp,)q=U3yh!N1/*q#]o5Rd B6^kD3APj{80P$h1Khq' );
define( 'AUTH_SALT',        '0_Rz7UqS,n`w$3$&^vY1pe+%;m<dzIlgY%.~;Gc((wp`QW Qi ok:=d7M!RKU24+' );
define( 'SECURE_AUTH_SALT', 'GgShl_67[*Gr=3N7Iuo:).KPEKzT2H2~UdxBX@OQ71}Zb3X1,bRYVvC~j|FT%ua$' );
define( 'LOGGED_IN_SALT',   'kNJ&u9SzB>chM=OZ[K|IW9.W{g$|].XgNs6fPs$*,IPC;|+5S=RB4Y8P<PWO#;EC' );
define( 'NONCE_SALT',       'dzC:IkP*wF4BnNs7X}qH{b(oj#XXj,<NIgdFno{Tx<u|%|zWgtU)bD569LPupNqx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

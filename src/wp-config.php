<?php

define('FS_METHOD', 'direct');
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );
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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         '_RGDMND}x1Raw[Jcx[,^cR 3vm go)}`9Lbm8O7elrMxcwgV35f(A:Sq=PVoo|n@' );
define( 'SECURE_AUTH_KEY',  '3rLa5U6S77aRVn4wkjWTw+sJc@tRnW_I!A5i7_n4/l?Oy1)NQG{Q=#v4p6X7aj`q' );
define( 'LOGGED_IN_KEY',    '0Wumr/5K1#sO?6a&a-ndxGrz,xO>83mu?=zj{Zq{jv]N.=M}mZ!5K)Tw#6d%B}CG' );
define( 'NONCE_KEY',        'KG1f/0[[h6ujH:,j5CmP+ddK}`qWi`Q=(t;-;V@BM,Su*{]K++P$70yBk%=FF|$^' );
define( 'AUTH_SALT',        '0)Ld-Y [w{;xvQp$YK~h|sa$t<Yhbe_b`&RQZL/G|2LWjBE@3m(HjROR.hS08c]q' );
define( 'SECURE_AUTH_SALT', '5#`YRxFctj~VT@wI|Q/^]XqSh?vDcIfj.Ok-For{!L&!Zc0vBYJnNP6~lZ1v[}_O' );
define( 'LOGGED_IN_SALT',   'G8S&u!-uB_A%%9WP`NgVW5&;y$v+S*9b%pZLH fTimSg21?v^Sq@H=c-A4?1>W:q' );
define( 'NONCE_SALT',       'cU;%z0I$`.aeMEuog#>~<9ydZitd-bBu?{< YD,B4)/9?.kLC@J+Q#LG/!IS3lu+' );

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

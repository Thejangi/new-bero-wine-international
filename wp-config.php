<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^tg,+|(/ Ix7J?>wLPy#i5dGiv+k<?{u>Y9Q4g^3&?F!x#lMJs]EcrsX80r}w9YU' );
define( 'SECURE_AUTH_KEY',   'db#)C[$7f)$>yn*mR6v@!qp<C+J%aOE -6yJM6Ps{)7c6C[9/,T]KvK@.@4L,$S?' );
define( 'LOGGED_IN_KEY',     '48=M0~W98Ao;Jr;_lU-Ikeh$<Cp7<a_#hqMJOszR`+=Naa#Bh2)y99O-e{zpgys4' );
define( 'NONCE_KEY',         '.6pZd6-oh.?]2NcJftK@)F93eSgOz:gD62P1lON4VVUx<#,Bb)yd#u!5rd?ZvAGN' );
define( 'AUTH_SALT',         '0OcD!D*@MxJ&tU&6!No!:G1(_KB,4d3Zhj<K!9xxH<]XnJ=2=*_!UdvS?uTwGvWo' );
define( 'SECURE_AUTH_SALT',  '{F@t)XLuzu]xebnG+6PDHFIID-J#|JvoLyU{[lzQj$ zo_:[I3[Qx{`B#lSgJn;i' );
define( 'LOGGED_IN_SALT',    '^-/0/iI+2$T-TEtzVmgb+*,<><-Qsd~FXOQ*gxVDD<o Gn-4hZc>d/8}uLVFd:J-' );
define( 'NONCE_SALT',        'm-5I)>Z.@jW  rb</@_Q9z4@ti:j<X@3;YS]NZ5gZKC@f~>/zcNRbn!+Ze&u]w_K' );
define( 'WP_CACHE_KEY_SALT', '(L@|vb2+~OaYxb^T)+K-Z<<JVo.*,@z_+UdJ4YaHwLd*H8i;1DRCDwKVe3l%HKq;' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

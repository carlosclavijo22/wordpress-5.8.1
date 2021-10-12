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
define( 'DB_NAME', 'sql10443823' );

/** MySQL database username */
define( 'DB_USER', 'sql10443823' );

/** MySQL database password */
define( 'DB_PASSWORD', 'YuLVWIJlI9' );

/** MySQL hostname */
define( 'DB_HOST', 'sql10.freesqldatabase.com' );

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
define('AUTH_KEY',         '7K]j=&F2a1dG28w$zVm+qq;`*HF72mQ8:~cGvXsr3rUP-`O9d_F+NR1ouNIT890+');
define('SECURE_AUTH_KEY',  'fi|C.t&F)`b,EMQ/r)6fXEh8|w=P;|LT%Xsz]U4A?!|||ZH*0g4f|)~fL5=T5FGk');
define('LOGGED_IN_KEY',    '&LOcCUlx+u6FJy#A+-R~7oxY*xL9)+p4)RVFh[M]2eXu))T+Q7K!q]C!=K-%ieVp');
define('NONCE_KEY',        '^R3 ]nZa|h%s4N6|Is>-j^my+EA8e w0t+^cH>(yfVi`E.x+hCkT|jBgcMf-x&.N');
define('AUTH_SALT',        'JV34BbV%#i=[Rn69y_d|I$Ekn2P+sy85XUrtK=9`ZR+%t=2]/h?7k LaW8&Pxlj+');
define('SECURE_AUTH_SALT', 'NV=e=*dTWdJ-;6%VYI>qDx[s)z$: T@sore# z|<(G&WxUghyUB^b47qj+dP4Hd`');
define('LOGGED_IN_SALT',   ']3>*LSY.z<~W)q@:RI.?PBl4lXoLjKc&HZp;54ORcKl|.*z9:)vVLH&:Y?^<9=:k');
define('NONCE_SALT',       '@6kX@T4fq0BT77=BCDpd`),hf9mPxksUGQ}P$$FmXncA[F&EZ |$qzMwpk.,{`St');
	
/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

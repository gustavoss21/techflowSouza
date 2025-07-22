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
define( 'DB_NAME', 'flowsouza' );

/** Database username */
define( 'DB_USER', 'gustavo_root' );

/** Database password */
define( 'DB_PASSWORD', '991465393gs' );

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
define( 'AUTH_KEY',         'Pf-Qx:#QC4lRBw5!DmirlzF$T.=L9%6.(IWTD[t2v=58LLf]>Cxy>T[YlZ+Vb&F{' );
define( 'SECURE_AUTH_KEY',  'W`|XkUS5SpCWdzbPRW1xMsI1|RAaztAfGPI__3E/T|8:[j]p7~[F0{(hW0B6Yc91' );
define( 'LOGGED_IN_KEY',    ';#JIRM;Xm:-FCxF-jmD8!9zQ2;W6L^pZbH$KkiX3e>q=6[sy&LiOM:8hOr U,D<`' );
define( 'NONCE_KEY',        'l-Z}IXF~r>Sjb~d!K.JhD@P?QyBF5HG-MUF--m9#}>P8tBQfX61hvLbU#:]+/ nY' );
define( 'AUTH_SALT',        'PU_!2#m:xdv/geGmm&}#x+H37Mi@8BlMDF-RYn~5|6;xLV9.)tLVdGV@Z9ZJ4K=<' );
define( 'SECURE_AUTH_SALT', '-b-?y4!bplI_U,sT6>hBK|Kqj7j?KC.88mT+Tt7$xrvy}j[2FSGV-zD2Mzm;GsN-' );
define( 'LOGGED_IN_SALT',   'iL]Kha*Uzb3B3!x]tUIwml+}5nM2j(<A_1qtFsxZ[-H%xZ>NEm4mE.zhFd1/$T[V' );
define( 'NONCE_SALT',       'hT9vAmGG!%]p.2/?trqg|7ISnKf%qAit|5T`7iQid%i<CeAgPt;ykD^aYLwp<i5P' );

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

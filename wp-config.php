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
define( 'DB_NAME', 'ticketClub_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'TWu;l`l6:MNGo:.QDhFU24{^`r^$BL<M`DC*?zJaJEJ}!|h./sVdX@6&-)m%fs.D' );
define( 'SECURE_AUTH_KEY',  'Si|tH|sUG5646i&wJUDiz/~OQ#R$*2`Q57WPOqO(T%^4b4cU8ZG/Y(8c<pA&aNqg' );
define( 'LOGGED_IN_KEY',    'm}A_@rtsc0P:s#g/&EfK{JDxcXoW2HbQt*pMoW0>Uav`RQ|>M~qF+;)4(_imve5v' );
define( 'NONCE_KEY',        '<@r|&P%}|T.:o)+ez7r0e.ssTn0zXj]$jT85LerE4eG3SUgTfco;W,*6!!-?v{x<' );
define( 'AUTH_SALT',        'nL*56A[,WO@4|Rk a:?vW=?9Puf3e5/MAh..$&eJ<jm}Yv.Ce]jXcTrkQS2CHle;' );
define( 'SECURE_AUTH_SALT', '%@3t_E,5Xhs>aBFN#bE>Kk)0hu#=5%pH(EjS$~P+grWq:.W)&G!;hP|$rb+3g+=L' );
define( 'LOGGED_IN_SALT',   '>AYh%5&5Kcg1>/TmuDhkH(D}6gOkF)X$]&fS2o6MdqU-;Ter@[ms,K(A9T>V-iRX' );
define( 'NONCE_SALT',       '6#mF]nZU3w>o/L-f?LKahBxeI4I#j_CPc1.mUuGLI4?7<AY6e?PH`$}K=&V`}FMB' );

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

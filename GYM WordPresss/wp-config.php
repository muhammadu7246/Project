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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GYM' );

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
define( 'AUTH_KEY',         'U^`8-=0458;eF1N>@~3wEPADDS#]Zd y(6PJ/Z_Gl* Psa#zd}~6Q#lY!vQv(9[~' );
define( 'SECURE_AUTH_KEY',  '2:q3FSvZ;6e_]$j64,P+b/K1p#~YkLtL nbJsWMf$[hvkBS.vMA;MUGeTc31rMPY' );
define( 'LOGGED_IN_KEY',    '|dd3)&ZiN=s8ZN!YKY]V=p2zBP#QiRcDg%}3Z~WCAOePBl*.@17dgUj[&)4Hv#+v' );
define( 'NONCE_KEY',        'uJq(W*c>[*@;kYa8]{0kX]U_!jpr08fVN3ZFI{4m4closdW_Jsu&8UY:pox9T<S5' );
define( 'AUTH_SALT',        '>C2JWl|Eb8rE{`dyLZhB:{03Wz)%A#nP<}`174ifNK@Qo@pLhsKQPQE)`wq}h>&g' );
define( 'SECURE_AUTH_SALT', '4wlrwT#D[}@q}l+*]xwcG 2aavoo1(#r%Re&5g_lI448/hI]kO(!T;qt|FsFQx+E' );
define( 'LOGGED_IN_SALT',   'tx5!71aHI^wNgr(H~2&V|eP[{gB/!G1d@[M!+$VM(^)G:z)ISo#oh:73`{_fe@Eg' );
define( 'NONCE_SALT',       'EsUSdJK^AtK}~G#DlGnoyOy(&tpmE=)7x2:9E-A77 )n8BSt=QMK!P547S&cPD=.' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

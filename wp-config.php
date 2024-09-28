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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'tP:9:;]:N J3^S^;Jn(Lv@jz Q7+KEa04=w#FpApRw5&3q?FJKzOb@y60oLx4h$L' );
define( 'SECURE_AUTH_KEY',  'R5h2TffzOmLW)qHIRomz,`=luDZ0!Bj@7I=(_h[iQaJ@8Kd3d3rK#d ->}KXqDa-' );
define( 'LOGGED_IN_KEY',    'U6j+<yzo@*i3mfg<8)ULnSV/E.$0siDn|<X`zqglS^?(zO_!g:G8!$`!i/ 8V/rm' );
define( 'NONCE_KEY',        'GN)raJ3P7NmF-Ze9 0:jXMox*Ofu01pE*H%ZR_>Wynkx9z@Ylyc`O&f+)M+IMTQF' );
define( 'AUTH_SALT',        'eO{Te6=gHY4tsp- X2QQ[HrlPmu$Zfr/4E5b/(xOYe^!&9-P;6TPp5UdbPF<JKUB' );
define( 'SECURE_AUTH_SALT', '|P!?WMwUNp!`GsC0Nx`mkxqgD&P3#kd=s]UF!!*7lehg7?#Yr#h#R bHYpGjG%1V' );
define( 'LOGGED_IN_SALT',   '+RR)x1p-qGI `H<p}~?BAka=rqA[S/#J=7r;=FB%=2^A,#5[=Xtiz/Xkv],`Q&ra' );
define( 'NONCE_SALT',       'zA3A5&O[nIZNKb=K;Rhn$DT:sc=Mr,{0{YOV$6jC [/6lYuJB6#:8W5Y40i9FF{>' );

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

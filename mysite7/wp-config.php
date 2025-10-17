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
define( 'DB_NAME', 'mysite7' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'UegLQv$Bb.|A(VHKe3exO.nxxuez X$!RB*[pN)-hHw)kJhq1t^aW|N{8z%O0?q$' );
define( 'SECURE_AUTH_KEY',  'e>M@iv_LFMUk0A8JGn,/#`&3DjU#d`W=|x0+SSk{0}f/[)Si|Zyi=MrsyfB6PY!j' );
define( 'LOGGED_IN_KEY',    'EixAo=VTba>CH(3@Yj2FNzeVarrpcCm)oT*/P$5@m*JV8EG(YC&9n7P?{,zPnWPc' );
define( 'NONCE_KEY',        '$d>,)HE2j.TN#o9K<0;kcGUWaYa%(w6Ef9Tc-4+xT=^U[|=bL}L|eE9-.NS|me?i' );
define( 'AUTH_SALT',        'Ta2b-:4jh_zLj0+%.5q_ZWATe=mBV@V,ioba^R7$/eB:`bJWJk?M.^%8)V(}IePN' );
define( 'SECURE_AUTH_SALT', '3Epn~Dl#ti6=~(3V27mbcQU08_h<?s-mKWZc1@mdDrS2Pnw4XHqp9Fu]$iGI) V7' );
define( 'LOGGED_IN_SALT',   'k2WP/j!c<n!B^pK6k/Ja5Ga]K?kT)_#tg56/e$$q(7P/ejmsJOT2*6@4&s!3OFm@' );
define( 'NONCE_SALT',       'W/~&F!Aqw|} kB2^%Y)#7Zs1[a PbSjjX9XO#B^A<uu:G1rh=!!XeVJ8kJ7c]uQ|' );

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

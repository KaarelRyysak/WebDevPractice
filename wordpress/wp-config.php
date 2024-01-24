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
define( 'DB_NAME', 'db_one' );

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
define( 'AUTH_KEY',         'tL53?Mh$j|rO!ppve&|CB3KM]b^fR-dIxTm,LN+XIay!*<0=rN[PcQfqT$dSh[Q~' );
define( 'SECURE_AUTH_KEY',  'gDF9QHmNCc18lh8VGwKf0rQx50jn0Jkm#,K^,4B@^?o Gasdv%D4c{aJT=`Z]msE' );
define( 'LOGGED_IN_KEY',    'S}wIg1nFYX`.fIwlcC=Dz2nzK8;D<~45[Of$_+dHbNOq/awj,1}eblh*8MQi~%n:' );
define( 'NONCE_KEY',        'y8ECe?Z1PNzeAujkxeul%(lZ*-0bO@hbZT]Mb1fKz(Js96AxEtS$mB/y4.a);<8B' );
define( 'AUTH_SALT',        ')Jkd/w%dnf>OXap;b0@M:0P=<,i@C-AG}Xb;Wd`#{8lr|{4o.TK35c9rk]wI4vho' );
define( 'SECURE_AUTH_SALT', 'u.&m3}^{0^E]+_9>8%I~QL}ZBq Qj8Y14[H^`IYZ|x]c<dVk `Y,M>nkxhxY<K6r' );
define( 'LOGGED_IN_SALT',   '3-oBrlv<q$|4cZVV[ 7oK3S*BJnk5]*Y}A&?JT:)yFfLLv[eEh -#Q>o[=-&>`w}' );
define( 'NONCE_SALT',       'dF+{JwU}6hN<;IjKO9`VZ3Wy[Q1HyS;J#.&3gM|1<N-s/]s?4!a|SD?FAk%vNQNU' );

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

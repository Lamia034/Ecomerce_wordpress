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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'Xzml=JT91yaayl<^o!ED^IC> ?tJN5dE84GG0UF2L8)cfJ,5*Z2b!4:n,%{}QxRY' );
define( 'SECURE_AUTH_KEY',  'H|O0_J%rR-FgNvkm2u8PLLeeE_vX8!u#Bdn) 9mT*Wq`cx^uCGqFbPs$;b![`iv{' );
define( 'LOGGED_IN_KEY',    'w p@*lnC2V>wX+TyPpd Iw%@6S_(YC6aJy$fPUc0,}</K0f>@Z<d>ccq&0mgcp#u' );
define( 'NONCE_KEY',        'NazERY$Daq(RUDf>![tdh~0b%#rtlgA!|F&lH%mQ9,rza@lh4^m!kQG7vY@u<XCT' );
define( 'AUTH_SALT',        '9nF2M7yvnolji/~[^n];*AG$%69wjPors$)Fh:k;YtD:3l@{UQZ*N34D@O&|99Tn' );
define( 'SECURE_AUTH_SALT', 'qO?yS3gw$d:/?:C  UY?VZz;#P5.y}uGFS$S@}X%V*A6!)nd)ng-wZM`cFkHgPzu' );
define( 'LOGGED_IN_SALT',   'cu?EWO^i{ ~t8ZKX-^$d-2pwBqo)Y]Z)AK3d475V!F7iaHGx.Cafxp~mgOLCeqN6' );
define( 'NONCE_SALT',       'xBLzWTE]rR&a C14>#7i}PX`CS[kh:GcT=dTk&4u&E7.oG88-ucLMhJr+Xq.&Yn%' );

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

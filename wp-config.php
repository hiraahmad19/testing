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
define( 'DB_NAME', 'eyes' );

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
define( 'AUTH_KEY',         'd2:wdi|$]cu=}Xny5sQ#f#xpfGaW.@<|aiVk>Txq6$1.vyyoj=zeqUI}F/~`-VlP' );
define( 'SECURE_AUTH_KEY',  'OfPY%mrqX`3%AHAkM]%w|@?IXl*a)Cqx6(Er80@wO7n]otSmmlJU~Zx4>I}~X2$7' );
define( 'LOGGED_IN_KEY',    'SjDA1w6C5u7@,II@k[BxY7yO(d(>wK+|,<6k@NV}3Q>I4TCyC$T-:t!rNkt?>:{K' );
define( 'NONCE_KEY',        'wLo<KY@;MFk_=Z6(-VzE6C;y6>+n&3N/ff`bLU/+dzv,^qZ-ExzeWA<*cRJYr/jp' );
define( 'AUTH_SALT',        '%=qH1>Rc|mSaB/p+C/H;rTl74lyCUF5^,Y,@_{L[a;%OC+@>F`g^3H=Ah(DVv5+Y' );
define( 'SECURE_AUTH_SALT', '%q Iw)Y,>L|xwxxlxOY|*+Fri51]N3iJJ,D#jXj%5*U6aFRN?[#ad2pWf(TFMKpv' );
define( 'LOGGED_IN_SALT',   'a3LC_-3!.PbE*HRih_bDDv6)Vm:oRB_MeK|ymT?@e)Jec!/T;/MP+WTi:1:HGjia' );
define( 'NONCE_SALT',       'D?j^R#cJx:VJlX <O?nlP=llD|e}Z}uZg[1-zYG=ok?kqqX6 Ze<J)(m@R?MHy^q' );

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

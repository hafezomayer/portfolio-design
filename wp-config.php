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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '?wdJ*I9?n4=Sjf|<hE,/?t`i^6rN@mR>< (i2FE%?g~zAQT|lxh4*l+I]bFViq(]' );
define( 'SECURE_AUTH_KEY',  's%eK$IMwmRVfql>9&B~igI`(ao1Vi:-Zksv?wc0!:5Du=dJVXdn^,]+s:Q1H<:qC' );
define( 'LOGGED_IN_KEY',    ' .{K r<OzV%iR4[&`qFPV61|<alInZ!Tv%TbfLI`J8gWEQ1Ltb.w-IWgowRv7c# ' );
define( 'NONCE_KEY',        '_2IR,dgMU=F+EIhX*<)W6n9y_`-&z]Q?&Y(r DT39L=^*/%cb|U>Rw7D$4_ZtdrJ' );
define( 'AUTH_SALT',        'd/45Hb/z}VAc[xREiLvUh0+_h#DZ6)<(k3PlV:}k[,D2Zw1<liSX4k> 97lfimZB' );
define( 'SECURE_AUTH_SALT', 'a4]>UbzZf6<KQ5m=yd1~`a/awZ7SD0s[Pim(DIMu{b$V`1DTKorw;0=TsM*Bc<{g' );
define( 'LOGGED_IN_SALT',   'X{EuXQaa.3k:w4eZbM0wu%g$TM>fhz>g6rMV=9Fp+r6V|<T-K},cC4ae,Ut{cn78' );
define( 'NONCE_SALT',       'qxLmMA9ha<aq]^zN4)Bn /ema7R(UH^:~Y`wqz,xvYur%(A(pxk*]$Id[1L=+}}`' );

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

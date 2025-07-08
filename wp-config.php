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
define( 'DB_NAME', 'lesleyrealestate' );

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
define( 'AUTH_KEY',         '%<CspwTKZ=aCXg(xmL0QT}1MH=rjH4mER}z*K=W1MFGWPk(GL7atr,7tIdc7Mj6k' );
define( 'SECURE_AUTH_KEY',  'W!cJEr&Ms`I=|`GoaSay&#^nDu~b=~Ncadb-hX;GAXn/UwM`djv/%25/n`FIuK#o' );
define( 'LOGGED_IN_KEY',    'P]>lmj8DlxBG)x<PPX}NVpxLZk5C@FM:mfq?yt3jn.K*D16:$;D .)+foTs?*]^2' );
define( 'NONCE_KEY',        '5KUu@h4>p][*<E=Bfb_9%<ljy+}i/3xER@(|_EE},[u92Y}H>n{b!oN`( d_Y4j@' );
define( 'AUTH_SALT',        '8.f%Ol.92R;A5Fy1^I[pTH(kBgiPgy=Ug`;y5i47dMPq<pZoJ8T7$M|4B+~}Zco3' );
define( 'SECURE_AUTH_SALT', 'b7%F}PX)N8mvNjh#9PWa,d0b1Fcv8%ic?IG}gU,%<@gyMiTXW2R[){@S)%3i0;w5' );
define( 'LOGGED_IN_SALT',   '8B;JTNw7LfD$-L44<hbd%Pk.Wg?%W7nLN`cgn~yK#F,00Bc4d!U|H4om*T6B&DoI' );
define( 'NONCE_SALT',       '}O5Bi=hhReN;ONN64O:Z(0/N4;j;G^Qj Nq`6_EeJO(Nlh^U+}MLz>LT0*Qr3/[L' );

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

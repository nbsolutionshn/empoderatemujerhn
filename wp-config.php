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
define( 'DB_NAME', 'githubwp_db' );

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
define( 'AUTH_KEY',         'yK$c.3wUKS.7!]b ={:A9T(9}cT:p tp#5d&kw,9^N*,3ENeKf*q%}_hN^>TRHXP' );
define( 'SECURE_AUTH_KEY',  'Yz{T`5l#Dpw@+ TD1u-m2wV/&GTcy(Km5bw**RR=Yhp:5|`K<MJ}#z:7:),K7+up' );
define( 'LOGGED_IN_KEY',    '=& !L[sK(ytX!,LHYi40TO%E,1v>x7S(nOj9pVM@HviXt5igT*=duG_eQCjCdu=U' );
define( 'NONCE_KEY',        '8RHF05#5cu}pVAQ6X=8hbr^W^AojvO-/ZWB28^;]tESs3|iEf7):>[Z#QvI9Z8|j' );
define( 'AUTH_SALT',        'AV|+#~jje(]aG8`t+qVZe*TB4[-!#&hAzH b=<wJ[8Wv3>E7qVpZ+Ul[1.NM>@xE' );
define( 'SECURE_AUTH_SALT', '.TrcaaTV/=[|#G786Rab=FS6CeFACRXVAKt#hu>pl %{-3b$6r*$vC/dr<=g+HIt' );
define( 'LOGGED_IN_SALT',   'o/4cE5D p}q$aHJ}PYc?Ni5>MRF>]1A@/c[mx!F)Z{gf)*rxW,%fn[VJc{>[8rvW' );
define( 'NONCE_SALT',       'v1$sKD,M|W$v;UR%6zX;[2gDZ-G=~;u6(Odz,|B-Y)%$]i@vP#>E7E:@6X:L-K}m' );

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

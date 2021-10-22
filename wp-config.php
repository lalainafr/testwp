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
define( 'DB_NAME', 'testwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/;iR|Df<Wdx}JIOHv{mnO<yM!XajxvFdX|OIIHL0*-&f~O]u`EdVcE!M@mp+ dfk' );
define( 'SECURE_AUTH_KEY',  '2?{r|u^&Qz44ih~ dArAwiX` F2mYjbG:mCm[}C`oBpIbN0YCCg-A`Q+:Y~,hB3(' );
define( 'LOGGED_IN_KEY',    'Zav|RTVQ2)T03 &M>l@bArsH~mHRLi=>d0%sNT~np$EM&oHFIHm6F<r1{v.nj;J:' );
define( 'NONCE_KEY',        'euhI(`RGJ#`cO>o)oJe-1A-Hf3`GSU2;V617!{DB)cu0EKx<g+yv%$h%ID_S@vj ' );
define( 'AUTH_SALT',        '0{~q2ct{rf1lT[ZaVB$ray.kt`Z{.{}k^jq=e-8w-mWPUnG%-#l?,yt&E#C~.7^#' );
define( 'SECURE_AUTH_SALT', '7{O{3JXM.VIJs1ib`(_2qV{1VQ0h2v;b9{Y^&1:m8rv<l2l `bSLm|ZI03;c{1U[' );
define( 'LOGGED_IN_SALT',   '-+ovA}|e;K,YTP=d4/2EM[#0b$U? kSs0N]gVfjtPPZ1,G4FeUQi.b!qdX+)Z[sT' );
define( 'NONCE_SALT',       'v`0[ PCK=/PEju$wp4CNGqr{z>=bYFFCe!/cR!B~W;h<_!Vkdjn/GbuF%kXQzFr0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'test_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

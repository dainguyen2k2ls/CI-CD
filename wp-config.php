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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'datanew' );

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
define( 'AUTH_KEY',         '#ia,m<!Kh3b;xiuSj2A+PRO7t{mlkH;n-bXGkJet3/4$t>DiO!w-{InIX|JlCA=`' );
define( 'SECURE_AUTH_KEY',  'F?wOLOr$a|k1fa0~<dB0):hTy/44i!ct_]7rC1s{}o$z*nYbEI,;5(dmKkM%*7 :' );
define( 'LOGGED_IN_KEY',    'Bo~?-izcyq/(Nqj1xEgGZ#)h3I_VLy7*BAo;/L3{qX.Nd[(jJtxCBNOQQI(Cs&&N' );
define( 'NONCE_KEY',        'qY{?&a;NnW`scdo7.bS5Jg@ZxAHmUxL1Hg9iiRZgOa{O?Io].Y6/[4AoV.[Q#buo' );
define( 'AUTH_SALT',        'X}rNh?OzIP2b|St+}:es9R K):pJ2d)b3G.Kn2ii=k<iO&0l7;~NdY-zz-QrDBbS' );
define( 'SECURE_AUTH_SALT', '|S*N/c$QrF%qUWKlleGYuVCgKYWkv`B^L3Hq{)wQcf`V0y,=GHmi`<oD8>dP(+Ef' );
define( 'LOGGED_IN_SALT',   'BN[wKDD-gc+t27^B 95b.eIn.5x4L0RJ][^6wJ9_9e`v!.YUF&VH7P40S^Mx087z' );
define( 'NONCE_SALT',       '{7pGHy#tn|AWjj$*&K?5}j=GO3/b^^cH|cZWlSq;6P~wH)V9;zN/W8+9mg3L#e4 ' );

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

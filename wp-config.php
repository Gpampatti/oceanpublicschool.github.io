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
define( 'DB_NAME', 'sms' );

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
define( 'AUTH_KEY',         'MBOM`nQ*@qCN1/34yid{Y$V!by%*V=hU>IvwnExV0]L[49Ae%*W=5{6^Shp?g}c;' );
define( 'SECURE_AUTH_KEY',  'EDb` &NY5|=06IB|jV},[ Q[Nb,+CRL01sm&G!FtZTqUk?k<T*04bY{?#VDv{cVx' );
define( 'LOGGED_IN_KEY',    '#+UB6Bv+GVL=|[MaJ/JKF7lT>q#?+5}/o^CMn5MovI66V^-#B% CVL,4|9=t5yQ1' );
define( 'NONCE_KEY',        'KTvyUgZ7<ZJz-9W:%1[}A.]phi/%efo&A$:);EM5udV2M(0/w:v;Lb_Du~pGc^H6' );
define( 'AUTH_SALT',        '^PK719HW8v#641#}yh&@*{+0z_/.4&i 2Od<}x0BJpkfyer boTiPdu9:7Py^xS&' );
define( 'SECURE_AUTH_SALT', 'i*,:i]Jw#+!2T(h#1))mKXYUZ$x+!|Ze`f`sWZ~}j<N9%[&PYw+=vxM8*X`rhEbL' );
define( 'LOGGED_IN_SALT',   'y{V_tUVAlpa wFmWC[:x:Z^6G!kH!xm9qk&Un$!6Wlv~dY#:xE37*^zzH8^q]mKq' );
define( 'NONCE_SALT',       '0UTeN{%fqylUOup5{jF=&nT=-~VS4|d-i6e,Q7tk+uA7Nc {xU{*Ftwi>0-S@jF+' );

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

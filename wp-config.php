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
define( 'DB_NAME', 'nvamortgage.com' );

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
define( 'AUTH_KEY',         '7#(YYheQsKE-LPaTKV>69$dFa0oC,H?,qGh+uI#wLov/S`_`KdE/}/_XXc%Dxk|H' );
define( 'SECURE_AUTH_KEY',  '*YAzP24r@h?<2=JK`d |2EmW}L^Fym=Yw}2ND6A,u2`_=IzTJ_ZK#vFn7iX6W![U' );
define( 'LOGGED_IN_KEY',    '1z8Dt*+?Bwtt5la 8m?jMvrT&-7.S9*N7{1@>Gkb(xT.|V,Rr62P;R*,l-c%:O-A' );
define( 'NONCE_KEY',        '%l)v=Q-c03g7{q2<k]HPVZ=8ePxSE7tl1xdbBo7(>Rf.JM%~Unx_-/3M(bsnc_)B' );
define( 'AUTH_SALT',        '#$v29/GRaj~l3C%aeymD57orm+inQT5VoYRgT^YFO}h5r0=:6-^Lu0PWnP0Ky~+k' );
define( 'SECURE_AUTH_SALT', 'Ogg#nr4=RGLXi87zOHhFZ=1gVrzK:1PiQ7-=FKLg2bF.n#-r8.NHHL`PqRYn#;Db' );
define( 'LOGGED_IN_SALT',   'blW~m|^hgS_>m6u6e3q~^K`2-p7_A-0ExoCY>-?.M2@`+iqUtj(p.|@=_:uQ`9wh' );
define( 'NONCE_SALT',       'l<URtN5ML,?=zZhQirBJ,y:-X#dcZFLF1N&uk?:5EF-! 5QxK)g ``.>:9&[Gf}f' );

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

@ini_set( 'upload_max_filesize' , '512M' );
@ini_set( 'post_max_size', '512M');
@ini_set( 'memory_limit', '512M' );
@ini_set( 'max_execution_time', 0 );

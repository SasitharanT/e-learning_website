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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         ':WPB(C-&(]2Q;yVh~u~KkWNY}QZW+vi/=O9$C|+Gx.O)j[,Td.+w:zHX<F<7hF6J' );
define( 'SECURE_AUTH_KEY',  '+uds&ZC7. &,p`2om2Io,tCG!5}+cS)D&]i?+iri&6|X2>OkP~{toMFj6SM3j$pw' );
define( 'LOGGED_IN_KEY',    'v+PM.t-.J668a<BlUM+rrq;j$2q~n_]5m72`U2rcQahJE-pjdQI.1vhhNjOp:-)$' );
define( 'NONCE_KEY',        'Rdo)+]iO|d&UO2ywb[v7(1rQy[mu15lREK,.1HuL@KQ(/C^g}g~VAmxKk)g@^iie' );
define( 'AUTH_SALT',        'sQBbP8-%t/!|$rZ]T{)MQ}oEGT]^PcACL1ltGteC3BzwH~=?0=j{D{JX *7BnZ:6' );
define( 'SECURE_AUTH_SALT', 'FgHK:>&{N]? Y}.}>DPO<VGjD`@+]03cEkS8LG=>8f)GrDgSa}VN~Wa+L^ZD#@*!' );
define( 'LOGGED_IN_SALT',   '/4;~R],+,$SWY;(:4Jr<[K4{/>HO|dHEq$uoi8+iOogV]umF5(9YqFNOD;d|Fl_h' );
define( 'NONCE_SALT',       'nNS&9^bru[;GOurk3 N=cq2,-pkq,2czHSNO3W9P{X?$5s%Y3q0@?3NBv? 9}Ve=' );

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

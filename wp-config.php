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
define( 'DB_NAME', 'nrcabides' );

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
define( 'AUTH_KEY',         '<`]mYOfw{K^M3?WHvuTs#W76Ekf@Zn:trYS,,s1w@+_9zjJPRS[B Tc)G{$e=8_~' );
define( 'SECURE_AUTH_KEY',  'y,`EbID$x2=;C*~+z[}uw-;J%WXZmmZe,OvCcxDoBP=qo*2E4J`,8B|]{3Pw-_,m' );
define( 'LOGGED_IN_KEY',    'Ni@#Te!Ex39ymJsX-ER%C1-1y8=E4h6==xYR{P:m%W-+6Pm=zqJoGdVm2d@A6*WS' );
define( 'NONCE_KEY',        'GXe<5iZpceF:Mbsz5ud^5;+yXP+[C9t,(%J0.y}dW:*K8P?.Iq`+*.fM2&2o|t1<' );
define( 'AUTH_SALT',        'j*1.bQO&]lH_&$Swj^SG5Rhuc43u[,O3F|g-K+22%?|D8AO<)}g:D3bb;9)2!Twq' );
define( 'SECURE_AUTH_SALT', 'vc 5lD$C^?+?H@O^_#>{8Ooty=F)e8y`YZ*oDK[MhwiHXXB:4=aW}#J(1SB1v+_?' );
define( 'LOGGED_IN_SALT',   '>l&`m=)r0$+S1myd$q=#d3>n0{H#T;JH3nxEF`NT!YoDMH%fyy-C![(%LUHM<9V7' );
define( 'NONCE_SALT',       'hUpxek1iLYP%xk3cs~|0 otO6$ZHCt1U.f6] F%!B/RhU=B.?`&Ea24K.0e+cSzh' );

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

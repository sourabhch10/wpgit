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
define( 'DB_NAME', 'wpgit' );

/** MySQL database username */
define( 'DB_USER', 'joy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'joy@123' );

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
define( 'AUTH_KEY',         '@l<n?:#tP#>GoBoF6Pqp1am>`]?WW$%$qTaoOd/JR9<n>e?wlC`=G_Ti@yYLQpXR' );
define( 'SECURE_AUTH_KEY',  '%Ml!7;R =V&@7=b>&:pE?gL3at-vr+:-/[w}D<R}2gI;(m}DJyiyeHbAix&m[@A%' );
define( 'LOGGED_IN_KEY',    '1MY4R87v}3({5p|*_(G(TNmebd<RfD.w1T+<wYX8^sh!NDM0H5Py0M$}kP_ 3wn|' );
define( 'NONCE_KEY',        'C_mEmT,l5<Xw9K`f]vjAV~p]<Z1<q~CWC-|_&DE&DB`@2VZ^=p.3M>7.%1D:,#$B' );
define( 'AUTH_SALT',        'BTr81SYYl~hhuj-7BOY`M]1pzXFoWZmctO~D0z$W6%U*v#1AqQ_4{6^KNd30!_:2' );
define( 'SECURE_AUTH_SALT', 'T2*G+_Wsxb`fcxDJ{s%3<<rFf&JoQ-sJ9w7J1h1).DZ`7:)aA,CLa8NxI*[15lMh' );
define( 'LOGGED_IN_SALT',   '#ZNj%SzRXu6g/:?txeZbEq]p m7O/0!4mr}8TiI5} !Yko@M,)T&ADZ>QMXNXUn9' );
define( 'NONCE_SALT',       '_G!.yRVM`&Hc_p=ha>?[q>vkXg2bP!JTI;:qK)Jc?AJvnv MxPW_4T-Sb2r6Q@r9' );

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

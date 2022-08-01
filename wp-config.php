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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'c2,3.ox3HE$cv5~^Oy0e,,Fyy5 @SQ29v(gV*K]# !^s3r$bzj8Ak[G^TWJqL@]7' );
define( 'SECURE_AUTH_KEY',  'AIn|a>#;:.p,i)S&kQEhO^BdL2^ufIMv4?z#>-$2TBAO=0f+$p.1RI~_^v~:Bo;=' );
define( 'LOGGED_IN_KEY',    '_e}i;+^&2COzo#JPAh9,/OR# NbCUm _y;Py}B{5)tE)<oa_|O8#a6>p,8=o.eNM' );
define( 'NONCE_KEY',        'Ehb2%vG3n8trdW]=A<+j9js+1A-W{.a$}Kr<CzXB#Y`v#hC#K]*F+g|1q+#M1D5R' );
define( 'AUTH_SALT',        '1VI6[tHFh7qhk.q%|7VW@Ycl]B}JBI-[fvCg!:!4.&_$pI(s2cpH#di[/SX/G:-_' );
define( 'SECURE_AUTH_SALT', '4l%B*&zf^FYrqXC+yRLn~VdNOp%r8?aHMOoz*L4gebS5=KrYW;Q1pf$OymFSw5zq' );
define( 'LOGGED_IN_SALT',   'I<+L<RrcV65^l{D<Sb~Ymy^:gwi`;u(X}}IHpCNKxqhpdan,,U3G5`x|rZ4<NY*~' );
define( 'NONCE_SALT',       'Yr$s53y|[^*`:.@m/43+^)3x%8!@To%9ZoS6?M~c1r>z]T`]d*DwDb,EenMv?)P4' );

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

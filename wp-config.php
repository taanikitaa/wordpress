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
define( 'DB_NAME', 'dbsmpn5' );

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
define( 'AUTH_KEY',         '^Z$4j3om|Y4{H`pcBvdc$n_*^xt%+EP:p<Q[@);PBd]OLV]Qa{>PTB~[87sZqK#<' );
define( 'SECURE_AUTH_KEY',  'sGq9>PGZF$xmjgG9Jr)E?/T@@4 FNWU5HZH2E,[npf:C`{r{OS%%Xq6|T<f|N}XJ' );
define( 'LOGGED_IN_KEY',    'C`<9RXNs%=eA2ei}$)d-IZ}ZCJ.sgv-CB=8(L31`B$bfftU`:aH;h5w?C,3ft9D*' );
define( 'NONCE_KEY',        '=]l*P;(o#wxLX$o D+-eA1QhN7;]-=AR(eBObGzfqAoqI#uk(6$e|kdw!^_3h-iN' );
define( 'AUTH_SALT',        ' }M`>Ao;a]xb>:iU+0q,m1ItUsulZF]5B{x;tRB|q%$QPtr1{IqqB$OV37j(6NlK' );
define( 'SECURE_AUTH_SALT', '*@M?@+jhaBe)HLD}%}/>O[3|R+t)zUrI.cG:uzC|JgMYy}5@RhnNZnO7NS2u,<i9' );
define( 'LOGGED_IN_SALT',   'g*B`,UJ@mmGnO].cJlRO3EP~C#iz3$e2*}yX]Sk}9-[V@iCKFh 8bh0dnzuD.Fo=' );
define( 'NONCE_SALT',       'vgJv[seRUY>(`IQ,Zcm?&589I{bY=*M{bvkIr{ze6#|On0fEK8[,dw%uk&1EW<ys' );

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

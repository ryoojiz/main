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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '/2mhwsYRR^[fg&7RN1XdZ:M~6<j|3J,BE~e[H:2!HqbED,npaUV:z3!U,:J:QPR5' );
define( 'SECURE_AUTH_KEY',  '9t_f3]uWCp/NS5@nQin{4e;%=*~ B_-ySt&rb62Zr3DU:msQCNGfM)U=gJo94)ZK' );
define( 'LOGGED_IN_KEY',    '}@KJuY,6P4:.X<yNiSP>lHjOM9croC/.sl U^[G{+-[cdp~*Ml1:K68Yy1=V&xRq' );
define( 'NONCE_KEY',        'l,u2T#{RI ~L=ggY;8#o)XxT3$r6_^VV]XQ]yJb[dG|BDEj}-z/iF2G; (hx*(E[' );
define( 'AUTH_SALT',        'zTGEBp3Gs!dxN^UVjc$?L`*3$Q_DODpnzW.`:~;oa%LP-v/e=&+{XY_@[%jK<@z*' );
define( 'SECURE_AUTH_SALT', '?|=Ss(sI|_9o+VsiA1nGosHaxn|JctB-sT,)*l[fN1ckHut^hhe|#No$C+kg..^0' );
define( 'LOGGED_IN_SALT',   '8Stq~OmFeSbz@=83TlWnZ3gfl:]>u/zB7H$ayym?/Oon7aTp[]=TQC,.ue,q_{m%' );
define( 'NONCE_SALT',       'y58[.7jyvOd<Ljvmrd!?:|]49,8FA-L5ZdE(BIyA+#8ep}26U> <*-b2P&>(7Ye2' );

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

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
define( 'DB_NAME', 'dallim store' );

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
define( 'AUTH_KEY',         '--TTf0b5YWKQx-H00(#4_Kjn$fsyT^Qu]nu7G?53jbk:5Ke@&ZH`$k*U{yhz6jV]' );
define( 'SECURE_AUTH_KEY',  '[ZVA;0(J9tQ;,h*e+Z0}`Ve1Pzoa{~/s^yz88]Tuh)&!19``-0#VA:sxd2jH>rHk' );
define( 'LOGGED_IN_KEY',    'tYTn)`kXqQgQ<t$LB>Np}ddUN:3}w}h~5S!?ZI%*o8-U&GasdpC1bh;lqJC.T#ik' );
define( 'NONCE_KEY',        '+k2n/Rn}zaUT8rFuXj+AL~}}]`x)~KAG>v0H[eDpz5}=*YW a-v2`;rrwCa@nnRA' );
define( 'AUTH_SALT',        'S/AG68kbSWiQpG[CwSn*)Tsu;hF7$}B,)z}DJ.X]d_Oi?>uZnO<q2dOl.!EqHsdS' );
define( 'SECURE_AUTH_SALT', 'i=/vL05:R~^0x3]408+?[rSZ93!7do;x27bf>5)Xk>uT%(R_Hm`Z^m@.buq0(#C(' );
define( 'LOGGED_IN_SALT',   '<6UA@30<=q-b@52IvHpHfHVqyjBpT=fA~oA>rASYfj<$L[2-x(mPb_.lstaOY$ P' );
define( 'NONCE_SALT',       '}[%EBW9~U6JRf2q?L(E=dV2Qc}*phns9aJ&<;t>~EhNWgO>oX[4i*a[a~dciu: G' );

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

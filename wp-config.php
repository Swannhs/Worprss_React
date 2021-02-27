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
define( 'DB_NAME', 'wordpress_react' );

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
define( 'AUTH_KEY',         'buhq3]&oj*Z50]Sj}:G+2Zc2!Yp?z]i5[NiQfD-iMt,bO`.t6u=F6tqstk*9:Ur8' );
define( 'SECURE_AUTH_KEY',  'Jd[NN:~qG%I~H_x+uBIxzYl%E=2o)C#%NBI$SL[YLS.]`C8Q[:+UEu25t1+XX[V.' );
define( 'LOGGED_IN_KEY',    'bjVk0@_BCfY{7JFY1Ws,ezzGo`x{}W.rrUVsl()jg(57u7{Ko)uJ%| C8S6{k8[Y' );
define( 'NONCE_KEY',        '*]t]A]@HdNDcO{pt{92)y.`ac<@FtJC%y6v9RrFtDZ*dpaR?2T_kj@?H8Gl!6H]/' );
define( 'AUTH_SALT',        'b?MivW@[l|al%`C184?yz3$[m*H=M/f&C4fV0~v*m/j`2:7@a<z7L>9QW]COH2EJ' );
define( 'SECURE_AUTH_SALT', '/mP]LT[P534-Jr1fWX6muk+;v:AOi;.+soCTcr|jiO?W|vv8X;Xc#^yShtiV+9M6' );
define( 'LOGGED_IN_SALT',   'TJN])-K5w76xknX>HA@]%I@OXmW1nku.3s p*|_L&!c?7t#OX}<?*D`K4~e|/UHy' );
define( 'NONCE_SALT',       'U(RUdrW?12l^8uS5J2|awb$n/_ETx!n&teC90j{<LNn-&945+6j7[nh_8INxb{{?' );

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

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
define( 'DB_NAME', 'kiemtoanazvietnam' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fuck1912' );

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
define( 'AUTH_KEY',         '=,?O.0M|{ @$pJhNZudfEyA1Hu;+9Q*+D/M1P-a/?/LYhL:E<aaO#r!p]p*!3=gm' );
define( 'SECURE_AUTH_KEY',  'sT-{}*YxRXaflX0$45qz8`,(<EpR1mxH?g O(K1F$ES!U2,:%+|#MXA(sH[A4@Jh' );
define( 'LOGGED_IN_KEY',    '9s+J<~!lz!J}{B&3pbo<x3PXEyfiwUM iEl4H= s6Q01:i2ZWK0ys|1n`X}KPRyE' );
define( 'NONCE_KEY',        'B[KHZHu<a66*qq(HK3|NE[*{Yp<|^O6qw`7)Uff$GG/`uU:g7]_TfTiNcxeJK%PA' );
define( 'AUTH_SALT',        'd[>r}X=u!*r52&#!6FzXV_Ri>gTosP0c@gyAweN(|1GM0*AKyFqG/9!<3tf5dc>x' );
define( 'SECURE_AUTH_SALT', 'j2J9_@$HQT~[TNssZfDhg-e7r-l#{myO/RgKv4ZIWqAot*5bF<n`FKjsLX/=9eK?' );
define( 'LOGGED_IN_SALT',   '4KwuzeTRgfhw-gbZQ29is;.!0O/jIBQohpoZGo:/9N.h N.|WY4.}lm6C@Euf:C#' );
define( 'NONCE_SALT',       'xVc[.[jtb*i5U$Z%w7_.=@-P&7<V%e$5W_wiUbE0XFEm6T7u18L5ot4L4ZM>`3Q:' );

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

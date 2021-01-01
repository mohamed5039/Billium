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
define( 'DB_NAME', 'billium_db' );

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
define( 'AUTH_KEY',         'f-5yM 6f1<!lPTeF%Zq-!tf!)Q>?Ww#H][U*lwQ}N_c=V^2%`Qx*W`-)2zNjolSb' );
define( 'SECURE_AUTH_KEY',  '$WIz[a]GHgNOVBm9bjzGAUcTB`$Xpn`?X6T7?HEJ>h{y-TnZ:TU)swok0w[Y{yDC' );
define( 'LOGGED_IN_KEY',    'yKD^g?hL9Y!vGcGkD=~x1S &#(JgwLE$OgB~mpF$Z|}_)x.;:6![AtqF(F{~28}p' );
define( 'NONCE_KEY',        '*H7@# (E:#7F5yLm0IEC5IL(M:.}YORoy-~umI<{FR j(-3rInWK*>tR*QBKI;AC' );
define( 'AUTH_SALT',        '6AK*6~llN{pMh?(^h+P3z!EB)a-ti3^Z/y|4L|#4E,X/NryCenEY7wXIEeMNl#IR' );
define( 'SECURE_AUTH_SALT', ')Gk[i-A[2N=d-Xb(|~(X1wVKT~o]iJr>iW^I{uLtLA70og+t?d=ejep[Hk6k|DPq' );
define( 'LOGGED_IN_SALT',   'PY{L:{:O3K}n?iB<  s9!gv,`<rn1/%7yk$dK-#*MPMExLo`aYm|<J<};<$blOV)' );
define( 'NONCE_SALT',       'K<!n6bPTC]P3jIXd8I!s+0y%[zk3vzH>B`IK>T[s>@^3+[jhQ&,U5.mdjnYt[i@|' );

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

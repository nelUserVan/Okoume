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
define( 'DB_NAME', 'chretiens' );

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
define( 'AUTH_KEY',         'V?s7UWR)5j`<OQcqm4`XbHG|CGS(J/7&OL$VQH&&0g_c&z@~R3ABh<%_$ `u@)Ci' );
define( 'SECURE_AUTH_KEY',  'A@u-GLP,,((qUVjkwVy`f79@naK!hc_Fk4J!7>:Stjq|<}=czgU0[bX<:UB/q6u,' );
define( 'LOGGED_IN_KEY',    '=&Ev*X(`.l)mH4@Q(re$6*&-nA.J3*xJc(JuU;V^R%#*h1</r!0]UiJ1uc`)2Zi=' );
define( 'NONCE_KEY',        'A;g<*o^It8^RJ9Ae(|]n1*FJk>37>XI9+Fsaz8}?Nl0z?*]oS2u0M%T]b?/B]+wi' );
define( 'AUTH_SALT',        '?)u@A&0DLF, I(842LK^(gOM/U:Rg|WTEwXD0Gg}aSTQItabiy%@]gt2Wq.^u*Rm' );
define( 'SECURE_AUTH_SALT', '>:Gk(ySGzEBcu%G5+XWg.b]Wpm,a{D5mKV$?_HsOa,nf+KpKUy::-<qvloLI:jNr' );
define( 'LOGGED_IN_SALT',   ':0K%/IXS3FP2BvjDB~6Th)<U=g0Nehsf0||BVP:YAS.Rp4;KhAWiJK(R0@@LXVF>' );
define( 'NONCE_SALT',       '620;s`Apo<_9fp|nD<M/Jpbq*Z[Em%%/pz5_!]@L{^Q qD}Crr9kSesTj[W^`7(9' );

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

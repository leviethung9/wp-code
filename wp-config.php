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
define( 'DB_NAME', 'thammy' );

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
define( 'AUTH_KEY',         'C^,G1-:2Y$c^*3*ynE/>3AD_#2XL}`b<iUP%n ;=TP/JNFek}L+-:W45[S0}>lvl' );
define( 'SECURE_AUTH_KEY',  'bmsb0z&>Xd/8OcqEMnK|449Icr*2GawxE1yf-e.4%tlHk3n}v[%*zFB-u&8e@n2k' );
define( 'LOGGED_IN_KEY',    '<((V7OTQRPE[Q`<9vn4Qkv0u0?+t*@$j2y51QZ<7&yM:8x)Y*rbeNU3Z=Q*gv`ph' );
define( 'NONCE_KEY',        ']I+ewmEm*_CV=pm-8a1::GUy0~+7V?hLG0ofKEW,HJ! =v xHf}2~%Y=H1Pn.14X' );
define( 'AUTH_SALT',        'C),l<o]3&FU^aj&+FvXz4<&+7jOV:wF~O tL_X8/@SQse}v$!F5{l]M{ZuO/Nee@' );
define( 'SECURE_AUTH_SALT', '-~G@gF_rmAP{NhS=ab0SI}p1V..23if/_2nj7kRbLOMa9s4DleR![~u`bYO-X*9F' );
define( 'LOGGED_IN_SALT',   '5i+SLj<2qvx?]EDP?o_Ojfr~{q^-u4l&KiBu7%6eoC3$+]L|2iZJM*pGN#03=)2,' );
define( 'NONCE_SALT',       'PpdQ[pc}z2E13i?@ }P&;``qzo)ZGzG6`Dx9m tK+BZLRJZ90.YY^wR- -`37(OM' );

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

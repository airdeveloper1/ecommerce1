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
define( 'DB_NAME', 'air_ecommerce1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'u_HOXOJO ; rEAu%ZbZC.^c!u^A4[UpD XZBgO:qA-_$6h?tDg>aJ0$k6);@)qGy' );
define( 'SECURE_AUTH_KEY',  '5O%o%KFu2*xR.JTHhBBacqG+2n}#kcZA088`YcNDiIkB%gaztQ.Mmqh:(~vGckzr' );
define( 'LOGGED_IN_KEY',    '{!lr2D#:qfUy&V-y5gR k.X}_Qxu^%wsdz1tg%.cVD{?!!):KC}1itGY}F-`2|Yc' );
define( 'NONCE_KEY',        'R>,MNR#}~L~s#:`CQm$ZXvV#N]&>lykzjP+uC=0ClBc3LL]yw21)vRLg>RTvR9s$' );
define( 'AUTH_SALT',        'b4&>g?jzPw4g//mydF/5h/uI+sSFOrpMw$^/0_&6.jWakp0V=aX%vR;TXY!7Q??j' );
define( 'SECURE_AUTH_SALT', '?ft`R4Y#sF5`I&x~Aq]G>Io$>aQ5IVeuh6rx=#`.HeGNWy$` lHG.>)+4&0]q=Ql' );
define( 'LOGGED_IN_SALT',   'P-nsSOLfJ)w)cHs,Gvo:n~8_`<apG,|Hbb/qhE%%}%jS=F(K0i2Ge&=cL(-~Yu|&' );
define( 'NONCE_SALT',       'zW-Lfj~:-JteiBr9CO6/hv[x}UX`jc[V8]5HGid[?BlCjrj80<=B7Et>5X|(n^_Y' );

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

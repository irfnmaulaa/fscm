<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fscm' );

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
define( 'AUTH_KEY',         'UO5U|J;#OJ7{D0s[8)dtrfq3>Qx!o?@{b!7!2an{^pZ<$KKR1Ayop7%3?uyj|iN}' );
define( 'SECURE_AUTH_KEY',  'l$y[G/SQC-ow1/;cO+A-R*RbQ<3uszV `iShM!6=c)G{c8}Z~?7>T^6,&H)iaWgF' );
define( 'LOGGED_IN_KEY',    'KPkeY,(Asf+cxEk)&+kTvliy?cw;!nI^B;.A{1nxJnobX~2%(<&rLr<{DaF&!@]O' );
define( 'NONCE_KEY',        ' H3M=Q~09<?Xgg* tC>]3huT!5+jc6DxL+:VKRdPn*P+Saq~JB>3{Fs@*x[7CH_8' );
define( 'AUTH_SALT',        'O!6(`8N6:]+xBgU{Ght>l!FsXv@3oH7yWQOd6[{)4LE]U!^lRc(+#7g;]k}lZm!W' );
define( 'SECURE_AUTH_SALT', 'i@#491|;r-H-n68wG:br0Tbd0dz|xh?,&$FPFijZxA:Z:gjjIvI2Qf-b?KVa#@q!' );
define( 'LOGGED_IN_SALT',   '*tpy/R>}`:G+/auiBxO{[^YG^lR:1w*c/|o6fr[s[q/Kp]4M-wRNnlBQ0>13T:fb' );
define( 'NONCE_SALT',       'L:0bfsnvmps`y:m4-{vms2Hp(h}u643^M;Rb-A}_ielEM%U&-mv5_YrO[_UO_U]U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

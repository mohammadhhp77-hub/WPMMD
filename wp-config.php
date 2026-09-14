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
define( 'DB_NAME', 'me' );

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
define( 'AUTH_KEY',         '6M;5ERp}Jx`zfd#*?Y8x}9Tv*x0`*TQn2Rlh$.A &6`Tqb__J8kfxw9K/x[7TeTN' );
define( 'SECURE_AUTH_KEY',  'wNX;Z^M%[Uu6YYJYD[.Scn3ig{UC:pnlAsE4tstRI!f_n%ulEC|sZYw`airxAj5k' );
define( 'LOGGED_IN_KEY',    '4[:rUeOc9F~>F_1Fi8E@18f#hG&EG5()qmOH`1Ot5Bcxr9XOQv5H,1[q##NBSwQl' );
define( 'NONCE_KEY',        'yoP?=2.X@@Vy*XsYq^Y5QXmiQgl9VtUj@0U:P[ko3O_@x>!4}[VO$^|m{#>^*eS_' );
define( 'AUTH_SALT',        '#w%}~-mMgFvK*DgN+#MVJi9D[6;YK/Cg`&y~BpLaPnRlXk`_%9*8uBX}5nRHu M3' );
define( 'SECURE_AUTH_SALT', '7Fkxzosk|;,2n&;1ZTBb6}-JKz]|AF!s<<d0$g,:}=Tw#cKou!-C]{e3MT}~+32s' );
define( 'LOGGED_IN_SALT',   '/.N`^H@;q&V}D{9go%t7m~<31z>u:tBgpSx 8w$em$TEMMd>m^.Hbo[rkF=nPw@5' );
define( 'NONCE_SALT',       ')e5y=]s/xnO|-Vlm@Pg8J)+~L9xljF$wz<DIs2 x.eW[vYnG&9f HwE-NUn@3ybF' );

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

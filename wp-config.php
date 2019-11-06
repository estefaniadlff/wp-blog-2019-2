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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog/2019/2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '12282ee16ea1d0720dbd8160a306cbadbcf751ca356301ba' );

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
define( 'AUTH_KEY',         'WLY|1ui%dfXQ/T%ooRu*v+2/,oQ)#-{PTvVkQ`fbke):;qsh$Yt2CD)]2F:~7btX' );
define( 'SECURE_AUTH_KEY',  'J5n0AQc+qOH2ZSyD[n&KU@P7q2>dZK-+uMR2DiSes}jq$U8cE+OaN^j^{H-7pNap' );
define( 'LOGGED_IN_KEY',    'Jhne3U2es:;}?EXBDhj[18yTWj4y=KYKfWJ)Z^RA*f7 <GBI$4j-U;[Eu+PJy:ao' );
define( 'NONCE_KEY',        '=KLXpvMr4yljz(Vx>n6!PUd_VxMw&I<M;/]45b0n7(PkJrbz=]-Xmu;e:g_ec/[k' );
define( 'AUTH_SALT',        ':<]f_n`f[71%trzn_p51U@xRk7;G3bI,Df:wy^KnRSYLfybs-bIKf4!K}TE[zK8{' );
define( 'SECURE_AUTH_SALT', 'Re,z_h{!M?gwOGsgh7DfuvfLZEEq$T.&+kt?j}w6PL7sr{N6:R7eh8Pop2Mg2V%T' );
define( 'LOGGED_IN_SALT',   '/N{SWk&YDQs+c/?0|@|WAQz{km=M&nVTN]e_i;^r0t=~l#L~>GIi|*Ge6b ,mw|3' );
define( 'NONCE_SALT',       'NCWE_V/{:Be+tne)g~_+NU%Mers:Z^FFnvmnGsv8BwM(:X)PzJs!?{yTp&m?w&jG' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

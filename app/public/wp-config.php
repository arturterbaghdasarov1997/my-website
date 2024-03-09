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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{Yw]r`Tzh]NjJl[l.hgS_!_n1|M4;YTFc>V_<)m|06;*J_|b?Hceo #z.bw(^GPb' );
define( 'SECURE_AUTH_KEY',   'D,<R<jmlxT`<KqYo~,hvO6TR@J%=(+82&*MBYcq#i;%WYJd|10DcBFm z> B1*}V' );
define( 'LOGGED_IN_KEY',     '/ Q|)w?zKX{`z!8%;cF:^Vd_2&tCVACRw eam=uqdK />TL=M[2hq1H[_3*4@v,P' );
define( 'NONCE_KEY',         'KeX_.rGC-(YGWPeyne#J0`NeA:~>t0W}I9-azv#Mj<^T$y^ONgV~^K=m[sC])v^*' );
define( 'AUTH_SALT',         'eAhM]I:&M>SNQxiD/+64T*F.ITRQp]0_%7mXHtb~;U`6mtUS?,GR5iEL8i~;?5]*' );
define( 'SECURE_AUTH_SALT',  'NHB<KV(v9cG>f!QB~I/uey(|`b*<N]1z_Im{x+eXRXXruAay>:n@pX=?<LZD!LF+' );
define( 'LOGGED_IN_SALT',    'ym</RVa2F9.=2|TBS2iREnW##|x(z$FQz|& .0 h:)/!K/|LK(B3ChxQ5q:vrRY`' );
define( 'NONCE_SALT',        'kPVV3S!,@N9;GCFps,k-^9ZKq+jAFFPhS<>xv{eS>$8lH%}<nW<_vMtxWZK8m47M' );
define( 'WP_CACHE_KEY_SALT', '?z:K0CGLN$8L-&}$,+Q@]wHudOe*>}(J~v,wtA;-$a2]B-|3s$;fQIr8pXEx$P7~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

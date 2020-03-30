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
define( 'DB_NAME', 'sito_marrucci' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'G!QN6@FEsH%}x9,`ha`u9qhmL(i5!V$^d.5O:v;zHfQTr;5Us<T.IDcdw2.B6.u}' );
define( 'SECURE_AUTH_KEY',  'iLb]Q4z*!U$4?ZPt=T;A{PUe6nOoY4q@6!Q`dK!gcwP@H_CC4/u*Hb1jl|l9Ls?B' );
define( 'LOGGED_IN_KEY',    'SX*W w6Kn v`Fz91E`pu:tU@~e3IHzi`2/$xq1||DwZK(!6kK*feJ#:6wR1Ho)rM' );
define( 'NONCE_KEY',        '--Wq]&=sAxm6-X*X*Q.Iw0PIVYJCv_6tx=uvV-qS7ms0=t^i`Lu>xqcCIYw%JS{6' );
define( 'AUTH_SALT',        'A#v5S%eK-Y2bUureRO,9X+oJdZWR-M_>ZDu{uKnzB,e`)-21.92v1Cw6gyUYhYf0' );
define( 'SECURE_AUTH_SALT', 'W&TwsI/o`g@A]52Kq.6{lax^TIF(@Xjfrv)BPeuq.e(IENlTMull^`BfRe*C@T+*' );
define( 'LOGGED_IN_SALT',   'S92|bbs44i?+<HpSyLU3RLcFsS,urKCv1eCKY[k?JU W6FyDf->*-PfM6xVDC*2.' );
define( 'NONCE_SALT',       '.t@KXei ,^JZU<Z7t:F0~R-C%C9v;?D2Y6COtsz2L4gH+EcX.t(C>TgbhqbcDvp3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'marr_';

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

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
define( 'DB_NAME', 'ptsmi' );

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
define( 'AUTH_KEY',         'S&h/VTg2&4 S3bSo<J:KT9Am[n1qL=q1N/@sbl;%/{E04jk|<f^O-pFJs~G=IaTf' );
define( 'SECURE_AUTH_KEY',  'vg{A)Xv%Gue^V`/K9Nb&k2_LE_n4ag)tD#dqQl}UM!7V+?[~N!~ X~br[m!1f0{8' );
define( 'LOGGED_IN_KEY',    ';=Yc1g=zVo#2t>w]lU/}BmJ9x;tjYJu#p+Nb[?fRDe6m4H2y-!/z6-j PKJM]bnY' );
define( 'NONCE_KEY',        '% p)S|5%nGuLM~HH9Qb08O_Vd?AR<IK3~jM0eK<szyu3|]0~OW&ItQ9Dwy@|B7rI' );
define( 'AUTH_SALT',        'a>!nFe<mqlE}^`][sH0VX]DJp/DKa}8k`sG&&jTQyF:>7~2L+Cma$H6B2)%=bQB^' );
define( 'SECURE_AUTH_SALT', 'U2)Xep$&zXZ+q)$tQ!upyGJ9FX#2g}w8te+{)rn1?(ys61AJ|>djMlfoxdmK<wef' );
define( 'LOGGED_IN_SALT',   'I$ =5DrZK,X.z,u=U(iFFy!>kf,Og{$OY]%1Dn*}2Q;pfW[d1m%[0OpU=}t{.H[-' );
define( 'NONCE_SALT',       'P%[Lp+k[il2?{1ZhQ9;|%i[ ]GlR!ar2xt*gnxNOwB6<yN94p+k7B-(To1thcN2u' );

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

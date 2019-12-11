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
define( 'DB_NAME', 'labyrinth' );

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
define( 'AUTH_KEY',         'Rc4N. Wb=rx1QRmDiQy.M3j9RKQ7u}rGt3*O%D5ThaH^W K9N:|d5sd{Cx7/u]_~' );
define( 'SECURE_AUTH_KEY',  '16i<]sgtXmaH`7o4{1 _Kc>I=;Q6yriV>UbT1U(<``XW_ncc;/4Q.|fyft=9vQZo' );
define( 'LOGGED_IN_KEY',    'tcgNa>a.D-|ejPZ[az$)BsEV(=KHb,Bf3@Y/YTU+^6YZKMA,+#lv%eF$D_U(a$}:' );
define( 'NONCE_KEY',        'Ng<IDt|FMW_ZB$XX+h%cZmDd>4q33cD2hSB3aLaI@3.t&K}!8illvGXxI.i&RHn2' );
define( 'AUTH_SALT',        'E]p:2~8nnH7xLXy@(!cdX@KS0z29T/Rbx]5F_q&r qw=2^P}_=E(aB4iL8@^@#!m' );
define( 'SECURE_AUTH_SALT', 'n1K?t_=/hEc^5kTVm#GR3iLkj$vW.ZayQjQL]~1znnif&o.s{)uABU<8b`6P*fN$' );
define( 'LOGGED_IN_SALT',   'ryNy{et}u+NnLgY`g4bQ@,8[)+jvL}em7/&1aY%je&%J]k,Ms57mhmjBxG?E5~y,' );
define( 'NONCE_SALT',       'p/ci3TLD$_4,6sdaPSQJdN6$xaVEi%s@gmr,Ymz&zU6tM1Kd>i jyPGE3ij(w_=}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lc_';

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

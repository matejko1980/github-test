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
define( 'DB_NAME', 'githubtest' );

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
define( 'AUTH_KEY',         'k>qnPy|>&Vq9[oG0n4Qts=#fAu]Ojn9G0V2<V^#os$3IDPsWtE?dSh`BX.5ku5G.' );
define( 'SECURE_AUTH_KEY',  '?K1`dr4W<NztQvQ@NA9Mzk%@=xeL8.e/bZ]LZD_O,bq7l3Bx2OVje@Sx_J`QUgPE' );
define( 'LOGGED_IN_KEY',    '0i~RBK5)3iw}}:>+Q]M}V|s`<7D2o?.z8-HJ:r<zy)]YgGftQ.A_i[RCGC*:LWg^' );
define( 'NONCE_KEY',        'zJEM;{Jb!~ZYCI|MH+PL=A~@/Q^SEOuJob~W[`@NXI,mMG,+<}2)%)`lj1,{0?r?' );
define( 'AUTH_SALT',        'I+GY?>:Tl$rpB#KwJ.W~)F;67>?pIAQ+{ajF^F2~yk0y/v$o*4qIDm==%*~#_3`}' );
define( 'SECURE_AUTH_SALT', '#IDdr$F,om!?$uV=G7RJy!@5<f~:]Dg9O ?$/YpJk6vWd?TsAjm(ffC{T>W.JHdg' );
define( 'LOGGED_IN_SALT',   'm&@^]C$6)Wo@{+ZNx8S Ta/WcSIY{UwcHn5+>!?W0YP[9cpcqq%?GELY1(9_3GD5' );
define( 'NONCE_SALT',       'ibaNi^W]V!3UdIV1`=S/$jA}E>&Z*2mS?XW4U{R|ww!t,sep7</FRT}d3#dbKi;L' );

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

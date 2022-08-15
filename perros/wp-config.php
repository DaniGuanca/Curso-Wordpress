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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dogs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '4+b^ kl!68 p1qv3x.@mZxbV+xY]7ScNrT3Rq!(0bQ;.ZHc+jE27JtLz&^H/{}L)');
define('SECURE_AUTH_KEY',  '0g~?yF)}-[^|tP7ko>BF+)t@<{{Sar7Xmv+N)o_2I!@`*^a..{mt_KA*XW 7l(s*');
define('LOGGED_IN_KEY',    'pI?|gMuu4cn_K%J?1Uz}8g [rM48,?eRf2w3%)[{fG)>HsddKuLRj)xcV.7zi(w2');
define('NONCE_KEY',        'Ar_:]+{K-SN-&wF)q1TUbew|.3&?r_aZB2G|99p,Xp,/Gl!b D0*atTJJr|&`o2n');
define('AUTH_SALT',        '<AOC+Ia%P!hmR+N!,`%`6A8Ct2UGuugU6ey96QE,<r=5/Qo>!~f/+S~)+y(g#x`}');
define('SECURE_AUTH_SALT', 'j$rj;$QoPe;f=$=2S`kaYESsn5y:z~^KFkjO?-P8| x$>kcB;ZZ.3}Ovt+:EdSjY');
define('LOGGED_IN_SALT',   'H<lJs`-f|_if;.6>m.(dJSh*XE0|8M9{!bHBh67bxzz]h%=pgdC>1Z #n[MKn:N~');
define('NONCE_SALT',       '#lV!$|k%W|!6aUtniBH3C]R)PG[f_,`g~n%n9)Imq`MP59Wr;X+.fSP(`=?aBO-W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bhjb_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

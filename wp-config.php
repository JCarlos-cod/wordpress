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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'U-Kd{|+Y`3d@p|DZ3PEXneZ?YjI23S HgOXgj0nT!=>V>:w>rSaa9T41[kF}>nR~' );
define( 'SECURE_AUTH_KEY',  '+F;q.G3eSI#*yqDkuj%vi.?9:20W^qNiw{Df !AKs-F}ZF_(7Q~0O$>1G+[!)w P' );
define( 'LOGGED_IN_KEY',    'Pb!/2H#DeIR3bhaIF0zI7+1%G:99bmt ih*+qhjsaI1Oq?.{q{8/6{sNdSi|Ua`0' );
define( 'NONCE_KEY',        '/#{J4mM=ZL/(Otr!M6OvF]$}K:U?q?uuS^fmvzU`H}4=mU3w^ln9egCZlTFTyUqk' );
define( 'AUTH_SALT',        'D@U9>lJVLP&&h=rH7[vKI -sflH[dpLnpvniLy_y<@CeN5{i=:I<rW`EDw_Z-/!~' );
define( 'SECURE_AUTH_SALT', 'R9~aBS%zrh(~YBtG<ftQY.*Fz,j$X}zoT]kF#&op{Xw]0aO+B=;I;ln!l]y~@(nK' );
define( 'LOGGED_IN_SALT',   'jq8EA++qqC[kT_G;.NiK{ZsO/RY7./0+84:lJxT063X/+cl!w/O0b{U`9])dz#+K' );
define( 'NONCE_SALT',       '@AU^tlx0jpU_2<QJEwI^q,h;;PE-_0;ieg/p)Lx2DKMF7c0CKnv%CN@{s4[N!1~C' );

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

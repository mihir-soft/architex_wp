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
define( 'AUTH_KEY',          '0Gu#8n@eeQd2P]fc5rvHQ71wtCt`e:0]1EQ[zJ(PH&&@=)y%oJ71Le,7eGqrdgi;' );
define( 'SECURE_AUTH_KEY',   ']~#E$~ecTRS[<)DyJz4j!FpR4$IcB^[trt*{#0U8$=xO^?oY~oG#qT}NL~W$4Pv9' );
define( 'LOGGED_IN_KEY',     'LDN8f6LWny}9KDo.>M?+/D)t3Bs#u/2f{*f3wjn2$&,b^?Fo`Gm4ES@xZ9E%9eQd' );
define( 'NONCE_KEY',         '(IR1qhE3W}J0&(B`k{-U5{SO,c,cRk#_xuBD@lau|od;LM][n:X(7Ge<l;;A~3rP' );
define( 'AUTH_SALT',         '0w)H{p0JMs{,ixBgg&:hoo$yn29S4)E<-y+!AY~YEBDhLGa6k5fL.O,=@_#`6h3;' );
define( 'SECURE_AUTH_SALT',  '1bM}*0/i2+q?|pofUMk|GW>_aGhTJ _$q[aTJ2^G!)A x.9ilWI][,^gLUk;w.lw' );
define( 'LOGGED_IN_SALT',    's[2EB3u9XF#zxk]5]ipbmwbSTKzJ@7%TSAw`} 7mXkg6YchOaHGL%?rYrW</5i#{' );
define( 'NONCE_SALT',        'yF2;q;^5Yi5T?S`B}_fen.6kVjex![V7e18(5J2Y#;% ,j3:8$gpqSH0ISjlJa^q' );
define( 'WP_CACHE_KEY_SALT', 's@Bhoaf=OjAzv.tNx]}oXZ#Hr(H2g9PK#fcL7K:rJ5mghL6}{L*O+(c>,+w^!{Y<' );


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

define('WP_SITEURL','http://architexwp.local/');
define('WP_HOME','http://architexwp.local/');

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

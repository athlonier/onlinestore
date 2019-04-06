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
define( 'DB_NAME', 'onlinestore_db' );

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
define( 'AUTH_KEY',         '%i`;.7z;M8$S) KfqK`D-}n_8Yz##eT?N+yeY_:$_A4Kzk7]JbiS`:7wj@5X%3Hq' );
define( 'SECURE_AUTH_KEY',  'jv7Cdr?F*Zpr;4 ^MCgG=N;}Iw9O]1lu@Y:9iIWWV283TC.0TvFe1M}_1fOJHkut' );
define( 'LOGGED_IN_KEY',    '!:%=t_kdH*g:ATcYG>3BbB-$MT7/h>kJ&E<E=of#]6[:<]ZxGAo*8_|?HqD>_dPC' );
define( 'NONCE_KEY',        'DYW4r&/K@tqQ8BH bGDN3+{*9NraLhNHQ:u5TdpZ^L)}nDBZ|hwS&:hCN- )$xhp' );
define( 'AUTH_SALT',        'BELfkLZB,u10~RjL_0HJ3L#H~AH&3:lVMD{4X2F&d6.THv-&Ye~;Ma3V 1CogE$v' );
define( 'SECURE_AUTH_SALT', 'g.SrfNZheOCPdO1Ak3^%U%>SUP-mss$3/Yj6t)!T3qgtp)UJu2k^F Bs7klZz%QE' );
define( 'LOGGED_IN_SALT',   '|10hY0cj}ey/E$SY?O8KcOLkuMR{]k*jB1$#ew5g}1;|kQVt8t08t4]k6:lu<#Mc' );
define( 'NONCE_SALT',       'y!6brbf_kxvWlX`eal<Cw5yufd-F`Xe3:Q~0W0s{56@Q#{7kD!RCI&Prd6di[ENA' );

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

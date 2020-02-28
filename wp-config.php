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
define( 'DB_NAME', 'github_db' );

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
define( 'AUTH_KEY',         'TL%3=lmf,f+6X46sOK#+dj4PqA/<#C8Tgah5+D(^:nb846EGuvlwoSK!*]|jGKoR' );
define( 'SECURE_AUTH_KEY',  '#OCAyfCOw<<f:dZ>sF~&)j3NB-Uza/?v}&pG/nT>Z1]K[K#D[,0FN-fenncE$^Rl' );
define( 'LOGGED_IN_KEY',    'q{uGvNGgCP0c733&,y/q00HW6zciPuc:ur7p2&:i4x!5+kaxXhA${le_{+s@EBlI' );
define( 'NONCE_KEY',        'X5,PQ+O yQF>7*d__)B~m5((CG;>wIUEA?tlb|D`5/D)3Ejw=&7l>W}lP#jR6n><' );
define( 'AUTH_SALT',        '-+SmvkzisjM:$iRZy]joCxl6.ExBczwS%e%.eTsr]vpoRw[&:yaCAj{<G24NK;U(' );
define( 'SECURE_AUTH_SALT', 'o:=@%l:n8XTZADG&OSsQ5u44&|S5c%nKt:N;>m$SSZArHD/j%gt@fuuw+ex&E_h ' );
define( 'LOGGED_IN_SALT',   '3}W^J@MBN`CYj,Axkle+# SLDC|TE,^;NdW}& {&vvV&D*O]?FvglF,:7oRO!/v/' );
define( 'NONCE_SALT',       'ryc#*=WV!6&HL cy%R@v?%@x#)x.X(d1~bdx&r[(wZXc!x/U3PoEM^IT;hUYaM?m' );

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

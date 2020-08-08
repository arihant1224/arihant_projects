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
define( 'DB_NAME', 'arihant_projects_db' );

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
define( 'AUTH_KEY',         'e!)*~+vZ7si%}<fUT0taEp_84}0BJJ!R81ZHc8n_w0ph5lPE`#9mesOhYKx0R&-j' );
define( 'SECURE_AUTH_KEY',  'PnP{hN/k:v$];_)AsIACs<PVEID:nCj@WF5<wA@eegi-ZO[W,jH4F%#P4R]}9-pM' );
define( 'LOGGED_IN_KEY',    '-}P~C`_j<+utO;6[3kGwY05H/*D_K%GY~?7uw~bwI3)&L{)?M=,:.2S%wK!!g.5F' );
define( 'NONCE_KEY',        'EJP91>9q~~RW;;jX=K{ {L)2=s!c-.}OHH <8)(6F[x0}~}A)Sj1,7oEj3xYIv-z' );
define( 'AUTH_SALT',        '<MJ7v(dW2vxf}4n9[ZHIx`P(-li=W?j!]|~h`/fb7{$&2KVzud)/feKj,r,$!Ze&' );
define( 'SECURE_AUTH_SALT', '}0!?x Esi,i?DmVkkMs1U`h9NbUb;:!*I6zaxTq&D_Q;anlGHb=X:p8eU6g/$)<w' );
define( 'LOGGED_IN_SALT',   ' cv1Uf13L-oJfq93FhtN5I7D`[.mjj=Q9(xFw{%l8-ZJC5h& j!x.jC3|ss1{o7B' );
define( 'NONCE_SALT',       'No6{28s4i_$QG+53Bv%-6 qTO3c>)Jf20e6]}i:>LN%NU7=Q.4d/mm$gl8q]JD%J' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stellerstories' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'WS~{II(,jt@9DQ5zHri! A3#tJAiAUPhWWgN*adzF/<4RDJ#E.~ rUQ5?N;)d>@B' );
define( 'SECURE_AUTH_KEY',  '$)*V&< sB2id(d8F<`3FS9vfL4J>4.UX66G@ez?3z,qzsZOJmgt@t&BXIE)LvGMW' );
define( 'LOGGED_IN_KEY',    ';7)r%M)y|Mku1bz5O#eBHmR?26!]%DY{KCK#Gpd4B:=rh0#7%R|:*rjK,C>Cv$sP' );
define( 'NONCE_KEY',        ' lWi]G&;9?|#XAr7km0J+9)V81>?qgRL5QpNBH0EAY5jQh@RIJ1:)g>Z!e#%*EM}' );
define( 'AUTH_SALT',        'ib2p<3gDGu~dVDkb8~}rLtwW_xP`S@[1]r6s;6f//J2aCV2M[VnQI/}|5i b_)gg' );
define( 'SECURE_AUTH_SALT', 'UiY9G8r>j NCZz}&A416GgFm9?I.gR}Qv?(c|&O%S0x<g#ldZL#aKd0q[UF7 [#L' );
define( 'LOGGED_IN_SALT',   'T2sI_PuhCx=/*`dS~(#AfG<M99ND[^vr6<w_v&n7owl<b+dO+I6uLN,If$|Cd#f=' );
define( 'NONCE_SALT',       '(wp;3EB^I.8nrjbdS@ERV< ksaOL}%l~c__x`{5k~akV=IbLVMe@HQB*GM s5qmX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

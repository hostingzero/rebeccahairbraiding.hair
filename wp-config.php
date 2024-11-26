<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u756016664_2jzKK' );

/** Database username */
define( 'DB_USER', 'u756016664_9Eyft' );

/** Database password */
define( 'DB_PASSWORD', 'xs36xrdJ0G' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'wS%RD$|aRtRfQNk:ARJ`4$%ztE_pEU2Zst4uM*z/|*IItl7r;cd4AF7S_F6h{iV/' );
define( 'SECURE_AUTH_KEY',   'XMSSlCSjpFAP881e oC/W( bt!i2OP@_vG&*2?/8wd5?|,8VptW9DN[*L{)zs4fp' );
define( 'LOGGED_IN_KEY',     'UygOMNHtuDn9Bu^O-uoW614R~)` /l3rWA<|UP<5aTK{4coPG+N8u*}canPu|d#F' );
define( 'NONCE_KEY',         '~hu#m$hE,?t~Z(_TuoSjPInL*J6wU.SH$@Of kmJ^l]s%g.E*d!`G:q1WeD>3dj3' );
define( 'AUTH_SALT',         '7^u)Z5F]ZV]UQlL2|Zh*$owAg]hhE9}CmB~I,t* Vn:RO%xIiPAfaL}] Or<^:r8' );
define( 'SECURE_AUTH_SALT',  '7e:Ki]+Dy3J!Zp8+>jpc[np76x Z$qH^Yvg>A(.4]u T MlIk:KBvK+vj]BvKA.S' );
define( 'LOGGED_IN_SALT',    '*~T$GdYrzg|abG:=iI#f2k3m4*:dxS1:~/cAS9x(!~4K!Enws~w*~hq{OsSu=mpc' );
define( 'NONCE_SALT',        'aVU*=N_,v9q?&!A>S#P?B&k:nTAdV${OYgyp%$)l4R&<eQji9[VA/J+0XKyEc]wm' );
define( 'WP_CACHE_KEY_SALT', '{E4BS#[Su|[1@{ootV@wBtSjp7 ~WO.ng[0Szma>;%</>RA(%)Rp$n;gV}-g^%7o' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

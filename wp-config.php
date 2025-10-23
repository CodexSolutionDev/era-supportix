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
define( 'DB_NAME', 'u222423469_websitedata' );

/** Database username */
define( 'DB_USER', 'u222423469_websitedata' );

/** Database password */
define( 'DB_PASSWORD', 'dVnB9tHuLrrGSt@' );

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
define( 'AUTH_KEY',          'X>k^q9EJ`8i72FJ+wD6VjcYksib9D9jR3I-]=7Z]K/fU_~.Y9R;S;wLbp5}ZFY!T' );
define( 'SECURE_AUTH_KEY',   '+1.p#MQU0,+/S;]jM`MyC??mtY|.l0Fh3$kcJjl^Iyuf7|ICI-R^SP!)(w?pn9^L' );
define( 'LOGGED_IN_KEY',     '5{DecT9*90byWgESkO?r TqCIic%.Hp=2@R=5`%s5<C5XGS0h~WEulrBI?9Ef, C' );
define( 'NONCE_KEY',         '}fvJ0X%7jOgKj#guKnBKx@2t$mm1%`A48,kM-z/qr`:Wn+Fz48vnD*,^|Xyh=CVh' );
define( 'AUTH_SALT',         '=_;wdlV(a+~&*kE;jNwvJG(>q8f|_+qhOX<xuC&{ Q4CMF7oA=9[(L5Z7h/W)=pE' );
define( 'SECURE_AUTH_SALT',  'Xw=.zo1fEuG/&- A}^;gb!M%e*a0+[@[(l=)c~:J{[a/FZwwK].R0>6*4,YX}$0V' );
define( 'LOGGED_IN_SALT',    'bMUTmX2R[VbT(dun5d&tqg7Ncsceu?:1K.2Rubs/<UrI+{HdoHi]}x^d;,tk[2lD' );
define( 'NONCE_SALT',        '*J8JnSD}*{tRcKM4QMt%OPdn-9$rZsWb;?IzYFb.9C,a=gWf=2kM(;B;Lg0M7+2]' );
define( 'WP_CACHE_KEY_SALT', '&XD[:*dwqj% s)rvuVAhF(Y HwXPg&?Mc]ykZ[$|.S=(P}6cQ_%j/.m<27%u+Eil' );


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
define( 'COOKIEHASH', '90bbaa1bdb2c3a71dfb476c5da0a9907' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

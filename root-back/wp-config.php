<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'WordPress_3_8_1_18_0_mkhugh_com_au');

/** MySQL database username */
define('DB_USER', 'mkmk13441000');

/** MySQL database password */
define('DB_PASSWORD', 'PN8mRoXs');

/** MySQL hostname */
define('DB_HOST', 'mysql-6.netregistry.net:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cg*Ipk9QOXUi(uB^tU0DXSBD*G9eZ$4Pg5)YoJSgMRl3gvhbURGKmQ5Zh65eWI8X');
define('SECURE_AUTH_KEY',  'gEIr%%)oY*$(uWu6(7zaS7wYf#Ja0AJiiD1HAOgXuW)B6l8XRBjeQ^X*Y^)NIoOS');
define('LOGGED_IN_KEY',    'e)aBaLVl!!)a4AVC9dNETaxW*sV2Uh!GfmfTu&zbDrwnHaOFxIucnmsTM41RSU@9');
define('NONCE_KEY',        'J$wHG!MAvN6jEFrDEQ&aZK2J$@MZBif80xLEg#f3fvNUo$PoW^$OFLFzgqFO8UtF');
define('AUTH_SALT',        '#H#F1MotF69Xn3eq$^gLuGP(#olsg2aKHS)S3iwa8CWwVkIFDO)@O9RD@dGRD61I');
define('SECURE_AUTH_SALT', 'i9NW$6BypPdX&P5Bli*L09(EiwY)dNkiP4kNaWX$K8Oqg6exYKqoBFh30Ekctu83');
define('LOGGED_IN_SALT',   'JzNnGjqMRXjWQ&!(OSoJqD$J%Cp8aH(lFKe3(D)gyg3e&!UvvMkzEH&N&V(4DGNV');
define('NONCE_SALT',       'vgN1$rtK3FVR@SX^jyfBA6dDEHWs07uT(gaOC0nP@&cQ0oDt*k&ItxAbsMsWIeo9');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>

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
define('DB_USER', 'mkmk13441002');

/** MySQL database password */
define('DB_PASSWORD', 'xTZvt8TM');

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
define('AUTH_KEY',         ')LZcO4E*7(UEaq57Oe7Df@2nux@Xk%XTiwAY3VQJVFhDTI2!qyRMPFJxgfWJk6Q#');
define('SECURE_AUTH_KEY',  '0FI54sDfOPrksw&5ZNaK&N%^)kZ0mRIB!M)BuJ5cTK7v0EBoj@%m697Y#S0cVNwQ');
define('LOGGED_IN_KEY',    'eVUoCgZHvK5Zz%r)C54G9aN0dk^%ISo7d7HlXB7j&@usiv3gV2flG^eBQb7KiuPK');
define('NONCE_KEY',        '(ld20S!KG66oE(ryVzRwSE9Wiu4Clm@Dq1sqH(c1*XQ9@R95F0m#JK68kX8vcd1q');
define('AUTH_SALT',        'y^CfJsslj*p0BfsU!L^PXmfDehK2CgVRjDUC&E!mdQ6JECc1oWMaSg&@Ba4Y6HO@');
define('SECURE_AUTH_SALT', '5cr7ImcYnJ6xRl3x34PaF7TaQxHz4BH&aGDV@LkQOmOF4qlh0zEbpqphE0I6mn#w');
define('LOGGED_IN_SALT',   't5bk%7gXb8LWzGLF^&i*1&B@cRpo%Puteh#EAg9P1#HCjIgvns@lwAKWt(YsGvWK');
define('NONCE_SALT',       'BJ309J%nQ*pmv)va4KJOyj$AjMNxuk02KgtA0t*uixmrN6#EM22VMmnQtcLlmD3W');
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

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
define('DB_USER', 'mkmk13441001');

/** MySQL database password */
define('DB_PASSWORD', 'WFfiJ7BN');

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
define('AUTH_KEY',         'EmlKOa(WHz41GRdguOii7&sjvzS3Hby#W9TzMvduk^6noTf)M)ts(F8vplCZMuop');
define('SECURE_AUTH_KEY',  '&ps1eWG4EE*ws8DMKB$lCCpLAMR4KkW$jYhP3hUtzcaECBn*u$()haX173X3Uo!1');
define('LOGGED_IN_KEY',    'Ys@4NqZMR%AgJXB7h6bw2Lsfx6%v6Oe7wRTaIW1oy!1(KBb%oAlkWVTXAY^SMj7O');
define('NONCE_KEY',        'FkznUa#x#@lfy7DglsOcY^&FOa7P4bxUt^CeI67c8ThwLRlwzfzSaX@FxjkcZnDt');
define('AUTH_SALT',        'V5Ge0IYLWTq3UwBoFo@1aStpQr*O#lEzFVc2guwm@Nt9aY&keDQLth!KhmtHd5@j');
define('SECURE_AUTH_SALT', '1*d1trAyB@!qb^WzLEyTpWEf$kzgMQcVbD(C@JZ$geNyTsELbZd0mui1P9NZ6p((');
define('LOGGED_IN_SALT',   'f1xlN2a4!wkGcbH^a!sGz!0tzLiEn27OagZ@gvlXCbzqui(kHKkIl#)zG!2%$po$');
define('NONCE_SALT',       'OD92r@p*0Dm4!Hg$n!@trgl6V!oufpsR3qYr*D#EQhQSI5kFrR@B@)Aq*CneBH26');
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

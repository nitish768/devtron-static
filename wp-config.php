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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'devtron' );

/** MySQL database username */
define( 'DB_USER', 'devtron-user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oxkbLngIrm69NNKP' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>TH3bD8UB:M:YcF;^$B0-5-Nx%7HDK57C5n{Y0UfX#=?Cj7a:3:{+mp[fLI |vC.');
define('SECURE_AUTH_KEY',  'ctFK0t|GVz^*`)s|WR_9_umPPkB}J`MnA@Hu&_Q?3>:jS{iROd@|~s.d:LiNW-M~');
define('LOGGED_IN_KEY',    '-,MRb~!HsWsP~c<L/bn}kV%s:!zyfHw:XV^Q&..{BLw%`%w3):0!>X*:t~b}z/W^');
define('NONCE_KEY',        '3a)Hjzrw#|,1tt$k2.=58#h/DD*_|Wt:W&w1OV0%e x(>t&);zermB|.J|TF|)*-');
define('AUTH_SALT',        '_ J#Io4/&uUZ*<Ndka7%bsO.&uK!dtHa^/[Iu7+{JQE-Nfp2Xat?ae+z g!U%{e#');
define('SECURE_AUTH_SALT', 'A/wXM^fk7U]3i9DV;Srr5!=?7{f*RI-{6[=o`Sa8kzX$7&z@:mGg_ZmGL|9,5:o.');
define('LOGGED_IN_SALT',   '6V .nA~v~Vk_VHx%m2I393R8,vl-harS|SJp%GGnv^y@;L&Iu#jgM@/d+3i<9Ize');
define('NONCE_SALT',       'K>WMF=.OG&K-Vqw1|lyAvl;{Aw3X{91>th a`J9n|=-reqXGz}Ut|1|Vddp1],`=');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

define('WP_MEMORY_LIMIT', '512M');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

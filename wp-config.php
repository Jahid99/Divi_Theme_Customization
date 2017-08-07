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
define('DB_NAME', 'divi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b+!QN:hdpEzoN_luwb^HB[1B!Ef#l;1r#9]S};;yz8!D6|$u R#yR+mL^1K,BVN^');
define('SECURE_AUTH_KEY',  'fZI0LW+a^Ewl iTTbv;%8i.)(d+: +/^s0eqCQt#|uyMKS< tpUrO(-fjqz$EY>J');
define('LOGGED_IN_KEY',    '~%rz,xH<lHR]<D=oHD/#g oT$nz<&:UUMA+0)pQD2LK!L0<;bzkhrSD,ev{RW(vt');
define('NONCE_KEY',        'u@8>)24sJ?!+2WV0#0s*8F6&( gBc~C4,(a3j=8eTPU8oiU9`c>uLrpvljvceH0;');
define('AUTH_SALT',        'nHU}K3!0WzA!iHY4d9QGZjt>!|vy57=o@Y!he</1`0ZQLg5pHlVK6Lqsn4!Yx@*i');
define('SECURE_AUTH_SALT', '=h:5k+,5|T}k9{$..Yb~[isQ$3(E12efeMbtfJT4?T!xl21,hNB6p~I$}g2OUdN3');
define('LOGGED_IN_SALT',   '>Gx$4.Wa]w?@)M6yZbF_DE1L>e3T.7&5 j{c4,{DgYf/))B6HJik.*mebj)l]fN@');
define('NONCE_SALT',       '5X1Q6-?L*L.&Xp8@L_Sew!4G0ACz^Ji:xdzW!i8}?6jVq~1`C5v w?k)?=`pVghM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

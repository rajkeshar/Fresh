<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wp1');
define('WP_MEMORY_LIMIT', '3000M');

@ini_set( 'upload_max_size' , '12M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '15M' );

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
define('AUTH_KEY',         'wZ2F2dS`c6&0M=z556MSX[Hk]SEpr =$-S2W rDrHynN;T*&Vdc|z+n!;j+x}~[s');
define('SECURE_AUTH_KEY',  '6ao9/m;E2(0.WY.!=O6`+EU26y3-ust)X;-ax _|/B,CoxeY{H8_p9cg}~Q9[n.n');
define('LOGGED_IN_KEY',    'dsXvt0zR(nQ:c^BA6otr(*U_%k0`or!?#p@s-6%C1i%PCJY@.8l>xL_5J,ulTY0$');
define('NONCE_KEY',        ':/hDQ~}:<**5`X}}esXkvp**SB BL$v%31Q+gjISd:mjgd$TL@ePVThJdYTJ[Ff}');
define('AUTH_SALT',        'zg/{6yP!#{VG{`Q X+`4i(h6m=z$}E=tzw&$m<Gr7d+7sQ8WnIO=X?d:s .x95+f');
define('SECURE_AUTH_SALT', 'n.q~5wv?FCeMS!?uNl2Mou(Hr3IT&R3D?^e:ed!W16Z-ceLKG71=!S+/9}nt^orT');
define('LOGGED_IN_SALT',   'STFK$9!U>B6ysHib^sM9Y(8F,iC`}?jR&:DOQuQ@%@dk=IqW+<wNz/HUS~FLufa{');
define('NONCE_SALT',       'hJ5R;S,%*<pvbPF~89  iO45?^;O?1vGCcTI>7y(ba6~|ufr<`G>g6r8fmXbp4G6');

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

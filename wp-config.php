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
define('DB_NAME', 'workshops-dei');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '@.1y*$_q)yEFyG)+1_WYCZn%5=A/yRxx.L*=7FcID-Hhqz+`vCcC};8w[%av>:[v');
define('SECURE_AUTH_KEY',  '[Vg^ZB#OPop7^v+(-fj^m@a_UCm~ xaej|cP47Eb5W29 yc]%OwkY]jMGijkjQwh');
define('LOGGED_IN_KEY',    '4r=t9lxm;yKpX -8Q-V&Ha,<Aj*&B*naNK:C`hCd/|lv{l_an5;B-qD*X5]4uKE,');
define('NONCE_KEY',        '<i;d#JO5=okjbvn3,`Pg0RKRH+Iw.RMD3Ck4&mr93je^c@jirQYY*w~U/x<G=<05');
define('AUTH_SALT',        ' w|tCTNzxE+=X@q+xWuB.l*TK7;;1A}&j:?Y9oW/jXq)MO<9YPPXxDmYlNH.GV@|');
define('SECURE_AUTH_SALT', 'qn:s~UIDi]sqmIFL,|;-- Z|`6U)+hYO>hMaH_2j_xawYw_.2|_)#M,qO)LbAj})');
define('LOGGED_IN_SALT',   'Op&^||N~H[qpWG?m46+rl0vS<g(z;Mh.h)mPQzKXw/hvXQaQl^g+WAW+g^ce_nlO');
define('NONCE_SALT',       'BBH~I8|[e&Cn.z*-lrQN2I?Dn=#GkX#Lgcg~YvmR{6) #f(-atIV8nZjv#]I-/)[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wsdei_';

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

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
define('DB_NAME', 'geekteam');

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
define('AUTH_KEY',         'zxl[0I4F4jUl@VQ33HF_o-Da<1e{9;)3.aMCApNXR?^Niv,0x|dXt~UcyK3aXH|N');
define('SECURE_AUTH_KEY',  'g7pgih+IjjQZJA+Euwx-s]k44n!~vy?LH@@(t6Gog<|<DcG]50rq8J+ npQxH9ao');
define('LOGGED_IN_KEY',    'Y(<CXCF.O{!l?-Y#9(-VSR@&bc=~~Y,/c}^LM@|z+^wmQsaX<YfXf7|g){=X~+8Y');
define('NONCE_KEY',        '*-$}gi?dL.X)4<=yNQS5:,dtZ,h[zk!sm-3B(^ml|2/XO?V]%8.>lMlNgZx)t;%R');
define('AUTH_SALT',        '|ZKz7n2)f4:R[$V@yi#!]-{]UKpCaAxa7|nA(CJ;AL+3Y,L6w+T+ROqnbzy6EFaz');
define('SECURE_AUTH_SALT', 'cTrBRK%6i,{q|xGl-u  B+NEGoYKfoBR6J4gFvI(Lw&*1+qv3I}`R&X owSO_3-p');
define('LOGGED_IN_SALT',   ',z#-=Q1yy46^=Rl=a,=|+>8e&H&GMLdkc@;&(ffiPUuQ8Er-bRjAokt<ao0!-!Sn');
define('NONCE_SALT',       '&2~4Pm6c!]/8y9+O$`sn0[[G.j+%bf5>5nJO`#og+S`hd|-Y(+MQ%UXc 80MRqo4');

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

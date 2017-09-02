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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'wppasswd');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. utf8_general_ci */
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
define('AUTH_KEY',         'Cfs{oQ]Tj95.P%FO*0Gx@Uld8z{/K9[}79bWuT~Qsxh4IPi4#3Kev.dI/^I~X4n<');
define('SECURE_AUTH_KEY',  'tR%l*bzvo0cWIYXK*T?(=B-KF6(*`4Y)c9%q#lJBlE%4/^5%$XghGwcVK~u$LAo%');
define('LOGGED_IN_KEY',    'VfZ(:oKn/s!{KNU(ay:q9bcD&:^U0^2<HEzr$~8`ZEbVhRINc:(5!]sEkdRnuDRi');
define('NONCE_KEY',        'Ei?C.9R8|J!beUWm@PLY]QGz8FTn-!{hqN}vG|sAQ)f.Cl!OB>]@3?x<!)C$SP`x');
define('AUTH_SALT',        'J@Ko5t270auT=BxzC2M,BwxSD|1]xo@Fys{C6;=sp`$=,+e,}QrV7g_) H{lzpK:');
define('SECURE_AUTH_SALT', '<9]s!46y(>Cmydw!>o2]rwdL~E_50M}=yRSPnH_l]dS&J8sdBbN>Mc%i3D sQ?dH');
define('LOGGED_IN_SALT',   '0w96fyZurl_6@q-jC75#8|$U(Y`d^#x-C%x8+,a*%nN4aJ$Uj,>&[Y:hx}/4sXDG');
define('NONCE_SALT',       'l${t/V~@9D!xdYI5)=(1_ILP  SAw#=P(mi8S8Z+ozHH}*?6JOLiPd6LR zxm8eW');

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

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
define('DB_NAME', 'wp490');

/** MySQL database username */
define('DB_USER', 'wp490');

/** MySQL database password */
define('DB_PASSWORD', 'S92h@i41p[');

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
define('AUTH_KEY',         'qdxkkkxik3dfk8bomxfh6nersmitopemekwg9aizyyfh8mm3bpeuioniksrvafpn');
define('SECURE_AUTH_KEY',  'yljnov1bli2qmzgip7xzjinazfl9fxryl3zwhvn8dfq0jzppmdxgb6kiphrurnym');
define('LOGGED_IN_KEY',    'xdcc7qb937gmyem7wodczdjelu7otco9v6avvhbrveb26jbrxozhwpfo8w8ashs1');
define('NONCE_KEY',        '5oy9e2pmo3i7vkmdghd9x3gnfnrykpgahmkjqwibpftcrrmd6nfoxganxtnggnxr');
define('AUTH_SALT',        'y23sfkvtl4iliy8qwyssbktj5s6yywqguflfpbrw6fkaqcjmwkeipcf4yoyqpzyq');
define('SECURE_AUTH_SALT', 'fmbcald3yeafb6zqrsioxwzmpppxx4rzdvrlcu1owkut0uxcgpqntmwrw1micvxz');
define('LOGGED_IN_SALT',   'sx9gggmjgsincivgapbqrbb4uaozahtc0lo5brpgtlutu4a2gmhtp46lf8ob2cgz');
define('NONCE_SALT',       'w4aqygqpzbeqsl61gsqgro2q3ecreug91p8hutxr8lkfufysiz6rhdgvhy6sb4mr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpxtwu_';

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pelatihan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kggfMyNbkO6LfwA9u15BWcx39UCI5HEm087sg3IKDjfbUYZDuLMwlIhCEUndQSma' );
define( 'SECURE_AUTH_KEY',  'VAQv3QOQYDH1juz7XsFU6DPzRjvnifx4i9URBqBPjdXH6x4tovtGb5XHTo9JVXej' );
define( 'LOGGED_IN_KEY',    '0XkWvnHZYBC68QMA23CMtz4QA6365mo3ukh5cwbtXPqngVCS43o045nxbFsLLntV' );
define( 'NONCE_KEY',        '6RJJn51euEZP1dRs3WBkxDZpNCxzMEfvY9ODfb12zecTHqibgWslJOAbh5bGrheS' );
define( 'AUTH_SALT',        'fAw24idWnj7Jh8BHcHrsCP3Xb8v8EmM3lmMO4pcqd8Dq3h7l4M5RN6Ci6ug9UfHe' );
define( 'SECURE_AUTH_SALT', 'r8Fo8bgSkBCdkfyyORQYRTGnKKffYhYj85XvfzzWQnzwOTMCLtlQLJlM9lXm5Wyd' );
define( 'LOGGED_IN_SALT',   'WXdrbwKUOt5G5yRFV7MayHclXKN0PdQP3C0mp9SFvdJkJae7RF6ARZXNDwRv6Rgt' );
define( 'NONCE_SALT',       '5qVi3o81ccyLLR1x3SxGwH3cWn8TXDJgophHPr9FjxCmRQYpTG4HPesVvbsTZG4w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'Z2A5XcpkDKj6HLhP0cdM2rNOelL2NNVr4sU1k+N39n5fLS//RS7o1bKqOBzGbVLOetjJlHQLKWBNXNxBtf62Rg==');
define('SECURE_AUTH_KEY',  '9GOHVYhK+ov9VIKvLeylicWpU4PW2nrDGBAY1mY7vjTWEY+CfLUxPa7RdNtFFSB48p+vPEs5NxHm9JzDnE1hMA==');
define('LOGGED_IN_KEY',    'R9uO4pi6R0u1UivABX0AWz/n9NoxT1ZB7n1e7gxS9itjErJWc6vTcqpw5958RRtQa2XoyxFv+mPrremDaTiQ+w==');
define('NONCE_KEY',        'KEhk9MGWVyv90fJbop0TeZg9axgq6NigU9xinOXEk9b8OQypwqJjkZJM2IWCHz6Wfz7e2VgzS+tnvSyf9e0X3Q==');
define('AUTH_SALT',        'KNY6HiDpGkO99G+SHsf/8s+hnwEtRGVbUiyr19Na5BjvY+I+alR7PwimrPO8T7A2S2GrNa3UsS1ebyDYr/wknw==');
define('SECURE_AUTH_SALT', 'anl23NYgbHdtJ2tQX4X7T9UppH+ppR9enAB8IlycbzOKD+rp0euMKGj9+2CuZbBehiZQVw5Gnp7vkz67+HAV4A==');
define('LOGGED_IN_SALT',   'QXXUPIF7ersx0MS+1JcmlJr2TI3/vmm2ksdeHM5SW1l3XrGGbvT6udMgKjQpDIzkXjcN26UgKkFbn5aq5vUWqg==');
define('NONCE_SALT',       '4tDlX5xtwOptzw8HEDdki7fh6WqGAQF/J34DpGdbOJWgjRyP1MxpbYSn6iTB5NHP9i3of9fVvZ3MzW98dCL8ng==');
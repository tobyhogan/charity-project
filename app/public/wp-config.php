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


define('AUTH_KEY',         'GSE5/LeiNqr1V0/6ymrW8Z9q0qGoPSXtqyTdDcYilKzjDtcwwZ6oK5os87KAMEpp55b1ImgdPC8EAHROmSa3/w==');
define('SECURE_AUTH_KEY',  'sPufCVtdX8yGDmibgNtAlskhmH/XPZgnKCvSi3OaoCYresP1qVoYM8QhO8BtsA3hyd1z5VQ7ARyOHrYlQ6bNZw==');
define('LOGGED_IN_KEY',    'AfYt/f7q2FedoZqPpdNatDNlSfeEwodtLbQmR/p6vW5ASj/YNeyr+4REeryQggY4qsytvZXOBE1/glj82+0lTQ==');
define('NONCE_KEY',        'Cs0PrTGGou07B7NFrIjp5haavoHL6jqUrgKrV+/NMDHVnDqFl+VvridU3oC9jwAxzSDHli5dlU8wEWE04AazJQ==');
define('AUTH_SALT',        'j1GNKuG84QtEbn6XbAk4v6fWdNmbhsCun6kpj6cz5LDp1EN/N4WY78g5S6mHLltDx7t89ktDIiyT0ZzXoyevHg==');
define('SECURE_AUTH_SALT', '1vTJ/vruRK8UAGRMdyueNmdY0RjZkQMwuWkfMGu00WdJ3KXsAi9klUBn3eR/NphzHay42n2cjA+gdm7PkCsOUQ==');
define('LOGGED_IN_SALT',   '/CxnPqz2z3z32Opm5s4zwIx9bKbUPyOKEKcUQQnVI56aNYpVQqvnJ56m0xJcZnw1LO/Gf0uT9zsqkJ0+sgdpnA==');
define('NONCE_SALT',       'KTXTXdXOYjJ4NuHBsG8wCeeEXQ3eZB8I4in5sTEGAg22J9GW5Hi0Dx+WbyO2AvtiibzpnwsgDQR4X8B27yRDmA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

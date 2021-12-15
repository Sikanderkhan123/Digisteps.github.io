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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'F5m9xIH4Tkc/tM8i5LPtCpwizqHgaIoW9c/uLAiEZruoHND8RvKK29B/po1tliWZP3EWW5pPfWFhGkKP0jIl4A==');
define('SECURE_AUTH_KEY',  'w16jJ7W3HK35mwUjRLIFOOIRdxrLpnDx7LhStPcZQ6mR0UNVW6+/ijw+VXCAp/Cov/AfGI4qsdTQA5gBVgZWiw==');
define('LOGGED_IN_KEY',    'KftT+YvTMlsqxOccvHhm+RXubAUZOmoTipN0lwvjFnrirztsoooQeB/XWLBuIQ5nexKf5+r95nQA/VzDf/IYTQ==');
define('NONCE_KEY',        'n93AceN8RLsy38WK2VoabQj6no3i+nA2JlMzeNRefCkMyJcx/1zwyvMBJXZ/dmh7wJuXd0xOS0lKPqtEZFgchw==');
define('AUTH_SALT',        'uKF//G2mBZ8s7vmcgQf4SpX+Px7qynjY32DD6LnqDOoyu83ghA1b93erSt9lqYDz7xChCGese35s1E7aQWNKxg==');
define('SECURE_AUTH_SALT', 'eoH2to9SqFYDGQgqC6SAKbDwWXmd71ujfdFTRQXFoQ4/Omvi/fX/CLVNb4AAPEXKi1MfPzCNkDqysxdiJp+w5w==');
define('LOGGED_IN_SALT',   'JX+lyTwJvSi/72wnztQdDoLhxO8yiZzz/qAOcv+syLDylGpuASraondHKAYcoX49xHJBWUtjMcGnqnx4jePKzQ==');
define('NONCE_SALT',       'eScgbBhpypGwiZYoHd6xxCtGdyutaXWD+mwQUK0gFcfbAJPp23drtxxVJgELSeZ0mz7aVQZzl/hfq0v1mMKmJA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

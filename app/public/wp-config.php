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
define('AUTH_KEY',         'cSexf1h0MXvepSV/J8lu/YBOgaIC17Hv23rExAELFROFm5h48lpjNKUmuWh1NrpaJ+P91IWShdpyoobxx6/O2Q==');
define('SECURE_AUTH_KEY',  'p+bT+9lVlXZ64xa8fB5OywRMM+/3LcXQtuB/9+9neq+wxr96NdUIxhJ3hbpg9feI4x20w8w/DZwgvc+E+4mv+Q==');
define('LOGGED_IN_KEY',    'n5wFVEpTLzU8jui/8EIXoBrTlzQP8+lHXDRVt0VUc0wYkkQTMF5b9zy03mPm4tTEs5cBfiaN7ACyFU0y3qYejA==');
define('NONCE_KEY',        '/X3fqAUQ0qMouneiTP0FPDQgHXHwaH+dHFRBUeZle2WP0KQzaZ44WpVrk6i5znecfh6YNzrSMtP+5T/X/5pdYw==');
define('AUTH_SALT',        'e7GZ7a3bksRxCd2q28ilMN0EXsuid9oB7vx2XAIDsEkNy7kemc6SepFjRvs8lIi/gKGt1H+RxKxMw93BRrJiZg==');
define('SECURE_AUTH_SALT', 'KV2avcL8CcLOgSXIRHmHtha4wX23ILysZgjGEZ349lrMeQ1/kb6VVetMlzvLd4Da30SZYN8WR5is0fD+v1Mnsg==');
define('LOGGED_IN_SALT',   'EFnc7S7KLzGkcCYmeIP7CB92/DIQenGRbrMHYnRV6BqMzYuLRdAaGCpHbOqdLRb/1Ys3pbB1xMh69u4pLZPOSg==');
define('NONCE_SALT',       '5T4JdHUd+iV31uAV++52nGpCqVdDpdCefrYG4bU9ckNuZz+Z4H4bmOhSMjqLReRa966EZIc0UxXDrfdwCnC6ew==');

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

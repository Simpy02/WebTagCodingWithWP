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
define('AUTH_KEY',         'VUvDX7oGJdOwwrltIRGDODLHqPeO4TERZLdTt2W4fjjdgc8nCaBxQUgcd0YSw4h9JddW7kA0xQbU1El/b2BWkA==');
define('SECURE_AUTH_KEY',  'F5LTkGOQ0W81Fl9L3MZA11xi1Q/D4iZ4QhBMKpe/oQrE9R83SCyHKcGs+pYaQSLTFcQVf9PJZBjFLToPGCI9Tg==');
define('LOGGED_IN_KEY',    'jwKmMLd7yrLVzdrKwA71lcG40DELuoGXZ13/8fxMOIDNfGWLNEubm3s5WHepnUbvjfY+tFYwNEFsjeOvwnQ9qA==');
define('NONCE_KEY',        'CUrctjbVY2yFqAgEFPNhw0zZ25VDAZbu9FYxt0+LJxpwCeDkOND9JQfxLM/UnATn9fx82R8uF3wV6vV23/Ribg==');
define('AUTH_SALT',        's5eC9rGlZITbqColGBTlJbIZ0BKdV8ZdNvPb5iHZ36p2zaQFK7/su7izCa+YB4UUu2QBDzv/df1H6SQY93kjMg==');
define('SECURE_AUTH_SALT', 'noZxWiIBiizYx9mrABhrRusRDHgQLfqwNmqb6IMOOD6juaMFk3u6d2FoW+Lb2O42kcqqAQWZ3eJAed1ubHElDQ==');
define('LOGGED_IN_SALT',   'VjZKz50gBRMiHaGjxSzCRDSBqFMEmrey9bqv3JAQYAiT7vjtMZM4rh8JO/YkczE1VR5JU+MzzqzTb3RtpHnsBA==');
define('NONCE_SALT',       'r3pbFXlxjQ4fjyGiMxv/C3YYwTWjOaOkesO8nB4bxIb9x0QTBR2X6mOYsSrlO427FxWPtDUFsBl89whuSMsU/w==');

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

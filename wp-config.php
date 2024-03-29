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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'XYJ98XQvWBiGaApknYk5cOu0vnGlJi2kM2ksGcm2Lm5i9HMeBgdTlwrIZy0orhNMhJxWB7hsbpvophnAD5m9ig==');
define('SECURE_AUTH_KEY',  'sUXAn9JMptZ1qwJD14i+tafuubsZcFJ8Pv8qpfSP9E0E5Eta8ICTA4g1PqpAIuDB8dWu3hBLjgcR5B9yvQrKDA==');
define('LOGGED_IN_KEY',    'Aw/qAqUPHZ/JRR/DqzSqtNNTB9jsTOUimC2ANoujI+I/dYTLiOduCMhra3FRWdgyQRUCCxkcSqHpnphFxQ2TQw==');
define('NONCE_KEY',        'qqsVgcV9b61Hh1o7RY3rVUa+YyF5q2l2ciigpJnOmd5I1LQz6GpnmtvyYAO5dx+oP8e2nKDm3piKWmbUAg8z9w==');
define('AUTH_SALT',        'uHoAHj70d25D5nQtCPrTX1JJ1a/4186u5pi5sU6MR4JWcF6EUyPBRmLLjsetbrP4/8aWT9t+hUZrr8n8dw8k2Q==');
define('SECURE_AUTH_SALT', 'gXEwK2HZEHA5e0jWwi0ZeIXYABTqfHxMBUQactfA7uXwlE5ZYi+7WNyqE6HVlFW6RfbCQr8tc/iHNKubjI8tNA==');
define('LOGGED_IN_SALT',   '/+MAX19I1MKWxJnuaL4EzoB4cBRVCUQNUd2oMig7LVWuXmEAPttZ7nnMfKv4M/8pvX9FcVjC9y5o289Pf4q3ag==');
define('NONCE_SALT',       'lbKrWRLBWWBcPIFzK6uBAD1tyItmTqUrx8Om/RE6ynzwthDnxjsyc4kLJDSLWH+aNCbAZc6sWush93tyz8dHEg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

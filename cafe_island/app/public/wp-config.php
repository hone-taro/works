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
define('AUTH_KEY',         'DZNapK1Gf8LjgmfuoV8jLq24mfwKLMk3qsU8GU1TqltkQUTxTVOSo/V837vCd177qRZbCqxtHKZsU5Jy0x+nLg==');
define('SECURE_AUTH_KEY',  'Jo8G3nn8QRmIChNx2tQSxftTeP+0XBgseWg8DS2iYgr4JqZm4JjoBwsN9G1+ynO9wNDU8LzQ221IHYjp7jyRwQ==');
define('LOGGED_IN_KEY',    'NynEbhwKP+Yk+0M0SR7T9L6/kVpeCEl/BsxpIkN3ekEbknWPnjw6YhJF9nI/wUD3ZPGsQfFw0oA8fdHB9PqE4w==');
define('NONCE_KEY',        '8Rs9LSq4J1zP9tBlFRSZE0fUyu+B2o0sJQMkG3TdR3GChSwbhO7Od8jtO/PEaD/raSZqhPJelO3TVI3BgrkZhQ==');
define('AUTH_SALT',        'UUkvPZMBpCXGY+xVHCLOSSZvrkuAtXe97r0yM0FNsG68MjfqwAz0VCUoNi4uvBSlA0QsBDcUiEtD8oHJ93gR5g==');
define('SECURE_AUTH_SALT', '1UJ3G0KhJniGkcNG93jEv+sZY4bnhRC0TnXTzBkCzWuYyakVpTxVz9odladuj5bAv6+O5QrxdOtqX7ggwtqaKA==');
define('LOGGED_IN_SALT',   'AvpPp3KPcCBOmk2W2y2q7gCoIJvhmaKZu384tPD2unM3+rBiHKxo23INq5oqIjIcwOjB6AqaqCA9LaI0zmVanQ==');
define('NONCE_SALT',       'rUTreRV9KOSlISd6NgdgK+oczvC2Hg7464QUX03In06ObwX4qtWVdG8uPvf8WdYxMACZGBmCH4/6wi6SwWWQxg==');

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

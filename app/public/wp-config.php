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
define('AUTH_KEY',         'LgIL+KFpmH3uVKHPdvITcdNDvC6wfPOzqj2tSr2fSb9Vx0MdVaxFVrf/++MopAkdpkWJ5DAxswX4rqzoYoxFnQ==');
define('SECURE_AUTH_KEY',  'XFHjldaiNiOwLjessQd99IgtODiE0wrD6RxHJzHqPq4BxaP9GyXp/EkaA5cYPGG1owAU2akvSbxVDlwjuiHicw==');
define('LOGGED_IN_KEY',    'RK7IGg7X3YdtoHmwxTy7Myn2OrrXD9TqcMwiC+tEUQWcUaV1y+TcPNGkDTSItWPhSTLu5d13zyTu1F1l53yBhw==');
define('NONCE_KEY',        'd77Az3rT6EcCZfA5KTckaG8V7J9xj/MuA2rF72Mf1eVSiXz/aPzwouiBqLAowGzU6SOU6fLHDJML+Q7UlVOrxA==');
define('AUTH_SALT',        'tORCWJPI3LdKJUhwr/RLUYZy4HkMdgUsO3CmTGWGTD47A9pm3pKB6n31hZudoEHp0y3cgp0PP9A2Ks7+wEnA2A==');
define('SECURE_AUTH_SALT', 'rUmbHubpkTJaasxYmw9E49Br/J3QTatU1xcwFHXPdLOeEKmOHiYeAfVAaetazsgZNimCR9eYd65rPA3gSfq/Gg==');
define('LOGGED_IN_SALT',   '8lBd4cnLqtqPegBHSjwVnoLIBy/9AsuDxq1Q/2f6E8YfZDjXLibacR87btLreGV2DzZSF4jHa83EOVhLJDFsWQ==');
define('NONCE_SALT',       'ZkiC5QrUGWq69AHkmurxldPasLCHpi81uv6cO0gRqM34V6aaNoSIJ1zqCH1g+xYXa0JCB65lJQsIdfONf9jGIA==');

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

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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ezyro_32398150_567' );

/** Database username */
define( 'DB_USER', '32398150_2' );

/** Database password */
define( 'DB_PASSWORD', 'S8j6s]p5!5' );

/** Database hostname */
define( 'DB_HOST', 'sql302.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'luzuxdhvdomqfxf3pul4kzb4qbiu0hzgd3e6vpay10owxanfbe0laqtazopaafpu' );
define( 'SECURE_AUTH_KEY',  'uamrv0qzhffbh7lignlvvajixhucrtid59zaewxits4lh74m08klzqdoxdbko3sz' );
define( 'LOGGED_IN_KEY',    'vmddn7epods7prefqiumehldivnmvxwlj7gncxlay1sj8ldhevjmzoxalxpzski8' );
define( 'NONCE_KEY',        'tj75f61xo6jcputyfasookws33cbrhwlwhmmbd0dqqrahhj7cfizv3uxheer6foi' );
define( 'AUTH_SALT',        'hsa4q9e7kd6lifmv8jjovqhvidqkkcxdd1ijhy5xa26bt3myerobsgt7hpdsgixe' );
define( 'SECURE_AUTH_SALT', 'cdkmw8361iujflgvjypikpydjncvv6bbwadtfmcbg3lgjwnmdsvkcgd7bdg2aeis' );
define( 'LOGGED_IN_SALT',   '0tuwvttu1tsrizqliibptotaxkm6pvpbrfezkun0ynxi2dbonbe8jk5xed2kaxdj' );
define( 'NONCE_SALT',       'liheqelfgruv6wdzodnanatvgqpfac5znxlnoi6avixh1lq8ruqjuzh8uozxukjc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgt_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

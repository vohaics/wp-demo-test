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

if(strstr($_SERVER['SERVER_NAME'],'localhost:10011')){
	
	define( 'DB_NAME', 'local' );

	/** Database username */
	define( 'DB_USER', 'root' );
	
	/** Database password */
	define( 'DB_PASSWORD', 'root' );
	
	/** Database hostname */
	define( 'DB_HOST', 'localhost' );
} else{
	define( 'DB_NAME', 'local' );

	/** Database username */
	define( 'DB_USER', 'root' );
	
	/** Database password */
	define( 'DB_PASSWORD', 'root' );
	
	/** Database hostname */
	define( 'DB_HOST', 'localhost' );
}


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
define('AUTH_KEY',         'BNN53HHDwv/G39Or31CbcTKTPlD2TDZ+xbNDykmlAACxRgEK1xVibHfdZPJhOrTYGBJnz7/kesUwuM4AoZbV2g==');
define('SECURE_AUTH_KEY',  'c0M3dy9lrtc4/knj/tFjThiYaFRNTaIa/4IK08WEhEECbohET4B3fw9hFG64nGe2zCqPI15Us738nLB39Pb63Q==');
define('LOGGED_IN_KEY',    'kny0t2vh9RtDVMMfncbuAtvdtUekl8cpD4WuoG+p4BR6A0ncZRz9tUkLNrMULWgETYgSHsF5L3ZnZx9MWLPDCg==');
define('NONCE_KEY',        'YLk2EirWY3EVoQ1QgEerILM0EIjLmVL+tgcseh5njbtM1SJfaoQE4522FzXfav9/rlcgROi+d9F1DXDzIbW3gw==');
define('AUTH_SALT',        'mN3iH3khNDIJOX8c15i6zm+UPg84abd3ZMLYe3+JqywLCrdihWCFSE7xHbBpyiCq3buzKJViY7j4zxE275bLrA==');
define('SECURE_AUTH_SALT', 'wZujHcNhvWwVcfhJGYGz8fxYGkiN3n8msR19TF743ZwPrggXJynCxXe2gqq003yjO3JmRoJ9brp4z/7Xubg1jQ==');
define('LOGGED_IN_SALT',   'PNTqCH/ZTYHts5kql8Z2Y9GIf5fEAoHO6xdQzErGW5dUcor+AZnK65FvJa0/xQybw0bOacI1jI8vr4DaSQCYfg==');
define('NONCE_SALT',       'JzMqWZFHoFy+rSjpXZNCT5rSiATIfIqSVHz4+OFxv8B0IX02O85tDqbPF6b7ayWGyLy1CiLYp7DH1WQ20mVElQ==');


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

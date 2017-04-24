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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w+3NR WpUDbMbDXIuo0U/a NQ9z9^<; 9%Rw3(?r[qJ*KILmTmA{M %nnm{Ohc|@');
define('SECURE_AUTH_KEY',  '2Q[[M Z1&FFAPsaX7e{%?|tVR+hQ[CL%*c.2Z4Vh&ANs<{b~G?4&8,(FV0JZ3Q^a');
define('LOGGED_IN_KEY',    'O%VTh[ Z1@eTRFs8mW0N[ruP(4h5AXAT[xbx7?r>x]a1Vmk)su@:O%HNH, VA/Lw');
define('NONCE_KEY',        'k{o9(lFB2=k9[{U0?O8?TeE~Y2MXH&>=iv.FX%$fKt~c)|<iz==kd3^k6frxL}s.');
define('AUTH_SALT',        ')aKgD|PQWJRuu8)2[Hy&>!)UDTz_E+yV5jhrMt#q4@9n(jE2@I3nflO01mQjvX67');
define('SECURE_AUTH_SALT', 'gT@fAM.BLgb%)f_Qect@v~@rRq<D&SkQe0ar8*So6kiSLHc)({Et^p~#@7Aclu[d');
define('LOGGED_IN_SALT',   '(9XFYX2d(8MUQP~}b0M&W%g1{PtH0T!b=@}+UaY/tTS&-^T3o1@VFuXkJhGb6kUv');
define('NONCE_SALT',       'etqqDTn^[pNrv|7q4?&8Hm!6<+j=t8aNlrOKOe?$C.z7lUeSu5LdAt3YW|$Gb8F0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define( 'DB_NAME', 'xrace' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&OUHM/q7qz<(+1M.X+PT8cnN;L85j<|hVl{+2-YDxz4:0>_at6__~MehCFXu0KGo' );
define( 'SECURE_AUTH_KEY',  'M4oZ]s^[hOP} HR$@|[(} KP8^^B(R&;+mPrM*R]LNQNb`6(Iz!859Q1O.ZWfF+[' );
define( 'LOGGED_IN_KEY',    'TNOM6[!*tPHLpk](6TP*z||5U~#COrug<tvp5dJ`-{J(;rT/682.8j&(;98@W*7J' );
define( 'NONCE_KEY',        'Hp9ul>}BSJY@zp,`7#& f#FBo{P T!4nR+;6?T%,  w~hFy:r9x8;mP*n<fVfN ;' );
define( 'AUTH_SALT',        'Qz6_W#*gcd5Zvff+F!H&<G0?bNro(CUu0+5bt*2gDzfLe6*4g|f}A2y^v[)pgF~o' );
define( 'SECURE_AUTH_SALT', 'K3#%weT=I||<$I`jXrI%S0vHAs)O.jV3V8ce3()_Q7[O0&!!|BhqjJQcO% ay3GB' );
define( 'LOGGED_IN_SALT',   'AL{N6vu-?`t/r/|1azI+ZK}o5ls?(L2R_AsbZ7)a|roDHb5m-pQYl[]6g`j*mmlz' );
define( 'NONCE_SALT',       'L7U2^t7Y-FP{zwLJ[xklu0iFA-y$c|eI5&>Wq$PWmke2B}a_^Jxevh`#}MDqWL[%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

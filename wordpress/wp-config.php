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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'u)<:e5~I{g+HTs%~c}u7fHm<Mk97ov{AM`XlRHNpf]6@(Gac/LiTild5fWKB#N:h');
define('SECURE_AUTH_KEY',  '7WoOHb$}$;uMLShgQCDj@tR_wU2B#n8!M_>$Na[q[*~(yO|vNgu+B<A6*EN~xO K');
define('LOGGED_IN_KEY',    'W LYJHyd@X0vFu(k;Kte?zg)#3dy0V9H@d_PoJ]Qw]BBlYw2|)r)n;qLzi=4;rWf');
define('NONCE_KEY',        'P)JzE=W<k%csv# uJqg}wcr<A1=7Od~TkgV7c:N=6:F.B3TcS#B*wK?}*>o!es61');
define('AUTH_SALT',        'zyH)~{drD)*UEoxVs`Bn3o?m?;)82=.t/*z|_z/HK&$u!$G@dIkN9ps=f{$P=9Fr');
define('SECURE_AUTH_SALT', '@tUr2D4pbXI6[U%,/B{x{QmM)J@vt/}E$9Y1?`g2fvQ#S;8oXM>(vaScC`_A$dBM');
define('LOGGED_IN_SALT',   'mwKCcwwhl]$R7L6EX)bVS3tR~@U9R[p)jD~)3kqz~ixZ4zQ_L0[y<OcF9Uz)++V ');
define('NONCE_SALT',       ',Tv/D+5(G^pjZ$j-,nIW/!w=F.z`bi(X@v+tlOGf_C-jQ]TgM*@=J;cQomG&)JEv');

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

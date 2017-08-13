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
define('DB_NAME', 'sevencs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(Q7zG&3;=~wHb^o1!||1/e3P})36H7QjX49HJ/ueyFXYMrE_+4f8Wd-WY *gb0Q-');
define('SECURE_AUTH_KEY',  's:.<[aB^;|Xw7`{-uV|:@v:*(/3Obo/4Hn?QhjpSTu@]WK  Yx|p;g-95--V1bL~');
define('LOGGED_IN_KEY',    'd?04n$AF4JCxrFpdESIU{4twzuK@!8]Q[/=80uA|KaLr[cT>GmHv 0U-R-={],& ');
define('NONCE_KEY',        'yqdNSc*Z!WkgU`7?6K>Y>X!=ZFE}U=0[CleqMyNwOA#V]UUG:4s/jJ2qC*dYP(Yg');
define('AUTH_SALT',        '+opzJ;>xfLt`oc 2:-zdy)|MiOcS4oOA9SVrgph?+8Kc{bG}<*G3v(q7o1%!4)LV');
define('SECURE_AUTH_SALT', '8lO6=pBKVp&dQ|,B!rw*G<TQd6&*X5if<U)G{_O3>P;v-G]n=P`TXj^&}HvF0N:V');
define('LOGGED_IN_SALT',   'Pe1q8]Y/b7oPC^2=dabVmar@sb<mp+iy#87G,_JuaSFr_^sv4iC74#ca4x8WnRs}');
define('NONCE_SALT',       '|l12lWS&Lm/^ Y_C2DbLtU!6NldEG%|xC[%`QcHK#<$(H]^zjJ8,jEF`Z5V-D4[^');

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

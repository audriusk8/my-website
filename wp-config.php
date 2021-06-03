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
define( 'DB_NAME', 'AK' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Vf7ZGN!{vFR%A#h>*|I_dwW}pbyO<K}qU 1jxeG8dZ_.)vI^wP@9*)2,u ckd^ik' );
define( 'SECURE_AUTH_KEY',  'q?a:PsmjdZ5LI5 D&:j8j=3l*k9T{rJgay`wG6H-0W7qGEjER)3N[Ttm8|hW%3~c' );
define( 'LOGGED_IN_KEY',    'v*5:!#Qiy^po#cbqNTG> q=oJV4gxbD-GAU-2y6-+(N!QB>QWx/nc@s*4tdv7qP;' );
define( 'NONCE_KEY',        '(;/I5kh_keILeGq;sMwwezR@jB^:a~wkTDoF3P+!yD 5K33psq+,D09yA$^#2k#0' );
define( 'AUTH_SALT',        't0Y-5pzP5#agz.=<k-WQ|(jhu8|](&H9=@&gJ$NC,X-RR?py;.+s#L5/y.=Uqco(' );
define( 'SECURE_AUTH_SALT', 'wNVfFih7*p2vse}3Ri*()/{n[#fM8p[>2 .[}~E%Ib?Zh{XKQ{mLf_Y>4ozz^+US' );
define( 'LOGGED_IN_SALT',   'mQY<wxiqybfR&F2;FC&hM43M)QgTk4+,w2TV/0A`;JSeYH) :k*UZ+z2m:~=fpQu' );
define( 'NONCE_SALT',       'D9QA/f4_[u|l>X,2`h(@^=z&+g@x7b%}cIfBKUXg3~(HSX)VV.UX]0bdN WW#y((' );

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

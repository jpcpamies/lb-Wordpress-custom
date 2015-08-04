<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'custom');

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
define('AUTH_KEY',         '|+7Hw#+%iAr$|%1.|NtL0L6KOy%*g]zmF&q[Lq3k@Sfd~s-C+01<$`Nwg k<psIg');
define('SECURE_AUTH_KEY',  'GI| !!Q$@S#r}i{$C^0^vUcp`~OzmE!;/,ms:M!Xluw*0DmPGy+-+T.@N6E!H;T[');
define('LOGGED_IN_KEY',    'z.RV5dI*#?F8hqm{}P)!3to&,%gK*^+piya&uY2q_dU4e%#|r2*d2%tM}7DR?=te');
define('NONCE_KEY',        ': 3o-:YOG>#Wn%|NA^F_f:Op4r8+V?WQ$&,hD)p|dSxKQIgu|TktK*1UgEF<+JoP');
define('AUTH_SALT',        'LirDG>=8hLIpBflB$FR#=M-HcVQ8:_[*(Q|LJLBlZT7Tk,]0=}&zH%OiSf5e!Hy7');
define('SECURE_AUTH_SALT', 'Up<z67`Q`vN6_wx[$A7p41nvfb|Flr4:}3$}R<r4a4Yq^Yeh,na{cS*,;[46D*2&');
define('LOGGED_IN_SALT',   'M^f2Ded0rU7;P(w+@oU1M^V=G%thbGP[w&q-rUknF0Kt}b/J=Nen%_.[,K*Au cH');
define('NONCE_SALT',       'm:Q}YX2hw]Vv9=DSO=%0Yns#_ HOC#ZEF{}>cZDNkV(?JP7F(9|Gqr#|46X>U;+}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

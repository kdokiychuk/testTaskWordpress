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
define('DB_NAME', 'testTaskDB');

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
define('AUTH_KEY',         'lC#E:x1n@>7Y6A6P>=,0EZ*bgB:}tQZ/A)6$YG.-EmL?+UV6anK1LE]3KB$4au+X');
define('SECURE_AUTH_KEY',  ']Tk=~WdO(fp,0F%U.6jW5:<C5wE;l *Wflggt[>7J/NA9M3d4tIY]}Mb2}H,_=4;');
define('LOGGED_IN_KEY',    '#mUxbVpe^n32K8?q$X})jin&,F?/P&MOXsn;!n4 x;vx3}hu)FE3cA^&eGU][]8W');
define('NONCE_KEY',        'd$(@$N?ii-f<j(%vNH6QT@.!ZR-sS}9I*PO>C$K*z*&xG}!}ZESIx5yu_~T^]0B6');
define('AUTH_SALT',        'WC2dJq-^Olp?/K5p`BkwMT%{di=J8_hh+wP~zaoz0-15#L4MQ^.)h_[Y6{qPeMbv');
define('SECURE_AUTH_SALT', '>KG^if-}y:dyJY?GlO25hs#Y$+K:j@T/Bih(<9e:j>:%PN9%wJTfRfQ_e.>B+lRM');
define('LOGGED_IN_SALT',   'li<Nsm3Yj:gGKE!XW~9y)sD*8CC)?Gw}_MPdI{!Gw}6VV}}r3sV`brLwd/xFF.p7');
define('NONCE_SALT',       '7o:RYPgi>cR}ddwN%./cI1dSs$}0&%W4p5$R-U(yF=p2HU_Zgs-O1&Y.2vy?cf#1');

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

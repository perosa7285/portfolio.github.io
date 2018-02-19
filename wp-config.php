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
define('DB_NAME', 'id3015931_mydatabase');

/** MySQL database username */
define('DB_USER', 'id3015931_mydatabase');

/** MySQL database password */
define('DB_PASSWORD', 'requiem7285');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ln&fpW(>`yV|4_SekJUS/r!gM[&j%PF[VIHS45g!3#t8^mb6|49JlDOx504MxxUU');
define('SECURE_AUTH_KEY',  'o_A~IZwGAO%G4}0{!{=Q8s?u6i_dbu5*}=:!JYEdbs(y*sTFf-R-(zN-Eo71Sw;g');
define('LOGGED_IN_KEY',    '=GmNDH`+5e52eOyka<fvOR+|UK)s#1a|HC[*RCn8yEDGS+CKLuD>CL,iyRgUw0Aa');
define('NONCE_KEY',        ',DRH]MO<$/Rq^1!6%a3<EdA25^K_)a -v>S~hn=h$)`:|`Uh=N;x^_@tn(#ZFP.6');
define('AUTH_SALT',        'y-:):4RI#br<3+ %*V#Ww*pX[?^S0Y}_=XNpU43_j;%xM>6jU|1+Gk2/ Wlf:hY<');
define('SECURE_AUTH_SALT', 'x3`VH,%j64NXZHp;0SeC6*0Laip_AZ%@=D]04.R[+vV6I_9LgB7NX/)BAxe@,:--');
define('LOGGED_IN_SALT',   ';!wvE n[%`o?P-c:`K>Olh/G,~a1wr%yqSCOWH5uK(9Yk#?Q=U=fvI&R`us7^-gg');
define('NONCE_SALT',       'iZ%vL-7Z3qYv`/HJmj.-GrA1+ws-D6$N{+ ?|mz]eY%o,3#_y14x=N-2=-%$Q3tk');

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

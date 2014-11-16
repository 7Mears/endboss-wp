<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'endboss_db');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B<J0z-h*@5|6stLt=x<84,3?G7O%jT--kKfMp-3Y}Ed|lZvkhAf7dWU-UsZ~j|_*');
define('SECURE_AUTH_KEY',  'kT)/e#x:(]*DB /Bbx+skgCB+mlCX}H]qSK+!z$7XVg+1LY@tv>b`KSQ.3Rrc_6M');
define('LOGGED_IN_KEY',    '8=)`_Z|>CD3Q}:44cxqlV ^T=o/5tk4Y{`vGkV!<X<|9:1P]CQ-{)l,W)@Oq|+jr');
define('NONCE_KEY',        '@/2sWye4YL;!M-`ikQ+J*tARJ[fc^](vW,k6(s]b3u-Vt7vjejAsdzyxkeZ+iB!Y');
define('AUTH_SALT',        'amr^9)k]L >;-biz^>&KUXGnM(IJVP|uHZdwU^-8`JlVQfS.FO,-q0{TW3O`$]&h');
define('SECURE_AUTH_SALT', 'aXSqsb.D99[Drib+#AhFxl3ZQDq@C?:HL^$Rz&Gkx3e}:K1&IZ}I{!$rn,.rKIe*');
define('LOGGED_IN_SALT',   '#jMoo&fd.S%(N4_/x||+:snfEcs!ylFF|SPMuRgIf!_#Y!zCz_IhX}MySj2=QGx/');
define('NONCE_SALT',       '-A%H}[>cx>H|^#t9-DK 2E+ajT|-*))dm*V!l+F$$a_7,#?dyF<h[|+VGlSaTUA~');

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

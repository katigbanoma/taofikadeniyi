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
define('DB_NAME', 'taofikadeniyi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kini419,247');

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
define('AUTH_KEY',         '3qEhHAQp1.oh>&28fjT@c8jelk,pI/(4:,/SCD~Qf/nyeiqW+J8]&s@]^7K!4=eV');
define('SECURE_AUTH_KEY',  '|G-kWz^I[z0sG/|m*b0=0)qoJ|FSoBn#J/}mP!f^@N9lR%wXQ/=m)u%S(4iO[M=1');
define('LOGGED_IN_KEY',    'kne8P(3B`L3mf*5IjY2}s>sVq%)BPn%NHv!Y -Tbc/1.0oV8_C&cAe>lpTJ0_Q.c');
define('NONCE_KEY',        '(x#&{{%aLa`LwXRces*Ob(^KZt!ahQ0vz^}ta1`%)yPe@M6HIC7*jqNo+hS*CrWz');
define('AUTH_SALT',        '#%yN^}L|R0=#98FN`opwZy5r~me8+fbP5k!ywEm$yzs1FYO2 ~e6#EeR9U96=v<m');
define('SECURE_AUTH_SALT', 'I.SJT`+;Oh)@3iF^x+RdbA(U,&0?7,Rk:zopxS1YM2Q|q5?@$YZ~<bH^K}-=@]Q_');
define('LOGGED_IN_SALT',   'jnb34h[.2JqD}e+K_${>)*9zk7y)G~U9P@P;VM89Ve9`1fL}Ep>x_O|59`.m7~Ur');
define('NONCE_SALT',       '~ tL3*C%`Lv*?nM|S/5T>}ZlS&t<^|aEaIo!|G?:10F c#IW!`*-8!Y0KB-kd-}+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_tao';

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

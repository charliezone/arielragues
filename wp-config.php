<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arielragues' );

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

/** Remove Contact form 7 auto p **/
define( 'WPCF7_AUTOP', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.i78lYM7>vP!3-&VpX#wWe;(>8[mx.k{*T)TKK]>dNsCW[N/!TkG^tEi#7G?,1vr' );
define( 'SECURE_AUTH_KEY',  'F7h04V Kd*[)4mEz4r,LMO.Af%kJ*:kEY%N6ago46cSwaR6~|_0O= Mv.ctlkUh$' );
define( 'LOGGED_IN_KEY',    'e,<w+<!w46~W^eF;/&>=55P_seBp`VLWZxNH_m?|K&<9$)z7sboZ^w3/p*E4/YVJ' );
define( 'NONCE_KEY',        '{vQ9d78Sg+~*<ink4H=d_IqpIf<4HUPWYFd*nTfwl3Vm- 5lhU{+q2=x/tk-^q<Q' );
define( 'AUTH_SALT',        '<?c0E{#rY2%c16cY`dx60mlwcTQiP?oli!=~m,?a&MLYL.)NzDz-{0eJ3y;a03gv' );
define( 'SECURE_AUTH_SALT', 'uZ/|d/L,!nFom=~NF%*o$h/7|du V76rW[^q4QCain0sN2GeGM;:*>t./dZT]7{7' );
define( 'LOGGED_IN_SALT',   '~0D2+WZSq: bJP1?APPu2|/$>5QjfN+5_mbs,=Wd||YRtz*tZzr#;LZzJ:}2w<Wx' );
define( 'NONCE_SALT',       '<y#4Zy+oMoYB@xM@{lK!Wl~,Y<]e!aiVN;MkDnA^RCu%nsuxNt5~F#d#2`{YdqLy' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

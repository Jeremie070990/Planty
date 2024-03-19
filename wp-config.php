<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'g&?;IIEA<K YpZu>pEr zI7Gjx1^}8u:3r*MH#~c>f?ow1s9f*lRLgw+zVSaQ@]U' );
define( 'SECURE_AUTH_KEY',   '[h< N-<HgC1xmT ~ 5/>r)6E ?^t2TQ^fGKfx*<V}Y:d:%2tf/:>BJCBcmO8O)|J' );
define( 'LOGGED_IN_KEY',     's5{K<.x>)^,0S>(pz1!)D}l2#3Ig%U&vn:*X6BnLd1Yo XUT;jipJzj-,{90`&mq' );
define( 'NONCE_KEY',         'M(Devf?d0CL-R<W77 x$7`D4{pm~COHr-VQ96jh&w7dTZ%H$;O9eO2X<)h>ybcqO' );
define( 'AUTH_SALT',         '64zN,[8B(&86Id<[>Xc|dd:1[D>G VZRUr_?P~=z{!_8r%C%}zgy6BF?PL9$WSQy' );
define( 'SECURE_AUTH_SALT',  'y<5ir8OM=}^1 ZXCr_!zl]jU622{34R+|/yT1qq^0P:Lh&}s3E%Rno@o)1 RQE@p' );
define( 'LOGGED_IN_SALT',    'XtJSKbD*ycMcgnDqIoR}pfYW_sv(.p}#*QB RBV;GK`U%`ExSPv3Z=&5YEe-Xu)T' );
define( 'NONCE_SALT',        ' Ke1NbS[Pu[6aS3k`-S%t:Y~t&$|(Aiyx+ukr/d+Hbw1QGth++NUh#g$6_7_Tt/Y' );
define( 'WP_CACHE_KEY_SALT', '~}gjIQRw7o=1BR,*9 i: 0K/G! V;^O8|Y~[t,C6w<nD=7v}0IE{k+p`)DFxBgE%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

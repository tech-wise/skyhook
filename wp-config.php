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

define( 'DB_NAME', "2021_09_14_skyhook" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


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

define( 'AUTH_KEY',         '}-V&O,MkF;>*5GHHZ(=DQe1ZpM440K0! j~ +6v<&6HcbEtr^{8uUy8Jna;=plSU' );

define( 'SECURE_AUTH_KEY',  '%1~8p2ev&CFmt4<pl:kY&qe3~p0:{n-V]#5GJ:O}I72b8;wqswH2iEmYomPK?ko#' );

define( 'LOGGED_IN_KEY',    'e2@oMP(/mjCHLd, [c|N>72B,=mvTv~qPz*W;Cr[tNs!>hY*<{L7we [gFJ.@Z5B' );

define( 'NONCE_KEY',        'Qa1..T@j&[pDa*BH?V/mdZQ>8?BFIr.;+KYS,D^+db3:.*>VBZsW @#_u5N[:6I:' );

define( 'AUTH_SALT',        '?S |qw57*n=$z%aO(o5D;<xLM$eKuwcuXkt}eRF2-NzLNmgIe4mR-2~punQ6yfY;' );

define( 'SECURE_AUTH_SALT', 'NF;uo:/3H@TyEn74dI7:(Qh:Z<~;YO,::hq-~c!NK~aOzro]UB>Z]aKXBlJDKJe:' );

define( 'LOGGED_IN_SALT',   'cfpgk?IJx-3=Qnvu]Vcj/-JoGxVZJHT0P_>|QimI@8l>5cx:{<m/_V%t9`DtNZ-S' );

define( 'NONCE_SALT',       '6Ej0_9&4CIlhH 8()(.Q]UHzK8KN&nm|QT2qA!.^K!{Z$WS#lR-5!d!x-Hw1VFw)' );


/**#@-*/


/**

 * WordPress database table prefix.

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


/* Add any custom values between this line and the "stop editing" line. */




/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';


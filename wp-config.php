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
define( 'DB_NAME', 'anhdt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '8YxL2Eo2*7x|^`DT0+(gV&b9JAQ3#ry=$</0%GVL|>]pE8 JdKoP_WUQj.h%@lV&' );
define( 'SECURE_AUTH_KEY',  'kwpgRhiH#`%Rk(7;IS9|FP{lEP|7xz;A2KAn OJ!TKun0Gp$!bXz)H /@g]c6,Jg' );
define( 'LOGGED_IN_KEY',    '2SG!#$X/;h7@+0N_PZ.I[nTIVpCmHc5* wnMizOD[/WE@3~@{I?64f]C.`k[Aq!1' );
define( 'NONCE_KEY',        'E=M;oc-=rD&@fmy *@dXpx0SsPP`Cnr1ah!mAaA.Toe{`=Bf}+wd@8$O=ery2<7<' );
define( 'AUTH_SALT',        '*e|o..*]})]::ElkvXxlI`~2>x*m*1_HG.9<@.dI7)dnWusFHhPlC``.N}T&]cA%' );
define( 'SECURE_AUTH_SALT', '3nEl%)PC;i6jO`&)kttm^qTxj~1cnbBJ&$7%WP*R#`2aNQ%>87 L[*=~+?-Q:|No' );
define( 'LOGGED_IN_SALT',   'uEkV]EQr!vK8!DfdF+6*S1?0<]sVQJ~f&o{+k]-)i`7%jK6D$eW9;K/0,WJ~-veL' );
define( 'NONCE_SALT',       'c@F?/`](E(J]8y@br<`:/ :WzuAt`1[i=EH&F90roa6])SFsu~ydL;|fWO*|w|^c' );

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

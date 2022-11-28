<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Enforce SSL
// END iThemes Security - Do not modify or remove this line

define( 'WP_CONTENT_DIR', '/home/u896656489/domains/docufy.mycitymyservice.com/public_html/docufyc' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.
define( 'WP_CONTENT_URL', 'https://docufy.mycitymyservice.com/docufyc' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.
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
define( 'DB_NAME', 'u896656489_D1i6V' );
/** MySQL database username */
define( 'DB_USER', 'u896656489_Musfw' );
/** MySQL database password */
define( 'DB_PASSWORD', '5dndKemQaq' );
/** MySQL hostname */
define( 'DB_HOST', 'mysql' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '(#1=HqP~T8*_mFC[]CG0<h^U>a6A7e`fe0-|!T4Nf$M?R~PsZp569c1!:oQ,wtn^' );
define( 'SECURE_AUTH_KEY',   'e.DLCSl;Yh^/1gT:;{~;Y$D}I%QH hjy:EAKw3qo7(5/k#<3e.3tB(iLN?yCWQd(' );
define( 'LOGGED_IN_KEY',     '5~p<QGP=]?w:i$FC^E1q?~5F!ez+eMchw}`p]*1:}n;F)f{%O9D-?cGx@5D5z%~X' );
define( 'NONCE_KEY',         '.#ul&hDDo6(b#R1I[w4f*|Lx 4HCzF>9i3%)rz7vQOcyq%fqJ]/SmMgFFg6Xm*c3' );
define( 'AUTH_SALT',         'SR:j3CWh&S)fdtg)Y3Nsd<@BB:8<SUpH(S8|Q!2/ANE7!:Bzy>EQ,(f)8dbG*G]5' );
define( 'SECURE_AUTH_SALT',  '(^;(4fFY*BVsGU</>iiGf!r::2y8CF  ~/xRB!C6TWwU.SLhyb}Tk/;1=rMWBc%4' );
define( 'LOGGED_IN_SALT',    '99?4&n.V*h$|pEuA@<HnzcHD]lwEI.C4M4ASF<%2Es5duWI)2+I$/2GVbWAO20v!' );
define( 'NONCE_SALT',        'vD4*g,^uAbz46,t~FLc&3N&s2+<UTGoG(`Yk$AQM9=;/81oTvaU83khgrZ*(4W$e' );
define( 'WP_CACHE_KEY_SALT', 'wzInP!LxiIrUX$Olqm1DOp=&qB;]Os^Wx^fzxXQA3#&ZqzA2oNlz9~HMoT<pJJw9' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'f28br7efj_';
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'WP_DEBUG', true );
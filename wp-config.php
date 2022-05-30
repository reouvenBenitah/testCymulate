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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cymulate' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
// define('WP_SITEURL', 'https://b73c-93-172-243-221.eu.ngrok.io/testCymulate');
// define('WP_HOME', 'https://b73c-93-172-243-221.eu.ngrok.io/testCymulate');

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
define( 'AUTH_KEY',         '=_ V ?F,X#P?rH&C{4OrB5ay-gKhpUQ/g)aFh=]1]/>LoU1PTeOUuZ3a$7 j_s2{' );
define( 'SECURE_AUTH_KEY',  'i<yO?W4@Z!Wc0Aae8~?TTgd3c2ry*ESn(e0PGpuUz<7$ozIh>|zN#M6iac)6ZwD3' );
define( 'LOGGED_IN_KEY',    'j8sE)7-AllPMZ]fmawgz?c-EFC=3D&V1.rWz7{LL!ux6<*EeJ~XWu56Q*&|pA9ir' );
define( 'NONCE_KEY',        '5.TK9kS@t-hLrE0OX@ASVh(C@*~$Asx4C{UE#V<SeMA1=VJgn1lUcUKBps/I^(1R' );
define( 'AUTH_SALT',        'r!hr>EA0760QW,#lF%@mXkY7P~=3Es!>*WvHC |?HALF,Jfbpd#=6RoGUx3j[gaz' );
define( 'SECURE_AUTH_SALT', ',`/~?Wr>~)Z-l#dGYEZp~I-Tjy*K_;!$qG8/MV$*7?j>QOz|.<Q<)3Q<A9-;?(@d' );
define( 'LOGGED_IN_SALT',   'hKXI R8|;!-pfwtnjPfIY5r~}upE4V_VeK7l!{<uO<M(BS2gTW!G;22BH>TAh7X:' );
define( 'NONCE_SALT',       '9aS;uPlcj/,KzP&3wr5Lf5;rf:` C9Z<,MBKr#.>H1>)!=5E>lIGq0IX8b:%qW68' );

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

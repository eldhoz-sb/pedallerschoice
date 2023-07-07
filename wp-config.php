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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pd_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'UVLS~hnGI:?@I+%]Vmg=7Og&&M7xZD?7Ig;8N:iYR:|s3be^DHMq1TY9!Ic+5l6W' );
define( 'SECURE_AUTH_KEY',  '$s0dCB`0c~;ICEt q(k<:}&UwOjEx{_}8Q=NxDqQ ;;A4OLvVgDz)eQb[KvE^$]w' );
define( 'LOGGED_IN_KEY',    'Z,<[o2XWmfFMz9/Y=;!hZA1CTGZ[d@;=@Amx7!%=0NaWM,o4X*z5}`dpyx+97z3R' );
define( 'NONCE_KEY',        ' 9!UuTRn_I?Vc,/9/~1!kz#rCn]Q3)[}1_)g:7q>OzL/xc.{ZYQf/B-E[9+1v:Gr' );
define( 'AUTH_SALT',        'N=p>$7))3&[^Ef}?:Mkzji}5x+hy1v%75b@* NimD*t`2L$%(&I}4mi`mGu zbuM' );
define( 'SECURE_AUTH_SALT', 'bc#wVUD^*G][j{m+-;YSlyS0W&I+!BR9Xd9)dk8Ntu!}<=ctwEgx6jI=VPw|wRv8' );
define( 'LOGGED_IN_SALT',   'sCu-m6kY|l(ls,a|jN/9`)NC{hk7~nqmnXaxXEj4[bP-+][-2CW9d-M.2Y&NP6Pt' );
define( 'NONCE_SALT',       'e*XRpvNOC^mMZr9V[Jb=jp]HPHp6GsAO-<hd9b|R6WIVR=@!FIrMAI8DoM?Oc@K7' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

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
define( 'DB_NAME', 'organic-phase2' );

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
define( 'AUTH_KEY',         '5&+]B=T4R4eCkvJ+x)ED_jF<=4X;*Y]Pp_6]#$wg BDh.5Y B^qO(QM=oS_ra {3' );
define( 'SECURE_AUTH_KEY',  '92`t[2b_3{63<H4{~vU$L-tN~:l`ye~$Wp*2PB6:^o o K!]Hp>#(K7;QB^[I]6;' );
define( 'LOGGED_IN_KEY',    'ec5o.$uZ;^+8Rs|b%>vIQiCDY?,Y*8jQ^|4x<[(^!D`B^zvQcGI65C-Q#mSU)`KT' );
define( 'NONCE_KEY',        'CN)YYuU@]Qo*5wv%&:6r[SIn5Qt^J1sE#zHPI]{m_&C.?,2^}30IYPh*n&B&}0|=' );
define( 'AUTH_SALT',        ':bK-0D7pg&UasDfFXK(x]dBvD86gV[y1 0(VHRTeKhq@3.~6)1`McUlHmI~#*+T$' );
define( 'SECURE_AUTH_SALT', 'po_xROVYe^aR?DW.Wz@Q3$%B:I+F%o<}ygY!:Iw%I{~EQ-IrueOAa&Yg};.C7-bq' );
define( 'LOGGED_IN_SALT',   '.]=ztxp9plP~VsY1az^Z]m[^WZzUzXyO9JHWJC#%,!6(/VImXFYN1@TKSB$#Mo~b' );
define( 'NONCE_SALT',       'O=<Vat#*MN);i$XTk#`9kq_1=S)*+J}BY0)w#s5@M n8IQy`~o>J[*vOCBV@e>7s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'of_';

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

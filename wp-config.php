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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scoding' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4mE !yMImv(0)S:z2%,}Z:zS7HZA7:n88PNz^*ee:_;9a;$X!0qA Akvd+SU]@aU' );
define( 'SECURE_AUTH_KEY',  '}P)MW@ kp&Zg9S5hb_Z6@{SD%*9xn J&4}u~9WfmM2(J~$pDz)N],>f&<^<_.@sX' );
define( 'LOGGED_IN_KEY',    'M/1WIa#hu[6N3@P-447mho:&_469!k5[6.MiTy>>lia 8sf~jl2lRT=Y:a g|aWr' );
define( 'NONCE_KEY',        'k]](tI:bMZHOWN+-a&Z)X`0@fIq3Vf{;]5%JYiqaM8Ly>)4)/Bw)_IKZGXw/*%HK' );
define( 'AUTH_SALT',        'OdD=mvz&-?_|rD`$mH/b>al{ S~<6AV4S~TB].e#W u:vIuRT8.I%e10B]NY9ouG' );
define( 'SECURE_AUTH_SALT', '`xz@P1LvD^O^A!~ZbE;MFXiEA].uh!Pn/#h=f,~x50_kJrM;u8y8m!^R40lAF%o;' );
define( 'LOGGED_IN_SALT',   'GDJ&7vj]r7Ep%CYx,{qIBfW!O;~-A_Ma1AiPwu[h74.0aSl#zS$Q@/J&LHLL=YHa' );
define( 'NONCE_SALT',       'q5e&RMJA6`t,l0CRC}2~=M$-:)?m:xD,VK=E_mTH2nq8X<d+l#a}vw~coUeY7uP|' );

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

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
define( 'DB_NAME', 'wordpress_581' );

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
define( 'AUTH_KEY',         'k+rs8/2^!G [#CCBXoranT09KD`C. U_?0{m4u%9>F0YGh1HU^63c]>%%x ,[^L1' );
define( 'SECURE_AUTH_KEY',  'oh&aO%s~7KIS^&.mB^U$Z|$NfR`R}]uvZ-1^lLQW6K)>Us:_Z~J<fV*09_9EoCFo' );
define( 'LOGGED_IN_KEY',    'yZt!<3Gzx xX4&NGs{FOESCdYXUzxSznB:o$Qm}Y>}Ir]scEpG38sptGLYsL2aCN' );
define( 'NONCE_KEY',        '..z0_pLaqi;qrcF7*|8eR>XH83lc%U&mNV<m>@j{M<Mv4ROb#Aap0.p=~Q(9Z@?1' );
define( 'AUTH_SALT',        'mvx$;XZF:uJ<Hu7zYf_F{9_uQgUFTR5w+0oz+XBJff8n*SPN5S79d[pRcWGPjV/A' );
define( 'SECURE_AUTH_SALT', 'qy)&Z>NOK Z1G05@&b.J1Ed4]8-cH>F/36<0A$}IcKiCJdJzH-7ZFDY(3d><m54H' );
define( 'LOGGED_IN_SALT',   'N2<CHOJxA2b.1V>sqdp}}Y3P(_#z`9<>a$e(2s2=vu0]3[( awf8mwIaD#(_B<l=' );
define( 'NONCE_SALT',       'e9&K|aRx%-YQ.~wt,r<ECV9Yff@]W{D@-VKEA[m3szAu1+xjn:,_!VaonkoI~F-I' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zadwordpress_db' );

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
define( 'AUTH_KEY',         '>N%s`Ui7V|n+i%b,Q;$h#u>)BM!C:*ggVm I{p~+={d5`TR~R{+WFFhaC9*nq%-i' );
define( 'SECURE_AUTH_KEY',  'x@)^k8*p^WRAE*+)N26G9Mp&+HCX4WWOHd{r)i:Y1=%Ws$OPd&Xc6ULKi5HFzB1F' );
define( 'LOGGED_IN_KEY',    'gX7*Ep&85{JIuxwj6ov*JG(CPjDnl]RO7pC?%|XC1iShd0QnVgj!pu6w3!2-f~_j' );
define( 'NONCE_KEY',        '&*Ml0yG{[5nyQ>Xx^k1!$lw>(%c!Le%s,K*c[wCx{A@Cp93_#=vd?5O|{xy=${xa' );
define( 'AUTH_SALT',        '<.TNj,A:=L#Cgm/I;4Z~WiSQ^j<CkF1h/f/> BDKPq.K?(mPDl$.35L<kqgAQ>D%' );
define( 'SECURE_AUTH_SALT', 'jeW?{zxz3iVX%V0={1<8sE,}lnNtcwUhNpW~SDD8(bRqKi-UiJ-tZ+Vb=wBb]Dz_' );
define( 'LOGGED_IN_SALT',   '/Wzq|*l`7D_e^L=d1w3vr|z Eu|N!L/_ YwM+k:>a;#YnCKn)5N-i[Pm{+:,-P9%' );
define( 'NONCE_SALT',       'E9<29}SLyh!Mc(elSupjbh9ydaF2/o5gwRIgPhJuG*Z}6Zic?|:<.}ht}WZ;ogLY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

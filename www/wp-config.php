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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'test' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Allow modules and themes to be installed */
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'U7Fp$#~j0BHG}g-71Jl]zi/`<ySeGM_:+|3O_Y{>BN:{BJo6r~--r!+l9&lD.#-{' );
define( 'SECURE_AUTH_KEY',  'K13`?|Z{g+qoY{<OIl;39 =3dS@G!Prk!dC3iaqTnsY:T;X aFoS|_n#z^*g_nWz' );
define( 'LOGGED_IN_KEY',    'wMq[<USK~6;l|*#6&=b66m7V],59CQ{=eT~L[Kg Mf*1;E=/!6.lF);m%V!H~`^>' );
define( 'NONCE_KEY',        ')b3#K;`Me] hDl}X{xa/<G 5ps&d5Aq?<VuggOQPDvc;KJs%i-)ASIG}g2tJ ;jp' );
define( 'AUTH_SALT',        't5i#=dq2c1)m1`~Ia9RV`0JWVZp.,xDmsl(q@x<S&KdVXMm,xv&?Sl=x{~<+l)a@' );
define( 'SECURE_AUTH_SALT', 'j~.ZwSjkRUk+m(u>!@|u,YV7X_aA&Kn^HW9H}*v`z`6LawF_s!Q9O=F_=h0tvFV>' );
define( 'LOGGED_IN_SALT',   'H/dtd80oc+!SA#u;2YbHVp)HRD#_&uTrrG9iy+/-xxq68hA*s_?N7Rc#XpBQ7VSC' );
define( 'NONCE_SALT',       'D>ikN,>ndaM+HJ1JOwDmYxQlFu`;HjEwHU[r<|2sB{x!zY@&GS=XIOgv9M5tuHle' );

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

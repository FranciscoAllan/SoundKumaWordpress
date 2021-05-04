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
define( 'DB_NAME', 'allan_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'vxCM,%u<0;k={?%qGhuCte$7_~oZw ].w7W`}k<o@nO(ouX[(nj4rvjk(@2Ad=/V' );
define( 'SECURE_AUTH_KEY',  '5!An0.>O!)EjoCY#x4:m|m9fV_lQ/Zg2gb5R!3:-W^>{]J){b)wCTjx1,RX[qUmg' );
define( 'LOGGED_IN_KEY',    'n@d$<#9e]%WG7ie%5]vjN)}`p7!pWYxMV5#aGU3z:9X):U-X(E:S5^0}>dC`M`- ' );
define( 'NONCE_KEY',        'K`sE6+ BLi|hIzoVf%$Y{*@KAak`-05B:*32{(^H>s4lut!!7gH]u|z v{ Hy|}<' );
define( 'AUTH_SALT',        '@Kck&@GqhQDQ t!=vZ^=p;XHc#5[O{XO_Vd 87b_OZE)uIttJxiw/OQ_VOrWciN)' );
define( 'SECURE_AUTH_SALT', 'Q8L!.%DhNsO%~g=1EUqP;v:|8) 4~L)h.OI=9/l-._UB{H) P#98*D%`6e_Nn_JO' );
define( 'LOGGED_IN_SALT',   '7yazhY]dVOQKEM_k)I}(b#mXjTE],nOokg-bAj6V7A45v_+_Y!QKraYNf$8x(] w' );
define( 'NONCE_SALT',       'k!NRa0._DJd[4mJwwdW_U0jw@3-w$`;@,){6W%QY!pe-lU)T+NwZ:u!I^GrU?]I9' );

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

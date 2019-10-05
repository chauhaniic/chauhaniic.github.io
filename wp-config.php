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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_for_github' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         'o,Q)sr|r$KhN3Fd|6ltw~<FhS)5I6e$1h)B>y!r|[UOYR/l@+@BVeFsqFI$L=TWL' );
define( 'SECURE_AUTH_KEY',  'x`wz.i!p`zI*|wzOf%Q4/`_eX*zD^Xct*6v{9E.iKox5.r#Eo:!K,;Uy8D=Lu0Yz' );
define( 'LOGGED_IN_KEY',    'YuGdrr+8]XmYVusv[HJ9/frJlH~u8(%_3]U6IH0i.jVFDzPJf;4Df~GH9hA-]02-' );
define( 'NONCE_KEY',        'J}P$ix=z5`~YQL dF8t>a E:wwlof:V-XFJi}iW0Y0PH]PSwTiqp;_k1|a=;njqN' );
define( 'AUTH_SALT',        '*.,Q:<4tbh8AkYE[UXjHz7@O;>M;1Ph5!J7>.9|_WI.Uz7APzp8k2hp5b2WMAx)2' );
define( 'SECURE_AUTH_SALT', 'Dvvd5Prrt1~mP@yddgY0<jCcaE_]<E,Q?b`DPL/HkgS(B#T+V!$Uar%Ac;;ER8I[' );
define( 'LOGGED_IN_SALT',   'X)uCaVkp%0BoSm?b)@55kq<,kXii!Lv IW&;%Cnj55_]v;OF.&{@+Ae:CH{:Dv(k' );
define( 'NONCE_SALT',       'l7hVn|1$zW`R+:zE<J,b=xF=LfZ.2e)kfqUi{7ch?U+ZlR9$,9ps4aJ=Eo9)>Gmu' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

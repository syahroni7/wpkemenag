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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '45!2{r_4}G1A]mZbk6R=EJ#Ee.Rn`!Y[2L8qGcRs-Ws{wwPL5Fr8 sB@:sYElqN:' );
define( 'SECURE_AUTH_KEY',  'DAaC(>i@+gkl^8o+jWc1/0fzFz@-r=kvwg]r5Giw?;}f-S[p)gG3- glj7dd!e(q' );
define( 'LOGGED_IN_KEY',    'w^p>afch1-aRE&rf2*[ XY<bhM?;-E*VJlNsGD}UJ2[tpWBaXuD8mN{?lv6w?DrO' );
define( 'NONCE_KEY',        'PS|&U0|2x[FhtgF_z9Zs}eWG,w)6wi#i2(fGsY$%.X4tyKa5y#ZvPS}:MewNIG[,' );
define( 'AUTH_SALT',        '%w[nte6<mXSAYq2e1r-$cUt(s!n)VV/YAJbmdGXN:s{.XF3%gk:KkB~R&r2cbNa9' );
define( 'SECURE_AUTH_SALT', '~&h+f?:LnUy,kW4*KsOt%wy8YA_m~0I3y}rc2&,jEvwd.Cr2-GU+jo5)ZqsB/z/X' );
define( 'LOGGED_IN_SALT',   'zoEg.YisyIhi6{8,[b&w.v:u6^L$e$kogC!-0Y=1zU2/X71$w@TNcmj?`N8]BXtk' );
define( 'NONCE_SALT',       'wcS#>N-u;(Uvw+={zg#V6!.jG/oiGK6G^Sc7mi>hjip.]h{uU9v#maRA pd.Xv@q' );

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

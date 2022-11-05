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
define( 'DB_NAME', 'healingholistically_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Oromia2010!' );

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
define( 'AUTH_KEY',         '_Ki6~K=~?KK&n4RtS4b^}PSKCw7eG+9VI*}fEd&caN`!4bsxNt7Y.Fl^]%OJya2w' );
define( 'SECURE_AUTH_KEY',  'fn@ZI$AtI&`_EPC,L*,wA@AF.ihuf:>?;:4_HOg;-v{S3P(Ect6W]G:X?z4*haH`' );
define( 'LOGGED_IN_KEY',    'nxy7YE~5s?kl@8}_HB~#- 3rD~j:]U9Te3a~>q([ocCJ{oo8h2vn[4s*a ^7uI@]' );
define( 'NONCE_KEY',        'BynM2O)1L&5.jQq7ooE7IS>8<jz6o*bL n~ICkmTed:lkmo1>uQ!s-OA:|;RcCZv' );
define( 'AUTH_SALT',        '?d$PZeQ98nj6yBt(VP;0}N$GI_U$>YbJ96pI -:HnY^H&,@[G2RL.pIe9k~7~BLX' );
define( 'SECURE_AUTH_SALT', 'L[Y#l!RM97$)_[?29< I:_EK %zlfq=(_f^z#{|M*QhH?vX(6ni6`8YSJ_<nx|de' );
define( 'LOGGED_IN_SALT',   'a^3!(Q4 LF0%IfIeM5X:o(KwReX,-_Q^@7:u[MLUr,#jyrQ&RjeF,T;jVj$On{p:' );
define( 'NONCE_SALT',       '_u{z18LnT,LB!YLgZVY_{Hg|_%>/(o.gA<2+HUGx%tl8xvwpG]vshH%dpVLBD.KG' );

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

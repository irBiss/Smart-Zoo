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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id2884461_wp_c4593d342be745b27ab4c3100f020f50' );

/** MySQL database username */
define( 'DB_USER', 'id2884461_wp_c4593d342be745b27ab4c3100f020f50' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cfa579990a311a1efe51eb38bc61ec4c75c46076' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lQmGl -z!hvg^[;$pd}zZM`Lg;P9keFg(7YRXZ:C[s2<.o{@fYZm%`.FP6TSMioR' );
define( 'SECURE_AUTH_KEY',  'dSee}>LS^xM0_@bkM:mAO74L)cwZnZ24q/S9B]6>tnc|9c[I8ni?_Itt}K.!s~>f' );
define( 'LOGGED_IN_KEY',    'a/,+S<]!m-*sEZ8J]m~6}{o(Kn`c;%qlH;jJM3uJcSdm-q@;{!-ZM95^QZderaeY' );
define( 'NONCE_KEY',        'oZ}i>3/S8;v%}M3dl>e1*w6j9vmE~5G?B|<Q*{w[5s$1?Y-*@nXfpz##FcS]sXs~' );
define( 'AUTH_SALT',        '2E@{D]6u<@Lt</=p(c8=!_~IwMYjERfuc]*oiqM7Z^C3ryvLnDR&o@nI%Ru1!}=t' );
define( 'SECURE_AUTH_SALT', '=K9e660t)fgS~ES9Z-pFR;7>haTwNP_L.*|C0|8tX=fFpvo|oz_fk8a`7^UKJL^a' );
define( 'LOGGED_IN_SALT',   'AP-^9zUC^&[+`C<~()Y {]cLm{HNBXt>j<;c;f(7Y+M~M+ZhRV2u)h>-P5]k|W,k' );
define( 'NONCE_SALT',       's`*k>Puh&GMMlNU|J$.zt!5[c.F=I,&~4?NJ=DO2#3TwYN5vY`mZ$(wQKeV5N_4f' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

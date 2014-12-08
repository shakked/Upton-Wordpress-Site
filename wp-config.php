<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`l`bYGv#-0S);,T|z=E`Dr(u-|U).vj<`}j8qRh`,gT|S|]g)&+C*)-dn#Ywxxtg');
define('SECURE_AUTH_KEY',  'dA:`6_p0CgJ61;yifJuEx-T|5z:hjBFLNE,m}</7#T9wS{qSd4,8|=tsrw}m=Wf ');
define('LOGGED_IN_KEY',    'p[*1QPdYqtA9pJu6Vb{Sl8N+]J4;I tXrSKy=+%];a#sUb>`&<y{$CenBu.#tX]}');
define('NONCE_KEY',        '178|I;+(==]fQKy?}#I]0+:.50;(u+MYvE^wY?:a)=QzB7G[MTA^~>za1|onQST^');
define('AUTH_SALT',        '?+[m(,B)NV1I,5#@JL96RaH]d5-&zt[BIDnd&KpsTQUQYBwI_OD5gX@B%*r+@3O(');
define('SECURE_AUTH_SALT', '@{laL%tAF=G4%`bJiwunJ*W/zL<61$iiY4d20Z)od7FVtXL#T]+-oLlF[~-zz6)s');
define('LOGGED_IN_SALT',   '8u4fcZ=0awqPKRt@8EE|K(8|X|K|#Ch/K<t.W@opC1vC1UT7s.{r,E:gqAF:V2jJ');
define('NONCE_SALT',       '0a[]4bIP,O-:m*.-IXB|AWkk]4-|a|S-0)*J4 3##yQHOe&]n`cl@#y`W8n iRSM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

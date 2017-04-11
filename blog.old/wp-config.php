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
define('DB_NAME', 'staging_rondafel_com');

/** MySQL database username */
define('DB_USER', 'stagingrondafelc');

/** MySQL database password */
define('DB_PASSWORD', 'TJMaFEav');

/** MySQL hostname */
define('DB_HOST', 'mysql.staging.rondafel.com');

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
define('AUTH_KEY',         'K`F0^P!RW/VKLDR_FUQJTA@Y75mTIqPo6fGAfN#7o|56v8zb#99`vgE!NeXd_x#w');
define('SECURE_AUTH_KEY',  '/V@S/cLpRYl*I/r|l|3&ghr7/$gEMc?/VAS4vZ^Paq)W$!dRS$Gb:(BPRGxHCh|x');
define('LOGGED_IN_KEY',    'H4NOHyEdTV)xNPkFM+atD:mZ/$ENdJHW&/PisR@WLJy|;9CMJ^eIf|!uFU!zaUUY');
define('NONCE_KEY',        '_?1XggEGEaPj9|vcy5FGxL*p+U^n9q?^K:sq2KzLDDrnA659#Y~2_Y2IuXc|m/V*');
define('AUTH_SALT',        '%CRlj$GE4&VtKS2p~X3A^OLHd)6eRA2^ECf#*nWyBhI+D%)|sMM)e8`&?G*GyKp$');
define('SECURE_AUTH_SALT', 'rB+Gk+/)MQlr2l~2sMk#TcEbHRONH1tdp~oq9$%__MWNBFh:6gicjo)5h%B8;bdz');
define('LOGGED_IN_SALT',   '6v5zS!$7d+PCj!hMOj;%8MYn8oRT(Yi:I8gyOzYwF8T614jvJgWlEyM*"6Qex0zE');
define('NONCE_SALT',       '#A$h#%^_QU:U17~iA5$EfXuN#iX2YvZF(k8O~zROv6f6hI)+:OzysBJk#kN_hYb"');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_uf8rgc_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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


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

define('DB_NAME', 'gigjunkies_local');



/** MySQL database username */

define('DB_USER', 'root');



/** MySQL database password */

define('DB_PASSWORD', '');



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

define('AUTH_KEY',         'YxTc3wO5CksxdysyhScDwFyG0GKibUawn8YtSFJgbaL1fCRH8RwRUF5vHwjh6oM4');

define('SECURE_AUTH_KEY',  'S2UXj5f32Sx8D1BsXsEOwEFfC6phmbtdgoJIsmoZviWU9UbXkNZnGctRchGZnYTK');

define('LOGGED_IN_KEY',    'LgfskvdYhflygFQstZff7hCsIgKJXnNN811jwaCStXw708fPb8EX8KN68x6ywyg7');

define('NONCE_KEY',        'i9YRhUxUwh3AVbb9ewgh0UrEzn9Lgw8rjLf23KUo53iAZXBCfVtjixXteGaygYeG');

define('AUTH_SALT',        '53IcWzoxDlhSB2qhnrlgqqy7NjNFlEyHhe7D2ttyTxwyofoniakVA9UOJ6Zrb0An');

define('SECURE_AUTH_SALT', 'w2NvGsEfKIXPbQNiTuypmK3LAryoRGh0avVnsqi7A2Db4r585JYLQX05APW7LybK');

define('LOGGED_IN_SALT',   'iScBcgDBiRL7r0PRRx2eVdtqARjxyXo4GKv9GU694SAeeP1IKcw4kAzcHlsNxmzb');

define('NONCE_SALT',       'yUcF6Byl66I0Vsaglt0TM92Toj6iFvQ6B70WWd1mRsyKptKsHQAtZ6t9Zee5eTyP');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed upstream.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);





/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'ocef_';



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

define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');


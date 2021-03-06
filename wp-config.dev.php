<?php
/**
 * Local environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment
 * in this file.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0.1
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


/** MySQL database name */
define( 'DB_NAME', 'nshackathon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG', false );

// Define Development Root
define( 'WP_SITEURL', 'http://localhost/nshackathon17-project/' );
define( 'WP_HOME', 'http://localhost/nshackathon17-project/' );

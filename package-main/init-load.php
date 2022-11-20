<?php
/**
 * Defined
 */
define( 'PJ_DIR', __DIR__ );
define( 'PJ_URI', get_stylesheet_directory_uri() . '/package-main/' );
define( 'PJ_DIR_URL', get_stylesheet_directory() . '/package-main/' );
define( 'PJ_VERSION', '1.0.0' );
define( 'PJ_DEV_MODE', true ); // enable to compiler scssphp

/**
* Includes
*/
require( PJ_DIR_URL . '/post-type.php' );
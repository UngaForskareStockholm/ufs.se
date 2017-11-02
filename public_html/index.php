<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);


/** Set variable for content directory */
define('WP_CONTENT_DIR', dirname(__FILE__).'/wp-content');

/** Set variable for wordpress directory */
define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Calculate the URL for the site */
define('WP_HOME', 'https://'.$_SERVER['HTTP_HOST']);

/** Set URL's for content and wordpress install */
define('WP_CONTENT_URL', WP_HOME.'/wp-content');
define('WP_SITE_URL', WP_HOME.'/wp');


/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );

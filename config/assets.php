<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Needed assets, used by cl_enqueue_assets function.
 *
 * Dev note: the same keys for styles and scripts should stand for the same element, as they are loaded together.
 */

global $cl_uri;

return array(

	/**
	 * Each style entry contains params for wp_enqueue_style function:
	 * $handle => array( $src, $deps, $ver, $media )
	 */
	'styles' => array(
		'cl-flipbox' => array( $cl_uri . '/css/cl-flipbox.css', array(), FALSE, 'all' ),
	),
	/**
	 * Each script entry contains params for wp_enqueue_script function:
	 * $handle => array( $src, $deps, $ver, $in_footer )
	 */
	'scripts' => array(
		'cl-flipbox' => array( $cl_uri . '/js/cl-flipbox.js', array( 'jquery' ), FALSE, TRUE ),
	),

);

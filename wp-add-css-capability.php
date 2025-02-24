<?php
/*
Plugin Name: Add CSS Customizer Capability
Description: Allows site administrators to access the "Additional CSS" customizer field.
Version: 1.0.0
Author: UCF Web Communications
License: GPL3
GitHub Plugin URI: UCF/wp-add-css-capability
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

if ( ! function_exists( 'wpacc_add_user_capability' ) ) {
	/**
	 * Adds the edit_theme_options capability to
	 * site administrators.
	 *
	 * @param array $caps The currently mapped capabilities
	 * @param string $cap The specific capability being requested
	 * @param int $user_id The id of the logged in user
	 *
	 * @return array
	 */
	function wpacc_add_user_capability( $caps, $cap, $user_id ) {
		if ( 'edit_css' === $cap && user_can( $user_id, 'administrator' ) ) {
			$caps = array( 'edit_theme_options' );
		}

		return $caps;
	}

	add_filter( 'map_meta_cap', 'wpacc_add_user_capability', 10, 3 );
}

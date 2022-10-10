<?php
/**
 * Plugin Name: JetEngine - adjacent posts tags
 * Plugin URI:
 * Description: Add Elemntor Dynamic Links to get prev/next post URL/Title.
 * Version:     1.0.0
 * Author:      Crocoblock
 * Author URI:  https://crocoblock.com/
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die();
}

add_action( 'jet-engine/elementor-views/dynamic-tags/register', function( $tags_module ) {

	$plugin_path = plugin_dir_path( __FILE__ );

	require_once $plugin_path . 'tags/prev-post-link.php';
	require_once $plugin_path . 'tags/next-post-link.php';
	require_once $plugin_path . 'tags/prev-post-title.php';
	require_once $plugin_path . 'tags/next-post-title.php';

	$tags_module->register_tag( new JE_Adjacent_Post_Prev_URL() );
	$tags_module->register_tag( new JE_Adjacent_Post_Next_URL() );
	$tags_module->register_tag( new JE_Adjacent_Post_Prev_Title() );
	$tags_module->register_tag( new JE_Adjacent_Post_Next_Title() );

} );

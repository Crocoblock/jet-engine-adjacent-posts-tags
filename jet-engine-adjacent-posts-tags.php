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

define( 'JE_ADJACENT_POST_TAGS_PATH', plugin_dir_path( __FILE__ ) );

add_action( 'jet-engine/elementor-views/dynamic-tags/register', function( $tags_module ) {

	require_once JE_ADJACENT_POST_TAGS_PATH . 'tags/prev-post-link.php';
	require_once JE_ADJACENT_POST_TAGS_PATH . 'tags/next-post-link.php';
	require_once JE_ADJACENT_POST_TAGS_PATH . 'tags/prev-post-title.php';
	require_once JE_ADJACENT_POST_TAGS_PATH . 'tags/next-post-title.php';

	$tags_module->register_tag( new JE_Adjacent_Post_Prev_URL() );
	$tags_module->register_tag( new JE_Adjacent_Post_Next_URL() );
	$tags_module->register_tag( new JE_Adjacent_Post_Prev_Title() );
	$tags_module->register_tag( new JE_Adjacent_Post_Next_Title() );

} );

add_action( 'jet-engine/register-macros', function() {
	
	require_once JE_ADJACENT_POST_TAGS_PATH . 'macros/prev-post-id.php';
	require_once JE_ADJACENT_POST_TAGS_PATH . 'macros/next-post-id.php';
	require_once JE_ADJACENT_POST_TAGS_PATH . 'macros/adjacent-posts-ids.php';

	new JE_Adjacent_Post_Prev_ID_Macros();
	new JE_Adjacent_Post_Next_ID_Macros();
	new JE_Adjacent_Post_IDs_Macros();

} );

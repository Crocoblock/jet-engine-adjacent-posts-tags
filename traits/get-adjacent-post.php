<?php
/**
 * Trait to use bounded parent -> child data class notices system
 */

trait JE_Adjacent_Post_Get_Trait {

	public function get_adjacent_post( bool $is_prev = true ) {

		$current_object = jet_engine()->listings->data->get_current_object();

		if ( 'WP_Post' !== get_class( $current_object ) ) {
			global $post;
			$current_object = $post;
		}

		if ( ! $current_object || 'WP_Post' !== get_class( $current_object ) ) {
			return false;
		}

		$in_same_term = false;
		$taxonomy     = apply_filters( 'jet-engine-adjacent-post/taxonomy', false, $current_object, $this );

		if ( $taxonomy ) {
			$in_same_term = true;
		}

		if ( ! $taxonomy ) {
			$taxonomy = 'category';
		}

		$adjacent_post = get_adjacent_post( $in_same_term, '', $is_prev, $taxonomy );

		if ( ! $adjacent_post ) {
			return false;
		}

		return $adjacent_post;

	}

}

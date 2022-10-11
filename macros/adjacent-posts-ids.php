<?php
/**
 * Required methods:
 * macros_tag()  - here you need to set macros tag for JetEngine core
 * macros_name() - here you need to set human-readable macros name for different UIs where macros are available
 * macros_callback() - the main function of the macros. Returns the value
 * macros_args() - Optional, arguments list for the macros. Arguments format is the same ad for Elementor controls
 */
class JE_Adjacent_Post_IDs_Macros extends JE_Adjacent_Post_Prev_ID_Macros {

	/**
	 * Returns macros tag
	 *
	 * @return string
	 */
	public function macros_tag() {
		return 'je_adjacent_posts_ids';
	}

	/**
	 * Returns macros name
	 *
	 * @return string
	 */
	public function macros_name() {
		return 'Adjacent Posts IDs';
	}

	/**
	 * Callback function to return macros value
	 *
	 * @return string
	 */
	public function macros_callback( $args = array() ) {
		
		$tax_slug     = ! empty( $args['tax_slug'] ) ? $args['tax_slug'] : '';
		$property     = ! empty( $args['property'] ) ? $args['property'] : '';
		$in_same_term = false;

		if ( 0 == $tax_slug ) {
			$tax_slug = false;
		}

		if ( $tax_slug ) {
			$in_same_term = true;
		} else {
			$tax_slug = 'category';
		}

		$prev_post = get_adjacent_post( $in_same_term, '', true, $tax_slug );
		$next_post = get_adjacent_post( $in_same_term, '', false, $tax_slug );

		$result = [];

		if ( $prev_post ) {
			if ( ! $property || ! isset( $prev_post->$property ) ) {
				$result[] = $prev_post->ID;
			} else {
				$result[] = $prev_post->$property;
			}
		}

		if ( $next_post ) {
			if ( ! $property || ! isset( $next_post->$property ) ) {
				$result[] = $next_post->ID;
			} else {
				$result[] = $next_post->$property;
			}
		}

		if ( empty( $result ) ) {
			return false;
		}

		return implode( ',', $result );

	}

}

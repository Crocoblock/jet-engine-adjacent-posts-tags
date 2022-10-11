<?php
/**
 * Required methods:
 * macros_tag()  - here you need to set macros tag for JetEngine core
 * macros_name() - here you need to set human-readable macros name for different UIs where macros are available
 * macros_callback() - the main function of the macros. Returns the value
 * macros_args() - Optional, arguments list for the macros. Arguments format is the same ad for Elementor controls
 */
class JE_Adjacent_Post_Prev_ID_Macros extends Jet_Engine_Base_Macros {

	/**
	 * Returns macros tag
	 *
	 * @return string
	 */
	public function macros_tag() {
		return 'je_adjacent_prev_post_id';
	}

	/**
	 * Returns macros name
	 *
	 * @return string
	 */
	public function macros_name() {
		return 'Prev Post ID';
	}

	public function is_prev_post() {
		return true;
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

		$adjacent_post = get_adjacent_post( $in_same_term, '', $this->is_prev_post(), $tax_slug );

		if ( ! $adjacent_post ) {
			return false;
		}

		if ( ! $property || ! isset( $adjacent_post->$property ) ) {
			return $adjacent_post->ID;
		} else {
			return $adjacent_post->$property;
		}

	}

	/**
	 * Optionally return custom macros attributes array
	 *
	 * @return array
	 */
	public function macros_args() {
		return array(
			'tax_slug' => array(
				'label'   => 'Taxonomy Slug',
				'type'    => 'text',
				'default' => '',
			),
			'property' => array(
				'label'   => 'Return Property (by default is ID)',
				'type'    => 'text',
				'default' => '',
			),
		);
	}

}
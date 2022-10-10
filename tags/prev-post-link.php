<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class JE_Adjacent_Post_Prev_URL extends \Elementor\Core\DynamicTags\Data_Tag {

	public function get_name() {
		return 'je-adjacent-post-prev-url';
	}

	public function get_title() {
		return 'Prev Post URL';
	}

	public function get_group() {
		return \Jet_Engine_Dynamic_Tags_Module::JET_GROUP;
	}

	public function get_categories() {
		return array(
			\Jet_Engine_Dynamic_Tags_Module::TEXT_CATEGORY,
			\Jet_Engine_Dynamic_Tags_Module::URL_CATEGORY,
			\Jet_Engine_Dynamic_Tags_Module::POST_META_CATEGORY,
		);
	}

	public function is_settings_required() {
		return true;
	}

	protected function register_controls() {

		$this->add_control(
			'tax_slug',
			array(
				'label'       => 'Taxonomy Slug',
				'type'        => \Elementor\Controls_Manager::TEXT,
				'description' => 'Add taxonomy slug to search adjacent post in the same term of this taxonomy',
			)
		);

	}

	public function is_prev_post() {
		return true;
	}

	public function get_value( array $options = array() ) {

		$tax_slug     = $this->get_settings( 'tax_slug' );
		$in_same_term = false;

		if ( $tax_slug ) {
			$in_same_term = true;
		} else {
			$tax_slug = 'category';
		}

		var_dump( $tax_slug );

		$adjacent_post = get_adjacent_post( $in_same_term, '', $this->is_prev_post(), $tax_slug );

		if ( ! $adjacent_post ) {
			return '';
		}

		return get_permalink( $adjacent_post->ID );
		
	}

}

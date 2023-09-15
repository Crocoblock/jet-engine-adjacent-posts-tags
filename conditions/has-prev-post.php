<?php
class JE_Adjacent_Post_Has_Prev extends \Jet_Engine\Modules\Dynamic_Visibility\Conditions\Base {

	use JE_Adjacent_Post_Get_Trait;

	/**
	 * Returns condition ID
	 *
	 * @return string
	 */
	public function get_id() {
		return 'jet-has-prev-post';
	}

	/**
	 * Returns condition name
	 *
	 * @return string
	 */
	public function get_name() {
		return __( 'Has Previous Post', 'jet-engine' );
	}

	/**
	 * Returns group for current operator
	 *
	 * @return [type] [description]
	 */
	public function get_group() {
		return 'posts';
	}

	/**
	 * We need to get previoous post or not
	 * @return boolean [description]
	 */
	public function is_prev_post() {
		return true;
	}

	/**
	 * Check condition by passed arguments
	 *
	 * @param  array $args
	 * @return bool
	 */
	public function check( $args = array() ) {

		$type = ! empty( $args['type'] ) ? $args['type'] : 'show';
		$post = $this->get_adjacent_post( $this->is_prev_post() );

		if ( 'hide' === $type ) {
			return empty( $post );
		} else {
			return ! empty( $post );
		}

	}

	/**
	 * Check if is condition available for meta fields control
	 *
	 * @return boolean
	 */
	public function is_for_fields() {
		return false;
	}

	/**
	 * Check if is condition available for meta value control
	 *
	 * @return boolean
	 */
	public function need_value_detect() {
		return false;
	}

}

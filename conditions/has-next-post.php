<?php
class JE_Adjacent_Post_Has_Next extends JE_Adjacent_Post_Has_Prev {

	/**
	 * Returns condition ID
	 *
	 * @return string
	 */
	public function get_id() {
		return 'jet-has-next-post';
	}

	/**
	 * Returns condition name
	 *
	 * @return string
	 */
	public function get_name() {
		return __( 'Has Next Post', 'jet-engine' );
	}

	/**
	 * We need to get previoous post or not
	 * @return boolean [description]
	 */
	public function is_prev_post() {
		return false;
	}

}

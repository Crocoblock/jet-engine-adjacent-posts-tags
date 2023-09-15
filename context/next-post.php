<?php
/**
 * Prev post context
 */
class JE_Adjacent_Post_Next_Context extends JE_Adjacent_Post_Prev_Context {

	/**
	 * Context slug
	 * 
	 * @return [type] [description]
	 */
	public function slug() {
		return 'je-next-post';
	}

	/**
	 * Context label
	 * 
	 * @return [type] [description]
	 */
	public function label() {
		return 'Next Post Object';
	}
	
	/**
	 * We need to get previoous post or not
	 * @return boolean [description]
	 */
	public function is_prev_post() {
		return false;
	}

}

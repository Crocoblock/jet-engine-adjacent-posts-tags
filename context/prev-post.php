<?php
/**
 * Prev post context
 */
class JE_Adjacent_Post_Prev_Context {

	use JE_Adjacent_Post_Get_Trait;

	public function __construct() {

		add_filter( 'jet-engine/listings/allowed-context-list', [ $this, 'register_context' ] );
		add_filter( 'jet-engine/listings/data/object-by-context/' . $this->slug(), [ $this, 'apply_context' ] );

	}

	/**
	 * Context slug
	 * 
	 * @return [type] [description]
	 */
	public function slug() {
		return 'je-prev-post';
	}

	/**
	 * Context label
	 * 
	 * @return [type] [description]
	 */
	public function label() {
		return 'Previous Post Object';
	}

	/**
	 * Adds new context to allowed context list
	 * 
	 * @param  array  $context_list [description]
	 * @return [type]               [description]
	 */
	public function register_context( array $context_list = [] ) : array {
		$context_list[ $this->slug() ] = $this->label();
		return $context_list;
	}

	/**
	 * We need to get previoous post or not
	 * @return boolean [description]
	 */
	public function is_prev_post() {
		return true;
	}

	public function apply_context() {
		return $this->get_adjacent_post( $this->is_prev_post() );
	}

}

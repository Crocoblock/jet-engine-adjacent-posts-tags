<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class JE_Adjacent_Post_Next_URL extends JE_Adjacent_Post_Prev_URL {

	public function get_name() {
		return 'je-adjacent-post-next-url';
	}

	public function get_title() {
		return 'Next Post URL';
	}

	public function is_prev_post() {
		return false;
	}

}

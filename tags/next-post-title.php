<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class JE_Adjacent_Post_Next_Title extends JE_Adjacent_Post_Prev_Title {

	public function get_name() {
		return 'je-adjacent-post-next-title';
	}

	public function get_title() {
		return 'Next Post Title';
	}

	public function is_prev_post() {
		return false;
	}

}

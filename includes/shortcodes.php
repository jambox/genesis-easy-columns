<?php
	//Turn editor auto format off
	remove_filter( 'the_content', 'wpautop' );
	
	//Column Shortcodes
	
	function gc_one_half_first($atts, $content = null ) {
	return '<div class="one-half first">'.$content.'</div>';
	}
	add_shortcode("one-half-first","gc_one_half_first");

	function gc_one_half($atts, $content = null) {
	return '<div class="one-half">'.$content.'</div>';
	}
	add_shortcode('one-half','gc_one_half');

	function gc_one_third_first($atts, $content = null) {
	return '<div class="one-third first">' .$content. '</div>';
	}
	add_shortcode("one-third-first","gc_one_third_first");

	function gc_one_third($atts, $content = null) {
	return '<div class="one-third">' .$content. '</div>';
		}
	add_shortcode('one-third','gc_one_third');

	function gc_one_fourth_first($atts, $content = null) {
	return '<div class="one-fourth first">' .$content. '</div>';
	}
	add_shortcode("one-fourth-first","gc_one_fourth_first");

	function gc_one_fourth($atts, $content = null) {
	return '<div class="one-fourth">' .$content. '</div>';
	}
	add_shortcode('one-fourth','gc_one_fourth');

	function gc_one_fifth_first($atts, $content = null) {
	return '<div class="one-fifth first">' .$content. '</div>';
	}
	add_shortcode("one-fifth-first","gc_one_fifth_first");

	function gc_one_fifth($atts, $content = null) {
	return '<div class="one-fifth">' .$content. '</div>';
	}
	add_shortcode('one-fifth','gc_one_fifth');

	function gc_one_sixth_first($atts, $content = null) {
	return '<div class="one-sixth first">' .$content. '</div>';
	}
	add_shortcode("one-sixth-first","gc_one_sixth_first");

	function gc_one_sixth($atts, $content = null) {
	return '<div class="one-sixth">' .$content. '</div>';
	}
	add_shortcode('one-sixth','gc_one_sixth');

	//Turn auto format back on
	add_filter( 'the_content', 'wpautop' , 12);
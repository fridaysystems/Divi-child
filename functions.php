<?php
defined( 'ABSPATH' ) || exit;

add_action( 'et_builder_ready', 'divi_child_custom_blog_module' );
/**
 * divi_child_custom_blog_module
 *
 * @return void
 */
function divi_child_custom_blog_module() {
	get_template_part( 'includes/builder/module/Blog' );
	$dcfm = new Divi_Child_ET_Builder_Module_Blog();
	remove_shortcode( 'et_pb_blog' );
	add_shortcode( 'et_pb_blog', array( $dcfm, '_shortcode_callback' ) );
}

add_filter( 'et_module_classes', 'divi_child_custom_blog_class' );
/**
 * divi_child_custom_blog_class
 *
 * @param  array $classlist
 * @return array
 */
function divi_child_custom_blog_class( $classlist ) {
	// Blog Module 'classname' overwrite.
	$classlist['et_pb_blog'] = array( 'classname' => 'Divi_Child_ET_Builder_Module_Blog' );
	return $classlist;
}

<?php

/* เพิ่ม style bootstrap 4 cdn */
function modify_stylebootstrapcdn() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_style('bootstrapcdncss');
		wp_register_style('bootstrapcdncss', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false, '3.3.1');
		wp_enqueue_style('bootstrapcdncss');
	}
}
add_action('init', 'modify_stylebootstrapcdn');
/* เพิ่ม jquery cdn jquery-3.2.1.slim.min.js */
function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, '3.3.1');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');

/* เพิ่ม jquery cdn popper */
function modify_jquery2() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquerypopper');
		wp_register_script('jquerypopper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, '3.3.1');
		wp_enqueue_script('jquerypopper');
	}
}
add_action('init', 'modify_jquery2');

/* เพิ่ม jquery cdn bootstrap.min */
function modify_jquery3() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquerybootstrapmin');
		wp_register_script('jquerybootstrapmin', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', false, '3.3.1');
		wp_enqueue_script('jquerybootstrapmin');
	}
}
add_action('init', 'modify_jquery3');



function awesome_script_enqueue() {

wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
wp_enqueue_script('customjsmain', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '1.0.0', true);

/* As a function adding files css */
/* As a function adding files js */

}

 add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');
 /* wordpress action wp_enqueue_scripts adding files */


/* function to add menu  */
function awesome_theme_setup(){
/* add menu to leftsidebar */  add_theme_support('menus');
/* add a new menu to the new position below the wordpress */  register_nav_menu('primary','Primary Header Navigation');
/* adds a second menu to the footer */  register_nav_menu('secondary','Footer Navigation');
register_nav_menus(array('menu-three'=>__('menu-three')));/*  add menu array */

}

add_action('init','awesome_theme_setup');
/* init is a function to add a menu   */
/* custom-background */
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => 'repeat',
	'default-position-x'     => 'left',
        'default-position-y'     => 'top',
        'default-size'           => 'auto',
	'default-attachment'     => 'scroll',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


 /* add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

function my_post_image_html( $html, $post_id, $post_image_id ) {

  $html = '<a href="' . get_permalink( $post_id ) .'target="_blank">' . $html . '</a>';
  return $html;

}
*/

/* custom-background */
add_theme_support('custom-header');
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
add_theme_support('post-formats',array('aside','image','video'));

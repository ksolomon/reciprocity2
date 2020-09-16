<?php
/*
	Solo-Frame Widgets Functions

	This file is a part of the Solo-Frame WordPress theme framework.
*/

function sf_register_widgets() {
	register_sidebar(array(
		'name'=>'Primary Sidebar',
		'id' => 'primary',
		'description' => 'Sidebar widget area for regular pages.',
		'before_widget' => '<div class="widgetblock %2$s" id="%1$s" >',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Footer Column 1',
		'id' => 'footcol_1',
		'description' => 'Footer Column 1',
		'before_widget' => '<div class="widgetblock %2$s" id="%1$s" >',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Footer Column 2',
		'id' => 'footcol_2',
		'description' => 'Footer Column 2',
		'before_widget' => '<div class="widgetblock %2$s" id="%1$s" >',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Footer Column 3',
		'id' => 'footcol_3',
		'description' => 'Footer Column 3',
		'before_widget' => '<div class="widgetblock %2$s" id="%1$s" >',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
}

add_action('init', 'sf_register_widgets');
?>
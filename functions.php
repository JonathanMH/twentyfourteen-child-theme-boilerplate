<?php

function load_child_style(){
	wp_register_style('twentyfourteen-my-colour', get_stylesheet_directory_uri() . '/dist/css/main.css');
	wp_enqueue_style('twentyfourteen-my-colour');
}

if (!is_admin()) {
	add_action('wp_enqueue_scripts', load_child_style());
}

if (is_admin()) {
	add_editor_style('/dist/css/adminEditor.css');
}

?>

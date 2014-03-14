<?php

function load_child_style(){
	wp_register_style('vzb', get_stylesheet_directory_uri() . '/dist/css/main.css');
	wp_enqueue_style('vzb');
}

if (!is_admin()) {
	add_action('wp_enqueue_scripts', load_child_style());
}

?>

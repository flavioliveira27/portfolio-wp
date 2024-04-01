<?php

function addCssEscript(){

    wp_enqueue_style('google', '//fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap', array(), null);
    wp_enqueue_style('fontawesomecss', get_template_directory_uri() . '/assets/css/all.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/styles.css');
	wp_enqueue_script('fontawesomejs', get_template_directory_uri() . '/assets/js/all.min.js', array(), '1.0', true);
    wp_enqueue_script('email', get_template_directory_uri() . '/assets/js/email.min.js', array(), '1.0', true);
	wp_enqueue_script('scrollreveal', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array(), '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('scrollreveal', 'email'), '1.0', true);
	
}

add_action('wp_enqueue_scripts', 'addCssEscript');

?>
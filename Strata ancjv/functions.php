<?php

function load_stylesheets()

{

	wp_register_style('styles', get_template_directory_uri() . 'assets/css/main.css', array(), 1, 'all');
	wp_enqueue_style('styles');









}
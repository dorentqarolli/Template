<?php


function load_stylesheets()
{


		wp_register_style('stylesheet', get_template_directory_uri() . '/css/bootstrap.mincss', array(), false, 'all');
		wp_enqueue_style('stylesheet');


}
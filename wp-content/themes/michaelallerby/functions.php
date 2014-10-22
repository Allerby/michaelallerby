<?php

//Add Theme support for Post Thumbnails
add_theme_support( 'post-thumbnails' );

// Add Theme support for Post Formats
add_theme_support( 'post-formats', array('gallery', 'link', 'image', 'quote', 'video'));

function thref($extra = null) {
	return get_stylesheet_directory_uri().$extra;
}

function michaelallerby_scripts() {
	$url = get_template_directory_uri();

	// Styles
	wp_enqueue_style('style', $url . '/style.css');
	wp_enqueue_style('animate-css', $url . '/css/animate.css');
	wp_enqueue_style('flexslider', $url . '/css/flexslider.css');
	wp_enqueue_style('bootstrap', $url . '/css/bootstrap.min.css');
	wp_enqueue_style('queries', $url . '/css/queries.css');
	wp_enqueue_style('ionicons', 'http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css');

	// Javascript
	wp_deregister_script('jquery');
	// wp_enqueue_script('jquery', $url . '/js/jquery.js', array(), '1.9.1', true);
	wp_enqueue_script('waypoint', $url . '/js/waypoints.min.js', true);
	wp_enqueue_script('boostrap-js', $url . '/js/bootstrap.min.js', true);
	wp_enqueue_script('jquery-flexslider', $url . '/js/jquery.flexslider.js', true);
	wp_enqueue_script('modernizr', $url . '/js/modernizr.js', true);
	wp_enqueue_script(
		'script',
		$url . '/js/script.js',
		array(
			'jquery',
			'waypoint',
			'boostrap-js',
			'jquery-flexslider',
			'modernizr'
		),
		'4.0',
		true
		);
	wp_enqueue_script('custom', $url . '/js/script.js');

}
add_action('wp_enqueue_scripts', 'michaelallerby_scripts');

function standard_page() {
	while(has_sub_field('content')) {
	    $rowLayout = get_row_layout();
		switch($rowLayout) {
			case 'contact_section':
			    include('content/contact.php');
			    break;
			case 'features_section':
			    include('content/features.php');
			    break;
			case 'get_in_contact_section':
				include('content/get-in-contact.php');
				break;
			case 'hero_section':
				include('content/hero.php');
				break;
			case 'portfolio_section':
				include('content/portfolio.php');
				break;
			case 'responsive_section':
				include('content/responsive.php');
				break;
			case 'single_button_section':
				include('content/single-button.php');
				break;
			case 'standard_text_section':
				include('content/standard-text.php');
				break;
			case 'swag_section':
				include('content/swag.php');
				break;
			case 'team_section':
				include('content/team.php');
				break;
		}
	}
}

  //Custom login css
// function my_login_stylesheet() {
//   wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/login/login-styles.css' );
// }
// add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

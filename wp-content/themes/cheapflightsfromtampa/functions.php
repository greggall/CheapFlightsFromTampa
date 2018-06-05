<?php

// Enqueue Google Fonts
function mytheme_dequeue_fonts() {

	 wp_enqueue_style( 'Nunito' , 'https://fonts.googleapis.com/css?family=Nunito:400,900' );
	 wp_enqueue_style( 'Nunito Sans' , 'https://fonts.googleapis.com/css?family=Nunito+Sans:400,700,900' );	 
}

add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_fonts', 11 );

// Enable Bootstrap jQuery
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap-sass-3.3.4/assets/javascripts/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

//Register our sidebars and widgetized areas.
function cheapflightsfromtampa_widgets_init() {

	register_sidebar( array(
		'name'          => 'Single Deal Post Sidebar',
		'id'            => 'single_deal_post_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="deal-sidebar-title"><span>',
		'after_title'   => '</span></h3>',
	) );

}
add_action( 'widgets_init', 'cheapflightsfromtampa_widgets_init' );

// Gotta have featured images!
add_theme_support( 'post-thumbnails', array( 'post', 'portfolio', 'background', 'page', 'blog_posts' ) );

// Adding your own custom JS file
function website_functionname() {
	if (!is_admin()) {
		wp_register_script('template.js', get_template_directory_uri() . '/js/template.js', array('jquery') );
		wp_enqueue_script('template.js');
		wp_register_script('ddexitpop.js', get_template_directory_uri() . '/js/ddexitpop.js', array('jquery') );
		wp_enqueue_script('ddexitpop.js');
		
	}
}
add_action('init', 'website_functionname');

/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function example_add_dashboard_widgets() {

	wp_add_dashboard_widget(
                 'example_dashboard_widget',         // Widget slug.
                 'Premium City List',         // Title.
                 'example_dashboard_widget_function' // Display function.
        );	
}
add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function example_dashboard_widget_function() {

	// Display whatever it is you want to show.
	echo "Hello World, I'm a great Dashboard Widget";
	echo do_shortcode( '[mepr-account-info field="mepr_city"]' );
}

// Add Image sizes
add_image_size( 'thumb-name', 100, 100, true );

// Register menus
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
			'legal-menu' => __( 'Legal Menu' ),			
		)
	);
}
add_action( 'init', 'register_my_menus' );

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

// Add Footer Options page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Other Content',
		'menu_title'	=> 'Other Content',
		'menu_slug' 	=> 'other-content',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// Add Single Deal Post Funnel Options page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Single Deal Post Funnel',
		'menu_title'	=> 'Single Deal Post Funnel',
		'menu_slug' 	=> 'single-deal-post-funnel',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// Remove url and email fields from comments form
function alter_comment_form_fields($fields){
    $fields['email'] = '';  //removes email field
    $fields['url'] = '';  //removes website field
    return $fields;
}
add_filter('comment_form_default_fields','alter_comment_form_fields');

// Breadcrumb
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &nbsp;&nbsp;&#187;&nbsp;&nbsp; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

/* Defer Javascript parsing code breaks Advanced Custom Fields Plugin */

/*Defer parsing of Javascript
function defer_parsing_of_js ( $url ) {
if ( FALSE === strpos( $url, '.js' ) ) return $url;
if ( strpos( $url, 'jquery.js' ) ) return $url;
return "$url' defer ";
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
	*/
?>

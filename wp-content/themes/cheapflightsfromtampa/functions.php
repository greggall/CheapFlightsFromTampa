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
	
	register_sidebar( array(
		'name'          => 'Single Blog Post Sidebar',
		'id'            => 'single_blog_post_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="deal-sidebar-title"><span>',
		'after_title'   => '</span></h3>',
	) );

}
add_action( 'widgets_init', 'cheapflightsfromtampa_widgets_init' );

// Gotta have featured images!
add_theme_support( 'post-thumbnails', array( 'post', 'portfolio', 'background', 'page', 'recent_deal' ) );

// Add image size for blog posts
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
	add_image_size('blog-post', 600, 372, true);
	add_image_size('related-post', 300, 600, true);
}


// Adding your own custom JS file
function website_functionname() {
	if (!is_admin()) {
		wp_register_script('template.js', get_template_directory_uri() . '/js/template.js', array('jquery') );
		wp_enqueue_script('template.js');
	}
}
add_action('init', 'website_functionname');

// Add exit pop up js to premium page
/*
function exitpopup() {
    if ( is_single() || is_page('premium') ) {	        
   		wp_register_script('ddexitpop.js', get_template_directory_uri() . '/js/ddexitpop.js', array('jquery') );
   		wp_enqueue_script('ddexitpop.js');
	}	
}
add_action( 'wp_enqueue_scripts', 'exitpopup' );
*/

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

// Add Exit Popup Options page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Exit Popup',
		'menu_title'	=> 'Exit Popup',
		'menu_slug' 	=> 'exit-popup',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// Add Notification Bar Options page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Notification Bar',
		'menu_title'	=> 'Notification Bar',
		'menu_slug' 	=> 'notification-bar',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// Remove url and email fields from comments form


// Breadcrumb
function the_breadcrumb() {
		echo '<ul class="crumbs">';
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a></li>";
		if (is_category() || is_single()) {
			echo '<li>';
			the_category(' </li><li> ');
			if (is_single()) {
				echo "</li><li>";
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			echo '<li>';
			echo the_title();
			echo '</li>';
		}
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	echo '</ul>';
}

// Ajax Load More 
add_action( 'wp_enqueue_scripts', 'misha_script_and_styles');
function misha_script_and_styles() {
	// absolutely need it, because we will get $wp_query->query_vars and $wp_query->max_num_pages from it.
	global $wp_query;
 
	// when you use wp_localize_script(), do not enqueue the target script immediately
	wp_register_script( 'misha_scripts', get_stylesheet_directory_uri() . '/script.js', array('jquery') );
 
	// passing parameters here
	// actually the <script> tag will be created and the object "misha_loadmore_params" will be inside it 
	wp_localize_script( 'misha_scripts', 'misha_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'misha_scripts' );
}


add_action('wp_ajax_loadmorebutton', 'misha_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmorebutton', 'misha_loadmore_ajax_handler');
 
function misha_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$params = json_decode( stripslashes( $_POST['query'] ), true ); // query_posts() takes care of the necessary sanitization 
	$params['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$params['post_status'] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $params );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
			get_template_part( 'template-parts/post/content', get_post_format() );
			// for the test purposes comment the line above and uncomment the below one
			// the_title();
 
 
		endwhile;
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 

add_action('wp_ajax_mishafilter', 'misha_filter_function'); 
add_action('wp_ajax_nopriv_mishafilter', 'misha_filter_function');
 
function misha_filter_function(){
	
	// for taxonomies / categories
		if( isset( $_POST['categoryfilter'] ) )
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'category',
					'field' => 'id',
					'terms' => $_POST['categoryfilter']
				)
			);
 
 
	query_posts( $args );
 
	global $wp_query;
 
	if( have_posts() ) :
 
 		ob_start(); // start buffering because we do not need to print the posts now
 
		while( have_posts() ): the_post();
 
			// adapted for Twenty Seventeen theme
			get_template_part( 'template-parts/post/content', get_post_format() );
 
		endwhile;
 
 		$posts_html = ob_get_contents(); // we pass the posts to variable
   		ob_end_clean(); // clear the buffer
	else:
		$posts_html = '<p>Nothing found for your criteria.</p>';
	endif;
 
	// no wp_reset_query() required
 
 	echo json_encode( array(
		'posts' => json_encode( $wp_query->query_vars ),
		'max_page' => $wp_query->max_num_pages,
		'found_posts' => $wp_query->found_posts,
		'content' => $posts_html
	) );
 
	die();
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

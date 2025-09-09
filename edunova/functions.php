<?php
/* Import */
	require_once('meta/home-slider.php');
	require_once('meta/home-services.php');
	require_once('meta/home-verification.php');
	require_once('meta/home-test.php');
	require_once('meta/about-text.php');
	require_once('meta/subs-text.php');
	require_once('meta/contact-gmap.php');
	require_once('meta/info-post-meta.php');
	require_once('meta/course-post-meta.php');
	require_once('meta/language-post-meta.php');
	require_once('meta/course-mentor-meta.php');		require_once('meta/course-profesors-meta.php');
	require_once('wp_bootstrap_navwalker.php');
	require_once('customizr/edunova-customizr.php');
/* END Import */
/* Enqueue scripts and styles for the front end. */
	function edunova_scripts() {	
		wp_enqueue_style('edunova-style', get_stylesheet_uri());
		wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '', true);
	}
add_action('wp_enqueue_scripts', 'edunova_scripts');
/* END Enqueue scripts and styles for the front end. */
/* Edunova Menus */
	function edunova_menu() {
		register_nav_menus(array(
			'main_nav' => __('Glavni Izbornik', 'edunova')
		));
	}
	add_action('init', 'edunova_menu');
/* END Edunova Menus */
/* WebPage Title Fix */
function wp_title_fix($title)
{
	if( empty($title) && (is_home() || is_front_page())) {
		return __(the_title(), 'theme_domain');
	}
	return $title;
}
add_filter( 'wp_title', 'wp_title_fix' );
/* END WebPage Title Fix */
/* Excerpt Length Fix */
function get_the_seminars_excerpt(){
	$excerpt = get_the_excerpt();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 120);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = $excerpt.'...';
	return $excerpt;
}
function edunova_excerpt_length($length) {
	return 34;
}
function edunova_excerpt_end($more) {
	return '...';
}
add_filter( 'excerpt_length', 'edunova_excerpt_length', 999 );
add_filter( 'excerpt_more', 'edunova_excerpt_end');
/* END Excerpt Length Fix */
/* Excerpt Page Fix */
function edunova_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'edunova_excerpts_to_pages' );
/* END Excerpt Page Fix */
/* Register Support for Wordpress Features */
if ( ! function_exists( 'edunova_setup' ) ) :
	function edunova_setup() {
		/* Support for Featured Image */
			add_theme_support( 'post-thumbnails' );
			add_image_size('post-list', 610, 386, array('center', 'center'));
		/* Support for HTML5 Output */
			add_theme_support('html5', array('search-form', 'gallery', 'caption'));
		/* Support for Post Types */
			add_theme_support( 'post-formats', array('status'));
	}
endif;
add_action( 'after_setup_theme', 'edunova_setup' );
/* END Register Support for Wordpress Features */
/* Edunova Special Featured Image Meta Box */
/* function edunova_featured_image_meta($content) {
    global $post;
    $text = __('<span style="display: inline-block; margin-top: 5px; font-style: italic;">Slika mora biti proporcionalna. Minimalna veličina slike treba iznositi 856x386 piksela. </span>', 'edunova');
    return $content .= $text;
}
add_filter( 'admin_post_thumbnail_html', 'edunova_featured_image_meta' ); */
/* END Edunova Special Featured Image Meta Box */
/* Show only Posts in Search Results */
function edunova_search_filter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','edunova_search_filter');
/* END Show only Posts in Search Results */
/* Shortcodes */
function edunova_orange_text($atts, $content = '') {
	return '<span style=\"color: #E67A20;\">' . $content . '</span>';
}
add_shortcode('nova', 'edunova_orange_text');
function edunova_blue_text($atts, $content = '') {
	return '<span style="color: #144F71;"> ' . $content . ' </span>';
}
add_shortcode('edu', 'edunova_blue_text');
function edunova_visit_text($atts) {
	return '<p style="margin-top: 10px; color: #144f71; display: inline-block; width: 100%; font-weight: bold;"> POSJETITE NAS </p> 
	<p style="font-weight: bold;"> Želiš vidjeti kako radimo i kakva je atmosfera na predavanjima u Osijeku? Pogledaj raspored predavanja za smjer koji te zanima i gostuj na predavanju! </p>';
}
add_shortcode('posjet', 'edunova_visit_text');
function edunova_col1($atts, $content = '') {
	return '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="col1">' . $content . '</div>';
}
add_shortcode('col1', 'edunova_col1');
function edunova_col2($atts, $content = '') {
	return '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="col2">' . $content . '</div>';
}
add_shortcode('col2', 'edunova_col2');
/* END Shortcodes */
/* Add Tags to Pages */
function edunova_page_tags() {
	register_taxonomy_for_object_type('post_tag', 'page');
}
function edunova_tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}
add_action('init', 'edunova_page_tags');
add_action('pre_get_posts', 'edunova_tags_support_query');
/* END Add Tags to Pages */
/* Edunova Page Navigation Fix */
function relative_value_array($array, $current_val = '', $offset = 1) {
    $values = array_values($array);
    $current_val_index = array_search($current_val, $values);

    if(isset($values[$current_val_index + $offset])) {
        return $values[$current_val_index + $offset];
    }
    return false;
};

/* Previous Page */
function edunova_prev_page_link() {
    global $post;
    if (isset($post->post_parent) && $post->post_parent > 0) {
        $children = get_pages('&sort_column=post_date&sort_order=asc&child_of='.$post->post_parent.'&parent='.$post->post_parent);
    };
	
/* Children ID in Arrays */
    foreach($children as $child) {$child_id_array[] = $child->ID;}
    $prev_page_id = relative_value_array($child_id_array, $post->ID, -1);
    $output = '';

    if('' != $prev_page_id) {
        $output .= '<a href="' . get_page_link($prev_page_id) . '"><span class="btn btn-default">'. get_the_title($prev_page_id) . ' &nbsp;<span class="glyphicon glyphicon-chevron-right"></span></span></a>';
    }
    return $output;
};

/* Next Page */
function edunova_next_page_link() {
    global $post;
    if (isset($post->post_parent) && $post->post_parent > 0) {
        $children = get_pages('&sort_column=post_date&sort_order=asc&child_of='.$post->post_parent.'&parent='.$post->post_parent);

    };

/* Children ID in Arrays */
    foreach( $children as $child ) { $child_id_array[] = $child->ID; }
    $next_page_id = relative_value_array($child_id_array, $post->ID, 1);
    $output = '';

    if( '' != $next_page_id ) {
        $output .= '<a href="' . get_page_link($next_page_id) . '"><span class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp; '. get_the_title($next_page_id) . '<span></a>';
    }
    return $output;
};
/* END Edunova Page Navigation Fix */
/* Import Custom Colours */
function edunova_text_colors($init) {
  $default_colours = '"000000", "Black",
                      "993300", "Burnt orange",
                      "333300", "Dark olive",
                      "003300", "Dark green",
                      "003366", "Dark azure",
                      "000080", "Navy Blue",
                      "333399", "Indigo",
                      "333333", "Very dark gray",
                      "800000", "Maroon",
                      "FF6600", "Orange",
                      "808000", "Olive",
                      "008000", "Green",
                      "008080", "Teal",
                      "0000FF", "Blue",
                      "666699", "Grayish blue",
                      "808080", "Gray",
                      "FF0000", "Red",
                      "FF9900", "Amber",
                      "99CC00", "Yellow green",
                      "339966", "Sea green",
                      "33CCCC", "Turquoise",
                      "3366FF", "Royal blue",
                      "800080", "Purple",
                      "999999", "Medium gray",
                      "FF00FF", "Magenta",
                      "FFCC00", "Gold",
                      "FFFF00", "Yellow",
                      "00FF00", "Lime",
                      "00FFFF", "Aqua",
                      "00CCFF", "Sky blue",
                      "993366", "Red violet",
                      "FFFFFF", "White",
                      "FF99CC", "Pink",
                      "FFCC99", "Peach",
                      "FFFF99", "Light yellow",
                      "CCFFCC", "Pale green",
                      "CCFFFF", "Pale cyan",
                      "99CCFF", "Light sky blue",
                      "CC99FF", "Plum"';

  $custom_colours =  '"FFFFFF", "Bijela",
					  "144F71", "Plava",
					  "252525", "Tamno Siva",
					  "E67A20", "Narančasta",
					  "70C115", "Zelena"';

  /* Grid and Custom Colours */
  $init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']';

  /* 6th Row */
  $init['textcolor_rows'] = 6;

  return $init;
}
add_filter('tiny_mce_before_init', 'edunova_text_colors');
/* END Import Custom Colours */
add_action( 'widgets_init', 'theme_widgets_init' );
function theme_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'edunova' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgeti', 'edunova' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
?>
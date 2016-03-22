<?php
/**
 * phirefitness functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
* Theme Name: PhireFitness Theme
* Theme URI: https://phoenix.sheridanc.on.ca/~ccit3424/
* Description: Theme File
* Authors/Contributors: Mayank Sharma, Nayab Safdar and Shruti Shirke (MSN Developers)
* Version: 1.0 03/22/2016
* Author URI: https://phoenix.sheridanc.on.ca/~ccit3424/

 * @package phirefitness
 */
 

// This function registers the footer menu automatically using an array to provide custom menu assisstance in the theme

register_nav_menus ( array 
	('secondary' => __ ( 'Footer Menu'),)); 

/* Here we insert a signature at the end of every post. Source: https://wordpress.org/support/topic/how-to-add-signature-to-posts-without-a-plugin. The global variables define the post, call it and place the signature image in this case under the post. */

add_filter('the_content', 'add_signature');

function add_signature ($text){global $post;
if ($post->post_type=='post') $text.='<div class="signature"> 
<img src="http://phoenix.sheridanc.on.ca/~ccit3424/wp-content/themes/phirefitness/images/signature.png"
alt="signature"/
</div>';
return $text;
}

/* Enqueue the Google Font. This function registers the google font, assoicates it with the appropriate font web link and prints it on the page */

function google_font () {
	wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Lobster'); 
	wp_enqueue_style('googlefonts');
}
add_action('wp_print_styles', 'google_font');
	

 


/**
 * Display navigation to next/previous navigation on every post. Classes such as "navigation posts-navigation" area assigned 
 so that it is easier to style the posts. 
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function phirefitness_posts_navigation() {
	/* This function ensures that empty markup will not be displayed if there's only one page and will only print a maximum of 2 pages.*/
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation posts-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Posts navigation', 'homegrid' ); ?></h2>
		<div class="nav-links">

			
			<div class="nav-previous"><?php next_posts_link(__( '&larr; Previous Post', 'homegrid' ) ); ?></div>
			
			
			<div class="nav-next"><?php previous_posts_link( __( 'Next Post &rarr;', 'homegrid' )  ); ?></div>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

add_theme_support( 'post-thumbnails' ); //This calls the post-thumnails for every post 
set_post_thumbnail_size( 100,100); //This function sets the thumnail images' sizes to 100 length and 100 width 

if ( ! function_exists( 'phirefitness_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function phirefitness_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on phirefitness, use a find and replace
	 * to change 'phirefitness' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'phirefitness', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/* This theme uses wp_nav_menu() in one location. The variable primary is assigned as the area where the posts will be displayed */
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'phirefitness' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable theme support for Post Format in aside, image, video, quote and link using an array
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	/* Set up the WordPress core custom background feature.This feature lets users et their own color or background image from the WP dashboard. */
	add_theme_support( 'custom-background', apply_filters( 'phirefitness_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'phirefitness_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
 
 // The global variable below defines the content width to 640 and applies it to the theme. 
 
function phirefitness_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'phirefitness_content_width', 640 );
}
add_action( 'after_setup_theme', 'phirefitness_content_width', 0 );

/**
 * Register widget area. The function below registers the sidebar using an array to define specific parameters such as name or description within the widget. These parameters wrap within the widget to have an active widget print the code and display itself.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function phirefitness_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'phirefitness' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'phirefitness_widgets_init' );

/**
 * Enqueue scripts and styles. The code below enqeues the stylesheet for the design of the site. Enqueing is a great practice to have because it reduces the chances of having duplicate code,conflicting versions and provides a better experience for users as pages can load quicker after enqueing */

 
function phirefitness_scripts() {
	wp_enqueue_style( 'phirefitness-style', get_stylesheet_uri() );

	wp_enqueue_script( 'phirefitness-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'phirefitness-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

// The code below is the correct way to enqueue scripts and styles that need to display in the front-end of theme such as header.
add_action( 'wp_enqueue_scripts', 'phirefitness_scripts' );

/**
 * Implement the Custom Header feature. The require get_template directory function pulls the header from header.php file
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme. The require get_template directory function pulls the template-tags from template-tags.php file
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.The require get_template directory function pulls extras from header.php file
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions. The require get_template directory function pulls the customizer from customizer.php file
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file. The require get_template directory function pulls the jetpack from jetpack.php file
 */
require get_template_directory() . '/inc/jetpack.php';

require get_stylesheet_directory() . '/inc/options.php';


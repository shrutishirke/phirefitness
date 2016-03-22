<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

* Theme Name: PhireFitness Theme
* Theme URI: https://phoenix.sheridanc.on.ca/~ccit3424/
* Description: Theme File
* Authors/Contributors: Mayank Sharma, Nayab Safdar and Shruti Shirke (MSN Developers)
* Version: 1.0 03/22/2016
* Author URI: https://phoenix.sheridanc.on.ca/~ccit3424/

 * @package phirefitness
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php 

	wp_head(); 
/*The following are image links for the respective photos in the slider. They are saved within the images folder in cpanel
image 1source: pixabay.com/static/uploads/photo/2015/01/10/18/45/gym-595597_960_720.jpg
image2 source: https://pixabay.com/en/gym-room-fitness-sport-equipment-1178293/ 
image3 source:https://pixabay.com/en/cross-fit-zimmer-health-fitness-1126999/ 
image4 source: https://pixabay.com/en/pool-gym-fitness-sports-526997/ 
image5 source: https://pixabay.com/en/fitness-medicine-balls-gym-workout-1038438/ 
image6 source: https://pixabay.com/en/sport-yoga-pilates-body-yoga-pose-1087028/
image7 https://pixabay.com/en/men-yoga-classes-gym-instructor-1179452/
image8 https://pixabay.com/en/weights-lifting-power-female-gym-869225/

slider source code: https://codepen.io/dudleystorey/pen/ehKpi

*/
?>
 
</head>


<body>

<div id="photoslideshow">
<figure>
<img src="http://phoenix.sheridanc.on.ca/~ccit3424/wp-content/themes/phirefitness/images/image1.jpg" alt="">

<img src="http://phoenix.sheridanc.on.ca/~ccit3424/wp-content/themes/phirefitness/images/image2.jpg" alt="">

<img src="http://phoenix.sheridanc.on.ca/~ccit3424/wp-content/themes/phirefitness/images/image3.jpg" alt="">

<img src="http://phoenix.sheridanc.on.ca/~ccit3424/wp-content/themes/phirefitness/images/image4.jpg" alt="">

<img src="http://phoenix.sheridanc.on.ca/~ccit3424/wp-content/themes/phirefitness/images/image5.jpg" alt="">

<img src="http://phoenix.sheridanc.on.ca/~ccit3424/wp-content/themes/phirefitness/images/image6.jpg" alt="">

<img src="http://phoenix.sheridanc.on.ca/~ccit3424/wp-content/themes/phirefitness/images/image7.jpg" alt="">

<img src="http://phoenix.sheridanc.on.ca/~ccit3424/wp-content/themes/phirefitness/images/image8.jpg" alt="">



</figure>
</div>
</body>
<body <?php body_class();

/* The code below defines the masthead of the site which is where users can place a banner and the site-navigation/main-navigation
where the top-menu bar is defined, made clickable to posts/pages and given ids so that it can be styled in css. */
 ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'phirefitness' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php if ( has_nav_menu( 'social' ) ) {
				wp_nav_menu(
					array(
						'theme_location'  => 'social',
						'container'       => 'div',
						'container_id'    => 'menu-social',
						'container_class' => 'menu',
						'menu_id'         => 'menu-social-items',
						'menu_class'      => 'menu-items',
						'depth'           => 1,
						'link_before'     => '<span class="screen-reader-text">',
						'link_after'      => '</span>',
						'fallback_cb'     => '',
					)
				);			
			} ?>

			<?php $image_url='https://pixabay.com/static/uploads/photo/2013/07/12/12/56/home-146585_960_720.png'; 
			
			
/* The code above assigns an image of a house that is clickable for the small responsive menu. It assigns it a class, so that it can be styled through CSS and also a height, width and other specifications. The code below the responsive menu code is a conditional statement that says if the user has linked an image to place in the header, print that, if no image is selected, ensure that the title - which is defined from the WP Dashboard > customize or through this code in bloginfo (name)prints the site-title.
 */
			
			?> 
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> <img src="<?php echo $image_url;?>" width="24" height="6"/><?php esc_html_e (''); ?></button>
			<?php wp_nav_menu( array(
				'theme_location'  => 'primary',
				'container'       => 'div',
				'container_id'    => 'menu-main',
				'container_class' => 'menu',
				'menu_id'         => 'menu-main-items',
				'menu_class'      => 'menu-items',
			) ); ?>			
		</nav><!-- #site-navigation -->
		<div class="site-branding container">
		
        	<?php if (get_header_image() != '') { ?>
				<img src="<?php echo header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php get_bloginfo('name'); ?>" />
            <?php } else { ?>
            	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            <?php } ?>
		</div>
	</header>
	<div id="content" class="site-content container">



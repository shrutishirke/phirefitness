<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phirefitness
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
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
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'phirefitness' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'phirefitness' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

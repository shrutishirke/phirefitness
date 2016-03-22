<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
* Theme Name: PhireFitness Theme
* Theme URI: https://phoenix.sheridanc.on.ca/~ccit3424/
* Description: PhireFitness Theme File
* Authors/Contributors: Mayank Sharma, Nayab Safdar and Shruti Shirke (MSN Developers)
* Version: 1.0 03/22/2016
* Author URI: https://phoenix.sheridanc.on.ca/~ccit3424/
 
 * @package underscores
 *
The code below for site info, makes the credits and copyright along with the theme and author name appear in the footer. The 
echo parameter automatically generates the copyright symbol and year that the site was created in. A clickable url can also be added in the href statement for bloginfo in the code. At the end of the code, the footer menu is assigned a location of secondary and given a menu class of foot-menu to place it properly in the theme. Source code: https://wordpress.org/support/topic/changing-the-footer-3 and Code Diva Lecture Slides.
 
 */
 
?>

</div><!-- #content Here IDs are defined so that the footer can be styled in Css. Footer widgets are now in footer's sidebar -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
	        <div id="footer-widgets">
	            <?php if ( is_active_sidebar( 'footer' ) ) : ?>
	                <aside id="widget-foot" class="widget-foot">
	                    <?php dynamic_sidebar( 'footer' ); ?>
	                </aside>
	            <?php endif; ?>
	        </div><!-- end #footer-widgets -->
			
			<div class="site-info"> 
			
				<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>. All Rights Reserved.</p>
                <p class="credits"><?php printf( __( 'Theme: %1$s by %2$s.', 'PhireFitness' ), 'PhireFitness', 'MSN Developers' ); ?></p>
			</div><!-- .site-info -->
		
		<div id="footer-menu">
			<?php wp_nav_menu ( array ('theme_location' => 
			'secondary','menu_class' => 'foot-menu' )); ?> 
		</div><!-- #footer-menu 
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
$options = get_option('phirefitness_options_settings' );


echo $options['phirefitness_text_field'] .'<br/>';
echo $options['phirefitness_select_field'];

?>



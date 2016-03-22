<?php 

/*
* Theme Name: PhireFitness Theme
* Theme URI: https://phoenix.sheridanc.on.ca/~ccit3424/
* Description: Theme File
* Authors/Contributors: Mayank Sharma, Nayab Safdar and Shruti Shirke (MSN Developers)
* Version: 1.0 03/22/2016
* Author URI: https://phoenix.sheridanc.on.ca/~ccit3424/
*/ 

if(!is_page()){?>
	<div id="sidebar" class="widget-area side-widget-area" role="complementary">
	<?php if(is_active_sidebar( 'the_sidebar' ) ):?>
	<div class="sidebar-widgets">
	<?php dynamic_sidebar( 'the_sidebar' );?>
	</div>
	<?php endif;?>
	</div>
<?php }
/**
 * The sidebar containing the main widget area. The conditional statement states that if the sidebar is active, print it, if 
 not, do not make it appear on the site. "Secondary" and "widget=area" define the section where the sidebar is located. "widget-area" is another word for "sidebar" in this case. 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phirefitness
 */
 
 if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

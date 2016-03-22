<?php
/**
 * Template Name: Site Map Page 
* Theme Name: PhireFitness Theme
* Theme URI: https://phoenix.sheridanc.on.ca/~ccit3424/
* Description: Theme File
* Authors/Contributors: Mayank Sharma, Nayab Safdar and Shruti Shirke (MSN Developers)
* Version: 1.0 03/22/2016
* Author URI: https://phoenix.sheridanc.on.ca/~ccit3424/

 * @package phirefitness
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				
		
<p>	PhireFitness is a fitness club that has a daily mantra to satisfy the health and wellness needs of our customers in every way possible. 
From nutrition tips, wellness to an assortment of classes, we have a talented team of personal trainers/fitness experts to guide you through your journey towards a balanced lifestyle. We 
hope that our website assists you in exploring the opportunities that PhireFitness can provide you with and a glimpse of our passion for fitness.
</p> 
		
		<!-- Below is a link that takes the user to a phone number when they are on mobile devices. Source Code: http://www.phpclasses.org/blog/post/262-10-Tips-to-Adapt-PHP-Web-Sites-for-Mobile-Devices.html --> 
			<p class="phone-number">
			Click the Button Below to Call us and Register/Receive Promotions for PhireFitness Gym 
			<br/><a href="tel:+19058459430"><img src="https://pixabay.com/static/uploads/photo/2015/09/12/17/54/icon-937080_960_720.png" alt="Contact Us Link" width="60" height="80" text-align="left" /></a> 
			</p> 
		



	
	<?php the_content (); ?> 	
				
<!-- Source for code below: https://codex.wordpress.org/Function_Reference/query_posts and Code Diva lecture slides--> 
		
	<?php 
			$args = array('showposts'=>10,'order'=>'ASC', 'category_name'=> 'recent posts'); 
				$my_query = new WP_Query($args); 
	?> 
		
<!-- Source for code on loops: https://codex.wordpress.org/The_Loop -->
	
	<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); 
	?> 
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>

				
<!--Thumbnail and Grid Clickable Source Code: https://wordpress.org/support/topic/whole-thumbnail-clickable-->	
				
			<div id="grid"> 

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2> 
	<?php the_post_thumbnail('category-thumbnail'); ?> </a> 

			</div>
					

	</article>
			<?php endwhile; endif; ?>
						
<!-- Source code: https://codex.wordpress.org/The_Loop -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
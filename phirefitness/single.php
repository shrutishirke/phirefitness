<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package phirefitness
 The single.php page is sort of like an archives page. The single.php file is used insted of index.php when the page only contains one post, otherwise index.php will be used to display all posts.The loop says the same below, if there is one post, get it and load up the body, header etc anyway, if there is no post dont load any posts, if there is more than one post, dont load it from here - the loop in index.php will take care of it and if there is at least one comment, load that template.  
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

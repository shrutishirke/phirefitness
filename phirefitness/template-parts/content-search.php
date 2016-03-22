<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 This code will display the results in search pages, when it goes through all the content to find what the user is looking for. Think of this as a bookmark that selects all the possible results and puts them in a page. According to the code, this would be entry meta. All the links will be made clickable through the .entry meta variable so the user can click on the results that are displayed in teh entry-summary page. 
 * @package phirefitness
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php phirefitness_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php phirefitness_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

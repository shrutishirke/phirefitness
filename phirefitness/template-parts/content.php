<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package phirefitness
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		//This code displays the h1 and h2 headers that are associated with the post. The loop gets them to print. 
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : /* Here the code gets the meta tags for the pages to turn them into links and also prints the day when the post was created. The code states the day the post was "Posted on" is a clickable link as well.*/ ?>
		<div class="entry-meta">
			<?php phirefitness_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		/* The sprint and array parameters print the content of the post with a "read more" tag" and link along with page links for the other pages after the conten for every post. The code below also displays the title for each post. IF there is no title, "False" indicates that a post with a blank title will be displayed.  */
		
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'phirefitness' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'phirefitness' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php phirefitness_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

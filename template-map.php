<?php
/**
 * The template used for displaying page content in page.php
 *Template Name:Site Map Page
 * @package Fluffy
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<h2>Pages</h2>
				<ul class="sitemap">
					<?php wp_list_pages
				('sort_column=menu_order&title_li=');?>
				</ul>

				<h2>Categories</h2>
				<ul class="sitemap">
					<?php wp_list_categories('title_li=');?>
				</ul>

				<h2>Posts</h2>
				<ul class="sitemap">
					<?php wp_get_archives
					('type=postbypost'); ?>
				</ul>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'codediva' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

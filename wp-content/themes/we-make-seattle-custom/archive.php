<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="standard-top-margin">




		<?php if ( have_posts() ) : ?>

		
				<?php
					the_archive_title( '<h1 class="standard-top-margin center-text">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
		

<div class="blog-contain standard-top-margin">

	<div class="blog-col blog-left-col">

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post(); ?>

			<div class="blog-list-post">
			<h2 class="blog-list-header"><a class="blog-title-link" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			<div class="blog-list-date"><?php the_time('F j, Y'); ?></div>
			<?php the_content('Read More &rarr;');?>
		</div>
<?php
			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
</div> 

<div class="blog-col blog-right-col">
		<div class="search-sidebar">
			<?php get_sidebar(); ?>
		</div>

	</div>

</div>

<div class="clear-div"></div>

	</div>

<?php get_footer(); ?>

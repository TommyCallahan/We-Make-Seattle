<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>







<div class="standard-top-margin">


	<h1 class="standard-top-margin center-text"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>


	<div class="blog-contain standard-top-margin">

	<div class="blog-col blog-left-col">

<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<!-- individual blog posts -->

		<div class="blog-list-post">
			<h2 class="blog-list-header"><a class="blog-title-link" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			<div class="blog-list-date"><?php the_time('F j, Y'); ?></div>
			<?php the_content('Read More &rarr;');?>
		</div>
	<!-- end individual blog posts -->

<?php endwhile;

else :
	get_template_part( 'content', 'none' );

endif; ?>

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

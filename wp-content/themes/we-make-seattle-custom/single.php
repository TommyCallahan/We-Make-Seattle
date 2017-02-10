<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>



<div class="standard-top-margin">

	<div class="blog-contain standard-top-margin">

	<div class="blog-col blog-left-col">

	<!-- individual blog posts -->

		<div class="blog-single-post">
	<!-- 		<div class="single-post-nav">
				<div class="prev-post-col single-post-nav-col">
					<a href="<?php previous_post_link(); ?>" class="read-more-blog">&larr; Previous Post</a>
				</div>
				<div class="next-post-col single-post-nav-col">
					<a href="<?php next_post_link(); ?>" class="read-more-blog">Next Post &rarr;</a>
				</div>
			</div> -->

<div class="single-post-nav">
<div class="prev-post-col single-post-nav-col">
<?php previous_post_link( '%link', '&larr; %title', TRUE ); ?>
</div>
<div class="next-post-col single-post-nav-col">
<?php next_post_link( '%link', '%title &rarr;', TRUE ); ?>
</div>
</div> <!-- end navigation -->

<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>

			<h2 class="blog-list-header"><?php the_title();?></h2>
			<div class="blog-single-byline">Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?>  | Leave a comment</div>
			<?php the_content(); ?>
			<div class="post-cat-list standard-top-margin">
This entry was posted in
<?php
if ( is_single()) {
	$thisurl = 'http://' . $_SERVER["HTTP_HOST"];					// Current URL
	$category = get_the_category();									// Gets the Categories for the Post
		foreach ( $category as $cat ) {
			if ($cat->cat_ID != "8") {		// Won't Display "Blog"
				$thisurl = $thisurl . '/category/' . $cat->slug . '/'; 	// Category Blog URL
					echo '<span class="cat-link"><a href="' . $thisurl . '">'. $cat->cat_name .'</a></span> ';

			}
		}
}
?>

				</div>
<div class="post-share standard-top-margin">Share This:<br>
<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<?php echo '<a class="contact-twitter" target="_blank" href="http://twitter.com/share?text=We%20Make%20Seattle&url=' . $actual_link . '">Twitter</a>'; ?>
<?php echo '<a class="contact-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=' . $actual_link . '">Facebook</a>'; ?>
<?php echo '<a class="contact-email" href="mailto:?subject=We Make Seattle&body=Check out this post from We Make Seattle: ' . $actual_link . '">Email</a>'; ?>





			</div>
		</div>
	<!-- end individual blog posts -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
?>

<?php endwhile; ?>
		
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

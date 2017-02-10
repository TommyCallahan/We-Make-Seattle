<?php
/**
* Template Name: Blog Page */
get_header(); ?>


<div class="standard-top-margin">

<?php if (have_posts()) : while (have_posts()) : the_post();?>

	<h1 class="standard-top-margin center-text"><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php endwhile; endif; ?>

	<div class="blog-contain standard-top-margin">

	<div class="blog-col blog-left-col">


<?php 

  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => 8,
      'cat' => 8,
      'paged' => $paged
    );

  $custom_query = new WP_Query( $custom_args ); ?>

  <?php if ( $custom_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
     

		<div class="blog-list-post">
			<h2 class="blog-list-header"><a class="blog-title-link" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			<div class="blog-list-date"><?php the_time('F j, Y'); ?></div>
			<?php the_content('Read More &rarr;');?>
		</div>


    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->
    <?php
      if (function_exists(custom_pagination)) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }
    ?>

  <?php wp_reset_postdata(); ?>

  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>



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

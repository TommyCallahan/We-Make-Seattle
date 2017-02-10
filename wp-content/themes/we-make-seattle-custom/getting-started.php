<?php
/**
* Template Name: Getting Started */
get_header(); ?>


<div class="standard-top-margin">

<?php if (have_posts()) : while (have_posts()) : the_post();?>

	<h1 class="standard-top-margin center-text"><?php the_title(); ?></h1>

<?php endwhile; endif; ?>

	<div class="getting-started-cols getting-started-nav">

		<ul>
			<li><a class="advice-link" href="#advice">Seattle's Challenges</a></li>
			<li><a class="finding-a-place-to-live-link" href="#finding-a-place-to-live">Find a Place to Live</a></li>
			<li><a class="finding-a-job-link" href="#finding-a-job">Find a Job</a></li>
			<li><a class="start-a-company-link" href="#start-a-company">Starting a Company</a></li>
			<li><a class="get-training-link" href="#get-training">Get Training</a></li>
			<li><a class="meet-others-link" href="#meet-others">Meet Others</a></li>
		</ul>
		<div style="width:100%; display:block;">&nbsp;</div>
		 <div id="stickyalias"></div>
	</div>

	<div class="getting-started-cols getting-started-content">

		
				<h2 class="getting-started-heading standard-top-margin advice-color"><a name="advice"></a><span class="mobile-hide"><br></span>Advice on Seattle's Challenges</h2>
		
		<div class="circle-plus advice-color">
		  <div class="circle">
		    <div class="horizontal"></div>
		    <div class="vertical"></div>
		  </div>
		</div>

		<div class="getting-started-item-contain">

				<?php $query2 = new WP_Query( 'cat=7' ); ?>
				<?php 
					while ( $query2->have_posts() ) {
					$query2->the_post();

					$category = get_the_category();
					;
				?>


		<a target="_blank" href="<?php echo the_field('item_link'); ?>" class="get-started-card rounded-corners <?php echo $category[0]->slug ?>">
			<div class="get-started-top getting-started-halves">
				<h3><?php the_title(); ?></h3>
			</div>

			<div class="get-started-bottom getting-started-halves">
				<?php the_content(); ?>
				<span class="learn-more-link">Learn More &rarr;</span> 
			</div>
		</a>


				<?php } wp_reset_postdata();?>	

		</div>



		

		<h2 class="getting-started-heading finding-a-place-to-live-color"><a name="finding-a-place-to-live"></a><span class="mobile-hide"><br></span>Finding a Place to Live</h2>

		<div class="circle-plus finding-a-place-to-live-color">
		  <div class="circle">
		    <div class="horizontal"></div>
		    <div class="vertical"></div>
		  </div>
		</div>

		<div class="getting-started-item-contain">

				<?php $query2 = new WP_Query( 'cat=2' ); ?>
				<?php 
					while ( $query2->have_posts() ) {
					$query2->the_post();

					$category = get_the_category();
					;
				?>


		<a target="_blank" href="<?php echo the_field('item_link'); ?>" class="get-started-card rounded-corners <?php echo $category[0]->slug ?>">
			<div class="get-started-top getting-started-halves">
				<h3><?php the_title(); ?></h3>
			</div>

			<div class="get-started-bottom getting-started-halves">
				<?php the_content(); ?>
				<span class="learn-more-link">Learn More &rarr;</span> 
			</div>
		</a>


				<?php } wp_reset_postdata();?>	

		</div>


		
		<h2 class="getting-started-heading standard-top-margin finding-a-job-color"><a name="finding-a-job"></a><span class="<!-- mobile-hide -->"><br></span>Finding a Job</h2>

		<div class="circle-plus finding-a-job-color">
		  <div class="circle">
		    <div class="horizontal"></div>
		    <div class="vertical"></div>
		  </div>
		</div>

		<div class="getting-started-item-contain">
			
				<?php $query2 = new WP_Query( 'cat=3' ); ?>
				<?php 
					while ( $query2->have_posts() ) {
					$query2->the_post();

					$category = get_the_category();
					;
				?>


		<a target="_blank" href="<?php echo the_field('item_link'); ?>" class="get-started-card rounded-corners <?php echo $category[0]->slug ?>">
			<div class="get-started-top getting-started-halves">
				<h3><?php the_title(); ?></h3>
			</div>

			<div class="get-started-bottom getting-started-halves">
				<?php the_content(); ?>
				<span class="learn-more-link">Learn More &rarr;</span> 
			</div>
		</a>


				<?php } wp_reset_postdata();?>	


		</div>


		
		<h2 class="getting-started-heading standard-top-margin start-a-company-color"><a name="start-a-company"></a><span class="mobile-hide"><br></span>How to Start a Company in Seattle</h2>

		<div class="circle-plus start-a-company-color">
		  <div class="circle">
		    <div class="horizontal"></div>
		    <div class="vertical"></div>
		  </div>
		</div>

		<div class="getting-started-item-contain">

				<?php $query2 = new WP_Query( 'cat=4' ); ?>
				<?php 
					while ( $query2->have_posts() ) {
					$query2->the_post();

					$category = get_the_category();
					;
				?>


		<a target="_blank" href="<?php echo the_field('item_link'); ?>" class="get-started-card rounded-corners <?php echo $category[0]->slug ?>">
			<div class="get-started-top getting-started-halves">
				<h3><?php the_title(); ?></h3>
			</div>

			<div class="get-started-bottom getting-started-halves">
				<?php the_content(); ?>
				<span class="learn-more-link">Learn More &rarr;</span> 
			</div>
		</a>


				<?php } wp_reset_postdata();?>	

		</div>


		
		<h2 class="getting-started-heading standard-top-margin get-training-color"><a name="get-training"></a><span class="mobile-hide"><br></span>How to Get Training</h2>

		<div class="circle-plus get-training-color">
		  <div class="circle">
		    <div class="horizontal"></div>
		    <div class="vertical"></div>
		  </div>
		</div>

		<div class="getting-started-item-contain">

				<?php $query2 = new WP_Query( 'cat=5' ); ?>
				<?php 
					while ( $query2->have_posts() ) {
					$query2->the_post();

					$category = get_the_category();
					;
				?>


		<a target="_blank" href="<?php echo the_field('item_link'); ?>" class="get-started-card rounded-corners <?php echo $category[0]->slug ?>">
			<div class="get-started-top getting-started-halves">
				<h3><?php the_title(); ?></h3>
			</div>

			<div class="get-started-bottom getting-started-halves">
				<?php the_content(); ?>
				<span class="learn-more-link">Learn More &rarr;</span> 
			</div>
		</a>


				<?php } wp_reset_postdata();?>	

		</div>

		<h2 class="getting-started-heading standard-top-margin meet-others-color"><a name="meet-others"></a><span class="mobile-hide"><br></span>How to Meet Other Makers &amp; Creatives</h2>

		<div class="circle-plus meet-others-color">
		  <div class="circle">
		    <div class="horizontal"></div>
		    <div class="vertical"></div>
		  </div>
		</div>

		<div class="getting-started-item-contain">


				<?php $query2 = new WP_Query( 'cat=6' ); ?>
				<?php 
					while ( $query2->have_posts() ) {
					$query2->the_post();

					$category = get_the_category();
					;
				?>


		<a target="_blank" href="<?php echo the_field('item_link'); ?>" class="get-started-card rounded-corners <?php echo $category[0]->slug ?>">
			<div class="get-started-top getting-started-halves">
				<h3><?php the_title(); ?></h3>
			</div>

			<div class="get-started-bottom getting-started-halves">
				<?php the_content(); ?>
				<span class="learn-more-link">Learn More &rarr;</span> 
			</div>
		</a>


				<?php } wp_reset_postdata();?>	


		</div>





	</div>

<div class="clear-div"></div>

	</div>





<?php get_footer(); ?>

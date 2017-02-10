<?php
/**
* Template Name: Contact Page */
get_header(); ?>


<div class="standard-top-margin">

<?php if (have_posts()) : while (have_posts()) : the_post();?>

	<h1 class="standard-top-margin center-text"><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php endwhile; endif; ?>

	<div class="contact-page-box standard-top-margin rounded-corners">
       <?php echo do_shortcode( '[contact-form-7 id="1011" title="Contact Page"]' ); ?>
	</div>

	<div class="contact-page-box standard-top-margin rounded-corners outline-green">
		<h3>You can also find us on the Socials</h3>
		<ul>
			<li class="contact-social contact-twitter">
				<a target="_blank" href="https://twitter.com/wemakeseattle">@wemakeseattle</a>
			</li>
			<li class="contact-social contact-facebook">
				<a target="_blank" href="https://www.facebook.com/WeMakeSeattle">/wemakeseattle</a>
			</li>
			<li class="contact-social contact-email">
				<a target="_blank" href="mailto:info@wemakeseattle.com">info@wemakeseattle.com</a>
			</li>
			<li class="contact-social contact-youtube">
				<a target="_blank" href="https://www.youtube.com/channel/UC8ZZj8gQ8dMSLQZ6RaSkqIw">/wemakeseattle</a>
			</li>
			<!-- 
			<li class="contact-social contact-github">
				<a target="_blank" href="http://www.github.com/wemamkeseattle">/wemakeseattle</a>
			</li>
			<li class="contact-social contact-linkedin">
				<a target="_blank" href="#">Coming Soon</a>
			</li> -->
		</ul>
	</div>

<div class="clear-div"></div>

	</div>



<?php get_footer(); ?>

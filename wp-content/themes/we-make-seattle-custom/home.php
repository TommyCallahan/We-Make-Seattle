<?php
/**
* Template Name: Home Page */
get_header(); ?>


<?php if( get_field('movie_link') ): ?>
 <div class="video-box standard-top-margin">
<iframe src="<?php echo the_field('movie_link'); ?>" frameborder="0" allowfullscreen></iframe>
</div>

<div class="post-share standard-top-margin"><span class="share-lines">Share This:</span>
<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<?php echo '<a class="contact-twitter" target="_blank" href="http://twitter.com/share?text=We%20Make%20Seattle&url=' . $actual_link . '">Twitter</a>'; ?>
<?php echo '<a class="contact-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=' . $actual_link . '">Facebook</a>'; ?>
<?php echo '<a class="contact-email" href="mailto:?subject=We Make Seattle&body=Check out this video: We Make Seattle: ' . $actual_link . '">Email</a>'; ?>
</div>

<?php  else: ?>


<!-- delete this once we have live video -->
<div id="countdown-container" class="box rounded-corners standard-top-margin bg-green">

<div id="clockdiv">
  <div class="box rounded-corners bg-white">
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div class="box rounded-corners bg-white mobile-hide">
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div class="box rounded-corners bg-white mobile-hide">
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div class="box rounded-corners bg-white mobile-hide">
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>

<span class="launch-text">Until The Launch Of We Make Seattle</span>
<p class="launch-alert-form-toggle">Click here for launch alerts</p>

<div class="launch-form-contain">
 <div class="launch-form">
    <div>
      <?php // echo do_shortcode( '[contact-form-7 id="1010" title="Contact form 1"]' ); ?>
            <!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://WeMakeSeattle.us3.list-manage.com/subscribe/post?u=78b7218076d8212bebc77d0be&amp;id=d6626226fb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_78b7218076d8212bebc77d0be_d6626226fb" value=""></div>
  <div class="clear"><input type="submit" value="Sign Up For Updates" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->
    <p class="small-text">We will never, ever, ever share your email address. Pinky Promise.</p>
    </div>
  </div>
</div>

</div>

<script>
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = 'March 24 2016 18:30 GMT-08:00';
initializeClock('clockdiv', deadline);
</script>

<?php endif; ?>

<!-- end delete this -->

<!--
<div class="video-box standard-top-margin">
<iframe src="https://www.youtube.com/embed/GBb9BDfTz-Y" frameborder="0" allowfullscreen></iframe>
</div>
 -->

<div class="sub-video standard-top-margin">

<a href="/start" class="home-btn box rounded-corners bg-red half-width trees">Get Started In Seattle</a>

<a href="/blog" class="home-btn box rounded-corners bg-yellow half-width">Read Our Blog</a>

</div>

<div class="clear-div"></div>

	<div class="copy-width">

	<h1 class="standard-top-margin">The Story Of We Make Seattle</h1>

<div class="home-content">
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>

	<div class="highlighted-text-block standard-top-margin rounded-corners outline-green">
		<h3><?php echo the_field('home_bottom_title'); ?></h3>
		<p><?php echo the_field('home_bottom_content'); ?></p>
		<a href="<?php echo the_field('home_bottom_link'); ?>" class="read-more">Contact Us &rarr;</a>
	</div>

	</div>





<?php get_footer(); ?>

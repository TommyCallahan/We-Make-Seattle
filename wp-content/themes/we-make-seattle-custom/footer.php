<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

</div>

<div class="footer">
 <div class="footer-contain">
  <div class="footer-col footer-left">
    <p>We Make Seattle was made possible by the following supporters:</p>
<div class="icons">
    <div class="supporter-col supporter-left">
      <div class="big-supporter-box"><a href="http://www.tableau.com/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/tableau.svg"></a></div>
    </div>

    <div class="supporter-col supporter-right">
      
      <div class="supporter-right-top">
        <div class="supporter-box"><a href="http://jacksonfish.com/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/jfm.png"></a></div>
        <div class="supporter-box"><a href="http://www.filterdigital.com/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/filter.png"></a></div>
        <div class="supporter-box"><a href="http://www.zillow.com/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/zillow.svg"></a></div>
        <div class="supporter-box"><a href="http://www.commerce.wa.gov/Pages/default.aspx" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/doc.png"></a></div>
      </div>
      <div class="supporter-right-bottom">
        <div class="supporter-box"><a href="http://designcommission.com/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/dc.svg"></a></div>
        <div class="supporter-box"><a href="http://nickfinck.com/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/nick-fink.png"></a></div>
        <div class="supporter-box"><a href="http://www.whitepages.com/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/whitepages.png"></a></div>
        <div class="supporter-box"><a href="http://www.feld.com/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/feld-thoughts.png"></a></div>
      </div>
    </div>

  </div>

    <p class="footer-contact-text">Have questions?<span class="mobile-show"><br></span><a href="<?php bloginfo('url'); ?>/contact">Contact Us!</a> We'd love to talk.</p>

  </div>

  <div class="footer-col footer-right">
    <p>Subscribe to our mailing list:</p>
    <div class="footer-form">
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

  <div class="clear-div"></div>

  <div class="waves">
  </div>

  <div class="footer-info">
    <div class="footer-info-left footer-info-col">
      Site By <a href="http://www.designcommission.com" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/dc-logo.svg"></a>
    </div>
    <div class="footer-info-right footer-info-col">
      All this is copyrighted to We Make Seattle. Except for the stuff that isn't.
    </div>

    <div class="clear-div"></div>

  </div>

</div>

</div>




<?php wp_footer(); ?>

<script>


$( ".circle-plus" ).click(function() {
  $( this ).toggleClass("minus");
  // $( this ).next(".getting-started-item-contain").slideToggle("slow");
  $( this ).next(".getting-started-item-contain").toggleClass('active');

});


$( ".launch-alert-form-toggle" ).click(function() {
  $( ".launch-form").slideToggle("slow");
});



$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1300);
        return false;
      }
    }
  });
});






</script>


</body>
</html>

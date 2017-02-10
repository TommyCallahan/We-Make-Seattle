<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('url'); ?>/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('url'); ?>/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('url'); ?>/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('url'); ?>/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('url'); ?>/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('url'); ?>/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('url'); ?>/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('url'); ?>/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('url'); ?>/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('url'); ?>/manifest.json">
	<link rel="mask-icon" href="<?php bloginfo('url'); ?>/safari-pinned-tab.svg" color="#5067b5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="<?php bloginfo('url'); ?>/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>

<body <?php body_class(); ?>>


<div class="site-wrap">
<div class="header">


<div class="header-block">
<div class="table-header-cell logo-cell"><a href="<?php bloginfo('url'); ?>" class="box rounded-corners"><img src="<?php bloginfo('template_directory');?>/images/logo.svg"></a></div>
<div class="table-header-cell"></div>
<div class="table-header-cell mountain-climber"></div>
<div class="table-header-cell"><a href="<?php bloginfo('url'); ?>" class="box rounded-corners bg-red header-link-box header-movie-link"><?php include 'movie-icon.php' ?><span>Movie</span></a></div>
<div class="table-header-cell"><a href="<?php bloginfo('url'); ?>/start" class="box rounded-corners bg-blue third-width header-link-box header-start-link"><?php include 'rocket-icon.php' ?><span>Get Started</span></a></div>
<div class="table-header-cell"><a href="<?php bloginfo('url'); ?>/blog" class="box rounded-corners bg-green third-width header-link-box header-blog-link"><?php include 'blog-icon.php' ?><span>Blog</span></a></div>
</div>




<div class="clear-div"></div>


</div>

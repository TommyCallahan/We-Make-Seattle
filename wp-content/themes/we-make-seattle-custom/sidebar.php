<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
			<form role="s" method="get" id="searchform" class="searchform" action="<?php bloginfo('url'); ?>">
			<input type="text" name="s" placeholder="Search&hellip;">
			<input type="hidden" name="cat" value="8">
			<input type="submit" value="" class="search-submit">
			</form>
		<ul>
			<li class="search-category">Search By Category:</li>
			<li class="search-category"><a href="/category/creative">Creative</a></li>
			<li class="search-category"><a href="/category/making-of">Making Of</a></li>
			<li class="search-category"><a href="/category/research">Research</a></li>
			<li class="search-category"><a href="/category/announcements">Announcements</a></li>
		</ul>

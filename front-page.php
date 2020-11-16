<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

require 'front-page-header.php';

?>

<div class="container">

	<div class="header">


		<div class="navigation">

			<li class="menu-list">ABOUT</li>
			<div class="dropdown">
				<li id="portfolio" class="menu-list" onmouseover="expandPortfolio()" onmouseout="shrinkPortfolio()" width="106" height="24">PORTFOLIO</li>
			</div>
			<li class="menu-list">CLIENTS</li>
			<li class="menu-list">CONTACT</li>

		</div>

	<div class="title">
		<a href="index.html">
			<span class="margaretbauer">MELODEE STEPHENS&ensp;|&ensp;</span><span class="graphicdesign">Graphic Design</span></a></div></div>


</div>
	<div class="content">
		<div class="image-position">
			<img src="/wp-content/themes/wprig-2.0.1/assets/images/home.jpg" width="970" height="211" />
			<div class="clients">Elverson, PA 19520&nbsp;&nbsp;|&nbsp;610.780.2023&nbsp;&nbsp;|&nbsp;&nbsp;<a href="mailto:melodee.stephens@me.com">&nbsp;© 2020 Melodee Stephens</a></div>
		</div>
	</div>

</body>
</html>

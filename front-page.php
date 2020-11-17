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
			<div class="dropdown-list dropdown">
				<a href="#" class="red-on-hover">PORTFOLIO</a>
				<div class="dropdown-content">
					<a href="#" class="red-on-hover">BOOKS&ensp;</a>
					<a href="#" class="red-on-hover">MAGAZINES&ensp;</a>
					<a href="#" class="red-on-hover">WEBSITES&ensp;</a>
					<a href="#" class="red-on-hover">MORE</a>
				</div>
			</div>
			<li class="menu-list">CLIENTS</li>
			<li class="menu-list">CONTACT</li>

		</div>

		<div class="title">
			<a href="index.html">
				<span class="margaretbauer">MELODEE STEPHENS&ensp;|&ensp;</span><span class="graphicdesign">Graphic Design</span>
			</a>
			</div></div>
		</div>

	<div class="content">
		<div class="image-frame">
			<div class="image-position">
				<img src="/wp-content/themes/wprig-2.0.1/assets/images/AI_Magazine_Spr17_970x211.jpg" width="970" height="211" />
				<div class="clients">Elverson, PA 19520&nbsp;&nbsp;|&nbsp;610.780.2023&nbsp;&nbsp;|&nbsp;&nbsp;<a href="mailto:melodee.stephens@me.com">&nbsp;© 2020 Melodee Stephens</a>
			</div>
		</div>
	</div>
	</div>

</body>
</html>

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

<body onload="MM_preloadImages(
	'/wp-content/themes/wprig-2.0.1/assets/images/about2.gif',
	'/wp-content/themes/wprig-2.0.1/assets/images/clients2.gif',
	'/wp-content/themes/wprig-2.0.1/assets/images/book_list2.gif',
	'/wp-content/themes/wprig-2.0.1/assets/images/awards2.gif',
	'/wp-content/themes/wprig-2.0.1/assets/images/portfolio02.gif',
	'/wp-content/themes/wprig-2.0.1/assets/images/books_roll.gif',
	'/wp-content/themes/wprig-2.0.1/assets/images/stamps_roll.gif'
)">

<div class="container">

	<div class="header">

		<div class="navigation"><a href="about.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('about','','/wp-content/themes/wprig-2.0.1/assets/images/about2.gif',1)">
			<img src="/wp-content/themes/wprig-2.0.1/assets/images/about1.gif" alt="About Margeret Bauer" name="about" width="106" height="24" id="about" border="0" />
			</a>
			<br />

		<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('portfolio','','/wp-content/themes/wprig-2.0.1/assets/images/portfolio02.gif',1)">
		<map name="portfolioMap" id="portfolioMap2">
			<area shape="rect" coords="74,1,124,23" href="portfolio1.html" onmouseover="MM_swapImage('portfolio','','/wp-content/themes/wprig-2.0.1/assets/images/books2.gif',1)" onmouseout="MM_swapImgRestore()" />
			<area shape="rect" coords="124,0,192,23" href="stamps/index.html" alt="stamps" />
		</map></a>

		<img src="/wp-content/themes/wprig-2.0.1/assets/images/portfolio01.gif" alt="portfolio" width="194" height="24" usemap="#Stamps" id="Image1" border="0" />
		<map name="Stamps" id="Stamps">
			<area shape="rect" coords="2,2,77,26" href="portfolio1.html" onmouseover="MM_swapImage('Image1','','/wp-content/themes/wprig-2.0.1/assets/images/portfolio02.gif',1)" onmouseout="MM_swapImgRestore()" />
			<area shape="rect" coords="77,1,137,24" href="portfolio1.html" onmouseover="MM_swapImage('Image1','','/wp-content/themes/wprig-2.0.1/assets/images/books_roll.gif',1)" onmouseout="MM_swapImgRestore()" />
			<area shape="rect" coords="137,1,190,25" href="stamps/index.html" onmouseover="MM_swapImage('Image1','','/wp-content/themes/wprig-2.0.1/assets/images/stamps_roll.gif',1)" onmouseout="MM_swapImgRestore()" />
		</map><br />

		<a href="clients.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('clients','','/wp-content/themes/wprig-2.0.1/assets/images/clients2.gif',1)">
			<img src="/wp-content/themes/wprig-2.0.1/assets/images/clients1.gif" alt="Clients" name="clients" width="106" height="24" border="0" id="clients" /></a><br />

		<a href="books.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('book list','','/wp-content/themes/wprig-2.0.1/assets/images/book_list2.gif',1)">
			<img src="/wp-content/themes/wprig-2.0.1/assets/images/book_list1.gif" alt="Book List" name="book list" width="120" height="24" border="0" id="book list" /></a><br />

		<a href="awards.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('awards','','/wp-content/themes/wprig-2.0.1/assets/images/awards2.gif',1)">
			<img src="/wp-content/themes/wprig-2.0.1/assets/images/awards1.gif" alt="Awards" name="awards" width="106" height="24" border="0" id="awards" /></a></div>

	<div class="title">
		<a href="index.html">
			<span class="margaretbauer">MELODEE STEPHENS&nbsp;|&nbsp;</span><span class="graphicdesign">Graphic Design</span></a></div></div>


</div>
	<div class="content">
		<div class="image-position">
			<img src="/wp-content/themes/wprig-2.0.1/assets/images/home.jpg" width="970" height="211" />
			<div class="clients">Elverson, PA 19520&nbsp;&nbsp;|&nbsp;610.780.2023&nbsp;&nbsp;|&nbsp;&nbsp;<a href="mailto:melodee.stephens@me.com">&nbsp;© 2020 Melodee Stephens</a></div>
		</div>
	</div>

</body>
</html>

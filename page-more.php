<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();
?>

<div class="bar">
	<div class="sample-frame" style="padding-left: 0px;">
		<div class="image-position">
			<a href="/biomass-controls"><img class="darken" src="/wp-content/uploads/2020/12/Presentation_Jun18rev_Part1-1024x597.png" height="211" /></a>
			<a href="/agnes-irwin">
				<div class="text-container">
					<img class="images" src="/wp-content/uploads/2020/12/1869MinutesOfGiving_SQtag-mockup-300x300.png" height="211" />
					<h1 id="logos" class="centered"></h1>
				</div>
			</a>
		</div>
	</div>
</div>


<main id="primary" class="site-main">
	<div class="container">
		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content/entry', get_post_type() );
		}
		?>
	</div>
</main>

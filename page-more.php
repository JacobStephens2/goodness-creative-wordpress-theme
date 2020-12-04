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
			<!-- <a href="/biomass-controls"> -->
				<div class="box wp-block-image fbx-instance" id="biomass">
					<a href="/wp-content/uploads/2020/12/Presentation_Jun18rev_Part1.png" class="fbx-link">
						<img id="biomass-image" class="lighten" src="/wp-content/uploads/2020/12/Presentation_Jun18rev_Part1-1024x597.png" height="211" />
						<div class="text">
							<h1 id="presentations" class="white-text no-text">Presentations</h1>
						</div>
					</a>
				</div>
			<!-- </a>
			<a href="/agnes-irwin"> -->
				<div class="box wp-block-image fbx-instance" id="agnes">
					<a href="/wp-content/uploads/2020/12/1869MinutesOfGiving_SQtag-mockup.png" class="fbx-link">
						<img id="agnes-image" class="lighten" src="/wp-content/uploads/2020/12/1869MinutesOfGiving_SQtag-mockup-300x300.png" height="211" />
						<div class="text">
							<h1 id="logos" class="white-text no-text">Logos</h1>
						</div>
					</a>
				</div>
			<!-- </a> -->
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

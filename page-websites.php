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
		<div class="image-position wp-block-image fbx-instance">
			<a href="/wp-content/uploads/2020/11/biomass-homepage-mockup-1536x909.png" class="fbx-link"><img src="/wp-content/uploads/2020/11/biomass-homepage-mockup-768x454.png" height="211" /></a>
		</div>
	</div>
</div>


	<div class="container">
		<div class="header">
			<div class="navigation">
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
			</div>
			<div class="title">
				</div></div>
			</div>
		</div>
	</div>

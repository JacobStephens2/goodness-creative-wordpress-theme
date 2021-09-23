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
	<div class="frame" style="padding-left: 0px;">
		<div class="about-image-position wp-block-image fbx-instance">
			<a href="/wp-content/uploads/2020/12/spread-landMatters-angled2-1536x989.png" class="fbx-link">
				<img class="bar-spread" src="/wp-content/uploads/2020/11/spread-landMatters-angled2-narrow-768x249.png" height="211" />
			</a>
			<img class="melodee-image" src="/wp-content/uploads/2020/11/Melodee-1-5-ratio-bw.jpg" height="211" />
			<img class="jacob-image" src="/wp-content/uploads/2020/11/Jacob-smiling-1-1.5-zoom-bw.jpg" height="211" />
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

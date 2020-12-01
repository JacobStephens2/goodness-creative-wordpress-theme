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
wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-portfolio' );
?>

<div class="bar">
	<div class="sample-frame" style="padding-left: 0px;">
		<div class="image-position">
			<img id="wa-cover-preview" onclick="showWACover()" src="/wp-content/uploads/2020/12/sourlands-cover.png" height="211" />
			<img id="wa-spread1-preview" onclick="showWASpread1()" src="/wp-content/uploads/2020/12/spread-base-contents-mockup-720x460.png" height="211" />
			<img id="wa-spread2-preview" onclick="showWASpread2()" src="/wp-content/uploads/2020/12/spread-sourlands-34-35-720x460.png" height="211" />
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

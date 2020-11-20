<?php
/**
 * The template for displaying the Wheaton Academy portfolio page
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
			<img id="wa-cover-preview" onclick="showWACover()" src="http://goodness-creative.local/wp-content/uploads/2020/11/wheaton-academy-cover-1-267x300.png" height="211" />
			<img id="wa-spread1-preview" onclick="showWASpread1()" src="http://goodness-creative.local/wp-content/uploads/2020/11/wheatonacademy-spread-1-300x223.png" height="211" />
			<img id="wa-spread2-preview" onclick="showWASpread2()" src="http://goodness-creative.local/wp-content/uploads/2020/11/wheatonacademy-spread-2-300x223.png" height="211" />
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

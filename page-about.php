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
	<div class="image-frame" style="padding-left: 0px;">
		<div class="about-image-position">
			<img style="padding-right: 10px;" src="http://goodness-creative.local/wp-content/uploads/2020/11/Auction18_Invitation_652x211.jpg" height="211" />
			<img src="http://goodness-creative.local/wp-content/uploads/2020/11/Melodee-1-5-ratio-bw.jpg" height="211" />
			<img style="padding-left; float: right;" src="http://goodness-creative.local/wp-content/uploads/2020/11/Jacob-smiling-1-5-bw.jpg" height="211" />
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

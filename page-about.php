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

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main">

		<div class="about-bar">
			<div class='about-content'>
				<img loading="lazy" src="http://localhost:8181/wp-content/uploads/2020/11/Melodee-1-5-ratio.jpg" alt class="wp-image-2004" height="300" width='200'>
			</div>
		</div>


		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', get_post_type() );
		}
		?>
	</main><!-- #primary -->
<?php
get_sidebar();
get_footer();

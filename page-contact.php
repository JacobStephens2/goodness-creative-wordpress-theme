<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>

<div class="bar">
	<div class="sample-frame" style="padding-left: 0px;">
		<div class="image-position wp-block-image fbx-instance">
			<a href="/wp-content/uploads/2020/12/a-z-wide-page-spread-1536x989.png" class="fbx-link">
				<img style="margin-left: 100px;" src="/wp-content/uploads/2020/12/a-z-wide-page-spread-crop2-768x249.png" height="211" />
			</a>
		</div>
	</div>
</div>

	<main id="primary" class="site-main">
		<?php
		if ( have_posts() ) {

			get_template_part( 'template-parts/content/page_header' );

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content/entry', get_post_type() );
			}

			if ( ! is_singular() ) {
				get_template_part( 'template-parts/content/pagination' );
			}
		} else {
			get_template_part( 'template-parts/content/error' );
		}
		?>
	</main><!-- #primary -->
<?php
get_sidebar();
get_footer();

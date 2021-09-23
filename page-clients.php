<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */
namespace WP_Rig\WP_Rig;
get_header();
?>
			<div class="bar">
				<div class="cover-frame">
					<div class="image-position wp-block-image fbx-instance">
						<a href="/wp-content/uploads/2020/12/ValentinesBoxWrapProof-1-1024x819.png" class="fbx-link">
							<img class="bar-align" src="/wp-content/uploads/2020/12/ValentinesBoxWrapProof-1-300x240.png" height="211" />
						</a>
					</div>
				</div>
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

</body>
</html>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}

	wp_enqueue_style(
		'wp-rig-ronnia-font',
		'https://use.typekit.net/xys2trz.css',
		array(),
		true
	);

	wp_enqueue_script(
		'wp-rig-typekit',
		'//use.typekit.net/ztu8mfu.js',
		array(),
		true,
		false
	);

	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="site-header">
		<?php //get_template_part( 'template-parts/header/custom_header' ); ?>

		<?php //get_template_part( 'template-parts/header/branding' ); ?>

		<?php //get_template_part( 'template-parts/header/navigation' ); ?>

	<div class="container">
		<div class="header">
			<div class="navigation">
				<li class="menu-list"><a href="http://goodness-creative.local/about">ABOUT</a></li>
				<div class="dropdown-list dropdown">
					<a href="http://goodness-creative.local/magazines" class="red-on-hover">PORTFOLIO</a>
					<div class="dropdown-content">
						<a href="#" class="red-on-hover">BOOKS&ensp;</a>
						<a href="http://goodness-creative.local/magazines" class="red-on-hover">MAGAZINES&ensp;</a>
						<a href="#" class="red-on-hover">WEBSITES&ensp;</a>
						<a href="#" class="red-on-hover">MORE</a>
					</div>
				</div>
				<li class="menu-list"><a href="#">CLIENTS</a></li>
				<li class="menu-list"><a href="#">CONTACT</a></li>
			</div>
			<div class="title">
				<a href="http://goodness-creative.local/">
					<span class="margaretbauer"><?php bloginfo( 'name' ); ?>&ensp;|&ensp;</span>
					<?php $tagline = get_bloginfo( 'description', 'display'); ?>
					<span class="graphicdesign"><?php echo $tagline?></span>
				</a>
				</div></div>
			</div>
		</div>
	</div>


	</header><!-- #masthead -->

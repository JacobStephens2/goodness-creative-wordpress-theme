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

<script>

function expandPortfolio() {
	document.getElementById("portfolio").innerHTML = "PORTFOLIO&ensp;<a height='20px' width='30px' href='stewardgoods.com'>MAGAZINES&ensp;</a><a href='stewardgoods.com'>BOOKS&ensp;</a><a href='stewardgoods.com'>WEBSITES&ensp;</a><a href='stewardgoods.com'>OTHER</a>";
}

function shrinkPortfolio() {
	document.getElementById("portfolio").innerHTML = "PORTFOLIO";
}

</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

<!-- #masthead -->

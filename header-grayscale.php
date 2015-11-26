<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Grayscale Press
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php
		echo '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url(__FILE__) . '/styles/main.min.css">';
		echo '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url(__FILE__) . '/styles/grayscale-custom.css">';
	?>
	<style type="text/css">
		<?php
			echo 'section, body, .top-nav-collapse { background-color: ' . get_theme_mod('section_color') . '; }';
			echo 'p, h1, h2, h3, h4, h5, h5, .h1, .h2, .h3, .h4, .h5, .h5 { color: ' . get_theme_mod('grayscale_text_color') . '; }';
			echo 'a, .btn, .btn-default {
				color:' . get_theme_mod('grayscale_link_color') . ';
				border-color:' . get_theme_mod('grayscale_link_color') . ';
			} ';
			echo '.btn:hover, .btn-default:hover {
				background-color:' . get_theme_mod('grayscale_link_color') . ' !important;
				border-color:' . get_theme_mod('grayscale_link_color') . ';
			} ';
		?>
	</style>
</head>
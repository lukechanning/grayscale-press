<?php
/**
 * The template for displaying the footer
 *
 * Contains jQuery models for Grayscale Press and some mild copyright / linking information
 *
 * @package WordPress
 * @subpackage Grayscale Press
 */
?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container text-center">
			Visit &#8674; <a target="_blank" href="/"><?php echo get_bloginfo( 'name' ); ?></a><br>
			Template by <a target="_blank" href="http://startbootstrap.com/">Start Bootstrap</a> &#183; View on <a href="https://github.com/lukechanning/grayscale-press">GitHub</a>
		</div>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer();
echo '<script src="' . plugin_dir_url(__FILE__) . '/js/main.min.js"></script>';
?>

</body>
</html>
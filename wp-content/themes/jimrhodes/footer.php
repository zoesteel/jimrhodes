<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="container">
		<div class="row">
			<div class="col-12">
				<footer class="site-footer" id="colophon">
					<div class="site-info">
							&copy; <?php echo date("Y"); ?>
							| <?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Theme: %1$s by %2$s.', 'understrap' ), $the_theme->get( 'Name' ),  '<a href="'.esc_url( __('http://zoesteel.com')).'" target="_blank">Zoe Steel</a>' ); ?> 
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- container end -->
</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script>

//this removes the image name from the lightbox
jQuery(".envira-gallery-image, .envira-gallery-link").attr("title", "");

</script>
</body>
</html>
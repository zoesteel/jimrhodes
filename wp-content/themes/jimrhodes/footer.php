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

<script>// When the user scrolls the page, execute myFunction 
window.onscroll = function() { stickyHeader()};

// Get the header
var header = document.getElementById("sticky-header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    document.getElementsByClassName('test').classList.add("d-block");
    // document.getElementsByClassName('test').classList.remove("d-none");

  } else {
    header.classList.remove("sticky");
    document.getElementsByClassName('test').classList.remove("d-block");
    document.getElementsByClassName('test').classList.add("d-none");

  }
}

//this removes the image name from the lightbox
jQuery(".envira-gallery-image, .envira-gallery-link").attr("title", "");

//burger menus
function burgerAnimation(x) {
    x.classList.toggle("change");
}

jQuery('.burger-menu').click(function(){

	jQuery('#mobile-menu').toggleClass('display-none');


});

</script>
</body>
</html>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<main class="site-main " id="main">


<section id="about">
<div class="wrapper" style="background-color: black" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> container-main "  id="content" tabindex="-1" style="height: 100vh; width: 100vw">

		<div class="row">

			<div class="col-12 d-flex justify-content-center align-items-center">
						
				<h2 style="color: white">Coming Soon</h2>

			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end wrapper -->
</section>

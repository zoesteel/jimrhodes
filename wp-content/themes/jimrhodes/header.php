<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark ">

		<?php if ( 'container' == $container ) : ?>
			<div class="container d-flex justify-content-center" >
		<?php endif; ?>
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							
	        					<img src="<?php echo get_template_directory_uri(); ?>/img/jim-rhodes-2.jpg" class="title-img" alt="Jim Rhodes Musician" />  

							<h1 class="navbar-brand mb-0 title-txt"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

	        					<img src="<?php echo get_template_directory_uri(); ?>/img/jim-rhodes-2.jpg" class="title-img img-fluid" alt="Jim Rhodes Musician" />  

							<h1 class="navbar-brand title-txt" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></h1>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<!-- The WordPress Menu goes here -->
				</div> <!-- end container -->

			<?php if ( 'container' == $container ) : ?> 
				<div class="container-fluid d-flex justify-content-center" >
			 <?php endif; ?>		 
			

				<!-- <?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>  -->

				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>-->
 
			</div><!-- .container -->			
		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
 <div class="wrap" id="sticky-header">
	<div class="container nav-menu">
		<div class="row">
			<div class="col-12">
				<ul class="flex-column flex-sm-row align-items-center justify-content-center d-flex">
					<li><a href="#about">ABOUT</a></li> 
					<?php $news = get_field('news'); if($news){ ?> <li><a href="#news">NEWS</a></li> <?php  }?>
					<li><a href="#shows">SHOWS</a></li>
					<li><a href="#photos">PHOTOS</a></li>
					<li><a href="#videos">VIDEOS</a></li>
					<?php $band_name = get_field('band_name'); if($band_name){ ?> <li><a href="#band-info" style="text-transform: uppercase;"><?php echo $band_name; ?></a></li> <?php  }?>
					<li><a href="#songs">SONG LIST</a></li>
					<li><a href="#contact">CONTACT</a></li>
				</ul>
			</div>
			<!-- <div class="col-12 d-flex justify-content-center">
				<div class="burger-menu d-md-none" id="burger-menu" onclick="burgerAnimation(this)">
				  <div class="bar1"></div>
				  <div class="bar2"></div>
				  <div class="bar3"></div>
				</div>

				<ul class="flex-row justify-content-center mobile-menu" id="hello">
					<li><a href="#about">ABOUT</a></li> 
					<?php $news = get_field('news'); if($news){ ?> <li><a href="#news">NEWS</a></li> <?php  }?>
					<li><a href="#shows">SHOWS</a></li>
					<li><a href="#videos">VIDEOS</a></li>
					<li><a href="#songs">SONG LIST</a></li>
					<li><a href="#contact">CONTACT</a></li>
				</ul>


			</div> -->

		</div>
	</div>
</div>  


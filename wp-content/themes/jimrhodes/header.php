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

			<?php // if ( 'container' == $container ) : ?>
			<div class="container d-flex justify-content-center" >
			<?php // endif; ?>
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<!-- Your site title as branding in the menu -->
						
		    			<img src="<?php echo get_template_directory_uri(); ?>/img/jim-rhodes-2.jpg" class="title-img" alt="Jim Rhodes Musician" />  

						<h1 class="navbar-brand title-txt" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></h1>
						
					</div> <!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
	
		
		</div><!-- .wrapper-navbar end -->
		<div class="wrap" id="sticky-header">
			<div class="container nav-menu">
				<div class="row">
					<div class="col-12 main-menu">
						<ul class="menu-ul d-none d-md-flex flex-md-row align-items-center justify-content-center">
							<li class="test"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/jr.png" alt="Jim Rhodes" id="initials"></a></li>
							<li><a href="#about">ABOUT</a></li> 
							<?php $news = get_field('news'); if($news){ ?> <li><a href="#news">NEWS</a></li> <?php  }?>
							<li><a href="#shows">SHOWS</a></li>
							<li><a href="#photos">PHOTOS</a></li>
							<li><a href="#videos">VIDEOS</a></li>
							<?php $band_name = get_field('band_name'); if($band_name){ ?> <li><a href="#band-info" style="text-transform: uppercase;"><?php echo $band_name; ?></a></li> <?php  }?>
							<li><a href="#songs">SONG LIST</a></li>
							<li><a href="#contact">CONTACT</a></li>
						</ul>
					</div><!-- end main menu -->
					<div class="mobile-menu-container">
						<div class="burger-menu d-md-none" id="burger-menu" onclick="burgerAnimation(this)">
						    <div class="bar1"></div>
						    <div class="bar2"></div>
						  	<div class="bar3"></div>
						</div><!-- end burger menu -->
						<ul class="mobile-menu display-none d-md-none" id="mobile-menu">
							<li><a href="#about">ABOUT</a></li> 
							<?php $news = get_field('news'); if($news){ ?> <li><a href="#news">NEWS</a></li> <?php  }?>
							<li><a href="#shows">SHOWS</a></li>
							<li><a href="#photos">PHOTOS</a></li>
							<li><a href="#videos">VIDEOS</a></li>
							<?php $band_name = get_field('band_name'); if($band_name){ ?> <li><a href="#band-info" style="text-transform: uppercase;"><?php echo $band_name; ?></a></li> <?php  }?>
							<li><a href="#songs">SONG LIST</a></li>
							<li><a href="#contact">CONTACT</a></li>
						</ul>
					</div><!-- end mobile menu --> 
				</div><!-- end row --> 
			</div><!-- end nav menu -->
		</div> <!-- end sticky header wrap -->
	</nav>
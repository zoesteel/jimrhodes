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
<div class="wrapper about-me" id="index-wrapper">

	<div class="container container-main" id="content" tabindex="-1">

		<div class="row">

			<div class="col-12">
				<?php $aboutMe = get_field('about_me'); ?>
				<?php echo $aboutMe; ?>
			</div>

			
			<!-- Do the left sidebar check and opens the primary div -->
			<!-- <?php get_template_part( 'global-templates/left-sidebar-check' ); ?> -->


			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end wrapper -->
</section>

<?php $news = get_field('news'); ?>
<?php if($news) { ?>

<section id="news">
<div class="wrapper news" id="index-wrapper">
			
	<div class="<?php echo esc_attr( $container ); ?> container-main" id="content" tabindex="-1">

				<div class="row">
					<div class="col-12">
							
							<h2 class="section-heading"><?php echo get_the_date(); ?></h2>

							<p>
								<?php echo $news; ?>		
							</p>			 
							
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
</div><!-- end wrapper --> 		
</section>
<?php  } 	?>

<section id="shows">
<div class="wrapper shows" id="index-wrapper">
			
	<div class="container container-main" id="content" tabindex="-1">

				<div class="row">
					<div class="col-12">
							
						<h2 class="section-heading">SHOWS</h2>
						<table class="table">	
						<!-- <thead>
						    <tr>
						      <th scope="col">Date</th>
						      <th scope="col">Time</th>
						      <th scope="col">Venue</th>
						      <th scope="col">Band</th>
						    </tr>
						</thead> --> 
						<tbody>
						<?php 

			 				$shows = get_field('shows'); 
			 				
			 				$i= 0;

							foreach($shows as $show):

			 				$date = $show['date'];											
							$time = $show['time']; 
							$venue = $show['venue']; 
							$bandname = $show['band_name']; 
							$i++;
							if($i == 10) break;			
							?>								 
								    
						     <tr> <th scope="row"><?php echo $date; ?></th>
						      <td><?php if($time) { echo $time; } ?></td>
						      <td><?php echo $venue; ?></td>
						      <td><?php if($bandname) { echo $bandname; } ?></td>
						   
					
							<?php endforeach; 
					 	
							// Reset postdata
							wp_reset_postdata();

						?>
							  </tr>							
							</tbody>
						</table>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
</div><!-- end wrapper --> 		
</section>

<?php  
 $videos = get_field('videos');	
 if($videos) { ?>

<section id="videos">
<div class="wrapper videos" id="index-wrapper">
			
	<div class="<?php echo esc_attr( $container ); ?> container-main" id="content" tabindex="-1">

				<div class="row">
					<div class="col-12">
							
							<h2 class="section-heading">VIDEOS</h2>
				 	</div>
				 									
								<?php
								//Loop through the $videos object
									foreach($videos as $video){ 	?>					
																	
							<div class="col-12 col-lg-6 d-flex justify-content-center mb-4">			
								<?php	echo $video['video_link']; ?>
							</div>																			
						<?php	} ?>
					 		
				 	</div>
				 </div>
				 <div class="row">
				 	<div class="col-12 col-md-6">
				 		
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
</div><!-- end wrapper --> 		
</section>
<?php } ?>

<section id="songs">
<div class="wrapper songs" id="index-wrapper">
			
	<div class="<?php echo esc_attr( $container ); ?> container-main" id="content" tabindex="-1">

				<div class="row">
					<div class="col-12">
							
							<h2 class="section-heading">SONG LIST</h2>
							<p class="section-p">Jim's solo show offers everything from intimate, acoustic arrangements to an upbeat energy packed show using professionally programmed backing tracks. The song list varies from show to show, depending on the crowd and the venue. Playing hits by some of these artists:</p>

				 	</div>
				 </div>
				 <div class="row">
		 			<?php  
		 			$songs = get_field('set_list'); 				 	

					foreach($songs as $song) { 	
						$songName = $song['song_name']; ?>
						<p class="col-12 col-sm-6 col-lg-4"><?php echo $songName; ?></p>									
						
					 <?php  } ?> 
			</div><!-- end row -->
		</div><!-- end container -->
</div><!-- end wrapper --> 		
</section>


<section id="contact">
<div class="wrapper contact" id="index-wrapper">
			
	<div class="<?php echo esc_attr( $container ); ?> container-main" id="content" tabindex="-1">

				<div class="row">
					<div class="col-12">
							
							<h2 class="section-heading">CONTACT</h2>

				 	</div>
				 </div>
				 <div class="row">


				 	<div class="col-12">

				 		<?php $contact='[contact-form-7 id="42" title="Contact form 1 "]'?>
						<?php echo do_shortcode($contact);?>
				 		
					</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
</div><!-- end wrapper --> 		
</section>


			<!-- tour dates -->

			<?php 
			// put this in template part?

			// $show = get_field('');

			$showDate = get_field('show_date');
			$showTime = get_field('show_time');
			$showVenue = get_field('show_venue');
			$nameOfBand = get_field('name_of_band');

			?>

			<table>


			</table>


			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->
	

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

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
<main class="site-main" id="main">


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
					<p><?php echo $news; ?></p>			 
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end wrapper --> 		
</section>
<?php  } 	?>

<section id="shows">
	<div class="wrapper shows black-bg" id="index-wrapper">
		<div class="container container-main" id="content" tabindex="-1">
			<div class="row">
				<div class="col-12">						
					<h2 class="section-heading">SHOWS</h2>
					<!-- <table class="table">						 -->
						<!-- <tbody> -->
							<?php 
				 				$shows = get_field('shows'); 		 				
				 				$i= 0;
								foreach($shows as $show):

				 				$date = $show['date'];											
								$time = $show['time']; 
								$venue = $show['venue']; 
								$bandname = $show['band_name']; 
								$i++;
								// if($i == 10) break;			
							?>								 
							    
						   <!--  <tr><th scope="row"><?php echo $date; ?></th>
							    <td><?php if($time) { echo $time; } ?></td>
							    <td><?php echo $venue; ?></td>
							    <td><?php if($bandname) { echo $bandname; } ?></td>
						   
								<?php endforeach; 				 	
								// Reset postdata
								wp_reset_postdata();
								?>
						  	</tr>					 -->		
						<!-- </tbody> -->
					<!-- </table> -->
					<!-- class="d-flex flex-column justify-content-between flex-md-row" -->
					
						<?php 
				 				$shows = get_field('shows'); 		 				
				 				$i= 0;
								foreach($shows as $show):

				 				$date = $show['date'];											
								$time = $show['time']; 
								$venue = $show['venue']; 
								$bandname = $show['band_name']; 
								$i++;
								// if($i == 10) break;			
							?>		
						<div class="show-date d-flex flex-column flex-md-row align-items-center">
							<p class="col-12 col-md-3"><strong><?php echo $date; ?></strong></p>
							<p class="col-12 col-md-2"><?php if($time) { echo $time; } ?></p>
							<p class="col-12 col-md-4"><?php echo $venue; ?></p>
							<p class="col-12 col-md-3"><?php if($bandname) { echo $bandname; } ?></p>
						</div>
						<?php endforeach; 				 	
							// Reset postdata
							wp_reset_postdata();
							?>
					
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end wrapper --> 		
</section>

<section id="photos">
	<div class="wrapper photos" id="index-wrapper">
		<div class="container container-main" id="content" tabindex="-1">
			<div class="row">
				<div class="col-12">
					<h2 class="section-heading">PHOTOS</h2>
				</div><!-- end col -->
				<div class="col-12 d-flex justify-self-center">
					<?php echo do_shortcode('[envira-gallery id="126"]'); ?>
				</div><!-- end col --> 
			</div><!-- end row -->
		</div><!-- container main --> 
	</div><!-- end photos wrapper -->
</section>

<?php  
 $videos = get_field('videos');	

 if($videos) { ?>

<section id="videos">
	<div class="wrapper videos black-bg" id="index-wrapper">			
		<div class="<?php echo esc_attr( $container ); ?> container-main" id="content" tabindex="-1">
			<div class="row">
				<div class="col-12">							
					<h2 class="section-heading">VIDEOS</h2>
			 	</div><!-- end col -->
			 									
				<?php
				//Loop through the $videos object
					foreach($videos as $video){ 
						 	$video_name = $video['name'];
							$video_credit = $video['credits']; 

				?>					
																
				<div class="videos-div col-10 col-lg-6 mb-4">	
					<?php  
						echo $video['video_link']; 
						echo '<p class="align-self-center justify-self-center video-title">';
						echo $video_name; 
						echo '<br />';
						echo $video_credit;
						echo '</p>';					
					 ?>
				</div><!-- end videos div -->																			
				<?php	} ?>	
		 	</div><!-- end row -->
		</div><!-- end container --> 
	</div><!-- end wrapper --> 		
</section>
<?php } ?>

<?php  
 $band_name = get_field('band_name');	
 $band_info = get_field('band_info');	
 $band_logo = get_field('band_logo');


 if($band_name) { ?>

<section id="band-info">
	<div class="wrapper band-members" id="index-wrapper">			
		<div class="<?php echo esc_attr( $container ); ?> container-main" id="content" tabindex="-1">
			<div class="row">
				<div class="col-12">							
					<h2 class="section-heading"><?php echo $band_name; ?></h2>
					<?php if($band_logo) { ?> <img src="<?php echo $band_logo['url']; ?>" class="img-fluid band-logo" alt="<?php echo $band_name; ?> Logo" width="200" /> <?php } ?>
					<?php if($band_info) { ?> <p><?php echo $band_info; ?></p><?php } ?>					
				</div><!-- end col -->
			</div><!--- end row -->
			<div class="row">
				<?php 
				$band_members = get_field('band_members'); 

				foreach($band_members as $band_member):

	 				$name = $band_member['name'];											
					$info = $band_member['info']; 
					$band_bio_title = $band_member['band_member_bio_title'];
					$band_member_bio = $band_member['band_member_bio'];
					$photo = $band_member['photo']; 
					 
					?>	
					<div class="col-12">
						<h4 class="band-member-name"><?php echo $name; ?></h4>
					</div>

					<?php if( !empty($photo) ): ?>
					<div class="col-12 col-lg-3">
						<img src="<?php echo $photo['url']; ?>" class="img-fluid band-member-photo" alt="<?php echo $name; ?>" />
					</div>
					<?php endif; ?>
						
					<div class="col-12 col-lg-9">
						<?php if( !empty($info) ) : ?>
							<p class="band-member-info"><?php echo $info; ?></p>
						<?php endif; ?>

						<?php if( !empty($band_bio_title) ) : ?>
						<!-- <div class=" "> -->
							<h4 class="band-bio-title"><?php echo $band_bio_title; ?></h4>
						<!-- </div> -->
						<?php endif; ?>

						<?php if( !empty($band_member_bio) ) : ?>
							<p class="band-member-bio"><?php echo $band_member_bio; ?></p>
						<?php endif; ?>
					</div><!-- end col -->
					<?php endforeach; 
					 	
					// Reset postdata
				wp_reset_postdata(); ?>
			</div><!-- end row -->
		</div><!-- end container main -->
	</div><!-- end band members wrapper -->
</section>

<?php } ?>

<section id="songs">
	<div class="wrapper songs" id="index-wrapper">		
		<div class="<?php echo esc_attr( $container ); ?> container-main" id="content" tabindex="-1">
			<div class="row">
				<div class="col-12">
					<h2 class="section-heading">SONG LIST</h2>
					<p class="section-p">Jim's solo show offers everything from intimate, acoustic arrangements to an upbeat energy packed show using professionally programmed backing tracks. The song list varies from show to show, depending on the crowd and the venue. Playing hits by some of these artists:</p>
			 	</div><!-- end col --> 
			</div><!-- end row -->
			<div class="song-list">
	 			<?php  
		 			$songs = get_field('set_list'); 				 	

					foreach($songs as $song) { 	
						$songName = $song['song_name']; ?>
						<p class="song-name"><?php echo $songName; ?></p>								
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
			 	</div><!-- end col -->
			</div><!-- end row -->
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

// $show = get_field('');

$showDate = get_field('show_date');
$showTime = get_field('show_time');
$showVenue = get_field('show_venue');
$nameOfBand = get_field('name_of_band');

?>

</main><!-- #main -->

<!-- The pagination component -->
<?php understrap_pagination(); ?>

</div><!-- #primary -->
</div><!-- .row -->
</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>

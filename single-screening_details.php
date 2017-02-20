
<section class="image">
			     <?php 
				if ( get_field('full_width_image')):
			     $image = get_field('full_width_image');?>
	             <img src="<?php echo $image['url'];?>"/>
				<?php endif;?>
			</section>

<div class="container">
	<div class="row">
		<article class="white_bg single-film">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php edit_post_link('edit', '<p>', '</p>'); ?>
			

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section class="col-md-7">

			<h1><?php the_title();?></h1>

			
				
			<div class="title-details">
				<?php if (the_field('year_of_production')):
					the_field('year_of_production'); 
				endif;?> |
				<?php if (the_field('country_of_origin')):
					the_field('country_of_origin'); 
				endif;?> |
				<?php if (the_field('running_time')):
					the_field('running_time'); 
				 endif;?>
				 Minutes
			</div>

			
					<p>
						<?php the_content(); ?>
					</p>
				</section>

				<section class="col-md-5">
					<?php if(get_field('workshops_and_panels') == true):?>
					
						
						<!---SCREENING LOCATION AND DATE-->
					<div class="screening-callout">
						<p class="screening-date"><?php
							$raw_date = get_field('screening_date');
							echo date('M j, Y', $raw_date);?> @
							<?php echo date('g:i a ', $raw_date);?></p>
						<p>
							<a class="screening-venue" href="/venues">
								<?php the_field('screening_location');?><i class="fa fa-external-link"></i>
							</a>
						</p>
						
							<?php if (get_field('get_tickets')):?>
							<a target="_blank" href="<?php the_field('get_tickets');?>" class="btn btn-primary" href="#"> <i class="fa fa-ticket fa-lg"></i>Get tickets</a>
						<?php else:?>
							<a target="_blank" class="btn btn-primary" href="http://northwestfest.ca/ticket-options/"><i class="fa fa-ticket fa-lg"></i>Get Tickets</a>
						<?php endif;?>

					</div>



					<!---FILM INFO-->
					<div class="screening-information">
						<h4>Event Information</h4>
						<?php if (get_field('ticket_price')): ?>
							<p><strong>Price:</strong> $<?php the_field('ticket_price');?></p>
						<?php endif;?>
						<?php if (get_field('website')):?>
							<p><a a class="btn btn-primary" href="<?php the_field('website');?>">View the Website</a></p>
						<?php endif;?>
					</div>
				</div>
			</div>





					<?php else:?>
				
					<!---SCREENING LOCATION AND DATE-->
					<div class="screening-callout">
						<p class="screening-date"><?php
							$raw_date = get_field('screening_date');
							echo date('M j, Y', $raw_date);?> @
							<?php echo date('g:i a ', $raw_date);?></p>
						<p>
							<a class="screening-venue" href="/venues">
								<?php the_field('screening_location');?><i class="fa fa-external-link"></i>
							</a>
						</p>
						
							<?php if (get_field('get_tickets')):?>
							<a target="_blank" href="<?php the_field('get_tickets');?>" class="btn btn-primary" href="#"> <i class="fa fa-ticket fa-lg"></i>Get tickets</a>
						<?php else:?>
							<a target="_blank" class="btn btn-primary" href="http://northwestfest.ca/ticket-options/"><i class="fa fa-ticket fa-lg"></i>Get Tickets</a>
						<?php endif;?>


						
						<?php if(get_field('movie_trailer')):?>
							
						<!-- Button trigger modal -->
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
						  <i class="fa fa-youtube-play fa-lg"></i> Watch Trailer
						</a>


						<?php endif;?>
					</div>



					<!---FILM INFO-->
					<div class="screening-information">
						<h4>Film Information</h4>
						<?php if (get_field('ticket_price')): ?>
							<p><strong>Price:</strong> $<?php the_field('ticket_price');?></p>
						<?php endif;?>
							<div class="screening-meta">
						<?php if (get_field('country_of_origin')):?>
							<p><strong>Country:</strong> <?php the_field('country_of_origin'); ?></p>
						<?php endif;?>
						<?php if (get_field('year_of_production')):?>
							<p><strong>Production year:</strong> <?php the_field('year_of_production'); ?></p>
						<?php endif;?>
						<?php if (get_field('running_time')):?>
							<p><strong>Running time:</strong> <?php the_field('running_time');?> minutes</p>
						<?php endif;?>
						<?php if (get_field('director')):?>
							<p><strong>Director:</strong> <?php the_field('director');?></p>
						<?php endif;?>
						<?php if (get_field('language')):?>
							<p><strong>Language:</strong> <?php the_field('language');?></p>
						<?php endif;?>
						<?php if (get_field('website')):?>
							<p><a a class="btn btn-primary" href="<?php the_field('website');?>">View the Film's Website</a></p>
						<?php endif;?>
					</div>
				</div>
			</div>
			<?php endif;?>
			<?php endwhile; ?>

			<?php else : ?>
			Sorry, there is no content here.

			<?php endif; ?>

		</section>
		<footer class="programming-stream col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<hr /> 
			<?php if(get_field('workshops_and_panels') != true):?>
				<?php if (get_field('programming_stream') != 'None'):?>
					<p>Part of the <?php the_field('programming_stream');?> Programming Stream
					<a class="btn btn-primary" href="/programming-streams">Learn more > </a></p>
				<?php endif;?>
			<?php endif;?>
			</footer>
			
			</div>
		</article>
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><h3><?php the_title();?></h3>
      </div>
      <div class="modal-body">
        	<?php if(get_field('movie_trailer')):?>
								<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					  <iframe class="embed-responsive-item" src="<?php the_field('movie_trailer');?>"></iframe>
					</div>
				<?php endif;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
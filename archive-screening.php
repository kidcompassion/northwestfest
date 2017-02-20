<?php
/*
Template Name: Template for NWF sked
*/
?>
<div class="container">  
	<div class="row">
			<article class="white_bg grid">
				<div class="col-md-12">
					<h1>FILM SCHEDULE 2016</h1>
					<p><a href="/ticket-options/">Get tickets and passes ></a></p>
					</div>
				<?php
				// Get all screenings
				$args = array(
					'posts_per_page'=>-1,
					'post_type'=>'screening_details',
					'meta_key'=>'screening_date',
					//Immediately order by Unix timestamp, to avoid hassles post-conversion to standard format
					'orderby'=> 'meta_value_num',
					'order'=>'ASC'
					);
				// Name my snazzy new query
				$screener_query = new WP_Query($args);
				$prev_date = '';
				// Loop it up!
				if ($screener_query->have_posts()):
					while( $screener_query->have_posts() ) : $screener_query->the_post();

					// Convert timestamp to human readable format
					$screening_date = get_field('screening_date');
					$screening_date = date("F j, Y", $screening_date);
					$screening_time = get_field('screening_date');
					$screening_time = date("g:i a", $screening_time);

					//Print the individual film titles & meta with Bootstrap Classes
					echo '<ul class="col-xs-12 col-md-12">';		
					//if there is a date that repeats, limit it to the first iteration, so we don't see every date
					if ($prev_date != $screening_date){
						echo '<li class="col-xs-12 ol-md-12"><h3>' . $screening_date .'</h3></li>';
					}
					echo '<a href="';

					if (get_field('alternate_url')){
						echo get_field('alternate_url');
					} else {

					the_permalink();
					}
					echo '">';
					echo '<li class="col-md-1">';

					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('wee_image');
					} 
					echo '</li>';
		
					echo '<li class="col-xs-12 col-md-2">' . $screening_time . '</li>';
					echo '<li class="col-xs-12 col-md-4"><strong>';
					the_title();
					echo '</strong></li>';
					echo '<li class="col-xs-12 col-md-4">' . get_field('screening_location') . '</li>';
					echo '</a></ul>';
					//save date from previous film for comparison on next loop
					$prev_date = $screening_date;
					endwhile;
				endif;

				//Reset global postdata or risk doom!
				wp_reset_postdata();
				?>
			</article>
		</div></div>
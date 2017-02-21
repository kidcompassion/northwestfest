

<div class="container">  
	<div class="row">
			<article class="white_bg grid">
				<div class="col-md-12">
					<h1>News</h1>
					<?php if (!have_posts()) : ?>
					  <div class="alert alert-warning">
					    <?php _e('Sorry, no results were found.', 'sage'); ?>
					  </div>
					  <?php get_search_form(); ?>
					<?php endif; ?>

					<?php while (have_posts()) : the_post(); ?>
						<p><?php the_post_thumbnail('tablet_image');?></p>
						  <h1 class="entry-title"><?php the_title(); ?></h1>
      					<em><?php get_template_part('templates/entry-meta'); ?></em>
					  	
					  	<p><?php the_excerpt();?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>
				</div>
			</article>
		</div>
	</div>

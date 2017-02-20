

<div class="container">  
	<div class="row">
			<article class="white_bg grid">
				<div class="col-md-12">
					<div class="col-md-8">
					<h1>News</h1>
					<?php if (!have_posts()) : ?>
					  <div class="alert alert-warning">
					    <?php _e('Sorry, no results were found.', 'sage'); ?>
					  </div>
					  <?php get_search_form(); ?>
					<?php endif; ?>

					<?php while (have_posts()) : the_post(); ?>
					<div class="pre-jump">
					<a href="<?php the_permalink();?>">
					 <h3 class="entry-title"><?php the_title(); ?></h3>
      					<em><?php get_template_part('templates/entry-meta'); ?></em>
					  	
					  	<p><?php the_excerpt();?>
						<p><?php the_post_thumbnail('tablet_image');?></p>
					</a>
						 </div>

					<?php endwhile; ?>
				</div>
				<div class="col-md-4">
					<em><?php get_template_part('templates/sidebar'); ?></em>
				</div>

					
				</div>
				<?php the_posts_navigation(); ?>
			</article>
		</div>
	</div>

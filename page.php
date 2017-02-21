<?php while (have_posts()) : the_post(); ?>

<div class="container">  
	<div class="row">
		  <article class="white_bg">
		  <?php get_template_part('templates/page', 'header'); ?>
		  <?php get_template_part('templates/content', 'page'); ?>
			</article>
		</div>
		<aside class="sidebar">
			<?php get_template_part('templates/content', 'sidebar'); ?>
		</aside>
</div>
<?php endwhile; ?>

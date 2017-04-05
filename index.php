
<section class="blog container">
<h1>NEWS</h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="blog-post col-md-7">
	<p class="blog-date"><?php the_time('F j, Y');?></p>
		
	<h2 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	<strong>Posted by <?php the_author();?></strong>
	<?php if (the_post_thumbnail()):?>
			<?php the_post_thumbnail('wee_image');?>
		<?php endif;?>
	<p><?php the_excerpt();?></p>
</article>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<aside>
<?php get_template_part('templates/sidebar'); ?>
	</aside>
</section>


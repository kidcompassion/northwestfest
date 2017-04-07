<div class="white_bg">
<?php while (have_posts()) : the_post(); ?>
  <article class="blog_post" <?php post_class(); ?>>
  
      <h1 class="entry-title"><?php the_title(); ?></h1>
    <strong>  <?php get_template_part('templates/entry-meta'); ?></strong>
  
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
    <hr>
    </footer>

  </article>
  <?php get_template_part('templates/sidebar'); ?>
<?php endwhile; ?>
</div>

<?php
/*
Template Name: Template for All Products
*/
?>
<div class="container">  
	<div class="row">
			<article class="white_bg grid">
				<div class="col-md-12">
					<h1><?php the_title();?></h1>

				      <!--hero image-->
				      <?php 

				      $args = array(
				          'post_type'=>'product',
				          'meta_key'=>'product_ordering',
					//Immediately order by Unix timestamp, to avoid hassles post-conversion to standard format
					'orderby'=> 'meta_value_num',
					'order'=>'ASC'
				      );
				      // the query
				      $the_query = new WP_Query( $args ); ?>

				      <?php if ( $the_query->have_posts() ) : ?>
				              <!-- the loop -->
				              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				              <div class="col-md-4">
				           		<a href="<?php the_permalink();?>"><h2> <?php the_title();?></h2>
				           			
				           				 <?php if(get_field('product_image')!=''):?>
        								<?php $product_image = get_field('product_image');?>
								            <img src="<?php echo $product_image['url'];?>">
								        <?php endif;?>



				           			</a>
				       			</div>
				              <?php endwhile; ?>
				              <!-- end of the loop -->

				          <!-- pagination here -->

				        <?php wp_reset_postdata(); ?>

				      <?php else : ?>
				        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				      <?php endif; ?>
				  </div><!--hero-->






					</div>
			</article>
		</div></div>
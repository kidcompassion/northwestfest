

<?php
/**
 * Template Name: Front Page
 */
?>
<div class="secondary">
    

        <section class="secondary_options">
            
            <!-- Bubbles -->

            <?php $bubble_one = get_field('bubble_one_image');?>
            <a class="bubble_wrap bubble_one" href="<?php the_field('bubble_one_link');?>">
               <div class="bubble">
                    
                    <p><?php the_field('bubble_one_cta');?></p>
                    <i class="fa fa-ticket fa-2x"></i>
                </div>
            </a>


            <?php $bubble_two = get_field('bubble_two_image');?>
            <a class="bubble_wrap bubble_two" href="<?php the_field('bubble_two_link');?>">
                <div class="bubble">
                    
                    <p><?php the_field('bubble_two_cta');?></p>
                    <i class="fa fa-calendar fa-2x"></i>
                </div>
                
            </a>

            <?php $bubble_three = get_field('bubble_three_image');?>
            <a class="bubble_wrap bubble_three" href="<?php the_field('bubble_three_link');?>">
                <div class="bubble">
                    
                    <p><?php the_field('bubble_three_cta');?></p>
                    <i class="fa fa-heart fa-2x"></i>
                </div>
                
            </a>

        
        </section>
    
</div>

<section class="newest_post">




      <!--hero image-->
      <?php 

      $args = array(
          'post_type'=>'post',
          'posts_per_page'=>'1',
          'post__not_in' => get_option('sticky_posts')

      );
      // the query
      $the_query = new WP_Query( $args ); ?>

      <?php if ( $the_query->have_posts() ) : ?>
          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php if (is_front_page()):
            $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
          <?php else: ?>
          <style>
            .navbar-default .navbar-nav>li>a{
              color: #666!important;
            }
            </style>
          <?php endif;?>

        <div class="hero" <?php if(has_post_thumbnail()):?>style="background-position-y: center; background-repeat: no-repeat; background-blend-mode:screen; background-color: #8d3894; background-position-x: center;background-attachment: fixed; max-width: 100%;background-image: url('<?php echo esc_url($feat_image_url);?>');"<?php endif;?>>
          <div class="hero_copy">
            <div>


                  <p class="line-one"><?php the_field('home_page_line_one');?></p>
                  <h1><?php the_field('home_page_line_two');?></h1>
                  <p class="line-three"><?php the_field('home_page_line_three');?></p>
                  <a class="home-page-cta" href="<?php the_permalink();?>">
                    <?php the_field('home_page_cta');?>
                  </a>
            </div>
          </div>
              

      
      <?php break;?>
      <?php endwhile; ?>
      <!-- end of the loop -->

          <!-- pagination here -->

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
  </div><!--hero-->
</section>



    <!--Stripes-->

<section class="tertiary_options">
    <?php if(get_field('top_bar_headline')!=''):?>
        <?php $top_bar = get_field('top_bar_background');?>
            <div class="bar" style="background-image: url('<?php echo $top_bar['url'];?>');">                 
                <a href="<?php the_field('top_bar_link');?>">
                     <div>
                        <h3><?php the_field('top_bar_headline');?></h3> 
                    </div>
                </a>
            </div>
    <?php endif;?>

    
    <?php if(get_field('second_bar_headline')!=''):?>
        <?php $second_bar = get_field('second_bar_background');?>
            <div class="bar" style="background-image: url('<?php echo $second_bar['url'];?>');">
             <a href="<?php the_field('second_bar_link');?>">
                    <div>
                        <h3><?php the_field('second_bar_headline');?></h3>
                    </div>
                </a>
            </div>
    <?php endif;?>

    <?php if(get_field('third_bar_headline')!=''):?>
        <?php $third_bar = get_field('third_bar_background');?>
            <div class="bar" style="background-image: url('<?php echo $third_bar['url'];?>');">
                <a href="<?php the_field('third_bar_link');?>">
                    <div>
                        <h3><?php the_field('third_bar_headline');?></h3>
                    </div>
                </a>
            </div>
        <?php endif;?>
</section>
  
<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>

<style>
    
    #callToAction{
        position: relative;
        top:20px;
        left:110px;
        border-radius: 0px;
        font-weight: bolder;
        letter-spacing: 1px;
        font-size:18px;
        padding: 3px 18px 3px 18px;
        
    }
    
       .actionBtn{
        border-radius: 0px;
        font-weight: bolder;
        letter-spacing: 1px;
        font-size:18px;
        padding: 3px 18px 3px 18px;
        background-color: #FFB41F;
           color: white;
        
    }
        #actionText{
            font-size: 14px;
            font-weight: 100;
            letter-spacing: 0px;
            color: white;
            text-align: center;
            border: 1px solid white;
        
    }
    
    
   @media screen and (max-width: 993px) {
       #callToAction{
           position: absolute;
           top:8px;
           left:70px;
       }
       #actionBtn{
           font-size: 14px;
       }
       #actionText{
           display:none;
       }
    }
    
    
</style>

<?php if(is_front_page()):?>
<section class="hello_bar">
  <?php if(get_field('hello_bar') != ''):?>
  <div class="inner_hello_bar">
    <?php the_field('hello_bar');?>
  </div>
<?php endif;?>
</section>
<?php endif;?>
<?php if (is_front_page()):?>
<header class="banner navbar navbar-default navbar-static-top" role="banner">
<?php else:?>
  <header class="banner navbar navbar-default navbar-static-top header_fixed" role="banner">
  <?php endif;?>

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="/"><img class="logo" src="<?php echo get_template_directory_uri();?>/assets/images/logo.svg"/></a>
            <ul class="nav navbar-nav " id="callToAction">
                <a href="http://northwestfest.ca/ticket-options"><button class="btn actionBtn" >BUY TICKETS</button></a>
                <p id="actionText">MAY 5TH - 14TH 2016</p>
            </ul>
    </div>

      <nav class="<?php if (!is_front_page()):?>yellow <?php endif;?>primary collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
    
</header>


    <?php if (is_front_page()):?>


      <!--hero image-->
      <?php 

      $args = array(
          'post_type'=>'post',
          'posts_per_page'=>'1',
          'post__in' => get_option('sticky_posts') 
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

          <div class="hero" <?php if(has_post_thumbnail()):?>style="background-position-y: top; background-blend-mode:screen; background-color: #8d3894; background-position-x: center;background-attachment: fixed; background-size: cover; max-width: 100%;background-image: url('<?php echo esc_url($feat_image_url);?>');"<?php endif;?>>
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
<?php endif;?>
<?php if (is_front_page()):?>
  <?php if (get_field('callout')!= ''):?>
  <div class="row">
  <div class="col-md-2"></div>

  <section class="callout">
  <h3><?php the_field('callout');?></h3>
  </section>
  <div class="col-md-2"></div>
</div>
  <?php endif;?>
<?php endif;?>
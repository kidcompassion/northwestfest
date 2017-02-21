

<?php
/**
 * Template Name: Front Page
 */
?>


    <!--Stripes-->

<section class="tertiary_options">
    <?php if(get_field('top_bar_description')!=''):?>
        <?php $top_bar = get_field('top_bar_background');?>
       

            <div class="bar yellow">
                <img src="<?php echo $top_bar['url'];?>"/>
                 <div>
                    <h3><?php the_field('top_bar_headline');?></h3>
                    <p><?php the_field('top_bar_description');?></p>
                     <a href="<?php the_field('top_bar_link');?>" target="_blank" class="btn">
                        <?php the_field('top_bar_cta');?>
                     </a>
                </div>

            </div>
    <?php endif;?>

    
    <?php if(get_field('second_bar_description')!=''):?>
        <?php $second_bar = get_field('second_bar_background');?>

            <div class="bar purple">
                <img src="<?php echo $second_bar['url'];?>"/>
                <div>
                    <h3><?php the_field('second_bar_headline');?></h3>
                    <p><?php the_field('second_bar_description');?></p>
                     <a href="<?php the_field('second_bar_link');?>" target="_blank" class="btn">
                        <?php the_field('second_bar_cta');?>
                     </a>
                </div>
            </div>
    <?php endif;?>

    <?php if(get_field('third_bar_description')!=''):?>
        <?php $third_bar = get_field('third_bar_background');?>
            <div class="bar yellow">
                <img src="<?php echo $third_bar['url'];?>"/>
                <div>
                    <h3><?php the_field('third_bar_headline');?></h3>
                    <p><?php the_field('third_bar_description');?></p>
                     <a href="<?php the_field('third_bar_link');?>" target="_blank" class="btn">
                        <?php the_field('third_bar_cta');?>
                     </a>
                </div>
            </div>
        <?php endif;?>
</section>
  
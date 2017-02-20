<?php while (have_posts()) : the_post(); ?>

<div class="container">  
	<div class="row">
		<div class="col-md-1"></div>
		  <article class="white_bg col-md-10">
		  	<!--<aside class="col-md-3">
		  		 		<a class="twitter-timeline" href="https://twitter.com/nwfyeg" data-widget-id="718881251512426496">Tweets by @nwfyeg</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		
			<?php get_template_part('templates/content', 'sidebar'); ?>
			</aside>-->
		 
		  	<div class="col-md-9">
				<?php get_template_part('templates/page', 'header'); ?>
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
			</article>
			<div class="col-md-1"></div>
		</div>
		
</div>
<?php endwhile; ?>

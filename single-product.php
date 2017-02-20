<?php
/*
Template Name: Template for Products
*/
?>
<div class="container">  
	<div class="row">
			<article class="white_bg grid">
				<div class="col-md-12">
					<span class="breadcrumb"><?php nwf_product_breadcrumb(); ?></span>

				
						<h1><?php the_title();?></h1>


					<div class="col-md-4">
					
					<?php if(get_field('product_image')!=''):?>
					<?php $product_image = get_field('product_image');?>
			            <img src="<?php echo $product_image['url'];?>">
			        <?php endif;?>
			    	</div>
			    	<div class="col-md-8">
<?php if (is_single( 'single-ticket' )) :?>
<p><em>Your selected film will open in a new window. You will need to <a href="https://secure.www.upenn.edu/computing/resources/category/applications/article/configuring-your-web-browser-allow-pop-windows"> enable popups</a>.</em></p>

<label for="film-list">Choose a film: </label><br />
<select class="form-control" name="film-list" id="all-tickets">
<option selected disabled>List of all films</option>
<option value="cabaret">A Little Cabaret</option>
<option value="time">A Matter of Time</option>
<option value="passion">A Passion of Gold and Fire</option>
<option value="river">After the Last River</option>
<option value="holiday">All Abord the CP Holiday Train</option>
<option value="epic">American Epic Sessions</option>
<option value="love">An Act of Love</option>
<option value="prank">Art of the Prank</option>
<option value="blair">Becoming Blair </option>
<option value="slenderman">Beware the Slenderman</option>
<option value="bugs">Bugs on the Menu</option>
<option value="malcolm">Conquering Beauty: The Life and Music of Malcolm Forsyth</option>
<option value="danny">Danny Says</option>
<option value="change">Day of Change</option>
<option value="distant">Distant</option>
<option value="blink">Don’t Blink: Robert Frank</option>
<option value="elder">Elder in the Making</option>
<option value="fallen">Forgotten Fallen</option>
<option value="frame">Frame 394</option>
<option value="wondercat">Frank &amp; the Wondercat</option>
<option value="forward">From this Day Forward</option>
<option value="android">Gary Numan: Android in La La Land</option>
<option value="gayby">Gayby Baby</option>
<option value="henny">Henny’s Opus in B Minor</option>
<option value="freex">Here Come the Videofreex</option>
<option value="hell">Holy Hell</option>
<option value="sparrow">Hooligan Sparrow</option>
<option value="now">How We Are Now</option>
<option value="hunt">Huntwatch</option>
<option value="blues">I Am the Blues</option>
<option value="play">I Am What I Play</option>
<option value="landfill">Landfill Harmonic</option>
<option value="exotique">League of Exotique Dancers</option>
<option value="animated">Life, Animated</option>
<option value="behold">Lo and Behold</option>
<option value="road">Long Road Home</option>
<option value="migrant">Migrant Dreams</option>
<option value="sharon">Miss Sharon Jones!</option>
<option value="nice">Nice People</option>
<option value="stone">No Stone Unturned</option>
<option value="stranger">Not A Stranger</option>
<option value="omnia">Omnia</option>
<option value="pervert">Pervert Park</option>
<option value="racing">Racing Extinction</option>
<option value="raiders">RAIDERS!</option>
<option value="rodeo">Rodeo: Embracing the New Frontier</option>
<option value="santa">Santa School</option>
<option value="sonita">Sonita</option>
<option value="earth">Spaceship Earth</option>
<option value="step">Step by Step</option>
<option value="street">Street Blues</option>
<option value="sugar">Sugar-Coated</option>
<option value="suited">Suited</option>
<option value="surf">Surf Anywhere</option>
<option value="art">The Art House</option>
<option value="kids">The Bad Kids</option>
<option value="caravan">The Caravan</option>
<option value="works">The Complete Works</option>
<option value="dwarvenaut">The Dwarvenaut</option>
<option value="festival">The Festival</option>
<option value="fight">The Harder I Fight II</option>
<option value="mariner">The Lost Mariner</option>
<option value="network">The Network Keeper</option>
<option value="pass">The Pass System</option>
<option value="smalls">the smalls: forever is a long time</option>
<option value="tickled">Tickled</option>
<option value="man">To Be A Man</option>
<option value="tony">Tony Robbins: I Am Not Your Guru</option>
<option value="adnan">under an umbrella we met Adnan</option>
<option value="men">under an umbrella we met Men of Islam</option>
<option value="mina">under an umbrella we met Mina</option>
<option value="syrian">under an umbrella we met Two Syrian Women</option>
<option value="cage">Unlocking the Cage</option>
<option value="visiting">Visiting Day</option>
</select>
<?php endif;?>

					<p><?php echo the_field('product_details');?></p>
					<p><em><?php echo the_field('product_type');?></em></p>
					<p class="product-price"><sup>$</sup><?php echo the_field('product_price');?></p>
					<?php if(get_field('alt_product_name') != ''):?>
						<em><?php echo the_field('alt_product_name');?></em>
					<?php endif;?>
					<?php if(get_field('alt_product_price') != ''):?>
						<p class="product-price"><sup>$</sup><?php echo the_field('alt_product_price');?></p>
					<?php endif;?>
					<?php if (!is_single( 'single-ticket' )) :?>
					<a class="nwf-btn btn btn-primary" href="<?php echo the_field('product_link');?>">Purchase Now</a>
					<?php endif;?>




					</div>




				

					</div>
			</article>
		</div>
	</div>


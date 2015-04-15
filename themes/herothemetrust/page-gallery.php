<?php /*
Template Name: Gallery
*/ ?>
<?php get_header(); ?>
		<div id="content" class="clearfix gallery">
		<?php while (have_posts()) : the_post(); ?>			    
			<div <?php post_class('clearfix'); ?>>				
				<?php //the_content(); 
				$images = get_field("images");
				if($images){
					?>
                  <div id="gallery">  
					<?
					foreach($images as $image){
						?><a href="<?=$image["image"]["sizes"]["large"]?>"><img src="<?=$image["image"]["sizes"]["thumbnail"]?>",
                    data-big="<?=$image["image"]["sizes"]["large"]?>"
                    data-title="<?=$image["title"]?>"
                    data-description="<?=$image["caption"]?>" style="display:none"/></a><?
						
					}
					?>
					 </div>  
					<?
				}
				?>				
			</div>				
			<?php comments_template('', true); ?>			
		<?php endwhile; ?>    	
		</div>
		
<?php get_footer(); ?>
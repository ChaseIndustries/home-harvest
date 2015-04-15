<?php /*
Template Name: Full Width
*/ ?>
<?php get_header(); ?>
		<div id="content" class="clearfix full">
         <? if(get_field("subhead")){ ?>
<h2 class="intro_text"><?=get_field("subhead")?></h2>
<div class="clearfix"></div>
<? } ?>
		<?php while (have_posts()) : the_post(); ?>			    
			<div <?php post_class('clearfix'); ?>>				
				<?php the_content(); ?>				
			</div>				
			<?php //comments_template('', true); ?>			
		<?php endwhile; ?>    	
		</div>
		
<?php get_footer(); ?>
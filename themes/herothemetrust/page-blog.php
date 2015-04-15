<?php /*
Template Name: Blog
*/ ?>
<?php get_header(); ?>
		<div id="content" class="sidebar_cols"?> clearfix">
			<?php while (have_posts()) : the_post(); ?>			    
			    <div <?php post_class('clearfix'); ?>>			
					<?php the_content(); ?>				
				</div>				
				<?php //comments_template('', true); ?>			
			<?php endwhile; ?>					    	
		</div>
		
	<div id="sidebar" class="clearfix cols">
<div class="fb-like-box" data-href="https://www.facebook.com/homeharvest.biz" data-width="300" data-height="600" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="true"></div>
	</div>
		
	
<?php get_footer(); ?>

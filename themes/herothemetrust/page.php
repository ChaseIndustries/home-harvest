<?php get_header(); ?>		
<? 
$imagesFound = get_field("sidebar_images");
$count;
if($imagesFound){
	$images = get_field("sidebar_images");
	$count = count($images);
	$half = round(.5*$count);
}
?>
		<div id="content" class="<?=$count>2?"sidebar_cols":"twoThirds"?> clearfix">
        <? if(get_field("subhead")){ ?>
<h2 class='intro_text'><?=get_field("subhead")?></h2>
<div class="clearfix"></div>
<? } ?>
			<?php while (have_posts()) : the_post(); ?>			    
			    <div <?php post_class('clearfix'); ?>>			
					<?php the_content(); ?>				
				</div>				
				<?php //comments_template('', true); ?>			
			<?php endwhile; ?>					    	
		</div>
		<?php get_sidebar(); ?>
		
	
<?php get_footer(); ?>

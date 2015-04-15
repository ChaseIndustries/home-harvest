<?php get_header(); ?>
<?php $blog_page_id = of_get_option('ttrust_blog_page'); ?>
<?php $blog_page = get_page($blog_page_id); ?>
<? $is_blog = $blog_page->post_title == "Blog"; ?>
<?=($is_blog?'<div class="container-sm">': "")?>
<div id="content" class="clearfix <?=($is_blog?"":"full")?>">	
<?php if(!is_front_page()) : ?>
<div id="pageHead">
	
	<h1><?php echo $blog_page->post_title; ?></h1>
	<?php $page_description = get_post_meta($blog_page_id, "_ttrust_page_description_value", true); ?>
	<?php if ($page_description) : ?>
		<p><?php echo $page_description; ?></p>
	<?php endif; ?>
	
</div>
<?php endif; ?>
	<?php while (have_posts()) : the_post(); ?>			    
		<div <?php post_class(); ?>>					
			<div class="inside">															
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
				<div class="meta clearfix">
					<?php $post_show_author = of_get_option('ttrust_post_show_author'); ?>
					<?php $post_show_date = of_get_option('ttrust_post_show_date'); ?>
					<?php $post_show_category = of_get_option('ttrust_post_show_category'); ?>
					<?php $post_show_comments = of_get_option('ttrust_post_show_comments'); ?>
								
					<?php if($post_show_author || $post_show_date || $post_show_category){ _e('Posted ', 'themetrust'); } ?>					
					<?php if($post_show_author) { _e('by ', 'themetrust'); the_author_posts_link(); }?>
					<?php if($post_show_date) { _e('on', 'themetrust'); ?> <?php the_time( 'M j, Y' ); } ?>
					<?php if($post_show_category) { _e('in', 'themetrust'); ?> <?php the_category(', '); } ?>
					<?php if(($post_show_author || $post_show_date || $post_show_category) && $post_show_comments){ echo " | "; } ?>
					
					<?php if($post_show_comments) : ?>
						<a href="<?php comments_link(); ?>"><?php comments_number(__('No Comments', 'themetrust'), __('One Comment', 'themetrust'), __('% Comments', 'themetrust')); ?></a>
					<?php endif; ?>
				</div>						
				
				<?php if(has_post_thumbnail()) : ?>
					<?php if(of_get_option('ttrust_post_featured_img_size')=="large") : ?>											
		    			<a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_post_thumbnail('ttrust_post_thumb_big', array('class' => 'postThumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>		    	
					<?php else: ?>
						<a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_post_thumbnail('ttrust_post_thumb_small', array('class' => 'postThumb alignleft', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>
					<?php endif; ?>
				<?php endif; ?>															
				
				<?php the_excerpt(); ?>
				<?php more_link(); ?>		
			</div>																				
	    </div>				
	
	<?php endwhile; ?>
	
	<?php get_template_part( 'part-pagination'); ?>
			    	
</div>	
<? if($is_blog){ ?>

<div id="sidebar">
  <div class="fb-like-box" data-href="https://www.facebook.com/homeharvest.biz" data-width="300" data-height="600" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="true"></div>
</div>
</div>
<? } ?>
<?php get_footer(); ?>

    </div>
	</div>
	<div id="footer">
		<div class="inside">		
		<!--<div class="main clearfix">
		<?php	
		if(is_front_page() && is_active_sidebar('footer_home')) : dynamic_sidebar('footer_home'); 			
		elseif(is_archive() && is_active_sidebar('footer_posts')) : dynamic_sidebar('footer_posts');
		elseif(is_single() && is_active_sidebar('footer_posts')) : dynamic_sidebar('footer_posts');
		elseif(is_home() && is_active_sidebar('footer_posts')) : dynamic_sidebar('footer_posts');
		elseif(is_page() && is_active_sidebar('footer_pages')) : dynamic_sidebar('footer_pages');		
		else : ?>
	
			<?php if (!dynamic_sidebar('footer_default')); ?>						
			
		<?php endif; ?>				
		</div><!-- end footer main -->							
			
		<div class="secondary clearfix">	
			<?php $footer_left = of_get_option('ttrust_footer_left'); ?>
			<?php $footer_right = of_get_option('ttrust_footer_right'); ?>
			<div class="left"><p><?php if($footer_left){echo($footer_left) . "<br>&copy;2008-".date('Y');?> <a href="<?php bloginfo('url'); ?>"><strong><?php bloginfo('name'); ?></strong></a><?php }; ?>
            <br />
            <span><iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fhomeharvest.biz&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action =like&amp;colorscheme=dark&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></span>
            </p></div>
			<div class="right"><p><?php if($footer_right){echo($footer_right);} else{ ?>Theme by <a href="http://themetrust.com" title="Premium WordPress Themes"><strong>Theme Trust</strong></a><?php }; ?></p></div>
		</div><!-- end footer secondary-->		
		</div><!-- end footer inside-->		
        <? if(of_get_option("ttrust_footer_image")){ 
			$image = of_get_option("ttrust_footer_image");
		?>
        	<div id="transp"></div>
        	<img src="<?=$image?>" id="footer_bg_image" />
        <? } ?>
	</div><!-- end footer -->
</div><!-- end container -->
<?php wp_footer(); ?>
<? if(is_page("Gallery")){  ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/galleria-1.3.3.min.js"></script>
<script>
    Galleria.loadTheme('<?php bloginfo('template_directory'); ?>/js/galleria.classic.js');
	Galleria.configure({
    	transition: 'slide',
    	imageCrop: true,
		responsive:true,
		clicknext:true,
		thumbCrop:"landscape",
		swipe:true,
		lazy:true,
		showInfo:true,
		transitionSpeed:400,
		 height: 0.5625
	});
   	Galleria.run('#gallery');
	Galleria.ready(function(){
		var gallery = this; // "this" is the gallery instance
		function resizeGallery(){
				  var w = jQuery(window).width();
				  var g = jQuery("#gallery").height();
				  if(w < 650){
						gallery.resize({width:w,height:w*1.3});
				  }
		}
		jQuery(window).resize(resizeGallery);
		resizeGallery();
	});
</script>
<? } ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js?id=<?=time()?>"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48386656-1', 'homeharvest.biz');
  ga('send', 'pageview');

</script>
</body>
</html>
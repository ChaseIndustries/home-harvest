<!DOCTYPE html>
<html <?php language_attributes(); ?>  ‘xmlns:fb="https://www.facebook.com/2008/fbml"‘>
<head>
<meta name="author" content="Ben Barkan" />
<meta name="copyright" content="Copyright (c)2004-<?=date("Y");?> Home Harvest. All Rights Reserved." />
<meta property="og:title" content="Home Harvest"/>
<meta property="og:type" content="company"/>
<meta property="og:description" content="HomeHarvest designs, builds and maintains high-yielding and beautiful edible gardens in the Greater Boston Area. Applying organic and sustainable techniques, the produce from our gardens is fresh, vibrant and nutrient-dense. We love teaching customers about our natural and holistic approach to farming so they can enjoy stewardship of their gardens."/>
<meta property="og:image" content="<?=of_get_option('fb_logo');?>" />
<meta property="og:site_name" content="Home Harvest - Custom Edible Gardens, Stone Masonry, Landscaping, and More" />
<meta name="description" content="HomeHarvest designs, builds and maintains high-yielding and beautiful edible gardens in the Greater Boston Area. Applying organic and sustainable techniques, the produce from our gardens is fresh, vibrant and nutrient-dense. We love teaching customers about our natural and holistic approach to farming so they can enjoy stewardship of their gardens." />
<meta name="keywords" content="landscaping, edible gardens, vegetable gardens, raised beds, educational farming, landscaping installation, permaculture, stone masonry, chicken coops, greenhouses" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
<title>
<?php bloginfo('name'); ?>
<?php wp_title(); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Racing Sans One:regular,bold" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=The Girl Next Door:regular,bold" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/colorbox.css" />
<?php $heading_font = of_get_option('ttrust_heading_font'); ?>
<?php $body_font = of_get_option('ttrust_body_font'); ?>
<?php $banner_main_font = of_get_option('ttrust_banner_main_font'); ?>
<?php $banner_secondary_font = of_get_option('ttrust_banner_secondary_font'); ?>
<?php if ($heading_font != "") : ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($heading_font)); ?>:regular,italic,bold,bolditalic" />
<?php endif; ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Muli:regular,italic,bold,bolditalic" />
<?php if ($body_font != "" && $body_font != $heading_font) : ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($body_font)); ?>:regular,italic,bold,bolditalic" />
<?php endif; ?>
<?php if ($banner_main_font != "") : ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($banner_main_font)); ?>:regular,italic,bold,bolditalic" />
<?php endif; ?>
<?php if ($banner_secondary_font != "") : ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($banner_secondary_font)); ?>:regular,italic,bold,bolditalic" />
<?php endif; ?>
<? if(is_page("Gallery")){ ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/galleria.classic.css" />
<? } ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if (of_get_option('ttrust_favicon') ) : ?>
<link rel="shortcut icon" href="<?php echo of_get_option('ttrust_favicon'); ?>" />
<?php endif; ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=131407720278257&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="overlay"></div>
<div id="video-modal" class="modal">
  <a href="javascript:;" class="modal--close">&times;</a>
  <div id="player"></div>
</div>
<script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        var winHeight = window.innerHeight;
        var vidHeight = winHeight - ( .2 * winHeight );
        var width = ( vidHeight  * 1.77 ) + "px";
        document.getElementById("video-modal").setAttribute('style', 'width:' + width + ";height:"+vidHeight + "px");
        player = new YT.Player('player', {
          height: '100%',
          width: '100%',
          videoId: 'RLUh-ip5MTw',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
<div id="container">
<div class="wrap">
  <div id="page_top">
    <div id="logo">
      <?php $ttrust_logo = of_get_option('logo'); ?>
      <h1 class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?=$ttrust_logo?>" alt="<?php bloginfo('name'); ?>" /></a></h1>
    </div>
    <div id="mainNav" class="clearfix">
      <?php wp_nav_menu( array('menu_class' => 'sf-menu', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>
    </div>
  <div id="header">
    <?php
		   $images = get_field("top_image_carousel");
    		if(is_front_page() || get_field("home_image") || has_post_thumbnail()) : ?>
    <div id="homeBanner">
      <div class="inner">
        <div class="fade_left"></div>
        <div class="fade_right"></div>
        <div class="fade_top"></div>
        <div class="fade_bottom"></div>
      <?php if(is_front_page()) : ?>
        <? for($i=1;$i<5;$i++){ 
			$banner = of_get_option("ttrust_home_banner_img".$i);
			if($banner){
				$bannerText = of_get_option("ttrust_home_banner_img".$i."_text");
				?>
        <div class="home_text" rel="<?=$i?>" <? if($i > 1){ ?>style="display:none"<? } ?> class="clearfix"><?=$bannerText?></div>
      <img src="<?php echo $banner; ?>" class="bg_image<? if($i==1){ ?> active<? } ?>"<? if($i > 1){?>style="display:none"<? } ?> rel="<?=of_get_option("ttrust_home_banner_img".$i."_align");?>"  />
      <?
			}
		}
	    elseif($images):
				$i = 1;
				foreach($images as $image){ 
				?>
      <img src="<?=$image["image"]["sizes"]["large"];?>" class="bg_image<? if($i==1){ ?> active<? } ?>"<? if($i > 1){?>style="display:none"<? } ?> rel="align_<?=$image["image_alignment"]?>" />
      <div class="home_text"  <? if($i > 1){ ?>style="display:none"<? } ?> ><?=$image["image_text"] ? $image["image_text"] : the_title(); ?></div>
    <?
					$i++;
              }
			
		elseif(has_post_thumbnail()) :
		 ?>
    <div class="home_text" class="clearfix"><?php the_title(); ?></div>
  <?php echo the_post_thumbnail("large",array("class"=>"bg_image","rel"=>"align_".get_field("image_alignment")));
		 endif; ?>
         </div>	<!-- end inner -->
         </div> <!-- end homebanner -->
  <?php endif; ?>
</div>
</div>
<div id="main" class="clearfix <?=is_front_page() ? "home" : "" ?>">

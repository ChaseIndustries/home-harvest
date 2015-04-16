var imagesAligned = false;
var Modal = false;
window.onload = function(){
	var $ = jQuery.noConflict();
	var bg_image = $(".bg_image");
	var bannerDelay = 6000;
	var innerHeight = $("#homeBanner .inner").height();
	
	var modal = function(){
  	var self = this,
  	$self = $(".modal");
  	self.close = function(){
    	$self.fadeOut(300).removeClass("active");
    	$("#overlay").fadeOut(300);
    	$("body").removeClass("freeze");
    	player.stopVideo();
  	}
  	self.open = function(){
    	$self.fadeIn(300).addClass("active");
    	$("body").addClass("freeze");
    	player.playVideo();
    	$("#overlay").fadeIn(300);
    	
  	}
	};
	Modal = new modal();
	//var headerOffset = $("#header .inside").offset().top;
	if($("#logo img").length){
		$("#logo img").fadeIn(2000);
	}
	var adjustSize = function(){
		var homeHeight = $("#homeBanner").height();
		defMargin = [];
		var w = $(window).width();
		var minHeight = homeHeight;
		var maxHeight = 0;
		if(bg_image.length){
					$(".bg_image").each(function(){
						var h = $(this).height();
						var n;
						if(h < minHeight){
							minHeight = h;
							$("#homeBanner, #homeBanner .inner").height(minHeight);	
							homeHeight = h;
						}
						if(h > maxHeight){
							maxHeight = h;	
						}
						var r = Math.abs(homeHeight - h);
						switch($(this).attr("rel")){
							case "align_top":
								n = 0;
							break;
							case "align_middle":
								n = -.5*r;
							break;
							case "align_bottom":
								n = -r;
							break;
							default:
								n = -.5*r;
							break;
						}
						var topMargin = h > homeHeight ? n :  Math.abs(.5*r);
						$(this).css("margin-top",topMargin);
						defMargin.push(topMargin);
						if($(this).index(".bg_image") === 0 && !$(".bg_image:visible").length){
							$(this).show();	
						}
						if($(this).index(".bg_image") == $(".bg_image:last").index(".bg_image")){
							imagesAligned = true;	
							if(maxHeight > $("#homeBanner").height() && maxHeight > innerHeight){
								$("#homeBanner").height("auto");	
								$("#homeBanner .inner").height(innerHeight);
							}
						}
					});
				
		}
	}
	//adjustSize();
	$(window).resize(adjustSize);
	//$(".bg_image").bind("load",adjustSize);
	$(".bg_image").one('load', function() {
  adjustSize();
}).each(function() {
  if(this.complete) $(this).load();
});
	$("#content .page.small a.thumb").hover(function(){
		$(this).find(".transp").stop().fadeIn(300);
	},function(){
		$(this).find(".transp").stop().fadeOut(300);
	});
	if(bg_image.length > 1){
		setInterval(changeImage,bannerDelay);	
	}
	function changeImage(){
	var curImg = $(".bg_image.active").length ? $(".bg_image.active") : $(".bg_image:first");
	var curText = $(".home_text:visible");
	var nextIdx = curImg.index(".bg_image")+1;
	var nextImg = $(".bg_image:eq("+nextIdx+")");
	if(!nextImg.length){
		nextIdx = 0;
		nextImg = $(".bg_image:eq("+nextIdx+")");	
	}
		
		curImg.removeClass("active").fadeOut(1000);
		nextImg.addClass("active").fadeIn(1000);
		var nextText = $(".home_text:eq("+nextIdx+")");
		if(nextText.length && nextText.html() != curText.html() && $.trim(nextText.html())){
			curText.fadeOut(1000);
			setTimeout(function(){
				nextText.fadeIn(1000);
			},1000);
		}
}
	$("#sidebar a").colorbox({width:"80%",rel:"gal"});
	if(bg_image.length){
		$("#menu-item-136").addClass("home");	
	}
	$(".modal--close").on("click", function(){ 
	  Modal.close();
	});
	$("#menu-item-662, .watch-video").on("click" , function(){
  	 Modal.open();
	})
}


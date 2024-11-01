<script type="text/javascript">
	!function($){
		var defaults<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = {
			animation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: "bounce",
			slideSelector<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: ".slide",
			container<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: ".main",
			cssBlur<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: true,
			pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: true,
			loop<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: true,
			autoStart<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: 4000,
		}; 
		$.fn.swipeEvents<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = function() {
			return this.each(function() {
				var startX, startY, $this = $(this);
				$this.bind('touchstart', touchstart<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>);
				function touchstart<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(event) {
					var touches = event.originalEvent.touches;
					if (touches && touches.length) 
					{
						startX = touches[0].pageX;
						startY = touches[0].pageY;
						
						$this.bind('touchmove', touchmove<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>);
					}
					event.preventDefault();
				}
				function touchmove<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(event) {
					var touches = event.originalEvent.touches;
					if (touches && touches.length) 
					{
						var deltaX = startX - touches[0].pageX;
						var deltaY = startY - touches[0].pageY;
						if (deltaX >= 50) { $this.trigger("swipeLeft"); }
						if (deltaX <= -50) { $this.trigger("swipeRight"); }
						if (deltaY >= 50) { $this.trigger("swipeUp"); }
						if (deltaY <= -50) { $this.trigger("swipeDown"); }
						if (Math.abs(deltaX) >= 50 || Math.abs(deltaY) >= 50) { $this.unbind('touchmove', touchmove<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>); }
					}
					event.preventDefault();
				}
			});
		};
		$.fn.transformSlider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = function(settings, pos) {
			var el = $(this)
			switch(settings.animation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>) {
				case 'slide':
					el.addClass("ease").css({ "-webkit-transform": "translate3d(" + pos + "%, 0, 0)", "-moz-transform": "translate3d(" + pos + "%, 0, 0)", "-ms-transform": "translate3d(" + pos + "%, 0, 0)", "transform": "translate3d(" + pos + "%, 0, 0)" });
				break;
				case 'slideUp':
					el.addClass("ease").css({ "-webkit-transform": "translate3d(0, " + pos + "%, 0)", "-moz-transform": "translate3d(0, " + pos + "%, 0)", "-ms-transform": "translate3d(0, " + pos + "%, 0)", "transform": "translate3d(0, " + pos + "%, 0)" });
				break;
				case 'bounce':
					el.addClass("bounce").css({ "-webkit-transform": "translate3d(" + pos + "%, 0, 0)", "-moz-transform": "translate3d(" + pos + "%, 0, 0)", "-ms-transform": "translate3d(" + pos + "%, 0, 0)", "transform": "translate3d(" + pos + "%, 0, 0)" });
				break;
				case 'bounceUp':
					el.addClass("bounce").css({ "-webkit-transform": "translate3d(0, " + pos + "%, 0)", "-moz-transform": "translate3d(0, " + pos + "%, 0)", "-ms-transform": "translate3d(0, " + pos + "%, 0)", "transform": "translate3d(0, " + pos + "%, 0)" });
				break;
				case 'fade':
					el.addClass("no-animation").fadeOut("slow", function() { el.css({ "-webkit-transform": "translate3d(" + pos + "%, 0, 0)", "-moz-transform": "translate3d(" + pos + "%, 0, 0)", "-ms-transform": "translate3d(" + pos + "%, 0, 0)", "transform": "translate3d(" + pos + "%, 0, 0)" }).fadeIn("slow"); });
				//my effects
				case 'fadeEase':
					el.addClass("ease").fadeOut("slow", function() { el.css({ "-webkit-transform": "translate3d(" + pos + "%, 0, 0)", "-moz-transform": "translate3d(" + pos + "%, 0, 0)", "-ms-transform": "translate3d(" + pos + "%, 0, 0)", "transform": "translate3d(" + pos + "%, 0, 0)" }).fadeIn("slow"); });
				break;
				case 'fadeBounse':
					el.addClass("bounce").fadeOut("slow", function() { el.css({ "-webkit-transform": "translate3d(" + pos + "%, 0, 0)", "-moz-transform": "translate3d(" + pos + "%, 0, 0)", "-ms-transform": "translate3d(" + pos + "%, 0, 0)", "transform": "translate3d(" + pos + "%, 0, 0)" }).fadeIn("slow"); });
				break;
				case 'bounce2':
					el.addClass("bounce2").css({ "-webkit-transform": "translate3d(" + pos + "%, 0, 0)", "-moz-transform": "translate3d(" + pos + "%, 0, 0)", "-ms-transform": "translate3d(" + pos + "%, 0, 0)", "transform": "translate3d(" + pos + "%, 0, 0)" });
				break;
				case 'bounce3':
					el.addClass("bounceUp3").css({ "-webkit-transform": "translate3d(" + pos + "%, 0, 0)", "-moz-transform": "translate3d(" + pos + "%, 0, 0)", "-ms-transform": "translate3d(" + pos + "%, 0, 0)", "transform": "translate3d(" + pos + "%, 0, 0)" });
				break;
				case 'bounceUp2':
					el.addClass("bounceUp2").css({ "-webkit-transform": "translate3d(0, " + pos + "%, 0)", "-moz-transform": "translate3d(0, " + pos + "%, 0)", "-ms-transform": "translate3d(0, " + pos + "%, 0)", "transform": "translate3d(0, " + pos + "%, 0)" });
				break;
				case 'bounceUp3':
					el.addClass("bounceUp3").css({ "-webkit-transform": "translate3d(0, " + pos + "%, 0)", "-moz-transform": "translate3d(0, " + pos + "%, 0)", "-ms-transform": "translate3d(0, " + pos + "%, 0)", "transform": "translate3d(0, " + pos + "%, 0)" });
				break;
			}
		}
		$.fn.positionSlides<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = function(settings, index) {
			var el = $(this);
			if (settings.animation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> == "slideUp" || settings.animation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> == "bounceUp" || settings.animation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> == "bounceUp2" || settings.animation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> == "bounceUp3")
			{
				el.css({ top: (index * 100) + "%" });
			} else { el.css({ left: (index * 100) + "%" }); }
		}
		$.fn.immersive_slider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = function(options){
			var settings = $.extend({}, defaults<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>, options),
				el = $(this),
				cssBlur<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = "",
				pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = "";
			// Add all the gs sepecific classes  
			el.addClass("immersive_slider")
			el.find(settings.slideSelector<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>).addClass("is-slide");
			// Use CSS to blur the first image the plugin found automatically 
			if (settings.cssBlur<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> == true) 
			{
				el.find(".is-slide img:first-child").each(function( index ) {
					var activeclass = ""
					if(index == 0) activeclass = "active"
					var img = $(this);
					$(settings.container<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>).addClass("is-container").prepend("<div id='slide_" + (index + 1) + "_bg' class='is-background gs_cssblur " + activeclass + "'>" + img.clone().wrap("<div />").parent().html() + "</div>")
					$("#slide_" + (index + 1) + "_bg").positionSlides<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, index)
				});
			} 
			else 
			{
				el.find(".is-slide").each(function( index ) {
					var activeclass = ""
					if(index == 0) activeclass = "active"
					var img = "<img src='"+ $(this).data("blurred") +"'>";
					$(settings.container<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>).addClass("is-container").prepend("<div id='slide_" + (index + 1) + "_bg' class='is-background " + activeclass + "'>" + img + "</div>")
					$("#slide_" + (index + 1) + "_bg").positionSlides<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, index)
				});
			}
			var y=false;
			if(settings.autoStart<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> != 0 || settings.autoStart<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> != false) 
			{
				setInterval(function() { if(y==true){ return; } el.moveNext<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(); }, settings.autoStart<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>);
			}
			$(settings.container<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>).find(".is-background").wrapAll( "<div class='is-bg-overflow' />");
			el.find(".is-slide").wrapAll( "<div class='is-overflow' />");
			el.find(".is-slide").each(function( index ) {
				var activeclass = ""
				if(index == 0) activeclass = "active"
				$(this).attr("id","slide_" + (index + 1)).addClass(activeclass)
				$(this).positionSlides<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, index)
				if(settings.pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> == true) 
				{
					pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> += "<li><a class='is-page " + activeclass + "' href='#slide_" + (index + 1) + "'></a></li>"
				}
			});
			$("<ul class='is-pagination is-pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'>"+pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>+"</ul>").appendTo(el)
			if(settings.pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> == true)  
			{
				$(document).on('click touchstart', '.is-pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> li a', function() {
					var page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = $(this).attr("href");
					if (!$(this).hasClass("active")) 
					{
						el.moveSlider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>)
					}
					return false;
				});
			}
			$('.is-next<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').on('click touchstart', function() { el.moveNext<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(); return false; });
			$('.is-prev<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').on('click touchstart', function() { el.movePrev<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(); return false; });
			document.onkeydown = checkKey;
			function checkKey(e) {
				
				e = e || window.event; 
				if (e.keyCode == '37') {
					el.movePrev<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>();
				}
				else if (e.keyCode == '39') {
					el.moveNext<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>();
				}
			}
			document.querySelector('#immersive_slider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').addEventListener('touchstart', handleTouchStart, false);        
			document.querySelector('#immersive_slider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').addEventListener('touchmove', handleTouchMove, false);
			var xDown = null;                                                        
			var yDown = null;
														
			
			function handleTouchStart(evt) {                                         
				xDown = evt.touches[0].clientX;                                      
				yDown = evt.touches[0].clientY;                                     
			}; 
			function handleTouchMove(evt) {
				if ( ! xDown || ! yDown ) {
					return;
				}
				var xUp = evt.touches[0].clientX;                                    
				var yUp = evt.touches[0].clientY;
				
				var xDiff = xDown - xUp;
				var yDiff = yDown - yUp;
				
				if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
					if ( xDiff > 0 ) {
						el.moveNext<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>();
					} else {
						el.movePrev<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>()
						
					}                       
				} else {
					if ( yDiff > 0 ) {
					
					} else { 
					
						
					}                                                                 
				}
				/* reset values */
				xDown = null;
				yDown = null;                                             
			};			
			var xy = true;
			$(".main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>").hover(function(){ y=true;xy = true; }, function(){ if(xy){y=false;} });
			$(".ImCS").on("click",function(){ y=true; xy=false; });
			$.fn.moveSlider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = function(settings, page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>) {
				var el = $(this),
				current = el.find(".is-slide.active"),
				next = el.find(".is-slide" + page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>),
				bg_current = $(settings.container<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>).find(".is-background.active"),
				bg_next = $(settings.container<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>).find(".is-background" + page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> + "_bg");
				if(next)
				{
					current.removeClass("active")
					next.addClass("active")
					bg_current.removeClass("active")
					bg_next.addClass("active")
					$(".is-pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> li a" + ".active").removeClass("active");
					$(".is-pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> li a" + "[href='" + (page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>) + "']").addClass("active");
				}
				pos = ((page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>.replace('#slide_','') - 1) * 100) * -1;
				el.find(".is-overflow").transformSlider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, pos);
				$(settings.container<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>).find(".is-bg-overflow").transformSlider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, pos);
			}
			$.fn.moveNext<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = function() {
				var el = $(this),
				total = el.find(settings.slideSelector<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>).length + 1,
			page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_number = parseInt($(this).find(".is-slide.active").attr("id").replace('slide_','')) + 1;
				el.moveSlider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, "#slide_" + page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_number)
				if(page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_number < total) 
				{
					el.moveSlider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, "#slide_" + page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_number)
				}
				else 
				{
					if (settings.loop<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> == true ) el.moveSlider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, "#slide_1")
				}
			}
			$.fn.movePrev<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = function() {
				var el = $(this),
				total = el.find(settings.slideSelector<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>).length + 1,
				page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_number = parseInt($(this).find(".is-slide.active").attr("id").replace('slide_','')) - 1;
				if(page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_number <= total && page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_number > 0) 
				{
					el.moveSlider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, "#slide_" + page_index<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_number)
				}
				else 
				{
					if (settings.loop<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> == true ) el.moveSlider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(settings, "#slide_" + (total - 1 ))
				}
			}
		}
	}(window.jQuery);
</script>
<script type="text/javascript">
	jQuery(document).ready( function() {
		var SShowCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = jQuery('.SShowCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val();
		var SDuration<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>;
		if(SShowCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> == 'on'){ SDuration<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = parseInt(jQuery('.SDuration<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val()); }else{ SDuration<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = false; }
		var AnimationType = jQuery('.AnimationType_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val();
		jQuery("#immersive_slider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>").immersive_slider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>({
			animation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: AnimationType,
			slideSelector<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: ".slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>",
			container<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: ".main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>",
			cssBlur<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: <?php echo esc_js($rich_CS_BIB);?>,
			pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: <?php echo esc_js($rich_CS_P);?>,
			loop<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: true,
			autoStart<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>: SDuration<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>*1000,
		});
	});
</script>
<script>
	jQuery(document).ready(function(){
		function resp(){
			var ContWidth<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = parseInt(jQuery('.ContWidth<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val());
			var ContHeight<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = parseInt(jQuery('.ContHeight<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val());
			var ContHeader<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = parseInt(jQuery('.ContHeader<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val());
			var ContLinkCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = parseInt(jQuery('.ContLinkCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val());
			var ContIconsCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = parseInt(jQuery('.ContIconsCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val());
			jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>,#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('width',Math.floor(ContWidth<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>*jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').parent().width()/1000)+'px');
			jQuery('#immersive_slider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>,#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('height',Math.floor(ContHeight<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>*jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').width()/(jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').width()+250))+'px');
			if(jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>,#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').parent().width()<=400)
			{
				jQuery('#immersive_slider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>,#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('height',Math.floor(ContHeight<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>)+'px');
				jQuery('.CSLink').css('float','right');
				jQuery('.CSHD').css({'width':'100%',height:'30%'});
				jQuery('.ImCS').css({'width':'100%','padding-left':'0px','height':'50%','margin-bottom':'10px'});
				jQuery('.immersive_slider .is-slide').css('padding','5px');
				jQuery('.linkDCS').css({'width':'100%','text-align':'right','margin-top':'5px','top':'7%'});
				jQuery('.CSIcon').css('top','92%');
				jQuery('.is-next<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css({'left':'40px','right':'auto'});
				jQuery('.is-pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('display','none');
				jQuery('.page_container').css('margin','20px auto');
				jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>,#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('min-width','100%')
			}
			else if(jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>,#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').parent().width()<=600)
			{
				jQuery('.CSLink').css('display','inline');
				jQuery('.CSHD').css({'width':'64%',height:'83%'});
				jQuery('.ImCS').css({'width':'36%','padding-left':'10px','height':'95%','margin-bottom':'0px'});
				jQuery('.immersive_slider .is-slide').css('padding','30px 40px');
				jQuery('.linkDCS').css({'width':'64%','text-align':'left','margin-top':'10px'});
				jQuery('.CSIcon').css('top','50%');
				jQuery('.is-next<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css({'left':'auto','right':'10px'});
				jQuery('.is-pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('display','block');
				jQuery('.page_container').css('margin','50px auto')
				jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>,#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('min-width','100%')
			}
			else
			{
				jQuery('.CSLink').css('display','inline');
				jQuery('.CSHD').css({'width':'64%',height:'85%'});
				jQuery('.ImCS').css({'width':'36%','padding-left':'10px','height':'95%','margin-bottom':'0px'});
				jQuery('.immersive_slider .is-slide').css('padding','30px 40px');
				jQuery('.linkDCS').css({'width':'64%','text-align':'left','margin-top':'10px'});
				jQuery('.CSIcon').css('top','50%');
				jQuery('.is-next<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css({'left':'auto','right':'10px'});
				jQuery('.is-pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('display','block');
				jQuery('.page_container').css('margin','50px auto')
				jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>,#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('min-width','0px')
			}
			if(jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>,#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').width()<=500)
			{
				jQuery('.is-pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('display','none');
			}
			else
			{
				jQuery('.is-pagination<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('display','block');
			}
			jQuery('.CSHeader').css('font-size',Math.floor(ContHeader<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>*jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').width()/(jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').width()+100))+'px');
			jQuery('.CSLink').css('font-size',Math.floor(ContLinkCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>*jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').width()/(jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').width()+100))+'px');
			jQuery('.CSIcon').css('font-size',Math.floor(ContIconsCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>*jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').width()/(jQuery('.main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').width()+100))+'px');
		}
		var array_cont<?php echo esc_html($rw_slider_image_id);?>=[];
		jQuery(".imFiltBl<?php echo esc_html($rw_slider_image_id);?>").each(function(){
			if( jQuery(this).attr("src") != "" ) { array_cont<?php echo esc_html($rw_slider_image_id);?>.push(jQuery(this).attr("src")); }
		})
		var y_cont<?php echo esc_html($rw_slider_image_id);?>=0;
		for(i=0;i<array_cont<?php echo esc_html($rw_slider_image_id);?>.length;i++)
		{
			jQuery("<img class='imFiltBl<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' />").attr('src', array_cont<?php echo esc_html($rw_slider_image_id);?>[i]).on("load",function(){
				y_cont<?php echo esc_html($rw_slider_image_id);?>++;
				if(y_cont<?php echo esc_html($rw_slider_image_id);?> == array_cont<?php echo esc_html($rw_slider_image_id);?>.length)
				{
					jQuery(".main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>").fadeIn(1000);
					jQuery("#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>").remove();
				}
			})
		}
		setTimeout(function(){ resp(); },100)
		jQuery(window).resize(function(){ resp(); })
	})
</script>
<script type="text/javascript">
	var PopupShow<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = document.querySelector('.PopupShow<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').getAttribute("value")
	function resp(el){
		el.style.maxHeight = el.clientWidth*56.25/100+"px";
		if(parseInt(el.style.maxHeight)>window.innerHeight){
			el.style.maxHeight = window.innerHeight+"px";
			el.style.maxWidth = window.innerHeight*16/9+"px";
		}else{
			el.style.maxWidth = "100%";
			el.style.maxHeight = el.clientWidth*56.25/100+"px";
		}
	}
	function popupFunc<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>(img,video){
		if(!PopupShow<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>){
			return
		}
		var popOverlay = document.createElement("div");
		popOverlay.setAttribute("class","popupOverlay<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>");
		document.body.appendChild(popOverlay);
		var popupDelIc = document.createElement("i");
		popupDelIc.setAttribute("class","popupDelIc rich_web rich_web-times");
		popOverlay.appendChild(popupDelIc);
		var popupOverlayContent = document.createElement("div");
		popupOverlayContent.setAttribute("class","popupOverlayContent<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>");
		popOverlay.appendChild(popupOverlayContent);
		var popupImg = document.createElement("img");
		popupImg.setAttribute("class","popupImg<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>");
		popupImg.setAttribute("src",img);
		addCl(popupImg,video);
		popupOverlayContent.appendChild(popupImg);
		var popupVideo = createVideo(popupOverlayContent,video);
		openVideo(popupVideo,video);
		setTimeout(function(){
			addAnim(popOverlay,"popupOverlay<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_anim");
			addAnim(popupOverlayContent,"popupOverlayContent<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_anim");
		},100)
		resp(popupOverlayContent);
		window.onresize = function(event) {
			resp(popupOverlayContent);
		};
		function delPop(){
			removeAnim(popOverlay,"popupOverlay<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_anim",popupVideo);
			removeAnim(popupOverlayContent,"popupOverlayContent<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_anim",popupVideo);
		}
		popupDelIc.onclick = function(){
			delPop()
		}
		document.onkeyup = function(e) {
			if (e.keyCode == 27) { 
				delPop()
			} 
		}
	}

	function createVideo(el,vSrc){
		if(vSrc != ""){
			var popupVideo = document.createElement("iframe");
			popupVideo.setAttribute("class","popupVideo<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>");
			popupVideo.setAttribute("src",vSrc);
			popupVideo.setAttribute("webkitAllowFullScreen","webkitAllowFullScreen");
			popupVideo.setAttribute("mozallowfullscreen","mozallowfullscreen");
			popupVideo.setAttribute("allowFullScreen","allowFullScreen");
			el.appendChild(popupVideo);
			return popupVideo;
		}
		return "";
	}
	function openVideo(el,vSrc){
		if(vSrc != ""){
			setTimeout(function(){
				el.classList.add("popupVideo<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_anim");
				el.setAttribute("src",vSrc+"?rel=0&amp;autoplay=1");
			},500)
		}
	}
	function addCl(el,str){
		if(str == ""){
			el.classList.add("popupImg<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_contain")
		}
	}
	function addAnim(el,cl){
		el.classList.add(cl);
	}
	function removeAnim(el,cl,video){
		el.classList.remove(cl);
		if(video != ""){
			video.remove()
		}
		setTimeout(function(){
			el.remove();
		},400)
	}
</script>
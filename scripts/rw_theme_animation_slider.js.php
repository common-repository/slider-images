<script>
    var Rich_Web_AnSL_ET<?php echo esc_html($rw_slider_image_id);?> = parseInt(jQuery(".Rich_Web_AnSL_ET<?php echo esc_html($rw_slider_image_id);?>").val());
    var Rich_Web_AnSL_SSh<?php echo esc_html($rw_slider_image_id);?> = jQuery(".Rich_Web_AnSL_SSh<?php echo esc_html($rw_slider_image_id);?>").val();
    var Rich_Web_AnSL_SShChT<?php echo esc_html($rw_slider_image_id);?> = parseInt(jQuery(".Rich_Web_AnSL_SShChT<?php echo esc_html($rw_slider_image_id);?>").val());
    var animateEffect<?php echo esc_html($rw_slider_image_id);?> = Rich_Web_AnSL_ET<?php echo esc_html($rw_slider_image_id);?>;
    var CountShort<?php echo esc_html($rw_slider_image_id);?> = parseInt(jQuery(".CountShort<?php echo esc_html($rw_slider_image_id);?>").val());
    var count<?php echo esc_html($rw_slider_image_id);?> = 1;
    var y_y<?php echo esc_html($rw_slider_image_id);?> = false;
    var zIndex<?php echo esc_html($rw_slider_image_id);?> = 0;
    var thumbCount<?php echo esc_html($rw_slider_image_id);?> = 1;
    var anim_over<?php echo esc_html($rw_slider_image_id);?> = 0;
    var array<?php echo esc_html($rw_slider_image_id);?> = [];
    jQuery(".RW_ANMSL_Image<?php echo esc_html($rw_slider_image_id);?>").each(function() {
        if (jQuery(this).attr("src") != "") {
            array<?php echo esc_html($rw_slider_image_id);?>.push(jQuery(this).attr("src"));
        }
    })
    var y<?php echo esc_html($rw_slider_image_id);?> = 0;
    var Rich_Web_AnSL_H = parseInt(jQuery(".Rich_Web_AnSL_H<?php echo esc_html($rw_slider_image_id);?>").val());
    function resp<?php echo esc_html($rw_slider_image_id);?>() {
        jQuery(".cd-slider-wrapper<?php echo esc_html($rw_slider_image_id);?>,#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>").css("height", Math.floor(Rich_Web_AnSL_H * jQuery(".cd-slider-wrapper<?php echo esc_html($rw_slider_image_id);?>").width() / 1000));
    }
    jQuery(window).resize(function() {
        resp<?php echo esc_html($rw_slider_image_id);?>();
    })
    for (i = 0; i < array<?php echo esc_html($rw_slider_image_id);?>.length; i++) {
        jQuery("<img class='RW_ANMSL_Image<?php echo esc_html($rw_slider_image_id);?>' />").attr('src',
            array<?php echo esc_html($rw_slider_image_id);?>[i]).on("load", function() {
            y<?php echo esc_html($rw_slider_image_id);?>++;
            if (y<?php echo esc_html($rw_slider_image_id);?> == array<?php echo esc_html($rw_slider_image_id);?>.length) {
                jQuery("#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>").remove();
                jQuery(".cd-slider-wrapper<?php echo esc_html($rw_slider_image_id);?>").fadeIn(1000);
                jQuery(".cd-slider-navigation<?php echo esc_html($rw_slider_image_id);?>").css("display", "block");
                jQuery(".cd-slider-controls<?php echo esc_html($rw_slider_image_id);?>").css("display", "block");
                jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>").css("borderRadius", "0% 0% 0% 0%");
                jQuery('.RW_Title<?php echo esc_html($rw_slider_image_id);?>').hide();
                jQuery('.RW_Title_Ef<?php echo esc_html($rw_slider_image_id);?>1').show();
                if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 1 ||
                    animateEffect<?php echo esc_html($rw_slider_image_id);?> == 2 ||
                    animateEffect<?php echo esc_html($rw_slider_image_id);?> == 3 ||
                    animateEffect<?php echo esc_html($rw_slider_image_id);?> == 4 ||
                    animateEffect<?php echo esc_html($rw_slider_image_id);?> == 5) {
                    anim_over<?php echo esc_html($rw_slider_image_id);?> = 300;
                } else if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 14) {
                    anim_over<?php echo esc_html($rw_slider_image_id);?> = 0;
                } else {
                    anim_over<?php echo esc_html($rw_slider_image_id);?> = 1000;
                }
                jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>").addClass("RW_Im_An_Sl_RAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>1").removeClass("RW_Im_An_Sl_RAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                function nextAnim<?php echo esc_html($rw_slider_image_id);?>() {
                    jQuery(".cd-slider-controls<?php echo esc_html($rw_slider_image_id);?> li").removeClass("selected");
                    jQuery(".cd-slider-controls<?php echo esc_html($rw_slider_image_id);?> li").eq(
                        count<?php echo esc_html($rw_slider_image_id);?> - 1).addClass("selected");
                    if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 1) {
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>" + count<?php echo esc_html($rw_slider_image_id);?>)
                            .css("borderRadius", "0% 0% 0% 100%");
                    } else if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 2) {
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>" + count<?php echo esc_html($rw_slider_image_id);?>)
                            .css("borderRadius", "100% 0% 0% 0%");
                    } else if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 3) {
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>" + count<?php echo esc_html($rw_slider_image_id);?>)
                            .css("borderRadius", "100% 0% 0% 100%");
                    } else if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 4) {
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>" + count<?php echo esc_html($rw_slider_image_id);?>)
                            .css("borderRadius", "100% 100% 0% 0%");
                    }
                    jQuery('.RW_Title_Ef<?php echo esc_html($rw_slider_image_id);?>' + count<?php echo esc_html($rw_slider_image_id);?>)
                        .slideDown(anim_over<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>' + count<?php echo esc_html($rw_slider_image_id);?>).css(
                        "z-index", zIndex<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery(".cd-slider-navigation<?php echo esc_html($rw_slider_image_id);?> li").css("z-index",
                        zIndex<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery(".cd-slider-controls<?php echo esc_html($rw_slider_image_id);?>").css("z-index",
                        zIndex<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery(".RW_Title<?php echo esc_html($rw_slider_image_id);?>").css("z-index",
                        zIndex<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>' + count<?php echo esc_html($rw_slider_image_id);?>)
                        .removeClass("RW_Im_An_Sl_RAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>' + count<?php echo esc_html($rw_slider_image_id);?>)
                        .addClass("RW_Im_An_Sl_AddAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                    if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 1 ||
                        animateEffect<?php echo esc_html($rw_slider_image_id);?> == 2 ||
                        animateEffect<?php echo esc_html($rw_slider_image_id);?> == 3 ||
                        animateEffect<?php echo esc_html($rw_slider_image_id);?> == 12 ||
                        animateEffect<?php echo esc_html($rw_slider_image_id);?> == 13) {
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>").addClass("RW_Im_An_Sl_right");
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>").removeClass("RW_Im_An_Sl_left");
                    }
                    setTimeout(function() {
                        jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>').removeClass(
                            "RW_Im_An_Sl_AddAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                        jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>').addClass("RW_Im_An_Sl_RAnim" +
                            animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                        jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>' +
                            count<?php echo esc_html($rw_slider_image_id);?>).removeClass("RW_Im_An_Sl_RAnim" +
                            animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                        jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>' +
                            count<?php echo esc_html($rw_slider_image_id);?>).addClass("RW_Im_An_Sl_AddAnim" +
                            animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                    }, anim_over<?php echo esc_html($rw_slider_image_id);?>)
                    thumbCount<?php echo esc_html($rw_slider_image_id);?> = count<?php echo esc_html($rw_slider_image_id);?>;
                    y_y<?php echo esc_html($rw_slider_image_id);?> = true;
                    setTimeout(function() {
                        y_y<?php echo esc_html($rw_slider_image_id);?> = false;
                    }, 500)
                }
                function prevAnim<?php echo esc_html($rw_slider_image_id);?>() {
                    jQuery(".cd-slider-controls<?php echo esc_html($rw_slider_image_id);?> li").removeClass("selected");
                    jQuery(".cd-slider-controls<?php echo esc_html($rw_slider_image_id);?> li").eq(
                        count<?php echo esc_html($rw_slider_image_id);?> - 1).addClass("selected");
                    if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 1) {
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>" + count<?php echo esc_html($rw_slider_image_id);?>)
                            .css("borderRadius", "0% 0% 100% 0%");
                    } else if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 2) {
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>" + count<?php echo esc_html($rw_slider_image_id);?>)
                            .css("borderRadius", "0% 100% 0% 0%");
                    } else if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 3) {
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>" + count<?php echo esc_html($rw_slider_image_id);?>)
                            .css("borderRadius", "0% 100% 100% 0%");
                    } else if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 4) {
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>" + count<?php echo esc_html($rw_slider_image_id);?>)
                            .css("borderRadius", "0% 0% 100% 100%");
                    }
                    jQuery('.RW_Title_Ef<?php echo esc_html($rw_slider_image_id);?>' + count<?php echo esc_html($rw_slider_image_id);?>)
                        .slideDown(anim_over<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>' + count<?php echo esc_html($rw_slider_image_id);?>).css(
                        "z-index", zIndex<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery(".cd-slider-navigation<?php echo esc_html($rw_slider_image_id);?> li").css("z-index",
                        zIndex<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery(".cd-slider-controls<?php echo esc_html($rw_slider_image_id);?>").css("z-index",
                        zIndex<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery(".RW_Title<?php echo esc_html($rw_slider_image_id);?>").css("z-index",
                        zIndex<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>' + count<?php echo esc_html($rw_slider_image_id);?>)
                        .addClass("RW_Im_An_Sl_AddAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                    jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>' + count<?php echo esc_html($rw_slider_image_id);?>)
                        .removeClass("RW_Im_An_Sl_RAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                    if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 1 ||
                        animateEffect<?php echo esc_html($rw_slider_image_id);?> == 2 ||
                        animateEffect<?php echo esc_html($rw_slider_image_id);?> == 3 ||
                        animateEffect<?php echo esc_html($rw_slider_image_id);?> == 12 ||
                        animateEffect<?php echo esc_html($rw_slider_image_id);?> == 13) {
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>").addClass("RW_Im_An_Sl_left");
                        jQuery(".RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>").removeClass("RW_Im_An_Sl_right");
                    }
                    setTimeout(function() {
                        jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>').removeClass(
                            "RW_Im_An_Sl_AddAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                        jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>').addClass("RW_Im_An_Sl_RAnim" +
                            animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                        jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>' +
                            count<?php echo esc_html($rw_slider_image_id);?>).addClass("RW_Im_An_Sl_AddAnim" +
                            animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                        jQuery('.RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?>' +
                            count<?php echo esc_html($rw_slider_image_id);?>).removeClass("RW_Im_An_Sl_RAnim" +
                            animateEffect<?php echo esc_html($rw_slider_image_id);?>);
                    }, anim_over<?php echo esc_html($rw_slider_image_id);?>)
                    thumbCount<?php echo esc_html($rw_slider_image_id);?> = count<?php echo esc_html($rw_slider_image_id);?>;
                    y_y<?php echo esc_html($rw_slider_image_id);?> = true;
                    setTimeout(function() {
                        y_y<?php echo esc_html($rw_slider_image_id);?> = false;
                    }, 500)
                }
                function prev<?php echo esc_html($rw_slider_image_id);?>() {
                    if (y_y<?php echo esc_html($rw_slider_image_id);?> == true) {
                        return;
                    }
                    if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 4) {
                        jQuery(".RW_Im_An_Sl_RAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>).css("top", "0%");
                    }
                    zIndex<?php echo esc_html($rw_slider_image_id);?>++;
                    jQuery('.RW_Title_Ef<?php echo esc_html($rw_slider_image_id);?>' + count<?php echo esc_html($rw_slider_image_id);?>)
                        .slideUp(anim_over<?php echo esc_html($rw_slider_image_id);?>);
                    count<?php echo esc_html($rw_slider_image_id);?>--;
                    if (count<?php echo esc_html($rw_slider_image_id);?> == 0) {
                        count<?php echo esc_html($rw_slider_image_id);?> = CountShort<?php echo esc_html($rw_slider_image_id);?>;
                    }
                    prevAnim<?php echo esc_html($rw_slider_image_id);?>();
                }
                function next<?php echo esc_html($rw_slider_image_id);?>() {
                    if (y_y<?php echo esc_html($rw_slider_image_id);?> == true) {
                        return;
                    }
                    if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 4) {
                        jQuery(".RW_Im_An_Sl_RAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>).css("top",
                            "100%");
                    }
                    zIndex<?php echo esc_html($rw_slider_image_id);?>++;
                    jQuery('.RW_Title_Ef<?php echo esc_html($rw_slider_image_id);?>' + count<?php echo esc_html($rw_slider_image_id);?>)
                        .slideUp(anim_over<?php echo esc_html($rw_slider_image_id);?>);
                    count<?php echo esc_html($rw_slider_image_id);?>++;
                    if (count<?php echo esc_html($rw_slider_image_id);?> == CountShort<?php echo esc_html($rw_slider_image_id);?> + 1) {
                        count<?php echo esc_html($rw_slider_image_id);?> = 1;
                    }
                    nextAnim<?php echo esc_html($rw_slider_image_id);?>();
                }
                function delVideo() {
                    document.querySelector(".rw_delIc_animation").style.display = "none";
                    document.querySelector(".cd-slider-controls").classList.remove("cd-slider-controls_anim");
                    document.querySelector(".RW_Left_Anim_Sl").style.display = "block";
                    document.querySelector(".RW_Right_Anim_Sl").style.display = "block";
                    var icons = document.querySelectorAll(".plIc_animation");
                    var videos = document.querySelectorAll(".rw_animation_video");
                    for (var i = 0; i < icons.length; i++) {
                        icons[i].style.display = "block";
                    }
                    for (var i = 0; i < videos.length; i++) {
                        videos[i].style.display = "none";
                        videos[i].setAttribute("src", "");
                    }
                }
                document.onkeydown = checkKey;
                function checkKey(e) {
                    e = e || window.event;
                    if (e.keyCode == '37') {
                        prev<?php echo esc_html($rw_slider_image_id);?>();
                        delVideo()
                    } else if (e.keyCode == '39') {
                        next<?php echo esc_html($rw_slider_image_id);?>()
                        delVideo()
                    }
                }
                document.querySelector('.cd-slider<?php echo esc_html($rw_slider_image_id);?>').addEventListener('touchstart',
                    handleTouchStart, false);
                document.querySelector('.cd-slider<?php echo esc_html($rw_slider_image_id);?>').addEventListener('touchmove',
                    handleTouchMove, false);
                var xDown = null;
                var yDown = null;
                function handleTouchStart(evt) {
                    xDown = evt.touches[0].clientX;
                    yDown = evt.touches[0].clientY;
                };
                function handleTouchMove(evt) {
                    if (!xDown || !yDown) {
                        return;
                    }
                    var xUp = evt.touches[0].clientX;
                    var yUp = evt.touches[0].clientY;
                    var xDiff = xDown - xUp;
                    var yDiff = yDown - yUp;
                    if (Math.abs(xDiff) > Math.abs(yDiff)) {
                        /*most significant*/
                        if (xDiff > 0) {
                            prev<?php echo esc_html($rw_slider_image_id);?>();
                        } else {
                            next<?php echo esc_html($rw_slider_image_id);?>()
                        }
                    } else {
                        if (yDiff > 0) {
                            /* up swipe */
                        } else {
                            /* down swipe */
                        }
                    }
                    /* reset values */
                    xDown = null;
                    yDown = null;
                };
                var Interval<?php echo esc_html($rw_slider_image_id);?>;
                if (Rich_Web_AnSL_SSh<?php echo esc_html($rw_slider_image_id);?> == "true") {
                    Interval<?php echo esc_html($rw_slider_image_id);?> = setInterval(function() {
                            next<?php echo esc_html($rw_slider_image_id);?>();
                        }, (Rich_Web_AnSL_SShChT<?php echo esc_html($rw_slider_image_id);?> / 10) *
                        CountShort<?php echo esc_html($rw_slider_image_id);?> * 2)
                    jQuery(".RW_CL_N<?php echo esc_html($rw_slider_image_id);?>").bind("click", function() {
                        next<?php echo esc_html($rw_slider_image_id);?>();
                    })
                    jQuery(".RW_CL_P<?php echo esc_html($rw_slider_image_id);?>").bind("click", function() {
                        prev<?php echo esc_html($rw_slider_image_id);?>();
                    })
                    jQuery(".cd-slider-wrapper<?php echo esc_html($rw_slider_image_id);?>").mouseout(function() {
                        Interval<?php echo esc_html($rw_slider_image_id);?> = setInterval(function() {
                                next<?php echo esc_html($rw_slider_image_id);?>();
                            }, (Rich_Web_AnSL_SShChT<?php echo esc_html($rw_slider_image_id);?> / 10) *
                            CountShort<?php echo esc_html($rw_slider_image_id);?> * 2)
                    }).mouseover(function() {
                        clearInterval(Interval<?php echo esc_html($rw_slider_image_id);?>);
                    })
                } else {
                    jQuery(".RW_CL_N<?php echo esc_html($rw_slider_image_id);?>").bind("click", function() {
                        next<?php echo esc_html($rw_slider_image_id);?>();
                    })
                    jQuery(".RW_CL_P<?php echo esc_html($rw_slider_image_id);?>").bind("click", function() {
                        prev<?php echo esc_html($rw_slider_image_id);?>();
                    })
                }
                jQuery(".RW_Thumb<?php echo esc_html($rw_slider_image_id);?>").click(function() {
                    count<?php echo esc_html($rw_slider_image_id);?> = parseInt(jQuery(this).attr("name"));
                    if (count<?php echo esc_html($rw_slider_image_id);?> != thumbCount<?php echo esc_html($rw_slider_image_id);?>) {
                        jQuery('.RW_Title<?php echo esc_html($rw_slider_image_id);?>').slideUp(500);
                    }
                    zIndex<?php echo esc_html($rw_slider_image_id);?>++;
                    if (count<?php echo esc_html($rw_slider_image_id);?> > thumbCount<?php echo esc_html($rw_slider_image_id);?>) {
                        if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 4) {
                            jQuery(".RW_Im_An_Sl_RAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>).css(
                                "top", "100%");
                        }
                        nextAnim<?php echo esc_html($rw_slider_image_id);?>();
                    } else if (count<?php echo esc_html($rw_slider_image_id);?> <
                        thumbCount<?php echo esc_html($rw_slider_image_id);?>) {
                        if (animateEffect<?php echo esc_html($rw_slider_image_id);?> == 4) {
                            jQuery(".RW_Im_An_Sl_RAnim" + animateEffect<?php echo esc_html($rw_slider_image_id);?>).css(
                                "top", "0%");
                        }
                        prevAnim<?php echo esc_html($rw_slider_image_id);?>();
                    }
                    thumbCount<?php echo esc_html($rw_slider_image_id);?> = count<?php echo esc_html($rw_slider_image_id);?>;
                    y_y<?php echo esc_html($rw_slider_image_id);?> = true;
                    setTimeout(function() {
                        y_y<?php echo esc_html($rw_slider_image_id);?> = false;
                    }, 500)
                })
                resp<?php echo esc_html($rw_slider_image_id);?>();
            }
        })
    }
</script>
<script type="text/javascript">
    function rw_anim_video_cl<?php echo esc_html($rw_slider_image_id);?>(vSrc, el) {
        el.children[0].style.display = "block";
        el.children[0].setAttribute("src", vSrc + "?rel=0&amp;autoplay=1");
        el.children[1].style.display = "none";
        var titles = document.querySelectorAll(".RW_Title");
        for (var i = 0; i < titles.length; i++) {
            titles[i].style.display = "none";
        }
        document.querySelector(".cd-slider-controls").classList.add("cd-slider-controls_anim");
        document.querySelector(".RW_Left_Anim_Sl").style.display = "none";
        document.querySelector(".RW_Right_Anim_Sl").style.display = "none";
        setTimeout(function() {
            document.querySelector(".rw_delIc_animation").style.display = "block";
        }, 1000)
    }
    document.querySelector(".rw_delIc_animation").onclick = function() {
        document.querySelector(".rw_delIc_animation").style.display = "none";
        document.querySelector(".cd-slider-controls").classList.remove("cd-slider-controls_anim");
        document.querySelector(".RW_Left_Anim_Sl").style.display = "block";
        document.querySelector(".RW_Right_Anim_Sl").style.display = "block";
        var icons = document.querySelectorAll(".plIc_animation");
        var videos = document.querySelectorAll(".rw_animation_video");
        for (var i = 0; i < icons.length; i++) {
            icons[i].style.display = "block";
        }
        for (var i = 0; i < videos.length; i++) {
            videos[i].style.display = "none";
            videos[i].setAttribute("src", "");
        }
    }
</script>
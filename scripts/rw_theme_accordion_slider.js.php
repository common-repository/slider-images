<script>
    jQuery(document).ready(function() {
        var Rich_Web_AccordSl_Width_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = jQuery('.Rich_Web_AccordSl_Width_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val();
        var Rich_Web_AccordSl_Height_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = jQuery('.Rich_Web_AccordSl_Height_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val();
        var Rich_Web_AccordSl_ImgW_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = jQuery('.Rich_Web_AccordSl_ImgW_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val();
        var Rich_Web_AccordSl_TitleFS_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = jQuery('.Rich_Web_AccordSl_TitleFS_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val();
        var Rich_Web_AccordSl_LinkFS_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = jQuery('.Rich_Web_AccordSl_LinkFS_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').val();
        var array_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> = [];
        jQuery('.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .figure_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').each(function() {
            if (jQuery(this).attr("src") != "") {
                array_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>.push(jQuery(this));
            }
        });
        jQuery('#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('width', Math.floor(Rich_Web_AccordSl_Width_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> * jQuery('#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').parent().width() / 1000));
        jQuery('#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('height', Math.floor(Rich_Web_AccordSl_Height_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> * jQuery('#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').parent().width() / 1000));
        function resp<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>() {
            jQuery('.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('max-height', Rich_Web_AccordSl_Height_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> / Rich_Web_AccordSl_Width_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> * document.querySelector( '.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').clientWidth);
            jQuery( '.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .figure_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('width', Rich_Web_AccordSl_ImgW_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> * document.querySelector('.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').clientWidth /Rich_Web_AccordSl_Width_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>);
            jQuery('.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .figure_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('left', ((Rich_Web_AccordSl_Width_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> -Rich_Web_AccordSl_ImgW_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>) / (array_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>.length - 1)) * document.querySelector('.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').clientWidth /Rich_Web_AccordSl_Width_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>);
            jQuery( '.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .input_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('width', ((Rich_Web_AccordSl_Width_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> - Rich_Web_AccordSl_ImgW_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>) / ( array_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>.length - 1)) * document.querySelector('.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').clientWidth / Rich_Web_AccordSl_Width_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>);
            jQuery( '.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .figcaption_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .span_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('font-size', Math.floor(Rich_Web_AccordSl_TitleFS_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> * jQuery('.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').parent().width() / 1000));
            jQuery( '.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .figcaption_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .span_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('line-height', '1.5');
            jQuery( '.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .figcaption_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .span_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('padding', '0px 7px');
            jQuery('.Tot_Accord_Link_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('font-size', Math.floor(Rich_Web_AccordSl_LinkFS_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> * jQuery('.ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').parent().width() / 1000));
            jQuery('.Tot_Accord_Link_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('line-height', '2');
            jQuery('.Tot_Accord_Link_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>').css('padding', '0px 7px');
        }
        var array_accordion<?php echo esc_html($rw_slider_image_id);?> = [];
        jQuery(".img_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>").each(function() {
            if (jQuery(this).attr("src") != "") {
                array_accordion<?php echo esc_html($rw_slider_image_id);?>.push(jQuery(this).attr("src"));
            }
        })
        var y_accordion<?php echo esc_html($rw_slider_image_id);?> = 0;
        for (i = 0; i < array_accordion<?php echo esc_html($rw_slider_image_id);?>.length; i++) {
            jQuery("<img class='img_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' />").attr('src',
                array_accordion<?php echo esc_html($rw_slider_image_id);?>[i]).on("load", function() {
                y_accordion<?php echo esc_html($rw_slider_image_id);?>++;
                if (y_accordion<?php echo esc_html($rw_slider_image_id);?> == array_accordion<?php echo esc_html($rw_slider_image_id);?>.length) {
                    jQuery("#rw_acc_main<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>").fadeIn(1000);
                    jQuery("#RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>").remove();
                    resp<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>();
                }
            })
        }
        jQuery(window).resize(function() {
            resp<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>();
        })
    })
</script>
<script type="text/javascript">
    var iconsBg = document.querySelectorAll(".icBg");
    var icons = document.querySelectorAll(".rw_video_acc");
    var videos = document.querySelectorAll(".rw_acc_video<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>");
    var delIcons = document.querySelectorAll(".rw_icc_delIc");
    var inputs = document.querySelectorAll(".input_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>");
    function playVideo(arr) {
        for (var i = 0; i < arr.length; i++) {
            arr[i].onclick = function() {
                var vURL = event.target.dataset.video;
                var el = event.target.parentElement.nextElementSibling;
                var delIc = el.nextElementSibling;
                el.setAttribute("src", vURL + "?rel=0&amp;autoplay=1");
                el.style.display = "block";
                setTimeout(function() {
                    delIc.style.display = "block";
                }, 1000)
            }
        }
    }
    playVideo(iconsBg);
    playVideo(icons);
    function delVideo() {
        for (var i = 0; i < videos.length; i++) {
            videos[i].style.display = "none";
            videos[i].setAttribute("src", "");
            delIcons[i].style.display = "none";
        }
    }
    for (var i = 0; i < delIcons.length; i++) {
        delIcons[i].onclick = function() {
            delVideo();
        }
    }
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].onclick = function() {
            delVideo();
        }
    }
</script>
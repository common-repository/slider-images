<?php if(!empty($rw_loader_options_arr)){ ?>
    <div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>" style="<?php if($rw_loader_options_arr->Rich_Web_NSL_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
        <div class="center_content<?php echo esc_html($rw_slider_image_id);?>">
            <?php if($rw_loader_options_arr->Rich_Web_NSL_L_Show == "true") {
                if($rw_loader_options_arr->Rich_Web_NSL_L_T == "Type 1") { ?>
                    <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="loader_Navigation1 loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation1">
                        </div>
                        <div class="loader_Navigation2 loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation2">
                        </div>
                        <div class="loader_Navigation3 loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation3">
                        </div>
                        <div class="loader_Navigation4" id="loader_Navigation4"></div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_NSL_L_T == "Type 2") { ?>
                    <div class="overlay-loader<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="loader<?php echo esc_html($rw_slider_image_id);?>">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_NSL_L_T == "Type 3") { ?>
                    <div class="windows8<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="wBall" id="wBall_1">
                            <div class="wInnerBall"></div>
                        </div>
                        <div class="wBall" id="wBall_2">
                            <div class="wInnerBall"></div>
                        </div>
                        <div class="wBall" id="wBall_3">
                            <div class="wInnerBall"></div>
                        </div>
                        <div class="wBall" id="wBall_4">
                            <div class="wInnerBall"></div>
                        </div>
                        <div class="wBall" id="wBall_5">
                            <div class="wInnerBall"></div>
                        </div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_NSL_L_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
                    </div>
                <?php }
            }
            if($rw_loader_options_arr->Rich_Web_NSL_LT_Show == "true") { 
                if($rw_loader_options_arr->Rich_Web_NSL_LT_T == "Type 1") { ?>
                    <div class="cssload-loader<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_NSL_LT);?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_NSL_LT_T == "Type 2") { ?>
                    <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>">
                        <?php foreach($text_array as $key=>$v){ ?>
                            <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>_<?php echo esc_html($key+1);?>" class="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>">
                                <?php echo esc_html($v);?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_NSL_LT_T == "Type 3") { ?>
                    <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box">
                            <?php foreach($text_array as $key=>$v){ ?>
                            <div><?php echo esc_html($v);?></div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_NSL_LT_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-text<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_NSL_LT);?>
                    </div>
                <?php } 
            } ?>
        </div>
    </div>
<?php } else { ?>
    <div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>">
        <div class="center_content<?php echo esc_html($rw_slider_image_id);?>">
            <div class="rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>">
                <div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
                <div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
                <div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
                <div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
            </div>
        </div>
    </div>
<?php } ?>
<div id="rich_webSlider1_<?php echo esc_html($rw_slider_image_id);?>" style="display:none;">
    <div class="flexslider flexslider_<?php echo esc_html($rw_slider_image_id);?>" style='position:relative;max-width:100%;'>
        <ul class="slides">
            <i class='delIc delIc<?php echo esc_html($rw_slider_image_id);?> rich_web rich_web-times'></i>
            <?php for($i=0;$i<count($rw_slider_image_photos_arr);$i++){
				if(strpos($rw_slider_image_photos_arr[$i]->Sl_Img_Url, 'youtube') > 0)
				{
					$rest_vImg_url = substr($rw_slider_image_photos_arr[$i]->Sl_Img_Url, 0, -13);
					$link_vImg_sl = $rest_vImg_url.'maxresdefault.jpg';
					if (!@fopen("$link_vImg_sl",'r')) { $link_vImg_sl = $rw_slider_image_photos_arr[$i]->Sl_Img_Url; }
				}
				else
				{
					$link_vImg_sl = $rw_slider_image_photos_arr[$i]->Sl_Img_Url;
				}
			?>
                <?php if(esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== '' && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== null && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== "undefined"){  ?>
                    <li class="<?php if(esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== '' && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== null && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== "undefined"){ echo esc_attr("pointer"); } ?>" onclick="rw_nav_video_cl<?php echo esc_html($rw_slider_image_id);?>('<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url); ?>',this)">
                        <img class='IMHR<?php echo esc_html($rw_slider_image_id);?>' src="<?php echo esc_url($link_vImg_sl);?>" alt="<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>" data-thumbnail="<?php echo esc_url($link_vImg_sl);?>" />
                        <?php if(esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== '' && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== null && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== "undefined") { ?>
                            <iframe class='rw_nav_video<?php echo esc_html($rw_slider_image_id); ?> rw_nav_video' src='' webkitAllowFullScreen  mozallowfullscreen allowFullScreen></iframe><i class='plIc plIc_nav rich_web rich_web-play'></i>
                        <?php } ?>
                    </li>
                <?php } else { ?>
                    <li class="<?php if(esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== '' && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== null && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== "undefined"){ echo esc_attr("pointer"); } ?>" onclick="">
                        <a class="Sl_Link_Url" style="<?php if(!$rw_slider_image_photos_arr[$i]->Sl_Link_Url) { ?>cursor: default;<?php } ?>" href="<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>">
                            <img class='IMHR<?php echo esc_html($rw_slider_image_id);?>' src="<?php echo esc_url($link_vImg_sl);?>" alt="<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>" data-thumbnail="<?php echo esc_url($link_vImg_sl);?>" />
                        </a>
                        <?php if(esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== '' && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== null && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== "undefined") { ?>
                            <iframe class='rw_nav_video<?php echo esc_html($rw_slider_image_id); ?> rw_nav_video' src='' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><i class='plIc plIc_nav rich_web rich_web-play'></i>
                        <?php } ?>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</div>
<input type='text' style='display:none;' class='SLWIDTHR_<?php echo esc_html($rw_slider_image_id);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_web_Sl1_W);?>'>
<input type='text' style='display:none;' class='SLHEIGHTR_<?php echo esc_html($rw_slider_image_id);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_web_Sl1_H);?>'>
<input type='text' style='display:none;' class='SLCLWR_<?php echo esc_html($rw_slider_image_id);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_web_Sl1_ArBoxW);?>'>
<input type='text' style='display:none;' class='SlClPrFS_<?php echo esc_html($rw_slider_image_id);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_web_Sl1_TFS);?>'>
<input type='text' style='display:none;' class='hovEffType_<?php echo esc_html($rw_slider_image_id);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_web_Sl1_ArHEff);?>'>
<input type='text' style='display:none;' class='navWidth_<?php echo esc_html($rw_slider_image_id);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_web_Sl1_NavW);?>'>
<input type='text' style='display:none;' class='navHeight_<?php echo esc_html($rw_slider_image_id);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_web_Sl1_NavH);?>'>
<input type='text' style='display:none;' class='navType' value='<?php echo esc_html($rw_theme_options_arr->rich_web_Sl1_NavPos);?>'>
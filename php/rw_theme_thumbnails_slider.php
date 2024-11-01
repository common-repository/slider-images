<?php if(!empty($rw_loader_options_arr)){ ?>
    <div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>"  style="<?php if($rw_loader_options_arr->Rich_Web_ThSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
        <div class="center_content<?php echo esc_html($rw_slider_image_id);?>">
            <?php if($rw_loader_options_arr->Rich_Web_ThSl_L_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_ThSl_L_T == "Type 1") { ?>
                    <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="loader_Navigation1 loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation1">
                        </div>
                        <div class="loader_Navigation2 loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation2">
                        </div>
                        <div class="loader_Navigation3 loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation3">
                        </div>
                        <div class="loader_Navigation4" id="loader_Navigation4"></div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_ThSl_L_T == "Type 2") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_ThSl_L_T == "Type 3") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_ThSl_L_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if($rw_loader_options_arr->Rich_Web_ThSl_LT_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_ThSl_LT_T == "Type 1") { ?>
                    <div class="cssload-loader<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_ThSl_LT);?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_ThSl_LT_T == "Type 2") { ?>
                    <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>">
                        <?php foreach($text_array as $key=>$v){ ?>
                            <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>_<?php echo esc_html($key + 1); ?>" class="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>"><?php echo esc_html($v); ?></div>
                        <?php } ?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_ThSl_LT_T == "Type 3") { ?>
                    <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box">
                            <?php foreach($text_array as $key=>$v){ ?>
                                <div><?php echo esc_html($v); ?></div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_ThSl_LT_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-text<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_ThSl_LT);?>
                    </div>
                <?php } ?>
            <?php } ?>
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
<ul id="RichWeb_TSL_slider<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" style='opacity:1;display:none;'>
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
        <li style='padding:0px;background:none;'  onclick="creatPopup<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>('<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>',<?php echo esc_html($i); ?>)">
            <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined") { ?>
                <i class='vIcContent rich_web rich_web-play'></i>
            <?php } ?>
            <img class='contImgWidth<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' src="<?php echo esc_url($link_vImg_sl);?>" title="<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>" data-video="<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>">
        </li>
    <?php }?>
</ul>
<input type='text' style='display:none;' class='slWresp<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_W);?>'>
<input type='text' style='display:none;' class='slHresp<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_H);?>'>
<input type='text' style='display:none;' class='countImgs<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo count($rw_slider_image_photos_arr);?>'>
<input type='text' style='display:none;' class='arrW<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_Arr_S);?>'>
<input type='text' style='display:none;' class='imgSmW<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_Nav_W);?>'>
<input type='text' style='display:none;' class='imgSmH<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_Nav_H);?>'>
<input type='text' style='display:none;' class='autPLW<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_SS_W);?>'>
<input type='text' style='display:none;' class='autPLH<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_SS_H);?>'>
<input type='text' style='display:none;' class='slShType<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_CM);?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_Loop<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_Loop);?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_PH<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_PH);?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_AP<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_AP);?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_TA<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_TA);?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_Nav_Show<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_Nav_Show);?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_SS_Show<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_SS_Show);?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_TSL_Arr_Show<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_TSL_Arr_Show);?>'>
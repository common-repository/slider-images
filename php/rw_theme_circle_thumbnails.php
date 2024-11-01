<?php if(!empty($rw_loader_options_arr)){ ?>
    <div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>"  style="<?php if($rw_loader_options_arr->Rich_Web_CircleSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
        <div class="center_content<?php echo esc_html($rw_slider_image_id);?>">
            <?php if($rw_loader_options_arr->Rich_Web_CircleSl_L_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_CircleSl_L_T == "Type 1") { ?>
                    <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="loader_Navigation1 loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation1">
                        </div>
                        <div class="loader_Navigation2 loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation2">
                        </div>
                        <div class="loader_Navigation3 loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation3">
                        </div>
                        <div class="loader_Navigation4" id="loader_Navigation4"></div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_CircleSl_L_T == "Type 2") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_CircleSl_L_T == "Type 3") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_CircleSl_L_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if($rw_loader_options_arr->Rich_Web_CircleSl_LT_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_CircleSl_LT_T == "Type 1") { ?>
                    <div class="cssload-loader<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_CircleSl_LT);?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_CircleSl_LT_T == "Type 2") { ?>
                    <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>">
                        <?php foreach($text_array as $key=>$v){ ?>
                        <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>_<?php echo esc_html($key + 1); ?>"
                            class="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>"><?php echo esc_html($v); ?></div>
                        <?php } ?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_CircleSl_LT_T == "Type 3") { ?>
                    <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box">
                            <?php foreach($text_array as $key=>$v){ ?>
                            <div><?php echo esc_html($v); ?></div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_CircleSl_LT_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-text<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_CircleSl_LT);?>
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
<script id="barTmpl" type="text/x-jquery-tmpl">
    <div class="cn-bar cn-bar_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
        <div class="cn-nav cn-nav_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
            <a href="#" class="cn-nav-prev">
                <?php if($rw_theme_options_arr->Rich_Web_Sl_CT_ArText=='true'){ ?>
                    <span><?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_CT_ArLeft);?></span>
                <?php }?>
                <div style="background-image:url(${prevSource});"></div> 
            </a>
            <a href="#" class="cn-nav-next">
                <?php if($rw_theme_options_arr->Rich_Web_Sl_CT_ArText=='true'){ ?>
                    <span><?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_CT_ArRight);?></span>
                <?php }?>
                <div style="background-image:url(${nextSource});"></div>
            </a>
        </div>
        <div class="cn-nav-content cn-nav-content_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
            <div class="cn-nav-content-prev">
                <span id='pCl'><?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_CT_ArLeft);?></span>
                <h3>${prevTitle}</h3>
            </div>
            <div class="cn-nav-content-current">
                <h2>${currentTitle}</h2>
            </div>
            <div class="cn-nav-content-next">
                <span id='nCl'><?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_CT_ArRight);?></span>
                <h3>${nextTitle}</h3>
            </div>
        </div>
    </div>
</script>
<div class="wrapper wrapper<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" style="display:none;">
    <div id="cn-slideshow_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" class="cn-slideshow cn-slideshow_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
        <i class="circleVIcon rich_web rich_web-play"></i>
        <div class="cn-images cn-images_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
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
                <?php if($i=='0'){ ?>
                    <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined"){  ?>
                        <img class="rw_circle_img rw_circle_img<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"
                            onclick="rw_circle_video_cl<?php echo esc_html($rw_slider_image_id);?>('<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>',this)"
                            data-video="<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>" src="<?php echo esc_url($link_vImg_sl);?>"
                            alt="image<?php echo esc_html($i); ?>"
                            title="<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>"
                            data-thumb="<?php echo esc_url($link_vImg_sl);?>" style="display:block;width:100%;height:100%;" />
                    <?php } else { ?>
                        <img class="rw_circle_img rw_circle_img<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" onclick=""
                            data-video="<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>" src="<?php echo esc_url($link_vImg_sl);?>"
                            alt="image<?php echo esc_html($i); ?>"
                            title="<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>"
                            data-thumb="<?php echo esc_url($link_vImg_sl);?>" style="display:block;width:100%;height:100%;" />
                    <?php } ?>
                <?php } else { ?>
                    <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined"){  ?>
                        <img class="rw_circle_img rw_circle_img<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"
                            data-video="<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>"
                            onclick="rw_circle_video_cl<?php echo esc_html($rw_slider_image_id);?>('<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>',this)"
                            src="<?php echo esc_url($link_vImg_sl);?>" alt="image<?php echo esc_html($i); ?>"
                            title="<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>"
                            data-thumb="<?php echo esc_url($link_vImg_sl);?>" style='width:100%;height:100%;' />
                    <?php } else { ?>
                        <img class="rw_circle_img rw_circle_img<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"
                            data-video="<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>" onclick=""
                            src="<?php echo esc_url($link_vImg_sl);?>" alt="image<?php echo esc_html($i); ?>"
                            title="<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>"
                            data-thumb="<?php echo esc_url($link_vImg_sl);?>" style='width:100%;height:100%;' />
                    <?php } ?>
                <?php }?>
            <?php } ?>
        </div>
        <iframe src="" class="rw_iframe_circle" style="display: none;" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        <i class="rw_icons_circle rich_web rich_web-times"></i>
    </div>
</div>
<input type='text' style='display:none;' class='respSLWidth_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_CT_W);?>' />
<input type='text' style='display:none;' class='respSLHeight_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_CT_H);?>' />
<input type='text' style='display:none;' class='respSLTitleFS_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_CT_TFS-5);?>' />
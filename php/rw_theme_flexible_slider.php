<?php if(!empty($rw_loader_options_arr)){ ?>
    <div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>"
        style="<?php if($rw_loader_options_arr->Rich_Web_FlexibleSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
        <div class="center_content<?php echo esc_html($rw_slider_image_id);?>">
            <?php if($rw_loader_options_arr->Rich_Web_FlexibleSl_L_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_FlexibleSl_L_T == "Type 1") { ?>
                    <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="loader_Navigation1 loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation1">
                        </div>
                        <div class="loader_Navigation2 loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation2">
                        </div>
                        <div class="loader_Navigation3 loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation3">
                        </div>
                        <div class="loader_Navigation4" id="loader_Navigation4"></div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_FlexibleSl_L_T == "Type 2") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_FlexibleSl_L_T == "Type 3") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_FlexibleSl_L_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if($rw_loader_options_arr->Rich_Web_FlexibleSl_LT_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_FlexibleSl_LT_T == "Type 1") { ?>
                    <div class="cssload-loader<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_FlexibleSl_LT);?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_FlexibleSl_LT_T == "Type 2") { ?>
                    <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>">
                        <?php foreach($text_array as $key=>$v){ ?>
                            <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>_<?php echo esc_html($key+1);?>" class="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>"><?php echo esc_html($v);?></div>
                        <?php } ?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_FlexibleSl_LT_T == "Type 3") { ?>
                    <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box">
                            <?php foreach($text_array as $key=>$v){ ?>
                                <div><?php echo esc_html($v);?></div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_FlexibleSl_LT_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-text<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_FlexibleSl_LT);?>
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
<figure class="rw_fl_slider_figure<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" style="height:0px; overflow:hidden;">
    <div class="mis-stage mis-stage_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
        <ol class="mis-slider mis-slider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
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
                <li class="mis-slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                    <?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url != ''){ ?>
                        <figure>
                            <?php if($rw_theme_options_arr->Rich_Web_Sl_FS_SVis == "on"){ ?>
                                <div style="overflow: auto; position: relative; margin-bottom: 20px;">
                                    <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined") { ?>
                                        <i class='rw_vfl_popup rw_vFlexable_ic rich_web rich_web-play' data-image='<?php echo esc_url($link_vImg_sl); ?>' data-video='<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url); ?>'></i>
                                    <?php } else { ?>
                                        <i class='rw_vfl_popup rich_web rich_web-search' data-image='<?php echo esc_url($link_vImg_sl); ?>' data-video='<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url); ?>'></i>
                                    <?php } ?>
                                    <img class="rw_fl_slider_img rw_fl_slider_img<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"  src="<?php echo esc_url($link_vImg_sl);?>" data-image="<?php echo esc_url($link_vImg_sl);?>"  data-video="<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>"  alt="<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>">
                                </div>
                                <a href="<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>" target="<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_NewTab=='checked'){ echo esc_attr('_blank');}?>" class="mis-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                    <figcaption>
                                        <?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>
                                    </figcaption>
                                </a>
                            <?php }else{ ?>
                                <a href="<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>" target="<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_NewTab=='checked'){ echo esc_attr('_blank');}?>" class="mis-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                    <div style="overflow: auto; position: relative; margin-bottom: 20px;">
                                        <img class="rw_fl_slider_img rw_fl_slider_img<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" src="<?php echo esc_url($link_vImg_sl);?>" data-image="<?php echo esc_url($link_vImg_sl);?>" data-video="<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>" alt="<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>">
                                    </div>
                                    <figcaption>
                                        <?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>
                                    </figcaption>
                                </a>
                            <?php } ?>
                        </figure>
                    <?php }else{ ?>
                        <span class="mis-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                            <figure>
                                <div style="overflow: auto; position: relative; margin-bottom: 20px;">
                                    <?php if($rw_theme_options_arr->Rich_Web_Sl_FS_SVis == "on"){ ?>
                                        <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined") { ?>
                                            <i class='rw_vfl_popup rw_vFlexable_ic rich_web rich_web-play' data-image='<?php echo esc_url($link_vImg_sl); ?>' data-video='<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url); ?>'></i>
                                        <?php } else { ?>
                                            <i class='rw_vfl_popup rich_web rich_web-search' data-image='<?php echo esc_url($link_vImg_sl); ?>' data-video='<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url); ?>'></i>
                                        <?php } ?>
                                    <?php } ?>
                                    <img class="rw_fl_slider_img rw_fl_slider_img<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" src="<?php echo esc_url($link_vImg_sl);?>" alt="<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>">
                                </div>
                                <figcaption>
                                    <?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>
                                </figcaption>
                            </figure>
                        </span>
                    <?php }?>
                </li>
            <?php } ?>
        </ol>
    </div>
</figure>
<input type='text' style='display:none;' class='RW_SL_Number' value='<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_FS_SVis<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_FS_SVis);?>'>
<input type='text' style='display:none;' class='Rich_Web_Sl_FS_Arr_Type<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_FS_Arr_Type);?>'>
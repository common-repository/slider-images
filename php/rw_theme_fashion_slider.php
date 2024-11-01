<?php if(!empty($rw_loader_options_arr)) { ?>
    <div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>" style="<?php if($rw_loader_options_arr->Rich_Web_FSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
        <div class="center_content<?php echo esc_html($rw_slider_image_id);?>">
            <?php if($rw_loader_options_arr->Rich_Web_FSl_L_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_FSl_L_T == "Type 1") { ?>
                    <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="loader_Navigation1 loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation1">
                        </div>
                        <div class="loader_Navigation2 loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation2">
                        </div>
                        <div class="loader_Navigation3 loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation3">
                        </div>
                        <div class="loader_Navigation4" id="loader_Navigation4"></div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_FSl_L_T == "Type 2") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_FSl_L_T == "Type 3") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_FSl_L_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if($rw_loader_options_arr->Rich_Web_FSl_LT_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_FSl_LT_T == "Type 1") { ?>
                    <div class="cssload-loader<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_FSl_LT);?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_FSl_LT_T == "Type 2") { ?>
                    <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>">
                        <?php foreach($text_array as $key=>$v){ ?>
                            <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>_<?php echo esc_html($key + 1); ?>" class="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>"><?php echo esc_html($v); ?></div>
                        <?php } ?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_FSl_LT_T == "Type 3") { ?>
                    <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box">
                            <?php foreach($text_array as $key=>$v){ ?>
                                <div><?php echo esc_html($v); ?></div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_FSl_LT_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-text<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_FSl_LT);?>
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
<div class="slider_container slider_container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" style='position:relative;display:none;padding:0px;max-width:100%;border:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Border_Width);?>px solid <?php echo esc_html($rw_theme_options_arr->rich_fsl_Border_Color);?>;background:<?php if( $rw_theme_options_arr->rich_fsl_Border_Width == '0' ){ echo esc_attr('none;') ; }else{ echo esc_html($rw_theme_options_arr->rich_fsl_Border_Color); } ?>;'>
    <div class="flexslider flexslider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
        <ul class="slides" style='list-style:none;margin:0px;padding:0px;'>
            <?php for($i=0;$i<count($rw_slider_image_photos_arr);$i++){ 
                if(strpos($rw_slider_image_photos_arr[$i]->Sl_Img_Url, 'youtube') > 0){
                    $rest_vImg_url = substr(esc_url($rw_slider_image_photos_arr[$i]->Sl_Img_Url), 0, -13);
                    $link_vImg_sl = $rest_vImg_url.'maxresdefault.jpg';
                    if (!@fopen("$link_vImg_sl",'r')) { $link_vImg_sl = esc_url($rw_slider_image_photos_arr[$i]->Sl_Img_Url); }
                }else{
                    $link_vImg_sl = esc_url($rw_slider_image_photos_arr[$i]->Sl_Img_Url);
                }
            ?>
                <i class='delIc_fashion delIc_fashion<?php echo esc_html($rw_slider_image_id);?> rich_web rich_web-times'></i>
                <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined"){  ?>
                    <li class="<?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined"){ echo esc_attr("pointer"); } ?>" onclick="rw_fashion_video_cl<?php echo esc_html($rw_slider_image_id);?>('<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>',this)">
                        <a href="#" class='clfl' style='position:relative;cursor: default;'>
                            <img style='margin:0px;' class="RW_Fashion_IMG<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined"){ echo esc_attr("pointer"); } ?>" src="<?php echo esc_url($link_vImg_sl);?>" alt="" title="" />
                        </a>
                        <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined") { ?>
                            <iframe class='rw_fashion_video<?php echo esc_html($rw_slider_image_id); ?> rw_fashion_video' src='' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><i class='plIc plIc_fashion rich_web rich_web-play'></i>
                        <?php } ?>
                        <div class="flex-caption flex-caption_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"
                            style='overflow-x:hidden;background:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Desc_Bg_Color);?>;height:<?php echo 2*$rw_theme_options_arr->rich_fsl_Icon_Size+5;?>px;'>
                            <div class="caption_title_line">
                                <h2 style='padding:0px;font-size:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Title_Font_Size);?>px;color:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Title_Color);?>;font-family:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Title_Font_Family);?>;text-align:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Title_Text_Align);?>;'>
                                    <?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>
                                </h2>
                                <?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->Sl_Img_Description);?>
                            </div>
                        </div>
                        <?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url !== '' && $rw_slider_image_photos_arr[$i]->Sl_Link_Url !== null){ ?>
                            <a href='<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>' target='<?php echo esc_html($rw_slider_image_photos_arr[$i]->Sl_Link_NewTab);?>' class='FSLLink FSLLink_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'>
                                <?php echo esc_html($rw_theme_options_arr->rich_fsl_Link_Text);?>
                            </a>
                        <?php } ?>
                    </li>
                <?php } else { ?>
                    <li class="<?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined"){ echo esc_attr("pointer"); } ?>" onclick="">
                        <a href="#" class='clfl' style='position:relative;cursor: default;'>
                            <img style='margin:0px;' class="RW_Fashion_IMG<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined"){ echo esc_attr("pointer"); } ?>" src="<?php echo esc_url($link_vImg_sl);?>" alt="" title="" />
                        </a>
                        <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined") { ?>
                            <iframe class='rw_fashion_video<?php echo esc_html($rw_slider_image_id); ?> rw_fashion_video' src='' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><i class='plIc plIc_fashion rich_web rich_web-play'></i>
                        <?php } ?>
                        <div class="flex-caption flex-caption_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" style='overflow-x:hidden;background:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Desc_Bg_Color);?>;height:<?php echo esc_html(2*$rw_theme_options_arr->rich_fsl_Icon_Size+5);?>px;'>
                            <div class="caption_title_line">
                                <h2 style='padding:0px;font-size:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Title_Font_Size);?>px;color:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Title_Color);?>;font-family:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Title_Font_Family);?>;text-align:<?php echo esc_html($rw_theme_options_arr->rich_fsl_Title_Text_Align);?>;'>
                                    <?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>
                                </h2>
                                <?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->Sl_Img_Description);?>
                            </div>
                        </div>
                        <?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url !== '' && $rw_slider_image_photos_arr[$i]->Sl_Link_Url !== null){ ?>
                            <a href='<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>' target='<?php echo esc_html($rw_slider_image_photos_arr[$i]->Sl_Link_NewTab);?>' class='FSLLink FSLLink_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'>
                                <?php echo esc_html($rw_theme_options_arr->rich_fsl_Link_Text);?>
                            </a>
                        <?php } ?>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</div>
<input type='text' style='display:none;' class='animTypeR_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_fsl_animation);?>'>
<input type='text' style='display:none;' class='SSHOWFSH_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rich_fsl_SShow);?>'>
<input type='text' style='display:none;' class='SSHOWSpeed_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_fsl_SShow_Speed);?>'>
<input type='text' style='display:none;' class='SSHOWAnimDur_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_fsl_Anim_Dur);?>'>
<input type='text' style='display:none;' class='ICSHOW_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rich_fsl_Ic_Show);?>'>
<input type='text' style='display:none;' class='PPLSHOW_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rich_fsl_PPL_Show);?>'>
<input type='text' style='display:none;' class='RANDOMIZE_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rich_fsl_Randomize);?>'>
<input type='text' style='display:none;' class='LFSL_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rich_fsl_Loop);?>'>
<input type='text' style='display:none;' class='FSLWidth_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_fsl_Width);?>'>
<input type='text' style='display:none;' class='FSLHeight_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_fsl_Height);?>'>
<input type='text' style='display:none;' class='FSLDescShow_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rich_fsl_Desc_Show);?>'>
<input type='text' style='display:none;' class='FSLLinkFS_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_fsl_Link_Font_Size);?>'>
<input type='text' style='display:none;' class='IcOnSize_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_fsl_Icon_Size);?>'>
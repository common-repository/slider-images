<?php if(!empty($rw_loader_options_arr)){ ?>
    <div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>" style="<?php if($rw_loader_options_arr->Rich_Web_AnimSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
        <div class="center_content<?php echo esc_html($rw_slider_image_id);?>">
            <?php if($rw_loader_options_arr->Rich_Web_AnimSl_L_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_AnimSl_L_T == "Type 1") { ?>
                    <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="loader_Navigation1 loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation1">
                        </div>
                        <div class="loader_Navigation2 loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation2">
                        </div>
                        <div class="loader_Navigation3 loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation3">
                        </div>
                        <div class="loader_Navigation4" id="loader_Navigation4"></div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_AnimSl_L_T == "Type 2") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_AnimSl_L_T == "Type 3") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_AnimSl_L_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if($rw_loader_options_arr->Rich_Web_AnimSl_LT_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_AnimSl_LT_T == "Type 1") { ?>
                    <div class="cssload-loader<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_AnimSl_LT);?></div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_AnimSl_LT_T == "Type 2") { ?>
                    <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>">
                        <?php foreach($text_array as $key=>$v){ ?>
                        <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>_<?php echo esc_html($key + 1); ?>"
                            class="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>"><?php echo esc_html($v); ?></div>
                        <?php } ?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_AnimSl_LT_T == "Type 3") { ?>
                    <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box">
                            <?php foreach($text_array as $key=>$v){ ?>
                            <div><?php echo esc_html($v); ?></div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_AnimSl_LT_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-text<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_AnimSl_LT);?>
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
<div class="cd-slider-wrapper cd-slider-wrapper<?php echo esc_html($rw_slider_image_id);?>" style="display:none;">
    <ul class="cd-slider cd-slider<?php echo esc_html($rw_slider_image_id);?>">
        <i class="rw_delIc_animation rich_web rich_web-times"></i>
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
            <li style="padding:0px;margin:0px;" class="visible RW_Im_An_Sl RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?> RW_Im_An_Sl<?php echo esc_html($rw_slider_image_id);?><?php echo esc_html($i+1);?>">
                <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined"){  ?>
                    <div class="cd-svg-wrapper" onclick="rw_anim_video_cl<?php echo esc_html($rw_slider_image_id);?>('<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>',this)">
                        <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined") { ?>
                            <iframe class='rw_animation_video<?php $rw_slider_image_id; ?> rw_animation_video' src=''  webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><i  class='plIc plIc_animation rich_web rich_web-play'></i>
                        <?php } ?>
                        <img class="<?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined"){ echo esc_attr("pointer"); } ?> RW_ANMSL_Image RW_ANMSL_Image<?php echo esc_html($rw_slider_image_id);?>" src="<?php echo esc_url($link_vImg_sl);?>" />
                    </div>
                <?php } else { ?>
                    <div class="cd-svg-wrapper" onclick="">
                        <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined") { ?>
                            <iframe class='rw_animation_video<?php $rw_slider_image_id; ?> rw_animation_video' src=''  webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><i  class='plIc plIc_animation rich_web rich_web-play'></i>
                        <?php } ?>
                        <img class="<?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url !== '' && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== null && $rw_slider_image_video_arr[$i]->Sl_Video_Url !== "undefined"){ echo esc_attr("pointer"); } ?> RW_ANMSL_Image RW_ANMSL_Image<?php echo esc_html($rw_slider_image_id);?>"  src="<?php echo esc_url($link_vImg_sl);?>" />
                    </div>
                <?php } ?>
            </li>
            <?php if($rw_slider_image_photos_arr[$i]->SL_Img_Title == ""){ ?>
                <div style="opacity:0" class="RW_Title RW_Title<?php echo esc_html($rw_slider_image_id);?> RW_Title_Ef<?php echo esc_html($rw_slider_image_id);?><?php echo esc_html($i+1);?>">
                    <?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>
                </div>
            <?php } else { ?>
                <div style="opacity:1" class="RW_Title RW_Title<?php echo esc_html($rw_slider_image_id);?> RW_Title_Ef<?php echo esc_html($rw_slider_image_id);?><?php echo esc_html($i+1);?>">
                    <?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>
                </div>
            <?php } ?>
        <?php } ?>
    </ul>
    <ul class="cd-slider-navigation cd-slider-navigation<?php echo esc_html($rw_slider_image_id);?>">
        <?php if($rw_theme_options_arr->Rich_Web_AnSL_T_ShC=="Icon"){ ?>
            <li style="padding:0px;margin:0px;" class="RW_Right_Anim_Sl"><i class="next-slide RW_CL_N RW_CL_N<?php echo esc_html($rw_slider_image_id);?> RW_CL RW_CL<?php echo esc_html($rw_slider_image_id);?> <?php echo esc_html($rw_theme_options_arr->Rich_Web_AnSL_Ic_T);?>-right"></i> </li>
            <li style="padding:0px;margin:0px;" class="RW_Left_Anim_Sl"><i class="prev-slide RW_CL_P RW_CL_P<?php echo esc_html($rw_slider_image_id);?> RW_CL RW_CL<?php echo esc_html($rw_slider_image_id);?> <?php echo esc_html($rw_theme_options_arr->Rich_Web_AnSL_Ic_T);?>-left"></i> </li>
        <?php }else if($rw_theme_options_arr->Rich_Web_AnSL_T_ShC=="Image"){ ?>
            <li style="padding:0px;" class="RW_Right_Anim_Sl"><img src="<?php echo esc_url(plugin_dir_url( __DIR__ ).'Images/icon-'. $rw_theme_options_arr->Rich_Web_AnSL_T_Sh .'-'. $rw_theme_options_arr->Rich_Web_AnSL_T_Sh .'.png');?>" class="next-slide RW_CL_N RW_CL_N<?php echo esc_html($rw_slider_image_id);?> RW_CL RW_CL<?php echo esc_html($rw_slider_image_id);?>"> </li>
            <li style="padding:0px;margin:0px;" class="RW_Left_Anim_Sl"><img  src="<?php echo esc_url(plugin_dir_url( __DIR__ ).'Images/icon-'. $rw_theme_options_arr->Rich_Web_AnSL_T_Sh .'.png');?>"  class="prev-slide RW_CL_P RW_CL_P<?php echo esc_html($rw_slider_image_id);?> RW_CL RW_CL<?php echo esc_html($rw_slider_image_id);?>"> </li>
        <?php } ?>
    </ul>
    <div class="cd-slider-controls cd-slider-controls<?php echo esc_html($rw_slider_image_id);?>" style="display:none;">
        <?php for($i=0;$i<count($rw_slider_image_photos_arr);$i++){ ?>
            <?php if($i==0){ ?>
                <li style="padding:0px;margin:0px;" class="selected"><a class="RW_Thumb<?php echo esc_html($rw_slider_image_id);?>" href="#0" name="<?php echo esc_html($i+1);?>"><em>Item <?php echo esc_html($i+1);?></em></a></li>
            <?php }else{ ?>
                <li style="padding:0px;margin:0px;"><a class="RW_Thumb<?php echo esc_html($rw_slider_image_id);?>" href="#0" name="<?php echo esc_html($i+1);?>"><em>Item <?php echo esc_html($i+1);?></em></a></li>
            <?php } ?>
        <?php } ?>
    </div>
</div>
<input type="text" style="display:none" class="CountShort<?php echo esc_html($rw_slider_image_id);?>" value="<?php echo count($rw_slider_image_photos_arr);?>">
<input type="text" style="display:none" class="Rich_Web_AnSL_H<?php echo esc_html($rw_slider_image_id);?>" value="<?php echo esc_html($rw_theme_options_arr->Rich_Web_AnSL_H);?>">
<input type="text" style="display:none" class="Rich_Web_AnSL_ET<?php echo esc_html($rw_slider_image_id);?>" value="<?php echo esc_html($rw_theme_options_arr->Rich_Web_AnSL_ET);?>">
<input type="text" style="display:none" class="Rich_Web_AnSL_SSh<?php echo esc_html($rw_slider_image_id);?>" value="<?php echo esc_html($rw_theme_options_arr->Rich_Web_AnSL_SSh);?>">
<input type="text" style="display:none" class="Rich_Web_AnSL_SShChT<?php echo esc_html($rw_slider_image_id);?>" value="<?php echo esc_html($rw_theme_options_arr->Rich_Web_AnSL_SShChT);?>">
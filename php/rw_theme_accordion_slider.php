<?php  if(!empty($rw_loader_options_arr)){ ?>
    <div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>" style="<?php if(esc_html($rw_loader_options_arr->Rich_Web_AccSl_Loading_Show) == "true") { ?> display: block; <?php } else { ?>display: none;<?php } ?>">
        <div class="center_content<?php echo esc_html($rw_slider_image_id);?>">
            <?php
                if(esc_html($rw_loader_options_arr->Rich_Web_AccSl_L_Show) == "true") {
                    if(esc_html($rw_loader_options_arr->Rich_Web_AccSl_L_T) == "Type 1") { ?>
                        <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?>">
                            <div class="loader_Navigation1 loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation1">
                            </div>
                            <div class="loader_Navigation2 loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation2">
                            </div>
                            <div class="loader_Navigation3 loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation3">
                            </div>
                            <div class="loader_Navigation4" id="loader_Navigation4"></div>
                        </div>
                    <?php } elseif(esc_html($rw_loader_options_arr->Rich_Web_AccSl_L_T) == "Type 2") { ?>
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
                    <?php } elseif(esc_html($rw_loader_options_arr->Rich_Web_AccSl_L_T) == "Type 3") { ?>
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
                    <?php } elseif(esc_html($rw_loader_options_arr->Rich_Web_AccSl_L_T) == "Type 4") { ?>
                        <div class="rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>">
                            <div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
                            <div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
                            <div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
                            <div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
                        </div>
                    <?php }
                } ?>
            <?php 
                if(esc_html($rw_loader_options_arr->Rich_Web_AccSl_LT_Show) == "true") { 
                    if(esc_html($rw_loader_options_arr->Rich_Web_AccSl_LT_T) == "Type 1") { ?>
                        <div class="cssload-loader<?php echo esc_html($rw_slider_image_id);?>">
                            <?php echo esc_html($rw_loader_options_arr->Rich_Web_AccSl_LT);?>
                        </div>
                    <?php } elseif(esc_html($rw_loader_options_arr->Rich_Web_AccSl_LT_T) == "Type 2") { ?>
                        <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>">
                            <?php foreach($text_array as $key=>$v){ ?>
                                <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>_<?php echo esc_html($key+1);?>" class="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>"><?php echo esc_html($v);?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } elseif(esc_html($rw_loader_options_arr->Rich_Web_AccSl_LT_T) == "Type 3") { ?>
                        <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>">
                            <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box">
                                <?php foreach($text_array as $key=>$v){ ?>
                                    <div><?php echo esc_html($v);?></div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } elseif(esc_html($rw_loader_options_arr->Rich_Web_AccSl_LT_T) == "Type 4") { ?>
                        <div class="rw-slider-image-loading-text<?php echo esc_html($rw_slider_image_id);?>">
                            <?php echo esc_html($rw_loader_options_arr->Rich_Web_AccSl_LT);?>
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
<section class="main" id="rw_acc_main<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" style="display: none;">
    <div class="ia-container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" style='border:<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_BW);?>px solid <?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_BC);?>;'>
        <?php for($i=0;$i<count($rw_slider_image_photos_arr);$i++){
				if(strpos($rw_slider_image_photos_arr[$i]->Sl_Img_Url, 'youtube') > 0){
					$rest_vImg_url = substr(esc_url($rw_slider_image_photos_arr[$i]->Sl_Img_Url), 0, -13);
					$link_vImg_sl = $rest_vImg_url.'maxresdefault.jpg';
					if (!@fopen(esc_url($link_vImg_sl),"r")) {
                        $link_vImg_sl = esc_url($rw_slider_image_photos_arr[$i]->Sl_Img_Url); 
                    }
				} else{
					$link_vImg_sl = esc_url($rw_slider_image_photos_arr[$i]->Sl_Img_Url);
				} ?>
            <figure class='figure_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' style='box-shadow:0px 0px 0px <?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Img_BSh);?>px <?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Img_BShC);?>'>
                <img class='img_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' src="<?php echo esc_url($link_vImg_sl);?>" />
                <input class='input_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' type="radio" name="radio-set_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" checked="checked" />
                <figcaption class='figcaption_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'>
                    <?php if(esc_html($rw_slider_image_photos_arr[$i]->SL_Img_Title)!=''){ ?>
                        <span class='span_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'
                            style='font-family:<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Title_FF);?>;color:<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Title_C);?>;text-shadow:unset;background:<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Title_BgC);?>'>
                            <?php echo html_entity_decode(esc_html($rw_slider_image_photos_arr[$i]->SL_Img_Title));?>
                        </span>
                    <?php } ?>
                    <?php if(esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url)!=''){ ?>
                        <a style='font-family:<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Link_FF);?>;color:<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Link_C);?>;text-shadow:unset;background:<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Link_BgC);?>'
                            href='<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>'
                            target='<?php if(esc_html($rw_slider_image_photos_arr[$i]->Sl_Link_NewTab)=='checked'){ echo esc_html('_blank');}?>'
                            class='Tot_Accord_Link_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'>
                            <?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Link_Text);?>
                        </a>
                    <?php } ?>
                    <?php if(esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== '' && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== null && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== "undefined") { ?>
                        <span class='icBg' data-video='<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url); ?>'></span>
                        <i class='rw_video_acc rich_web rich_web-play' data-video='<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url); ?>'></i>
                    <?php } ?>
                </figcaption>
                <?php if(esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== '' && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== null && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== "undefined") { ?>
                    <iframe class='rw_acc_video<?php echo esc_html($rw_slider_image_id); ?> rw_acc_video' src='' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                <?php } ?>
                <?php if(esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== '' && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== null && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== "undefined") { ?>
                    <i class='rw_icc_delIc rich_web rich_web-times'></i>
                <?php } ?>
        <?php } ?>
        <?php for($i=0;$i<count($rw_slider_image_photos_arr);$i++){ ?>
            </figure>
        <?php } ?>
    </div>
</section>
<input type='text' style='display:none;' class='Rich_Web_AccordSl_Width_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_W);?>'>
<input type='text' style='display:none;' class='Rich_Web_AccordSl_Height_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_H);?>'>
<input type='text' style='display:none;' class='Rich_Web_AccordSl_ImgW_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Img_W);?>'>
<input type='text' style='display:none;' class='Rich_Web_AccordSl_TitleFS_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Title_FS);?>'>
<input type='text' style='display:none;' class='Rich_Web_AccordSl_LinkFS_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_AcSL_Link_FS);?>'>
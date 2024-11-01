<?php if(!empty($rw_loader_options_arr)){ ?>
    <div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>" style="<?php if($rw_loader_options_arr->Rich_Web_CarSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
        <div class="center_content<?php echo esc_html($rw_slider_image_id);?>">
            <?php if($rw_loader_options_arr->Rich_Web_CarSl_L_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_CarSl_L_T == "Type 1") { ?>
                    <div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="loader_Navigation1 loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation1">
                        </div>
                        <div class="loader_Navigation2 loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation2">
                        </div>
                        <div class="loader_Navigation3 loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation3">
                        </div>
                        <div class="loader_Navigation4" id="loader_Navigation4"></div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_CarSl_L_T == "Type 2") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_CarSl_L_T == "Type 3") { ?>
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
                <?php } elseif($rw_loader_options_arr->Rich_Web_CarSl_L_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
                        <div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if($rw_loader_options_arr->Rich_Web_CarSl_LT_Show == "true") { ?>
                <?php if($rw_loader_options_arr->Rich_Web_CarSl_LT_T == "Type 1") { ?>
                    <div class="cssload-loader<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_CarSl_LT);?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_CarSl_LT_T == "Type 2") { ?>
                    <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>">
                        <?php foreach($text_array as $key=>$v){ ?>
                        <div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>_<?php echo esc_html($key+1);?>"
                            class="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>"><?php echo esc_html($v);?></div>
                        <?php } ?>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_CarSl_LT_T == "Type 3") { ?>
                    <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>">
                        <div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box">
                            <?php foreach($text_array as $key=>$v){ ?>
                            <div><?php echo esc_html($v);?></div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } elseif($rw_loader_options_arr->Rich_Web_CarSl_LT_T == "Type 4") { ?>
                    <div class="rw-slider-image-loading-text<?php echo esc_html($rw_slider_image_id);?>">
                        <?php echo esc_html($rw_loader_options_arr->Rich_Web_CarSl_LT);?>
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
<div class="your-slider-wrap your-slider-wrap<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" style="display: none;">
    <a class="Rich_Web_PSlider_SC_Arr_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> slider-nav-arrow slider-arrow_left_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> slider-nav-arrow_disable" href="javascript:void(0)">
        <?php if($rw_theme_options_arr->Rich_Web_Sl_SC_Arr_Type=='text'){ ?>
            <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_Arr_Prev);?>
        <?php }else{ ?>
            <i class='rich_web rich_web-<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_Arr_IType);?>-left'></i>
        <?php }?>
    </a>
    <a class="Rich_Web_PSlider_SC_Arr_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> slider-nav-arrow slider-arrow_right_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"  href="javascript:void(0)">
        <?php if($rw_theme_options_arr->Rich_Web_Sl_SC_Arr_Type=='text'){ ?>
            <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_Arr_Next);?>
        <?php }else{ ?>
            <i class='rich_web rich_web-<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_Arr_IType);?>-right'></i>
        <?php } ?>
    </a>
    <div class="your-slider responsiveSlider responsiveSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
        <ul>
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
                <li class="your-item_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                    <div class="rw_cont_img_hov_div<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> box">
                        <img src="<?php echo esc_url($link_vImg_sl);?>" alt="" class="your-item-pic_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                        <?php if($rw_loader_options_arr->Rich_Web_CarSl_HT == "1" || $rw_loader_options_arr->Rich_Web_CarSl_HT == "2" || $rw_loader_options_arr->Rich_Web_CarSl_HT == "3" || $rw_loader_options_arr->Rich_Web_CarSl_HT == "4") { ?>
                            <div class="rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                <div class="Rich_Web_PSlider_SC_LPop_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                    <?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url!=''){ ?>
                                        <?php if($rw_theme_options_arr->Rich_Web_Sl_SC_L_Type=='text'){ ?>
                                            <a class="Rich_Web_PSlider_SC_LText_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"
                                                href="<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>"
                                                target="<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_NewTab=='checked'){ echo esc_attr('_blank');} ?>">
                                                <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_L_Text);?>
                                            </a>
                                        <?php }else{ ?>
                                            <a class="Rich_Web_PSlider_SC_L_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"
                                                href="<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>"
                                                target="<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_NewTab=='checked'){ echo esc_attr( '_blank' );} ?>">
                                                <i class='rich_web rich_web-<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_L_IType);?>'></i>
                                            </a>
                                        <?php }?>
                                    <?php } ?>
                                    <?php if($rw_theme_options_arr->Rich_Web_Sl_SC_PI_Type=='text'){ ?>
                                        <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url != ''){ ?>
                                            <a class="Rich_Web_PSlider_SC_PText_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" onclick="Rich_Web_PSlider_SC_Open_Popup_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>('<?php echo esc_url($link_vImg_sl);?>','<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>')" style="font-family:arial;<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url!=''){echo esc_attr('margin-left:10px;'); }?>">
                                                <i class='rich_web rich_web-play'></i>
                                            </a>
                                        <?php }else{ ?>
                                            <a class="Rich_Web_PSlider_SC_PText_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" onclick="Rich_Web_PSlider_SC_Open_Popup_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>('<?php echo esc_url($link_vImg_sl);?>','<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>')" style="<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url!=''){echo esc_attr('margin-left:10px;'); }?>">
                                                <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_PI_Text);?>
                                            </a>
                                        <?php } ?>
                                    <?php }else{ ?>
                                        <a class="Rich_Web_PSlider_SC_P_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" onclick="Rich_Web_PSlider_SC_Open_Popup_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>('<?php echo esc_url($link_vImg_sl);?>','<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>')" style="<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url!=''){echo esc_attr('margin-left:10px;'); }?>">
                                            <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url != ''){ ?>
                                                <i class='rich_web rich_web-youtube-play'></i>
                                            <?php }else{ ?>
                                                <i class='rich_web rich_web-<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_PI_IType);?>'></i>
                                            <?php } ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php }else{ ?>
                            <?php if($rw_loader_options_arr->Rich_Web_CarSl_HT == "5" || $rw_loader_options_arr->Rich_Web_CarSl_HT == "6" || $rw_loader_options_arr->Rich_Web_CarSl_HT == "8" || $rw_loader_options_arr->Rich_Web_CarSl_HT == "10") { ?>
                                <div class="rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                </div>
                            <?php } elseif($rw_loader_options_arr->Rich_Web_CarSl_HT == "7") { ?>
                                <div class="rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_1_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                </div>
                                <div class="rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_2_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                </div>
                                <div class="rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_3_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                </div>
                                <div class="rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_4_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                </div>
                            <?php } elseif($rw_loader_options_arr->Rich_Web_CarSl_HT == "9"){ ?>
                                <div class="rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_1_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                </div>
                                <div class="rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> rw_hov_div<?php esc_html($rw_loader_options_arr->Rich_Web_CarSl_HT);?>_2_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                </div>
                            <?php }?>
                            <div class="Rich_Web_PSlider_SC_LPop_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                                <?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url!=''){ ?>
                                    <?php if($rw_theme_options_arr->Rich_Web_Sl_SC_L_Type=='text'){ ?>
                                        <a class="Rich_Web_PSlider_SC_LText_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"
                                            href="<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>"
                                            target="<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_NewTab=='checked'){ echo esc_attr( '_blank' );} ?>">
                                            <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_L_Text);?>
                                        </a>
                                    <?php }else{ ?>
                                        <a class="Rich_Web_PSlider_SC_L_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"
                                            href="<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>"
                                            target="<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_NewTab=='checked'){ echo esc_attr( '_blank' );} ?>">
                                            <i class='rich_web rich_web-<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_L_IType);?>'></i>
                                        </a>
                                    <?php }?>
                                <?php }?>
                                <?php if($rw_theme_options_arr->Rich_Web_Sl_SC_PI_Type=='text'){ ?>
                                    <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url != ''){ ?>
                                        <a class="Rich_Web_PSlider_SC_PText_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>"  onclick="Rich_Web_PSlider_SC_Open_Popup_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>('<?php echo esc_url($link_vImg_sl);?>','<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>')"  style="font-family:arial;<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url!=''){echo esc_attr('margin-left:10px;'); }?>">
                                            <i class='rich_web rich_web-play'></i>
                                        </a>
                                    <?php }else{ ?>
                                        <a class="Rich_Web_PSlider_SC_PText_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" onclick="Rich_Web_PSlider_SC_Open_Popup_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>('<?php echo esc_url($link_vImg_sl);?>','<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>')" style="<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url!=''){echo esc_attr('margin-left:10px;'); }?>">
                                            <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_PI_Text);?>
                                        </a>
                                    <?php } ?>
                                <?php }else{ ?>
                                    <a class="Rich_Web_PSlider_SC_P_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" onclick="Rich_Web_PSlider_SC_Open_Popup_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>('<?php echo esc_url($link_vImg_sl);?>','<?php echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url);?>')" style="<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url!=''){echo esc_attr('margin-left:10px;'); }?>">
                                        <?php if($rw_slider_image_video_arr[$i]->Sl_Video_Url != ''){ ?>
                                            <i class='rich_web rich_web-play'></i>
                                        <?php }else{ ?>
                                            <i  class='rich_web rich_web-<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_PI_IType);?>'></i>
                                        <?php } ?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="your-item-title_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>">
                        <?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<input type='text' style='display:none;' class='yitw_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_IW);?>'>
<input type='text' style='display:none;' class='yith_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_SC_IH);?>'>
<input type="text" style="display:none;" class="ul_width<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" value="<?php  echo esc_html(count($rw_slider_image_photos_arr)*($rw_theme_options_arr->Rich_Web_Sl_SC_IW)); ?>">
<input type="text" style="display:none" name="" class="rw_sl_imgs_count<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" value="<?php  echo esc_html(count($rw_slider_image_photos_arr));?>">
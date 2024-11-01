<?php if(!empty($rw_loader_options_arr)) { ?>
	<div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>" style="<?php if($rw_loader_options_arr->Rich_Web_ContSl_Loading_Show == "true") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
		<div class="center_content<?php echo esc_html($rw_slider_image_id);?>">
			<?php if($rw_loader_options_arr->Rich_Web_ContSl_L_Show == "true") { ?>
				<?php if($rw_loader_options_arr->Rich_Web_ContSl_L_T == "Type 1") { ?>
					<div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?>">
						<div class="loader_Navigation1 loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation1"></div>
						<div class="loader_Navigation2 loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation2"></div>
						<div class="loader_Navigation3 loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>" id="loader_Navigation3"></div>
						<div class="loader_Navigation4" id="loader_Navigation4"></div>
					</div>
				<?php } elseif($rw_loader_options_arr->Rich_Web_ContSl_L_T == "Type 2") { ?>
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
				<?php } elseif($rw_loader_options_arr->Rich_Web_ContSl_L_T == "Type 3") { ?>
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
				<?php } elseif($rw_loader_options_arr->Rich_Web_ContSl_L_T == "Type 4") { ?>
					<div class="rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>">
						<div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
						<div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
						<div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
						<div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
					</div>
				<?php } ?>
			<?php } ?>
			<?php if($rw_loader_options_arr->Rich_Web_ContSl_LT_Show == "true") { ?>
				<?php if($rw_loader_options_arr->Rich_Web_ContSl_LT_T == "Type 1") { ?>
					<div class="cssload-loader<?php echo esc_html($rw_slider_image_id);?>"><?php echo esc_html($rw_loader_options_arr->Rich_Web_ContSl_LT);?></div>
				<?php } elseif($rw_loader_options_arr->Rich_Web_ContSl_LT_T == "Type 2") { ?>
					<div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>">
						<?php foreach($text_array as $key=>$v){ ?>
							<div id="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>_<?php echo esc_html($key + 1); ?>" class="inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>"><?php echo esc_html($v); ?></div>
						<?php } ?>
					</div>
				<?php } elseif($rw_loader_options_arr->Rich_Web_ContSl_LT_T == "Type 3") { ?>
					<div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>">
						<div class="cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box">
							<?php foreach($text_array as $key=>$v){ ?>
								<div><?php echo esc_html($v); ?></div>
							<?php } ?>
						</div>
					</div>
				<?php } elseif($rw_loader_options_arr->Rich_Web_ContSl_LT_T == "Type 4") { ?>
					<div class="rw-slider-image-loading-text<?php echo esc_html($rw_slider_image_id);?>">
						<?php echo esc_html($rw_loader_options_arr->Rich_Web_ContSl_LT);?>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
<?php } else { ?>
	<div id="RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>" >
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
<div class="main main_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" style="display:none;" >
	<div class="page_container">
		<div id="immersive_slider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" style='background:<?php echo esc_html($rw_theme_options_arr->rich_CS_Cont_BgC);?>;box-shadow:0px 0px 30px <?php echo esc_html($rw_theme_options_arr->rich_CS_Cont_BSC);?>;opacity:1;border-top:<?php echo esc_html($rw_theme_options_arr->rich_CS_Cont_BW);?>px solid <?php echo esc_html($rw_theme_options_arr->rich_CS_Cont_BC);?>;border-bottom:<?php echo esc_html($rw_theme_options_arr->rich_CS_Cont_BW);?>px solid <?php echo esc_html($rw_theme_options_arr->rich_CS_Cont_BC);?>;border-radius:<?php echo esc_html($rw_theme_options_arr->rich_CS_Cont_BR);?>px;'>
			<?php for($i=0;$i<count($rw_slider_image_photos_arr);$i++){ 
				if(strpos(esc_url($rw_slider_image_photos_arr[$i]->Sl_Img_Url), 'youtube') > 0)
				{
					$rest_vImg_url = substr(esc_url($rw_slider_image_photos_arr[$i]->Sl_Img_Url), 0, -13);
					$link_vImg_sl = $rest_vImg_url.'maxresdefault.jpg';
					if (!@fopen("$link_vImg_sl",'r')) { $link_vImg_sl = esc_url($rw_slider_image_photos_arr[$i]->Sl_Img_Url); }
				}
				else
				{
					$link_vImg_sl = esc_url($rw_slider_image_photos_arr[$i]->Sl_Img_Url);
				}
				?>
				<div class="slide slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>" data-blurred="<?php echo esc_url($link_vImg_sl);?>">
					<div class="image ImCS" onclick='popupFunc<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>("<?php echo esc_url($link_vImg_sl);?>","<?php  if(esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== '' && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== null && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== "undefined") { echo esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url); }else{ echo ''; } ?>")'>
						<img class='imFiltBl<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' src="<?php echo esc_url($link_vImg_sl);?>" alt="Slider <?php echo esc_html($i+1);?>"/>
						<?php if($rw_theme_options_arr->rich_CS_Video_DC=='on'){ ?>
							<?php if(esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== '' && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== null && esc_url($rw_slider_image_video_arr[$i]->Sl_Video_Url) !== "undefined") { ?>
								<i class='plIcContent rich_web rich_web-play'></i>
							<?php } ?>
						<?php } ?>
					</div>
					<div class="content CSHD">
						<h2 class='CSHeader' style='margin:0px;display:<?php echo esc_html($rich_CS_Video_TShow);?>;color:<?php echo esc_html($rw_theme_options_arr->rich_CS_Video_TC);?>;font-size:<?php echo esc_html($rw_theme_options_arr->rich_CS_Video_TFS);?>;font-family:<?php echo esc_html($rw_theme_options_arr->rich_CS_Video_TFF);?>;text-align:<?php echo esc_html($rw_theme_options_arr->rich_CS_Video_TTA);?>;'><?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->SL_Img_Title);?></h2>
						<?php if($rich_CS_Video_DShow == 'block'){ ?>
							<?php echo html_entity_decode($rw_slider_image_photos_arr[$i]->Sl_Img_Description);?>
						<?php }?>
					</div>
					<?php if($rw_slider_image_photos_arr[$i]->Sl_Link_Url !== '' && $rw_slider_image_photos_arr[$i]->Sl_Link_Url !== null){ ?>
					<div class='linkDCS'>
						<a href='<?php echo esc_url($rw_slider_image_photos_arr[$i]->Sl_Link_Url);?>' target='<?php echo esc_html($rw_slider_image_photos_arr[$i]->Sl_Link_NewTab);?>' class='CSLink CSLink_<?php echo esc_html($i);?>' style='font-family:<?php echo esc_html($rw_theme_options_arr->rich_CS_LFF);?>;'><?php echo esc_html($rw_theme_options_arr->rich_CS_LT);?></a>
					</div>
					<?php } ?>
				</div>
			<?php } ?>
			<i class='is-prev is-prev<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> CSIcon <?php echo esc_html($Rich_PS_Left_Icon);?>'></i>
			<i class='is-next is-next<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> CSIcon <?php echo esc_html($Rich_PS_Right_Icon);?>'></i>
		</div>
	</div>
</div>
<input type='text' style='display:none;' class='SDuration<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'      value='<?php echo esc_html($rw_theme_options_arr->rich_CS_SD);?>'>
<input type='text' style='display:none;' class='SShowCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'        value='<?php echo esc_html($rw_theme_options_arr->rich_CS_Video_H);?>'>
<input type='text' style='display:none;' class='AnimationType_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>' value='<?php echo esc_html($rw_theme_options_arr->rich_CS_AT);?>'>
<input type='text' style='display:none;' class='ContWidth<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'      value='<?php echo esc_html($rw_theme_options_arr->rich_CS_Cont_W);?>'>
<input type='text' style='display:none;' class='ContHeight<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'     value='<?php echo esc_html($rw_theme_options_arr->rich_CS_Cont_H);?>'>
<input type='text' style='display:none;' class='ContHeader<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'     value='<?php echo esc_html($rw_theme_options_arr->rich_CS_Video_TFS);?>'>
<input type='text' style='display:none;' class='ContLinkCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'     value='<?php echo esc_html($rw_theme_options_arr->rich_CS_LFS);?>'>
<input type='text' style='display:none;' class='ContIconsCS<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'    value='<?php echo esc_html($rw_theme_options_arr->rich_CS_AFS);?>'>
<input type='text' style='display:none;' class='PopupShow<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>'    value='<?php echo esc_html($rw_theme_options_arr->rich_CS_Video_DC);?>'>
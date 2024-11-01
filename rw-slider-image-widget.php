<?php
	class rich_web_slider_image extends WP_Widget
	{
		function __construct()
		{
			$params=array('name'=>'Rich-Web Slider','description'=>'This is the widget of Rich-Web Slider plugin');
			parent::__construct('rich_web_slider_image','',$params);
		}
		function form($instance)
		{
			$defaults = array('Rich_Web_Slider'=>'');
			$instance = wp_parse_args((array)$instance, $defaults);
			$Rich_Web_Slider = $instance['Rich_Web_Slider'];
			?>
			<div>
				<p>
					Slider Title:
					<select name="<?php echo esc_attr($this->get_field_name('Rich_Web_Slider'));?>" class="widefat">
						<?php
							global $wpdb;
							$rw_slider_image_records=$wpdb->get_results($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_MANAGER_TABLE." WHERE id > %d", 0),ARRAY_A);
							foreach ($rw_slider_image_records as $rw_value)
							{
								echo sprintf(
									'
									<option value="%1$s"> 
										%2$s
									</option>
									',
									esc_attr( $rw_value["id"] ),
									esc_html( $rw_value["Slider_Title"] )
								);
							}
						?>
					</select>
				</p>
			</div>
			<?php
		}
		function widget($args,$instance)
		{
			extract($args);
			$rw_slider_image_id = empty($instance['Rich_Web_Slider']) ? '' : $instance['Rich_Web_Slider'];
			global $wpdb;
			$rw_slider_image_manager_arr = $rw_slider_image_photos_arr = $rw_slider_image_video_arr = $rw_slider_image_effects_arr = $rw_theme_options_arr = $rw_loader_options_arr = [];
			require_once( 'rw-slider-image-check.php' );
			$rw_check_video_table=$wpdb->get_row($wpdb->prepare("SELECT  table_name FROM information_schema.TABLES WHERE TABLE_SCHEMA = %s AND TABLE_NAME = %s",$wpdb->dbname,RW_SLIDER_VIDEO_INSTALL_TABLE),"ARRAY_A");
			if ($rw_check_video_table !== "0") {
				$rw_slider_image_video_arr=$wpdb->get_results($wpdb->prepare("SELECT * FROM ".RW_SLIDER_VIDEO_INSTALL_TABLE." WHERE Sl_Number = %d", $rw_slider_image_id));
			}
			$rw_slider_image_manager_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_MANAGER_TABLE." WHERE id = %d LIMIT 1", $rw_slider_image_id),"ARRAY_A");
			$rw_slider_image_photos_arr=$wpdb->get_results($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_INSTALL_TABLE." WHERE Sl_Number = %d", $rw_slider_image_id));
			$rw_slider_image_effects_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_EFFECTS_TABLE." WHERE id = %d LIMIT 1", $rw_slider_image_manager_arr["Slider_Type"]),"ARRAY_A");
			if($rw_slider_image_effects_arr["slider_type"]=='Slider Navigation'){
				$rw_theme_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_NAVIGATION." WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
				$rw_loader_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_NAVIGATION."_loader WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
			}else if($rw_slider_image_effects_arr["slider_type"]=='Content Slider'){
				$rw_theme_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_CONTENT." WHERE richideo_EN_ID = %d", $rw_slider_image_effects_arr["id"]));
				$rw_loader_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_CONTENT."_loader WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
			}else if($rw_slider_image_effects_arr["slider_type"]=='Fashion Slider'){
				$rw_theme_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_FASHION." WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
				$rw_loader_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_FASHION."_loader WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
			}else if($rw_slider_image_effects_arr["slider_type"]=='Circle Thumbnails'){
				$rw_theme_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_CIRCLE." WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
				$rw_loader_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_CIRCLE."_loader WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
			}else if($rw_slider_image_effects_arr["slider_type"]=='Slider Carousel'){
				$rw_theme_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_CAROUSEL." WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
				$rw_loader_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_CAROUSEL."_loader WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
			}else if($rw_slider_image_effects_arr["slider_type"]=='Flexible Slider'){
				$rw_theme_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_FLEXIBLE." WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
				$rw_loader_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_FLEXIBLE."_loader WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
			}else if($rw_slider_image_effects_arr["slider_type"]=='Dynamic Slider'){
				$rw_theme_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_DYNAMIC." WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
				$rw_loader_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_DYNAMIC."_loader WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
			}else if($rw_slider_image_effects_arr["slider_type"]=='Thumbnails Slider & Lightbox'){
				$rw_theme_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_LIGHTBOX." WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
				$rw_loader_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_LIGHTBOX."_loader WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
			}else if($rw_slider_image_effects_arr["slider_type"]=='Accordion Slider'){
				$rw_theme_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_ACCORDION." WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
				$rw_loader_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_ACCORDION."_loader WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
			}else if($rw_slider_image_effects_arr["slider_type"]=='Animation Slider'){
				$rw_theme_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_ANIMATION." WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
				$rw_loader_options_arr=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_ANIMATION."_loader WHERE rich_web_slider_ID = %d", $rw_slider_image_effects_arr["id"]));
			}
			$rich_CS_BIB = (esc_html($rw_theme_options_arr->rich_CS_BIB)=='true') ? 'true' : 'false' ;
			$rich_CS_P   =  (esc_html($rw_theme_options_arr->rich_CS_P)=='true')  ? 'true'  : 'false' ;
			$rich_CS_Video_TShow   =  (esc_html($rw_theme_options_arr->rich_CS_Video_TShow)=='true')  ? 'block'  : 'none' ;
			$rich_CS_Video_DShow   =  (esc_html($rw_theme_options_arr->rich_CS_Video_DShow)=='true')  ? 'block'  : 'none' ;
			$padLeft   =  (esc_html($rich_CS_Video_Show) == '0')  ? '0'  : '10' ;
			switch ($rw_theme_options_arr->rich_CS_Icon) {
				case 1:  $Rich_PS_Left_Icon='rich_web rich_web-angle-double-left'; $Rich_PS_Right_Icon='rich_web rich_web-angle-double-right';  break;
				case 2:  $Rich_PS_Left_Icon='rich_web rich_web-angle-left'; $Rich_PS_Right_Icon='rich_web rich_web-angle-right';  break;
				case 3:  $Rich_PS_Left_Icon='rich_web rich_web-arrow-circle-left'; $Rich_PS_Right_Icon='rich_web rich_web-arrow-circle-right';   break;
				case 4:  $Rich_PS_Left_Icon='rich_web rich_web-arrow-circle-o-left'; $Rich_PS_Right_Icon='rich_web rich_web-arrow-circle-o-right';  break;
				case 5:  $Rich_PS_Left_Icon='rich_web rich_web-arrow-left'; $Rich_PS_Right_Icon='rich_web rich_web-arrow-right';  break;
				case 6:	  $Rich_PS_Left_Icon='rich_web rich_web-caret-left'; $Rich_PS_Right_Icon='rich_web rich_web-caret-right';  break;						
				case 7:	  $Rich_PS_Left_Icon='rich_web rich_web-caret-square-o-left';	$Rich_PS_Right_Icon='rich_web rich_web-caret-square-o-right';  break;						
				case 8:	  $Rich_PS_Left_Icon='rich_web-chevron-circle-left'; $Rich_PS_Right_Icon='rich_web-chevron-circle-right';  break;						
				case 9:	  $Rich_PS_Left_Icon='rich_web rich_web-chevron-left'; $Rich_PS_Right_Icon='rich_web rich_web-chevron-right';  break;						
				case 10:  $Rich_PS_Left_Icon='rich_web rich_web-hand-o-left'; $Rich_PS_Right_Icon='rich_web rich_web-hand-o-right';  break;						
				case 11:  $Rich_PS_Left_Icon='rich_web rich_web-long-arrow-left'; $Rich_PS_Right_Icon='rich_web rich_web-long-arrow-right';  break;												
			}
			$rich_CS_Video_ArrShow   =  (esc_html($rw_theme_options_arr->rich_CS_Video_ArrShow)=='true')  ? 'inline-block'  : 'none' ;
			$rich_fsl_SShow	=(esc_html($rw_theme_options_arr->rich_fsl_SShow)=='false')  ?  false   : true ;
			$rich_fsl_Ic_Show	=(esc_html($rw_theme_options_arr->rich_fsl_Ic_Show)=='false')  ? false  : true ;
			$rich_fsl_PPL_Show	=(esc_html($rw_theme_options_arr->rich_fsl_PPL_Show)=='false')  ?  false  : true ;
			$rich_fsl_Randomize	=(esc_html($rw_theme_options_arr->rich_fsl_Randomize)=='false')  ?  false  : true ;
			$rich_fsl_Loop	=(esc_html($rw_theme_options_arr->rich_fsl_Loop)=='false')  ? false  : true ;
			$rich_fsl_Desc_Show	=(esc_html($rw_theme_options_arr->rich_fsl_Desc_Show)=='')  ?  'false' : 'true' ;
			$rw_slider_image_theme_key = "";
			if (function_exists("rw_slider_image_get_theme_key")) {
				$rw_slider_image_theme_key = rw_slider_image_get_theme_key(esc_html($rw_slider_image_effects_arr["slider_type"]));
			}else{
				$rw_theme_key_arr = explode(" ", strtolower(esc_html($rw_slider_image_effects_arr["slider_type"])));
				$rw_slider_image_theme_key = $rw_theme_key_arr[0] . "_" . $rw_theme_key_arr[1];
			}
			require( 'style/rw_theme_'.$rw_slider_image_theme_key.'.css.php' ); 
			require( 'php/rw_theme_'.$rw_slider_image_theme_key.'.php' );
			require( 'scripts/rw_theme_'.$rw_slider_image_theme_key.'.js.php' );
		}
	}
?>
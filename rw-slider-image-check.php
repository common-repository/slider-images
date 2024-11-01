<?php
	global $wpdb;
	$rw_slider_image_manager_table   = $wpdb->prefix . "rich_web_photo_slider_manager";
	$rw_slider_image_install_table  = $wpdb->prefix . "rich_web_photo_slider_instal";
	$rw_slider_image_effects_table  = $wpdb->prefix . "rich_web_slider_effects_data";
	$rw_slider_image_effect2_table  = $wpdb->prefix . "rich_web_slider_effect2";
	$rw_slider_image_effect3_table  = $wpdb->prefix . "rich_web_slider_effect3";
	$rw_slider_image_effect7_table = $wpdb->prefix . "rich_web_slider_effect7";
	$rw_get_slider_items=$wpdb->get_results($wpdb->prepare("SELECT `Sl_Img_Description`,`Sl_Number`,`id` FROM $rw_slider_image_install_table WHERE id>%d", 0),"ARRAY_A");
	foreach ($rw_get_slider_items as $rw_key => $rw_value) {
		if(strlen($rw_value["Sl_Img_Description"]) > 0 && strpos($rw_value["Sl_Img_Description"], "&lt;/p&gt;") <= 0) {
			$rw_get_slider_type = $wpdb->get_row($wpdb->prepare("SELECT `Slider_Type` FROM $rw_slider_image_manager_table WHERE id = %d", $rw_value["Sl_Number"]),"ARRAY_A");
			$rw_get_slider_info = $wpdb->get_row($wpdb->prepare("SELECT `id`,`slider_type` FROM $rw_slider_image_effects_table WHERE slider_name = %s", $rw_get_slider_type["Slider_Type"]),"ARRAY_A");
			if($rw_get_slider_info["slider_type"] == 'Content Slider') {
				$rw_theme_settings=$wpdb->get_row($wpdb->prepare("SELECT * FROM $rw_slider_image_effect2_table WHERE richideo_EN_ID=%s", $rw_get_slider_info["id"]),"ARRAY_A");
				$rw_set_new_description = str_replace("\&","&", esc_html('<p><span style="color: ' . $rw_theme_settings["rich_CS_Video_DC"] . '; font-size: ' . $rw_theme_settings["rich_CS_Video_DFS"] . 'px; font-family: ' . $rw_theme_settings["rich_CS_Video_DFF"] . '; text-align: ' . $rw_theme_settings["rich_CS_Video_DTA"] . ';">' . $rw_value["Sl_Img_Description"] . '</span></p>'));
			} else if($rw_get_slider_info["slider_type"] == 'Fashion Slider') {
				$rw_theme_settings=$wpdb->get_row($wpdb->prepare("SELECT * FROM $rw_slider_image_effect3_table WHERE rich_web_slider_ID=%s", $rw_get_slider_info["id"]),"ARRAY_A");
				$rw_set_new_description = str_replace("\&","&", esc_html('<p><span style="color: ' . $rw_theme_settings["rich_fsl_Desc_Color"] . '; font-size: ' . $rw_theme_settings["rich_fsl_Desc_Size"] . 'px; font-family: ' . $rw_theme_settings["rich_fsl_Desc_Font_Family"] . '; text-align: ' . $rw_theme_settings["rich_fsl_Desc_Text_Align"] . ';">' . $rw_value["Sl_Img_Description"] . '</span></p>'));
			} else if($rw_get_slider_info["slider_type"] == 'Dynamic Slider') {
				$rw_theme_settings=$wpdb->get_row($wpdb->prepare("SELECT * FROM $rw_slider_image_effect7_table WHERE rich_web_slider_ID=%s", $rw_get_slider_info["id"]),"ARRAY_A");
				$rw_set_new_description = str_replace("\&","&", esc_html('<p><span style="color: ' . $rw_theme_settings["Rich_Web_Sl_DS_DC"] . '; font-size: ' . $rw_theme_settings["Rich_Web_Sl_DS_DFS"] . 'px; font-family: ' . $rw_theme_settings["Rich_Web_Sl_DS_DFF"] . ';">' . $rw_value["Sl_Img_Description"] . '</span></p>'));
			} else {
				$rw_set_new_description = str_replace("\&","&", esc_html('<p>' . $rw_value["Sl_Img_Description"] . '</p>'));
			}
			$wpdb->query($wpdb->prepare("UPDATE $rw_slider_image_install_table set Sl_Img_Description=%s WHERE id=%d", $rw_set_new_description, $rw_value["id"]));
		}
	}
?>
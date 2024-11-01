<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	function rw_slider_image_get_theme_key($rw_theme_name){
		$rw_theme_key_arr = explode(" ", strtolower($rw_theme_name));
		return $rw_theme_key_arr[0] . "_" . $rw_theme_key_arr[1];
	}
	$rw_slider_image_themes = [
		"slider_navigation" => [
			"name" => "Slider Navigation",
			"table" => "rich_web_slider_effect1",
			"version" => "free"
		],
		"fashion_slider" => [
			"name" => "Fashion Slider",
			"table" => "rich_web_slider_effect3",
			"version" => "free"
		],
		"slider_carousel" => [
			"name" => "Slider Carousel",
			"table" => "rich_web_slider_effect5",
			"version" => "free"
		],
		"flexible_slider" => [
			"name" => "Flexible Slider",
			"table" => "rich_web_slider_effect6",
			"version" => "free"
		],
		"dynamic_slider" => [
			"name" => "Dynamic Slider",
			"table" => "rich_web_slider_effect7",
			"version" => "free"
		],
		"accordion_slider" => [
			"name" => "Accordion Slider",
			"table" => "rich_web_slider_effect9",
			"version" => "free"
		],
		"content_slider" => [
			"name" => "Content Slider",
			"table" => "rich_web_slider_effect2",
			"version" => "pro"
		],
		"circle_thumbnails" => [
			"name" => "Circle Thumbnails",
			"table" => "rich_web_slider_effect4",
			"version" => "pro"
		],
		"thumbnails_slider" => [
			"name" => "Thumbnails Slider & Lightbox",
			"table" => "rich_web_slider_effect8",
			"version" => "pro"
		],
		"animation_slider" => [
			"name" => "Animation Slider",
			"table" => "rich_web_slider_effect10",
			"version" => "pro"
		]
	];
	if ((get_option("rw_slider_image_check_db") === false && get_option("rw_slider_image_check_version") === false) || get_option("rw_slider_image_check_version") !== RW_SLIDER_IMAGE_VERSION ) {
		$rw_slider_image_manager_table_sql	= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_MANAGER_TABLE.' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Slider_Title VARCHAR(155) NOT NULL, Slider_Type VARCHAR(155) NOT NULL, Slider_IMGS_Quantity INTEGER(10) NOT NULL, PRIMARY KEY (id) )';
		$rw_slider_image_install_table_sql	= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_INSTALL_TABLE.' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, SL_Img_Title VARCHAR(155) NOT NULL, Sl_Img_Description LONGTEXT NOT NULL, Sl_Img_Url VARCHAR(155) NOT NULL, Sl_Link_Url VARCHAR(155) NOT NULL, Sl_Link_NewTab VARCHAR(155) NOT NULL, Sl_Number INTEGER(10) NOT NULL, PRIMARY KEY (id) )';
		$rw_slider_image_effects_table_sql	= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_EFFECTS_TABLE . '( id INTEGER(10) UNSIGNED AUTO_INCREMENT, slider_name VARCHAR(155) NOT NULL,  slider_type VARCHAR(155) NOT NULL, PRIMARY KEY (id) )';
		$rw_slider_image_fonts_table_sql	= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_FONTS_TABLE.' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Font_family VARCHAR(155) NOT NULL, PRIMARY KEY (id) )';
		$rw_slider_image_ids_table_sql		= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_IDS_TABLE . '( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Slider_ID INTEGER(10) NOT NULL, PRIMARY KEY (id) )';
		$rw_slider_image_navigation_sql		= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_NAVIGATION . '( id INTEGER(10) UNSIGNED AUTO_INCREMENT, rich_web_slider_ID VARCHAR(155) NOT NULL, rich_web_slider_name VARCHAR(155) NOT NULL, rich_web_slider_type VARCHAR(155) NOT NULL, rich_web_Sl1_SlS VARCHAR(155) NOT NULL, rich_web_Sl1_SlSS VARCHAR(155) NOT NULL, rich_web_Sl1_PoH VARCHAR(155) NOT NULL, rich_web_Sl1_W VARCHAR(155) NOT NULL, rich_web_Sl1_H VARCHAR(155) NOT NULL, rich_web_Sl1_BoxS VARCHAR(155) NOT NULL, rich_web_Sl1_BoxSC VARCHAR(155) NOT NULL, rich_web_Sl1_IBW VARCHAR(155) NOT NULL, rich_web_Sl1_IBS VARCHAR(155) NOT NULL, rich_web_Sl1_IBC VARCHAR(155) NOT NULL, rich_web_Sl1_IBR VARCHAR(155) NOT NULL, rich_web_Sl1_TBgC VARCHAR(155) NOT NULL, rich_web_Sl1_TC VARCHAR(155) NOT NULL, rich_web_Sl1_TTA VARCHAR(155) NOT NULL, rich_web_Sl1_TFS VARCHAR(155) NOT NULL, rich_web_Sl1_TFF VARCHAR(155) NOT NULL, rich_web_Sl1_TUp VARCHAR(155) NOT NULL, rich_web_Sl1_ArBgC VARCHAR(155) NOT NULL, rich_web_Sl1_ArOp VARCHAR(155) NOT NULL, rich_web_Sl1_ArType VARCHAR(155) NOT NULL, rich_web_Sl1_ArHBgC VARCHAR(155) NOT NULL, rich_web_Sl1_ArHOp VARCHAR(155) NOT NULL, rich_web_Sl1_ArHEff VARCHAR(155) NOT NULL, rich_web_Sl1_ArBoxW VARCHAR(155) NOT NULL, rich_web_Sl1_NavW VARCHAR(155) NOT NULL, rich_web_Sl1_NavH VARCHAR(155) NOT NULL, rich_web_Sl1_NavPB VARCHAR(155) NOT NULL, rich_web_Sl1_NavBW VARCHAR(155) NOT NULL, rich_web_Sl1_NavBS VARCHAR(155) NOT NULL, rich_web_Sl1_NavBC VARCHAR(155) NOT NULL, rich_web_Sl1_NavBR VARCHAR(155) NOT NULL, rich_web_Sl1_NavCC VARCHAR(155) NOT NULL, rich_web_Sl1_NavHC VARCHAR(155) NOT NULL, rich_web_Sl1_ArPFT VARCHAR(155) NOT NULL, rich_web_Sl1_NavPos VARCHAR(155) NOT NULL, PRIMARY KEY (id) )';
		$rw_slider_image_fashion_sql		= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_FASHION . '( id INTEGER(10) UNSIGNED AUTO_INCREMENT, rich_web_slider_ID VARCHAR(155) NOT NULL, rich_web_slider_name VARCHAR(155) NOT NULL, rich_web_slider_type VARCHAR(155) NOT NULL, rich_fsl_animation VARCHAR(155) NOT NULL, rich_fsl_SShow VARCHAR(155) NOT NULL, rich_fsl_SShow_Speed VARCHAR(155) NOT NULL, rich_fsl_Anim_Dur VARCHAR(155) NOT NULL, rich_fsl_Ic_Show VARCHAR(155) NOT NULL, rich_fsl_PPL_Show VARCHAR(155) NOT NULL, rich_fsl_Randomize VARCHAR(155) NOT NULL, rich_fsl_Loop VARCHAR(155) NOT NULL, rich_fsl_Width VARCHAR(155) NOT NULL, rich_fsl_Height VARCHAR(155) NOT NULL, rich_fsl_Border_Width VARCHAR(155) NOT NULL, rich_fsl_Border_Style VARCHAR(155) NOT NULL, rich_fsl_Border_Color VARCHAR(155) NOT NULL, rich_fsl_Box_Shadow VARCHAR(155) NOT NULL, rich_fsl_Shadow_Color VARCHAR(155) NOT NULL, rich_fsl_Desc_Show VARCHAR(155) NOT NULL, rich_fsl_Desc_Size VARCHAR(155) NOT NULL, rich_fsl_Desc_Color VARCHAR(155) NOT NULL, rich_fsl_Desc_Font_Family VARCHAR(155) NOT NULL, rich_fsl_Desc_Text_Align VARCHAR(155) NOT NULL, rich_fsl_Desc_Bg_Color VARCHAR(155) NOT NULL, rich_fsl_Desc_Transparency VARCHAR(155) NOT NULL, rich_fsl_Title_Font_Size VARCHAR(155) NOT NULL, rich_fsl_Title_Color VARCHAR(155) NOT NULL, rich_fsl_Title_Text_Shadow VARCHAR(155) NOT NULL, rich_fsl_Title_Font_Family VARCHAR(155) NOT NULL, rich_fsl_Title_Text_Align VARCHAR(155) NOT NULL, rich_fsl_Link_Text VARCHAR(155) NOT NULL, rich_fsl_Link_Border_Width VARCHAR(155) NOT NULL, rich_fsl_Link_Border_Style VARCHAR(155) NOT NULL, rich_fsl_Link_Border_Color VARCHAR(155) NOT NULL, rich_fsl_Link_Font_Size VARCHAR(155) NOT NULL, rich_fsl_Link_Color VARCHAR(155) NOT NULL, rich_fsl_Link_Font_Family VARCHAR(155) NOT NULL, rich_fsl_Link_Bg_Color VARCHAR(155) NOT NULL, rich_fsl_Link_Transparency VARCHAR(155) NOT NULL, rich_fsl_Link_Hover_Border_Color VARCHAR(155) NOT NULL, rich_fsl_Link_Hover_Bg_Color VARCHAR(155) NOT NULL, rich_fsl_Link_Hover_Color VARCHAR(155) NOT NULL, rich_fsl_Link_Hover_Transparency VARCHAR(155) NOT NULL, rich_fsl_Icon_Size VARCHAR(155) NOT NULL, rich_fsl_Icon_Type VARCHAR(155) NOT NULL, rich_fsl_Hover_Icon_Type VARCHAR(155) NOT NULL, PRIMARY KEY (id) )';
		$rw_slider_image_carousel_sql 		= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_CAROUSEL . '( id INTEGER(10) UNSIGNED AUTO_INCREMENT, rich_web_slider_ID VARCHAR(155) NOT NULL, rich_web_slider_name VARCHAR(155) NOT NULL, rich_web_slider_type VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_BW VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_BS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_BC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_BoxShShow VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_BoxShType VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_BoxSh VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_BoxShC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_IW VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_IH VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_IBW VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_IBS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_IBC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_IBR VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_ICBW VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_ICBS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_ICBC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_TBgC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_TC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_TFS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_TFF VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_THBgC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_THC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Pop_OC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Pop_BW VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Pop_BC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Pop_BoxShShow VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Pop_BoxShType VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Pop_BoxSh VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Pop_BoxShC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_BgC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_C VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_FS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_BW VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_BS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_BC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_BR VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_HBgC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_HC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_Type VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_Text VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_IType VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_L_FF VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_BgC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_C VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_FS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_BW VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_BS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_BC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_BR VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_HBgC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_HC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_Type VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_Text VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_IType VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PI_FF VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_BgC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_C VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_FS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_BW VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_BS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_BC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_BR VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_HBgC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_HC VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_Type VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_FF VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_IType VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_Next VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_Arr_Prev VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PCI_FS VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PCI_C VARCHAR(155) NOT NULL, Rich_Web_Sl_SC_PCI_Type VARCHAR(155) NOT NULL, PRIMARY KEY (id) )';
		$rw_slider_image_flexible_sql		= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_FLEXIBLE . '( id INTEGER(10) UNSIGNED AUTO_INCREMENT, rich_web_slider_ID VARCHAR(155) NOT NULL, rich_web_slider_name VARCHAR(155) NOT NULL, rich_web_slider_type VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_BgC VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_AP VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_TS VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_PT VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_SS VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_SVis VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_CS VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_SLoop VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_SSc VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_SlPos VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_ShNavBut VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_I_W VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_I_H VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_I_BW VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_I_BS VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_I_BC VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_I_BR VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_I_BoxShShow VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_I_BoxShType VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_I_BoxSh VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_I_BoxShC VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_T_C VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_T_FF VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_Show VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_W VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_H VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_BW VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_BS VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_BC VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_BR VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_PB VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_CC VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_HC VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Nav_C VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Arr_Show VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Arr_Type VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Arr_S VARCHAR(155) NOT NULL, Rich_Web_Sl_FS_Arr_C VARCHAR(155) NOT NULL, PRIMARY KEY (id) )';
		$rw_slider_image_dynamic_sql		= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_DYNAMIC . '( id INTEGER(10) UNSIGNED AUTO_INCREMENT, rich_web_slider_ID VARCHAR(155) NOT NULL, rich_web_slider_name VARCHAR(155) NOT NULL, rich_web_slider_type VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_AP VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_PT VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Tr VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_H VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_BW VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_BS VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_BC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_TFS VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_TFF VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_TC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_DFS VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_DFF VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_DC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LFS VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LFF VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LBgC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LBW VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LBS VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LBC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LBR VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LHC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LHBgC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_LT VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_Show VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_LT VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_RT VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_C VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_BgC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_BW VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_BS VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_BC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_BR VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_HC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Arr_HBgC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Nav_W VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Nav_H VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Nav_PB VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Nav_BW VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Nav_BS VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Nav_BC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Nav_BR VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Nav_C VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Nav_HC VARCHAR(155) NOT NULL, Rich_Web_Sl_DS_Nav_CC VARCHAR(155) NOT NULL, PRIMARY KEY (id) )';
		$rw_slider_image_accordion_sql		= 'CREATE TABLE IF NOT EXISTS ' .RW_SLIDER_IMAGE_ACCORDION . '( id INTEGER(10) UNSIGNED AUTO_INCREMENT, rich_web_slider_ID VARCHAR(155) NOT NULL, rich_web_slider_name VARCHAR(155) NOT NULL, rich_web_slider_type VARCHAR(155) NOT NULL, Rich_Web_AcSL_W VARCHAR(155) NOT NULL, Rich_Web_AcSL_H VARCHAR(155) NOT NULL, Rich_Web_AcSL_BW VARCHAR(155) NOT NULL, Rich_Web_AcSL_BS VARCHAR(155) NOT NULL, Rich_Web_AcSL_BC VARCHAR(155) NOT NULL, Rich_Web_AcSL_BSh VARCHAR(155) NOT NULL, Rich_Web_AcSL_BShC VARCHAR(155) NOT NULL, Rich_Web_AcSL_Img_W VARCHAR(155) NOT NULL, Rich_Web_AcSL_Img_BSh VARCHAR(155) NOT NULL, Rich_Web_AcSL_Img_BShC VARCHAR(155) NOT NULL, Rich_Web_AcSL_Title_FS VARCHAR(155) NOT NULL, Rich_Web_AcSL_Title_FF VARCHAR(155) NOT NULL, Rich_Web_AcSL_Title_C VARCHAR(155) NOT NULL, Rich_Web_AcSL_Title_TSh VARCHAR(155) NOT NULL, Rich_Web_AcSL_Title_TShC VARCHAR(155) NOT NULL, Rich_Web_AcSL_Title_BgC VARCHAR(155) NOT NULL, Rich_Web_AcSL_Link_FS VARCHAR(155) NOT NULL, Rich_Web_AcSL_Link_FF VARCHAR(155) NOT NULL, Rich_Web_AcSL_Link_C VARCHAR(155) NOT NULL, Rich_Web_AcSL_Link_TSh VARCHAR(155) NOT NULL, Rich_Web_AcSL_Link_TShC VARCHAR(155) NOT NULL, Rich_Web_AcSL_Link_BgC VARCHAR(155) NOT NULL, Rich_Web_AcSL_Link_Text VARCHAR(155) NOT NULL, PRIMARY KEY (id) )';
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($rw_slider_image_manager_table_sql);
		dbDelta($rw_slider_image_install_table_sql);
		dbDelta($rw_slider_image_effects_table_sql);
		dbDelta($rw_slider_image_fonts_table_sql);
		dbDelta($rw_slider_image_ids_table_sql);
		dbDelta($rw_slider_image_navigation_sql);
		dbDelta($rw_slider_image_fashion_sql);
		dbDelta($rw_slider_image_carousel_sql);
		dbDelta($rw_slider_image_flexible_sql);
		dbDelta($rw_slider_image_dynamic_sql);
		dbDelta($rw_slider_image_accordion_sql);
		$rw_slider_image_manager_table_sql_a   = 'ALTER TABLE ' . RW_SLIDER_IMAGE_MANAGER_TABLE . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$rw_slider_image_install_table_sql_a  = 'ALTER TABLE ' . RW_SLIDER_IMAGE_INSTALL_TABLE . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$rw_slider_image_effects_table_sql_a  = 'ALTER TABLE ' . RW_SLIDER_IMAGE_EFFECTS_TABLE . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$rw_slider_image_fonts_table_sql_a  = 'ALTER TABLE ' . RW_SLIDER_IMAGE_FONTS_TABLE . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$rw_slider_image_ids_table_sql_a  = 'ALTER TABLE ' . RW_SLIDER_IMAGE_IDS_TABLE . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$rw_slider_image_navigation_sql_a  = 'ALTER TABLE ' . RW_SLIDER_IMAGE_NAVIGATION . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$rw_slider_image_fashion_sql_a  = 'ALTER TABLE ' . RW_SLIDER_IMAGE_FASHION . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$rw_slider_image_carousel_sql_a  = 'ALTER TABLE ' . RW_SLIDER_IMAGE_CAROUSEL . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$rw_slider_image_flexible_sql_a = 'ALTER TABLE ' . RW_SLIDER_IMAGE_FLEXIBLE . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$rw_slider_image_dynamic_sql_a = 'ALTER TABLE ' . RW_SLIDER_IMAGE_DYNAMIC . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$rw_slider_image_accordion_sql_a = 'ALTER TABLE ' . RW_SLIDER_IMAGE_ACCORDION . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
		$wpdb->query($rw_slider_image_manager_table_sql_a);
		$wpdb->query($rw_slider_image_install_table_sql_a);
		$wpdb->query($rw_slider_image_effects_table_sql_a);
		$wpdb->query($rw_slider_image_fonts_table_sql_a);
		$wpdb->query($rw_slider_image_ids_table_sql_a);
		$wpdb->query($rw_slider_image_navigation_sql_a);
		$wpdb->query($rw_slider_image_fashion_sql_a);
		$wpdb->query($rw_slider_image_carousel_sql_a);
		$wpdb->query($rw_slider_image_flexible_sql_a);
		$wpdb->query($rw_slider_image_dynamic_sql_a);
		$wpdb->query($rw_slider_image_accordion_sql_a);
		$rw_slider_image_fonts_arr = array('Abadi MT Condensed Light','Aharoni','Aldhabi','Andalus','Angsana New','AngsanaUPC','Aparajita','Arabic Typesetting','Arial','Arial Black', 'Batang','BatangChe','Browallia New','BrowalliaUPC','Calibri','Calibri Light','Calisto MT','Cambria','Candara','Century Gothic','Comic Sans MS','Consolas', 'Constantia','Copperplate Gothic','Copperplate Gothic Light','Corbel','Cordia New','CordiaUPC','Courier New','DaunPenh','David','DFKai-SB','DilleniaUPC', 'DokChampa','Dotum','DotumChe','Ebrima','Estrangelo Edessa','EucrosiaUPC','Euphemia','FangSong','Franklin Gothic Medium','FrankRuehl','FreesiaUPC','Gabriola', 'Gadugi','Gautami','Georgia','Gisha','Gulim','GulimChe','Gungsuh','GungsuhChe','Impact','IrisUPC','Iskoola Pota','JasmineUPC','KaiTi','Kalinga','Kartika', 'Khmer UI','KodchiangUPC','Kokila','Lao UI','Latha','Leelawadee','Levenim MT','LilyUPC','Lucida Console','Lucida Handwriting Italic','Lucida Sans Unicode', 'Malgun Gothic','Mangal','Manny ITC','Marlett','Meiryo','Meiryo UI','Microsoft Himalaya','Microsoft JhengHei','Microsoft JhengHei UI','Microsoft New Tai Lue', 'Microsoft PhagsPa','Microsoft Sans Serif','Microsoft Tai Le','Microsoft Uighur','Microsoft YaHei','Microsoft YaHei UI','Microsoft Yi Baiti','MingLiU_HKSCS', 'MingLiU_HKSCS-ExtB','Miriam','Mongolian Baiti','MoolBoran','MS UI Gothic','MV Boli','Myanmar Text','Narkisim','Nirmala UI','News Gothic MT','NSimSun','Nyala', 'Palatino Linotype','Plantagenet Cherokee','Raavi','Rod','Sakkal Majalla','Segoe Print','Segoe Script','Segoe UI Symbol','Shonar Bangla','Shruti','SimHei','SimKai', 'Simplified Arabic','SimSun','SimSun-ExtB','Sylfaen','Tahoma','Times New Roman','Traditional Arabic','Trebuchet MS','Tunga','Utsaah','Vani','Vijaya');
		$rw_slider_image_ff_check = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM ".RW_SLIDER_IMAGE_FONTS_TABLE." WHERE id > %d", 0 ) );
		if ($rw_slider_image_ff_check === "0") {
			foreach ($rw_slider_image_fonts_arr as $rw_font_item) {
				$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_FONTS_TABLE." (id, Font_family) VALUES (%d, %s)", '', $rw_font_item));
			}
		}
		//Navigation
		$rw_navigation_check = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM ".RW_SLIDER_IMAGE_NAVIGATION." WHERE id > %d", 0 ) );
		if ($rw_navigation_check === "0") {
			$wpdb->query($wpdb->prepare("INSERT INTO ". RW_SLIDER_IMAGE_EFFECTS_TABLE . "(id, slider_name, slider_type) VALUES (%d, %s, %s)", '', 'Slider Navigation', 'Slider Navigation'));
			$rw_insert_id = $wpdb->insert_id;
			$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_NAVIGATION." (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, rich_web_Sl1_SlS, rich_web_Sl1_SlSS, rich_web_Sl1_PoH, rich_web_Sl1_W, rich_web_Sl1_H, rich_web_Sl1_BoxS, rich_web_Sl1_BoxSC, rich_web_Sl1_IBW, rich_web_Sl1_IBS, rich_web_Sl1_IBC, rich_web_Sl1_IBR, rich_web_Sl1_TBgC, rich_web_Sl1_TC, rich_web_Sl1_TTA, rich_web_Sl1_TFS, rich_web_Sl1_TFF, rich_web_Sl1_TUp, rich_web_Sl1_ArBgC, rich_web_Sl1_ArOp, rich_web_Sl1_ArType, rich_web_Sl1_ArHBgC, rich_web_Sl1_ArHOp, rich_web_Sl1_ArHEff, rich_web_Sl1_ArBoxW, rich_web_Sl1_NavW, rich_web_Sl1_NavH, rich_web_Sl1_NavPB, rich_web_Sl1_NavBW, rich_web_Sl1_NavBS, rich_web_Sl1_NavBC, rich_web_Sl1_NavBR, rich_web_Sl1_NavCC, rich_web_Sl1_NavHC, rich_web_Sl1_ArPFT, rich_web_Sl1_NavPos) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $rw_insert_id, 'Slider Navigation', 'Slider Navigation', 'true', '3', 'true', '750', '400', 'true', '#0084aa', '10', '#6ecae9', '#ffffff', '0', '#0084aa', '#ffffff', 'center', '10', 'Aldhabi', 'true', '#1e73be', '82', '1', '#1e73be', '80', 'slide out', '50', '8', '8', '8', '1', 'solid', '#ffffff', '20', '#0084aa', '#ffffff', '35', 'bottom'));
		}
		//Fashion
		$rw_fashion_check = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM ".RW_SLIDER_IMAGE_FASHION." WHERE id > %d", 0 ) );
		if ($rw_fashion_check === "0") {
			$wpdb->query($wpdb->prepare("INSERT INTO ". RW_SLIDER_IMAGE_EFFECTS_TABLE . "(id, slider_name, slider_type) VALUES (%d, %s, %s)", '', 'Fashion Slider', 'Fashion Slider'));
			$rw_insert_id = $wpdb->insert_id;
			$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_FASHION." (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, rich_fsl_animation, rich_fsl_SShow, rich_fsl_SShow_Speed, rich_fsl_Anim_Dur, rich_fsl_Ic_Show, rich_fsl_PPL_Show, rich_fsl_Randomize, rich_fsl_Loop, rich_fsl_Width, rich_fsl_Height, rich_fsl_Border_Width, rich_fsl_Border_Style, rich_fsl_Border_Color, rich_fsl_Box_Shadow, rich_fsl_Shadow_Color, rich_fsl_Desc_Show, rich_fsl_Desc_Size, rich_fsl_Desc_Color, rich_fsl_Desc_Font_Family, rich_fsl_Desc_Text_Align, rich_fsl_Desc_Bg_Color, rich_fsl_Desc_Transparency, rich_fsl_Title_Font_Size, rich_fsl_Title_Color, rich_fsl_Title_Text_Shadow, rich_fsl_Title_Font_Family, rich_fsl_Title_Text_Align, rich_fsl_Link_Text, rich_fsl_Link_Border_Width, rich_fsl_Link_Border_Style, rich_fsl_Link_Border_Color, rich_fsl_Link_Font_Size, rich_fsl_Link_Color, rich_fsl_Link_Font_Family, rich_fsl_Link_Bg_Color, rich_fsl_Link_Transparency, rich_fsl_Link_Hover_Border_Color, rich_fsl_Link_Hover_Bg_Color, rich_fsl_Link_Hover_Color, rich_fsl_Link_Hover_Transparency, rich_fsl_Icon_Size, rich_fsl_Icon_Type, rich_fsl_Hover_Icon_Type) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $rw_insert_id, 'Fashion Slider', 'Fashion Slider', 'fade', '1', '3', '3', '1', 'false', 'false', '1', '750', '390', '0', '#6ecae9', '#ffffff', 'none', '#606060', 'on', '', '', '', '', 'rgba(0,132,170,0.75)', '', '18', '#ffffff', '0', 'Aldhabi', 'center', 'View More', '0', 'solid', '#0084aa', '19', '#0084aa', 'Vijaya', 'rgba(255,255,255,0.65)', '', '#0084aa', '#0084aa', 'rgba(255,255,255,0.65)', '', '30', '1', '12'));
		}
		//Carousel
		$rw_carousel_check = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM ".RW_SLIDER_IMAGE_CAROUSEL." WHERE id > %d", 0 ) );
		if ($rw_carousel_check === "0") {
			$wpdb->query($wpdb->prepare("INSERT INTO ". RW_SLIDER_IMAGE_EFFECTS_TABLE . "(id, slider_name, slider_type) VALUES (%d, %s, %s)", '', 'Slider Carousel', 'Slider Carousel'));
			$rw_insert_id = $wpdb->insert_id;
			$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_CAROUSEL." (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_Sl_SC_BW, Rich_Web_Sl_SC_BS, Rich_Web_Sl_SC_BC, Rich_Web_Sl_SC_BoxShShow, Rich_Web_Sl_SC_BoxShType, Rich_Web_Sl_SC_BoxSh, Rich_Web_Sl_SC_BoxShC, Rich_Web_Sl_SC_IW, Rich_Web_Sl_SC_IH, Rich_Web_Sl_SC_IBW, Rich_Web_Sl_SC_IBS, Rich_Web_Sl_SC_IBC, Rich_Web_Sl_SC_IBR, Rich_Web_Sl_SC_ICBW, Rich_Web_Sl_SC_ICBS, Rich_Web_Sl_SC_ICBC, Rich_Web_Sl_SC_TBgC, Rich_Web_Sl_SC_TC, Rich_Web_Sl_SC_TFS, Rich_Web_Sl_SC_TFF, Rich_Web_Sl_SC_THBgC, Rich_Web_Sl_SC_THC, Rich_Web_Sl_SC_Pop_OC, Rich_Web_Sl_SC_Pop_BW, Rich_Web_Sl_SC_Pop_BC, Rich_Web_Sl_SC_Pop_BoxShShow, Rich_Web_Sl_SC_Pop_BoxShType, Rich_Web_Sl_SC_Pop_BoxSh, Rich_Web_Sl_SC_Pop_BoxShC, Rich_Web_Sl_SC_L_BgC, Rich_Web_Sl_SC_L_C, Rich_Web_Sl_SC_L_FS, Rich_Web_Sl_SC_L_BW, Rich_Web_Sl_SC_L_BS, Rich_Web_Sl_SC_L_BC, Rich_Web_Sl_SC_L_BR, Rich_Web_Sl_SC_L_HBgC, Rich_Web_Sl_SC_L_HC, Rich_Web_Sl_SC_L_Type, Rich_Web_Sl_SC_L_Text, Rich_Web_Sl_SC_L_IType, Rich_Web_Sl_SC_L_FF, Rich_Web_Sl_SC_PI_BgC, Rich_Web_Sl_SC_PI_C, Rich_Web_Sl_SC_PI_FS, Rich_Web_Sl_SC_PI_BW, Rich_Web_Sl_SC_PI_BS, Rich_Web_Sl_SC_PI_BC, Rich_Web_Sl_SC_PI_BR, Rich_Web_Sl_SC_PI_HBgC, Rich_Web_Sl_SC_PI_HC, Rich_Web_Sl_SC_PI_Type, Rich_Web_Sl_SC_PI_Text, Rich_Web_Sl_SC_PI_IType, Rich_Web_Sl_SC_PI_FF, Rich_Web_Sl_SC_Arr_BgC, Rich_Web_Sl_SC_Arr_C, Rich_Web_Sl_SC_Arr_FS, Rich_Web_Sl_SC_Arr_BW, Rich_Web_Sl_SC_Arr_BS, Rich_Web_Sl_SC_Arr_BC, Rich_Web_Sl_SC_Arr_BR, Rich_Web_Sl_SC_Arr_HBgC, Rich_Web_Sl_SC_Arr_HC, Rich_Web_Sl_SC_Arr_Type, Rich_Web_Sl_SC_Arr_FF, Rich_Web_Sl_SC_Arr_IType, Rich_Web_Sl_SC_Arr_Next, Rich_Web_Sl_SC_Arr_Prev, Rich_Web_Sl_SC_PCI_FS, Rich_Web_Sl_SC_PCI_C, Rich_Web_Sl_SC_PCI_Type) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $rw_insert_id, 'Slider Carousel', 'Slider Carousel', '2', '#6ecae9', '#ffffff', 'true', 'true', '15', '#0084aa', '270', '150', '4', '', '#ffffff', '0', '0', '', '#b5b5b5', '#0084aa', '#ffffff', '23', 'Vijaya', '#ffffff', '#0084aa', 'rgba(0,132,170,0.85)', '10', '#ffffff', 'true', 'false', '50', '#ffffff', 'rgba(255,255,255,0.7)', '#0084aa', '18', '0', 'solid', '#ffffff', '3', 'rgba(0,132,170,0.7)', '#ffffff', 'text', 'More', 'link', 'Vijaya', 'rgba(0,132,170,0.7)', '#ffffff', '18', '0', '', '#0084aa', '3', 'rgba(255,255,255,0.7)', '#0084aa', 'text', 'Picture', 'picture-o', 'Gabriola', 'rgba(255,255,255,0.6)', '#0084aa', '20', '0', 'solid', '#6a90d8', '10', 'rgba(0,132,170,0.6)', '#ffffff', 'icon', 'Gabriola', 'angle', 'Next', 'Prev', '35', '#0084aa', 'home'));
		}
		//Flexible
		$rw_flexible_check = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM ".RW_SLIDER_IMAGE_FLEXIBLE." WHERE id > %d", 0 ) );
		if ($rw_flexible_check === "0") {
			$wpdb->query($wpdb->prepare("INSERT INTO ". RW_SLIDER_IMAGE_EFFECTS_TABLE . "(id, slider_name, slider_type) VALUES (%d, %s, %s)", '', 'Flexible Slider', 'Flexible Slider'));
			$rw_insert_id = $wpdb->insert_id;
			$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_FLEXIBLE." (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_Sl_FS_BgC, Rich_Web_Sl_FS_AP, Rich_Web_Sl_FS_TS, Rich_Web_Sl_FS_PT, Rich_Web_Sl_FS_SS, Rich_Web_Sl_FS_SVis, Rich_Web_Sl_FS_CS, Rich_Web_Sl_FS_SLoop, Rich_Web_Sl_FS_SSc, Rich_Web_Sl_FS_SlPos, Rich_Web_Sl_FS_ShNavBut, Rich_Web_Sl_FS_I_W, Rich_Web_Sl_FS_I_H, Rich_Web_Sl_FS_I_BW, Rich_Web_Sl_FS_I_BS, Rich_Web_Sl_FS_I_BC, Rich_Web_Sl_FS_I_BR, Rich_Web_Sl_FS_I_BoxShShow, Rich_Web_Sl_FS_I_BoxShType, Rich_Web_Sl_FS_I_BoxSh, Rich_Web_Sl_FS_I_BoxShC, Rich_Web_Sl_FS_T_C, Rich_Web_Sl_FS_T_FF, Rich_Web_Sl_FS_Nav_Show, Rich_Web_Sl_FS_Nav_W, Rich_Web_Sl_FS_Nav_H, Rich_Web_Sl_FS_Nav_BW, Rich_Web_Sl_FS_Nav_BS, Rich_Web_Sl_FS_Nav_BC, Rich_Web_Sl_FS_Nav_BR, Rich_Web_Sl_FS_Nav_PB, Rich_Web_Sl_FS_Nav_CC, Rich_Web_Sl_FS_Nav_HC, Rich_Web_Sl_FS_Nav_C, Rich_Web_Sl_FS_Arr_Show, Rich_Web_Sl_FS_Arr_Type, Rich_Web_Sl_FS_Arr_S, Rich_Web_Sl_FS_Arr_C) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '',$rw_insert_id, 'Flexible Slider', 'Flexible Slider', '#0084aa', 'true', '400', '4', '1', '', '6', 'true', '200', 'center', 'true', '225', '225', '5', '#6ecae9', '#ffffff', '134', 'true', 'false', '33', '#0084aa', '#0084aa', 'Aldhabi', 'true', '15', '10', '1', '', '#0084aa', '15', '3', '#0084aa', '#0066bf', '#ffffff', 'true', 'angle', '40', '#ffffff'));
		}
		//Dynamic
		$rw_dynamic_check = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM ".RW_SLIDER_IMAGE_DYNAMIC." WHERE id > %d", 0 ) );
		if($rw_dynamic_check === "0"){
			$wpdb->query($wpdb->prepare("INSERT INTO ". RW_SLIDER_IMAGE_EFFECTS_TABLE . "(id, slider_name, slider_type) VALUES (%d, %s, %s)", '', 'Dynamic Slider', 'Dynamic Slider'));
			$rw_insert_id = $wpdb->insert_id;
			$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_DYNAMIC." (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_Sl_DS_AP, Rich_Web_Sl_DS_PT, Rich_Web_Sl_DS_Tr, Rich_Web_Sl_DS_H, Rich_Web_Sl_DS_BW, Rich_Web_Sl_DS_BS, Rich_Web_Sl_DS_BC, Rich_Web_Sl_DS_TFS, Rich_Web_Sl_DS_TFF, Rich_Web_Sl_DS_TC, Rich_Web_Sl_DS_DFS, Rich_Web_Sl_DS_DFF, Rich_Web_Sl_DS_DC, Rich_Web_Sl_DS_LFS, Rich_Web_Sl_DS_LFF, Rich_Web_Sl_DS_LC, Rich_Web_Sl_DS_LBgC, Rich_Web_Sl_DS_LBW, Rich_Web_Sl_DS_LBS, Rich_Web_Sl_DS_LBC, Rich_Web_Sl_DS_LBR, Rich_Web_Sl_DS_LHC, Rich_Web_Sl_DS_LHBgC, Rich_Web_Sl_DS_LT, Rich_Web_Sl_DS_Arr_Show, Rich_Web_Sl_DS_Arr_LT, Rich_Web_Sl_DS_Arr_RT, Rich_Web_Sl_DS_Arr_C, Rich_Web_Sl_DS_Arr_BgC, Rich_Web_Sl_DS_Arr_BW, Rich_Web_Sl_DS_Arr_BS, Rich_Web_Sl_DS_Arr_BC, Rich_Web_Sl_DS_Arr_BR, Rich_Web_Sl_DS_Arr_HC, Rich_Web_Sl_DS_Arr_HBgC, Rich_Web_Sl_DS_Nav_W, Rich_Web_Sl_DS_Nav_H, Rich_Web_Sl_DS_Nav_PB, Rich_Web_Sl_DS_Nav_BW, Rich_Web_Sl_DS_Nav_BS, Rich_Web_Sl_DS_Nav_BC, Rich_Web_Sl_DS_Nav_BR, Rich_Web_Sl_DS_Nav_C, Rich_Web_Sl_DS_Nav_HC, Rich_Web_Sl_DS_Nav_CC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $rw_insert_id, 'Dynamic Slider', 'Dynamic Slider', 'true', '5', 'true', '250', '4', '#6ecae9', '#ffffff', '15', 'Aldhabi', '#ffffff', '', '', '', '16', 'Aldhabi', '#ffffff', '#dd3333', '0', 'dotted', '#4a1fc1', '0', '#dd3333', '#ffffff', 'View', 'true', 'Prev', 'Next', '#ffffff', '#0084aa', '0', 'solid', '#16a309', '46', '#ffffff', '#5598aa', '11', '12', '5', '1', '', '#ffffff', '50', '#0084aa', '#dd3333', '#ffffff'));
		}
		//Accordion
		$rw_accordion_check = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM ".RW_SLIDER_IMAGE_ACCORDION." WHERE id > %d", 0 ) );
		if($rw_accordion_check === "0"){
			$wpdb->query($wpdb->prepare("INSERT INTO ". RW_SLIDER_IMAGE_EFFECTS_TABLE . "(id, slider_name, slider_type) VALUES (%d, %s, %s)", '', 'Accordion', 'Accordion Slider'));
			$rw_insert_id = $wpdb->insert_id;
			$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_ACCORDION." (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_AcSL_W, Rich_Web_AcSL_H, Rich_Web_AcSL_BW, Rich_Web_AcSL_BS, Rich_Web_AcSL_BC, Rich_Web_AcSL_BSh, Rich_Web_AcSL_BShC, Rich_Web_AcSL_Img_W, Rich_Web_AcSL_Img_BSh, Rich_Web_AcSL_Img_BShC, Rich_Web_AcSL_Title_FS, Rich_Web_AcSL_Title_FF, Rich_Web_AcSL_Title_C, Rich_Web_AcSL_Title_TSh, Rich_Web_AcSL_Title_TShC, Rich_Web_AcSL_Title_BgC, Rich_Web_AcSL_Link_FS, Rich_Web_AcSL_Link_FF, Rich_Web_AcSL_Link_C, Rich_Web_AcSL_Link_TSh, Rich_Web_AcSL_Link_TShC, Rich_Web_AcSL_Link_BgC, Rich_Web_AcSL_Link_Text) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $rw_insert_id, 'Accordion', 'Accordion Slider', '720', '350', '7', '#6ecae9', '#eaeaea', '14', '#0084aa', '596', '2', '#eaeaea', '16', 'Aldhabi', '#ffffff', '3', '#ffffff', 'rgba(0,132,170,0.65)', '16', 'Vijaya', '#0084aa', '3', '#0084aa', 'rgba(255,255,255,0.6)', 'View . . .'));
		}
		//Check type int or string 
		$rw_get_all_sliders = $wpdb->get_results($wpdb->prepare("SELECT `id`,`Slider_Type` FROM ".RW_SLIDER_IMAGE_MANAGER_TABLE." WHERE id>%d",0),"ARRAY_A");
		if (is_numeric($rw_get_all_sliders[0]["Slider_Type"]) !== true) {
			foreach ($rw_get_all_sliders as $rw_key => $rw_value) {
				$rw_get_effect_id = $wpdb->get_row($wpdb->prepare("SELECT `id` FROM ".RW_SLIDER_IMAGE_EFFECTS_TABLE." WHERE slider_name=%s order by id asc limit 1", $rw_value["Slider_Type"]),"ARRAY_A");
				$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_MANAGER_TABLE." set Slider_Type=%s WHERE id=%s", $rw_get_effect_id["id"], $rw_value["id"]));
			}
		}
		//Check files
		$rw_get_all_themes = $wpdb->get_results($wpdb->prepare("SELECT `slider_type` FROM " . RW_SLIDER_IMAGE_EFFECTS_TABLE),"ARRAY_A");
		$rw_unique_themes = array_unique(array_column($rw_get_all_themes, 'slider_type'));
		$rw_exists_themes = [];
		foreach ($rw_unique_themes as $rw_theme) {
			$rw_exists_themes[] = rw_slider_image_get_theme_key($rw_theme);
		}
		$rw_all_theme_keys = array_keys($rw_slider_image_themes);
		$rw_get_not_exists_themes = array_diff($rw_all_theme_keys,$rw_exists_themes);
		foreach ($rw_get_not_exists_themes as $rw_theme) {
			if (array_key_exists($rw_theme,$rw_slider_image_themes) && $rw_slider_image_themes[$rw_theme]["version"] === "pro") {
				// if (file_exists(plugin_dir_path( __FILE__ ) . 'php/rw_theme_'.$rw_theme.'.php')) {
				// 	unlink(plugin_dir_path( __FILE__ ) . 'php/rw_theme_'.$rw_theme.'.php');
				// }
				// if (file_exists(plugin_dir_path( __FILE__ ) . 'php/rw_theme_'.$rw_theme.'.js.php')) {
				// 	unlink(plugin_dir_path( __FILE__ ) . 'php/rw_theme_'.$rw_theme.'.js.php');
				// }
				// if (file_exists(plugin_dir_path( __FILE__ ) . 'php/rw_theme_'.$rw_theme.'.css.php')) {
				// 	unlink(plugin_dir_path( __FILE__ ) . 'php/rw_theme_'.$rw_theme.'.css.php');
				// }
			}
		}
		add_option("rw_slider_image_check_db","yes");
		if (get_option("rw_slider_image_check_version") !== false) {
			update_option("rw_slider_image_check_version",RW_SLIDER_IMAGE_VERSION);
		}else{
			add_option("rw_slider_image_check_version",RW_SLIDER_IMAGE_VERSION);
		}
	}
?>
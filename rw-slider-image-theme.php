<?php
	if(!current_user_can('manage_options')){ die('Access Denied'); }
	global $wpdb;
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		if(check_admin_referer( 'rw-slider-image-nonce', 'rw-slider-image-nonce-field' )) {
			if(isset($_POST['rw_slider_update_theme'])) {
				$rw_slider_name = sanitize_text_field($_POST['rich_web_slider_name']);
				$rw_slider_type = sanitize_text_field($_POST['rich_web_slider_type']);
				$rw_slider_image_up_id = sanitize_text_field($_POST['rw_slider_image_up_id']);
				$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_EFFECTS_TABLE." set slider_name = %s, slider_type = %s WHERE id = %d", $rw_slider_name, $rw_slider_type, $rw_slider_image_up_id));
				if($rw_slider_type=='Slider Navigation') {
					$Rich_Web_Sl1_SlS = sanitize_text_field($_POST['rich_web_Sl1_SlS']);
					$Rich_Web_Sl1_SlS = ($Rich_Web_Sl1_SlS=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl1_SlSS = sanitize_text_field($_POST['rich_web_Sl1_SlSS']);
					$Rich_Web_Sl1_PoH = sanitize_text_field($_POST['rich_web_Sl1_PoH']);
					$Rich_Web_Sl1_PoH = ($Rich_Web_Sl1_PoH=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl1_W = sanitize_text_field($_POST['rich_web_Sl1_W']);
					$Rich_Web_Sl1_H = sanitize_text_field($_POST['rich_web_Sl1_H']);
					$Rich_Web_Sl1_BoxS = sanitize_text_field($_POST['rich_web_Sl1_BoxS']);
					$Rich_Web_Sl1_BoxSC = sanitize_text_field($_POST['rich_web_Sl1_BoxSC']);
					$Rich_Web_Sl1_IBW = sanitize_text_field($_POST['rich_web_Sl1_IBW']);
					$Rich_Web_Sl1_IBS = sanitize_text_field($_POST['rich_web_Sl1_IBS']);
					$Rich_Web_Sl1_IBC = sanitize_text_field($_POST['rich_web_Sl1_IBC']);
					$Rich_Web_Sl1_IBR = sanitize_text_field($_POST['rich_web_Sl1_IBR']);
					$Rich_Web_Sl1_TBgC = sanitize_text_field($_POST['rich_web_Sl1_TBgC']);
					$Rich_Web_Sl1_TC = sanitize_text_field($_POST['rich_web_Sl1_TC']);
					$Rich_Web_Sl1_TTA = sanitize_text_field($_POST['rich_web_Sl1_TTA']);
					$Rich_Web_Sl1_TFS = sanitize_text_field($_POST['rich_web_Sl1_TFS']);
					$Rich_Web_Sl1_TFF = sanitize_text_field($_POST['rich_web_Sl1_TFF']);
					$Rich_Web_Sl1_TUp = sanitize_text_field($_POST['rich_web_Sl1_TUp']);
					$Rich_Web_Sl1_ArBgC = sanitize_text_field($_POST['rich_web_Sl1_ArBgC']);
					$Rich_Web_Sl1_ArOp = sanitize_text_field($_POST['rich_web_Sl1_ArOp']);
					$Rich_Web_Sl1_ArType = sanitize_text_field($_POST['rich_web_Sl1_ArType']);
					$Rich_Web_Sl1_ArHBgC = sanitize_text_field($_POST['rich_web_Sl1_ArHBgC']);
					$Rich_Web_Sl1_ArHOp = sanitize_text_field($_POST['rich_web_Sl1_ArHOp']);
					$Rich_Web_Sl1_ArHEff = sanitize_text_field($_POST['rich_web_Sl1_ArHEff']);
					$Rich_Web_Sl1_ArBoxW = sanitize_text_field($_POST['rich_web_Sl1_ArBoxW']);
					$Rich_Web_Sl1_NavW = sanitize_text_field($_POST['rich_web_Sl1_NavW']);
					$Rich_Web_Sl1_NavH = sanitize_text_field($_POST['rich_web_Sl1_NavH']);
					$Rich_Web_Sl1_NavPB = sanitize_text_field($_POST['rich_web_Sl1_NavPB']);
					$Rich_Web_Sl1_NavBW = sanitize_text_field($_POST['rich_web_Sl1_NavBW']);
					$Rich_Web_Sl1_NavBS = sanitize_text_field($_POST['rich_web_Sl1_NavBS']);
					$Rich_Web_Sl1_NavBC = sanitize_text_field($_POST['rich_web_Sl1_NavBC']);
					$Rich_Web_Sl1_NavBR = sanitize_text_field($_POST['rich_web_Sl1_NavBR']);
					$Rich_Web_Sl1_NavCC = sanitize_text_field($_POST['rich_web_Sl1_NavCC']);
					$Rich_Web_Sl1_NavHC = sanitize_text_field($_POST['rich_web_Sl1_NavHC']);
					$Rich_Web_Sl1_NavPos = sanitize_text_field($_POST['rich_web_Sl1_NavPos']);
					$Rich_Web_Sl1_ArPFT = "";
					$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_NAVIGATION." set rich_web_slider_name = %s, rich_web_slider_type = %s, rich_web_Sl1_SlS = %s, rich_web_Sl1_SlSS = %s, rich_web_Sl1_PoH = %s, rich_web_Sl1_W = %s, rich_web_Sl1_H = %s, rich_web_Sl1_BoxS = %s, rich_web_Sl1_BoxSC = %s, rich_web_Sl1_IBW = %s, rich_web_Sl1_IBS = %s, rich_web_Sl1_IBC = %s, rich_web_Sl1_IBR = %s, rich_web_Sl1_TBgC = %s, rich_web_Sl1_TC = %s, rich_web_Sl1_TTA = %s, rich_web_Sl1_TFS = %s, rich_web_Sl1_TFF = %s, rich_web_Sl1_TUp = %s, rich_web_Sl1_ArBgC = %s, rich_web_Sl1_ArOp = %s, rich_web_Sl1_ArType = %s, rich_web_Sl1_ArHBgC = %s, rich_web_Sl1_ArHOp = %s, rich_web_Sl1_ArHEff = %s, rich_web_Sl1_ArBoxW = %s, rich_web_Sl1_NavW = %s, rich_web_Sl1_NavH = %s, rich_web_Sl1_NavPB = %s, rich_web_Sl1_NavBW = %s, rich_web_Sl1_NavBS = %s, rich_web_Sl1_NavBC = %s, rich_web_Sl1_NavBR = %s, rich_web_Sl1_NavCC = %s, rich_web_Sl1_NavHC = %s, rich_web_Sl1_ArPFT = %s, rich_web_Sl1_NavPos = %s WHERE rich_web_slider_ID = %s", $rw_slider_name, $rw_slider_type, $Rich_Web_Sl1_SlS, $Rich_Web_Sl1_SlSS, $Rich_Web_Sl1_PoH, $Rich_Web_Sl1_W, $Rich_Web_Sl1_H, $Rich_Web_Sl1_BoxS, $Rich_Web_Sl1_BoxSC, $Rich_Web_Sl1_IBW, $Rich_Web_Sl1_IBS, $Rich_Web_Sl1_IBC, $Rich_Web_Sl1_IBR, $Rich_Web_Sl1_TBgC, $Rich_Web_Sl1_TC, $Rich_Web_Sl1_TTA, $Rich_Web_Sl1_TFS, $Rich_Web_Sl1_TFF, $Rich_Web_Sl1_TUp, $Rich_Web_Sl1_ArBgC, $Rich_Web_Sl1_ArOp, $Rich_Web_Sl1_ArType, $Rich_Web_Sl1_ArHBgC, $Rich_Web_Sl1_ArHOp, $Rich_Web_Sl1_ArHEff, $Rich_Web_Sl1_ArBoxW, $Rich_Web_Sl1_NavW, $Rich_Web_Sl1_NavH, $Rich_Web_Sl1_NavPB, $Rich_Web_Sl1_NavBW, $Rich_Web_Sl1_NavBS, $Rich_Web_Sl1_NavBC, $Rich_Web_Sl1_NavBR, $Rich_Web_Sl1_NavCC, $Rich_Web_Sl1_NavHC, $Rich_Web_Sl1_ArPFT, $Rich_Web_Sl1_NavPos, $rw_slider_image_up_id));
				} else if($rw_slider_type=='Content Slider') {
					$rich_CS_BIB = sanitize_text_field($_POST['rich_CS_BIB']);
					$rich_CS_BIB = ($rich_CS_BIB=='on') ? 'true' : 'none';
					$rich_CS_P = sanitize_text_field($_POST['rich_CS_P']);
					$rich_CS_P = ($rich_CS_P=='on') ? 'true' : 'none'; 
					$rich_CS_SD = sanitize_text_field($_POST['rich_CS_SD']);
					$rich_CS_AT = sanitize_text_field($_POST['rich_CS_AT']);
					$rich_CS_Cont_BgC = sanitize_text_field($_POST['rich_CS_Cont_BgC']);
					$rich_CS_Cont_BSC = sanitize_text_field($_POST['rich_CS_Cont_BSC']);
					$rich_CS_Cont_W = sanitize_text_field($_POST['rich_CS_Cont_W']);
					$rich_CS_Cont_H = sanitize_text_field($_POST['rich_CS_Cont_H']);
					$rich_CS_Cont_BW = sanitize_text_field($_POST['rich_CS_Cont_BW']);
					$rich_CS_Cont_BS = sanitize_text_field($_POST['rich_CS_Cont_BS']);
					$rich_CS_Cont_BC = sanitize_text_field($_POST['rich_CS_Cont_BC']);
					$rich_CS_Cont_BR = sanitize_text_field($_POST['rich_CS_Cont_BR']);
					$rich_CS_Video_TShow = sanitize_text_field($_POST['rich_CS_Video_TShow']);
					$rich_CS_Video_TShow = ($rich_CS_Video_TShow=='on') ? 'true' : 'none'; 
					$rich_CS_Video_TC = sanitize_text_field($_POST['rich_CS_Video_TC']);
					$rich_CS_Video_TFS = sanitize_text_field($_POST['rich_CS_Video_TFS']);
					$rich_CS_Video_TFF = sanitize_text_field($_POST['rich_CS_Video_TFF']);
					$rich_CS_Video_TTA = sanitize_text_field($_POST['rich_CS_Video_TTA']);
					$rich_CS_Video_DShow = sanitize_text_field($_POST['rich_CS_Video_DShow']);
					$rich_CS_Video_DShow = ($rich_CS_Video_DShow=='on') ? 'true' : 'none'; 
					$rich_CS_Video_DC = sanitize_text_field($_POST['rich_CS_Video_DC']);
					$rich_CS_Video_Show = sanitize_text_field($_POST['rich_CS_Video_Show']);
					$rich_CS_Video_Show = ($rich_CS_Video_Show=='on') ? 'true' : 'none'; 
					$rich_CS_Video_H = sanitize_text_field($_POST['rich_CS_Video_H']);
					$rich_CS_LFS = sanitize_text_field($_POST['rich_CS_LFS']);
					$rich_CS_LFF = sanitize_text_field($_POST['rich_CS_LFF']);
					$rich_CS_LC = sanitize_text_field($_POST['rich_CS_LC']);
					$rich_CS_LT = sanitize_text_field($_POST['rich_CS_LT']);
					$rich_CS_LBgC = sanitize_text_field($_POST['rich_CS_LBgC']);
					$rich_CS_LBC = sanitize_text_field($_POST['rich_CS_LBC']);
					$rich_CS_LBR = sanitize_text_field($_POST['rich_CS_LBR']);
					$rich_CS_LPos = sanitize_text_field($_POST['rich_CS_LPos']);
					$rich_CS_LHBgC = sanitize_text_field($_POST['rich_CS_LHBgC']);
					$rich_CS_LHC = sanitize_text_field($_POST['rich_CS_LHC']);
					$rich_CS_Video_ArrShow = sanitize_text_field($_POST['rich_CS_Video_ArrShow']);
					$rich_CS_Video_ArrShow = ($rich_CS_Video_ArrShow=='on') ? 'true' : 'none'; 
					$rich_CS_AFS = sanitize_text_field($_POST['rich_CS_AFS']);
					$rich_CS_AC = sanitize_text_field($_POST['rich_CS_AC']);
					$rich_CS_Icon = sanitize_text_field($_POST['rich_CS_Icon']);
					$rich_CS_Link_BW = sanitize_text_field($_POST['rich_CS_Link_BW']);
					$rich_CS_Link_BS = sanitize_text_field($_POST['rich_CS_Link_BS']);
					$rich_CS_Loop = $rich_CS_Cont_Op = $rich_CS_Video_TSC = $rich_CS_Video_DSC = $rich_CS_Video_DFS = $rich_CS_Video_DFF = $rich_CS_Video_DTA = $rich_CS_Video_W = "";
					$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_CONTENT." set rich_web_slider_name = %s, rich_web_slider_type = %s, rich_CS_BIB = %s, rich_CS_P = %s, rich_CS_Loop = %s, rich_CS_SD = %s, rich_CS_AT = %s, rich_CS_Cont_BgC = %s, rich_CS_Cont_BSC = %s, rich_CS_Cont_W = %s, rich_CS_Cont_H = %s, rich_CS_Cont_Op = %s, rich_CS_Cont_BW = %s, rich_CS_Cont_BS = %s, rich_CS_Cont_BC = %s, rich_CS_Cont_BR = %s, rich_CS_Video_TShow = %s, rich_CS_Video_TC = %s, rich_CS_Video_TSC = %s, rich_CS_Video_TFS = %s, rich_CS_Video_TFF = %s, rich_CS_Video_TTA = %s, rich_CS_Video_DShow = %s, rich_CS_Video_DC = %s, rich_CS_Video_DSC = %s, rich_CS_Video_DFS = %s, rich_CS_Video_DFF = %s, rich_CS_Video_DTA = %s, rich_CS_Video_Show = %s, rich_CS_Video_W = %s, rich_CS_Video_H = %s, rich_CS_LFS = %s, rich_CS_LFF = %s, rich_CS_LC = %s, rich_CS_LT = %s, rich_CS_LBgC = %s, rich_CS_LBC = %s, rich_CS_LBR = %s, rich_CS_LPos = %s, rich_CS_LHBgC = %s, rich_CS_LHC = %s, rich_CS_Video_ArrShow = %s, rich_CS_AFS = %s, rich_CS_AC = %s, rich_CS_Icon = %s, rich_CS_Link_BW = %s, rich_CS_Link_BS = %s WHERE richideo_EN_ID = %s", $rw_slider_name, $rw_slider_type, $rich_CS_BIB, $rich_CS_P, $rich_CS_Loop, $rich_CS_SD, $rich_CS_AT, $rich_CS_Cont_BgC, $rich_CS_Cont_BSC, $rich_CS_Cont_W, $rich_CS_Cont_H, $rich_CS_Cont_Op, $rich_CS_Cont_BW, $rich_CS_Cont_BS, $rich_CS_Cont_BC, $rich_CS_Cont_BR, $rich_CS_Video_TShow, $rich_CS_Video_TC, $rich_CS_Video_TSC, $rich_CS_Video_TFS, $rich_CS_Video_TFF, $rich_CS_Video_TTA, $rich_CS_Video_DShow, $rich_CS_Video_DC, $rich_CS_Video_DSC, $rich_CS_Video_DFS, $rich_CS_Video_DFF, $rich_CS_Video_DTA, $rich_CS_Video_Show, $rich_CS_Video_W, $rich_CS_Video_H, $rich_CS_LFS, $rich_CS_LFF, $rich_CS_LC, $rich_CS_LT, $rich_CS_LBgC, $rich_CS_LBC, $rich_CS_LBR, $rich_CS_LPos, $rich_CS_LHBgC, $rich_CS_LHC, $rich_CS_Video_ArrShow, $rich_CS_AFS, $rich_CS_AC, $rich_CS_Icon, $rich_CS_Link_BW, $rich_CS_Link_BS, $rw_slider_image_up_id));
				} else if($rw_slider_type=='Fashion Slider') {
					$rich_fsl_animation = sanitize_text_field($_POST['rich_fsl_animation']);
					$rich_fsl_SShow = sanitize_text_field($_POST['rich_fsl_SShow']);
					$rich_fsl_SShow = ($rich_fsl_SShow=='on') ? 'true' : 'false'; 
					$rich_fsl_SShow_Speed = sanitize_text_field($_POST['rich_fsl_SShow_Speed']);
					$rich_fsl_Anim_Dur = sanitize_text_field($_POST['rich_fsl_Anim_Dur']);
					$rich_fsl_Ic_Show = sanitize_text_field($_POST['rich_fsl_Ic_Show']);
					$rich_fsl_Ic_Show = ($rich_fsl_Ic_Show=='on') ? 'true' : 'false'; 
					$rich_fsl_PPL_Show = sanitize_text_field($_POST['rich_fsl_PPL_Show']);
					$rich_fsl_PPL_Show = ($rich_fsl_PPL_Show=='on') ? 'true' : 'false'; 
					$rich_fsl_Randomize = sanitize_text_field($_POST['rich_fsl_Randomize']);
					$rich_fsl_Randomize = ($rich_fsl_Randomize=='on') ? 'true' : 'false'; 
					$rich_fsl_Loop = sanitize_text_field($_POST['rich_fsl_Loop']);
					$rich_fsl_Loop = ($rich_fsl_Loop=='on') ? 'true' : 'false'; 
					$rich_fsl_Width = sanitize_text_field($_POST['rich_fsl_Width']);
					$rich_fsl_Height = sanitize_text_field($_POST['rich_fsl_Height']);
					$rich_fsl_Border_Width = sanitize_text_field($_POST['rich_fsl_Border_Width']);
					$rich_fsl_Border_Style = sanitize_text_field($_POST['rich_fsl_Border_Style']);
					$rich_fsl_Border_Color = sanitize_text_field($_POST['rich_fsl_Border_Color']);
					$rich_fsl_Box_Shadow = sanitize_text_field($_POST['rich_fsl_Box_Shadow']);
					$rich_fsl_Shadow_Color = sanitize_text_field($_POST['rich_fsl_Shadow_Color']);
					$rich_fsl_Desc_Show = sanitize_text_field($_POST['rich_fsl_Desc_Show']);
					$rich_fsl_Desc_Bg_Color = sanitize_text_field($_POST['rich_fsl_Desc_Bg_Color']);
					$rich_fsl_Title_Font_Size = sanitize_text_field($_POST['rich_fsl_Title_Font_Size']);
					$rich_fsl_Title_Color = sanitize_text_field($_POST['rich_fsl_Title_Color']);
					$rich_fsl_Title_Text_Shadow = sanitize_text_field($_POST['rich_fsl_Title_Text_Shadow']);
					$rich_fsl_Title_Font_Family = sanitize_text_field($_POST['rich_fsl_Title_Font_Family']);
					$rich_fsl_Title_Text_Align = sanitize_text_field($_POST['rich_fsl_Title_Text_Align']);
					$rich_fsl_Link_Text = sanitize_text_field($_POST['rich_fsl_Link_Text']);
					$rich_fsl_Link_Border_Width = sanitize_text_field($_POST['rich_fsl_Link_Border_Width']);
					$rich_fsl_Link_Border_Style = sanitize_text_field($_POST['rich_fsl_Link_Border_Style']);
					$rich_fsl_Link_Border_Color = sanitize_text_field($_POST['rich_fsl_Link_Border_Color']);
					$rich_fsl_Link_Font_Size = sanitize_text_field($_POST['rich_fsl_Link_Font_Size']);
					$rich_fsl_Link_Color = sanitize_text_field($_POST['rich_fsl_Link_Color']);
					$rich_fsl_Link_Font_Family = sanitize_text_field($_POST['rich_fsl_Link_Font_Family']);
					$rich_fsl_Link_Bg_Color = sanitize_text_field($_POST['rich_fsl_Link_Bg_Color']);
					$rich_fsl_Link_Hover_Border_Color = sanitize_text_field($_POST['rich_fsl_Link_Hover_Border_Color']);
					$rich_fsl_Link_Hover_Bg_Color = sanitize_text_field($_POST['rich_fsl_Link_Hover_Bg_Color']);
					$rich_fsl_Link_Hover_Color = sanitize_text_field($_POST['rich_fsl_Link_Hover_Color']);
					$rich_fsl_Icon_Size = sanitize_text_field($_POST['rich_fsl_Icon_Size']);
					$rich_fsl_Icon_Type = sanitize_text_field($_POST['rich_fsl_Icon_Type']);
					$rich_fsl_Hover_Icon_Type = sanitize_text_field($_POST['rich_fsl_Hover_Icon_Type']);
					$rich_fsl_Desc_Size = $rich_fsl_Desc_Color = $rich_fsl_Desc_Font_Family = $rich_fsl_Desc_Text_Align = "";
					$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_FASHION." set rich_web_slider_name = %s, rich_web_slider_type = %s, rich_fsl_animation = %s, rich_fsl_SShow = %s, rich_fsl_SShow_Speed = %s, rich_fsl_Anim_Dur = %s, rich_fsl_Ic_Show = %s, rich_fsl_PPL_Show = %s, rich_fsl_Randomize = %s, rich_fsl_Loop = %s, rich_fsl_Width = %s, rich_fsl_Height = %s, rich_fsl_Border_Width = %s, rich_fsl_Border_Style = %s, rich_fsl_Border_Color = %s, rich_fsl_Box_Shadow = %s, rich_fsl_Shadow_Color = %s, rich_fsl_Desc_Show = %s, rich_fsl_Desc_Size = %s, rich_fsl_Desc_Color = %s, rich_fsl_Desc_Font_Family = %s, rich_fsl_Desc_Text_Align = %s, rich_fsl_Desc_Bg_Color = %s, rich_fsl_Title_Font_Size = %s, rich_fsl_Title_Color = %s, rich_fsl_Title_Text_Shadow = %s, rich_fsl_Title_Font_Family = %s, rich_fsl_Title_Text_Align = %s, rich_fsl_Link_Text = %s, rich_fsl_Link_Border_Width = %s, rich_fsl_Link_Border_Style = %s, rich_fsl_Link_Border_Color = %s, rich_fsl_Link_Font_Size = %s, rich_fsl_Link_Color = %s, rich_fsl_Link_Font_Family = %s, rich_fsl_Link_Bg_Color = %s, rich_fsl_Link_Hover_Border_Color = %s, rich_fsl_Link_Hover_Bg_Color = %s, rich_fsl_Link_Hover_Color = %s, rich_fsl_Icon_Size = %s, rich_fsl_Icon_Type = %s, rich_fsl_Hover_Icon_Type = %s WHERE rich_web_slider_ID = %s", $rw_slider_name, $rw_slider_type, $rich_fsl_animation, $rich_fsl_SShow, $rich_fsl_SShow_Speed, $rich_fsl_Anim_Dur, $rich_fsl_Ic_Show, $rich_fsl_PPL_Show, $rich_fsl_Randomize, $rich_fsl_Loop, $rich_fsl_Width, $rich_fsl_Height, $rich_fsl_Border_Width, $rich_fsl_Border_Style, $rich_fsl_Border_Color, $rich_fsl_Box_Shadow, $rich_fsl_Shadow_Color, $rich_fsl_Desc_Show, $rich_fsl_Desc_Size, $rich_fsl_Desc_Color, $rich_fsl_Desc_Font_Family, $rich_fsl_Desc_Text_Align, $rich_fsl_Desc_Bg_Color, $rich_fsl_Title_Font_Size, $rich_fsl_Title_Color, $rich_fsl_Title_Text_Shadow, $rich_fsl_Title_Font_Family, $rich_fsl_Title_Text_Align, $rich_fsl_Link_Text, $rich_fsl_Link_Border_Width, $rich_fsl_Link_Border_Style, $rich_fsl_Link_Border_Color, $rich_fsl_Link_Font_Size, $rich_fsl_Link_Color, $rich_fsl_Link_Font_Family, $rich_fsl_Link_Bg_Color, $rich_fsl_Link_Hover_Border_Color, $rich_fsl_Link_Hover_Bg_Color, $rich_fsl_Link_Hover_Color, $rich_fsl_Icon_Size, $rich_fsl_Icon_Type, $rich_fsl_Hover_Icon_Type, $rw_slider_image_up_id));
				} else if($rw_slider_type=='Circle Thumbnails') {
					$Rich_Web_Sl_CT_W = sanitize_text_field($_POST['Rich_Web_Sl_CT_W']);
					$Rich_Web_Sl_CT_H = sanitize_text_field($_POST['Rich_Web_Sl_CT_H']);
					$Rich_Web_Sl_CT_BW = sanitize_text_field($_POST['Rich_Web_Sl_CT_BW']);
					$Rich_Web_Sl_CT_BS = sanitize_text_field($_POST['Rich_Web_Sl_CT_BS']);
					$Rich_Web_Sl_CT_BC = sanitize_text_field($_POST['Rich_Web_Sl_CT_BC']);
					$Rich_Web_Sl_CT_BxSType = sanitize_text_field($_POST['Rich_Web_Sl_CT_BxSType']);
					$Rich_Web_Sl_CT_BxC = sanitize_text_field($_POST['Rich_Web_Sl_CT_BxC']);
					$Rich_Web_Sl_CT_TDABgC = sanitize_text_field($_POST['Rich_Web_Sl_CT_TDABgC']);
					$Rich_Web_Sl_CT_TDAPos = sanitize_text_field($_POST['Rich_Web_Sl_CT_TDAPos']);
					$Rich_Web_Sl_CT_LBgC = sanitize_text_field($_POST['Rich_Web_Sl_CT_LBgC']);
					$Rich_Web_Sl_CT_TFS = sanitize_text_field($_POST['Rich_Web_Sl_CT_TFS']);
					$Rich_Web_Sl_CT_TFF = sanitize_text_field($_POST['Rich_Web_Sl_CT_TFF']);
					$Rich_Web_Sl_CT_TCC = sanitize_text_field($_POST['Rich_Web_Sl_CT_TCC']);
					$Rich_Web_Sl_CT_TC = sanitize_text_field($_POST['Rich_Web_Sl_CT_TC']);
					$Rich_Web_Sl_CT_ArBgC = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArBgC']);
					$Rich_Web_Sl_CT_ArBR = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArBR']);
					$Rich_Web_Sl_CT_ArType = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArType']);
					$Rich_Web_Sl_CT_ArHBC = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArHBC']);
					$Rich_Web_Sl_CT_ArHBR = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArHBR']);
					$Rich_Web_Sl_CT_ArText = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArText']);
					$Rich_Web_Sl_CT_ArText = ($Rich_Web_Sl_CT_ArText=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_CT_ArLeft = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArLeft']);
					$Rich_Web_Sl_CT_ArRight = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArRight']);
					$Rich_Web_Sl_CT_ArTextC = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArTextC']);
					$Rich_Web_Sl_CT_ArTextFS = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArTextFS']);
					$Rich_Web_Sl_CT_ArTextFF = sanitize_text_field($_POST['Rich_Web_Sl_CT_ArTextFF']);
					$Rich_Web_Sl_CT_BxSShow = $Rich_Web_Sl_CT_BxS = "";
					$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_CIRCLE." set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_Sl_CT_W = %s, Rich_Web_Sl_CT_H = %s, Rich_Web_Sl_CT_BW = %s, Rich_Web_Sl_CT_BS = %s, Rich_Web_Sl_CT_BC = %s, Rich_Web_Sl_CT_BxSShow = %s, Rich_Web_Sl_CT_BxSType = %s, Rich_Web_Sl_CT_BxS = %s, Rich_Web_Sl_CT_BxC = %s, Rich_Web_Sl_CT_TDABgC = %s, Rich_Web_Sl_CT_TDAPos = %s, Rich_Web_Sl_CT_LBgC = %s, Rich_Web_Sl_CT_TFS = %s, Rich_Web_Sl_CT_TFF = %s, Rich_Web_Sl_CT_TCC = %s, Rich_Web_Sl_CT_TC = %s, Rich_Web_Sl_CT_ArBgC = %s, Rich_Web_Sl_CT_ArBR = %s, Rich_Web_Sl_CT_ArType = %s, Rich_Web_Sl_CT_ArHBC = %s, Rich_Web_Sl_CT_ArHBR = %s, Rich_Web_Sl_CT_ArText = %s, Rich_Web_Sl_CT_ArLeft = %s, Rich_Web_Sl_CT_ArRight = %s, Rich_Web_Sl_CT_ArTextC = %s, Rich_Web_Sl_CT_ArTextFS = %s, Rich_Web_Sl_CT_ArTextFF = %s WHERE rich_web_slider_ID = %s", $rw_slider_name, $rw_slider_type, $Rich_Web_Sl_CT_W, $Rich_Web_Sl_CT_H, $Rich_Web_Sl_CT_BW, $Rich_Web_Sl_CT_BS, $Rich_Web_Sl_CT_BC, $Rich_Web_Sl_CT_BxSShow, $Rich_Web_Sl_CT_BxSType, $Rich_Web_Sl_CT_BxS, $Rich_Web_Sl_CT_BxC, $Rich_Web_Sl_CT_TDABgC, $Rich_Web_Sl_CT_TDAPos, $Rich_Web_Sl_CT_LBgC, $Rich_Web_Sl_CT_TFS, $Rich_Web_Sl_CT_TFF, $Rich_Web_Sl_CT_TCC, $Rich_Web_Sl_CT_TC, $Rich_Web_Sl_CT_ArBgC, $Rich_Web_Sl_CT_ArBR, $Rich_Web_Sl_CT_ArType, $Rich_Web_Sl_CT_ArHBC, $Rich_Web_Sl_CT_ArHBR, $Rich_Web_Sl_CT_ArText, $Rich_Web_Sl_CT_ArLeft, $Rich_Web_Sl_CT_ArRight, $Rich_Web_Sl_CT_ArTextC, $Rich_Web_Sl_CT_ArTextFS, $Rich_Web_Sl_CT_ArTextFF, $rw_slider_image_up_id));
				} else if($rw_slider_type=='Slider Carousel') {
					$Rich_Web_Sl_SC_BW = sanitize_text_field($_POST['Rich_Web_Sl_SC_BW']);
					$Rich_Web_Sl_SC_BS = sanitize_text_field($_POST['Rich_Web_Sl_SC_BS']);
					$Rich_Web_Sl_SC_BC = sanitize_text_field($_POST['Rich_Web_Sl_SC_BC']);
					$Rich_Web_Sl_SC_BoxShType = sanitize_text_field($_POST['Rich_Web_Sl_SC_BoxShType']);
					$Rich_Web_Sl_SC_BoxShC = sanitize_text_field($_POST['Rich_Web_Sl_SC_BoxShC']);
					$Rich_Web_Sl_SC_IW = sanitize_text_field($_POST['Rich_Web_Sl_SC_IW']);
					$Rich_Web_Sl_SC_IH = sanitize_text_field($_POST['Rich_Web_Sl_SC_IH']);
					$Rich_Web_Sl_SC_IBW = sanitize_text_field($_POST['Rich_Web_Sl_SC_IBW']);
					$Rich_Web_Sl_SC_IBC = sanitize_text_field($_POST['Rich_Web_Sl_SC_IBC']);
					$Rich_Web_Sl_SC_IBR = sanitize_text_field($_POST['Rich_Web_Sl_SC_IBR']);
					$Rich_Web_Sl_SC_ICBW = sanitize_text_field($_POST['Rich_Web_Sl_SC_ICBW']);
					$Rich_Web_Sl_SC_ICBC = sanitize_text_field($_POST['Rich_Web_Sl_SC_ICBC']);
					$Rich_Web_Sl_SC_TBgC = sanitize_text_field($_POST['Rich_Web_Sl_SC_TBgC']);
					$Rich_Web_Sl_SC_TC = sanitize_text_field($_POST['Rich_Web_Sl_SC_TC']);
					$Rich_Web_Sl_SC_TFS = sanitize_text_field($_POST['Rich_Web_Sl_SC_TFS']);
					$Rich_Web_Sl_SC_TFF = sanitize_text_field($_POST['Rich_Web_Sl_SC_TFF']);
					$Rich_Web_Sl_SC_THBgC = sanitize_text_field($_POST['Rich_Web_Sl_SC_THBgC']);
					$Rich_Web_Sl_SC_THC = sanitize_text_field($_POST['Rich_Web_Sl_SC_THC']);
					$Rich_Web_Sl_SC_Pop_OC = sanitize_text_field($_POST['Rich_Web_Sl_SC_Pop_OC']);
					$Rich_Web_Sl_SC_Pop_BW = sanitize_text_field($_POST['Rich_Web_Sl_SC_Pop_BW']);
					$Rich_Web_Sl_SC_Pop_BC = sanitize_text_field($_POST['Rich_Web_Sl_SC_Pop_BC']);
					$Rich_Web_Sl_SC_Pop_BoxShType = sanitize_text_field($_POST['Rich_Web_Sl_SC_Pop_BoxShType']);
					$Rich_Web_Sl_SC_Pop_BoxShC = sanitize_text_field($_POST['Rich_Web_Sl_SC_Pop_BoxShC']);
					$Rich_Web_Sl_SC_L_BgC = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_BgC']);
					$Rich_Web_Sl_SC_L_C = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_C']);
					$Rich_Web_Sl_SC_L_FS = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_FS']);
					$Rich_Web_Sl_SC_L_BW = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_BW']);
					$Rich_Web_Sl_SC_L_BS = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_BS']);
					$Rich_Web_Sl_SC_L_BC = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_BC']);
					$Rich_Web_Sl_SC_L_BR = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_BR']);
					$Rich_Web_Sl_SC_L_HBgC = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_HBgC']);
					$Rich_Web_Sl_SC_L_HC = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_HC']);
					$Rich_Web_Sl_SC_L_Type = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_Type']);
					$Rich_Web_Sl_SC_L_Text = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_Text']);
					$Rich_Web_Sl_SC_L_IType = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_IType']);
					$Rich_Web_Sl_SC_L_FF = sanitize_text_field($_POST['Rich_Web_Sl_SC_L_FF']);
					$Rich_Web_Sl_SC_PI_BgC = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_BgC']);
					$Rich_Web_Sl_SC_PI_C = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_C']);
					$Rich_Web_Sl_SC_PI_FS = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_FS']);
					$Rich_Web_Sl_SC_PI_BW = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_BW']);
					$Rich_Web_Sl_SC_PI_BC = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_BC']);
					$Rich_Web_Sl_SC_PI_BR = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_BR']);
					$Rich_Web_Sl_SC_PI_HBgC = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_HBgC']);
					$Rich_Web_Sl_SC_PI_HC = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_HC']);
					$Rich_Web_Sl_SC_PI_Type = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_Type']);
					$Rich_Web_Sl_SC_PI_Text = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_Text']);
					$Rich_Web_Sl_SC_PI_IType = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_IType']);
					$Rich_Web_Sl_SC_PI_FF = sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_FF']);
					$Rich_Web_Sl_SC_Arr_BgC = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_BgC']);
					$Rich_Web_Sl_SC_Arr_C = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_C']);
					$Rich_Web_Sl_SC_Arr_FS = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_FS']);
					$Rich_Web_Sl_SC_Arr_BW = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_BW']);
					$Rich_Web_Sl_SC_Arr_BS = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_BS']);
					$Rich_Web_Sl_SC_Arr_BC = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_BC']);
					$Rich_Web_Sl_SC_Arr_BR = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_BR']);
					$Rich_Web_Sl_SC_Arr_HBgC = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_HBgC']);
					$Rich_Web_Sl_SC_Arr_HC = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_HC']);
					$Rich_Web_Sl_SC_Arr_Type = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_Type']);
					$Rich_Web_Sl_SC_Arr_FF = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_FF']);
					$Rich_Web_Sl_SC_Arr_IType = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_IType']);
					$Rich_Web_Sl_SC_Arr_Next = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_Next']);
					$Rich_Web_Sl_SC_Arr_Prev = sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_Prev']);
					$Rich_Web_Sl_SC_PCI_FS = sanitize_text_field($_POST['Rich_Web_Sl_SC_PCI_FS']);
					$Rich_Web_Sl_SC_PCI_C = sanitize_text_field($_POST['Rich_Web_Sl_SC_PCI_C']);
					$Rich_Web_Sl_SC_PCI_Type = sanitize_text_field($_POST['Rich_Web_Sl_SC_PCI_Type']);
					$Rich_Web_Sl_SC_BoxShShow = $Rich_Web_Sl_SC_BoxSh = $Rich_Web_Sl_SC_IBS = $Rich_Web_Sl_SC_ICBS = $Rich_Web_Sl_SC_Pop_BoxShShow = $Rich_Web_Sl_SC_Pop_BoxSh = $Rich_Web_Sl_SC_PI_BS = "";
					$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_CAROUSEL." set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_Sl_SC_BW = %s, Rich_Web_Sl_SC_BS = %s, Rich_Web_Sl_SC_BC = %s, Rich_Web_Sl_SC_BoxShShow = %s, Rich_Web_Sl_SC_BoxShType = %s, Rich_Web_Sl_SC_BoxSh = %s, Rich_Web_Sl_SC_BoxShC = %s, Rich_Web_Sl_SC_IW = %s, Rich_Web_Sl_SC_IH = %s, Rich_Web_Sl_SC_IBW = %s, Rich_Web_Sl_SC_IBS = %s, Rich_Web_Sl_SC_IBC = %s, Rich_Web_Sl_SC_IBR = %s, Rich_Web_Sl_SC_ICBW = %s, Rich_Web_Sl_SC_ICBS = %s, Rich_Web_Sl_SC_ICBC = %s, Rich_Web_Sl_SC_TBgC = %s, Rich_Web_Sl_SC_TC = %s, Rich_Web_Sl_SC_TFS = %s, Rich_Web_Sl_SC_TFF = %s, Rich_Web_Sl_SC_THBgC = %s, Rich_Web_Sl_SC_THC = %s, Rich_Web_Sl_SC_Pop_OC = %s, Rich_Web_Sl_SC_Pop_BW = %s, Rich_Web_Sl_SC_Pop_BC = %s, Rich_Web_Sl_SC_Pop_BoxShShow = %s, Rich_Web_Sl_SC_Pop_BoxShType = %s, Rich_Web_Sl_SC_Pop_BoxSh = %s, Rich_Web_Sl_SC_Pop_BoxShC = %s, Rich_Web_Sl_SC_L_BgC = %s, Rich_Web_Sl_SC_L_C = %s, Rich_Web_Sl_SC_L_FS = %s, Rich_Web_Sl_SC_L_BW = %s, Rich_Web_Sl_SC_L_BS = %s, Rich_Web_Sl_SC_L_BC = %s, Rich_Web_Sl_SC_L_BR = %s, Rich_Web_Sl_SC_L_HBgC = %s, Rich_Web_Sl_SC_L_HC = %s, Rich_Web_Sl_SC_L_Type = %s, Rich_Web_Sl_SC_L_Text = %s, Rich_Web_Sl_SC_L_IType = %s, Rich_Web_Sl_SC_L_FF = %s, Rich_Web_Sl_SC_PI_BgC = %s, Rich_Web_Sl_SC_PI_C = %s, Rich_Web_Sl_SC_PI_FS = %s, Rich_Web_Sl_SC_PI_BW = %s, Rich_Web_Sl_SC_PI_BS = %s, Rich_Web_Sl_SC_PI_BC = %s, Rich_Web_Sl_SC_PI_BR = %s, Rich_Web_Sl_SC_PI_HBgC = %s, Rich_Web_Sl_SC_PI_HC = %s, Rich_Web_Sl_SC_PI_Type = %s, Rich_Web_Sl_SC_PI_Text = %s, Rich_Web_Sl_SC_PI_IType = %s, Rich_Web_Sl_SC_PI_FF = %s, Rich_Web_Sl_SC_Arr_BgC = %s, Rich_Web_Sl_SC_Arr_C = %s, Rich_Web_Sl_SC_Arr_FS = %s, Rich_Web_Sl_SC_Arr_BW = %s, Rich_Web_Sl_SC_Arr_BS = %s, Rich_Web_Sl_SC_Arr_BC = %s, Rich_Web_Sl_SC_Arr_BR = %s, Rich_Web_Sl_SC_Arr_HBgC = %s, Rich_Web_Sl_SC_Arr_HC = %s, Rich_Web_Sl_SC_Arr_Type = %s, Rich_Web_Sl_SC_Arr_FF = %s, Rich_Web_Sl_SC_Arr_IType = %s, Rich_Web_Sl_SC_Arr_Next = %s, Rich_Web_Sl_SC_Arr_Prev = %s, Rich_Web_Sl_SC_PCI_FS = %s, Rich_Web_Sl_SC_PCI_C = %s, Rich_Web_Sl_SC_PCI_Type = %s WHERE rich_web_slider_ID = %s", $rw_slider_name, $rw_slider_type, $Rich_Web_Sl_SC_BW, $Rich_Web_Sl_SC_BS, $Rich_Web_Sl_SC_BC, $Rich_Web_Sl_SC_BoxShShow, $Rich_Web_Sl_SC_BoxShType, $Rich_Web_Sl_SC_BoxSh, $Rich_Web_Sl_SC_BoxShC, $Rich_Web_Sl_SC_IW, $Rich_Web_Sl_SC_IH, $Rich_Web_Sl_SC_IBW, $Rich_Web_Sl_SC_IBS, $Rich_Web_Sl_SC_IBC, $Rich_Web_Sl_SC_IBR, $Rich_Web_Sl_SC_ICBW, $Rich_Web_Sl_SC_ICBS, $Rich_Web_Sl_SC_ICBC, $Rich_Web_Sl_SC_TBgC, $Rich_Web_Sl_SC_TC, $Rich_Web_Sl_SC_TFS, $Rich_Web_Sl_SC_TFF, $Rich_Web_Sl_SC_THBgC, $Rich_Web_Sl_SC_THC, $Rich_Web_Sl_SC_Pop_OC, $Rich_Web_Sl_SC_Pop_BW, $Rich_Web_Sl_SC_Pop_BC, $Rich_Web_Sl_SC_Pop_BoxShShow, $Rich_Web_Sl_SC_Pop_BoxShType, $Rich_Web_Sl_SC_Pop_BoxSh, $Rich_Web_Sl_SC_Pop_BoxShC, $Rich_Web_Sl_SC_L_BgC, $Rich_Web_Sl_SC_L_C, $Rich_Web_Sl_SC_L_FS, $Rich_Web_Sl_SC_L_BW, $Rich_Web_Sl_SC_L_BS, $Rich_Web_Sl_SC_L_BC, $Rich_Web_Sl_SC_L_BR, $Rich_Web_Sl_SC_L_HBgC, $Rich_Web_Sl_SC_L_HC, $Rich_Web_Sl_SC_L_Type, $Rich_Web_Sl_SC_L_Text, $Rich_Web_Sl_SC_L_IType, $Rich_Web_Sl_SC_L_FF, $Rich_Web_Sl_SC_PI_BgC, $Rich_Web_Sl_SC_PI_C, $Rich_Web_Sl_SC_PI_FS, $Rich_Web_Sl_SC_PI_BW, $Rich_Web_Sl_SC_PI_BS, $Rich_Web_Sl_SC_PI_BC, $Rich_Web_Sl_SC_PI_BR, $Rich_Web_Sl_SC_PI_HBgC, $Rich_Web_Sl_SC_PI_HC, $Rich_Web_Sl_SC_PI_Type, $Rich_Web_Sl_SC_PI_Text, $Rich_Web_Sl_SC_PI_IType, $Rich_Web_Sl_SC_PI_FF, $Rich_Web_Sl_SC_Arr_BgC, $Rich_Web_Sl_SC_Arr_C, $Rich_Web_Sl_SC_Arr_FS, $Rich_Web_Sl_SC_Arr_BW, $Rich_Web_Sl_SC_Arr_BS, $Rich_Web_Sl_SC_Arr_BC, $Rich_Web_Sl_SC_Arr_BR, $Rich_Web_Sl_SC_Arr_HBgC, $Rich_Web_Sl_SC_Arr_HC, $Rich_Web_Sl_SC_Arr_Type, $Rich_Web_Sl_SC_Arr_FF, $Rich_Web_Sl_SC_Arr_IType, $Rich_Web_Sl_SC_Arr_Next, $Rich_Web_Sl_SC_Arr_Prev, $Rich_Web_Sl_SC_PCI_FS, $Rich_Web_Sl_SC_PCI_C, $Rich_Web_Sl_SC_PCI_Type, $rw_slider_image_up_id));
				} else if($rw_slider_type=='Flexible Slider') {
					$Rich_Web_Sl_FS_BgC = sanitize_text_field($_POST['Rich_Web_Sl_FS_BgC']);
					$Rich_Web_Sl_FS_AP = sanitize_text_field($_POST['Rich_Web_Sl_FS_AP']);
					$Rich_Web_Sl_FS_AP = ($Rich_Web_Sl_FS_AP=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_FS_TS = sanitize_text_field($_POST['Rich_Web_Sl_FS_TS']);
					$Rich_Web_Sl_FS_PT = sanitize_text_field($_POST['Rich_Web_Sl_FS_PT']);
					$Rich_Web_Sl_FS_SS = sanitize_text_field($_POST['Rich_Web_Sl_FS_SS']);
					$Rich_Web_Sl_FS_SVis = sanitize_text_field($_POST['Rich_Web_Sl_FS_SVis']);
					$Rich_Web_Sl_FS_CS = sanitize_text_field($_POST['Rich_Web_Sl_FS_CS']);
					$Rich_Web_Sl_FS_SLoop = sanitize_text_field($_POST['Rich_Web_Sl_FS_SLoop']);
					$Rich_Web_Sl_FS_SLoop = ($Rich_Web_Sl_FS_SLoop=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_FS_SSc = sanitize_text_field($_POST['Rich_Web_Sl_FS_SSc']);
					$Rich_Web_Sl_FS_SlPos = sanitize_text_field($_POST['Rich_Web_Sl_FS_SlPos']);
					$Rich_Web_Sl_FS_ShNavBut = sanitize_text_field($_POST['Rich_Web_Sl_FS_ShNavBut']);
					$Rich_Web_Sl_FS_ShNavBut = ($Rich_Web_Sl_FS_ShNavBut=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_FS_I_W = sanitize_text_field($_POST['Rich_Web_Sl_FS_I_W']);
					$Rich_Web_Sl_FS_I_H = sanitize_text_field($_POST['Rich_Web_Sl_FS_I_H']);
					$Rich_Web_Sl_FS_I_BW = sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BW']);
					$Rich_Web_Sl_FS_I_BS = sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BS']);
					$Rich_Web_Sl_FS_I_BC = sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BC']);
					$Rich_Web_Sl_FS_I_BR = sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BR']);
					$Rich_Web_Sl_FS_I_BoxShType = sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BoxShType']);
					$Rich_Web_Sl_FS_I_BoxShC = sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BoxShC']);
					$Rich_Web_Sl_FS_T_C = sanitize_text_field($_POST['Rich_Web_Sl_FS_T_C']);
					$Rich_Web_Sl_FS_T_FF = sanitize_text_field($_POST['Rich_Web_Sl_FS_T_FF']);
					$Rich_Web_Sl_FS_Nav_Show = sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_Show']);
					$Rich_Web_Sl_FS_Nav_Show = ($Rich_Web_Sl_FS_Nav_Show=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_FS_Nav_W = sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_W']);
					$Rich_Web_Sl_FS_Nav_H = sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_H']);
					$Rich_Web_Sl_FS_Nav_BW = sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_BW']);
					$Rich_Web_Sl_FS_Nav_BC = sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_BC']);
					$Rich_Web_Sl_FS_Nav_BR = sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_BR']);
					$Rich_Web_Sl_FS_Nav_PB = sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_PB']);
					$Rich_Web_Sl_FS_Nav_CC = sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_CC']);
					$Rich_Web_Sl_FS_Nav_HC = sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_HC']);
					$Rich_Web_Sl_FS_Nav_C = sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_C']);
					$Rich_Web_Sl_FS_Arr_Type = sanitize_text_field($_POST['Rich_Web_Sl_FS_Arr_Type']);
					$Rich_Web_Sl_FS_Arr_S = sanitize_text_field($_POST['Rich_Web_Sl_FS_Arr_S']);
					$Rich_Web_Sl_FS_Arr_C = sanitize_text_field($_POST['Rich_Web_Sl_FS_Arr_C']);
					$Rich_Web_Sl_FS_I_BoxShShow = $Rich_Web_Sl_FS_I_BoxSh = $Rich_Web_Sl_FS_Nav_BS = $Rich_Web_Sl_FS_Arr_Show = "";
					$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_FLEXIBLE." set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_Sl_FS_BgC = %s, Rich_Web_Sl_FS_AP = %s, Rich_Web_Sl_FS_TS = %s, Rich_Web_Sl_FS_PT = %s, Rich_Web_Sl_FS_SS = %s, Rich_Web_Sl_FS_SVis = %s, Rich_Web_Sl_FS_CS = %s, Rich_Web_Sl_FS_SLoop = %s, Rich_Web_Sl_FS_SSc = %s, Rich_Web_Sl_FS_SlPos = %s, Rich_Web_Sl_FS_ShNavBut = %s, Rich_Web_Sl_FS_I_W = %s, Rich_Web_Sl_FS_I_H = %s, Rich_Web_Sl_FS_I_BW = %s, Rich_Web_Sl_FS_I_BS = %s, Rich_Web_Sl_FS_I_BC = %s, Rich_Web_Sl_FS_I_BR = %s, Rich_Web_Sl_FS_I_BoxShShow = %s, Rich_Web_Sl_FS_I_BoxShType = %s, Rich_Web_Sl_FS_I_BoxSh = %s, Rich_Web_Sl_FS_I_BoxShC = %s, Rich_Web_Sl_FS_T_C = %s, Rich_Web_Sl_FS_T_FF = %s, Rich_Web_Sl_FS_Nav_Show = %s, Rich_Web_Sl_FS_Nav_W = %s, Rich_Web_Sl_FS_Nav_H = %s, Rich_Web_Sl_FS_Nav_BW = %s, Rich_Web_Sl_FS_Nav_BS = %s, Rich_Web_Sl_FS_Nav_BC = %s, Rich_Web_Sl_FS_Nav_BR = %s, Rich_Web_Sl_FS_Nav_PB = %s, Rich_Web_Sl_FS_Nav_CC = %s, Rich_Web_Sl_FS_Nav_HC = %s, Rich_Web_Sl_FS_Nav_C = %s, Rich_Web_Sl_FS_Arr_Show = %s, Rich_Web_Sl_FS_Arr_Type = %s, Rich_Web_Sl_FS_Arr_S = %s, Rich_Web_Sl_FS_Arr_C = %s WHERE rich_web_slider_ID = %s", $rw_slider_name, $rw_slider_type, $Rich_Web_Sl_FS_BgC, $Rich_Web_Sl_FS_AP, $Rich_Web_Sl_FS_TS, $Rich_Web_Sl_FS_PT, $Rich_Web_Sl_FS_SS, $Rich_Web_Sl_FS_SVis, $Rich_Web_Sl_FS_CS, $Rich_Web_Sl_FS_SLoop, $Rich_Web_Sl_FS_SSc, $Rich_Web_Sl_FS_SlPos, $Rich_Web_Sl_FS_ShNavBut, $Rich_Web_Sl_FS_I_W, $Rich_Web_Sl_FS_I_H, $Rich_Web_Sl_FS_I_BW, $Rich_Web_Sl_FS_I_BS, $Rich_Web_Sl_FS_I_BC, $Rich_Web_Sl_FS_I_BR, $Rich_Web_Sl_FS_I_BoxShShow, $Rich_Web_Sl_FS_I_BoxShType, $Rich_Web_Sl_FS_I_BoxSh, $Rich_Web_Sl_FS_I_BoxShC, $Rich_Web_Sl_FS_T_C, $Rich_Web_Sl_FS_T_FF, $Rich_Web_Sl_FS_Nav_Show, $Rich_Web_Sl_FS_Nav_W, $Rich_Web_Sl_FS_Nav_H, $Rich_Web_Sl_FS_Nav_BW, $Rich_Web_Sl_FS_Nav_BS, $Rich_Web_Sl_FS_Nav_BC, $Rich_Web_Sl_FS_Nav_BR, $Rich_Web_Sl_FS_Nav_PB, $Rich_Web_Sl_FS_Nav_CC, $Rich_Web_Sl_FS_Nav_HC, $Rich_Web_Sl_FS_Nav_C, $Rich_Web_Sl_FS_Arr_Show, $Rich_Web_Sl_FS_Arr_Type, $Rich_Web_Sl_FS_Arr_S, $Rich_Web_Sl_FS_Arr_C, $rw_slider_image_up_id));
				} else if($rw_slider_type=='Dynamic Slider') {
					$Rich_Web_Sl_DS_AP = sanitize_text_field($_POST['Rich_Web_Sl_DS_AP']);
					$Rich_Web_Sl_DS_AP = ($Rich_Web_Sl_DS_AP=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_DS_PT = sanitize_text_field($_POST['Rich_Web_Sl_DS_PT']);
					$Rich_Web_Sl_DS_Tr = sanitize_text_field($_POST['Rich_Web_Sl_DS_Tr']);
					$Rich_Web_Sl_DS_Tr = ($Rich_Web_Sl_DS_Tr=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_DS_H = sanitize_text_field($_POST['Rich_Web_Sl_DS_H']);
					$Rich_Web_Sl_DS_BW = sanitize_text_field($_POST['Rich_Web_Sl_DS_BW']);
					$Rich_Web_Sl_DS_BS = sanitize_text_field($_POST['Rich_Web_Sl_DS_BS']);
					$Rich_Web_Sl_DS_BC = sanitize_text_field($_POST['Rich_Web_Sl_DS_BC']);
					$Rich_Web_Sl_DS_TFS = sanitize_text_field($_POST['Rich_Web_Sl_DS_TFS']);
					$Rich_Web_Sl_DS_TFF = sanitize_text_field($_POST['Rich_Web_Sl_DS_TFF']);
					$Rich_Web_Sl_DS_TC = sanitize_text_field($_POST['Rich_Web_Sl_DS_TC']);
					$Rich_Web_Sl_DS_DFS = sanitize_text_field($_POST['Rich_Web_Sl_DS_DFS']);
					$Rich_Web_Sl_DS_DFS = ($Rich_Web_Sl_DS_DFS=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_DS_LFS = sanitize_text_field($_POST['Rich_Web_Sl_DS_LFS']);
					$Rich_Web_Sl_DS_LFF = sanitize_text_field($_POST['Rich_Web_Sl_DS_LFF']);
					$Rich_Web_Sl_DS_LC = sanitize_text_field($_POST['Rich_Web_Sl_DS_LC']);
					$Rich_Web_Sl_DS_LBgC = sanitize_text_field($_POST['Rich_Web_Sl_DS_LBgC']);
					$Rich_Web_Sl_DS_LBW = sanitize_text_field($_POST['Rich_Web_Sl_DS_LBW']);
					$Rich_Web_Sl_DS_LBS = sanitize_text_field($_POST['Rich_Web_Sl_DS_LBS']);
					$Rich_Web_Sl_DS_LBC = sanitize_text_field($_POST['Rich_Web_Sl_DS_LBC']);
					$Rich_Web_Sl_DS_LBR = sanitize_text_field($_POST['Rich_Web_Sl_DS_LBR']);
					$Rich_Web_Sl_DS_LHC = sanitize_text_field($_POST['Rich_Web_Sl_DS_LHC']);
					$Rich_Web_Sl_DS_LHBgC = sanitize_text_field($_POST['Rich_Web_Sl_DS_LHBgC']);
					$Rich_Web_Sl_DS_LT = sanitize_text_field($_POST['Rich_Web_Sl_DS_LT']);
					$Rich_Web_Sl_DS_Arr_Show = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_Show']);
					$Rich_Web_Sl_DS_Arr_Show = ($Rich_Web_Sl_DS_Arr_Show=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_DS_Arr_LT = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_LT']);
					$Rich_Web_Sl_DS_Arr_RT = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_RT']);
					$Rich_Web_Sl_DS_Arr_C = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_C']);
					$Rich_Web_Sl_DS_Arr_BgC = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_BgC']);
					$Rich_Web_Sl_DS_Arr_BW = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_BW']);
					$Rich_Web_Sl_DS_Arr_BS = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_BS']);
					$Rich_Web_Sl_DS_Arr_BC = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_BC']);
					$Rich_Web_Sl_DS_Arr_BR = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_BR']);
					$Rich_Web_Sl_DS_Arr_HC = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_HC']);
					$Rich_Web_Sl_DS_Arr_HBgC = sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_HBgC']);
					$Rich_Web_Sl_DS_Nav_W = sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_W']);
					$Rich_Web_Sl_DS_Nav_H = sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_H']);
					$Rich_Web_Sl_DS_Nav_PB = sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_PB']);
					$Rich_Web_Sl_DS_Nav_BW = sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_BW']);
					$Rich_Web_Sl_DS_Nav_BS = sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_BS']);
					$Rich_Web_Sl_DS_Nav_BC = sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_BC']);
					$Rich_Web_Sl_DS_Nav_BR = sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_BR']);
					$Rich_Web_Sl_DS_Nav_C = sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_C']);
					$Rich_Web_Sl_DS_Nav_HC = sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_HC']);
					$Rich_Web_Sl_DS_Nav_CC = sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_CC']);
					$Rich_Web_Sl_DS_DFF = $Rich_Web_Sl_DS_DC = "";
					$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_DYNAMIC." set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_Sl_DS_AP = %s, Rich_Web_Sl_DS_PT = %s, Rich_Web_Sl_DS_Tr = %s, Rich_Web_Sl_DS_H = %s, Rich_Web_Sl_DS_BW = %s, Rich_Web_Sl_DS_BS = %s, Rich_Web_Sl_DS_BC = %s, Rich_Web_Sl_DS_TFS = %s, Rich_Web_Sl_DS_TFF = %s, Rich_Web_Sl_DS_TC = %s, Rich_Web_Sl_DS_DFS = %s, Rich_Web_Sl_DS_DFF = %s, Rich_Web_Sl_DS_DC = %s, Rich_Web_Sl_DS_LFS = %s, Rich_Web_Sl_DS_LFF = %s, Rich_Web_Sl_DS_LC = %s, Rich_Web_Sl_DS_LBgC = %s, Rich_Web_Sl_DS_LBW = %s, Rich_Web_Sl_DS_LBS = %s, Rich_Web_Sl_DS_LBC = %s, Rich_Web_Sl_DS_LBR = %s, Rich_Web_Sl_DS_LHC = %s, Rich_Web_Sl_DS_LHBgC = %s, Rich_Web_Sl_DS_LT = %s, Rich_Web_Sl_DS_Arr_Show = %s, Rich_Web_Sl_DS_Arr_LT = %s, Rich_Web_Sl_DS_Arr_RT = %s, Rich_Web_Sl_DS_Arr_C = %s, Rich_Web_Sl_DS_Arr_BgC = %s, Rich_Web_Sl_DS_Arr_BW = %s, Rich_Web_Sl_DS_Arr_BS = %s, Rich_Web_Sl_DS_Arr_BC = %s, Rich_Web_Sl_DS_Arr_BR = %s, Rich_Web_Sl_DS_Arr_HC = %s, Rich_Web_Sl_DS_Arr_HBgC = %s, Rich_Web_Sl_DS_Nav_W = %s, Rich_Web_Sl_DS_Nav_H = %s, Rich_Web_Sl_DS_Nav_PB = %s, Rich_Web_Sl_DS_Nav_BW = %s, Rich_Web_Sl_DS_Nav_BS = %s, Rich_Web_Sl_DS_Nav_BC = %s, Rich_Web_Sl_DS_Nav_BR = %s, Rich_Web_Sl_DS_Nav_C = %s, Rich_Web_Sl_DS_Nav_HC = %s, Rich_Web_Sl_DS_Nav_CC = %s WHERE rich_web_slider_ID = %s", $rw_slider_name, $rw_slider_type, $Rich_Web_Sl_DS_AP, $Rich_Web_Sl_DS_PT, $Rich_Web_Sl_DS_Tr, $Rich_Web_Sl_DS_H, $Rich_Web_Sl_DS_BW, $Rich_Web_Sl_DS_BS, $Rich_Web_Sl_DS_BC, $Rich_Web_Sl_DS_TFS, $Rich_Web_Sl_DS_TFF, $Rich_Web_Sl_DS_TC, $Rich_Web_Sl_DS_DFS, $Rich_Web_Sl_DS_DFF, $Rich_Web_Sl_DS_DC, $Rich_Web_Sl_DS_LFS, $Rich_Web_Sl_DS_LFF, $Rich_Web_Sl_DS_LC, $Rich_Web_Sl_DS_LBgC, $Rich_Web_Sl_DS_LBW, $Rich_Web_Sl_DS_LBS, $Rich_Web_Sl_DS_LBC, $Rich_Web_Sl_DS_LBR, $Rich_Web_Sl_DS_LHC, $Rich_Web_Sl_DS_LHBgC, $Rich_Web_Sl_DS_LT, $Rich_Web_Sl_DS_Arr_Show, $Rich_Web_Sl_DS_Arr_LT, $Rich_Web_Sl_DS_Arr_RT, $Rich_Web_Sl_DS_Arr_C, $Rich_Web_Sl_DS_Arr_BgC, $Rich_Web_Sl_DS_Arr_BW, $Rich_Web_Sl_DS_Arr_BS, $Rich_Web_Sl_DS_Arr_BC, $Rich_Web_Sl_DS_Arr_BR, $Rich_Web_Sl_DS_Arr_HC, $Rich_Web_Sl_DS_Arr_HBgC, $Rich_Web_Sl_DS_Nav_W, $Rich_Web_Sl_DS_Nav_H, $Rich_Web_Sl_DS_Nav_PB, $Rich_Web_Sl_DS_Nav_BW, $Rich_Web_Sl_DS_Nav_BS, $Rich_Web_Sl_DS_Nav_BC, $Rich_Web_Sl_DS_Nav_BR, $Rich_Web_Sl_DS_Nav_C, $Rich_Web_Sl_DS_Nav_HC, $Rich_Web_Sl_DS_Nav_CC, $rw_slider_image_up_id));
				} else if($rw_slider_type=='Thumbnails Slider & Lightbox') {
					$Rich_Web_Sl_TSL_W = sanitize_text_field($_POST['Rich_Web_Sl_TSL_W']);
					$Rich_Web_Sl_TSL_H = sanitize_text_field($_POST['Rich_Web_Sl_TSL_H']);
					$Rich_Web_Sl_TSL_BW = sanitize_text_field($_POST['Rich_Web_Sl_TSL_BW']);
					$Rich_Web_Sl_TSL_BS = sanitize_text_field($_POST['Rich_Web_Sl_TSL_BS']);
					$Rich_Web_Sl_TSL_BC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_BC']);
					$Rich_Web_Sl_TSL_BR = sanitize_text_field($_POST['Rich_Web_Sl_TSL_BR']);
					$Rich_Web_Sl_TSL_BoxShType = sanitize_text_field($_POST['Rich_Web_Sl_TSL_BoxShType']);
					$Rich_Web_Sl_TSL_BoxShC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_BoxShC']);
					$Rich_Web_Sl_TSL_CM = sanitize_text_field($_POST['Rich_Web_Sl_TSL_CM']);
					$Rich_Web_Sl_TSL_TA = sanitize_text_field($_POST['Rich_Web_Sl_TSL_TA']);
					$Rich_Web_Sl_TSL_TA = ($Rich_Web_Sl_TSL_TA=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_TSL_AP = sanitize_text_field($_POST['Rich_Web_Sl_TSL_AP']);
					$Rich_Web_Sl_TSL_AP = ($Rich_Web_Sl_TSL_AP=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_TSL_PH = sanitize_text_field($_POST['Rich_Web_Sl_TSL_PH']);
					$Rich_Web_Sl_TSL_PH = ($Rich_Web_Sl_TSL_PH=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_TSL_Loop = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Loop']);
					$Rich_Web_Sl_TSL_Loop = ($Rich_Web_Sl_TSL_Loop=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_TSL_PT = sanitize_text_field($_POST['Rich_Web_Sl_TSL_PT']);
					$Rich_Web_Sl_TSL_CS = sanitize_text_field($_POST['Rich_Web_Sl_TSL_CS']);
					$Rich_Web_Sl_TSL_Nav_Show = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_Show']);
					$Rich_Web_Sl_TSL_Nav_Show = ($Rich_Web_Sl_TSL_Nav_Show=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_TSL_Nav_W = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_W']);
					$Rich_Web_Sl_TSL_Nav_H = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_H']);
					$Rich_Web_Sl_TSL_Nav_PB = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_PB']);
					$Rich_Web_Sl_TSL_Nav_BC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_BC']);
					$Rich_Web_Sl_TSL_Nav_BR = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_BR']);
					$Rich_Web_Sl_TSL_Nav_CBC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_CBC']);
					$Rich_Web_Sl_TSL_Nav_HBC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_HBC']);
					$Rich_Web_Sl_TSL_Nav_Pos = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_Pos']);
					$Rich_Web_Sl_TSL_SS_Show = sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_Show']);
					$Rich_Web_Sl_TSL_SS_Show = ($Rich_Web_Sl_TSL_SS_Show=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_TSL_SS_W = sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_W']);
					$Rich_Web_Sl_TSL_SS_H = sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_H']);
					$Rich_Web_Sl_TSL_SS_BC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_BC']);
					$Rich_Web_Sl_TSL_SS_BR = sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_BR']);
					$Rich_Web_Sl_TSL_SS_StC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_StC']);
					$Rich_Web_Sl_TSL_SS_SpC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_SpC']);
					$Rich_Web_Sl_TSL_Arr_Show = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Arr_Show']);
					$Rich_Web_Sl_TSL_Arr_Show = ($Rich_Web_Sl_TSL_Arr_Show=='on') ? 'true' : 'false'; 
					$Rich_Web_Sl_TSL_Arr_Type = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Arr_Type']);
					$Rich_Web_Sl_TSL_Arr_S = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Arr_S']);
					$Rich_Web_Sl_TSL_Arr_C = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Arr_C']);
					$Rich_Web_Sl_TSL_Pop_OvC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_OvC']);
					$Rich_Web_Sl_TSL_Pop_BW = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_BW']);
					$Rich_Web_Sl_TSL_Pop_BS = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_BS']);
					$Rich_Web_Sl_TSL_Pop_BC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_BC']);
					$Rich_Web_Sl_TSL_Pop_BR = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_BR']);
					$Rich_Web_Sl_TSL_Pop_BgC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_BgC']);
					$Rich_Web_Sl_TSL_TFS = sanitize_text_field($_POST['Rich_Web_Sl_TSL_TFS']);
					$Rich_Web_Sl_TSL_TFF = sanitize_text_field($_POST['Rich_Web_Sl_TSL_TFF']);
					$Rich_Web_Sl_TSL_TC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_TC']);
					$Rich_Web_Sl_TSL_Pop_ArrType = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_ArrType']);
					$Rich_Web_Sl_TSL_Pop_ArrS = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_ArrS']);
					$Rich_Web_Sl_TSL_Pop_ArrC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_ArrC']);
					$Rich_Web_Sl_TSL_CIT = sanitize_text_field($_POST['Rich_Web_Sl_TSL_CIT']);
					$Rich_Web_Sl_TSL_CIS = sanitize_text_field($_POST['Rich_Web_Sl_TSL_CIS']);
					$Rich_Web_Sl_TSL_CIC = sanitize_text_field($_POST['Rich_Web_Sl_TSL_CIC']);
					$Rich_Web_Sl_TSL_BoxShShow = $Rich_Web_Sl_TSL_BoxSh = "";
					$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_LIGHTBOX." set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_Sl_TSL_W = %s, Rich_Web_Sl_TSL_H = %s, Rich_Web_Sl_TSL_BW = %s, Rich_Web_Sl_TSL_BS = %s, Rich_Web_Sl_TSL_BC = %s, Rich_Web_Sl_TSL_BR = %s, Rich_Web_Sl_TSL_BoxShShow = %s, Rich_Web_Sl_TSL_BoxShType = %s, Rich_Web_Sl_TSL_BoxSh = %s, Rich_Web_Sl_TSL_BoxShC = %s, Rich_Web_Sl_TSL_CM = %s, Rich_Web_Sl_TSL_TA = %s, Rich_Web_Sl_TSL_AP = %s, Rich_Web_Sl_TSL_PH = %s, Rich_Web_Sl_TSL_Loop = %s, Rich_Web_Sl_TSL_PT = %s, Rich_Web_Sl_TSL_CS = %s, Rich_Web_Sl_TSL_Nav_Show = %s, Rich_Web_Sl_TSL_Nav_W = %s, Rich_Web_Sl_TSL_Nav_H = %s, Rich_Web_Sl_TSL_Nav_PB = %s, Rich_Web_Sl_TSL_Nav_BC = %s, Rich_Web_Sl_TSL_Nav_BR = %s, Rich_Web_Sl_TSL_Nav_CBC = %s, Rich_Web_Sl_TSL_Nav_HBC = %s, Rich_Web_Sl_TSL_Nav_Pos = %s, Rich_Web_Sl_TSL_SS_Show = %s, Rich_Web_Sl_TSL_SS_W = %s, Rich_Web_Sl_TSL_SS_H = %s, Rich_Web_Sl_TSL_SS_BC = %s, Rich_Web_Sl_TSL_SS_BR = %s, Rich_Web_Sl_TSL_SS_StC = %s, Rich_Web_Sl_TSL_SS_SpC = %s, Rich_Web_Sl_TSL_Arr_Show = %s, Rich_Web_Sl_TSL_Arr_Type = %s, Rich_Web_Sl_TSL_Arr_S = %s, Rich_Web_Sl_TSL_Arr_C = %s, Rich_Web_Sl_TSL_Pop_OvC = %s, Rich_Web_Sl_TSL_Pop_BW = %s, Rich_Web_Sl_TSL_Pop_BS = %s, Rich_Web_Sl_TSL_Pop_BC = %s, Rich_Web_Sl_TSL_Pop_BR = %s, Rich_Web_Sl_TSL_Pop_BgC = %s, Rich_Web_Sl_TSL_TFS = %s, Rich_Web_Sl_TSL_TFF = %s, Rich_Web_Sl_TSL_TC = %s, Rich_Web_Sl_TSL_Pop_ArrType = %s, Rich_Web_Sl_TSL_Pop_ArrS = %s, Rich_Web_Sl_TSL_Pop_ArrC = %s, Rich_Web_Sl_TSL_CIT = %s, Rich_Web_Sl_TSL_CIS = %s, Rich_Web_Sl_TSL_CIC = %s WHERE rich_web_slider_ID = %s", $rw_slider_name, $rw_slider_type, $Rich_Web_Sl_TSL_W, $Rich_Web_Sl_TSL_H, $Rich_Web_Sl_TSL_BW, $Rich_Web_Sl_TSL_BS, $Rich_Web_Sl_TSL_BC, $Rich_Web_Sl_TSL_BR, $Rich_Web_Sl_TSL_BoxShShow, $Rich_Web_Sl_TSL_BoxShType, $Rich_Web_Sl_TSL_BoxSh, $Rich_Web_Sl_TSL_BoxShC, $Rich_Web_Sl_TSL_CM, $Rich_Web_Sl_TSL_TA, $Rich_Web_Sl_TSL_AP, $Rich_Web_Sl_TSL_PH, $Rich_Web_Sl_TSL_Loop, $Rich_Web_Sl_TSL_PT, $Rich_Web_Sl_TSL_CS, $Rich_Web_Sl_TSL_Nav_Show, $Rich_Web_Sl_TSL_Nav_W, $Rich_Web_Sl_TSL_Nav_H, $Rich_Web_Sl_TSL_Nav_PB, $Rich_Web_Sl_TSL_Nav_BC, $Rich_Web_Sl_TSL_Nav_BR, $Rich_Web_Sl_TSL_Nav_CBC, $Rich_Web_Sl_TSL_Nav_HBC, $Rich_Web_Sl_TSL_Nav_Pos, $Rich_Web_Sl_TSL_SS_Show, $Rich_Web_Sl_TSL_SS_W, $Rich_Web_Sl_TSL_SS_H, $Rich_Web_Sl_TSL_SS_BC, $Rich_Web_Sl_TSL_SS_BR, $Rich_Web_Sl_TSL_SS_StC, $Rich_Web_Sl_TSL_SS_SpC, $Rich_Web_Sl_TSL_Arr_Show, $Rich_Web_Sl_TSL_Arr_Type, $Rich_Web_Sl_TSL_Arr_S, $Rich_Web_Sl_TSL_Arr_C, $Rich_Web_Sl_TSL_Pop_OvC, $Rich_Web_Sl_TSL_Pop_BW, $Rich_Web_Sl_TSL_Pop_BS, $Rich_Web_Sl_TSL_Pop_BC, $Rich_Web_Sl_TSL_Pop_BR, $Rich_Web_Sl_TSL_Pop_BgC, $Rich_Web_Sl_TSL_TFS, $Rich_Web_Sl_TSL_TFF, $Rich_Web_Sl_TSL_TC, $Rich_Web_Sl_TSL_Pop_ArrType, $Rich_Web_Sl_TSL_Pop_ArrS, $Rich_Web_Sl_TSL_Pop_ArrC, $Rich_Web_Sl_TSL_CIT, $Rich_Web_Sl_TSL_CIS, $Rich_Web_Sl_TSL_CIC, $rw_slider_image_up_id));
				} else if($rw_slider_type=='Accordion Slider') {
					$Rich_Web_AcSL_W = sanitize_text_field($_POST['Rich_Web_AcSL_W']);
					$Rich_Web_AcSL_H = sanitize_text_field($_POST['Rich_Web_AcSL_H']);
					$Rich_Web_AcSL_BW = sanitize_text_field($_POST['Rich_Web_AcSL_BW']);
					$Rich_Web_AcSL_BS = sanitize_text_field($_POST['Rich_Web_AcSL_BS']);
					$Rich_Web_AcSL_BC = sanitize_text_field($_POST['Rich_Web_AcSL_BC']);
					$Rich_Web_AcSL_BSh = sanitize_text_field($_POST['Rich_Web_AcSL_BSh']);
					$Rich_Web_AcSL_BShC = sanitize_text_field($_POST['Rich_Web_AcSL_BShC']);
					$Rich_Web_AcSL_Img_W = sanitize_text_field($_POST['Rich_Web_AcSL_Img_W']);
					$Rich_Web_AcSL_Img_BSh = sanitize_text_field($_POST['Rich_Web_AcSL_Img_BSh']);
					$Rich_Web_AcSL_Img_BShC = sanitize_text_field($_POST['Rich_Web_AcSL_Img_BShC']);
					$Rich_Web_AcSL_Title_FS = sanitize_text_field($_POST['Rich_Web_AcSL_Title_FS']);
					$Rich_Web_AcSL_Title_FF = sanitize_text_field($_POST['Rich_Web_AcSL_Title_FF']);
					$Rich_Web_AcSL_Title_C = sanitize_text_field($_POST['Rich_Web_AcSL_Title_C']);
					$Rich_Web_AcSL_Title_TSh = sanitize_text_field($_POST['Rich_Web_AcSL_Title_TSh']);
					$Rich_Web_AcSL_Title_TShC = sanitize_text_field($_POST['Rich_Web_AcSL_Title_TShC']);
					$Rich_Web_AcSL_Title_BgC = sanitize_text_field($_POST['Rich_Web_AcSL_Title_BgC']);
					$Rich_Web_AcSL_Link_FS = sanitize_text_field($_POST['Rich_Web_AcSL_Link_FS']);
					$Rich_Web_AcSL_Link_FF = sanitize_text_field($_POST['Rich_Web_AcSL_Link_FF']);
					$Rich_Web_AcSL_Link_C = sanitize_text_field($_POST['Rich_Web_AcSL_Link_C']);
					$Rich_Web_AcSL_Link_BgC = sanitize_text_field($_POST['Rich_Web_AcSL_Link_BgC']);
					$Rich_Web_AcSL_Link_Text = sanitize_text_field($_POST['Rich_Web_AcSL_Link_Text']);
					$Rich_Web_AcSL_Link_TSh = $Rich_Web_AcSL_Link_TShC = "";
					$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_ACCORDION." set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_AcSL_W = %s, Rich_Web_AcSL_H = %s, Rich_Web_AcSL_BW = %s, Rich_Web_AcSL_BS = %s, Rich_Web_AcSL_BC = %s, Rich_Web_AcSL_BSh = %s, Rich_Web_AcSL_BShC = %s, Rich_Web_AcSL_Img_W = %s, Rich_Web_AcSL_Img_BSh = %s, Rich_Web_AcSL_Img_BShC = %s, Rich_Web_AcSL_Title_FS = %s, Rich_Web_AcSL_Title_FF = %s, Rich_Web_AcSL_Title_C = %s, Rich_Web_AcSL_Title_TSh = %s, Rich_Web_AcSL_Title_TShC = %s, Rich_Web_AcSL_Title_BgC = %s, Rich_Web_AcSL_Link_FS = %s, Rich_Web_AcSL_Link_FF = %s, Rich_Web_AcSL_Link_C = %s, Rich_Web_AcSL_Link_TSh = %s, Rich_Web_AcSL_Link_TShC = %s, Rich_Web_AcSL_Link_BgC = %s, Rich_Web_AcSL_Link_Text = %s WHERE rich_web_slider_ID = %s", $rw_slider_name, $rw_slider_type, $Rich_Web_AcSL_W, $Rich_Web_AcSL_H, $Rich_Web_AcSL_BW, $Rich_Web_AcSL_BS, $Rich_Web_AcSL_BC, $Rich_Web_AcSL_BSh, $Rich_Web_AcSL_BShC, $Rich_Web_AcSL_Img_W, $Rich_Web_AcSL_Img_BSh, $Rich_Web_AcSL_Img_BShC, $Rich_Web_AcSL_Title_FS, $Rich_Web_AcSL_Title_FF, $Rich_Web_AcSL_Title_C, $Rich_Web_AcSL_Title_TSh, $Rich_Web_AcSL_Title_TShC, $Rich_Web_AcSL_Title_BgC, $Rich_Web_AcSL_Link_FS, $Rich_Web_AcSL_Link_FF, $Rich_Web_AcSL_Link_C, $Rich_Web_AcSL_Link_TSh, $Rich_Web_AcSL_Link_TShC, $Rich_Web_AcSL_Link_BgC, $Rich_Web_AcSL_Link_Text, $rw_slider_image_up_id));
				} else if($rw_slider_type=='Animation Slider') {
					$Rich_Web_AnSL_W = sanitize_text_field($_POST['Rich_Web_AnSL_W']);
					$Rich_Web_AnSL_H = sanitize_text_field($_POST['Rich_Web_AnSL_H']);
					$Rich_Web_AnSL_BW = sanitize_text_field($_POST['Rich_Web_AnSL_BW']);
					$Rich_Web_AnSL_BS = sanitize_text_field($_POST['Rich_Web_AnSL_BS']);
					$Rich_Web_AnSL_BC = sanitize_text_field($_POST['Rich_Web_AnSL_BC']);
					$Rich_Web_AnSL_BR = sanitize_text_field($_POST['Rich_Web_AnSL_BR']);
					$Rich_Web_AnSL_ShC = sanitize_text_field($_POST['Rich_Web_AnSL_ShC']);
					$Rich_Web_AnSL_ET = sanitize_text_field($_POST['Rich_Web_AnSL_ET']);
					$Rich_Web_AnSL_SSh = sanitize_text_field($_POST['Rich_Web_AnSL_SSh']);
					$Rich_Web_AnSL_SSh = ($Rich_Web_AnSL_SSh=='on') ? 'true' : 'false'; 
					$Rich_Web_AnSL_SShChT = sanitize_text_field($_POST['Rich_Web_AnSL_SShChT']);
					$Rich_Web_AnSL_T_FS = sanitize_text_field($_POST['Rich_Web_AnSL_T_FS']);
					$Rich_Web_AnSL_T_FF = sanitize_text_field($_POST['Rich_Web_AnSL_T_FF']);
					$Rich_Web_AnSL_T_C = sanitize_text_field($_POST['Rich_Web_AnSL_T_C']);
					$Rich_Web_AnSL_T_BgC = sanitize_text_field($_POST['Rich_Web_AnSL_T_BgC']);
					$Rich_Web_AnSL_T_TA = sanitize_text_field($_POST['Rich_Web_AnSL_T_TA']);
					$Rich_Web_AnSL_T_Sh = sanitize_text_field($_POST['Rich_Web_AnSL_T_Sh']);
					$Rich_Web_AnSL_T_ShC = sanitize_text_field($_POST['Rich_Web_AnSL_T_ShC']);
					$Rich_Web_AnSL_N_Sh = sanitize_text_field($_POST['Rich_Web_AnSL_N_Sh']);
					$Rich_Web_AnSL_N_Sh = ($Rich_Web_AnSL_N_Sh=='on') ? 'true' : 'false';
					$Rich_Web_AnSL_N_S = sanitize_text_field($_POST['Rich_Web_AnSL_N_S']);
					$Rich_Web_AnSL_N_BW = sanitize_text_field($_POST['Rich_Web_AnSL_N_BW']);
					$Rich_Web_AnSL_N_BC = sanitize_text_field($_POST['Rich_Web_AnSL_N_BC']);
					$Rich_Web_AnSL_N_BgC = sanitize_text_field($_POST['Rich_Web_AnSL_N_BgC']);
					$Rich_Web_AnSL_N_BS = sanitize_text_field($_POST['Rich_Web_AnSL_N_BS']);
					$Rich_Web_AnSL_N_HBgC = sanitize_text_field($_POST['Rich_Web_AnSL_N_HBgC']);
					$Rich_Web_AnSL_N_CC = sanitize_text_field($_POST['Rich_Web_AnSL_N_CC']);
					$Rich_Web_AnSL_N_M = sanitize_text_field($_POST['Rich_Web_AnSL_N_M']);
					$Rich_Web_AnSL_Ic_T = sanitize_text_field($_POST['Rich_Web_AnSL_Ic_T']);
					$Rich_Web_AnSL_Ic_S = sanitize_text_field($_POST['Rich_Web_AnSL_Ic_S']);
					$Rich_Web_AnSL_Ic_C = sanitize_text_field($_POST['Rich_Web_AnSL_Ic_C']);
					$Rich_Web_AnSL_BSh = $Rich_Web_AnSL_Ic_Sh = $Rich_Web_AnSL_L_BgC = $Rich_Web_AnSL_L_T = $Rich_Web_AnSL_L_FS = $Rich_Web_AnSL_L_FF = $Rich_Web_AnSL_L_C = $Rich_Web_AnSL_L1_T = $Rich_Web_AnSL_L2_T = $Rich_Web_AnSL_L3_T = "";
					$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_ANIMATION." set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_AnSL_W = %s, Rich_Web_AnSL_H = %s, Rich_Web_AnSL_BW = %s, Rich_Web_AnSL_BS = %s, Rich_Web_AnSL_BC = %s, Rich_Web_AnSL_BR = %s, Rich_Web_AnSL_BSh = %s, Rich_Web_AnSL_ShC = %s, Rich_Web_AnSL_ET = %s, Rich_Web_AnSL_SSh = %s, Rich_Web_AnSL_SShChT = %s, Rich_Web_AnSL_T_FS = %s, Rich_Web_AnSL_T_FF = %s, Rich_Web_AnSL_T_C = %s, Rich_Web_AnSL_T_BgC = %s, Rich_Web_AnSL_T_TA = %s, Rich_Web_AnSL_T_Sh = %s, Rich_Web_AnSL_T_ShC = %s, Rich_Web_AnSL_N_Sh = %s, Rich_Web_AnSL_N_S = %s, Rich_Web_AnSL_N_BW = %s, Rich_Web_AnSL_N_BC = %s, Rich_Web_AnSL_N_BgC = %s, Rich_Web_AnSL_N_BS = %s, Rich_Web_AnSL_N_HBgC = %s, Rich_Web_AnSL_N_CC = %s, Rich_Web_AnSL_N_M = %s, Rich_Web_AnSL_Ic_Sh = %s, Rich_Web_AnSL_Ic_T = %s, Rich_Web_AnSL_Ic_S = %s, Rich_Web_AnSL_Ic_C = %s, Rich_Web_AnSL_L_BgC = %s, Rich_Web_AnSL_L_T = %s, Rich_Web_AnSL_L_FS = %s, Rich_Web_AnSL_L_FF = %s, Rich_Web_AnSL_L_C = %s, Rich_Web_AnSL_L1_T = %s, Rich_Web_AnSL_L2_T = %s, Rich_Web_AnSL_L3_T = %s WHERE rich_web_slider_ID = %s", $rw_slider_name, $rw_slider_type, $Rich_Web_AnSL_W, $Rich_Web_AnSL_H, $Rich_Web_AnSL_BW, $Rich_Web_AnSL_BS, $Rich_Web_AnSL_BC, $Rich_Web_AnSL_BR, $Rich_Web_AnSL_BSh, $Rich_Web_AnSL_ShC, $Rich_Web_AnSL_ET, $Rich_Web_AnSL_SSh, $Rich_Web_AnSL_SShChT, $Rich_Web_AnSL_T_FS, $Rich_Web_AnSL_T_FF, $Rich_Web_AnSL_T_C, $Rich_Web_AnSL_T_BgC, $Rich_Web_AnSL_T_TA, $Rich_Web_AnSL_T_Sh, $Rich_Web_AnSL_T_ShC, $Rich_Web_AnSL_N_Sh, $Rich_Web_AnSL_N_S, $Rich_Web_AnSL_N_BW, $Rich_Web_AnSL_N_BC, $Rich_Web_AnSL_N_BgC, $Rich_Web_AnSL_N_BS, $Rich_Web_AnSL_N_HBgC, $Rich_Web_AnSL_N_CC, $Rich_Web_AnSL_N_M, $Rich_Web_AnSL_Ic_Sh, $Rich_Web_AnSL_Ic_T, $Rich_Web_AnSL_Ic_S, $Rich_Web_AnSL_Ic_C, $Rich_Web_AnSL_L_BgC, $Rich_Web_AnSL_L_T, $Rich_Web_AnSL_L_FS, $Rich_Web_AnSL_L_FF, $Rich_Web_AnSL_L_C, $Rich_Web_AnSL_L1_T, $Rich_Web_AnSL_L2_T, $Rich_Web_AnSL_L3_T, $rw_slider_image_up_id));
				}else{
					wp_die('Theme is not defined.'); 
				}
			}
		} else {
			wp_die('Security check fail'); 
		}
	}
	$rw_slider_image_font_families = array("Abadi MT Condensed Light", "ABeeZee", "Abel", "Abhaya Libre", "Abril Fatface", "Aclonica", "Acme", "Actor", "Adamina", "Advent Pro", "Aguafina Script", "Aharoni", "Akronim", "Aladin", "Aldhabi", "Aldrich", "Alef", "Alegreya", "Alegreya Sans", "Alegreya Sans SC", "Alegreya SC", "Alex Brush", "Alfa Slab One", "Alice", "Alike", "Alike Angular", "Allan", "Allerta", "Allerta Stencil", "Allura", "Almendra", "Almendra Display", "Almendra SC", "Amarante", "Amaranth", "Amatic SC", "Amethysta", "Amiko", "Amiri", "Amita", "Anaheim", "Andada", "Andalus", "Andika", "Angkor", "Angsana New", "AngsanaUPC", "Annie Use Your Telescope", "Anonymous Pro", "Antic", "Antic Didone", "Antic Slab", "Anton", "Aparajita", "Arabic Typesetting", "Arapey", "Arbutus", "Arbutus Slab", "Architects Daughter", "Archivo", "Archivo Black", "Archivo Narrow", "Aref Ruqaa", "Arial", "Arial Black", "Arimo", "Arima Madurai", "Arizonia", "Armata", "Arsenal", "Artifika", "Arvo", "Arya", "Asap", "Asap Condensed", "Asar", "Asset", "Assistant", "Astloch", "Asul", "Athiti", "Atma", "Atomic Age", "Aubrey", "Audiowide", "Autour One", "Average", "Average Sans", "Averia Gruesa Libre", "Averia Libre", "Averia Sans Libre", "Averia Serif Libre", "Bad Script", "Bahiana", "Baloo", "Balthazar", "Bangers", "Barlow", "Barlow Condensed", "Barlow Semi Condensed", "Barrio", "Basic", "Batang", "BatangChe", "Battambang", "Baumans", "Bayon", "Belgrano", "Bellefair", "Belleza", "BenchNine", "Bentham", "Berkshire Swash", "Bevan", "Bigelow Rules", "Bigshot One", "Bilbo", "Bilbo Swash Caps", "BioRhyme", "BioRhyme Expanded", "Biryani", "Bitter", "Black And White Picture", "Black Han Sans", "Black Ops One", "Bokor", "Bonbon", "Boogaloo", "Bowlby One", "Bowlby One SC", "Brawler", "Bree Serif", "Browallia New", "BrowalliaUPC", "Bubbler One", "Bubblegum Sans", "Buda", "Buenard", "Bungee", "Bungee Hairline", "Bungee Inline", "Bungee Outline", "Bungee Shade", "Butcherman", "Butterfly Kids", "Cabin", "Cabin Condensed", "Cabin Sketch", "Caesar Dressing", "Cagliostro", "Cairo", "Calibri", "Calibri Light", "Calisto MT", "Calligraffitti", "Cambay", "Cambo", "Cambria", "Candal", "Candara", "Cantarell", "Cantata One", "Cantora One", "Capriola", "Cardo", "Carme", "Carrois Gothic", "Carrois Gothic SC", "Carter One", "Catamaran", "Caudex", "Caveat", "Caveat Brush", "Cedarville Cursive", "Century Gothic", "Ceviche One", "Changa", "Changa One", "Chango", "Chathura", "Chau Philomene One", "Chela One", "Chelsea Market", "Chenla", "Cherry Cream Soda", "Cherry Swash", "Chewy", "Chicle", "Chivo", "Chonburi", "Cinzel", "Cinzel Decorative", "Clicker Script", "Coda", "Coda Caption", "Codystar", "Coiny", "Combo", "Comic Sans MS", "Coming Soon", "Comfortaa", "Concert One", "Condiment", "Consolas", "Constantia", "Content", "Contrail One", "Convergence", "Cookie", "Copperplate Gothic", "Copperplate Gothic Light", "Copse", "Corbel", "Corben", "Cordia New", "CordiaUPC", "Cormorant", "Cormorant Garamond", "Cormorant Infant", "Cormorant SC", "Cormorant Unicase", "Cormorant Upright", "Courgette", "Courier New", "Cousine", "Coustard", "Covered By Your Grace", "Crafty Girls", "Creepster", "Crete Round", "Crimson Text", "Croissant One", "Crushed", "Cuprum", "Cute Font", "Cutive", "Cutive Mono", "Damion", "Dancing Script", "Dangrek", "DaunPenh", "David", "David Libre", "Dawning of a New Day", "Days One", "Delius", "Delius Swash Caps", "Delius Unicase", "Della Respira", "Denk One", "Devonshire", "DFKai-SB", "Dhurjati", "Didact Gothic", "DilleniaUPC", "Diplomata", "Diplomata SC", "Do Hyeon", "DokChampa", "Dokdo", "Domine", "Donegal One", "Doppio One", "Dorsa", "Dosis", "Dotum", "DotumChe", "Dr Sugiyama", "Duru Sans", "Dynalight", "Eagle Lake", "East Sea Dokdo", "Eater", "EB Garamond", "Ebrima", "Economica", "Eczar", "El Messiri", "Electrolize", "Elsie", "Elsie Swash Caps", "Emblema One", "Emilys Candy", "Encode Sans", "Encode Sans Condensed", "Encode Sans Expanded", "Encode Sans Semi Condensed", "Encode Sans Semi Expanded", "Engagement", "Englebert", "Enriqueta", "Erica One", "Esteban", "Estrangelo Edessa", "EucrosiaUPC", "Euphemia", "Euphoria Script", "Ewert", "Exo", "Expletus Sans", "FangSong", "Fanwood Text", "Farsan", "Fascinate", "Fascinate Inline", "Faster One", "Fasthand", "Fauna One", "Faustina", "Federant", "Federo", "Felipa", "Fenix", "Finger Paint", "Fira Mono", "Fira Sans", "Fira Sans Condensed", "Fira Sans Extra Condensed", "Fjalla One", "Fjord One", "Flamenco", "Flavors", "Fondamento", "Fontdiner Swanky", "Forum", "Francois One", "Frank Ruhl Libre", "Franklin Gothic Medium", "FrankRuehl", "Freckle Face", "Fredericka the Great", "Fredoka One", "Freehand", "FreesiaUPC", "Fresca", "Frijole", "Fruktur", "Fugaz One", "Gabriela", "Gabriola", "Gadugi", "Gaegu", "Gafata", "Galada", "Galdeano", "Galindo", "Gamja Flower", "Gautami", "Gentium Basic", "Gentium Book Basic", "Geo", "Georgia", "Geostar", "Geostar Fill", "Germania One", "GFS Didot", "GFS Neohellenic", "Gidugu", "Gilda Display", "Gisha", "Give You Glory", "Glass Antiqua", "Glegoo", "Gloria Hallelujah", "Goblin One", "Gochi Hand", "Gorditas", "Gothic A1", "Graduate", "Grand Hotel", "Gravitas One", "Great Vibes", "Griffy", "Gruppo", "Gudea", "Gugi", "Gulim", "GulimChe", "Gungsuh", "GungsuhChe", "Gurajada", "Habibi", "Halant", "Hammersmith One", "Hanalei", "Hanalei Fill", "Handlee", "Hanuman", "Happy Monkey", "Harmattan", "Headland One", "Heebo", "Henny Penny", "Herr Von Muellerhoff", "Hi Melody", "Hind", "Holtwood One SC", "Homemade Apple", "Homenaje", "IBM Plex Mono", "IBM Plex Sans", "IBM Plex Sans Condensed", "IBM Plex Serif", "Iceberg", "Iceland", "IM Fell Double Pica", "IM Fell Double Pica SC", "IM Fell DW Pica", "IM Fell DW Pica SC", "IM Fell English", "IM Fell English SC", "IM Fell French Canon", "IM Fell French Canon SC", "IM Fell Great Primer", "IM Fell Great Primer SC", "Impact", "Imprima", "Inconsolata", "Inder", "Indie Flower", "Inika", "Irish Grover", "IrisUPC", "Istok Web", "Iskoola Pota", "Italiana", "Italianno", "Itim", "Jacques Francois", "Jacques Francois Shadow", "Jaldi", "JasmineUPC", "Jim Nightshade", "Jockey One", "Jolly Lodger", "Jomhuria", "Josefin Sans", "Josefin Slab", "Joti One", "Jua", "Judson", "Julee", "Julius Sans One", "Junge", "Jura", "Just Another Hand", "Just Me Again Down Here", "Kadwa", "KaiTi", "Kalam", "Kalinga", "Kameron", "Kanit", "Kantumruy", "Karla", "Karma", "Kartika", "Katibeh", "Kaushan Script", "Kavivanar", "Kavoon", "Kdam Thmor", "Keania One", "Kelly Slab", "Kenia", "Khand", "Khmer", "Khmer UI", "Khula", "Kirang Haerang", "Kite One", "Knewave", "KodchiangUPC", "Kokila", "Kotta One", "Koulen", "Kranky", "Kreon", "Kristi", "Krona One", "Kurale", "La Belle Aurore", "Laila", "Lakki Reddy", "Lalezar", "Lancelot", "Lao UI", "Lateef", "Latha", "Lato", "League Script", "Leckerli One", "Ledger", "Leelawadee", "Lekton", "Lemon", "Lemonada", "Levenim MT", "Libre Baskerville", "Libre Franklin", "Life Savers", "Lilita One", "Lily Script One", "LilyUPC", "Limelight", "Linden Hill", "Lobster", "Lobster Two", "Londrina Outline", "Londrina Shadow", "Londrina Sketch", "Londrina Solid", "Lora", "Love Ya Like A Sister", "Loved by the King", "Lovers Quarrel", "Lucida Console", "Lucida Handwriting Italic", "Lucida Sans Unicode", "Luckiest Guy", "Lusitana", "Lustria", "Macondo", "Macondo Swash Caps", "Mada", "Magra", "Maiden Orange", "Maitree", "Mako", "Malgun Gothic", "Mallanna", "Mandali", "Mangal", "Manny ITC", "Manuale", "Marcellus", "Marcellus SC", "Marck Script", "Margarine", "Marko One", "Marlett", "Marmelad", "Martel", "Martel Sans", "Marvel", "Mate", "Mate SC", "Maven Pro", "McLaren", "Meddon", "MedievalSharp", "Medula One", "Meera Inimai", "Megrim", "Meie Script", "Meiryo", "Meiryo UI", "Merienda", "Merienda One", "Merriweather", "Merriweather Sans", "Metal", "Metal Mania", "Metamorphous", "Metrophobic", "Michroma", "Microsoft Himalaya", "Microsoft JhengHei", "Microsoft JhengHei UI", "Microsoft New Tai Lue", "Microsoft PhagsPa", "Microsoft Sans Serif", "Microsoft Tai Le", "Microsoft Uighur", "Microsoft YaHei", "Microsoft YaHei UI", "Microsoft Yi Baiti", "Milonga", "Miltonian", "Miltonian Tattoo", "Mina", "MingLiU_HKSCS", "MingLiU_HKSCS-ExtB", "Miniver", "Miriam", "Miriam Libre", "Mirza", "Miss Fajardose", "Mitr", "Modak", "Modern Antiqua", "Mogra", "Molengo", "Molle", "Monda", "Mongolian Baiti", "Monofett", "Monoton", "Monsieur La Doulaise", "Montaga", "Montez", "Montserrat", "Montserrat Alternates", "Montserrat Subrayada", "MoolBoran", "Moul", "Moulpali", "Mountains of Christmas", "Mouse Memoirs", "Mr Bedfort", "Mr Dafoe", "Mr De Haviland", "Mrs Saint Delafield", "Mrs Sheppards", "MS UI Gothic", "Mukta", "Muli", "MV Boli", "Myanmar Text", "Mystery Quest", "Nanum Brush Script", "Nanum Gothic", "Nanum Gothic Coding", "Nanum Myeongjo", "Nanum Pen Script", "Narkisim", "Neucha", "Neuton", "New Rocker", "News Cycle", "News Gothic MT", "Niconne", "Nirmala UI", "Nixie One", "Nobile", "Nokora", "Norican", "Nosifer", "Nothing You Could Do", "Noticia Text", "Noto Sans", "Noto Serif", "Nova Cut", "Nova Flat", "Nova Mono", "Nova Oval", "Nova Round", "Nova Script", "Nova Slim", "Nova Square", "NSimSun", "NTR", "Numans", "Nunito", "Nunito Sans", "Nyala", "Odor Mean Chey", "Offside", "Old Standard TT", "Oldenburg", "Oleo Script", "Oleo Script Swash Caps", "Open Sans", "Open Sans Condensed", "Oranienbaum", "Orbitron", "Oregano", "Orienta", "Original Surfer", "Oswald", "Over the Rainbow", "Overlock", "Overlock SC", "Overpass", "Overpass Mono", "Ovo", "Oxygen", "Oxygen Mono", "Pacifico", "Padauk", "Palanquin", "Palanquin Dark", "Palatino Linotype", "Pangolin", "Paprika", "Parisienne", "Passero One", "Passion One", "Pathway Gothic One", "Patrick Hand", "Patrick Hand SC", "Pattaya", "Patua One", "Pavanam", "Paytone One", "Peddana", "Peralta", "Permanent Marker", "Petit Formal Script", "Petrona", "Philosopher", "Piedra", "Pinyon Script", "Pirata One", "Plantagenet Cherokee", "Plaster", "Play", "Playball", "Playfair Display", "Playfair Display SC", "Podkova", "Poiret One", "Poller One", "Poly", "Pompiere", "Pontano Sans", "Poor Story", "Poppins", "Port Lligat Sans", "Port Lligat Slab", "Pragati Narrow", "Prata", "Preahvihear", "Pridi", "Princess Sofia", "Prociono", "Prompt", "Prosto One", "Proza Libre", "PT Mono", "PT Sans", "PT Sans Caption", "PT Sans Narrow", "PT Serif", "PT Serif Caption", "Puritan", "Purple Purse", "Quando", "Quantico", "Quattrocento", "Quattrocento Sans", "Questrial", "Quicksand", "Quintessential", "Qwigley", "Raavi", "Racing Sans One", "Radley", "Rajdhani", "Rakkas", "Raleway", "Raleway Dots", "Ramabhadra", "Ramaraja", "Rambla", "Rammetto One", "Ranchers", "Rancho", "Ranga", "Rasa", "Rationale", "Ravi Prakash", "Redressed", "Reem Kufi", "Reenie Beanie", "Revalia", "Rhodium Libre", "Ribeye", "Ribeye Marrow", "Righteous", "Risque", "Roboto", "Roboto Condensed", "Roboto Mono", "Roboto Slab", "Rochester", "Rock Salt", "Rod", "Rokkitt", "Romanesco", "Ropa Sans", "Rosario", "Rosarivo", "Rouge Script", "Rozha One", "Rubik", "Rubik Mono One", "Ruda", "Rufina", "Ruge Boogie", "Ruluko", "Rum Raisin", "Ruslan Display", "Russo One", "Ruthie", "Rye", "Sacramento", "Sahitya", "Sail", "Saira", "Saira Condensed", "Saira Extra Condensed", "Saira Semi Condensed", "Sakkal Majalla", "Salsa", "Sanchez", "Sancreek", "Sansita", "Sarala", "Sarina", "Sarpanch", "Satisfy", "Scada", "Scheherazade", "Schoolbell", "Scope One", "Seaweed Script", "Secular One", "Sedgwick Ave", "Sedgwick Ave Display", "Segoe Print", "Segoe Script", "Segoe UI Symbol", "Sevillana", "Seymour One", "Shadows Into Light", "Shadows Into Light Two", "Shanti", "Share", "Share Tech", "Share Tech Mono", "Shojumaru", "Shonar Bangla", "Short Stack", "Shrikhand", "Shruti", "Siemreap", "Sigmar One", "Signika", "Signika Negative", "SimHei", "SimKai", "Simonetta", "Simplified Arabic", "SimSun", "SimSun-ExtB", "Sintony", "Sirin Stencil", "Six Caps", "Skranji", "Slackey", "Smokum", "Smythe", "Sniglet", "Snippet", "Snowburst One", "Sofadi One", "Sofia", "Song Myung", "Sonsie One", "Sorts Mill Goudy", "Source Code Pro", "Source Sans Pro", "Source Serif Pro", "Space Mono", "Special Elite", "Spectral", "Spectral SC", "Spicy Rice", "Spinnaker", "Spirax", "Squada One", "Sree Krushnadevaraya", "Sriracha", "Stalemate", "Stalinist One", "Stardos Stencil", "Stint Ultra Condensed", "Stint Ultra Expanded", "Stoke", "Strait", "Stylish", "Sue Ellen Francisco", "Suez One", "Sumana", "Sunflower", "Sunshiney", "Supermercado One", "Sura", "Suranna", "Suravaram", "Suwannaphum", "Swanky and Moo Moo", "Sylfaen", "Syncopate", "Tahoma", "Tajawal", "Tangerine", "Taprom", "Tauri", "Taviraj", "Teko", "Telex", "Tenali Ramakrishna", "Tenor Sans", "Text Me One", "The Girl Next Door", "Tienne", "Tillana", "Times New Roman", "Timmana", "Tinos", "Titan One", "Titillium Web", "Trade Winds", "Traditional Arabic", "Trebuchet MS", "Trirong", "Trocchi", "Trochut", "Trykker", "Tulpen One", "Tunga", "Ubuntu", "Ubuntu Condensed", "Ubuntu Mono", "Ultra", "Uncial Antiqua", "Underdog", "Unica One", "UnifrakturCook", "UnifrakturMaguntia", "Unkempt", "Unlock", "Unna", "Utsaah", "Vampiro One", "Vani", "Varela", "Varela Round", "Vast Shadow", "Vesper Libre", "Vibur", "Vidaloka", "Viga", "Vijaya", "Voces", "Volkhov", "Vollkorn", "Vollkorn SC", "Voltaire", "VT323", "Waiting for the Sunrise", "Wallpoet", "Walter Turncoat", "Warnes", "Wellfleet", "Wendy One", "Wire One", "Work Sans", "Yanone Kaffeesatz", "Yantramanav", "Yatra One", "Yellowtail", "Yeon Sung", "Yeseva One", "Yesteryear", "Yrsa", "Zeyada", "Zilla Slab", "Zilla Slab Highlight");
	$rw_font_family_options = "";
	foreach ($rw_slider_image_font_families as $rw_font) {
		$rw_font_family_options .= sprintf(
			'
			<option value="%1$s" style="font-family: %1$s;">%2$s</option>
			',
			esc_attr( $rw_font ),
			esc_html( $rw_font )
		);
	}
?>
<div class="rw-slider-image-loading-container" style="display: none;">
	<div class="rw-slider-image-loading">
		<div class="rw-slider-image-loading-cubes">
			<div class="rw-slider-image-cube rw-slider-image-cube-1"></div>
			<div class="rw-slider-image-cube rw-slider-image-cube-2"></div>
			<div class="rw-slider-image-cube rw-slider-image-cube-3"></div>
			<div class="rw-slider-image-cube rw-slider-image-cube-4"></div>
		</div>
		<div class="rw-slider-image-loading-text">
			Please Wait !
		</div>
	</div>
</div>
<form method="POST" >
	<?php 
		$rw_get_all_themes_data = $wpdb->get_results($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_EFFECTS_TABLE." WHERE id>%d",0),"ARRAY_A");
		wp_nonce_field( 'rw-slider-image-nonce', 'rw-slider-image-nonce-field' );
		require_once( 'rw-slider-image-header.php' );
		require_once( 'rw-slider-image-check.php' ); 
		$rw_slider_image_themes = [
			"slider_navigation" => [
				"name" => "Slider Navigation",
				"version" => "free"
			],
			"fashion_slider" => [
				"name" => "Fashion Slider",
				"version" => "free"
			],
			"slider_carousel" => [
				"name" => "Slider Carousel",
				"version" => "free"
			],
			"flexible_slider" => [
				"name" => "Flexible Slider",
				"version" => "free"
			],
			"dynamic_slider" => [
				"name" => "Dynamic Slider",
				"version" => "free"
			],
			"accordion_slider" => [
				"name" => "Accordion Slider",
				"version" => "free"
			],
			"content_slider" => [
				"name" => "Content Slider",
				"version" => "pro"
			],
			"circle_thumbnails" => [
				"name" => "Circle Thumbnails",
				"version" => "pro"
			],
			"thumbnails_slider" => [
				"name" => "Thumbnails Slider & Lightbox",
				"version" => "pro"
			],
			"animation_slider" => [
				"name" => "Animation Slider",
				"version" => "pro"
			]
		];
	?>
	<!-- RW Slider Image Preloader -->
	<div class="rw-slider-image-preloader-container">
		<div class="rw-slider-image-preloader">
			<div class="rw-slider-image-preloader-spinner"></div>
			<div class="rw-slider-image-preloader-rounder"></div>
			<div class="rw-slider-image-preloader-rounder rw-slider-image-preloader-rounder-small"></div>
			<div class="rw-slider-image-preloader-text"> Loading </div>
		</div>
	</div>
	<!-- RW Slider Image Buttons -->
	<div class="rw-slider-image-buttons" style="position: relative; width: 100%; right: 1%; height: 50px;">
		<a href="<?php echo esc_url("https://wordpress.org/support/plugin/slider-images"); ?>" target="_blank">
   			<input type="button"  class="rw-slider-image-support" value="Support" />
		</a>
		<button type="button" id="rw-add-new-theme" class="rw-add-new-theme"> Add Option </button>
		<input type="submit" class="rw-update-theme-options" value="Update" name="rw_slider_update_theme"/>
		<input type="button" class="rw-cancel-theme-options" value="Cancel"/>
		<input type="text" class="richideo_EN_ID" style="display:none;" id="rich_web_slider_ID" name="rw_slider_image_up_id">
	</div>
	<div class="rw-slider-image-fixed-div"></div>
	<div class="rw-slider-image-absolute-div">
		<div class="rw-slider-image-relative-div">
			<p> Are you sure you want to remove ? </p>
			<span class="rw-slider-image-relative-no">No</span>
			<span class="rw-slider-image-relative-yes">Yes</span>
		</div>
	</div>
	<div class="rw-slider-image-theme-table-content" >
		<div class="rw-slider-image-theme-table-records">
			<div class="rw-slider-image-themes-filters">
				<button type="button" class="rw-slider-image-themes-filter all active" data-filter="all" >All</button>
				<button type="button" class="rw-slider-image-themes-filter free" data-filter="free" >Free</button>
				<button type="button" class="rw-slider-image-themes-filter pro" data-filter="pro" >Pro</button>
			</div>
			<div class="rw-slider-image-all-themes">
				<div class='rw-slider-themes-preview'>
				<?php
					$rw_column_theme_types = array_column($rw_get_all_themes_data, 'slider_type');
					$rw_get_theme_keys = array_map('rw_slider_image_get_theme_key', $rw_column_theme_types);
					$rw_theme_types_count = array_count_values($rw_get_theme_keys);
					$rw_get_not_exists_themes = array_diff(array_keys($rw_slider_image_themes),array_unique($rw_get_theme_keys));
					foreach ($rw_get_all_themes_data as $rw_theme_value) {
						$rw_theme_key = rw_slider_image_get_theme_key(esc_html($rw_theme_value["slider_type"]));
						echo sprintf(
							'
								<div id="rw-slider-theme-preview-div-%1$s" class="rw-slider-theme-preview-div %2$s">
									<img id="rw-theme-img-%1$s" src="%3$s" alt="%4$s" class="rw-slider-theme-image-preview">
									<div class="rw-slider-theme-actions-section">
										<div class="rw-slider-theme-actions" id="rw-slider-theme-actions-%1$s">
											<div class="rw-slider-theme-action rw-edit-theme" data-id="%1$s">
												<i class="rw-slider-theme-action-edit-icon rich_web rich_web-pencil"></i>
											</div>
											<div class="rw-slider-theme-action rw-copy-theme" data-id="%1$s">
												<i class="rw-slider-theme-action-copy-icon rich_web rich_web-files-o"></i>
											</div>
											%5$s
										</div>
									</div>
									<h4 class="rw-slider-theme-preview-name ">%4$s</h4>
								</div>
							',
							esc_html($rw_theme_value["id"]),
							esc_attr($rw_slider_image_themes[$rw_theme_key]["version"]),
							esc_url(plugin_dir_url( __FILE__ ) . "/images/themes/rw_theme_" .$rw_theme_key. ".png" ),
							esc_html($rw_theme_value["slider_name"]),
							$rw_theme_types_count[$rw_theme_key] > 1 ? 
								sprintf(
									'
									<div class="rw-slider-theme-action rw-delete-theme" data-id="%1$s">
										<i class="rw-slider-theme-action-delete-icon rich_web rich_web-trash"></i>
									</div>
									',
									esc_html($rw_theme_value["id"]),
								)
							: ""
						);
					}
					foreach ($rw_get_not_exists_themes as $rw_theme_value) {
						echo sprintf(
							'
								<div id="rw-slider-theme-preview-div-%1$s" class="rw-slider-theme-preview-div %2$s">
									<img src="%3$s" alt="%4$s" class="rw-slider-theme-image-preview">
									%5$s
									<div class="rw-slider-theme-actions-section">
										<div class="rw-slider-theme-actions" id="rw-slider-theme-actions-%1$s">
											<button type="button" class="rw-demo-pro--btn rw-theme-demo-btn" data-id="%1$s">
												<i class="rich_web rich_web-photo"></i>
												%6$s
											</button>
										</div>
									</div>
									<h4 class="rw-slider-theme-preview-name ">%4$s</h4>
								</div>
							',
							esc_html($rw_theme_value),
							esc_attr($rw_slider_image_themes[$rw_theme_value]["version"]),
							esc_url(plugin_dir_url( __FILE__ ) . "/images/themes/rw_theme_" .$rw_theme_value. ".png" ),
							esc_html($rw_slider_image_themes[$rw_theme_value]["name"]),
							$rw_slider_image_themes[$rw_theme_value]["version"] === "pro" ? 
								sprintf(
									'
									<div class="rw-slider-image-theme-pro-badge-div" data-id="%1$s">
										<span class="rw-slider-image-theme-pro-badge">Pro</span>
									</div>
									',
									esc_html($rw_theme_value)
								)
							: "",
							$rw_slider_image_themes[$rw_theme_value]["version"] === "pro" ? esc_html("Pro Only") : esc_html("Demo")
						);
					}
				?>			
				</div>
			</div>
		</div>
		<div class="rw-slider-image-options-tables">
			<table class="rw-slider-image-table-settings">
				<tr>
					<td>Slider Name</td>
					<td>Slider Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-text-field" name="rich_web_slider_name" id="rich_web_slider_name" required  placeholder="* Required">
						<div class="rw-input-error-div " style="display:none;">
                                This name isn't avaible
                        </div>
						<input type="hidden" id="rw_is_name_hid_in" style="display:none;" value="">
					</td>
					<td class="SlType">
						<select class="rw-text-field" id="rich_web_slider_type" name="rich_web_slider_type">
							<?php  
								foreach (array_values(array_unique(array_column($rw_get_all_themes_data, 'slider_type'))) as $rw_value) {
									echo sprintf(
										'
											<option value="%1$s">%2$s</option>
										',
										esc_attr( $rw_value ),
										esc_html( $rw_value )
									);
								}
							?>
						</select>
					</td>
				</tr>
			</table>
			<table class="rw-slider-image-theme-options-table rw-slider-image-theme-options-table-1" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Slide Show</td>
					<td>SlideShow Speed (s)</td>
					<td>Pause on Hover</td>
					<td>Width (px)</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_web_Sl1_SlS" id="rich_web_Sl1_SlS" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="1" id="rich_web_Sl1_SlSS" name="rich_web_Sl1_SlSS" min="1" max="30">
							<span class="rw-range-slider-output" id="rich_web_Sl1_SlSS_Span">1</span>
						</div>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_web_Sl1_PoH" id="rich_web_Sl1_PoH" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="100" id="rich_web_Sl1_W" name="rich_web_Sl1_W" min="100" max="2000">
							<span class="rw-range-slider-output" id="rich_web_Sl1_W_Span">100</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Height (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
					<td>Loading Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="100" id="rich_web_Sl1_H" name="rich_web_Sl1_H" min="100" max="2000">
							<span class="rw-range-slider-output" id="rich_web_Sl1_H_Span">100</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_web_Sl1_BoxS" name="rich_web_Sl1_BoxS">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
							<option value="Type 5"> Type 5 </option>
							<option value="Type 6"> Type 6 </option>
							<option value="Type 7"> Type 7 </option>
							<option value="Type 8"> Type 8 </option>
							<option value="Type 9"> Type 9 </option>
							<option value="Type 10"> Type 10 </option>
							<option value="Type 11"> Type 11 </option>
							<option value="Type 12"> Type 12 </option>
							<option value="Type 13"> Type 13 </option>
							<option value="Type 14"> Type 14 </option>
							<option value="Type 15"> Type 15 </option>
							<option value="Type 16"> Type 16 </option>
							<option value="none"> None </option>
						</select>
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_BoxSC" id="rich_web_Sl1_BoxSC" class="rw-slider-image-color-picker" value="#fff">
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_IBS" id="rich_web_Sl1_IBS" class="rw-slider-image-color-picker" value="#fff">
					</td>
				</tr>
				<tr>
					<td colspan="4">Image Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_IBW" name="rich_web_Sl1_IBW" min="0" max="20">
							<span class="rw-range-slider-output" id="rich_web_Sl1_IBW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_IBC" id="rich_web_Sl1_IBC" class="rw-slider-image-color-picker" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_IBR" name="rich_web_Sl1_IBR" min="0" max="500">
							<span class="rw-range-slider-output" id="rich_web_Sl1_IBR_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Text Align</td>
					<td>Font Size (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="rich_web_Sl1_TBgC" id="rich_web_Sl1_TBgC" class="rw-slider-image-color-picker" value="#fff">
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_TC" id="rich_web_Sl1_TC" class="rw-slider-image-color-picker" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="rich_web_Sl1_TTA" name="rich_web_Sl1_TTA">
							<option value="left">   Left   </option>
							<option value="right">  Right  </option>
							<option value="center"> Center </option>
						</select>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_TFS" name="rich_web_Sl1_TFS" min="8" max="48">
							<span class="rw-range-slider-output" id="rich_web_Sl1_TFS_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td>Uppercase</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="rich_web_Sl1_TFF" name="rich_web_Sl1_TFF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" id="rich_web_Sl1_TUp" name="rich_web_Sl1_TUp" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Arrows Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Opacity (%)</td>
					<td>Arrow Type</td>
					<td>Hover Background Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="rich_web_Sl1_ArBgC" id="rich_web_Sl1_ArBgC" class="rw-slider-image-color-picker" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_ArOp" name="rich_web_Sl1_ArOp" min="0" max="100">
							<span class="rw-range-slider-output" id="rich_web_Sl1_ArOp_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_web_Sl1_ArType" name="rich_web_Sl1_ArType">
							<option value="1" >  Type 1  </option>
							<option value="2" >  Type 2  </option>
							<option value="3" >  Type 3  </option>
							<option value="4" >  Type 4  </option>
							<option value="5" >  Type 5  </option>
							<option value="6" >  Type 6  </option>
							<option value="7" >  Type 7  </option>
							<option value="8" >  Type 8  </option>
							<option value="9" >  Type 9  </option>
							<option value="10"> Type 10 </option>
							<option value="11"> Type 11 </option>
							<option value="12"> Type 12 </option>
							<option value="13"> Type 13 </option>
							<option value="14"> Type 14 </option>
							<option value="15"> Type 15 </option>
							<option value="16"> Type 16 </option>
							<option value="17"> Type 17 </option>
							<option value="18"> Type 18 </option>
							<option value="19"> Type 19 </option>
							<option value="20"> Type 20 </option>
							<option value="21"> Type 21 </option>
							<option value="22"> Type 22 </option>
							<option value="23"> Type 23 </option>
							<option value="24"> Type 24 </option>
							<option value="25"> Type 25 </option>
						</select>
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_ArHBgC" id="rich_web_Sl1_ArHBgC" class="rw-slider-image-color-picker" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Hover Opacity (%)</td>
					<td>Hover Effect</td>
					<td>Box Width (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_ArHOp" name="rich_web_Sl1_ArHOp" min="0" max="100">
							<span class="rw-range-slider-output" id="rich_web_Sl1_ArHOp_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_web_Sl1_ArHEff" name="rich_web_Sl1_ArHEff">
							<option value="slide out">       Slide Out       </option>
							<option value="flip out">        Flip Out        </option>
							<option value="double flip out"> Double Flip Out </option>
							<option value="both ways">       Both Ways       </option>
						</select>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_ArBoxW" name="rich_web_Sl1_ArBoxW" min="50" max="150">
							<span class="rw-range-slider-output" id="rich_web_Sl1_ArBoxW_Span">0</span>
						</div>
					</td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Place Between (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_NavW" name="rich_web_Sl1_NavW" min="0" max="20">
							<span class="rw-range-slider-output" id="rich_web_Sl1_NavW_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_NavH" name="rich_web_Sl1_NavH" min="0" max="20">
							<span class="rw-range-slider-output" id="rich_web_Sl1_NavH_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_NavPB" name="rich_web_Sl1_NavPB" min="0" max="15">
							<span class="rw-range-slider-output" id="rich_web_Sl1_NavPB_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_NavBW" name="rich_web_Sl1_NavBW" min="0" max="5">
							<span class="rw-range-slider-output" id="rich_web_Sl1_NavBW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Current Color</td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="rich_web_Sl1_NavBS" name="rich_web_Sl1_NavBS">
							<option value="none"  >   None   </option>
							<option value="solid" >  Solid  </option>
							<option value="dashed"> Dashed </option>
							<option value="dotted" > Dotted </option>
						</select>
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_NavBC" id="rich_web_Sl1_NavBC" class="rw-slider-image-color-picker" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_web_Sl1_NavBR" name="rich_web_Sl1_NavBR" min="0" max="20">
							<span class="rw-range-slider-output" id="rich_web_Sl1_NavBR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_NavCC" id="rich_web_Sl1_NavCC" class="rw-slider-image-color-picker" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td>Position</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="rich_web_Sl1_NavHC" id="rich_web_Sl1_NavHC" class="rw-slider-image-color-picker" value="#fff">
					</td>
					<td>
						<select id="rich_web_Sl1_NavPos" name="rich_web_Sl1_NavPos" class="rw-select-menu">
							<option value="top">    Top    </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
			</table>
			<table class="rw-slider-image-theme-options-table rw-slider-image-theme-options-table-2" style="display:none;">
				<tr>
					<td colspan="4">General Settings</td>
				</tr>
				<tr>
					<td>Background Image Blur</td>
					<td>Navigation</td>
					<td>Slide Duration (s)</td>
					<td>Show Description</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_CS_BIB" id="rich_CS_BIB" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_CS_P" id="rich_CS_P" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_CS_SD" name="rich_CS_SD" min="1" max="20">
							<span class="rw-range-slider-output" id="rich_CS_SD_Span">0</span>
						</div>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_CS_Video_DShow" id="rich_CS_Video_DShow" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Animation Type</td>
					<td>Show Slideshow</td>
					<td>Background Color</td>
					<td>Box Shadox Color</td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="rich_CS_AT" name="rich_CS_AT" >
							<option value="slide"     > Slide       </option>
							<option value="slideUp"   > Slide Up    </option>
							<option value="bounce"    > Bounce      </option>
							<option value="bounceUp"  > Bounce Up   </option>
							<option value="fade"      > Fade        </option>
							<option value="fadeEase"  > FadeEase    </option>
							<option value="fadeBounse"> FadeBounse  </option>
							<option value="bounce2"   > Bounce 2    </option>
							<option value="bounce3"   > Bounce 3    </option>
							<option value="bounceUp2" > Bounce Up 2 </option>
							<option value="bounceUp3" > Bounce Up 3 </option>
						</select>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_CS_Video_H" id="rich_CS_Video_H" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" name="rich_CS_Cont_BgC" id="rich_CS_Cont_BgC" class="rw-slider-image-color-picker" value="#fff">
					</td>
					<td>
						<input type="text" id="rich_CS_Cont_BSC" class="rw-slider-image-color-picker" name="rich_CS_Cont_BSC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Popup</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_CS_Cont_W" name="rich_CS_Cont_W" min="400" max="1500">
							<span class="rw-range-slider-output" id="rich_CS_Cont_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_CS_Cont_H" name="rich_CS_Cont_H" min="400" max="900">
							<span class="rw-range-slider-output" id="rich_CS_Cont_H_Span">0</span>
						</div>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_CS_Video_DC" id="rich_CS_Video_DC" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_CS_Cont_BW" name="rich_CS_Cont_BW" min="0" max="10">
							<span class="rw-range-slider-output" id="rich_CS_Cont_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Loading Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_CS_Cont_BC" class="rw-slider-image-color-picker" name="rich_CS_Cont_BC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_CS_Cont_BR" name="rich_CS_Cont_BR" min="0" max="10">
							<span class="rw-range-slider-output" id="rich_CS_Cont_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" id="rich_CS_Cont_BS" class="rw-slider-image-color-picker" name="rich_CS_Cont_BS" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Settings for Image Title</td>
				</tr>
				<tr>
					<td>Show Title</td>
					<td>Color</td>
					<td>Font Size (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_CS_Video_TShow" id="rich_CS_Video_TShow" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" id="rich_CS_Video_TC" class="rw-slider-image-color-picker" name="rich_CS_Video_TC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_CS_Video_TFS" name="rich_CS_Video_TFS" min="6" max="36">
							<span class="rw-range-slider-output" id="rich_CS_Video_TFS_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td>Text Align</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="rich_CS_Video_TFF" name="rich_CS_Video_TFF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_CS_Video_TTA" name="rich_CS_Video_TTA">
							<option value="left"   >Left   </option>
							<option value="right"  >Right  </option>
							<option value="center" >Center </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Settings for Image</td>
				</tr>
				<tr>
					<td>Show Image</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_CS_Video_Show" id="rich_CS_Video_Show" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Settings for Link</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>Text</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_CS_LFS" name="rich_CS_LFS" min="8" max="36">
							<span class="rw-range-slider-output" id="rich_CS_LFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_CS_LFF" name="rich_CS_LFF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<input type="text" id="rich_CS_LC" class="rw-slider-image-color-picker" name="rich_CS_LC" value="#fff">
					</td>
					<td>
						<input type="text" id="rich_CS_LT" name="rich_CS_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Position</td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_CS_LBgC" class="rw-slider-image-color-picker" name="rich_CS_LBgC" value="#fff">
					</td>
					<td>
						<input type="text" id="rich_CS_LBC" class="rw-slider-image-color-picker" name="rich_CS_LBC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_CS_LBR" name="rich_CS_LBR" min="0" max="20">
							<span class="rw-range-slider-output" id="rich_CS_LBR_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_CS_LPos" name="rich_CS_LPos">
							<option value="left"  >Left   </option>
							<option value="right" >Right  </option>
							<option value="center">Center </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_CS_Link_BW" name="rich_CS_Link_BW" min="0" max="20">
							<span class="rw-range-slider-output" id="rich_CS_Link_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_CS_Link_BS" name="rich_CS_Link_BS">
							<option value="none"  >None   </option>
							<option value="dotted">Dotted </option>
							<option value="dashed">Dashed </option>
							<option value="solid" >Solid  </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Hover Settings for Link</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_CS_LHBgC" class="rw-slider-image-color-picker" name="rich_CS_LHBgC" value="#fff">
					</td>
					<td>
						<input type="text" id="rich_CS_LHC" class="rw-slider-image-color-picker" name="rich_CS_LHC" value="#fff">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Settings for Arrows</td>
				</tr>
				<tr>
					<td>Show Arrows</td>
					<td>Size (px)</td>
					<td>Color</td>
					<td>Type</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_CS_Video_ArrShow" id="rich_CS_Video_ArrShow" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_CS_AFS" name="rich_CS_AFS" min="8" max="36">
							<span class="rw-range-slider-output" id="rich_CS_AFS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" id="rich_CS_AC" class="rw-slider-image-color-picker" name="rich_CS_AC" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="rich_CS_Icon" name="rich_CS_Icon">
							<option value="1" > Type 1 </option>
							<option value="2" > Type 2 </option>
							<option value="3" > Type 3 </option>
							<option value="4" > Type 4 </option>
							<option value="5" > Type 5 </option>
							<option value="6" > Type 6 </option>
							<option value="7" > Type 7 </option>
							<option value="8" > Type 8 </option>
							<option value="9" > Type 9 </option>
						</select>
					</td>
				</tr>
			</table>
			<table class="rw-slider-image-theme-options-table rw-slider-image-theme-options-table-3" style="display:none;">
				<tr>
					<td colspan="4">General Option</td>
				</tr>
				<tr>
					<td>Animation Type</td>
					<td>Slideshow Show</td>
					<td>SlideShow Speed (s)</td>
					<td>Animation Duration (s)</td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="rich_fsl_animation" name="rich_fsl_animation">
							<option value="fade"  > Fade  </option>
							<option value="slide" > Slide </option>
						</select>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_fsl_SShow" id="rich_fsl_SShow" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_fsl_SShow_Speed" name="rich_fsl_SShow_Speed" min="1" max="30">
							<span class="rw-range-slider-output" id="rich_fsl_SShow_Speed_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_fsl_Anim_Dur" name="rich_fsl_Anim_Dur" min="1" max="10">
							<span class="rw-range-slider-output" id="rich_fsl_Anim_Dur_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Icon Show</td>
					<td>Pause-Play Show</td>
					<td>Randomize</td>
					<td>Loop</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_fsl_Ic_Show" id="rich_fsl_Ic_Show" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_fsl_PPL_Show" id="rich_fsl_PPL_Show" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_fsl_Randomize" id="rich_fsl_Randomize" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_fsl_Loop" id="rich_fsl_Loop" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Loading Color</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="rich_fsl_Border_Style" id="rich_fsl_Border_Style" class="rw-slider-image-color-picker" value="#fff">
					</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Slider Settings</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Shadow Type</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_fsl_Width" name="rich_fsl_Width" min="300" max="1000">
							<span class="rw-range-slider-output" id="rich_fsl_Width_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_fsl_Height" name="rich_fsl_Height" min="200" max="1000">
							<span class="rw-range-slider-output" id="rich_fsl_Height_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_fsl_Border_Width" name="rich_fsl_Border_Width" min="0" max="20">
							<span class="rw-range-slider-output" id="rich_fsl_Border_Width_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_fsl_Box_Shadow" name="rich_fsl_Box_Shadow">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
							<option value="Type 5"> Type 5 </option>
							<option value="Type 6"> Type 6 </option>
							<option value="Type 7"> Type 7 </option>
							<option value="Type 8"> Type 8 </option>
							<option value="Type 9"> Type 9 </option>
							<option value="Type 10"> Type 10 </option>
							<option value="Type 11"> Type 11 </option>
							<option value="Type 12"> Type 12 </option>
							<option value="Type 13"> Type 13 </option>
							<option value="Type 14"> Type 14 </option>
							<option value="Type 15"> Type 15 </option>
							<option value="Type 16"> Type 16 </option>
							<option value="none"> None </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Shadow Color</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_fsl_Border_Color" class="rw-slider-image-color-picker" name="rich_fsl_Border_Color" value="#fff">
					</td>
					<td>
						<input type="text" id="rich_fsl_Shadow_Color" class="rw-slider-image-color-picker" name="rich_fsl_Shadow_Color" value="#fff">
					</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Description Settings</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Background Color</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="rich_fsl_Desc_Show" id="rich_fsl_Desc_Show" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" id="rich_fsl_Desc_Bg_Color" class="rw-slider-image-color-picker" name="rich_fsl_Desc_Bg_Color" value="#fff">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Title Settings</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Color</td>
					<td>Font Family</td>
					<td>Text Align</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_fsl_Title_Font_Size" name="rich_fsl_Title_Font_Size" min="8" max="36">
							<span class="rw-range-slider-output" id="rich_fsl_Title_Font_Size_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" id="rich_fsl_Title_Color" class="rw-slider-image-color-picker" name="rich_fsl_Title_Color" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="rich_fsl_Title_Font_Family" name="rich_fsl_Title_Font_Family">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_fsl_Title_Text_Align" name="rich_fsl_Title_Text_Align">
							<option value="left"  > Left   </option>
							<option value="right" > Right  </option>
							<option value="center"> Center </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Link Settings</td>
				</tr>
				<tr>
					<td>Text</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_fsl_Link_Text" name="rich_fsl_Link_Text" value="">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_fsl_Link_Border_Width" name="rich_fsl_Link_Border_Width" min="0" max="30">
							<span class="rw-range-slider-output" id="rich_fsl_Link_Border_Width_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_fsl_Link_Border_Style" name="rich_fsl_Link_Border_Style">
							<option value="none"   > None   </option>
							<option value="solid"  > Solid  </option>
							<option value="dotted" > Dotted </option>
							<option value="dashed" > Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" id="rich_fsl_Link_Border_Color" class="rw-slider-image-color-picker" name="rich_fsl_Link_Border_Color" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Color</td>
					<td>Font Family</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_fsl_Link_Font_Size" name="rich_fsl_Link_Font_Size" min="8" max="36">
							<span class="rw-range-slider-output" id="rich_fsl_Link_Font_Size_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" id="rich_fsl_Link_Color" class="rw-slider-image-color-picker" name="rich_fsl_Link_Color" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="rich_fsl_Link_Font_Family" name="rich_fsl_Link_Font_Family">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<input type="text" id="rich_fsl_Link_Bg_Color" class="rw-slider-image-color-picker" name="rich_fsl_Link_Bg_Color" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Hover Border Color</td>
					<td>Hover Background Color</td>
					<td>Radius (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_fsl_Link_Hover_Border_Color" class="rw-slider-image-color-picker" name="rich_fsl_Link_Hover_Border_Color" value="#fff">
					</td>
					<td>
						<input type="text" id="rich_fsl_Link_Hover_Bg_Color" class="rw-slider-image-color-picker" name="rich_fsl_Link_Hover_Bg_Color" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_fsl_Title_Text_Shadow" name="rich_fsl_Title_Text_Shadow" min="0" max="100">
							<span class="rw-range-slider-output" id="rich_fsl_Title_Text_Shadow_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_fsl_Link_Hover_Color" class="rw-slider-image-color-picker" name="rich_fsl_Link_Hover_Color" value="#fff">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Icon Settings</td>
				</tr>
				<tr>
					<td>Icon Size (px)</td>
					<td>Icon Type</td>
					<td>Hover Icon Type</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="rich_fsl_Icon_Size" name="rich_fsl_Icon_Size" min="10" max="45">
							<span class="rw-range-slider-output" id="rich_fsl_Icon_Size_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_fsl_Icon_Type" name="rich_fsl_Icon_Type">
							<option value="1" > Icon 1  </option>
							<option value="2" > Icon 2  </option>
							<option value="3" > Icon 3  </option>
							<option value="4" > Icon 4  </option>
							<option value="5" > Icon 5  </option>
							<option value="6" > Icon 6  </option>
							<option value="7" > Icon 7  </option>
							<option value="8" > Icon 8  </option>
							<option value="9" > Icon 9  </option>
							<option value="10"> Icon 10 </option>
							<option value="11"> Icon 11 </option>
							<option value="12"> Icon 12 </option>
							<option value="13"> Icon 13 </option>
							<option value="14"> Icon 14 </option>
						</select>
					</td>
					<td>
						<select class="rw-select-menu" id="rich_fsl_Hover_Icon_Type" name="rich_fsl_Hover_Icon_Type">
							<option value="1"  > Icon 1  </option>
							<option value="2"  > Icon 2  </option>
							<option value="3"  > Icon 3  </option>
							<option value="4"  > Icon 4  </option>
							<option value="5"  > Icon 5  </option>
							<option value="6"  > Icon 6  </option>
							<option value="7"  > Icon 7  </option>
							<option value="8"  > Icon 8  </option>
							<option value="9"  > Icon 9  </option>
							<option value="10" > Icon 10 </option>
							<option value="11" > Icon 11 </option>
							<option value="12" > Icon 12 </option>
							<option value="13" > Icon 13 </option>
							<option value="14" > Icon 14 </option>
						</select>
					</td>
					<td></td>
				</tr>
			</table>
			<table class="rw-slider-image-theme-options-table rw-slider-image-theme-options-table-4" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_CT_W" name="Rich_Web_Sl_CT_W" min="100" max="1200">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_CT_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_CT_H" name="Rich_Web_Sl_CT_H" min="100" max="1200">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_CT_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_CT_BW" name="Rich_Web_Sl_CT_BW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_CT_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_CT_BS" name="Rich_Web_Sl_CT_BS">
							<option value="none"  > None   </option>
							<option value="solid" > Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_CT_BC" name="Rich_Web_Sl_CT_BC" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_CT_BxSType" name="Rich_Web_Sl_CT_BxSType">
							<option value="Type 1">Type 1 </option>
							<option value="Type 2">Type 2 </option>
							<option value="Type 3">Type 3 </option>
							<option value="Type 4">Type 4 </option>
							<option value="Type 5">Type 5 </option>
							<option value="Type 6">Type 6 </option>
							<option value="Type 7">Type 7 </option>
							<option value="Type 8">Type 8 </option>
							<option value="Type 9">Type 9 </option>
							<option value="Type 10">Type 10 </option>
							<option value="Type 11">Type 11 </option>
							<option value="Type 12">Type 12 </option>
							<option value="Type 13">Type 13 </option>
							<option value="Type 14">Type 14 </option>
							<option value="Type 15">Type 15 </option>
							<option value="Type 16">Type 16 </option>
							<option value="none">None </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_CT_BxC" name="Rich_Web_Sl_CT_BxC" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">Title Content</td>
					<td colspan="2">Loading Icon</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Position</td>
					<td>Loading Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_CT_TDABgC" name="Rich_Web_Sl_CT_TDABgC" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_CT_TDAPos" name="Rich_Web_Sl_CT_TDAPos">
							<option value="top"    > Top    </option>
							<option value="bottom" > Bottom </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_CT_LBgC" name="Rich_Web_Sl_CT_LBgC" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Current Color</td>
					<td>Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_CT_TFS" name="Rich_Web_Sl_CT_TFS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_CT_TFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_CT_TFF" name="Rich_Web_Sl_CT_TFF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_CT_TCC" name="Rich_Web_Sl_CT_TCC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_CT_TC" name="Rich_Web_Sl_CT_TC" value="#fff">
					</td>
				</tr>
				<tr>
					<td colspan="4">Arrow Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Border Radius (px)</td>
					<td>Type</td>
					<td>Show Arrow Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_CT_ArBgC" name="Rich_Web_Sl_CT_ArBgC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_CT_ArBR" name="Rich_Web_Sl_CT_ArBR" min="0" max="25">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_CT_ArBR_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_CT_ArType" name="Rich_Web_Sl_CT_ArType">
							<option value="1" > Type 1 </option>
							<option value="2" > Type 2 </option>
						</select>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_CT_ArText" id="Rich_Web_Sl_CT_ArText" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Left Arrow Text</td>
					<td>Right Arrow Text</td>
					<td>Text Color</td>
					<td>Text Font Size (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-select-menu" name="Rich_Web_Sl_CT_ArLeft" id="Rich_Web_Sl_CT_ArLeft" value="">
					</td>
					<td>
						<input type="text"  name="Rich_Web_Sl_CT_ArRight" id="Rich_Web_Sl_CT_ArRight" value="">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_CT_ArTextC" name="Rich_Web_Sl_CT_ArTextC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_CT_ArTextFS" name="Rich_Web_Sl_CT_ArTextFS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_CT_ArTextFS_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Text Font Family</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_CT_ArTextFF" name="Rich_Web_Sl_CT_ArTextFF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Arrow Hover</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_CT_ArHBC" name="Rich_Web_Sl_CT_ArHBC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_CT_ArHBR" name="Rich_Web_Sl_CT_ArHBR" min="0" max="50">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_CT_ArHBR_Span">0</span>
						</div>
					</td>
					<td colspan="2"></td>
				</tr>
			</table>
			<table class="rw-slider-image-theme-options-table rw-slider-image-theme-options-table-5" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Shadow Type</td>
					<td>Border Color</td>
					<td>Shadow Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_BW" name="Rich_Web_Sl_SC_BW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_BoxShType" name="Rich_Web_Sl_SC_BoxShType">
							<option value="Type 1" > Type 1 </option>
							<option value="Type 2" > Type 2 </option>	
							<option value="Type 3" > Type 3 </option>
							<option value="Type 4" > Type 4 </option>
							<option value="Type 5" > Type 5 </option>
							<option value="Type 6" > Type 6 </option>
							<option value="Type 7" > Type 7 </option>
							<option value="Type 8" > Type 8 </option>
							<option value="Type 9" > Type 9 </option>
							<option value="none" >	None </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_BC" name="Rich_Web_Sl_SC_BC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_BoxShC" name="Rich_Web_Sl_SC_BoxShC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Loading Color</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_BS" name="Rich_Web_Sl_SC_BS" value="#fff">
					</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Image Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_IW" name="Rich_Web_Sl_SC_IW" min="100" max="1200">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_IW_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_IH" name="Rich_Web_Sl_SC_IH" min="100" max="1200">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_IH_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_IBW" name="Rich_Web_Sl_SC_IBW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_IBW_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_IBC" name="Rich_Web_Sl_SC_IBC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_IBR" name="Rich_Web_Sl_SC_IBR" min="0" max="100">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_IBR_Span">0</span>
						</div>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Image Container</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td>Hover Overlay Color</td>
					<td>Hover Type</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_ICBW" name="Rich_Web_Sl_SC_ICBW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_ICBW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_ICBC" name="Rich_Web_Sl_SC_ICBC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_CarSl_H_OvC" name="Rich_Web_CarSl_H_OvC" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_CarSl_HT" name="Rich_Web_CarSl_HT">
							<option value="1"  > Type 1  </option>
							<option value="2"  > Type 2  </option>
							<option value="3"  > Type 3  </option>
							<option value="4"  > Type 4  </option>
							<option value="5"  > Type 5  </option>
							<option value="6"  > Type 6  </option>
							<option value="7"  > Type 7  </option>
							<option value="8"  > Type 8  </option>
							<option value="9"  > Type 9  </option>
							<option value="10" > Type 10 </option>
							<option value="11" > Default </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_TBgC" name="Rich_Web_Sl_SC_TBgC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_TC" name="Rich_Web_Sl_SC_TC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_TFS" name="Rich_Web_Sl_SC_TFS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_TFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_TFF" name="Rich_Web_Sl_SC_TFF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color</td>
					<td>Hover Color</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_THBgC" name="Rich_Web_Sl_SC_THBgC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_THC" name="Rich_Web_Sl_SC_THC" value="#fff">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Popup Image Options</td>
				</tr>
				<tr>
					<td>Overlay Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_Pop_OC" name="Rich_Web_Sl_SC_Pop_OC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_Pop_BW" name="Rich_Web_Sl_SC_Pop_BW" min="0" max="15">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_Pop_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_Pop_BC" name="Rich_Web_Sl_SC_Pop_BC" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_Pop_BoxShType" name="Rich_Web_Sl_SC_Pop_BoxShType">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
							<option value="Type 5"> Type 5 </option>
							<option value="Type 6"> Type 6 </option>
							<option value="Type 7"> Type 7 </option>
							<option value="Type 8"> Type 8 </option>
							<option value="Type 9"> Type 9 </option>
							<option value="Type 10">Type 10 </option>
							<option value="Type 11">Type 11 </option>
							<option value="Type 12">Type 12 </option>
							<option value="Type 13">Type 13 </option>
							<option value="Type 14">Type 14 </option>
							<option value="Type 15">Type 15 </option>
							<option value="Type 16">Type 16 </option>
							<option value="none">None </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_Pop_BoxShC" name="Rich_Web_Sl_SC_Pop_BoxShC" value="#fff">
					</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Link Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Size (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_L_BgC" name="Rich_Web_Sl_SC_L_BgC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_L_C" name="Rich_Web_Sl_SC_L_C" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_L_FS" name="Rich_Web_Sl_SC_L_FS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_L_FS_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_L_BW" name="Rich_Web_Sl_SC_L_BW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_L_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Hover Background Color</td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_L_BS" name="Rich_Web_Sl_SC_L_BS">
							<option value="none"  > None   </option>
							<option value="solid" > Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_L_BC" name="Rich_Web_Sl_SC_L_BC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_L_BR" name="Rich_Web_Sl_SC_L_BR" min="0" max="100">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_L_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_L_HBgC" name="Rich_Web_Sl_SC_L_HBgC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td>Type</td>
					<td>Text</td>
					<td>Icon Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_L_HC" name="Rich_Web_Sl_SC_L_HC" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_L_Type" name="Rich_Web_Sl_SC_L_Type">
							<option value="text" >Text </option>
							<option value="icon" >Icon </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-select-menu" name="Rich_Web_Sl_SC_L_Text" id="Rich_Web_Sl_SC_L_Text" value="">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_L_IType" name="Rich_Web_Sl_SC_L_IType">
							<option value="link"          > Type 1 </option>
							<option value="paperclip"     > Type 2 </option>
							<option value="external-link" > Type 3 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_L_FF" name="Rich_Web_Sl_SC_L_FF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Popup</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Size (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_PI_BgC" name="Rich_Web_Sl_SC_PI_BgC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_PI_C" name="Rich_Web_Sl_SC_PI_C" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_PI_FS" name="Rich_Web_Sl_SC_PI_FS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_PI_FS_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_PI_BW" name="Rich_Web_Sl_SC_PI_BW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_PI_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Hover Background Color</td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_PI_FF" name="Rich_Web_Sl_SC_PI_FF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_PI_BC" name="Rich_Web_Sl_SC_PI_BC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_PI_BR" name="Rich_Web_Sl_SC_PI_BR" min="0" max="100">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_PI_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_PI_HBgC" name="Rich_Web_Sl_SC_PI_HBgC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td>Type</td>
					<td>Text</td>
					<td>Icon Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_PI_HC" name="Rich_Web_Sl_SC_PI_HC" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_PI_Type" name="Rich_Web_Sl_SC_PI_Type">
							<option value="text" > Text </option>
							<option value="icon" > Icon </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-select-menu" name="Rich_Web_Sl_SC_PI_Text" id="Rich_Web_Sl_SC_PI_Text" value="">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_PI_IType" name="Rich_Web_Sl_SC_PI_IType">
							<option value="file-image-o"  >Type 1 </option>
							<option value="picture-o"     >Type 2 </option>
							<option value="eye"           >Type 3 </option>
							<option value="object-ungroup">Type 4 </option>
							<option value="television"    >Type 5 </option>
							<option value="arrows-alt"    >Type 6 </option>
							<option value="camera"        >Type 7 </option>
							<option value="camera-retro"  >Type 8 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Arrows Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Size (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_Arr_BgC" name="Rich_Web_Sl_SC_Arr_BgC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_Arr_C" name="Rich_Web_Sl_SC_Arr_C" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_Arr_FS" name="Rich_Web_Sl_SC_Arr_FS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_Arr_FS_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_Arr_BW" name="Rich_Web_Sl_SC_Arr_BW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_Arr_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Hover Background Color</td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_Arr_BS" name="Rich_Web_Sl_SC_Arr_BS">
							<option value="none"   > None   </option>
							<option value="solid"  > Solid  </option>
							<option value="dotted" > Dotted </option>
							<option value="dashed" > Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_Arr_BC" name="Rich_Web_Sl_SC_Arr_BC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_Arr_BR" name="Rich_Web_Sl_SC_Arr_BR" min="0" max="100">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_Arr_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_Arr_HBgC" name="Rich_Web_Sl_SC_Arr_HBgC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td>Type</td>
					<td>Font Family</td>
					<td>Icon Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_Arr_HC" name="Rich_Web_Sl_SC_Arr_HC" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_Arr_Type" name="Rich_Web_Sl_SC_Arr_Type">
							<option value="text" > Text </option>
							<option value="icon" > Icon </option>
						</select>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_Arr_FF" name="Rich_Web_Sl_SC_Arr_FF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_Arr_IType" name="Rich_Web_Sl_SC_Arr_IType">
							<option value="angle-double"   > Type 1  </option>
							<option value="angle"          > Type 2  </option>
							<option value="arrow-circle"   > Type 3  </option>
							<option value="arrow-circle-o" > Type 4  </option>
							<option value="arrow"          > Type 5  </option>
							<option value="caret"          > Type 6  </option>
							<option value="caret-square-o" > Type 7  </option>
							<option value="chevron-circle" > Type 8  </option>
							<option value="chevron"        > Type 9  </option>
							<option value="hand-o"         > Type 10 </option>
							<option value="long-arrow"     > Type 11 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Next Text</td>
					<td>Prev Text</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-select-menu" name="Rich_Web_Sl_SC_Arr_Next" id="Rich_Web_Sl_SC_Arr_Next" value="">
					</td>
					<td>
						<input type="text" class="rw-select-menu" name="Rich_Web_Sl_SC_Arr_Prev" id="Rich_Web_Sl_SC_Arr_Prev" value="">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Popup Close Icon</td>
				</tr>
				<tr>
					<td>Size (px)</td>
					<td>Color</td>
					<td>Type</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_SC_PCI_FS" name="Rich_Web_Sl_SC_PCI_FS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_SC_PCI_FS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_SC_PCI_C" name="Rich_Web_Sl_SC_PCI_C" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_SC_PCI_Type" name="Rich_Web_Sl_SC_PCI_Type">
							<option value="home"           > Type 1 </option>
							<option value="times"          > Type 2 </option>
							<option value="times-circle"   > Type 3 </option>
							<option value="times-circle-o" > Type 4 </option>
						</select>
					</td>
					<td></td>
				</tr>
			</table>
			<table class="rw-slider-image-theme-options-table rw-slider-image-theme-options-table-6" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Autoplay</td>
					<td>Transition Speed (ms)</td>
					<td>Pause Time (s)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_FS_BgC" name="Rich_Web_Sl_FS_BgC" value="#fff">
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_FS_AP" id="Rich_Web_Sl_FS_AP" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_TS" name="Rich_Web_Sl_FS_TS" min="100" max="1000" step="100">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_TS_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_PT" name="Rich_Web_Sl_FS_PT" min="1" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_PT_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Slide Steps</td>
					<td>Popup</td>
					<td>Count of Slides</td>
					<td>Slide Loop</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_SS" name="Rich_Web_Sl_FS_SS" min="1" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_SS_Span">0</span>
						</div>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_FS_SVis" id="Rich_Web_Sl_FS_SVis" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_CS" name="Rich_Web_Sl_FS_CS" min="1" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_CS_Span">0</span>
						</div>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_FS_SLoop" id="Rich_Web_Sl_FS_SLoop" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Slide Scaling</td>
					<td>Slide Position</td>
					<td>Always Show Nav Buttons</td>
					<td>Loading Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_SSc" name="Rich_Web_Sl_FS_SSc" min="100" max="300" step="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_SSc_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_FS_SlPos" name="Rich_Web_Sl_FS_SlPos">
							<option value="left"  >Left   </option>
							<option value="right" >Right  </option>
							<option value="center">Center </option>
						</select>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_FS_ShNavBut" id="Rich_Web_Sl_FS_ShNavBut" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_FS_I_BS" name="Rich_Web_Sl_FS_I_BS" value="#fff">
					</td>
				</tr>
				<tr>
					<td colspan="4">Image Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_I_W" name="Rich_Web_Sl_FS_I_W" min="100" max="900">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_I_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_I_H" name="Rich_Web_Sl_FS_I_H" min="100" max="900">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_I_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_I_BW" name="Rich_Web_Sl_FS_I_BW" min="0" max="15">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_I_BW_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_FS_I_BC" name="Rich_Web_Sl_FS_I_BC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_I_BR" name="Rich_Web_Sl_FS_I_BR" min="0" max="200">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_I_BR_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_FS_I_BoxShType" name="Rich_Web_Sl_FS_I_BoxShType">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
							<option value="Type 5"> Type 5 </option>
							<option value="Type 6"> Type 6 </option>
							<option value="Type 7"> Type 7 </option>
							<option value="Type 8"> Type 8 </option>
							<option value="Type 9"> Type 9 </option>
							<option value="none"  > None   </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_FS_I_BoxShC" name="Rich_Web_Sl_FS_I_BoxShC" value="#fff">
					</td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Color</td>
					<td>Font Family</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_FS_T_C" name="Rich_Web_Sl_FS_T_C" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_FS_T_FF" name="Rich_Web_Sl_FS_T_FF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_FS_Nav_Show" id="Rich_Web_Sl_FS_Nav_Show" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_Nav_W" name="Rich_Web_Sl_FS_Nav_W" min="0" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_Nav_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_Nav_H" name="Rich_Web_Sl_FS_Nav_H" min="0" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_Nav_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_Nav_BW" name="Rich_Web_Sl_FS_Nav_BW" min="0" max="5">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_Nav_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Place Between (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_FS_Nav_BC" name="Rich_Web_Sl_FS_Nav_BC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_Nav_BR" name="Rich_Web_Sl_FS_Nav_BR" min="0" max="15">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_Nav_BR_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_Nav_PB" name="Rich_Web_Sl_FS_Nav_PB" min="0" max="15">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_Nav_PB_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Current Color</td>
					<td>Hover Color</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_FS_Nav_CC" name="Rich_Web_Sl_FS_Nav_CC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_FS_Nav_HC" name="Rich_Web_Sl_FS_Nav_HC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_FS_Nav_C" name="Rich_Web_Sl_FS_Nav_C" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Arrows Options</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Size (px)</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_FS_Arr_Type" name="Rich_Web_Sl_FS_Arr_Type">
							<option value="angle-double"   > Type 1  </option>
							<option value="angle"          > Type 2  </option>
							<option value="arrow-circle"   > Type 3  </option>
							<option value="arrow-circle-o" > Type 4  </option>
							<option value="arrow"          > Type 5  </option>
							<option value="caret"          > Type 6  </option>
							<option value="caret-square-o" > Type 7  </option>
							<option value="chevron-circle" > Type 8  </option>
							<option value="chevron"        > Type 9  </option>
							<option value="hand-o"         > Type 10 </option>
							<option value="long-arrow"     > Type 11 </option>
							<option value="none"  		   > None </option>
						</select>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_FS_Arr_S" name="Rich_Web_Sl_FS_Arr_S" min="8" max="80">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_FS_Arr_S_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_FS_Arr_C" name="Rich_Web_Sl_FS_Arr_C" value="#fff">
					</td>
					<td></td>
				</tr>
			</table>
			<table class="rw-slider-image-theme-options-table rw-slider-image-theme-options-table-7" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Autoplay</td>
					<td>Pause Time (s)</td>
					<td>Transition</td>
					<td>Height (px)</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_DS_AP" id="Rich_Web_Sl_DS_AP" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_PT" name="Rich_Web_Sl_DS_PT" min="1" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_PT_Span">0</span>
						</div>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_DS_Tr" id="Rich_Web_Sl_DS_Tr" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_H" name="Rich_Web_Sl_DS_H" min="150" max="1200">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_H_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Popup</td>
					<td>Border Color</td>
					<td>Slider Image Type</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_BW" name="Rich_Web_Sl_DS_BW" min="0" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_BW_Span">0</span>
						</div>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_DS_DFS" id="Rich_Web_Sl_DS_DFS" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_BC" name="Rich_Web_Sl_DS_BC" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_DynamicSl_ImgT" name="Rich_Web_DynamicSl_ImgT">
							<option value="Type 1" > Type 1 </option>
							<option value="Type 2" > Type 2 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Loading Color</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_BS" name="Rich_Web_Sl_DS_BS" value="#fff">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_TFS" name="Rich_Web_Sl_DS_TFS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_TFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_DS_TFF" name="Rich_Web_Sl_DS_TFF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_TC" name="Rich_Web_Sl_DS_TC" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Link Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_LFS" name="Rich_Web_Sl_DS_LFS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_LFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_DS_LFF" name="Rich_Web_Sl_DS_LFF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_LC" name="Rich_Web_Sl_DS_LC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_LBgC" name="Rich_Web_Sl_DS_LBgC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_LBW" name="Rich_Web_Sl_DS_LBW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_LBW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_DS_LBS" name="Rich_Web_Sl_DS_LBS">
							<option value="none"  > None   </option>
							<option value="solid" > Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_LBC" name="Rich_Web_Sl_DS_LBC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_LBR" name="Rich_Web_Sl_DS_LBR" min="0" max="100">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_LBR_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td>Hover Background Color</td>
					<td>Link Text</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_LHC" name="Rich_Web_Sl_DS_LHC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_LHBgC" name="Rich_Web_Sl_DS_LHBgC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-select-menu" name="Rich_Web_Sl_DS_LT" id="Rich_Web_Sl_DS_LT" value="">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Arrow Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Left Arrow Text</td>
					<td>Right Arrow Text</td>
					<td>Color</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_DS_Arr_Show" id="Rich_Web_Sl_DS_Arr_Show" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" class="rw-select-menu" name="Rich_Web_Sl_DS_Arr_LT" id="Rich_Web_Sl_DS_Arr_LT" value="">
					</td>
					<td>
						<input type="text" class="rw-select-menu" name="Rich_Web_Sl_DS_Arr_RT" id="Rich_Web_Sl_DS_Arr_RT" value="">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_Arr_C" name="Rich_Web_Sl_DS_Arr_C" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_Arr_BgC" name="Rich_Web_Sl_DS_Arr_BgC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_Arr_BW" name="Rich_Web_Sl_DS_Arr_BW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_Arr_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_DS_Arr_BS" name="Rich_Web_Sl_DS_Arr_BS">
							<option value="none"   > None   </option>
							<option value="solid"  > Solid  </option>
							<option value="dotted" > Dotted </option>
							<option value="dashed" > Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_Arr_BC" name="Rich_Web_Sl_DS_Arr_BC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td>Hover Color</td>
					<td>Hover Background Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_Arr_BR" name="Rich_Web_Sl_DS_Arr_BR" min="0" max="100">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_Arr_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_Arr_HC" name="Rich_Web_Sl_DS_Arr_HC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_Arr_HBgC" name="Rich_Web_Sl_DS_Arr_HBgC" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Place Between (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_Nav_W" name="Rich_Web_Sl_DS_Nav_W" min="0" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_Nav_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_Nav_H" name="Rich_Web_Sl_DS_Nav_H" min="0" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_Nav_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_Nav_PB" name="Rich_Web_Sl_DS_Nav_PB" min="0" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_Nav_PB_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_Nav_BW" name="Rich_Web_Sl_DS_Nav_BW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_Nav_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Color</td>
					<td>Hover Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_Nav_BC" name="Rich_Web_Sl_DS_Nav_BC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_DS_Nav_BR" name="Rich_Web_Sl_DS_Nav_BR" min="0" max="50">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_DS_Nav_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_Nav_C" name="Rich_Web_Sl_DS_Nav_C" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_Nav_HC" name="Rich_Web_Sl_DS_Nav_HC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Current Color</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_DS_Nav_CC" name="Rich_Web_Sl_DS_Nav_CC" value="#fff">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class="rw-slider-image-theme-options-table rw-slider-image-theme-options-table-8" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Change Speed (ms)</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_W" name="Rich_Web_Sl_TSL_W" min="150" max="1200">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_H" name="Rich_Web_Sl_TSL_H" min="150" max="1200">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_BW" name="Rich_Web_Sl_TSL_BW" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_BW_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_CS" name="Rich_Web_Sl_TSL_CS" min="100" max="1000" step="100">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_CS_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_BC" name="Rich_Web_Sl_TSL_BC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_BR" name="Rich_Web_Sl_TSL_BR" min="0" max="100">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_BR_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_TSL_BoxShType" name="Rich_Web_Sl_TSL_BoxShType">
							<option value="Type 1" 	> Type 1 </option>
							<option value="Type 2" 	> Type 2 </option>
							<option value="Type 3" 	> Type 3 </option>
							<option value="Type 4" 	> Type 4 </option>
							<option value="Type 5" 	> Type 5 </option>
							<option value="Type 6" 	> Type 6 </option>
							<option value="Type 7" 	> Type 7 </option>
							<option value="Type 8" 	> Type 8 </option>
							<option value="Type 9" 	> Type 9 </option>
							<option value="Type 10" >Type 10 </option>
							<option value="Type 11" >Type 11 </option>
							<option value="Type 12" >Type 12 </option>
							<option value="Type 13" >Type 13 </option>
							<option value="Type 14" >Type 14 </option>
							<option value="Type 15" >Type 15 </option>
							<option value="Type 16" >Type 16 </option>
							<option value="none" 	>   None </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_BoxShC" name="Rich_Web_Sl_TSL_BoxShC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Change Mode</td>
					<td>Toggle Arrows</td>
					<td>Auto Play</td>
					<td>Pause on Hover</td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_TSL_CM" name="Rich_Web_Sl_TSL_CM">
							<option value="horizontal" > Horizontal </option>
							<option value="vertical"   > Vertical   </option>
							<option value="fade"       > Fade       </option>
						</select>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_TSL_TA" id="Rich_Web_Sl_TSL_TA" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_TSL_AP" id="Rich_Web_Sl_TSL_AP" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_TSL_PH" id="Rich_Web_Sl_TSL_PH" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Loop</td>
					<td>Pause Time (s)</td>
					<td>Loading Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_TSL_Loop" id="Rich_Web_Sl_TSL_Loop" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_PT" name="Rich_Web_Sl_TSL_PT" min="1" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_PT_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_BS" name="Rich_Web_Sl_TSL_BS" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Place Between (px)</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_TSL_Nav_Show" id="Rich_Web_Sl_TSL_Nav_Show" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_Nav_W" name="Rich_Web_Sl_TSL_Nav_W" min="0" max="50">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_Nav_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_Nav_H" name="Rich_Web_Sl_TSL_Nav_H" min="0" max="50">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_Nav_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_Nav_PB" name="Rich_Web_Sl_TSL_Nav_PB" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_Nav_PB_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Current Border Color</td>
					<td>Hover Border Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_Nav_BC" name="Rich_Web_Sl_TSL_Nav_BC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_Nav_BR" name="Rich_Web_Sl_TSL_Nav_BR" min="0" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_Nav_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_Nav_CBC" name="Rich_Web_Sl_TSL_Nav_CBC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_Nav_HBC" name="Rich_Web_Sl_TSL_Nav_HBC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Position</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_TSL_Nav_Pos" name="Rich_Web_Sl_TSL_Nav_Pos">
							<option value="top"    >Top    </option>
							<option value="bottom" >Bottom </option>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Start/Stop Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_TSL_SS_Show" id="Rich_Web_Sl_TSL_SS_Show" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_SS_W" name="Rich_Web_Sl_TSL_SS_W" min="0" max="50">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_SS_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_SS_H" name="Rich_Web_Sl_TSL_SS_H" min="0" max="50">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_SS_H_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_SS_BC" name="Rich_Web_Sl_TSL_SS_BC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td>Start Color</td>
					<td>Stop Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_SS_BR" name="Rich_Web_Sl_TSL_SS_BR" min="0" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_SS_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_SS_StC" name="Rich_Web_Sl_TSL_SS_StC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_SS_SpC" name="Rich_Web_Sl_TSL_SS_SpC" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Arrows Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Type</td>
					<td>Size (px)</td>
					<td>Color</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_Sl_TSL_Arr_Show" id="Rich_Web_Sl_TSL_Arr_Show" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_TSL_Arr_Type" name="Rich_Web_Sl_TSL_Arr_Type">
							<option value="5" > Type 1  </option>
							<option value="6" > Type 2  </option>
							<option value="7" > Type 3  </option>
							<option value="8" > Type 4  </option>
							<option value="9" > Type 5  </option>
							<option value="10"> Type 6  </option>
							<option value="11"> Type 7  </option>
							<option value="12"> Type 8  </option>
							<option value="13"> Type 9  </option>
							<option value="14"> Type 10 </option>
							<option value="15"> Type 11 </option>
							<option value="16"> Type 12 </option>
							<option value="17"> Type 13 </option>
							<option value="18"> Type 14 </option>
							<option value="19"> Type 15 </option>
							<option value="20"> Type 16 </option>
							<option value="21"> Type 17 </option>
							<option value="22"> Type 18 </option>
							<option value="23"> Type 19 </option>
							<option value="24"> Type 20 </option>
						</select>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_Arr_S" name="Rich_Web_Sl_TSL_Arr_S" min="0" max="100">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_Arr_S_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_Arr_C" name="Rich_Web_Sl_TSL_Arr_C" value="#fff">
					</td>
				</tr>
				<tr>
					<td colspan="4">Popup Options</td>
				</tr>
				<tr>
					<td>Overlay Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td>Content Background</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_Pop_OvC" name="Rich_Web_Sl_TSL_Pop_OvC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_Pop_BW" name="Rich_Web_Sl_TSL_Pop_BW" min="0" max="15">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_Pop_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_Pop_BC" name="Rich_Web_Sl_TSL_Pop_BC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_Pop_BgC" name="Rich_Web_Sl_TSL_Pop_BgC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_Pop_BR" name="Rich_Web_Sl_TSL_Pop_BR" min="0" max="50">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_Pop_BR_Span">0</span>
						</div>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Title in Popup</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_TFS" name="Rich_Web_Sl_TSL_TFS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_TFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_TSL_TFF" name="Rich_Web_Sl_TSL_TFF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_TC" name="Rich_Web_Sl_TSL_TC" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Arrows in Popup</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Size (px)</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_TSL_Pop_ArrType" name="Rich_Web_Sl_TSL_Pop_ArrType">
							<option value="angle-double"   >Type 1  </option>
							<option value="angle"          >Type 2  </option>
							<option value="arrow-circle"   >Type 3  </option>
							<option value="arrow-circle-o" >Type 4  </option>
							<option value="arrow"          >Type 5  </option>
							<option value="caret"          >Type 6  </option>
							<option value="caret-square-o" >Type 7  </option>
							<option value="chevron-circle" >Type 8  </option>
							<option value="chevron"        >Type 9  </option>
							<option value="hand-o"         >Type 10 </option>
							<option value="long-arrow"     >Type 11 </option>
						</select>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_Pop_ArrS" name="Rich_Web_Sl_TSL_Pop_ArrS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_Pop_ArrS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_Pop_ArrC" name="Rich_Web_Sl_TSL_Pop_ArrC" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Close Icon in Popup</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Size (px)</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_Sl_TSL_CIT" name="Rich_Web_Sl_TSL_CIT">
							<option value="home"          > Type 1 </option>
							<option value="times"         > Type 2 </option>
							<option value="times-circle"  > Type 3 </option>
							<option value="times-circle-o"> Type 4 </option>
						</select>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_Sl_TSL_CIS" name="Rich_Web_Sl_TSL_CIS" min="8" max="48">
							<span class="rw-range-slider-output" id="Rich_Web_Sl_TSL_CIS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_Sl_TSL_CIC" name="Rich_Web_Sl_TSL_CIC" value="#fff">
					</td>
					<td></td>
				</tr>
			</table>
			<table class="rw-slider-image-theme-options-table rw-slider-image-theme-options-table-9" style="display:none;">
				<tr>
					<td colspan="4">Slider Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Loading Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AcSL_W" name="Rich_Web_AcSL_W" min="200" max="1000">
							<span class="rw-range-slider-output" id="Rich_Web_AcSL_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AcSL_H" name="Rich_Web_AcSL_H" min="200" max="1000">
							<span class="rw-range-slider-output" id="Rich_Web_AcSL_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AcSL_BW" name="Rich_Web_AcSL_BW" min="0" max="20">
							<span class="rw-range-slider-output" id="Rich_Web_AcSL_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AcSL_BS" name="Rich_Web_AcSL_BS" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Box Shadow (px)</td>
					<td>Shadow Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AcSL_BC" name="Rich_Web_AcSL_BC" value="#fff">
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_AcSL_BSh" name="Rich_Web_AcSL_BSh">
							<option value="Type 1" > Type 1 </option>
							<option value="Type 2" > Type 2 </option>
							<option value="Type 3" > Type 3 </option>
							<option value="Type 4" > Type 4 </option>
							<option value="Type 5" > Type 5 </option>
							<option value="Type 6" > Type 6 </option>
							<option value="Type 7" > Type 7 </option>
							<option value="Type 8" > Type 8 </option>
							<option value="Type 9" > Type 9 </option>
							<option value="none" >  None </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AcSL_BShC" name="Rich_Web_AcSL_BShC" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Slider Image Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Box Shadow (px)</td>
					<td>Shadow Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AcSL_Img_W" name="Rich_Web_AcSL_Img_W" min="50" max="700">
							<span class="rw-range-slider-output" id="Rich_Web_AcSL_Img_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AcSL_Img_BSh" name="Rich_Web_AcSL_Img_BSh" min="0" max="10">
							<span class="rw-range-slider-output" id="Rich_Web_AcSL_Img_BSh_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AcSL_Img_BShC" name="Rich_Web_AcSL_Img_BShC" value="#fff">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Video Icon Options</td>
				</tr>
				<tr>
					<td>Color</td>
					<td>Background Color</td>
					<td colspan='2'></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AcSL_Title_TSh" name="Rich_Web_AcSL_Title_TSh" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AcSL_Title_TShC" name="Rich_Web_AcSL_Title_TShC" value="#fff">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Slider Image Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AcSL_Title_FS" name="Rich_Web_AcSL_Title_FS" min="8" max="36">
							<span class="rw-range-slider-output" id="Rich_Web_AcSL_Title_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_AcSL_Title_FF" name="Rich_Web_AcSL_Title_FF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AcSL_Title_C" name="Rich_Web_AcSL_Title_C" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AcSL_Title_BgC" name="Rich_Web_AcSL_Title_BgC" value="#fff">
					</td>
				</tr>
				<tr>
					<td colspan="4">Slider Image Link Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AcSL_Link_FS" name="Rich_Web_AcSL_Link_FS" min="8" max="36">
							<span class="rw-range-slider-output" id="Rich_Web_AcSL_Link_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_AcSL_Link_FF" name="Rich_Web_AcSL_Link_FF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AcSL_Link_C" name="Rich_Web_AcSL_Link_C" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AcSL_Link_BgC" name="Rich_Web_AcSL_Link_BgC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Text</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="Rich_Web_AcSL_Link_Text" name="Rich_Web_AcSL_Link_Text" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class="rw-slider-image-theme-options-table rw-slider-image-theme-options-table-10" style="display:none;">
				<tr>
					<td colspan="4">General Settings</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Loading Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AnSL_W" name="Rich_Web_AnSL_W" min="300" max="1400">
							<span class="rw-range-slider-output" id="Rich_Web_AnSL_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AnSL_H" name="Rich_Web_AnSL_H" min="300" max="1400">
							<span class="rw-range-slider-output" id="Rich_Web_AnSL_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AnSL_BW" name="Rich_Web_AnSL_BW" min="0" max="30">
							<span class="rw-range-slider-output" id="Rich_Web_AnSL_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AnSL_BS" name="Rich_Web_AnSL_BS" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Radius (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AnSL_BC" name="Rich_Web_AnSL_BC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AnSL_BR" name="Rich_Web_AnSL_BR" min="0" max="200">
							<span class="rw-range-slider-output" id="Rich_Web_AnSL_BR_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_AnSL_N_BS" name="Rich_Web_AnSL_N_BS">
							<option value="Type 1" >Type 1 </option>
							<option value="Type 2" >Type 2 </option>
							<option value="Type 3" >Type 3 </option>
							<option value="Type 4" >Type 4 </option>
							<option value="Type 5" >Type 5 </option>
							<option value="Type 6" >Type 6 </option>
							<option value="Type 7" >Type 7 </option>
							<option value="Type 8" >Type 8 </option>
							<option value="Type 9" >Type 9 </option>
							<option value="none"   >None </option>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AnSL_ShC" name="Rich_Web_AnSL_ShC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Effect Type</td>
					<td>Slideshow</td>
					<td>Slideshow Change Time (ms)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_AnSL_ET" name="Rich_Web_AnSL_ET">
							<option value="1"  > Curve-Horizontal          </option>
							<option value="2"  > Curve-Vertical            </option>
							<option value="3"  > Curve-Criss-Cross         </option>
							<option value="4"  > Curve-Criss-Cross-Reverse </option>
							<option value="5"  > Opacity                   </option>
							<option value="6"  > Zoom-Out                  </option>
							<option value="7"  > Zoom-Out-Bazier           </option>
							<option value="8"  > Zoom-In                   </option>
							<option value="9"  > Zoom-In-Bazier            </option>
							<option value="10" > Zoom-In-Bazier-Circle     </option>
							<option value="11" > Zoom-In-Circle            </option>
							<option value="12" > Zoom-Criss-Cross          </option>
							<option value="13" > Zoom-Criss-Cross-Reverse  </option>
							<option value="14" > None                      </option>
						</select>
					</td>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_AnSL_SSh" id="Rich_Web_AnSL_SSh" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AnSL_SShChT" name="Rich_Web_AnSL_SShChT" min="1000" max="10000">
							<span class="rw-range-slider-output" id="Rich_Web_AnSL_SShChT_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Title Settings</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AnSL_T_FS" name="Rich_Web_AnSL_T_FS" min="8" max="36">
							<span class="rw-range-slider-output" id="Rich_Web_AnSL_T_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_AnSL_T_FF" name="Rich_Web_AnSL_T_FF">
							<?php echo $rw_font_family_options; ?>
						</select>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AnSL_T_C" name="Rich_Web_AnSL_T_C" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AnSL_T_BgC" name="Rich_Web_AnSL_T_BgC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Text Align</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_AnSL_T_TA" name="Rich_Web_AnSL_T_TA">
							<option value="left"   > Left    </option>
							<option value="right"  > Right   </option>
							<option value="center" > Center  </option>
							<option value="justify"> Justify </option>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Settings</td>
				</tr>
				<tr>
					<td>Navigation</td>
					<td>Size (px)</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<label class="rw-theme-checkbox rw-theme-checkbox-light">
							<input class="rw-theme-checkbox-input" type="checkbox" name="Rich_Web_AnSL_N_Sh" id="Rich_Web_AnSL_N_Sh" />
							<span class="rw-theme-checkbox-label" data-on="On" data-off="Off"></span> 
							<span class="rw-theme-checkbox-handle"></span> 
						</label>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AnSL_N_S" name="Rich_Web_AnSL_N_S" min="5" max="30">
							<span class="rw-range-slider-output" id="Rich_Web_AnSL_N_S_Span">0</span>
						</div>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AnSL_N_BW" name="Rich_Web_AnSL_N_BW" min="0" max="5">
							<span class="rw-range-slider-output" id="Rich_Web_AnSL_N_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AnSL_N_BC" name="Rich_Web_AnSL_N_BC" value="#fff">
					</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Margin (px)</td>
					<td>Hover Background Color</td>
					<td>Current Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AnSL_N_BgC" name="Rich_Web_AnSL_N_BgC" value="#fff">
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AnSL_N_M" name="Rich_Web_AnSL_N_M" min="0" max="12">
							<span class="rw-range-slider-output" id="Rich_Web_AnSL_N_M_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AnSL_N_HBgC" name="Rich_Web_AnSL_N_HBgC" value="#fff">
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AnSL_N_CC" name="Rich_Web_AnSL_N_CC" value="#fff">
					</td>
				</tr>
				<tr>
					<td colspan="4">Icons Settings</td>
				</tr>
				<tr>
					<td>Image/Icon</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_AnSL_T_ShC" name="Rich_Web_AnSL_T_ShC">
							<option value="Image"> Image </option>
							<option value="Icon" > Icon  </option>
							<option value="none" > None  </option>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>Image Type</td>
					<td>Icon Type</td>
					<td>Size (px)</td>
					<td>Icon Color</td>
				</tr>
				<tr>
					<td>
						<select class="rw-select-menu" id="Rich_Web_AnSL_T_Sh" name="Rich_Web_AnSL_T_Sh">
							<option value="1"  > Type 1  </option>
							<option value="2"  > Type 2  </option>
							<option value="3"  > Type 3  </option>
							<option value="4"  > Type 4  </option>
							<option value="5"  > Type 5  </option>
							<option value="6"  > Type 6  </option>
							<option value="7"  > Type 7  </option>
							<option value="8"  > Type 8  </option>
							<option value="9"  > Type 9  </option>
							<option value="10" > Type 10 </option>
							<option value="11" > Type 11 </option>
							<option value="12" > Type 12 </option>
							<option value="13" > Type 13 </option>
							<option value="14" > Type 14 </option>
							<option value="15" > Type 15 </option>
							<option value="16" > Type 16 </option>
							<option value="17" > Type 17 </option>
							<option value="18" > Type 18 </option>
							<option value="19" > Type 19 </option>
							<option value="20" > Type 20 </option>
							<option value="21" > Type 21 </option>
							<option value="22" > Type 22 </option>
							<option value="23" > Type 23 </option>
							<option value="24" > Type 24 </option>
							<option value="25" > Type 25 </option>
							<option value="26" > Type 26 </option>
							<option value="27" > Type 27 </option>
							<option value="28" > Type 28 </option>
						</select>
					</td>
					<td>
						<select class="rw-select-menu" id="Rich_Web_AnSL_Ic_T" name="Rich_Web_AnSL_Ic_T">
							<option value="rich_web rich_web-angle-double"> Icon 1 </option>
							<option value="rich_web rich_web-angle"> Icon 2 </option>
							<option value="rich_web rich_web-arrow-circle"> Icon 3 </option>
							<option value="rich_web rich_web-arrow-circle-o"> Icon 4 </option>
							<option value="rich_web rich_web-arrow"> Icon 5 </option>
							<option value="rich_web rich_web-caret"> Icon 6 </option>
							<option value="rich_web rich_web-caret-square-o"> Icon 7 </option>
							<option value="rich_web rich_web-chevron-circle"> Icon 8 </option>
							<option value="rich_web rich_web-chevron"> Icon 9 </option>
							<option value="rich_web rich_web-hand-o"> Icon 10 </option>
							<option value="rich_web rich_web-long-arrow"> Icon 11 </option>
						</select>
					</td>
					<td>
						<div class="rw-range-slider">  
							<input class="rw-range-slider-input" type="range" value="0" id="Rich_Web_AnSL_Ic_S" name="Rich_Web_AnSL_Ic_S" min="10" max="80">
							<span class="rw-range-slider-output" id="Rich_Web_AnSL_Ic_S_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="rw-slider-image-color-picker" id="Rich_Web_AnSL_Ic_C" name="Rich_Web_AnSL_Ic_C" value="#fff">
					</td>
				</tr>
			</table>
		</div>
	</div>
</form>
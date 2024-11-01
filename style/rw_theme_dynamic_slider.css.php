<?php
    $text=$rw_loader_options_arr->Rich_Web_DynamicSl_LT;
    $text_array=str_split($text);
    $str_sum=0;
    $anim_sum=0.75;
?>
<style>
    <?php if(!empty($rw_loader_options_arr)){ ?>
        .center_content<?php echo esc_html($rw_slider_image_id);?>{
            position:relative;
            overflow:visible;
            top:50%;
            transform:translateY(-50%);
            -webkit-transform:translateY(-50%);
            -ms-transform:translateY(-50%);
            -moz-transform:translateY(-50%);
            -o-transform:translateY(-50%);
        }
        #RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>{
            margin:0px auto !important;
            background-color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_BgC);?> !important;
            z-index:999;
            width:100%;
            height:200px;
            box-sizing: inherit !important;
            -moz-box-sizing: inherit !important;
            -webkit-box-sizing: inherit !important;
            overflow:hidden !important;
            max-width:100% !important;
        }
        <?php if($rw_loader_options_arr->Rich_Web_DynamicSl_L_S == "small") { ?>
            .RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?> { width:45px !important; height:45px !important; }
            .loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>{
                border-top: 3px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T1_C);?> !important;
                border-bottom: 3px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T1_C);?> !important;
            }
            .loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>{
                border-top: 3px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T2_C);?> !important;
                border-bottom: 3px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T2_C);?> !important;
            }
            .loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>{
                border-top:12px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T3_C);?> !important;
                border-bottom:12px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T3_C);?> !important;
                border-right:12px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T3_C);?> !important;
                width:50% !important;
                height:50%!important;
            }
        <?php } elseif($rw_loader_options_arr->Rich_Web_DynamicSl_L_S == "middle") { ?>
            .RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?> { width:60px !important; height:60px !important; }
            .loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>{
                border-top: 4px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T1_C);?> !important;
                border-bottom: 4px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T1_C);?> !important;
            }
            .loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>{
                border-top: 4px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T2_C);?> !important;
                border-bottom: 4px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T2_C);?> !important;
            }
            .loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>{
                border-top:17px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T3_C);?> !important;
                border-bottom:17px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T3_C);?> !important;
                border-right:17px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T3_C);?> !important;
                width:55% !important;
                height:55%!important;
            }
        <?php } else { ?>
            .RW_Loader_Frame_Navigation<?php echo esc_html($rw_slider_image_id);?> { width:80px !important; height:80px !important; }
            .loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>{
                border-top: 5px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T1_C);?> !important;
                border-bottom: 5px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T1_C);?> !important;
            }
            .loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>{
                border-top: 5px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T2_C);?> !important;
                border-bottom: 5px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T2_C);?> !important;
            }
            .loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>{
                border-top:25px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T3_C);?> !important;
                border-bottom:25px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T3_C);?> !important;
                border-right:25px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_T3_C);?> !important;
                width:60% !important;
                height:60%!important;
            }
        <?php } ?>
        .RW_Loader_Frame_Navigation{
            position:relative;
            left:50%;
            width:80px;
            height:80px;
            transform:translateX(-50%);
            -webkit-transform:translateX(-50%);
            -ms-transform:translateX(-50%);
            -moz-transform:translateX(-50%);
            -o-transform:translateX(-50%);
        }
        .rw-slider-image-loading-text<?php echo esc_html($rw_slider_image_id);?>{
            position:relative;
            text-align:center;
            margin-top:10px;
            font-size: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FS);?>px !important;
            font-family:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FF);?> !important;
            color: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_C);?> !important;
        }
        .loader_Navigation1,.loader_Navigation2,.loader_Navigation3,.loader_Navigation4 { position:absolute; border:5px solid transparent; border-radius:50%; }
        .loader_Navigation1<?php echo esc_html($rw_slider_image_id);?>{
            box-sizing:border-box;
            -webkit-box-sizing:border-box;
            -ms-box-sizing:border-box;
            -moz-box-sizing:border-box;
            -o-box-sizing:border-box;
        }
        .loader_Navigation2<?php echo esc_html($rw_slider_image_id);?>{
            -webkit-box-sizing:border-box;
            -ms-box-sizing:border-box;
            -moz-box-sizing:border-box;
            -o-box-sizing:border-box;
            box-sizing:border-box;
            top:50%;
            left:50%;
            transform:translateY(-50%) translateX(-50%);
            -webkit-transform:translateY(-50%) translateX(-50%);
            -ms-transform:translateY(-50%) translateX(-50%);
            -moz-transform:translateY(-50%) translateX(-50%);
            -o-transform:translateY(-50%) translateX(-50%);
        }
        .loader_Navigation3<?php echo esc_html($rw_slider_image_id);?>{
            width:60%;
            height:60%;
            top:50%;
            left:50%;
            box-sizing:border-box;
            -webkit-box-sizing:border-box;
            -ms-box-sizing:border-box;
            -moz-box-sizing:border-box;
            -o-box-sizing:border-box;
            transform:translateY(-50%) translateX(-50%);
            -webkit-transform:translateY(-50%) translateX(-50%);
            -ms-transform:translateY(-50%) translateX(-50%);
            -moz-transform:translateY(-50%) translateX(-50%);
            -o-transform:translateY(-50%) translateX(-50%);
            animation:clockLoadingmin 1s linear 500;
            -webkit-animation:clockLoadingmin 1s linear 500;
            -ms-animation:clockLoadingmin 1s linear 500;
            -moz-animation:clockLoadingmin 1s linear 500;
            -o-animation:clockLoadingmin 1s linear 500;
        }
        .loader_Navigation1{
            width:100%;
            height:100%;
            animation:clockLoading 1s linear 500;
            -webkit-animation:clockLoading 1s linear 500;
            -ms-animation:clockLoading 1s linear 500;
            -moz-animation:clockLoading 1s linear 500;
            -o-animation:clockLoading 1s linear 500;
        }
        .loader_Navigation2{
            width:80%;
            height:80%;
            animation:anticlockLoading 1s linear 500;
            -webkit-animation:anticlockLoading 1s linear 500;
            -ms-animation:anticlockLoading 1s linear 500;
            -moz-animation:anticlockLoading 1s linear 500;
            -o-animation:anticlockLoading 1s linear 500;
        }
        @keyframes clockLoading { from { transform:rotate(0deg); } to { transform:rotate(360deg); } }
        @keyframes anticlockLoading { from { transform:translateY(-50%) translateX(-50%) rotate(0deg); } to { transform:translateY(-50%) translateX(-50%) rotate(-360deg); } }
        @keyframes clockLoadingmin { from { transform:translateY(-50%) translateX(-50%) rotate(0deg); } to { transform:translateY(-50%) translateX(-50%) rotate(360deg); } }
        @-moz-keyframes clockLoading { from { -moz-transform:rotate(0deg); } to { -moz-transform:rotate(360deg); } }
        @-moz-keyframes anticlockLoading { from { -moz-transform:translateY(-50%) translateX(-50%) rotate(0deg); } to { -moz-transform:translateY(-50%) translateX(-50%) rotate(-360deg); } }
        @-moz-keyframes clockLoadingmin { from { -moz-transform:translateY(-50%) translateX(-50%) rotate(0deg); } to { -moz-transform:translateY(-50%) translateX(-50%) rotate(360deg); } }
        @-webkit-keyframes clockLoading { from { -webkit-transform:rotate(0deg); } to { -webkit-transform:rotate(360deg); } }
        @-webkit-keyframes anticlockLoading { from { -webkit-transform:translateY(-50%) translateX(-50%) rotate(0deg); } to { -webkit-transform:translateY(-50%) translateX(-50%) rotate(-360deg); } }
        @-webkit-keyframes clockLoadingmin { from { -webkit-transform:translateY(-50%) translateX(-50%) rotate(0deg); } to { -webkit-transform:translateY(-50%) translateX(-50%) rotate(360deg); } }
        /*Second Loader*/
        .overlay-loader<?php echo esc_html($rw_slider_image_id);?> { display: block; margin: auto; width: 97px; height: 60px; position:relative; top: 0; left: 0; right: 0; bottom: 0; }
        <?php if($rw_loader_options_arr->Rich_Web_DynamicSl_L_S == "small") { ?>
            .overlay-loader<?php echo esc_html($rw_slider_image_id);?> { height: 40px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> { width: 49px !important; height: 49px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(2) { width: 3px !important; height: 3px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(3) { width: 9px !important; height: 9px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(4) { width: 14px !important; height: 14px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(5) { width: 19px !important; height: 19px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(6) { width: 24px !important; height: 24px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(7) { width: 28px !important; height: 28px !important; }
        <?php } elseif($rw_loader_options_arr->Rich_Web_DynamicSl_L_S == "middle") { ?>
            .overlay-loader<?php echo esc_html($rw_slider_image_id);?> { height: 50px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> { width: 67px !important; height: 67px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(2) { width: 8px !important; height: 8px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(3) { width: 14px !important; height: 14px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(4) { width: 20px !important; height: 20px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(5) { width: 26px !important; height: 26px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(6) { width: 32px !important; height: 32px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(7) { width: 38px !important; height: 38px !important; }
        <?php } else { ?>
            .loader<?php echo esc_html($rw_slider_image_id);?> { width: 97px !important; height: 97px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(2) { width: 12px !important; height: 12px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(3) { width: 18px !important; height: 18px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(4) { width: 23px !important; height: 23px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(5) { width: 31px !important; height: 31px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(6) { width: 39px !important; height: 39px !important; }
            .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(7) { width: 49px !important; height: 49px !important; }
        <?php } ?>
        .loader<?php echo esc_html($rw_slider_image_id);?>{
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            width: 97px;
            height: 97px;
            animation-name: rotateAnim;
            -o-animation-name: rotateAnim;
            -ms-animation-name: rotateAnim;
            -webkit-animation-name: rotateAnim;
            -moz-animation-name: rotateAnim;
            animation-duration: 0.4s;
            -o-animation-duration: 0.4s;
            -ms-animation-duration: 0.4s;
            -webkit-animation-duration: 0.4s;
            -moz-animation-duration: 0.4s;
            animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            animation-timing-function: linear;
            -o-animation-timing-function: linear;
            -ms-animation-timing-function: linear;
            -webkit-animation-timing-function: linear;
            -moz-animation-timing-function: linear;
        }
        .loader<?php echo esc_html($rw_slider_image_id);?> div{
            width: 8px;
            height: 8px;
            border-radius: 50%;
            border: 1px solid <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_C);?>;
            position: absolute;
            top: 2px;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }
        .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(odd) { border-top: none; border-left: none; }
        .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(even) { border-bottom: none; border-right: none; }
        .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(2) { border-width: 2px; left: 0px; top: -4px; width: 12px; height:12px; }
        .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(3) { border-width: 2px; left: -1px; top: 3px; width: 18px; height:18px; }
        .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(4) { border-width: 3px; left: -1px; top: -4px; width: 23px; height:23px; }
        .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(5) { border-width: 3px; left: -1px; top: 4px; width: 31px; height:31px; }
        .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(6) { border-width: 4px; left: 0px; top: -4px; width: 39px; height:39px; }
        .loader<?php echo esc_html($rw_slider_image_id);?> div:nth-child(7) { border-width: 4px; left: 0px; top: 6px; width: 49px; height:49px; }
        @keyframes rotateAnim { from { transform: rotate(360deg); } to { transform: rotate(0deg); } }
        @-o-keyframes rotateAnim { from { -o-transform: rotate(360deg); } to { -o-transform: rotate(0deg); } }
        @-ms-keyframes rotateAnim { from { -ms-transform: rotate(360deg); } to { -ms-transform: rotate(0deg); } }
        @-webkit-keyframes rotateAnim { from { -webkit-transform: rotate(360deg); } to { -webkit-transform: rotate(0deg); } }
        @-moz-keyframes rotateAnim { from { -moz-transform: rotate(360deg); } to { -moz-transform: rotate(0deg); } }
        /*Third Loader*/
        <?php if($rw_loader_options_arr->Rich_Web_DynamicSl_L_S == "small") { ?>
            .windows8<?php echo esc_html($rw_slider_image_id);?> { width: 45px !important; height:45px !important; }
            .windows8<?php echo esc_html($rw_slider_image_id);?> .wBall { width: 42px !important; height: 42px !important; }
        <?php } elseif($rw_loader_options_arr->Rich_Web_DynamicSl_L_S == "middle") { ?>
            .windows8<?php echo esc_html($rw_slider_image_id);?> { width: 60px !important; height:60px !important; }
            .windows8<?php echo esc_html($rw_slider_image_id);?> .wBall { width: 56px !important; height: 56px !important; }
        <?php } else { ?>
            .windows8<?php echo esc_html($rw_slider_image_id);?> { width: 78px !important; height:78px !important; }
            .windows8<?php echo esc_html($rw_slider_image_id);?> .wBall { width: 74px !important; height: 74px !important; }
        <?php } ?>
        .windows8<?php echo esc_html($rw_slider_image_id);?> { position: relative; width: 78px; height:78px; margin:auto; }
        .windows8<?php echo esc_html($rw_slider_image_id);?> .wBall{
            position: absolute;
            width: 74px;
            height: 74px;
            opacity: 0;
            transform: rotate(225deg);
            -o-transform: rotate(225deg);
            -ms-transform: rotate(225deg);
            -webkit-transform: rotate(225deg);
            -moz-transform: rotate(225deg);
            animation: orbit 6.96s infinite;
            -o-animation: orbit 6.96s infinite;
            -ms-animation: orbit 6.96s infinite;
            -webkit-animation: orbit 6.96s infinite;
            -moz-animation: orbit 6.96s infinite;
        }
        .windows8<?php echo esc_html($rw_slider_image_id);?> .wBall .wInnerBall{
            position: absolute;
            width: 10px;
            height: 10px;
            background: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_C);?>;
            left:0px;
            top:0px;
            border-radius: 10px;
        }
        .windows8<?php echo esc_html($rw_slider_image_id);?> #wBall_1{
            animation-delay: 1.52s;
            -o-animation-delay: 1.52s;
            -ms-animation-delay: 1.52s;
            -webkit-animation-delay: 1.52s;
            -moz-animation-delay: 1.52s;
        }
        .windows8<?php echo esc_html($rw_slider_image_id);?> #wBall_2{
            animation-delay: 0.3s;
            -o-animation-delay: 0.3s;
            -ms-animation-delay: 0.3s;
            -webkit-animation-delay: 0.3s;
            -moz-animation-delay: 0.3s;
        }
        .windows8<?php echo esc_html($rw_slider_image_id);?> #wBall_3{
            animation-delay: 0.61s;
            -o-animation-delay: 0.61s;
            -ms-animation-delay: 0.61s;
            -webkit-animation-delay: 0.61s;
            -moz-animation-delay: 0.61s;
        }
        .windows8<?php echo esc_html($rw_slider_image_id);?> #wBall_4{
            animation-delay: 0.91s;
            -o-animation-delay: 0.91s;
            -ms-animation-delay: 0.91s;
            -webkit-animation-delay: 0.91s;
            -moz-animation-delay: 0.91s;
        }
        .windows8<?php echo esc_html($rw_slider_image_id);?> #wBall_5{
            animation-delay: 1.22s;
            -o-animation-delay: 1.22s;
            -ms-animation-delay: 1.22s;
            -webkit-animation-delay: 1.22s;
            -moz-animation-delay: 1.22s;
        }
        @keyframes orbit{
            0% { opacity: 1; z-index:99; transform: rotate(180deg); animation-timing-function: ease-out; }
            7% { opacity: 1; transform: rotate(300deg); animation-timing-function: linear; origin:0%; }
            30% { opacity: 1; transform: rotate(410deg); animation-timing-function: ease-in-out; origin:7%; }
            39% { opacity: 1; transform: rotate(645deg); animation-timing-function: linear; origin:30%; }
            70% { opacity: 1; transform: rotate(770deg); animation-timing-function: ease-out; origin:39%; }
            75% { opacity: 1; transform: rotate(900deg); animation-timing-function: ease-out; origin:70%; }
            76% { opacity: 0; transform: rotate(900deg); }
            100% { opacity: 0; transform: rotate(900deg); }
        }
        @-o-keyframes orbit{
            0% { opacity: 1; z-index:99; -o-transform: rotate(180deg); -o-animation-timing-function: ease-out; }
            7% { opacity: 1; -o-transform: rotate(300deg); -o-animation-timing-function: linear; -o-origin:0%; }
            30% { opacity: 1; -o-transform: rotate(410deg); -o-animation-timing-function: ease-in-out; -o-origin:7%; }
            39% { opacity: 1; -o-transform: rotate(645deg); -o-animation-timing-function: linear; -o-origin:30%; }
            70% { opacity: 1; -o-transform: rotate(770deg); -o-animation-timing-function: ease-out; -o-origin:39%; }
            75% { opacity: 1; -o-transform: rotate(900deg); -o-animation-timing-function: ease-out; -o-origin:70%; }
            76% { opacity: 0; -o-transform: rotate(900deg); }
            100% { opacity: 0; -o-transform: rotate(900deg); }
        }
        @-ms-keyframes orbit{
            0% { opacity: 1; z-index:99; -ms-transform: rotate(180deg); -ms-animation-timing-function: ease-out; }
            7% { opacity: 1; -ms-transform: rotate(300deg); -ms-animation-timing-function: linear; -ms-origin:0%; }
            30% { opacity: 1; -ms-transform: rotate(410deg); -ms-animation-timing-function: ease-in-out; -ms-origin:7%; }
            39% { opacity: 1; -ms-transform: rotate(645deg); -ms-animation-timing-function: linear; -ms-origin:30%; }
            70% { opacity: 1; -ms-transform: rotate(770deg); -ms-animation-timing-function: ease-out; -ms-origin:39%; }
            75% { opacity: 1; -ms-transform: rotate(900deg); -ms-animation-timing-function: ease-out; -ms-origin:70%; }
            76% { opacity: 0; -ms-transform: rotate(900deg); }
            100% { opacity: 0; -ms-transform: rotate(900deg); }
        }
        @-webkit-keyframes orbit{
            0% { opacity: 1; z-index:99; -webkit-transform: rotate(180deg); -webkit-animation-timing-function: ease-out; }
            7% { opacity: 1; -webkit-transform: rotate(300deg); -webkit-animation-timing-function: linear; -webkit-origin:0%; }
            30% { opacity: 1; -webkit-transform: rotate(410deg); -webkit-animation-timing-function: ease-in-out; -webkit-origin:7%;}
            39% { opacity: 1; -webkit-transform: rotate(645deg); -webkit-animation-timing-function: linear; -webkit-origin:30%; }
            70% { opacity: 1; -webkit-transform: rotate(770deg); -webkit-animation-timing-function: ease-out; -webkit-origin:39%; }
            75% { opacity: 1; -webkit-transform: rotate(900deg); -webkit-animation-timing-function: ease-out; -webkit-origin:70%; }
            76% { opacity: 0; -webkit-transform: rotate(900deg); }
            100% { opacity: 0; -webkit-transform: rotate(900deg); }
        }
        @-moz-keyframes orbit{
            0% { opacity: 1; z-index:99; -moz-transform: rotate(180deg); -moz-animation-timing-function: ease-out; }
            7% { opacity: 1; -moz-transform: rotate(300deg); -moz-animation-timing-function: linear; -moz-origin:0%; }
            30% { opacity: 1; -moz-transform: rotate(410deg); -moz-animation-timing-function: ease-in-out; -moz-origin:7%; }
            39% { opacity: 1; -moz-transform: rotate(645deg); -moz-animation-timing-function: linear; -moz-origin:30%; }
            70% { opacity: 1; -moz-transform: rotate(770deg); -moz-animation-timing-function: ease-out; -moz-origin:39%; }
            75% { opacity: 1; -moz-transform: rotate(900deg); -moz-animation-timing-function: ease-out; -moz-origin:70%; }
            76% { opacity: 0; -moz-transform: rotate(900deg); }
            100% { opacity: 0; -moz-transform: rotate(900deg); }
        }
        /*Fourth loader*/
        <?php if($rw_loader_options_arr->Rich_Web_DynamicSl_L_S == "small") { ?>
            .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> { width: 30px !important; height: 30px !important; }
        <?php } elseif($rw_loader_options_arr->Rich_Web_DynamicSl_L_S == "middle") { ?>
            .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> { width: 40px !important; height: 40px !important; }
        <?php } else { ?>
            .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> { width: 50px !important; height: 50px !important; }
        <?php } ?>
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>{
            width: 50px;
            height: 50px;
            margin: 20px auto;
            position: relative;
            transform: rotateZ(45deg);
            -o-transform: rotateZ(45deg);
            -ms-transform: rotateZ(45deg);
            -webkit-transform: rotateZ(45deg);
            -moz-transform: rotateZ(45deg);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube{
            position: relative;
            transform: rotateZ(45deg);
            -o-transform: rotateZ(45deg);
            -ms-transform: rotateZ(45deg);
            -webkit-transform: rotateZ(45deg);
            -moz-transform: rotateZ(45deg);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube{
            float: left;
            width: 50%;
            height: 50%;
            position: relative;
            transform: scale(1.1);
            -o-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube:before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_L_C);?>;
            animation: cssload-fold-thecube 2.76s infinite linear both;
            -o-animation: cssload-fold-thecube 2.76s infinite linear both;
            -ms-animation: cssload-fold-thecube 2.76s infinite linear both;
            -webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
            -moz-animation: cssload-fold-thecube 2.76s infinite linear both;
            transform-origin: 100% 100%;
            -o-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            -webkit-transform-origin: 100% 100%;
            -moz-transform-origin: 100% 100%;
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-2{
            transform: scale(1.1) rotateZ(90deg);
            -o-transform: scale(1.1) rotateZ(90deg);
            -ms-transform: scale(1.1) rotateZ(90deg);
            -webkit-transform: scale(1.1) rotateZ(90deg);
            -moz-transform: scale(1.1) rotateZ(90deg);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-4{
            transform: scale(1.1) rotateZ(180deg);
            -o-transform: scale(1.1) rotateZ(180deg);
            -ms-transform: scale(1.1) rotateZ(180deg);
            -webkit-transform: scale(1.1) rotateZ(180deg);
            -moz-transform: scale(1.1) rotateZ(180deg);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-3{
            transform: scale(1.1) rotateZ(270deg);
            -o-transform: scale(1.1) rotateZ(270deg);
            -ms-transform: scale(1.1) rotateZ(270deg);
            -webkit-transform: scale(1.1) rotateZ(270deg);
            -moz-transform: scale(1.1) rotateZ(270deg);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-2:before{
            animation-delay: 0.35s;
            -o-animation-delay: 0.35s;
            -ms-animation-delay: 0.35s;
            -webkit-animation-delay: 0.35s;
            -moz-animation-delay: 0.35s;
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-4:before{
            animation-delay: 0.69s;
            -o-animation-delay: 0.69s;
            -ms-animation-delay: 0.69s;
            -webkit-animation-delay: 0.69s;
            -moz-animation-delay: 0.69s;
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-3:before{
            animation-delay: 1.04s;
            -o-animation-delay: 1.04s;
            -ms-animation-delay: 1.04s;
            -webkit-animation-delay: 1.04s;
            -moz-animation-delay: 1.04s;
        }
        @keyframes cssload-fold-thecube{
            0%, 10% { transform: perspective(136px) rotateX(-180deg); opacity: 0; }
            25%, 75% { transform: perspective(136px) rotateX(0deg); opacity: 1; }
            90%, 100% { transform: perspective(136px) rotateY(180deg); opacity: 0; }
        }
        @-o-keyframes cssload-fold-thecube{
            0%, 10% { -o-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
            25%, 75% { -o-transform: perspective(136px) rotateX(0deg); opacity: 1; }
            90%, 100% { -o-transform: perspective(136px) rotateY(180deg); opacity: 0; }
        }
        @-ms-keyframes cssload-fold-thecube{
            0%, 10% { -ms-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
            25%, 75% { -ms-transform: perspective(136px) rotateX(0deg); opacity: 1; }
            90%, 100% { -ms-transform: perspective(136px) rotateY(180deg); opacity: 0; }
        }
        @-webkit-keyframes cssload-fold-thecube{
            0%, 10% { -webkit-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
            25%, 75% { -webkit-transform: perspective(136px) rotateX(0deg); opacity: 1; }
            90%, 100% { -webkit-transform: perspective(136px) rotateY(180deg); opacity: 0; }
        }
        @-moz-keyframes cssload-fold-thecube{
            0%, 10% { -moz-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
            25%, 75% { -moz-transform: perspective(136px) rotateX(0deg); opacity: 1; }
            90%, 100% { -moz-transform: perspective(136px) rotateY(180deg); opacity: 0; }
        }
        /*First Text*/
        .cssload-loader<?php echo esc_html($rw_slider_image_id);?>{
            width: 244px;
            height: 49px;
            line-height: 49px;
            text-align: center;
            position: relative;
            left: 50%;
            transform: translate(-50%, 0%);
            -o-transform: translate(-50%, 0%);
            -ms-transform: translate(-50%, 0%);
            -webkit-transform: translate(-50%, 0%);
            -moz-transform: translate(-50%, 0%);
            font-family: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FF);?> !important;
            text-transform: none !important;
            font-weight: 900;
            font-size:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FS);?>px !important;
            color: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_C);?> !important;
            letter-spacing: 0.2em;
            margin-top:10px;
        }
        .cssload-loader<?php echo esc_html($rw_slider_image_id);?>::before, .cssload-loader<?php echo esc_html($rw_slider_image_id);?>::after{
            content: "";
            display: block;
            width: 15px;
            height: 15px;
            background: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T2_BC);?> !important;
            position: absolute;
            animation: cssload-load 0.81s infinite alternate ease-in-out;
            -o-animation: cssload-load 0.81s infinite alternate ease-in-out;
            -ms-animation: cssload-load 0.81s infinite alternate ease-in-out;
            -webkit-animation: cssload-load 0.81s infinite alternate ease-in-out;
            -moz-animation: cssload-load 0.81s infinite alternate ease-in-out;
        }
        .cssload-loader<?php echo esc_html($rw_slider_image_id);?>::before { top: 0; }
        .cssload-loader<?php echo esc_html($rw_slider_image_id);?>::after { bottom: 0; }
        @keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left:229px; height: 29px; width: 15px; } }
        @-o-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left:229px; height: 29px; width: 15px; } }
        @-ms-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left:229px; height: 29px; width: 15px; } }
        @-moz-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left:229px; height: 29px; width: 15px; } }
        @-webkit-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
        /*Second*/
        #inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?> { width:100%; margin:auto; text-align:center; }
        .inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>{
            font-size: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FS);?>px !important;
            font-family:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FF);?> !important;
            color: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_C);?> !important;
            text-decoration:none;
            font-weight:normal;
            font-style:normal;
            display:inline-block;
            animation-name:bounce_inTurnFadingTextG;
            -o-animation-name:bounce_inTurnFadingTextG;
            -ms-animation-name:bounce_inTurnFadingTextG;
            -webkit-animation-name:bounce_inTurnFadingTextG;
            -moz-animation-name:bounce_inTurnFadingTextG;
            animation-duration:2.09s;
            -o-animation-duration:2.09s;
            -ms-animation-duration:2.09s;
            -webkit-animation-duration:2.09s;
            -moz-animation-duration:2.09s;
            animation-iteration-count:infinite;
            -o-animation-iteration-count:infinite;
            -ms-animation-iteration-count:infinite;
            -webkit-animation-iteration-count:infinite;
            -moz-animation-iteration-count:infinite;
            animation-direction:normal;
            -o-animation-direction:normal;
            -ms-animation-direction:normal;
            -webkit-animation-direction:normal;
            -moz-animation-direction:normal;
        }
        <?php foreach($text_array as $key=>$v) { ?>
            #inTurnFadingTextG<?php echo esc_html($rw_slider_image_id);?>_<?php echo esc_html($key+1);?>{
                animation-delay:<?php echo esc_html($anim_sum);?>s !important;
                -o-animation-delay:<?php echo esc_html($anim_sum);?>s !important;
                -ms-animation-delay:<?php echo esc_html($anim_sum);?>s !important;
                -webkit-animation-delay:<?php echo esc_html($anim_sum);?>s !important;
                -moz-animation-delay:<?php echo esc_html($anim_sum);?>s !important;
            }
            <?php $anim_sum=$anim_sum+0.15;?>
        <?php } ?>
        @keyframes bounce_inTurnFadingTextG{
            0% { color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T2_AnC);?>; }
            100% { color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_C);?> !important; }
        }
        @-o-keyframes bounce_inTurnFadingTextG{
            0% { color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T2_AnC);?>; }
            100% { color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_C);?> !important; }
        }
        @-ms-keyframes bounce_inTurnFadingTextG{
            0% { color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T2_AnC);?>; }
            100% { color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_C);?> !important; }
        }
        @-webkit-keyframes bounce_inTurnFadingTextG{
            0% { color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T2_AnC);?>; }
            100% { color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_C);?> !important; }
        }
        @-moz-keyframes bounce_inTurnFadingTextG{
            0% { color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T2_AnC);?>; }
            100% { color:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_C);?> !important; }
        }
        /*Third text*/
        .cssload-preloader<?php echo esc_html($rw_slider_image_id);?> { position: relative; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 10; }
        .cssload-preloader<?php echo esc_html($rw_slider_image_id);?> > .cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box{
            position: relative;
            display:inline-block;
            margin-left:10px;
            margin-top:20px;
            height: 29px;
            left:50%;
            transform:translateX(-50%) !important;
            -webkit-transform:translateX(-50%) !important;
            -ms-transform:translateX(-50%) !important;
            -moz-transform:translateX(-50%) !important;
            -o-transform:translateX(-50%) !important;
            perspective: 195px;
            -o-perspective: 195px;
            -ms-perspective: 195px;
            -webkit-perspective: 195px;
            -moz-perspective: 195px;
        }
        .cssload-preloader<?php echo esc_html($rw_slider_image_id);?> .cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box > div{
            position: relative;
            width: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FS*2);?>px;
            height: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FS*2);?>px;
            background: rgb(204,204,204);
            float: left;
            text-align: center;
            line-height: 2;
            font-size: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FS);?>px !important;
            font-family:<?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FF);?> !important;
            color: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_C);?> !important;
        }
        <?php foreach($text_array as $key=>$v) { ?>
            .cssload-preloader<?php echo esc_html($rw_slider_image_id);?> .cssload-preloader<?php echo esc_html($rw_slider_image_id);?>-box >
            div:nth-child(<?php echo esc_html($key+1);?>){
                background: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?> !important;
                margin-right: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_FS);?>px !important;
                animation: cssload-movement<?php echo esc_html($rw_slider_image_id);?> 690ms ease <?php echo esc_html($str_sum);?>ms infinite alternate;
                -o-animation: cssload-movement<?php echo esc_html($rw_slider_image_id);?> 690ms ease <?php echo esc_html($str_sum);?>ms infinite alternate;
                -ms-animation: cssload-movement<?php echo esc_html($rw_slider_image_id);?> 690ms ease <?php echo esc_html($str_sum);?>ms infinite alternate;
                -webkit-animation: cssload-movement<?php echo esc_html($rw_slider_image_id);?> 690ms ease <?php echo esc_html($str_sum);?>ms infinite
                alternate;
                -moz-animation: cssload-movement<?php echo esc_html($rw_slider_image_id);?> 690ms ease <?php echo esc_html($str_sum);?>ms infinite alternate;
            }
            <?php $str_sum=$str_sum+86.25;?>
        <?php } ?>
        @keyframes cssload-movement<?php echo esc_html($rw_slider_image_id);?>{
            from { transform: scale(1.0) translateY(0px) rotateX(0deg); box-shadow: 0 0 0 rgba(0,0,0,0); }
            to{ transform: scale(1.5) translateY(-24px) rotateX(45deg); box-shadow: 0 24px 39px <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?>; background: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?> !important; }
        }
        @-o-keyframes cssload-movement<?php echo esc_html($rw_slider_image_id);?>{
            from { -o-transform: scale(1.0) translateY(0px) rotateX(0deg); -o-box-shadow: 0 0 0 rgba(0,0,0,0); }
            to{-o-transform: scale(1.5) translateY(-24px) rotateX(45deg);-o-box-shadow: 0 24px 39px <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?>;background: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?> !important;}
        }
        @-ms-keyframes cssload-movement<?php echo esc_html($rw_slider_image_id);?>{
            from { -ms-transform: scale(1.0) translateY(0px) rotateX(0deg); -ms-box-shadow: 0 0 0 rgba(0,0,0,0); }
            to{-ms-transform: scale(1.5) translateY(-24px) rotateX(45deg);-ms-box-shadow: 0 24px 39px <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?>;background: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?> !important;}
        }
        @-webkit-keyframes cssload-movement<?php echo esc_html($rw_slider_image_id);?>{
            from { -webkit-transform: scale(1.0) translateY(0px) rotateX(0deg); -webkit-box-shadow: 0 0 0 rgba(0,0,0,0); }
            to{-webkit-transform: scale(1.5) translateY(-24px) rotateX(45deg);-webkit-box-shadow: 0 24px 39px <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?>;background: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?> !important;}
        }
        @-moz-keyframes cssload-movement<?php echo esc_html($rw_slider_image_id);?>{
            from { -moz-transform: scale(1.0) translateY(0px) rotateX(0deg); -moz-box-shadow: 0 0 0 rgba(0,0,0,0); }
            to{-moz-transform: scale(1.5) translateY(-24px) rotateX(45deg);-moz-box-shadow: 0 24px 39px <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?>;background: <?php echo esc_html($rw_loader_options_arr->Rich_Web_DynamicSl_LT_T3_BgC);?> !important;}
        }
    <?php } else { ?>
        .center_content<?php echo esc_html($rw_slider_image_id);?>{
            position:relative;
            overflow:visible;
            top:50%;
            transform:translateY(-50%);
            -webkit-transform:translateY(-50%);
            -ms-transform:translateY(-50%);
            -moz-transform:translateY(-50%);
            -o-transform:translateY(-50%);
        }
        #RW_Load_Content_Navigation<?php echo esc_html($rw_slider_image_id);?>{
            margin:20px auto !important;
            background-color:transparent !important;
            z-index:999;
            width:500px;
            height:400px;
            max-width:100% !important;
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> { width: 30px !important; height: 30px !important; }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?>{
            width: 50px;
            height: 50px;
            margin: 20px auto;
            position: relative;
            transform: rotateZ(45deg);
            -o-transform: rotateZ(45deg);
            -ms-transform: rotateZ(45deg);
            -webkit-transform: rotateZ(45deg);
            -moz-transform: rotateZ(45deg);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube{
            position: relative;
            transform: rotateZ(45deg);
            -o-transform: rotateZ(45deg);
            -ms-transform: rotateZ(45deg);
            -webkit-transform: rotateZ(45deg);
            -moz-transform: rotateZ(45deg);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube{
            float: left;
            width: 50%;
            height: 50%;
            position: relative;
            transform: scale(1.1);
            -o-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube:before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_BS);?>;
            animation: cssload-fold-thecube 2.76s infinite linear both;
            -o-animation: cssload-fold-thecube 2.76s infinite linear both;
            -ms-animation: cssload-fold-thecube 2.76s infinite linear both;
            -webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
            -moz-animation: cssload-fold-thecube 2.76s infinite linear both;
            transform-origin: 100% 100%;
            -o-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            -webkit-transform-origin: 100% 100%;
            -moz-transform-origin: 100% 100%;
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-2{
            transform: scale(1.1) rotateZ(90deg);
            -o-transform: scale(1.1) rotateZ(90deg);
            -ms-transform: scale(1.1) rotateZ(90deg);
            -webkit-transform: scale(1.1) rotateZ(90deg);
            -moz-transform: scale(1.1) rotateZ(90deg);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-4{
            transform: scale(1.1) rotateZ(180deg);
            -o-transform: scale(1.1) rotateZ(180deg);
            -ms-transform: scale(1.1) rotateZ(180deg);
            -webkit-transform: scale(1.1) rotateZ(180deg);
            -moz-transform: scale(1.1) rotateZ(180deg);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-3{
            transform: scale(1.1) rotateZ(270deg);
            -o-transform: scale(1.1) rotateZ(270deg);
            -ms-transform: scale(1.1) rotateZ(270deg);
            -webkit-transform: scale(1.1) rotateZ(270deg);
            -moz-transform: scale(1.1) rotateZ(270deg);
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-2:before{
            animation-delay: 0.35s;
            -o-animation-delay: 0.35s;
            -ms-animation-delay: 0.35s;
            -webkit-animation-delay: 0.35s;
            -moz-animation-delay: 0.35s;
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-4:before{
            animation-delay: 0.69s;
            -o-animation-delay: 0.69s;
            -ms-animation-delay: 0.69s;
            -webkit-animation-delay: 0.69s;
            -moz-animation-delay: 0.69s;
        }
        .rw-slider-image-loading-cubes<?php echo esc_html($rw_slider_image_id);?> .rw-slider-image-cube-3:before{
            animation-delay: 1.04s;
            -o-animation-delay: 1.04s;
            -ms-animation-delay: 1.04s;
            -webkit-animation-delay: 1.04s;
            -moz-animation-delay: 1.04s;
        }
        @keyframes cssload-fold-thecube{
            0%, 10% { transform: perspective(136px) rotateX(-180deg); opacity: 0; }
            25%, 75% { transform: perspective(136px) rotateX(0deg); opacity: 1; }
            90%, 100% { transform: perspective(136px) rotateY(180deg); opacity: 0; }
        }
        @-o-keyframes cssload-fold-thecube{
            0%, 10% { -o-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
            25%, 75% { -o-transform: perspective(136px) rotateX(0deg); opacity: 1; }
            90%, 100% { -o-transform: perspective(136px) rotateY(180deg); opacity: 0; }
        }
        @-ms-keyframes cssload-fold-thecube{
            0%, 10% { -ms-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
            25%, 75% { -ms-transform: perspective(136px) rotateX(0deg); opacity: 1; }
            90%, 100% { -ms-transform: perspective(136px) rotateY(180deg); opacity: 0; }
        }
        @-webkit-keyframes cssload-fold-thecube{
            0%, 10% { -webkit-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
            25%, 75% { -webkit-transform: perspective(136px) rotateX(0deg); opacity: 1; }
            90%, 100% { -webkit-transform: perspective(136px) rotateY(180deg); opacity: 0; }
        }
        @-moz-keyframes cssload-fold-thecube{
            0%, 10% { -moz-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
            25%, 75% { -moz-transform: perspective(136px) rotateX(0deg); opacity: 1; }
            90%, 100% { -moz-transform: perspective(136px) rotateY(180deg); opacity: 0; }
        }
    <?php } ?>
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> {
        border: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_BW);?>px solid
        <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_BC);?>;
        box-sizing: border-box;
        max-width: 99% !important;
        margin: 15px auto !important;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> {
        text-align:justify !important; 
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> h2
    {
        font-size: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_TFS);?>px !important;
        color: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_TC);?> !important;
        font-family: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_TFF);?>;
        text-transform:none !important;
        letter-spacing:0px !important;
        text-align:justify !important;
        line-height: 1 !important;
        margin: 10px 0 !important;
        padding: 0 !important;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    div.rw_description_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        line-height: 1 !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    a.rw_link<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        font-size: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_LFS);?>px;
        color: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_LC);?> !important;
        font-family: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_LFF);?>;
        background: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_LBgC);?>;
        border: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_LBW);?>px
        <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_LBS);?>
        <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_LBC);?>;
        border-radius: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_LBR);?>px;
        display: inline-block;
        padding: 5px 10px;
        text-decoration: none;
        margin:10px auto;
        line-height: 1;
        cursor: pointer;
        box-shadow:none !important;
        -moz-box-shadow:none !important;
        -webkit-box-shadow:none !important;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    a.rw_link<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>:hover
    {
        color: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_LHC);?> !important;
        background: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_LHBgC);?>;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button
    {
        color: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Arr_C);?>;
        background: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Arr_BgC);?> !important;
        border: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Arr_BW);?>px
        <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Arr_BS);?>
        <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Arr_BC);?>;
        border-radius: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Arr_BR);?>px;
        letter-spacing: 0px;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button:focus { outline: none !important; }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> span:hover button
    {
        color: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Arr_HC);?>;
        background-color: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Arr_HBgC);?> !important;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--dots-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button
    {
        height: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Nav_H);?>px;
        width: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Nav_W);?>px;
        border: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Nav_BW);?>px solid
        <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Nav_BC);?>;
        border-radius: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Nav_BR);?>px;
        margin-right: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Nav_PB);?>px;
        background: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Nav_C);?>;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--dots-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button.active
    {
        background: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Nav_CC);?>;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--dots-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button:hover
    {
        background: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_Nav_HC);?>;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> { overflow: hidden; width: 100%; position: relative; }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> > .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        width: <?php echo (count($rw_slider_image_photos_arr)+1)*100;?>%;
        overflow: hidden;
        display: block;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>:before { content: " "; display: block; }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> > .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        float: left;
        overflow: hidden;
        position: relative;
        display: block;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> > .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>:before
    {
        content: " ";
        display: block;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> > .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--image_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-position: center center;
        z-index: 0;
    }
    <?php if($rw_loader_options_arr->Rich_Web_DynamicSl_ImgT == "Type 1") { ?>
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> > .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
        .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
        .rSlider--image_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
        {
        background-size: 100% 100%;
        }
    <?php } else { ?>
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> > .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
        .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
        .rSlider--image_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
        {
        background-size: 100% 100% !important;
        }
    <?php } ?>
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> > .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        padding: 0px 80px !important;
        max-width: 1200px;
        margin: auto;
        width: 100%;
        position: relative;
        z-index: 2;
        top: 50%;
        left: 0;
        -webkit-transform: translate(0, -50%);
        -moz-transform: translate(0, -50%);
        transform: translate(0, -50%);
        display: block;
        overflow: hidden;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> > .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>:before
    {
        content: " ";
        display: block;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> > .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--bg-color_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        z-index: 1;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--dots-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        padding: 20px;
        position: absolute;
        bottom: 0;
        left: 50%;
        -webkit-transform: translate(-50%, 0);
        -moz-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
        z-index: 2;
        display: block;
        overflow: hidden;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--dots-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>:before
    {
        content: " ";
        display: block;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--dots-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button
    {
        float: left;
        cursor: pointer;
        margin-bottom: 5px;
        padding: 0;
        outline:none !important;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--dots-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button:last-of-type
    {
        margin-right: 0;
        margin-bottom: 0;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> span
    {
        padding: 10px;
        position: absolute;
        overflow: hidden;
        top: 0;
        height: 100%;
        z-index: 3;
        text-align: center;
        cursor: pointer;
        box-sizing: border-box;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> span:first-child { left: 0; }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> span:last-child { right: 0; }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
    .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button
    {
        position: relative;
        top: 50%;
        text-transform: none !important;
        font-weight:100 !important;
        -webkit-transform: translate(0, -50%);
        -moz-transform: translate(0, -50%);
        transform: translate(0, -50%);
        cursor: pointer;
        padding: 10px 5px;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>.css-transitions
    .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        -webkit-transition: all 0.6s ease 0s;
        -moz-transition: all 0.6s ease 0s;
        transition: all 0.6s ease 0s;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>.css-transitions
    .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        -webkit-transition: all 0.6s ease 0s;
        -moz-transition: all 0.6s ease 0s;
        transition: all 0.6s ease 0s;
    }
    .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> { height:100% !important; }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>.css-transitions
    .rSlider--bg-color_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        -webkit-transition: all 0.6s ease 0s;
        -moz-transition: all 0.6s ease 0s;
        transition: all 0.6s ease 0s;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>.css-transitions
    .rSlider--dots-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button
    {
        -webkit-transition: all 0.6s ease 0s;
        -moz-transition: all 0.6s ease 0s;
        transition: all 0.6s ease 0s;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>.css-transitions
    .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button
    {
        -webkit-transition: all 0.6s ease 0s;
        -moz-transition: all 0.6s ease 0s;
        transition: all 0.6s ease 0s;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .rSlider--bg-color_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>{ background: rgba(0, 0, 0, 0.3); }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    {
        position:absolute;
        width: 100%;
        max-width: 50%;
        top:50%;
        max-height:70%;
        overflow-x:hidden;
        padding-right:10px;
        box-sizing:border-box;
        -moz-box-sizing:border-box;
        -webkit-box-sizing:border-box;
        transform:translateY(-50%);
        -webkit-transform:translateY(-50%);
        -ms-transform:translateY(-50%);
        -moz-transform:translateY(-50%);
        -o-transform:translateY(-50%);
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>::-webkit-scrollbar { width: 0.5em; }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px transparent;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
    .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>::-webkit-scrollbar-thumb
    {
        background-color: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_TC);?>;
        outline: <?php echo esc_html($rw_theme_options_arr->Rich_Web_Sl_DS_TC);?>;
    }
    .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>:hover
    .rSlider--bg-color_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> { background: rgba(0, 0, 0, 0); }
    .rSlider--image_RW { position:absolute; width:100%; height:100%; }
    @media (min-width: 0) and (max-width: 500px)
    {
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>
        div.rw_description_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> { display: none; }
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> h2 { font-size: 14px !important; }
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> a { font-size: 14px !important; }
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> > .rSlider--view_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
        .rSlider--slide_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
        .rSlider--container_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> {padding: 150px 80px;}
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
        .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> button { font-size: 10px;line-height:10px !important; }
    }
    @media screen and (max-width:700px)
    {
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
        .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> span { cursor:default !important; }
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
        .rSlider--arrow-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> span button { cursor:default !important; }
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> a {cursor:default !important; }
        .rSlider--image_RW { cursor:default !important; }
    }
    @media screen and (max-width:600px)
    {
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> >
        .rSlider--dots-controls_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> { display:none !important; }
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> {top:65%; }
        .rSlider_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> .slide-styled_<?php echo esc_html($rw_slider_image_manager_arr["id"]);?> h2 {margin:0px; }
    }
    /*video styles*/
    .rw_vd_popup{
        position: absolute;
        font-size: 20px;
        color: rgba(221,51,51,0.4);
        cursor: pointer;
        z-index: 3;
        top: 50%;
        left: 50%;
        -webkit-transform: translateY(-50%) translateX(-50%);
        -ms-transform: translateY(-50%) translateX(-50%);
        -moz-transform: translateY(-50%) translateX(-50%);
        -o-transform: translateY(-50%) translateX(-50%);
        transform: translateY(-50%) translateX(-50%);
    }
    .rw_vDinamic_ic{
        padding: 10px 25px;
        background-color: rgba(221,51,51,0.8);
        color: rgba(255,255,255,0.4);
        border-radius: 8px;
    }
    .dPopupOverlay<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>{
        position: fixed;
        display: -webkit-box; /* OLD - iOS 6-, Safari 3.1-6 */
        display: -moz-box; /* OLD - Firefox 19- (buggy but mostly works) */
        display: -ms-flexbox; /* TWEENER - IE 10 */
        display: -webkit-flex; /* NEW - Chrome */
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        align-items: center;
        justify-content: center;
        align-items: center;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.4);
        z-index: 999999;
        opacity: 0;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }
    .dPopupOverlay<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_anim{
        opacity: 1;
    }
    .dPopupOverlayContent<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>{
        position: fixed;
        width: 1000px;
        height: 562.5px;
        max-width:100%;
        box-sizing: border-box;
        opacity: 0;
        transform:scale(0.8,0.8);
        -webkit-transform:scale(0.8,0.8);
        -ms-transform:scale(0.8,0.8);
        -moz-transform:scale(0.8,0.8);
        -o-transform:scale(0.8,0.8);
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }
    .dPopupOverlayContent<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>_anim{
        opacity: 1;
        transform: scale(1,1);
        -webkit-transform: scale(1,1);
        -ms-transform: scale(1,1);
        -moz-transform: scale(1,1);
        -o-transform: scale(1,1);
    }
    .dPopupVideo<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>,.dPopupImg<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .dPopupVideo<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>{
        display: none;
    }
    .dnSlDelIcon<?php echo esc_html($rw_slider_image_manager_arr["id"]);?>{
        position: fixed;
        top: 5px;
        right: 5px;
        color:#ffffff;
        font-size: 30px;
        text-shadow: 0px 0px 30px #000000;
        cursor: pointer;
    }
</style>
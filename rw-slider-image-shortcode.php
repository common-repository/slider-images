<?php
	function rw_slider_image_shortcode($atts, $content = null) {
		$atts=shortcode_atts(
			array(
				"id"=>"1"
			),$atts
		);
		return rw_slider_image_build($atts['id']);
	}
	add_shortcode('Rich_Web_Slider', 'rw_slider_image_shortcode');
	function rw_slider_image_build($rw_slider_image_get_id) {
		$rw_return_shortcode = [];
		ob_start();
			$rw_slider_image_args = shortcode_atts(array('name' => 'Widget Area','id'=>'','description'=>'','class'=>'','before_widget'=>'','after_widget'=>'','before_title'=>'','AFTER_TITLE'=>'','widget_id'=>'','widget_name'=>'Rich-Web Slider'), $rw_slider_image_get_id, 'Rich_Web_Slider' );
			$rw_slider_image_class=new rich_web_slider_image;
			$rw_slider_image_instance=array('Rich_Web_Slider'=>$rw_slider_image_get_id);
			$rw_slider_image_class->widget($rw_slider_image_args,$rw_slider_image_instance);
			$rw_return_shortcode[]= ob_get_contents();
		ob_end_clean();
		return $rw_return_shortcode[0];
	}

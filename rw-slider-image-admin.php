<?php
	if(!current_user_can('manage_options')) { die('Access Denied'); }
	global $wpdb;
	wp_enqueue_media();
	if($_SERVER["REQUEST_METHOD"] === "POST") {
		if(check_admin_referer( 'rw-slider-image-nonce', 'rw-slider-image-nonce-field' )) {
			$rw_slider_image_title = sanitize_text_field($_POST['Slider_Title']);
			$rw_slider_image_type = sanitize_text_field($_POST['Slider_Type']);
			$rw_items_title = $rw_items_description = $rw_items_img_url = $rw_items_link_url = 	$rw_items_blank = array();
			$rw_slider_image_hidden_num=sanitize_text_field($_POST['rw-slider-image-hidden-num']);
			for($i=1;$i<=$rw_slider_image_hidden_num;$i++) {
				$rw_items_title[$i] = str_replace("\&","&", sanitize_text_field(esc_html($_POST['rw_item_title_' . $i])));
				$rw_items_description[$i] = str_replace("\&","&", sanitize_text_field(esc_html($_POST['rw_item_description_' . $i])));
				$rw_items_img_url[$i] = sanitize_text_field($_POST['rw_item_img_url_' . $i]);
				$rw_items_link_url[$i] = sanitize_text_field($_POST['rw_item_link_' . $i]);
				$rw_items_blank[$i] = sanitize_text_field($_POST['rw_item_blank_' . $i]);
			}
			if(isset($_POST['rw_slider_image_save'])) {
				$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_MANAGER_TABLE." (id, Slider_Title, Slider_Type, Slider_IMGS_Quantity) VALUES (%d, %s, %s, %d)", '', $rw_slider_image_title, $rw_slider_image_type, $rw_slider_image_hidden_num));
				$rw_get_last_slider_id = $wpdb->get_row($wpdb->prepare("SELECT `Slider_ID` FROM ".RW_SLIDER_IMAGE_IDS_TABLE." WHERE id>%d order by id desc limit 1",0),"ARRAY_A");
				$rw_set_new_slider_id = $rw_get_last_slider_id["Slider_ID"] + 1;
				$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_IDS_TABLE." (id, Slider_ID) VALUES (%d, %d)", '', $rw_set_new_slider_id));
				for($i=1;$i<=$rw_slider_image_hidden_num;$i++) {
					$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_INSTALL_TABLE." (id, SL_Img_Title, Sl_Img_Description, Sl_Img_Url, Sl_Link_Url, Sl_Link_NewTab, Sl_Number) VALUES (%d, %s, %s, %s, %s, %s, %d)", '', $rw_items_title[$i], $rw_items_description[$i], $rw_items_img_url[$i], $rw_items_link_url[$i], $rw_items_blank[$i], $rw_set_new_slider_id));
				}
			} else if(isset($_POST['rw_slider_image_update'])) {
				$rw_slider_image_update_id = sanitize_text_field($_POST['rw_slider_image_update_id']);
				$wpdb->query($wpdb->prepare("UPDATE ".RW_SLIDER_IMAGE_MANAGER_TABLE." set Slider_Title=%s, Slider_Type=%s, Slider_IMGS_Quantity=%d WHERE id=%d", $rw_slider_image_title, $rw_slider_image_type, $rw_slider_image_hidden_num, $rw_slider_image_update_id));
				$wpdb->query($wpdb->prepare("DELETE FROM ".RW_SLIDER_IMAGE_INSTALL_TABLE." WHERE Sl_Number=%d", $rw_slider_image_update_id));
				$wpdb->query($wpdb->prepare("DELETE FROM ".RW_SLIDER_VIDEO_INSTALL_TABLE." WHERE Sl_Number=%d", $rw_slider_image_update_id));
				for($i=1;$i<=$rw_slider_image_hidden_num;$i++) {
					$wpdb->query($wpdb->prepare("INSERT INTO ".RW_SLIDER_IMAGE_INSTALL_TABLE." (id, SL_Img_Title, Sl_Img_Description, Sl_Img_Url, Sl_Link_Url, Sl_Link_NewTab, Sl_Number) VALUES (%d, %s, %s, %s, %s, %s, %d)", '', $rw_items_title[$i], $rw_items_description[$i], $rw_items_img_url[$i], $rw_items_link_url[$i], $rw_items_blank[$i], $rw_slider_image_update_id));
				}
			}
		} else {
			wp_die('Security check fail.'); 
		}
	}
	$rw_slider_image_records = $wpdb->get_results($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_MANAGER_TABLE." WHERE id>%d", 0),"ARRAY_A");
	$rw_slider_image_themes = $wpdb->get_results($wpdb->prepare("SELECT * FROM ".RW_SLIDER_IMAGE_EFFECTS_TABLE." WHERE id>%d", 0),"ARRAY_A");
	$rw_slider_image_last = $wpdb->get_row($wpdb->prepare("SELECT `Slider_ID` FROM ".RW_SLIDER_IMAGE_IDS_TABLE." WHERE id>%d order by id desc limit 1",0),"ARRAY_A");
	$rw_slider_image_new = (empty($rw_slider_image_last)) ?  1 :  $rw_slider_image_last["Slider_ID"] + 1;
?>
<form method="POST" enctype="multipart/form-data">
	<?php
		wp_nonce_field( 'rw-slider-image-nonce', 'rw-slider-image-nonce-field' );
		require_once( 'rw-slider-image-header.php' ); 
	 	require_once( 'rw-slider-image-check.php' ); 
	?>
	<div class="rw-slider-image-buttons" style="position: relative; width: 100%; right: 1%; height: 50px;">
		<a href="<?php echo esc_url("https://wordpress.org/support/plugin/slider-images"); ?>" target="_blank">
   			<input type="button"  class="rw-slider-image-support" value="Support" />
		</a>
		<input type='button' class='rw-slider-image-create' id='rw-slider-image-create' value='New Slider' data-id="<?php echo esc_html($rw_slider_image_new);?>"  />
		<input type='submit' class='rw-slider-image-save' value='Save' name='rw_slider_image_save' />
		<input type='submit' class='rw-slider-image-update' value='Update' name='rw_slider_image_update' />
		<input type='button' class='rw-slider-image-cancel' value='Cancel' />
		<input type='text' 	 style='display:none' id="rw_slider_image_update_id" name='rw_slider_image_update_id'>
	</div>
	<div class="rw-slider-image-fixed-div"></div>
	<div class="rw-slider-image-absolute-div">
		<div class="rw-slider-image-relative-div">
		<i class="rw-slider-image-trash-icon rich_web rich_web-trash"></i>
			<p> Are you sure you want to remove ? </p>
			<span class="rw-slider-image-relative-no">No</span>
			<span class="rw-slider-image-relative-yes">Yes</span>
		</div>
	</div>
	<div class='rw-slider-image-table-content' >
		<div class='rw-slider-image-table-records'>
			<table class='rw-slider-image-header-table'>
				<tr class='rw-slider-image-header-tr'>
					<td>No</td>
					<td>Slider Name</td>
					<td>Slider Option</td>
					<td>Images</td>
					<td>Clone</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
			</table>
			<table class='rw-slider-image-content-table'>
				<?php
					$rw_table_index = 1;
					foreach ($rw_slider_image_records as $rw_key => $rw_value) {
						$rw_image_slider_theme = $wpdb->get_var($wpdb->prepare("SELECT `slider_name` FROM ".RW_SLIDER_IMAGE_EFFECTS_TABLE." WHERE id=%d", (int) esc_html( $rw_value["Slider_Type"] )));
						echo sprintf(
							'
								<tr id="rw-slider-image-content-tr-%1$s" class="rw-slider-image-content-tr rw-slider-image-content-tr-%1$s">
									<td>%2$s</td>
									<td>%3$s</td>
									<td>%4$s</td>
									<td>%5$s</td>
									<td class="rw-copy-slider-image-btn" data-id="%1$s"><i class="rw-slider-image-copy-icon rich_web rich_web-files-o"></i></td>
									<td class="rw-edit-slider-image-btn" data-id="%1$s"><i class="rw-slider-image-edit-icon rich_web rich_web-pencil"></i></td>
									<td class="rw-delete-slider-image-btn" data-id="%1$s"><i class="rw-slider-image-delete-icon rich_web rich_web-trash"></i></td>
								</tr>
							',
							esc_attr( $rw_value["id"] ),
							$rw_table_index,
							esc_html( $rw_value["Slider_Title"] ),
							esc_html($rw_image_slider_theme),
							esc_html( $rw_value["Slider_IMGS_Quantity"] )
						);
						$rw_table_index++;
					}
				?>
			</table>
		</div>
		<div class='rw-slider-image-table-edits'>
			<table class="rw-slider-image-table-shortcode" style="display: table; float: right;">
				<tr style="text-align:center">
					<td>Shortcode</td>
				</tr>
				<tr>
					<td>Copy &amp; paste the shortcode directly into any WordPress post or page. </td>
				</tr>
				<tr>
					<td class="rw-copy-shortcode rw-slider-image-shortcode-id" id="rw-slider-image-shortcode-id"  unselectable="on" onselectstart="return false;"  onmousedown="return false;">
						[Rich_Web_Slider id="1"]  
					</td>
				</tr>
				<tr>
					<td>Templete Include</td>
				</tr>
				<tr>
					<td>Copy &amp; paste this code into a template file to include the slideshow within your theme.</td>
				</tr>
				<tr>
					<td class="rw-copy-shortcode rw-slider-image-theme-shortcode-id" id="rw-slider-image-theme-shortcode-id"  unselectable="on" onselectstart="return false;"  onmousedown="return false;">&lt;?php echo do_shortcode('[Rich_Web_Slider id="1"]');?&gt;</td>
				</tr>
			</table>
			<table class='rw-slider-image-table-settings' style='float:left;'>
				<tr>
					<td style='width:100%' colspan='2'> Slider Name </td>
				</tr>
				<tr>
					<td colspan='2'>
						<input type='text' class='rw-slider-image-edit-input rw-slider-image-input-slider-name' name='Slider_Title' placeholder=" * Required" required/>
					</td>
				</tr>
				<tr>
					<td style='width:100%' colspan='2'> Slider Type </td>
				</tr>
				<tr>
					<td colspan='2'>
						<select class='rw-slider-image-edit-input rw-slider-image-input-slider-type' name='Slider_Type'>
							<?php 
								foreach ($rw_slider_image_themes as $rw_value) {
									echo sprintf(
										'
											<option value="%1$s">%2$s</option>
										',
										esc_attr( $rw_value["id"] ),
										esc_html( $rw_value["slider_name"] )
									);
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td class='rw-slider-image-add-img' colspan='3'> Add Image </td>
				</tr>
				<tr>
					<td style='width:100%' colspan='2'> Image Title </td>
				</tr>
				<tr>
					<td colspan='2'>
						<input type='text' class='rw-slider-image-edit-input rw-slider-image-prop-input rw-slider-image-title-img' id='rw-slider-image-title-img'/>
					</td>
				</tr>
				<tr>
					<td style='width:100%;text-align:center;' colspan='2'>
						<div class="rw-media-video-btn">
							<span class="rw-media-video-btn-inner">Add Video</span>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<input type="text" id="rich_web_videoSrc_2" class="JSlInputVideo JSlInputVideo2 rw-slider-image-src-img-select" readonly>
					</td>
				</tr>
				<tr>
					<td style='width:100%' colspan='2'>
						<div id="wp-content-media-buttons" class="wp-media-buttons">
							<a href="#" class="button insert-media add_media" style="border:1px solid rgba(0, 73, 107, 0.8); color:rgba(0, 73, 107, 0.8); background-color:#f4f4f4" data-editor="rw-slider-image-src-img" title="Add Image" id="rw-slider-image-src-img" >
								<span class="wp-media-buttons-icon"></span>Add Image
							</a>
						</div>
						<input type="text" style="display:none;" id="rw-slider-image-src-img" class='rw-slider-image-edit-input rw-slider-image-prop-input'>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<input type="text" id="rw-slider-image-src-img-select" class="rw-slider-image-edit-input rw-slider-image-prop-input rw-slider-image-src-img-select" readonly>
					</td>
				</tr>
				<tr>
					<td style='width:100%' colspan='2'> Image Description </td>
				</tr>
				<tr>
					<td colspan='2'>
						<textarea class='rw-slider-image-edit-input rw-slider-image-prop-input rw-slider-image-desc-img' id='rw-slider-image-desc-img'></textarea>
					</td>
				</tr>
				<tr>
					<td style='width:100%' colspan='2'> Link </td>
				</tr>
				<tr>
					<td>
						<input type='text' class='rw-slider-image-edit-input rw-slider-image-prop-input rw-slider-image-link-img' id='rw-slider-image-link-img'/>
					</td>
					<td>
						New Tab <input type='checkbox' id='rw-slider-image-link-blank' class='rw-slider-image-link-blank'>
					</td>
				</tr>
				<tr>
					<td class="rw-slider-image-add-img" colspan="3" style="padding:0px;">
						<input type="button" class="rw-slider-image-item-save-btn" value="Save" />
						<input type="button" class="rw-slider-image-item-update-btn" value="Update" />
						<input type="button" class="rw-slider-image-item-reset-btn" value="Reset"/>
						<input type="text" style="display:none;" id="rw-slider-image-hidden-num" name="rw-slider-image-hidden-num" value="0">
						<input type="text" style="display:none;" id="rw-slider-image-hidden-update" value="0">
					</td>
				</tr>
			</table>
			<table class='rw-slider-image-table-header-items'>
				<tr>
					<td>No</td>
					<td>Image</td>
					<td>Title</td>
					<td>Clone</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
			</table>
			<table class='rw-slider-image-table-content-items'></table>
		</div>
	</div>
</form>

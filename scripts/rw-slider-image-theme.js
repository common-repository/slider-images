(function ($) {
	'use strict';
	$(function () {
		let rwIntervalFn = null,
			rwClickPro = false,
			rwSetAttributes = function (el, options) {
				Object.keys(options).forEach(function (attr) {
					el.setAttribute(attr, options[attr]);
				})
			},
			rwConditionalCallback = function (selector, callback) {
				return function (e) {
					if (e.target && e.target.matches(selector)) {
						e.delegatedTarget = e.target;
						callback.apply(this, arguments);
						return;
					}
					// Not clicked directly, check bubble path
					var path = event.path || (event.composedPath && event.composedPath());
					if (!path) return;
					for (var i = 0; i < path.length; ++i) {
						var el = path[i];
						if (el.matches(selector)) {
							// Call callback for all elements on the path that match the selector
							e.delegatedTarget = el;
							callback.apply(this, arguments);
						}
						// We reached parent node, stop
						if (el === e.currentTarget) {
							return;
						}
					}
				};
			},
			rwAddDynamicEventListener = function (rootElement, eventType, selector, callback, options) {
				rootElement.addEventListener(eventType, rwConditionalCallback(selector, callback), options);
			},
			rwIntervalEditor = function () {
				if (document.readyState === "complete") {
					let rwAddNewTheme = document.getElementById("rw-add-new-theme");
					document.querySelector(".rw-slider-image-preloader-container").style.display = "none";
					[].forEach.call(document.querySelectorAll(".rw-slider-image-themes-filters > .rw-slider-image-themes-filter"), function (rwFilter) {
						rwFilter.addEventListener("click", function () {
							if (!rwFilter.classList.contains("active")) {
								document.querySelector(".rw-slider-image-themes-filters > .rw-slider-image-themes-filter.active").classList.remove("active");
								document.querySelector(`.rw-slider-image-themes-filters > .rw-slider-image-themes-filter.${rwFilter.dataset.filter}`).classList.add("active");
								[].forEach.call(document.querySelectorAll(".rw-slider-theme-preview-div"), function (rwTheme) {
									if (rwFilter.dataset.filter === "all") {
										rwTheme.style.display = "";
									} else {
										rwTheme.style.display = rwTheme.classList.contains(rwFilter.dataset.filter) ? "" : "none";
									}
								});
							}
							return false;
						});
					});
					rwAddNewTheme.addEventListener("click", function () {
						if (!rwClickPro) {
							rwAddNewTheme.innerHTML = "";
							Object.assign(rwAddNewTheme.style, {
								boxShadow: "0px 0px 2px #af0000",
								backgroundColor: "#990000",
								backgroundImage: "linear-gradient(147deg, #990000 0%, #ff0000 74%)",
								width: "initial"
							});
							let rwWarningIcon = document.createElement("i");
							rwWarningIcon.classList.add("rich_web", "rich_web-warning");
							Object.assign(rwWarningIcon.style, {
								marginRight: "10px",
								animation: "scaledAnim 0.5s alternate infinite ease-in",
								color: "#ffffff"
							});
							rwAddNewTheme.append(rwWarningIcon, document.createTextNode("Pro Option"));
							rwClickPro = true;
						} else {
							window.open("https://rich-web.org/wp-image-slider/", "blank");
						}
					});
					[].forEach.call(document.querySelectorAll(".rw-theme-demo-btn"), function (rwDemo) {
						rwDemo.addEventListener("click", function (event) {
							event.preventDefault();
							event.stopPropagation();
							window.open(rw_slider_image_object.rw_slider_image_demo_links[rwDemo.dataset.id], '_blank');
						});
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-copy-theme', function (event) {
						event.preventDefault();
						event.stopPropagation();
						let rwCopyId = event.target.classList.contains("rw-copy-theme") ? event.target.dataset.id : event.target.parentElement.dataset.id,
							rwCopyDiv = document.getElementById(`rw-slider-theme-preview-div-${rwCopyId}`),
							rwIconsParent = document.getElementById(`rw-slider-theme-actions-${rwCopyId}`);
						rwIconsParent.innerHTML = "";
						let rwNewBtn = document.createElement("button"),
							rwNewIcon = document.createElement("i");
						rwSetAttributes(rwNewBtn, {
							"type": "button",
							"class": "rw-icon--spinner",
							"id": "rw-slider-image-spinner"
						});
						rwNewIcon.classList.add("rich_web", "rich_web-refresh", "rw-slider-image-spin");
						rwNewBtn.append(rwNewIcon, document.createTextNode("Copying"));
						rwIconsParent.appendChild(rwNewBtn);
						rwCopyDiv.classList.add("rw-slider-theme-actions-section-active");
						document.querySelector(".rw-slider-image-loading-container").style.display = "block";
						var rwAjaxData = {
							rw_slider_image_nonce: rw_slider_image_object.rw_slider_image_nonce,
							action: 'rw_copy_theme',
							rw_copy_id: rwCopyId
						};
						$.post(rw_slider_image_object.ajaxurl, rwAjaxData, function (response) {
							if (response.success === true) {
								let rwNewIcon = document.createElement("i");
								rwNewIcon.classList.add("rich_web", "rich_web-check");
								document.getElementById("rw-slider-image-spinner").innerHTML = "";
								document.getElementById("rw-slider-image-spinner").append(rwNewIcon, document.createTextNode("Copied"));
							} else {
								console.error("Unexpected error.");
							}
							setTimeout(() => {
								location.reload();
							}, 150);
						})
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-delete-theme', function (event) {
						event.preventDefault();
						event.stopPropagation();
						let rwDeleteId = event.target.classList.contains("rw-delete-theme") ? event.target.dataset.id : event.target.parentElement.dataset.id,
							rwDeleteDiv = document.getElementById(`rw-slider-theme-preview-div-${rwDeleteId}`),
							rwDeleteIcons = document.getElementById(`rw-slider-theme-actions-${rwDeleteId}`),
							rwNewIcon = document.createElement("i"),
							rwDeleteTrue = document.createElement("button"),
							rwDeleteFalse = document.createElement("button");
						rwDeleteDiv.classList.add("rw-slider-theme-actions-section-active");
						rwNewIcon.classList.add("rw-slider-image-delete-trash", "rich_web", "rich_web-trash");
						rwDeleteDiv.querySelector(".rw-slider-theme-preview-name").innerHTML = "";
						rwDeleteDiv.querySelector(".rw-slider-theme-preview-name").append(rwNewIcon, document.createTextNode("Are you sure you want to remove ?"));
						rwDeleteFalse.classList.add("rw-cancel--btn");
						rwDeleteFalse.dataset.id = rwDeleteId;
						rwDeleteFalse.appendChild(document.createTextNode("Cancel"));
						rwDeleteTrue.classList.add("rw-delete--btn");
						rwDeleteTrue.dataset.id = rwDeleteId;
						rwDeleteTrue.appendChild(document.createTextNode("Delete"));
						rwDeleteIcons.innerHTML = "";
						rwDeleteIcons.append(rwDeleteFalse, rwDeleteTrue);
						rwDeleteIcons.style.top = "65%";
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-cancel--btn', function (event) {
						event.preventDefault();
						let rwCancelId = event.target.dataset.id,
							rwCancelThemeName = document.getElementById(`rw-theme-img-${rwCancelId}`).getAttribute("alt"),
							rwCancelDiv = document.getElementById(`rw-slider-theme-preview-div-${rwCancelId}`),
							rwCancelIcons = document.getElementById(`rw-slider-theme-actions-${rwCancelId}`);
						rwCancelDiv.classList.remove("rw-slider-theme-actions-section-active");
						rwCancelDiv.querySelector(".rw-slider-theme-preview-name").innerHTML = "";
						rwCancelDiv.querySelector(".rw-slider-theme-preview-name").appendChild(document.createTextNode(rwCancelThemeName));
						rwCancelIcons.style.top = "37%";
						let rwEditDiv = document.createElement("div"),
							rwEditIcon = document.createElement("i"),
							rwCopyDiv = document.createElement("div"),
							rwCopyIcon = document.createElement("i"),
							rwDeleteDiv = document.createElement("div"),
							rwDeleteIcon = document.createElement("i");
						rwEditDiv.classList.add("rw-slider-theme-action", "rw-edit-theme");
						rwEditIcon.classList.add("rich_web", "rw-slider-theme-action-edit-icon", "rich_web-pencil");
						rwEditDiv.appendChild(rwEditIcon);
						rwCopyDiv.classList.add("rw-slider-theme-action", "rw-copy-theme");
						rwCopyIcon.classList.add("rich_web", "rw-slider-theme-action-copy-icon", "rich_web-files-o");
						rwCopyDiv.appendChild(rwCopyIcon);
						rwDeleteDiv.classList.add("rw-slider-theme-action", "rw-delete-theme");
						rwDeleteIcon.classList.add("rich_web", "rw-slider-theme-action-delete-icon", "rich_web-trash");
						rwDeleteDiv.appendChild(rwDeleteIcon);
						rwEditDiv.dataset.id = rwCancelId;
						rwCopyDiv.dataset.id = rwCancelId;
						rwDeleteDiv.dataset.id = rwCancelId;
						rwCancelIcons.innerHTML = "";
						rwCancelIcons.append(rwEditDiv, rwCopyDiv, rwDeleteDiv);
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-delete--btn', function (event) {
						event.preventDefault();
						let rwDeleteId = event.target.dataset.id,
							rwDeleteThemeName = document.getElementById(`rw-theme-img-${rwDeleteId}`).getAttribute("alt"),
							rwDeleteDiv = document.getElementById(`rw-slider-theme-preview-div-${rwDeleteId}`),
							rwDeleteIcons = document.getElementById(`rw-slider-theme-actions-${rwDeleteId}`);
						rwDeleteDiv.querySelector(".rw-slider-theme-preview-name").innerHTML = "";
						rwDeleteDiv.querySelector(".rw-slider-theme-preview-name").appendChild(document.createTextNode(rwDeleteThemeName));
						rwDeleteIcons.style.top = "37%";
						rwDeleteIcons.innerHTML = "";
						let rwSpinnerBtn = document.createElement("div"),
							rwSpinnerBtnIcon = document.createElement("i");
						rwSpinnerBtn.classList.add("rw-icon--spinner");
						rwSpinnerBtnIcon.classList.add("rich_web", "rich_web-refresh", "rw-slider-image-spin");
						rwSpinnerBtn.append(rwSpinnerBtnIcon, document.createTextNode("Deleting"));
						rwDeleteIcons.appendChild(rwSpinnerBtn);
						document.querySelector(".rw-slider-image-loading-container").style.display = "block";
						let rwAjaxData = {
							rw_slider_image_nonce: rw_slider_image_object.rw_slider_image_nonce,
							action: 'rw_delete_theme',
							rw_delete_id: rwDeleteId
						};
						$.post(rw_slider_image_object.ajaxurl, rwAjaxData, function (response) {
							if (response.success === true) {
								rwDeleteDiv.remove();
							} else {
								console.error("Unexpected error.");
							}
							setTimeout(() => {
								location.reload();
							}, 150);
						})
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-edit-theme', function (event) {
						event.preventDefault();
						event.stopPropagation();
						let rwEditId = event.target.classList.contains("rw-edit-theme") ? event.target.dataset.id : event.target.parentElement.dataset.id,
							rwEditDiv = document.getElementById(`rw-slider-theme-preview-div-${rwEditId}`),
							rwEditIcons = document.getElementById(`rw-slider-theme-actions-${rwEditId}`),
							rwSpinnerBtn = document.createElement("div"),
							rwSpinnerBtnIcon = document.createElement("i");
						rwEditDiv.classList.add("rw-slider-theme-actions-section-active");
						rwEditIcons.innerHTML = "";
						rwSpinnerBtn.classList.add("rw-icon--spinner");
						rwSpinnerBtnIcon.classList.add("rich_web", "rich_web-refresh", "rw-slider-image-spin");
						rwSpinnerBtn.append(rwSpinnerBtnIcon, document.createTextNode("Editing"));
						rwEditIcons.appendChild(rwSpinnerBtn);
						document.querySelector(".rw-slider-image-loading-container").style.display = "block";
						document.getElementById("rw_is_name_hid_in").setAttribute("value", rwEditId);
						let rwAjaxData = {
							rw_slider_image_nonce: rw_slider_image_object.rw_slider_image_nonce,
							action: 'rw_edit_theme',
							rw_edit_id: rwEditId
						};
						$.post(rw_slider_image_object.ajaxurl, rwAjaxData, function (response) {
							let rwReturnData = response.data,
								rwSliderType = rwReturnData.rw_theme_options.rich_web_slider_type;
							if (response.success === true) {
								for (const [rwKey, rwValue] of Object.entries(rwReturnData)) {
									if (typeof (rwValue) != 'undefined' && rwValue != null) {
										for (const [rwChildKey, rwChildValue] of Object.entries(rwValue)) {
											if (typeof (document.getElementById(rwChildKey)) != 'undefined' && document.getElementById(rwChildKey) != null) {
												if (rwChildValue == 'true' || rwChildValue == 'on') {
													document.getElementById(rwChildKey).setAttribute("checked", true);
												} else if (rwChildValue == 'false' || rwChildValue == '' || rwChildValue == 'none') {
													document.getElementById(rwChildKey).removeAttribute("checked");
												} else {
													document.getElementById(rwChildKey).value = rwChildValue;
												}
											}
											if (typeof (document.querySelector("." + rwChildKey)) != 'undefined' && document.querySelector("." + rwChildKey) != null && document.querySelector("." + rwChildKey).value) {
												document.querySelector("." + rwChildKey).value = rwChildValue;
											}
										}
									}
								}
								let rwCheckKey = "";
								switch (rwSliderType) {
									case "Slider Navigation":
										document.querySelector('.rw-slider-image-theme-options-table-1').style.display = "block";
										rwCheckKey = "NSL";
										break;
									case "Content Slider":
										document.querySelector('.rw-slider-image-theme-options-table-2').style.display = "block";
										rwCheckKey = "ContSl";
										break;
									case "Fashion Slider":
										document.querySelector('.rw-slider-image-theme-options-table-3').style.display = "block";
										rwCheckKey = "FSl";
										break;
									case "Circle Thumbnails":
										document.querySelector('.rw-slider-image-theme-options-table-4').style.display = "block";
										rwCheckKey = "CircleSl";
										break;
									case "Slider Carousel":
										document.querySelector('.rw-slider-image-theme-options-table-5').style.display = "block";
										rwCheckKey = "CarSl";
										break;
									case "Flexible Slider":
										document.querySelector('.rw-slider-image-theme-options-table-6').style.display = "block";
										rwCheckKey = "FlexibleSl";
										break;
									case "Dynamic Slider":
										document.querySelector('.rw-slider-image-theme-options-table-7').style.display = "block";
										rwCheckKey = "DynamicSl";
										break;
									case "Thumbnails Slider & Lightbox":
										document.querySelector('.rw-slider-image-theme-options-table-8').style.display = "block";
										rwCheckKey = "ThSl";
										break;
									case "Accordion Slider":
										document.querySelector('.rw-slider-image-theme-options-table-9').style.display = "block";
										rwCheckKey = "AccSl";
										break;
									case "Animation Slider":
										document.querySelector('.rw-slider-image-theme-options-table-10').style.display = "block";
										rwCheckKey = "AnimSl";
										break;
									default:
										break;
								}
								if (typeof (document.getElementById(`Rich_Web_${rwCheckKey}_L_T`)) != 'undefined' && document.getElementById(`Rich_Web_${rwCheckKey}_L_T`) != null && document.getElementById(`Rich_Web_${rwCheckKey}_L_T`).value === "Type 1") {
									if (typeof (document.querySelector(".Loder_1_Option")) != 'undefined' && document.querySelector(".Loder_1_Option") != null) {
										document.querySelector(".Loder_1_Option").style.display = "block";
									}
								} else {
									if (typeof (document.querySelector(".Loder_1_Option")) != 'undefined' && document.querySelector(".Loder_1_Option") != null) {
										document.querySelector(".Loder_1_Option").style.display = "none";
									}
								}
								if (typeof (document.getElementById(`Rich_Web_${rwCheckKey}_LT_T`)) != 'undefined' && document.getElementById(`Rich_Web_${rwCheckKey}_LT_T`) != null) {
									switch (document.getElementById(`Rich_Web_${rwCheckKey}_LT_T`).value) {
										case "Type 1":
											document.querySelector(".rw_text_color1").style.display = "block";
											break;
										case "Type 2":
											document.querySelector(".rw_text_color2").style.display = "block";
											break;
										case "Type 3":
											document.querySelector(".rw_text_color3").style.display = "block";
											break;
										default:
											break;
									}
									document.querySelector(".rw_text_color").style.display = "none";
								}
								document.getElementById("rich_web_slider_type").style.display = "none";
								document.getElementById("rw-add-new-theme").remove();
								[].forEach.call(document.querySelectorAll(".rw-range-slider-input"), function (rwRange) {
									rwRange.parentElement.querySelector(".rw-range-slider-output").innerHTML = rwRange.value;
								});
								$('input.rw-slider-image-color-picker').alphaColorPicker();
								$('.wp-color-result').attr('title', 'Select');
								$('.wp-color-result').attr('data-current', 'Selected');
								document.querySelector(".rw-slider-image-loading-container").style.display = "none";
								setTimeout(function () {
									document.querySelector(".rw-slider-image-theme-table-records").style.display = "none";
									document.querySelector(".rw-slider-image-options-tables").style.display = "block";
									document.querySelector(".rw-update-theme-options").classList.add("rw-update-theme-options-active");
									document.querySelector(".rw-cancel-theme-options").classList.add("rw-cancel-theme-options-active");
									Object.assign(document.querySelector(".rw-slider-image-support").parentElement.style, {
										"left": "8px",
										"right": "initial"
									});
								}, 100)
							} else {
								console.error("Unexpected error.");
								location.reload();
							}
						})
					});
					document.querySelector(".rw-cancel-theme-options").addEventListener("click", function () {
						location.reload();
					})
					rwAddDynamicEventListener(document.body, 'input', '.rw-range-slider-input', function (event) {
						event.target.parentElement.querySelector(".rw-range-slider-output").innerHTML = event.target.value;
					});
					document.getElementById("rich_web_slider_name").addEventListener("input", function () {
						let rwAjaxData = {
							rw_slider_image_nonce: rw_slider_image_object.rw_slider_image_nonce,
							action: 'rw_check_theme_name',
							rw_theme_id: document.getElementById("rw_is_name_hid_in").value,
							rw_theme_name: document.getElementById("rich_web_slider_name").value
						};
						jQuery.post(rw_slider_image_object.ajaxurl, rwAjaxData, function (response) {
							if (response.success === true) {
								document.querySelector(".rw-input-error-div").style.display = "none";
								document.getElementById("rich_web_slider_name").classList.remove('rw-input-error');
								document.querySelector(".rw-update-theme-options").setAttribute("disabled", false);
							} else {
								document.querySelector(".rw-input-error-div").style.display = "block";
								document.getElementById("rich_web_slider_name").classList.add('rw-input-error');
								document.querySelector(".rw-update-theme-options").setAttribute("disabled", true);
							}
						})
					})
					clearInterval(rwIntervalFn);
				}
			};
		(function rwCallEditor() {
			rwIntervalFn = setInterval(rwIntervalEditor, 1000);
			return rwCallEditor;
		}());
	});
})(jQuery);

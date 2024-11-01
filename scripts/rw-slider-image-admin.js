(function ($) {
	'use strict';
	$(function () {
		let rwIntervalFn = null,
			rwDeleteId = null,
			rwDeleteItemId = null,
			rwClickMedia = false,
			rwMediaInterval = null,
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
					let rwSliderImageCreate = document.querySelector('.rw-slider-image-create'),
						rwSliderImageShortcodeId = document.querySelector('.rw-slider-image-shortcode-id'),
						rwSliderImageThemeShortcodeId = document.querySelector('.rw-slider-image-theme-shortcode-id'),
						rwSliderImageCancel = document.querySelector('.rw-slider-image-cancel'),
						rwSliderImageSave = document.querySelector('.rw-slider-image-save'),
						rwSliderImageTableEdits = document.querySelector('.rw-slider-image-table-edits'),
						rwSliderImageTableRecords = document.querySelector('.rw-slider-image-table-records'),
						rwfadeIn = function (element, duration = 500) {
							element.style.display = 'block';
							element.style.opacity = 0;
							let rwLast = +new Date(),
								rwFrameShow = function () {
									element.style.opacity = +element.style.opacity + (new Date() - rwLast) / duration;
									rwLast = +new Date();
									if (1 > +element.style.opacity) {
										(window.requestAnimationFrame && requestAnimationFrame(rwFrameShow)) || setTimeout(rwFrameShow, 16);
									}
								};
							rwFrameShow();
						},
						rwfadeOut = function (element, duration = 500) {
							let rwLast = +new Date(),
								rwFrameHide = function () {
									element.style.opacity = +element.style.opacity - (new Date() - rwLast) / duration;
									rwLast = +new Date();
									if (+element.style.opacity > 0) {
										(window.requestAnimationFrame && requestAnimationFrame(rwFrameHide)) || setTimeout(rwFrameHide, 16);
									} else {
										element.style.display = 'none';
									}
								};
							rwFrameHide();
						},
						rwTinyMceInit = function () {
							tinymce.init({
								selector: '#rw-slider-image-desc-img',
								menubar: false,
								statusbar: false,
								height: 250,
								plugins: [
									'advlist autolink lists link image charmap print preview hr',
									'searchreplace wordcount code media ',
									'insertdatetime media save table contextmenu directionality',
									'paste textcolor colorpicker textpattern imagetools codesample'
								],
								toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect fontselect fontsizeselect",
								toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink image media code | insertdatetime preview | forecolor backcolor",
								toolbar3: "table | hr | subscript superscript | charmap | print | codesample ",
								fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px',
								font_formats: 'Abadi MT Condensed Light = abadi mt condensed light; Aharoni = aharoni; Aldhabi = aldhabi; Andalus = andalus; Angsana New = angsana new; AngsanaUPC = angsanaupc; Aparajita = aparajita; Arabic Typesetting = arabic typesetting; Arial = arial; Arial Black = arial black; Batang = batang; BatangChe = batangche; Browallia New = browallia new; BrowalliaUPC = browalliaupc; Calibri = calibri; Calibri Light = calibri light; Calisto MT = calisto mt; Cambria = cambria; Candara = candara; Century Gothic = century gothic; Comic Sans MS = comic sans ms; Consolas = consolas; Constantia = constantia; Copperplate Gothic = copperplate gothic; Copperplate Gothic Light = copperplate gothic light; Corbel = corbel; Cordia New = cordia new; CordiaUPC = cordiaupc; Courier New = courier new; DaunPenh = daunpenh; David = david; DFKai-SB = dfkai-sb; DilleniaUPC = dilleniaupc; DokChampa = dokchampa; Dotum = dotum; DotumChe = dotumche; Ebrima = ebrima; Estrangelo Edessa = estrangelo edessa; EucrosiaUPC = eucrosiaupc; Euphemia = euphemia; FangSong = fangsong; Franklin Gothic Medium = franklin gothic medium; FrankRuehl = frankruehl; FreesiaUPC = freesiaupc; Gabriola = gabriola; Gadugi = gadugi; Gautami = gautami; Georgia = georgia; Gisha = gisha; Gulim = gulim; GulimChe = gulimche; Gungsuh = gungsuh; GungsuhChe = gungsuhche; Impact = impact; IrisUPC = irisupc; Iskoola Pota = iskoola pota; JasmineUPC = jasmineupc; KaiTi = kaiti; Kalinga = kalinga; Kartika = kartika; Khmer UI = khmer ui; KodchiangUPC = kodchiangupc; Kokila = kokila; Lao UI = lao ui; Latha = latha; Leelawadee = leelawadee; Levenim MT = levenim mt; LilyUPC = lilyupc; Lucida Console = lucida console; Lucida Handwriting Italic = lucida handwriting italic; Lucida Sans Unicode = lucida sans unicode; Malgun Gothic = malgun gothic; Mangal = mangal; Manny ITC = manny itc; Marlett = marlett; Meiryo = meiryo; Meiryo UI = meiryo ui; Microsoft Himalaya = microsoft himalaya; Microsoft JhengHei = microsoft jhenghei; Microsoft JhengHei UI = microsoft jhenghei ui; Microsoft New Tai Lue = microsoft new tai lue; Microsoft PhagsPa = microsoft phagspa; Microsoft Sans Serif = microsoft sans serif; Microsoft Tai Le = microsoft tai le; Microsoft Uighur = microsoft uighur; Microsoft YaHei = microsoft yahei; Microsoft YaHei UI = microsoft yahei ui; Microsoft Yi Baiti = microsoft yi baiti; MingLiU_HKSCS = mingliu_hkscs; MingLiU_HKSCS-ExtB = mingliu_hkscs-extb; Miriam = miriam; Mongolian Baiti = mongolian baiti; MoolBoran = moolboran; MS UI Gothic = ms ui gothic; MV Boli = mv boli; Myanmar Text = myanmar text; Narkisim = narkisim; Nirmala UI = nirmala ui; News Gothic MT = news gothic mt; NSimSun = nsimsun; Nyala = nyala; Palatino Linotype = palatino linotype; Plantagenet Cherokee = plantagenet cherokee; Raavi = raavi; Rod = rod; Sakkal Majalla = sakkal majalla; Segoe Print = segoe print; Segoe Script = segoe script; Segoe UI Symbol = segoe ui symbol; Shonar Bangla = shonar bangla; Shruti = shruti; SimHei = simhei; SimKai = simkai; Simplified Arabic = simplified arabic; SimSun = simsun; SimSun-ExtB = simsun-extb; Sylfaen = sylfaen; Tahoma = tahoma; Times New Roman = times new roman; Traditional Arabic = traditional arabic; Trebuchet MS = trebuchet ms; Tunga = tunga; Utsaah = utsaah; Vani = vani; Vijaya = vijaya'
							});
						},
						rwSetAttributes = function (el, options) {
							Object.keys(options).forEach(function (attr) {
								el.setAttribute(attr, options[attr]);
							})
						},
						rwReturnAdminHTML = function (n, title, imgSrc, link, newTab) {
							let rwSavedTR = document.createElement("tr"),
								rwNumberNameTD = document.createElement("td"),
								rwImgTD = document.createElement("td"),
								rwTitleTD = document.createElement("td"),
								rwCloneTD = document.createElement("td"),
								rwEditTD = document.createElement("td"),
								rwDeleteTD = document.createElement("td"),
								rwImgDIV = document.createElement("div"),
								rwImg = document.createElement("img"),
								rwCloneIcon = document.createElement("i"),
								rwEditIcon = document.createElement("i"),
								rwDeleteIcon = document.createElement("i"),
								rwTitleInput = document.createElement("input"),
								rwDescInput = document.createElement("input"),
								rwImgInput = document.createElement("input"),
								rwLinkInput = document.createElement("input"),
								rwBlankInput = document.createElement("input");
							rwSavedTR.setAttribute("id", `tr_${n}`);
							rwSetAttributes(rwNumberNameTD, {
								"id": `rw-slider-image-item-add-number-${n}`,
								"name": `rw-slider-image-item-add-number-${n}`
							});
							rwNumberNameTD.appendChild(document.createTextNode(n));
							rwImgTD.setAttribute("id", `rw-slider-image-item-add-img-${n}`);
							rwImgDIV.classList.add("rw-slider-image-video-show");
							rwSetAttributes(rwImg, {
								"id": `rw-slider-image-item-add-img-src-${n}`,
								"name": `rw-slider-image-item-add-img-src-${n}`,
								"src": imgSrc,
								"style": "height:60px;",
							});
							rwImgDIV.appendChild(rwImg);
							rwImgTD.appendChild(rwImgDIV);
							rwSetAttributes(rwTitleTD, {
								"id": `rw-slider-image-item-add-title-${n}`,
								"name": `rw-slider-image-item-add-title-${n}`
							});
							rwTitleTD.appendChild(document.createTextNode(title));
							rwSetAttributes(rwCloneTD, {
								"id": `rw-slider-image-item-td-clone${n}`,
								"class": "rw-copy-item",
								"data-id": n
							});
							rwCloneIcon.classList.add('rw-slider-image-copy-icon', 'rich_web', 'rich_web-files-o');
							rwCloneTD.appendChild(rwCloneIcon);
							rwSetAttributes(rwEditTD, {
								"id": `rw-slider-image-item-td-edit${n}`,
								"class": "rw-edit-item",
								"data-id": n
							});
							rwEditIcon.classList.add('rw-slider-image-edit-icon', 'rich_web', 'rich_web-pencil');
							rwEditTD.appendChild(rwEditIcon);
							rwSetAttributes(rwDeleteTD, {
								"id": `rw-slider-image-item-td-delete${n}`,
								"class": "rw-delete-item",
								"data-id": n
							});
							rwDeleteIcon.classList.add('rw-slider-image-trash-icon', 'rich_web', 'rich_web-trash');
							rwSetAttributes(rwTitleInput, {
								"type": "text",
								"style": "display:none;",
								"class": "rw-slider-image-item-add-title",
								"id": `rw_item_title_${n}`,
								"name": `rw_item_title_${n}`,
								"value": title
							});
							rwSetAttributes(rwDescInput, {
								"type": "text",
								"style": "display:none;",
								"class": "rw-slider-image-item-add-desc",
								"id": `rw_item_description_${n}`,
								"name": `rw_item_description_${n}`,
								"value": ""
							});
							rwSetAttributes(rwImgInput, {
								"type": "text",
								"style": "display:none;",
								"class": "rw-slider-image-item-add-img-url",
								"id": `rw_item_img_url_${n}`,
								"name": `rw_item_img_url_${n}`,
								"value": imgSrc
							});
							rwSetAttributes(rwLinkInput, {
								"type": "text",
								"style": "display:none;",
								"class": "rw-slider-image-item-add-link",
								"id": `rw_item_link_${n}`,
								"name": `rw_item_link_${n}`,
								"value": link
							});
							rwSetAttributes(rwBlankInput, {
								"type": "text",
								"style": "display:none;",
								"class": "rw-slider-image-item-add-new-tab",
								"id": `rw_item_blank_${n}`,
								"name": `rw_item_blank_${n}`,
								"value": newTab
							});
							rwDeleteTD.append(rwDeleteIcon, rwTitleInput, rwDescInput, rwImgInput, rwLinkInput, rwBlankInput);
							rwSavedTR.append(rwNumberNameTD, rwImgTD, rwTitleTD, rwCloneTD, rwEditTD, rwDeleteTD);
							return rwSavedTR;
						},
						rwDescAndCountNumber = function (n, desc) {
							document.getElementById(`rw_item_description_${n}`).value = desc;
							document.getElementById("rw-slider-image-hidden-num").value = n;
						},
						rwSortNumbering = function (el, n) {
							el.setAttribute('id', 'tr_' + n);
							el.querySelector('td:nth-child(1)').innerHTML = n;
							rwSetAttributes(el.querySelector('td:nth-child(1)'), {
								"id": `rw-slider-image-item-add-number-${n}`,
								"name": `rw-slider-image-item-add-number-${n}`
							});
							el.querySelector('td:nth-child(2)').setAttribute('id', 'rw-slider-image-item-add-img-' + n);
							rwSetAttributes(el.querySelector('td:nth-child(2) img'), {
								"id": `rw-slider-image-item-add-img-src-${n}`,
								"name": `rw-slider-image-item-add-img-src-${n}`
							});
							rwSetAttributes(el.querySelector('td:nth-child(3)'), {
								"id": `rw-slider-image-item-add-title-${n}`,
								"name": `rw-slider-image-item-add-title-${n}`
							});
							rwSetAttributes(el.querySelector('td:nth-child(4)'), {
								"id": `rw-slider-image-item-td-clone${n}`,
								"class": "rw-copy-item",
								"data-id": n
							});
							rwSetAttributes(el.querySelector('td:nth-child(5)'), {
								"id": `rw-slider-image-item-td-edit${n}`,
								"class": "rw-edit-item",
								"data-id": n
							});
							rwSetAttributes(el.querySelector('td:nth-child(6)'), {
								"id": `rw-slider-image-item-td-delete${n}`,
								"class": "rw-delete-item",
								"data-id": n
							});
							rwSetAttributes(el.querySelector('.rw-slider-image-item-add-title'), {
								"id": `rw_item_title_${n}`,
								"name": `rw_item_title_${n}`
							});
							rwSetAttributes(el.querySelector('.rw-slider-image-item-add-desc'), {
								"id": `rw_item_description_${n}`,
								"name": `rw_item_description_${n}`
							});
							rwSetAttributes(el.querySelector('.rw-slider-image-item-add-img-url'), {
								"id": `rw_item_img_url_${n}`,
								"name": `rw_item_img_url_${n}`
							});
							rwSetAttributes(el.querySelector('.rw-slider-image-item-add-link'), {
								"id": `rw_item_link_${n}`,
								"name": `rw_item_link_${n}`
							});
							rwSetAttributes(el.querySelector('.rw-slider-image-item-add-new-tab'), {
								"id": `rw_item_blank_${n}`,
								"name": `rw_item_blank_${n}`
							});
						},
						rwResetAll = function () {
							document.querySelector(".rw-slider-image-prop-input").value = "";
							document.querySelector(".rw-slider-image-link-blank").checked = false;
							document.getElementById("rw-slider-image-src-img-select").value = "";
							tinymce.get("rw-slider-image-desc-img").setContent("");
						};
					document.getElementById("rw-slider-image-create").addEventListener("click", function (event) {
						rwSliderImageTableRecords.style.display = 'none';
						Object.assign(document.querySelector('.rw-slider-image-support').parentElement.style, {
							left: "8px",
							right: "initial"
						});
						rwSliderImageCreate.classList.add('JAddSliderAnim');
						rwSliderImageTableEdits.style.display = 'block';
						rwSliderImageSave.classList.add('JSaveSliderAnim');
						rwSliderImageCancel.classList.add('JCanselSliderAnim');
						rwSliderImageShortcodeId.innerHTML = '[Rich_Web_Slider id="' + event.target.dataset.id + '"]   <span class="rw-shortcode-tooltip" >Copy to clipboard</span>';
						rwSliderImageThemeShortcodeId.innerHTML = '&lt;?php echo do_shortcode(&apos;[Rich_Web_Slider id="' + event.target.dataset.id + '"]&apos;);?&gt;  <span class="rw-shortcode-tooltip" >Copy to clipboard</span>';
						rwTinyMceInit();
					});
					document.querySelector(".rw-slider-image-cancel").addEventListener("click", () => { location.reload() });
					document.querySelector(".rw-slider-image-item-save-btn").addEventListener("click", function (event) {
						let rwSliderImageHiddenNum = document.getElementById('rw-slider-image-hidden-num').value,
							rwSliderImageTitleImg = document.getElementById('rw-slider-image-title-img').value,
							rwSliderImageSrcImgSelect = document.getElementById('rw-slider-image-src-img-select').value,
							rwSliderImageLinkImg = document.getElementById('rw-slider-image-link-img').value,
							rwSliderImageDescImg = tinymce.get('rw-slider-image-desc-img').getContent(),
							rwSliderImageNewTab = document.getElementById('rw-slider-image-link-blank').checked;
						document.querySelector(".rw-slider-image-table-content-items").appendChild(rwReturnAdminHTML(parseInt(parseInt(rwSliderImageHiddenNum) + 1), rwSliderImageTitleImg, rwSliderImageSrcImgSelect, rwSliderImageLinkImg, rwSliderImageNewTab))
						rwDescAndCountNumber(parseInt(parseInt(rwSliderImageHiddenNum) + 1), rwSliderImageDescImg);
						rwResetAll();
					});
					document.querySelector(".rw-slider-image-item-update-btn").addEventListener("click", function (event) {
						let rwUpdateNumber = document.getElementById("rw-slider-image-hidden-update").value,
							src = document.getElementById("rw-slider-image-src-img-select").value,
							title = document.getElementById("rw-slider-image-title-img").value,
							description = tinymce.get("rw-slider-image-desc-img").getContent(),
							link = document.getElementById("rw-slider-image-link-img").value,
							newTab = document.getElementById("rw-slider-image-link-blank").checked;
						document.getElementById("rw-slider-image-item-add-img-src-" + rwUpdateNumber).setAttribute("src", src);
						document.getElementById("rw_item_title_" + rwUpdateNumber).value = title;
						document.getElementById("rw-slider-image-item-add-title-" + rwUpdateNumber).innerText = title;
						document.getElementById("rw_item_img_url_" + rwUpdateNumber).value = src;
						document.getElementById("rw_item_description_" + rwUpdateNumber).value = description;
						document.getElementById("rw_item_link_" + rwUpdateNumber).value = link;
						document.getElementById("rw_item_blank_" + rwUpdateNumber).value = newTab;
						document.querySelector('.rw-slider-image-item-save-btn').style.display = 'block';
						document.querySelector('.rw-slider-image-item-update-btn').style.display = 'none';
						if (document.getElementById("rw-slider-image-item-add-img-" + rwUpdateNumber + " div i")) {
							document.getElementById("rw-slider-image-item-add-img-" + rwUpdateNumber + " div i").remove();
						}
						rwResetAll();
					});
					document.querySelector(".rw-slider-image-item-reset-btn").addEventListener("click", function (event) {
						rwResetAll();
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-copy-slider-image-btn', function (event) {
						event.preventDefault();
						let rwCopyID = event.target.classList.contains("rw-copy-slider-image-btn") ? event.target.dataset.id : event.target.parentElement.dataset.id,
							rwCopyData = {
								"rw_slider_image_nonce": rw_slider_image_object.rw_slider_image_nonce,
								action: 'rw_copy_slider',
								rw_copy_id: rwCopyID
							};
						$.post(rw_slider_image_object.ajaxurl, rwCopyData, function (response) {
							response = response.data;
							let rwNewSlider = document.createElement("tr"),
								rwNubmerTD = document.createElement("td"),
								rwTitleTD = document.createElement("td"),
								rwTypeTD = document.createElement("td"),
								rwImgQuantityTD = document.createElement("td"),
								rwCopyTD = document.createElement("td"),
								rwEditTD = document.createElement("td"),
								rwDeleteTD = document.createElement("td"),
								rwCopyIcon = document.createElement("i"),
								rwEditIcon = document.createElement("i"),
								rwDeleteIcon = document.createElement("i");
							rwTitleTD.appendChild(document.createTextNode(response.Slider_Title));
							rwTypeTD.appendChild(document.createTextNode(response.Slider_Type));
							rwImgQuantityTD.appendChild(document.createTextNode(response.Slider_IMGS_Quantity));
							rwCopyIcon.classList.add("rw-slider-image-copy-icon", "rich_web", "rich_web-files-o");
							rwEditIcon.classList.add("rw-slider-image-edit-icon", "rich_web", "rich_web-pencil");
							rwDeleteIcon.classList.add("rw-slider-image-delete-icon", "rich_web", "rich_web-trash");
							rwSetAttributes(rwCopyTD, {
								"class": "rw-copy-slider-image-btn",
								"data-id": response.id
							});
							rwSetAttributes(rwEditTD, {
								"class": "rw-edit-slider-image-btn",
								"data-id": response.id
							});
							rwSetAttributes(rwDeleteTD, {
								"class": "rw-delete-slider-image-btn",
								"data-id": response.id
							});
							rwCopyTD.appendChild(rwCopyIcon);
							rwEditTD.appendChild(rwEditIcon);
							rwDeleteTD.appendChild(rwDeleteIcon);
							rwNewSlider.setAttribute("id", `rw-slider-image-content-tr-${response.id}`);
							rwNewSlider.classList.add("rw-slider-image-content-tr", `rw-slider-image-content-tr-${response.id}`);
							rwNewSlider.append(rwNubmerTD, rwTitleTD, rwTypeTD, rwImgQuantityTD, rwCopyTD, rwEditTD, rwDeleteTD);
							document.querySelector(".rw-slider-image-content-table > tbody").appendChild(rwNewSlider);
							[].forEach.call(document.querySelectorAll(".rw-slider-image-content-tr"), function (rwSlideItem, rwIndex) {
								rwSlideItem.querySelector("td:first-child").innerText = rwIndex + 1;
							});
							rwSliderImageCreate.dataset.id = parseInt(response.id) + 1;
						})
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-edit-slider-image-btn', function (event) {
						let rwEditID = event.target.classList.contains("rw-edit-slider-image-btn") ? event.target.dataset.id : event.target.parentElement.dataset.id;
						rwSliderImageTableRecords.style.display = "none";
						Object.assign(document.querySelector('.rw-slider-image-support').parentElement.style, {
							left: "8px",
							right: "initial",
						});
						rwSliderImageCreate.classList.add('JAddSliderAnim');
						rwSliderImageTableEdits.style.display = "block";
						document.querySelector('.rw-slider-image-update').classList.add('JSaveSliderAnim');
						rwSliderImageCancel.classList.add('JCanselSliderAnim');
						document.getElementById('rw_slider_image_update_id').value = rwEditID;
						rwSliderImageShortcodeId.innerHTML = '[Rich_Web_Slider id="' + rwEditID + '"] <span class="rw-shortcode-tooltip" >Copy to clipboard</span>';
						rwSliderImageThemeShortcodeId.innerHTML = '&lt;?php echo do_shortcode(&apos;[Rich_Web_Slider id="' + rwEditID + '"]&apos;);?&gt; <span class="rw-shortcode-tooltip" >Copy to clipboard</span>';
						rwTinyMceInit();
						let rwEditData = {
							"rw_slider_image_nonce": rw_slider_image_object.rw_slider_image_nonce,
							action: 'rw_edit_slider',
							rw_edit_id: rwEditID,
						};
						$.post(rw_slider_image_object.ajaxurl, rwEditData, function (response) {
							let rwSliderInfo = response.data.sliderInfo,
								rwSliderItems = response.data.sliderItems;
							document.querySelector('.rw-slider-image-input-slider-name').value = rwSliderInfo["Slider_Title"];
							document.querySelector('.rw-slider-image-input-slider-type').value = rwSliderInfo["Slider_Type"];
							document.getElementById('rw-slider-image-hidden-num').value = rwSliderInfo["Slider_IMGS_Quantity"];
							if (rwSliderItems.length) {
								rwSliderItems.forEach((rwSliderItem, rwIndex) => {
									document.querySelector('.rw-slider-image-table-content-items').appendChild(rwReturnAdminHTML((rwIndex + 1), rwSliderItem['SL_Img_Title'], rwSliderItem['Sl_Img_Url'], rwSliderItem['Sl_Link_Url'], rwSliderItem['Sl_Link_NewTab']));
									document.getElementById('rw_item_description_' + (rwIndex + 1)).value = rwSliderItem['Sl_Img_Description'];
								});
							}
						});
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-delete-slider-image-btn', function (event) {
						rwDeleteId = event.target.classList.contains("rw-delete-slider-image-btn") ? event.target.dataset.id : event.target.parentElement.dataset.id;
						rwfadeIn(document.querySelector('.rw-slider-image-fixed-div'));
						rwfadeIn(document.querySelector('.rw-slider-image-absolute-div'));
					});
					document.querySelector(".rw-slider-image-relative-no").addEventListener("click", function () {
						rwDeleteId = null;
						rwDeleteItemId = null;
						rwfadeOut(document.querySelector('.rw-slider-image-fixed-div'));
						rwfadeOut(document.querySelector('.rw-slider-image-absolute-div'));
					});
					document.querySelector(".rw-slider-image-relative-yes").addEventListener("click", function () {
						if (rwDeleteId !== null) {
							let rwDeleteData = {
								"rw_slider_image_nonce": rw_slider_image_object.rw_slider_image_nonce,
								action: 'rw_delete_slider',
								rw_delete_id: rwDeleteId
							};
							$.post(rw_slider_image_object.ajaxurl, rwDeleteData, function (response) {
								if (response.success) {
									document.getElementById(`rw-slider-image-content-tr-${rwDeleteId}`).remove();
									[].forEach.call(document.querySelectorAll(".rw-slider-image-content-tr"), function (rwSlideItem, rwIndex) {
										rwSlideItem.querySelector("td:first-child").innerText = rwIndex + 1;
									});
									rwDeleteId = null;
								} else {
									rwDeleteId = null;
								}
							})
						} else if (rwDeleteItemId !== null) {
							document.getElementById('tr_' + rwDeleteItemId).remove();
							document.getElementById('rw-slider-image-hidden-num').value = document.getElementById('rw-slider-image-hidden-num').value - 1;
							[].forEach.call(document.querySelectorAll(".rw-slider-image-table-content-items tr"), function (rwItem, rwIndex) {
								rwSortNumbering(rwItem, parseInt(parseInt(rwIndex) + 1));
							});
							rwDeleteItemId = null;
						}
						setTimeout(() => {
							rwfadeOut(document.querySelector('.rw-slider-image-fixed-div'));
							rwfadeOut(document.querySelector('.rw-slider-image-absolute-div'));
						}, 100);
					});
					document.querySelector(".rw-media-video-btn").addEventListener("click", function () {
						if (!rwClickMedia) {
							document.querySelector('.rw-media-video-btn-inner').innerText = 'Pro Option';
							rwClickMedia = true;
						} else {
							window.open("https://rich-web.org/wp-image-slider/", "blank");
						}
					});
					document.getElementById("rw-slider-image-src-img").addEventListener("click", function () {
						rwMediaInterval = setInterval(function () {
							let rwMediaImgSrc = document.getElementById('rw-slider-image-src-img').value,
								rwMyImgRegex = /<img[^>]+src="(http:\/\/[^">]+)"/g,
								rwMyImgRegexMatches = rwMyImgRegex.exec(rwMediaImgSrc);
							if (typeof (rwMyImgRegexMatches) != 'undefined' && rwMyImgRegexMatches != null && rwMyImgRegexMatches.length > 0) {
								let rwMyImgSrc = rwMyImgRegexMatches[1];
								document.getElementById('rw-slider-image-src-img-select').value = rwMyImgSrc;
								if (document.getElementById('rw-slider-image-src-img-select').value.length > 0) {
									document.getElementById('rw-slider-image-src-img').value = "";
									clearInterval(rwMediaInterval);
								}
							}
						}, 10);
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-copy-item', function (event) {
						let rwCopyItemID = event.target.classList.contains("rw-copy-item") ? event.target.dataset.id : event.target.parentElement.dataset.id,
							rwItemTitle = document.getElementById('rw-slider-image-item-add-title-' + rwCopyItemID).innerText,
							rwItemSrc = document.getElementById('rw-slider-image-item-add-img-src-' + rwCopyItemID).getAttribute('src'),
							rwItemDescription = document.getElementById('rw_item_description_' + rwCopyItemID).value,
							rwItemLink = document.getElementById('rw_item_link_' + rwCopyItemID).value,
							rwItemNewTab = document.getElementById('rw_item_blank_' + rwCopyItemID).value,
							rwSliderImageHiddenNum = document.getElementById('rw-slider-image-hidden-num').value;
						document.getElementById('tr_' + rwCopyItemID).parentNode.insertBefore(rwReturnAdminHTML(parseInt(parseInt(rwSliderImageHiddenNum) + 1), rwItemTitle, rwItemSrc, rwItemLink, rwItemNewTab), document.getElementById('tr_' + rwCopyItemID).nextSibling);
						rwDescAndCountNumber(parseInt(parseInt(rwSliderImageHiddenNum) + 1), rwItemDescription);
						[].forEach.call(document.querySelectorAll(".rw-slider-image-table-content-items tr"), function (rwItem, rwIndex) {
							rwSortNumbering(rwItem, parseInt(parseInt(rwIndex) + 1));
						});
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-edit-item', function (event) {
						rwResetAll();
						let rwEditItemID = event.target.classList.contains("rw-copy-item") ? event.target.dataset.id : event.target.parentElement.dataset.id,
							rwItemTitle = document.getElementById('rw-slider-image-item-add-title-' + rwEditItemID).innerText,
							rwItemSrc = document.getElementById('rw-slider-image-item-add-img-src-' + rwEditItemID).getAttribute('src'),
							rwItemDescription = document.getElementById('rw_item_description_' + rwEditItemID).value,
							rwItemLink = document.getElementById('rw_item_link_' + rwEditItemID).value,
							rwItemNewTab = document.getElementById('rw_item_blank_' + rwEditItemID).value;
						document.getElementById('rw-slider-image-hidden-update').value = rwEditItemID;
						document.querySelector('.rw-slider-image-item-save-btn').style.display = "none";
						document.querySelector('.rw-slider-image-item-update-btn').style.display = "block";
						document.getElementById('rw-slider-image-title-img').value = rwItemTitle;
						document.getElementById('rw-slider-image-link-img').value = rwItemLink;
						document.getElementById('rw-slider-image-src-img-select').value = rwItemSrc;
						tinymce.get('rw-slider-image-desc-img').setContent(rwItemDescription);
						document.getElementById('rw-slider-image-link-blank').value = (rwItemNewTab == 'true');
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-delete-item', function (event) {
						rwDeleteItemId = event.target.classList.contains("rw-delete-item") ? event.target.dataset.id : event.target.parentElement.dataset.id;
						rwfadeIn(document.querySelector('.rw-slider-image-fixed-div'));
						rwfadeIn(document.querySelector('.rw-slider-image-absolute-div'));
					});
					document.querySelector(".rw-slider-image-table-content-items").addEventListener("mousemove", function () {
						$('.rw-slider-image-table-content-items').sortable({
							update: function () {
								[].forEach.call(document.querySelectorAll(".rw-slider-image-table-content-items tr"), function (rwItem, rwIndex) {
									rwSortNumbering(rwItem, parseInt(parseInt(rwIndex) + 1));
								});
							}
						})
					});
					rwAddDynamicEventListener(document.body, 'click', '.rw-copy-shortcode', function (event) {
						let rwClickedBtn = event.target.classList.contains("rw-copy-shortcode") ? event.target : event.target.parentElement,
							rwCreateCopyInput = document.createElement("input"),
							rwCopyShortcode = rwClickedBtn.innerText;
						rwCopyShortcode = rwCopyShortcode.replace('Copy to clipboard', '');
						rwCopyShortcode = rwCopyShortcode.replace('Copied to clipboard', '');
						rwCopyShortcode = rwCopyShortcode.replace("&lt;", "<");
						rwCopyShortcode = rwCopyShortcode.replace("&gt;", ">");
						rwCopyShortcode = rwCopyShortcode.replace("&#039;", "'");
						rwCopyShortcode = rwCopyShortcode.replace("&#039;", "'");
						rwCreateCopyInput.setAttribute("value", rwCopyShortcode);
						document.body.appendChild(rwCreateCopyInput);
						rwCreateCopyInput.select();
						document.execCommand("copy");
						document.body.removeChild(rwCreateCopyInput);
						rwClickedBtn.querySelector('span').innerText = 'Copied to clipboard';
					});
					rwAddDynamicEventListener(document.body, 'mouseout', '.rw-copy-shortcode', function (event) {
						if (typeof (event.target.querySelector("span")) != 'undefined' && event.target.querySelector("span") != null) {
							event.target.querySelector("span").innerText = "Copy to clipboard";
						}
					});
					clearInterval(rwIntervalFn);
				}
			};
		(function rwCallEditor() {
			rwIntervalFn = setInterval(rwIntervalEditor, 1000);
			return rwCallEditor;
		}());
	});
})(jQuery);

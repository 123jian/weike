		"\t",
			"button_action:            ",
			this.settings.button_action.toString(),
			"\n",
			"\t",
			"button_disabled:          ",
			this.settings.button_disabled.toString(),
			"\n",
			"\t",
			"custom_settings:          ",
			this.settings.custom_settings.toString(),
			"\n",
			"Event Handlers:\n",
			"\t",
			"swfupload_loaded_handler assigned:  ",
			(typeof this.settings.swfupload_loaded_handler === "function")
					.toString(),
			"\n",
			"\t",
			"file_dialog_start_handler assigned: ",
			(typeof this.settings.file_dialog_start_handler === "function")
					.toString(),
			"\n",
			"\t",
			"file_queued_handler assigned:       ",
			(typeof this.settings.file_queued_handler === "function")
					.toString(),
			"\n",
			"\t",
			"file_queue_error_handler assigned:  ",
			(typeof this.settings.file_queue_error_handler === "function")
					.toString(),
			"\n",
			"\t",
			"upload_start_handler assigned:      ",
			(typeof this.settings.upload_start_handler === "function")
					.toString(),
			"\n",
			"\t",
			"upload_progress_handler assigned:   ",
			(typeof this.settings.upload_progress_handler === "function")
					.toString(),
			"\n",
			"\t",
			"upload_error_handler assigned:      ",
			(typeof this.settings.upload_error_handler === "function")
					.toString(),
			"\n",
			"\t",
			"upload_success_handler assigned:    ",
			(typeof this.settings.upload_success_handler === "function")
					.toString(),
			"\n",
			"\t",
			"upload_complete_handler assigned:   ",
			(typeof this.settings.upload_complete_handler === "function")
					.toString(), "\n", "\t",
			"debug_handler assigned:             ",
			(typeof this.settings.debug_handler === "function").toString(),
			"\n" ].join(""));
};
SWFUpload.prototype.addSetting = function(d, f, e) {
	if (f == undefined) {
		return (this.settings[d] = e);
	} else {
		return (this.settings[d] = f);
	}
};
SWFUpload.prototype.getSetting = function(b) {
	if (this.settings[b] != undefined) {
		return this.settings[b];
	}
	return "";
};
SWFUpload.prototype.callFlash = function(functionName, argumentArray) {
	argumentArray = argumentArray || [];
	var movieElement = this.getMovieElement();
	var returnValue, returnString;
	try {
		returnString = movieElement.CallFunction('<invoke name="'
				+ functionName + '" returntype="javascript">'
				+ __flash__argumentsToXML(argumentArray, 0) + "</invoke>");
		returnValue = eval(returnString);
	} catch (ex) {
		throw "Call to " + functionName + " failed";
	}
	if (returnValue != undefined && typeof returnValue.post === "object") {
		returnValue = this.unescapeFilePostParams(returnValue);
	}
	return returnValue;
};
SWFUpload.prototype.selectFile = function() {
	this.callFlash("SelectFile");
};
SWFUpload.prototype.selectFiles = function() {
	this.callFlash("SelectFiles");
};
SWFUpload.prototype.startUpload = function(b) {
	this.callFlash("StartUpload", [ b ]);
};
SWFUpload.prototype.cancelUpload = function(d, c) {
	if (c !== false) {
		c = true;
	}
	this.callFlash("CancelUpload", [ d, c ]);
};
SWFUpload.prototype.stopUpload = function() {
	this.callFlash("StopUpload");
};
SWFUpload.prototype.getStats = function() {
	return this.callFlash("GetStats");
};
SWFUpload.prototype.setStats = function(b) {
	this.callFlash("SetStats", [ b ]);
};
SWFUpload.prototype.getFile = function(b) {
	if (typeof (b) === "number") {
		return this.callFlash("GetFileByIndex", [ b ]);
	} else {
		return this.callFlash("GetFile", [ b ]);
	}
};
SWFUpload.prototype.addFileParam = function(e, d, f) {
	return this.callFlash("AddFileParam", [ e, d, f ]);
};
SWFUpload.prototype.removeFileParam = function(d, c) {
	this.callFlash("RemoveFileParam", [ d, c ]);
};
SWFUpload.prototype.setUploadURL = function(b) {
	this.settings.upload_url = b.toString();
	this.callFlash("SetUploadURL", [ b ]);
};
SWFUpload.prototype.setPostParams = function(b) {
	this.settings.post_params = b;
	this.callFlash("SetPostParams", [ b ]);
};
SWFUpload.prototype.addPostParam = function(d, c) {
	this.settings.post_params[d] = c;
	this.callFlash("SetPostParams", [ this.settings.post_params ]);
};
SWFUpload.prototype.removePostParam = function(b) {
	delete this.settings.post_params[b];
	this.callFlash("SetPostParams", [ this.settings.post_params ]);
};
SWFUpload.prototype.setFileTypes = function(d, c) {
	this.settings.file_types = d;
	this.settings.file_types_description = c;
	this.callFlash("SetFileTypes", [ d, c ]);
};
SWFUpload.prototype.setFileSizeLimit = function(b) {
	this.settings.file_size_limit = b;
	this.callFlash("SetFileSizeLimit", [ b ]);
};
SWFUpload.prototype.setFileUploadLimit = function(b) {
	this.settings.file_upload_limit = b;
	this.callFlash("SetFileUploadLimit", [ b ]);
};
SWFUpload.prototype.setFileQueueLimit = function(b) {
	this.settings.file_queue_limit = b;
	this.callFlash("SetFileQueueLimit", [ b ]);
};
SWFUpload.prototype.setFilePostName = function(b) {
	this.settings.file_post_name = b;
	this.callFlash("SetFilePostName", [ b ]);
};
SWFUpload.prototype.setUseQueryString = function(b) {
	this.settings.use_query_string = b;
	this.callFlash("SetUseQueryString", [ b ]);
};
SWFUpload.prototype.setRequeueOnError = function(b) {
	this.settings.requeue_on_error = b;
	this.callFlash("SetRequeueOnError", [ b ]);
};
SWFUpload.prototype.setHTTPSuccess = function(b) {
	if (typeof b === "string") {
		b = b.replace(" ", "").split(",");
	}
	this.settings.http_success = b;
	this.callFlash("SetHTTPSuccess", [ b ]);
};
SWFUpload.prototype.setAssumeSuccessTimeout = function(b) {
	this.settings.assume_success_timeout = b;
	this.callFlash("SetAssumeSuccessTimeout", [ b ]);
};
SWFUpload.prototype.setDebugEnabled = function(b) {
	this.settings.debug_enabled = b;
	this.callFlash("SetDebugEnabled", [ b ]);
};
SWFUpload.prototype.setButtonImageURL = function(b) {
	if (b == undefined) {
		b = "";
	}
	this.settings.button_image_url = b;
	this.callFlash("SetButtonImageURL", [ b ]);
};
SWFUpload.prototype.setButtonDimensions = function(f, e) {
	this.settings.button_width = f;
	this.settings.button_height = e;
	var d = this.getMovieElement();
	if (d != undefined) {
		d.style.width = f + "px";
		d.style.height = e + "px";
	}
	this.callFlash("SetButtonDimensions", [ f, e ]);
};
SWFUpload.prototype.setButtonText = function(b) {
	this.settings.button_text = b;
	this.callFlash("SetButtonText", [ b ]);
};
SWFUpload.prototype.setButtonTextPadding = function(c, d) {
	this.settings.button_text_top_padding = d;
	this.settings.button_text_left_padding = c;
	this.callFlash("SetButtonTextPadding", [ c, d ]);
};
SWFUpload.prototype.setButtonTextStyle = function(b) {
	this.settings.button_text_style = b;
	this.callFlash("SetButtonTextStyle", [ b ]);
};
SWFUpload.prototype.setButtonDisabled = function(b) {
	this.settings.button_disabled = b;
	this.callFlash("SetButtonDisabled", [ b ]);
};
SWFUpload.prototype.setButtonAction = function(b) {
	this.settings.button_action = b;
	this.callFlash("SetButtonAction", [ b ]);
};
SWFUpload.prototype.setButtonCursor = function(b) {
	this.settings.button_cursor = b;
	this.callFlash("SetButtonCursor", [ b ]);
};
SWFUpload.prototype.queueEvent = function(d, f) {
	if (f == undefined) {
		f = [];
	} else {
		if (!(f instanceof Array)) {
			f = [ f ];
		}
	}
	var e = this;
	if (typeof this.settings[d] === "function") {
		this.eventQueue.push(function() {
			this.settings[d].apply(this, f);
		});
		setTimeout(function() {
			e.executeNextEvent();
		}, 0);
	} else {
		if (this.settings[d] !== null) {
			throw "Event handler " + d + " is unknown or is not a function";
		}
	}
};
SWFUpload.prototype.executeNextEvent = function() {
	var b = this.eventQueue ? this.eventQueue.shift() : null;
	if (typeof (b) === "function") {
		b.apply(this);
	}
};
SWFUpload.prototype.unescapeFilePostParams = function(l) {
	var j = /[$]([0-9a-f]{4})/i;
	var i = {};
	var k;
	if (l != undefined) {
		for ( var h in l.post) {
			if (l.post.hasOwnProperty(h)) {
				k = h;
				var g;
				while ((g = j.exec(k)) !== null) {
					k = k.replace(g[0], String.fromCharCode(parseInt("0x"
							+ g[1], 16)));
				}
				i[k] = l.post[h];
			}
		}
		l.post = i;
	}
	return l;
};
SWFUpload.prototype.testExternalInterface = function() {
	try {
		return this.callFlash("TestExternalInterface");
	} catch (b) {
		return false;
	}
};
SWFUpload.prototype.flashReady = function() {
	var b = this.getMovieElement();
	if (!b) {
		this
				.debug("Flash called back ready but the flash movie can't be found.");
		return;
	}
	this.cleanUp(b);
	this.queueEvent("swfupload_loaded_handler");
};
SWFUpload.prototype.cleanUp = function(f) {
	try {
		if (this.movieElement && typeof (f.CallFunction) === "unknown") {
			this
					.debug("Removing Flash functions hooks (this should only run in IE and should prevent memory leaks)");
			for ( var h in f) {
				try {
					if (typeof (f[h]) === "function") {
						f[h] = null;
					}
				} catch (e) {
				}
			}
		}
	} catch (g) {
	}
	window.__flash__removeCallback = function(c, b) {
		try {
			if (c) {
				c[b] = null;
			}
		} catch (a) {
		}
	};
};
SWFUpload.prototype.fileDialogStart = function() {
	this.queueEvent("file_dialog_start_handler");
};
SWFUpload.prototype.fileQueued = function(b) {
	b = this.unescapeFilePostParams(b);
	this.queueEvent("file_queued_handler", b);
};
SWFUpload.prototype.fileQueueError = function(e, f, d) {
	e = this.unescapeFilePostParams(e);
	this.queueEvent("file_queue_error_handler", [ e, f, d ]);
};
SWFUpload.prototype.fileDialogComplete = function(d, f, e) {
	this.queueEvent("file_dialog_complete_handler", [ d, f, e ]);
};
SWFUpload.prototype.uploadStart = function(b) {
	b = this.unescapeFilePostParams(b);
	this.queueEvent("return_upload_start_handler", b);
};
SWFUpload.prototype.returnUploadStart = function(d) {
	var c;
	if (typeof this.settings.upload_start_handler === "function") {
		d = this.unescapeFilePostParams(d);
		c = this.settings.upload_start_handler.call(this, d);
	} else {
		if (this.settings.upload_start_handler != undefined) {
			throw "upload_start_handler must be a function";
		}
	}
	if (c === undefined) {
		c = true;
	}
	c = !!c;
	this.callFlash("ReturnUploadStart", [ c ]);
};
SWFUpload.prototype.uploadProgress = function(e, f, d) {
	e = this.unescapeFilePostParams(e);
	this.queueEvent("upload_progress_handler", [ e, f, d ]);
};
SWFUpload.prototype.uploadError = function(e, f, d) {
	e = this.unescapeFilePostParams(e);
	this.queueEvent("upload_error_handler", [ e, f, d ]);
};
SWFUpload.prototype.uploadSuccess = function(d, e, f) {
	d = this.unescapeFilePostParams(d);
	this.queueEvent("upload_success_handler", [ d, e, f ]);
};
SWFUpload.prototype.uploadComplete = function(b, e) {
	b = this.unescapeFilePostParams(b);
	this.queueEvent("upload_complete_handler", [ b, e ]);
};
SWFUpload.prototype.debug = function(b) {
	this.queueEvent("debug_handler", b);
};
SWFUpload.prototype.debugMessage = function(h) {
	if (this.settings.debug) {
		var f, g = [];
		if (typeof h === "object" && typeof h.name === "string"
				&& typeof h.message === "string") {
			for ( var e in h) {
				if (h.hasOwnProperty(e)) {
					g.push(e + ": " + h[e]);
				}
			}
			f = g.join("\n") || "";
			g = f.split("\n");
			f = "EXCEPTION: " + g.join("\nEXCEPTION: ");
			SWFUpload.Console.writeLine(f);
		} else {
			SWFUpload.Console.writeLine(h);
		}
	}
};
SWFUpload.Console = {};
SWFUpload.Console.writeLine = function(g) {
	var e, f;
	try {
		e = document.getElementById("SWFUpload_Console");
		if (!e) {
			f = document.createElement("form");
			document.getElementsByTagName("body")[0].appendChild(f);
			e = document.createElement("textarea");
			e.id = "SWFUpload_Console";
			e.style.fontFamily = "monospace";
			e.setAttribute("wrap", "off");
			e.wrap = "off";
			e.style.overflow = "auto";
			e.style.width = "700px";
			e.style.height = "350px";
			e.style.margin = "5px";
			f.appendChild(e);
		}
		e.value += g + "\n";
		e.scrollTop = e.scrollHeight - e.clientHeight;
	} catch (h) {
		showDialog("Exception: " + h.name + " Message: " + h.message, 'alert',
				L.operate_notice);
		// alert("Exception: " + h.name + " Message: " + h.message);
	}
};
(function(c) {
	var b = {
		init : function(d, e) {
			return this
					.each(function() {
						var n = c(this);
						var m = n.clone();
						var j = c.extend({
							id : n.attr("id"),
							swf : "uploadify.swf",
							uploader : "uploadify.php",
							deleter : "",
							auto : true,
							buttonClass : "",
							buttonCursor : "hand",
							buttonImage : null,
							buttonText : L.upload_file,
							checkExisting : false,
							debug : false,
							fileObjName : "upload",
							resText : "file_ids",
							fileSizeLimit : 0,
							fileTypeDesc : "All Files",
							fileTypeExts : "*.*",
							height : 30,
							method : "post",
							multi : true,
							hide : false,
							json : {},
							formData : {},
							preventCaching : true,
							progressData : "percentage",
							queueID : false,
							queueSizeLimit : 999,
							removeCompleted : true,
							removeTimeout : 3,
							requeueErrors : false,
							successTimeout : 30,
							uploadLimit : 0,
							width : 120,
							overrideEvents : []
						}, d);
						var g = {
							assume_success_timeout : j.successTimeout,
							button_placeholder_id : j.id,
							button_width : j.width,
							button_height : j.height,
							button_text : null,
							button_text_style : null,
							button_text_top_padding : 0,
							button_text_left_padding : 0,
							button_action : (j.multi ? SWFUpload.BUTTON_ACTION.SELECT_FILES
									: SWFUpload.BUTTON_ACTION.SELECT_FILE),
							button_disabled : false,
							button_cursor : (j.buttonCursor == "arrow" ? SWFUpload.CURSOR.ARROW
									: SWFUpload.CURSOR.HAND),
							button_window_mode : SWFUpload.WINDOW_MODE.TRANSPARENT,
							debug : j.debug,
							requeue_on_error : j.requeueErrors,
							file_post_name : j.fileObjName,
							file_size_limit : j.fileSizeLimit,
							file_types : j.fileTypeExts,
							file_types_description : j.fileTypeDesc,
							file_queue_limit : j.queueSizeLimit,
							file_upload_limit : j.uploadLimit,
							flash_url : j.swf,
							prevent_swf_caching : j.preventCaching,
							post_params : j.formData,
							upload_url : j.uploader,
							use_query_string : (j.method == "get"),
							file_dialog_complete_handler : a.onDialogClose,
							file_dialog_start_handler : a.onDialogOpen,
							file_queued_handler : a.onSelect,
							file_queue_error_handler : a.onSelectError,
							swfupload_loaded_handler : j.onSWFReady,
							upload_complete_handler : a.onUploadComplete,
							upload_error_handler : a.onUploadError,
							upload_progress_handler : a.onUploadProgress,
							upload_start_handler : a.onUploadStart,
							upload_success_handler : a.onUploadSuccess
						};
						if (e) {
							g = c.extend(g, e);
						}
						g = c.extend(g, j);
						var o = swfobject.getFlashPlayerVersion();
						var h = (o.major >= 9);
						if (h) {
							window["uploadify_" + j.id] = new SWFUpload(g);
							var i = window["uploadify_" + j.id];
							n.data("uploadify", i);
							var l = c("<div />", {
								id : j.id,
								"class" : "uploadify",
								css : {
									height : j.height + "px",
									width : j.width + "px"
								}
							});
							c("#" + i.movieName).wrap(l);
							l = c("#" + j.id);
							l.data("uploadify", i);
							var f = c("<div />", {
								id : j.id + "-button",
								"class" : "uploadify-button " + j.buttonClass
							});
							if (j.buttonImage) {
								f.css({
									"background-image" : "url('"
											+ j.buttonImage + "')",
									"text-indent" : "-9999px"
								});
							}
							f.html(
									'<span class="uploadify-button-text">'
											+ j.buttonText + "</span>").css({
								height : j.height + "px",
								"line-height" : j.height + "px",
								width : j.width + "px"
							});
							l.append(f);
							c("#" + i.movieName).css({
								position : "absolute",
								"z-index" : 1
							});
							if (!j.queueID) {
								var k = c("<div />", {
									id : j.id + "-queue",
									"class" : "uploadify-queue"
								});
								l.after(k);
								i.settings.queueID = j.id + "-queue";
								i.settings.defaultQueue = true;
							}
							i.queueData = {
								files : {},
								filesSelected : 0,
								filesQueued : 0,
								filesReplaced : 0,
								filesCancelled : 0,
								filesErrored : 0,
								uploadsSuccessful : 0,
								uploadsErrored : 0,
								averageSpeed : 0,
								queueLength : 0,
								queueSize : 0,
								uploadSize : 0,
								queueBytesUploaded : 0,
								uploadQueue : [],
								errorMsg : L.u_file_has_not_added_into_quene
							};
							i.original = m;
							i.wrapper = l;
							i.button = f;
							i.queue = k;
							if (j.onInit) {
								j.onInit.call(n, i);
							}
						} else {
							if (j.onFallback) {
								j.onFallback.call(n);
							}
						}
					});
		},
		cancel : function(d, f) {
			var e = arguments;
			var deleteFile = function(j, s, i, fid) {
				fid && c.getJSON(j.deleter + '&file_id=' + fid, function(json) {
					if (json.status == 1) {
						var file_ids = c("#" + j.resText).val().toString();
						var tmp = file_ids.split(",");
						tmp.splice(i, 1);
						file_ids = tmp.join(',');
						c("#" + j.resText).val(file_ids);
						var stats = s.getStats();
						stats.successful_uploads--;
						s.setStats(stats);
					}
				});
			};
			this
					.each(function() {
						var l = c(this), i = l.data("uploadify"), j = i.settings, h = -1;
						if (e[0]) {
							if (e[0] == "*") {
								var g = i.queueData.queueLength;
								c("#" + j.queueID)
										.find(".uploadify-queue-item")
										.each(
												function() {
													h++;
													var fid = c(this).attr(
															"fid");
													deleteFile(j, i, c(this)
															.index(), fid);
													if (e[1] === true) {
														i.cancelUpload(c(this)
																.attr("id"),
																false);
													} else {
														i.cancelUpload(c(this)
																.attr("id"));
													}
													c(this)
															.find(".data")
															.removeClass("data")
															.html(L.u_cancel);
													c(this)
															.find(
																	".uploadify-progress-bar")
															.remove();
													c(this)
															.delay(
																	1000 + 100 * h)
															.fadeOut(
																	500,
																	function() {
																		c(this)
																				.remove();
																	});
												});
								i.queueData.queueSize = 0;
								if (j.onClearQueue) {
									j.onClearQueue.call(l, g);
								}
							} else {
								for ( var m = 0; m < e.length; m++) {
									var q = c("#" + e[m]);
									var fid = q.attr("fid");
									deleteFile(j, i, q.index(), fid);
									i.cancelUpload(e[m]);
									q.find(".data").removeClass("data").html(
											L.u_cancel);
									q.find(".uploadify-progress-bar").remove();
									q.delay(1000 + 100 * m).fadeOut(500,
											function() {
												c(this).remove();
											});
								}
							}
						} else {
							var k = c("#" + j.queueID).find(
									".uploadify-queue-item").get(0);
							$item = c(k);
							var fid = $item.attr("fid");
							deleteFile(j, i, $item.index(), fid);
							i.cancelUpload($item.attr("id"));
							$item.find(".data").removeClass("data").html(
									" - Cancelled");
							$item.find(".uploadify-progress-bar").remove();
							$item.delay(1000).fadeOut(500, function() {
								c(this).remove();
							});
						}
					});
		},
		destroy : function() {
			this.each(function() {
				var f = c(this), d = f.data("uploadify"), e = d.settings;
				d.destroy();
				if (e.defaultQueue) {
					c("#" + e.queueID).remove();
				}
				c("#" + e.id).replaceWith(d.original);
				if (e.onDestroy) {
					e.onDestroy.call(this);
				}
				delete d;
			});
		},
		disable : function(d) {
			this.each(function() {
				var g = c(this), e = g.data("uploadify"), f = e.settings;
				if (d) {
					e.button.addClass("disabled");
					if (f.onDisable) {
						f.onDisable.call(this);
					}
				} else {
					e.button.removeClass("disabled");
					if (f.onEnable) {
						f.onEnable.call(this);
					}
				}
				e.setButtonDisabled(d);
			});
		},
		settings : function(e, g, h) {
			var d = arguments;
			var f = g;
			this
					.each(function() {
						var k = c(this), i = k.data("uploadify"), j = i.settings;
						if (typeof (d[0]) == "object") {
							for ( var l in g) {
								setData(l, g[l]);
							}
						}
						if (d.length === 1) {
							f = j[e];
						} else {
							switch (e) {
							case "uploader":
								i.setUploadURL(g);
								break;
							case "formData":
								if (!h) {
									g = c.extend(j.formData, g);
								}
								i.setPostParams(j.formData);
								break;
							case "method":
								if (g == "get") {
									i.setUseQueryString(true);
								} else {
									i.setUseQueryString(false);
								}
								break;
							case "fileObjName":
								i.setFilePostName(g);
								break;
							case "fileTypeExts":
								i.setFileTypes(g, j.fileTypeDesc);
								break;
							case "fileTypeDesc":
								i.setFileTypes(j.fileTypeExts, g);
								break;
							case "fileSizeLimit":
								i.setFileSizeLimit(g);
								break;
							case "uploadLimit":
								i.setFileUploadLimit(g);
								break;
							case "queueSizeLimit":
								i.setFileQueueLimit(g);
								break;
							case "buttonImage":
								i.button.css("background-image", settingValue);
								break;
							case "buttonCursor":
								if (g == "arrow") {
									i.setButtonCursor(SWFUpload.CURSOR.ARROW);
								} else {
									i.setButtonCursor(SWFUpload.CURSOR.HAND);
								}
								break;
							case "buttonText":
								c("#" + j.id + "-button").find(
										".uploadify-button-text").html(g);
								break;
							case "width":
								i.setButtonDimensions(g, j.height);
								break;
							case "height":
								i.setButtonDimensions(j.width, g);
								break;
							case "multi":
								if (g) {
									i
											.setButtonAction(SWFUpload.BUTTON_ACTION.SELECT_FILES);
								} else {
									i
											.setButtonAction(SWFUpload.BUTTON_ACTION.SELECT_FILE);
								}
								break;
							}
							j[e] = g;
						}
					});
			if (d.length === 1) {
				return f;
			}
		},
		stop : function() {
			this.each(function() {
				var e = c(this), d = e.data("uploadify");
				d.queueData.averageSpeed = 0;
				d.queueData.uploadSize = 0;
				d.queueData.bytesUploaded = 0;
				d.queueData.uploadQueue = [];
				d.stopUpload();
			});
		},
		upload : function() {
			var d = arguments;
			this
					.each(function() {
						var f = c(this), e = f.data("uploadify");
						e.queueData.averageSpeed = 0;
						e.queueData.uploadSize = 0;
						e.queueData.bytesUploaded = 0;
						e.queueData.uploadQueue = [];
						if (d[0]) {
							if (d[0] == "*") {
								e.queueData.uploadSize = e.queueData.queueSize;
								e.queueData.uploadQueue.push("*");
								e.startUpload();
							} else {
								for ( var g = 0; g < d.length; g++) {
									e.queueData.uploadSize += e.queueData.files[d[g]].size;
									e.queueData.uploadQueue.push(d[g]);
								}
								e.startUpload(e.queueData.uploadQueue.shift());
							}
						} else {
							e.startUpload();
						}
					});
		}
	};
	var a = {
		onDialogOpen : function() {
			var d = this.settings;
			this.queueData.errorMsg = L.u_file_has_not_added_into_quene;
			this.queueData.filesReplaced = 0;
			this.queueData.filesCancelled = 0;
			if (d.onDialogOpen) {
				d.onDialogOpen.call(this);
			}
		},
		onDialogClose : function(d, f, g) {
			var e = this.settings;
			this.queueData.filesErrored = d - f;
			this.queueData.filesSelected = d;
			this.queueData.filesQueued = f - this.queueData.filesCancelled;
			this.queueData.queueLength = g;
			if (c.inArray("onDialogClose", e.overrideEvents) < 0) {
				if (this.queueData.filesErrored > 0) {
					showDialog(this.queueData.errorMsg, 'alert',
							L.operate_notice);
					// alert(this.queueData.errorMsg);
				}
			}
			if (e.onDialogClose) {
				e.onDialogClose.call(this, this.queueData);
			}
			if (e.auto) {
				c("#" + e.id).uploadify("upload", "*");
			}
		},
		onSelect : function(g) {
			var h = this.settings;
			var e = {};
			for ( var f in this.queueData.files) {
				e = this.queueData.files[f];
				if (e.uploaded != true && e.name == g.name) {
					var d = showDialog(L.u_file + g.name
							+ L.u_replace_this_file, 'confirm',
							L.operate_warning, function() {
								return true;
							});
					/*
					 * confirm('The file named "' + g.name + '" is already in
					 * the queue.\nDo you want to replace the existing item in
					 * the queue?');
					 */
					if (!d) {
						this.cancelUpload(g.id);
						this.queueData.filesCancelled++;
						return false;
					} else {
						c("#" + e.id).remove();
						this.cancelUpload(e.id);
						this.queueData.filesReplaced++;
					}
				}
			}

			var i = Math.round(g.size / 1024);
			var l = "KB";
			if (i > 1000) {
				i = Math.round(i / 1000);
				l = "MB";
			}
			var k = i.toString().split(".");
			i = k[0];
			if (k.length > 1) {
				i += "." + k[1].substr(0, 2);
			}
			i += l;
			var j = g.name;
			if (j.length > 25) {
				j = j.substr(0, 25) + "...";
			}
			if (c.inArray("onSelect", h.overrideEvents) < 0) {
				c("#" + h.queueID)
						.append(
								'<div id="'
										+ g.id
										+ '" class="uploadify-queue-item">					<div class="cancel">						<a href="javascript:$(\'#'
										+ h.id
										+ "').uploadify('cancel', '"
										+ g.id
										+ '\')">X</a>					</div>					<span class="fileName">'
										+ j
										+ " ("
										+ i
										+ ')</span><span class="data"></span>					<div class="uploadify-progress">						<div class="uploadify-progress-bar"><!--Progress Bar--></div>					</div>				</div>');
			}
			this.queueData.queueSize += g.size;

			this.queueData.files[g.id] = g;
			if (h.onSelect) {
				h.onSelect.apply(this, arguments);
			}
		},
		onSelectError : function(d, g, f) {
			var e = this.settings;
			if (c.inArray("onSelectError", e.overrideEvents) < 0) {
				switch (g) {
				case SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED:
					if (e.queueSizeLimit > f) {
						this.queueData.errorMsg += "\n"
								+ L.u_files_over_allowed_num + f + L.u_files;
					} else {
						this.queueData.errorMsg += "\n"
								+ L.u_select_num_over_allowed + e.uploadLimit
								+ ").";
					}
					break;
				case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
					this.queueData.errorMsg += '\n' + L.u_file + d.name
							+ L.u_over_size_limit + e.fileSizeLimit
							+ L.u_r_backets;
					break;
				case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:
					this.queueData.errorMsg += '\n' + L.u_file + d.name
							+ L.u_is_null;
					break;
				case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
					this.queueData.errorMsg += '\n' + L.u_file + d.name
							+ L.u_not_allowed_file_ext + e.fileTypeDesc
							+ L.u_r_backets;
					break;
				}
			}
			if (g != SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED) {
				delete this.queueData.files[d.id];
			}
			if (e.onSelectError) {
				e.onSelectError.apply(this, arguments);
			}
		},
		onQueueComplete : function() {
			if (this.settings.onQueueComplete) {
				this.settings.onQueueComplete.call(this,
						this.settings.queueData);
			}
		},
		onUploadComplete : function(f, e) {
			var g = this.settings, d = this;
			var json = g.json;
			var e = this.getStats();
			this.queueData.queueLength = e.files_queued;
			if (this.queueData.uploadQueue[0] == "*") {
				if (this.queueData.queueLength > 0) {
					this.startUpload();
				} else {
					this.queueData.uploadQueue = [];
					if (g.onQueueComplete) {
						g.onQueueComplete.call(this, this.queueData);
					}
				}
			} else {
				if (this.queueData.uploadQueue.length > 0) {
					this.startUpload(this.queueData.uploadQueue.shift());
				} else {
					this.queueData.uploadQueue = [];
					if (g.onQueueComplete) {
						g.onQueueComplete.call(this, this.queueData);
					}
				}
			}
			if (c.inArray("onUploadComplete", g.overrideEvents) < 0) {
				if (g.removeCompleted) {
					c("#" + f.id).attr("fid", json.fid);
					switch (f.filestatus) {
					case SWFUpload.FILE_STATUS.COMPLETE:
						setTimeout(function() {
							if (c("#" + f.id)) {
								d.queueData.queueSize -= f.size;
								delete d.queueData.files[f.id];
								g.hide == true
										&& c("#" + f.id).fadeOut(500,
												function() {
													c(this).remove();
												});
							}
						}, g.removeTimeout * 1000);
						break;
					case SWFUpload.FILE_STATUS.ERROR:
						if (!g.requeueErrors) {
							setTimeout(function() {
								if (c("#" + f.id)) {
									d.queueData.queueSize -= f.size;
									delete d.queueData.files[f.id];
									g.hide == true
											&& c("#" + f.id).fadeOut(500,
													function() {
														c(this).remove();
													});
								}
							}, g.removeTimeout * 1000);
						}
						break;
					}
				} else {
					f.uploaded = true;
				}
			}
			if (g.onUploadComplete) {
				g.onUploadComplete.call(this, f, e);
			}
		},
		onUploadError : function(e, i, h) {
			var f = this.settings;
			var g = "Error";
			switch (i) {
			case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
				g = "HTTP Error (" + h + ")";
				break;
			case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:
				g = L.u_lack_upload_path;
				break;
			case SWFUpload.UPLOAD_ERROR.IO_ERROR:
				g = L.u_io_warning;
				break;
			case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
				g = L.u_security_error;
				break;
			/*
			 * case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
			 * showDialog("The upload limit has been reached (" + h +
			 * ").",'alert',"warnings"); g = "Exceeds Upload Limit"; break;
			 */
			case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
				g = L.u_failed;
				break;
			case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:
				break;
			case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
				g = L.u_sign_error;
				break;
			case SWFUpload.UPLOAD_ERROR.FILE_CANCELLED:
				g = L.u_canceled;
				this.queueData.queueSize -= e.size;
				if (e.status == SWFUpload.FILE_STATUS.IN_PROGRESS
						|| c.inArray(e.id, this.queueData.uploadQueue) >= 0) {
					this.queueData.uploadSize -= e.size;
				}
				if (f.onCancel) {
					f.onCancel.call(this, e);
				}
				delete this.queueData.files[e.id];
				break;
			case SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED:
				g = L.u_stoped;
				break;
			}
			if (c.inArray("onUploadError", f.overrideEvents) < 0) {
				e ? '' : e = {};
				if (i != SWFUpload.UPLOAD_ERROR.FILE_CANCELLED
						&& i != SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {
					c("#" + e.id).addClass("uploadify-error");
				}
				c("#" + e.id).find(".uploadify-progress-bar").css("width",
						"1px");
				if (i != SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND
						&& e.status != SWFUpload.FILE_STATUS.COMPLETE) {
					c("#" + e.id).find(".data").html(" - " + g);
				}
			}
			var d = this.getStats();
			this.queueData.uploadsErrored = d.upload_errors;
			if (f.onUploadError) {
				f.onUploadError.call(this, e, i, h, g);
			}
		},
		onUploadProgress : function(g, m, j) {
			var h = this.settings;
			var e = new Date();
			var n = e.getTime();
			var k = n - this.timer;
			if (k > 500) {
				this.timer = n;
			}
			var i = m - this.bytesLoaded;
			this.bytesLoaded = m;
			var d = this.queueData.queueBytesUploaded + m;

			var p = Math.round(m / j * 100);
			var o = "KB/s";
			var l = 0;
			var f = (i / 1024) / (k / 1000);
			f = Math.floor(f * 10) / 10;
			if (this.queueData.averageSpeed > 0) {
				this.queueData.averageSpeed = Math
						.floor((this.queueData.averageSpeed + f) / 2);
			} else {
				this.queueData.averageSpeed = Math.floor(f);
			}
			if (f > 1000) {
				l = (f * 0.001);
				this.queueData.averageSpeed = Math.floor(l);
				o = "MB/s";
			}
			if (c.inArray("onUploadProgress", h.overrideEvents) < 0) {
				if (h.progressData == "percentage") {
					c("#" + g.id).find(".data").html(" - " + p + "%");
				} else {
					if (h.progressData == "speed" && k > 500) {
						c("#" + g.id).find(".data").html(
								" - " + this.queueData.averageSpeed + o);
					}
				}
				c("#" + g.id).find(".uploadify-progress-bar").css("width",
						p + "%");
			}
			if (h.onUploadProgress) {
				h.onUploadProgress.call(this, g, m, j, d,
						this.queueData.uploadSize);
			}
		},
		onUploadStart : function(d) {
			var e = this.settings;
			var f = new Date();
			this.timer = f.getTime();
			this.bytesLoaded = 0;
			if (this.queueData.uploadQueue.length == 0) {
				this.queueData.uploadSize = d.size;
			}
			if (e.checkExisting) {
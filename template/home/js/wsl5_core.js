var bhoSWLModule = null, swl_core = {
	logging : !1,
	baseurl : "http://smileyswelove.com",
	facebookAppId : "399287686754495",
	mySmileysExtendedEmptyText : "<p><i>Note: You can create new smileys on <a id='swl_addSmileys' href='http://smileyswelove.com/upload/image'>SmileysWeLove.com website</a> or by right-clicking on any image/video on a webpage and selecting 'Add as new smiley...'</i></p><hr />",
	favoritesExtendedEmptyText : "<p><i>Note: You can mark smileys as favorites on <a id='swl_addFavoriteSmileys' href='http://smileyswelove.com'>SmileysWeLove.com website</a> or by clicking on the star icon in the smiley overlay...'</i></p><hr />",
	smileyChatPopupRequest : new XMLHttpRequest,
	smileyJSRequest : new XMLHttpRequest,
	lazyLoaderContainer : ".swl_chatSmileyPopup #swl_right",
	inLimitedResize : !1,
	smileyConfigurations : [{
		prefixNoUrl : "~ ",
		urlNoProtocol : "smileyswelove.com/",
		url : "http://smileyswelove.com/",
		prefix : "~ http://smileyswelove.com/",
		postfix : " ~"
	}, {
		prefixNoUrl : "~ ",
		urlNoProtocol : "swl1.us/",
		url : "http://swl1.us/",
		prefix : "~ http://swl1.us/",
		postfix : " ~"
	}, {
		prefixNoUrl : "I just sent you this very cool smiley! To view click here:",
		urlNoProtocol : "smileyswelove.com/free-smiley/",
		url : "http://www.smileyswelove.com/free-smiley/",
		prefix : "I just sent you this very cool smiley! To view click here:http://www.smileyswelove.com/free-smiley/",
		postfix : " ..."
	}],
	smileyNonLinkConfigurations : [{
		prefixNoUrl : "~",
		urlNoProtocol : "smileyswelove/",
		url : "smileyswelove/",
		prefix : "~ smileyswelove/",
		postfix : " ~"
	}],
	log : function(a) {
		swl_core.logging && console.log("[swl_core] " + a)
	},
	ping : function(a, b, c) {
		swl_core.log("ping: " + a);
		var d = (new Date).getTime(), e = a;
		c && (e += "?cachebreaker=" + d);
		var f = new XMLHttpRequest;
		f.open("GET", e, !0), f.onreadystatechange = function() {
			try {
				if (swl_core.log("onreadystatechange:" + f), 200 == f.status) {
					var a = (new Date).getTime(), c = a - d;
					null != b && b(c)
				}
			} catch(e) {
				swl_core.log("onreadystatechange exception:" + e)
			}
		};
		try {
			f.send(null)
		} catch(g) {
			swl_core.log("ping send exception:" + g)
		}
	},
	getShortPrefix : function() {
		return swl_core.smileyConfigurations[1].prefix
	},
	getShortPostfix : function() {
		return swl_core.smileyConfigurations[1].postfix
	},
	isIE : function() {
		return "msie" == SWL.$.browser || SWL.$.browser.msie
	},
	isMozilla : function() {
		return SWL.$.browser.mozilla
	},
	isWordpressSite : function() {
		return !swl_core.isIFrame() && SWL.$("meta[name='generator'][content^='WordPress']").length > 0
	},
	isDisqusSite : function() {
		return window.location && window.location.href && -1 != window.location.href.indexOf("disqus.com/embed/comments")
	},
	isYoutubeSite : function() {
		return !swl_core.isIFrame() && window.location && window.location.href && -1 != window.location.href.indexOf("youtube.com")
	},
	isTumblrSite : function() {
		return !swl_core.isIFrame() && window.location && window.location.href && -1 != window.location.href.indexOf("tumblr.com")
	},
	isFacebookSite : function() {
		return window.location && window.location.href && -1 != window.location.href.indexOf("facebook.com")
	},
	isTwitterSite : function() {
		return !swl_core.isIFrame() && window.location && window.location.href && -1 != window.location.href.indexOf("twitter.com")
	},
	isFlickrSite : function() {
		return !swl_core.isIFrame() && window.location && window.location.href && -1 != window.location.href.indexOf("flickr.com")
	},
	isYahooSite : function() {
		return !swl_core.isIFrame() && window.location && window.location.href && -1 != window.location.href.indexOf("mail.yahoo.com")
	},
	isHotmailSite : function() {
		return window.location && window.location.href && -1 != window.location.href.indexOf("mail.live.com")
	},
	isGTalkSite : function() {
		return !swl_core.isIFrame() && window.location && window.location.href && (-1 != window.location.href.indexOf("mail.google.com") || -1 != window.location.href.indexOf("plus.google.com")) || window.location && window.location.href && -1 != window.location.href.indexOf("talkgadget.google.com")
	},
	isIFrame : function() {
		if (!swl_core.isMozilla())
			return !window.top || !window.self || window.top != window.self;
		try {
			return unsafeWindow.top.location != unsafeWindow.location
		} catch(a) {
			return !0
		}
	},
	gaEvent : function(a, b, c) {
		swl_core.log("gaEvent [" + a + "] [" + b + "] [" + c + "]"), _gaq.push(["b._trackEvent", a, b, c])
	},
	initializeGoogleAnalytics : function() {
		if (swl_core.log("initializeGoogleAnalytics"), 0 != document.getElementsByTagName("script").length)
			try {
				var a = document.createElement("script");
				a.type = "text/javascript", a.async = !0, a.src = "https://ssl.google-analytics.com/ga.js";
				var b = document.getElementsByTagName("script")[0];
				b.parentNode.insertBefore(a, b)
			} catch(c) {
				swl_core.log(c)
			}
	},
	insertSmileyUsingBHO : function(a) {
		swl_core.log("insertSmileyUsingBHO"), null != bhoSWLModule && bhoSWLModule.insertSmiley(swl_core.buildSmileyLink(a), a)
	},
	getGMailComposerDoc : function(a) {
		swl_core.log("getGMailComposerDoc");
		var b =
		void 0, c = SWL.$("#canvas_frame");
		return 0 != c.length ? c.each(function(a, c) {
			var d = c.contentDocument;
			if (
			void 0 != d) {
				var e = SWL.$(d).find("iframe");
				void 0 != e && e.each(function(a, c) {
					void 0 != c.contentDocument && ( b = c.contentDocument)
				})
			}
		}) : ( c = SWL.$("iframe.editable"), c.each(function(a, c) {
			return
			void 0 != c.contentDocument ? ( b = c.contentDocument,
			void 0) :
			void 0
		}), a ? a.parents("[role='main']").length > 0 ? c = a.parents("[role='main']").find("div.editable iframe") : a.parents("[role='dialog']").length > 0 && ( c = a.parents("[role='dialog']").find("div.editable iframe")) : c = SWL.$("div.editable iframe"), c.each(function(a, c) {
			return
			void 0 != c.contentDocument ? ( b = c.contentDocument,
			void 0) :
			void 0
		})), b
	},
	getHotmailComposerDoc : function() {
		swl_core.log("getHotmailComposerDoc");
		var a =
		void 0, b = SWL.$("iframe#RichTextEditor_surface,iframe#ComposeRteEditor_surface");
		if (b.each(function(b, c) {
			return
			void 0 != c.contentDocument ? ( a = c.contentDocument,
			void 0) :
			void 0
		}), null == a) {
			var c = SWL.$("#appFrame");
			c.each(function(b, c) {
				var d = c.contentDocument;
				if (
				void 0 != d) {
					var e = SWL.$(d).find("iframe");
					void 0 != e && e.each(function(b, c) {
						try {
							if ("contentFrame" == c.id) {
								var d = c.contentDocument;
								if (
								void 0 != d) {
									var e = SWL.$(d).find("iframe");
									e.each(function(b, c) {
										try {
											void 0 != c.contentDocument && "RichTextEditor_surface" == c.id && ( a = c.contentDocument)
										} catch(d) {
										}
									})
								}
							} else
								void 0 != c.contentDocument && "RichTextEditor_surface" == c.id && ( a = c.contentDocument)
						} catch(f) {
						}
					})
				}
			})
		}
		return a
	},
	getYahooComposerDoc : function() {
		swl_core.log("getYahooComposerDoc");
		var a =
		void 0, b = SWL.$("div.compose-message");
		return
		void 0 != b && b.each(function(b, c) {
			var d = SWL.$(c).find("iframe");
			void 0 != d && d.each(function(b, c) {
				void 0 != c.contentDocument && ( a = c.contentDocument)
			})
		}), a
	},
	getTumblrComposerDoc : function() {
		swl_core.log("getTumblrComposerDoc");
		var a =
		void 0, b = swl_core.isIE() ? SWL.$("#content iframe") : SWL.$("#post_content iframe");
		return b.length > 0 &&
		void 0 != b[0].contentDocument && ( a = b[0].contentDocument), a
	},
	getGooglePlusStatusBox : function() {
		swl_core.log("getGooglePlusStatusBox");
		var a = SWL.$("[guidedhelpid='sharebox']"), b = a.find("[g_editable='true']");
		if (0 == b.length || !b.is(":focus")) {
			var c = a.find("[role='button']");
			void 0 != c && (c.focus(), b = a.find("[g_editable='true']"))
		}
		return b
	},
	getFacebookStatusBox : function() {
		if (swl_core.log("getFacebookStatusBox"), -1 != window.location.pathname.indexOf("/messages/")) {
			var a = SWL.$(".-cx-PRIVATE-webMessengerComposer__composerTextarea,textarea[aria-controls='webMessengerRecentMessages']");
			if (a.length > 0)
				return a[0]
		} else {
			var b = SWL.$("#pagelet_composer textarea.mentionsTextarea");
			if (b.length > 0)
				return b[0]
		}
	},
	getTwitterStatusBox : function() {
		return swl_core.log("getTwitterStatusBox"), SWL.$("textarea.tweet-box,div.tweet-box[contenteditable='true']")
	},
	insertAtCaret : function(a, b) {
		return swl_core.log("insertAtCaret"), a.each(function() {
			if (document.selection)
				this.focus(), sel = document.selection.createRange(), sel.text = b, this.focus();
			else if (this.selectionStart || "0" == this.selectionStart) {
				var c = this.selectionStart, d = this.selectionEnd, e = this.scrollTop;
				this.value = this.value.substring(0, c) + b + this.value.substring(d, this.value.length), this.focus(), this.selectionStart = c + b.length, this.selectionEnd = c + b.length, this.scrollTop = e
			} else
				this.value += b, this.focus()
		})
	},
	insertTextIntoInputArea : function(a, b) {
		swl_core.log("insertTextIntoInputArea"), a.is(":focus") || a.focus();
		var c = swl_core.insertHtmlAtCursor(b);
		window.setTimeout(function() {
			if (a.resize(),
				void 0 != c)
				try {
					c.scrollIntoView(!1)
				} catch(b) {
				}
		}, 500)
	},
	insertHtmlAtCursor : function(a) {
		swl_core.log("insertHtmlAtCursor");
		var b;
		if (window.getSelection && window.getSelection().getRangeAt) {
			var c = window.getSelection(), d = c.getRangeAt(0);
			d.deleteContents();
			try {
				b = SWL.$(a)[0]
			} catch(e) {
				b = document.createTextNode(a)
			}
			d.insertNode(b), d.setStartAfter(b), d.setEndAfter(b), c.removeAllRanges(), c.addRange(d), c.collapseToEnd()
		} else if (document.selection && document.selection.createRange) {
			var d = document.selection.createRange();
			d.pasteHTML(a)
		}
		return b
	},
	cancelEvent : function(a) {
		return swl_core.log("cancelEvent"), a || ( a = window.event), a.preventDefault ? a.preventDefault() : a.returnValue = !1, !1
	},
	unselectable : function(a) {
		swl_core.log("unselectable");
		var b = function(a) {
			a && (SWL.$(a).attr("unselectable", "on"), a.onmousedown = function(a) {
				return swl_core.cancelEvent(a)
			})
		};
		b(a), a.find("*").each(function(a, c) {
			b(c)
		})
	},
	insertSmileyToMsgComposer : function(a, b) {
		swl_core.log("insertSmileyToMsgComposer"), swl_core.insertHtmlToDocument(a, swl_core.buildSmileyLink(b))
	},
	triggerSpaceKeyPress : function(a) {
		swl_core.log("triggerSpaceKeyPress"), swl_core.triggerKeyboardEvent(a, "keydown", 32), swl_core.triggerKeyboardEvent(a, "keyup", 32), swl_core.triggerKeyboardEvent(a, "keypress", 32)
	},
	insertSmileysToTextarea : function(a, b) {
		swl_core.log("insertSmileysToTextarea"), a.focus(), swl_core.triggerSpaceKeyPress(a), window.setTimeout(function() {
			var c = SWL.$(a);
			swl_core.insertAtCaret(c, b)
		}, 100)
	},
	insertSmileysToEditableDiv : function(a, b) {
		swl_core.log("insertSmileysToEditableDiv"), a.focus(), swl_core.triggerSpaceKeyPress(a), swl_core.insertHtmlAtCursor(b + " "), swl_core.triggerSpaceKeyPress(a)
	},
	postToFacebookFeedUrl : function(a, b) {
		var c = "https://www.facebook.com/dialog/feed?";
		return c += "app_id=" + swl_core.facebookAppId + "&", c += "link=" + a.split("?")[0] + "&", c += "picture=" + b.split("?")[0] + "&", c += "name=Smileys%20We%20Love&", c += "description=Use%20Smileys%20We%20Love%20to%20add%20flare%20to%20your%20posts.&", c += "redirect_uri=http://facebook.com"
	},
	postToFacebookFeed : function(a, b) {
		swl_core.log("postToFacebookFeed");
		var c = swl_core.postToFacebookFeedUrl(a, b);
		swl_core.isMozilla() ? content.wrappedJSObject.location = c : window.location = c
	},
	buildSmileyLink : function(a) {
		swl_core.log("buildSmileyLink");
		var b = swl_core.baseurl + "/" + a, c = swl_core.baseurl + "/smiley/img/" + a;
		return swl_core.isMozilla() ? '<img src="' + c + '"/>' : '<a href="' + b + '"><img src="' + c + '"/></a>'
	},
	insertHtmlToDocument : function(a, b) {
		swl_core.log("insertHtmlToDocument"),
		void 0 != a && (a.body.focus(), a.execCommand("insertHTML", !1, b), a.body.focus())
	},
	limitedResize : function(a) {
		return swl_core.log("limitedResize"), swl_core.inLimitedResize ? !0 : (swl_core.inLimitedResize = !0, window.setTimeout(function() {
			a.resize(), swl_core.inLimitedResize = !1
		}, 1e3),
		void 0)
	},
	findFixedPosition : function(a) {
		var b = 0, c = 0;
		if (a.offsetParent)
			do b += a.offsetLeft, c += a.offsetTop;
			while(a=a.offsetParent);
		return {
			left : b,
			top : c - SWL.$(window).scrollTop()
		}
	},
	createInputArea : function(a) {
		swl_core.log("createInputArea");
		var b = "swl_ChatInput" + a, c = SWL.$(document.createElement("div")).addClass("swl_ChatInputWrapper"), d = SWL.$(document.createElement("div")).addClass("swl_ChatInput");
		return d.attr({
			contentEditable : "true",
			id : b
		}), swl_core.isMozilla() && d.css("text-align", "-moz-left"), c.append(d), c
	},
	createToolbar : function(a, b, c) {
		swl_core.log("createToolbar");
		var d = "swl_toolbar" + a, e = "swl_button" + a, f = "swl_about_button" + a, g = SWL.$(document.createElement("div")).addClass("swl_chatContainer");
		g.attr("id", "swl_toolbarContainer"), c ? "prepend" == c ? b.prepend(g) : "append" == c ? b.append(g) : b.after(g) : b.before(g);
		var h = SWL.$(document.createElement("div")).addClass("swl_Toolbar");
		h.attr({
			id : d
		}), SWL.$(h).appendTo(g);
		var i = SWL.$(document.createElement("div")).addClass("swl_ToolbarButton swl_SmileyToolbarButton");
		i.attr({
			id : e
		}), h.append(i);
		var j = SWL.$(document.createElement("div")).addClass("swl_ToolbarLogo").html("About");
		j.attr({
			id : f
		}), h.append(j);
		var k = SWL.$(document.createElement("div")).addClass("swl_hideToolbarButton").html("Hide");
		return k.attr("title", "Hide all smileyswelove toolbars."), h.append(k), swl_core.unselectable(g), h
	},
	createAboutDialog : function() {
		swl_core.log("createAboutDialog");
		var a = SWL.$(document.createElement("div")).addClass("swl_AboutDialog");
		a.attr("id", "swl_AboutDialog");
		var b = SWL.$(document.createElement("div")).addClass("swl_AboutDialogCloseButton");
		a.append(b);
		var c = SWL.$(document.createElement("div")).addClass("swl_AboutDialogLogo");
		a.append(c);
		var d = SWL.$(document.createElement("div")).addClass("swl_AboutDialogBody");
		return d.html("<p>Smileys We Love</p><p>Copyright 2012 Squeeky Chocolate, LLC</p><p>All rights reserved.</p>"), a.append(d), a
	},
	closeAboutDialog : function(a) {
		swl_core.log("closeAboutDialog"),
		void 0 != a && a.remove()
	},
	createPopupDialog : function() {
		swl_core.log("createPopupDialog"), popupDialog = SWL.$(document.createElement("div")).addClass("swl_chatSmileyPopup"), popupDialog.attr("id", "swl_popup");
		var a = SWL.$("#swl_chatPopupPlaceholder");
		popupDialog.html(a.find("#swl_page").html());
		var b = SWL.$(document.createElement("div")).addClass("swl_chatSmileyPopupCloseButton");
		return popupDialog.append(b), popupDialog
	},
	closePopupDialog : function(a) {
		swl_core.log("closePopupDialog"),
		void 0 != a && (a.remove(), swl_core.forceHideOverlay())
	},
	requestSmileyPopup : function() {
		return swl_core.log("requestSmileyPopup"), swl_core.smileyChatPopupRequest.open("GET", chrome.extension.getURL("smileys.htm"), !1), swl_core.smileyChatPopupRequest.send(null), swl_core.smileyChatPopupRequest.responseText
	},
	requestSmileys : function() {
		if (swl_core.log("requestSmileys"), !_SWLSmileyPackages) {
			swl_core.smileyJSRequest.open("GET", chrome.extension.getURL("swl_smileys.js"), !1), swl_core.smileyJSRequest.send(null);
			var b = swl_core.smileyJSRequest.responseText;
			b = b.replace("var _SWLSmileyPackages = ", ""), _SWLSmileyPackages = SWL.$.parseJSON(b)
		}
	},
	findSmileyInfo : function(a) {
		if (swl_core.log("findSmileyInfo"),
			void 0 != _SWLSmileyPackages)
			for (var b in _SWLSmileyPackages)
			if ("Recent" != b)
				for (var c = _SWLSmileyPackages[b].images, d = 0; d < c.length; d++)
					if (c[d].sid == a)
						return c[d]
	},
	isFavorite : function(a) {
		if (swl_core.log("isFavorite"),
			void 0 == _SWLSmileyPackages)
			return !1;
		var b = _SWLSmileyPackages.Favorites;
		if (!b)
			return !1;
		for (var c = b.images, d = 0; d < c.length; d++)
			if (c[d].sid == a)
				return !0;
		return !1
	},
	updateSpecialPackages : function() {
		swl_core.log("updateSpecialPackages");
		try {
			var a = SWL.$("#swl_mySmileys").html(), b = "undefined" != typeof json_parse ? json_parse(a) : JSON.parse(a);
			b && (b.emptyText += swl_core.mySmileysExtendedEmptyText, swl_core.updateSpecialSmileyPackage(b))
		} catch(c) {
		}
		try {
			var a = SWL.$("#swl_favorites").html(), d = "undefined" != typeof json_parse ? json_parse(a) : JSON.parse(a);
			d && swl_core.updateSpecialSmileyPackage(d)
		} catch(c) {
		}
		try {
			var a = SWL.$("#swl_recentSmileys").html();
			swl_core.updateSpecialSmileyPackage("undefined" != typeof json_parse ? json_parse(a) : JSON.parse(a))
		} catch(c) {
		}
	},
	updateSmileyPackageInfo : function(a) {
		if (swl_core.log("updateSmileyPackageInfo"),
		void 0 != _SWLSmileyPackages) {
			var b = a.images;
			if (
				void 0 != b)
				for (var c = 0; c < b.length; c++)
					if (
					void 0 == b[c].filename) {
						var d = swl_core.findSmileyInfo(b[c].sid);
						void 0 != d && (b[c] = d)
					}
		}
	},
	updateSpecialSmileyPackage : function(a) {
		swl_core.log("updateSpecialSmileyPackage"),
		void 0 != _SWLSmileyPackages && null != a &&
		void 0 != a && (swl_core.updateSmileyPackageInfo(a), _SWLSmileyPackages[a.title] = a)
	},
	useLazyload : function() {
		return !(
		void 0 == SWL.$.fn.lazyload)
	},
	insertSmileyPackages : function(a, b, c, d) {
		swl_core.log("insertSmileyPackages");
		try {
			if (
				void 0 == _SWLSmileyPackages || a.find(".swl_menu").length > 0)
				return;
			b || ( b = SWL.$("#swl_recentSmileys").length > 0), c || ( c = SWL.$("#swl_mySmileys").length > 0), d || ( d = SWL.$("#swl_favorites").length > 0);
			var e;
			b && ( e = SWL.$(document.createElement("div")).addClass("swl_menu"), e.attr({
				tag : "Recent"
			}), e.html("Recent"), a.append(e)), d && ( e = SWL.$(document.createElement("div")).addClass("swl_menu"), e.attr({
				tag : "Favorites"
			}), e.html("Favorites"), a.append(e)), c && ( e = SWL.$(document.createElement("div")).addClass("swl_menu"), e.attr({
				tag : "My Smileys"
			}), e.html("My Smileys"), a.append(e));
			for (var f in _SWLSmileyPackages)"Recent" != f && "My Smileys" != f && "Favorites" != f && ( e = SWL.$(document.createElement("div")).addClass("swl_menu"), e.attr({
				tag : f
			}), e.html(f), a.append(e))
		} catch(g) {
			swl_core.log(g)
		}
	},
	insertSmileyPackage : function(a, b, c) {
		swl_core.log("insertSmileyPackage");
		try {
			if (
				void 0 == _SWLSmileyPackages)
				return;
			var d = _SWLSmileyPackages[b];
			if (
				void 0 == d)
				return;
			var e = swl_core.useLazyload(), f = "//fcdn.smileyswelove.com/content/smileys/", g = "//smileyswelove.com/extension/loading.gif";
			c && ( f = c + f, g = c + g), a.find(".swl_package").hide();
			var h = a.find("div#" + b);
			if (!d.forceReload && h.length > 0)
				return h.show(),
				void 0;
			h.remove(), h = SWL.$(document.createElement("div")).addClass("swl_package"), h.attr({
				id : b
			});
			var i = d.images;
			void 0 != i && 0 != i.length && 1 != d.showEmptyTextAlways ||
			void 0 == d.emptyText ? h.html("") : h.append(d.emptyText);
			for (var j = 0; j < i.length; j++) {
				var k = i[j], l = k.filename, m = k.thumbnail;
				if (
					void 0 == l)
					l = "//smileyswelove.com/smiley/img/" + k.sid;
				else {
					var n = d.rootPath ? d.rootPath : k.rootPath ? k.rootPath : f;
					c && 0 == n.indexOf("//") && ( n = c + n), -1 == l.indexOf("://") && ( l = n + l), m && -1 == m.indexOf("://") && ( m = n + m)
				}
				var o = SWL.$(document.createElement("div")).addClass("swl_smiley"), p = SWL.$(document.createElement("img")).addClass("swl_smileyimg");
				void 0 == e || 0 == e ? p.attr({
					src : m ? m : l,
					sid : k.sid
				}) : (p.attr({
					src : g,
					sid : k.sid
				}), p.attr("data-original", m ? m : l)), swl_core.isIE() && (p.removeAttr("width"), p.removeAttr("height")), m && p.attr("data-fullimage", l), o.append(p), h.append(o)
			}
			return a.append(h), e && window.setTimeout(function() {
				swl_core.fadeSmileysIn()
			}, 500),
			void 0
		} catch(q) {
			console.log(q)
		}
		try {
			a.html(SWL.$("#"+b)[0].cloneNode(!0))
		} catch(q) {
			console.log(q)
		}
	},
	fadeSmileysIn : function() {
		SWL.$("img.swl_smileyimg").lazyload({
			container : SWL.$(swl_core.lazyLoaderContainer),
			event : "scrollstop",
			effect : "fadeIn"
		})
	},
	buildSmileyText : function(a) {
		return swl_core.smileyConfigurations[0].prefix + a + "/" + swl_core.smileyConfigurations[0].postfix
	},
	buildNonLinkSmileyText : function(a) {
		return swl_core.smileyNonLinkConfigurations[0].prefix + a + "/" + swl_core.smileyNonLinkConfigurations[0].postfix
	},
	buildSmileyImageText : function(a) {
		return '<img class="swl_inputSmileyImg" align="textBottom" src="http://smileyswelove.com/smiley/img/' + a + '/" sid="' + a + '">'
	},
	buildSmileyImageLink : function(a) {
		return "http://smileyswelove.com/smiley/img/" + a
	},
	buildSmileyLinkUrl : function(a) {
		return swl_core.baseurl + "/" + a
	},
	replaceInputSmileys : function(a, b) {
		if (0 != a.length) {
			for (var c = "", d = 0; d < a[0].childNodes.length; d++) {
				var e = a[0].childNodes[d];
				if ("swl_inputSmileyImg" == e.className) {
					var f = SWL.$(e).attr("sid"), g = swl_core.buildSmileyText(f);
					c += g
				} else
					c += e.textContent
			}
			SWL.$(b).val(c)
		}
	},
	replaceSmileyTexts : function(a) {
		var b = SWL.$(a).html(), c = !1;
		return swl_core.smileyConfigurations.forEach(function(a, d) {
			prefixNoUrl = a.prefixNoUrl, urlNoProtocol = a.urlNoProtocol, url = a.url, prefix = a.prefix, postfix = a.postfix;
			for (var f = prefix.length, g = postfix.length, h = urlNoProtocol.length, d = 0; -1 != ( d = b.indexOf(prefixNoUrl, d)); ) {
				var i = b.indexOf(postfix, d);
				if (-1 != i) {
					var j = b.substr(d, i - d + g), k = j.indexOf(urlNoProtocol);
					if (-1 != k) {
						var l = j.indexOf("/", k + h), m = l + 1, n = j.indexOf("/", m), o = j.substr(k + h, l - k - h);
						if (parseInt(o) != o) {
							for ( l = j.lastIndexOf("/"), k = l; !isNaN(j.substr(k - 1, 1)); )
								k--;
							o = j.substr(k, l - k)
						}
						if (parseInt(o) == o) {
							var p = o.indexOf('"');
							-1 != p && ( o = o.substr(0, p)), -1 != n && j.substr(m, n - m);
							var r = "http://smileyswelove.com/smiley/img/" + o, s = "<a href='" + url + o + "' target='_blank' class='swl_smileyOutputLink'><img class='swl_smileyOutputImage' sid='" + o + "' align='textBottom'  style='max-width:190px' src='" + r + "'></a>", t = b.substring(d, i + g);
							b = b.replace(t, s), d += s.length, c = !0
						} else
							d += s.length
					} else
						d += f
				} else
					d += f
			}
		}), c && SWL.$(a).html(b), c
	},
	replaceNonLinkSmileyTexts : function(a) {
		var b = SWL.$(a).html(), c = !1;
		return swl_core.smileyNonLinkConfigurations.forEach(function(a, d) {
			prefixNoUrl = a.prefixNoUrl, urlNoProtocol = a.urlNoProtocol, url = a.url, prefix = a.prefix, postfix = a.postfix;
			for (var f = prefix.length, g = postfix.length, h = urlNoProtocol.length, d = 0; -1 != ( d = b.indexOf(prefixNoUrl, d)); ) {
				var i = b.indexOf(postfix, d);
				if (-1 != i) {
					var j = b.substr(d, i - d + g), k = j.indexOf(urlNoProtocol);
					if (-1 != k) {
						var l = j.indexOf("/", k + h), m = j.substr(k + h, l - k - h), n = m.indexOf('"');
						-1 != n && ( m = m.substr(0, n));
						var o = "http://smileyswelove.com/smiley/img/" + m, p = "<a href='" + url + m + "' target='_blank' class='swl_smileyOutputLink'><img class='swl_smileyOutputImage' sid='" + m + "' align='textBottom'  style='max-width:190px' src='" + o + "'></a>", q = b.substring(d, i + g);
						b = b.replace(q, p), d += p.length, c = !0
					} else
						d += f
				} else
					d += f
			}
		}), c && SWL.$(a).html(b), c
	},
	showOverlay : function(a) {
		swl_core.log("showOverlay");
		var d, b = "swl_smileyOutputImage" != a.target.className, c = SWL.$(a.target);
		b ? ( c = "swl_smileyimg" == a.target.className ? c.parent() : c, d = c.find(".swl_smileyimg")) : d = c;
		var e = d.attr("sid");
		if (swl_core.getOverlaySid() != e) {
			swl_core.updateSpecialPackages(), SWL.$("#swl_overlay_active").remove();
			var f = d.parent(".swl_smileyOutputLink");
			d = d.clone(), d.attr("data-original") && d.attr("src", d.attr("data-original"));
			var g;
			if (b) {
				var h = c.parents("#swl_popup,#swl_page");
				g = h.find("#swl_overlay").clone(), g.attr("id", "swl_overlay_active"), h.append(g)
			} else
				g = SWL.$("#swl_overlay").clone(), g.attr("id", "swl_overlay_active"), SWL.$("body").append(g);
			g.attr("sid", e);
			var i = g.find("#swl_overlay_smiley");
			i.children().remove(), f.length > 0 ? ( f = f.clone(), f.children().remove(), f.append(d), i.append(f)) : i.append(d);
			var j = c.outerWidth() + 40 > 138 ? c.outerWidth() + 40 : 138;
			if (b) {
				var k = c[0].offsetLeft - 10;
				k + j > window.innerWidth - 25 && ( k = window.innerWidth - 25 - j);
				var l = c[0].offsetTop - 10 - g.parent().find("#swl_right").scrollTop();
				l + j > g.parent().height() - 5 && ( l = g.parent().height() - 5 - j), g.css({
					left : k,
					top : l
				})
			} else {
				var m = c.offset();
				g.css({
					left : m.left - 10,
					top : m.top - 10
				})
			}
			g.width(j), g.height(j), swl_core.updateOverlayFavorite(e);
			var n = g.find("#swl_overlay_share");
			n.css({
				left : 0,
				top : c.outerHeight() > 96 ? c.outerHeight() : 96
			}), g.show()
		}
	},
	forceHideOverlay : function(a) {
		swl_core.hideOverlay(a, !0)
	},
	hideOverlay : function(a, b) {
		if (b || !a || !a.target || "swl_overlay_active" == a.target.id) {
			swl_core.log("hideOverlay");
			var c = SWL.$("#swl_overlay_active");
			return !b && c.length > 0 && c.is(":hover") ? (swl_core.log("still hovering"),
			void 0) : (c.remove(),
			void 0)
		}
	},
	updateOverlayFavorite : function(a) {
		swl_core.log("updateOverlayFavorite");
		var b = SWL.$("#swl_overlay_active #swl_overlay_favorites"), c = swl_core.isFavorite(a);
		c ? (b.find("#swl_overlay_favorite").show(), b.find("#swl_overlay_add_favorite").hide()) : (b.find("#swl_overlay_favorite").hide(), b.find("#swl_overlay_add_favorite").show())
	},
	getOverlaySid : function() {
		return swl_core.log("getOverlaySid"), SWL.$("#swl_overlay_active").attr("sid")
	},
	isLoggedIn : function() {
		return SWL.$("#swl_loggedIn").length > 0 ? "true" == SWL.$("#swl_loggedIn").html() : !1
	},
	scriptExists : function(a, b, c) {
		swl_core.log("scriptExists"), b || ( b = document);
		for (var d = document.getElementsByTagName("script"), e = d.length; e >= 0; e--)
			if (
				void 0 != d[e] && (d[e].src == a || !c && -1 != d[e].src.indexOf(a)))
				return !0;
		return !1
	},
	stylesheetExists : function(a) {
		swl_core.log("stylesheetExists");
		for (var b = document.getElementsByTagName("link"), c = b.length; c >= 0; c--)
			if (
				void 0 != b[c] && b[c].getAttribute("href") == a)
				return !0;
		return !1
	},
	insertScript : function(a, b, c, d, e) {
		if (swl_core.log("insertScript"), !swl_core.scriptExists(a, b)) {
			b || ( b = document);
			var f = b.createElement("script");
			f.type = "text/javascript", a && (f.src = a), c && (f.async = !0), d && (f.innerHTML = d), e ? b.getElementsByTagName("body")[0].appendChild(f) : b.getElementsByTagName("head")[0].appendChild(f)
		}
	},
	insertStylesheet : function(a, b) {
		swl_core.log("insertStylesheet"), b || ( b = document);
		var c = b.createElement("link");
		c.setAttribute("rel", "stylesheet"), c.setAttribute("type", "text/css"), c.setAttribute("href", a), b.getElementsByTagName("head")[0].appendChild(c)
	},
	savedRange :
	void 0,
	saveSelection : function() {
		swl_core.log("saveSelection"), window.getSelection ? swl_core.savedRange = window.getSelection().getRangeAt(0) : document.selection && (swl_core.savedRange = document.selection.createRange())
	},
	restoreSelection : function(a) {
		if (swl_core.log("restoreSelection"), a.focus(), null != swl_core.savedRange)
			if (window.getSelection) {
				var b = window.getSelection();
				b.rangeCount > 0 && b.removeAllRanges(), b.addRange(swl_core.savedRange)
			} else
				document.createRange ? window.getSelection().addRange(swl_core.savedRange) : document.selection && swl_core.savedRange.select()
	},
	removeQueryString : function(a) {
		swl_core.log("removeQueryString");
		var b = a.indexOf("?");
		return -1 != b && ( a = a.substr(0, b)), a
	},
	triggerKeyboardEvent : function(a, b, c) {
		swl_core.log("triggerKeyboardEvent");
		var d = document.createEvent ? document.createEvent("Events") : document.createEventObject();
		d.initEvent && d.initEvent(b, !0, !0), d.keyCode = c, d.which = c, a.dispatchEvent ? a.dispatchEvent(d) : a.fireEvent("on" + b, d)
	},
	dispatchKeyEvent : function(a, b) {
		swl_core.log("dispatchKeyEvent");
		var c = b ? b.type : null;
		if (!c || "string" != typeof c)
			return !1;
		switch(c=c.toLowerCase()) {
			case"keyup":
			case"keydown":
			case"keypress":
				break;
			default:
				return !1
		}
		var d = null, e = !1;
		if (SWL.$.isFunction(document.createEvent)) {
			try {
				d = document.createEvent("KeyEvents"), d.initKeyEvent(b.type, b.bubbles, b.cancelable, b.view, b.ctrlKey, b.altKey, b.shiftKey, b.metaKey, b.keyCode, b.charCode)
			} catch(f) {
				try {
					d = document.createEvent("Events")
				} catch(g) {
					d = document.createEvent("UIEvents")
				} finally {
					d.initEvent(b.type, b.bubbles, b.cancelable), d.view = b.view, d.altKey = b.altKey, d.ctrlKey = b.ctrlKey, d.shiftKey = b.shiftKey, d.metaKey = b.metaKey, d.keyCode = b.keyCode, d.charCode = b.charCode, d.which = b.which
				}
			}
			a.dispatchEvent(d), e = !0
		} else
			document.createEventObject && "object" == typeof document.createEventObject && ( d = document.createEventObject(), d.bubbles = b.bubbles, d.cancelable = b.cancelable, d.view = b.view, d.ctrlKey = b.ctrlKey, d.altKey = b.altKey, d.shiftKey = b.shiftKey, d.metaKey = b.metaKey, d.keyCode = b.keyCode, d.which = b.which, a.fireEvent("on" + b.type, d), e = !0);
		return e
	}
}, _gaq = _gaq || [];
_gaq.push(["b._setAccount", "UA-10005312-17"]), swl_core.initializeGoogleAnalytics();

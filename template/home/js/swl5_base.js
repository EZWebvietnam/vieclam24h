var swl_base = {
	test : !1,
	logging : !1,
	chatInputIdCount : 0,
	mappedChatWindows : [],
	aboutDialog :
	void 0,
	popupDialog :
	void 0,
	currentMenu : "text",
	currentToolbar :
	void 0,
	swl_inputTimer :
	void 0,
	swl_outputTimer :
	void 0,
	config : {
		name : "swl_base",
		loggingName : "swl_base",
		supportInput : !0,
		supportOutput : !1,
		useShortSmileyText : !1,
		useNonLinkSmileyText : !1,
		isSupportedSite :
		void 0,
		setPopupLocation :
		void 0,
		setAboutLocation :
		void 0,
		popupShownEvent :
		void 0,
		showDialogsAboveToolbar :
		void 0,
		showDialogsToLeftToolbar :
		void 0,
		getSmileyClickedTarget :
		void 0,
		sendOnEnter :
		void 0,
		onUpdateOutput :
		void 0,
		onUpdateInput :
		void 0,
		onSmileyClicked :
		void 0
	},
	log : function(a) {
		swl_base.logging && console.log("[" + swl_base.config.loggingName + "] " + a)
	},
	gaEvent : function(a, b) {
		swl_core.gaEvent(swl_base.config.name, a, b)
	},
	isSupportedSite : function() {
		return swl_base.config.isSupportedSite ? swl_base.config.isSupportedSite() : !1
	},
	initializeListeners : function() {
		if (swl_base.isSupportedSite()) {
			swl_base.log("initializeListeners");
			var a = SWL.$("body");
			a.on("click", ".swl_ToolbarButton", swl_base.onShowPopupDialog), a.on("click", ".swl_ToolbarLogo", swl_base.onShowAboutDialog), a.on("click", ".swl_AboutDialogCloseButton", swl_base.onCloseAboutDialog), a.on("click", ".swl_chatSmileyPopupCloseButton", swl_base.onClosePopupDialog), a.on("click", ".swl_smiley,#swl_overlay_smiley", swl_base.onSmileyDivClicked), a.on("click", ".swl_smileyimg", swl_base.onSmileyClicked), a.on("click", "#swl_login", swl_base.onLoginLinkClicked), a.on("click", "#swl_logout", swl_base.onLogoutLinkClicked), a.on("mouseleave", "#swl_overlay_active", swl_core.hideOverlay), swl_core.isIE() && a.on("mousewheel", "#swl_overlay_active", function(a) {
				swl_core.forceHideOverlay(a);
				var b = -1 * a.originalEvent.wheelDelta + SWL.$("#swl_right").scrollTop();
				SWL.$("#swl_right").scrollTop(b)
			}), a.on("click", "#swl_overlay_favorite", swl_base.onAddFavoriteClicked), a.on("click", "#swl_overlay_add_favorite", swl_base.onAddFavoriteClicked), a.on("click", "#swl_overlay_fb", swl_base.onOverlayFacebookClicked), a.on("click", "#swl_overlay_gplus", swl_base.onOverlayGooglePlusClicked), a.on("click", "#swl_overlay_twitter", swl_base.onOverlayTwitterClicked), swl_base.initialize()
		}
	},
	initialize : function() {
		swl_base.isSupportedSite() && (swl_base.log("initialize"), swl_base.config.supportOutput && (
		void 0 != swl_base.swl_outputTimer && window.clearInterval(swl_base.swl_outputTimer), swl_base.swl_outputTimer = window.setInterval(function() {
			swl_base.onUpdateOutput()
		}, 1e3)), swl_base.config.supportInput && (
		void 0 != swl_base.swl_inputTimer && window.clearInterval(swl_base.swl_inputTimer), swl_base.swl_inputTimer = window.setInterval(function() {
			swl_base.onUpdateInput()
		}, 1e3)))
	},
	smileyClicked : function(a) {
		if (swl_base.config.onSmileyClicked)
			return swl_base.config.onSmileyClicked(a);
		if (swl_base.config.getSmileyClickedTarget) {
			var b = swl_base.config.getSmileyClickedTarget();
			b.length > 1 && ( b = SWL.$(b[0]));
			var c = SWL.$(a).attr("sid");
			swl_base.gaEvent("SmileyClicked", swl_base.config.name + " smiley clicked with sid=" + c);
			var d;
			d = swl_base.config.useShortSmileyText ? swl_core.getShortPrefix() + c + "/ #smiley" + swl_core.getShortPostfix() : swl_base.config.useNonLinkSmileyText ? swl_core.buildNonLinkSmileyText(c) : swl_core.buildSmileyText(c), b.is(":focus") || b.focus(), window.setTimeout(function() {
				"true" == b.attr("contenteditable") ? swl_core.isIE() ? (swl_core.triggerSpaceKeyPress(b[0]), window.setTimeout(function() {
					swl_core.insertTextIntoInputArea(b, d)
				}, 100)) : swl_core.insertTextIntoInputArea(b, d) : swl_core.insertAtCaret(b, d)
			}, 300), swl_base.closePopupDialog()
		}
	},
	onSmileyDivClicked : function(a) {
		var b = SWL.$(a.target).children()[0];
		void 0 != b && (swl_base.smileyClicked(b), swl_core.isIE() || a.stopPropagation())
	},
	onSmileyClicked : function(a) {
		swl_base.smileyClicked(a.target), swl_core.isIE() || a.stopPropagation()
	},
	showDialogsAboveToolbar : function() {
		return swl_base.config.showDialogsAboveToolbar ? swl_base.config.showDialogsAboveToolbar() : !1
	},
	showDialogsToLeftToolbar : function() {
		return swl_base.config.showDialogsToLeftToolbar ? swl_base.config.showDialogsToLeftToolbar() : !1
	},
	setAboutLocation : function(a) {
		if (swl_base.config.setAboutLocation)
			return swl_base.config.setAboutLocation(a);
		var b = swl_base.currentToolbar.parent().offset(), c = b.left + swl_base.currentToolbar.parent().width() - swl_base.aboutDialog.width(), d = b.top + swl_base.currentToolbar.parent().height();
		swl_base.showDialogsAboveToolbar() && ( d = b.top - swl_base.aboutDialog.height()), 0 > c && ( c = 0), swl_base.aboutDialog.css("left", c + "px"), swl_base.aboutDialog.css("top", d + "px")
	},
	onShowAboutDialog : function(a) {
		swl_base.closePopupDialog(), swl_base.closeAboutDialog();
		var b = SWL.$(a.target);
		swl_base.currentToolbar = b, swl_base.aboutDialog = swl_core.createAboutDialog(), SWL.$("body").append(swl_base.aboutDialog), SWL.$("div").on("scroll", swl_base.setAboutLocation), swl_base.setAboutLocation()
	},
	onCloseAboutDialog : function() {
		swl_base.closeAboutDialog()
	},
	closeAboutDialog : function() {
		swl_base.log("closeAboutDialog"), swl_core.closeAboutDialog(swl_base.aboutDialog), SWL.$("div").off("scroll", swl_base.setAboutLocation)
	},
	setPopupLocation : function(a) {
		if (swl_base.config.setPopupLocation)
			return swl_base.config.setPopupLocation(a);
		var b = swl_base.currentToolbar.parent().offset(), c = b.left, d = b.top + swl_base.currentToolbar.parent().height();
		swl_base.showDialogsAboveToolbar() && ( d = b.top - swl_base.popupDialog.height()), swl_base.showDialogsToLeftToolbar() && ( c = b.left - swl_base.popupDialog.width() + swl_base.currentToolbar.width() + 6), 0 > d && ( d = 0);
		var e = swl_base.popupDialog.width(), f = swl_base.popupDialog.height(), g = swl_base.popupDialog.width(), h = swl_base.popupDialog.height();
		swl_base.popupDialog.width() + c > window.innerWidth && ( c = 0, g = window.innerWidth - 10, swl_base.popupDialog.css("width", g + "px"), swl_base.popupDialog.find("#swl_right").css("width", g - 90 + "px")), swl_base.popupDialog.height() > window.innerHeight - 20 && ( d = 0, h = window.innerHeight - d - 20, swl_base.popupDialog.css("height", h + "px")), 0 > d && ( d = 0), 0 > c && ( c = 0), swl_base.popupDialog.css("left", c + "px"), swl_base.popupDialog.css("top", d + "px"), (f > h || e > g) && (swl_base.popupDialog.find(".swl_logo").css("display", "none"), swl_base.popupDialog.find("#swl_intro").css("display", "none"), swl_base.popupDialog.find("#swl_bottom").css("display", "none"), swl_base.popupDialog.find("hr:first").css("margin-top", "30px"), swl_base.popupDialog.find("hr:last").css("display", "none"), swl_base.popupDialog.css("height", "320px"), swl_base.showDialogsAboveToolbar() && ( d = b.top - 320, 0 > d && ( d = 0), swl_base.popupDialog.css("top", d + "px")))
	},
	popupShownEvent : function() {
		return swl_base.config.popupShownEvent ? swl_base.config.popupShownEvent() : (swl_base.gaEvent("ChatPopupShown"),
		void 0)
	},
	onShowPopupDialog : function(a) {
		swl_base.log("onShowPopupDialog");
		var b = SWL.$(a.target);
		swl_base.currentToolbar = b, swl_base.closePopupDialog(), swl_base.closeAboutDialog(), swl_base.popupDialog = swl_core.createPopupDialog(), swl_base.popupDialog.attr({
			style : "width:510px;left:0px;top:25px;z-index:999;"
		});
		var c = swl_base.popupDialog.find("#swl_right");
		c.attr({
			style : "overflow-y:scroll;width:415px;height:260px;"
		});
		var d = swl_base.popupDialog.find("#swl_left");
		swl_core.insertSmileyPackages(d, !0, !0, !0), swl_core.unselectable(swl_base.popupDialog), SWL.$("body").append(swl_base.popupDialog), SWL.$("div").on("scroll", swl_base.setPopupLocation), SWL.$(".swl_menu").click(swl_base.onSwitchMenu), swl_base.setPopupLocation(), swl_base.popupShownEvent(), window.setTimeout(function() {
			swl_base.switchMenu(c)
		}, 1e3)
	},
	onClosePopupDialog : function() {
		swl_base.closePopupDialog()
	},
	closePopupDialog : function() {
		swl_base.log("closePopupDialog"), swl_core.closePopupDialog(swl_base.popupDialog), SWL.$("div").off("scroll", swl_base.setPopupLocation)
	},
	onSwitchMenu : function() {
		var a = SWL.$(this);
		swl_base.currentMenu = a.attr("tag");
		var b = a.parents(".swl_chatSmileyPopup").find("#swl_right");
		b.scrollTop(0), swl_base.switchMenu(b)
	},
	switchMenu : function(a) {
		swl_base.log("switchMenu");
		var b = swl_core.isLoggedIn();
		if (a.parent().find("#swl_login").css("display", b ? "none" : "block"), a.parent().find("#swl_logout").css("display", b ? "block" : "none"),
		void 0 == swl_base.currentMenu && (swl_base.currentMenu = SWL.$("#swl_left").find(".swl_menu").first().attr("tag")), SWL.$(".swl_currentMenu").removeClass("swl_currentMenu"), SWL.$(".swl_menu[tag='" + swl_base.currentMenu + "']").addClass("swl_currentMenu"), swl_core.updateSpecialPackages(), swl_core.insertSmileyPackage(a, swl_base.currentMenu), a.width() < 218) {
			var c = (a.width() - 46) / 2, d = c - 4;
			a.find(".swl_smiley").css("width", c + "px"), a.find(".swl_smiley").css("height", c + "px"), a.find(".swl_smileyimg").css("width", d + "px"), a.find(".swl_smileyimg").css("height", d + "px")
		}
		a.find("i").css("background-image", "none"), SWL.$(".swl_smiley").hoverIntent({
			over : swl_core.showOverlay,
			out : swl_core.hideOverlay,
			interval : 400
		})
	},
	onUpdateOutput : function() {
		if (swl_base.config.onUpdateOutput) {
			swl_base.config.onUpdateOutput();
			var a = SWL.$("#swl_overlay_active");
			(0 == a.length || 0 == a.is(":hover")) && SWL.$(".swl_smileyOutputImage").hoverIntent({
				over : swl_core.showOverlay,
				out : swl_core.hideOverlay,
				interval : 500
			})
		}
	},
	onUpdateInput : function() {
		0 != SWL.$("#swl_chatPopupPlaceholder").length && swl_base.config.onUpdateInput && swl_base.config.onUpdateInput()
	},
	onLoginLinkClicked : function() {
		return swl_base.closePopupDialog(), window.open(swl_core.baseurl + "/account/logon"), !1
	},
	onLogoutLinkClicked : function() {
		swl_base.closePopupDialog(), SWL.$("#swl_loggedIn").html("")
	},
	onOverlayFacebookClicked : function() {
		swl_base.gaEvent("Overlay to FB")
	},
	onOverlayGooglePlusClicked : function() {
		swl_base.gaEvent("Overlay to Google+")
	},
	onOverlayTwitterClicked : function() {
		swl_base.gaEvent("Overlay to Twitter")
	},
	onShowFavoritesClicked : function(a) {
		swl_base.currentMenu = "Favorites", swl_base.switchMenu(SWL.$(a.target).parents(".swl_chatSmileyPopup").find("#swl_right")), swl_core.hideOverlay()
	},
	onAddFavoriteClicked : function(a) {
		swl_base.gaEvent("Overlay add favorite"), swl_core.isLoggedIn() || (swl_base.currentMenu = "Favorites", swl_base.switchMenu(SWL.$(a.target).parents(".swl_chatSmileyPopup").find("#swl_right")), swl_core.hideOverlay())
	},
	sendOnEnter : function(a) {
		return swl_base.config.sendOnEnter ? swl_base.config.sendOnEnter(a) : !0
	},
	onChatInputKeyEvent : function(a) {
		swl_base.log("onChatInputKeyEvent");
		var b = SWL.$(this), c = swl_base.getTextarea(b);
		if ("keydown" == a.type || "keypress" == a.type) {
			if (13 == a.which && !a.shiftKey && swl_base.sendOnEnter(b) && swl_core.replaceInputSmileys(b, c), c && (swl_core.dispatchKeyEvent(SWL.$(c)[0], a), 13 == a.which && !a.shiftKey && swl_base.sendOnEnter(b)))
				return b.html(SWL.$.browser.mozilla ? "<br/>" : ""), b.focus(), b.resize(), !1
		} else
			"keyup" == a.type && c && (SWL.$(c).val(".."), swl_core.dispatchKeyEvent(SWL.$(c)[0], a));
		swl_core.limitedResize(b)
	},
	getTextarea : function(a) {
		swl_base.log("getTextarea");
		var b = a.attr("id");
		b = b.replace("swl_ChatInput", "");
		var c = swl_base.mappedChatWindows[b];
		return
		void 0 == c ? (swl_base.log("mappings not found"),
		void 0) : c[0]
	}
}, savedHistory = window.history, pushState = savedHistory.pushState;
savedHistory.pushState = function(a) {
	return "function" == typeof savedHistory.onpushstate && savedHistory.onpushstate({
		state : a
	}), pushState.apply(savedHistory, arguments)
}, window.onpopstate = savedHistory.onpushstate = function() {
	swl_base.initialize()
}; 
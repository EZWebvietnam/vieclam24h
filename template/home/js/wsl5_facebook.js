function swl_insertIntoFacebook(a, b, c) {
	var d = swl_core.getFacebookStatusBox();
	d ? swl_core.insertSmileysToTextarea(d, a) : swl_core.postToFacebookFeed(b, c)
}

var swl_fb = {
	initJQuery : function() {
		if ("undefined" == typeof SWL || "undefined" == typeof SWL.jQuery || "undefined" == typeof swl_core || "undefined" == typeof swl_base)
			window.setTimeout(function() {
				swl_fb.initJQuery()
			}, 100);
		else {
			if (!swl_core.isFacebookSite())
				return;
			swl_fb.initializeBase(), swl_fb.initializeListeners(), swl_base.initializeListeners()
		}
	},
	initializeListeners : function() {
		swl_base.log("initializeListeners");
		var a = SWL.$("body");
		a.on("focus", ".input,.inputContainer", swl_fb.onChatInputFocus), a.on("focus", swl_fb.getMessagesTextareaSelector(), swl_fb.onMessagesInputFocus), a.on("resize", ".swl_ChatInput", swl_fb.onChatInputResize), a.on("mouseup", ".swl_ChatInput", swl_fb.onChatInputMouseUp)
	},
	initializeBase : function() {
		swl_base.config.name = "Facebook", swl_base.config.loggingName = "swl_fb", swl_base.config.supportInput = !0, swl_base.config.supportOutput = !0, swl_base.config.isSupportedSite = swl_core.isFacebookSite, swl_base.config.popupShownEvent = swl_fb.popupShownEvent, swl_base.config.showDialogsAboveToolbar = swl_fb.showDialogsAboveToolbar, swl_base.config.showDialogsToLeftToolbar = swl_fb.showDialogsToLeftToolbar, swl_base.config.sendOnEnter = swl_fb.sendOnEnter, swl_base.config.onUpdateOutput = swl_fb.onUpdateOutput, swl_base.config.onUpdateInput = swl_fb.onUpdateInput, swl_base.config.onSmileyClicked = swl_fb.smileyClicked
	},
	getMessagesTextareaSelector : function() {
		return ".-cx-PRIVATE-webMessengerComposer__composerTextarea,textarea[aria-controls='webMessengerRecentMessages']"
	},
	getStatusTextareaSelector : function() {
		return "#pagelet_composer textarea.mentionsTextarea"
	},
	getMessagesReplyButtonSelector : function() {
		return ".-cx-PRIVATE-webMessengerBottomShelf__container"
	},
	getMessagesOutput : function(a) {
		return a ? SWL.$(a).parents("#pagelet_web_messenger").find(".-cx-PRIVATE-webMessengerReadView__messagingScroller,._2nc") : SWL.$("#pagelet_web_messenger").find(".-cx-PRIVATE-webMessengerReadView__messagingScroller,._2nc")
	},
	getMessageInputs : function(a) {
		var b;
		return b = a ? SWL.$(a).parents("div.-cx-PRIVATE-webMessengerComposer__autogrowContainer") : SWL.$("div.-cx-PRIVATE-webMessengerComposer__autogrowContainer"), 0 == b.length && ( b = SWL.$("textarea[aria-controls='webMessengerRecentMessages']").parent()), b
	},
	getStatusBoxInput : function() {
		return SWL.$("#pagelet_composer,#pagelet_group_composer,.fbTimelineComposerUnit,form.mainCommentForm").find(".uiMentionsInput")
	},
	getInputAreaFromElement : function(a) {
		var b;
		return swl_fb.isChat(a) ? b = SWL.$(a).parents(".fbNubFlyoutInner").find(".swl_ChatInput") : ( b = SWL.$(a).parents(".-cx-PRIVATE-webMessengerComposer__root").find(".swl_ChatInput"), 0 == b.length && ( b = SWL.$("textarea[aria-controls='webMessengerRecentMessages']").parent().parent().parent().find(".swl_ChatInput"))), b
	},
	getTextareaFromElement : function(a) {
		var b;
		return swl_fb.isChat(a) ? b = SWL.$(a).parents(".fbNubFlyoutInner").find("textarea") : swl_fb.isComment(a) ? b = SWL.$(a).parents("form.commentable_item").find("textarea[name^='add_comment_text']") : swl_fb.isStatusBox(a) ? b = SWL.$(a).parents("#pagelet_composer,#pagelet_group_composer,.fbTimelineComposerUnit,form.mainCommentForm").find(".uiMentionsInput").find("textarea") : ( b = SWL.$(a).parents(".-cx-PRIVATE-webMessengerComposer__root").find(".textarea"), 0 == b.length && ( b = SWL.$("textarea[aria-controls='webMessengerRecentMessages']"))), b
	},
	getSendOnEnterFromElement : function(a) {
		return SWL.$(".-cx-PRIVATE-webMessengerComposer__root").length > 0 ? 0 == SWL.$(a).parents(".-cx-PRIVATE-webMessengerComposer__disableSOE").length : "-1" == SWL.$("#pagelet_web_messenger").find("label.uiButtonConfirm").find("input").attr("tabindex")
	},
	isElementReplyButton : function(a) {
		return -1 != a.className.indexOf("-cx-PRIVATE-webMessengerComposer__replyButton") || -1 != a.parentElement.className.indexOf("-cx-PRIVATE-webMessengerComposer__replyButton") || "input" == a.tagName && -1 != a.parentElement.className.indexOf("uiButtonConfirm") || -1 != a.parentElement.className.indexOf("uiButtonConfirm")
	},
	isChat : function(a) {
		return 0 != SWL.$(a).parents(".fbDockChatTabFlyout").length
	},
	isStatusBox : function(a) {
		return 0 != SWL.$(a).parents("#pagelet_composer,#pagelet_group_composer,.fbTimelineComposerUnit,form.mainCommentForm").length
	},
	isComment : function(a) {
		return 0 != SWL.$(a).parents("form.commentable_item").find("textarea[name^='add_comment_text']").length
	},
	sendOnEnter : function(a) {
		return swl_fb.isChat(a) || swl_fb.getSendOnEnterFromElement(a)
	},
	activateTextarea : function(a) {
		swl_base.log("activateTextarea"), window.setTimeout(function() {
			SWL.$(a).trigger("mousedown"), SWL.$(a).trigger("mouseup"), SWL.$(a).trigger("mousepress"), SWL.$(a).trigger("click")
		}, 500)
	},
	resizeChatTabs : function() {
		swl_base.log("resizeChatTabs");
		try {
			window.Dock && window.Dock.resizeAllFlyouts && Dock.resizeAllFlyouts()
		} catch(a) {
		}
	},
	onChatInputMouseUp : function(a) {
		swl_base.log("onChatInputMouseUp"), swl_fb.isChat(a.target) || swl_core.saveSelection()
	},
	onMessagesInputFocus : function(a) {
		swl_base.log("onMessagesInputFocus");
		var b = swl_fb.getMessageInputs(a.target), c = b.find(".swl_ChatInput");
		return c.is(":focus") || swl_core.restoreSelection(c), !0
	},
	onChatInputFocus : function(a) {
		swl_base.log("onChatInputFocus");
		var b = SWL.$(a.target).parents(".fbNubFlyoutFooter"), c = b.find(".swl_ChatInput");
		return c.is(":focus") || c.focus(), !0
	},
	onChatInputResize : function(a) {
		swl_base.log("onChatInputResize");
		var b = SWL.$(a.target);
		if (swl_fb.isChat(a.target)) {
			var c = b.parents(".fbNubFlyoutFooter");
			if (b.size() > 0 && c.size()) {
				var d = c.innerHeight(), e = b.outerHeight();
				if (d > 0 && e > 0 && d != e + 1) {
					c.height(e + 1), swl_fb.resizeChatTabs();
					var f = e + 1 - d, g = b.parents(".fbDockChatTabFlyout");
					g.height(g.height() + f)
				}
			}
			swl_fb.resizeChatTabs()
		} else {
			var c = swl_fb.getMessageInputs(a.target);
			if (b.size() > 0 && c.size()) {
				var d = c.height(), e = b.height();
				if (d > 0 && e > 0 && d != e + 2) {
					c.height(e + 2);
					var f = e + 2 - d, h = swl_fb.getMessagesOutput(a.target);
					h.height(h.height() - f)
				}
			}
		}
	},
	smileyClicked : function(a) {
		swl_base.log("smileyClicked");
		var b = SWL.$(a).attr("sid");
		if (swl_base.gaEvent("SmileyClicked", "Facebook smiley clicked with sid=" + b), !swl_core.isMozilla() || swl_fb.isStatusBox(swl_base.currentToolbar) || swl_fb.isComment(swl_base.currentToolbar)) {
			var e = swl_fb.getTextareaFromElement(swl_base.currentToolbar);
			e.length > 1 && ( e = SWL.$(e[0]));
			var d = swl_core.buildSmileyText(b);
			e.is(":focus") ? swl_core.insertAtCaret(e, d) : (e.focus(), swl_fb.isStatusBox(swl_base.currentToolbar) ? (swl_core.triggerSpaceKeyPress(e[0]), window.setTimeout(function() {
				swl_core.insertAtCaret(e, d)
			}, 500)) : swl_core.insertAtCaret(e, d)), swl_base.closePopupDialog()
		} else {
			var c = swl_fb.getInputAreaFromElement(swl_base.currentToolbar), d = swl_core.buildSmileyImageText(b);
			swl_core.insertTextIntoInputArea(c, d), swl_base.closePopupDialog(), swl_fb.isChat(c) || (swl_core.saveSelection(), swl_fb.activateTextarea(swl_base.getTextarea(c)))
		}
	},
	showDialogsAboveToolbar : function() {
		return !swl_fb.isStatusBox(swl_base.currentToolbar) && !swl_fb.isComment(swl_base.currentToolbar)
	},
	showDialogsToLeftToolbar : function() {
		return swl_fb.isChat(swl_base.currentToolbar)
	},
	onUpdateOutput : function() {
		var a = SWL.$("div.conversation");
		a.each(function(a, b) {
			var c = !1, d = SWL.$(b).find("div[data-jsid='message']");
			d.each(function(a, b) {
				swl_core.replaceSmileyTexts(b) && ( c = !0)
			}), c && window.setTimeout(function() {
				var a = SWL.$(b).find("div:last");
				a.length > 0 && a[0].scrollIntoView(!1)
			}, 500)
		});
		var b = SWL.$("#MessagingMessages").find(".MessagingMessage");
		b.each(function(a, b) {
			swl_core.replaceSmileyTexts(b)
		}), b = SWL.$(".webMessengerMessageGroup"), b.each(function(a, b) {
			swl_core.replaceSmileyTexts(b)
		});
		var c = SWL.$(".postText");
		c.each(function(a, b) {
			swl_core.replaceSmileyTexts(b)
		})
	},
	onUpdateInput : function() {
		swl_fb.onUpdateChatInput(), swl_fb.onUpdateMessagesInput(), swl_fb.onUpdateStatusInput(), swl_fb.onUpdateCommentInput()
	},
	onUpdateChatInput : function() {
		var a = SWL.$("div.fbNubFlyoutFooter");
		a.each(function(a, b) {
			if (0 == SWL.$(b).parent().find(".swl_chatContainer").length) {
				swl_base.log("onUpdateChatInput");
				var c = SWL.$(b), d = c.find("textarea").css({
					clear : "both"
				}), e = swl_base.chatInputIdCount++;
				swl_base.mappedChatWindows[e] = [d];
				var f = swl_core.createToolbar(e, c), g = c.parents(".fbDockChatTabFlyout"), h = g.find(".fbNubFlyoutBody");
				if (h.height(h.height() - f.height()), swl_core.isMozilla()) {
					swl_core.unselectable(c.find(".inputContainer"));
					var i = c.parent().find(".emoticonsPanel");
					swl_core.unselectable(i), i.css("display", "none");
					var j = swl_core.createInputArea(e, c);
					c.append(j);
					var k = j.find(".swl_ChatInput");
					k.bind("keyup keypress", swl_base.onChatInputKeyEvent), k.resize(), k.focus()
				} else
					swl_fb.resizeChatTabs()
			}
		})
	},
	onUpdateMessagesInput : function() {
		var a = swl_fb.getMessageInputs();
		a.each(function(a, b) {
			if (0 == SWL.$(b).parent().find(".swl_chatContainer").length) {
				swl_base.log("onUpdateMessagesInput");
				var c = SWL.$(b), d = c.find("textarea").css({
					clear : "both"
				}), e = swl_base.chatInputIdCount++;
				swl_base.mappedChatWindows[e] = [d];
				var f = swl_core.createToolbar(e, c), g = swl_fb.getMessagesOutput(b);
				if (g.height(g.height() - f.height()), swl_core.isMozilla()) {
					swl_core.unselectable(d.parent());
					var h = c.parent().find(".emoticonsPanel");
					swl_core.unselectable(h), h.css("display", "none");
					var i = swl_core.createInputArea(e, c);
					c.append(i), i.css({
						width : "100%",
						border : "1px solid #BDC7D8",
						"float" : "left"
					});
					var j = i.find(".swl_ChatInput");
					j.css({
						width : "98%",
						placeholder : "Write a reply..."
					}), j.css("min-height", "51px"), j.css("font-size", "13px"), j.bind("keyup keydown keypress", swl_base.onChatInputKeyEvent), d.parent().parent().parent().parent().bind("mousedown", swl_fb.onReplyButtonClicked), swl_fb.activateTextarea(d)
				} else {
					var h = c.parent().find(".-cx-PRIVATE-webMessengerComposer__emoteWrapper");
					if (0 == h.length && ( h = c.parent().find(".emoticonsPanel")), h.length > 0) {
						var k = h.offset();
						k.top += f.height(), h.offset(k)
					}
				}
			}
		})
	},
	onUpdateStatusInput : function() {
		var a = swl_fb.getStatusBoxInput();
		a.each(function(a, b) {
			if (0 == SWL.$(b).parent().find(".swl_chatContainer").length) {
				swl_base.log("onUpdateStatusInput");
				var c = SWL.$(b), d = c.find("textarea").css({
					clear : "both"
				}), e = swl_base.chatInputIdCount++;
				swl_base.mappedChatWindows[e] = [d];
				var f = swl_core.createToolbar(e, c), g = swl_fb.getMessagesOutput(b);
				g.height(g.height() - f.height());
				var h = c.parent().find(".-cx-PRIVATE-webMessengerComposer__emoteWrapper");
				if (0 == h.length && ( h = c.parent().find(".emoticonsPanel")), h.length > 0) {
					var i = h.offset();
					i.top += f.height(), h.offset(i)
				}
			}
		})
	},
	onUpdateCommentInput : function() {
		var a = SWL.$("form.commentable_item textarea[name^='add_comment_text']");
		a.each(function(a, b) {
			if (0 == SWL.$(b).parent().find(".swl_chatContainer").length) {
				swl_base.log("onUpdateCommentInput");
				var c = SWL.$(b), d = swl_base.chatInputIdCount++;
				swl_core.createToolbar(d, c)
			}
		})
	},
	onReplyButtonClicked : function(a) {
		if (swl_base.log("onReplyButtonClicked"), swl_fb.isElementReplyButton(a.target)) {
			var b = swl_fb.getInputAreaFromElement(a.target), c = b.attr("id");
			c = c.replace("swl_ChatInput", "");
			var d = swl_base.mappedChatWindows[c];
			if (
			void 0 != d) {
				var e = d[0];
				swl_core.replaceInputSmileys(b, e), b.html(""), swl_fb.activateTextarea(e)
			}
		}
	}
};
swl_fb.initJQuery(); 
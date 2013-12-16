function swl_scrollStopExtend() {
	var a = SWL.$.event.special, b = "D" + +new Date, c = "D" + (+new Date + 1);
	a.scrollstart = {
		setup : function() {
			var c, d = function(b) {
				var d = this, e = arguments;
				c ? clearTimeout(c) : (b.type = "scrollstart", SWL.$.event.handle.apply(d, e)), c = setTimeout(function() {
					c = null
				}, a.scrollstop.latency)
			};
			SWL.$(this).bind("scroll", d).data(b, d)
		},
		teardown : function() {
			SWL.$(this).unbind("scroll", SWL.$(this).data(b))
		}
	}, a.scrollstop = {
		latency : 300,
		setup : function() {
			var b, d = function(c) {
				var d = this, e = arguments;
				b && clearTimeout(b), b = setTimeout(function() {
					b = null, c.type = "scrollstop", SWL.$.event.handle.apply(d, e)
				}, a.scrollstop.latency)
			};
			SWL.$(this).bind("scroll", d).data(c, d)
		},
		teardown : function() {
			SWL.$(this).unbind("scroll", SWL.$(this).data(c))
		}
	}
}

function swl_scrollStopInit() {
	return "undefined" == typeof SWL ? (window.setTimeout(function() {
		swl_scrollStopInit()
	}, 50),
	void 0) : (swl_scrollStopExtend(),
	void 0)
}swl_scrollStopInit(); 
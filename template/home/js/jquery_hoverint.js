function swl_hoverIntentExtend(a) {
	a.fn.hoverIntent = function(b, c) {
		var d = {
			sensitivity : 7,
			interval : 100,
			timeout : 0
		};
		d = a.extend(d, c ? {
			over : b,
			out : c
		} : b);
		var e, f, g, h, i = function(a) {
			e = a.pageX, f = a.pageY
		}, j = function(b, c) {
			return c.hoverIntent_t = clearTimeout(c.hoverIntent_t), Math.abs(g - e) + Math.abs(h - f) < d.sensitivity ? (a(c).unbind("mousemove", i), c.hoverIntent_s = 1, d.over.apply(c, [b])) : ( g = e, h = f, c.hoverIntent_t = setTimeout(function() {
				j(b, c)
			}, d.interval),
			void 0)
		}, k = function(a, b) {
			return b.hoverIntent_t = clearTimeout(b.hoverIntent_t), b.hoverIntent_s = 0, d.out.apply(b, [a])
		}, l = function(b) {
			var c = a.extend({}, b), e = this;
			e.hoverIntent_t && (e.hoverIntent_t = clearTimeout(e.hoverIntent_t)), "mouseenter" == b.type ? ( g = c.pageX, h = c.pageY, a(e).bind("mousemove", i), 1 != e.hoverIntent_s && (e.hoverIntent_t = setTimeout(function() {
				j(c, e)
			}, d.interval))) : (a(e).unbind("mousemove", i), 1 == e.hoverIntent_s && (e.hoverIntent_t = setTimeout(function() {
				k(c, e)
			}, d.timeout)))
		};
		return this.bind("mouseenter", l).bind("mouseleave", l)
	}
}

function swl_hoverIntentInit() {
	return "undefined" == typeof SWL ? (window.setTimeout(function() {
		swl_hoverIntentInit()
	}, 50),
	void 0) : (swl_hoverIntentExtend(SWL.jQuery),
	void 0)
}swl_hoverIntentInit(); 
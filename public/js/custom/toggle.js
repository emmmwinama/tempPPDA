/*! ========================================================================
 * Bootstrap Toggle: bootstrap-toggle.js v2.2.0
 * http://www.bootstraptoggle.com
 * ========================================================================
 * Copyright 2014 Min Hur, The New York Times Company
 * Licensed under MIT
 * ======================================================================== */
+(function(a) {
        "use strict";


        function b(b) {
            return this.each(function() {
                var d = a(this),
                    e = d.data("bs.toggle"),
                    f = "object" == typeof b && b;
                e || d.data("bs.toggle", (e = new c(this, f))),
                    "string" == typeof b && e[b] && e[b]();
            });
        }
        var c = function(b, c) {
                (this.$element = a(b)),
                s.options = a.extend({}, this.defaults(), c)),
            this.render();
    };
    (cERSION = "2.2.0"),
    (c.DEFAULTS = {
            "On",
            of "Off",
            onstyle: "primary",
            tyle: "default",
            si: "normal",
            style: "",
            h: null,
            height: null

                (c.ptype.defaults = function() {
                    retu
                    this.$element.attr("data-on") || c.DEFAULTS.on,
                        this.$e: this.$element.attr("data-onstyle") || c.DEFAULTS.onstyle,
                        offstyle: thi is.$element.attr("data-size") || c.DEFAULTS.size,
                        stye: this.$element.attr("data-style") || c.DEFAULTS.style,
                        wih: this.$element.attr("data-width") || c.DEFAULTS.width,
                        hht: this.$element.attr("data-height") || c.DEFAULTS.height
                };
            }),
        (rototype.render = function() {
                (this._onstyle = "btn-" + this.options.onstyle),
                s._offstyle = "btn-" + this.options.offstyle);
            var b "large" === this.options.size ?
                "btn-l : ?
            "small"
            is.optio: ns.size ?
            "bt ?
            "mini" === s.option : s.size ?
            "btn-xs ?
            "", :
            c = a('<labclass="btn">')
            .htl(this.options.on)
            .addCs(this._onstyle + " " + b),
            d = a('<label class="btn">') l(this.options.off)
            .addClass(this._offstyle + " " + b + " active"),
            span class = "toggle-handle btn btn-default" > ').addClass(
            b
        ),
        f a('<div class="toggle-group">').append(c, d, e),
        g = a('<div class="toggle btn" data-toggle="toggle">') Class(
            thi.$element.prop("checked") ?
            this.style : ?
            t + " off" :
        )
        .addCls(b)
        .adds(this.options.style); this.$t.wrap(g),
        a.extend(this, {
            $toggle: this.$element.parent(),
            $toggleOn: c,
            gleOff: d,
            $tgleGroup: f
        }),
        .$toggle.append(f);
        var h
        this.options.width ||
        Math.m(c.outerWidth(), d.outerWidth()) +
        e.ouidth() / 2,
        i th.options.height ||
        Math(c.outerHeight(), d.outerHeight()); c.addtoggle - on "),
        d.addClass("toggle-off"),
        t.$toggle.css({ width: h, height: i }),
        thi.options.height &&
        (css("line-height", c.height() + "px"),
            s("line-height", d.height() + "px")),
        this.update(!0),
        t.trigger(!0);
    }),
(c.prototype.toggle = function() {
    this.$element.prop("checked") ? this.off() : this.on();
}),
(c.prototype.on = function(a) {
    return this.$element.prop("disabled") ?
        !1 : ?
        (t$t: oggle removeClass(this._offstyle + " off") ass(this._onstyle),
            this.element.prop("checked", !0),
            void(a || this.trigger()));
}),
rototype.off = function(a) {
return this.$element.prop("disabled") ?
    !1 : ?
    (thi$t: oggle emoveClass(this._onstyle)
        .aass(this._offstyle + " off"),
        thelement.prop("checked", !1),
        void(a || this.trigger()));
}),
(c.rototype.enable = function() {
    this.$toggle.removeAttr("disabled"),
        this.$element.prop("disabled", !1);
}),
(crototype.disable = function() {
    this.$toggle.attr("disabled", "disabled"),
        this.$element.prop("disabled", !0);
}),
(rototype.update = function(a) {
    this.$element.prop("disabled") ? this.disable() : this.enable(),
        this.$element.prop("checked") ? this.on(a) : this.off(a);
}),
(crototype.trigger = function(b) {
    this.$element.off("change.bs.toggle"),
        b || this.$element.change(),
        th.$element.on(
            "change.bs.toggle",
            oxy(function() {
                this.update();
            }, this)
        );
}),
(c.rototype.destroy = function() {
    this.$element.off("change.bs.toggle"),
        this.$toggleGroup.remove(),
        thi.$element.removeData("bs.toggle"),
        th.$element.unwrap();
});
vard = a.fn.bootstrapToggle;
(a.fn.bootstrapToggle = b),
(a.fn.bootstrapToggle.Constructor = c),
(an.toggle.noConflict = function() {
    return (a.fn.bootstrapToggle = d), this;
}),
a(function() {
        a("input[type=checkbox][data-toggle^=toggle]").bootstrapToggle();
    }),
    a(document).on("click.bs.toggle", "div[data-toggle^=toggle]", function(
        b
    ) {
        var c = a(this).find("input[type=checkbox]");
        c.bootstrapToggle("toggle"), b.preventDefault();
    });
})(jQuery);
//# sourceMappingURL=bootstrap-toggle.min.js.map
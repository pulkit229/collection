/*!
 * SlickNav Responsive Mobile Menu v1.0.10
 * (c) 2016 Josh Cope
 * licensed under MIT
 */
! function(e, t, n) {
    function a(t, n) {
        this.element = t, this.settings = e.extend({}, i, n), this.settings.duplicate || n.hasOwnProperty("removeIds") || (this.settings.removeIds = !1), this._defaults = i, this._name = s, this.init()
    }
    var i = {
            label: "",
            duplicate: !0,
            duration: 200,
            easingOpen: "swing",
            easingClose: "swing",
            closedSymbol: "&#9658;",
            openedSymbol: "&#9660;",
            prependTo: "body",
            appendTo: "",
            parentTag: "a",
            closeOnClick: !1,
            allowParentLinks: !1,
            nestedParentLinks: !0,
            showChildren: !1,
            removeIds: !0,
            removeClasses: !1,
            removeStyles: !1,
            brand: "",
            animations: "jquery",
            init: function() {},
            beforeOpen: function() {},
            beforeClose: function() {},
            afterOpen: function() {},
            afterClose: function() {}
        },
        s = "slicknav",
        o = "slicknav",
        l = 40,
        r = 27,
        c = 37,
        p = 39,
        d = 32,
        u = 38;
    a.prototype.init = function() {
        var n, a, i = this,
            s = e(this.element),
            m = this.settings;
        if (m.duplicate ? i.mobileNav = s.clone() : i.mobileNav = s, m.removeIds && (i.mobileNav.removeAttr("id"), i.mobileNav.find("*").each(function(t, n) {
                e(n).removeAttr("id")
            })), m.removeClasses && (i.mobileNav.removeAttr("class"), i.mobileNav.find("*").each(function(t, n) {
                e(n).removeAttr("class")
            })), m.removeStyles && (i.mobileNav.removeAttr("style"), i.mobileNav.find("*").each(function(t, n) {
                e(n).removeAttr("style")
            })), n = o + "_icon", "" === m.label && (n += " " + o + "_no-text"), "a" == m.parentTag && (m.parentTag = 'a href="#"'), i.mobileNav.attr("class", o + "_nav"), a = e('<div class="' + o + '_menu"></div>'), "" !== m.brand) {
            var h = e('<div class="' + o + '_brand">' + m.brand + "</div>");
            e(a).append(h)
        }
        i.btn = e(["<" + m.parentTag + ' aria-haspopup="true" role="button" tabindex="0" class="' + o + "_btn " + o + '_collapsed">', '<span class="' + o + '_menutxt">' + m.label + "</span>", '<span class="' + n + '">', '<span class="' + o + '_icon-bar"></span>', '<span class="' + o + '_icon-bar"></span>', '<span class="' + o + '_icon-bar"></span>', "</span>", "</" + m.parentTag + ">"].join("")), e(a).append(i.btn), "" !== m.appendTo ? e(m.appendTo).append(a) : e(m.prependTo).prepend(a), a.append(i.mobileNav);
        var v = i.mobileNav.find("li");
        e(v).each(function() {
            var t = e(this),
                n = {};
            if (n.children = t.children("ul").attr("role", "menu"), t.data("menu", n), n.children.length > 0) {
                var a = t.contents(),
                    s = !1,
                    l = [];
                e(a).each(function() {
                    return !e(this).is("ul") && (l.push(this), void(e(this).is("a") && (s = !0)))
                });
                var r = e("<" + m.parentTag + ' role="menuitem" aria-haspopup="true" tabindex="-1" class="' + o + '_item"/>');
                if (m.allowParentLinks && !m.nestedParentLinks && s) e(l).wrapAll('<span class="' + o + "_parent-link " + o + '_row"/>').parent();
                else e(l).wrapAll(r).parent().addClass(o + "_row");
                m.showChildren ? t.addClass(o + "_open") : t.addClass(o + "_collapsed"), t.addClass(o + "_parent");
                var c = e('<span class="' + o + '_arrow">' + (m.showChildren ? m.openedSymbol : m.closedSymbol) + "</span>");
                m.allowParentLinks && !m.nestedParentLinks && s && (c = c.wrap(r).parent()), e(l).last().after(c)
            } else 0 === t.children().length && t.addClass(o + "_txtnode");
            t.children("a").attr("role", "menuitem").click(function(t) {
                m.closeOnClick && !e(t.target).parent().closest("li").hasClass(o + "_parent") && e(i.btn).click()
            }), m.closeOnClick && m.allowParentLinks && (t.children("a").children("a").click(function(t) {
                e(i.btn).click()
            }), t.find("." + o + "_parent-link a:not(." + o + "_item)").click(function(t) {
                e(i.btn).click()
            }))
        }), e(v).each(function() {
            var t = e(this).data("menu");
            m.showChildren || i._visibilityToggle(t.children, null, !1, null, !0)
        }), i._visibilityToggle(i.mobileNav, null, !1, "init", !0), i.mobileNav.attr("role", "menu"), e(t).mousedown(function() {
            i._outlines(!1)
        }), e(t).keyup(function() {
            i._outlines(!0)
        }), e(i.btn).click(function(e) {
            e.preventDefault(), i._menuToggle()
        }), i.mobileNav.on("click", "." + o + "_item", function(t) {
            t.preventDefault(), i._itemClick(e(this))
        }), e(i.btn).keydown(function(t) {
            var n = t || event;
            switch (n.keyCode) {
                case d:
                case l:
                    t.preventDefault(), n.keyCode === l && e(i.btn).hasClass(o + "_open") || i._menuToggle(), e(i.btn).next().find('[role="menuitem"]').first().focus()
            }
        }), i.mobileNav.on("keydown", "." + o + "_item", function(t) {
            switch ((t || event).keyCode) {
                case p:
                    t.preventDefault(), e(t.target).parent().hasClass(o + "_collapsed") && i._itemClick(e(t.target)), e(t.target).next().find('[role="menuitem"]').first().focus()
            }
        }), i.mobileNav.on("keydown", '[role="menuitem"]', function(t) {
            switch ((t || event).keyCode) {
                case l:
                    t.preventDefault();
                    var n = (s = (a = e(t.target).parent().parent().children().children('[role="menuitem"]:visible')).index(t.target)) + 1;
                    a.length <= n && (n = 0), a.eq(n).focus();
                    break;
                case u:
                    t.preventDefault();
                    var a, s = (a = e(t.target).parent().parent().children().children('[role="menuitem"]:visible')).index(t.target);
                    a.eq(s - 1).focus();
                    break;
                case c:
                    if (t.preventDefault(), e(t.target).parent().parent().parent().hasClass(o + "_open")) {
                        var p = e(t.target).parent().parent().prev();
                        p.focus(), i._itemClick(p)
                    } else e(t.target).parent().parent().hasClass(o + "_nav") && (i._menuToggle(), e(i.btn).focus());
                    break;
                case r:
                    t.preventDefault(), i._menuToggle(), e(i.btn).focus()
            }
        }), m.allowParentLinks && m.nestedParentLinks && e("." + o + "_item a").click(function(e) {
            e.stopImmediatePropagation()
        })
    }, a.prototype._menuToggle = function(e) {
        var t = this,
            n = t.btn,
            a = t.mobileNav;
        n.hasClass(o + "_collapsed") ? (n.removeClass(o + "_collapsed"), n.addClass(o + "_open")) : (n.removeClass(o + "_open"), n.addClass(o + "_collapsed")), n.addClass(o + "_animating"), t._visibilityToggle(a, n.parent(), !0, n)
    }, a.prototype._itemClick = function(e) {
        var t = this,
            n = t.settings,
            a = e.data("menu");
        a || ((a = {}).arrow = e.children("." + o + "_arrow"), a.ul = e.next("ul"), a.parent = e.parent(), a.parent.hasClass(o + "_parent-link") && (a.parent = e.parent().parent(), a.ul = e.parent().next("ul")), e.data("menu", a)), a.parent.hasClass(o + "_collapsed") ? (a.arrow.html(n.openedSymbol), a.parent.removeClass(o + "_collapsed"), a.parent.addClass(o + "_open"), a.parent.addClass(o + "_animating"), t._visibilityToggle(a.ul, a.parent, !0, e)) : (a.arrow.html(n.closedSymbol), a.parent.addClass(o + "_collapsed"), a.parent.removeClass(o + "_open"), a.parent.addClass(o + "_animating"), t._visibilityToggle(a.ul, a.parent, !0, e))
    }, a.prototype._visibilityToggle = function(t, n, a, i, s) {
        function l(t, n) {
            e(t).removeClass(o + "_animating"), e(n).removeClass(o + "_animating"), s || p.afterOpen(t)
        }

        function r(n, a) {
            t.attr("aria-hidden", "true"), d.attr("tabindex", "-1"), c._setVisAttr(t, !0), t.hide(), e(n).removeClass(o + "_animating"), e(a).removeClass(o + "_animating"), s ? "init" == n && p.init() : p.afterClose(n)
        }
        var c = this,
            p = c.settings,
            d = c._getActionItems(t),
            u = 0;
        a && (u = p.duration), t.hasClass(o + "_hidden") ? (t.removeClass(o + "_hidden"), s || p.beforeOpen(i), "jquery" === p.animations ? t.stop(!0, !0).slideDown(u, p.easingOpen, function() {
            l(i, n)
        }) : "velocity" === p.animations && t.velocity("finish").velocity("slideDown", {
            duration: u,
            easing: p.easingOpen,
            complete: function() {
                l(i, n)
            }
        }), t.attr("aria-hidden", "false"), d.attr("tabindex", "0"), c._setVisAttr(t, !1)) : (t.addClass(o + "_hidden"), s || p.beforeClose(i), "jquery" === p.animations ? t.stop(!0, !0).slideUp(u, this.settings.easingClose, function() {
            r(i, n)
        }) : "velocity" === p.animations && t.velocity("finish").velocity("slideUp", {
            duration: u,
            easing: p.easingClose,
            complete: function() {
                r(i, n)
            }
        }))
    }, a.prototype._setVisAttr = function(t, n) {
        var a = this,
            i = t.children("li").children("ul").not("." + o + "_hidden");
        n ? i.each(function() {
            var t = e(this);
            t.attr("aria-hidden", "true"), a._getActionItems(t).attr("tabindex", "-1"), a._setVisAttr(t, n)
        }) : i.each(function() {
            var t = e(this);
            t.attr("aria-hidden", "false"), a._getActionItems(t).attr("tabindex", "0"), a._setVisAttr(t, n)
        })
    }, a.prototype._getActionItems = function(e) {
        var t = e.data("menu");
        if (!t) {
            t = {};
            var n = e.children("li"),
                a = n.find("a");
            t.links = a.add(n.find("." + o + "_item")), e.data("menu", t)
        }
        return t.links
    }, a.prototype._outlines = function(t) {
        t ? e("." + o + "_item, ." + o + "_btn").css("outline", "") : e("." + o + "_item, ." + o + "_btn").css("outline", "none")
    }, a.prototype.toggle = function() {
        this._menuToggle()
    }, a.prototype.open = function() {
        this.btn.hasClass(o + "_collapsed") && this._menuToggle()
    }, a.prototype.close = function() {
        this.btn.hasClass(o + "_open") && this._menuToggle()
    }, e.fn[s] = function(t) {
        var n, i = arguments;
        return void 0 === t || "object" == typeof t ? this.each(function() {
            e.data(this, "plugin_" + s) || e.data(this, "plugin_" + s, new a(this, t))
        }) : "string" == typeof t && "_" !== t[0] && "init" !== t ? (this.each(function() {
            var o = e.data(this, "plugin_" + s);
            o instanceof a && "function" == typeof o[t] && (n = o[t].apply(o, Array.prototype.slice.call(i, 1)))
        }), void 0 !== n ? n : this) : void 0
    }
}(jQuery, document, window);
var brightcove, brightcoveJS, checkLoad;
(function(n, t) {
    function at(n, t) {
        var r = n.split("."),
            i = l,
            u;
        for ((r[0] in i) || !i.execScript || i.execScript("var " + r[0]); r.length && (u = r.shift());) r.length || void 0 === t ? i = i[u] ? i[u] : i[u] = {} : i[u] = t
    }

    function li(n) {
        return n.call.apply(n.bind, arguments)
    }

    function ai(n, t) {
        if (!n) throw Error();
        if (2 < arguments.length) {
            var i = Array.prototype.slice.call(arguments, 2);
            return function() {
                var r = Array.prototype.slice.call(arguments);
                return Array.prototype.unshift.apply(r, i), n.apply(t, r)
            }
        }
        return function() {
            return n.apply(t, arguments)
        }
    }

    function c() {
        return c = Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? li : ai, c.apply(null, arguments)
    }

    function yt(n, t) {
        this.K = n;
        this.w = t || n;
        this.D = this.w.document
    }

    function pt(n, i, r) {
        n = n.D.getElementsByTagName(i)[0];
        n || (n = t.documentElement);
        n && n.lastChild && n.insertBefore(r, n.lastChild)
    }

    function vi(n, t) {
        function i() {
            n.D.body ? t() : setTimeout(i, 0)
        }
        i()
    }

    function v(n, t, i) {
        var f, r, e, u;
        for (t = t || [], i = i || [], f = n.className.split(/\s+/), r = 0; r < t.length; r += 1) {
            for (e = !1, u = 0; u < f.length; u += 1)
                if (t[r] === f[u]) {
                    e = !0;
                    break
                }
            e || f.push(t[r])
        }
        for (t = [], r = 0; r < f.length; r += 1) {
            for (e = !1, u = 0; u < i.length; u += 1)
                if (f[r] === i[u]) {
                    e = !0;
                    break
                }
            e || t.push(f[r])
        }
        n.className = t.join(" ").replace(/\s+/g, " ").replace(/^\s+|\s+$/, "")
    }

    function wt(n, t) {
        for (var r = n.className.split(/\s+/), i = 0, u = r.length; i < u; i++)
            if (r[i] == t) return !0;
        return !1
    }

    function w(n) {
        var t = n.w.location.protocol;
        return "about:" == t && (t = n.K.location.protocol), "https:" == t ? "https:" : "http:"
    }

    function bt(n, t) {
        var r = n.createElement("link", {
                rel: "stylesheet",
                href: t
            }),
            i = !1;
        r.onload = function() {
            i || (i = !0)
        };
        r.onerror = function() {
            i || (i = !0)
        };
        pt(n, "head", r)
    }

    function rt(t, i, r, u) {
        var o = t.D.getElementsByTagName("head")[0],
            f, e;
        return o ? (f = t.createElement("script", {
            src: i
        }), e = !1, n.setTimeout(function() {
            e || (e = !0, r && r(Error("Script load timeout")))
        }, u || 5e3), f) : null
    }

    function u(n, t, i, r) {
        this.R = n;
        this.Z = t;
        this.Ba = i;
        this.ra = r
    }

    function p(n, t, i, r) {
        this.c = null != n ? n : null;
        this.g = null != t ? t : null;
        this.B = null != i ? i : null;
        this.e = null != r ? r : null
    }

    function f(n) {
        n = kt.exec(n);
        var t = null,
            i = null,
            r = null,
            u = null;
        return n && (null !== n[1] && n[1] && (t = parseInt(n[1], 10)), null !== n[2] && n[2] && (i = parseInt(n[2], 10)), null !== n[3] && n[3] && (r = parseInt(n[3], 10)), null !== n[4] && n[4] && (u = /^[0-9]+$/.test(n[4]) ? parseInt(n[4], 10) : n[4])), new p(t, i, r, u)
    }

    function i(n, t, i, r, u, f, e, o) {
        this.P = n;
        this.ja = i;
        this.ya = u;
        this.ia = e;
        this.m = o
    }

    function ut(n, t) {
        this.a = n;
        this.k = t
    }

    function a(n) {
        var t = r(n.a, /(iPod|iPad|iPhone|Android|Windows Phone|BB\d{2}|BlackBerry)/, 1);
        return "" != t ? (/BB\d{2}/.test(t) && (t = "BlackBerry"), t) : (n = r(n.a, /(Linux|Mac_PowerPC|Macintosh|Windows|CrOS|PlayStation|CrKey)/, 1), "" != n ? ("Mac_PowerPC" == n ? n = "Macintosh" : "PlayStation" == n && (n = "Linux"), n) : "Unknown")
    }

    function b(n) {
        var t = r(n.a, /(OS X|Windows NT|Android) ([^;)]+)/, 2),
            i;
        if (t || (t = r(n.a, /Windows Phone( OS)? ([^;)]+)/, 2)) || (t = r(n.a, /(iPhone )?OS ([\d_]+)/, 2))) return t;
        if (t = r(n.a, /(?:Linux|CrOS|CrKey) ([^;)]+)/, 1))
            for (t = t.split(/\s/), i = 0; i < t.length; i += 1)
                if (/^[\d\._]+$/.test(t[i])) return t[i];
        return (n = r(n.a, /(BB\d{2}|BlackBerry).*?Version\/([^\s]*)/, 2)) ? n : "Unknown"
    }

    function gt(n) {
        var o = a(n),
            h = f(b(n)),
            s = f(r(n.a, /AppleWeb(?:K|k)it\/([\d\.\+]+)/, 1)),
            t = "Unknown",
            e = new p,
            e = "Unknown",
            c = !1;
        return /OPR\/[\d.]+/.test(n.a) ? t = "Opera" : -1 != n.a.indexOf("Chrome") || -1 != n.a.indexOf("CrMo") || -1 != n.a.indexOf("CriOS") ? t = "Chrome" : /Silk\/\d/.test(n.a) ? t = "Silk" : "BlackBerry" == o || "Android" == o ? t = "BuiltinBrowser" : -1 != n.a.indexOf("PhantomJS") ? t = "PhantomJS" : -1 != n.a.indexOf("Safari") ? t = "Safari" : -1 != n.a.indexOf("AdobeAIR") ? t = "AdobeAIR" : -1 != n.a.indexOf("PlayStation") && (t = "BuiltinBrowser"), "BuiltinBrowser" == t ? e = "Unknown" : "Silk" == t ? e = r(n.a, /Silk\/([\d\._]+)/, 1) : "Chrome" == t ? e = r(n.a, /(Chrome|CrMo|CriOS)\/([\d\.]+)/, 2) : -1 != n.a.indexOf("Version/index.html") ? e = r(n.a, /Version\/([\d\.\w]+)/, 1) : "AdobeAIR" == t ? e = r(n.a, /AdobeAIR\/([\d\.]+)/, 1) : "Opera" == t ? e = r(n.a, /OPR\/([\d.]+)/, 1) : "PhantomJS" == t && (e = r(n.a, /PhantomJS\/([\d.]+)/, 1)), e = f(e), c = "AdobeAIR" == t ? 2 < e.c || 2 == e.c && 5 <= e.g : "BlackBerry" == o ? 10 <= h.c : "Android" == o ? 2 < h.c || 2 == h.c && 1 < h.g : 526 <= s.c || 525 <= s.c && 13 <= s.g, new i(t, 0, "AppleWebKit", 0, o, 0, k(n.k), new u(c, 536 > s.c || 536 == s.c && 11 > s.g, "iPhone" == o || "iPad" == o || "iPod" == o || "Macintosh" == o, !!n.k.fonts))
    }

    function r(n, t, i) {
        return (n = n.match(t)) && n[i] ? n[i] : ""
    }

    function k(n) {
        if (n.documentMode) return n.documentMode
    }

    function ni(n) {
        this.xa = n || "-"
    }

    function o(n, t) {
        this.P = n;
        this.$ = 4;
        this.Q = "n";
        var i = (t || "n4").match(/^([nio])([1-9])$/i);
        i && (this.Q = i[1], this.$ = parseInt(i[2], 10))
    }

    function e(n) {
        return n.Q + n.$
    }

    function yi(n) {
        var i = 4,
            r = "n",
            t = null;
        return n && ((t = n.match(/(normal|oblique|italic)/i)) && t[1] && (r = t[1].substr(0, 1).toLowerCase()), (t = n.match(/([1-9]00|normal|bold)/i)) && t[1] && (/bold/i.test(t[1]) ? i = 7 : /[1-9]00/.test(t[1]) && (i = parseInt(t[1].substr(0, 1), 10)))), r + i
    }

    function pi(n, t, i, r, u) {
        this.d = n;
        this.p = t;
        this.T = i;
        this.j = "wf";
        this.h = new ni("-");
        this.ha = !1 !== r;
        this.C = !1 !== u
    }

    function ft(n) {
        if (n.C) {
            var i = wt(n.p, n.h.e(n.j, "active")),
                t = [],
                r = [n.h.e(n.j, "loading")];
            i || t.push(n.h.e(n.j, "inactive"));
            v(n.p, t, r)
        }
        y(n, "inactive")
    }

    function y(n, t, i) {
        n.ha && n.T[t] && (i ? n.T[t](i.getName(), e(i)) : n.T[t]())
    }

    function wi() {
        this.A = {}
    }

    function d(n, t) {
        this.d = n;
        this.H = t;
        this.t = this.d.createElement("span", {
            "aria-hidden": "true"
        }, this.H)
    }

    function et(n, t) {
        var e = n.t,
            r, i, u, f;
        for (r = [], i = t.P.split(/,\s*/), u = 0; u < i.length; u++) f = i[u].replace(/['"]/g, ""), -1 == f.indexOf(" ") ? r.push(f) : r.push("'" + f + "'");
        r = r.join(",");
        i = "normal";
        "o" === t.Q ? i = "oblique" : "i" === t.Q && (i = "italic");
        e.style.cssText = "display:block;position:absolute;top:0px;left:0px;visibility:hidden;font-size:300px;width:auto;height:auto;line-height:normal;margin:0;padding:0;font-variant:normal;white-space:nowrap;font-family:" + r + ";" + ("font-style:" + i + ";font-weight:" + (t.$ + "00") + ";")
    }

    function ot(n) {
        pt(n.d, "body", n.t)
    }

    function ti(n, t, i, r, u, f, h, c) {
        this.aa = n;
        this.va = t;
        this.d = i;
        this.s = r;
        this.H = c || "BESbswy";
        this.m = u;
        this.J = {};
        this.Y = f || 3e3;
        this.da = h || null;
        this.G = this.F = null;
        n = new d(this.d, this.H);
        ot(n);
        for (var l in s) s.hasOwnProperty(l) && (et(n, new o(s[l], e(this.s))), this.J[s[l]] = n.t.offsetWidth);
        n.remove()
    }

    function ii(n, t, i) {
        for (var r in s)
            if (s.hasOwnProperty(r) && t === n.J[s[r]] && i === n.J[s[r]]) return !0;
        return !1
    }

    function ri(n) {
        var t = n.F.t.offsetWidth,
            i = n.G.t.offsetWidth;
        t === n.J.serif && i === n.J["sans-serif"] || n.m.Z && ii(n, t, i) ? vt() - n.za >= n.Y ? n.m.Z && ii(n, t, i) && (null === n.da || n.da.hasOwnProperty(n.s.getName())) ? st(n, n.aa) : st(n, n.va) : bi(n) : st(n, n.aa)
    }

    function bi(n) {
        setTimeout(c(function() {
            ri(this)
        }, n), 25)
    }

    function st(n, t) {
        n.F.remove();
        n.G.remove();
        t(n.s)
    }

    function ht(n, t, i, r) {
        this.d = t;
        this.u = i;
        this.U = 0;
        this.fa = this.ca = !1;
        this.Y = r;
        this.m = n.m
    }

    function ui(n, t, i, r, u) {
        if (i = i || {}, 0 === t.length && u) ft(n.u);
        else
            for (n.U += t.length, u && (n.ca = u), u = 0; u < t.length; u++) {
                var o = t[u],
                    h = i[o.getName()],
                    f = n.u,
                    s = o;
                f.C && v(f.p, [f.h.e(f.j, s.getName(), e(s).toString(), "loading")]);
                y(f, "fontloading", s);
                f = null;
                f = new ti(c(n.ka, n), c(n.la, n), n.d, o, n.m, n.Y, r, h);
                f.start()
            }
    }

    function fi(n) {
        0 == --n.U && n.ca && (n.fa ? (n = n.u, n.C && v(n.p, [n.h.e(n.j, "active")], [n.h.e(n.j, "loading"), n.h.e(n.j, "inactive")]), y(n, "active")) : ft(n.u))
    }

    function ct(n) {
        this.K = n;
        this.v = new wi;
        this.Aa = new ut(n.navigator.userAgent, n.document);
        this.a = this.Aa.parse();
        this.V = this.W = 0;
        this.M = this.N = !0
    }

    function ki(n, t, i, r, u) {
        var f = 0 == --n.W;
        (n.M || n.N) && setTimeout(function() {
            ui(t, i, r || null, u || null, f)
        }, 0)
    }

    function ei(n, t, i) {
        this.S = n ? n : t + oi;
        this.q = [];
        this.X = [];
        this.ga = i || ""
    }

    function si(n) {
        this.q = n;
        this.ea = [];
        this.O = {}
    }

    function g(n, i) {
        this.a = new ut(navigator.userAgent, t).parse();
        this.d = n;
        this.f = i
    }

    function nt(n, t) {
        this.d = n;
        this.f = t;
        this.o = []
    }

    function tt(n, t) {
        this.d = n;
        this.f = t;
        this.o = []
    }

    function it(n, t) {
        this.d = n;
        this.f = t;
        this.o = []
    }

    function lt(n, t) {
        this.d = n;
        this.f = t
    }
    var l = this,
        vt = Date.now || function() {
            return +new Date
        },
        kt, dt, s, oi, ci, h;
    yt.prototype.createElement = function(n, t, i) {
        if (n = this.D.createElement(n), t)
            for (var r in t) t.hasOwnProperty(r) && ("style" == r ? n.style.cssText = t[r] : n.setAttribute(r, t[r]));
        return i && n.appendChild(this.D.createTextNode(i)), n
    };
    at("webfont.BrowserInfo", u);
    u.prototype.sa = function() {
        return this.R
    };
    u.prototype.hasWebFontSupport = u.prototype.sa;
    u.prototype.ta = function() {
        return this.Z
    };
    u.prototype.hasWebKitFallbackBug = u.prototype.ta;
    u.prototype.ua = function() {
        return this.Ba
    };
    u.prototype.hasWebKitMetricsBug = u.prototype.ua;
    u.prototype.qa = function() {
        return this.ra
    };
    u.prototype.hasNativeFontLoading = u.prototype.qa;
    kt = /^([0-9]+)(?:[\._-]([0-9]+))?(?:[\._-]([0-9]+))?(?:[\._+-]?(.*))?$/;
    p.prototype.compare = function(n) {
        return this.c > n.c || this.c === n.c && this.g > n.g || this.c === n.c && this.g === n.g && this.B > n.B ? 1 : this.c < n.c || this.c === n.c && this.g < n.g || this.c === n.c && this.g === n.g && this.B < n.B ? -1 : 0
    };
    p.prototype.toString = function() {
        return [this.c, this.g || "", this.B || "", this.e || ""].join("")
    };
    at("webfont.UserAgent", i);
    i.prototype.getName = function() {
        return this.P
    };
    i.prototype.getName = i.prototype.getName;
    i.prototype.oa = function() {
        return this.ja
    };
    i.prototype.getEngine = i.prototype.oa;
    i.prototype.pa = function() {
        return this.ya
    };
    i.prototype.getPlatform = i.prototype.pa;
    i.prototype.na = function() {
        return this.ia
    };
    i.prototype.getDocumentMode = i.prototype.na;
    i.prototype.ma = function() {
        return this.m
    };
    i.prototype.getBrowserInfo = i.prototype.ma;
    dt = new i("Unknown", 0, "Unknown", 0, "Unknown", 0, void 0, new u(!1, !1, !1, !1));
    ut.prototype.parse = function() {
        var n;
        if (-1 != this.a.indexOf("MSIE") || -1 != this.a.indexOf("Trident/index.html")) {
            n = a(this);
            var e = f(b(this)),
                t = null,
                o = null,
                s = r(this.a, /Trident\/([\d\w\.]+)/, 1),
                h = k(this.k),
                t = -1 != this.a.indexOf("MSIE") ? f(r(this.a, /MSIE ([\d\w\.]+)/, 1)) : f(r(this.a, /rv:([\d\w\.]+)/, 1));
            "" != s ? (o = "Trident", f(s)) : o = "Unknown";
            n = new i("MSIE", 0, o, 0, n, 0, h, new u("Windows" == n && 6 <= t.c || "Windows Phone" == n && 8 <= e.c, !1, !1, !!this.k.fonts))
        } else if (-1 != this.a.indexOf("Opera")) n: if (n = "Unknown", t = f(r(this.a, /Presto\/([\d\w\.]+)/, 1)), f(b(this)), e = k(this.k), null !== t.c ? n = "Presto" : (-1 != this.a.indexOf("Gecko") && (n = "Gecko"), f(r(this.a, /rv:([^\)]+)/, 1))), -1 != this.a.indexOf("Opera%20Mini/index.html")) t = f(r(this.a, /Opera Mini\/([\d\.]+)/, 1)), n = new i("OperaMini", 0, n, 0, a(this), 0, e, new u(!1, !1, !1, !!this.k.fonts));
            else {
                if (-1 != this.a.indexOf("Version/index.html") && (t = f(r(this.a, /Version\/([\d\.]+)/, 1)), null !== t.c)) {
                    n = new i("Opera", 0, n, 0, a(this), 0, e, new u(10 <= t.c, !1, !1, !!this.k.fonts));
                    break n
                }
                t = f(r(this.a, /Opera[\/ ]([\d\.]+)/, 1));
                n = null !== t.c ? new i("Opera", 0, n, 0, a(this), 0, e, new u(10 <= t.c, !1, !1, !!this.k.fonts)) : new i("Opera", 0, n, 0, a(this), 0, e, new u(!1, !1, !1, !!this.k.fonts))
            } else /OPR\/[\d.]+/.test(this.a) ? n = gt(this) : /AppleWeb(K|k)it/.test(this.a) ? n = gt(this) : -1 != this.a.indexOf("Gecko") ? (n = "Unknown", e = new p, f(b(this)), e = !1, -1 != this.a.indexOf("Firefox") ? (n = "Firefox", e = f(r(this.a, /Firefox\/([\d\w\.]+)/, 1)), e = 3 <= e.c && 5 <= e.g) : -1 != this.a.indexOf("Mozilla") && (n = "Mozilla"), t = f(r(this.a, /rv:([^\)]+)/, 1)), e || (e = 1 < t.c || 1 == t.c && 9 < t.g || 1 == t.c && 9 == t.g && 2 <= t.B), n = new i(n, 0, "Gecko", 0, a(this), 0, k(this.k), new u(e, !1, !1, !!this.k.fonts))) : n = dt;
        return n
    };
    ni.prototype.e = function() {
        for (var t = [], n = 0; n < arguments.length; n++) t.push(arguments[n].replace(/[\W_]+/g, "").toLowerCase());
        return t.join(this.xa)
    };
    o.prototype.getName = function() {
        return this.P
    };
    d.prototype.remove = function() {
        var n = this.t;
        n.parentNode && n.parentNode.removeChild(n)
    };
    s = {
        Ea: "serif",
        Da: "sans-serif",
        Ca: "monospace"
    };
    ti.prototype.start = function() {
        this.F = new d(this.d, this.H);
        ot(this.F);
        this.G = new d(this.d, this.H);
        ot(this.G);
        this.za = vt();
        et(this.F, new o(this.s.getName() + ",serif", e(this.s)));
        et(this.G, new o(this.s.getName() + ",sans-serif", e(this.s)));
        ri(this)
    };
    ht.prototype.ka = function(n) {
        var t = this.u;
        t.C && v(t.p, [t.h.e(t.j, n.getName(), e(n).toString(), "active")], [t.h.e(t.j, n.getName(), e(n).toString(), "loading"), t.h.e(t.j, n.getName(), e(n).toString(), "inactive")]);
        y(t, "fontactive", n);
        this.fa = !0;
        fi(this)
    };
    ht.prototype.la = function(n) {
        var t = this.u;
        if (t.C) {
            var r = wt(t.p, t.h.e(t.j, n.getName(), e(n).toString(), "active")),
                i = [],
                u = [t.h.e(t.j, n.getName(), e(n).toString(), "loading")];
            r || i.push(t.h.e(t.j, n.getName(), e(n).toString(), "inactive"));
            v(t.p, i, u)
        }
        y(t, "fontinactive", n);
        fi(this)
    };
    ct.prototype.load = function(n) {
        var t = n.context || this.K,
            e;
        this.d = new yt(this.K, t);
        this.N = !1 !== n.events;
        this.M = !1 !== n.classes;
        var t = new pi(this.d, t.document.documentElement, n, this.N, this.M),
            r = [],
            f = n.timeout;
        t.C && v(t.p, [t.h.e(t.j, "loading")]);
        y(t, "loading");
        var r = this.v,
            u = this.d,
            o = [];
        for (var i in n) n.hasOwnProperty(i) && (e = r.A[i], e && o.push(e(n[i], u)));
        for (r = o, this.V = this.W = r.length, n = new ht(this.a, this.d, t, f), i = 0, f = r.length; i < f; i++) u = r[i], u.L(this.a, c(this.wa, this, u, t, n))
    };
    ct.prototype.wa = function(n, t, i, r) {
        var u = this;
        r ? n.load(function(n, t, r) {
            ki(u, i, n, t, r)
        }) : (n = 0 == --this.W, this.V--, n && 0 == this.V ? ft(t) : (this.M || this.N) && ui(i, [], {}, null, n))
    };
    oi = "//fonts.googleapis.com/css";
    ei.prototype.e = function() {
        if (0 == this.q.length) throw Error("No fonts to load!");
        if (-1 != this.S.indexOf("kit=")) return this.S;
        for (var n = this.q.length, i = [], t = 0; t < n; t++) i.push(this.q[t].replace(/ /g, "+"));
        return n = this.S + "?family=" + i.join("%7C"), 0 < this.X.length && (n += "&subset=" + this.X.join(",")), 0 < this.ga.length && (n += "&text=" + encodeURIComponent(this.ga)), n
    };
    var hi = {
            latin: "BESbswy",
            cyrillic: "&#1081;&#1103;&#1046;",
            greek: "&#945;&#946;&#931;",
            khmer: "&#x1780;&#x1781;&#x1782;",
            Hanuman: "&#x1780;&#x1781;&#x1782;"
        },
        di = {
            thin: "1",
            extralight: "2",
            "extra-light": "2",
            ultralight: "2",
            "ultra-light": "2",
            light: "3",
            regular: "4",
            book: "4",
            medium: "5",
            "semi-bold": "6",
            semibold: "6",
            "demi-bold": "6",
            demibold: "6",
            bold: "7",
            "extra-bold": "8",
            extrabold: "8",
            "ultra-bold": "8",
            ultrabold: "8",
            black: "9",
            heavy: "9",
            l: "3",
            r: "4",
            b: "7"
        },
        gi = {
            i: "i",
            italic: "i",
            n: "n",
            normal: "n"
        },
        nr = /^(thin|(?:(?:extra|ultra)-?)?light|regular|book|medium|(?:(?:semi|demi|extra|ultra)-?)?bold|black|heavy|l|r|b|[1-9]00)?(n|i|normal|italic)?$/;
    si.prototype.parse = function() {
        for (var r, f, t, c, i, l = this.q.length, e = 0; e < l; e++) {
            var n = this.q[e].split(":"),
                u = n[0].replace(/\+/g, " "),
                s = ["n4"];
            if (2 <= n.length) {
                if (f = n[1], r = [], f)
                    for (var f = f.split(","), a = f.length, h = 0; h < a; h++) t = f[h], t.match(/^[\w-]+$/) ? (t = nr.exec(t.toLowerCase()), i = void 0, null == t ? i = "" : (i = void 0, i = t[1], null == i || "" == i ? i = "4" : (c = di[i], i = c ? c : isNaN(i) ? "4" : i.substr(0, 1)), t = t[2], i = [null == t || "" == t ? "n" : gi[t], i].join("")), t = i) : t = "", t && r.push(t);
                0 < r.length && (s = r);
                3 == n.length && (n = n[2], r = [], n = n ? n.split(",") : r, 0 < n.length && (n = hi[n[0]]) && (this.O[u] = n))
            }
            for (this.O[u] || (n = hi[u]) && (this.O[u] = n), n = 0; n < s.length; n += 1) this.ea.push(new o(u, s[n]))
        }
    };
    ci = {
        Arimo: !0,
        Cousine: !0,
        Tinos: !0
    };
    g.prototype.L = function(n, t) {
        t(n.m.R)
    };
    g.prototype.load = function(n) {
        var t = this.d;
        "MSIE" == this.a.getName() && 1 != this.f.blocking ? vi(t, c(this.ba, this, n)) : this.ba(n)
    };
    g.prototype.ba = function(n) {
        for (var i, f, e = this.d, r = new ei(this.f.api, w(e), this.f.text), t = this.f.families, o = t.length, u = 0; u < o; u++) i = t[u].split(":"), 3 == i.length && r.X.push(i.pop()), f = "", 2 == i.length && "" != i[1] && (f = ":"), r.q.push(i.join(f));
        t = new si(t);
        t.parse();
        bt(e, r.e());
        n(t.ea, t.O, ci)
    };
    nt.prototype.I = function(n) {
        var t = this.d;
        return w(this.d) + (this.f.api || "http://f.fontdeck.com/s/css/js/") + (t.w.location.hostname || t.K.location.hostname) + "/" + n + ".js"
    };
    nt.prototype.L = function(n, t) {
        var i = this.f.id,
            r = this.d.w,
            u = this;
        i ? (r.__webfontfontdeckmodule__ || (r.__webfontfontdeckmodule__ = {}), r.__webfontfontdeckmodule__[i] = function(n, i) {
            for (var f, r = 0, e = i.fonts.length; r < e; ++r) f = i.fonts[r], u.o.push(new o(f.name, yi("font-weight:" + f.weight + ";font-style:" + f.style)));
            t(n)
        }, rt(this.d, this.I(i), function(n) {
            n && t(!1)
        })) : t(!1)
    };
    nt.prototype.load = function(n) {
        n(this.o)
    };
    tt.prototype.I = function(n) {
        var t = w(this.d);
        return (this.f.api || t + "//use.typekit.net") + "/" + n + ".js"
    };
    tt.prototype.L = function(n, t) {
        var r = this.f.id,
            i = this.d.w,
            u = this;
        r ? rt(this.d, this.I(r), function(n) {
            var r;
            if (n) t(!1);
            else {
                if (i.Typekit && i.Typekit.config && i.Typekit.config.fn) {
                    for (n = i.Typekit.config.fn, r = 0; r < n.length; r += 2)
                        for (var s = n[r], e = n[r + 1], f = 0; f < e.length; f++) u.o.push(new o(s, e[f]));
                    try {
                        i.Typekit.load({
                            events: !1,
                            classes: !1
                        })
                    } catch (h) {}
                }
                t(!0)
            }
        }, 2e3) : t(!1)
    };
    tt.prototype.load = function(n) {
        n(this.o)
    };
    it.prototype.L = function(n, t) {
        var i = this,
            r = i.f.projectId,
            f = i.f.version,
            u;
        r ? (u = i.d.w, rt(this.d, i.I(r, f), function(f) {
            if (f) t(!1);
            else {
                if (u["__mti_fntLst" + r] && (f = u["__mti_fntLst" + r]()))
                    for (var e = 0; e < f.length; e++) i.o.push(new o(f[e].fontfamily));
                t(n.m.R)
            }
        }).id = "__MonotypeAPIScript__" + r) : t(!1)
    };
    it.prototype.I = function(n, t) {
        var i = w(this.d),
            r = (this.f.api || "fast.fonts.net/jsapi").replace(/^.*http(s?):(\/\/)?/, "");
        return i + "//" + r + "/" + n + ".js" + (t ? "?v=" + t : "")
    };
    it.prototype.load = function(n) {
        n(this.o)
    };
    lt.prototype.load = function(n) {
        for (var i = this.f.urls || [], s = this.f.families || [], h = this.f.testStrings || {}, r, e, f, t = 0, u = i.length; t < u; t++) bt(this.d, i[t]);
        for (i = [], t = 0, u = s.length; t < u; t++)
            if (r = s[t].split(":"), r[1])
                for (e = r[1].split(","), f = 0; f < e.length; f += 1) i.push(new o(r[0], e[f]));
            else i.push(new o(r[0]));
        n(i, h)
    };
    lt.prototype.L = function(n, t) {
        return t(n.m.R)
    };
    h = new ct(l);
    h.v.A.custom = function(n, t) {
        return new lt(t, n)
    };
    h.v.A.fontdeck = function(n, t) {
        return new nt(t, n)
    };
    h.v.A.monotype = function(n, t) {
        return new it(t, n)
    };
    h.v.A.typekit = function(n, t) {
        return new tt(t, n)
    };
    h.v.A.google = function(n, t) {
        return new g(t, n)
    };
    l.WebFont || (l.WebFont = {}, l.WebFont.load = c(h.load, h), l.WebFontConfig && h.load(l.WebFontConfig))
})(this, document);
WebFont.load({
    typekit: {
        id: "uwb7pxq"
    },
    monotype: {
        projectId: "fe3ea939-7357-40d1-82a4-b8ab7d90ffa0"
    }
});
brightcove == undefined && (brightcove = {}, brightcove.getExperience = function() {
    alert("Please import APIModules_all.js in order to use the API.")
});
brightcove.experiences == undefined && (brightcove.servicesURL = "http://c.brightcove.com/services", brightcove.cdnURL = "http://admin.brightcove.com/", brightcove.secureCDNURL = "https://sadmin.brightcove.com/", brightcove.secureServicesURL = "https://secure.brightcove.com/services", brightcove.pubHost = "c.$pubcode$.$zoneprefix$$zone$", brightcove.pubSecureHost = "secure.$pubcode$.$zoneprefix$$zone$", brightcove.pubSubdomain = "ariessaucetown.local", brightcove.experiences = {}, brightcove.experienceObjects = {}, brightcove.timeouts = {}, brightcove.flashTimeoutInterval = 1e4, brightcove.htmlTimeoutInterval = 1e4, brightcove.experienceNum = 0, brightcove.majorVersion = 9, brightcove.majorRevision = 0, brightcove.minorRevision = 28, brightcove.servlet = {
    AS3: "federated_f9",
    HTML: "htmlFederated"
}, brightcove.playerType = {
    FLASH: "flash",
    HTML: "html",
    FLASH_IFRAME: "flashIFrame",
    INSTALLER: "installer",
    NO_SUPPORT: "nosupport"
}, brightcove.errorCodes = {
    UNKNOWN: 0,
    DOMAIN_RESTRICTED: 1,
    GEO_RESTRICTED: 2,
    INVALID_ID: 3,
    NO_CONTENT: 4,
    UNAVAILABLE_CONTENT: 5,
    UPGRADE_REQUIRED_FOR_VIDEO: 6,
    UPGRADE_REQUIRED_FOR_PLAYER: 7,
    SERVICE_UNAVAILABLE: 8
}, brightcove.defaultParam = {}, brightcove.defaultParam.width = "100%", brightcove.defaultParam.height = "100%", brightcove.defaultFlashParam = {}, brightcove.defaultFlashParam.allowScriptAccess = "always", brightcove.defaultFlashParam.allowFullScreen = "true", brightcove.defaultFlashParam.seamlessTabbing = !1, brightcove.defaultFlashParam.swliveconnect = !0, brightcove.defaultFlashParam.wmode = "window", brightcove.defaultFlashParam.quality = "high", brightcove.defaultFlashParam.bgcolor = "#999999", brightcove.hasActiveX = brightcove.isIE = window.ActiveXObject != undefined, brightcove.userAgent = navigator.userAgent, brightcove._queuedAPICalls = [], brightcoveJS = brightcove, brightcove.createExperiences = function(n, t) {
    var f = [],
        c, i, p = brightcove.checkFlashSupport(),
        w = brightcove.checkHtmlSupport(),
        l, o, e, r, u, s, a, h;
    for (t != null ? f.push(document.getElementById(t)) : f = brightcove.collectExperiences(), brightcove.hasActiveX && (c = document.getElementsByTagName("param")), l = brightcove.cacheUrlParams(), o = f.length, e = 0; e < o; e++) {
        if (i = f[e], i = brightcove.copyDefaultParams(i), i = brightcove.copySnippetParams(i, c), i = brightcove.copyUrlParams(i, l, o), r = brightcove.determinePlayerType(i, p, w), u = !1, u = r == brightcove.playerType.HTML ? i.params.secureHTMLConnections == "true" : i.params.secureConnections == "true", r == brightcove.playerType.NO_SUPPORT) {
            brightcove.renderInstallGif(i, u);
            brightcove.reportUpgradeRequired(i);
            continue
        }
        if (r == brightcove.playerType.HTML ? delete i.params.linkBaseURL : i.params.includeAPI && i.params.templateReadyHandler != null && (i.params.originalTemplateReadyHandler = i.params.templateReadyHandler, s = "templateReadyHandler" + i.id, brightcove[s] = function(n) {
                return function(t) {
                    brightcove.internal != null && brightcove.internal._instances[n] != null && brightcove._addModuleToEvent(n, t);
                    var i = brightcove.experienceObjects[n];
                    brightcove.callHandlerForPlayer(i, "originalTemplateReadyHandler", t)
                }
            }(i.id), i.params.templateReadyHandler = 'brightcove["' + s + '"]'), a = brightcove.generateRequestUrl(i, r, u), document.location.protocol == "http:") {
            var v = "http://goku.brightcove.com/1pix.gif?",
                y = ["dcsuri=/viewer/player_load_req", "playerType=" + r, "playerURL=" + encodeURIComponent(document.location || "")],
                b = brightcove.createElement("image");
            for (h in i.params) y.push([encodeURIComponent(h) + "=" + encodeURIComponent(i.params[h])]);
            v += y.join("&");
            b.src = v
        }
        brightcove.renderExperience(i, a, r, u)
    }
}, brightcove.collectExperiences = function() {
    for (var i = [], t = document.getElementsByTagName("object"), r = t.length, n = 0; n < r; n++) / \bBrightcoveExperience\ b / .test(t[n].className) && t[n].type != "application/x-shockwave-flash" && i.push(t[n]);
    return i
}, brightcove.cacheUrlParams = function() {
    var n = {};
    return n.playerKey = decodeURIComponent(brightcove.getParameter("bckey")), n.playerID = brightcove.getParameter("bcpid"), n.titleID = brightcove.getParameter("bctid"), n.lineupID = brightcove.getParameter("bclid"), n.autoStart = brightcove.getParameter("autoStart"), n.debuggerID = brightcove.getParameter("debuggerID"), n.forceHTML = brightcove.getParameter("forceHTML"), n.forceFlashIFrame = brightcove.getParameter("forceFlashIFrame"), n.debug = brightcove.getParameter("debug"), n.showNoContentMessage = brightcove.getParameter("showNoContentMessage"), n.htmlDefaultBitrate = brightcove.getParameter("htmlDefaultBitrate"), n.linkSrc = brightcove.getParameter("linkSrc"), n
}, brightcove.copyDefaultParams = function(n) {
    var t, i;
    n.params || (n.params = {});
    n.flashParams || (n.flashParams = {});
    for (t in brightcove.defaultParam) n.params[t] = brightcove.defaultParam[t];
    for (i in brightcove.defaultFlashParam) n.flashParams[i] = brightcove.defaultFlashParam[i];
    return n.id.length > 0 ? n.params.flashID = n.id : n.id = n.params.flashID = "bcExperienceObj" + brightcove.experienceNum++, n
}, brightcove.copySnippetParams = function(n, t) {
    var u, i, r;
    for (brightcove.hasActiveX || (t = n.getElementsByTagName("param")), u = t.length, r = 0; r < u; r++)(i = t[r], brightcove.hasActiveX && i.parentNode.id != n.id) || (n.params[i.name] = i.value);
    return n.params.bgcolor != undefined && (n.flashParams.bgcolor = n.params.bgcolor), n.params.wmode != undefined && (n.flashParams.wmode = n.params.wmode), n.params.seamlessTabbing != undefined && (n.flashParams.seamlessTabbing = n.params.seamlessTabbing), n
}, brightcove.copyUrlParams = function(n, t) {
    n.params.autoStart == undefined && t.autoStart != undefined && (n.params.autoStart = t.autoStart);
    t.debuggerID != undefined && (n.params.debuggerID = t.debuggerID);
    t.forceHTML != undefined && t.forceHTML !== "" && (n.params.forceHTML = t.forceHTML);
    t.forceFlashIFrame != undefined && t.forceFlashIFrame !== "" && (n.params.forceFlashIFrame = t.forceFlashIFrame);
    t.debug != undefined && t.debug !== "" && (n.params.debug = t.debug);
    t.showNoContentMessage != undefined && t.showNoContentMessage != "" && (n.params.showNoContentMessage = t.showNoContentMessage);
    t.htmlDefaultBitrate != undefined && t.htmlDefaultBitrate !== "" && (n.params.htmlDefaultBitrate = t.htmlDefaultBitrate);
    t.linkSrc != undefined && t.linkSrc != "" && (n.params.linkSrc = t.linkSrc);
    var i = t.playerID.length < 1 && t.playerKey.length < 1 || t.playerID == n.params.playerID || t.playerKey == n.params.playerKey;
    return i && (t.titleID.length > 0 && (n.params.videoID = t.titleID, n.params["@videoPlayer"] = t.titleID, n.params.autoStart = n.params.autoStart != "false" && t.autoStart != "false"), t.lineupID.length > 0 && (n.params.lineupID = t.lineupID)), n
}, brightcove.determinePlayerType = function(n, t, i) {
    if (t == null && i == !1) return brightcove.playerType.NO_SUPPORT;
    if (n.params.forceHTML) {
        if (window.console) {
            var r = "The forceHTML parameter was used for the Brightcove player. This value should ONLY be used for";
            r += " development and testing purposes and is not supported in production environments.";
            console.log(r)
        }
        return brightcove.playerType.HTML
    }
    return n.params.forceFlashIFrame || brightcove.isMetroIE() && t == null ? brightcove.playerType.FLASH_IFRAME : t != null ? brightcove.isFlashVersionSufficient(n, t) ? brightcove.playerType.FLASH : brightcove.playerType.INSTALLER : i && (brightcove.isSupportedHTMLDevice() || n.params.htmlFallback) ? brightcove.playerType.HTML : brightcove.playerType.NO_SUPPORT
}, brightcove.isFlashVersionSufficient = function(n, t) {
    if (t == null) return !1;
    var r = !1,
        i, u, f;
    return n.params.majorVersion != undefined ? (i = parseInt(n.params.majorVersion, 10), r = !0) : i = brightcove.majorVersion, u = n.params.majorRevision != undefined ? parseInt(n.params.majorRevision, 10) : r ? 0 : brightcove.majorRevision, f = n.params.minorRevision != undefined ? parseInt(n.params.minorRevision, 10) : r ? 0 : brightcove.minorRevision, t.majorVersion > i || t.majorVersion == i && t.majorRevision > u || t.majorVersion == i && t.majorRevision == u && t.minorRevision >= f
}, brightcove.generateRequestUrl = function(n, t, i) {
    var r, f, e, o, u;
    if (t == brightcove.playerType.INSTALLER) r = brightcove.cdnURL + "/viewer/playerProductInstall.swf", f = brightcove.hasActiveX ? "ActiveX" : "PlugIn", document.title = document.title.slice(0, 47) + " - Flash Player Installation", e = document.title, r += "?&MMredirectURL=" + window.location + "&MMplayerType=" + f + "&MMdoctitle=" + e, brightcove.reportUpgradeRequired(n);
    else {
        r = i ? brightcove.getPubURL(brightcove.secureServicesURL, brightcove.pubSecureHost, n.params.pubCode) : brightcove.getPubURL(brightcove.servicesURL, brightcove.pubHost, n.params.pubCode);
        o = t == brightcove.playerType.HTML ? brightcove.servlet.HTML : brightcove.servlet.AS3;
        r += "/viewer/" + o + "?" + brightcove.getOverrides();
        for (u in n.params) r += "&" + encodeURIComponent(u) + "=" + encodeURIComponent(n.params[u])
    }
    return r
}, brightcove.renderInstallGif = function(n, t) {
    var r = "_container" + n.id,
        i = brightcove.createElement("span");
    i.style.display = n.params.height.charAt(n.params.height.length - 1) == "%" ? "block" : "inline-block";
    i.id = r;
    var u = t ? brightcove.secureCDNURL : brightcove.cdnURL,
        f = u.indexOf(".co.jp") > 0 ? "upgrade_flash_player_kk.gif" : "upgrade_flash_player2.gif",
        e = "<a href='http://www.adobe.com/go/getflash/' target='_blank'><img src='" + u + "/viewer/" + f + "' alt='Get Flash Player' width='314' height='200' border='0'><\/a>";
    n.parentNode.replaceChild(i, n);
    document.getElementById(r).innerHTML = e
}, brightcove.renderExperience = function(n, t, i, r) {
    var u, f = n.id,
        l, v = brightcove.flashTimeoutInterval,
        o, h, c, y, e, s, p, a, w;
    if (!(n.params.playerKey || n.params.playerID || n.params.playerId || n.params.playerid)) {
        window.console && console.log("No playerID or playerKey was found for the Brightcove player, so it can not be rendered.");
        return
    }
    brightcove.experienceObjects[f] = n;
    o = brightcove.getParameter("unminified") == "true" || n.params.unminified === "true";
    n.params.includeAPI !== "true" || brightcove._apiRequested || brightcove.api || (h = "/js/api/", o && (h += "unminified/"), h += "SmartPlayerAPI.js", c = brightcove.createElement("script"), c.type = "text/javascript", y = r ? brightcove.secureCDNURL : brightcove.cdnURL, c.src = y + h, n.parentNode.appendChild(c), brightcove._apiRequested = !0);
    t += "&startTime=" + (new Date).getTime();
    i === brightcove.playerType.HTML ? (v = brightcove.htmlTimeoutInterval, t += "&refURL=" + (window.document.referrer ? window.document.referrer : "not available"), o && (t += "&unminified=true"), u = brightcove.createIFrame(n), n.parentNode.replaceChild(u, n), brightcove.experiences[f] = u, n.element = u, (n.params.videoID || n.params.videoId) && (t += "&" + encodeURIComponent("@videoPlayer") + "=" + encodeURIComponent(n.params.videoID || n.params.videoId)), u.src = t) : i === brightcove.playerType.FLASH_IFRAME ? (e = r ? brightcove.secureCDNURL : brightcove.cdnURL, s = e + "/js/flash_iframe.html?parentPage=" + window.location.toString().split("?")[0], s += "&currentCDN=" + e, o && (s += "&unminified=" + o), u = brightcove.createIFrame(n), n.parentNode.replaceChild(u, n), brightcove.experiences[f] = u, n.element = u, u.src = s, window.addEventListener("message", function(i) {
        var o, f, s, h;
        i.origin.split("/")[2] === e.split("/")[2] && (o = JSON.parse(i.data), o == "bcIframeInitialized") && (brightcove.hasActiveX ? (n.flashParams.movie = t, s = brightcove.getFlashEmbedString(n, r), f = {
            activeX: s,
            height: n.params.height,
            id: "_container" + n.id,
            file: t
        }) : f = brightcove.getFlashObjectParams(n, t), h = JSON.stringify(f), u.contentWindow.postMessage(h, e))
    }, !1), window.addEventListener("message", function(n) {
        if (n.origin.split("/")[2] === e.split("/")[2]) {
            var t = JSON.parse(n.data);
            t.api && brightcove.internal && brightcove.internal._setAPICallback && (t.api == "apiCallback" ? brightcove.internal._setAPICallback(t.pid, t.callback, s) : t.api == "loadEvent" ? window[t.callback](t.event) : t.api == "onTemplateReadyEvent" && brightcove[t.callback](t.event))
        }
    }, !1)) : brightcove.hasActiveX ? (n.flashParams.movie = t, p = brightcove.getFlashEmbedString(n, r), a = "_container" + n.id, l = brightcove.createFlashEmbed(a, n.params.height), n.parentNode.replaceChild(l, n), document.getElementById(a).innerHTML = p, brightcove.experiences[f] = l) : (w = brightcove.getFlashObjectParams(n, t), u = brightcove.createFlashObject(w), n.parentNode.replaceChild(u, n), brightcove.experiences[f] = u);
    brightcove.timeouts[n.id] = setTimeout(function() {
        brightcove.handleExperienceTimeout(f)
    }, v)
}, brightcove.createIFrame = function(n) {
    var t = brightcove.createElement("iframe");
    return t.id = n.id, t.width = n.params.width, t.height = n.params.height, t.className = n.className, t.frameborder = 0, t.scrolling = "no", t.style.borderStyle = "none", t
}, brightcove.getFlashEmbedString = function(n, t) {
    var r = "",
        f = n.flashParams,
        i, u;
    for (i in f) r += '<param name="' + i + '" value="' + n.flashParams[i] + '" />';
    return u = t ? "https" : "http", '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="' + u + "://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=" + brightcove.majorVersion + "," + brightcove.majorRevision + "," + brightcove.minorRevision + ',0" id="' + n.id + '" width="' + n.params.width + '" height="' + n.params.height + '" type="application/x-shockwave-flash" class="BrightcoveExperience">' + r + "<\/object>"
}, brightcove.getFlashObjectParams = function(n, t) {
    var i = {},
        r;
    i.type = "application/x-shockwave-flash";
    i.data = t;
    i.id = n.params.flashID;
    i.width = n.params.width;
    i.height = n.params.height;
    i.className = n.className;
    i.seamlesstabbing = n.flashParams.seamlessTabbing;
    for (r in n.flashParams) i["flashParam_" + r] = n.flashParams[r];
    return i
}, brightcove.createFlashEmbed = function(n, t) {
    var i = brightcove.createElement("span");
    return i.style.display = t.charAt(t.length - 1) == "%" ? "block" : "inline-block", i.id = n, i
}, brightcove.createFlashObject = function(n) {
    var t = brightcove.createElement("object"),
        i, u, r, f;
    t.type = n.type;
    t.data = n.data;
    t.id = n.id;
    t.width = n.width;
    t.height = n.height;
    t.className = n.className;
    t.setAttribute("seamlesstabbing", n.seamlessTabbing);
    u = "flashParam_";
    for (r in n) f = r.indexOf(u), f == 0 && (i = brightcove.createElement("param"), i.name = r.substring(u.length), i.value = n[r], t.appendChild(i));
    return t
}, brightcove.handleExperienceTimeout = function(n) {
    brightcove.executeErrorHandlerForExperience(brightcove.experienceObjects[n], {
        type: "templateError",
        errorType: "serviceUnavailable",
        code: brightcove.errorCodes.SERVICE_UNAVAILABLE,
        info: n
    })
}, brightcove.reportPlayerLoad = function(n) {
    var t = brightcove.timeouts[n];
    t && clearTimeout(t)
}, brightcove.reportUpgradeRequired = function(n) {
    brightcove.executeErrorHandlerForExperience(n, {
        type: "templateError",
        errorType: "upgradeRequiredForPlayer",
        code: brightcove.errorCodes.UPGRADE_REQUIRED_FOR_PLAYER,
        info: n.id
    })
}, brightcove.checkFlashSupport = function() {
    var n = window.ActiveXObject != undefined;
    return n ? brightcove.checkFlashSupportIE() : brightcove.checkFlashSupportStandard()
}, brightcove.checkFlashSupportIE = function() {
    var n, t, i;
    try {
        t = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
        i = t.GetVariable("$version");
        n = / ([0-9]+),([0-9]+),([0-9]+),/.exec(i)
    } catch (r) {
        return null
    }
    return {
        majorVersion: n[1],
        majorRevision: n[2],
        minorRevision: n[3]
    }
}, brightcove.isMetroIE = function() {
    var t = 0,
        i, n;
    if (navigator.appVersion.indexOf("MSIE") != -1 && (i = navigator.appVersion.split("MSIE"), i.length > 1 && (t = parseFloat(i[1]))), t < 10 || isNaN(t)) return !1;
    n = !1;
    try {
        n = !!new ActiveXObject("htmlfile")
    } catch (r) {
        n = !1
    }
    return !n
}, brightcove.checkFlashSupportStandard = function() {
    var t, i, r, n;
    try {
        if (typeof navigator.plugins != "undefined" && navigator.plugins.length > 0)
            if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
                var u = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "",
                    e = navigator.plugins["Shockwave Flash" + u].description,
                    f = navigator.plugins["Shockwave Flash" + u].filename;
                if (f.match && f.toLowerCase().match(/lite/)) throw new Error;
                t = e.split(" ");
                i = t[2].split(".")[0];
                r = t[2].split(".")[1];
                n = t[3];
                n == "" && (n = t[4]);
                n[0] == "d" ? n = n.substring(1) : n[0] == "r" && (n = n.substring(1), n.indexOf("d") > 0 && (n = n.substring(0, n.indexOf("d"))))
            } else throw new Error;
        else return null
    } catch (o) {
        return null
    }
    return {
        majorVersion: i,
        majorRevision: r,
        minorRevision: n
    }
}, brightcove.checkHtmlSupport = function() {
    var n = brightcove.createElement("video"),
        t = !0,
        i;
    return (brightcove.userAgent.match(new RegExp("android", "i")) || (t = !!(n.canPlayType && n.canPlayType('video/mp4; codecs="avc1.42E01E, mp4a.40.2"').replace(/no/, ""))), brightcove.userAgent.match(/BlackBerry.*Version\/6\.0/)) ? !1 : (i = !!brightcove.createElement("canvas").getContext, t && i)
}, brightcove.isSupportedHTMLDevice = function(n) {
    for (var i = ["iPad", "iPhone", "iPod", "android", "Silk"], r = i.length, u = n || brightcove.userAgent, t = 0; t < r; t++)
        if (u.match(new RegExp(i[t], "i"))) return !0;
    return !1
}, brightcove.getTechnology = function(n) {
    for (var t in brightcove.experiences)
        if (n == t) return brightcove.experiences[t].tagName == "object" ? brightcove.playerType.FLASH : brightcove.playerType.HTML;
    return brightcove.playerType.NO_SUPPORT
}, brightcove.respondToMessages = function(n) {
    var t, f, e;
    if (brightcove.verifyMessage(n)) {
        t = n.data;
        t.charAt(0) == '"' && (t = window.JSON ? window.JSON.parse(t) : brightcove.json_parse(t));
        var r = t.split("::"),
            o = r[1],
            u = r[2].split("\n").join(" "),
            i = window.JSON ? window.JSON.parse(u) : brightcove.json_parse(u);
        switch (o) {
            case "error":
                brightcove.executeMessageCallback(i, brightcove.executeErrorHandlerForExperience);
                break;
            case "api":
                brightcove.handleAPICallForHTML(i);
                break;
            case "handler":
                f = brightcove.internal._convertDates(i.event);
                try {
                    brightcove.internal._handlers[i.handler](f)
                } catch (s) {}
                break;
            case "asyncGetter":
                e = brightcove.internal._convertDates(i.data);
                brightcove.internal._handlers[i.handler](e)
        }
    }
}, brightcove.verifyMessage = function(n) {
    return /^brightcove\.player/.test(n.data)
}, brightcove.handleAPICallForHTML = function(n) {
    var i = brightcove.experienceObjects[n.id],
        t, u, r;
    if (i != null) {
        t = i.id;
        u = n.method;
        switch (u) {
            case "initializeBridge":
                brightcove.reportPlayerLoad(t);
                n.arguments[0] && (brightcove.internal != null ? (brightcove.internal._setAPICallback(t, null, n.arguments[1]), brightcove.callHandlerForPlayer(i, "templateLoadHandler", t)) : brightcove._apiRequested && brightcove._queuedAPICalls.push(n));
                break;
            case "callTemplateReady":
                brightcove._apiRequested && !brightcove.internal ? brightcove._queuedAPICalls.push(n) : (r = n.arguments, brightcove._addModuleToEvent(t, r), brightcove.callHandlerForPlayer(i, "templateReadyHandler", r))
        }
    }
}, brightcove._addModuleToEvent = function(n, t) {
    if (t.type != null && brightcove.api) {
        var i = brightcove.api.getExperience(n);
        i && (t.target = i.getModule("experience"))
    }
}, brightcove.callHandlerForPlayer = function(n, t, i) {
    var f, e, r, u;
    if (n && n.params && n.params[t])
        if (f = n.params[t].split("."), (e = f.length) > 1) {
            for (r = window, u = 0; u < e; u++) r = r[f[u]];
            typeof r == "function" && r(i)
        } else window[n.params[t]](i)
}, brightcove.executeErrorHandlerForExperience = function(n, t) {
    brightcove.callHandlerForPlayer(n, "templateErrorHandler", t)
}, brightcove.executeMessageCallback = function(n, t) {
    var i;
    for (var r in brightcove.experienceObjects)
        if (i = brightcove.experienceObjects[r], i.element.src === n.__srcUrl) {
            delete n.__srcUrl;
            t(i, n);
            break
        }
}, brightcove.createExperience = function(n, t, i) {
    (!n.id || n.id.length < 1) && (n.id = "bcExperienceObj" + brightcove.experienceNum++);
    i ? t.appendChild(n) : t.parentNode.insertBefore(n, t);
    brightcove.createExperiences(null, n.id)
}, brightcove.removeExperience = function(n) {
    brightcove.experiences[n] != null && brightcove.experiences[n].parentNode.removeChild(brightcove.experiences[n])
}, brightcove.getURL = function() {
    return typeof window.location.search != "undefined" ? window.location.search : /(\?.*)$/.exec(document.location.href)
}, brightcove.getOverrides = function() {
    for (var t = brightcove.getURL(), i = new RegExp("@[\\w\\.]+=[^&]+", "g"), n = i.exec(t), r = ""; n != null;) r += "&" + n, n = i.exec(t);
    return r
}, brightcove.getParameter = function(n, t) {
    t == null && (t = "");
    var r = brightcove.getURL(),
        u = new RegExp(n + "=([^&]*)"),
        i = u.exec(r);
    return i != null ? i[1] : t
}, brightcove.createElement = function(n) {
    return document.createElementNS ? document.createElementNS("http://www.w3.org/1999/xhtml", n) : document.createElement(n)
}, brightcove.i18n = {
    BROWSER_TOO_OLD: "The browser you are using is too old. Please upgrade to the latest version of your browser."
}, brightcove.removeListeners = function() {
    /KHTML/i.test(navigator.userAgent) && (clearInterval(checkLoad), document.removeEventListener("load", brightcove.createExperiences, !1));
    typeof document.addEventListener != "undefined" ? (document.removeEventListener("DOMContentLoaded", brightcove.createExperiences, !1), document.removeEventListener("load", brightcove.createExperiences, !1)) : typeof attachEvent != "undefined" && window.detachEvent("onload", brightcove.createExperiences)
}, brightcove.getPubURL = function(n, t, i) {
    if (!i || i == "") return n;
    return t = t.replace("$pubcode$", i).replace("$zoneprefix$$zone$", brightcove.pubSubdomain), n.replace(/^([htps]{4,5}\:\/\/)([^\/\:]+)/i, "$1" + t)
}, brightcove.createExperiencesPostLoad = function() {
    brightcove.removeListeners();
    brightcove.createExperiences()
}, brightcove.encode = function(n) {
    return n = escape(n), n = n.replace(/\+/g, "%2B"), n = n.replace(/\-/g, "%2D"), n = n.replace(/\*/g, "%2A"), n = n.replace(/\//g, "%2F"), n = n.replace(/\./g, "%2E"), n = n.replace(/_/g, "%5F"), n.replace(/@/g, "%40")
}, /KHTML/i.test(navigator.userAgent) && (checkLoad = setInterval(function() {
    /loaded|complete/.test(document.readyState) && (clearInterval(checkLoad), brightcove.createExperiencesPostLoad())
}, 70), document.addEventListener("load", brightcove.createExperiencesPostLoad, !1)), typeof document.addEventListener != "undefined" ? (document.addEventListener("DOMContentLoaded", brightcove.createExperiencesPostLoad, !1), document.addEventListener("load", brightcove.createExperiencesPostLoad, !1), window.addEventListener("message", brightcove.respondToMessages, !1)) : typeof attachEvent != "undefined" ? window.attachEvent("onload", brightcove.createExperiencesPostLoad) : alert(brightcove.i18n.BROWSER_TOO_OLD));
brightcove.json_parse = function() {
    "use strict";

    function h(n) {
        return n.replace(/\\(?:u(.{4})|([^u]))/g, function(n, t, i) {
            return t ? String.fromCharCode(parseInt(t, 16)) : f[i]
        })
    }
    var n, r, t, u, i, f = {
            "\\": "\\",
            '"': '"',
            "/": "/",
            t: "\t",
            n: "\n",
            r: "\r",
            f: "\f",
            b: "\b"
        },
        e = {
            go: function() {
                n = "ok"
            },
            firstokey: function() {
                u = i;
                n = "colon"
            },
            okey: function() {
                u = i;
                n = "colon"
            },
            ovalue: function() {
                n = "ocomma"
            },
            firstavalue: function() {
                n = "acomma"
            },
            avalue: function() {
                n = "acomma"
            }
        },
        o = {
            go: function() {
                n = "ok"
            },
            ovalue: function() {
                n = "ocomma"
            },
            firstavalue: function() {
                n = "acomma"
            },
            avalue: function() {
                n = "acomma"
            }
        },
        s = {
            "{": {
                go: function() {
                    r.push({
                        state: "ok"
                    });
                    t = {};
                    n = "firstokey"
                },
                ovalue: function() {
                    r.push({
                        container: t,
                        state: "ocomma",
                        key: u
                    });
                    t = {};
                    n = "firstokey"
                },
                firstavalue: function() {
                    r.push({
                        container: t,
                        state: "acomma"
                    });
                    t = {};
                    n = "firstokey"
                },
                avalue: function() {
                    r.push({
                        container: t,
                        state: "acomma"
                    });
                    t = {};
                    n = "firstokey"
                }
            },
            "}": {
                firstokey: function() {
                    var f = r.pop();
                    i = t;
                    t = f.container;
                    u = f.key;
                    n = f.state
                },
                ocomma: function() {
                    var f = r.pop();
                    t[u] = i;
                    i = t;
                    t = f.container;
                    u = f.key;
                    n = f.state
                }
            },
            "[": {
                go: function() {
                    r.push({
                        state: "ok"
                    });
                    t = [];
                    n = "firstavalue"
                },
                ovalue: function() {
                    r.push({
                        container: t,
                        state: "ocomma",
                        key: u
                    });
                    t = [];
                    n = "firstavalue"
                },
                firstavalue: function() {
                    r.push({
                        container: t,
                        state: "acomma"
                    });
                    t = [];
                    n = "firstavalue"
                },
                avalue: function() {
                    r.push({
                        container: t,
                        state: "acomma"
                    });
                    t = [];
                    n = "firstavalue"
                }
            },
            "]": {
                firstavalue: function() {
                    var f = r.pop();
                    i = t;
                    t = f.container;
                    u = f.key;
                    n = f.state
                },
                acomma: function() {
                    var f = r.pop();
                    t.push(i);
                    i = t;
                    t = f.container;
                    u = f.key;
                    n = f.state
                }
            },
            ":": {
                colon: function() {
                    if (Object.hasOwnProperty.call(t, u)) throw new SyntaxError('Duplicate key "' + u + '"');
                    n = "ovalue"
                }
            },
            ",": {
                ocomma: function() {
                    t[u] = i;
                    n = "okey"
                },
                acomma: function() {
                    t.push(i);
                    n = "avalue"
                }
            },
            "true": {
                go: function() {
                    i = !0;
                    n = "ok"
                },
                ovalue: function() {
                    i = !0;
                    n = "ocomma"
                },
                firstavalue: function() {
                    i = !0;
                    n = "acomma"
                },
                avalue: function() {
                    i = !0;
                    n = "acomma"
                }
            },
            "false": {
                go: function() {
                    i = !1;
                    n = "ok"
                },
                ovalue: function() {
                    i = !1;
                    n = "ocomma"
                },
                firstavalue: function() {
                    i = !1;
                    n = "acomma"
                },
                avalue: function() {
                    i = !1;
                    n = "acomma"
                }
            },
            "null": {
                go: function() {
                    i = null;
                    n = "ok"
                },
                ovalue: function() {
                    i = null;
                    n = "ocomma"
                },
                firstavalue: function() {
                    i = null;
                    n = "acomma"
                },
                avalue: function() {
                    i = null;
                    n = "acomma"
                }
            }
        };
    return function(t, u) {
        var f;
        n = "go";
        r = [];
        try {
            for (;;) {
                if (f = /^[\x20\t\n\r]*(?:([,:\[\]{}]|true|false|null)|(-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)|"((?:[^\r\n\t\\\"]|\\(?:["\\\/trnfb]|u[0-9a-fA-F]{4}))*)")/.exec(t), !f) break;
                f[1] ? s[f[1]][n]() : f[2] ? (i = +f[2], o[n]()) : (i = h(f[3]), e[n]());
                t = t.slice(f[0].length)
            }
        } catch (c) {
            n = c
        }
        if (n !== "ok" || /[^\x20\t\n\r]/.test(t)) throw n instanceof SyntaxError ? n : new SyntaxError("JSON");
        return typeof u == "function" ? function l(n, t) {
            var r, f, i = n[t];
            if (i && typeof i == "object")
                for (r in i) Object.prototype.hasOwnProperty.call(i, r) && (f = l(i, r), f !== undefined ? i[r] = f : delete i[r]);
            return u.call(n, t, i)
        }({
            "": i
        }, "") : i
    }
}();
/*
//# sourceMappingURL=Header.min.js.map
*/
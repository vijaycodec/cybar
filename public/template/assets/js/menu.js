function TWScrollTo(a) {
    var e,
        f,
        b = $("#scrollBlock1"),
        c = $("#scrollBlock2"),
        d = $("#scrollBlock3");
    $(a) &&
        ((e = 0),
        (f = 0),
        (e = b.height() + c.height() + d.height() + $(a).height()),
        (f = b.height() + $(a).height()),
        $(window).resize(function () {
            (e = b.height() + c.height() + d.height() + $(a).height()), (f = b.height() + $(a).height());
        }),
        window.innerWidth > 768 ? e > 0 && $.smoothScroll({ scrollTarget: a, offset: -e, preventDefault: !0 }) : f > 0 && $.smoothScroll({ scrollTarget: a, offset: -f, preventDefault: !0 }));
}

function MainMenuReset() {
    $(".nav-highlight").removeClass("nav-highlight"), $("nav.site-main-navigation div.navigation-dropdown").hide(), $(".navigation-backdrop").css("height", "0px");
}

function SetupChainedSelects() {
    $("#inputState") &&
        $("#inputCountry") &&
        ($("#inputState").chained("#inputCountry"),
        $("#inputCountry").bind("change", function () {
            $("#inputState").is(":disabled") ? ValidatorEnable($("[id$=inputStateValidator]")[0], !1) : ValidatorEnable($("[id$=inputStateValidator]")[0], !0);
        })),
        $("#dinputState") &&
            $("#dinputCountry") &&
            ($("#dinputState").chained("#dinputCountry"),
            $("#dinputCountry").bind("change", function () {
                $("#dinputState").is(":disabled") ? ValidatorEnable($("[id$=dinputStateValidator]")[0], !1) : ValidatorEnable($("[id$=dinputStateValidator]")[0], !0);
            }));
}
function GeneralClose() {
    $(".contact-close").click(function () {
        $("div.contact-dropdown:visible").slideUp(500, "easeInOutExpo");
    });
}
function ReCaptchaOk() {
    var a = !1;
    return "" == grecaptcha.getResponse() || (a = !0), a;
}
function CloseConfirm(a) {
    (a = $(a)) && a.hide();
}
function OpenConfirm(a) {
    (element = $(a.confirm)), element && (ga("send", "event", "Forms", "Lead Completed", a.name + " - " + $(document).find("title").text()), element.slideDown(500, "easeInOutExpo"));
}
function CloseForm(a) {
    (a = $(a)) && (a.hide(), $(".error-block").hide());
}
function OpenForm(a) {
    (element = $(a.form)), element && (ga("send", "event", "Forms", "Lead Initialized", a.name + " - " + $(document).find("title").text()), element.slideDown(500, "easeInOutExpo"));
}
function CloseContactForm() {
    event.preventDefault(),
        $("#dfirstName").val(""),
        $("#dlastName").val(""),
        $("#demailAddress").val(""),
        $("#demailConfirm").val(""),
        $("#dphoneNumber").val(""),
        $("#dlJobRole").val(""),
        $("#dinputCompany").val(""),
        $("#dinputIndustry").val(""),
        $("#inputCountry").val(""),
        $("#inputState").val(""),
        $("#Inquiry").val(""),
        $("#Subject").val("");
}
function SetupForms() {
    $(demo.button).click(function () {
        CloseConfirm(demo.confirm), OpenForm(demo), CloseForm(expert.form), CloseConfirm(expert.confirm);
    }),
        $(expert.button).click(function () {
            CloseConfirm(expert.confirm), OpenForm(expert), CloseForm(demo.form), CloseConfirm(demo.confirm);
        }),
        $(expert.submit).click(function (a) {
            var b, c, d;
            return (
                a.preventDefault(),
                Page_ClientValidate(expert.validation)
                    ? ($(".contact-dropdown").addClass("loading"),
                      (b = {}),
                      (c = {}),
                      (b.Firstname = $("#firstName").val()),
                      (b.Lastname = $("#lastName").val()),
                      (b.Email = $("#emailAddress").val()),
                      (b.EmailC = $("#demailConfirm").val()),
                      (b.Phone = $("#phoneNumber").val()),
                      (b.JobRole = $("#dlJobRole").val()),
                      (b.Company = $("#inputCompany").val()),
                      (b.Industry = $("#inputIndustry").val()),
                      (b.Country = $("#inputCountry").val()),
                      (b.State = $("#inputState").val()),
                      (b.AOIDAOI = $("#AOIDAOIFIELD").val()),
                      (c.Gated = $("#Gated").val()),
                      (c.UpsertMarketo = $("#Upsert").val()),
                      (c.Redirect = $("#Redirect").val()),
                      (c.Title = $("#Title").val()),
                      (c.Remember = $("#Remember").is(":checked")),
                      (c.Subscribe = !0),
                      (c.Trigger = "3450"),
                      (d = $("#CampaignHF").val()),
                      "" != d && void 0 != d && (c.Trigger = d),
                      ContactExpertRequestSent ||
                          (ContactExpertRequestSent = $.ajax({
                              type: "POST",
                              url: "/Services/TrustwaveWebJSONService.asmx/ContactFormSubmit",
                              data: "{user: " + JSON.stringify(b) + ", info: " + JSON.stringify(c) + "}",
                              contentType: "application/json; charset=utf-8",
                              dataType: "json",
                              success: function () {
                                  $(".contact-dropdown").removeClass("loading"), CloseForm(expert.form), OpenConfirm(expert);
                              },
                              complete: function () {
                                  ContactExpertRequestSent = !1;
                              },
                          })),
                      !1)
                    : void 0
            );
        }),
        $(demo.submit).click(function (a) {
            var b, c, d;
            return (
                a.preventDefault(),
                Page_ClientValidate(demo.validation)
                    ? ($(".contact-dropdown").addClass("loading"),
                      (b = {}),
                      (c = {}),
                      (b.Firstname = $("#dfirstName").val()),
                      (b.Lastname = $("#dlastName").val()),
                      (b.Email = $("#demailAddress").val()),
                      (b.EmailC = $("#demailConfirm").val()),
                      (b.Phone = $("#dphoneNumber").val()),
                      (b.JobRole = $("#dinputJobRole").val()),
                      (b.Company = $("#dinputCompany").val()),
                      (b.Industry = $("#dinputIndustry").val()),
                      (b.Country = $("#dinputCountry").val()),
                      (b.State = $("#dinputState").val()),
                      (b.AOIDAOI = $("#dAOIDAOIFIELD").val()),
                      (c.Gated = $("#dGated").val()),
                      (c.UpsertMarketo = $("#dUpsert").val()),
                      (c.Redirect = $("#dRedirect").val()),
                      (c.Title = $("#dTitle").val()),
                      (c.Remember = $("#dRemember").is(":checked")),
                      (c.Subscribe = !0),
                      (c.Trigger = "2984"),
                      (d = $("#CampaignHF").val()),
                      "" != d && void 0 != d && (c.Trigger = d),
                      ContactDemoRequestSent ||
                          (ContactDemoRequestSent = $.ajax({
                              type: "POST",
                              url: "/Services/TrustwaveWebJSONService.asmx/ContactFormSubmit",
                              data: "{user: " + JSON.stringify(b) + ", info: " + JSON.stringify(c) + "}",
                              contentType: "application/json; charset=utf-8",
                              dataType: "json",
                              success: function () {
                                  $(".contact-dropdown").removeClass("loading"), CloseForm(demo.form), OpenConfirm(demo);
                              },
                              completed: function () {
                                  ContactDemoRequestSent = !1;
                              },
                          })),
                      !1)
                    : void 0
            );
        }),
        $(contact.submit).click(function (a) {
            if ((a.preventDefault(), Page_ClientValidate(contact.validation))) {
                var b = {},
                    c = {};
                (b.Firstname = $("#dfirstName").val()),
                    (b.Lastname = $("#dlastName").val()),
                    (b.Email = $("#demailAddress").val()),
                    (b.EmailC = $("#demailConfirm").val()),
                    (b.Phone = $("#dphoneNumber").val()),
                    (b.JobRole = $("#dlJobRole").val()),
                    (b.Company = $("#dinputCompany").val()),
                    (b.Industry = $("#dinputIndustry").val()),
                    (b.Country = $("#inputCountry").val()),
                    (b.State = $("#inputState").val()),
                    (c.Inquiry = $("#Inquiry").val()),
                    (c.Subject = $("#Subject").val()),
                    formsubmitlock ||
                        $.ajax({
                            type: "POST",
                            url: "/Services/TrustwaveWebJSONService.asmx/ContactUsFormSubmit",
                            data: "{user: " + JSON.stringify(b) + ", info: " + JSON.stringify(c) + "}",
                            contentType: "application/json; charset=utf-8",
                            dataType: "json",
                            beforeSend: function () {
                                formsubmitlock = !0;
                            },
                            success: function () {
                                $(".dark").show(), $("#contactConfirm").fadeIn("fast");
                            },
                        }).done(function () {
                            formsubmitlock = !1;
                        });
            }
        }),
        $(contact.close).click(function () {
            CloseContactForm();
        }),
        $(contact.cancel).click(function () {
            CloseContactForm();
        }),
        $(partner.close).click(function (a) {
            console.log("clear"),
                a.preventDefault(),
                $("#dfirstName").val(""),
                $("#dlastName").val(""),
                $("#demailAddress").val(""),
                $("#dphoneNumber").val(""),
                $("#dlJobRole").val(""),
                $("#dinputCompany").val(""),
                $("#Inquiry").val(""),
                $("#Subject").val(""),
                $("#mobilePhoneNumber").val(""),
                $("#dcorpphoneNumber").val(""),
                $("#dfaxNumber").val(""),
                $("#daddressOne").val(""),
                $("#daddressTwo").val(""),
                $("#dinputCity").val(""),
                $("#inputCountry").val(""),
                $("#inputState").val(""),
                $("#dinputZipCode").val("");
        }),
        GeneralClose();
}
function FormAddButton(a) {
    var b = $("#contactOpen");
    b && b.html(b.html() + a);
}
function ContactFormCompleted() {
    $("#contactConfirm").show(), $(".dark").show();
}
function pageLoad(a, b) {
    b.get_isPartialLoad() && (SetupForms(), SetupChainedSelects());
}
var carousel1Inner, timeoutObj, formsubmitlock, color, disqus_shortname;
if (
    ((function (a, b) {
        "object" == typeof module && "object" == typeof module.exports
            ? (module.exports = a.document
                  ? b(a, !0)
                  : function (a) {
                        if (!a.document) throw new Error("jQuery requires a window with a document");
                        return b(a);
                    })
            : b(a);
    })("undefined" != typeof window ? window : this, function (a, b) {
        function c(a) {
            var b = a.length,
                c = fa.type(a);
            return "function" !== c && !fa.isWindow(a) && (!(1 !== a.nodeType || !b) || "array" === c || 0 === b || ("number" == typeof b && b > 0 && b - 1 in a));
        }
        function d(a, b, c) {
            if (fa.isFunction(b))
                return fa.grep(a, function (a, d) {
                    return !!b.call(a, d, a) !== c;
                });
            if (b.nodeType)
                return fa.grep(a, function (a) {
                    return (a === b) !== c;
                });
            if ("string" == typeof b) {
                if (Ia.test(b)) return fa.filter(b, a, c);
                b = fa.filter(b, a);
            }
            return fa.grep(a, function (a) {
                return fa.inArray(a, b) >= 0 !== c;
            });
        }
        function e(a, b) {
            do {
                a = a[b];
            } while (a && 1 !== a.nodeType);
            return a;
        }
        function f(a) {
            var b = (oa[a] = {});
            return (
                fa.each(a.match(na) || [], function (a, c) {
                    b[c] = !0;
                }),
                b
            );
        }
        function g() {
            Ka.addEventListener ? (Ka.removeEventListener("DOMContentLoaded", h, !1), a.removeEventListener("load", h, !1)) : (Ka.detachEvent("onreadystatechange", h), a.detachEvent("onload", h));
        }
        function h() {
            (Ka.addEventListener || "load" === event.type || "complete" === Ka.readyState) && (g(), fa.ready());
        }
        function i(a, b, c) {
            if (void 0 === c && 1 === a.nodeType) {
                var d = "data-" + b.replace(ta, "-$1").toLowerCase();
                if ("string" == typeof (c = a.getAttribute(d))) {
                    try {
                        c = "true" === c || ("false" !== c && ("null" === c ? null : +c + "" === c ? +c : sa.test(c) ? fa.parseJSON(c) : c));
                    } catch (a) {}
                    fa.data(a, b, c);
                } else c = void 0;
            }
            return c;
        }
        function j(a) {
            for (var b in a) if (("data" !== b || !fa.isEmptyObject(a[b])) && "toJSON" !== b) return !1;
            return !0;
        }
        function k(a, b, c, d) {
            if (fa.acceptData(a)) {
                var e,
                    f,
                    g = fa.expando,
                    h = a.nodeType,
                    i = h ? fa.cache : a,
                    j = h ? a[g] : a[g] && g;
                if ((j && i[j] && (d || i[j].data)) || void 0 !== c || "string" != typeof b)
                    return (
                        j || (j = h ? (a[g] = W.pop() || fa.guid++) : g),
                        i[j] || (i[j] = h ? {} : { toJSON: fa.noop }),
                        ("object" == typeof b || "function" == typeof b) && (d ? (i[j] = fa.extend(i[j], b)) : (i[j].data = fa.extend(i[j].data, b))),
                        (f = i[j]),
                        d || (f.data || (f.data = {}), (f = f.data)),
                        void 0 !== c && (f[fa.camelCase(b)] = c),
                        "string" == typeof b ? null == (e = f[b]) && (e = f[fa.camelCase(b)]) : (e = f),
                        e
                    );
            }
        }
        function l(a, b, c) {
            if (fa.acceptData(a)) {
                var d,
                    e,
                    f = a.nodeType,
                    g = f ? fa.cache : a,
                    h = f ? a[fa.expando] : fa.expando;
                if (g[h]) {
                    if (b && (d = c ? g[h] : g[h].data)) {
                        for (fa.isArray(b) ? (b = b.concat(fa.map(b, fa.camelCase))) : (b in d) ? (b = [b]) : ((b = fa.camelCase(b)), (b = (b in d) ? [b] : b.split(" "))), e = b.length; e--; ) delete d[b[e]];
                        if (c ? !j(d) : !fa.isEmptyObject(d)) return;
                    }
                    (c || (delete g[h].data, j(g[h]))) && (f ? fa.cleanData([a], !0) : da.deleteExpando || g != g.window ? delete g[h] : (g[h] = null));
                }
            }
        }
        function m() {
            return !0;
        }
        function n() {
            return !1;
        }
        function o() {
            try {
                return Ka.activeElement;
            } catch (a) {}
        }
        function p(a) {
            var b = Xa.split("|"),
                c = a.createDocumentFragment();
            if (c.createElement) for (; b.length; ) c.createElement(b.pop());
            return c;
        }
        function q(a, b) {
            var c,
                d,
                e = 0,
                f = typeof a.getElementsByTagName !== qa ? a.getElementsByTagName(b || "*") : typeof a.querySelectorAll !== qa ? a.querySelectorAll(b || "*") : void 0;
            if (!f) for (f = [], c = a.childNodes || a; null != (d = c[e]); e++) !b || fa.nodeName(d, b) ? f.push(d) : fa.merge(f, q(d, b));
            return void 0 === b || (b && fa.nodeName(a, b)) ? fa.merge([a], f) : f;
        }
        function r(a) {
            Ra.test(a.type) && (a.defaultChecked = a.checked);
        }
        function s(a, b) {
            return fa.nodeName(a, "table") && fa.nodeName(11 !== b.nodeType ? b : b.firstChild, "tr") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a;
        }
        function t(a) {
            return (a.type = (null !== fa.find.attr(a, "type")) + "/" + a.type), a;
        }
        function u(a) {
            var b = gb.exec(a.type);
            return b ? (a.type = b[1]) : a.removeAttribute("type"), a;
        }
        function v(a, b) {
            for (var c, d = 0; null != (c = a[d]); d++) fa._data(c, "globalEval", !b || fa._data(b[d], "globalEval"));
        }
        function w(a, b) {
            if (1 === b.nodeType && fa.hasData(a)) {
                var c,
                    d,
                    e,
                    f = fa._data(a),
                    g = fa._data(b, f),
                    h = f.events;
                if (h) {
                    delete g.handle, (g.events = {});
                    for (c in h) for (d = 0, e = h[c].length; d < e; d++) fa.event.add(b, c, h[c][d]);
                }
                g.data && (g.data = fa.extend({}, g.data));
            }
        }
        function x(a, b) {
            var c, d, e;
            if (1 === b.nodeType) {
                if (((c = b.nodeName.toLowerCase()), !da.noCloneEvent && b[fa.expando])) {
                    e = fa._data(b);
                    for (d in e.events) fa.removeEvent(b, d, e.handle);
                    b.removeAttribute(fa.expando);
                }
                "script" === c && b.text !== a.text
                    ? ((t(b).text = a.text), u(b))
                    : "object" === c
                    ? (b.parentNode && (b.outerHTML = a.outerHTML), da.html5Clone && a.innerHTML && !fa.trim(b.innerHTML) && (b.innerHTML = a.innerHTML))
                    : "input" === c && Ra.test(a.type)
                    ? ((b.defaultChecked = b.checked = a.checked), b.value !== a.value && (b.value = a.value))
                    : "option" === c
                    ? (b.defaultSelected = b.selected = a.defaultSelected)
                    : ("input" === c || "textarea" === c) && (b.defaultValue = a.defaultValue);
            }
        }
        function y(b, c) {
            var d = fa(c.createElement(b)).appendTo(c.body),
                e = a.getDefaultComputedStyle ? a.getDefaultComputedStyle(d[0]).display : fa.css(d[0], "display");
            return d.detach(), e;
        }
        function z(a) {
            var b = Ka,
                c = va[a];
            return (
                c ||
                    ((c = y(a, b)),
                    ("none" !== c && c) ||
                        ((ua = (ua || fa("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement)), (b = (ua[0].contentWindow || ua[0].contentDocument).document), b.write(), b.close(), (c = y(a, b)), ua.detach()),
                    (va[a] = c)),
                c
            );
        }
        function A(a, b) {
            return {
                get: function () {
                    var c = a();
                    if (null != c) return c ? void delete this.get : (this.get = b).apply(this, arguments);
                },
            };
        }
        function B(a, b) {
            if (b in a) return b;
            for (var c = b.charAt(0).toUpperCase() + b.slice(1), d = b, e = xb.length; e--; ) if ((b = xb[e] + c) in a) return b;
            return d;
        }
        function C(a, b) {
            for (var c, d, e, f = [], g = 0, h = a.length; g < h; g++)
                (d = a[g]),
                    d.style &&
                        ((f[g] = fa._data(d, "olddisplay")),
                        (c = d.style.display),
                        b
                            ? (f[g] || "none" !== c || (d.style.display = ""), "" === d.style.display && Pa(d) && (f[g] = fa._data(d, "olddisplay", z(d.nodeName))))
                            : f[g] || ((e = Pa(d)), ((c && "none" !== c) || !e) && fa._data(d, "olddisplay", e ? c : fa.css(d, "display"))));
            for (g = 0; g < h; g++) (d = a[g]), d.style && ((b && "none" !== d.style.display && "" !== d.style.display) || (d.style.display = b ? f[g] || "" : "none"));
            return a;
        }
        function D(a, b, c) {
            var d = tb.exec(b);
            return d ? Math.max(0, d[1] - (c || 0)) + (d[2] || "px") : b;
        }
        function E(a, b, c, d, e) {
            for (var f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0, g = 0; f < 4; f += 2)
                "margin" === c && (g += fa.css(a, c + Oa[f], !0, e)),
                    d
                        ? ("content" === c && (g -= fa.css(a, "padding" + Oa[f], !0, e)), "margin" !== c && (g -= fa.css(a, "border" + Oa[f] + "Width", !0, e)))
                        : ((g += fa.css(a, "padding" + Oa[f], !0, e)), "padding" !== c && (g += fa.css(a, "border" + Oa[f] + "Width", !0, e)));
            return g;
        }
        function F(a, b, c) {
            var d = !0,
                e = "width" === b ? a.offsetWidth : a.offsetHeight,
                f = nb(a),
                g = da.boxSizing() && "border-box" === fa.css(a, "boxSizing", !1, f);
            if (e <= 0 || null == e) {
                if (((e = ob(a, b, f)), (e < 0 || null == e) && (e = a.style[b]), mb.test(e))) return e;
                (d = g && (da.boxSizingReliable() || e === a.style[b])), (e = parseFloat(e) || 0);
            }
            return e + E(a, b, c || (g ? "border" : "content"), d, f) + "px";
        }
        function G(a, b, c, d, e) {
            return new G.prototype.init(a, b, c, d, e);
        }
        function H() {
            return (
                setTimeout(function () {
                    yb = void 0;
                }),
                (yb = fa.now())
            );
        }
        function I(a, b) {
            var c,
                d = { height: a },
                e = 0;
            for (b = b ? 1 : 0; e < 4; e += 2 - b) (c = Oa[e]), (d["margin" + c] = d["padding" + c] = a);
            return b && (d.opacity = d.width = a), d;
        }
        function J(a, b, c) {
            for (var d, e = (Eb[b] || []).concat(Eb["*"]), f = 0, g = e.length; f < g; f++) if ((d = e[f].call(c, b, a))) return d;
        }
        function K(a, b, c) {
            var d,
                e,
                f,
                g,
                h,
                i,
                j,
                k,
                l = this,
                m = {},
                n = a.style,
                o = a.nodeType && Pa(a),
                p = fa._data(a, "fxshow");
            c.queue ||
                ((h = fa._queueHooks(a, "fx")),
                null == h.unqueued &&
                    ((h.unqueued = 0),
                    (i = h.empty.fire),
                    (h.empty.fire = function () {
                        h.unqueued || i();
                    })),
                h.unqueued++,
                l.always(function () {
                    l.always(function () {
                        h.unqueued--, fa.queue(a, "fx").length || h.empty.fire();
                    });
                })),
                1 === a.nodeType &&
                    ("height" in b || "width" in b) &&
                    ((c.overflow = [n.overflow, n.overflowX, n.overflowY]),
                    (j = fa.css(a, "display")),
                    (k = z(a.nodeName)),
                    "none" === j && (j = k),
                    "inline" === j && "none" === fa.css(a, "float") && (da.inlineBlockNeedsLayout && "inline" !== k ? (n.zoom = 1) : (n.display = "inline-block"))),
                c.overflow &&
                    ((n.overflow = "hidden"),
                    da.shrinkWrapBlocks() ||
                        l.always(function () {
                            (n.overflow = c.overflow[0]), (n.overflowX = c.overflow[1]), (n.overflowY = c.overflow[2]);
                        }));
            for (d in b)
                if (((e = b[d]), Ab.exec(e))) {
                    if ((delete b[d], (f = f || "toggle" === e), e === (o ? "hide" : "show"))) {
                        if ("show" !== e || !p || void 0 === p[d]) continue;
                        o = !0;
                    }
                    m[d] = (p && p[d]) || fa.style(a, d);
                }
            if (!fa.isEmptyObject(m)) {
                p ? "hidden" in p && (o = p.hidden) : (p = fa._data(a, "fxshow", {})),
                    f && (p.hidden = !o),
                    o
                        ? fa(a).show()
                        : l.done(function () {
                              fa(a).hide();
                          }),
                    l.done(function () {
                        var b;
                        fa._removeData(a, "fxshow");
                        for (b in m) fa.style(a, b, m[b]);
                    });
                for (d in m) (g = J(o ? p[d] : 0, d, l)), d in p || ((p[d] = g.start), o && ((g.end = g.start), (g.start = "width" === d || "height" === d ? 1 : 0)));
            }
        }
        function L(a, b) {
            var c, d, e, f, g;
            for (c in a)
                if (((d = fa.camelCase(c)), (e = b[d]), (f = a[c]), fa.isArray(f) && ((e = f[1]), (f = a[c] = f[0])), c !== d && ((a[d] = f), delete a[c]), (g = fa.cssHooks[d]) && "expand" in g)) {
                    (f = g.expand(f)), delete a[d];
                    for (c in f) c in a || ((a[c] = f[c]), (b[c] = e));
                } else b[d] = e;
        }
        function M(a, b, c) {
            var d,
                e,
                f = 0,
                g = Db.length,
                h = fa.Deferred().always(function () {
                    delete i.elem;
                }),
                i = function () {
                    if (e) return !1;
                    for (var b = yb || H(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0, f = 1 - d, g = 0, i = j.tweens.length; g < i; g++) j.tweens[g].run(f);
                    return h.notifyWith(a, [j, f, c]), f < 1 && i ? c : (h.resolveWith(a, [j]), !1);
                },
                j = h.promise({
                    elem: a,
                    props: fa.extend({}, b),
                    opts: fa.extend(!0, { specialEasing: {} }, c),
                    originalProperties: b,
                    originalOptions: c,
                    startTime: yb || H(),
                    duration: c.duration,
                    tweens: [],
                    createTween: function (b, c) {
                        var d = fa.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);
                        return j.tweens.push(d), d;
                    },
                    stop: function (b) {
                        var c = 0,
                            d = b ? j.tweens.length : 0;
                        if (e) return this;
                        for (e = !0; c < d; c++) j.tweens[c].run(1);
                        return b ? h.resolveWith(a, [j, b]) : h.rejectWith(a, [j, b]), this;
                    },
                }),
                k = j.props;
            for (L(k, j.opts.specialEasing); f < g; f++) if ((d = Db[f].call(j, a, k, j.opts))) return d;
            return (
                fa.map(k, J, j),
                fa.isFunction(j.opts.start) && j.opts.start.call(a, j),
                fa.fx.timer(fa.extend(i, { elem: a, anim: j, queue: j.opts.queue })),
                j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts.always)
            );
        }
        function N(a) {
            return function (b, c) {
                "string" != typeof b && ((c = b), (b = "*"));
                var d,
                    e = 0,
                    f = b.toLowerCase().match(na) || [];
                if (fa.isFunction(c)) for (; (d = f[e++]); ) "+" === d.charAt(0) ? ((d = d.slice(1) || "*"), (a[d] = a[d] || []).unshift(c)) : (a[d] = a[d] || []).push(c);
            };
        }
        function O(a, b, c, d) {
            function e(h) {
                var i;
                return (
                    (f[h] = !0),
                    fa.each(a[h] || [], function (a, h) {
                        var j = h(b, c, d);
                        return "string" != typeof j || g || f[j] ? (g ? !(i = j) : void 0) : (b.dataTypes.unshift(j), e(j), !1);
                    }),
                    i
                );
            }
            var f = {},
                g = a === Xb;
            return e(b.dataTypes[0]) || (!f["*"] && e("*"));
        }
        function P(a, b) {
            var c,
                d,
                e = fa.ajaxSettings.flatOptions || {};
            for (d in b) void 0 !== b[d] && ((e[d] ? a : c || (c = {}))[d] = b[d]);
            return c && fa.extend(!0, a, c), a;
        }
        function Q(a, b, c) {
            for (var d, e, f, g, h = a.contents, i = a.dataTypes; "*" === i[0]; ) i.shift(), void 0 === e && (e = a.mimeType || b.getResponseHeader("Content-Type"));
            if (e)
                for (g in h)
                    if (h[g] && h[g].test(e)) {
                        i.unshift(g);
                        break;
                    }
            if (i[0] in c) f = i[0];
            else {
                for (g in c) {
                    if (!i[0] || a.converters[g + " " + i[0]]) {
                        f = g;
                        break;
                    }
                    d || (d = g);
                }
                f = f || d;
            }
            if (f) return f !== i[0] && i.unshift(f), c[f];
        }
        function R(a, b, c, d) {
            var e,
                f,
                g,
                h,
                i,
                j = {},
                k = a.dataTypes.slice();
            if (k[1]) for (g in a.converters) j[g.toLowerCase()] = a.converters[g];
            for (f = k.shift(); f; )
                if ((a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)), (i = f), (f = k.shift())))
                    if ("*" === f) f = i;
                    else if ("*" !== i && i !== f) {
                        if (!(g = j[i + " " + f] || j["* " + f]))
                            for (e in j)
                                if (((h = e.split(" ")), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]]))) {
                                    !0 === g ? (g = j[e]) : !0 !== j[e] && ((f = h[0]), k.unshift(h[1]));
                                    break;
                                }
                        if (!0 !== g)
                            if (g && a.throws) b = g(b);
                            else
                                try {
                                    b = g(b);
                                } catch (a) {
                                    return { state: "parsererror", error: g ? a : "No conversion from " + i + " to " + f };
                                }
                    }
            return { state: "success", data: b };
        }
        function S(a, b, c, d) {
            var e;
            if (fa.isArray(b))
                fa.each(b, function (b, e) {
                    c || $b.test(a) ? d(a, e) : S(a + "[" + ("object" == typeof e ? b : "") + "]", e, c, d);
                });
            else if (c || "object" !== fa.type(b)) d(a, b);
            else for (e in b) S(a + "[" + e + "]", b[e], c, d);
        }
        function T() {
            try {
                return new a.XMLHttpRequest();
            } catch (a) {}
        }
        function U() {
            try {
                return new a.ActiveXObject("Microsoft.XMLHTTP");
            } catch (a) {}
        }
        function V(a) {
            return fa.isWindow(a) ? a : 9 === a.nodeType && (a.defaultView || a.parentWindow);
        }
        var ka,
            la,
            ma,
            na,
            oa,
            pa,
            qa,
            ra,
            sa,
            ta,
            ua,
            va,
            wa,
            xa,
            ya,
            za,
            Aa,
            Ba,
            Ca,
            Da,
            Ea,
            Fa,
            W = [],
            X = W.slice,
            Y = W.concat,
            Z = W.push,
            $ = W.indexOf,
            _ = {},
            aa = _.toString,
            ba = _.hasOwnProperty,
            ca = "".trim,
            da = {},
            ea = "1.11.0",
            fa = function (a, b) {
                return new fa.fn.init(a, b);
            },
            ga = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
            ha = /^-ms-/,
            ia = /-([\da-z])/gi,
            ja = function (a, b) {
                return b.toUpperCase();
            };
        (fa.fn = fa.prototype = {
            jquery: ea,
            constructor: fa,
            selector: "",
            length: 0,
            toArray: function () {
                return X.call(this);
            },
            get: function (a) {
                return null != a ? (a < 0 ? this[a + this.length] : this[a]) : X.call(this);
            },
            pushStack: function (a) {
                var b = fa.merge(this.constructor(), a);
                return (b.prevObject = this), (b.context = this.context), b;
            },
            each: function (a, b) {
                return fa.each(this, a, b);
            },
            map: function (a) {
                return this.pushStack(
                    fa.map(this, function (b, c) {
                        return a.call(b, c, b);
                    })
                );
            },
            slice: function () {
                return this.pushStack(X.apply(this, arguments));
            },
            first: function () {
                return this.eq(0);
            },
            last: function () {
                return this.eq(-1);
            },
            eq: function (a) {
                var b = this.length,
                    c = +a + (a < 0 ? b : 0);
                return this.pushStack(c >= 0 && c < b ? [this[c]] : []);
            },
            end: function () {
                return this.prevObject || this.constructor(null);
            },
            push: Z,
            sort: W.sort,
            splice: W.splice,
        }),
            (fa.extend = fa.fn.extend = function () {
                var a,
                    b,
                    c,
                    d,
                    e,
                    f,
                    g = arguments[0] || {},
                    h = 1,
                    i = arguments.length,
                    j = !1;
                for ("boolean" == typeof g && ((j = g), (g = arguments[h] || {}), h++), "object" == typeof g || fa.isFunction(g) || (g = {}), h === i && ((g = this), h--); h < i; h++)
                    if (null != (e = arguments[h]))
                        for (d in e)
                            (a = g[d]),
                                (c = e[d]),
                                g !== c &&
                                    (j && c && (fa.isPlainObject(c) || (b = fa.isArray(c)))
                                        ? (b ? ((b = !1), (f = a && fa.isArray(a) ? a : [])) : (f = a && fa.isPlainObject(a) ? a : {}), (g[d] = fa.extend(j, f, c)))
                                        : void 0 !== c && (g[d] = c));
                return g;
            }),
            fa.extend({
                expando: "jQuery" + (ea + Math.random()).replace(/\D/g, ""),
                isReady: !0,
                error: function (a) {
                    throw new Error(a);
                },
                noop: function () {},
                isFunction: function (a) {
                    return "function" === fa.type(a);
                },
                isArray:
                    Array.isArray ||
                    function (a) {
                        return "array" === fa.type(a);
                    },
                isWindow: function (a) {
                    return null != a && a == a.window;
                },
                isNumeric: function (a) {
                    return a - parseFloat(a) >= 0;
                },
                isEmptyObject: function (a) {
                    for (var b in a) return !1;
                    return !0;
                },
                isPlainObject: function (a) {
                    var b;
                    if (!a || "object" !== fa.type(a) || a.nodeType || fa.isWindow(a)) return !1;
                    try {
                        if (a.constructor && !ba.call(a, "constructor") && !ba.call(a.constructor.prototype, "isPrototypeOf")) return !1;
                    } catch (a) {
                        return !1;
                    }
                    if (da.ownLast) for (b in a) return ba.call(a, b);
                    for (b in a);
                    return void 0 === b || ba.call(a, b);
                },
                type: function (a) {
                    return null == a ? a + "" : "object" == typeof a || "function" == typeof a ? _[aa.call(a)] || "object" : typeof a;
                },
                globalEval: function (b) {
                    b &&
                        fa.trim(b) &&
                        (
                            a.execScript ||
                            function (b) {
                                a.eval.call(a, b);
                            }
                        )(b);
                },
                camelCase: function (a) {
                    return a.replace(ha, "ms-").replace(ia, ja);
                },
                nodeName: function (a, b) {
                    return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase();
                },
                each: function (a, b, d) {
                    var f = 0,
                        g = a.length,
                        h = c(a);
                    if (d) {
                        if (h) for (; f < g && !1 !== b.apply(a[f], d); f++);
                        else for (f in a) if (!1 === b.apply(a[f], d)) break;
                    } else if (h) for (; f < g && !1 !== b.call(a[f], f, a[f]); f++);
                    else for (f in a) if (!1 === b.call(a[f], f, a[f])) break;
                    return a;
                },
                trim:
                    ca && !ca.call("ï»¿Â ")
                        ? function (a) {
                              return null == a ? "" : ca.call(a);
                          }
                        : function (a) {
                              return null == a ? "" : (a + "").replace(ga, "");
                          },
                makeArray: function (a, b) {
                    var d = b || [];
                    return null != a && (c(Object(a)) ? fa.merge(d, "string" == typeof a ? [a] : a) : Z.call(d, a)), d;
                },
                inArray: function (a, b, c) {
                    var d;
                    if (b) {
                        if ($) return $.call(b, a, c);
                        for (d = b.length, c = c ? (c < 0 ? Math.max(0, d + c) : c) : 0; c < d; c++) if (c in b && b[c] === a) return c;
                    }
                    return -1;
                },
                merge: function (a, b) {
                    for (var c = +b.length, d = 0, e = a.length; d < c; ) a[e++] = b[d++];
                    if (c !== c) for (; void 0 !== b[d]; ) a[e++] = b[d++];
                    return (a.length = e), a;
                },
                grep: function (a, b, c) {
                    for (var e = [], f = 0, g = a.length, h = !c; f < g; f++) !b(a[f], f) !== h && e.push(a[f]);
                    return e;
                },
                map: function (a, b, d) {
                    var e,
                        f = 0,
                        g = a.length,
                        h = c(a),
                        i = [];
                    if (h) for (; f < g; f++) null != (e = b(a[f], f, d)) && i.push(e);
                    else for (f in a) null != (e = b(a[f], f, d)) && i.push(e);
                    return Y.apply([], i);
                },
                guid: 1,
                proxy: function (a, b) {
                    var c, d, e;
                    return (
                        "string" == typeof b && ((e = a[b]), (b = a), (a = e)),
                        fa.isFunction(a)
                            ? ((c = X.call(arguments, 2)),
                              (d = function () {
                                  return a.apply(b || this, c.concat(X.call(arguments)));
                              }),
                              (d.guid = a.guid = a.guid || fa.guid++),
                              d)
                            : void 0
                    );
                },
                now: function () {
                    return +new Date();
                },
                support: da,
            }),
            fa.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function (a, b) {
                _["[object " + b + "]"] = b.toLowerCase();
            }),
            (ka = (function (a) {
                function b(a, b, c, d) {
                    var e, f, g, h, i, j, l, o, p, q;
                    if (((b ? b.ownerDocument || b : O) !== G && F(b), (b = b || G), (c = c || []), !a || "string" != typeof a)) return c;
                    if (1 !== (h = b.nodeType) && 9 !== h) return [];
                    if (I && !d) {
                        if ((e = sa.exec(a)))
                            if ((g = e[1])) {
                                if (9 === h) {
                                    if (!(f = b.getElementById(g)) || !f.parentNode) return c;
                                    if (f.id === g) return c.push(f), c;
                                } else if (b.ownerDocument && (f = b.ownerDocument.getElementById(g)) && M(b, f) && f.id === g) return c.push(f), c;
                            } else {
                                if (e[2]) return _.apply(c, b.getElementsByTagName(a)), c;
                                if ((g = e[3]) && x.getElementsByClassName && b.getElementsByClassName) return _.apply(c, b.getElementsByClassName(g)), c;
                            }
                        if (x.qsa && (!J || !J.test(a))) {
                            if (((o = l = N), (p = b), (q = 9 === h && a), 1 === h && "object" !== b.nodeName.toLowerCase())) {
                                for (j = m(a), (l = b.getAttribute("id")) ? (o = l.replace(ua, "\\$&")) : b.setAttribute("id", o), o = "[id='" + o + "'] ", i = j.length; i--; ) j[i] = o + n(j[i]);
                                (p = (ta.test(a) && k(b.parentNode)) || b), (q = j.join(","));
                            }
                            if (q)
                                try {
                                    return _.apply(c, p.querySelectorAll(q)), c;
                                } catch (a) {
                                } finally {
                                    l || b.removeAttribute("id");
                                }
                        }
                    }
                    return v(a.replace(ia, "$1"), b, c, d);
                }
                function c() {
                    function a(c, d) {
                        return b.push(c + " ") > y.cacheLength && delete a[b.shift()], (a[c + " "] = d);
                    }
                    var b = [];
                    return a;
                }
                function d(a) {
                    return (a[N] = !0), a;
                }
                function e(a) {
                    var b = G.createElement("div");
                    try {
                        return !!a(b);
                    } catch (a) {
                        return !1;
                    } finally {
                        b.parentNode && b.parentNode.removeChild(b), (b = null);
                    }
                }
                function f(a, b) {
                    for (var c = a.split("|"), d = a.length; d--; ) y.attrHandle[c[d]] = b;
                }
                function g(a, b) {
                    var c = b && a,
                        d = c && 1 === a.nodeType && 1 === b.nodeType && (~b.sourceIndex || W) - (~a.sourceIndex || W);
                    if (d) return d;
                    if (c) for (; (c = c.nextSibling); ) if (c === b) return -1;
                    return a ? 1 : -1;
                }
                function h(a) {
                    return function (b) {
                        return "input" === b.nodeName.toLowerCase() && b.type === a;
                    };
                }
                function i(a) {
                    return function (b) {
                        var c = b.nodeName.toLowerCase();
                        return ("input" === c || "button" === c) && b.type === a;
                    };
                }
                function j(a) {
                    return d(function (b) {
                        return (
                            (b = +b),
                            d(function (c, d) {
                                for (var e, f = a([], c.length, b), g = f.length; g--; ) c[(e = f[g])] && (c[e] = !(d[e] = c[e]));
                            })
                        );
                    });
                }
                function k(a) {
                    return a && typeof a.getElementsByTagName !== V && a;
                }
                function l() {}
                function m(a, c) {
                    var d,
                        e,
                        f,
                        g,
                        h,
                        i,
                        j,
                        k = S[a + " "];
                    if (k) return c ? 0 : k.slice(0);
                    for (h = a, i = [], j = y.preFilter; h; ) {
                        (!d || (e = ja.exec(h))) && (e && (h = h.slice(e[0].length) || h), i.push((f = []))), (d = !1), (e = ka.exec(h)) && ((d = e.shift()), f.push({ value: d, type: e[0].replace(ia, " ") }), (h = h.slice(d.length)));
                        for (g in y.filter) (e = oa[g].exec(h)) && (!j[g] || (e = j[g](e))) && ((d = e.shift()), f.push({ value: d, type: g, matches: e }), (h = h.slice(d.length)));
                        if (!d) break;
                    }
                    return c ? h.length : h ? b.error(a) : S(a, i).slice(0);
                }
                function n(a) {
                    for (var b = 0, c = a.length, d = ""; b < c; b++) d += a[b].value;
                    return d;
                }
                function o(a, b, c) {
                    var d = b.dir,
                        e = c && "parentNode" === d,
                        f = Q++;
                    return b.first
                        ? function (b, c, f) {
                              for (; (b = b[d]); ) if (1 === b.nodeType || e) return a(b, c, f);
                          }
                        : function (b, c, g) {
                              var h,
                                  i,
                                  j = [P, f];
                              if (g) {
                                  for (; (b = b[d]); ) if ((1 === b.nodeType || e) && a(b, c, g)) return !0;
                              } else
                                  for (; (b = b[d]); )
                                      if (1 === b.nodeType || e) {
                                          if (((i = b[N] || (b[N] = {})), (h = i[d]) && h[0] === P && h[1] === f)) return (j[2] = h[2]);
                                          if (((i[d] = j), (j[2] = a(b, c, g)))) return !0;
                                      }
                          };
                }
                function p(a) {
                    return a.length > 1
                        ? function (b, c, d) {
                              for (var e = a.length; e--; ) if (!a[e](b, c, d)) return !1;
                              return !0;
                          }
                        : a[0];
                }
                function q(a, b, c, d, e) {
                    for (var f, g = [], h = 0, i = a.length, j = null != b; h < i; h++) (f = a[h]) && (!c || c(f, d, e)) && (g.push(f), j && b.push(h));
                    return g;
                }
                function r(a, b, c, e, f, g) {
                    return (
                        e && !e[N] && (e = r(e)),
                        f && !f[N] && (f = r(f, g)),
                        d(function (d, g, h, i) {
                            var j,
                                k,
                                l,
                                m = [],
                                n = [],
                                o = g.length,
                                p = d || u(b || "*", h.nodeType ? [h] : h, []),
                                r = !a || (!d && b) ? p : q(p, m, a, h, i),
                                s = c ? (f || (d ? a : o || e) ? [] : g) : r;
                            if ((c && c(r, s, h, i), e)) for (j = q(s, n), e(j, [], h, i), k = j.length; k--; ) (l = j[k]) && (s[n[k]] = !(r[n[k]] = l));
                            if (d) {
                                if (f || a) {
                                    if (f) {
                                        for (j = [], k = s.length; k--; ) (l = s[k]) && j.push((r[k] = l));
                                        f(null, (s = []), j, i);
                                    }
                                    for (k = s.length; k--; ) (l = s[k]) && (j = f ? ba.call(d, l) : m[k]) > -1 && (d[j] = !(g[j] = l));
                                }
                            } else (s = q(s === g ? s.splice(o, s.length) : s)), f ? f(null, g, s, i) : _.apply(g, s);
                        })
                    );
                }
                function s(a) {
                    for (
                        var b,
                            c,
                            d,
                            e = a.length,
                            f = y.relative[a[0].type],
                            g = f || y.relative[" "],
                            h = f ? 1 : 0,
                            i = o(
                                function (a) {
                                    return a === b;
                                },
                                g,
                                !0
                            ),
                            j = o(
                                function (a) {
                                    return ba.call(b, a) > -1;
                                },
                                g,
                                !0
                            ),
                            k = [
                                function (a, c, d) {
                                    return (!f && (d || c !== C)) || ((b = c).nodeType ? i(a, c, d) : j(a, c, d));
                                },
                            ];
                        h < e;
                        h++
                    )
                        if ((c = y.relative[a[h].type])) k = [o(p(k), c)];
                        else {
                            if (((c = y.filter[a[h].type].apply(null, a[h].matches)), c[N])) {
                                for (d = ++h; d < e && !y.relative[a[d].type]; d++);
                                return r(h > 1 && p(k), h > 1 && n(a.slice(0, h - 1).concat({ value: " " === a[h - 2].type ? "*" : "" })).replace(ia, "$1"), c, h < d && s(a.slice(h, d)), d < e && s((a = a.slice(d))), d < e && n(a));
                            }
                            k.push(c);
                        }
                    return p(k);
                }
                function t(a, c) {
                    var e = c.length > 0,
                        f = a.length > 0,
                        g = function (d, g, h, i, j) {
                            var k,
                                l,
                                m,
                                n = 0,
                                o = "0",
                                p = d && [],
                                r = [],
                                s = C,
                                t = d || (f && y.find.TAG("*", j)),
                                u = (P += null == s ? 1 : Math.random() || 0.1),
                                v = t.length;
                            for (j && (C = g !== G && g); o !== v && null != (k = t[o]); o++) {
                                if (f && k) {
                                    for (l = 0; (m = a[l++]); )
                                        if (m(k, g, h)) {
                                            i.push(k);
                                            break;
                                        }
                                    j && (P = u);
                                }
                                e && ((k = !m && k) && n--, d && p.push(k));
                            }
                            if (((n += o), e && o !== n)) {
                                for (l = 0; (m = c[l++]); ) m(p, r, g, h);
                                if (d) {
                                    if (n > 0) for (; o--; ) p[o] || r[o] || (r[o] = Z.call(i));
                                    r = q(r);
                                }
                                _.apply(i, r), j && !d && r.length > 0 && n + c.length > 1 && b.uniqueSort(i);
                            }
                            return j && ((P = u), (C = s)), p;
                        };
                    return e ? d(g) : g;
                }
                function u(a, c, d) {
                    for (var e = 0, f = c.length; e < f; e++) b(a, c[e], d);
                    return d;
                }
                function v(a, b, c, d) {
                    var e,
                        f,
                        g,
                        h,
                        i,
                        j = m(a);
                    if (!d && 1 === j.length) {
                        if (((f = j[0] = j[0].slice(0)), f.length > 2 && "ID" === (g = f[0]).type && x.getById && 9 === b.nodeType && I && y.relative[f[1].type])) {
                            if (!(b = (y.find.ID(g.matches[0].replace(va, wa), b) || [])[0])) return c;
                            a = a.slice(f.shift().value.length);
                        }
                        for (e = oa.needsContext.test(a) ? 0 : f.length; e-- && ((g = f[e]), !y.relative[(h = g.type)]); )
                            if ((i = y.find[h]) && (d = i(g.matches[0].replace(va, wa), (ta.test(f[0].type) && k(b.parentNode)) || b))) {
                                if ((f.splice(e, 1), !(a = d.length && n(f)))) return _.apply(c, d), c;
                                break;
                            }
                    }
                    return B(a, j)(d, b, !I, c, (ta.test(a) && k(b.parentNode)) || b), c;
                }
                var w,
                    x,
                    y,
                    z,
                    A,
                    B,
                    C,
                    D,
                    E,
                    F,
                    G,
                    H,
                    I,
                    J,
                    K,
                    L,
                    M,
                    N = "sizzle" + -new Date(),
                    O = a.document,
                    P = 0,
                    Q = 0,
                    R = c(),
                    S = c(),
                    T = c(),
                    U = function (a, b) {
                        return a === b && (E = !0), 0;
                    },
                    V = "undefined",
                    W = -2147483648,
                    X = {}.hasOwnProperty,
                    Y = [],
                    Z = Y.pop,
                    $ = Y.push,
                    _ = Y.push,
                    aa = Y.slice,
                    ba =
                        Y.indexOf ||
                        function (a) {
                            for (var b = 0, c = this.length; b < c; b++) if (this[b] === a) return b;
                            return -1;
                        },
                    ca = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                    da = "[\\x20\\t\\r\\n\\f]",
                    ea = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
                    fa = ea.replace("w", "w#"),
                    ga = "\\[" + da + "*(" + ea + ")" + da + "*(?:([*^$|!~]?=)" + da + "*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|(" + fa + ")|)|)" + da + "*\\]",
                    ha = ":(" + ea + ")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|" + ga.replace(3, 8) + ")*)|.*)\\)|)",
                    ia = new RegExp("^" + da + "+|((?:^|[^\\\\])(?:\\\\.)*)" + da + "+$", "g"),
                    ja = new RegExp("^" + da + "*," + da + "*"),
                    ka = new RegExp("^" + da + "*([>+~]|" + da + ")" + da + "*"),
                    la = new RegExp("=" + da + "*([^\\]'\"]*?)" + da + "*\\]", "g"),
                    ma = new RegExp(ha),
                    na = new RegExp("^" + fa + "$"),
                    oa = {
                        ID: new RegExp("^#(" + ea + ")"),
                        CLASS: new RegExp("^\\.(" + ea + ")"),
                        TAG: new RegExp("^(" + ea.replace("w", "w*") + ")"),
                        ATTR: new RegExp("^" + ga),
                        PSEUDO: new RegExp("^" + ha),
                        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + da + "*(even|odd|(([+-]|)(\\d*)n|)" + da + "*(?:([+-]|)" + da + "*(\\d+)|))" + da + "*\\)|)", "i"),
                        bool: new RegExp("^(?:" + ca + ")$", "i"),
                        needsContext: new RegExp("^" + da + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + da + "*((?:-\\d)?\\d*)" + da + "*\\)|)(?=[^-]|$)", "i"),
                    },
                    pa = /^(?:input|select|textarea|button)$/i,
                    qa = /^h\d$/i,
                    ra = /^[^{]+\{\s*\[native \w/,
                    sa = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                    ta = /[+~]/,
                    ua = /'|\\/g,
                    va = new RegExp("\\\\([\\da-f]{1,6}" + da + "?|(" + da + ")|.)", "ig"),
                    wa = function (a, b, c) {
                        var d = "0x" + b - 65536;
                        return d !== d || c ? b : d < 0 ? String.fromCharCode(d + 65536) : String.fromCharCode((d >> 10) | 55296, (1023 & d) | 56320);
                    };
                try {
                    _.apply((Y = aa.call(O.childNodes)), O.childNodes), Y[O.childNodes.length].nodeType;
                } catch (a) {
                    _ = {
                        apply: Y.length
                            ? function (a, b) {
                                  $.apply(a, aa.call(b));
                              }
                            : function (a, b) {
                                  for (var c = a.length, d = 0; (a[c++] = b[d++]); );
                                  a.length = c - 1;
                              },
                    };
                }
                (x = b.support = {}),
                    (A = b.isXML = function (a) {
                        var b = a && (a.ownerDocument || a).documentElement;
                        return !!b && "HTML" !== b.nodeName;
                    }),
                    (F = b.setDocument = function (a) {
                        var b,
                            c = a ? a.ownerDocument || a : O,
                            d = c.defaultView;
                        return c !== G && 9 === c.nodeType && c.documentElement
                            ? ((G = c),
                              (H = c.documentElement),
                              (I = !A(c)),
                              d &&
                                  d !== d.top &&
                                  (d.addEventListener
                                      ? d.addEventListener(
                                            "unload",
                                            function () {
                                                F();
                                            },
                                            !1
                                        )
                                      : d.attachEvent &&
                                        d.attachEvent("onunload", function () {
                                            F();
                                        })),
                              (x.attributes = e(function (a) {
                                  return (a.className = "i"), !a.getAttribute("className");
                              })),
                              (x.getElementsByTagName = e(function (a) {
                                  return a.appendChild(c.createComment("")), !a.getElementsByTagName("*").length;
                              })),
                              (x.getElementsByClassName =
                                  ra.test(c.getElementsByClassName) &&
                                  e(function (a) {
                                      return (a.innerHTML = "<div class='a'></div><div class='a i'></div>"), (a.firstChild.className = "i"), 2 === a.getElementsByClassName("i").length;
                                  })),
                              (x.getById = e(function (a) {
                                  return (H.appendChild(a).id = N), !c.getElementsByName || !c.getElementsByName(N).length;
                              })),
                              x.getById
                                  ? ((y.find.ID = function (a, b) {
                                        if (typeof b.getElementById !== V && I) {
                                            var c = b.getElementById(a);
                                            return c && c.parentNode ? [c] : [];
                                        }
                                    }),
                                    (y.filter.ID = function (a) {
                                        var b = a.replace(va, wa);
                                        return function (a) {
                                            return a.getAttribute("id") === b;
                                        };
                                    }))
                                  : (delete y.find.ID,
                                    (y.filter.ID = function (a) {
                                        var b = a.replace(va, wa);
                                        return function (a) {
                                            var c = typeof a.getAttributeNode !== V && a.getAttributeNode("id");
                                            return c && c.value === b;
                                        };
                                    })),
                              (y.find.TAG = x.getElementsByTagName
                                  ? function (a, b) {
                                        if (typeof b.getElementsByTagName !== V) return b.getElementsByTagName(a);
                                    }
                                  : function (a, b) {
                                        var c,
                                            d = [],
                                            e = 0,
                                            f = b.getElementsByTagName(a);
                                        if ("*" === a) {
                                            for (; (c = f[e++]); ) 1 === c.nodeType && d.push(c);
                                            return d;
                                        }
                                        return f;
                                    }),
                              (y.find.CLASS =
                                  x.getElementsByClassName &&
                                  function (a, b) {
                                      if (typeof b.getElementsByClassName !== V && I) return b.getElementsByClassName(a);
                                  }),
                              (K = []),
                              (J = []),
                              (x.qsa = ra.test(c.querySelectorAll)) &&
                                  (e(function (a) {
                                      (a.innerHTML = "<select t=''><option selected=''></option></select>"),
                                          a.querySelectorAll("[t^='']").length && J.push("[*^$]=" + da + "*(?:''|\"\")"),
                                          a.querySelectorAll("[selected]").length || J.push("\\[" + da + "*(?:value|" + ca + ")"),
                                          a.querySelectorAll(":checked").length || J.push(":checked");
                                  }),
                                  e(function (a) {
                                      var b = c.createElement("input");
                                      b.setAttribute("type", "hidden"),
                                          a.appendChild(b).setAttribute("name", "D"),
                                          a.querySelectorAll("[name=d]").length && J.push("name" + da + "*[*^$|!~]?="),
                                          a.querySelectorAll(":enabled").length || J.push(":enabled", ":disabled"),
                                          a.querySelectorAll("*,:x"),
                                          J.push(",.*:");
                                  })),
                              (x.matchesSelector = ra.test((L = H.webkitMatchesSelector || H.mozMatchesSelector || H.oMatchesSelector || H.msMatchesSelector))) &&
                                  e(function (a) {
                                      (x.disconnectedMatch = L.call(a, "div")), L.call(a, "[s!='']:x"), K.push("!=", ha);
                                  }),
                              (J = J.length && new RegExp(J.join("|"))),
                              (K = K.length && new RegExp(K.join("|"))),
                              (b = ra.test(H.compareDocumentPosition)),
                              (M =
                                  b || ra.test(H.contains)
                                      ? function (a, b) {
                                            var c = 9 === a.nodeType ? a.documentElement : a,
                                                d = b && b.parentNode;
                                            return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a.compareDocumentPosition && 16 & a.compareDocumentPosition(d)));
                                        }
                                      : function (a, b) {
                                            if (b) for (; (b = b.parentNode); ) if (b === a) return !0;
                                            return !1;
                                        }),
                              (U = b
                                  ? function (a, b) {
                                        if (a === b) return (E = !0), 0;
                                        var d = !a.compareDocumentPosition - !b.compareDocumentPosition;
                                        return (
                                            d ||
                                            (1 & (d = (a.ownerDocument || a) === (b.ownerDocument || b) ? a.compareDocumentPosition(b) : 1) || (!x.sortDetached && b.compareDocumentPosition(a) === d)
                                                ? a === c || (a.ownerDocument === O && M(O, a))
                                                    ? -1
                                                    : b === c || (b.ownerDocument === O && M(O, b))
                                                    ? 1
                                                    : D
                                                    ? ba.call(D, a) - ba.call(D, b)
                                                    : 0
                                                : 4 & d
                                                ? -1
                                                : 1)
                                        );
                                    }
                                  : function (a, b) {
                                        if (a === b) return (E = !0), 0;
                                        var d,
                                            e = 0,
                                            f = a.parentNode,
                                            h = b.parentNode,
                                            i = [a],
                                            j = [b];
                                        if (!f || !h) return a === c ? -1 : b === c ? 1 : f ? -1 : h ? 1 : D ? ba.call(D, a) - ba.call(D, b) : 0;
                                        if (f === h) return g(a, b);
                                        for (d = a; (d = d.parentNode); ) i.unshift(d);
                                        for (d = b; (d = d.parentNode); ) j.unshift(d);
                                        for (; i[e] === j[e]; ) e++;
                                        return e ? g(i[e], j[e]) : i[e] === O ? -1 : j[e] === O ? 1 : 0;
                                    }),
                              c)
                            : G;
                    }),
                    (b.matches = function (a, c) {
                        return b(a, null, null, c);
                    }),
                    (b.matchesSelector = function (a, c) {
                        if (((a.ownerDocument || a) !== G && F(a), (c = c.replace(la, "='$1']")), x.matchesSelector && I && (!K || !K.test(c)) && (!J || !J.test(c))))
                            try {
                                var d = L.call(a, c);
                                if (d || x.disconnectedMatch || (a.document && 11 !== a.document.nodeType)) return d;
                            } catch (a) {}
                        return b(c, G, null, [a]).length > 0;
                    }),
                    (b.contains = function (a, b) {
                        return (a.ownerDocument || a) !== G && F(a), M(a, b);
                    }),
                    (b.attr = function (a, b) {
                        (a.ownerDocument || a) !== G && F(a);
                        var c = y.attrHandle[b.toLowerCase()],
                            d = c && X.call(y.attrHandle, b.toLowerCase()) ? c(a, b, !I) : void 0;
                        return void 0 !== d ? d : x.attributes || !I ? a.getAttribute(b) : (d = a.getAttributeNode(b)) && d.specified ? d.value : null;
                    }),
                    (b.error = function (a) {
                        throw new Error("Syntax error, unrecognized expression: " + a);
                    }),
                    (b.uniqueSort = function (a) {
                        var b,
                            c = [],
                            d = 0,
                            e = 0;
                        if (((E = !x.detectDuplicates), (D = !x.sortStable && a.slice(0)), a.sort(U), E)) {
                            for (; (b = a[e++]); ) b === a[e] && (d = c.push(e));
                            for (; d--; ) a.splice(c[d], 1);
                        }
                        return (D = null), a;
                    }),
                    (z = b.getText = function (a) {
                        var b,
                            c = "",
                            d = 0,
                            e = a.nodeType;
                        if (e) {
                            if (1 === e || 9 === e || 11 === e) {
                                if ("string" == typeof a.textContent) return a.textContent;
                                for (a = a.firstChild; a; a = a.nextSibling) c += z(a);
                            } else if (3 === e || 4 === e) return a.nodeValue;
                        } else for (; (b = a[d++]); ) c += z(b);
                        return c;
                    }),
                    (y = b.selectors = {
                        cacheLength: 50,
                        createPseudo: d,
                        match: oa,
                        attrHandle: {},
                        find: {},
                        relative: { ">": { dir: "parentNode", first: !0 }, " ": { dir: "parentNode" }, "+": { dir: "previousSibling", first: !0 }, "~": { dir: "previousSibling" } },
                        preFilter: {
                            ATTR: function (a) {
                                return (a[1] = a[1].replace(va, wa)), (a[3] = (a[4] || a[5] || "").replace(va, wa)), "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4);
                            },
                            CHILD: function (a) {
                                return (
                                    (a[1] = a[1].toLowerCase()),
                                    "nth" === a[1].slice(0, 3) ? (a[3] || b.error(a[0]), (a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[3] || "odd" === a[3]))), (a[5] = +(a[7] + a[8] || "odd" === a[3]))) : a[3] && b.error(a[0]),
                                    a
                                );
                            },
                            PSEUDO: function (a) {
                                var b,
                                    c = !a[5] && a[2];
                                return oa.CHILD.test(a[0])
                                    ? null
                                    : (a[3] && void 0 !== a[4] ? (a[2] = a[4]) : c && ma.test(c) && (b = m(c, !0)) && (b = c.indexOf(")", c.length - b) - c.length) && ((a[0] = a[0].slice(0, b)), (a[2] = c.slice(0, b))), a.slice(0, 3));
                            },
                        },
                        filter: {
                            TAG: function (a) {
                                var b = a.replace(va, wa).toLowerCase();
                                return "*" === a
                                    ? function () {
                                          return !0;
                                      }
                                    : function (a) {
                                          return a.nodeName && a.nodeName.toLowerCase() === b;
                                      };
                            },
                            CLASS: function (a) {
                                var b = R[a + " "];
                                return (
                                    b ||
                                    ((b = new RegExp("(^|" + da + ")" + a + "(" + da + "|$)")) &&
                                        R(a, function (a) {
                                            return b.test(("string" == typeof a.className && a.className) || (typeof a.getAttribute !== V && a.getAttribute("class")) || "");
                                        }))
                                );
                            },
                            ATTR: function (a, c, d) {
                                return function (e) {
                                    var f = b.attr(e, a);
                                    return null == f
                                        ? "!=" === c
                                        : !c ||
                                              ((f += ""),
                                              "=" === c
                                                  ? f === d
                                                  : "!=" === c
                                                  ? f !== d
                                                  : "^=" === c
                                                  ? d && 0 === f.indexOf(d)
                                                  : "*=" === c
                                                  ? d && f.indexOf(d) > -1
                                                  : "$=" === c
                                                  ? d && f.slice(-d.length) === d
                                                  : "~=" === c
                                                  ? (" " + f + " ").indexOf(d) > -1
                                                  : "|=" === c && (f === d || f.slice(0, d.length + 1) === d + "-"));
                                };
                            },
                            CHILD: function (a, b, c, d, e) {
                                var f = "nth" !== a.slice(0, 3),
                                    g = "last" !== a.slice(-4),
                                    h = "of-type" === b;
                                return 1 === d && 0 === e
                                    ? function (a) {
                                          return !!a.parentNode;
                                      }
                                    : function (b, c, i) {
                                          var j,
                                              k,
                                              l,
                                              m,
                                              n,
                                              o,
                                              p = f !== g ? "nextSibling" : "previousSibling",
                                              q = b.parentNode,
                                              r = h && b.nodeName.toLowerCase(),
                                              s = !i && !h;
                                          if (q) {
                                              if (f) {
                                                  for (; p; ) {
                                                      for (l = b; (l = l[p]); ) if (h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType) return !1;
                                                      o = p = "only" === a && !o && "nextSibling";
                                                  }
                                                  return !0;
                                              }
                                              if (((o = [g ? q.firstChild : q.lastChild]), g && s)) {
                                                  for (k = q[N] || (q[N] = {}), j = k[a] || [], n = j[0] === P && j[1], m = j[0] === P && j[2], l = n && q.childNodes[n]; (l = (++n && l && l[p]) || (m = n = 0) || o.pop()); )
                                                      if (1 === l.nodeType && ++m && l === b) {
                                                          k[a] = [P, n, m];
                                                          break;
                                                      }
                                              } else if (s && (j = (b[N] || (b[N] = {}))[a]) && j[0] === P) m = j[1];
                                              else for (; (l = (++n && l && l[p]) || (m = n = 0) || o.pop()) && ((h ? l.nodeName.toLowerCase() !== r : 1 !== l.nodeType) || !++m || (s && ((l[N] || (l[N] = {}))[a] = [P, m]), l !== b)); );
                                              return (m -= e) === d || (m % d == 0 && m / d >= 0);
                                          }
                                      };
                            },
                            PSEUDO: function (a, c) {
                                var e,
                                    f = y.pseudos[a] || y.setFilters[a.toLowerCase()] || b.error("unsupported pseudo: " + a);
                                return f[N]
                                    ? f(c)
                                    : f.length > 1
                                    ? ((e = [a, a, "", c]),
                                      y.setFilters.hasOwnProperty(a.toLowerCase())
                                          ? d(function (a, b) {
                                                for (var d, e = f(a, c), g = e.length; g--; ) (d = ba.call(a, e[g])), (a[d] = !(b[d] = e[g]));
                                            })
                                          : function (a) {
                                                return f(a, 0, e);
                                            })
                                    : f;
                            },
                        },
                        pseudos: {
                            not: d(function (a) {
                                var b = [],
                                    c = [],
                                    e = B(a.replace(ia, "$1"));
                                return e[N]
                                    ? d(function (a, b, c, d) {
                                          for (var f, g = e(a, null, d, []), h = a.length; h--; ) (f = g[h]) && (a[h] = !(b[h] = f));
                                      })
                                    : function (a, d, f) {
                                          return (b[0] = a), e(b, null, f, c), !c.pop();
                                      };
                            }),
                            has: d(function (a) {
                                return function (c) {
                                    return b(a, c).length > 0;
                                };
                            }),
                            contains: d(function (a) {
                                return function (b) {
                                    return (b.textContent || b.innerText || z(b)).indexOf(a) > -1;
                                };
                            }),
                            lang: d(function (a) {
                                return (
                                    na.test(a || "") || b.error("unsupported lang: " + a),
                                    (a = a.replace(va, wa).toLowerCase()),
                                    function (b) {
                                        var c;
                                        do {
                                            if ((c = I ? b.lang : b.getAttribute("xml:lang") || b.getAttribute("lang"))) return (c = c.toLowerCase()) === a || 0 === c.indexOf(a + "-");
                                        } while ((b = b.parentNode) && 1 === b.nodeType);
                                        return !1;
                                    }
                                );
                            }),
                            target: function (b) {
                                var c = a.location && a.location.hash;
                                return c && c.slice(1) === b.id;
                            },
                            root: function (a) {
                                return a === H;
                            },
                            focus: function (a) {
                                return a === G.activeElement && (!G.hasFocus || G.hasFocus()) && !!(a.type || a.href || ~a.tabIndex);
                            },
                            enabled: function (a) {
                                return !1 === a.disabled;
                            },
                            disabled: function (a) {
                                return !0 === a.disabled;
                            },
                            checked: function (a) {
                                var b = a.nodeName.toLowerCase();
                                return ("input" === b && !!a.checked) || ("option" === b && !!a.selected);
                            },
                            selected: function (a) {
                                return a.parentNode && a.parentNode.selectedIndex, !0 === a.selected;
                            },
                            empty: function (a) {
                                for (a = a.firstChild; a; a = a.nextSibling) if (a.nodeType < 6) return !1;
                                return !0;
                            },
                            parent: function (a) {
                                return !y.pseudos.empty(a);
                            },
                            header: function (a) {
                                return qa.test(a.nodeName);
                            },
                            input: function (a) {
                                return pa.test(a.nodeName);
                            },
                            button: function (a) {
                                var b = a.nodeName.toLowerCase();
                                return ("input" === b && "button" === a.type) || "button" === b;
                            },
                            text: function (a) {
                                var b;
                                return "input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (b = a.getAttribute("type")) || "text" === b.toLowerCase());
                            },
                            first: j(function () {
                                return [0];
                            }),
                            last: j(function (a, b) {
                                return [b - 1];
                            }),
                            eq: j(function (a, b, c) {
                                return [c < 0 ? c + b : c];
                            }),
                            even: j(function (a, b) {
                                for (var c = 0; c < b; c += 2) a.push(c);
                                return a;
                            }),
                            odd: j(function (a, b) {
                                for (var c = 1; c < b; c += 2) a.push(c);
                                return a;
                            }),
                            lt: j(function (a, b, c) {
                                for (var d = c < 0 ? c + b : c; --d >= 0; ) a.push(d);
                                return a;
                            }),
                            gt: j(function (a, b, c) {
                                for (var d = c < 0 ? c + b : c; ++d < b; ) a.push(d);
                                return a;
                            }),
                        },
                    }),
                    (y.pseudos.nth = y.pseudos.eq);
                for (w in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }) y.pseudos[w] = h(w);
                for (w in { submit: !0, reset: !0 }) y.pseudos[w] = i(w);
                return (
                    (l.prototype = y.filters = y.pseudos),
                    (y.setFilters = new l()),
                    (B = b.compile = function (a, b) {
                        var c,
                            d = [],
                            e = [],
                            f = T[a + " "];
                        if (!f) {
                            for (b || (b = m(a)), c = b.length; c--; ) (f = s(b[c])), f[N] ? d.push(f) : e.push(f);
                            f = T(a, t(e, d));
                        }
                        return f;
                    }),
                    (x.sortStable = N.split("").sort(U).join("") === N),
                    (x.detectDuplicates = !!E),
                    F(),
                    (x.sortDetached = e(function (a) {
                        return 1 & a.compareDocumentPosition(G.createElement("div"));
                    })),
                    e(function (a) {
                        return (a.innerHTML = "<a href='#'></a>"), "#" === a.firstChild.getAttribute("href");
                    }) ||
                        f("type|href|height|width", function (a, b, c) {
                            if (!c) return a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2);
                        }),
                    (x.attributes &&
                        e(function (a) {
                            return (a.innerHTML = "<input/>"), a.firstChild.setAttribute("value", ""), "" === a.firstChild.getAttribute("value");
                        })) ||
                        f("value", function (a, b, c) {
                            if (!c && "input" === a.nodeName.toLowerCase()) return a.defaultValue;
                        }),
                    e(function (a) {
                        return null == a.getAttribute("disabled");
                    }) ||
                        f(ca, function (a, b, c) {
                            var d;
                            if (!c) return !0 === a[b] ? b.toLowerCase() : (d = a.getAttributeNode(b)) && d.specified ? d.value : null;
                        }),
                    b
                );
            })(a)),
            (fa.find = ka),
            (fa.expr = ka.selectors),
            (fa.expr[":"] = fa.expr.pseudos),
            (fa.unique = ka.uniqueSort),
            (fa.text = ka.getText),
            (fa.isXMLDoc = ka.isXML),
            (fa.contains = ka.contains);
        var Ga = fa.expr.match.needsContext,
            Ha = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
            Ia = /^.[^:#\[\.,]*$/;
        (fa.filter = function (a, b, c) {
            var d = b[0];
            return (
                c && (a = ":not(" + a + ")"),
                1 === b.length && 1 === d.nodeType
                    ? fa.find.matchesSelector(d, a)
                        ? [d]
                        : []
                    : fa.find.matches(
                          a,
                          fa.grep(b, function (a) {
                              return 1 === a.nodeType;
                          })
                      )
            );
        }),
            fa.fn.extend({
                find: function (a) {
                    var b,
                        c = [],
                        d = this,
                        e = d.length;
                    if ("string" != typeof a)
                        return this.pushStack(
                            fa(a).filter(function () {
                                for (b = 0; b < e; b++) if (fa.contains(d[b], this)) return !0;
                            })
                        );
                    for (b = 0; b < e; b++) fa.find(a, d[b], c);
                    return (c = this.pushStack(e > 1 ? fa.unique(c) : c)), (c.selector = this.selector ? this.selector + " " + a : a), c;
                },
                filter: function (a) {
                    return this.pushStack(d(this, a || [], !1));
                },
                not: function (a) {
                    return this.pushStack(d(this, a || [], !0));
                },
                is: function (a) {
                    return !!d(this, "string" == typeof a && Ga.test(a) ? fa(a) : a || [], !1).length;
                },
            });
        var Ja,
            Ka = a.document,
            La = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/;
        ((fa.fn.init = function (a, b) {
            var c, d;
            if (!a) return this;
            if ("string" == typeof a) {
                if ((c = "<" === a.charAt(0) && ">" === a.charAt(a.length - 1) && a.length >= 3 ? [null, a, null] : La.exec(a)) && (c[1] || !b)) {
                    if (c[1]) {
                        if (((b = b instanceof fa ? b[0] : b), fa.merge(this, fa.parseHTML(c[1], b && b.nodeType ? b.ownerDocument || b : Ka, !0)), Ha.test(c[1]) && fa.isPlainObject(b)))
                            for (c in b) fa.isFunction(this[c]) ? this[c](b[c]) : this.attr(c, b[c]);
                        return this;
                    }
                    if ((d = Ka.getElementById(c[2])) && d.parentNode) {
                        if (d.id !== c[2]) return Ja.find(a);
                        (this.length = 1), (this[0] = d);
                    }
                    return (this.context = Ka), (this.selector = a), this;
                }
                return !b || b.jquery ? (b || Ja).find(a) : this.constructor(b).find(a);
            }
            return a.nodeType
                ? ((this.context = this[0] = a), (this.length = 1), this)
                : fa.isFunction(a)
                ? void 0 !== Ja.ready
                    ? Ja.ready(a)
                    : a(fa)
                : (void 0 !== a.selector && ((this.selector = a.selector), (this.context = a.context)), fa.makeArray(a, this));
        }).prototype = fa.fn),
            (Ja = fa(Ka)),
            (la = /^(?:parents|prev(?:Until|All))/),
            (ma = { children: !0, contents: !0, next: !0, prev: !0 }),
            fa.extend({
                dir: function (a, b, c) {
                    for (var d = [], e = a[b]; e && 9 !== e.nodeType && (void 0 === c || 1 !== e.nodeType || !fa(e).is(c)); ) 1 === e.nodeType && d.push(e), (e = e[b]);
                    return d;
                },
                sibling: function (a, b) {
                    for (var c = []; a; a = a.nextSibling) 1 === a.nodeType && a !== b && c.push(a);
                    return c;
                },
            }),
            fa.fn.extend({
                has: function (a) {
                    var b,
                        c = fa(a, this),
                        d = c.length;
                    return this.filter(function () {
                        for (b = 0; b < d; b++) if (fa.contains(this, c[b])) return !0;
                    });
                },
                closest: function (a, b) {
                    for (var c, d = 0, e = this.length, f = [], g = Ga.test(a) || "string" != typeof a ? fa(a, b || this.context) : 0; d < e; d++)
                        for (c = this[d]; c && c !== b; c = c.parentNode)
                            if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && fa.find.matchesSelector(c, a))) {
                                f.push(c);
                                break;
                            }
                    return this.pushStack(f.length > 1 ? fa.unique(f) : f);
                },
                index: function (a) {
                    return a ? ("string" == typeof a ? fa.inArray(this[0], fa(a)) : fa.inArray(a.jquery ? a[0] : a, this)) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1;
                },
                add: function (a, b) {
                    return this.pushStack(fa.unique(fa.merge(this.get(), fa(a, b))));
                },
                addBack: function (a) {
                    return this.add(null == a ? this.prevObject : this.prevObject.filter(a));
                },
            }),
            fa.each(
                {
                    parent: function (a) {
                        var b = a.parentNode;
                        return b && 11 !== b.nodeType ? b : null;
                    },
                    parents: function (a) {
                        return fa.dir(a, "parentNode");
                    },
                    parentsUntil: function (a, b, c) {
                        return fa.dir(a, "parentNode", c);
                    },
                    next: function (a) {
                        return e(a, "nextSibling");
                    },
                    prev: function (a) {
                        return e(a, "previousSibling");
                    },
                    nextAll: function (a) {
                        return fa.dir(a, "nextSibling");
                    },
                    prevAll: function (a) {
                        return fa.dir(a, "previousSibling");
                    },
                    nextUntil: function (a, b, c) {
                        return fa.dir(a, "nextSibling", c);
                    },
                    prevUntil: function (a, b, c) {
                        return fa.dir(a, "previousSibling", c);
                    },
                    siblings: function (a) {
                        return fa.sibling((a.parentNode || {}).firstChild, a);
                    },
                    children: function (a) {
                        return fa.sibling(a.firstChild);
                    },
                    contents: function (a) {
                        return fa.nodeName(a, "iframe") ? a.contentDocument || a.contentWindow.document : fa.merge([], a.childNodes);
                    },
                },
                function (a, b) {
                    fa.fn[a] = function (c, d) {
                        var e = fa.map(this, b, c);
                        return "Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = fa.filter(d, e)), this.length > 1 && (ma[a] || (e = fa.unique(e)), la.test(a) && (e = e.reverse())), this.pushStack(e);
                    };
                }
            ),
            (na = /\S+/g),
            (oa = {}),
            (fa.Callbacks = function (a) {
                a = "string" == typeof a ? oa[a] || f(a) : fa.extend({}, a);
                var b,
                    c,
                    d,
                    e,
                    g,
                    h,
                    i = [],
                    j = !a.once && [],
                    k = function (f) {
                        for (c = a.memory && f, d = !0, g = h || 0, h = 0, e = i.length, b = !0; i && g < e; g++)
                            if (!1 === i[g].apply(f[0], f[1]) && a.stopOnFalse) {
                                c = !1;
                                break;
                            }
                        (b = !1), i && (j ? j.length && k(j.shift()) : c ? (i = []) : l.disable());
                    },
                    l = {
                        add: function () {
                            if (i) {
                                var d = i.length;
                                !(function b(c) {
                                    fa.each(c, function (c, d) {
                                        var e = fa.type(d);
                                        "function" === e ? (a.unique && l.has(d)) || i.push(d) : d && d.length && "string" !== e && b(d);
                                    });
                                })(arguments),
                                    b ? (e = i.length) : c && ((h = d), k(c));
                            }
                            return this;
                        },
                        remove: function () {
                            return (
                                i &&
                                    fa.each(arguments, function (a, c) {
                                        for (var d; (d = fa.inArray(c, i, d)) > -1; ) i.splice(d, 1), b && (d <= e && e--, d <= g && g--);
                                    }),
                                this
                            );
                        },
                        has: function (a) {
                            return a ? fa.inArray(a, i) > -1 : !(!i || !i.length);
                        },
                        empty: function () {
                            return (i = []), (e = 0), this;
                        },
                        disable: function () {
                            return (i = j = c = void 0), this;
                        },
                        disabled: function () {
                            return !i;
                        },
                        lock: function () {
                            return (j = void 0), c || l.disable(), this;
                        },
                        locked: function () {
                            return !j;
                        },
                        fireWith: function (a, c) {
                            return i && (!d || j) && ((c = c || []), (c = [a, c.slice ? c.slice() : c]), b ? j.push(c) : k(c)), this;
                        },
                        fire: function () {
                            return l.fireWith(this, arguments), this;
                        },
                        fired: function () {
                            return !!d;
                        },
                    };
                return l;
            }),
            fa.extend({
                Deferred: function (a) {
                    var b = [
                            ["resolve", "done", fa.Callbacks("once memory"), "resolved"],
                            ["reject", "fail", fa.Callbacks("once memory"), "rejected"],
                            ["notify", "progress", fa.Callbacks("memory")],
                        ],
                        c = "pending",
                        d = {
                            state: function () {
                                return c;
                            },
                            always: function () {
                                return e.done(arguments).fail(arguments), this;
                            },
                            then: function () {
                                var a = arguments;
                                return fa
                                    .Deferred(function (c) {
                                        fa.each(b, function (b, f) {
                                            var g = fa.isFunction(a[b]) && a[b];
                                            e[f[1]](function () {
                                                var a = g && g.apply(this, arguments);
                                                a && fa.isFunction(a.promise) ? a.promise().done(c.resolve).fail(c.reject).progress(c.notify) : c[f[0] + "With"](this === d ? c.promise() : this, g ? [a] : arguments);
                                            });
                                        }),
                                            (a = null);
                                    })
                                    .promise();
                            },
                            promise: function (a) {
                                return null != a ? fa.extend(a, d) : d;
                            },
                        },
                        e = {};
                    return (
                        (d.pipe = d.then),
                        fa.each(b, function (a, f) {
                            var g = f[2],
                                h = f[3];
                            (d[f[1]] = g.add),
                                h &&
                                    g.add(
                                        function () {
                                            c = h;
                                        },
                                        b[1 ^ a][2].disable,
                                        b[2][2].lock
                                    ),
                                (e[f[0]] = function () {
                                    return e[f[0] + "With"](this === e ? d : this, arguments), this;
                                }),
                                (e[f[0] + "With"] = g.fireWith);
                        }),
                        d.promise(e),
                        a && a.call(e, e),
                        e
                    );
                },
                when: function (a) {
                    var h,
                        i,
                        j,
                        b = 0,
                        c = X.call(arguments),
                        d = c.length,
                        e = 1 !== d || (a && fa.isFunction(a.promise)) ? d : 0,
                        f = 1 === e ? a : fa.Deferred(),
                        g = function (a, b, c) {
                            return function (d) {
                                (b[a] = this), (c[a] = arguments.length > 1 ? X.call(arguments) : d), c === h ? f.notifyWith(b, c) : --e || f.resolveWith(b, c);
                            };
                        };
                    if (d > 1) for (h = new Array(d), i = new Array(d), j = new Array(d); b < d; b++) c[b] && fa.isFunction(c[b].promise) ? c[b].promise().done(g(b, j, c)).fail(f.reject).progress(g(b, i, h)) : --e;
                    return e || f.resolveWith(j, c), f.promise();
                },
            }),
            (fa.fn.ready = function (a) {
                return fa.ready.promise().done(a), this;
            }),
            fa.extend({
                isReady: !1,
                readyWait: 1,
                holdReady: function (a) {
                    a ? fa.readyWait++ : fa.ready(!0);
                },
                ready: function (a) {
                    if (!0 === a ? !--fa.readyWait : !fa.isReady) {
                        if (!Ka.body) return setTimeout(fa.ready);
                        (fa.isReady = !0), (!0 !== a && --fa.readyWait > 0) || (pa.resolveWith(Ka, [fa]), fa.fn.trigger && fa(Ka).trigger("ready").off("ready"));
                    }
                },
            }),
            (fa.ready.promise = function (b) {
                if (!pa)
                    if (((pa = fa.Deferred()), "complete" === Ka.readyState)) setTimeout(fa.ready);
                    else if (Ka.addEventListener) Ka.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1);
                    else {
                        Ka.attachEvent("onreadystatechange", h), a.attachEvent("onload", h);
                        var c = !1;
                        try {
                            c = null == a.frameElement && Ka.documentElement;
                        } catch (a) {}
                        c &&
                            c.doScroll &&
                            (function a() {
                                if (!fa.isReady) {
                                    try {
                                        c.doScroll("left");
                                    } catch (b) {
                                        return setTimeout(a, 50);
                                    }
                                    g(), fa.ready();
                                }
                            })();
                    }
                return pa.promise(b);
            }),
            (qa = "undefined");
        for (ra in fa(da)) break;
        (da.ownLast = "0" !== ra),
            (da.inlineBlockNeedsLayout = !1),
            fa(function () {
                var a,
                    b,
                    c = Ka.getElementsByTagName("body")[0];
                c &&
                    ((a = Ka.createElement("div")),
                    (a.style.cssText = "border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px"),
                    (b = Ka.createElement("div")),
                    c.appendChild(a).appendChild(b),
                    typeof b.style.zoom !== qa && ((b.style.cssText = "border:0;margin:0;width:1px;padding:1px;display:inline;zoom:1"), (da.inlineBlockNeedsLayout = 3 === b.offsetWidth) && (c.style.zoom = 1)),
                    c.removeChild(a),
                    (a = b = null));
            }),
            (function () {
                var a = Ka.createElement("div");
                if (null == da.deleteExpando) {
                    da.deleteExpando = !0;
                    try {
                        delete a.test;
                    } catch (a) {
                        da.deleteExpando = !1;
                    }
                }
                a = null;
            })(),
            (fa.acceptData = function (a) {
                var b = fa.noData[(a.nodeName + " ").toLowerCase()],
                    c = +a.nodeType || 1;
                return (1 === c || 9 === c) && (!b || (!0 !== b && a.getAttribute("classid") === b));
            }),
            (sa = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/),
            (ta = /([A-Z])/g),
            fa.extend({
                cache: {},
                noData: { "applet ": !0, "embed ": !0, "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" },
                hasData: function (a) {
                    return !!(a = a.nodeType ? fa.cache[a[fa.expando]] : a[fa.expando]) && !j(a);
                },
                data: function (a, b, c) {
                    return k(a, b, c);
                },
                removeData: function (a, b) {
                    return l(a, b);
                },
                _data: function (a, b, c) {
                    return k(a, b, c, !0);
                },
                _removeData: function (a, b) {
                    return l(a, b, !0);
                },
            }),
            fa.fn.extend({
                data: function (a, b) {
                    var c,
                        d,
                        e,
                        f = this[0],
                        g = f && f.attributes;
                    if (void 0 === a) {
                        if (this.length && ((e = fa.data(f)), 1 === f.nodeType && !fa._data(f, "parsedAttrs"))) {
                            for (c = g.length; c--; ) (d = g[c].name), 0 === d.indexOf("data-") && ((d = fa.camelCase(d.slice(5))), i(f, d, e[d]));
                            fa._data(f, "parsedAttrs", !0);
                        }
                        return e;
                    }
                    return "object" == typeof a
                        ? this.each(function () {
                              fa.data(this, a);
                          })
                        : arguments.length > 1
                        ? this.each(function () {
                              fa.data(this, a, b);
                          })
                        : f
                        ? i(f, a, fa.data(f, a))
                        : void 0;
                },
                removeData: function (a) {
                    return this.each(function () {
                        fa.removeData(this, a);
                    });
                },
            }),
            fa.extend({
                queue: function (a, b, c) {
                    var d;
                    if (a) return (b = (b || "fx") + "queue"), (d = fa._data(a, b)), c && (!d || fa.isArray(c) ? (d = fa._data(a, b, fa.makeArray(c))) : d.push(c)), d || [];
                },
                dequeue: function (a, b) {
                    b = b || "fx";
                    var c = fa.queue(a, b),
                        d = c.length,
                        e = c.shift(),
                        f = fa._queueHooks(a, b),
                        g = function () {
                            fa.dequeue(a, b);
                        };
                    "inprogress" === e && ((e = c.shift()), d--), e && ("fx" === b && c.unshift("inprogress"), delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire();
                },
                _queueHooks: function (a, b) {
                    var c = b + "queueHooks";
                    return (
                        fa._data(a, c) ||
                        fa._data(a, c, {
                            empty: fa.Callbacks("once memory").add(function () {
                                fa._removeData(a, b + "queue"), fa._removeData(a, c);
                            }),
                        })
                    );
                },
            }),
            fa.fn.extend({
                queue: function (a, b) {
                    var c = 2;
                    return (
                        "string" != typeof a && ((b = a), (a = "fx"), c--),
                        arguments.length < c
                            ? fa.queue(this[0], a)
                            : void 0 === b
                            ? this
                            : this.each(function () {
                                  var c = fa.queue(this, a, b);
                                  fa._queueHooks(this, a), "fx" === a && "inprogress" !== c[0] && fa.dequeue(this, a);
                              })
                    );
                },
                dequeue: function (a) {
                    return this.each(function () {
                        fa.dequeue(this, a);
                    });
                },
                clearQueue: function (a) {
                    return this.queue(a || "fx", []);
                },
                promise: function (a, b) {
                    var c,
                        d = 1,
                        e = fa.Deferred(),
                        f = this,
                        g = this.length,
                        h = function () {
                            --d || e.resolveWith(f, [f]);
                        };
                    for ("string" != typeof a && ((b = a), (a = void 0)), a = a || "fx"; g--; ) (c = fa._data(f[g], a + "queueHooks")) && c.empty && (d++, c.empty.add(h));
                    return h(), e.promise(b);
                },
            });
        var Na = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
            Oa = ["Top", "Right", "Bottom", "Left"],
            Pa = function (a, b) {
                return (a = b || a), "none" === fa.css(a, "display") || !fa.contains(a.ownerDocument, a);
            },
            Qa = (fa.access = function (a, b, c, d, e, f, g) {
                var h = 0,
                    i = a.length,
                    j = null == c;
                if ("object" === fa.type(c)) {
                    e = !0;
                    for (h in c) fa.access(a, b, h, c[h], !0, f, g);
                } else if (
                    void 0 !== d &&
                    ((e = !0),
                    fa.isFunction(d) || (g = !0),
                    j &&
                        (g
                            ? (b.call(a, d), (b = null))
                            : ((j = b),
                              (b = function (a, b, c) {
                                  return j.call(fa(a), c);
                              }))),
                    b)
                )
                    for (; h < i; h++) b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)));
                return e ? a : j ? b.call(a) : i ? b(a[0], c) : f;
            }),
            Ra = /^(?:checkbox|radio)$/i;
        (function () {
            var a = Ka.createDocumentFragment(),
                b = Ka.createElement("div"),
                c = Ka.createElement("input");
            if (
                (b.setAttribute("className", "t"),
                (b.innerHTML = "  <link/><table></table><a href='/a'>a</a>"),
                (da.leadingWhitespace = 3 === b.firstChild.nodeType),
                (da.tbody = !b.getElementsByTagName("tbody").length),
                (da.htmlSerialize = !!b.getElementsByTagName("link").length),
                (da.html5Clone = "<:nav></:nav>" !== Ka.createElement("nav").cloneNode(!0).outerHTML),
                (c.type = "checkbox"),
                (c.checked = !0),
                a.appendChild(c),
                (da.appendChecked = c.checked),
                (b.innerHTML = "<textarea>x</textarea>"),
                (da.noCloneChecked = !!b.cloneNode(!0).lastChild.defaultValue),
                a.appendChild(b),
                (b.innerHTML = "<input type='radio' checked='checked' name='t'/>"),
                (da.checkClone = b.cloneNode(!0).cloneNode(!0).lastChild.checked),
                (da.noCloneEvent = !0),
                b.attachEvent &&
                    (b.attachEvent("onclick", function () {
                        da.noCloneEvent = !1;
                    }),
                    b.cloneNode(!0).click()),
                null == da.deleteExpando)
            ) {
                da.deleteExpando = !0;
                try {
                    delete b.test;
                } catch (a) {
                    da.deleteExpando = !1;
                }
            }
            a = b = c = null;
        })(),
            (function () {
                var b,
                    c,
                    d = Ka.createElement("div");
                for (b in { submit: !0, change: !0, focusin: !0 }) (c = "on" + b), (da[b + "Bubbles"] = c in a) || (d.setAttribute(c, "t"), (da[b + "Bubbles"] = !1 === d.attributes[c].expando));
                d = null;
            })();
        var Sa = /^(?:input|select|textarea)$/i,
            Ta = /^key/,
            Ua = /^(?:mouse|contextmenu)|click/,
            Va = /^(?:focusinfocus|focusoutblur)$/,
            Wa = /^([^.]*)(?:\.(.+)|)$/;
        (fa.event = {
            global: {},
            add: function (a, b, c, d, e) {
                var f,
                    g,
                    h,
                    i,
                    j,
                    k,
                    l,
                    m,
                    n,
                    o,
                    p,
                    q = fa._data(a);
                if (q) {
                    for (
                        c.handler && ((i = c), (c = i.handler), (e = i.selector)),
                            c.guid || (c.guid = fa.guid++),
                            (g = q.events) || (g = q.events = {}),
                            (k = q.handle) ||
                                ((k = q.handle = function (a) {
                                    return typeof fa === qa || (a && fa.event.triggered === a.type) ? void 0 : fa.event.dispatch.apply(k.elem, arguments);
                                }),
                                (k.elem = a)),
                            b = (b || "").match(na) || [""],
                            h = b.length;
                        h--;

                    )
                        (f = Wa.exec(b[h]) || []),
                            (n = p = f[1]),
                            (o = (f[2] || "").split(".").sort()),
                            n &&
                                ((j = fa.event.special[n] || {}),
                                (n = (e ? j.delegateType : j.bindType) || n),
                                (j = fa.event.special[n] || {}),
                                (l = fa.extend({ type: n, origType: p, data: d, handler: c, guid: c.guid, selector: e, needsContext: e && fa.expr.match.needsContext.test(e), namespace: o.join(".") }, i)),
                                (m = g[n]) || ((m = g[n] = []), (m.delegateCount = 0), (j.setup && !1 !== j.setup.call(a, d, o, k)) || (a.addEventListener ? a.addEventListener(n, k, !1) : a.attachEvent && a.attachEvent("on" + n, k))),
                                j.add && (j.add.call(a, l), l.handler.guid || (l.handler.guid = c.guid)),
                                e ? m.splice(m.delegateCount++, 0, l) : m.push(l),
                                (fa.event.global[n] = !0));
                    a = null;
                }
            },
            remove: function (a, b, c, d, e) {
                var f,
                    g,
                    h,
                    i,
                    j,
                    k,
                    l,
                    m,
                    n,
                    o,
                    p,
                    q = fa.hasData(a) && fa._data(a);
                if (q && (k = q.events)) {
                    for (b = (b || "").match(na) || [""], j = b.length; j--; )
                        if (((h = Wa.exec(b[j]) || []), (n = p = h[1]), (o = (h[2] || "").split(".").sort()), n)) {
                            for (l = fa.event.special[n] || {}, n = (d ? l.delegateType : l.bindType) || n, m = k[n] || [], h = h[2] && new RegExp("(^|\\.)" + o.join("\\.(?:.*\\.|)") + "(\\.|$)"), i = f = m.length; f--; )
                                (g = m[f]),
                                    (e || p === g.origType) &&
                                        (!c || c.guid === g.guid) &&
                                        (!h || h.test(g.namespace)) &&
                                        (!d || d === g.selector || ("**" === d && g.selector)) &&
                                        (m.splice(f, 1), g.selector && m.delegateCount--, l.remove && l.remove.call(a, g));
                            i && !m.length && ((l.teardown && !1 !== l.teardown.call(a, o, q.handle)) || fa.removeEvent(a, n, q.handle), delete k[n]);
                        } else for (n in k) fa.event.remove(a, n + b[j], c, d, !0);
                    fa.isEmptyObject(k) && (delete q.handle, fa._removeData(a, "events"));
                }
            },
            trigger: function (b, c, d, e) {
                var f,
                    g,
                    h,
                    i,
                    j,
                    k,
                    l,
                    m = [d || Ka],
                    n = ba.call(b, "type") ? b.type : b,
                    o = ba.call(b, "namespace") ? b.namespace.split(".") : [];
                if (
                    ((h = k = d = d || Ka),
                    3 !== d.nodeType &&
                        8 !== d.nodeType &&
                        !Va.test(n + fa.event.triggered) &&
                        (n.indexOf(".") >= 0 && ((o = n.split(".")), (n = o.shift()), o.sort()),
                        (g = n.indexOf(":") < 0 && "on" + n),
                        (b = b[fa.expando] ? b : new fa.Event(n, "object" == typeof b && b)),
                        (b.isTrigger = e ? 2 : 3),
                        (b.namespace = o.join(".")),
                        (b.namespace_re = b.namespace ? new RegExp("(^|\\.)" + o.join("\\.(?:.*\\.|)") + "(\\.|$)") : null),
                        (b.result = void 0),
                        b.target || (b.target = d),
                        (c = null == c ? [b] : fa.makeArray(c, [b])),
                        (j = fa.event.special[n] || {}),
                        e || !j.trigger || !1 !== j.trigger.apply(d, c)))
                ) {
                    if (!e && !j.noBubble && !fa.isWindow(d)) {
                        for (i = j.delegateType || n, Va.test(i + n) || (h = h.parentNode); h; h = h.parentNode) m.push(h), (k = h);
                        k === (d.ownerDocument || Ka) && m.push(k.defaultView || k.parentWindow || a);
                    }
                    for (l = 0; (h = m[l++]) && !b.isPropagationStopped(); )
                        (b.type = l > 1 ? i : j.bindType || n),
                            (f = (fa._data(h, "events") || {})[b.type] && fa._data(h, "handle")),
                            f && f.apply(h, c),
                            (f = g && h[g]) && f.apply && fa.acceptData(h) && ((b.result = f.apply(h, c)), !1 === b.result && b.preventDefault());
                    if (((b.type = n), !e && !b.isDefaultPrevented() && (!j._default || !1 === j._default.apply(m.pop(), c)) && fa.acceptData(d) && g && d[n] && !fa.isWindow(d))) {
                        (k = d[g]), k && (d[g] = null), (fa.event.triggered = n);
                        try {
                            d[n]();
                        } catch (a) {}
                        (fa.event.triggered = void 0), k && (d[g] = k);
                    }
                    return b.result;
                }
            },
            dispatch: function (a) {
                a = fa.event.fix(a);
                var b,
                    c,
                    d,
                    e,
                    f,
                    g = [],
                    h = X.call(arguments),
                    i = (fa._data(this, "events") || {})[a.type] || [],
                    j = fa.event.special[a.type] || {};
                if (((h[0] = a), (a.delegateTarget = this), !j.preDispatch || !1 !== j.preDispatch.call(this, a))) {
                    for (g = fa.event.handlers.call(this, a, i), b = 0; (e = g[b++]) && !a.isPropagationStopped(); )
                        for (a.currentTarget = e.elem, f = 0; (d = e.handlers[f++]) && !a.isImmediatePropagationStopped(); )
                            (!a.namespace_re || a.namespace_re.test(d.namespace)) &&
                                ((a.handleObj = d), (a.data = d.data), void 0 !== (c = ((fa.event.special[d.origType] || {}).handle || d.handler).apply(e.elem, h)) && !1 === (a.result = c) && (a.preventDefault(), a.stopPropagation()));
                    return j.postDispatch && j.postDispatch.call(this, a), a.result;
                }
            },
            handlers: function (a, b) {
                var c,
                    d,
                    e,
                    f,
                    g = [],
                    h = b.delegateCount,
                    i = a.target;
                if (h && i.nodeType && (!a.button || "click" !== a.type))
                    for (; i != this; i = i.parentNode || this)
                        if (1 === i.nodeType && (!0 !== i.disabled || "click" !== a.type)) {
                            for (e = [], f = 0; f < h; f++) (d = b[f]), (c = d.selector + " "), void 0 === e[c] && (e[c] = d.needsContext ? fa(c, this).index(i) >= 0 : fa.find(c, this, null, [i]).length), e[c] && e.push(d);
                            e.length && g.push({ elem: i, handlers: e });
                        }
                return h < b.length && g.push({ elem: this, handlers: b.slice(h) }), g;
            },
            fix: function (a) {
                if (a[fa.expando]) return a;
                var b,
                    c,
                    d,
                    e = a.type,
                    f = a,
                    g = this.fixHooks[e];
                for (g || (this.fixHooks[e] = g = Ua.test(e) ? this.mouseHooks : Ta.test(e) ? this.keyHooks : {}), d = g.props ? this.props.concat(g.props) : this.props, a = new fa.Event(f), b = d.length; b--; ) (c = d[b]), (a[c] = f[c]);
                return a.target || (a.target = f.srcElement || Ka), 3 === a.target.nodeType && (a.target = a.target.parentNode), (a.metaKey = !!a.metaKey), g.filter ? g.filter(a, f) : a;
            },
            props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
            fixHooks: {},
            keyHooks: {
                props: "char charCode key keyCode".split(" "),
                filter: function (a, b) {
                    return null == a.which && (a.which = null != b.charCode ? b.charCode : b.keyCode), a;
                },
            },
            mouseHooks: {
                props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
                filter: function (a, b) {
                    var c,
                        d,
                        e,
                        f = b.button,
                        g = b.fromElement;
                    return (
                        null == a.pageX &&
                            null != b.clientX &&
                            ((d = a.target.ownerDocument || Ka),
                            (e = d.documentElement),
                            (c = d.body),
                            (a.pageX = b.clientX + ((e && e.scrollLeft) || (c && c.scrollLeft) || 0) - ((e && e.clientLeft) || (c && c.clientLeft) || 0)),
                            (a.pageY = b.clientY + ((e && e.scrollTop) || (c && c.scrollTop) || 0) - ((e && e.clientTop) || (c && c.clientTop) || 0))),
                        !a.relatedTarget && g && (a.relatedTarget = g === a.target ? b.toElement : g),
                        a.which || void 0 === f || (a.which = 1 & f ? 1 : 2 & f ? 3 : 4 & f ? 2 : 0),
                        a
                    );
                },
            },
            special: {
                load: { noBubble: !0 },
                focus: {
                    trigger: function () {
                        if (this !== o() && this.focus)
                            try {
                                return this.focus(), !1;
                            } catch (a) {}
                    },
                    delegateType: "focusin",
                },
                blur: {
                    trigger: function () {
                        if (this === o() && this.blur) return this.blur(), !1;
                    },
                    delegateType: "focusout",
                },
                click: {
                    trigger: function () {
                        if (fa.nodeName(this, "input") && "checkbox" === this.type && this.click) return this.click(), !1;
                    },
                    _default: function (a) {
                        return fa.nodeName(a.target, "a");
                    },
                },
                beforeunload: {
                    postDispatch: function (a) {
                        void 0 !== a.result && (a.originalEvent.returnValue = a.result);
                    },
                },
            },
            simulate: function (a, b, c, d) {
                var e = fa.extend(new fa.Event(), c, { type: a, isSimulated: !0, originalEvent: {} });
                d ? fa.event.trigger(e, null, b) : fa.event.dispatch.call(b, e), e.isDefaultPrevented() && c.preventDefault();
            },
        }),
            (fa.removeEvent = Ka.removeEventListener
                ? function (a, b, c) {
                      a.removeEventListener && a.removeEventListener(b, c, !1);
                  }
                : function (a, b, c) {
                      var d = "on" + b;
                      a.detachEvent && (typeof a[d] === qa && (a[d] = null), a.detachEvent(d, c));
                  }),
            (fa.Event = function (a, b) {
                if (!(this instanceof fa.Event)) return new fa.Event(a, b);
                a && a.type
                    ? ((this.originalEvent = a), (this.type = a.type), (this.isDefaultPrevented = a.defaultPrevented || (void 0 === a.defaultPrevented && (!1 === a.returnValue || (a.getPreventDefault && a.getPreventDefault()))) ? m : n))
                    : (this.type = a),
                    b && fa.extend(this, b),
                    (this.timeStamp = (a && a.timeStamp) || fa.now()),
                    (this[fa.expando] = !0);
            }),
            (fa.Event.prototype = {
                isDefaultPrevented: n,
                isPropagationStopped: n,
                isImmediatePropagationStopped: n,
                preventDefault: function () {
                    var a = this.originalEvent;
                    (this.isDefaultPrevented = m), a && (a.preventDefault ? a.preventDefault() : (a.returnValue = !1));
                },
                stopPropagation: function () {
                    var a = this.originalEvent;
                    (this.isPropagationStopped = m), a && (a.stopPropagation && a.stopPropagation(), (a.cancelBubble = !0));
                },
                stopImmediatePropagation: function () {
                    (this.isImmediatePropagationStopped = m), this.stopPropagation();
                },
            }),
            fa.each({ mouseenter: "mouseover", mouseleave: "mouseout" }, function (a, b) {
                fa.event.special[a] = {
                    delegateType: b,
                    bindType: b,
                    handle: function (a) {
                        var c,
                            d = this,
                            e = a.relatedTarget,
                            f = a.handleObj;
                        return (e && (e === d || fa.contains(d, e))) || ((a.type = f.origType), (c = f.handler.apply(this, arguments)), (a.type = b)), c;
                    },
                };
            }),
            da.submitBubbles ||
                (fa.event.special.submit = {
                    setup: function () {
                        if (fa.nodeName(this, "form")) return !1;
                        fa.event.add(this, "click._submit keypress._submit", function (a) {
                            var b = a.target,
                                c = fa.nodeName(b, "input") || fa.nodeName(b, "button") ? b.form : void 0;
                            c &&
                                !fa._data(c, "submitBubbles") &&
                                (fa.event.add(c, "submit._submit", function (a) {
                                    a._submit_bubble = !0;
                                }),
                                fa._data(c, "submitBubbles", !0));
                        });
                    },
                    postDispatch: function (a) {
                        a._submit_bubble && (delete a._submit_bubble, this.parentNode && !a.isTrigger && fa.event.simulate("submit", this.parentNode, a, !0));
                    },
                    teardown: function () {
                        if (fa.nodeName(this, "form")) return !1;
                        fa.event.remove(this, "._submit");
                    },
                }),
            da.changeBubbles ||
                (fa.event.special.change = {
                    setup: function () {
                        if (Sa.test(this.nodeName))
                            return (
                                ("checkbox" === this.type || "radio" === this.type) &&
                                    (fa.event.add(this, "propertychange._change", function (a) {
                                        "checked" === a.originalEvent.propertyName && (this._just_changed = !0);
                                    }),
                                    fa.event.add(this, "click._change", function (a) {
                                        this._just_changed && !a.isTrigger && (this._just_changed = !1), fa.event.simulate("change", this, a, !0);
                                    })),
                                !1
                            );
                        fa.event.add(this, "beforeactivate._change", function (a) {
                            var b = a.target;
                            Sa.test(b.nodeName) &&
                                !fa._data(b, "changeBubbles") &&
                                (fa.event.add(b, "change._change", function (a) {
                                    !this.parentNode || a.isSimulated || a.isTrigger || fa.event.simulate("change", this.parentNode, a, !0);
                                }),
                                fa._data(b, "changeBubbles", !0));
                        });
                    },
                    handle: function (a) {
                        var b = a.target;
                        if (this !== b || a.isSimulated || a.isTrigger || ("radio" !== b.type && "checkbox" !== b.type)) return a.handleObj.handler.apply(this, arguments);
                    },
                    teardown: function () {
                        return fa.event.remove(this, "._change"), !Sa.test(this.nodeName);
                    },
                }),
            da.focusinBubbles ||
                fa.each({ focus: "focusin", blur: "focusout" }, function (a, b) {
                    var c = function (a) {
                        fa.event.simulate(b, a.target, fa.event.fix(a), !0);
                    };
                    fa.event.special[b] = {
                        setup: function () {
                            var d = this.ownerDocument || this,
                                e = fa._data(d, b);
                            e || d.addEventListener(a, c, !0), fa._data(d, b, (e || 0) + 1);
                        },
                        teardown: function () {
                            var d = this.ownerDocument || this,
                                e = fa._data(d, b) - 1;
                            e ? fa._data(d, b, e) : (d.removeEventListener(a, c, !0), fa._removeData(d, b));
                        },
                    };
                }),
            fa.fn.extend({
                on: function (a, b, c, d, e) {
                    var f, g;
                    if ("object" == typeof a) {
                        "string" != typeof b && ((c = c || b), (b = void 0));
                        for (f in a) this.on(f, b, c, a[f], e);
                        return this;
                    }
                    if ((null == c && null == d ? ((d = b), (c = b = void 0)) : null == d && ("string" == typeof b ? ((d = c), (c = void 0)) : ((d = c), (c = b), (b = void 0))), !1 === d)) d = n;
                    else if (!d) return this;
                    return (
                        1 === e &&
                            ((g = d),
                            (d = function (a) {
                                return fa().off(a), g.apply(this, arguments);
                            }),
                            (d.guid = g.guid || (g.guid = fa.guid++))),
                        this.each(function () {
                            fa.event.add(this, a, d, c, b);
                        })
                    );
                },
                one: function (a, b, c, d) {
                    return this.on(a, b, c, d, 1);
                },
                off: function (a, b, c) {
                    var d, e;
                    if (a && a.preventDefault && a.handleObj) return (d = a.handleObj), fa(a.delegateTarget).off(d.namespace ? d.origType + "." + d.namespace : d.origType, d.selector, d.handler), this;
                    if ("object" == typeof a) {
                        for (e in a) this.off(e, b, a[e]);
                        return this;
                    }
                    return (
                        (!1 === b || "function" == typeof b) && ((c = b), (b = void 0)),
                        !1 === c && (c = n),
                        this.each(function () {
                            fa.event.remove(this, a, c, b);
                        })
                    );
                },
                trigger: function (a, b) {
                    return this.each(function () {
                        fa.event.trigger(a, b, this);
                    });
                },
                triggerHandler: function (a, b) {
                    var c = this[0];
                    if (c) return fa.event.trigger(a, b, c, !0);
                },
            });
        var Xa = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
            Ya = / jQuery\d+="(?:null|\d+)"/g,
            Za = new RegExp("<(?:" + Xa + ")[\\s/>]", "i"),
            $a = /^\s+/,
            _a = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
            ab = /<([\w:]+)/,
            bb = /<tbody/i,
            cb = /<|&#?\w+;/,
            db = /<(?:script|style|link)/i,
            eb = /checked\s*(?:[^=]|=\s*.checked.)/i,
            fb = /^$|\/(?:java|ecma)script/i,
            gb = /^true\/(.*)/,
            hb = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
            ib = {
                option: [1, "<select multiple='multiple'>", "</select>"],
                legend: [1, "<fieldset>", "</fieldset>"],
                area: [1, "<map>", "</map>"],
                param: [1, "<object>", "</object>"],
                thead: [1, "<table>", "</table>"],
                tr: [2, "<table><tbody>", "</tbody></table>"],
                col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
                td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                _default: da.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"],
            },
            jb = p(Ka),
            kb = jb.appendChild(Ka.createElement("div"));
        (ib.optgroup = ib.option),
            (ib.tbody = ib.tfoot = ib.colgroup = ib.caption = ib.thead),
            (ib.th = ib.td),
            fa.extend({
                clone: function (a, b, c) {
                    var d,
                        e,
                        f,
                        g,
                        h,
                        i = fa.contains(a.ownerDocument, a);
                    if (
                        (da.html5Clone || fa.isXMLDoc(a) || !Za.test("<" + a.nodeName + ">") ? (f = a.cloneNode(!0)) : ((kb.innerHTML = a.outerHTML), kb.removeChild((f = kb.firstChild))),
                        !((da.noCloneEvent && da.noCloneChecked) || (1 !== a.nodeType && 11 !== a.nodeType) || fa.isXMLDoc(a)))
                    )
                        for (d = q(f), h = q(a), g = 0; null != (e = h[g]); ++g) d[g] && x(e, d[g]);
                    if (b)
                        if (c) for (h = h || q(a), d = d || q(f), g = 0; null != (e = h[g]); g++) w(e, d[g]);
                        else w(a, f);
                    return (d = q(f, "script")), d.length > 0 && v(d, !i && q(a, "script")), (d = h = e = null), f;
                },
                buildFragment: function (a, b, c, d) {
                    for (var e, f, g, h, i, j, k, l = a.length, m = p(b), n = [], o = 0; o < l; o++)
                        if ((f = a[o]) || 0 === f)
                            if ("object" === fa.type(f)) fa.merge(n, f.nodeType ? [f] : f);
                            else if (cb.test(f)) {
                                for (h = h || m.appendChild(b.createElement("div")), i = (ab.exec(f) || ["", ""])[1].toLowerCase(), k = ib[i] || ib._default, h.innerHTML = k[1] + f.replace(_a, "<$1></$2>") + k[2], e = k[0]; e--; )
                                    h = h.lastChild;
                                if ((!da.leadingWhitespace && $a.test(f) && n.push(b.createTextNode($a.exec(f)[0])), !da.tbody))
                                    for (f = "table" !== i || bb.test(f) ? ("<table>" !== k[1] || bb.test(f) ? 0 : h) : h.firstChild, e = f && f.childNodes.length; e--; )
                                        fa.nodeName((j = f.childNodes[e]), "tbody") && !j.childNodes.length && f.removeChild(j);
                                for (fa.merge(n, h.childNodes), h.textContent = ""; h.firstChild; ) h.removeChild(h.firstChild);
                                h = m.lastChild;
                            } else n.push(b.createTextNode(f));
                    for (h && m.removeChild(h), da.appendChecked || fa.grep(q(n, "input"), r), o = 0; (f = n[o++]); )
                        if ((!d || -1 === fa.inArray(f, d)) && ((g = fa.contains(f.ownerDocument, f)), (h = q(m.appendChild(f), "script")), g && v(h), c)) for (e = 0; (f = h[e++]); ) fb.test(f.type || "") && c.push(f);
                    return (h = null), m;
                },
                cleanData: function (a, b) {
                    for (var c, d, e, f, g = 0, h = fa.expando, i = fa.cache, j = da.deleteExpando, k = fa.event.special; null != (c = a[g]); g++)
                        if ((b || fa.acceptData(c)) && ((e = c[h]), (f = e && i[e]))) {
                            if (f.events) for (d in f.events) k[d] ? fa.event.remove(c, d) : fa.removeEvent(c, d, f.handle);
                            i[e] && (delete i[e], j ? delete c[h] : typeof c.removeAttribute !== qa ? c.removeAttribute(h) : (c[h] = null), W.push(e));
                        }
                },
            }),
            fa.fn.extend({
                text: function (a) {
                    return Qa(
                        this,
                        function (a) {
                            return void 0 === a ? fa.text(this) : this.empty().append(((this[0] && this[0].ownerDocument) || Ka).createTextNode(a));
                        },
                        null,
                        a,
                        arguments.length
                    );
                },
                append: function () {
                    return this.domManip(arguments, function (a) {
                        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                            s(this, a).appendChild(a);
                        }
                    });
                },
                prepend: function () {
                    return this.domManip(arguments, function (a) {
                        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                            var b = s(this, a);
                            b.insertBefore(a, b.firstChild);
                        }
                    });
                },
                before: function () {
                    return this.domManip(arguments, function (a) {
                        this.parentNode && this.parentNode.insertBefore(a, this);
                    });
                },
                after: function () {
                    return this.domManip(arguments, function (a) {
                        this.parentNode && this.parentNode.insertBefore(a, this.nextSibling);
                    });
                },
                remove: function (a, b) {
                    for (var c, d = a ? fa.filter(a, this) : this, e = 0; null != (c = d[e]); e++)
                        b || 1 !== c.nodeType || fa.cleanData(q(c)), c.parentNode && (b && fa.contains(c.ownerDocument, c) && v(q(c, "script")), c.parentNode.removeChild(c));
                    return this;
                },
                empty: function () {
                    for (var a, b = 0; null != (a = this[b]); b++) {
                        for (1 === a.nodeType && fa.cleanData(q(a, !1)); a.firstChild; ) a.removeChild(a.firstChild);
                        a.options && fa.nodeName(a, "select") && (a.options.length = 0);
                    }
                    return this;
                },
                clone: function (a, b) {
                    return (
                        (a = null != a && a),
                        (b = null == b ? a : b),
                        this.map(function () {
                            return fa.clone(this, a, b);
                        })
                    );
                },
                html: function (a) {
                    return Qa(
                        this,
                        function (a) {
                            var b = this[0] || {},
                                c = 0,
                                d = this.length;
                            if (void 0 === a) return 1 === b.nodeType ? b.innerHTML.replace(Ya, "") : void 0;
                            if ("string" == typeof a && !db.test(a) && (da.htmlSerialize || !Za.test(a)) && (da.leadingWhitespace || !$a.test(a)) && !ib[(ab.exec(a) || ["", ""])[1].toLowerCase()]) {
                                a = a.replace(_a, "<$1></$2>");
                                try {
                                    for (; c < d; c++) (b = this[c] || {}), 1 === b.nodeType && (fa.cleanData(q(b, !1)), (b.innerHTML = a));
                                    b = 0;
                                } catch (a) {}
                            }
                            b && this.empty().append(a);
                        },
                        null,
                        a,
                        arguments.length
                    );
                },
                replaceWith: function () {
                    var a = arguments[0];
                    return (
                        this.domManip(arguments, function (b) {
                            (a = this.parentNode), fa.cleanData(q(this)), a && a.replaceChild(b, this);
                        }),
                        a && (a.length || a.nodeType) ? this : this.remove()
                    );
                },
                detach: function (a) {
                    return this.remove(a, !0);
                },
                domManip: function (a, b) {
                    a = Y.apply([], a);
                    var c,
                        d,
                        e,
                        f,
                        g,
                        h,
                        i = 0,
                        j = this.length,
                        k = this,
                        l = j - 1,
                        m = a[0],
                        n = fa.isFunction(m);
                    if (n || (j > 1 && "string" == typeof m && !da.checkClone && eb.test(m)))
                        return this.each(function (c) {
                            var d = k.eq(c);
                            n && (a[0] = m.call(this, c, d.html())), d.domManip(a, b);
                        });
                    if (j && ((h = fa.buildFragment(a, this[0].ownerDocument, !1, this)), (c = h.firstChild), 1 === h.childNodes.length && (h = c), c)) {
                        for (f = fa.map(q(h, "script"), t), e = f.length; i < j; i++) (d = h), i !== l && ((d = fa.clone(d, !0, !0)), e && fa.merge(f, q(d, "script"))), b.call(this[i], d, i);
                        if (e)
                            for (g = f[f.length - 1].ownerDocument, fa.map(f, u), i = 0; i < e; i++)
                                (d = f[i]),
                                    fb.test(d.type || "") && !fa._data(d, "globalEval") && fa.contains(g, d) && (d.src ? fa._evalUrl && fa._evalUrl(d.src) : fa.globalEval((d.text || d.textContent || d.innerHTML || "").replace(hb, "")));
                        h = c = null;
                    }
                    return this;
                },
            }),
            fa.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function (a, b) {
                fa.fn[a] = function (a) {
                    for (var c, d = 0, e = [], f = fa(a), g = f.length - 1; d <= g; d++) (c = d === g ? this : this.clone(!0)), fa(f[d])[b](c), Z.apply(e, c.get());
                    return this.pushStack(e);
                };
            }),
            (va = {}),
            (function () {
                var a,
                    b,
                    c = Ka.createElement("div");
                (c.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>"),
                    (a = c.getElementsByTagName("a")[0]),
                    (a.style.cssText = "float:left;opacity:.5"),
                    (da.opacity = /^0.5/.test(a.style.opacity)),
                    (da.cssFloat = !!a.style.cssFloat),
                    (c.style.backgroundClip = "content-box"),
                    (c.cloneNode(!0).style.backgroundClip = ""),
                    (da.clearCloneStyle = "content-box" === c.style.backgroundClip),
                    (a = c = null),
                    (da.shrinkWrapBlocks = function () {
                        var a, c, e;
                        if (null == b) {
                            if (!(a = Ka.getElementsByTagName("body")[0])) return;
                            (c = Ka.createElement("div")),
                                (e = Ka.createElement("div")),
                                a.appendChild(c).appendChild(e),
                                (b = !1),
                                typeof e.style.zoom !== qa &&
                                    ((e.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;padding:0;margin:0;border:0;width:1px;padding:1px;zoom:1"),
                                    (e.innerHTML = "<div></div>"),
                                    (e.firstChild.style.width = "5px"),
                                    (b = 3 !== e.offsetWidth)),
                                a.removeChild(c),
                                (a = c = e = null);
                        }
                        return b;
                    });
            })();
        var nb,
            ob,
            lb = /^margin/,
            mb = new RegExp("^(" + Na + ")(?!px)[a-z%]+$", "i"),
            pb = /^(top|right|bottom|left)$/;
        a.getComputedStyle
            ? ((nb = function (a) {
                  return a.ownerDocument.defaultView.getComputedStyle(a, null);
              }),
              (ob = function (a, b, c) {
                  var d,
                      e,
                      f,
                      g,
                      h = a.style;
                  return (
                      (c = c || nb(a)),
                      (g = c ? c.getPropertyValue(b) || c[b] : void 0),
                      c &&
                          ("" !== g || fa.contains(a.ownerDocument, a) || (g = fa.style(a, b)),
                          mb.test(g) && lb.test(b) && ((d = h.width), (e = h.minWidth), (f = h.maxWidth), (h.minWidth = h.maxWidth = h.width = g), (g = c.width), (h.width = d), (h.minWidth = e), (h.maxWidth = f))),
                      void 0 === g ? g : g + ""
                  );
              }))
            : Ka.documentElement.currentStyle &&
              ((nb = function (a) {
                  return a.currentStyle;
              }),
              (ob = function (a, b, c) {
                  var d,
                      e,
                      f,
                      g,
                      h = a.style;
                  return (
                      (c = c || nb(a)),
                      (g = c ? c[b] : void 0),
                      null == g && h && h[b] && (g = h[b]),
                      mb.test(g) &&
                          !pb.test(b) &&
                          ((d = h.left), (e = a.runtimeStyle), (f = e && e.left), f && (e.left = a.currentStyle.left), (h.left = "fontSize" === b ? "1em" : g), (g = h.pixelLeft + "px"), (h.left = d), f && (e.left = f)),
                      void 0 === g ? g : g + "" || "auto"
                  );
              })),
            (function () {
                function b() {
                    var b,
                        c,
                        d = Ka.getElementsByTagName("body")[0];
                    d &&
                        ((b = Ka.createElement("div")),
                        (c = Ka.createElement("div")),
                        (b.style.cssText = j),
                        d.appendChild(b).appendChild(c),
                        (c.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;display:block;padding:1px;border:1px;width:4px;margin-top:1%;top:1%"),
                        fa.swap(d, null != d.style.zoom ? { zoom: 1 } : {}, function () {
                            e = 4 === c.offsetWidth;
                        }),
                        (f = !0),
                        (g = !1),
                        (h = !0),
                        a.getComputedStyle && ((g = "1%" !== (a.getComputedStyle(c, null) || {}).top), (f = "4px" === (a.getComputedStyle(c, null) || { width: "4px" }).width)),
                        d.removeChild(b),
                        (c = d = null));
                }
                var c,
                    d,
                    e,
                    f,
                    g,
                    h,
                    i = Ka.createElement("div"),
                    j = "border:0;width:0;height:0;position:absolute;top:0;left:-9999px";
                (i.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>"),
                    (c = i.getElementsByTagName("a")[0]),
                    (c.style.cssText = "float:left;opacity:.5"),
                    (da.opacity = /^0.5/.test(c.style.opacity)),
                    (da.cssFloat = !!c.style.cssFloat),
                    (i.style.backgroundClip = "content-box"),
                    (i.cloneNode(!0).style.backgroundClip = ""),
                    (da.clearCloneStyle = "content-box" === i.style.backgroundClip),
                    (c = i = null),
                    fa.extend(da, {
                        reliableHiddenOffsets: function () {
                            if (null != d) return d;
                            var a,
                                b,
                                c,
                                e = Ka.createElement("div"),
                                f = Ka.getElementsByTagName("body")[0];
                            return f
                                ? (e.setAttribute("className", "t"),
                                  (e.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>"),
                                  (a = Ka.createElement("div")),
                                  (a.style.cssText = j),
                                  f.appendChild(a).appendChild(e),
                                  (e.innerHTML = "<table><tr><td></td><td>t</td></tr></table>"),
                                  (b = e.getElementsByTagName("td")),
                                  (b[0].style.cssText = "padding:0;margin:0;border:0;display:none"),
                                  (c = 0 === b[0].offsetHeight),
                                  (b[0].style.display = ""),
                                  (b[1].style.display = "none"),
                                  (d = c && 0 === b[0].offsetHeight),
                                  f.removeChild(a),
                                  (e = f = null),
                                  d)
                                : void 0;
                        },
                        boxSizing: function () {
                            return null == e && b(), e;
                        },
                        boxSizingReliable: function () {
                            return null == f && b(), f;
                        },
                        pixelPosition: function () {
                            return null == g && b(), g;
                        },
                        reliableMarginRight: function () {
                            var b, c, d, e;
                            if (null == h && a.getComputedStyle) {
                                if (!(b = Ka.getElementsByTagName("body")[0])) return;
                                (c = Ka.createElement("div")),
                                    (d = Ka.createElement("div")),
                                    (c.style.cssText = j),
                                    b.appendChild(c).appendChild(d),
                                    (e = d.appendChild(Ka.createElement("div"))),
                                    (e.style.cssText = d.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;padding:0;margin:0;border:0"),
                                    (e.style.marginRight = e.style.width = "0"),
                                    (d.style.width = "1px"),
                                    (h = !parseFloat((a.getComputedStyle(e, null) || {}).marginRight)),
                                    b.removeChild(c);
                            }
                            return h;
                        },
                    });
            })(),
            (fa.swap = function (a, b, c, d) {
                var e,
                    f,
                    g = {};
                for (f in b) (g[f] = a.style[f]), (a.style[f] = b[f]);
                e = c.apply(a, d || []);
                for (f in b) a.style[f] = g[f];
                return e;
            });
        var qb = /alpha\([^)]*\)/i,
            rb = /opacity\s*=\s*([^)]*)/,
            sb = /^(none|table(?!-c[ea]).+)/,
            tb = new RegExp("^(" + Na + ")(.*)$", "i"),
            ub = new RegExp("^([+-])=(" + Na + ")", "i"),
            vb = { position: "absolute", visibility: "hidden", display: "block" },
            wb = { letterSpacing: 0, fontWeight: 400 },
            xb = ["Webkit", "O", "Moz", "ms"];
        fa.extend({
            cssHooks: {
                opacity: {
                    get: function (a, b) {
                        if (b) {
                            var c = ob(a, "opacity");
                            return "" === c ? "1" : c;
                        }
                    },
                },
            },
            cssNumber: { columnCount: !0, fillOpacity: !0, fontWeight: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0 },
            cssProps: { float: da.cssFloat ? "cssFloat" : "styleFloat" },
            style: function (a, b, c, d) {
                if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
                    var e,
                        f,
                        g,
                        h = fa.camelCase(b),
                        i = a.style;
                    if (((b = fa.cssProps[h] || (fa.cssProps[h] = B(i, h))), (g = fa.cssHooks[b] || fa.cssHooks[h]), void 0 === c)) return g && "get" in g && void 0 !== (e = g.get(a, !1, d)) ? e : i[b];
                    if (((f = typeof c), "string" === f && (e = ub.exec(c)) && ((c = (e[1] + 1) * e[2] + parseFloat(fa.css(a, b))), (f = "number")), null == c || c !== c)) return;
                    if (("number" !== f || fa.cssNumber[h] || (c += "px"), da.clearCloneStyle || "" !== c || 0 !== b.indexOf("background") || (i[b] = "inherit"), !(g && "set" in g && void 0 === (c = g.set(a, c, d)))))
                        try {
                            (i[b] = ""), (i[b] = c);
                        } catch (a) {}
                }
            },
            css: function (a, b, c, d) {
                var e,
                    f,
                    g,
                    h = fa.camelCase(b);
                return (
                    (b = fa.cssProps[h] || (fa.cssProps[h] = B(a.style, h))),
                    (g = fa.cssHooks[b] || fa.cssHooks[h]),
                    g && "get" in g && (f = g.get(a, !0, c)),
                    void 0 === f && (f = ob(a, b, d)),
                    "normal" === f && b in wb && (f = wb[b]),
                    "" === c || c ? ((e = parseFloat(f)), !0 === c || fa.isNumeric(e) ? e || 0 : f) : f
                );
            },
        }),
            fa.each(["height", "width"], function (a, b) {
                fa.cssHooks[b] = {
                    get: function (a, c, d) {
                        if (c)
                            return 0 === a.offsetWidth && sb.test(fa.css(a, "display"))
                                ? fa.swap(a, vb, function () {
                                      return F(a, b, d);
                                  })
                                : F(a, b, d);
                    },
                    set: function (a, c, d) {
                        var e = d && nb(a);
                        return D(a, c, d ? E(a, b, d, da.boxSizing() && "border-box" === fa.css(a, "boxSizing", !1, e), e) : 0);
                    },
                };
            }),
            da.opacity ||
                (fa.cssHooks.opacity = {
                    get: function (a, b) {
                        return rb.test((b && a.currentStyle ? a.currentStyle.filter : a.style.filter) || "") ? 0.01 * parseFloat(RegExp.$1) + "" : b ? "1" : "";
                    },
                    set: function (a, b) {
                        var c = a.style,
                            d = a.currentStyle,
                            e = fa.isNumeric(b) ? "alpha(opacity=" + 100 * b + ")" : "",
                            f = (d && d.filter) || c.filter || "";
                        (c.zoom = 1),
                            ((b >= 1 || "" === b) && "" === fa.trim(f.replace(qb, "")) && c.removeAttribute && (c.removeAttribute("filter"), "" === b || (d && !d.filter))) || (c.filter = qb.test(f) ? f.replace(qb, e) : f + " " + e);
                    },
                }),
            (fa.cssHooks.marginRight = A(da.reliableMarginRight, function (a, b) {
                if (b) return fa.swap(a, { display: "inline-block" }, ob, [a, "marginRight"]);
            })),
            fa.each({ margin: "", padding: "", border: "Width" }, function (a, b) {
                (fa.cssHooks[a + b] = {
                    expand: function (c) {
                        for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; d < 4; d++) e[a + Oa[d] + b] = f[d] || f[d - 2] || f[0];
                        return e;
                    },
                }),
                    lb.test(a) || (fa.cssHooks[a + b].set = D);
            }),
            fa.fn.extend({
                css: function (a, b) {
                    return Qa(
                        this,
                        function (a, b, c) {
                            var d,
                                e,
                                f = {},
                                g = 0;
                            if (fa.isArray(b)) {
                                for (d = nb(a), e = b.length; g < e; g++) f[b[g]] = fa.css(a, b[g], !1, d);
                                return f;
                            }
                            return void 0 !== c ? fa.style(a, b, c) : fa.css(a, b);
                        },
                        a,
                        b,
                        arguments.length > 1
                    );
                },
                show: function () {
                    return C(this, !0);
                },
                hide: function () {
                    return C(this);
                },
                toggle: function (a) {
                    return "boolean" == typeof a
                        ? a
                            ? this.show()
                            : this.hide()
                        : this.each(function () {
                              Pa(this) ? fa(this).show() : fa(this).hide();
                          });
                },
            }),
            (fa.Tween = G),
            (G.prototype = {
                constructor: G,
                init: function (a, b, c, d, e, f) {
                    (this.elem = a), (this.prop = c), (this.easing = e || "swing"), (this.options = b), (this.start = this.now = this.cur()), (this.end = d), (this.unit = f || (fa.cssNumber[c] ? "" : "px"));
                },
                cur: function () {
                    var a = G.propHooks[this.prop];
                    return a && a.get ? a.get(this) : G.propHooks._default.get(this);
                },
                run: function (a) {
                    var b,
                        c = G.propHooks[this.prop];
                    return (
                        (this.pos = b = this.options.duration ? fa.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : a),
                        (this.now = (this.end - this.start) * b + this.start),
                        this.options.step && this.options.step.call(this.elem, this.now, this),
                        c && c.set ? c.set(this) : G.propHooks._default.set(this),
                        this
                    );
                },
            }),
            (G.prototype.init.prototype = G.prototype),
            (G.propHooks = {
                _default: {
                    get: function (a) {
                        var b;
                        return null == a.elem[a.prop] || (a.elem.style && null != a.elem.style[a.prop]) ? ((b = fa.css(a.elem, a.prop, "")), b && "auto" !== b ? b : 0) : a.elem[a.prop];
                    },
                    set: function (a) {
                        fa.fx.step[a.prop] ? fa.fx.step[a.prop](a) : a.elem.style && (null != a.elem.style[fa.cssProps[a.prop]] || fa.cssHooks[a.prop]) ? fa.style(a.elem, a.prop, a.now + a.unit) : (a.elem[a.prop] = a.now);
                    },
                },
            }),
            (G.propHooks.scrollTop = G.propHooks.scrollLeft = {
                set: function (a) {
                    a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now);
                },
            }),
            (fa.easing = {
                linear: function (a) {
                    return a;
                },
                swing: function (a) {
                    return 0.5 - Math.cos(a * Math.PI) / 2;
                },
            }),
            (fa.fx = G.prototype.init),
            (fa.fx.step = {});
        var yb,
            zb,
            Ab = /^(?:toggle|show|hide)$/,
            Bb = new RegExp("^(?:([+-])=|)(" + Na + ")([a-z%]*)$", "i"),
            Cb = /queueHooks$/,
            Db = [K],
            Eb = {
                "*": [
                    function (a, b) {
                        var c = this.createTween(a, b),
                            d = c.cur(),
                            e = Bb.exec(b),
                            f = (e && e[3]) || (fa.cssNumber[a] ? "" : "px"),
                            g = (fa.cssNumber[a] || ("px" !== f && +d)) && Bb.exec(fa.css(c.elem, a)),
                            h = 1,
                            i = 20;
                        if (g && g[3] !== f) {
                            (f = f || g[3]), (e = e || []), (g = +d || 1);
                            do {
                                (h = h || ".5"), (g /= h), fa.style(c.elem, a, g + f);
                            } while (h !== (h = c.cur() / d) && 1 !== h && --i);
                        }
                        return e && ((g = c.start = +g || +d || 0), (c.unit = f), (c.end = e[1] ? g + (e[1] + 1) * e[2] : +e[2])), c;
                    },
                ],
            };
        (fa.Animation = fa.extend(M, {
            tweener: function (a, b) {
                fa.isFunction(a) ? ((b = a), (a = ["*"])) : (a = a.split(" "));
                for (var c, d = 0, e = a.length; d < e; d++) (c = a[d]), (Eb[c] = Eb[c] || []), Eb[c].unshift(b);
            },
            prefilter: function (a, b) {
                b ? Db.unshift(a) : Db.push(a);
            },
        })),
            (fa.speed = function (a, b, c) {
                var d = a && "object" == typeof a ? fa.extend({}, a) : { complete: c || (!c && b) || (fa.isFunction(a) && a), duration: a, easing: (c && b) || (b && !fa.isFunction(b) && b) };
                return (
                    (d.duration = fa.fx.off ? 0 : "number" == typeof d.duration ? d.duration : d.duration in fa.fx.speeds ? fa.fx.speeds[d.duration] : fa.fx.speeds._default),
                    (null == d.queue || !0 === d.queue) && (d.queue = "fx"),
                    (d.old = d.complete),
                    (d.complete = function () {
                        fa.isFunction(d.old) && d.old.call(this), d.queue && fa.dequeue(this, d.queue);
                    }),
                    d
                );
            }),
            fa.fn.extend({
                fadeTo: function (a, b, c, d) {
                    return this.filter(Pa).css("opacity", 0).show().end().animate({ opacity: b }, a, c, d);
                },
                animate: function (a, b, c, d) {
                    var e = fa.isEmptyObject(a),
                        f = fa.speed(b, c, d),
                        g = function () {
                            var b = M(this, fa.extend({}, a), f);
                            (e || fa._data(this, "finish")) && b.stop(!0);
                        };
                    return (g.finish = g), e || !1 === f.queue ? this.each(g) : this.queue(f.queue, g);
                },
                stop: function (a, b, c) {
                    var d = function (a) {
                        var b = a.stop;
                        delete a.stop, b(c);
                    };
                    return (
                        "string" != typeof a && ((c = b), (b = a), (a = void 0)),
                        b && !1 !== a && this.queue(a || "fx", []),
                        this.each(function () {
                            var b = !0,
                                e = null != a && a + "queueHooks",
                                f = fa.timers,
                                g = fa._data(this);
                            if (e) g[e] && g[e].stop && d(g[e]);
                            else for (e in g) g[e] && g[e].stop && Cb.test(e) && d(g[e]);
                            for (e = f.length; e--; ) f[e].elem === this && (null == a || f[e].queue === a) && (f[e].anim.stop(c), (b = !1), f.splice(e, 1));
                            (b || !c) && fa.dequeue(this, a);
                        })
                    );
                },
                finish: function (a) {
                    return (
                        !1 !== a && (a = a || "fx"),
                        this.each(function () {
                            var b,
                                c = fa._data(this),
                                d = c[a + "queue"],
                                e = c[a + "queueHooks"],
                                f = fa.timers,
                                g = d ? d.length : 0;
                            for (c.finish = !0, fa.queue(this, a, []), e && e.stop && e.stop.call(this, !0), b = f.length; b--; ) f[b].elem === this && f[b].queue === a && (f[b].anim.stop(!0), f.splice(b, 1));
                            for (b = 0; b < g; b++) d[b] && d[b].finish && d[b].finish.call(this);
                            delete c.finish;
                        })
                    );
                },
            }),
            fa.each(["toggle", "show", "hide"], function (a, b) {
                var c = fa.fn[b];
                fa.fn[b] = function (a, d, e) {
                    return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(I(b, !0), a, d, e);
                };
            }),
            fa.each({ slideDown: I("show"), slideUp: I("hide"), slideToggle: I("toggle"), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle" } }, function (a, b) {
                fa.fn[a] = function (a, c, d) {
                    return this.animate(b, a, c, d);
                };
            }),
            (fa.timers = []),
            (fa.fx.tick = function () {
                var a,
                    b = fa.timers,
                    c = 0;
                for (yb = fa.now(); c < b.length; c++) (a = b[c])() || b[c] !== a || b.splice(c--, 1);
                b.length || fa.fx.stop(), (yb = void 0);
            }),
            (fa.fx.timer = function (a) {
                fa.timers.push(a), a() ? fa.fx.start() : fa.timers.pop();
            }),
            (fa.fx.interval = 13),
            (fa.fx.start = function () {
                zb || (zb = setInterval(fa.fx.tick, fa.fx.interval));
            }),
            (fa.fx.stop = function () {
                clearInterval(zb), (zb = null);
            }),
            (fa.fx.speeds = { slow: 600, fast: 200, _default: 400 }),
            (fa.fn.delay = function (a, b) {
                return (
                    (a = fa.fx ? fa.fx.speeds[a] || a : a),
                    (b = b || "fx"),
                    this.queue(b, function (b, c) {
                        var d = setTimeout(b, a);
                        c.stop = function () {
                            clearTimeout(d);
                        };
                    })
                );
            }),
            (function () {
                var a,
                    b,
                    c,
                    d,
                    e = Ka.createElement("div");
                e.setAttribute("className", "t"),
                    (e.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>"),
                    (a = e.getElementsByTagName("a")[0]),
                    (c = Ka.createElement("select")),
                    (d = c.appendChild(Ka.createElement("option"))),
                    (b = e.getElementsByTagName("input")[0]),
                    (a.style.cssText = "top:1px"),
                    (da.getSetAttribute = "t" !== e.className),
                    (da.style = /top/.test(a.getAttribute("style"))),
                    (da.hrefNormalized = "/a" === a.getAttribute("href")),
                    (da.checkOn = !!b.value),
                    (da.optSelected = d.selected),
                    (da.enctype = !!Ka.createElement("form").enctype),
                    (c.disabled = !0),
                    (da.optDisabled = !d.disabled),
                    (b = Ka.createElement("input")),
                    b.setAttribute("value", ""),
                    (da.input = "" === b.getAttribute("value")),
                    (b.value = "t"),
                    b.setAttribute("type", "radio"),
                    (da.radioValue = "t" === b.value),
                    (a = b = c = d = e = null);
            })(),
            (wa = /\r/g),
            fa.fn.extend({
                val: function (a) {
                    var b,
                        c,
                        d,
                        e = this[0];
                    return arguments.length
                        ? ((d = fa.isFunction(a)),
                          this.each(function (c) {
                              var e;
                              1 === this.nodeType &&
                                  ((e = d ? a.call(this, c, fa(this).val()) : a),
                                  null == e
                                      ? (e = "")
                                      : "number" == typeof e
                                      ? (e += "")
                                      : fa.isArray(e) &&
                                        (e = fa.map(e, function (a) {
                                            return null == a ? "" : a + "";
                                        })),
                                  ((b = fa.valHooks[this.type] || fa.valHooks[this.nodeName.toLowerCase()]) && "set" in b && void 0 !== b.set(this, e, "value")) || (this.value = e));
                          }))
                        : e
                        ? (b = fa.valHooks[e.type] || fa.valHooks[e.nodeName.toLowerCase()]) && "get" in b && void 0 !== (c = b.get(e, "value"))
                            ? c
                            : ((c = e.value), "string" == typeof c ? c.replace(wa, "") : null == c ? "" : c)
                        : void 0;
                },
            }),
            fa.extend({
                valHooks: {
                    option: {
                        get: function (a) {
                            var b = fa.find.attr(a, "value");
                            return null != b ? b : fa.text(a);
                        },
                    },
                    select: {
                        get: function (a) {
                            for (var b, c, d = a.options, e = a.selectedIndex, f = "select-one" === a.type || e < 0, g = f ? null : [], h = f ? e + 1 : d.length, i = e < 0 ? h : f ? e : 0; i < h; i++)
                                if (((c = d[i]), (c.selected || i === e) && (da.optDisabled ? !c.disabled : null === c.getAttribute("disabled")) && (!c.parentNode.disabled || !fa.nodeName(c.parentNode, "optgroup")))) {
                                    if (((b = fa(c).val()), f)) return b;
                                    g.push(b);
                                }
                            return g;
                        },
                        set: function (a, b) {
                            for (var c, d, e = a.options, f = fa.makeArray(b), g = e.length; g--; )
                                if (((d = e[g]), fa.inArray(fa.valHooks.option.get(d), f) >= 0))
                                    try {
                                        d.selected = c = !0;
                                    } catch (a) {
                                        d.scrollHeight;
                                    }
                                else d.selected = !1;
                            return c || (a.selectedIndex = -1), e;
                        },
                    },
                },
            }),
            fa.each(["radio", "checkbox"], function () {
                (fa.valHooks[this] = {
                    set: function (a, b) {
                        if (fa.isArray(b)) return (a.checked = fa.inArray(fa(a).val(), b) >= 0);
                    },
                }),
                    da.checkOn ||
                        (fa.valHooks[this].get = function (a) {
                            return null === a.getAttribute("value") ? "on" : a.value;
                        });
            });
        var Fb,
            Gb,
            Hb = fa.expr.attrHandle,
            Ib = /^(?:checked|selected)$/i,
            Jb = da.getSetAttribute,
            Kb = da.input;
        fa.fn.extend({
            attr: function (a, b) {
                return Qa(this, fa.attr, a, b, arguments.length > 1);
            },
            removeAttr: function (a) {
                return this.each(function () {
                    fa.removeAttr(this, a);
                });
            },
        }),
            fa.extend({
                attr: function (a, b, c) {
                    var d,
                        e,
                        f = a.nodeType;
                    if (a && 3 !== f && 8 !== f && 2 !== f) {
                        if (typeof a.getAttribute === qa) return fa.prop(a, b, c);
                        if (((1 === f && fa.isXMLDoc(a)) || ((b = b.toLowerCase()), (d = fa.attrHooks[b] || (fa.expr.match.bool.test(b) ? Gb : Fb))), void 0 === c))
                            return d && "get" in d && null !== (e = d.get(a, b)) ? e : ((e = fa.find.attr(a, b)), null == e ? void 0 : e);
                        if (null !== c) return d && "set" in d && void 0 !== (e = d.set(a, c, b)) ? e : (a.setAttribute(b, c + ""), c);
                        fa.removeAttr(a, b);
                    }
                },
                removeAttr: function (a, b) {
                    var c,
                        d,
                        e = 0,
                        f = b && b.match(na);
                    if (f && 1 === a.nodeType)
                        for (; (c = f[e++]); )
                            (d = fa.propFix[c] || c), fa.expr.match.bool.test(c) ? ((Kb && Jb) || !Ib.test(c) ? (a[d] = !1) : (a[fa.camelCase("default-" + c)] = a[d] = !1)) : fa.attr(a, c, ""), a.removeAttribute(Jb ? c : d);
                },
                attrHooks: {
                    type: {
                        set: function (a, b) {
                            if (!da.radioValue && "radio" === b && fa.nodeName(a, "input")) {
                                var c = a.value;
                                return a.setAttribute("type", b), c && (a.value = c), b;
                            }
                        },
                    },
                },
            }),
            (Gb = {
                set: function (a, b, c) {
                    return !1 === b ? fa.removeAttr(a, c) : (Kb && Jb) || !Ib.test(c) ? a.setAttribute((!Jb && fa.propFix[c]) || c, c) : (a[fa.camelCase("default-" + c)] = a[c] = !0), c;
                },
            }),
            fa.each(fa.expr.match.bool.source.match(/\w+/g), function (a, b) {
                var c = Hb[b] || fa.find.attr;
                Hb[b] =
                    (Kb && Jb) || !Ib.test(b)
                        ? function (a, b, d) {
                              var e, f;
                              return d || ((f = Hb[b]), (Hb[b] = e), (e = null != c(a, b, d) ? b.toLowerCase() : null), (Hb[b] = f)), e;
                          }
                        : function (a, b, c) {
                              if (!c) return a[fa.camelCase("default-" + b)] ? b.toLowerCase() : null;
                          };
            }),
            (Kb && Jb) ||
                (fa.attrHooks.value = {
                    set: function (a, b, c) {
                        if (!fa.nodeName(a, "input")) return Fb && Fb.set(a, b, c);
                        a.defaultValue = b;
                    },
                }),
            Jb ||
                ((Fb = {
                    set: function (a, b, c) {
                        var d = a.getAttributeNode(c);
                        return d || a.setAttributeNode((d = a.ownerDocument.createAttribute(c))), (d.value = b += ""), "value" === c || b === a.getAttribute(c) ? b : void 0;
                    },
                }),
                (Hb.id = Hb.name = Hb.coords = function (a, b, c) {
                    var d;
                    if (!c) return (d = a.getAttributeNode(b)) && "" !== d.value ? d.value : null;
                }),
                (fa.valHooks.button = {
                    get: function (a, b) {
                        var c = a.getAttributeNode(b);
                        if (c && c.specified) return c.value;
                    },
                    set: Fb.set,
                }),
                (fa.attrHooks.contenteditable = {
                    set: function (a, b, c) {
                        Fb.set(a, "" !== b && b, c);
                    },
                }),
                fa.each(["width", "height"], function (a, b) {
                    fa.attrHooks[b] = {
                        set: function (a, c) {
                            if ("" === c) return a.setAttribute(b, "auto"), c;
                        },
                    };
                })),
            da.style ||
                (fa.attrHooks.style = {
                    get: function (a) {
                        return a.style.cssText || void 0;
                    },
                    set: function (a, b) {
                        return (a.style.cssText = b + "");
                    },
                }),
            (xa = /^(?:input|select|textarea|button|object)$/i),
            (ya = /^(?:a|area)$/i),
            fa.fn.extend({
                prop: function (a, b) {
                    return Qa(this, fa.prop, a, b, arguments.length > 1);
                },
                removeProp: function (a) {
                    return (
                        (a = fa.propFix[a] || a),
                        this.each(function () {
                            try {
                                (this[a] = void 0), delete this[a];
                            } catch (a) {}
                        })
                    );
                },
            }),
            fa.extend({
                propFix: { for: "htmlFor", class: "className" },
                prop: function (a, b, c) {
                    var d,
                        e,
                        f,
                        g = a.nodeType;
                    if (a && 3 !== g && 8 !== g && 2 !== g)
                        return (
                            (f = 1 !== g || !fa.isXMLDoc(a)),
                            f && ((b = fa.propFix[b] || b), (e = fa.propHooks[b])),
                            void 0 !== c ? (e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : (a[b] = c)) : e && "get" in e && null !== (d = e.get(a, b)) ? d : a[b]
                        );
                },
                propHooks: {
                    tabIndex: {
                        get: function (a) {
                            var b = fa.find.attr(a, "tabindex");
                            return b ? parseInt(b, 10) : xa.test(a.nodeName) || (ya.test(a.nodeName) && a.href) ? 0 : -1;
                        },
                    },
                },
            }),
            da.hrefNormalized ||
                fa.each(["href", "src"], function (a, b) {
                    fa.propHooks[b] = {
                        get: function (a) {
                            return a.getAttribute(b, 4);
                        },
                    };
                }),
            da.optSelected ||
                (fa.propHooks.selected = {
                    get: function (a) {
                        var b = a.parentNode;
                        return b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex), null;
                    },
                }),
            fa.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
                fa.propFix[this.toLowerCase()] = this;
            }),
            da.enctype || (fa.propFix.enctype = "encoding"),
            (za = /[\t\r\n\f]/g),
            fa.fn.extend({
                addClass: function (a) {
                    var b,
                        c,
                        d,
                        e,
                        f,
                        g,
                        h = 0,
                        i = this.length,
                        j = "string" == typeof a && a;
                    if (fa.isFunction(a))
                        return this.each(function (b) {
                            fa(this).addClass(a.call(this, b, this.className));
                        });
                    if (j)
                        for (b = (a || "").match(na) || []; h < i; h++)
                            if (((c = this[h]), (d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(za, " ") : " ")))) {
                                for (f = 0; (e = b[f++]); ) d.indexOf(" " + e + " ") < 0 && (d += e + " ");
                                (g = fa.trim(d)), c.className !== g && (c.className = g);
                            }
                    return this;
                },
                removeClass: function (a) {
                    var b,
                        c,
                        d,
                        e,
                        f,
                        g,
                        h = 0,
                        i = this.length,
                        j = 0 === arguments.length || ("string" == typeof a && a);
                    if (fa.isFunction(a))
                        return this.each(function (b) {
                            fa(this).removeClass(a.call(this, b, this.className));
                        });
                    if (j)
                        for (b = (a || "").match(na) || []; h < i; h++)
                            if (((c = this[h]), (d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(za, " ") : "")))) {
                                for (f = 0; (e = b[f++]); ) for (; d.indexOf(" " + e + " ") >= 0; ) d = d.replace(" " + e + " ", " ");
                                (g = a ? fa.trim(d) : ""), c.className !== g && (c.className = g);
                            }
                    return this;
                },
                toggleClass: function (a, b) {
                    var c = typeof a;
                    return "boolean" == typeof b && "string" === c
                        ? b
                            ? this.addClass(a)
                            : this.removeClass(a)
                        : fa.isFunction(a)
                        ? this.each(function (c) {
                              fa(this).toggleClass(a.call(this, c, this.className, b), b);
                          })
                        : this.each(function () {
                              if ("string" === c) for (var b, d = 0, e = fa(this), f = a.match(na) || []; (b = f[d++]); ) e.hasClass(b) ? e.removeClass(b) : e.addClass(b);
                              else (c === qa || "boolean" === c) && (this.className && fa._data(this, "__className__", this.className), (this.className = this.className || !1 === a ? "" : fa._data(this, "__className__") || ""));
                          });
                },
                hasClass: function (a) {
                    for (var b = " " + a + " ", c = 0, d = this.length; c < d; c++) if (1 === this[c].nodeType && (" " + this[c].className + " ").replace(za, " ").indexOf(b) >= 0) return !0;
                    return !1;
                },
            }),
            fa.each(
                "blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),
                function (a, b) {
                    fa.fn[b] = function (a, c) {
                        return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b);
                    };
                }
            ),
            fa.fn.extend({
                hover: function (a, b) {
                    return this.mouseenter(a).mouseleave(b || a);
                },
                bind: function (a, b, c) {
                    return this.on(a, null, b, c);
                },
                unbind: function (a, b) {
                    return this.off(a, null, b);
                },
                delegate: function (a, b, c, d) {
                    return this.on(b, a, c, d);
                },
                undelegate: function (a, b, c) {
                    return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c);
                },
            });
        var Lb = fa.now(),
            Mb = /\?/,
            Nb = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
        (fa.parseJSON = function (b) {
            if (a.JSON && a.JSON.parse) return a.JSON.parse(b + "");
            var c,
                d = null,
                e = fa.trim(b + "");
            return e &&
                !fa.trim(
                    e.replace(Nb, function (a, b, e, f) {
                        return c && b && (d = 0), 0 === d ? a : ((c = e || b), (d += !f - !e), "");
                    })
                )
                ? Function("return " + e)()
                : fa.error("Invalid JSON: " + b);
        }),
            (fa.parseXML = function (b) {
                var c, d;
                if (!b || "string" != typeof b) return null;
                try {
                    a.DOMParser ? ((d = new DOMParser()), (c = d.parseFromString(b, "text/xml"))) : ((c = new ActiveXObject("Microsoft.XMLDOM")), (c.async = "false"), c.loadXML(b));
                } catch (a) {
                    c = void 0;
                }
                return (c && c.documentElement && !c.getElementsByTagName("parsererror").length) || fa.error("Invalid XML: " + b), c;
            });
        var Ob,
            Pb,
            Qb = /#.*$/,
            Rb = /([?&])_=[^&]*/,
            Sb = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
            Tb = /^(?:GET|HEAD)$/,
            Ub = /^\/\//,
            Vb = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
            Wb = {},
            Xb = {},
            Yb = "*/".concat("*");
        try {
            Pb = location.href;
        } catch (a) {
            (Pb = Ka.createElement("a")), (Pb.href = ""), (Pb = Pb.href);
        }
        (Ob = Vb.exec(Pb.toLowerCase()) || []),
            fa.extend({
                active: 0,
                lastModified: {},
                etag: {},
                ajaxSettings: {
                    url: Pb,
                    type: "GET",
                    isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Ob[1]),
                    global: !0,
                    processData: !0,
                    async: !0,
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    accepts: { "*": Yb, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript" },
                    contents: { xml: /xml/, html: /html/, json: /json/ },
                    responseFields: { xml: "responseXML", text: "responseText", json: "responseJSON" },
                    converters: { "* text": String, "text html": !0, "text json": fa.parseJSON, "text xml": fa.parseXML },
                    flatOptions: { url: !0, context: !0 },
                },
                ajaxSetup: function (a, b) {
                    return b ? P(P(a, fa.ajaxSettings), b) : P(fa.ajaxSettings, a);
                },
                ajaxPrefilter: N(Wb),
                ajaxTransport: N(Xb),
                ajax: function (a, b) {
                    function c(a, b, c, d) {
                        var e,
                            k,
                            r,
                            s,
                            u,
                            w = b;
                        2 !== t &&
                            ((t = 2),
                            h && clearTimeout(h),
                            (j = void 0),
                            (g = d || ""),
                            (v.readyState = a > 0 ? 4 : 0),
                            (e = (a >= 200 && a < 300) || 304 === a),
                            c && (s = Q(l, v, c)),
                            (s = R(l, s, v, e)),
                            e
                                ? (l.ifModified && ((u = v.getResponseHeader("Last-Modified")), u && (fa.lastModified[f] = u), (u = v.getResponseHeader("etag")) && (fa.etag[f] = u)),
                                  204 === a || "HEAD" === l.type ? (w = "nocontent") : 304 === a ? (w = "notmodified") : ((w = s.state), (k = s.data), (r = s.error), (e = !r)))
                                : ((r = w), (a || !w) && ((w = "error"), a < 0 && (a = 0))),
                            (v.status = a),
                            (v.statusText = (b || w) + ""),
                            e ? o.resolveWith(m, [k, w, v]) : o.rejectWith(m, [v, w, r]),
                            v.statusCode(q),
                            (q = void 0),
                            i && n.trigger(e ? "ajaxSuccess" : "ajaxError", [v, l, e ? k : r]),
                            p.fireWith(m, [v, w]),
                            i && (n.trigger("ajaxComplete", [v, l]), --fa.active || fa.event.trigger("ajaxStop")));
                    }
                    "object" == typeof a && ((b = a), (a = void 0)), (b = b || {});
                    var d,
                        e,
                        f,
                        g,
                        h,
                        i,
                        j,
                        k,
                        l = fa.ajaxSetup({}, b),
                        m = l.context || l,
                        n = l.context && (m.nodeType || m.jquery) ? fa(m) : fa.event,
                        o = fa.Deferred(),
                        p = fa.Callbacks("once memory"),
                        q = l.statusCode || {},
                        r = {},
                        s = {},
                        t = 0,
                        u = "canceled",
                        v = {
                            readyState: 0,
                            getResponseHeader: function (a) {
                                var b;
                                if (2 === t) {
                                    if (!k) for (k = {}; (b = Sb.exec(g)); ) k[b[1].toLowerCase()] = b[2];
                                    b = k[a.toLowerCase()];
                                }
                                return null == b ? null : b;
                            },
                            getAllResponseHeaders: function () {
                                return 2 === t ? g : null;
                            },
                            setRequestHeader: function (a, b) {
                                var c = a.toLowerCase();
                                return t || ((a = s[c] = s[c] || a), (r[a] = b)), this;
                            },
                            overrideMimeType: function (a) {
                                return t || (l.mimeType = a), this;
                            },
                            statusCode: function (a) {
                                var b;
                                if (a)
                                    if (t < 2) for (b in a) q[b] = [q[b], a[b]];
                                    else v.always(a[v.status]);
                                return this;
                            },
                            abort: function (a) {
                                var b = a || u;
                                return j && j.abort(b), c(0, b), this;
                            },
                        };
                    if (
                        ((o.promise(v).complete = p.add),
                        (v.success = v.done),
                        (v.error = v.fail),
                        (l.url = ((a || l.url || Pb) + "").replace(Qb, "").replace(Ub, Ob[1] + "//")),
                        (l.type = b.method || b.type || l.method || l.type),
                        (l.dataTypes = fa
                            .trim(l.dataType || "*")
                            .toLowerCase()
                            .match(na) || [""]),
                        null == l.crossDomain &&
                            ((d = Vb.exec(l.url.toLowerCase())), (l.crossDomain = !(!d || (d[1] === Ob[1] && d[2] === Ob[2] && (d[3] || ("http:" === d[1] ? "80" : "443")) === (Ob[3] || ("http:" === Ob[1] ? "80" : "443")))))),
                        l.data && l.processData && "string" != typeof l.data && (l.data = fa.param(l.data, l.traditional)),
                        O(Wb, l, b, v),
                        2 === t)
                    )
                        return v;
                    (i = l.global),
                        i && 0 == fa.active++ && fa.event.trigger("ajaxStart"),
                        (l.type = l.type.toUpperCase()),
                        (l.hasContent = !Tb.test(l.type)),
                        (f = l.url),
                        l.hasContent || (l.data && ((f = l.url += (Mb.test(f) ? "&" : "?") + l.data), delete l.data), !1 === l.cache && (l.url = Rb.test(f) ? f.replace(Rb, "$1_=" + Lb++) : f + (Mb.test(f) ? "&" : "?") + "_=" + Lb++)),
                        l.ifModified && (fa.lastModified[f] && v.setRequestHeader("If-Modified-Since", fa.lastModified[f]), fa.etag[f] && v.setRequestHeader("If-None-Match", fa.etag[f])),
                        ((l.data && l.hasContent && !1 !== l.contentType) || b.contentType) && v.setRequestHeader("Content-Type", l.contentType),
                        v.setRequestHeader("Accept", l.dataTypes[0] && l.accepts[l.dataTypes[0]] ? l.accepts[l.dataTypes[0]] + ("*" !== l.dataTypes[0] ? ", " + Yb + "; q=0.01" : "") : l.accepts["*"]);
                    for (e in l.headers) v.setRequestHeader(e, l.headers[e]);
                    if (l.beforeSend && (!1 === l.beforeSend.call(m, v, l) || 2 === t)) return v.abort();
                    u = "abort";
                    for (e in { success: 1, error: 1, complete: 1 }) v[e](l[e]);
                    if ((j = O(Xb, l, b, v))) {
                        (v.readyState = 1),
                            i && n.trigger("ajaxSend", [v, l]),
                            l.async &&
                                l.timeout > 0 &&
                                (h = setTimeout(function () {
                                    v.abort("timeout");
                                }, l.timeout));
                        try {
                            (t = 1), j.send(r, c);
                        } catch (a) {
                            if (!(t < 2)) throw a;
                            c(-1, a);
                        }
                    } else c(-1, "No Transport");
                    return v;
                },
                getJSON: function (a, b, c) {
                    return fa.get(a, b, c, "json");
                },
                getScript: function (a, b) {
                    return fa.get(a, void 0, b, "script");
                },
            }),
            fa.each(["get", "post"], function (a, b) {
                fa[b] = function (a, c, d, e) {
                    return fa.isFunction(c) && ((e = e || d), (d = c), (c = void 0)), fa.ajax({ url: a, type: b, dataType: e, data: c, success: d });
                };
            }),
            fa.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (a, b) {
                fa.fn[b] = function (a) {
                    return this.on(b, a);
                };
            }),
            (fa._evalUrl = function (a) {
                return fa.ajax({ url: a, type: "GET", dataType: "script", async: !1, global: !1, throws: !0 });
            }),
            fa.fn.extend({
                wrapAll: function (a) {
                    if (fa.isFunction(a))
                        return this.each(function (b) {
                            fa(this).wrapAll(a.call(this, b));
                        });
                    if (this[0]) {
                        var b = fa(a, this[0].ownerDocument).eq(0).clone(!0);
                        this[0].parentNode && b.insertBefore(this[0]),
                            b
                                .map(function () {
                                    for (var a = this; a.firstChild && 1 === a.firstChild.nodeType; ) a = a.firstChild;
                                    return a;
                                })
                                .append(this);
                    }
                    return this;
                },
                wrapInner: function (a) {
                    return fa.isFunction(a)
                        ? this.each(function (b) {
                              fa(this).wrapInner(a.call(this, b));
                          })
                        : this.each(function () {
                              var b = fa(this),
                                  c = b.contents();
                              c.length ? c.wrapAll(a) : b.append(a);
                          });
                },
                wrap: function (a) {
                    var b = fa.isFunction(a);
                    return this.each(function (c) {
                        fa(this).wrapAll(b ? a.call(this, c) : a);
                    });
                },
                unwrap: function () {
                    return this.parent()
                        .each(function () {
                            fa.nodeName(this, "body") || fa(this).replaceWith(this.childNodes);
                        })
                        .end();
                },
            }),
            (fa.expr.filters.hidden = function (a) {
                return (a.offsetWidth <= 0 && a.offsetHeight <= 0) || (!da.reliableHiddenOffsets() && "none" === ((a.style && a.style.display) || fa.css(a, "display")));
            }),
            (fa.expr.filters.visible = function (a) {
                return !fa.expr.filters.hidden(a);
            });
        var Zb = /%20/g,
            $b = /\[\]$/,
            _b = /\r?\n/g,
            ac = /^(?:submit|button|image|reset|file)$/i,
            bc = /^(?:input|select|textarea|keygen)/i;
        (fa.param = function (a, b) {
            var c,
                d = [],
                e = function (a, b) {
                    (b = fa.isFunction(b) ? b() : null == b ? "" : b), (d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b));
                };
            if ((void 0 === b && (b = fa.ajaxSettings && fa.ajaxSettings.traditional), fa.isArray(a) || (a.jquery && !fa.isPlainObject(a))))
                fa.each(a, function () {
                    e(this.name, this.value);
                });
            else for (c in a) S(c, a[c], b, e);
            return d.join("&").replace(Zb, "+");
        }),
            fa.fn.extend({
                serialize: function () {
                    return fa.param(this.serializeArray());
                },
                serializeArray: function () {
                    return this.map(function () {
                        var a = fa.prop(this, "elements");
                        return a ? fa.makeArray(a) : this;
                    })
                        .filter(function () {
                            var a = this.type;
                            return this.name && !fa(this).is(":disabled") && bc.test(this.nodeName) && !ac.test(a) && (this.checked || !Ra.test(a));
                        })
                        .map(function (a, b) {
                            var c = fa(this).val();
                            return null == c
                                ? null
                                : fa.isArray(c)
                                ? fa.map(c, function (a) {
                                      return { name: b.name, value: a.replace(_b, "\r\n") };
                                  })
                                : { name: b.name, value: c.replace(_b, "\r\n") };
                        })
                        .get();
                },
            }),
            (fa.ajaxSettings.xhr =
                void 0 !== a.ActiveXObject
                    ? function () {
                          return (!this.isLocal && /^(get|post|head|put|delete|options)$/i.test(this.type) && T()) || U();
                      }
                    : T);
        var cc = 0,
            dc = {},
            ec = fa.ajaxSettings.xhr();
        return (
            a.ActiveXObject &&
                fa(a).on("unload", function () {
                    for (var a in dc) dc[a](void 0, !0);
                }),
            (da.cors = !!ec && "withCredentials" in ec),
            (ec = da.ajax = !!ec),
            ec &&
                fa.ajaxTransport(function (a) {
                    if (!a.crossDomain || da.cors) {
                        var b;
                        return {
                            send: function (c, d) {
                                var e,
                                    f = a.xhr(),
                                    g = ++cc;
                                if ((f.open(a.type, a.url, a.async, a.username, a.password), a.xhrFields)) for (e in a.xhrFields) f[e] = a.xhrFields[e];
                                a.mimeType && f.overrideMimeType && f.overrideMimeType(a.mimeType), a.crossDomain || c["X-Requested-With"] || (c["X-Requested-With"] = "XMLHttpRequest");
                                for (e in c) void 0 !== c[e] && f.setRequestHeader(e, c[e] + "");
                                f.send((a.hasContent && a.data) || null),
                                    (b = function (c, e) {
                                        var h, i, j;
                                        if (b && (e || 4 === f.readyState))
                                            if ((delete dc[g], (b = void 0), (f.onreadystatechange = fa.noop), e)) 4 !== f.readyState && f.abort();
                                            else {
                                                (j = {}), (h = f.status), "string" == typeof f.responseText && (j.text = f.responseText);
                                                try {
                                                    i = f.statusText;
                                                } catch (a) {
                                                    i = "";
                                                }
                                                h || !a.isLocal || a.crossDomain ? 1223 === h && (h = 204) : (h = j.text ? 200 : 404);
                                            }
                                        j && d(h, i, j, f.getAllResponseHeaders());
                                    }),
                                    a.async ? (4 === f.readyState ? setTimeout(b) : (f.onreadystatechange = dc[g] = b)) : b();
                            },
                            abort: function () {
                                b && b(void 0, !0);
                            },
                        };
                    }
                }),
            fa.ajaxSetup({
                accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" },
                contents: { script: /(?:java|ecma)script/ },
                converters: {
                    "text script": function (a) {
                        return fa.globalEval(a), a;
                    },
                },
            }),
            fa.ajaxPrefilter("script", function (a) {
                void 0 === a.cache && (a.cache = !1), a.crossDomain && ((a.type = "GET"), (a.global = !1));
            }),
            fa.ajaxTransport("script", function (a) {
                if (a.crossDomain) {
                    var b,
                        c = Ka.head || fa("head")[0] || Ka.documentElement;
                    return {
                        send: function (d, e) {
                            (b = Ka.createElement("script")),
                                (b.async = !0),
                                a.scriptCharset && (b.charset = a.scriptCharset),
                                (b.src = a.url),
                                (b.onload = b.onreadystatechange = function (a, c) {
                                    (c || !b.readyState || /loaded|complete/.test(b.readyState)) && ((b.onload = b.onreadystatechange = null), b.parentNode && b.parentNode.removeChild(b), (b = null), c || e(200, "success"));
                                }),
                                c.insertBefore(b, c.firstChild);
                        },
                        abort: function () {
                            b && b.onload(void 0, !0);
                        },
                    };
                }
            }),
            (Aa = []),
            (Ba = /(=)\?(?=&|$)|\?\?/),
            fa.ajaxSetup({
                jsonp: "callback",
                jsonpCallback: function () {
                    var a = Aa.pop() || fa.expando + "_" + Lb++;
                    return (this[a] = !0), a;
                },
            }),
            fa.ajaxPrefilter("json jsonp", function (b, c, d) {
                var e,
                    f,
                    g,
                    h = !1 !== b.jsonp && (Ba.test(b.url) ? "url" : "string" == typeof b.data && !(b.contentType || "").indexOf("application/x-www-form-urlencoded") && Ba.test(b.data) && "data");
                if (h || "jsonp" === b.dataTypes[0])
                    return (
                        (e = b.jsonpCallback = fa.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback),
                        h ? (b[h] = b[h].replace(Ba, "$1" + e)) : !1 !== b.jsonp && (b.url += (Mb.test(b.url) ? "&" : "?") + b.jsonp + "=" + e),
                        (b.converters["script json"] = function () {
                            return g || fa.error(e + " was not called"), g[0];
                        }),
                        (b.dataTypes[0] = "json"),
                        (f = a[e]),
                        (a[e] = function () {
                            g = arguments;
                        }),
                        d.always(function () {
                            (a[e] = f), b[e] && ((b.jsonpCallback = c.jsonpCallback), Aa.push(e)), g && fa.isFunction(f) && f(g[0]), (g = f = void 0);
                        }),
                        "script"
                    );
            }),
            (fa.parseHTML = function (a, b, c) {
                if (!a || "string" != typeof a) return null;
                "boolean" == typeof b && ((c = b), (b = !1)), (b = b || Ka);
                var d = Ha.exec(a),
                    e = !c && [];
                return d ? [b.createElement(d[1])] : ((d = fa.buildFragment([a], b, e)), e && e.length && fa(e).remove(), fa.merge([], d.childNodes));
            }),
            (Ca = fa.fn.load),
            (fa.fn.load = function (a, b, c) {
                if ("string" != typeof a && Ca) return Ca.apply(this, arguments);
                var d,
                    e,
                    f,
                    g = this,
                    h = a.indexOf(" ");
                return (
                    h >= 0 && ((d = a.slice(h, a.length)), (a = a.slice(0, h))),
                    fa.isFunction(b) ? ((c = b), (b = void 0)) : b && "object" == typeof b && (f = "POST"),
                    g.length > 0 &&
                        fa
                            .ajax({ url: a, type: f, dataType: "html", data: b })
                            .done(function (a) {
                                (e = arguments), g.html(d ? fa("<div>").append(fa.parseHTML(a)).find(d) : a);
                            })
                            .complete(
                                c &&
                                    function (a, b) {
                                        g.each(c, e || [a.responseText, b, a]);
                                    }
                            ),
                    this
                );
            }),
            (fa.expr.filters.animated = function (a) {
                return fa.grep(fa.timers, function (b) {
                    return a === b.elem;
                }).length;
            }),
            (Da = a.document.documentElement),
            (fa.offset = {
                setOffset: function (a, b, c) {
                    var d,
                        e,
                        f,
                        g,
                        h,
                        i,
                        j,
                        k = fa.css(a, "position"),
                        l = fa(a),
                        m = {};
                    "static" === k && (a.style.position = "relative"),
                        (h = l.offset()),
                        (f = fa.css(a, "top")),
                        (i = fa.css(a, "left")),
                        (j = ("absolute" === k || "fixed" === k) && fa.inArray("auto", [f, i]) > -1),
                        j ? ((d = l.position()), (g = d.top), (e = d.left)) : ((g = parseFloat(f) || 0), (e = parseFloat(i) || 0)),
                        fa.isFunction(b) && (b = b.call(a, c, h)),
                        null != b.top && (m.top = b.top - h.top + g),
                        null != b.left && (m.left = b.left - h.left + e),
                        "using" in b ? b.using.call(a, m) : l.css(m);
                },
            }),
            fa.fn.extend({
                offset: function (a) {
                    if (arguments.length)
                        return void 0 === a
                            ? this
                            : this.each(function (b) {
                                  fa.offset.setOffset(this, a, b);
                              });
                    var b,
                        c,
                        d = { top: 0, left: 0 },
                        e = this[0],
                        f = e && e.ownerDocument;
                    return f
                        ? ((b = f.documentElement),
                          fa.contains(b, e)
                              ? (typeof e.getBoundingClientRect !== qa && (d = e.getBoundingClientRect()),
                                (c = V(f)),
                                { top: d.top + (c.pageYOffset || b.scrollTop) - (b.clientTop || 0), left: d.left + (c.pageXOffset || b.scrollLeft) - (b.clientLeft || 0) })
                              : d)
                        : void 0;
                },
                position: function () {
                    if (this[0]) {
                        var a,
                            b,
                            c = { top: 0, left: 0 },
                            d = this[0];
                        return (
                            "fixed" === fa.css(d, "position")
                                ? (b = d.getBoundingClientRect())
                                : ((a = this.offsetParent()), (b = this.offset()), fa.nodeName(a[0], "html") || (c = a.offset()), (c.top += fa.css(a[0], "borderTopWidth", !0)), (c.left += fa.css(a[0], "borderLeftWidth", !0))),
                            { top: b.top - c.top - fa.css(d, "marginTop", !0), left: b.left - c.left - fa.css(d, "marginLeft", !0) }
                        );
                    }
                },
                offsetParent: function () {
                    return this.map(function () {
                        for (var a = this.offsetParent || Da; a && !fa.nodeName(a, "html") && "static" === fa.css(a, "position"); ) a = a.offsetParent;
                        return a || Da;
                    });
                },
            }),
            fa.each({ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function (a, b) {
                var c = /Y/.test(b);
                fa.fn[a] = function (d) {
                    return Qa(
                        this,
                        function (a, d, e) {
                            var f = V(a);
                            if (void 0 === e) return f ? (b in f ? f[b] : f.document.documentElement[d]) : a[d];
                            f ? f.scrollTo(c ? fa(f).scrollLeft() : e, c ? e : fa(f).scrollTop()) : (a[d] = e);
                        },
                        a,
                        d,
                        arguments.length,
                        null
                    );
                };
            }),
            fa.each(["top", "left"], function (a, b) {
                fa.cssHooks[b] = A(da.pixelPosition, function (a, c) {
                    if (c) return (c = ob(a, b)), mb.test(c) ? fa(a).position()[b] + "px" : c;
                });
            }),
            fa.each({ Height: "height", Width: "width" }, function (a, b) {
                fa.each({ padding: "inner" + a, content: b, "": "outer" + a }, function (c, d) {
                    fa.fn[d] = function (d, e) {
                        var f = arguments.length && (c || "boolean" != typeof d),
                            g = c || (!0 === d || !0 === e ? "margin" : "border");
                        return Qa(
                            this,
                            function (b, c, d) {
                                var e;
                                return fa.isWindow(b)
                                    ? b.document.documentElement["client" + a]
                                    : 9 === b.nodeType
                                    ? ((e = b.documentElement), Math.max(b.body["scroll" + a], e["scroll" + a], b.body["offset" + a], e["offset" + a], e["client" + a]))
                                    : void 0 === d
                                    ? fa.css(b, c, g)
                                    : fa.style(b, c, d, g);
                            },
                            b,
                            f ? d : void 0,
                            f,
                            null
                        );
                    };
                });
            }),
            (fa.fn.size = function () {
                return this.length;
            }),
            (fa.fn.andSelf = fa.fn.addBack),
            "function" == typeof define &&
                define.amd &&
                define("jquery", [], function () {
                    return fa;
                }),
            (Ea = a.jQuery),
            (Fa = a.$),
            (fa.noConflict = function (b) {
                return a.$ === fa && (a.$ = Fa), b && a.jQuery === fa && (a.jQuery = Ea), fa;
            }),
            typeof b === qa && (a.jQuery = a.$ = fa),
            fa
        );
    }),
    (function (a, b, c) {
        "function" == typeof define && define.amd
            ? define(["jquery"], function (d) {
                  return c(d, a, b), d.mobile;
              })
            : c(a.jQuery, a, b);
    })(this, document, function (a, b, c) {
        (function (a, b, c, d) {
            function e(a) {
                for (; a && void 0 !== a.originalEvent; ) a = a.originalEvent;
                return a;
            }
            function f(b, c) {
                var g,
                    h,
                    i,
                    j,
                    k,
                    l,
                    m,
                    n,
                    o,
                    f = b.type;
                if (((b = a.Event(b)), (b.type = c), (g = b.originalEvent), (h = a.event.props), f.search(/^(mouse|click)/) > -1 && (h = C), g)) for (m = h.length, j; m; ) (j = h[--m]), (b[j] = g[j]);
                if ((f.search(/mouse(down|up)|click/) > -1 && !b.which && (b.which = 1), -1 !== f.search(/^touch/) && ((i = e(g)), (f = i.touches), (k = i.changedTouches), (l = f && f.length ? f[0] : k && k.length ? k[0] : d))))
                    for (n = 0, o = A.length; n < o; n++) (j = A[n]), (b[j] = l[j]);
                return b;
            }
            function g(b) {
                for (var d, e, c = {}; b; ) {
                    d = a.data(b, x);
                    for (e in d) d[e] && (c[e] = c.hasVirtualBinding = !0);
                    b = b.parentNode;
                }
                return c;
            }
            function h(b, c) {
                for (var d; b; ) {
                    if ((d = a.data(b, x)) && (!c || d[c])) return b;
                    b = b.parentNode;
                }
                return null;
            }
            function i() {
                K = !1;
            }
            function j() {
                K = !0;
            }
            function k() {
                (O = 0), (I.length = 0), (J = !1), j();
            }
            function l() {
                i();
            }
            function m() {
                n(),
                    (E = setTimeout(function () {
                        (E = 0), k();
                    }, a.vmouse.resetTimerDuration));
            }
            function n() {
                E && (clearTimeout(E), (E = 0));
            }
            function o(b, c, d) {
                var e;
                return ((d && d[b]) || (!d && h(c.target, b))) && ((e = f(c, b)), a(c.target).trigger(e)), e;
            }
            function p(b) {
                var d,
                    c = a.data(b.target, y);
                J || (O && O === c) || ((d = o("v" + b.type, b)) && (d.isDefaultPrevented() && b.preventDefault(), d.isPropagationStopped() && b.stopPropagation(), d.isImmediatePropagationStopped() && b.stopImmediatePropagation()));
            }
            function q(b) {
                var d,
                    f,
                    h,
                    c = e(b).touches;
                c && 1 === c.length && ((d = b.target), (f = g(d)), f.hasVirtualBinding && ((O = N++), a.data(d, y, O), n(), l(), (H = !1), (h = e(b).touches[0]), (F = h.pageX), (G = h.pageY), o("vmouseover", b, f), o("vmousedown", b, f)));
            }
            function r(a) {
                K || (H || o("vmousecancel", a, g(a.target)), (H = !0), m());
            }
            function s(b) {
                if (!K) {
                    var c = e(b).touches[0],
                        d = H,
                        f = a.vmouse.moveDistanceThreshold,
                        h = g(b.target);
                    (H = H || Math.abs(c.pageX - F) > f || Math.abs(c.pageY - G) > f), H && !d && o("vmousecancel", b, h), o("vmousemove", b, h), m();
                }
            }
            function t(a) {
                var b, c, d;
                K ||
                    (j(),
                    (b = g(a.target)),
                    o("vmouseup", a, b),
                    H || ((d = o("vclick", a, b)) && d.isDefaultPrevented() && ((c = e(a).changedTouches[0]), I.push({ touchID: O, x: c.clientX, y: c.clientY }), (J = !0))),
                    o("vmouseout", a, b),
                    (H = !1),
                    m());
            }
            function u(b) {
                var d,
                    c = a.data(b, x);
                if (c) for (d in c) if (c[d]) return !0;
                return !1;
            }
            function v() {}
            function w(b) {
                var c = b.substr(1);
                return {
                    setup: function () {
                        u(this) || a.data(this, x, {}),
                            (a.data(this, x)[b] = !0),
                            (D[b] = (D[b] || 0) + 1),
                            1 === D[b] && M.bind(c, p),
                            a(this).bind(c, v),
                            L && ((D.touchstart = (D.touchstart || 0) + 1), 1 === D.touchstart && M.bind("touchstart", q).bind("touchend", t).bind("touchmove", s).bind("scroll", r));
                    },
                    teardown: function () {
                        --D[b], D[b] || M.unbind(c, p), L && (--D.touchstart || M.unbind("touchstart", q).unbind("touchmove", s).unbind("touchend", t).unbind("scroll", r));
                        var d = a(this),
                            e = a.data(this, x);
                        e && (e[b] = !1), d.unbind(c, v), u(this) || d.removeData(x);
                    },
                };
            }
            var P,
                Q,
                x = "virtualMouseBindings",
                y = "virtualTouchID",
                z = "vmouseover vmousedown vmousemove vmouseup vclick vmouseout vmousecancel".split(" "),
                A = "clientX clientY pageX pageY screenX screenY".split(" "),
                B = a.event.mouseHooks ? a.event.mouseHooks.props : [],
                C = a.event.props.concat(B),
                D = {},
                E = 0,
                F = 0,
                G = 0,
                H = !1,
                I = [],
                J = !1,
                K = !1,
                L = "addEventListener" in c,
                M = a(c),
                N = 1,
                O = 0;
            for (a.vmouse = { moveDistanceThreshold: 10, clickDistanceThreshold: 10, resetTimerDuration: 1500 }, Q = 0; Q < z.length; Q++) a.event.special[z[Q]] = w(z[Q]);
            L &&
                c.addEventListener(
                    "click",
                    function (b) {
                        var e,
                            f,
                            g,
                            h,
                            i,
                            c = I.length,
                            d = b.target;
                        if (c)
                            for (e = b.clientX, f = b.clientY, P = a.vmouse.clickDistanceThreshold, g = d; g; ) {
                                for (h = 0; h < c; h++) if (((i = I[h]), 0, (g === d && Math.abs(i.x - e) < P && Math.abs(i.y - f) < P) || a.data(g, y) === i.touchID)) return b.preventDefault(), void b.stopPropagation();
                                g = g.parentNode;
                            }
                    },
                    !0
                );
        })(a, 0, c),
            (function (a) {
                a.mobile = {};
            })(a),
            (function (a) {
                var b = { touch: "ontouchend" in c };
                (a.mobile.support = a.mobile.support || {}), a.extend(a.support, b), a.extend(a.mobile.support, b);
            })(a),
            (function (a, b, d) {
                function e(b, c, d) {
                    var e = d.type;
                    (d.type = c), a.event.dispatch.call(b, d), (d.type = e);
                }
                var f = a(c);
                a.each("touchstart touchmove touchend tap taphold swipe swipeleft swiperight scrollstart scrollstop".split(" "), function (b, c) {
                    (a.fn[c] = function (a) {
                        return a ? this.bind(c, a) : this.trigger(c);
                    }),
                        a.attrFn && (a.attrFn[c] = !0);
                });
                var g = a.mobile.support.touch,
                    i = g ? "touchstart" : "mousedown",
                    j = g ? "touchend" : "mouseup",
                    k = g ? "touchmove" : "mousemove";
                (a.event.special.scrollstart = {
                    enabled: !0,
                    setup: function () {
                        function b(a, b) {
                            (f = b), e(c, f ? "scrollstart" : "scrollstop", a);
                        }
                        var f,
                            g,
                            c = this;
                        a(c).bind("touchmove scroll", function (c) {
                            a.event.special.scrollstart.enabled &&
                                (f || b(c, !0),
                                clearTimeout(g),
                                (g = setTimeout(function () {
                                    b(c, !1);
                                }, 50)));
                        });
                    },
                }),
                    (a.event.special.tap = {
                        tapholdThreshold: 750,
                        setup: function () {
                            var b = this,
                                c = a(b);
                            c.bind("vmousedown", function (d) {
                                function g() {
                                    clearTimeout(l);
                                }
                                function h() {
                                    g(), c.unbind("vclick", i).unbind("vmouseup", g), f.unbind("vmousecancel", h);
                                }
                                function i(a) {
                                    h(), j === a.target && e(b, "tap", a);
                                }
                                if (d.which && 1 !== d.which) return !1;
                                var l,
                                    j = d.target;
                                d.originalEvent,
                                    c.bind("vmouseup", g).bind("vclick", i),
                                    f.bind("vmousecancel", h),
                                    (l = setTimeout(function () {
                                        e(b, "taphold", a.Event("taphold", { target: j }));
                                    }, a.event.special.tap.tapholdThreshold));
                            });
                        },
                    }),
                    (a.event.special.swipe = {
                        scrollSupressionThreshold: 30,
                        durationThreshold: 1e3,
                        horizontalDistanceThreshold: 30,
                        verticalDistanceThreshold: 75,
                        start: function (b) {
                            var c = b.originalEvent.touches ? b.originalEvent.touches[0] : b;
                            return { time: new Date().getTime(), coords: [c.pageX, c.pageY], origin: a(b.target) };
                        },
                        stop: function (a) {
                            var b = a.originalEvent.touches ? a.originalEvent.touches[0] : a;
                            return { time: new Date().getTime(), coords: [b.pageX, b.pageY] };
                        },
                        handleSwipe: function (b, c) {
                            c.time - b.time < a.event.special.swipe.durationThreshold &&
                                Math.abs(b.coords[0] - c.coords[0]) > a.event.special.swipe.horizontalDistanceThreshold &&
                                Math.abs(b.coords[1] - c.coords[1]) < a.event.special.swipe.verticalDistanceThreshold &&
                                b.origin.trigger("swipe").trigger(b.coords[0] > c.coords[0] ? "swipeleft" : "swiperight");
                        },
                        setup: function () {
                            var b = this,
                                c = a(b);
                            c.bind(i, function (b) {
                                function e(b) {
                                    f && ((g = a.event.special.swipe.stop(b)), Math.abs(f.coords[0] - g.coords[0]) > a.event.special.swipe.scrollSupressionThreshold && b.preventDefault());
                                }
                                var g,
                                    f = a.event.special.swipe.start(b);
                                c.bind(k, e).one(j, function () {
                                    c.unbind(k, e), f && g && a.event.special.swipe.handleSwipe(f, g), (f = g = d);
                                });
                            });
                        },
                    }),
                    a.each({ scrollstop: "scrollstart", taphold: "tap", swipeleft: "swipe", swiperight: "swipe" }, function (b, c) {
                        a.event.special[b] = {
                            setup: function () {
                                a(this).bind(c, a.noop);
                            },
                        };
                    });
            })(a);
    }),
    (function (a, b) {
        var c = "ui-effects-";
        (a.effects = { effect: {} }),
            (function (a, b) {
                function c(a, b, c) {
                    var d = j[b.type] || {};
                    return null == a ? (c || !b.def ? null : b.def) : ((a = d.floor ? ~~a : parseFloat(a)), isNaN(a) ? b.def : d.mod ? (a + d.mod) % d.mod : 0 > a ? 0 : d.max < a ? d.max : a);
                }
                function d(b) {
                    var c = h(),
                        d = (c._rgba = []);
                    return (
                        (b = b.toLowerCase()),
                        n(g, function (a, e) {
                            var f,
                                g = e.re.exec(b),
                                h = g && e.parse(g),
                                j = e.space || "rgba";
                            if (h) return (f = c[j](h)), (c[i[j].cache] = f[i[j].cache]), (d = c._rgba = f._rgba), !1;
                        }),
                        d.length ? ("0,0,0,0" === d.join() && a.extend(d, m.transparent), c) : m[b]
                    );
                }
                function e(a, b, c) {
                    return 6 * (c = (c + 1) % 1) < 1 ? a + (b - a) * c * 6 : 2 * c < 1 ? b : 3 * c < 2 ? a + (b - a) * (2 / 3 - c) * 6 : a;
                }
                var m,
                    f = /^([\-+])=\s*(\d+\.?\d*)/,
                    g = [
                        {
                            re: /rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
                            parse: function (a) {
                                return [a[1], a[2], a[3], a[4]];
                            },
                        },
                        {
                            re: /rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
                            parse: function (a) {
                                return [2.55 * a[1], 2.55 * a[2], 2.55 * a[3], a[4]];
                            },
                        },
                        {
                            re: /#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,
                            parse: function (a) {
                                return [parseInt(a[1], 16), parseInt(a[2], 16), parseInt(a[3], 16)];
                            },
                        },
                        {
                            re: /#([a-f0-9])([a-f0-9])([a-f0-9])/,
                            parse: function (a) {
                                return [parseInt(a[1] + a[1], 16), parseInt(a[2] + a[2], 16), parseInt(a[3] + a[3], 16)];
                            },
                        },
                        {
                            re: /hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
                            space: "hsla",
                            parse: function (a) {
                                return [a[1], a[2] / 100, a[3] / 100, a[4]];
                            },
                        },
                    ],
                    h = (a.Color = function (b, c, d, e) {
                        return new a.Color.fn.parse(b, c, d, e);
                    }),
                    i = {
                        rgba: { props: { red: { idx: 0, type: "byte" }, green: { idx: 1, type: "byte" }, blue: { idx: 2, type: "byte" } } },
                        hsla: { props: { hue: { idx: 0, type: "degrees" }, saturation: { idx: 1, type: "percent" }, lightness: { idx: 2, type: "percent" } } },
                    },
                    j = { byte: { floor: !0, max: 255 }, percent: { max: 1 }, degrees: { mod: 360, floor: !0 } },
                    k = (h.support = {}),
                    l = a("<p>")[0],
                    n = a.each;
                (l.style.cssText = "background-color:rgba(1,1,1,.5)"),
                    (k.rgba = l.style.backgroundColor.indexOf("rgba") > -1),
                    n(i, function (a, b) {
                        (b.cache = "_" + a), (b.props.alpha = { idx: 3, type: "percent", def: 1 });
                    }),
                    (h.fn = a.extend(h.prototype, {
                        parse: function (e, f, g, j) {
                            if (e === b) return (this._rgba = [null, null, null, null]), this;
                            (e.jquery || e.nodeType) && ((e = a(e).css(f)), (f = b));
                            var k = this,
                                l = a.type(e),
                                o = (this._rgba = []);
                            return (
                                f !== b && ((e = [e, f, g, j]), (l = "array")),
                                "string" === l
                                    ? this.parse(d(e) || m._default)
                                    : "array" === l
                                    ? (n(i.rgba.props, function (a, b) {
                                          o[b.idx] = c(e[b.idx], b);
                                      }),
                                      this)
                                    : "object" === l
                                    ? (e instanceof h
                                          ? n(i, function (a, b) {
                                                e[b.cache] && (k[b.cache] = e[b.cache].slice());
                                            })
                                          : n(i, function (b, d) {
                                                var f = d.cache;
                                                n(d.props, function (a, b) {
                                                    if (!k[f] && d.to) {
                                                        if ("alpha" === a || null == e[a]) return;
                                                        k[f] = d.to(k._rgba);
                                                    }
                                                    k[f][b.idx] = c(e[a], b, !0);
                                                }),
                                                    k[f] && a.inArray(null, k[f].slice(0, 3)) < 0 && ((k[f][3] = 1), d.from && (k._rgba = d.from(k[f])));
                                            }),
                                      this)
                                    : void 0
                            );
                        },
                        is: function (a) {
                            var b = h(a),
                                c = !0,
                                d = this;
                            return (
                                n(i, function (a, e) {
                                    var f,
                                        g = b[e.cache];
                                    return (
                                        g &&
                                            ((f = d[e.cache] || (e.to && e.to(d._rgba)) || []),
                                            n(e.props, function (a, b) {
                                                if (null != g[b.idx]) return (c = g[b.idx] === f[b.idx]);
                                            })),
                                        c
                                    );
                                }),
                                c
                            );
                        },
                        _space: function () {
                            var a = [],
                                b = this;
                            return (
                                n(i, function (c, d) {
                                    b[d.cache] && a.push(c);
                                }),
                                a.pop()
                            );
                        },
                        transition: function (a, b) {
                            var d = h(a),
                                e = d._space(),
                                f = i[e],
                                g = 0 === this.alpha() ? h("transparent") : this,
                                k = g[f.cache] || f.to(g._rgba),
                                l = k.slice();
                            return (
                                (d = d[f.cache]),
                                n(f.props, function (a, e) {
                                    var f = e.idx,
                                        g = k[f],
                                        h = d[f],
                                        i = j[e.type] || {};
                                    null !== h && (null === g ? (l[f] = h) : (i.mod && (h - g > i.mod / 2 ? (g += i.mod) : g - h > i.mod / 2 && (g -= i.mod)), (l[f] = c((h - g) * b + g, e))));
                                }),
                                this[e](l)
                            );
                        },
                        blend: function (b) {
                            if (1 === this._rgba[3]) return this;
                            var c = this._rgba.slice(),
                                d = c.pop(),
                                e = h(b)._rgba;
                            return h(
                                a.map(c, function (a, b) {
                                    return (1 - d) * e[b] + d * a;
                                })
                            );
                        },
                        toRgbaString: function () {
                            var b = "rgba(",
                                c = a.map(this._rgba, function (a, b) {
                                    return null == a ? (b > 2 ? 1 : 0) : a;
                                });
                            return 1 === c[3] && (c.pop(), (b = "rgb(")), b + c.join() + ")";
                        },
                        toHslaString: function () {
                            var b = "hsla(",
                                c = a.map(this.hsla(), function (a, b) {
                                    return null == a && (a = b > 2 ? 1 : 0), b && b < 3 && (a = Math.round(100 * a) + "%"), a;
                                });
                            return 1 === c[3] && (c.pop(), (b = "hsl(")), b + c.join() + ")";
                        },
                        toHexString: function (b) {
                            var c = this._rgba.slice(),
                                d = c.pop();
                            return (
                                b && c.push(~~(255 * d)),
                                "#" +
                                    a
                                        .map(c, function (a) {
                                            return (a = (a || 0).toString(16)), 1 === a.length ? "0" + a : a;
                                        })
                                        .join("")
                            );
                        },
                        toString: function () {
                            return 0 === this._rgba[3] ? "transparent" : this.toRgbaString();
                        },
                    })),
                    (h.fn.parse.prototype = h.fn),
                    (i.hsla.to = function (a) {
                        if (null == a[0] || null == a[1] || null == a[2]) return [null, null, null, a[3]];
                        var k,
                            l,
                            b = a[0] / 255,
                            c = a[1] / 255,
                            d = a[2] / 255,
                            e = a[3],
                            f = Math.max(b, c, d),
                            g = Math.min(b, c, d),
                            h = f - g,
                            i = f + g,
                            j = 0.5 * i;
                        return (
                            (k = g === f ? 0 : b === f ? (60 * (c - d)) / h + 360 : c === f ? (60 * (d - b)) / h + 120 : (60 * (b - c)) / h + 240),
                            (l = 0 === h ? 0 : j <= 0.5 ? h / i : h / (2 - i)),
                            [Math.round(k) % 360, l, j, null == e ? 1 : e]
                        );
                    }),
                    (i.hsla.from = function (a) {
                        if (null == a[0] || null == a[1] || null == a[2]) return [null, null, null, a[3]];
                        var b = a[0] / 360,
                            c = a[1],
                            d = a[2],
                            f = a[3],
                            g = d <= 0.5 ? d * (1 + c) : d + c - d * c,
                            h = 2 * d - g;
                        return [Math.round(255 * e(h, g, b + 1 / 3)), Math.round(255 * e(h, g, b)), Math.round(255 * e(h, g, b - 1 / 3)), f];
                    }),
                    n(i, function (d, e) {
                        var g = e.props,
                            i = e.cache,
                            j = e.to,
                            k = e.from;
                        (h.fn[d] = function (d) {
                            if ((j && !this[i] && (this[i] = j(this._rgba)), d === b)) return this[i].slice();
                            var e,
                                f = a.type(d),
                                l = "array" === f || "object" === f ? d : arguments,
                                m = this[i].slice();
                            return (
                                n(g, function (a, b) {
                                    var d = l["object" === f ? a : b.idx];
                                    null == d && (d = m[b.idx]), (m[b.idx] = c(d, b));
                                }),
                                k ? ((e = h(k(m))), (e[i] = m), e) : h(m)
                            );
                        }),
                            n(g, function (b, c) {
                                h.fn[b] ||
                                    (h.fn[b] = function (e) {
                                        var k,
                                            g = a.type(e),
                                            h = "alpha" === b ? (this._hsla ? "hsla" : "rgba") : d,
                                            i = this[h](),
                                            j = i[c.idx];
                                        return "undefined" === g
                                            ? j
                                            : ("function" === g && ((e = e.call(this, j)), (g = a.type(e))),
                                              null == e && c.empty ? this : ("string" === g && (k = f.exec(e)) && (e = j + parseFloat(k[2]) * ("+" === k[1] ? 1 : -1)), (i[c.idx] = e), this[h](i)));
                                    });
                            });
                    }),
                    (h.hook = function (b) {
                        var c = b.split(" ");
                        n(c, function (b, c) {
                            (a.cssHooks[c] = {
                                set: function (b, e) {
                                    var f,
                                        g,
                                        i = "";
                                    if ("transparent" !== e && ("string" !== a.type(e) || (f = d(e)))) {
                                        if (((e = h(f || e)), !k.rgba && 1 !== e._rgba[3])) {
                                            for (g = "backgroundColor" === c ? b.parentNode : b; ("" === i || "transparent" === i) && g && g.style; )
                                                try {
                                                    (i = a.css(g, "backgroundColor")), (g = g.parentNode);
                                                } catch (a) {}
                                            e = e.blend(i && "transparent" !== i ? i : "_default");
                                        }
                                        e = e.toRgbaString();
                                    }
                                    try {
                                        b.style[c] = e;
                                    } catch (a) {}
                                },
                            }),
                                (a.fx.step[c] = function (b) {
                                    b.colorInit || ((b.start = h(b.elem, c)), (b.end = h(b.end)), (b.colorInit = !0)), a.cssHooks[c].set(b.elem, b.start.transition(b.end, b.pos));
                                });
                        });
                    }),
                    h.hook("backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor"),
                    (a.cssHooks.borderColor = {
                        expand: function (a) {
                            var b = {};
                            return (
                                n(["Top", "Right", "Bottom", "Left"], function (c, d) {
                                    b["border" + d + "Color"] = a;
                                }),
                                b
                            );
                        },
                    }),
                    (m = a.Color.names = {
                        aqua: "#00ffff",
                        black: "#000000",
                        blue: "#0000ff",
                        fuchsia: "#ff00ff",
                        gray: "#808080",
                        green: "#008000",
                        lime: "#00ff00",
                        maroon: "#800000",
                        navy: "#000080",
                        olive: "#808000",
                        purple: "#800080",
                        red: "#ff0000",
                        silver: "#c0c0c0",
                        teal: "#008080",
                        white: "#ffffff",
                        yellow: "#ffff00",
                        transparent: [null, null, null, 0],
                        _default: "#ffffff",
                    });
            })(jQuery),
            (function () {
                function c(b) {
                    var c,
                        d,
                        e = b.ownerDocument.defaultView ? b.ownerDocument.defaultView.getComputedStyle(b, null) : b.currentStyle,
                        f = {};
                    if (e && e.length && e[0] && e[e[0]]) for (d = e.length; d--; ) (c = e[d]), "string" == typeof e[c] && (f[a.camelCase(c)] = e[c]);
                    else for (c in e) "string" == typeof e[c] && (f[c] = e[c]);
                    return f;
                }
                function d(b, c) {
                    var e,
                        g,
                        d = {};
                    for (e in c) (g = c[e]), b[e] !== g && (f[e] || ((a.fx.step[e] || !isNaN(parseFloat(g))) && (d[e] = g)));
                    return d;
                }
                var e = ["add", "remove", "toggle"],
                    f = { border: 1, borderBottom: 1, borderColor: 1, borderLeft: 1, borderRight: 1, borderTop: 1, borderWidth: 1, margin: 1, padding: 1 };
                a.each(["borderLeftStyle", "borderRightStyle", "borderBottomStyle", "borderTopStyle"], function (b, c) {
                    a.fx.step[c] = function (a) {
                        (("none" === a.end || a.setAttr) && (1 !== a.pos || a.setAttr)) || (jQuery.style(a.elem, c, a.end), (a.setAttr = !0));
                    };
                }),
                    a.fn.addBack ||
                        (a.fn.addBack = function (a) {
                            return this.add(null == a ? this.prevObject : this.prevObject.filter(a));
                        }),
                    (a.effects.animateClass = function (b, f, g, h) {
                        var i = a.speed(f, g, h);
                        return this.queue(function () {
                            var h,
                                f = a(this),
                                g = f.attr("class") || "",
                                j = i.children ? f.find("*").addBack() : f;
                            (j = j.map(function () {
                                return { el: a(this), start: c(this) };
                            })),
                                (h = function () {
                                    a.each(e, function (a, c) {
                                        b[c] && f[c + "Class"](b[c]);
                                    });
                                }),
                                h(),
                                (j = j.map(function () {
                                    return (this.end = c(this.el[0])), (this.diff = d(this.start, this.end)), this;
                                })),
                                f.attr("class", g),
                                (j = j.map(function () {
                                    var b = this,
                                        c = a.Deferred(),
                                        d = a.extend({}, i, {
                                            queue: !1,
                                            complete: function () {
                                                c.resolve(b);
                                            },
                                        });
                                    return this.el.animate(this.diff, d), c.promise();
                                })),
                                a.when.apply(a, j.get()).done(function () {
                                    h(),
                                        a.each(arguments, function () {
                                            var b = this.el;
                                            a.each(this.diff, function (a) {
                                                b.css(a, "");
                                            });
                                        }),
                                        i.complete.call(f[0]);
                                });
                        });
                    }),
                    a.fn.extend({
                        addClass: (function (b) {
                            return function (c, d, e, f) {
                                return d ? a.effects.animateClass.call(this, { add: c }, d, e, f) : b.apply(this, arguments);
                            };
                        })(a.fn.addClass),
                        removeClass: (function (b) {
                            return function (c, d, e, f) {
                                return arguments.length > 1 ? a.effects.animateClass.call(this, { remove: c }, d, e, f) : b.apply(this, arguments);
                            };
                        })(a.fn.removeClass),
                        toggleClass: (function (c) {
                            return function (d, e, f, g, h) {
                                return "boolean" == typeof e || e === b
                                    ? f
                                        ? a.effects.animateClass.call(this, e ? { add: d } : { remove: d }, f, g, h)
                                        : c.apply(this, arguments)
                                    : a.effects.animateClass.call(this, { toggle: d }, e, f, g);
                            };
                        })(a.fn.toggleClass),
                        switchClass: function (b, c, d, e, f) {
                            return a.effects.animateClass.call(this, { add: c, remove: b }, d, e, f);
                        },
                    });
            })(),
            (function () {
                function d(b, c, d, e) {
                    return (
                        a.isPlainObject(b) && ((c = b), (b = b.effect)),
                        (b = { effect: b }),
                        null == c && (c = {}),
                        a.isFunction(c) && ((e = c), (d = null), (c = {})),
                        ("number" == typeof c || a.fx.speeds[c]) && ((e = d), (d = c), (c = {})),
                        a.isFunction(d) && ((e = d), (d = null)),
                        c && a.extend(b, c),
                        (d = d || c.duration),
                        (b.duration = a.fx.off ? 0 : "number" == typeof d ? d : d in a.fx.speeds ? a.fx.speeds[d] : a.fx.speeds._default),
                        (b.complete = e || c.complete),
                        b
                    );
                }
                function e(b) {
                    return !(b && "number" != typeof b && !a.fx.speeds[b]) || ("string" == typeof b && !a.effects.effect[b]) || !!a.isFunction(b) || ("object" == typeof b && !b.effect);
                }
                a.extend(a.effects, {
                    version: "1.10.4",
                    save: function (a, b) {
                        for (var d = 0; d < b.length; d++) null !== b[d] && a.data(c + b[d], a[0].style[b[d]]);
                    },
                    restore: function (a, d) {
                        for (var e, f = 0; f < d.length; f++) null !== d[f] && ((e = a.data(c + d[f])), e === b && (e = ""), a.css(d[f], e));
                    },
                    setMode: function (a, b) {
                        return "toggle" === b && (b = a.is(":hidden") ? "show" : "hide"), b;
                    },
                    getBaseline: function (a, b) {
                        var c, d;
                        switch (a[0]) {
                            case "top":
                                c = 0;
                                break;
                            case "middle":
                                c = 0.5;
                                break;
                            case "bottom":
                                c = 1;
                                break;
                            default:
                                c = a[0] / b.height;
                        }
                        switch (a[1]) {
                            case "left":
                                d = 0;
                                break;
                            case "center":
                                d = 0.5;
                                break;
                            case "right":
                                d = 1;
                                break;
                            default:
                                d = a[1] / b.width;
                        }
                        return { x: d, y: c };
                    },
                    createWrapper: function (b) {
                        if (b.parent().is(".ui-effects-wrapper")) return b.parent();
                        var c = { width: b.outerWidth(!0), height: b.outerHeight(!0), float: b.css("float") },
                            d = a("<div></div>").addClass("ui-effects-wrapper").css({ fontSize: "100%", background: "transparent", border: "none", margin: 0, padding: 0 }),
                            e = { width: b.width(), height: b.height() },
                            f = document.activeElement;
                        try {
                            f.id;
                        } catch (a) {
                            f = document.body;
                        }
                        return (
                            b.wrap(d),
                            (b[0] === f || a.contains(b[0], f)) && a(f).focus(),
                            (d = b.parent()),
                            "static" === b.css("position")
                                ? (d.css({ position: "relative" }), b.css({ position: "relative" }))
                                : (a.extend(c, { position: b.css("position"), zIndex: b.css("z-index") }),
                                  a.each(["top", "left", "bottom", "right"], function (a, d) {
                                      (c[d] = b.css(d)), isNaN(parseInt(c[d], 10)) && (c[d] = "auto");
                                  }),
                                  b.css({ position: "relative", top: 0, left: 0, right: "auto", bottom: "auto" })),
                            b.css(e),
                            d.css(c).show()
                        );
                    },
                    removeWrapper: function (b) {
                        var c = document.activeElement;
                        return b.parent().is(".ui-effects-wrapper") && (b.parent().replaceWith(b), (b[0] === c || a.contains(b[0], c)) && a(c).focus()), b;
                    },
                    setTransition: function (b, c, d, e) {
                        return (
                            (e = e || {}),
                            a.each(c, function (a, c) {
                                var f = b.cssUnit(c);
                                f[0] > 0 && (e[c] = f[0] * d + f[1]);
                            }),
                            e
                        );
                    },
                }),
                    a.fn.extend({
                        effect: function () {
                            function b(b) {
                                function d() {
                                    a.isFunction(f) && f.call(e[0]), a.isFunction(b) && b();
                                }
                                var e = a(this),
                                    f = c.complete,
                                    h = c.mode;
                                (e.is(":hidden") ? "hide" === h : "show" === h) ? (e[h](), d()) : g.call(e[0], c, d);
                            }
                            var c = d.apply(this, arguments),
                                e = c.mode,
                                f = c.queue,
                                g = a.effects.effect[c.effect];
                            return a.fx.off || !g
                                ? e
                                    ? this[e](c.duration, c.complete)
                                    : this.each(function () {
                                          c.complete && c.complete.call(this);
                                      })
                                : !1 === f
                                ? this.each(b)
                                : this.queue(f || "fx", b);
                        },
                        show: (function (a) {
                            return function (b) {
                                if (e(b)) return a.apply(this, arguments);
                                var c = d.apply(this, arguments);
                                return (c.mode = "show"), this.effect.call(this, c);
                            };
                        })(a.fn.show),
                        hide: (function (a) {
                            return function (b) {
                                if (e(b)) return a.apply(this, arguments);
                                var c = d.apply(this, arguments);
                                return (c.mode = "hide"), this.effect.call(this, c);
                            };
                        })(a.fn.hide),
                        toggle: (function (a) {
                            return function (b) {
                                if (e(b) || "boolean" == typeof b) return a.apply(this, arguments);
                                var c = d.apply(this, arguments);
                                return (c.mode = "toggle"), this.effect.call(this, c);
                            };
                        })(a.fn.toggle),
                        cssUnit: function (b) {
                            var c = this.css(b),
                                d = [];
                            return (
                                a.each(["em", "px", "%", "pt"], function (a, b) {
                                    c.indexOf(b) > 0 && (d = [parseFloat(c), b]);
                                }),
                                d
                            );
                        },
                    });
            })(),
            (function () {
                var b = {};
                a.each(["Quad", "Cubic", "Quart", "Quint", "Expo"], function (a, c) {
                    b[c] = function (b) {
                        return Math.pow(b, a + 2);
                    };
                }),
                    a.extend(b, {
                        Sine: function (a) {
                            return 1 - Math.cos((a * Math.PI) / 2);
                        },
                        Circ: function (a) {
                            return 1 - Math.sqrt(1 - a * a);
                        },
                        Elastic: function (a) {
                            return 0 === a || 1 === a ? a : -Math.pow(2, 8 * (a - 1)) * Math.sin(((80 * (a - 1) - 7.5) * Math.PI) / 15);
                        },
                        Back: function (a) {
                            return a * a * (3 * a - 2);
                        },
                        Bounce: function (a) {
                            for (var b, c = 4; a < ((b = Math.pow(2, --c)) - 1) / 11; );
                            return 1 / Math.pow(4, 3 - c) - 7.5625 * Math.pow((3 * b - 2) / 22 - a, 2);
                        },
                    }),
                    a.each(b, function (b, c) {
                        (a.easing["easeIn" + b] = c),
                            (a.easing["easeOut" + b] = function (a) {
                                return 1 - c(1 - a);
                            }),
                            (a.easing["easeInOut" + b] = function (a) {
                                return a < 0.5 ? c(2 * a) / 2 : 1 - c(-2 * a + 2) / 2;
                            });
                    });
            })();
    })(jQuery),
    (function (a) {
        var b = /up|down|vertical/,
            c = /up|left|vertical|horizontal/;
        a.effects.effect.blind = function (d, e) {
            var p,
                q,
                r,
                f = a(this),
                g = ["position", "top", "bottom", "left", "right", "height", "width"],
                h = a.effects.setMode(f, d.mode || "hide"),
                i = d.direction || "up",
                j = b.test(i),
                k = j ? "height" : "width",
                l = j ? "top" : "left",
                m = c.test(i),
                n = {},
                o = "show" === h;
            f.parent().is(".ui-effects-wrapper") ? a.effects.save(f.parent(), g) : a.effects.save(f, g),
                f.show(),
                (p = a.effects.createWrapper(f).css({ overflow: "hidden" })),
                (q = p[k]()),
                (r = parseFloat(p.css(l)) || 0),
                (n[k] = o ? q : 0),
                m ||
                    (f
                        .css(j ? "bottom" : "right", 0)
                        .css(j ? "top" : "left", "auto")
                        .css({ position: "absolute" }),
                    (n[l] = o ? r : q + r)),
                o && (p.css(k, 0), m || p.css(l, r + q)),
                p.animate(n, {
                    duration: d.duration,
                    easing: d.easing,
                    queue: !1,
                    complete: function () {
                        "hide" === h && f.hide(), a.effects.restore(f, g), a.effects.removeWrapper(f), e();
                    },
                });
        };
    })(jQuery),
    (function (a) {
        a.effects.effect.bounce = function (b, c) {
            var q,
                r,
                s,
                d = a(this),
                e = ["position", "top", "bottom", "left", "right", "height", "width"],
                f = a.effects.setMode(d, b.mode || "effect"),
                g = "hide" === f,
                h = "show" === f,
                i = b.direction || "up",
                j = b.distance,
                k = b.times || 5,
                l = 2 * k + (h || g ? 1 : 0),
                m = b.duration / l,
                n = b.easing,
                o = "up" === i || "down" === i ? "top" : "left",
                p = "up" === i || "left" === i,
                t = d.queue(),
                u = t.length;
            for (
                (h || g) && e.push("opacity"),
                    a.effects.save(d, e),
                    d.show(),
                    a.effects.createWrapper(d),
                    j || (j = d["top" === o ? "outerHeight" : "outerWidth"]() / 3),
                    h &&
                        ((s = { opacity: 1 }),
                        (s[o] = 0),
                        d
                            .css("opacity", 0)
                            .css(o, p ? 2 * -j : 2 * j)
                            .animate(s, m, n)),
                    g && (j /= Math.pow(2, k - 1)),
                    s = {},
                    s[o] = 0,
                    q = 0;
                q < k;
                q++
            )
                (r = {}), (r[o] = (p ? "-=" : "+=") + j), d.animate(r, m, n).animate(s, m, n), (j = g ? 2 * j : j / 2);
            g && ((r = { opacity: 0 }), (r[o] = (p ? "-=" : "+=") + j), d.animate(r, m, n)),
                d.queue(function () {
                    g && d.hide(), a.effects.restore(d, e), a.effects.removeWrapper(d), c();
                }),
                u > 1 && t.splice.apply(t, [1, 0].concat(t.splice(u, l + 1))),
                d.dequeue();
        };
    })(jQuery),
    (function (a) {
        a.effects.effect.clip = function (b, c) {
            var m,
                n,
                o,
                d = a(this),
                e = ["position", "top", "bottom", "left", "right", "height", "width"],
                f = a.effects.setMode(d, b.mode || "hide"),
                g = "show" === f,
                h = b.direction || "vertical",
                i = "vertical" === h,
                j = i ? "height" : "width",
                k = i ? "top" : "left",
                l = {};
            a.effects.save(d, e),
                d.show(),
                (m = a.effects.createWrapper(d).css({ overflow: "hidden" })),
                (n = "IMG" === d[0].tagName ? m : d),
                (o = n[j]()),
                g && (n.css(j, 0), n.css(k, o / 2)),
                (l[j] = g ? o : 0),
                (l[k] = g ? 0 : o / 2),
                n.animate(l, {
                    queue: !1,
                    duration: b.duration,
                    easing: b.easing,
                    complete: function () {
                        g || d.hide(), a.effects.restore(d, e), a.effects.removeWrapper(d), c();
                    },
                });
        };
    })(jQuery),
    (function (a) {
        a.effects.effect.drop = function (b, c) {
            var l,
                d = a(this),
                e = ["position", "top", "bottom", "left", "right", "opacity", "height", "width"],
                f = a.effects.setMode(d, b.mode || "hide"),
                g = "show" === f,
                h = b.direction || "left",
                i = "up" === h || "down" === h ? "top" : "left",
                j = "up" === h || "left" === h ? "pos" : "neg",
                k = { opacity: g ? 1 : 0 };
            a.effects.save(d, e),
                d.show(),
                a.effects.createWrapper(d),
                (l = b.distance || d["top" === i ? "outerHeight" : "outerWidth"](!0) / 2),
                g && d.css("opacity", 0).css(i, "pos" === j ? -l : l),
                (k[i] = (g ? ("pos" === j ? "+=" : "-=") : "pos" === j ? "-=" : "+=") + l),
                d.animate(k, {
                    queue: !1,
                    duration: b.duration,
                    easing: b.easing,
                    complete: function () {
                        "hide" === f && d.hide(), a.effects.restore(d, e), a.effects.removeWrapper(d), c();
                    },
                });
        };
    })(jQuery),
    (function (a) {
        a.effects.effect.explode = function (b, c) {
            function d() {
                n.push(this), n.length === f * g && e();
            }
            function e() {
                h.css({ visibility: "visible" }), a(n).remove(), j || h.hide(), c();
            }
            for (
                var o,
                    p,
                    q,
                    r,
                    s,
                    f = b.pieces ? Math.round(Math.sqrt(b.pieces)) : 3,
                    g = f,
                    h = a(this),
                    i = a.effects.setMode(h, b.mode || "hide"),
                    j = "show" === i,
                    k = h.show().css("visibility", "hidden").offset(),
                    l = Math.ceil(h.outerWidth() / g),
                    m = Math.ceil(h.outerHeight() / f),
                    n = [],
                    t = 0;
                t < f;
                t++
            )
                for (q = k.top + t * m, s = t - (f - 1) / 2, o = 0; o < g; o++)
                    (p = k.left + o * l),
                        (r = o - (g - 1) / 2),
                        h
                            .clone()
                            .appendTo("body")
                            .wrap("<div></div>")
                            .css({ position: "absolute", visibility: "visible", left: -o * l, top: -t * m })
                            .parent()
                            .addClass("ui-effects-explode")
                            .css({ position: "absolute", overflow: "hidden", width: l, height: m, left: p + (j ? r * l : 0), top: q + (j ? s * m : 0), opacity: j ? 0 : 1 })
                            .animate({ left: p + (j ? 0 : r * l), top: q + (j ? 0 : s * m), opacity: j ? 1 : 0 }, b.duration || 500, b.easing, d);
        };
    })(jQuery),
    (function (a) {
        a.effects.effect.fade = function (b, c) {
            var d = a(this),
                e = a.effects.setMode(d, b.mode || "toggle");
            d.animate({ opacity: e }, { queue: !1, duration: b.duration, easing: b.easing, complete: c });
        };
    })(jQuery),
    (function (a) {
        a.effects.effect.fold = function (b, c) {
            var o,
                p,
                d = a(this),
                e = ["position", "top", "bottom", "left", "right", "height", "width"],
                f = a.effects.setMode(d, b.mode || "hide"),
                g = "show" === f,
                h = "hide" === f,
                i = b.size || 15,
                j = /([0-9]+)%/.exec(i),
                k = !!b.horizFirst,
                l = g !== k,
                m = l ? ["width", "height"] : ["height", "width"],
                n = b.duration / 2,
                q = {},
                r = {};
            a.effects.save(d, e),
                d.show(),
                (o = a.effects.createWrapper(d).css({ overflow: "hidden" })),
                (p = l ? [o.width(), o.height()] : [o.height(), o.width()]),
                j && (i = (parseInt(j[1], 10) / 100) * p[h ? 0 : 1]),
                g && o.css(k ? { height: 0, width: i } : { height: i, width: 0 }),
                (q[m[0]] = g ? p[0] : i),
                (r[m[1]] = g ? p[1] : 0),
                o.animate(q, n, b.easing).animate(r, n, b.easing, function () {
                    h && d.hide(), a.effects.restore(d, e), a.effects.removeWrapper(d), c();
                });
        };
    })(jQuery),
    (function (a) {
        a.effects.effect.highlight = function (b, c) {
            var d = a(this),
                e = ["backgroundImage", "backgroundColor", "opacity"],
                f = a.effects.setMode(d, b.mode || "show"),
                g = { backgroundColor: d.css("backgroundColor") };
            "hide" === f && (g.opacity = 0),
                a.effects.save(d, e),
                d
                    .show()
                    .css({ backgroundImage: "none", backgroundColor: b.color || "#ffff99" })
                    .animate(g, {
                        queue: !1,
                        duration: b.duration,
                        easing: b.easing,
                        complete: function () {
                            "hide" === f && d.hide(), a.effects.restore(d, e), c();
                        },
                    });
        };
    })(jQuery),
    (function (a) {
        a.effects.effect.pulsate = function (b, c) {
            var n,
                d = a(this),
                e = a.effects.setMode(d, b.mode || "show"),
                f = "show" === e,
                g = "hide" === e,
                h = f || "hide" === e,
                i = 2 * (b.times || 5) + (h ? 1 : 0),
                j = b.duration / i,
                k = 0,
                l = d.queue(),
                m = l.length;
            for ((f || !d.is(":visible")) && (d.css("opacity", 0).show(), (k = 1)), n = 1; n < i; n++) d.animate({ opacity: k }, j, b.easing), (k = 1 - k);
            d.animate({ opacity: k }, j, b.easing),
                d.queue(function () {
                    g && d.hide(), c();
                }),
                m > 1 && l.splice.apply(l, [1, 0].concat(l.splice(m, i + 1))),
                d.dequeue();
        };
    })(jQuery),
    (function (a) {
        (a.effects.effect.puff = function (b, c) {
            var d = a(this),
                e = a.effects.setMode(d, b.mode || "hide"),
                f = "hide" === e,
                g = parseInt(b.percent, 10) || 150,
                h = g / 100,
                i = { height: d.height(), width: d.width(), outerHeight: d.outerHeight(), outerWidth: d.outerWidth() };
            a.extend(b, { effect: "scale", queue: !1, fade: !0, mode: e, complete: c, percent: f ? g : 100, from: f ? i : { height: i.height * h, width: i.width * h, outerHeight: i.outerHeight * h, outerWidth: i.outerWidth * h } }),
                d.effect(b);
        }),
            (a.effects.effect.scale = function (b, c) {
                var d = a(this),
                    e = a.extend(!0, {}, b),
                    f = a.effects.setMode(d, b.mode || "effect"),
                    g = parseInt(b.percent, 10) || (0 === parseInt(b.percent, 10) ? 0 : "hide" === f ? 0 : 100),
                    h = b.direction || "both",
                    i = b.origin,
                    j = { height: d.height(), width: d.width(), outerHeight: d.outerHeight(), outerWidth: d.outerWidth() },
                    k = { y: "horizontal" !== h ? g / 100 : 1, x: "vertical" !== h ? g / 100 : 1 };
                (e.effect = "size"),
                    (e.queue = !1),
                    (e.complete = c),
                    "effect" !== f && ((e.origin = i || ["middle", "center"]), (e.restore = !0)),
                    (e.from = b.from || ("show" === f ? { height: 0, width: 0, outerHeight: 0, outerWidth: 0 } : j)),
                    (e.to = { height: j.height * k.y, width: j.width * k.x, outerHeight: j.outerHeight * k.y, outerWidth: j.outerWidth * k.x }),
                    e.fade && ("show" === f && ((e.from.opacity = 0), (e.to.opacity = 1)), "hide" === f && ((e.from.opacity = 1), (e.to.opacity = 0))),
                    d.effect(e);
            }),
            (a.effects.effect.size = function (b, c) {
                var d,
                    e,
                    f,
                    g = a(this),
                    h = ["position", "top", "bottom", "left", "right", "width", "height", "overflow", "opacity"],
                    i = ["width", "height", "overflow"],
                    j = ["fontSize"],
                    k = ["borderTopWidth", "borderBottomWidth", "paddingTop", "paddingBottom"],
                    l = ["borderLeftWidth", "borderRightWidth", "paddingLeft", "paddingRight"],
                    m = a.effects.setMode(g, b.mode || "effect"),
                    n = b.restore || "effect" !== m,
                    o = b.scale || "both",
                    p = b.origin || ["middle", "center"],
                    q = g.css("position"),
                    r = n ? h : ["position", "top", "bottom", "left", "right", "overflow", "opacity"],
                    s = { height: 0, width: 0, outerHeight: 0, outerWidth: 0 };
                "show" === m && g.show(),
                    (d = { height: g.height(), width: g.width(), outerHeight: g.outerHeight(), outerWidth: g.outerWidth() }),
                    "toggle" === b.mode && "show" === m ? ((g.from = b.to || s), (g.to = b.from || d)) : ((g.from = b.from || ("show" === m ? s : d)), (g.to = b.to || ("hide" === m ? s : d))),
                    (f = { from: { y: g.from.height / d.height, x: g.from.width / d.width }, to: { y: g.to.height / d.height, x: g.to.width / d.width } }),
                    ("box" === o || "both" === o) &&
                        (f.from.y !== f.to.y && ((r = r.concat(k)), (g.from = a.effects.setTransition(g, k, f.from.y, g.from)), (g.to = a.effects.setTransition(g, k, f.to.y, g.to))),
                        f.from.x !== f.to.x && ((r = r.concat(l)), (g.from = a.effects.setTransition(g, l, f.from.x, g.from)), (g.to = a.effects.setTransition(g, l, f.to.x, g.to)))),
                    ("content" === o || "both" === o) && f.from.y !== f.to.y && ((r = r.concat(j).concat(i)), (g.from = a.effects.setTransition(g, j, f.from.y, g.from)), (g.to = a.effects.setTransition(g, j, f.to.y, g.to))),
                    a.effects.save(g, r),
                    g.show(),
                    a.effects.createWrapper(g),
                    g.css("overflow", "hidden").css(g.from),
                    p &&
                        ((e = a.effects.getBaseline(p, d)),
                        (g.from.top = (d.outerHeight - g.outerHeight()) * e.y),
                        (g.from.left = (d.outerWidth - g.outerWidth()) * e.x),
                        (g.to.top = (d.outerHeight - g.to.outerHeight) * e.y),
                        (g.to.left = (d.outerWidth - g.to.outerWidth) * e.x)),
                    g.css(g.from),
                    ("content" === o || "both" === o) &&
                        ((k = k.concat(["marginTop", "marginBottom"]).concat(j)),
                        (l = l.concat(["marginLeft", "marginRight"])),
                        (i = h.concat(k).concat(l)),
                        g.find("*[width]").each(function () {
                            var c = a(this),
                                d = { height: c.height(), width: c.width(), outerHeight: c.outerHeight(), outerWidth: c.outerWidth() };
                            n && a.effects.save(c, i),
                                (c.from = { height: d.height * f.from.y, width: d.width * f.from.x, outerHeight: d.outerHeight * f.from.y, outerWidth: d.outerWidth * f.from.x }),
                                (c.to = { height: d.height * f.to.y, width: d.width * f.to.x, outerHeight: d.height * f.to.y, outerWidth: d.width * f.to.x }),
                                f.from.y !== f.to.y && ((c.from = a.effects.setTransition(c, k, f.from.y, c.from)), (c.to = a.effects.setTransition(c, k, f.to.y, c.to))),
                                f.from.x !== f.to.x && ((c.from = a.effects.setTransition(c, l, f.from.x, c.from)), (c.to = a.effects.setTransition(c, l, f.to.x, c.to))),
                                c.css(c.from),
                                c.animate(c.to, b.duration, b.easing, function () {
                                    n && a.effects.restore(c, i);
                                });
                        })),
                    g.animate(g.to, {
                        queue: !1,
                        duration: b.duration,
                        easing: b.easing,
                        complete: function () {
                            0 === g.to.opacity && g.css("opacity", g.from.opacity),
                                "hide" === m && g.hide(),
                                a.effects.restore(g, r),
                                n ||
                                    ("static" === q
                                        ? g.css({ position: "relative", top: g.to.top, left: g.to.left })
                                        : a.each(["top", "left"], function (a, b) {
                                              g.css(b, function (b, c) {
                                                  var d = parseInt(c, 10),
                                                      e = a ? g.to.left : g.to.top;
                                                  return "auto" === c ? e + "px" : d + e + "px";
                                              });
                                          })),
                                a.effects.removeWrapper(g),
                                c();
                        },
                    });
            });
    })(jQuery),
    (function (a) {
        a.effects.effect.shake = function (b, c) {
            var q,
                d = a(this),
                e = ["position", "top", "bottom", "left", "right", "height", "width"],
                f = a.effects.setMode(d, b.mode || "effect"),
                g = b.direction || "left",
                h = b.distance || 20,
                i = b.times || 3,
                j = 2 * i + 1,
                k = Math.round(b.duration / j),
                l = "up" === g || "down" === g ? "top" : "left",
                m = "up" === g || "left" === g,
                n = {},
                o = {},
                p = {},
                r = d.queue(),
                s = r.length;
            for (a.effects.save(d, e), d.show(), a.effects.createWrapper(d), n[l] = (m ? "-=" : "+=") + h, o[l] = (m ? "+=" : "-=") + 2 * h, p[l] = (m ? "-=" : "+=") + 2 * h, d.animate(n, k, b.easing), q = 1; q < i; q++)
                d.animate(o, k, b.easing).animate(p, k, b.easing);
            d
                .animate(o, k, b.easing)
                .animate(n, k / 2, b.easing)
                .queue(function () {
                    "hide" === f && d.hide(), a.effects.restore(d, e), a.effects.removeWrapper(d), c();
                }),
                s > 1 && r.splice.apply(r, [1, 0].concat(r.splice(s, j + 1))),
                d.dequeue();
        };
    })(jQuery),
    (function (a) {
        a.effects.effect.slide = function (b, c) {
            var k,
                d = a(this),
                e = ["position", "top", "bottom", "left", "right", "width", "height"],
                f = a.effects.setMode(d, b.mode || "show"),
                g = "show" === f,
                h = b.direction || "left",
                i = "up" === h || "down" === h ? "top" : "left",
                j = "up" === h || "left" === h,
                l = {};
            a.effects.save(d, e),
                d.show(),
                (k = b.distance || d["top" === i ? "outerHeight" : "outerWidth"](!0)),
                a.effects.createWrapper(d).css({ overflow: "hidden" }),
                g && d.css(i, j ? (isNaN(k) ? "-" + k : -k) : k),
                (l[i] = (g ? (j ? "+=" : "-=") : j ? "-=" : "+=") + k),
                d.animate(l, {
                    queue: !1,
                    duration: b.duration,
                    easing: b.easing,
                    complete: function () {
                        "hide" === f && d.hide(), a.effects.restore(d, e), a.effects.removeWrapper(d), c();
                    },
                });
        };
    })(jQuery),
    (function (a) {
        a.effects.effect.transfer = function (b, c) {
            var d = a(this),
                e = a(b.to),
                f = "fixed" === e.css("position"),
                g = a("body"),
                h = f ? g.scrollTop() : 0,
                i = f ? g.scrollLeft() : 0,
                j = e.offset(),
                k = { top: j.top - h, left: j.left - i, height: e.innerHeight(), width: e.innerWidth() },
                l = d.offset(),
                m = a("<div class='ui-effects-transfer'></div>")
                    .appendTo(document.body)
                    .addClass(b.className)
                    .css({ top: l.top - h, left: l.left - i, height: d.innerHeight(), width: d.innerWidth(), position: f ? "fixed" : "absolute" })
                    .animate(k, b.duration, b.easing, function () {
                        m.remove(), c();
                    });
        };
    })(jQuery),
    "object" != typeof JSON && (JSON = {}),
    (function () {
        "use strict";
        function i(a) {
            return a < 10 ? "0" + a : a;
        }
        function e(a) {
            return (
                (r.lastIndex = 0),
                r.test(a)
                    ? '"' +
                      a.replace(r, function (a) {
                          var b = o[a];
                          return "string" == typeof b ? b : "\\u" + ("0000" + a.charCodeAt(0).toString(16)).slice(-4);
                      }) +
                      '"'
                    : '"' + a + '"'
            );
        }
        function f(a, b) {
            var c,
                d,
                g,
                h,
                j,
                i = n,
                k = b[a];
            switch ((k && "object" == typeof k && "function" == typeof k.toJSON && (k = k.toJSON(a)), "function" == typeof t && (k = t.call(b, a, k)), typeof k)) {
                case "string":
                    return e(k);
                case "number":
                    return isFinite(k) ? String(k) : "null";
                case "boolean":
                case "null":
                    return String(k);
                case "object":
                    if (!k) return "null";
                    if (((n += u), (j = []), "[object Array]" === Object.prototype.toString.apply(k))) {
                        for (h = k.length, c = 0; c < h; c += 1) j[c] = f(c, k) || "null";
                        return (g = 0 === j.length ? "[]" : n ? "[\n" + n + j.join(",\n" + n) + "\n" + i + "]" : "[" + j.join(",") + "]"), (n = i), g;
                    }
                    if (t && "object" == typeof t) for (h = t.length, c = 0; c < h; c += 1) "string" == typeof t[c] && ((d = t[c]), (g = f(d, k)) && j.push(e(d) + (n ? ": " : ":") + g));
                    else for (d in k) Object.prototype.hasOwnProperty.call(k, d) && (g = f(d, k)) && j.push(e(d) + (n ? ": " : ":") + g);
                    return (g = 0 === j.length ? "{}" : n ? "{\n" + n + j.join(",\n" + n) + "\n" + i + "}" : "{" + j.join(",") + "}"), (n = i), g;
            }
        }
        "function" != typeof Date.prototype.toJSON &&
            ((Date.prototype.toJSON = function () {
                return isFinite(this.valueOf())
                    ? this.getUTCFullYear() + "-" + i(this.getUTCMonth() + 1) + "-" + i(this.getUTCDate()) + "T" + i(this.getUTCHours()) + ":" + i(this.getUTCMinutes()) + ":" + i(this.getUTCSeconds()) + "Z"
                    : null;
            }),
            (String.prototype.toJSON = Number.prototype.toJSON = Boolean.prototype.toJSON = function () {
                return this.valueOf();
            }));
        var cx, r, n, u, o, t;
        "function" != typeof JSON.stringify &&
            ((r = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g),
            (o = { "\b": "\\b", "\t": "\\t", "\n": "\\n", "\f": "\\f", "\r": "\\r", '"': '\\"', "\\": "\\\\" }),
            (JSON.stringify = function (a, b, c) {
                var d;
                if (((n = ""), (u = ""), "number" == typeof c)) for (d = 0; d < c; d += 1) u += " ";
                else "string" == typeof c && (u = c);
                if (((t = b), b && "function" != typeof b && ("object" != typeof b || "number" != typeof b.length))) throw new Error("JSON.stringify");
                return f("", { "": a });
            })),
            "function" != typeof JSON.parse &&
                ((cx = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g),
                (JSON.parse = function (text, reviver) {
                    function walk(a, b) {
                        var c,
                            d,
                            e = a[b];
                        if (e && "object" == typeof e) for (c in e) Object.prototype.hasOwnProperty.call(e, c) && ((d = walk(e, c)), void 0 !== d ? (e[c] = d) : delete e[c]);
                        return reviver.call(a, b, e);
                    }
                    var j;
                    if (
                        ((text = String(text)),
                        (cx.lastIndex = 0),
                        cx.test(text) &&
                            (text = text.replace(cx, function (a) {
                                return "\\u" + ("0000" + a.charCodeAt(0).toString(16)).slice(-4);
                            })),
                        /^[\],:{}\s]*$/.test(
                            text
                                .replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, "@")
                                .replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, "]")
                                .replace(/(?:^|:|,)(?:\s*\[)+/g, "")
                        ))
                    )
                        return (j = eval("(" + text + ")")), "function" == typeof reviver ? walk({ "": j }, "") : j;
                    throw new SyntaxError("JSON.parse");
                }));
    })(),
    "undefined" == typeof jQuery)
)
    throw new Error("Bootstrap's JavaScript requires jQuery");
+(function (a) {
    "use strict";
    function b() {
        var a = document.createElement("bootstrap"),
            b = { WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd otransitionend", transition: "transitionend" };
        for (var c in b) if (void 0 !== a.style[c]) return { end: b[c] };
        return !1;
    }
    (a.fn.emulateTransitionEnd = function (b) {
        var e,
            c = !1,
            d = this;
        return (
            a(this).one("bsTransitionEnd", function () {
                c = !0;
            }),
            (e = function () {
                c || a(d).trigger(a.support.transition.end);
            }),
            setTimeout(e, b),
            this
        );
    }),
        a(function () {
            (a.support.transition = b()),
                a.support.transition &&
                    (a.event.special.bsTransitionEnd = {
                        bindType: a.support.transition.end,
                        delegateType: a.support.transition.end,
                        handle: function (b) {
                            if (a(b.target).is(this)) return b.handleObj.handler.apply(this, arguments);
                        },
                    });
        });
})(jQuery),
    (function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var c = a(this),
                    e = c.data("bs.alert");
                e || c.data("bs.alert", (e = new d(this))), "string" == typeof b && e[b].call(c);
            });
        }
        var e,
            c = '[data-dismiss="alert"]',
            d = function (b) {
                a(b).on("click", c, this.close);
            };
        (d.VERSION = "3.2.0"),
            (d.prototype.close = function (b) {
                function c() {
                    f.detach().trigger("closed.bs.alert").remove();
                }
                var f,
                    d = a(this),
                    e = d.attr("data-target");
                e || ((e = d.attr("href")), (e = e && e.replace(/.*(?=#[^\s]*$)/, ""))),
                    (f = a(e)),
                    b && b.preventDefault(),
                    f.length || (f = d.hasClass("alert") ? d : d.parent()),
                    f.trigger((b = a.Event("close.bs.alert"))),
                    b.isDefaultPrevented() || (f.removeClass("in"), a.support.transition && f.hasClass("fade") ? f.one("bsTransitionEnd", c).emulateTransitionEnd(150) : c());
            }),
            (e = a.fn.alert),
            (a.fn.alert = b),
            (a.fn.alert.Constructor = d),
            (a.fn.alert.noConflict = function () {
                return (a.fn.alert = e), this;
            }),
            a(document).on("click.bs.alert.data-api", c, d.prototype.close);
    })(jQuery),
    (function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var c = a(this),
                    e = c.data("bs.button"),
                    f = "object" == typeof b && b;
                e || c.data("bs.button", (e = new d(this, f))), "toggle" == b ? e.toggle() : b && e.setState(b);
            });
        }
        function c(b) {
            var c = a(b);
            return c.hasClass("btn") ? c : c.parent(".btn");
        }
        var e,
            d = function (b, c) {
                (this.$element = a(b)), (this.options = a.extend({}, d.DEFAULTS, c)), (this.isLoading = !1);
            };
        (d.VERSION = "3.2.0"),
            (d.DEFAULTS = { loadingText: "loading..." }),
            (d.prototype.setState = function (b) {
                var c = "disabled",
                    d = this.$element,
                    e = d.is("input") ? "val" : "html",
                    f = d.data();
                (b += "Text"),
                    null == f.resetText && d.data("resetText", d[e]()),
                    d[e](null == f[b] ? this.options[b] : f[b]),
                    setTimeout(
                        a.proxy(function () {
                            "loadingText" == b ? ((this.isLoading = !0), d.addClass(c).attr(c, c)) : this.isLoading && ((this.isLoading = !1), d.removeClass(c).removeAttr(c));
                        }, this),
                        0
                    );
            }),
            (d.prototype.toggle = function () {
                var c,
                    a = !0,
                    b = this.$element.closest('[data-toggle="buttons"]');
                b.length &&
                    ((c = this.$element.find("input")),
                    "radio" == c.prop("type") && (c.prop("checked") && this.$element.hasClass("active") ? (a = !1) : b.find(".active").removeClass("active")),
                    a && c.prop("checked", !this.$element.hasClass("active")).trigger("change")),
                    a && this.$element.toggleClass("active");
            }),
            (e = a.fn.button),
            (a.fn.button = b),
            (a.fn.button.Constructor = d),
            (a.fn.button.noConflict = function () {
                return (a.fn.button = e), this;
            }),
            a(document)
                .on("click.bs.button.data-api", '[data-toggle^="button"]', function (c) {
                    var d = a(c.target);
                    d.hasClass("btn") || (d = d.closest(".btn")), b.call(d, "toggle"), c.preventDefault();
                })
                .on("focus.bs.button.data-api", '[data-toggle^="button"]', function (a) {
                    c(a.target).addClass("focus");
                })
                .on("blur.bs.button.data-api", '[data-toggle^="button"]', function (a) {
                    c(a.target).removeClass("focus");
                });
    })(jQuery),
    (function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.carousel1"),
                    f = a.extend({}, c.DEFAULTS, d.data(), "object" == typeof b && b),
                    g = "string" == typeof b ? b : f.slide;
                e || d.data("bs.carousel1", (e = new c(this, f))), "number" == typeof b ? e.to(b) : g ? e[g]() : f.interval && e.pause().cycle();
            });
        }
        var d,
            c = function (b, c) {
                (this.$element = a(b).on("keydown.bs.carousel1", a.proxy(this.keydown, this))),
                    (this.$indicators = this.$element.find(".carousel1-indicators")),
                    (this.options = c),
                    (this.paused = this.sliding = this.interval = this.$active = this.$items = null),
                    "hover" == this.options.pause && this.$element.on("mouseenter.bs.carousel1", a.proxy(this.pause, this)).on("mouseleave.bs.carousel1", a.proxy(this.cycle, this));
            };
        (c.VERSION = "3.2.0"),
            (c.DEFAULTS = { interval: 5e3, pause: "hover", wrap: !0 }),
            (c.prototype.keydown = function (a) {
                switch (a.which) {
                    case 37:
                        this.prev();
                        break;
                    case 39:
                        this.next();
                        break;
                    default:
                        return;
                }
                a.preventDefault();
            }),
            (c.prototype.cycle = function (b) {
                return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this;
            }),
            (c.prototype.getItemIndex = function (a) {
                return (this.$items = a.parent().children(".item")), this.$items.index(a || this.$active);
            }),
            (c.prototype.to = function (b) {
                var c = this,
                    d = this.getItemIndex((this.$active = this.$element.find(".item.active")));
                if (!(b > this.$items.length - 1 || b < 0))
                    return this.sliding
                        ? this.$element.one("slid.bs.carousel1", function () {
                              c.to(b);
                          })
                        : d == b
                        ? this.pause().cycle()
                        : this.slide(b > d ? "next" : "prev", a(this.$items[b]));
            }),
            (c.prototype.pause = function (b) {
                return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), (this.interval = clearInterval(this.interval)), this;
            }),
            (c.prototype.next = function () {
                if (!this.sliding) return this.slide("next");
            }),
            (c.prototype.prev = function () {
                if (!this.sliding) return this.slide("prev");
            }),
            (c.prototype.slide = function (b, c) {
                var j,
                    k,
                    l,
                    m,
                    d = this.$element.find(".item.active"),
                    e = c || d[b](),
                    f = this.interval,
                    g = "next" == b ? "left" : "right",
                    h = "next" == b ? "first" : "last",
                    i = this;
                if (!e.length) {
                    if (!this.options.wrap) return;
                    e = this.$element.find(".item")[h]();
                }
                return e.hasClass("active")
                    ? (this.sliding = !1)
                    : ((j = e[0]),
                      (k = a.Event("slide.bs.carousel1", { relatedTarget: j, direction: g })),
                      this.$element.trigger(k),
                      k.isDefaultPrevented()
                          ? void 0
                          : ((this.sliding = !0),
                            f && this.pause(),
                            this.$indicators.length && (this.$indicators.find(".active").removeClass("active"), (l = a(this.$indicators.children()[this.getItemIndex(e)])) && l.addClass("active")),
                            (m = a.Event("slid.bs.carousel1", { relatedTarget: j, direction: g })),
                            a.support.transition && this.$element.hasClass("slide")
                                ? (e.addClass(b),
                                  e[0].offsetWidth,
                                  d.addClass(g),
                                  e.addClass(g),
                                  d
                                      .one("bsTransitionEnd", function () {
                                          e.removeClass([b, g].join(" ")).addClass("active"),
                                              d.removeClass(["active", g].join(" ")),
                                              (i.sliding = !1),
                                              setTimeout(function () {
                                                  i.$element.trigger(m);
                                              }, 0);
                                      })
                                      .emulateTransitionEnd(1e3 * d.css("transition-duration").slice(0, -1)))
                                : (d.removeClass("active"), e.addClass("active"), (this.sliding = !1), this.$element.trigger(m)),
                            f && this.cycle(),
                            this));
            }),
            (d = a.fn.carousel1),
            (a.fn.carousel1 = b),
            (a.fn.carousel1.Constructor = c),
            (a.fn.carousel1.noConflict = function () {
                return (a.fn.carousel1 = d), this;
            }),
            a(document).on("click.bs.carousel1.data-api", "[data-slide], [data-slide-to]", function (c) {
                var d,
                    g,
                    h,
                    e = a(this),
                    f = a(e.attr("data-target") || ((d = e.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, "")));
                f.hasClass("carousel1") && ((g = a.extend({}, f.data(), e.data())), (h = e.attr("data-slide-to")), h && (g.interval = !1), b.call(f, g), h && f.data("bs.carousel1").to(h), c.preventDefault());
            }),
            a(window).on("load", function () {
                a('[data-ride="carousel1"]').each(function () {
                    var c = a(this);
                    b.call(c, c.data());
                });
            });
    })(jQuery),
    (function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.collapse"),
                    f = a.extend({}, c.DEFAULTS, d.data(), "object" == typeof b && b);
                !e && f.toggle && "show" == b && (b = !b), e || d.data("bs.collapse", (e = new c(this, f))), "string" == typeof b && e[b]();
            });
        }
        var d,
            c = function (b, d) {
                (this.$element = a(b)), (this.options = a.extend({}, c.DEFAULTS, d)), (this.transitioning = null), this.options.parent && (this.$parent = a(this.options.parent)), this.options.toggle && this.toggle();
            };
        (c.VERSION = "3.2.0"),
            (c.DEFAULTS = { toggle: !0 }),
            (c.prototype.dimension = function () {
                return this.$element.hasClass("width") ? "width" : "height";
            }),
            (c.prototype.show = function () {
                var c, d, e, f, g, h;
                if (!this.transitioning && !this.$element.hasClass("in") && ((c = a.Event("show.bs.collapse")), this.$element.trigger(c), !c.isDefaultPrevented())) {
                    if ((d = this.$parent && this.$parent.find("> .panel > .in")) && d.length) {
                        if ((e = d.data("bs.collapse")) && e.transitioning) return;
                        b.call(d, "hide"), e || d.data("bs.collapse", null);
                    }
                    if (
                        ((f = this.dimension()),
                        this.$element.removeClass("collapse").addClass("collapsing")[f](0),
                        (this.transitioning = 1),
                        (g = function () {
                            this.$element.removeClass("collapsing").addClass("collapse in")[f](""), (this.transitioning = 0), this.$element.trigger("shown.bs.collapse");
                        }),
                        !a.support.transition)
                    )
                        return g.call(this);
                    (h = a.camelCase(["scroll", f].join("-"))), this.$element.one("bsTransitionEnd", a.proxy(g, this)).emulateTransitionEnd(350)[f](this.$element[0][h]);
                }
            }),
            (c.prototype.hide = function () {
                var b, c, d;
                if (!this.transitioning && this.$element.hasClass("in") && ((b = a.Event("hide.bs.collapse")), this.$element.trigger(b), !b.isDefaultPrevented())) {
                    if (
                        ((c = this.dimension()),
                        this.$element[c](this.$element[c]())[0].offsetHeight,
                        this.$element.addClass("collapsing").removeClass("collapse in"),
                        (this.transitioning = 1),
                        (d = function () {
                            (this.transitioning = 0), this.$element.trigger("hidden.bs.collapse").removeClass("collapsing").addClass("collapse");
                        }),
                        !a.support.transition)
                    )
                        return d.call(this);
                    this.$element[c](0).one("bsTransitionEnd", a.proxy(d, this)).emulateTransitionEnd(350);
                }
            }),
            (c.prototype.toggle = function () {
                this[this.$element.hasClass("in") ? "hide" : "show"]();
            }),
            (d = a.fn.collapse),
            (a.fn.collapse = b),
            (a.fn.collapse.Constructor = c),
            (a.fn.collapse.noConflict = function () {
                return (a.fn.collapse = d), this;
            }),
            a(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function (c) {
                var d,
                    e = a(this),
                    f = e.attr("data-target") || c.preventDefault() || ((d = e.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, "")),
                    g = a(f),
                    h = g.data("bs.collapse"),
                    i = h ? "toggle" : e.data(),
                    j = e.attr("data-parent"),
                    k = j && a(j);
                (h && h.transitioning) ||
                    (k &&
                        k
                            .find('[data-toggle="collapse"][data-parent="' + j + '"]')
                            .not(e)
                            .addClass("collapsed"),
                    e.toggleClass("collapsed", g.hasClass("in"))),
                    b.call(g, i);
            });
    })(jQuery),
    (function (a) {
        "use strict";
        function b(b) {
            (b && 3 === b.which) ||
                (a(e).remove(),
                a(f).each(function () {
                    var d = c(a(this)),
                        e = { relatedTarget: this };
                    d.hasClass("open") && (d.trigger((b = a.Event("hide.bs.dropdown", e))), b.isDefaultPrevented() || d.removeClass("open").trigger("hidden.bs.dropdown", e));
                }));
        }
        function c(b) {
            var d,
                c = b.attr("data-target");
            return c || ((c = b.attr("href")), (c = c && /#[A-Za-z]/.test(c) && c.replace(/.*(?=#[^\s]*$)/, ""))), (d = c && a(c)), d && d.length ? d : b.parent();
        }
        function d(b) {
            return this.each(function () {
                var c = a(this),
                    d = c.data("bs.dropdown");
                d || c.data("bs.dropdown", (d = new g(this))), "string" == typeof b && d[b].call(c);
            });
        }
        var h,
            e = ".dropdown-backdrop",
            f = '[data-toggle="dropdown"]',
            g = function (b) {
                a(b).on("click.bs.dropdown", this.toggle);
            };
        (g.VERSION = "3.2.0"),
            (g.prototype.toggle = function (d) {
                var f,
                    g,
                    h,
                    e = a(this);
                if (!e.is(".disabled, :disabled")) {
                    if (((f = c(e)), (g = f.hasClass("open")), b(), !g)) {
                        if (
                            ("ontouchstart" in document.documentElement && !f.closest(".navbar-nav").length && a('<div class="dropdown-backdrop"/>').insertAfter(a(this)).on("click", b),
                            (h = { relatedTarget: this }),
                            f.trigger((d = a.Event("show.bs.dropdown", h))),
                            d.isDefaultPrevented())
                        )
                            return;
                        e.trigger("focus"), f.toggleClass("open").trigger("shown.bs.dropdown", h);
                    }
                    return !1;
                }
            }),
            (g.prototype.keydown = function (b) {
                var d, e, g, h, i, j;
                if (/(38|40|27)/.test(b.keyCode) && ((d = a(this)), b.preventDefault(), b.stopPropagation(), !d.is(".disabled, :disabled"))) {
                    if (((e = c(d)), !(g = e.hasClass("open")) || (g && 27 == b.keyCode))) return 27 == b.which && e.find(f).trigger("focus"), d.trigger("click");
                    (h = " li:not(.divider):visible a"),
                        (i = e.find('[role="menu"]' + h + ', [role="listbox"]' + h)),
                        i.length && ((j = i.index(i.filter(":focus"))), 38 == b.keyCode && j > 0 && j--, 40 == b.keyCode && j < i.length - 1 && j++, ~j || (j = 0), i.eq(j).trigger("focus"));
                }
            }),
            (h = a.fn.dropdown),
            (a.fn.dropdown = d),
            (a.fn.dropdown.Constructor = g),
            (a.fn.dropdown.noConflict = function () {
                return (a.fn.dropdown = h), this;
            }),
            a(document)
                .on("click.bs.dropdown.data-api", b)
                .on("click.bs.dropdown.data-api", ".dropdown form", function (a) {
                    a.stopPropagation();
                })
                .on("click.bs.dropdown.data-api", f, g.prototype.toggle)
                .on("keydown.bs.dropdown.data-api", f + ', [role="menu"], [role="listbox"]', g.prototype.keydown);
    })(jQuery),
    (function (a) {
        "use strict";
        function b(b, d) {
            return this.each(function () {
                var e = a(this),
                    f = e.data("bs.modal"),
                    g = a.extend({}, c.DEFAULTS, e.data(), "object" == typeof b && b);
                f || e.data("bs.modal", (f = new c(this, g))), "string" == typeof b ? f[b](d) : g.show && f.show(d);
            });
        }
        var d,
            c = function (b, c) {
                (this.options = c),
                    (this.$body = a(document.body)),
                    (this.$element = a(b)),
                    (this.$backdrop = this.isShown = null),
                    (this.scrollbarWidth = 0),
                    this.options.remote &&
                        this.$element.find(".modal-content").load(
                            this.options.remote,
                            a.proxy(function () {
                                this.$element.trigger("loaded.bs.modal");
                            }, this)
                        );
            };
        (c.VERSION = "3.2.0"),
            (c.DEFAULTS = { backdrop: !0, keyboard: !0, show: !0 }),
            (c.prototype.toggle = function (a) {
                return this.isShown ? this.hide() : this.show(a);
            }),
            (c.prototype.show = function (b) {
                var c = this,
                    d = a.Event("show.bs.modal", { relatedTarget: b });
                this.$element.trigger(d),
                    this.isShown ||
                        d.isDefaultPrevented() ||
                        ((this.isShown = !0),
                        this.checkScrollbar(),
                        this.$body.addClass("modal-open"),
                        this.setScrollbar(),
                        this.escape(),
                        this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', a.proxy(this.hide, this)),
                        this.backdrop(function () {
                            var e,
                                d = a.support.transition && c.$element.hasClass("fade");
                            c.$element.parent().length || c.$element.appendTo(c.$body),
                                c.$element.show().scrollTop(0),
                                d && c.$element[0].offsetWidth,
                                c.$element.addClass("in").attr("aria-hidden", !1),
                                c.enforceFocus(),
                                (e = a.Event("shown.bs.modal", { relatedTarget: b })),
                                d
                                    ? c.$element
                                          .find(".modal-dialog")
                                          .one("bsTransitionEnd", function () {
                                              c.$element.trigger("focus").trigger(e);
                                          })
                                          .emulateTransitionEnd(300)
                                    : c.$element.trigger("focus").trigger(e);
                        }));
            }),
            (c.prototype.hide = function (b) {
                b && b.preventDefault(),
                    (b = a.Event("hide.bs.modal")),
                    this.$element.trigger(b),
                    this.isShown &&
                        !b.isDefaultPrevented() &&
                        ((this.isShown = !1),
                        this.$body.removeClass("modal-open"),
                        this.resetScrollbar(),
                        this.escape(),
                        a(document).off("focusin.bs.modal"),
                        this.$element.removeClass("in").attr("aria-hidden", !0).off("click.dismiss.bs.modal"),
                        a.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", a.proxy(this.hideModal, this)).emulateTransitionEnd(300) : this.hideModal());
            }),
            (c.prototype.enforceFocus = function () {
                a(document)
                    .off("focusin.bs.modal")
                    .on(
                        "focusin.bs.modal",
                        a.proxy(function (a) {
                            this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.trigger("focus");
                        }, this)
                    );
            }),
            (c.prototype.escape = function () {
                this.isShown && this.options.keyboard
                    ? this.$element.on(
                          "keydown.dismiss.bs.modal",
                          a.proxy(function (a) {
                              27 == a.which && this.hide();
                          }, this)
                      )
                    : this.isShown || this.$element.off("keydown.dismiss.bs.modal");
            }),
            (c.prototype.hideModal = function () {
                var a = this;
                this.$element.hide(),
                    this.backdrop(function () {
                        a.$element.trigger("hidden.bs.modal");
                    });
            }),
            (c.prototype.removeBackdrop = function () {
                this.$backdrop && this.$backdrop.remove(), (this.$backdrop = null);
            }),
            (c.prototype.backdrop = function (b) {
                var e,
                    f,
                    c = this,
                    d = this.$element.hasClass("fade") ? "fade" : "";
                if (this.isShown && this.options.backdrop) {
                    if (
                        ((e = a.support.transition && d),
                        (this.$backdrop = a('<div class="modal-backdrop ' + d + '" />').appendTo(this.$body)),
                        this.$element.on(
                            "mousedown.dismiss.bs.modal",
                            a.proxy(function (a) {
                                a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus.call(this.$element[0]) : this.hide.call(this));
                            }, this)
                        ),
                        e && this.$backdrop[0].offsetWidth,
                        this.$backdrop.addClass("in"),
                        !b)
                    )
                        return;
                    e ? this.$backdrop.one("bsTransitionEnd", b).emulateTransitionEnd(150) : b();
                } else
                    !this.isShown && this.$backdrop
                        ? (this.$backdrop.removeClass("in"),
                          (f = function () {
                              c.removeBackdrop(), b && b();
                          }),
                          a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", f).emulateTransitionEnd(150) : f())
                        : b && b();
            }),
            (c.prototype.checkScrollbar = function () {
                document.body.clientWidth >= window.innerWidth || (this.scrollbarWidth = this.scrollbarWidth || this.measureScrollbar());
            }),
            (c.prototype.setScrollbar = function () {
                var a = parseInt(this.$body.css("padding-right") || 0, 10);
                this.scrollbarWidth && this.$body.css("padding-right", a + this.scrollbarWidth);
            }),
            (c.prototype.resetScrollbar = function () {
                this.$body.css("padding-right", "");
            }),
            (c.prototype.measureScrollbar = function () {
                var b,
                    a = document.createElement("div");
                return (a.className = "modal-scrollbar-measure"), this.$body.append(a), (b = a.offsetWidth - a.clientWidth), this.$body[0].removeChild(a), b;
            }),
            (d = a.fn.modal),
            (a.fn.modal = b),
            (a.fn.modal.Constructor = c),
            (a.fn.modal.noConflict = function () {
                return (a.fn.modal = d), this;
            }),
            a(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (c) {
                var d = a(this),
                    e = d.attr("href"),
                    f = a(d.attr("data-target") || (e && e.replace(/.*(?=#[^\s]+$)/, ""))),
                    g = f.data("bs.modal") ? "toggle" : a.extend({ remote: !/#/.test(e) && e }, f.data(), d.data());
                d.is("a") && c.preventDefault(),
                    f.one("show.bs.modal", function (a) {
                        a.isDefaultPrevented() ||
                            f.one("hidden.bs.modal", function () {
                                d.is(":visible") && d.trigger("focus");
                            });
                    }),
                    b.call(f, g, this);
            });
    })(jQuery),
    (function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.tooltip"),
                    f = "object" == typeof b && b;
                (e || "destroy" != b) && (e || d.data("bs.tooltip", (e = new c(this, f))), "string" == typeof b && e[b]());
            });
        }
        var d,
            c = function (a, b) {
                (this.type = this.options = this.enabled = this.timeout = this.hoverState = this.$element = null), this.init("tooltip", a, b);
            };
        (c.VERSION = "3.2.0"),
            (c.DEFAULTS = {
                animation: !0,
                placement: "top",
                selector: !1,
                template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
                trigger: "hover focus",
                title: "",
                delay: 0,
                html: !1,
                container: !1,
                viewport: { selector: "body", padding: 0 },
            }),
            (c.prototype.init = function (b, c, d) {
                var e, f, g, h, i;
                for (
                    this.enabled = !0,
                        this.type = b,
                        this.$element = a(c),
                        this.options = this.getOptions(d),
                        this.$viewport = this.options.viewport && a(this.options.viewport.selector || this.options.viewport),
                        e = this.options.trigger.split(" "),
                        f = e.length;
                    f--;

                )
                    "click" == (g = e[f])
                        ? this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this))
                        : "manual" != g &&
                          ((h = "hover" == g ? "mouseenter" : "focusin"),
                          (i = "hover" == g ? "mouseleave" : "focusout"),
                          this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)),
                          this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this)));
                this.options.selector ? (this._options = a.extend({}, this.options, { trigger: "manual", selector: "" })) : this.fixTitle();
            }),
            (c.prototype.getDefaults = function () {
                return c.DEFAULTS;
            }),
            (c.prototype.getOptions = function (b) {
                return (b = a.extend({}, this.getDefaults(), this.$element.data(), b)), b.delay && "number" == typeof b.delay && (b.delay = { show: b.delay, hide: b.delay }), b;
            }),
            (c.prototype.getDelegateOptions = function () {
                var b = {},
                    c = this.getDefaults();
                return (
                    this._options &&
                        a.each(this._options, function (a, d) {
                            c[a] != d && (b[a] = d);
                        }),
                    b
                );
            }),
            (c.prototype.enter = function (b) {
                var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
                if ((c || ((c = new this.constructor(b.currentTarget, this.getDelegateOptions())), a(b.currentTarget).data("bs." + this.type, c)), clearTimeout(c.timeout), (c.hoverState = "in"), !c.options.delay || !c.options.delay.show))
                    return c.show();
                c.timeout = setTimeout(function () {
                    "in" == c.hoverState && c.show();
                }, c.options.delay.show);
            }),
            (c.prototype.leave = function (b) {
                var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
                if ((c || ((c = new this.constructor(b.currentTarget, this.getDelegateOptions())), a(b.currentTarget).data("bs." + this.type, c)), clearTimeout(c.timeout), (c.hoverState = "out"), !c.options.delay || !c.options.delay.hide))
                    return c.hide();
                c.timeout = setTimeout(function () {
                    "out" == c.hoverState && c.hide();
                }, c.options.delay.hide);
            }),
            (c.prototype.show = function () {
                var c,
                    d,
                    e,
                    b = a.Event("show.bs." + this.type);
                if (this.hasContent() && this.enabled) {
                    if ((this.$element.trigger(b), (c = a.contains(document.documentElement, this.$element[0])), b.isDefaultPrevented() || !c)) return;
                    var f = this,
                        g = this.tip(),
                        h = this.getUID(this.type);
                    this.setContent(), g.attr("id", h), this.$element.attr("aria-describedby", h), this.options.animation && g.addClass("fade");
                    var i = "function" == typeof this.options.placement ? this.options.placement.call(this, g[0], this.$element[0]) : this.options.placement,
                        j = /\s?auto?\s?/i,
                        k = j.test(i);
                    k && (i = i.replace(j, "") || "top"),
                        g
                            .detach()
                            .css({ top: 0, left: 0, display: "block" })
                            .addClass(i)
                            .data("bs." + this.type, this),
                        this.options.container ? g.appendTo(this.options.container) : g.insertAfter(this.$element);
                    var l = this.getPosition(),
                        m = g[0].offsetWidth,
                        n = g[0].offsetHeight;
                    if (k) {
                        var o = i,
                            p = this.$element.parent(),
                            q = this.getPosition(p);
                        (i =
                            "bottom" == i && l.top + l.height + n - q.scroll > q.height
                                ? "top"
                                : "top" == i && l.top - q.scroll - n < 0
                                ? "bottom"
                                : "right" == i && l.right + m > q.width
                                ? "left"
                                : "left" == i && l.left - m < q.left
                                ? "right"
                                : i),
                            g.removeClass(o).addClass(i);
                    }
                    (d = this.getCalculatedOffset(i, l, m, n)),
                        this.applyPlacement(d, i),
                        (e = function () {
                            f.$element.trigger("shown.bs." + f.type), (f.hoverState = null);
                        }),
                        a.support.transition && this.$tip.hasClass("fade") ? g.one("bsTransitionEnd", e).emulateTransitionEnd(150) : e();
                }
            }),
            (c.prototype.applyPlacement = function (b, c) {
                var i,
                    j,
                    k,
                    d = this.tip(),
                    e = d[0].offsetWidth,
                    f = d[0].offsetHeight,
                    g = parseInt(d.css("margin-top"), 10),
                    h = parseInt(d.css("margin-left"), 10);
                isNaN(g) && (g = 0),
                    isNaN(h) && (h = 0),
                    (b.top = b.top + g),
                    (b.left = b.left + h),
                    a.offset.setOffset(
                        d[0],
                        a.extend(
                            {
                                using: function (a) {
                                    d.css({ top: Math.round(a.top), left: Math.round(a.left) });
                                },
                            },
                            b
                        ),
                        0
                    ),
                    d.addClass("in"),
                    (i = d[0].offsetWidth),
                    (j = d[0].offsetHeight),
                    "top" == c && j != f && (b.top = b.top + f - j),
                    (k = this.getViewportAdjustedDelta(c, b, i, j)),
                    k.left ? (b.left += k.left) : (b.top += k.top);
                var l = k.left ? 2 * k.left - e + i : 2 * k.top - f + j,
                    m = k.left ? "left" : "top",
                    n = k.left ? "offsetWidth" : "offsetHeight";
                d.offset(b), this.replaceArrow(l, d[0][n], m);
            }),
            (c.prototype.replaceArrow = function (a, b, c) {
                this.arrow().css(c, a ? 50 * (1 - a / b) + "%" : "");
            }),
            (c.prototype.setContent = function () {
                var a = this.tip(),
                    b = this.getTitle();
                a.find(".tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right");
            }),
            (c.prototype.hide = function () {
                function b() {
                    "in" != c.hoverState && d.detach(), c.$element.trigger("hidden.bs." + c.type);
                }
                var c = this,
                    d = this.tip(),
                    e = a.Event("hide.bs." + this.type);
                if ((this.$element.removeAttr("aria-describedby"), this.$element.trigger(e), !e.isDefaultPrevented()))
                    return d.removeClass("in"), a.support.transition && this.$tip.hasClass("fade") ? d.one("bsTransitionEnd", b).emulateTransitionEnd(150) : b(), (this.hoverState = null), this;
            }),
            (c.prototype.fixTitle = function () {
                var a = this.$element;
                (a.attr("title") || "string" != typeof a.attr("data-original-title")) && a.attr("data-original-title", a.attr("title") || "").attr("title", "");
            }),
            (c.prototype.hasContent = function () {
                return this.getTitle();
            }),
            (c.prototype.getPosition = function (b) {
                b = b || this.$element;
                var c = b[0],
                    d = "BODY" == c.tagName,
                    e = window.SVGElement && c instanceof window.SVGElement,
                    f = "function" == typeof c.getBoundingClientRect ? c.getBoundingClientRect() : null,
                    g = d ? { top: 0, left: 0 } : b.offset(),
                    h = { scroll: d ? document.documentElement.scrollTop || document.body.scrollTop : b.scrollTop() },
                    i = e ? {} : { width: d ? a(window).width() : b.outerWidth(), height: d ? a(window).height() : b.outerHeight() };
                return a.extend({}, f, h, i, g);
            }),
            (c.prototype.getCalculatedOffset = function (a, b, c, d) {
                return "bottom" == a
                    ? { top: b.top + b.height, left: b.left + b.width / 2 - c / 2 }
                    : "top" == a
                    ? { top: b.top - d, left: b.left + b.width / 2 - c / 2 }
                    : "left" == a
                    ? { top: b.top + b.height / 2 - d / 2, left: b.left - c }
                    : { top: b.top + b.height / 2 - d / 2, left: b.left + b.width };
            }),
            (c.prototype.getViewportAdjustedDelta = function (a, b, c, d) {
                var f,
                    g,
                    h,
                    i,
                    j,
                    k,
                    e = { top: 0, left: 0 };
                return this.$viewport
                    ? ((f = (this.options.viewport && this.options.viewport.padding) || 0),
                      (g = this.getPosition(this.$viewport)),
                      /right|left/.test(a)
                          ? ((h = b.top - f - g.scroll), (i = b.top + f - g.scroll + d), h < g.top ? (e.top = g.top - h) : i > g.top + g.height && (e.top = g.top + g.height - i))
                          : ((j = b.left - f), (k = b.left + f + c), j < g.left ? (e.left = g.left - j) : k > g.width && (e.left = g.left + g.width - k)),
                      e)
                    : e;
            }),
            (c.prototype.getTitle = function () {
                var a = this.$element,
                    b = this.options;
                return a.attr("data-original-title") || ("function" == typeof b.title ? b.title.call(a[0]) : b.title);
            }),
            (c.prototype.getUID = function (a) {
                do {
                    a += ~~(1e6 * Math.random());
                } while (document.getElementById(a));
                return a;
            }),
            (c.prototype.tip = function () {
                return (this.$tip = this.$tip || a(this.options.template));
            }),
            (c.prototype.arrow = function () {
                return (this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow"));
            }),
            (c.prototype.validate = function () {
                this.$element[0].parentNode || (this.hide(), (this.$element = null), (this.options = null));
            }),
            (c.prototype.enable = function () {
                this.enabled = !0;
            }),
            (c.prototype.disable = function () {
                this.enabled = !1;
            }),
            (c.prototype.toggleEnabled = function () {
                this.enabled = !this.enabled;
            }),
            (c.prototype.toggle = function (b) {
                var c = this;
                b && ((c = a(b.currentTarget).data("bs." + this.type)) || ((c = new this.constructor(b.currentTarget, this.getDelegateOptions())), a(b.currentTarget).data("bs." + this.type, c))),
                    c.tip().hasClass("in") ? c.leave(c) : c.enter(c);
            }),
            (c.prototype.destroy = function () {
                clearTimeout(this.timeout),
                    this.hide()
                        .$element.off("." + this.type)
                        .removeData("bs." + this.type);
            }),
            (d = a.fn.tooltip),
            (a.fn.tooltip = b),
            (a.fn.tooltip.Constructor = c),
            (a.fn.tooltip.noConflict = function () {
                return (a.fn.tooltip = d), this;
            });
    })(jQuery),
    (function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.popover"),
                    f = "object" == typeof b && b;
                (e || "destroy" != b) && (e || d.data("bs.popover", (e = new c(this, f))), "string" == typeof b && e[b]());
            });
        }
        var d,
            c = function (a, b) {
                this.init("popover", a, b);
            };
        if (!a.fn.tooltip) throw new Error("https://www.trustwave.com/404/");
        (c.VERSION = "3.2.0"),
            (c.DEFAULTS = a.extend({}, a.fn.tooltip.Constructor.DEFAULTS, {
                placement: "right",
                trigger: "click",
                content: "",
                template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
            })),
            (c.prototype = a.extend({}, a.fn.tooltip.Constructor.prototype)),
            (c.prototype.constructor = c),
            (c.prototype.getDefaults = function () {
                return c.DEFAULTS;
            }),
            (c.prototype.setContent = function () {
                var a = this.tip(),
                    b = this.getTitle(),
                    c = this.getContent();
                a.find(".popover-title")[this.options.html ? "html" : "text"](b),
                    a.find(".popover-content").empty()[this.options.html ? ("string" == typeof c ? "html" : "append") : "text"](c),
                    a.removeClass("fade top bottom left right in"),
                    a.find(".popover-title").html() || a.find(".popover-title").hide();
            }),
            (c.prototype.hasContent = function () {
                return this.getTitle() || this.getContent();
            }),
            (c.prototype.getContent = function () {
                var a = this.$element,
                    b = this.options;
                return a.attr("data-content") || ("function" == typeof b.content ? b.content.call(a[0]) : b.content);
            }),
            (c.prototype.arrow = function () {
                return (this.$arrow = this.$arrow || this.tip().find(".arrow"));
            }),
            (c.prototype.tip = function () {
                return this.$tip || (this.$tip = a(this.options.template)), this.$tip;
            }),
            (d = a.fn.popover),
            (a.fn.popover = b),
            (a.fn.popover.Constructor = c),
            (a.fn.popover.noConflict = function () {
                return (a.fn.popover = d), this;
            });
    })(jQuery),
    (function (a) {
        "use strict";
        function b(c, d) {
            var e = a.proxy(this.process, this);
            (this.$body = a("body")),
                (this.$scrollElement = a(a(c).is("body") ? window : c)),
                (this.options = a.extend({}, b.DEFAULTS, d)),
                (this.selector = (this.options.target || "") + " .nav li > a"),
                (this.offsets = []),
                (this.targets = []),
                (this.activeTarget = null),
                (this.scrollHeight = 0),
                this.$scrollElement.on("scroll.bs.scrollspy", e),
                this.refresh(),
                this.process();
        }
        function c(c) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.scrollspy"),
                    f = "object" == typeof c && c;
                e || d.data("bs.scrollspy", (e = new b(this, f))), "string" == typeof c && e[c]();
            });
        }
        (b.VERSION = "3.2.0"),
            (b.DEFAULTS = { offset: 10 }),
            (b.prototype.getScrollHeight = function () {
                return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight);
            }),
            (b.prototype.refresh = function () {
                var d,
                    b = "offset",
                    c = 0;
                a.isWindow(this.$scrollElement[0]) || ((b = "position"), (c = this.$scrollElement.scrollTop())),
                    (this.offsets = []),
                    (this.targets = []),
                    (this.scrollHeight = this.getScrollHeight()),
                    (d = this),
                    this.$body
                        .find(this.selector)
                        .map(function () {
                            var d = a(this),
                                e = d.data("target") || d.attr("href"),
                                f = /^#./.test(e) && a(e);
                            return (f && f.length && f.is(":visible") && [[f[b]().top + c, e]]) || null;
                        })
                        .sort(function (a, b) {
                            return a[0] - b[0];
                        })
                        .each(function () {
                            d.offsets.push(this[0]), d.targets.push(this[1]);
                        });
            }),
            (b.prototype.process = function () {
                var g,
                    a = this.$scrollElement.scrollTop() + this.options.offset,
                    b = this.getScrollHeight(),
                    c = this.options.offset + b - this.$scrollElement.height(),
                    d = this.offsets,
                    e = this.targets,
                    f = this.activeTarget;
                if ((this.scrollHeight != b && this.refresh(), a >= c)) return f != (g = e[e.length - 1]) && this.activate(g);
                if (f && a <= d[0]) return f != (g = e[0]) && this.activate(g);
                for (g = d.length; g--; ) f != e[g] && a >= d[g] && (!d[g + 1] || a <= d[g + 1]) && this.activate(e[g]);
            }),
            (b.prototype.activate = function (b) {
                (this.activeTarget = b), a(this.selector).parentsUntil(this.options.target, ".active").removeClass("active");
                var c = this.selector + '[data-target="' + b + '"],' + this.selector + '[href="' + b + '"]',
                    d = a(c).parents("li").addClass("active");
                d.parent(".dropdown-menu").length && (d = d.closest("li.dropdown").addClass("active")), d.trigger("activate.bs.scrollspy");
            });
        var d = a.fn.scrollspy;
        (a.fn.scrollspy = c),
            (a.fn.scrollspy.Constructor = b),
            (a.fn.scrollspy.noConflict = function () {
                return (a.fn.scrollspy = d), this;
            }),
            a(window).on("load.bs.scrollspy.data-api", function () {
                a('[data-spy="scroll"]').each(function () {
                    var b = a(this);
                    c.call(b, b.data());
                });
            });
    })(jQuery),
    (function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.tab");
                e || d.data("bs.tab", (e = new c(this))), "string" == typeof b && e[b]();
            });
        }
        var d,
            c = function (b) {
                this.element = a(b);
            };
        (c.VERSION = "3.2.0"),
            (c.prototype.show = function () {
                var e,
                    f,
                    g,
                    b = this.element,
                    c = b.closest("ul:not(.dropdown-menu)"),
                    d = b.data("target");
                d || ((d = b.attr("href")), (d = d && d.replace(/.*(?=#[^\s]*$)/, ""))),
                    b.parent("li").hasClass("active") ||
                        ((e = c.find(".active:last a")[0]), (f = a.Event("show.bs.tab", { relatedTarget: e })), b.trigger(f), f.isDefaultPrevented()) ||
                        ((g = a(d)),
                        this.activate(b.closest("li"), c),
                        this.activate(g, g.parent(), function () {
                            b.trigger({ type: "shown.bs.tab", relatedTarget: e });
                        }));
            }),
            (c.prototype.activate = function (b, c, d) {
                function e() {
                    f.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"),
                        b.addClass("active"),
                        g ? (b[0].offsetWidth, b.addClass("in")) : b.removeClass("fade"),
                        b.parent(".dropdown-menu") && b.closest("li.dropdown").addClass("active"),
                        d && d();
                }
                var f = c.find("> .active"),
                    g = d && a.support.transition && ((f.length && f.hasClass("fade")) || !!c.find("> .fade").length);
                f.length && g ? f.one("bsTransitionEnd", e).emulateTransitionEnd(150) : e(), f.removeClass("in");
            }),
            (d = a.fn.tab),
            (a.fn.tab = b),
            (a.fn.tab.Constructor = c),
            (a.fn.tab.noConflict = function () {
                return (a.fn.tab = d), this;
            }),
            a(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"]', function (c) {
                c.preventDefault(), b.call(a(this), "show");
            });
    })(jQuery),
    (function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.affix"),
                    f = "object" == typeof b && b;
                e || d.data("bs.affix", (e = new c(this, f))), "string" == typeof b && e[b]();
            });
        }
        var d,
            c = function (b, d) {
                (this.options = a.extend({}, c.DEFAULTS, d)),
                    (this.$target = a(this.options.target).on("scroll.bs.affix.data-api", a.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", a.proxy(this.checkPositionWithEventLoop, this))),
                    (this.$element = a(b)),
                    (this.affixed = this.unpin = this.pinnedOffset = null),
                    this.checkPosition();
            };
        (c.VERSION = "3.2.0"),
            (c.RESET = "affix affix-top affix-bottom"),
            (c.DEFAULTS = { offset: 0, target: window }),
            (c.prototype.getPinnedOffset = function () {
                if (this.pinnedOffset) return this.pinnedOffset;
                this.$element.removeClass(c.RESET).addClass("affix");
                var a = this.$target.scrollTop(),
                    b = this.$element.offset();
                return (this.pinnedOffset = b.top - a);
            }),
            (c.prototype.checkPositionWithEventLoop = function () {
                setTimeout(a.proxy(this.checkPosition, this), 1);
            }),
            (c.prototype.checkPosition = function () {
                var b, d, e;
                if (this.$element.is(":visible")) {
                    var f = a(document).height(),
                        g = this.$target.scrollTop(),
                        h = this.$element.offset(),
                        i = this.options.offset,
                        j = i.top,
                        k = i.bottom;
                    "object" != typeof i && (k = j = i),
                        "function" == typeof j && (j = i.top(this.$element)),
                        "function" == typeof k && (k = i.bottom(this.$element)),
                        (b = !(null != this.unpin && g + this.unpin <= h.top) && (null != k && h.top + this.$element.height() >= f - k ? "bottom" : null != j && g <= j && "top")),
                        this.affixed !== b &&
                            (null != this.unpin && this.$element.css("top", ""),
                            (d = "affix" + (b ? "-" + b : "")),
                            (e = a.Event(d + ".bs.affix")),
                            this.$element.trigger(e),
                            e.isDefaultPrevented() ||
                                ((this.affixed = b),
                                (this.unpin = "bottom" == b ? this.getPinnedOffset() : null),
                                this.$element
                                    .removeClass(c.RESET)
                                    .addClass(d)
                                    .trigger(d.replace("affix", "affixed") + ".bs.affix"),
                                "bottom" == b && this.$element.offset({ top: f - this.$element.height() - k })));
                }
            }),
            (d = a.fn.affix),
            (a.fn.affix = b),
            (a.fn.affix.Constructor = c),
            (a.fn.affix.noConflict = function () {
                return (a.fn.affix = d), this;
            }),
            a(window).on("load", function () {
                a('[data-spy="affix"]').each(function () {
                    var c = a(this),
                        d = c.data();
                    (d.offset = d.offset || {}), d.offsetBottom && (d.offset.bottom = d.offsetBottom), d.offsetTop && (d.offset.top = d.offsetTop), b.call(c, d);
                });
            });
    })(jQuery),
    (function (a) {
        "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require("jquery") : jQuery);
    })(function (a) {
        function b(a) {
            return h.raw ? a : encodeURIComponent(a);
        }
        function c(a) {
            return h.raw ? a : decodeURIComponent(a);
        }
        function d(a) {
            return b(h.json ? JSON.stringify(a) : String(a));
        }
        function e(a) {
            0 === a.indexOf('"') && (a = a.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\"));
            try {
                return (a = decodeURIComponent(a.replace(g, " "))), h.json ? JSON.parse(a) : a;
            } catch (a) {}
        }
        function f(b, c) {
            var d = h.raw ? b : e(b);
            return a.isFunction(c) ? c(d) : d;
        }
        var g = /\+/g,
            h = (a.cookie = function (e, g, i) {
                var j, k, l, m, n, o;
                if (arguments.length > 1 && !a.isFunction(g))
                    return (
                        (i = a.extend({}, h.defaults, i)),
                        "number" == typeof i.expires && ((j = i.expires), (k = i.expires = new Date()), k.setTime(+k + 864e5 * j)),
                        (document.cookie = [b(e), "=", d(g), i.expires ? "; expires=" + i.expires.toUTCString() : "", i.path ? "; path=" + i.path : "", i.domain ? "; domain=" + i.domain : "", i.secure ? "; secure" : ""].join(""))
                    );
                for (l = e ? void 0 : {}, m = document.cookie ? document.cookie.split("; ") : [], n = 0, o = m.length; n < o; n++) {
                    var p = m[n].split("="),
                        q = c(p.shift()),
                        r = p.join("=");
                    if (e && e === q) {
                        l = f(r, g);
                        break;
                    }
                    e || void 0 === (r = f(r)) || (l[q] = r);
                }
                return l;
            });
        (h.defaults = {}),
            (a.removeCookie = function (b, c) {
                return void 0 !== a.cookie(b) && (a.cookie(b, "", a.extend({}, c, { expires: -1 })), !a.cookie(b));
            });
    }),
    (function (a, b) {
        "use strict";
        function c() {
            if (!d.READY) {
                d.event.determineEventTypes();
                for (var a in d.gestures) d.gestures.hasOwnProperty(a) && d.detection.register(d.gestures[a]);
                d.event.onTouch(d.DOCUMENT, d.EVENT_MOVE, d.detection.detect), d.event.onTouch(d.DOCUMENT, d.EVENT_END, d.detection.detect), (d.READY = !0);
            }
        }
        var e,
            d = function (a, b) {
                return new d.Instance(a, b || {});
            };
        (d.defaults = { stop_browser_behavior: { userSelect: "none", touchAction: "none", touchCallout: "none", contentZooming: "none", userDrag: "none", tapHighlightColor: "rgba(0,0,0,0)" } }),
            (d.HAS_POINTEREVENTS = a.navigator.pointerEnabled || a.navigator.msPointerEnabled),
            (d.HAS_TOUCHEVENTS = "ontouchstart" in a),
            (d.MOBILE_REGEX = /mobile|tablet|ip(ad|hone|od)|android|silk/i),
            (d.NO_MOUSEEVENTS = d.HAS_TOUCHEVENTS && a.navigator.userAgent.match(d.MOBILE_REGEX)),
            (d.EVENT_TYPES = {}),
            (d.DIRECTION_DOWN = "down"),
            (d.DIRECTION_LEFT = "left"),
            (d.DIRECTION_UP = "up"),
            (d.DIRECTION_RIGHT = "right"),
            (d.POINTER_MOUSE = "mouse"),
            (d.POINTER_TOUCH = "touch"),
            (d.POINTER_PEN = "pen"),
            (d.EVENT_START = "start"),
            (d.EVENT_MOVE = "move"),
            (d.EVENT_END = "end"),
            (d.DOCUMENT = a.document),
            (d.plugins = {}),
            (d.READY = !1),
            (d.Instance = function (a, b) {
                var e = this;
                return (
                    c(),
                    (this.element = a),
                    (this.enabled = !0),
                    (this.options = d.utils.extend(d.utils.extend({}, d.defaults), b || {})),
                    this.options.stop_browser_behavior && d.utils.stopDefaultBrowserBehavior(this.element, this.options.stop_browser_behavior),
                    d.event.onTouch(a, d.EVENT_START, function (a) {
                        e.enabled && d.detection.startDetect(e, a);
                    }),
                    this
                );
            }),
            (d.Instance.prototype = {
                on: function (a, b) {
                    for (var c = a.split(" "), d = 0; c.length > d; d++) this.element.addEventListener(c[d], b, !1);
                    return this;
                },
                off: function (a, b) {
                    for (var c = a.split(" "), d = 0; c.length > d; d++) this.element.removeEventListener(c[d], b, !1);
                    return this;
                },
                trigger: function (a, b) {
                    var c, e;
                    return b || (b = {}), (c = d.DOCUMENT.createEvent("Event")), c.initEvent(a, !0, !0), (c.gesture = b), (e = this.element), d.utils.hasParent(b.target, e) && (e = b.target), e.dispatchEvent(c), this;
                },
                enable: function (a) {
                    return (this.enabled = a), this;
                },
            });
        var f = null,
            g = !1,
            h = !1;
        (d.event = {
            bindDom: function (a, b, c) {
                for (var d = b.split(" "), e = 0; d.length > e; e++) a.addEventListener(d[e], c, !1);
            },
            onTouch: function (a, b, c) {
                var e = this;
                this.bindDom(a, d.EVENT_TYPES[b], function (i) {
                    var k,
                        j = i.type.toLowerCase();
                    (j.match(/mouse/) && h) ||
                        (j.match(/touch/) || j.match(/pointerdown/) || (j.match(/mouse/) && 1 === i.which) ? (g = !0) : j.match(/mouse/) && 1 !== i.which && (g = !1),
                        j.match(/touch|pointer/) && (h = !0),
                        (k = 0),
                        g &&
                            (d.HAS_POINTEREVENTS && b != d.EVENT_END ? (k = d.PointerEvent.updatePointer(b, i)) : j.match(/touch/) ? (k = i.touches.length) : h || (k = j.match(/up/) ? 0 : 1),
                            k > 0 && b == d.EVENT_END ? (b = d.EVENT_MOVE) : k || (b = d.EVENT_END),
                            (k || null === f) && (f = i),
                            c.call(d.detection, e.collectEventData(a, b, e.getTouchList(f, b), i)),
                            d.HAS_POINTEREVENTS && b == d.EVENT_END && (k = d.PointerEvent.updatePointer(b, i))),
                        k || ((f = null), (g = !1), (h = !1), d.PointerEvent.reset()));
                });
            },
            determineEventTypes: function () {
                var a;
                (a = d.HAS_POINTEREVENTS ? d.PointerEvent.getEvents() : d.NO_MOUSEEVENTS ? ["touchstart", "touchmove", "touchend touchcancel"] : ["touchstart mousedown", "touchmove mousemove", "touchend touchcancel mouseup"]),
                    (d.EVENT_TYPES[d.EVENT_START] = a[0]),
                    (d.EVENT_TYPES[d.EVENT_MOVE] = a[1]),
                    (d.EVENT_TYPES[d.EVENT_END] = a[2]);
            },
            getTouchList: function (a) {
                return d.HAS_POINTEREVENTS ? d.PointerEvent.getTouchList() : a.touches ? a.touches : ((a.indentifier = 1), [a]);
            },
            collectEventData: function (a, b, c, e) {
                var f = d.POINTER_TOUCH;
                return (
                    (e.type.match(/mouse/) || d.PointerEvent.matchType(d.POINTER_MOUSE, e)) && (f = d.POINTER_MOUSE),
                    {
                        center: d.utils.getCenter(c),
                        timeStamp: new Date().getTime(),
                        target: e.target,
                        touches: c,
                        eventType: b,
                        pointerType: f,
                        srcEvent: e,
                        preventDefault: function () {
                            this.srcEvent.preventManipulation && this.srcEvent.preventManipulation(), this.srcEvent.preventDefault && this.srcEvent.preventDefault();
                        },
                        stopPropagation: function () {
                            this.srcEvent.stopPropagation();
                        },
                        stopDetect: function () {
                            return d.detection.stopDetect();
                        },
                    }
                );
            },
        }),
            (d.PointerEvent = {
                pointers: {},
                getTouchList: function () {
                    var a = this,
                        b = [];
                    return (
                        Object.keys(a.pointers)
                            .sort()
                            .forEach(function (c) {
                                b.push(a.pointers[c]);
                            }),
                        b
                    );
                },
                updatePointer: function (a, b) {
                    return a == d.EVENT_END ? (this.pointers = {}) : ((b.identifier = b.pointerId), (this.pointers[b.pointerId] = b)), Object.keys(this.pointers).length;
                },
                matchType: function (a, b) {
                    if (!b.pointerType) return !1;
                    var c = {};
                    return (
                        (c[d.POINTER_MOUSE] = b.pointerType == b.MSPOINTER_TYPE_MOUSE || b.pointerType == d.POINTER_MOUSE),
                        (c[d.POINTER_TOUCH] = b.pointerType == b.MSPOINTER_TYPE_TOUCH || b.pointerType == d.POINTER_TOUCH),
                        (c[d.POINTER_PEN] = b.pointerType == b.MSPOINTER_TYPE_PEN || b.pointerType == d.POINTER_PEN),
                        c[a]
                    );
                },
                getEvents: function () {
                    return ["pointerdown MSPointerDown", "pointermove MSPointerMove", "pointerup pointercancel MSPointerUp MSPointerCancel"];
                },
                reset: function () {
                    this.pointers = {};
                },
            }),
            (d.utils = {
                extend: function (a, c, d) {
                    for (var e in c) (a[e] !== b && d) || (a[e] = c[e]);
                    return a;
                },
                hasParent: function (a, b) {
                    for (; a; ) {
                        if (a == b) return !0;
                        a = a.parentNode;
                    }
                    return !1;
                },
                getCenter: function (a) {
                    for (var b = [], c = [], d = 0, e = a.length; e > d; d++) b.push(a[d].pageX), c.push(a[d].pageY);
                    return { pageX: (Math.min.apply(Math, b) + Math.max.apply(Math, b)) / 2, pageY: (Math.min.apply(Math, c) + Math.max.apply(Math, c)) / 2 };
                },
                getVelocity: function (a, b, c) {
                    return { x: Math.abs(b / a) || 0, y: Math.abs(c / a) || 0 };
                },
                getAngle: function (a, b) {
                    var c = b.pageY - a.pageY,
                        d = b.pageX - a.pageX;
                    return (180 * Math.atan2(c, d)) / Math.PI;
                },
                getDirection: function (a, b) {
                    return Math.abs(a.pageX - b.pageX) >= Math.abs(a.pageY - b.pageY) ? (a.pageX - b.pageX > 0 ? d.DIRECTION_LEFT : d.DIRECTION_RIGHT) : a.pageY - b.pageY > 0 ? d.DIRECTION_UP : d.DIRECTION_DOWN;
                },
                getDistance: function (a, b) {
                    var c = b.pageX - a.pageX,
                        d = b.pageY - a.pageY;
                    return Math.sqrt(c * c + d * d);
                },
                getScale: function (a, b) {
                    return a.length >= 2 && b.length >= 2 ? this.getDistance(b[0], b[1]) / this.getDistance(a[0], a[1]) : 1;
                },
                getRotation: function (a, b) {
                    return a.length >= 2 && b.length >= 2 ? this.getAngle(b[1], b[0]) - this.getAngle(a[1], a[0]) : 0;
                },
                isVertical: function (a) {
                    return a == d.DIRECTION_UP || a == d.DIRECTION_DOWN;
                },
                stopDefaultBrowserBehavior: function (a, b) {
                    var c,
                        e,
                        f,
                        d = ["webkit", "khtml", "moz", "Moz", "ms", "o", ""];
                    if (b && a.style) {
                        for (e = 0; d.length > e; e++) for (f in b) b.hasOwnProperty(f) && ((c = f), d[e] && (c = d[e] + c.substring(0, 1).toUpperCase() + c.substring(1)), (a.style[c] = b[f]));
                        "none" == b.userSelect &&
                            (a.onselectstart = function () {
                                return !1;
                            }),
                            "none" == b.userDrag &&
                                (a.ondragstart = function () {
                                    return !1;
                                });
                    }
                },
            }),
            (d.detection = {
                gestures: [],
                current: null,
                previous: null,
                stopped: !1,
                startDetect: function (a, b) {
                    this.current || ((this.stopped = !1), (this.current = { inst: a, startEvent: d.utils.extend({}, b), lastEvent: !1, name: "" }), this.detect(b));
                },
                detect: function (a) {
                    var b;
                    if (this.current && !this.stopped) {
                        a = this.extendEventData(a);
                        for (var c = this.current.inst.options, e = 0, f = this.gestures.length; f > e; e++)
                            if (((b = this.gestures[e]), !this.stopped && !1 !== c[b.name] && !1 === b.handler.call(b, a, this.current.inst))) {
                                this.stopDetect();
                                break;
                            }
                        return this.current && (this.current.lastEvent = a), a.eventType == d.EVENT_END && !a.touches.length - 1 && this.stopDetect(), a;
                    }
                },
                stopDetect: function () {
                    (this.previous = d.utils.extend({}, this.current)), (this.current = null), (this.stopped = !0);
                },
                extendEventData: function (a) {
                    var c,
                        e,
                        b = this.current.startEvent;
                    if (b && (a.touches.length != b.touches.length || a.touches === b.touches)) for (b.touches = [], c = 0, e = a.touches.length; e > c; c++) b.touches.push(d.utils.extend({}, a.touches[c]));
                    var f = a.timeStamp - b.timeStamp,
                        g = a.center.pageX - b.center.pageX,
                        h = a.center.pageY - b.center.pageY,
                        i = d.utils.getVelocity(f, g, h);
                    return (
                        d.utils.extend(a, {
                            deltaTime: f,
                            deltaX: g,
                            deltaY: h,
                            velocityX: i.x,
                            velocityY: i.y,
                            distance: d.utils.getDistance(b.center, a.center),
                            angle: d.utils.getAngle(b.center, a.center),
                            interimAngle: this.current.lastEvent && d.utils.getAngle(this.current.lastEvent.center, a.center),
                            direction: d.utils.getDirection(b.center, a.center),
                            interimDirection: this.current.lastEvent && d.utils.getDirection(this.current.lastEvent.center, a.center),
                            scale: d.utils.getScale(b.touches, a.touches),
                            rotation: d.utils.getRotation(b.touches, a.touches),
                            startEvent: b,
                        }),
                        a
                    );
                },
                register: function (a) {
                    var c = a.defaults || {};
                    return (
                        c[a.name] === b && (c[a.name] = !0),
                        d.utils.extend(d.defaults, c, !0),
                        (a.index = a.index || 1e3),
                        this.gestures.push(a),
                        this.gestures.sort(function (a, b) {
                            return a.index < b.index ? -1 : a.index > b.index ? 1 : 0;
                        }),
                        this.gestures
                    );
                },
            }),
            (d.gestures = d.gestures || {}),
            (d.gestures.Hold = {
                name: "hold",
                index: 10,
                defaults: { hold_timeout: 500, hold_threshold: 1 },
                timer: null,
                handler: function (a, b) {
                    switch (a.eventType) {
                        case d.EVENT_START:
                            clearTimeout(this.timer),
                                (d.detection.current.name = this.name),
                                (this.timer = setTimeout(function () {
                                    "hold" == d.detection.current.name && b.trigger("hold", a);
                                }, b.options.hold_timeout));
                            break;
                        case d.EVENT_MOVE:
                            a.distance > b.options.hold_threshold && clearTimeout(this.timer);
                            break;
                        case d.EVENT_END:
                            clearTimeout(this.timer);
                    }
                },
            }),
            (d.gestures.Tap = {
                name: "tap",
                index: 100,
                defaults: { tap_max_touchtime: 250, tap_max_distance: 10, tap_always: !0, doubletap_distance: 20, doubletap_interval: 300 },
                handler: function (a, b) {
                    if (a.eventType == d.EVENT_END && "touchcancel" != a.srcEvent.type) {
                        var c = d.detection.previous,
                            e = !1;
                        if (a.deltaTime > b.options.tap_max_touchtime || a.distance > b.options.tap_max_distance) return;
                        c && "tap" == c.name && a.timeStamp - c.lastEvent.timeStamp < b.options.doubletap_interval && a.distance < b.options.doubletap_distance && (b.trigger("doubletap", a), (e = !0)),
                            (!e || b.options.tap_always) && ((d.detection.current.name = "tap"), b.trigger(d.detection.current.name, a));
                    }
                },
            }),
            (d.gestures.Swipe = {
                name: "swipe",
                index: 40,
                defaults: { swipe_min_touches: 1, swipe_max_touches: 1, swipe_velocity: 0.7 },
                handler: function (a, b) {
                    if (a.eventType == d.EVENT_END) {
                        if (b.options.swipe_max_touches > 0 && a.touches.length < b.options.swipe_min_touches && a.touches.length > b.options.swipe_max_touches) return;
                        (a.velocityX > b.options.swipe_velocity || a.velocityY > b.options.swipe_velocity) && (b.trigger(this.name, a), b.trigger(this.name + a.direction, a));
                    }
                },
            }),
            (d.gestures.Drag = {
                name: "drag",
                index: 50,
                defaults: { drag_min_distance: 10, correct_for_drag_min_distance: !0, drag_max_touches: 1, drag_block_horizontal: !1, drag_block_vertical: !1, drag_lock_to_axis: !1, drag_lock_min_distance: 25 },
                triggered: !1,
                handler: function (a, c) {
                    var e, f;
                    if (d.detection.current.name != this.name && this.triggered) return c.trigger(this.name + "end", a), (this.triggered = !1), b;
                    if (!(c.options.drag_max_touches > 0 && a.touches.length > c.options.drag_max_touches))
                        switch (a.eventType) {
                            case d.EVENT_START:
                                this.triggered = !1;
                                break;
                            case d.EVENT_MOVE:
                                if (a.distance < c.options.drag_min_distance && d.detection.current.name != this.name) return;
                                d.detection.current.name != this.name &&
                                    ((d.detection.current.name = this.name), c.options.correct_for_drag_min_distance) &&
                                    ((e = Math.abs(c.options.drag_min_distance / a.distance)),
                                    (d.detection.current.startEvent.center.pageX += a.deltaX * e),
                                    (d.detection.current.startEvent.center.pageY += a.deltaY * e),
                                    (a = d.detection.extendEventData(a))),
                                    (d.detection.current.lastEvent.drag_locked_to_axis || (c.options.drag_lock_to_axis && c.options.drag_lock_min_distance <= a.distance)) && (a.drag_locked_to_axis = !0),
                                    (f = d.detection.current.lastEvent.direction),
                                    a.drag_locked_to_axis && f !== a.direction && (a.direction = d.utils.isVertical(f) ? (0 > a.deltaY ? d.DIRECTION_UP : d.DIRECTION_DOWN) : 0 > a.deltaX ? d.DIRECTION_LEFT : d.DIRECTION_RIGHT),
                                    this.triggered || (c.trigger(this.name + "start", a), (this.triggered = !0)),
                                    c.trigger(this.name, a),
                                    c.trigger(this.name + a.direction, a),
                                    ((c.options.drag_block_vertical && d.utils.isVertical(a.direction)) || (c.options.drag_block_horizontal && !d.utils.isVertical(a.direction))) && a.preventDefault();
                                break;
                            case d.EVENT_END:
                                this.triggered && c.trigger(this.name + "end", a), (this.triggered = !1);
                        }
                },
            }),
            (d.gestures.Transform = {
                name: "transform",
                index: 45,
                defaults: { transform_min_scale: 0.01, transform_min_rotation: 1, transform_always_block: !1 },
                triggered: !1,
                handler: function (a, c) {
                    if (d.detection.current.name != this.name && this.triggered) return c.trigger(this.name + "end", a), (this.triggered = !1), b;
                    if (!(2 > a.touches.length))
                        switch ((c.options.transform_always_block && a.preventDefault(), a.eventType)) {
                            case d.EVENT_START:
                                this.triggered = !1;
                                break;
                            case d.EVENT_MOVE:
                                var e = Math.abs(1 - a.scale),
                                    f = Math.abs(a.rotation);
                                if (c.options.transform_min_scale > e && c.options.transform_min_rotation > f) return;
                                (d.detection.current.name = this.name),
                                    this.triggered || (c.trigger(this.name + "start", a), (this.triggered = !0)),
                                    c.trigger(this.name, a),
                                    f > c.options.transform_min_rotation && c.trigger("rotate", a),
                                    e > c.options.transform_min_scale && (c.trigger("pinch", a), c.trigger("pinch" + (1 > a.scale ? "in" : "out"), a));
                                break;
                            case d.EVENT_END:
                                this.triggered && c.trigger(this.name + "end", a), (this.triggered = !1);
                        }
                },
            }),
            (d.gestures.Touch = {
                name: "touch",
                index: -1 / 0,
                defaults: { prevent_default: !1, prevent_mouseevents: !1 },
                handler: function (a, c) {
                    return c.options.prevent_mouseevents && a.pointerType == d.POINTER_MOUSE ? (a.stopDetect(), b) : (c.options.prevent_default && a.preventDefault(), a.eventType == d.EVENT_START && c.trigger(this.name, a), b);
                },
            }),
            (d.gestures.Release = {
                name: "release",
                index: 1 / 0,
                handler: function (a, b) {
                    a.eventType == d.EVENT_END && b.trigger(this.name, a);
                },
            }),
            (e = function (a, c) {
                return c === b
                    ? a
                    : ((a.event.bindDom = function (a, d, e) {
                          c(a).on(d, function (a) {
                              var c = a.originalEvent || a;
                              c.pageX === b && ((c.pageX = a.pageX), (c.pageY = a.pageY)),
                                  c.target || (c.target = a.target),
                                  c.which === b && (c.which = c.button),
                                  c.preventDefault || (c.preventDefault = a.preventDefault),
                                  c.stopPropagation || (c.stopPropagation = a.stopPropagation),
                                  e.call(this, c);
                          });
                      }),
                      (a.Instance.prototype.on = function (a, b) {
                          return c(this.element).on(a, b);
                      }),
                      (a.Instance.prototype.off = function (a, b) {
                          return c(this.element).off(a, b);
                      }),
                      (a.Instance.prototype.trigger = function (a, b) {
                          var d = c(this.element);
                          return d.has(b.target).length && (d = c(b.target)), d.trigger({ type: a, gesture: b });
                      }),
                      (c.fn.hammer = function (b) {
                          return this.each(function () {
                              var d = c(this),
                                  e = d.data("hammer");
                              e ? e && b && a.utils.extend(e.options, b) : d.data("hammer", new a(this, b || {}));
                          });
                      }),
                      b);
            }),
            "function" == typeof define && "object" == typeof define.amd && define.amd
                ? define(["jquery"], function (a) {
                      e(d, a);
                  })
                : e(d, a.jQuery || a.Zepto);
    })(this),
    (function (a) {
        a.fn.hoverIntent = function (b, c, d) {
            var e = { interval: 100, sensitivity: 7, timeout: 0 };
            e = "object" == typeof b ? a.extend(e, b) : a.isFunction(c) ? a.extend(e, { over: b, out: c, selector: d }) : a.extend(e, { over: b, out: b, selector: c });
            var f,
                g,
                h,
                i,
                j = function (a) {
                    (f = a.pageX), (g = a.pageY);
                },
                k = function (b, c) {
                    if (((c.hoverIntent_t = clearTimeout(c.hoverIntent_t)), Math.abs(h - f) + Math.abs(i - g) < e.sensitivity)) return a(c).off("mousemove.hoverIntent", j), (c.hoverIntent_s = 1), e.over.apply(c, [b]);
                    (h = f),
                        (i = g),
                        (c.hoverIntent_t = setTimeout(function () {
                            k(b, c);
                        }, e.interval));
                },
                l = function (a, b) {
                    return (b.hoverIntent_t = clearTimeout(b.hoverIntent_t)), (b.hoverIntent_s = 0), e.out.apply(b, [a]);
                },
                m = function (b) {
                    var c = jQuery.extend({}, b),
                        d = this;
                    d.hoverIntent_t && (d.hoverIntent_t = clearTimeout(d.hoverIntent_t)),
                        "mouseenter" == b.type
                            ? ((h = c.pageX),
                              (i = c.pageY),
                              a(d).on("mousemove.hoverIntent", j),
                              1 != d.hoverIntent_s &&
                                  (d.hoverIntent_t = setTimeout(function () {
                                      k(c, d);
                                  }, e.interval)))
                            : (a(d).off("mousemove.hoverIntent", j),
                              1 == d.hoverIntent_s &&
                                  (d.hoverIntent_t = setTimeout(function () {
                                      l(c, d);
                                  }, e.timeout)));
                };
            return this.on({ "mouseenter.hoverIntent": m, "mouseleave.hoverIntent": m }, e.selector);
        };
    })(jQuery),
    (function (a) {
        "use strict";
        "function" == typeof define && define.amd ? define(["jquery"], a) : a(jQuery);
    })(function (a) {
        "use strict";
        function b(c, d) {
            var e = function () {},
                f = this,
                g = {
                    autoSelectFirst: !1,
                    appendTo: "body",
                    serviceUrl: null,
                    lookup: null,
                    onSelect: null,
                    width: "auto",
                    minChars: 1,
                    maxHeight: 300,
                    deferRequestBy: 0,
                    params: {},
                    formatResult: b.formatResult,
                    delimiter: null,
                    zIndex: 9999,
                    type: "GET",
                    noCache: !1,
                    onSearchStart: e,
                    onSearchComplete: e,
                    onSearchError: e,
                    containerClass: "autocomplete-suggestions",
                    tabDisabled: !1,
                    dataType: "text",
                    currentRequest: null,
                    lookupFilter: function (a, b, c) {
                        return -1 !== a.value.toLowerCase().indexOf(c);
                    },
                    paramName: "query",
                    transformResult: function (b) {
                        return "string" == typeof b ? a.parseJSON(b) : b;
                    },
                };
            (f.element = c),
                (f.el = a(c)),
                (f.suggestions = []),
                (f.badQueries = []),
                (f.selectedIndex = -1),
                (f.currentValue = f.element.value),
                (f.intervalId = 0),
                (f.cachedResponse = []),
                (f.onChangeInterval = null),
                (f.onChange = null),
                (f.isLocal = !1),
                (f.suggestionsContainer = null),
                (f.options = a.extend({}, g, d)),
                (f.classes = { selected: "autocomplete-selected", suggestion: "autocomplete-suggestion" }),
                (f.hint = null),
                (f.hintValue = ""),
                (f.selection = null),
                f.initialize(),
                f.setOptions(d);
        }
        var c = (function () {
                return {
                    escapeRegExChars: function (a) {
                        return a.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
                    },
                    createNode: function (a) {
                        var b = document.createElement("div");
                        return (b.innerHTML = a), b.firstChild;
                    },
                };
            })(),
            d = { ESC: 27, TAB: 9, RETURN: 13, LEFT: 37, UP: 38, RIGHT: 39, DOWN: 40 };
        (b.utils = c),
            (a.Autocomplete = b),
            (b.formatResult = function (a, b) {
                var d = "(" + c.escapeRegExChars(b) + ")";
                return a.value.replace(new RegExp(d, "gi"), "<strong>$1</strong>");
            }),
            (b.prototype = {
                killerFn: null,
                initialize: function () {
                    var g,
                        c = this,
                        d = "." + c.classes.suggestion,
                        e = c.classes.selected,
                        f = c.options;
                    c.element.setAttribute("autocomplete", "off"),
                        (c.killerFn = function (b) {
                            0 === a(b.target).closest("." + c.options.containerClass).length && (c.killSuggestions(), c.disableKillerFn());
                        }),
                        (c.suggestionsContainer = b.utils.createNode('<div class="' + f.containerClass + '" style="position: absolute; display: none;"></div>')),
                        (g = a(c.suggestionsContainer)),
                        g.appendTo(f.appendTo),
                        "auto" !== f.width && g.width(f.width),
                        g.on("mouseover.autocomplete", d, function () {
                            c.activate(a(this).data("index"));
                        }),
                        g.on("mouseout.autocomplete", function () {
                            (c.selectedIndex = -1), g.children("." + e).removeClass(e);
                        }),
                        g.on("click.autocomplete", d, function () {
                            c.select(a(this).data("index"));
                        }),
                        c.fixPosition(),
                        (c.fixPositionCapture = function () {
                            c.visible && c.fixPosition();
                        }),
                        a(window).on("resize", c.fixPositionCapture),
                        c.el.on("keydown.autocomplete", function (a) {
                            c.onKeyPress(a);
                        }),
                        c.el.on("keyup.autocomplete", function (a) {
                            c.onKeyUp(a);
                        }),
                        c.el.on("blur.autocomplete", function () {
                            c.onBlur();
                        }),
                        c.el.on("focus.autocomplete", function () {
                            c.fixPosition();
                        }),
                        c.el.on("change.autocomplete", function (a) {
                            c.onKeyUp(a);
                        });
                },
                onBlur: function () {
                    this.enableKillerFn();
                },
                setOptions: function (b) {
                    var c = this,
                        d = c.options;
                    a.extend(d, b),
                        (c.isLocal = a.isArray(d.lookup)),
                        c.isLocal && (d.lookup = c.verifySuggestionsFormat(d.lookup)),
                        a(c.suggestionsContainer).css({ "max-height": d.maxHeight + "px", width: d.width + "px", "z-index": d.zIndex });
                },
                clearCache: function () {
                    (this.cachedResponse = []), (this.badQueries = []);
                },
                clear: function () {
                    this.clearCache(), (this.currentValue = ""), (this.suggestions = []);
                },
                disable: function () {
                    this.disabled = !0;
                },
                enable: function () {
                    this.disabled = !1;
                },
                fixPosition: function () {
                    var c,
                        b = this;
                    "body" === b.options.appendTo && ((c = b.el.offset()), a(b.suggestionsContainer).css({ top: c.top + b.el.outerHeight() + "px", left: c.left + "px" }));
                },
                enableKillerFn: function () {
                    var b = this;
                    a(document).on("click.autocomplete", b.killerFn);
                },
                disableKillerFn: function () {
                    var b = this;
                    a(document).off("click.autocomplete", b.killerFn);
                },
                killSuggestions: function () {
                    var a = this;
                    a.stopKillSuggestions(),
                        (a.intervalId = window.setInterval(function () {
                            a.hide(), a.stopKillSuggestions();
                        }, 300));
                },
                stopKillSuggestions: function () {
                    window.clearInterval(this.intervalId);
                },
                isCursorAtEnd: function () {
                    var d,
                        a = this,
                        b = a.el.val().length,
                        c = a.element.selectionStart;
                    return "number" == typeof c ? c === b : !document.selection || ((d = document.selection.createRange()), d.moveStart("character", -b), b === d.text.length);
                },
                onKeyPress: function (a) {
                    var b = this;
                    if (!b.disabled && !b.visible && a.which === d.DOWN && b.currentValue) return void b.suggest();
                    if (!b.disabled && b.visible) {
                        switch (a.which) {
                            case d.ESC:
                                b.el.val(b.currentValue), b.hide();
                                break;
                            case d.RIGHT:
                                if (b.hint && b.options.onHint && b.isCursorAtEnd()) {
                                    b.selectHint();
                                    break;
                                }
                                return;
                            case d.TAB:
                                if (b.hint && b.options.onHint) return void b.selectHint();
                            case d.RETURN:
                                if (-1 === b.selectedIndex) return void b.hide();
                                if ((b.select(b.selectedIndex), a.which === d.TAB && !1 === b.options.tabDisabled)) return;
                                break;
                            case d.UP:
                                b.moveUp();
                                break;
                            case d.DOWN:
                                b.moveDown();
                                break;
                            default:
                                return;
                        }
                        a.stopImmediatePropagation(), a.preventDefault();
                    }
                },
                onKeyUp: function (a) {
                    var b = this;
                    if (!b.disabled) {
                        switch (a.which) {
                            case d.UP:
                            case d.DOWN:
                                return;
                        }
                        clearInterval(b.onChangeInterval),
                            b.currentValue !== b.el.val() &&
                                (b.findBestHint(),
                                b.options.deferRequestBy > 0
                                    ? (b.onChangeInterval = setInterval(function () {
                                          b.onValueChange();
                                      }, b.options.deferRequestBy))
                                    : b.onValueChange());
                    }
                },
                onValueChange: function () {
                    var c,
                        b = this;
                    b.selection && ((b.selection = null), (b.options.onInvalidateSelection || a.noop)()),
                        clearInterval(b.onChangeInterval),
                        (b.currentValue = b.el.val()),
                        (c = b.getQuery(b.currentValue)),
                        (b.selectedIndex = -1),
                        c.length < b.options.minChars ? b.hide() : b.getSuggestions(c);
                },
                getQuery: function (b) {
                    var d,
                        c = this.options.delimiter;
                    return c ? ((d = b.split(c)), a.trim(d[d.length - 1])) : a.trim(b);
                },
                getSuggestionsLocal: function (b) {
                    var c = this,
                        d = b.toLowerCase(),
                        e = c.options.lookupFilter;
                    return {
                        suggestions: a.grep(c.options.lookup, function (a) {
                            return e(a, b, d);
                        }),
                    };
                },
                getSuggestions: function (b) {
                    var c,
                        d = this,
                        e = d.options,
                        f = e.serviceUrl;
                    if ((c = d.isLocal ? d.getSuggestionsLocal(b) : d.cachedResponse[b]) && a.isArray(c.suggestions)) (d.suggestions = c.suggestions), d.suggest();
                    else if (!d.isBadQuery(b)) {
                        if (((e.params[e.paramName] = b), !1 === e.onSearchStart.call(d.element, e.params))) return;
                        a.isFunction(e.serviceUrl) && (f = e.serviceUrl.call(d.element, b)),
                            null != this.currentRequest && this.currentRequest.abort(),
                            (this.currentRequest = a
                                .ajax({ url: f, data: e.ignoreParams ? null : e.params, type: e.type, dataType: e.dataType })
                                .done(function (a) {
                                    d.processResponse(a, b), e.onSearchComplete.call(d.element, b);
                                })
                                .fail(function (a, c, f) {
                                    e.onSearchError.call(d.element, b, a, c, f);
                                }));
                    }
                },
                isBadQuery: function (a) {
                    for (var b = this.badQueries, c = b.length; c--; ) if (0 === a.indexOf(b[c])) return !0;
                    return !1;
                },
                hide: function () {
                    var b = this;
                    (b.visible = !1), (b.selectedIndex = -1), a(b.suggestionsContainer).hide(), b.signalHint(null);
                },
                suggest: function () {
                    if (0 === this.suggestions.length) return void this.hide();
                    var i,
                        b = this,
                        c = b.options.formatResult,
                        d = b.getQuery(b.currentValue),
                        e = b.classes.suggestion,
                        f = b.classes.selected,
                        g = a(b.suggestionsContainer),
                        h = "";
                    a.each(b.suggestions, function (a, b) {
                        h += '<div class="' + e + '" data-index="' + a + '">' + c(b, d) + "</div>";
                    }),
                        "auto" === b.options.width && ((i = b.el.outerWidth() - 2), g.width(i > 0 ? i : 300)),
                        g.html(h).show(),
                        (b.visible = !0),
                        b.options.autoSelectFirst && ((b.selectedIndex = 0), g.children().first().addClass(f)),
                        b.findBestHint();
                },
                findBestHint: function () {
                    var b = this,
                        c = b.el.val().toLowerCase(),
                        d = null;
                    c &&
                        (a.each(b.suggestions, function (a, b) {
                            var e = 0 === b.value.toLowerCase().indexOf(c);
                            return e && (d = b), !e;
                        }),
                        b.signalHint(d));
                },
                signalHint: function (b) {
                    var c = "",
                        d = this;
                    b && (c = d.currentValue + b.value.substr(d.currentValue.length)), d.hintValue !== c && ((d.hintValue = c), (d.hint = b), (this.options.onHint || a.noop)(c));
                },
                verifySuggestionsFormat: function (b) {
                    return b.length && "string" == typeof b[0]
                        ? a.map(b, function (a) {
                              return { value: a, data: null };
                          })
                        : b;
                },
                processResponse: function (a, b) {
                    var c = this,
                        d = c.options,
                        e = d.transformResult(a, b);
                    (e.suggestions = c.verifySuggestionsFormat(e.suggestions)),
                        d.noCache || ((c.cachedResponse[e[d.paramName]] = e), 0 === e.suggestions.length && c.badQueries.push(e[d.paramName])),
                        b === c.getQuery(c.currentValue) && ((c.suggestions = e.suggestions), c.suggest());
                },
                activate: function (b) {
                    var d,
                        c = this,
                        e = c.classes.selected,
                        f = a(c.suggestionsContainer),
                        g = f.children();
                    return f.children("." + e).removeClass(e), (c.selectedIndex = b), -1 !== c.selectedIndex && g.length > c.selectedIndex ? ((d = g.get(c.selectedIndex)), a(d).addClass(e), d) : null;
                },
                selectHint: function () {
                    var b = this,
                        c = a.inArray(b.hint, b.suggestions);
                    b.select(c);
                },
                select: function (a) {
                    var b = this;
                    b.hide(), b.onSelect(a);
                },
                moveUp: function () {
                    var b = this;
                    if (-1 !== b.selectedIndex) {
                        if (0 === b.selectedIndex) return a(b.suggestionsContainer).children().first().removeClass(b.classes.selected), (b.selectedIndex = -1), b.el.val(b.currentValue), void b.findBestHint();
                        b.adjustScroll(b.selectedIndex - 1);
                    }
                },
                moveDown: function () {
                    var a = this;
                    a.selectedIndex !== a.suggestions.length - 1 && a.adjustScroll(a.selectedIndex + 1);
                },
                adjustScroll: function (b) {
                    var e,
                        f,
                        g,
                        c = this,
                        d = c.activate(b),
                        h = 25;
                    d &&
                        ((e = d.offsetTop),
                        (f = a(c.suggestionsContainer).scrollTop()),
                        (g = f + c.options.maxHeight - h),
                        e < f ? a(c.suggestionsContainer).scrollTop(e) : e > g && a(c.suggestionsContainer).scrollTop(e - c.options.maxHeight + h),
                        c.el.val(c.getValue(c.suggestions[b].value)),
                        c.signalHint(null));
                },
                onSelect: function (b) {
                    var c = this,
                        d = c.options.onSelect,
                        e = c.suggestions[b];
                    (c.currentValue = c.getValue(e.value)), c.el.val(c.currentValue), c.signalHint(null), (c.suggestions = []), (c.selection = e), a.isFunction(d) && d.call(c.element, e);
                },
                getValue: function (a) {
                    var d,
                        e,
                        b = this,
                        c = b.options.delimiter;
                    return c ? ((d = b.currentValue), (e = d.split(c)), 1 === e.length ? a : d.substr(0, d.length - e[e.length - 1].length) + a) : a;
                },
                dispose: function () {
                    var b = this;
                    b.el.off(".autocomplete").removeData("autocomplete"), b.disableKillerFn(), a(window).off("resize", b.fixPositionCapture), a(b.suggestionsContainer).remove();
                },
            }),
            (a.fn.autocomplete = function (c, d) {
                var e = "autocomplete";
                return 0 === arguments.length
                    ? this.first().data(e)
                    : this.each(function () {
                          var f = a(this),
                              g = f.data(e);
                          "string" == typeof c ? g && "function" == typeof g[c] && g[c](d) : (g && g.dispose && g.dispose(), (g = new b(this, c)), f.data(e, g));
                      });
            });
    }),
    (function (a) {
        function b(a) {
            return a.replace(/(:|\.)/g, "\\$1");
        }
        var c = {
                exclude: [],
                excludeWithin: [],
                offset: 0,
                direction: "top",
                scrollElement: null,
                scrollTarget: null,
                beforeScroll: function () {},
                afterScroll: function () {},
                easing: "swing",
                speed: 400,
                autoCoefficent: 2,
                preventDefault: !0,
            },
            d = function (b) {
                var c = [],
                    d = !1,
                    e = b.dir && "left" == b.dir ? "scrollLeft" : "scrollTop";
                return (
                    this.each(function () {
                        if (this != document && this != window) {
                            var b = a(this);
                            b[e]() > 0 ? c.push(this) : (b[e](1), (d = b[e]() > 0), d && c.push(this), b[e](0));
                        }
                    }),
                    c.length ||
                        this.each(function () {
                            "BODY" === this.nodeName && (c = [this]);
                        }),
                    "first" === b.el && c.length > 1 && (c = [c[0]]),
                    c
                );
            };
        document;
        a.fn.extend({
            scrollable: function (a) {
                var b = d.call(this, { dir: a });
                return this.pushStack(b);
            },
            firstScrollable: function (a) {
                var b = d.call(this, { el: "first", dir: a });
                return this.pushStack(b);
            },
            smoothScroll: function (c) {
                c = c || {};
                var d = a.extend({}, a.fn.smoothScroll.defaults, c),
                    e = a.smoothScroll.filterPath(location.pathname);
                return (
                    this.unbind("click.smoothscroll").bind("click.smoothscroll", function (c) {
                        var f = this,
                            g = a(this),
                            h = d.exclude,
                            i = d.excludeWithin,
                            j = 0,
                            k = 0,
                            l = !0,
                            m = {},
                            n = location.hostname === f.hostname || !f.hostname,
                            o = d.scrollTarget || (a.smoothScroll.filterPath(f.pathname) || e) === e,
                            p = b(f.hash);
                        if (d.scrollTarget || (n && o && p)) {
                            for (; l && j < h.length; ) g.is(b(h[j++])) && (l = !1);
                            for (; l && k < i.length; ) g.closest(i[k++]).length && (l = !1);
                        } else l = !1;
                        l && (d.preventDefault && c.preventDefault(), a.extend(m, d, { scrollTarget: d.scrollTarget || p, link: f }), a.smoothScroll(m));
                    }),
                    this
                );
            },
        }),
            (a.smoothScroll = function (b, c) {
                var d,
                    e,
                    f,
                    g,
                    h = 0,
                    i = "offset",
                    j = "scrollTop",
                    k = {},
                    l = {};
                "number" == typeof b
                    ? ((d = a.fn.smoothScroll.defaults), (f = b))
                    : ((d = a.extend({}, a.fn.smoothScroll.defaults, b || {})), d.scrollElement && ((i = "position"), "static" == d.scrollElement.css("position") && d.scrollElement.css("position", "relative"))),
                    (d = a.extend({ link: null }, d)),
                    (j = "left" == d.direction ? "scrollLeft" : j),
                    d.scrollElement ? ((e = d.scrollElement), /^(?:HTML|BODY)$/.test(e[0].nodeName) || (h = e[j]())) : (e = a("html, body").firstScrollable(d.direction)),
                    d.beforeScroll.call(e, d),
                    (f = "number" == typeof b ? b : c || (a(d.scrollTarget)[i]() && a(d.scrollTarget)[i]()[d.direction]) || 0),
                    (k[j] = f + h + d.offset),
                    (g = d.speed),
                    "auto" === g && ((g = k[j] || e.scrollTop()), (g /= d.autoCoefficent)),
                    (l = {
                        duration: g,
                        easing: d.easing,
                        complete: function () {
                            d.afterScroll.call(d.link, d);
                        },
                    }),
                    d.step && (l.step = d.step),
                    e.length ? e.stop().animate(k, l) : d.afterScroll.call(d.link, d);
            }),
            (a.smoothScroll.version = "1.4.12"),
            (a.smoothScroll.filterPath = function (a) {
                return a
                    .replace(/^\//, "")
                    .replace(/(?:index|default).[a-zA-Z]{3,4}$/, "")
                    .replace(/\/$/, "");
            }),
            (a.fn.smoothScroll.defaults = c);
    })(jQuery),
    (jQuery.easing.jswing = jQuery.easing.swing),
    jQuery.extend(jQuery.easing, {
        def: "easeOutQuad",
        swing: function (a, b, c, d, e) {
            return jQuery.easing[jQuery.easing.def](a, b, c, d, e);
        },
        easeInQuad: function (a, b, c, d, e) {
            return d * (b /= e) * b + c;
        },
        easeOutQuad: function (a, b, c, d, e) {
            return -d * (b /= e) * (b - 2) + c;
        },
        easeInOutQuad: function (a, b, c, d, e) {
            return (b /= e / 2) < 1 ? (d / 2) * b * b + c : (-d / 2) * (--b * (b - 2) - 1) + c;
        },
        easeInCubic: function (a, b, c, d, e) {
            return d * (b /= e) * b * b + c;
        },
        easeOutCubic: function (a, b, c, d, e) {
            return d * ((b = b / e - 1) * b * b + 1) + c;
        },
        easeInOutCubic: function (a, b, c, d, e) {
            return (b /= e / 2) < 1 ? (d / 2) * b * b * b + c : (d / 2) * ((b -= 2) * b * b + 2) + c;
        },
        easeInQuart: function (a, b, c, d, e) {
            return d * (b /= e) * b * b * b + c;
        },
        easeOutQuart: function (a, b, c, d, e) {
            return -d * ((b = b / e - 1) * b * b * b - 1) + c;
        },
        easeInOutQuart: function (a, b, c, d, e) {
            return (b /= e / 2) < 1 ? (d / 2) * b * b * b * b + c : (-d / 2) * ((b -= 2) * b * b * b - 2) + c;
        },
        easeInQuint: function (a, b, c, d, e) {
            return d * (b /= e) * b * b * b * b + c;
        },
        easeOutQuint: function (a, b, c, d, e) {
            return d * ((b = b / e - 1) * b * b * b * b + 1) + c;
        },
        easeInOutQuint: function (a, b, c, d, e) {
            return (b /= e / 2) < 1 ? (d / 2) * b * b * b * b * b + c : (d / 2) * ((b -= 2) * b * b * b * b + 2) + c;
        },
        easeInSine: function (a, b, c, d, e) {
            return -d * Math.cos((b / e) * (Math.PI / 2)) + d + c;
        },
        easeOutSine: function (a, b, c, d, e) {
            return d * Math.sin((b / e) * (Math.PI / 2)) + c;
        },
        easeInOutSine: function (a, b, c, d, e) {
            return (-d / 2) * (Math.cos((Math.PI * b) / e) - 1) + c;
        },
        easeInExpo: function (a, b, c, d, e) {
            return 0 == b ? c : d * Math.pow(2, 10 * (b / e - 1)) + c;
        },
        easeOutExpo: function (a, b, c, d, e) {
            return b == e ? c + d : d * (1 - Math.pow(2, (-10 * b) / e)) + c;
        },
        easeInOutExpo: function (a, b, c, d, e) {
            return 0 == b ? c : b == e ? c + d : (b /= e / 2) < 1 ? (d / 2) * Math.pow(2, 10 * (b - 1)) + c : (d / 2) * (2 - Math.pow(2, -10 * --b)) + c;
        },
        easeInCirc: function (a, b, c, d, e) {
            return -d * (Math.sqrt(1 - (b /= e) * b) - 1) + c;
        },
        easeOutCirc: function (a, b, c, d, e) {
            return d * Math.sqrt(1 - (b = b / e - 1) * b) + c;
        },
        easeInOutCirc: function (a, b, c, d, e) {
            return (b /= e / 2) < 1 ? (-d / 2) * (Math.sqrt(1 - b * b) - 1) + c : (d / 2) * (Math.sqrt(1 - (b -= 2) * b) + 1) + c;
        },
        easeInElastic: function (a, b, c, d, e) {
            var f = 1.70158,
                g = 0,
                h = d;
            return 0 == b
                ? c
                : 1 == (b /= e)
                ? c + d
                : (g || (g = 0.3 * e), h < Math.abs(d) ? ((h = d), (f = g / 4)) : (f = (g / (2 * Math.PI)) * Math.asin(d / h)), -h * Math.pow(2, 10 * (b -= 1)) * Math.sin((2 * (b * e - f) * Math.PI) / g) + c);
        },
        easeOutElastic: function (a, b, c, d, e) {
            var f = 1.70158,
                g = 0,
                h = d;
            return 0 == b
                ? c
                : 1 == (b /= e)
                ? c + d
                : (g || (g = 0.3 * e), h < Math.abs(d) ? ((h = d), (f = g / 4)) : (f = (g / (2 * Math.PI)) * Math.asin(d / h)), h * Math.pow(2, -10 * b) * Math.sin((2 * (b * e - f) * Math.PI) / g) + d + c);
        },
        easeInOutElastic: function (a, b, c, d, e) {
            var f = 1.70158,
                g = 0,
                h = d;
            return 0 == b
                ? c
                : 2 == (b /= e / 2)
                ? c + d
                : (g || (g = 0.3 * e * 1.5),
                  h < Math.abs(d) ? ((h = d), (f = g / 4)) : (f = (g / (2 * Math.PI)) * Math.asin(d / h)),
                  b < 1 ? -0.5 * h * Math.pow(2, 10 * (b -= 1)) * Math.sin((2 * (b * e - f) * Math.PI) / g) + c : h * Math.pow(2, -10 * (b -= 1)) * Math.sin((2 * (b * e - f) * Math.PI) / g) * 0.5 + d + c);
        },
        easeInBack: function (a, b, c, d, e, f) {
            return void 0 == f && (f = 1.70158), d * (b /= e) * b * ((f + 1) * b - f) + c;
        },
        easeOutBack: function (a, b, c, d, e, f) {
            return void 0 == f && (f = 1.70158), d * ((b = b / e - 1) * b * ((f + 1) * b + f) + 1) + c;
        },
        easeInOutBack: function (a, b, c, d, e, f) {
            return void 0 == f && (f = 1.70158), (b /= e / 2) < 1 ? (d / 2) * b * b * ((1 + (f *= 1.525)) * b - f) + c : (d / 2) * ((b -= 2) * b * ((1 + (f *= 1.525)) * b + f) + 2) + c;
        },
        easeInBounce: function (a, b, c, d, e) {
            return d - jQuery.easing.easeOutBounce(a, e - b, 0, d, e) + c;
        },
        easeOutBounce: function (a, b, c, d, e) {
            return (b /= e) < 1 / 2.75
                ? 7.5625 * d * b * b + c
                : b < 2 / 2.75
                ? d * (7.5625 * (b -= 1.5 / 2.75) * b + 0.75) + c
                : b < 2.5 / 2.75
                ? d * (7.5625 * (b -= 2.25 / 2.75) * b + 0.9375) + c
                : d * (7.5625 * (b -= 2.625 / 2.75) * b + 0.984375) + c;
        },
        easeInOutBounce: function (a, b, c, d, e) {
            return b < e / 2 ? 0.5 * jQuery.easing.easeInBounce(a, 2 * b, 0, d, e) + c : 0.5 * jQuery.easing.easeOutBounce(a, 2 * b - e, 0, d, e) + 0.5 * d + c;
        },
    }),
    (function (a) {
        a.extend(a.fn, {
            validate: function (b) {
                if (!this.length) return void (b && b.debug && window.console && console.warn("Nothing selected, can't validate, returning nothing."));
                var c = a.data(this[0], "validator");
                return (
                    c ||
                    (this.attr("novalidate", "novalidate"),
                    (c = new a.validator(b, this[0])),
                    a.data(this[0], "validator", c),
                    c.settings.onsubmit &&
                        (this.validateDelegate(":submit", "click", function (b) {
                            c.settings.submitHandler && (c.submitButton = b.target), a(b.target).hasClass("cancel") && (c.cancelSubmit = !0), void 0 !== a(b.target).attr("formnovalidate") && (c.cancelSubmit = !0);
                        }),
                        this.submit(function (b) {
                            function d() {
                                var d;
                                return (
                                    !c.settings.submitHandler ||
                                    (c.submitButton && (d = a("<input type='hidden'/>").attr("name", c.submitButton.name).val(a(c.submitButton).val()).appendTo(c.currentForm)),
                                    c.settings.submitHandler.call(c, c.currentForm, b),
                                    c.submitButton && d.remove(),
                                    !1)
                                );
                            }
                            return c.settings.debug && b.preventDefault(), c.cancelSubmit ? ((c.cancelSubmit = !1), d()) : c.form() ? (c.pendingRequest ? ((c.formSubmitted = !0), !1) : d()) : (c.focusInvalid(), !1);
                        })),
                    c)
                );
            },
            valid: function () {
                if (a(this[0]).is("form")) return this.validate().form();
                var b = !0,
                    c = a(this[0].form).validate();
                return (
                    this.each(function () {
                        b = b && c.element(this);
                    }),
                    b
                );
            },
            removeAttrs: function (b) {
                var c = {},
                    d = this;
                return (
                    a.each(b.split(/\s/), function (a, b) {
                        (c[b] = d.attr(b)), d.removeAttr(b);
                    }),
                    c
                );
            },
            rules: function (b, c) {
                var e,
                    f,
                    g,
                    d = this[0];
                if (b) {
                    var h = a.data(d.form, "validator").settings,
                        i = h.rules,
                        j = a.validator.staticRules(d);
                    switch (b) {
                        case "add":
                            a.extend(j, a.validator.normalizeRule(c)), delete j.messages, (i[d.name] = j), c.messages && (h.messages[d.name] = a.extend(h.messages[d.name], c.messages));
                            break;
                        case "remove":
                            return c
                                ? ((e = {}),
                                  a.each(c.split(/\s/), function (a, b) {
                                      (e[b] = j[b]), delete j[b];
                                  }),
                                  e)
                                : (delete i[d.name], j);
                    }
                }
                return (
                    (f = a.validator.normalizeRules(a.extend({}, a.validator.classRules(d), a.validator.attributeRules(d), a.validator.dataRules(d), a.validator.staticRules(d)), d)),
                    f.required && ((g = f.required), delete f.required, (f = a.extend({ required: g }, f))),
                    f
                );
            },
        }),
            a.extend(a.expr[":"], {
                blank: function (b) {
                    return !a.trim("" + a(b).val());
                },
                filled: function (b) {
                    return !!a.trim("" + a(b).val());
                },
                unchecked: function (b) {
                    return !a(b).prop("checked");
                },
            }),
            (a.validator = function (b, c) {
                (this.settings = a.extend(!0, {}, a.validator.defaults, b)), (this.currentForm = c), this.init();
            }),
            (a.validator.format = function (b, c) {
                return 1 === arguments.length
                    ? function () {
                          var c = a.makeArray(arguments);
                          return c.unshift(b), a.validator.format.apply(this, c);
                      }
                    : (arguments.length > 2 && c.constructor !== Array && (c = a.makeArray(arguments).slice(1)),
                      c.constructor !== Array && (c = [c]),
                      a.each(c, function (a, c) {
                          b = b.replace(RegExp("\\{" + a + "\\}", "g"), function () {
                              return c;
                          });
                      }),
                      b);
            }),
            a.extend(a.validator, {
                defaults: {
                    messages: {},
                    groups: {},
                    rules: {},
                    errorClass: "error",
                    validClass: "valid",
                    errorElement: "label",
                    focusInvalid: !0,
                    errorContainer: a([]),
                    errorLabelContainer: a([]),
                    onsubmit: !0,
                    ignore: ":hidden",
                    ignoreTitle: !1,
                    onfocusin: function (a) {
                        (this.lastActive = a),
                            this.settings.focusCleanup &&
                                !this.blockFocusCleanup &&
                                (this.settings.unhighlight && this.settings.unhighlight.call(this, a, this.settings.errorClass, this.settings.validClass), this.addWrapper(this.errorsFor(a)).hide());
                    },
                    onfocusout: function (a) {
                        !this.checkable(a) && (a.name in this.submitted || !this.optional(a)) && this.element(a);
                    },
                    onkeyup: function (a, b) {
                        (9 !== b.which || "" !== this.elementValue(a)) && (a.name in this.submitted || a === this.lastElement) && this.element(a);
                    },
                    onclick: function (a) {
                        a.name in this.submitted ? this.element(a) : a.parentNode.name in this.submitted && this.element(a.parentNode);
                    },
                    highlight: function (b, c, d) {
                        "radio" === b.type ? this.findByName(b.name).addClass(c).removeClass(d) : a(b).addClass(c).removeClass(d);
                    },
                    unhighlight: function (b, c, d) {
                        "radio" === b.type ? this.findByName(b.name).removeClass(c).addClass(d) : a(b).removeClass(c).addClass(d);
                    },
                },
                setDefaults: function (b) {
                    a.extend(a.validator.defaults, b);
                },
                messages: {
                    required: "This field is required.",
                    remote: "Please fix this field.",
                    email: "Please enter a valid email address.",
                    url: "Please enter a valid URL.",
                    date: "Please enter a valid date.",
                    dateISO: "Please enter a valid date (ISO).",
                    number: "Please enter a valid number.",
                    digits: "Please enter only digits.",
                    creditcard: "Please enter a valid credit card number.",
                    equalTo: "Please enter the same value again.",
                    maxlength: a.validator.format("Please enter no more than {0} characters."),
                    minlength: a.validator.format("Please enter at least {0} characters."),
                    rangelength: a.validator.format("Please enter a value between {0} and {1} characters long."),
                    range: a.validator.format("Please enter a value between {0} and {1}."),
                    max: a.validator.format("Please enter a value less than or equal to {0}."),
                    min: a.validator.format("Please enter a value greater than or equal to {0}."),
                },
                autoCreateRanges: !1,
                prototype: {
                    init: function () {
                        function b(b) {
                            var c = a.data(this[0].form, "validator"),
                                d = "on" + b.type.replace(/^validate/, "");
                            c.settings[d] && c.settings[d].call(c, this[0], b);
                        }
                        var c, d;
                        (this.labelContainer = a(this.settings.errorLabelContainer)),
                            (this.errorContext = (this.labelContainer.length && this.labelContainer) || a(this.currentForm)),
                            (this.containers = a(this.settings.errorContainer).add(this.settings.errorLabelContainer)),
                            (this.submitted = {}),
                            (this.valueCache = {}),
                            (this.pendingRequest = 0),
                            (this.pending = {}),
                            (this.invalid = {}),
                            this.reset(),
                            (c = this.groups = {}),
                            a.each(this.settings.groups, function (b, d) {
                                "string" == typeof d && (d = d.split(/\s/)),
                                    a.each(d, function (a, d) {
                                        c[d] = b;
                                    });
                            }),
                            (d = this.settings.rules),
                            a.each(d, function (b, c) {
                                d[b] = a.validator.normalizeRule(c);
                            }),
                            a(this.currentForm)
                                .validateDelegate(
                                    ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'] ,[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'] ",
                                    "focusin focusout keyup",
                                    b
                                )
                                .validateDelegate("[type='radio'], [type='checkbox'], select, option", "click", b),
                            this.settings.invalidHandler && a(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler);
                    },
                    form: function () {
                        return (
                            this.checkForm(), a.extend(this.submitted, this.errorMap), (this.invalid = a.extend({}, this.errorMap)), this.valid() || a(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid()
                        );
                    },
                    checkForm: function () {
                        this.prepareForm();
                        for (var a = 0, b = (this.currentElements = this.elements()); b[a]; a++) this.check(b[a]);
                        return this.valid();
                    },
                    element: function (b) {
                        (b = this.validationTargetFor(this.clean(b))), (this.lastElement = b), this.prepareElement(b), (this.currentElements = a(b));
                        var c = !1 !== this.check(b);
                        return c ? delete this.invalid[b.name] : (this.invalid[b.name] = !0), this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), c;
                    },
                    showErrors: function (b) {
                        if (b) {
                            a.extend(this.errorMap, b), (this.errorList = []);
                            for (var c in b) this.errorList.push({ message: b[c], element: this.findByName(c)[0] });
                            this.successList = a.grep(this.successList, function (a) {
                                return !(a.name in b);
                            });
                        }
                        this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors();
                    },
                    resetForm: function () {
                        a.fn.resetForm && a(this.currentForm).resetForm(),
                            (this.submitted = {}),
                            (this.lastElement = null),
                            this.prepareForm(),
                            this.hideErrors(),
                            this.elements().removeClass(this.settings.errorClass).removeData("previousValue");
                    },
                    numberOfInvalids: function () {
                        return this.objectLength(this.invalid);
                    },
                    objectLength: function (a) {
                        var b = 0;
                        for (var c in a) b++;
                        return b;
                    },
                    hideErrors: function () {
                        this.addWrapper(this.toHide).hide();
                    },
                    valid: function () {
                        return 0 === this.size();
                    },
                    size: function () {
                        return this.errorList.length;
                    },
                    focusInvalid: function () {
                        if (this.settings.focusInvalid)
                            try {
                                a(this.findLastActive() || (this.errorList.length && this.errorList[0].element) || [])
                                    .filter(":visible")
                                    .focus()
                                    .trigger("focusin");
                            } catch (a) {}
                    },
                    findLastActive: function () {
                        var b = this.lastActive;
                        return (
                            b &&
                            1 ===
                                a.grep(this.errorList, function (a) {
                                    return a.element.name === b.name;
                                }).length &&
                            b
                        );
                    },
                    elements: function () {
                        var b = this,
                            c = {};
                        return a(this.currentForm)
                            .find("input, select, textarea")
                            .not(":submit, :reset, :image, [disabled]")
                            .not(this.settings.ignore)
                            .filter(function () {
                                return !this.name && b.settings.debug && window.console && console.error("%o has no name assigned", this), !(this.name in c || !b.objectLength(a(this).rules())) && ((c[this.name] = !0), !0);
                            });
                    },
                    clean: function (b) {
                        return a(b)[0];
                    },
                    errors: function () {
                        var b = this.settings.errorClass.replace(" ", ".");
                        return a(this.settings.errorElement + "." + b, this.errorContext);
                    },
                    reset: function () {
                        (this.successList = []), (this.errorList = []), (this.errorMap = {}), (this.toShow = a([])), (this.toHide = a([])), (this.currentElements = a([]));
                    },
                    prepareForm: function () {
                        this.reset(), (this.toHide = this.errors().add(this.containers));
                    },
                    prepareElement: function (a) {
                        this.reset(), (this.toHide = this.errorsFor(a));
                    },
                    elementValue: function (b) {
                        var c = a(b).attr("type"),
                            d = a(b).val();
                        return "radio" === c || "checkbox" === c ? a("input[name='" + a(b).attr("name") + "']:checked").val() : "string" == typeof d ? d.replace(/\r/g, "") : d;
                    },
                    check: function (b) {
                        var c, d;
                        b = this.validationTargetFor(this.clean(b));
                        var e,
                            f = a(b).rules(),
                            g = !1,
                            h = this.elementValue(b);
                        for (c in f) {
                            d = { method: c, parameters: f[c] };
                            try {
                                if ("dependency-mismatch" === (e = a.validator.methods[c].call(this, h, b, d.parameters))) {
                                    g = !0;
                                    continue;
                                }
                                if (((g = !1), "pending" === e)) return void (this.toHide = this.toHide.not(this.errorsFor(b)));
                                if (!e) return this.formatAndAdd(b, d), !1;
                            } catch (a) {
                                throw (this.settings.debug && window.console && console.log("Exception occurred when checking element " + b.id + ", check the '" + d.method + "' method.", a), a);
                            }
                        }
                        if (!g) return this.objectLength(f) && this.successList.push(b), !0;
                    },
                    customDataMessage: function (b, c) {
                        return a(b).data("msg-" + c.toLowerCase()) || (b.attributes && a(b).attr("data-msg-" + c.toLowerCase()));
                    },
                    customMessage: function (a, b) {
                        var c = this.settings.messages[a];
                        return c && (c.constructor === String ? c : c[b]);
                    },
                    findDefined: function () {
                        for (var a = 0; arguments.length > a; a++) if (void 0 !== arguments[a]) return arguments[a];
                    },
                    defaultMessage: function (b, c) {
                        return this.findDefined(
                            this.customMessage(b.name, c),
                            this.customDataMessage(b, c),
                            (!this.settings.ignoreTitle && b.title) || void 0,
                            a.validator.messages[c],
                            "<strong>Warning: No message defined for " + b.name + "</strong>"
                        );
                    },
                    formatAndAdd: function (b, c) {
                        var d = this.defaultMessage(b, c.method),
                            e = /\$?\{(\d+)\}/g;
                        "function" == typeof d ? (d = d.call(this, c.parameters, b)) : e.test(d) && (d = a.validator.format(d.replace(e, "{$1}"), c.parameters)),
                            this.errorList.push({ message: d, element: b }),
                            (this.errorMap[b.name] = d),
                            (this.submitted[b.name] = d);
                    },
                    addWrapper: function (a) {
                        return this.settings.wrapper && (a = a.add(a.parent(this.settings.wrapper))), a;
                    },
                    defaultShowErrors: function () {
                        for (var a, b, c = 0; this.errorList[c]; c++)
                            (b = this.errorList[c]), this.settings.highlight && this.settings.highlight.call(this, b.element, this.settings.errorClass, this.settings.validClass), this.showLabel(b.element, b.message);
                        if ((this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success)) for (c = 0; this.successList[c]; c++) this.showLabel(this.successList[c]);
                        if (this.settings.unhighlight) for (c = 0, a = this.validElements(); a[c]; c++) this.settings.unhighlight.call(this, a[c], this.settings.errorClass, this.settings.validClass);
                        (this.toHide = this.toHide.not(this.toShow)), this.hideErrors(), this.addWrapper(this.toShow).show();
                    },
                    validElements: function () {
                        return this.currentElements.not(this.invalidElements());
                    },
                    invalidElements: function () {
                        return a(this.errorList).map(function () {
                            return this.element;
                        });
                    },
                    showLabel: function (b, c) {
                        var d = this.errorsFor(b);
                        d.length
                            ? (d.removeClass(this.settings.validClass).addClass(this.settings.errorClass), d.html(c))
                            : ((d = a("<" + this.settings.errorElement + ">")
                                  .attr("for", this.idOrName(b))
                                  .addClass(this.settings.errorClass)
                                  .html(c || "")),
                              this.settings.wrapper &&
                                  (d = d
                                      .hide()
                                      .show()
                                      .wrap("<" + this.settings.wrapper + "/>")
                                      .parent()),
                              this.labelContainer.append(d).length || (this.settings.errorPlacement ? this.settings.errorPlacement(d, a(b)) : d.insertAfter(b))),
                            !c && this.settings.success && (d.text(""), "string" == typeof this.settings.success ? d.addClass(this.settings.success) : this.settings.success(d, b)),
                            (this.toShow = this.toShow.add(d));
                    },
                    errorsFor: function (b) {
                        var c = this.idOrName(b);
                        return this.errors().filter(function () {
                            return a(this).attr("for") === c;
                        });
                    },
                    idOrName: function (a) {
                        return this.groups[a.name] || (this.checkable(a) ? a.name : a.id || a.name);
                    },
                    validationTargetFor: function (a) {
                        return this.checkable(a) && (a = this.findByName(a.name).not(this.settings.ignore)[0]), a;
                    },
                    checkable: function (a) {
                        return /radio|checkbox/i.test(a.type);
                    },
                    findByName: function (b) {
                        return a(this.currentForm).find("[name='" + b + "']");
                    },
                    getLength: function (b, c) {
                        switch (c.nodeName.toLowerCase()) {
                            case "select":
                                return a("option:selected", c).length;
                            case "input":
                                if (this.checkable(c)) return this.findByName(c.name).filter(":checked").length;
                        }
                        return b.length;
                    },
                    depend: function (a, b) {
                        return !this.dependTypes[typeof a] || this.dependTypes[typeof a](a, b);
                    },
                    dependTypes: {
                        boolean: function (a) {
                            return a;
                        },
                        string: function (b, c) {
                            return !!a(b, c.form).length;
                        },
                        function: function (a, b) {
                            return a(b);
                        },
                    },
                    optional: function (b) {
                        var c = this.elementValue(b);
                        return !a.validator.methods.required.call(this, c, b) && "dependency-mismatch";
                    },
                    startRequest: function (a) {
                        this.pending[a.name] || (this.pendingRequest++, (this.pending[a.name] = !0));
                    },
                    stopRequest: function (b, c) {
                        this.pendingRequest--,
                            0 > this.pendingRequest && (this.pendingRequest = 0),
                            delete this.pending[b.name],
                            c && 0 === this.pendingRequest && this.formSubmitted && this.form()
                                ? (a(this.currentForm).submit(), (this.formSubmitted = !1))
                                : !c && 0 === this.pendingRequest && this.formSubmitted && (a(this.currentForm).triggerHandler("invalid-form", [this]), (this.formSubmitted = !1));
                    },
                    previousValue: function (b) {
                        return a.data(b, "previousValue") || a.data(b, "previousValue", { old: null, valid: !0, message: this.defaultMessage(b, "remote") });
                    },
                },
                classRuleSettings: { required: { required: !0 }, email: { email: !0 }, url: { url: !0 }, date: { date: !0 }, dateISO: { dateISO: !0 }, number: { number: !0 }, digits: { digits: !0 }, creditcard: { creditcard: !0 } },
                addClassRules: function (b, c) {
                    b.constructor === String ? (this.classRuleSettings[b] = c) : a.extend(this.classRuleSettings, b);
                },
                classRules: function (b) {
                    var c = {},
                        d = a(b).attr("class");
                    return (
                        d &&
                            a.each(d.split(" "), function () {
                                this in a.validator.classRuleSettings && a.extend(c, a.validator.classRuleSettings[this]);
                            }),
                        c
                    );
                },
                attributeRules: function (b) {
                    var f,
                        g,
                        c = {},
                        d = a(b),
                        e = d[0].getAttribute("type");
                    for (f in a.validator.methods)
                        "required" === f ? ((g = d.get(0).getAttribute(f)), "" === g && (g = !0), (g = !!g)) : (g = d.attr(f)),
                            /min|max/.test(f) && (null === e || /number|range|text/.test(e)) && (g = Number(g)),
                            g ? (c[f] = g) : e === f && "range" !== e && (c[f] = !0);
                    return c.maxlength && /-1|2147483647|524288/.test(c.maxlength) && delete c.maxlength, c;
                },
                dataRules: function (b) {
                    var c,
                        d,
                        e = {},
                        f = a(b);
                    for (c in a.validator.methods) void 0 !== (d = f.data("rule-" + c.toLowerCase())) && (e[c] = d);
                    return e;
                },
                staticRules: function (b) {
                    var c = {},
                        d = a.data(b.form, "validator");
                    return d.settings.rules && (c = a.validator.normalizeRule(d.settings.rules[b.name]) || {}), c;
                },
                normalizeRules: function (b, c) {
                    return (
                        a.each(b, function (d, e) {
                            if (!1 === e) return void delete b[d];
                            if (e.param || e.depends) {
                                var f = !0;
                                switch (typeof e.depends) {
                                    case "string":
                                        f = !!a(e.depends, c.form).length;
                                        break;
                                    case "function":
                                        f = e.depends.call(c, c);
                                }
                                f ? (b[d] = void 0 === e.param || e.param) : delete b[d];
                            }
                        }),
                        a.each(b, function (d, e) {
                            b[d] = a.isFunction(e) ? e(c) : e;
                        }),
                        a.each(["minlength", "maxlength"], function () {
                            b[this] && (b[this] = Number(b[this]));
                        }),
                        a.each(["rangelength", "range"], function () {
                            var c;
                            b[this] && (a.isArray(b[this]) ? (b[this] = [Number(b[this][0]), Number(b[this][1])]) : "string" == typeof b[this] && ((c = b[this].split(/[\s,]+/)), (b[this] = [Number(c[0]), Number(c[1])])));
                        }),
                        a.validator.autoCreateRanges &&
                            (b.min && b.max && ((b.range = [b.min, b.max]), delete b.min, delete b.max), b.minlength && b.maxlength && ((b.rangelength = [b.minlength, b.maxlength]), delete b.minlength, delete b.maxlength)),
                        b
                    );
                },
                normalizeRule: function (b) {
                    if ("string" == typeof b) {
                        var c = {};
                        a.each(b.split(/\s/), function () {
                            c[this] = !0;
                        }),
                            (b = c);
                    }
                    return b;
                },
                addMethod: function (b, c, d) {
                    (a.validator.methods[b] = c), (a.validator.messages[b] = void 0 !== d ? d : a.validator.messages[b]), 3 > c.length && a.validator.addClassRules(b, a.validator.normalizeRule(b));
                },
                methods: {
                    required: function (b, c, d) {
                        if (!this.depend(d, c)) return "dependency-mismatch";
                        if ("select" === c.nodeName.toLowerCase()) {
                            var e = a(c).val();
                            return e && e.length > 0;
                        }
                        return this.checkable(c) ? this.getLength(b, c) > 0 : a.trim(b).length > 0;
                    },
                    email: function (a, b) {
                        return (
                            this.optional(b) ||
                            /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(
                                a
                            )
                        );
                    },
                    url: function (a, b) {
                        return (
                            this.optional(b) ||
                            /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(
                                a
                            )
                        );
                    },
                    date: function (a, b) {
                        return this.optional(b) || !/Invalid|NaN/.test("" + new Date(a));
                    },
                    dateISO: function (a, b) {
                        return this.optional(b) || /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(a);
                    },
                    number: function (a, b) {
                        return this.optional(b) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(a);
                    },
                    digits: function (a, b) {
                        return this.optional(b) || /^\d+$/.test(a);
                    },
                    creditcard: function (a, b) {
                        var c, d;
                        if (this.optional(b)) return "dependency-mismatch";
                        if (/[^0-9 \-]+/.test(a)) return !1;
                        var e = 0,
                            f = 0,
                            g = !1;
                        for (a = a.replace(/\D/g, ""), c = a.length - 1; c >= 0; c--) (d = a.charAt(c)), (f = parseInt(d, 10)), g && (f *= 2) > 9 && (f -= 9), (e += f), (g = !g);
                        return 0 == e % 10;
                    },
                    minlength: function (b, c, d) {
                        var e = a.isArray(b) ? b.length : this.getLength(a.trim(b), c);
                        return this.optional(c) || e >= d;
                    },
                    maxlength: function (b, c, d) {
                        var e = a.isArray(b) ? b.length : this.getLength(a.trim(b), c);
                        return this.optional(c) || d >= e;
                    },
                    rangelength: function (b, c, d) {
                        var e = a.isArray(b) ? b.length : this.getLength(a.trim(b), c);
                        return this.optional(c) || (e >= d[0] && d[1] >= e);
                    },
                    min: function (a, b, c) {
                        return this.optional(b) || a >= c;
                    },
                    max: function (a, b, c) {
                        return this.optional(b) || c >= a;
                    },
                    range: function (a, b, c) {
                        return this.optional(b) || (a >= c[0] && c[1] >= a);
                    },
                    equalTo: function (b, c, d) {
                        var e = a(d);
                        return (
                            this.settings.onfocusout &&
                                e.unbind(".validate-equalTo").bind("blur.validate-equalTo", function () {
                                    a(c).valid();
                                }),
                            b === e.val()
                        );
                    },
                    remote: function (b, c, d) {
                        var e, f, g;
                        return this.optional(c)
                            ? "dependency-mismatch"
                            : ((e = this.previousValue(c)),
                              this.settings.messages[c.name] || (this.settings.messages[c.name] = {}),
                              (e.originalMessage = this.settings.messages[c.name].remote),
                              (this.settings.messages[c.name].remote = e.message),
                              (d = ("string" == typeof d && { url: d }) || d),
                              e.old === b
                                  ? e.valid
                                  : ((e.old = b),
                                    (f = this),
                                    this.startRequest(c),
                                    (g = {}),
                                    (g[c.name] = b),
                                    a.ajax(
                                        a.extend(
                                            !0,
                                            {
                                                url: d,
                                                mode: "abort",
                                                port: "validate" + c.name,
                                                dataType: "json",
                                                data: g,
                                                success: function (d) {
                                                    var g, h, i, j;
                                                    (f.settings.messages[c.name].remote = e.originalMessage),
                                                        (g = !0 === d || "true" === d),
                                                        g
                                                            ? ((h = f.formSubmitted), f.prepareElement(c), (f.formSubmitted = h), f.successList.push(c), delete f.invalid[c.name], f.showErrors())
                                                            : ((i = {}), (j = d || f.defaultMessage(c, "remote")), (i[c.name] = e.message = a.isFunction(j) ? j(b) : j), (f.invalid[c.name] = !0), f.showErrors(i)),
                                                        (e.valid = g),
                                                        f.stopRequest(c, g);
                                                },
                                            },
                                            d
                                        )
                                    ),
                                    "pending"));
                    },
                },
            }),
            (a.format = a.validator.format);
    })(jQuery),
    (function (a) {
        var c,
            b = {};
        a.ajaxPrefilter
            ? a.ajaxPrefilter(function (a, c, d) {
                  var e = a.port;
                  "abort" === a.mode && (b[e] && b[e].abort(), (b[e] = d));
              })
            : ((c = a.ajax),
              (a.ajax = function (d) {
                  var e = ("mode" in d ? d : a.ajaxSettings).mode,
                      f = ("port" in d ? d : a.ajaxSettings).port;
                  return "abort" === e ? (b[f] && b[f].abort(), (b[f] = c.apply(this, arguments)), b[f]) : c.apply(this, arguments);
              }));
    })(jQuery),
    (function (a) {
        a.extend(a.fn, {
            validateDelegate: function (b, c, d) {
                return this.bind(c, function (c) {
                    var e = a(c.target);
                    if (e.is(b)) return d.apply(e, arguments);
                });
            },
        });
    })(jQuery),
    (function (a, b, c, d) {
        "use strict";
        var e = c("html"),
            f = c(a),
            g = c(b),
            h = (c.fancybox = function () {
                h.open.apply(this, arguments);
            }),
            i = navigator.userAgent.match(/msie/i),
            j = null,
            k = b.createTouch !== d,
            l = function (a) {
                return a && a.hasOwnProperty && a instanceof c;
            },
            m = function (a) {
                return a && "string" === c.type(a);
            },
            n = function (a) {
                return m(a) && a.indexOf("%") > 0;
            },
            o = function (a) {
                return a && !(a.style.overflow && "hidden" === a.style.overflow) && ((a.clientWidth && a.scrollWidth > a.clientWidth) || (a.clientHeight && a.scrollHeight > a.clientHeight));
            },
            p = function (a, b) {
                var c = parseInt(a, 10) || 0;
                return b && n(a) && (c = (h.getViewport()[b] / 100) * c), Math.ceil(c);
            },
            q = function (a, b) {
                return p(a, b) + "px";
            };
        c.extend(h, {
            version: "2.1.5",
            defaults: {
                padding: 15,
                margin: 20,
                width: 800,
                height: 600,
                minWidth: 100,
                minHeight: 100,
                maxWidth: 9999,
                maxHeight: 9999,
                pixelRatio: 1,
                autoSize: !0,
                autoHeight: !1,
                autoWidth: !1,
                autoResize: !0,
                autoCenter: !k,
                fitToView: !0,
                aspectRatio: !1,
                topRatio: 0.5,
                leftRatio: 0.5,
                scrolling: "auto",
                wrapCSS: "",
                arrows: !0,
                closeBtn: !0,
                closeClick: !1,
                nextClick: !1,
                mouseWheel: !0,
                autoPlay: !1,
                playSpeed: 3e3,
                preload: 3,
                modal: !1,
                loop: !0,
                ajax: { dataType: "html", headers: { "X-fancyBox": !0 } },
                iframe: { scrolling: "auto", preload: !0 },
                swf: { wmode: "transparent", allowfullscreen: "true", allowscriptaccess: "always" },
                keys: { next: { 13: "left", 34: "up", 39: "left", 40: "up" }, prev: { 8: "right", 33: "down", 37: "right", 38: "down" }, close: [27], play: [32], toggle: [70] },
                direction: { next: "left", prev: "right" },
                scrollOutside: !0,
                index: 0,
                type: null,
                href: null,
                content: null,
                title: null,
                tpl: {
                    wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
                    image: '<img class="fancybox-image" src="{href}" alt="" />',
                    iframe:
                        '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' +
                        (i ? ' allowtransparency="true"' : "") +
                        "></iframe>",
                    error: '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
                    closeBtn: '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
                    next: '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
                    prev: '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>',
                },
                openEffect: "fade",
                openSpeed: 250,
                openEasing: "swing",
                openOpacity: !0,
                openMethod: "zoomIn",
                closeEffect: "fade",
                closeSpeed: 250,
                closeEasing: "swing",
                closeOpacity: !0,
                closeMethod: "zoomOut",
                nextEffect: "elastic",
                nextSpeed: 250,
                nextEasing: "swing",
                nextMethod: "changeIn",
                prevEffect: "elastic",
                prevSpeed: 250,
                prevEasing: "swing",
                prevMethod: "changeOut",
                helpers: { overlay: !0, title: !0 },
                onCancel: c.noop,
                beforeLoad: c.noop,
                afterLoad: c.noop,
                beforeShow: c.noop,
                afterShow: c.noop,
                beforeChange: c.noop,
                beforeClose: c.noop,
                afterClose: c.noop,
            },
            group: {},
            opts: {},
            previous: null,
            coming: null,
            current: null,
            isActive: !1,
            isOpen: !1,
            isOpened: !1,
            wrap: null,
            skin: null,
            outer: null,
            inner: null,
            player: { timer: null, isActive: !1 },
            ajaxLoad: null,
            imgPreload: null,
            transitions: {},
            helpers: {},
            open: function (a, b) {
                if (a)
                    return (
                        c.isPlainObject(b) || (b = {}),
                        !1 === h.close(!0)
                            ? void 0
                            : (c.isArray(a) || (a = l(a) ? c(a).get() : [a]),
                              c.each(a, function (e, f) {
                                  var i,
                                      j,
                                      k,
                                      n,
                                      o,
                                      p,
                                      q,
                                      g = {};
                                  "object" === c.type(f) &&
                                      (f.nodeType && (f = c(f)),
                                      l(f) ? ((g = { href: f.data("fancybox-href") || f.attr("href"), title: f.data("fancybox-title") || f.attr("title"), isDom: !0, element: f }), c.metadata && c.extend(!0, g, f.metadata())) : (g = f)),
                                      (i = b.href || g.href || (m(f) ? f : null)),
                                      (j = b.title !== d ? b.title : g.title || ""),
                                      (k = b.content || g.content),
                                      (n = k ? "html" : b.type || g.type),
                                      !n && g.isDom && ((n = f.data("fancybox-type")) || ((o = f.prop("class").match(/fancybox\.(\w+)/)), (n = o ? o[1] : null))),
                                      m(i) &&
                                          (n || (h.isImage(i) ? (n = "image") : h.isSWF(i) ? (n = "swf") : "#" === i.charAt(0) ? (n = "inline") : m(f) && ((n = "html"), (k = f))),
                                          "ajax" === n && ((p = i.split(/\s+/, 2)), (i = p.shift()), (q = p.shift()))),
                                      k || ("inline" === n ? (i ? (k = c(m(i) ? i.replace(/.*(?=#[^\s]+$)/, "") : i)) : g.isDom && (k = f)) : "html" === n ? (k = i) : n || i || !g.isDom || ((n = "inline"), (k = f))),
                                      c.extend(g, { href: i, type: n, content: k, title: j, selector: q }),
                                      (a[e] = g);
                              }),
                              (h.opts = c.extend(!0, {}, h.defaults, b)),
                              b.keys !== d && (h.opts.keys = !!b.keys && c.extend({}, h.defaults.keys, b.keys)),
                              (h.group = a),
                              h._start(h.opts.index))
                    );
            },
            cancel: function () {
                var a = h.coming;
                a &&
                    !1 !== h.trigger("onCancel") &&
                    (h.hideLoading(),
                    h.ajaxLoad && h.ajaxLoad.abort(),
                    (h.ajaxLoad = null),
                    h.imgPreload && (h.imgPreload.onload = h.imgPreload.onerror = null),
                    a.wrap && a.wrap.stop(!0, !0).trigger("onReset").remove(),
                    (h.coming = null),
                    h.current || h._afterZoomOut(a));
            },
            close: function (a) {
                h.cancel(),
                    !1 !== h.trigger("beforeClose") &&
                        (h.unbindEvents(), h.isActive) &&
                        (h.isOpen && !0 !== a
                            ? ((h.isOpen = h.isOpened = !1), (h.isClosing = !0), c(".fancybox-item, .fancybox-nav").remove(), h.wrap.stop(!0, !0).removeClass("fancybox-opened"), h.transitions[h.current.closeMethod]())
                            : (c(".fancybox-wrap").stop(!0).trigger("onReset").remove(), h._afterZoomOut()));
            },
            play: function (a) {
                var b = function () {
                        clearTimeout(h.player.timer);
                    },
                    c = function () {
                        b(), h.current && h.player.isActive && (h.player.timer = setTimeout(h.next, h.current.playSpeed));
                    },
                    d = function () {
                        b(), g.unbind(".player"), (h.player.isActive = !1), h.trigger("onPlayEnd");
                    },
                    e = function () {
                        h.current &&
                            (h.current.loop || h.current.index < h.group.length - 1) &&
                            ((h.player.isActive = !0), g.bind({ "onCancel.player beforeClose.player": d, "onUpdate.player": c, "beforeLoad.player": b }), c(), h.trigger("onPlayStart"));
                    };
                !0 === a || (!h.player.isActive && !1 !== a) ? e() : d();
            },
            next: function (a) {
                var b = h.current;
                b && (m(a) || (a = b.direction.next), h.jumpto(b.index + 1, a, "next"));
            },
            prev: function (a) {
                var b = h.current;
                b && (m(a) || (a = b.direction.prev), h.jumpto(b.index - 1, a, "prev"));
            },
            jumpto: function (a, b, c) {
                var e = h.current;
                e &&
                    ((a = p(a)),
                    (h.direction = b || e.direction[a >= e.index ? "next" : "prev"]),
                    (h.router = c || "jumpto"),
                    e.loop && (a < 0 && (a = e.group.length + (a % e.group.length)), (a %= e.group.length)),
                    e.group[a] !== d && (h.cancel(), h._start(a)));
            },
            reposition: function (a, b) {
                var f,
                    d = h.current,
                    e = d ? d.wrap : null;
                e && ((f = h._getPosition(b)), a && "scroll" === a.type ? (delete f.position, e.stop(!0, !0).animate(f, 200)) : (e.css(f), (d.pos = c.extend({}, d.dim, f))));
            },
            update: function (a) {
                var b = a && a.type,
                    c = !b || "orientationchange" === b;
                c && (clearTimeout(j), (j = null)),
                    h.isOpen &&
                        !j &&
                        (j = setTimeout(
                            function () {
                                var d = h.current;
                                d &&
                                    !h.isClosing &&
                                    (h.wrap.removeClass("fancybox-tmp"), (c || "load" === b || ("resize" === b && d.autoResize)) && h._setDimension(), ("scroll" === b && d.canShrink) || h.reposition(a), h.trigger("onUpdate"), (j = null));
                            },
                            c && !k ? 0 : 300
                        ));
            },
            toggle: function (a) {
                h.isOpen && ((h.current.fitToView = "boolean" === c.type(a) ? a : !h.current.fitToView), k && (h.wrap.removeAttr("style").addClass("fancybox-tmp"), h.trigger("onUpdate")), h.update());
            },
            hideLoading: function () {
                g.unbind(".loading"), c("#fancybox-loading").remove();
            },
            showLoading: function () {
                var a, b;
                h.hideLoading(),
                    (a = c('<div id="fancybox-loading"><div></div></div>').click(h.cancel).appendTo("body")),
                    g.bind("keydown.loading", function (a) {
                        27 === (a.which || a.keyCode) && (a.preventDefault(), h.cancel());
                    }),
                    h.defaults.fixed || ((b = h.getViewport()), a.css({ position: "absolute", top: 0.5 * b.h + b.y, left: 0.5 * b.w + b.x }));
            },
            getViewport: function () {
                var b = (h.current && h.current.locked) || !1,
                    c = { x: f.scrollLeft(), y: f.scrollTop() };
                return b ? ((c.w = b[0].clientWidth), (c.h = b[0].clientHeight)) : ((c.w = k && a.innerWidth ? a.innerWidth : f.width()), (c.h = k && a.innerHeight ? a.innerHeight : f.height())), c;
            },
            unbindEvents: function () {
                h.wrap && l(h.wrap) && h.wrap.unbind(".fb"), g.unbind(".fb"), f.unbind(".fb");
            },
            bindEvents: function () {
                var b,
                    a = h.current;
                a &&
                    (f.bind("orientationchange.fb" + (k ? "" : " resize.fb") + (a.autoCenter && !a.locked ? " scroll.fb" : ""), h.update),
                    (b = a.keys),
                    b &&
                        g.bind("keydown.fb", function (e) {
                            var f = e.which || e.keyCode,
                                g = e.target || e.srcElement;
                            if (27 === f && h.coming) return !1;
                            e.ctrlKey ||
                                e.altKey ||
                                e.shiftKey ||
                                e.metaKey ||
                                (g && (g.type || c(g).is("[contenteditable]"))) ||
                                c.each(b, function (b, g) {
                                    return a.group.length > 1 && g[f] !== d ? (h[b](g[f]), e.preventDefault(), !1) : c.inArray(f, g) > -1 ? (h[b](), e.preventDefault(), !1) : void 0;
                                });
                        }),
                    c.fn.mousewheel &&
                        a.mouseWheel &&
                        h.wrap.bind("mousewheel.fb", function (b, d, e, f) {
                            for (var g = b.target || null, i = c(g), j = !1; i.length && !(j || i.is(".fancybox-skin") || i.is(".fancybox-wrap")); ) (j = o(i[0])), (i = c(i).parent());
                            0 === d || j || (h.group.length > 1 && !a.canShrink && (f > 0 || e > 0 ? h.prev(f > 0 ? "down" : "left") : (f < 0 || e < 0) && h.next(f < 0 ? "up" : "right"), b.preventDefault()));
                        }));
            },
            trigger: function (a, b) {
                var d,
                    e = b || h.coming || h.current;
                if (e) {
                    if ((c.isFunction(e[a]) && (d = e[a].apply(e, Array.prototype.slice.call(arguments, 1))), !1 === d)) return !1;
                    e.helpers &&
                        c.each(e.helpers, function (b, d) {
                            d && h.helpers[b] && c.isFunction(h.helpers[b][a]) && h.helpers[b][a](c.extend(!0, {}, h.helpers[b].defaults, d), e);
                        }),
                        g.trigger(a);
                }
            },
            isImage: function (a) {
                return m(a) && a.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i);
            },
            isSWF: function (a) {
                return m(a) && a.match(/\.(swf)((\?|#).*)?$/i);
            },
            _start: function (a) {
                var d,
                    e,
                    f,
                    g,
                    i,
                    b = {};
                if (((a = p(a)), !(d = h.group[a] || null))) return !1;
                if (
                    ((b = c.extend(!0, {}, h.opts, d)),
                    (g = b.margin),
                    (i = b.padding),
                    "number" === c.type(g) && (b.margin = [g, g, g, g]),
                    "number" === c.type(i) && (b.padding = [i, i, i, i]),
                    b.modal && c.extend(!0, b, { closeBtn: !1, closeClick: !1, nextClick: !1, arrows: !1, mouseWheel: !1, keys: null, helpers: { overlay: { closeClick: !1 } } }),
                    b.autoSize && (b.autoWidth = b.autoHeight = !0),
                    "auto" === b.width && (b.autoWidth = !0),
                    "auto" === b.height && (b.autoHeight = !0),
                    (b.group = h.group),
                    (b.index = a),
                    (h.coming = b),
                    !1 === h.trigger("beforeLoad"))
                )
                    return void (h.coming = null);
                if (((f = b.type), (e = b.href), !f)) return (h.coming = null), !(!h.current || !h.router || "jumpto" === h.router) && ((h.current.index = a), h[h.router](h.direction));
                if (
                    ((h.isActive = !0),
                    ("image" === f || "swf" === f) && ((b.autoHeight = b.autoWidth = !1), (b.scrolling = "visible")),
                    "image" === f && (b.aspectRatio = !0),
                    "iframe" === f && k && (b.scrolling = "scroll"),
                    (b.wrap = c(b.tpl.wrap)
                        .addClass("fancybox-" + (k ? "mobile" : "desktop") + " fancybox-type-" + f + " fancybox-tmp " + b.wrapCSS)
                        .appendTo(b.parent || "body")),
                    c.extend(b, { skin: c(".fancybox-skin", b.wrap), outer: c(".fancybox-outer", b.wrap), inner: c(".fancybox-inner", b.wrap) }),
                    c.each(["Top", "Right", "Bottom", "Left"], function (a, c) {
                        b.skin.css("padding" + c, q(b.padding[a]));
                    }),
                    h.trigger("onReady"),
                    "inline" === f || "html" === f)
                ) {
                    if (!b.content || !b.content.length) return h._error("content");
                } else if (!e) return h._error("href");
                "image" === f ? h._loadImage() : "ajax" === f ? h._loadAjax() : "iframe" === f ? h._loadIframe() : h._afterLoad();
            },
            _error: function (a) {
                c.extend(h.coming, { type: "html", autoWidth: !0, autoHeight: !0, minWidth: 0, minHeight: 0, scrolling: "no", hasError: a, content: h.coming.tpl.error }), h._afterLoad();
            },
            _loadImage: function () {
                var a = (h.imgPreload = new Image());
                (a.onload = function () {
                    (this.onload = this.onerror = null), (h.coming.width = this.width / h.opts.pixelRatio), (h.coming.height = this.height / h.opts.pixelRatio), h._afterLoad();
                }),
                    (a.onerror = function () {
                        (this.onload = this.onerror = null), h._error("image");
                    }),
                    (a.src = h.coming.href),
                    !0 !== a.complete && h.showLoading();
            },
            _loadAjax: function () {
                var a = h.coming;
                h.showLoading(),
                    (h.ajaxLoad = c.ajax(
                        c.extend({}, a.ajax, {
                            url: a.href,
                            error: function (a, b) {
                                h.coming && "abort" !== b ? h._error("ajax", a) : h.hideLoading();
                            },
                            success: function (b, c) {
                                "success" === c && ((a.content = b), h._afterLoad());
                            },
                        })
                    ));
            },
            _loadIframe: function () {
                var a = h.coming,
                    b = c(a.tpl.iframe.replace(/\{rnd\}/g, new Date().getTime()))
                        .attr("scrolling", k ? "auto" : a.iframe.scrolling)
                        .attr("src", a.href);
                c(a.wrap).bind("onReset", function () {
                    try {
                        c(this).find("iframe").hide().attr("src", "//about:blank").end().empty();
                    } catch (a) {}
                }),
                    a.iframe.preload &&
                        (h.showLoading(),
                        b.one("load", function () {
                            c(this).data("ready", 1), k || c(this).bind("load.fb", h.update), c(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show(), h._afterLoad();
                        })),
                    (a.content = b.appendTo(a.inner)),
                    a.iframe.preload || h._afterLoad();
            },
            _preloadImages: function () {
                for (var e, a = h.group, b = h.current, c = a.length, d = b.preload ? Math.min(b.preload, c - 1) : 0, f = 1; f <= d; f += 1) (e = a[(b.index + f) % c]), "image" === e.type && e.href && (new Image().src = e.href);
            },
            _afterLoad: function () {
                var e,
                    f,
                    g,
                    i,
                    j,
                    k,
                    a = h.coming,
                    b = h.current,
                    d = "fancybox-placeholder";
                if ((h.hideLoading(), a && !1 !== h.isActive)) {
                    if (!1 === h.trigger("afterLoad", a, b)) return a.wrap.stop(!0).trigger("onReset").remove(), void (h.coming = null);
                    switch (
                        (b && (h.trigger("beforeChange", b), b.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove()),
                        h.unbindEvents(),
                        (e = a),
                        (f = a.content),
                        (g = a.type),
                        (i = a.scrolling),
                        c.extend(h, { wrap: e.wrap, skin: e.skin, outer: e.outer, inner: e.inner, current: e, previous: b }),
                        (j = e.href),
                        g)
                    ) {
                        case "inline":
                        case "ajax":
                        case "html":
                            e.selector
                                ? (f = c("<div>").html(f).find(e.selector))
                                : l(f) &&
                                  (f.data(d) ||
                                      f.data(
                                          d,
                                          c('<div class="' + d + '"></div>')
                                              .insertAfter(f)
                                              .hide()
                                      ),
                                  (f = f.show().detach()),
                                  e.wrap.bind("onReset", function () {
                                      c(this).find(f).length && f.hide().replaceAll(f.data(d)).data(d, !1);
                                  }));
                            break;
                        case "image":
                            f = e.tpl.image.replace("{href}", j);
                            break;
                        case "swf":
                            (f = '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' + j + '"></param>'),
                                (k = ""),
                                c.each(e.swf, function (a, b) {
                                    (f += '<param name="' + a + '" value="' + b + '"></param>'), (k += " " + a + '="' + b + '"');
                                }),
                                (f += '<embed src="' + j + '" type="application/x-shockwave-flash" width="100%" height="100%"' + k + "></embed></object>");
                    }
                    (l(f) && f.parent().is(e.inner)) || e.inner.append(f),
                        h.trigger("beforeShow"),
                        e.inner.css("overflow", "yes" === i ? "scroll" : "no" === i ? "hidden" : i),
                        h._setDimension(),
                        h.reposition(),
                        (h.isOpen = !1),
                        (h.coming = null),
                        h.bindEvents(),
                        h.isOpened ? b.prevMethod && h.transitions[b.prevMethod]() : c(".fancybox-wrap").not(e.wrap).stop(!0).trigger("onReset").remove(),
                        h.transitions[h.isOpened ? e.nextMethod : e.openMethod](),
                        h._preloadImages();
                }
            },
            _setDimension: function () {
                var y,
                    z,
                    A,
                    B,
                    C,
                    D,
                    E,
                    F,
                    G,
                    H,
                    I,
                    J,
                    K,
                    L,
                    M,
                    a = h.getViewport(),
                    b = 0,
                    d = !1,
                    e = !1,
                    f = h.wrap,
                    g = h.skin,
                    i = h.inner,
                    j = h.current,
                    k = j.width,
                    l = j.height,
                    m = j.minWidth,
                    o = j.minHeight,
                    r = j.maxWidth,
                    s = j.maxHeight,
                    t = j.scrolling,
                    u = j.scrollOutside ? j.scrollbarWidth : 0,
                    v = j.margin,
                    w = p(v[1] + v[3]),
                    x = p(v[0] + v[2]);
                if (
                    (f.add(g).add(i).width("auto").height("auto").removeClass("fancybox-tmp"),
                    (y = p(g.outerWidth(!0) - g.width())),
                    (z = p(g.outerHeight(!0) - g.height())),
                    (A = w + y),
                    (B = x + z),
                    (C = n(k) ? ((a.w - A) * p(k)) / 100 : k),
                    (D = n(l) ? ((a.h - B) * p(l)) / 100 : l),
                    "iframe" === j.type)
                ) {
                    if (((L = j.content), j.autoHeight && 1 === L.data("ready")))
                        try {
                            L[0].contentWindow.document.location && (i.width(C).height(9999), (M = L.contents().find("body")), u && M.css("overflow-x", "hidden"), (D = M.outerHeight(!0)));
                        } catch (a) {}
                } else (j.autoWidth || j.autoHeight) && (i.addClass("fancybox-tmp"), j.autoWidth || i.width(C), j.autoHeight || i.height(D), j.autoWidth && (C = i.width()), j.autoHeight && (D = i.height()), i.removeClass("fancybox-tmp"));
                if (
                    ((k = p(C)),
                    (l = p(D)),
                    (G = C / D),
                    (m = p(n(m) ? p(m, "w") - A : m)),
                    (r = p(n(r) ? p(r, "w") - A : r)),
                    (o = p(n(o) ? p(o, "h") - B : o)),
                    (s = p(n(s) ? p(s, "h") - B : s)),
                    (E = r),
                    (F = s),
                    j.fitToView && ((r = Math.min(a.w - A, r)), (s = Math.min(a.h - B, s))),
                    (J = a.w - w),
                    (K = a.h - x),
                    j.aspectRatio
                        ? (k > r && ((k = r), (l = p(k / G))), l > s && ((l = s), (k = p(l * G))), k < m && ((k = m), (l = p(k / G))), l < o && ((l = o), (k = p(l * G))))
                        : ((k = Math.max(m, Math.min(k, r))), j.autoHeight && "iframe" !== j.type && (i.width(k), (l = i.height())), (l = Math.max(o, Math.min(l, s)))),
                    j.fitToView)
                )
                    if ((i.width(k).height(l), f.width(k + y), (H = f.width()), (I = f.height()), j.aspectRatio))
                        for (; (H > J || I > K) && k > m && l > o && !(b++ > 19); )
                            (l = Math.max(o, Math.min(s, l - 10))), (k = p(l * G)), k < m && ((k = m), (l = p(k / G))), k > r && ((k = r), (l = p(k / G))), i.width(k).height(l), f.width(k + y), (H = f.width()), (I = f.height());
                    else (k = Math.max(m, Math.min(k, k - (H - J)))), (l = Math.max(o, Math.min(l, l - (I - K))));
                u && "auto" === t && l < D && k + y + u < J && (k += u),
                    i.width(k).height(l),
                    f.width(k + y),
                    (H = f.width()),
                    (I = f.height()),
                    (d = (H > J || I > K) && k > m && l > o),
                    (e = j.aspectRatio ? k < E && l < F && k < C && l < D : (k < E || l < F) && (k < C || l < D)),
                    c.extend(j, { dim: { width: q(H), height: q(I) }, origWidth: C, origHeight: D, canShrink: d, canExpand: e, wPadding: y, hPadding: z, wrapSpace: I - g.outerHeight(!0), skinSpace: g.height() - l }),
                    !L && j.autoHeight && l > o && l < s && !e && i.height("auto");
            },
            _getPosition: function (a) {
                var b = h.current,
                    c = h.getViewport(),
                    d = b.margin,
                    e = h.wrap.width() + d[1] + d[3],
                    f = h.wrap.height() + d[0] + d[2],
                    g = { position: "absolute", top: d[0], left: d[3] };
                return (
                    b.autoCenter && b.fixed && !a && f <= c.h && e <= c.w ? (g.position = "fixed") : b.locked || ((g.top += c.y), (g.left += c.x)),
                    (g.top = q(Math.max(g.top, g.top + (c.h - f) * b.topRatio))),
                    (g.left = q(Math.max(g.left, g.left + (c.w - e) * b.leftRatio))),
                    g
                );
            },
            _afterZoomIn: function () {
                var a = h.current;
                a &&
                    ((h.isOpen = h.isOpened = !0),
                    h.wrap.css("overflow", "visible").addClass("fancybox-opened"),
                    h.update(),
                    (a.closeClick || (a.nextClick && h.group.length > 1)) &&
                        h.inner.css("cursor", "pointer").bind("click.fb", function (b) {
                            c(b.target).is("a") || c(b.target).parent().is("a") || (b.preventDefault(), h[a.closeClick ? "close" : "next"]());
                        }),
                    a.closeBtn &&
                        c(a.tpl.closeBtn)
                            .appendTo(h.skin)
                            .bind("click.fb", function (a) {
                                a.preventDefault(), h.close();
                            }),
                    a.arrows &&
                        h.group.length > 1 &&
                        ((a.loop || a.index > 0) && c(a.tpl.prev).appendTo(h.outer).bind("click.fb", h.prev), (a.loop || a.index < h.group.length - 1) && c(a.tpl.next).appendTo(h.outer).bind("click.fb", h.next)),
                    h.trigger("afterShow"),
                    a.loop || a.index !== a.group.length - 1 ? h.opts.autoPlay && !h.player.isActive && ((h.opts.autoPlay = !1), h.play()) : h.play(!1));
            },
            _afterZoomOut: function (a) {
                (a = a || h.current),
                    c(".fancybox-wrap").trigger("onReset").remove(),
                    c.extend(h, { group: {}, opts: {}, router: !1, current: null, isActive: !1, isOpened: !1, isOpen: !1, isClosing: !1, wrap: null, skin: null, outer: null, inner: null }),
                    h.trigger("afterClose", a);
            },
        }),
            (h.transitions = {
                getOrigPosition: function () {
                    var a = h.current,
                        b = a.element,
                        c = a.orig,
                        d = {},
                        e = 50,
                        f = 50,
                        g = a.hPadding,
                        i = a.wPadding,
                        j = h.getViewport();
                    return (
                        !c && a.isDom && b.is(":visible") && ((c = b.find("img:first")), c.length || (c = b)),
                        l(c) ? ((d = c.offset()), c.is("img") && ((e = c.outerWidth()), (f = c.outerHeight()))) : ((d.top = j.y + (j.h - f) * a.topRatio), (d.left = j.x + (j.w - e) * a.leftRatio)),
                        ("fixed" === h.wrap.css("position") || a.locked) && ((d.top -= j.y), (d.left -= j.x)),
                        { top: q(d.top - g * a.topRatio), left: q(d.left - i * a.leftRatio), width: q(e + i), height: q(f + g) }
                    );
                },
                step: function (a, b) {
                    var c,
                        d,
                        e,
                        f = b.prop,
                        g = h.current,
                        i = g.wrapSpace,
                        j = g.skinSpace;
                    ("width" === f || "height" === f) &&
                        ((c = b.end === b.start ? 1 : (a - b.start) / (b.end - b.start)),
                        h.isClosing && (c = 1 - c),
                        (d = "width" === f ? g.wPadding : g.hPadding),
                        (e = a - d),
                        h.skin[f](p("width" === f ? e : e - i * c)),
                        h.inner[f](p("width" === f ? e : e - i * c - j * c)));
                },
                zoomIn: function () {
                    var a = h.current,
                        b = a.pos,
                        d = a.openEffect,
                        e = "elastic" === d,
                        f = c.extend({ opacity: 1 }, b);
                    delete f.position,
                        e ? ((b = this.getOrigPosition()), a.openOpacity && (b.opacity = 0.1)) : "fade" === d && (b.opacity = 0.1),
                        h.wrap.css(b).animate(f, { duration: "none" === d ? 0 : a.openSpeed, easing: a.openEasing, step: e ? this.step : null, complete: h._afterZoomIn });
                },
                zoomOut: function () {
                    var a = h.current,
                        b = a.closeEffect,
                        c = "elastic" === b,
                        d = { opacity: 0.1 };
                    c && ((d = this.getOrigPosition()), a.closeOpacity && (d.opacity = 0.1)), h.wrap.animate(d, { duration: "none" === b ? 0 : a.closeSpeed, easing: a.closeEasing, step: c ? this.step : null, complete: h._afterZoomOut });
                },
                changeIn: function () {
                    var g,
                        a = h.current,
                        b = a.nextEffect,
                        c = a.pos,
                        d = { opacity: 1 },
                        e = h.direction,
                        f = 200;
                    (c.opacity = 0.1),
                        "elastic" === b && ((g = "down" === e || "up" === e ? "top" : "left"), "down" === e || "right" === e ? ((c[g] = q(p(c[g]) - f)), (d[g] = "+=" + f + "px")) : ((c[g] = q(p(c[g]) + f)), (d[g] = "-=" + f + "px"))),
                        "none" === b ? h._afterZoomIn() : h.wrap.css(c).animate(d, { duration: a.nextSpeed, easing: a.nextEasing, complete: h._afterZoomIn });
                },
                changeOut: function () {
                    var a = h.previous,
                        b = a.prevEffect,
                        d = { opacity: 0.1 },
                        e = h.direction;
                    "elastic" === b && (d["down" === e || "up" === e ? "top" : "left"] = ("up" === e || "left" === e ? "-" : "+") + "=200px"),
                        a.wrap.animate(d, {
                            duration: "none" === b ? 0 : a.prevSpeed,
                            easing: a.prevEasing,
                            complete: function () {
                                c(this).trigger("onReset").remove();
                            },
                        });
                },
            }),
            (h.helpers.overlay = {
                defaults: { closeClick: !0, speedOut: 200, showEarly: !0, css: {}, locked: !k, fixed: !0 },
                overlay: null,
                fixed: !1,
                el: c("html"),
                create: function (a) {
                    (a = c.extend({}, this.defaults, a)),
                        this.overlay && this.close(),
                        (this.overlay = c('<div class="fancybox-overlay"></div>').appendTo(h.coming ? h.coming.parent : a.parent)),
                        (this.fixed = !1),
                        a.fixed && h.defaults.fixed && (this.overlay.addClass("fancybox-overlay-fixed"), (this.fixed = !0));
                },
                open: function (a) {
                    var b = this;
                    (a = c.extend({}, this.defaults, a)),
                        this.overlay ? this.overlay.unbind(".overlay").width("auto").height("auto") : this.create(a),
                        this.fixed || (f.bind("resize.overlay", c.proxy(this.update, this)), this.update()),
                        a.closeClick &&
                            this.overlay.bind("click.overlay", function (a) {
                                if (c(a.target).hasClass("fancybox-overlay")) return h.isActive ? h.close() : b.close(), !1;
                            }),
                        this.overlay.css(a.css).show();
                },
                close: function () {
                    var a, b;
                    f.unbind("resize.overlay"),
                        this.el.hasClass("fancybox-lock") && (c(".fancybox-margin").removeClass("fancybox-margin"), (a = f.scrollTop()), (b = f.scrollLeft()), this.el.removeClass("fancybox-lock"), f.scrollTop(a).scrollLeft(b)),
                        c(".fancybox-overlay").remove().hide(),
                        c.extend(this, { overlay: null, fixed: !1 });
                },
                update: function () {
                    var c,
                        a = "100%";
                    this.overlay.width(a).height("100%"),
                        i ? ((c = Math.max(b.documentElement.offsetWidth, b.body.offsetWidth)), g.width() > c && (a = g.width())) : g.width() > f.width() && (a = g.width()),
                        this.overlay.width(a).height(g.height());
                },
                onReady: function (a, b) {
                    var d = this.overlay;
                    c(".fancybox-overlay").stop(!0, !0),
                        d || this.create(a),
                        a.locked && this.fixed && b.fixed && (d || (this.margin = g.height() > f.height() && c("html").css("margin-right").replace("px", "")), (b.locked = this.overlay.append(b.wrap)), (b.fixed = !1)),
                        !0 === a.showEarly && this.beforeShow.apply(this, arguments);
                },
                beforeShow: function (a, b) {
                    var d, e;
                    b.locked &&
                        (!1 !== this.margin &&
                            (c("*")
                                .filter(function () {
                                    return "fixed" === c(this).css("position") && !c(this).hasClass("fancybox-overlay") && !c(this).hasClass("fancybox-wrap");
                                })
                                .addClass("fancybox-margin"),
                            this.el.addClass("fancybox-margin")),
                        (d = f.scrollTop()),
                        (e = f.scrollLeft()),
                        this.el.addClass("fancybox-lock"),
                        f.scrollTop(d).scrollLeft(e)),
                        this.open(a);
                },
                onUpdate: function () {
                    this.fixed || this.update();
                },
                afterClose: function (a) {
                    this.overlay && !h.coming && this.overlay.fadeOut(a.speedOut, c.proxy(this.close, this));
                },
            }),
            (h.helpers.title = {
                defaults: { type: "float", position: "bottom" },
                beforeShow: function (a) {
                    var f,
                        g,
                        b = h.current,
                        d = b.title,
                        e = a.type;
                    if ((c.isFunction(d) && (d = d.call(b.element, b)), m(d) && "" !== c.trim(d))) {
                        switch (((f = c('<div class="fancybox-title fancybox-title-' + e + '-wrap">' + d + "</div>")), e)) {
                            case "inside":
                                g = h.skin;
                                break;
                            case "outside":
                                g = h.wrap;
                                break;
                            case "over":
                                g = h.inner;
                                break;
                            default:
                                (g = h.skin), f.appendTo("body"), i && f.width(f.width()), f.wrapInner('<span class="child"></span>'), (h.current.margin[2] += Math.abs(p(f.css("margin-bottom"))));
                        }
                        f["top" === a.position ? "prependTo" : "appendTo"](g);
                    }
                },
            }),
            (c.fn.fancybox = function (a) {
                var b,
                    d = c(this),
                    e = this.selector || "",
                    f = function (f) {
                        var j,
                            k,
                            g = c(this).blur(),
                            i = b;
                        f.ctrlKey ||
                            f.altKey ||
                            f.shiftKey ||
                            f.metaKey ||
                            g.is(".fancybox-wrap") ||
                            ((j = a.groupAttr || "data-fancybox-group"),
                            (k = g.attr(j)),
                            k || ((j = "rel"), (k = g.get(0)[j])),
                            k && "" !== k && "nofollow" !== k && ((g = e.length ? c(e) : d), (g = g.filter("[" + j + '="' + k + '"]')), (i = g.index(this))),
                            (a.index = i),
                            !1 !== h.open(g, a) && f.preventDefault());
                    };
                return (
                    (a = a || {}),
                    (b = a.index || 0),
                    e && !1 !== a.live ? g.undelegate(e, "click.fb-start").delegate(e + ":not('.fancybox-item, .fancybox-nav')", "click.fb-start", f) : d.unbind("click.fb-start").bind("click.fb-start", f),
                    this.filter("[data-fancybox-start=1]").trigger("click"),
                    this
                );
            }),
            g.ready(function () {
                var b, f;
                c.scrollbarWidth === d &&
                    (c.scrollbarWidth = function () {
                        var a = c('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),
                            b = a.children(),
                            d = b.innerWidth() - b.height(99).innerWidth();
                        return a.remove(), d;
                    }),
                    c.support.fixedPosition === d &&
                        (c.support.fixedPosition = (function () {
                            var a = c('<div style="position:fixed;top:20px;"></div>').appendTo("body"),
                                b = 20 === a[0].offsetTop || 15 === a[0].offsetTop;
                            return a.remove(), b;
                        })()),
                    c.extend(h.defaults, { scrollbarWidth: c.scrollbarWidth(), fixed: c.support.fixedPosition, parent: c("body") }),
                    (b = c(a).width()),
                    e.addClass("fancybox-lock-test"),
                    (f = c(a).width()),
                    e.removeClass("fancybox-lock-test"),
                    c("<style type='text/css'>.fancybox-margin{margin-right:" + (f - b) + "px;}</style>").appendTo("head");
            });
    })(window, document, jQuery),
    (function (a, b) {
        "use strict";
        (a.fn.chained = function (c) {
            return this.each(function () {
                function d() {
                    var h,
                        i,
                        j,
                        d = !0,
                        g = a("option:selected", e).val();
                    a(e).html(f.html()),
                        (h = ""),
                        a(c).each(function () {
                            var c = a("option:selected", this).val();
                            c && (h.length > 0 && (h += b.Zepto ? "\\\\" : "\\"), (h += c));
                        }),
                        (i = a.isArray(c) ? a(c[0]).first() : a(c).first()),
                        (j = a("option:selected", i).val()),
                        a("option", e).each(function () {
                            a(this).hasClass(h) && a(this).val() === g ? (a(this).prop("selected", !0), (d = !1)) : a(this).hasClass(h) || a(this).hasClass(j) || "" === a(this).val() || a(this).remove();
                        }),
                        1 === a("option", e).size() && "" === a(e).val() ? a(e).prop("disabled", !0) : a(e).prop("disabled", !1),
                        d && a(e).trigger("change");
                }
                var e = this,
                    f = a(e).clone();
                a(c).each(function () {
                    a(this).bind("change", function () {
                        d();
                    }),
                        a("option:selected", this).length || a("option", this).first().attr("selected", "selected"),
                        d();
                });
            });
        }),
            (a.fn.chainedTo = a.fn.chained),
            (a.fn.chained.defaults = {});
    })(window.jQuery || window.Zepto, window, document),
    (function (a) {
        "use strict";
        a.fn.fitVids = function (b) {
            var c = { customSelector: null, ignore: null };
            if (!document.getElementById("fit-vids-style")) {
                var d = document.head || document.getElementsByTagName("head")[0],
                    e = document.createElement("div");
                (e.innerHTML =
                    '<p>x</p><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>'),
                    d.appendChild(e.childNodes[1]);
            }
            return (
                b && a.extend(c, b),
                this.each(function () {
                    var d,
                        e,
                        b = [
                            "iframe[src*='player.vimeo.com']",
                            "iframe[src*='youtube.com']",
                            "iframe[src*='youtube-nocookie.com']",
                            "iframe[src*='brightcove.com']",
                            "iframe[src*='kickstarter.com'][src*='video.html']",
                            "iframe[src*='trustwave.com']",
                            "iframe",
                            "object",
                            "embed",
                        ];
                    c.customSelector && b.push(c.customSelector),
                        (d = ".fitvidsignore"),
                        c.ignore && (d = d + ", " + c.ignore),
                        (e = a(this).find(b.join(","))),
                        (e = e.not("object object")),
                        (e = e.not(d)),
                        e.each(function () {
                            var c,
                                e,
                                f,
                                g,
                                b = a(this);
                            b.parents(d).length > 0 ||
                                ("embed" === this.tagName.toLowerCase() && b.parent("object").length) ||
                                b.parent(".fluid-width-video-wrapper").length ||
                                (b.css("height") || b.css("width") || !(isNaN(b.attr("height")) || isNaN(b.attr("width"))) || (b.attr("height", 9), b.attr("width", 16)),
                                (c = "object" === this.tagName.toLowerCase() || (b.attr("height") && !isNaN(parseInt(b.attr("height"), 10))) ? parseInt(b.attr("height"), 10) : b.height()),
                                (e = isNaN(parseInt(b.attr("width"), 10)) ? b.width() : parseInt(b.attr("width"), 10)),
                                isNaN(parseInt(c)) && (c = b.height()),
                                console.log(c),
                                (f = c / e),
                                "iframe" == this.tagName.toLowerCase() &&
                                    (a(window).resize(function () {
                                        var a = b.parent().css("height").replace("px", ""),
                                            c = b.parent().width(),
                                            d = b.attr("src");
                                        (d = d.replace(/(width=).*?(&)/, "$1" + c + "$2")), (d = d.replace(/(height=).*?(&)/, "$1" + a + "$2")), b.attr("src", d);
                                    }),
                                    a(window).load(function () {
                                        var a = b.parent().css("height").replace("px", ""),
                                            c = b.parent().width(),
                                            d = b.attr("src");
                                        (d = d.replace(/(width=).*?(&)/, "$1" + c + "$2")), (d = d.replace(/(height=).*?(&)/, "$1" + a + "$2")), b.attr("src", d);
                                    })),
                                b.attr("id") || ((g = "fitvid" + Math.floor(999999 * Math.random())), b.attr("id", g)),
                                b
                                    .wrap('<div class="fluid-width-video-wrapper"></div>')
                                    .parent(".fluid-width-video-wrapper")
                                    .css("padding-top", 100 * f + "%"),
                                b.removeAttr("height").removeAttr("width"));
                        });
                })
            );
        };
    })(window.jQuery || window.Zepto),
    $(".flex-video-iframe").fitVids(),
    "https:" != location.protocol &&
        ($(".BrightcoveExperience param[name=secureConnections]") && $(".BrightcoveExperience param[name=secureConnections]").attr("value", "false"),
        $(".BrightcoveExperience param[name=secureHTMLConnections]") && $(".BrightcoveExperience param[name=secureHTMLConnections]").attr("value", "false")),
    brightcove.createExperiences(),
    $(document).ready(function () {
        $("body.securebrowsing a#2147483698") &&
            $("body.securebrowsing a#2147483698").click(function (a) {
                a.preventDefault(), $("ul.nav li:eq(3) a").click();
            }),
            $("body.securityadvisories a[href$='#disclosure-policy']") &&
                $("body.securityadvisories a[href$='#disclosure-policy']").click(function (a) {
                    return a.preventDefault(), TWScrollTo("#disclosure-policy"), !1;
                });
    }),
    $("#carousel1Hero").on("slid.bs.carousel1", function () {
        var a = $(".carousel1-inner div.item.active"),
            b = $("ol.carousel1-indicators li");
        b.removeClass("indicator-blue indicator-green indicator-grey indicator-white indicator-red indicator-orange indicator-apple indicator-teal"),
            a.hasClass("slide-blue")
                ? b.addClass("indicator-blue")
                : a.hasClass("slide-green")
                ? b.addClass("indicator-green")
                : a.hasClass("slide-grey")
                ? b.addClass("indicator-grey")
                : a.hasClass("slide-white")
                ? b.addClass("indicator-white")
                : a.hasClass("slide-red")
                ? b.addClass("indicator-red")
                : a.hasClass("slide-orange")
                ? b.addClass("indicator-orange")
                : a.hasClass("slide-apple")
                ? b.addClass("indicator-apple")
                : a.hasClass("slide-teal") && b.addClass("indicator-teal");
    }),
    (carousel1Inner = $(".carousel1-inner").hammer()),
    carousel1Inner.on("swiperight", function () {
        $(this).parent().carousel1("prev");
    }),
    carousel1Inner.on("swipeleft", function () {
        $(this).parent().carousel1("next");
    }),
    $(".lock")
        .popover({
            offset: 10,
            trigger: "manual",
            html: !0,
            placement: "top",
            content: "This item requires a one-time registration. Once completed, you unlock all the premium content on our site.",
            template:
                '<div class="popover" onmouseover="clearTimeout(timeoutObj);$(this).mouseleave(function() {$(this).hide();});"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div></div></div>',
        })
        .mouseenter(function () {
            $(this).popover("show");
        })
        .mouseleave(function () {
            var a = $(this);
            timeoutObj = setTimeout(function () {
                a.popover("hide");
            }, 50);
        }),
    window.innerWidth < 768 &&
        ($("button.navbar-toggle").click(function () {
            $("div.navbar-header i").hasClass("fa-chevron-down")
                ? ($("div.navbar-header i").removeClass("fa-chevron-down"), $("div.navbar-header i").addClass("fa-chevron-up"))
                : ($("div.navbar-header i").removeClass("fa-chevron-up"), $("div.navbar-header i").addClass("fa-chevron-down"));
        }),
        $("li.solutions-dropdown-link").click(function () {
            $("li.services-dropdown-link ul.mobile-subnav, li.products-dropdown-link ul.mobile-subnav, li.resources-dropdown-link ul.mobile-subnav, li.company-dropdown-link ul.mobile-subnav").hide(),
                $("li.solutions-dropdown-link ul.mobile-subnav").toggle();
        }),
        $("li.services-dropdown-link").click(function () {
            $("li.solutions-dropdown-link ul.mobile-subnav, li.products-dropdown-link ul.mobile-subnav, li.resources-dropdown-link ul.mobile-subnav, li.company-dropdown-link ul.mobile-subnav").hide(),
                $("li.services-dropdown-link ul.mobile-subnav").toggle();
        }),
        $("li.products-dropdown-link").click(function () {
            $("li.solutions-dropdown-link ul.mobile-subnav, li.services-dropdown-link ul.mobile-subnav, li.resources-dropdown-link ul.mobile-subnav, li.company-dropdown-link ul.mobile-subnav").hide(),
                $("li.products-dropdown-link ul.mobile-subnav").toggle();
        }),
        $("li.resources-dropdown-link").click(function () {
            $("li.services-dropdown-link ul.mobile-subnav, li.products-dropdown-link ul.mobile-subnav, li.solutions-dropdown-link ul.mobile-subnav, li.company-dropdown-link ul.mobile-subnav").hide(),
                $("li.resources-dropdown-link ul.mobile-subnav").toggle();
        }),
        $("li.company-dropdown-link").click(function () {
            $("li.services-dropdown-link ul.mobile-subnav, li.products-dropdown-link ul.mobile-subnav, li.resources-dropdown-link ul.mobile-subnav, li.solutions-dropdown-link ul.mobile-subnav").hide(),
                $("li.company-dropdown-link ul.mobile-subnav").toggle();
        })),
    $(document).ready(function () {
        $('[data-toggle="nav-toggle"]').click(function () {
            $(".navigation-container").toggleClass("active"), $(".navigation-overlay").toggleClass("active");
        }),
            $(".navigation-overlay").click(function () {
                $(".navigation-container").toggleClass("active"), $(".navigation-overlay").toggleClass("active");
            }),
            $('[data-toggle="search-toggle"]').click(function (a) {
                $(this).addClass("open"), $(".site-brand").addClass("remove"), $(".site-search").addClass("expand"), $(".site-main-navigation > ul").addClass("condense"), $(".site-search .site-search-input").focus(), a.stopPropagation();
            }),
            $(document).click(function (a) {
                $(a.target).is(".site-search, .site-search *") ||
                    ($(".site-search").removeClass("expand"),
                    $(".site-main-navigation > ul").removeClass("condense"),
                    $('[data-toggle="search-toggle"]').removeClass("open"),
                    $(".site-search .site-search-input").val(""),
                    $(".search-clear").removeClass("active"),
                    $(".site-search .search-icon").removeClass("remove"),
                    $(".site-brand").removeClass("remove"));
            }),
            $(".site-search .site-search-input").on("keydown paste", function () {
                $(".search-clear").addClass("active"), $(".site-search .search-icon").addClass("remove");
            }),
            $(".search-clear").click(function () {
                $(this).removeClass("active"), $(".site-search .search-icon").removeClass("remove"), $(".site-search .site-search-input").val(""), $(".site-search .site-search-input").focus();
            });
    }),
    $(window).on("ready resize", function () {
        function a() {
            var a = void 0;
            return (
                $(".site-main-navigation > ul > li").each(function () {
                    $(this).find("div.navigation-dropdown").is(":visible") && (a = this);
                }),
                a
            );
        }
        function b() {
            var b = $(a()).find("div.navigation-dropdown"),
                c = $("span.navigation-backdrop");
            a();
            c.stop().animate(
                { height: 0 },
                {
                    duration: 200,
                    start: function () {
                        b.fadeOut(50), c.removeClass("open");
                    },
                }
            );
        }
        $("body").innerWidth() >= 970
            ? (MainMenuReset(),
              $(".site-main-navigation > ul > li").hoverIntent({
                  over: function () {
                      "top-level" == $(this).attr("class") && MainMenuReset();
                      var a = $(this).find("div.navigation-dropdown"),
                          b = $("span.navigation-backdrop"),
                          c = a.height() + 1,
                          d = this;
                      b.stop().animate(
                          { height: c },
                          {
                              duration: 200,
                              start: function () {
                                  b.addClass("open"), $(d).addClass("nav-highlight");
                              },
                              complete: function () {
                                  a.fadeIn(50);
                              },
                          }
                      );
                  },
                  out: function (a) {
                      "navigation-backdrop open" == $(a.relatedTarget).attr("class") ? a.stopPropagation() : ($(".nav-highlight").removeClass("nav-highlight"), b());
                  },
                  timeout: 200,
              }),
              $("span.navigation-backdrop").mouseout(function (a) {
                  a.stopPropagation();
                  var c = a.relatedTarget;
                  1 == !$(c).parents("nav.site-main-navigation").length && ($(".nav-highlight").removeClass("nav-highlight"), b());
              }))
            : ($(".site-main-navigation > ul > li").unbind("mouseenter").unbind("mouseleave"),
              $("nav.site-main-navigation div.navigation-dropdown").show(),
              $('[data-toggle="sub-toggle"]').click(function (a) {
                  a.preventDefault(),
                      $(this).parent().toggleClass("open"),
                      $(this).parent().hasClass("open") ? $(this).parent().child(".navigation-dropdown").css("max-height", "1000px") : $(this).parent().child(".navigation-dropdown").css("max-height", "0px");
              }));
    }),
    $(document).ready(function () {
        SetupChainedSelects();
    });
var demo = { button: "#demoFormButton", form: "#DemoForm", confirm: "#DemoConfirm", submit: "#DemoContactButton", validation: "DemoValidation", name: "Demo Form" },
    expert = { button: "#expertFormButton", form: "#ExpertForm", confirm: "#ExpertConfirm", submit: "#ExpertContactButton", validation: "ExpertValidation", name: "Expert Form" },
    contact = { submit: "#ContactButton", validation: "ContactValidation", close: "div.contact button.close", cancel: "div.contact button.contact-close" },
    partner = { submit: "#PartnerButton", validation: "PartnerValidation", close: "#PartnerConfirm button.contact-close" },
    ContactExpertRequestSent = !1,
    ContactDemoRequestSent = !1;
(formsubmitlock = !1),
    $(document).ready(function () {
        SetupForms(),
            $("#contactConfirm") &&
                $("#contactConfirm button.contact-close").click(function () {
                    $("#contactConfirm").slideUp(500, "easeInOutExpo", function () {
                        $("#contactConfirm").hide(), $(".dark").hide();
                    });
                }),
            $("#PartnerConfirm") &&
                $("#PartnerConfirm button.contact-close").click(function () {
                    $("#PartnerConfirm").slideUp(500, "easeInOutExpo", function () {
                        $("#PartnerConfirm").hide(), $(".dark").hide();
                    });
                });
    }),
    (color = "#e9f5f8"),
    $(document).ready(function () {
        $("div.large-list-item").mouseover(function () {
            $(this).find("div.slide-item-info").hasClass("active") ||
                ($(this).css("background-color", color),
                $(this).mouseout(function () {
                    $(this).find("div.slide-item-info").hasClass("active") || $(this).css("background-color", "#FFF");
                }));
        }),
            $("div.large-list-item").click(function () {
                $(this)
                    .find("div.slide-item-info")
                    .slideToggle("fast", function () {
                        $(this).is(":visible")
                            ? ($(this).parents("div.large-list-item").css("background-color", color), $(this).addClass("active"), $(this).parents("div.large-list-item").find("img.arrow").attr("src", "/img/lg-list-arrow-down.png"))
                            : ($(this).parents("div.large-list-item").css("background-color", "#FFF"), $(this).parents("div.large-list-item").find("img.arrow").attr("src", "/img/lg-list-arrow.png"), $(this).removeClass("active"));
                    });
            });
    }),
    $(document).ready(function () {
        $(".InPageVideoLibrary a").css("cursor", "pointer"),
            $(".InPageVideoLibrary a.active").css("cursor", "default"),
            $(".InPageVideoLibrary a").click(function (a) {
                a.stopPropagation();
                var b = $(this).attr("id"),
                    c = $("#In-PageVideoLibrary").height(),
                    d = $("#In-PageVideoLibrary").width();
                $("#In-PageVideoLibrary").attr("src", "/Video.aspx?width=" + d + "&height=" + c + "&videoID=" + b),
                    $(".video-caption").hide(),
                    $("#caption-" + b).show(),
                    $(".InPageVideoLibrary a.active").removeClass("active"),
                    $(this).addClass("active"),
                    $(".InPageVideoLibrary a").css("cursor", "pointer"),
                    $(".InPageVideoLibrary a.active").css("cursor", "default");
            });
    }),
    $(document).ready(function () {
        var a = $('meta[property="og:url"]').attr("content"),
            b = $('meta[property="og:title"]').attr("content"),
            c = $('meta[property="og:description"]').attr("content");
        $(".addthis_toolbox") && ($(".addthis_toolbox").attr("addthis:url", a), $(".addthis_toolbox").attr("addthis:title", b), $(".addthis_toolbox").attr("addthis:description", c));
    }),
    $(".fancybox").fancybox({ href: this.href, helpers: { overlay: { css: { background: "rgba(0,0,0,0.60)" } } } }),
    $("article img").each(function () {
        $(this).hasClass("img-responsive") || $(this).addClass("img-responsive");
    });

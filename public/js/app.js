 ! function(g) {
    "use strict";
    AOS.init({
        offset: 50,
        duration: 600,
        easing: "ease-out-quad",
        startEvent: "piwoSiteLoaded"
    });
    var e = g(".custom-styles"),
        t = e.length,
        i = "";

    function o() {
        window.bLazy = new Blazy({
            offset: 0,
            success: function(e) {
                var t = e.parentNode;
                t.className = t.className.replace(/\bloading\b/, ""), t.className += " loaded", g(window).trigger("masonryLayout"), setTimeout(function() {
                    g(e).parents(".hover-not-ready").removeClass("hover-not-ready")
                }, 700)
            },
            error: function(e, t) {
                console.log(t)
            }
        })
    }

    function a() {
        var e = g(window).outerHeight(),
            t = g(".footer").outerHeight(),
            i = g(".page-wrapper").outerHeight();
        g(".piwo-nav").outerHeight() + i + t <= e ? g(".footer").css("position", "absolute") : g(".footer").css("position", "relative")
    }

    function n() {
        g(".interactive-box").each(function() {
            var e = g(this),
                t = e.data("smHeight"),
                i = e.data("lgHeight");
            0 < e.find(".box-content a").length && e.find(".box-link").css("z-index", "-1"), g(window).width() < 768 ? e.height(t) : e.height(i), e.find(".lightbox").magnificPopup({
                type: "image",
                gallery: {
                    enabled: !0
                }
            })
        }), g(".box-slider").owlCarousel({
            items: 1,
            loop: !0,
            autoplay: !1,
            autoplaySpeed: 3e3
        })
    }

    function s() {
        var e = g(this);
        if ("1" == e.data("nav-showed")) return !1;
        var t = e.find(".sub-menu").first(),
            i = "block";
        if ((e.hasClass("menu-item-object-piwo_mega_menu") || g("body").hasClass("piwo-nav-left")) && (i = "flex"), TweenLite.to(t, .2, {
                autoAlpha: 1,
                display: i,
                onComplete: function() {
                    e.data("nav-showed", "1")
                }
            }), e.hasClass("menu-item-object-piwo_mega_menu") && !g("body").hasClass("piwo-nav-left")) {
            t.width(g(".piwo-nav .nav").width() / (12 / parseInt(t.data("width")))), t.css("left", g(".piwo-nav .nav").offset().left - t.parent().offset().left + 15);
            var o = e.width(),
                a = t.width(),
                n = -a / 2 + o / 2,
                s = (c = e.position().left + o / 2 + n) + a,
                r = n - (s - g(".piwo-nav .nav").width() - g(".piwo-nav .nav").position().left - o / 2 - 15);
            t.css("left", n), s > g(".piwo-nav .nav").width() + g(".piwo-nav .nav").position().left ? t.css("left", r) : c < g(".piwo-nav .nav").position().left && t.css("left", g(".piwo-nav .nav").position().left - e.position().left + 15)
        } else if (!g("body").hasClass("piwo-nav-left")) {
            var l = "",
                d = t.parent().offset(),
                c = d.left;
            c -= t.width() / 2, t.css("margin-left", 0), l = d.left + t.width() > g(window).width() ? d.left + t.width() - g(window).width() : "", 0 < t.length && (t.parent().hasClass("first-level") ? t.css("margin-left", t.width() / -2 - l) : 2 * t.parent().outerWidth() + t.parent().offset().left > g(window).width() ? t.addClass("dropdown-left") : t.removeClass("dropdown-left"))
        }
    }

    function r() {
        var e = g(this),
            t = e.find(".sub-menu").first();
        TweenLite.to(t, .2, {
            autoAlpha: 0,
            display: "none",
            onComplete: function() {
                e.data("nav-showed", "0")
            }
        })
    }

    function l() {
        if (0 == g(".nav-social-profiles").length) return !1;
        var e = g("#piwo-main-stylesheet-inline-css"),
            o = "",
            a = 0;
        g(".nav-social-profiles, .piwo-social-profiles, .piwo-shares").each(function() {
            g(this).hasClass("color-accent") ? g(this).find("a").each(function(e) {
                if (g(this).data("color")) {
                    var t = g(this).data("color");
                    g(this).addClass("piwo-social-st" + a);
                    var i = function(e, t) {
                        (e = String(e).replace(/[^0-9a-f]/gi, "")).length < 6 && (e = e[0] + e[0] + e[1] + e[1] + e[2] + e[2]), t = t || 0;
                        var i, o, a = "#";
                        for (o = 0; o < 3; o++) i = parseInt(e.substr(2 * o, 2), 16), a += ("00" + (i = Math.round(Math.min(Math.max(0, i + i * t), 255)).toString(16))).substr(i.length);
                        return a
                    }(t, -.2);
                    o += ".piwo-social-st" + a + " {color:" + t + "!important;} .piwo-social-st" + a + ":hover {color:" + i + "!important;}"
                }
                a++
            }) : g(this).find("a").each(function(e) {
                if (g(this).data("color")) {
                    var t = g(this).data("color");
                    g(this).addClass("piwo-social-st" + a), o += ".piwo-social-st" + a + ":hover {color:" + t + "!important;}"
                }
                a++
            })
        }), e.text(e.text() + o)
    }

    function b() {
        w.js;
        g("body").append('<div class="portfolio-hover3-container"></div>');
        var n = g(".portfolio-hover3-container");
        g(".piwo-portfolio-item.text-on-hover.hover3:not(.hover-ready)").each(function() {
            var o = g(this),
                e = o.find(".portfolio-text");
            if (o.addClass("hover-ready"), o.parent().hasClass("swiper-slide")) {
                var a = o.parents(".swiper-container");
                o.on("mousemove", function(e) {
                    o.position();
                    var t = e.pageX + 30 - a.data("swiper").translate,
                        i = e.pageY + 30 - g(window).scrollTop() - a.offset().top;
                    n.css("left", t), n.css("top", i)
                })
            } else o.on("mousemove", function(e) {
                o.position();
                var t = e.pageX + 30,
                    i = e.pageY + 30 - g(window).scrollTop();
                n.css("left", t), n.css("top", i)
            });
            o.on("mouseenter", function() {
                n.html(e), TweenLite.to(n, .4, {
                    autoAlpha: 1,
                    y: 0,
                    ease: Power4.easeOut
                })
            }), o.on("mouseleave", function() {
                TweenLite.to(n, .4, {
                    autoAlpha: 0,
                    y: 30,
                    ease: Power4.easeOut
                })
            })
        })
    }

    function y() {
        g(".piwo-portfolio").each(function() {
            var e = g(this),
                t = e.data("headerSize");
            e.find(".portfolio-text h3").addClass("h" + t);
            parseInt(e.find(".portfolio-text h3").css("font-size"));
            e.find(".portfolio-text ul").css("font-size", "11px")
        })
    }
    e.each(function(e) {
        i += g(this).data("styles"), --t || function(e) {
            g("head").append("<style>" + e + "</style>")
        }(i), g(this).remove()
    });
    var d, c, p, w = (d = window.getComputedStyle(document.documentElement, ""), c = (Array.prototype.slice.call(d).join("").match(/-(moz|webkit|ms)-/) || "" === d.OLink && ["", "o"])[1], {
        dom: "WebKit|Moz|MS|O".match(new RegExp("(" + c + ")", "i"))[1],
        lowercase: c,
        css: "-" + c + "-",
        js: c[0].toUpperCase() + c.substr(1)
    });

    function f() {
        g(".piwo-slider-container").each(function() {
            var e, t = g(this),
                i = g(this).width(),
                o = t.find(".slide-nav").data("mobile-height"),
                a = t.find(".slide-nav"),
                n = new TimelineLite;
            0 < t.find(".slide-nav .img-slide").length && t.find(".bg-images").html(t.find(".slide-nav .img-slide")), n.set(t.find(".bg-images .img-slide:not(:eq(0))"), {
                autoAlpha: 0
            }), t.on("mouseenter", ".piwo-slide-content", function() {
                var e = t.find(".bg-images .img-" + (g(this).index() + 1));
                TweenLite.set(t.find(".bg-images .img-slide:not(.img-" + (g(this).index() + 1) + ")"), {
                    css: "z-index: 2;"
                }), TweenLite.to(t.find(".bg-images .img-slide:not(.img-" + (g(this).index() + 1) + ")"), 0, {
                    autoAlpha: 0,
                    delay: .4,
                    overwrite: 1,
                    ease: Power0.easeNone
                }), TweenLite.set(e, {
                    css: "z-index: 3"
                }), TweenLite.to(e, .4, {
                    autoAlpha: 1,
                    ease: Power0.easeNone
                })
            });
            var s = a[0];
            e = 1200 <= i && i < 1440 ? 3 : t.data("count-slides"), t.find(".piwo-slide-content").width(100 / e + "%");
            var r = t.find(".piwo-slide-content"),
                l = function(e) {
                    return g(".slide-nav").find(".piwo-slide-content").width() * e.length
                }(r) - i,
                d = i / e / 2;
            if (1200 <= i) {
                if (t.find(".piwo-slide-content").height("inherit"), r.length >= e) t.on("mousemove", function(e) {
                    var t = -Math.floor(l * (e.clientX / i));
                    e.clientX <= d ? 0 < (t -= e.clientX - d) && (t = 0) : e.clientX >= i - d && (t += i - e.clientX - d) <= -l && (t = -l), TweenLite.to(s, 1, {
                        x: t
                    })
                });
                else {
                    var c = Math.round(100 / r.length);
                    r.each(function(e, t) {
                        g(".piwo-slide-content").css({
                            width: c + "%"
                        })
                    })
                }
                t.removeClass("slide-mobile")
            } else t.addClass("slide-mobile"), t.find(".piwo-slide-content").css({
                width: "100%"
            }), t.off("mousemove"), TweenLite.set(s, {
                x: 0
            }), t.find(".piwo-slide-content").height(o)
        })
    }

    function h() {
        g(".piwo-split-container").each(function() {
            var a = g(this).find(".split-left-container"),
                n = g(this).find(".split-right-container"),
                e = n.find(".slide-right").length - 1,
                t = g(this).data("autoplay"),
                i = g(this).find(".piwo-split-pagination"),
                o = g(this).data("mouseWheel");
            g(".piwo-split-counter .split-max").text(a.find(".slide-left").length);
            var s = document.getElementById("border-circle"),
                r = !1;
            var l = new Swiper(a, {
                    speed: 800,
                    slidesPerView: 1,
                    autoplay: t,
                    loop: !0,
                    effect: "slide",
                    direction: "vertical",
                    grabCursor: !1,
                    mousewheelControl: o,
                    slideClass: "slide-left",
                    keyboardControl: !0,
                    pagination: i,
                    paginationClickable: !0,
                    autoplayDisableOnInteraction: !1,
                    nextButton: ".piwo-split-arrows .arrow-next",
                    prevButton: ".piwo-split-arrows .arrow-prev",
                    controlInverse: !0,
                    onSlideChangeStart: function(e) {
                        a.find(".slide-text").removeClass("active"), a.find(".btn-container, .btn-container .split-btn").removeClass("active"), g(".piwo-split-counter .split-index").text(), g(".piwo-split-counter .border-counter").addClass("animate");
                        var t = e.realIndex,
                            i = a.find(".slide-left:nth-child(" + (t + 2) + ")");
                        if (1024 <= g(window).width())
                            if (0 < i.find(".slide-img").length) g(".piwo-nav:not(.fixed-nav)").hasClass("nav-transparent") && (g(".piwo-nav:not(.fixed-nav)").hasClass("nav-left") && g(".piwo-nav:not(.fixed-nav) .nav-items a, .piwo-nav:not(.fixed-nav) .logo h1").css({
                                color: i.data("color")
                            }), g(".piwo-nav:not(.fixed-nav) .logo h1").css({
                                color: i.data("color")
                            }));
                            else {
                                var o = i.find(".slide-text-wrapper").data("color");
                                o = "" != o ? o : i.find(".slide-text-wrapper").css("color"), a.parents(".page-wrapper").siblings(".piwo-nav:not(.fixed-nav)").hasClass("nav-transparent") && (g(".piwo-nav:not(.fixed-nav)").hasClass("nav-left") ? g(".piwo-nav:not(.fixed-nav) .nav-items a, .piwo-nav:not(.fixed-nav) .logo h1").css({
                                    color: o
                                }) : g(".piwo-nav:not(.fixed-nav) .logo h1").css({
                                    color: o
                                }))
                            }
                        0 != r ? (new TimelineLite).fromTo(s, .8, {
                            drawSVG: "100% 0"
                        }, {
                            drawSVG: "100% 100%"
                        }).set(s, {
                            drawSVG: "0 0"
                        }).to(s, .8, {
                            drawSVG: "100% 0"
                        }) : r = !0
                    },
                    onSlideChangeEnd: function(e) {
                        var t = e.realIndex;
                        a.find(".slide-left:nth-child(" + (t + 2) + ") .slide-text").addClass("active"), a.find(".btn-container, .slide-left:nth-child(" + (t + 2) + ") .btn-container .split-btn").addClass("active"), g(".piwo-split-counter .split-index").text(t + 1), g(".piwo-split-counter .border-counter").removeClass("animate")
                    }
                }),
                d = new Swiper(n, {
                    speed: 800,
                    slidesPerView: 1,
                    loop: !0,
                    effect: "slide",
                    direction: "vertical",
                    grabCursor: !1,
                    mousewheelControl: o,
                    slideClass: "slide-right",
                    keyboardControl: !1,
                    paginationClickable: !1,
                    autoplayDisableOnInteraction: !1,
                    controlInverse: !0,
                    initialSlide: e,
                    mousewheelInvert: !0,
                    onSlideChangeStart: function(e) {
                        n.find(".slide-text").removeClass("active"), n.find(".btn-container, .btn-container .split-btn").removeClass("active");
                        var t = e.realIndex,
                            i = n.find(".slide-right:nth-child(" + (t + 2) + ")");
                        if (0 < i.find(".slide-img").length) n.parent().find(".piwo-split-arrows").css("color", i.data("color")), n.parent().find(".swiper-pagination-bullet").css({
                            "background-color": i.data("color"),
                            "border-color": i.data("color")
                        }), 1024 <= g(window).width() && g(".piwo-nav:not(.fixed-nav)").hasClass("nav-transparent") && (g(".piwo-nav:not(.fixed-nav)").addClass("animation-split-slider"), g(".piwo-nav:not(.fixed-nav)").hasClass("nav-right") && g(".piwo-nav:not(.fixed-nav) .nav-items a").css({
                            color: i.data("color")
                        }), g(".piwo-nav:not(.fixed-nav) .nav-additional a, .open-overlay-search").css({
                            color: i.data("color")
                        }), g(".piwo-nav:not(.fixed-nav) .icon-cart path").css({
                            fill: i.data("color")
                        }), g(".piwo-nav:not(.fixed-nav) .piwo-nav-burger span").css({
                            "background-color": i.data("color")
                        }));
                        else {
                            var o = i.find(".slide-text-wrapper").data("color");
                            o = "" != o ? o : i.find(".slide-text-wrapper").css("color"), n.parent().find(".piwo-split-arrows").css("color", o), n.parent().find(".swiper-pagination-bullet").css({
                                "background-color": o,
                                "border-color": o
                            }), 1024 <= g(window).width() && n.parents(".page-wrapper").siblings(".piwo-nav:not(.fixed-nav)").hasClass("nav-transparent") && (g(".piwo-nav:not(.fixed-nav)").addClass("animation-split-slider"), g(".piwo-nav:not(.fixed-nav)").hasClass("nav-right") && g(".piwo-nav:not(.fixed-nav) .nav-items a").css({
                                color: o
                            }), g(".piwo-nav:not(.fixed-nav) .nav-additional a, .open-overlay-search").css({
                                color: o
                            }), g(".piwo-nav:not(.fixed-nav) .icon-cart path").css({
                                fill: o
                            }), g(".piwo-nav:not(.fixed-nav) .piwo-nav-burger span").css({
                                "background-color": o
                            }))
                        }
                    },
                    onSlideChangeEnd: function(e) {
                        var t = e.realIndex;
                        n.find(".slide-right:nth-child(" + (t + 2) + ") .slide-text").addClass("active"), n.find(".btn-container, .slide-right:nth-child(" + (t + 2) + ") .btn-container .split-btn").addClass("active")
                    }
                });
            (l.params.control = d).params.control = l
        })
    }

    function u() {
        g('[data-vc-stretch-side="right"] .extended_bg').each(function() {
            var e = -g(this).parent().offset().left;
            g(this).css("right", e + "px").css("left", 0)
        }), g('[data-vc-stretch-side="left"] .extended_bg').each(function() {
            var e = -g(this).parent().offset().left;
            g(this).css("left", e + "px").css("right", 0)
        })
    }

    function v() {
        g(".woocommerce .shop_table_responsive .product-thumbnail").each(function() {
            var e = g(this),
                t = e.parent().find(".product-remove");
            g(window).width() < 768 ? e.find("a").appendTo(t) : e.parent().find(".product-remove a:not(.remove)").appendTo(e)
        })
    }

    function m() {
        g('.woocommerce .button, .woocommerce input[type="submit"]').each(function() {
            g(this).not("[name=update_cart],[name=calc_shipping],.view").wrap('<div class="btn btn-woo"></div>')
        }), g(".woocommerce .cart-empty").addClass("h4").parent().addClass("text-center"), g("body.woocommerce:not(.single-product) form").addClass("form-style"), g(".woocommerce .cross-sells h2, .woocommerce .cart_totals h2, .woocommerce #reviews #comments h2, .woocommerce .related.products h2, .woocommerce div.product .woocommerce-tabs .panel h2, .woocommerce div.product .upsells.products h2, .woocommerce-billing-fields h3, .woocommerce-additional-fields h3, .woocommerce-order h2,  .woocommerce-order h3, .woocommerce-account h2, .woocommerce-account h3").addClass("h5"), g(".woocommerce .added_to_cart_button").addClass("btn btn-woo"), g(".woocommerce .products .product").each(function() {
            var e = g(this),
                t = e.find(".loop-product-wrapper"),
                i = e.find(".loop-product-btn"),
                o = e.find(".loop-product-wrapper").height() + 20;
            e.on("mouseenter", function() {
                TweenLite.to(i, .5, {
                    y: -o,
                    autoAlpha: 1,
                    ease: Power2.easeInOut
                }), TweenLite.to(t, .6, {
                    y: "-100%",
                    ease: Power4.easeOut
                })
            }), e.on("mouseleave", function() {
                TweenLite.to(i, .3, {
                    y: 0,
                    autoAlpha: 0
                }), TweenLite.to(t, .3, {
                    y: "0%"
                })
            })
        }), g('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter(".summary .quantity input"), g(".summary .quantity").each(function() {
            var i = g(this),
                o = i.find('input[type="number"]'),
                e = i.find(".quantity-up"),
                t = i.find(".quantity-down"),
                a = o.attr("min"),
                n = o.attr("max");
            e.click(function() {
                var e = parseFloat(o.val());
                if (n <= e && "" != n) var t = e;
                else t = e + 1;
                i.find("input").val(t), i.find("input").trigger("change")
            }), t.click(function() {
                var e = parseFloat(o.val());
                if (e <= a) var t = e;
                else t = e - 1;
                i.find("input").val(t), i.find("input").trigger("change")
            })
        }), TweenLite.to(".piwo-woo-notice:not(.woocommerce-info)", .7, {
            autoAlpha: 1,
            delay: 1.3,
            ease: Power4.easeOut,
            x: 0,
            z: 0,
            onComplete: function() {
                TweenLite.to(".piwo-woo-notice:not(.woocommerce-info)", .3, {
                    autoAlpha: 0,
                    delay: 3,
                    x: "-100%",
                    z: 0
                })
            }
        })
    }

    function x(e) {
        if ("#" === e) return !1;
        var t = "";
        if (t = 0 < g(".fixed-nav").length ? g(".fixed-nav").height() : "0", 0 < g(e).length) {
            g(".mobile-navbar-helper").removeClass("open-overlay"), g(".mobile-navbar-overlay").removeClass("show-mobile-nav"), g("body").removeClass("no-scroll"), window.bLazy.destroy();
            var i = g(e).offset().top - t;
            TweenLite.to(window, 1, {
                scrollTo: i,
                ease: Power1.easeOut,
                onComplete: function() {
                    o()
                }
            })
        }
    }

    function C(e) {
        var t = document.body.height,
            i = g("#mobile-navbar-home").height(),
            o = g(window).width(),
            a = t - i,
            n = g(".piwo-nav").height();
        o < 1024 ? e.css("min-height", a + "px") : g(".piwo-nav").hasClass("nav-transparent") ? (e.css("min-height", "100vh"), e.find(".piwo-fullscreen-links-images").css("top", "0")) : (e.css("min-height", t - n + "px"), e.find(".piwo-fullscreen-links-images").css("top", nav_height + "px"))
    }

    function _(e) {
        var i = 0,
            n = 3,
            s = 2,
            r = 4;
        e.hasClass("three-columns") && (s = 1, n = r = 2), e.find("article").each(function(e) {
            g(this).wrapInner('<div class="piwo-portfolio-item-wrapper"></div>');
            var o = g(this),
                a = o.find(".piwo-portfolio-item-wrapper"),
                t = o.find("img");
            t.height() > t.width() ? o.addClass("portfolio-portrait") : (i % 2 == 0 ? o.addClass("portfolio-landscape") : o.addClass("portfolio-landscape-2"), i++), g(this).hasClass("piwo-parallax-initialized") || (g(this).addClass("piwo-parallax-initialized"), s < n ? g(window).on("scroll", function() {
                var e = g(window).scrollTop(),
                    t = o.offset().top + o.height() / 2,
                    i = -.2 * (g(window).scrollTop() + g(window).height() / 2 - t);
                e < 2 * t && TweenLite.to(a, 3, {
                    y: i,
                    ease: Power4.easeOut
                })
            }) : g(window).on("scroll", function() {
                var e = g(window).scrollTop(),
                    t = o.offset().top + o.height() / 2,
                    i = -.15 * (g(window).scrollTop() + g(window).height() / 2 - t);
                e < 2 * t && TweenLite.to(a, 3, {
                    y: i,
                    ease: Power4.easeOut
                })
            }), r < ++s && (s = 1))
        })
    }
    g(document.body).on("updated_wc_div", function() {
        var e = g(".woocommerce-shipping-calculator button[name=calc_shipping]").text();
        g("input[name=apply_coupon]").removeClass("button").addClass("btn-text").wrap('<div class="btn btn-solid btn-xs btn-light" data-btn-text="' + e + '"></div>'), TweenLite.to(".piwo-woo-notice", .7, {
            opacity: 1,
            delay: .3,
            ease: Power4.easeOut,
            x: 0,
            onComplete: function() {
                TweenLite.to(".piwo-woo-notice", .3, {
                    opacity: 0,
                    delay: 3,
                    x: "-100%"
                })
            }
        }), 0 < g(".woocommerce .cart-empty").length && m()
    }), g(document.body).on("checkout_error", function() {
        TweenLite.to(".piwo-woo-notice", .7, {
            opacity: 1,
            delay: .3,
            ease: Power4.easeOut,
            x: 0,
            onComplete: function() {
                TweenLite.to(".piwo-woo-notice", .3, {
                    opacity: 0,
                    delay: 3,
                    x: "-100%"
                })
            }
        })
    }), g(document.body).on("wc_fragments_refreshed", function() {
        g(".woocommerce-mini-cart__buttons > a").wrap('<div class="btn btn-woo"></div>')
    }), g(window).load(function() {
        TweenLite.to(".transition-overlay", .7, {
            autoAlpha: 0,
            delay: .7,
            ease: Power4.easeOut,
            onComplete: function() {
                document.dispatchEvent(function(e) {
                    if ("function" == typeof Event) var t = new Event(e);
                    else(t = document.createEvent("Event")).initEvent(e, !0, !0);
                    return t
                }("piwoSiteLoaded"))
            }
        }), 0 < g(".post-intro-wrapper .row").length && TweenLite.fromTo(".post-intro-wrapper .row", 1, {
            opacity: 0,
            scale: 1.3
        }, {
            opacity: 1,
            scale: 1,
            delay: .7,
            ease: Power4.easeOut
        }), o(), g(".piwo-portfolio-carousel").each(function() {
            var i = g(this),
                e = i.data("autoplay"),
                t = i.data("arrows"),
                o = i.data("pagination"),
                a = "",
                n = "",
                s = "",
                r = i.data("scroll"),
                l = 500;
            o = "1" != o, r = "1" == r, "1" == t ? (n = i.parent().find(".piwo-carousel-arrows .arrow-prev"), a = i.parent().find(".piwo-carousel-arrows .arrow-next")) : n = a = "", i.hasClass("piwo-gallery-element") ? (e = "1" == e ? 3e3 : 0, s = i.hasClass("show-gutter") ? 30 : 0) : (s = 30, "1" == e ? (e = i.data("speed"), l = 1e3) : e = "");
            var d = new Swiper(g(this).find(".piwo-portfolio-carousel-wrapper")[0], {
                pagination: g(this).find(".piwo-gallery-pagination"),
                paginationHide: o,
                slidesPerView: "auto",
                paginationClickable: !0,
                keyboardControl: !0,
                loop: !0,
                mousewheelControl: r,
                spaceBetween: s,
                speed: l,
                autoplay: e,
                autoplayStopOnLast: !0,
                nextButton: a,
                prevButton: n,
                onInit: function(e) {
                    var t = i.find(".b-lazy");
                    window.bLazy.load(t, !0)
                }
            });
            setTimeout(function() {
                d.update(!0)
            }, 1);
            var c = i.data("height");
            if ("full" == c ? i.find(".piwo-portfolio-item").hasClass("text-on-hover") ? (i.find(".swiper-slide,img").height(g(window).height() - g(".piwo-nav").height()), g(window).on("resize", function() {
                    i.find(".swiper-slide,img").height(g(window).height() - g(".piwo-nav").height())
                })) : (i.find("img").height(g(window).height() - g(".piwo-nav").height() - g(".portfolio-text").outerHeight()), g(window).on("resize", function() {
                    i.find("img").height(g(window).height() - g(".piwo-nav").height() - g(".portfolio-text").outerHeight())
                }), i.find(".swiper-pagination").css("bottom", g(".portfolio-text").outerHeight() + 30)) : i.find(".piwo-portfolio-item").hasClass("text-on-hover") ? (i.find(".swiper-slide,img").height(c), i.height(c)) : (i.height(c), i.find("img").height(c - g(".portfolio-text").outerHeight()), i.find(".swiper-pagination").css("bottom", g(".portfolio-text").outerHeight() + 30)), i.find(".piwo-portfolio-item").hasClass("text-below")) {
                var p = i.find(".portfolio-text").height() + 50,
                    w = (p + 15) / 2;
                i.find(".piwo-gallery-pagination").css("bottom", p + "px"), i.find(".piwo-gallery-arrows .arrow").css("margin-top", -w + "px")
            }
            i.imagesLoaded().progress(function() {
                d.update()
            })
        }), g(".piwo_countdown-dateAndTime").each(function() {
            function e(e) {
                g(this).find(".piwo_countdown-period").css("font-size", s), g(this).find(".piwo_countdown-period").css("color", r), g(this).find(".piwo_countdown-amount").css("font-size", n)
            }
            var t = new Date(g(this).html()),
                i = (g(this).data("time-zone"), g(this).data("countformat")),
                o = g(this).data("labels").split(","),
                a = g(this).data("labels2").split(","),
                n = g(this).data("font-count"),
                s = g(this).data("font-text"),
                r = g(this).data("color-text");
            g(this).hasClass("piwo-usrtz") ? g(this).piwo_countdown({
                labels: o,
                labels1: a,
                until: t,
                format: i,
                padZeroes: !0,
                onTick: e
            }) : g(this).piwo_countdown({
                labels: o,
                labels1: a,
                until: t,
                format: i,
                padZeroes: !0,
                onTick: e,
                serverSync: function() {
                    return new Date(g(this).data("time-now"))
                }
            })
        }), g(".piwo-counter").each(function() {
            var t = parseFloat(g(this).find(".counter").data("counter")),
                e = g(this).find(".counter").data("counter") + " ",
                i = parseInt(g(this).find(".counter").data("speed")),
                o = g(this).find(".counter").data("id"),
                a = g(this).find(".counter").data("separator"),
                n = g(this).find(".counter").data("decimal"),
                s = e.split("."),
                r = !1;
            g(this).waypoint(function() {
                if (!1 === r) {
                    r = !0, s = s[1] ? s[1].length - 1 : 0;
                    var e = !0;
                    "none" == n && (n = ""), e = "none" != a, new countUp(o, 0, t, s, i, {
                        useEasing: !0,
                        useGrouping: e,
                        separator: a,
                        decimal: n
                    }).start()
                }
            }, {
                offset: "85%"
            })
        }), g(".blog-carousel").each(function() {
            var a = g(this),
                e = a.data("autoplay"),
                t = a.data("perview"),
                i = a.find(".piwo-carousel-pagination"),
                o = 500;
            "1" == e ? (e = 3e3, o = 2e3) : e = "", new Swiper(a, {
                speed: o,
                slidesPerView: t,
                autoplay: e,
                loop: !0,
                effect: "slide",
                direction: "horizontal",
                mousewheelControl: !1,
                grabCursor: !1,
                spaceBetween: 40,
                slideClass: "swiper-slide",
                keyboardControl: !0,
                pagination: i,
                paginationClickable: !0,
                autoplayDisableOnInteraction: !1,
                setWrapperSize: !0,
                breakpoints: {
                    640: {
                        slidesPerView: 1
                    },
                    1024: {
                        slidesPerView: 2
                    }
                },
                onInit: function(e) {
                    var t = a.find(".b-lazy"),
                        i = e.height,
                        o = a.find(".piwo-carousel-pagination").outerHeight();
                    window.bLazy.load(t, !0), g(".swiper-slide").height(i - o)
                }
            })
        }), g(".piwo-slider").each(function() {
            var e = g(this);
            new Swiper(e, {
                speed: 1e3,
                slidesPerView: 1,
                autoplay: 4e3,
                loop: !1,
                effect: "fade",
                direction: "horizontal",
                mousewheelControl: !1,
                grabCursor: !1,
                slideClass: "swiper-slide",
                keyboardControl: !0
            })
        }), g(".piwo-parallax-slider").each(function() {
            var i = g(this).find(".piwo-slider");
            g(this).jarallax({
                type: "custom",
                imgSrc: "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",
                imgWidth: 1,
                imgHeight: 1,
                speed: 0,
                onScroll: function(e) {
                    var t = e.afterTop - e.beforeBottom;
                    i.css({
                        transform: "translate3d(0, " + t + "px, 0)"
                    })
                }
            })
        }), f(), g(".piwo-parallax:not(.piwo-parallax-slider)").each(function() {
            var e = g(this),
                t = e.data("piwoParallax"),
                i = null,
                o = 0;
            1 < t && (t /= 10), e.data("video") && (i = e.data("video"), o = e.data("videoStart")), 1 == t && !i || (0 < g(".piwo-full-pages").length ? e.jarallax({
                speed: t,
                videoSrc: i,
                videoStartTime: o,
                imgElement: ".piwo-slider",
                videoPlayOnlyVisible: !1,
                loop: 1
            }) : e.jarallax({
                speed: t,
                videoSrc: i,
                videoStartTime: o,
                imgElement: ".piwo-slider",
                loop: 1
            }))
        }), "1" == g(".piwo-full-pages").find(".fp-section").length && g("#fp-nav").css("display", "none"), g(".piwo-coverflow-slider").each(function() {
            var i = g(this),
                e = i.data("autoplay"),
                t = (i.data("arrows"), i.data("dots")),
                o = i.data("mouseWheel");
            g(".slide-btn").each(function() {
                var e = g(this);
                e.on("mouseenter", function() {
                    i.addClass("active-btn")
                }), e.on("mouseleave", function() {
                    i.removeClass("active-btn")
                })
            });
            var s, a = !1;
            new Swiper(i, {
                speed: 1e3,
                autoplay: e,
                grabCursor: !0,
                centeredSlides: !0,
                slidesPerView: "auto",
                mousewheelControl: o,
                keyboardControl: !0,
                pagination: ".piwo-carousel-pagination",
                paginationHide: t,
                watchSlidesProgress: !0,
                loop: !1,
                paginationClickable: !0,
                nextButton: ".piwo-carousel-arrows .arrow-next",
                prevButton: ".piwo-carousel-arrows .arrow-prev",
                onInit: function(e) {
                    e.slides.each(function() {
                        this.tm1 = new TimelineMax, this.tm2 = new TimelineMax
                    });
                    var t = i.find(".swiper-slide-active").width();
                    g(window).width(), g(window).width() <= 810 ? i.find(".slide-text-container").width(t) : 810 < g(window).width() && g(window).width() < 1200 ? i.find(".slide-text-container").width(t + 90) : i.find(".slide-text-container").width(t + 120)
                },
                onAfterResize: function(e) {
                    g(window).width();
                    var t = i.find(".swiper-slide-active").width();
                    g(window).width() <= 810 ? i.find(".slide-text-container").width(t) : 810 < g(window).width() && g(window).width() < 1200 ? i.find(".slide-text-container").width(t + 90) : i.find(".slide-text-container").width(t + 120)
                },
                onTouchMove: function(e) {
                    0 == a && (a = !0, g(".slide-text-container .slide-text.active").removeClass("active"))
                },
                onTouchEnd: function(e) {
                    var t = e.realIndex;
                    a = !1, g(".slide-text-container .slide-text:nth(" + t + ")").andSelf().addClass("active")
                },
                onTransitionStart: function(e) {
                    clearTimeout(s), e.disableKeyboardControl(), e.disableTouchControl(), s = setTimeout(function() {
                        e.enableKeyboardControl(), e.enableTouchControl()
                    }, 1e3);
                    var t = e.realIndex,
                        i = e.slides[t];
                    g(".slide-text-container .slide-text.active").removeClass("active"), g(".slide-text-container .slide-text:nth(" + t + ")").andSelf().addClass("active");
                    var o = g(".slide-text-container .slide-text:nth(" + t + ") .slide-title h2"),
                        a = new SplitText(o, {
                            type: "chars,words"
                        });
                    void 0 !== i.tm1 && (i.tm1 = new TimelineMax, i.tm1.staggerFrom(a.chars, 1.2, {
                        opacity: 0,
                        x: 50,
                        ease: Power4.easeOut
                    }, .02, .1, function() {
                        a.revert()
                    }));
                    var n = g(".slide-text-container .slide-text:nth(" + t + ") .slide-subtitle div, .slide-text-container .slide-text:nth(" + t + ") .slide-desc, .slide-text-container .slide-text:nth(" + t + ") .slide-btn");
                    void 0 !== i.tm2 && (i.tm2 = new TimelineMax, i.tm2.fromTo(n, 1.5, {
                        opacity: 0,
                        y: 0,
                        ease: Power4.easeOut
                    }, {
                        opacity: 1,
                        y: 0,
                        ease: Power4.easeOut
                    }, .6, 1))
                },
                onProgress: function(s, r) {
                    g(s.slides).each(function(e) {
                        var t = g(this),
                            i = (t.find(".swiper-slide-inner img"), g(s.slides).length - 1),
                            o = e * (1 / i),
                            a = o - r,
                            n = 1 - Math.abs(a);
                        n = 500 * (n - 1), Math.abs(a), Math.abs(1.5 * n), TweenLite.to(t, 2, {
                            z: n,
                            ease: Power4.easeOut
                        })
                    })
                }
            }), g(".slide-btn, .slide-link").on("mouseenter", function() {
                g(this).parent().index();
                var e = g(".swiper-slide-active").index(),
                    t = g(".swiper-slide:nth-child(" + (e + 1) + ") .swiper-slide-inner"),
                    i = g(".swiper-slide:not(:nth-child(" + (e + 1) + ")) .swiper-slide-inner");
                TweenLite.to(t, .8, {
                    z: 50,
                    ease: Power2.easeOut
                }), TweenLite.to(i, .8, {
                    z: -50,
                    ease: Power2.easeOut
                })
            }), g(".slide-btn, .slide-link").on("mouseleave", function() {
                var e = g(this).parent().index(),
                    t = g(".swiper-slide-active").index();
                if (e == t) {
                    var i = g(".swiper-slide:nth-child(" + (t + 1) + ") .swiper-slide-inner"),
                        o = g(".swiper-slide:not(:nth-child(" + (t + 1) + ")) .swiper-slide-inner");
                    TweenLite.to(i, .8, {
                        z: 0,
                        ease: Power2.easeOut
                    }), TweenLite.to(o, .8, {
                        z: 0,
                        ease: Power2.easeOut
                    })
                } else i = g(".swiper-slide:nth-child(" + t + ") .swiper-slide-inner"), o = g(".swiper-slide:not(:nth-child(" + t + ")) .swiper-slide-inner"), TweenLite.to(i, .8, {
                    z: 0,
                    ease: Power2.easeOut
                }), TweenLite.to(o, .8, {
                    z: 0,
                    ease: Power2.easeOut
                })
            })
        }), g(".piwo-carousel").each(function() {
            var e, t = g(this),
                i = t.data("autoplay"),
                o = t.data("slide-loop"),
                a = (t.data("arrows"), t.data("slides")),
                n = t.parent().find(".piwo-carousel-pagination"),
                s = t.parent().find(".piwo-carousel-arrows .arrow-prev"),
                r = t.parent().find(".piwo-carousel-arrows .arrow-next");
            new Swiper(t, {
                speed: 1e3,
                slidesPerView: a,
                autoplay: i,
                loop: o,
                autoHeight: (e = {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    },
                    1024: {
                        slidesPerView: 2
                    }
                }, !1),
                effect: "slide",
                direction: "horizontal",
                mousewheelControl: !1,
                grabCursor: !1,
                spaceBetween: 0,
                slideClass: "swiper-slide",
                keyboardControl: !0,
                pagination: n,
                nextButton: r,
                prevButton: s,
                paginationClickable: !0,
                autoplayDisableOnInteraction: !1,
                breakpoints: e,
                onInit: function() {
                    t.find(".img-wrapper").addClass("loaded")
                }
            })
        }), 0 < g(".vc_progress_bar").length && (g(".vc_progress_bar").waypoint("destroy"), g(".vc_progress_bar .piwo-single-bar").each(function() {
            var e = g(this).find(".vc_label_units"),
                t = (e.parents(".piwo-single-bar").find(".vc_bar").data("value"), e.parents(".piwo-single-bar").find(".vc_bar").data("value") + "%");
            e.html("0%");
            var i = !1;
            g(this).waypoint(function() {
                0 == i && (i = !0, TweenLite.to(e, 1.5, {
                    left: t,
                    onUpdate: function() {
                        this.progress() <= 1 && e.html(Math.round(100 * this.progress() / (100 / parseInt(t))) + "%")
                    }
                }), TweenLite.to(e.parents(".piwo-single-bar").find(".vc_bar"), 1.5, {
                    width: t
                }))
            }, {
                offset: "85%"
            })
        })), g(".piwo-portfolio-masonry.piwo-parallax-portfolio article").css("display", "inline-block").css("vertical-align", "middle"), g(".piwo-portfolio-masonry.piwo-parallax-portfolio").each(function(e) {
            var a = g(this);
            _(a);
            var n = !0,
                s = 2,
                r = a.data("ppp"),
                l = a.data("hover"),
                d = a.data("style"),
                c = a.data("ismasonry"),
                p = a.data("imgbg"),
                w = a.data("cat"),
                f = a.data("layout"),
                h = a.data("customLayout"),
                u = a.data("open"),
                v = a.data("aostype");
            g(this).parent().find(".piwo-load-more").on("click", function(e) {
                var i = g(this),
                    t = i.data("index");
                if (1 == n) {
                    n = !1;
                    var o = g(this);
                    e.preventDefault(), g.ajax({
                        url: rest_object.api_url + "portfolio/",
                        type: "POST",
                        dataType: "json",
                        data: {
                            page: s,
                            posts_per_page: r,
                            hover: l,
                            style: d,
                            masonry: c,
                            imgbg: p,
                            categories: w,
                            layout: f,
                            custom_layout: h,
                            open_portfolio: u,
                            index: t,
                            aos_type: v
                        },
                        beforeSend: function(e) {
                            e.setRequestHeader("X-WP-Nonce", rest_object.api_nonce)
                        }
                    }).done(function(e) {
                        var t = g(e.output);
                        a.append(t), g(".piwo-portfolio-masonry.piwo-parallax-portfolio article").css("display", "inline-block").css("vertical-align", "middle"), _(a), setTimeout(function() {
                            window.bLazy.revalidate(), b()
                        }, 100), y(), !1 === e.next ? o.remove() : s = e.next, i.data("index", e.index), n = !0, g(window).trigger("piwoRefreshLigthboxes")
                    }).fail(function() {
                        n = !0
                    })
                }
            })
        }), g(".piwo-portfolio-masonry").each(function() {
            if (g(this).hasClass("piwo-parallax-portfolio")) return !1;
            var a = g(this).parent().find(".piwo-portfolio-filters"),
                e = "masonry";
            g(this).hasClass("piwo-grid") && (e = "fitRows");
            var n = g(this);
            n.isotope({
                itemSelector: "article",
                percentPosition: !0,
                layoutMode: e,
                masonry: {
                    columnWidth: ".grid-sizer"
                }
            }), n.data("isotope").on("layoutComplete", function() {
                AOS.refresh()
            }), a.find("li").each(function() {
                var e = 0;
                e = "*" == g(this).data("filter") ? n.find("article").length : g(g(this).data("filter")).length, 1 == (e = String(e)).length && (e = "0" + e), n.hasClass("piwo-posts-query") && 0 == e ? g(this).remove() : g(this).find(".filter-count").html(e)
            }), a.on("click", "li", function() {
                var e = g(this).attr("data-filter");
                n.isotope({
                    filter: e
                }), a.find(".filter-active").removeClass("filter-active"), g(this).addClass("filter-active")
            }), g(window).on("masonryLayout", function() {
                n.isotope("layout")
            });
            var s = !0,
                r = 2,
                l = n.data("ppp"),
                d = n.data("hover"),
                c = n.data("style"),
                p = n.data("ismasonry"),
                w = n.data("imgbg"),
                f = n.data("cat"),
                h = n.data("layout"),
                u = n.data("customLayout"),
                v = n.data("open"),
                m = n.data("aostype");
            g(this).parent().find(".piwo-load-more").on("click", function(e) {
                var i = g(this),
                    t = i.data("index");
                if (1 == s) {
                    s = !1, TweenLite.to(i, .3, {
                        opacity: .1
                    });
                    var o = g(this);
                    e.preventDefault(), g.ajax({
                        url: rest_object.api_url + "portfolio/",
                        type: "POST",
                        dataType: "json",
                        data: {
                            page: r,
                            posts_per_page: l,
                            hover: d,
                            style: c,
                            masonry: p,
                            imgbg: w,
                            categories: f,
                            layout: h,
                            custom_layout: u,
                            open_portfolio: v,
                            index: t,
                            aos_type: m
                        },
                        beforeSend: function(e) {
                            e.setRequestHeader("X-WP-Nonce", rest_object.api_nonce)
                        }
                    }).done(function(e) {
                        var t = g(e.output).appendTo(n);
                        t.find(".image-wrapper").css("opacity", 0), n.imagesLoaded().done(function() {
                            n.isotope("appended", t), t.find(".image-wrapper").css("opacity", 1)
                        }), a.find("li").each(function() {
                            var e = 0;
                            e = "*" == g(this).data("filter") ? n.find("article").length : g(g(this).data("filter")).length, 1 == (e = String(e)).length && (e = "0" + e), g(this).find(".filter-count").html(e)
                        }), setTimeout(function() {
                            b()
                        }, 100), y(), !1 === e.next ? o.remove() : r = e.next, i.data("index", e.index), s = !0, TweenLite.to(i, .3, {
                            opacity: 1
                        }), g(window).trigger("piwoRefreshLigthboxes")
                    }).fail(function() {
                        s = !0, TweenLite.to(i, .3, {
                            opacity: 1
                        })
                    })
                }
            })
        }), g(".parallax-image").each(function(i, e) {
            i = g(this)[0];
            var t = g(this).offset().top,
                o = (g(this).offset().top, g(this).height(), t + g(this).height() / 2),
                a = (g(this).find("img"), g(this), .1),
                n = .25;
            g(this).hasClass("parallax-speed-2") && (a = .02, n = .1), g(window).on("scroll", function() {
                var e = g(window).scrollTop() + g(window).height() / 2,
                    t = 0;
                o < e ? (t = -1 * (e - o) * a) < -100 && (t = -100) : 100 < (t = -1 * (e - o) * n) && (t = 100), TweenMax.to(i, 3, {
                    ease: Power4.easeOut,
                    y: t
                })
            })
        }), setTimeout(function() {
            ! function() {
                var e = window.location.hash;
                "" !== e && x(e)
            }()
        }, 500), 0 < g(".post-intro-wrapper").length && function() {
            var i = g(".post-intro-wrapper").outerHeight();
            g(window).on("scroll", function() {
                var e = g(window).scrollTop();
                if (e < i) {
                    var t = (100 - g(window).scrollTop() / 4) / 100;
                    TweenLite.to(".parallax-header-decoration span", 1.5, {
                        y: .4 * e,
                        opacity: t,
                        ease: Power4.easeOut
                    }), TweenLite.to(".post-intro-wrapper .post-header", 1, {
                        y: .25 * e,
                        opacity: t,
                        ease: Power4.easeOut
                    }), TweenLite.to(".post-intro-wrapper .parallax-header-background", 2, {
                        y: .08 * e,
                        ease: Power4.easeOut
                    })
                }
            })
        }(), g(".vc_single_image-wrapper:not(.loaded)").addClass("loaded")
    }), 0 < g(".piwo-results-count-content").length && 0 < g(".piwo-results-count").length && g(".piwo-results-count").html(g(".piwo-results-count-content").data("text")), g(document).ready(function() {
        g(".post-content-wrapper a:not(.piwo-text-link,.btn-text,.comment-reply-link,.piwo-hover-text)").each(function() {
                this.childElementCount
            }), 0 < g(".piwo-breadcrumbs").length && g(".piwo-nav").hasClass("nav-transparent") && 0 === g(".post-intro-wrapper").length && g(".piwo-breadcrumbs").css("margin-top", g(".piwo-nav").height()), b(), y(), g(".piwo-portfolio-item.open-lightbox").each(function() {
                g(this).find(".lightbox-gallery a").magnificPopup({
                    type: "image",
                    gallery: {
                        enabled: !0
                    }
                })
            }), g(".piwo-portfolio").each(function() {
                g(this).find(".images-lightbox").magnificPopup({
                    type: "image",
                    gallery: {
                        enabled: !0
                    },
                    disableOn: 700,
                    mainClass: "mfp-fade",
                    removalDelay: 160,
                    preloader: !1
                })
            }), g(".piwo-single-portfolio").each(function() {
                var e = g(this).find(".piwo-single-gallery"),
                    t = g(this).find(".single-portfolio-content"),
                    i = e.outerHeight() - 30,
                    o = t.outerHeight() + 30;
                if (0 < t.length && o < i) {
                    var a = g("#fixed-nav").height();
                    t.stick_in_parent({
                        offset_top: a + 40
                    })
                }
            }),
            function() {
                var e = g(".single-portfolio-large.piwo-single-portfolio .single-portfolio-content").height() + 360;
                g(".single-portfolio-large.piwo-single-portfolio .portfolio-bg").height(e)
            }(), g(".single-gallery-slider").each(function() {
                g(this).find(".swiper-slide").magnificPopup({
                    delegate: "a",
                    type: "image",
                    gallery: {
                        enabled: !0
                    }
                }), new Swiper(this, {
                    speed: 750,
                    slidesPerView: 1,
                    autoplay: !1,
                    centeredSlides: !0,
                    loop: !0,
                    autoHeight: !0,
                    effect: "fade",
                    fade: {
                        crossFade: !0
                    },
                    direction: "horizontal",
                    mousewheelControl: !1,
                    grabCursor: !1,
                    slideClass: "swiper-slide",
                    keyboardControl: !0,
                    nextButton: ".piwo-carousel-arrows .arrow-next",
                    prevButton: ".piwo-carousel-arrows .arrow-prev"
                })
            }), g(".single-gallery-masonry").each(function() {
                var e = g(this);
                e.isotope({
                    itemSelector: "article",
                    percentPosition: !0,
                    transitionDuration: "0.4s",
                    masonry: {
                        columnWidth: ".grid-sizer"
                    },
                    hiddenStyle: {
                        opacity: 0,
                        transform: "translate3d(0, 30px, 0)"
                    },
                    visibleStyle: {
                        opacity: 1,
                        transform: "translate3d(0, 0, 0)"
                    }
                }), e.magnificPopup({
                    delegate: "a",
                    type: "image",
                    gallery: {
                        enabled: !0
                    }
                })
            }), g(".piwo-single-gallery:not(.single-gallery-slider)").each(function() {
                g(this).magnificPopup({
                    delegate: "a",
                    type: "image",
                    gallery: {
                        enabled: !0
                    }
                })
            }), g(".piwo-single-gallery-grid").isotope({
                itemSelector: ".piwo-gallery-image",
                percentPosition: !0,
                transitionDuration: "0s",
                masonry: {
                    columnWidth: ".grid-sizer"
                },
                hiddenStyle: {},
                visibleStyle: {}
            }), g(".piwo-post-gallery").each(function() {
                var e = g(this),
                    t = e.parent().find(".piwo-carousel-arrows .arrow-prev"),
                    i = e.find(".piwo-carousel-arrows .arrow-next");
                new Swiper(e, {
                    speed: 1e3,
                    slidesPerView: 1,
                    autoplay: !1,
                    loop: !0,
                    effect: "slide",
                    direction: "horizontal",
                    mousewheelControl: !1,
                    grabCursor: !1,
                    slideClass: "swiper-slide",
                    keyboardControl: !0,
                    nextButton: i,
                    prevButton: t
                })
            }), g(".vc_tta-container").each(function() {
                var e = g(this),
                    t = e.find(".vc_tta").data("txt"),
                    i = e.find(".vc_tta").data("border"),
                    o = e.find(".vc_tta").data("active"),
                    a = e.find(".vc_tta").data("accent");
                e.find(".vc_tta-accordion.vc_tta.vc_general.style-3 .vc_tta-panel-heading .vc_tta-panel-title, .vc_tta-tabs.style-3 .vc_tta-tab").css("background", o), e.find(".vc_tta-accordion.vc_tta.vc_general.style-3 .vc_tta-panel, .vc_tta-tabs.style-3 .vc_tta-tab, .vc_tta-tabs.style-3 .vc_tta-panel-heading").css("color", a), e.find(".vc_tta-tabs-container, .vc_tta-panels-container").css("border-color", a), e.find(".vc_tta-accordion .vc_tta-panel-body p, .vc_tta-accordion .vc_tta-panel-heading, .vc_tta-tabs, .vc_tta-tabs.style-2 .vc_tta-panel-body > div, .vc_tta-tabs.style-3 .vc_tta-tab > a, .vc_tta-tabs .vc_tta-panel-heading .vc_tta-panel-title > a").css("color", t), e.find(".vc_tta-accordion .vc_tta-panel-heading, .vc_tta-accordion .vc_tta-panel, .vc_tta-accordion.vc_tta.vc_general.style-2 .vc_tta-panels, .vc_tta-tabs.style-2 .vc_tta-tabs-container .vc_tta-tab, .vc_tta-tabs.style-2 .vc_tta-tabs-container .vc_tta-tabs-list, .vc_tta-tabs.style-1 .vc_tta-tabs-list").css("border-color", i), e.find(".vc_tta-accordion.vc_tta.vc_general.style-1 .vc_tta-panel, .vc_tta-accordion.vc_tta.vc_general.style-2 .vc_tta-panel,.vc_tta-tabs.style-2 .vc_tta-panel").css("color", i)
            }),
            function() {
                g(".wpcf7").addClass("form-style");
                var e = g(".wpcf7 .form-submit .wpcf7-submit").val();
                g(".wpcf7 .form-submit .wpcf7-submit").remove(), g(".wpcf7 .form-submit").append('<button name="submit" type="submit" data-btn-text="' + e + '" class="btn piwo-header btn-outline btn-md btn-contact wpcf7-form-control wpcf7-submit" tabindex="5" id="submit"><span class="btn-text">' + e + "</span></button>"), g(".wpcf7 .piwo-input").each(function() {
                    var e = g(this);
                    e.find(".wpcf7-form-control").hasClass("wpcf7-validates-as-required") && e.addClass("input-required"), e.on("keyup", function() {
                        e.find("span").hasClass("wpcf7-not-valid-tip") && (0 < e.find("input, textarea, select").val().length ? e.find("input, textarea, select").removeClass("wpcf7-not-valid") : e.find("input, textarea, select").addClass("wpcf7-not-valid"))
                    })
                })
            }(), n(), g(".piwo-split-slider").each(function() {
                var i = g(this),
                    e = i.data("autoplay"),
                    t = i.find(".piwo-split-slider-pagination"),
                    o = i.data("mouseWheel"),
                    a = [],
                    n = [];
                i.find(".piwo-split-slide-item").each(function() {
                    var e = g(this),
                        t = e.data("bgColor"),
                        i = e.data("color");
                    a.push(t), n.push(i)
                });
                var s = i.find(".piwo-split-slide-item:nth-child(1)").data("bgColor");
                i.css("background-color", s);
                var r = i.find(".piwo-split-slide-item:nth-child(1)").data("color");
                new Swiper(i, {
                    speed: 800,
                    slidesPerView: 1,
                    autoplay: e,
                    loop: !0,
                    autoHeight: !0,
                    effect: "slide",
                    direction: "vertical",
                    grabCursor: !1,
                    mousewheelControl: o,
                    slideClass: "swiper-slide",
                    keyboardControl: !0,
                    pagination: t,
                    paginationClickable: !0,
                    autoplayDisableOnInteraction: !1,
                    nextButton: ".piwo-split-slider-arrows .arrow-next",
                    prevButton: ".piwo-split-slider-arrows .arrow-prev",
                    onSlideNextStart: function(e) {
                        var t = e.realIndex;
                        i.css("background-color", a[t]), i.find(".piwo-split-slider-pagination .swiper-pagination-bullet").css({
                            "background-color": n[t],
                            "border-color": n[t]
                        }), i.find(".piwo-split-slider-arrows .arrow").css("color", n[t]), i.find(".split-slider-btn").css("color", n[t]), i.find(".piwo-split-slide-desc").removeClass("active"), i.find(".btn-container, .btn-container .split-slider-btn").removeClass("active"), i.find(".slide-shadow-text").removeClass("active")
                    },
                    onSlidePrevStart: function(e) {
                        var t = e.realIndex;
                        i.css("background-color", a[t]), i.find(".piwo-split-slider-pagination .swiper-pagination-bullet").css({
                            "background-color": n[t],
                            "border-color": n[t]
                        }), i.find(".piwo-split-slider-arrows .arrow").css("color", n[t]), i.find(".split-slider-btn").css("color", n[t]), i.find(".piwo-split-slide-desc").removeClass("active"), i.find(".swipper-wrapper").removeClass("active"), i.find(".btn-container, .btn-container .split-slider-btn").removeClass("active"), i.find(".slide-shadow-text").removeClass("active")
                    },
                    onSlideChangeEnd: function(e) {
                        e.realIndex, i.find(".swiper-slide-active .slide-img, .swiper-slide-duplicate-active .slide-img").addClass("active"), i.find(".slide-shadow-text").addClass("active")
                    },
                    onSlideNextEnd: function(e) {
                        var t = e.realIndex;
                        i.find(".piwo-split-slide-item:not(.swiper-slide-active, .swiper-slide-duplicate-active) .slide-img").removeClass("active"), i.find(".piwo-split-slide-desc:nth-child(" + (t + 1) + ")").addClass("active"), i.find(".btn-container, .btn-container .split-slider-btn:nth-child(" + (t + 1) + ")").addClass("active")
                    },
                    onSlidePrevEnd: function(e) {
                        var t = e.realIndex;
                        i.find(".piwo-split-slide-item:not(.swiper-slide-active, .swiper-slide-duplicate-active) .slide-img").removeClass("active"), i.find(".piwo-split-slide-desc:nth-child(" + (t + 1) + ")").addClass("active"), i.find(".btn-container, .btn-container .split-slider-btn:nth-child(" + (t + 1) + ")").addClass("active")
                    },
                    onInit: function(e) {
                        e.realIndex, i.find(".swiper-slide-active .slide-img").addClass("active")
                    }
                }), i.find(".piwo-split-slider-pagination").css("color", r), i.find(".piwo-split-slider-arrows .arrow").css("color", r), i.find(".split-slider-btn").css("color", r)
            }), h(), g(".blog-masonry").each(function() {
                var e = g(this),
                    o = g(this).find(".blog-post-content"),
                    t = "masonry";
                e.hasClass("piwo-grid") && (t = "fitRows"), o.isotope({
                    itemSelector: ".post-header",
                    percentPosition: !0,
                    transitionDuration: ".4s",
                    masonry: {
                        columnWidth: ".grid-sizer"
                    },
                    layoutMode: t,
                    hiddenStyle: {
                        opacity: 0
                    },
                    visibleStyle: {
                        opacity: 1
                    }
                }), g(window).on("masonryLayout", function() {
                    o.isotope("layout")
                });
                var a = !0,
                    n = 2,
                    s = e.data("ppp"),
                    r = e.data("imgbg"),
                    l = e.data("cat"),
                    d = e.data("showCat"),
                    c = e.data("alignment"),
                    p = e.data("gridClass"),
                    w = e.data("showImg"),
                    f = e.data("style");
                g(this).find(".piwo-load-more").on("click", function(e) {
                    if (1 == a) {
                        a = !1;
                        var i = g(this);
                        e.preventDefault(), g.ajax({
                            url: rest_object.api_url + "blog/",
                            type: "POST",
                            dataType: "json",
                            data: {
                                page: n,
                                posts_per_page: s,
                                imgbg: r,
                                categories: l,
                                grid_class: p,
                                alignment: c,
                                show_img: w,
                                show_cat: d,
                                style: f
                            },
                            beforeSend: function(e) {
                                e.setRequestHeader("X-WP-Nonce", rest_object.api_nonce)
                            }
                        }).done(function(e) {
                            var t = g(e.output);
                            o.append(t).isotope("appended", t), setTimeout(function() {
                                o.isotope("layout"), window.bLazy.revalidate(), g(".post-meta:not(.loaded-post)").addClass("loaded-post")
                            }, 100), y(), !1 === e.next ? i.remove() : n = e.next, a = !0
                        }).fail(function() {
                            a = !0
                        })
                    }
                })
            }), g(".blog-masonry").each(function() {
                g(this).find(".blog-post-content").isotope({
                    itemSelector: ".post-header",
                    percentPosition: !0,
                    transitionDuration: ".4s",
                    masonry: {
                        columnWidth: ".grid-sizer"
                    },
                    hiddenStyle: {
                        opacity: 0
                    },
                    visibleStyle: {
                        opacity: 1
                    }
                })
            }), g(".blog-list, .blog-grid").each(function() {
                var e = g(this);
                if (e.hasClass("blog-list")) var o = g(this).find(".blog-post-content");
                else o = g(this).find(".blog-grid-wrapper");
                var a = !0,
                    n = 2,
                    t = e.data("ppp"),
                    s = e.data("imgbg"),
                    r = e.data("cat"),
                    l = e.data("showCat"),
                    d = e.data("alignment"),
                    c = e.data("gridClass"),
                    p = e.data("showImg"),
                    w = e.data("style");
                g(this).find(".piwo-load-more").on("click", function(e) {
                    if (1 == a) {
                        a = !1;
                        var i = g(this);
                        e.preventDefault(), g.ajax({
                            url: rest_object.api_url + "blog/",
                            type: "POST",
                            dataType: "json",
                            data: {
                                page: n,
                                posts_per_page: t,
                                imgbg: s,
                                categories: r,
                                grid_class: c,
                                alignment: d,
                                show_img: p,
                                show_cat: l,
                                style: w
                            },
                            beforeSend: function(e) {
                                e.setRequestHeader("X-WP-Nonce", rest_object.api_nonce)
                            }
                        }).done(function(e) {
                            var t = g(e.output);
                            o.append(t), setTimeout(function() {
                                window.bLazy.revalidate(), g(".post-meta:not(.loaded-post)").addClass("loaded-post")
                            }, 100), y(), !1 === e.next ? i.remove() : n = e.next, a = !0
                        }).fail(function() {
                            a = !0
                        })
                    }
                })
            }), g(".single-post-sidebar").find(".widget-title span").each(function() {
                var e = g(this),
                    t = e.text();
                e.parent().attr("data-title", t)
            }), g(".single-post-content .content .alignleft, .single-post-content .content .alignright").each(function() {
                var e = g(this),
                    t = e.width();
                e.parents(".single-post-content").hasClass("post-without-sidebar") && (1280 <= g(window).width() && t < 190 ? e.addClass("img-without-margin") : e.removeClass("img-without-margin"))
            }),
            function() {
                var e = g(".single-post >.row .post-content-wrapper").find(".post-header");
                0 < g.trim(e.html()).length ? g(".single-post >.row .post-content-wrapper").find(".post-header").addClass("background-el") : g(".single-post >.row .post-content-wrapper").find(".content >p:first-of-type()").addClass("background-el")
            }(), a(), g(".piwo-nav-burger").on("click", function() {
                g(".piwo-nav-overlay").toggleClass("piwo-overlay-open"), g(".piwo-nav-overlay").hasClass("piwo-overlay-open") ? (g("body, .fixed-nav").css("width", g("body").width()), g("body").addClass("no-scroll")) : setTimeout(function() {
                    g("body").removeClass("no-scroll"), g("body, .fixed-nav").css("width", "auto")
                }, 600), g(window).trigger("resize.vcRowBehaviour"), g(".piwo-body-overlay").toggleClass("open")
            }), g(".piwo-body-overlay").on("click", function() {
                g(".piwo-nav-overlay").removeClass("piwo-overlay-open"), g(this).removeClass("open"), setTimeout(function() {
                    g("body").removeClass("no-scroll"), g("body").css("width", "auto")
                }, 600)
            }), g(".cart-offcanvas-close, .cart-overlay").on("click", function() {
                g(".cart-offcanvas").removeClass("show-cart-offcanvas")
            }), g(".open-cart, .fixed-cart").on("click", function(e) {
                e.preventDefault(), g(".cart-offcanvas").addClass("show-cart-offcanvas")
            }), g(".piwo-nav-overlay li").each(function() {
                1 < g(this).find(">.sub-menu").length && g(this).find(">.sub-menu").not(":first").remove()
            }), g(".piwo-nav-overlay .sub-menu").prepend('<li class="overlay-back"><a href="#">Back</a></li>'), g(".piwo-nav-overlay .piwo-menu-content .main-nav > .menu li a").wrap('<div class="item-wrapper"><div class="link-wrapper"></div></div>'), g(".piwo-nav-overlay .menu-item-object-piwo_mega_menu").removeClass("menu-item-object-piwo_mega_menu").addClass("menu-item-has-children"), g(".piwo-nav-overlay .menu-item-has-children > .item-wrapper > .link-wrapper > a").after('<span class="open-dropdown">+</span>'), g(".piwo-nav-overlay").on("click", ".open-dropdown", function(e) {
                e.preventDefault();
                var t = g(this).parent(),
                    i = t.parent().width();
                g(window).height(), t.parent().parent().find(" > .sub-menu > li > .item-wrapper > .link-wrapper").css("display", "inline-block"), t.parent().parent().find(".sub-menu").height(), g(".piwo-nav-footer").height(), g(".piwo-nav-overlay").addClass("first-level"), TweenLite.to(t.parent().parent().parent().find("> li > .item-wrapper > .link-wrapper"), .4, {
                    x: -i,
                    autoAlpha: 0,
                    display: "none"
                }), g(".piwo-nav-overlay .submenu-active").removeClass("submenu-active"), t.parent().parent().find(".sub-menu").first().addClass("submenu-active"), TweenLite.set(t.parent().parent().find(".sub-menu").first().find("> li > .item-wrapper > .link-wrapper"), {
                    x: i,
                    autoAlpha: 0
                }), TweenLite.to(t.parent().parent().find(".sub-menu").first().find("> li > .item-wrapper > .link-wrapper"), .4, {
                    x: 0,
                    autoAlpha: 1,
                    onStart: function() {
                        TweenLite.to(g(".piwo-nav-overlay .main-nav"), .4, {
                            height: g(".submenu-active").height()
                        })
                    }
                }), 0 < t.parents(".menu").find("> li > .item-wrapper > .link-wrapper > .overlay-back-header").length && t.parents(".menu").find("> li > .item-wrapper > .link-wrapper > .overlay-back-header").each(function() {
                    t.prop("outerHTML")
                })
            }), g(".piwo-nav-overlay").on("click", ".overlay-back", function(e) {
                e.preventDefault(), g(".piwo-nav-overlay").addClass("first-level");
                var t = g(this),
                    i = t.width();
                g(window).height(), t.parent().height(), g(".piwo-nav-footer").height(), t.parent().css("position", "absolute"), g(".piwo-nav-overlay .submenu-active").removeClass("submenu-active"), t.parent().parent().parent().addClass("submenu-active"), TweenLite.to(t.find(".link-wrapper"), .4, {
                    x: i,
                    autoAlpha: 0,
                    display: "none"
                }), TweenLite.to(t.siblings().find(".link-wrapper"), .4, {
                    x: i,
                    autoAlpha: 0,
                    display: "none"
                }), TweenLite.set(t.parent().parent().parent().find("> li > .item-wrapper > .link-wrapper"), {
                    display: "inline-block"
                }), TweenLite.to(g(".piwo-nav-overlay .main-nav"), .4, {
                    height: g(".submenu-active").height()
                }), TweenLite.to(t.parent().parent().parent().find("> li > .item-wrapper > .link-wrapper"), .4, {
                    x: 0,
                    autoAlpha: 1
                })
            }),
            function() {
                var e = g("#comment-content .reply .btn-text").first().text();
                g("#comment-content .reply").attr("data-btn-text", e), g("#comments .comment-list").each(function() {
                    var e = g(this);
                    1 == e.find("> li.comment").length && e.find("> li.comment").addClass("first-li last-li"), e.find("> li.comment").siblings(".comment").last().addClass("last-li"), e.find("> li.comment").siblings(".comment").first().addClass("first-li"), e.prepend('<div class="border-list"></div>')
                }), g(".first-li").each(function() {
                    var e = g(this),
                        t = e.find(".comment-author-avatar").offset().top,
                        i = e.parent().offset().top;
                    e.parent().find("> .border-list").css("top", t - i)
                }), g(".last-li").each(function() {
                    var e = g(this),
                        t = e.find(".comment-author-avatar").offset().top + 60,
                        i = e.offset().top + e.height();
                    if (e.has(".comment-list").length) {
                        var o = e.find("> .comment-list > .last-li").find(".comment-author-avatar").offset().top + 30;
                        e.parent().find("> .border-list").css("bottom", i - o)
                    } else e.parent().find("> .border-list").css("bottom", i - t)
                })
            }(),
            function() {
                var e = g(".fixed-nav").data("height"),
                    t = (g("#main-navbar-home"), !1);
                g("#fixed-nav .nav").height(e), g(window).on("scroll", function() {
                    g(window).scrollTop() > e + 300 ? !1 === t && (t = !0, g("#fixed-nav").addClass("show-fixed-nav")) : !0 === t && (t = !1, g("#fixed-nav").removeClass("show-fixed-nav"))
                })
            }(), l(), g(".piwo-input").each(function() {
                var e = g(this);
                e.find("textarea").parent().find("label").addClass("label-textarea"), 0 < e.find("input, textarea, select").length && 0 < e.find("input, textarea, select").val().length && e.addClass("active-input"), e.on("focus", "input, textarea, select", function() {
                    e.addClass("active-input")
                }), e.on("blur", "input, textarea, select", function() {
                    0 === e.find("input, textarea, select").val().length ? e.removeClass("active-input") : e.addClass("active-input")
                })
            }), u(), g(window).on("resize", function() {
                u()
            }), g(".piwo-gradient-bg").each(function() {
                var e, t, i = g(this),
                    o = i.parent().data("gradientColors"),
                    a = i.parent().data("gradientOrient"),
                    n = i.parent().data("gradientOpacity"),
                    s = [],
                    r = [];
                for (e = 0, t = (o = o.split(",")).length; e < t; e += 2)
                    if (o.length >= e + 2) s.push(o.slice(e, e + 2));
                    else {
                        var l = [o[e], o[e]];
                        s.push(l)
                    }
                for (e = 1, t = o.length; e <= t; e += 1) "undefinded" == typeof n ? r = [1, 1] : r.push(n);
                new Granim({
                    element: i[0],
                    direction: a,
                    opacity: r,
                    states: {
                        "default-state": {
                            gradients: s
                        }
                    }
                })
            }), g(".piwo-full-pages").each(function() {
                var n = g(this),
                    e = n.find("> .full-column"),
                    t = n.parent().parent().siblings(".footer-row-wrapper"),
                    s = "",
                    i = [],
                    o = [];
                t.addClass("fp-auto-height"), t.find(".vc-row").addClass("footer-row"), n.parent().parent().siblings(".footer-row-wrapper").appendTo(e), n.parent().css("padding-top", "0"), n.find("> div .vc_row:not(.footer-row)").each(function(e) {
                    var t;
                    "" != (t = g(this).is("[id]") ? g(this).attr("id") : "") ? (i.push(t), g(this).removeAttr("id")) : i.push("section-" + (e + 1)), g(this).attr("data-tooltip") && (0 < g(this).data("tooltip").length ? o.push(g(this).data("tooltip")) : o.push(" "))
                }), e.fullpage({
                    navigation: !0,
                    easingcss3: "cubic-bezier(.29,.23,.13,1)",
                    scrollingSpeed: 1e3,
                    sectionSelector: ">div",
                    slideSelector: ".piwo-fp-slide",
                    anchors: i,
                    navigationTooltips: o,
                    css3: !0,
                    scrollOverflow: !0,
                    fixedElements: "#mobile-navbar-home, .mobile-nav-overlay, #mobile-burger",
                    lazyLoading: !1,
                    onLeave: function(e, t, i) {
                        var o = n.find(".fullpage-wrapper > .fp-section:nth-child(" + e + ")"),
                            a = (n.find(".fullpage-wrapper > .fp-section:nth-child(" + (e - 1) + ")"), n.find(".fullpage-wrapper > .fp-section:nth-child(" + t + ")"));
                        0 < g(this).find(".piwo-video-bg-row").length && g(this).find(".piwo-video-bg-row")[0].jarallax.video.pause(), 0 < a.find(".piwo-video-bg-row").length && a.find(".piwo-video-bg-row")[0].jarallax.video.play(), a.hasClass("footer-row-wrapper") || (TweenMax.killTweensOf(".vc_column-inner .wpb_text_column > .wpb_wrapper > *, .wpb_wrapper .animate-text > *"), "down" == i ? (o.find(".fp-tableCell").css({
                            transition: "transform 1s cubic-bezier(.29,.23,.13,1)",
                            transform: "translateY(50%)"
                        }), a.find(".row-wrapper").css({
                            transition: "transform .1s cubic-bezier(.29,.23,.13,1)",
                            transform: "translateY(-30%)"
                        }), setTimeout(function() {
                            a.find(".row-wrapper").css({
                                transition: "transform 1s cubic-bezier(.29,.23,.13,1)",
                                transform: "translateY(0%)"
                            })
                        }, 50), setTimeout(function() {
                            t != s && (o.find(".vc_column-inner .wpb_text_column > .wpb_wrapper > *, .wpb_wrapper .animate-text > *").css({
                                opacity: "0"
                            }), TweenMax.staggerFromTo(a.find(".vc_column-inner .wpb_text_column > .wpb_wrapper > *, .wpb_wrapper .animate-text > *"), 1, {
                                y: -75,
                                opacity: 0
                            }, {
                                opacity: 1,
                                y: 0,
                                ease: Power4.easeOut
                            }, .2)), o.find(".fp-tableCell").css({
                                transform: "translateY(0)",
                                transition: "transform 0s cubic-bezier(.29,.23,.13,1)"
                            }), window.bLazy.load(a.find(".b-lazy"))
                        }, 1e3)) : t !== s - 1 && (o.find(".fp-tableCell").css({
                            transform: "translateY(-50%)",
                            transition: "transform 1s cubic-bezier(.29,.23,.13,1)"
                        }), a.find(".row-wrapper").css({
                            transition: "transform .1s cubic-bezier(.29,.23,.13,1)",
                            transform: "translateY(30%)"
                        }), setTimeout(function() {
                            a.find(".row-wrapper").css({
                                transition: "transform 1s cubic-bezier(.29,.23,.13,1)",
                                transform: "translateY(0%)"
                            })
                        }, 50), setTimeout(function() {
                            o.find(".fp-tableCell").css({
                                transform: "translateY(0)",
                                transition: "transform 0s cubic-bezier(.29,.23,.13,1)"
                            }), o.find(".vc_column-inner .wpb_text_column > .wpb_wrapper > *, .wpb_wrapper .animate-text > *").css({
                                opacity: "0"
                            }), TweenMax.staggerFromTo(a.find(".vc_column-inner .wpb_text_column > .wpb_wrapper > *, .wpb_wrapper .animate-text > *"), 1, {
                                y: -75,
                                opacity: 0
                            }, {
                                opacity: 1,
                                y: 0,
                                ease: Power4.easeOut
                            }, .2), window.bLazy.load(a.find(".b-lazy"))
                        }, 1e3)))
                    },
                    afterRender: function() {
                        n.find(".fp-section:not(.footer-row-wrapper) .vc_column-inner .wpb_text_column > .wpb_wrapper > *, .fp-section:not(.footer-row-wrapper) .wpb_wrapper .animate-text > *").css("opacity", 0), n.find(".fp-section [data-aos]").removeAttr("data-aos"), (s = n.find(".fullpage-wrapper > .footer-row-wrapper").index() + 1) && g("#fp-nav").find("li:last-of-type()").remove(), 0 < g(this).find(".piwo-video-bg-row").length && n.find(".piwo-video-bg-row")[0].jarallax.video.play(), setTimeout(function() {
                            TweenMax.staggerFromTo(n.find(".fullpage-wrapper > .fp-section.active:nth-child(1) .vc_column-inner .wpb_text_column > .wpb_wrapper > *, .fullpage-wrapper > .fp-section.active:nth-child(1) .wpb_wrapper .animate-text > *"), 1, {
                                y: -75,
                                opacity: 0
                            }, {
                                opacity: 1,
                                y: 0,
                                ease: Power4.easeOut
                            }, .2)
                        }, 1e3), n.find(".fp-tableCell").each(function() {
                            g(this).find("> .vc_row-full-width, > .vc_row, .fp-scroller > .vc_row, .fp-scroller > .vc_row-full-width").wrapAll('<div class="row row-wrapper" style="height: 100%; width: 100%"><div class="columns small-12"></div></div>')
                        }), g(window).trigger("resize")
                    }
                })
            }), g(".vc_row").each(function() {
                var e = g(this),
                    t = e.data("color");
                e.find(".search-submit svg path").css("fill", t)
            }), g(window).outerHeight(), g(window).scrollTop() <= 300 ? g("#scroll-up").removeClass("show-arrow") : g("#scroll-up").addClass("show-arrow"), g(window).scroll(function() {
                g(window).scrollTop() <= 300 ? g("#scroll-up").removeClass("show-arrow") : g("#scroll-up").addClass("show-arrow")
            }), g("#scroll-up").off("click.scrollTop"), g("#scroll-up").on("click.scrollTop", function(e) {
                e.preventDefault(), TweenLite.to(window, 1.5, {
                    scrollTo: 0,
                    ease: Power4.easeOut
                })
            }), g(".nav-top .menu a, .mobile-navbar-overlay .menu-item a, .fixed-nav .menu-item a, a.btn, .slide-nav .piwo-slide-content a, .slide-to-anchor").on("click", function(e) {
                var t = g(this).attr("href"),
                    i = "#" + t.replace(/^.*?(#|$)/, "");
                if ("#" != i && i) {
                    e.preventDefault();
                    var o = window.location.href,
                        a = window.location.hash;
                    t.replace(/#[^#]*$/, ""), o.replace(/#[^#]*$/, ""), "" !== a ? t.replace(/#[^#]*$/, "") == o.replace(/#[^#]*$/, "") ? (window.history.pushState("", "", t), x(i)) : (x(i), window.location.href = t) : o === t ? x(i) : t.replace(/#[^#]*$/, "") == o.replace(/#[^#]*$/, "") ? (window.history.pushState("", "", o + i), x(i)) : (x(i), window.location.href = t)
                }
            }), v(), m(),
            function() {
                var i = "";
                g(".woocommerce.archive").on("click", ".ajax_add_to_cart", function() {
                    g(".woocommerce-message").remove();
                    var e = g(this).parents("li").find(".woocommerce-loop-product__title").html();
                    i = void 0 !== e && '<div class="woocommerce-message piwo-woo-notice"><div>' + e + " " + piwoWooCommerce.added_to_cart_message + "</div></div>"
                }), g(document).on("added_to_cart", function(e, t) {
                    0 != i && (g("#primary").prepend(i), TweenLite.to(".piwo-woo-notice", .7, {
                        opacity: 1,
                        delay: .4,
                        ease: Power4.easeOut,
                        x: 0,
                        onComplete: function() {
                            TweenLite.to(".piwo-woo-notice", .3, {
                                opacity: 0,
                                delay: 3,
                                x: "-100%"
                            })
                        }
                    })), g(".woocommerce-mini-cart__buttons > a").wrap('<div class="btn btn-woo"></div>')
                })
            }(), g(".piwo-fullscreen-links").each(function() {
                var e = g(this);
                C(e), e.find(".piwo-fullscreen-links-images ul").html(e.find(".piwo-fullscreen-links-list li.piwo-fullscreen-link-image")), e.find(".piwo-fullscreen-bg-titles ul").html(e.find(".piwo-fullscreen-links-list li.piwo-fullscreen-bg-title")), e.find(".piwo-fullscreen-bg-titles li:eq(0), .piwo-fullscreen-links-list li:eq(0), .piwo-fullscreen-links-images li:eq(0)").addClass("piwo-active"), e.on("mouseenter", ".piwo-fullscreen-links-list li", function() {
                    e.find(".piwo-fullscreen-bg-titles li, .piwo-fullscreen-links-list li, .piwo-fullscreen-links-images li").removeClass("piwo-active"), e.find(".piwo-fullscreen-bg-titles li:eq(" + g(this).index() + "), .piwo-fullscreen-links-list li:eq(" + g(this).index() + "), .piwo-fullscreen-links-images li:eq(" + g(this).index() + ")").addClass("piwo-active")
                }), g(window).on("resize", function() {
                    C(e)
                })
            }), g(".open-overlay-search").on("click", function() {
                TweenLite.to(".overlay-search", .4, {
                    autoAlpha: 1,
                    display: "flex"
                }), TweenLite.fromTo(".overlay-search form", .4, {
                    autoAlpha: 0,
                    scale: 1.5
                }, {
                    autoAlpha: 1,
                    scale: 1
                })
            }), g(".overlay-search").on("click", function(e) {
                "overlay-search" == e.toElement.className && (TweenLite.to(".overlay-search", .4, {
                    autoAlpha: 0,
                    display: "none"
                }), TweenLite.fromTo(".overlay-search form", .4, {
                    autoAlpha: 1,
                    scale: 1
                }, {
                    autoAlpha: 0,
                    scale: 1.5
                }))
            }), g("p:empty").remove(), 0 == g(".fullpage-wrapper").length && g(".bg-lines-separator").each(function() {
                var e = g(this).parents(".row")[0],
                    t = window.getComputedStyle(e, null).getPropertyValue("color");
                g(this).css("color", t)
            }), g(window).trigger("piwoRefreshLigthboxes"), g(".hover1, .hover3, .hover4").addClass("hover-not-ready"), g("select").each(function() {
                g(this)
            }), g(".wpb_wrapper .widgettitle").each(function() {
                g(this).addClass("h6")
            }), g(".post-cat-tags .post-tags a").addClass("piwo-hover-text"), g(".blog-grid .post-header").each(function() {
                0 == g(this).find(".post-content").index() && g(this).addClass("centered")
            }), g(".piwo-latest-posts.featured-latest-post").each(function() {
                g(this).find(".blog-post:not(.featured)").wrapAll('<div class="normal-posts"></div>')
            }), g(".desktop-menu .menu-item-object-piwo_mega_menu > a").on("click", function(e) {
                e.preventDefault()
            }), g(".piwo-presentation-box.style-inside").each(function() {
                var e = g(this),
                    t = e.data("height"),
                    i = e.find(".presentation-box-content").outerHeight() + 80;
                e.css("min-height", i * t)
            }), g("body").hasClass("piwo-nav-left") ? g(".desktop-menu .menu-item-has-children, .desktop-menu .menu-item-object-piwo_mega_menu").hoverIntent({
                over: s,
                out: r,
                timeout: 100
            }) : g(".desktop-menu .menu-item-has-children, .desktop-menu .menu-item-object-piwo_mega_menu").hoverIntent({
                over: s,
                out: r,
                timeout: 300
            }), g(".desktop-menu > .menu-item-has-children, .desktop-menu .menu-item-object-piwo_mega_menu").addClass("first-level"), g(document).on("click", "#place_order", function() {
                g("form.woocommerce-checkout .validate-required input, form.woocommerce-checkout .validate-required select, form.woocommerce-checkout .validate-required textarea").each(function() {
                    var e = g(this);
                    0 == e.val().length && e.parent().addClass("piwo-invalid")
                })
            }), g(".n-form").each(function() {
                g(this).on("submit", function(e) {
                    e.preventDefault(),
                        function(t) {
                            g.ajax({
                                url: rest_object.api_url + "email/",
                                type: "POST",
                                dataType: "json",
                                data: t.serialize(),
                                beforeSend: function(e) {
                                    e.setRequestHeader("X-WP-Nonce", rest_object.api_nonce)
                                }
                            }).done(function(e) {
                                "success" === e.status ? (t.addClass("newsletter-success"), t.find(".n-text input").val(""), t.find(".n-text input").removeClass("active-input"), t.find(".n-text .clear-input").removeClass("clear-input"), setTimeout(function() {
                                    t.removeClass("newsletter-success")
                                }, 3e3)) : "error" === e.status && t.addClass("newsletter-error")
                            }).fail(function() {})
                        }(g(this)), g(this).removeClass("newsletter-error")
                })
            })
    }), window.onresize = function() {
        document.body.height = window.innerHeight;
        var e = document.body.height - g("#mobile-navbar-home").height();
        g(window).width() < 1024 && (g(".piwo-split-slider-container .piwo-split-slider").css("height", e), g(".piwo-split-slider-container .slide").css("height", e - 60))
    }, window.onresize(), g(window).on("resize", function() {
        a(), n(), v(), g(".piwo-coverflow-slider").each(function() {
            var e = g(this),
                t = e.find(".swiper-slide-active").width() + 120;
            e.find(".slide-text-container").width(t)
        }), clearTimeout(p), p = setTimeout(function() {
            f()
        }, 100)
    }), g(document).on("added_to_cart", function() {
        setTimeout(function() {
            g(".added_to_cart").addClass("btn btn-woo").css("display", "block").wrapInner('<span class="btn-text"></span>')
        }, 1)
    }), g("input#place_order").after('<button type="submit">SUBMIT</button>'), g("body.woocommerce-cart .checkout-button").removeClass("button").addClass("btn btn-woo"), g("body.single-product .button").removeClass("button").addClass("btn btn-woo"), g(window).on("piwoRefreshLigthboxes", function() {
        g(".piwo_video_lightbox:not(.mfg-ready)").each(function() {
            g(this).addClass("mfg-ready"), g(this).magnificPopup({
                disableOn: 0,
                type: "iframe",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: !1
            })
        }), g(".gallery:not(.mfg-ready)").each(function() {
            g(this).addClass("mfg-ready"), g(this).magnificPopup({
                disableOn: 0,
                delegate: "a",
                type: "image",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: !1,
                gallery: {
                    enabled: !0
                }
            })
        }), g(".piwo-gallery-element:not(.mfg-ready)").each(function() {
            g(this).addClass("mfg-ready"), g(this).magnificPopup({
                disableOn: 0,
                delegate: "a",
                type: "image",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: !1,
                gallery: {
                    enabled: !0
                }
            })
        }), g(".single-image-lightbox:not(.mfg-ready)").each(function() {
            g(this).addClass("mfg-ready"), g(this).magnificPopup({
                disableOn: 0,
                type: "image",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: !1
            })
        }), g(".gallery-lightbox:not(.mfg-ready)").each(function() {
            g(this).addClass("mfg-ready"), g(this).magnificPopup({
                delegate: "a",
                disableOn: 0,
                type: "image",
                mainClass: "mfp-fade",
                removalDelay: 300,
                preloader: !1,
                gallery: {
                    enabled: !0,
                    navigateByImgClick: !0,
                    preload: [0, 1]
                }
            })
        }), g(".video-link").magnificPopup({
            type: "iframe",
            disableOn: 0,
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: !1
        }), g(".images-cascade.lightbox").each(function() {
            g(this).magnificPopup({
                delegate: "a",
                type: "image",
                gallery: {
                    enabled: !0
                },
                disableOn: 0,
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: !1
            })
        })
    }), g(".bg-lines-separator").each(function(t, e) {
        t = g(this)[0];
        var i = g(this).offset().top + g(this).height() / 2;
        g(window).on("scroll", function() {
            var e = 0;
            (e = -1 * (g(window).scrollTop() + g(window).height() / 2 - i) * .5) < -100 && (e = -100), TweenMax.to(t, 3, {
                ease: Power4.easeOut,
                y: e
            })
        })
    }), g(".demo-selector .image-wrapper").each(function() {
        var e = g(this);
        e.find("img").wrap('<div class="fake-browser-ui"></div>'), e.find(".fake-browser-ui").prepend('<div class="frame"><span></span><span></span><span></span></div>')
    });
    var T = 1;

    g(".piwo-portfolio-masonry").each(function() {
        var i;
        g(this).hasClass("piwo-2-col") ? i = 2 : g(this).hasClass("piwo-3-col") ? i = 3 : g(this).hasClass("piwo-4-col") ? i = 4 : g(this).hasClass("piwo-5-col") ? i = 5 : g(this).hasClass("piwo-6-col") && (i = 6), g(this).find("article > div").each(function(e, t) {
            g(t).attr("data-aos-delay", 100 * T), i < ++T && (T = 1)
        })
    }), g(".page-id-27 .cont-query").hide(), g(".page-id-27 .cont-post_all").fadeIn(), g(".page-id-27 .grdnt-btn").on("click", function(e) {
        e.preventDefault();
        var t = g(this).data("slug");
        g(".page-id-27 .grdnt-btn").removeClass("active"), g(".page-id-27 .cont_query").hide(), g(".page-id-27 .cont-post_" + t).fadeIn(400), g(this).addClass("active")
    }), g(".page-id-27 .cont-query").hide(0), g(".page-id-27 .cont-post_all").fadeIn(0), g(".page-id-27 .grdnt-btn").on("click", function(e) {
        e.preventDefault();
        var t = g(this).data("slug");
        g(".page-id-27 .grdnt-btn").removeClass("active"), g(".page-id-27 .cont-query").hide(0), g(".page-id-27 .cont-post_" + t).fadeIn(0), g(this).addClass("active")
    }),
        g(".page-id-33 .cont-query").hide(), g(".page-id-33 .cont-post_all").fadeIn(), g(".page-id-33 .grdnt-btn").on("click", function(e) {
        e.preventDefault();
        var t = g(this).data("slug");
        g(".page-id-33 .grdnt-btn").removeClass("active"), g(".page-id-33 .cont_query").hide(), g(".page-id-33 .cont-post_" + t).fadeIn(400), g(this).addClass("active")
    }), g(".page-id-33 .cont-query").hide(0), g(".page-id-33 .cont-post_all").fadeIn(0), g(".page-id-33 .grdnt-btn").on("click", function(e) {
        e.preventDefault();
        var t = g(this).data("slug");
        g(".page-id-33 .grdnt-btn").removeClass("active"), g(".page-id-33 .cont-query").hide(0), g(".page-id-33 .cont-post_" + t).fadeIn(0), g(this).addClass("active")
    }),g(".page-id-798 .cont-query").hide(), g(".page-id-798 .cont-post_all").fadeIn(), g(".page-id-798 .grdnt-btn").on("click", function(e) {
        e.preventDefault();
        var t = g(this).data("slug");
        g(".page-id-798 .grdnt-btn").removeClass("active"), g(".page-id-798 .cont_query").hide(), g(".page-id-798 .cont-post_" + t).fadeIn(400), g(this).addClass("active")
    }), g(".page-id-798 .cont-query").hide(0), g(".page-id-798 .cont-post_all").fadeIn(0), g(".page-id-798 .grdnt-btn").on("click", function(e) {
        e.preventDefault();
        var t = g(this).data("slug");
        g(".page-id-798 .grdnt-btn").removeClass("active"), g(".page-id-798 .cont-query").hide(0), g(".page-id-798 .cont-post_" + t).fadeIn(0), g(this).addClass("active")
    }),
        g(".page-id-52974 .cont-query").hide(), g(".page-id-52974 .cont-post_all").fadeIn(), g(".page-id-52974 .grdnt-btn").on("click", function(e) {
        e.preventDefault();
        var t = g(this).data("slug");
        g(".page-id-52974 .grdnt-btn").removeClass("active"), g(".page-id-52974 .cont_query").hide(), g(".page-id-52974 .cont-post_" + t).fadeIn(400), g(this).addClass("active")
    }), g(".page-id-52974 .cont-query").hide(0), g(".page-id-52974 .cont-post_all").fadeIn(0), g(".page-id-52974 .grdnt-btn").on("click", function(e) {
        e.preventDefault();
        var t = g(this).data("slug");
        g(".page-id-52974 .grdnt-btn").removeClass("active"), g(".page-id-52974 .cont-query").hide(0), g(".page-id-52974 .cont-post_" + t).fadeIn(0), g(this).addClass("active")
    })


}(jQuery);








(function($){

 $(".page-id-37 .grdnt-btn").on("click", function(e) { // When btn is pressed.

    
console.log("alvert");

    $(".cont-btn-digital .btn").removeClass('active'); 

    $(this).addClass('active');

    e.preventDefault();

    var catID = $(this).data('id');
   // var catID2 = $(this).attr("data-id");


    $(".btn_view_more").data('id', catID);
    $(".btn_view_more").attr('data-id', catID);

    $(".btn_view_more").text('View More →');

 

    $.ajax({
      type: 'POST',
      url: ajaxurl,
      crossDomain: true,
      dataType: 'html',
      data: {
        "action": "load-filter",
        cat: catID
      },
   
      afterSend: function() {
          
      },
      success: function(data) {


        if (data != 0) {
          $(".cont-query .row").html(data);


        } else {
          $(".cont-query .row  ").text("No more results");
        }
      },
      complete: function(data) {


      }

    });


  });








$(".page-id-37 .grdnt-btn-all").on("click", function(e) { // When btn is pressed.


$(".btn_view_more_static").fadeIn(0);

$(".btn_view_more").text('View More →');
$(".btn_view_more_static").text('View More →');

     $(".digital-filter-btn .btn").removeClass('active'); 

     $(this).addClass('active');
    
    Voffset = 0;
 
    e.preventDefault();
 
    var catID = $(this).data('id');
 
    $.ajax({
      type: 'POST',
      url: ajaxurl,
      crossDomain: true,
      dataType: 'html',
      data: {
        "action": "load-filter-all",
        cat: catID,
        offset: Voffset
      },
  
      afterSend: function() {
        
      },
      success: function(data) {
        if (data != 0) {
          $(".cont-query .row").html(data);
        } else {
          $(".cont-query .row  ").text("No more results");
        }
      },
      complete: function(data) {
    


      }
    });



  });






$(".page-id-37 .btn_view_more").on("click", function(e) { // When btn is pressed.

console.log("Hello world!");


    var Voffset = $(this).parent().parent().parent().find(".blog-post").length;



    e.preventDefault();

    var catID = $(this).data('id');



    $.ajax({
      type: 'POST',
      url: ajaxurl,
      crossDomain: true,
      dataType: 'html',
      data: {
        "action": "load-filter-all",
        cat: catID,
        offset: Voffset
      },
     
      afterSend: function() {

   
        
      },
      success: function(data) {





        if (data != 0) {
          $("#continue").before(data);
        } else {
          $(".btn_view_more").text("No more results");
        }
      },
      complete: function(data) {
        

          $('.content-digital').each(function() {
          var sequenceDelay = 0;
          $(this).find('.post-ajax').each(function() {
            sr.reveal(this, {
              delay: sequenceDelay
            });

            sequenceDelay += sequenceInterval;
          });
        });



      }
    });



  });


  })(jQuery);



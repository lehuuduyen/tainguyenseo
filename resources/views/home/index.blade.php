@extends('layouts.app-master')

@section('content')
<html lang="en" class="is-mobile-first">

<head>
    <style>
        .select2-container .select2-selection--single {
            border: none !important;
        }

        .padding-top-bottom {
            padding-top: 13px !important;
            padding-bottom: 12px !important;
        }
        select {
    border: none;
    /* Optionally, you can also remove the outline */
    outline: none;
    background-color: #F0F0F0;

}

option {
    /* For some browsers, like Chrome, you might need to explicitly set border to none for options */
    border: none;
}
.tag::after {
    content: "" !important;
    display: inline-block;
    margin-left: 8px;
}  
.tag{
    background-color: azure;
    border: 1px solid;
    padding: 5px;
}    
    </style>

    <!-- Critical path meta tags only -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Jobs and Contests | Freelancer</title>
    <link rel="preconnect" href="//www.f-cdn.com" crossorigin="">
    <!-- <link rel="dns-prefetch" href="style.css"> -->
    <link rel="dns-prefetch" href="//cdn3.f-cdn.com">
    <link rel="dns-prefetch" href="//cdn4.f-cdn.com">
    <link rel="dns-prefetch" href="//cdn6.f-cdn.com">


    <!-- Google Experiment. ga_exp.js is special, don't include any script in the head! -->


    <!-- Font face handling for an FOFT rendering approach -->


    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&amp;display=swap"
        rel="stylesheet" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
    <script>
        (function () {
            (function () {
                'use strict'; var f, g = []; function l(a) { g.push(a); 1 == g.length && f() } function m() { for (; g.length;)g[0](), g.shift() } f = function () { setTimeout(m) }; function n(a) { this.a = p; this.b = void 0; this.f = []; var b = this; try { a(function (a) { q(b, a) }, function (a) { r(b, a) }) } catch (c) { r(b, c) } } var p = 2; function t(a) { return new n(function (b, c) { c(a) }) } function u(a) { return new n(function (b) { b(a) }) } function q(a, b) { if (a.a == p) { if (b == a) throw new TypeError; var c = !1; try { var d = b && b.then; if (null != b && "object" == typeof b && "function" == typeof d) { d.call(b, function (b) { c || q(a, b); c = !0 }, function (b) { c || r(a, b); c = !0 }); return } } catch (e) { c || r(a, e); return } a.a = 0; a.b = b; v(a) } }
                function r(a, b) { if (a.a == p) { if (b == a) throw new TypeError; a.a = 1; a.b = b; v(a) } } function v(a) { l(function () { if (a.a != p) for (; a.f.length;) { var b = a.f.shift(), c = b[0], d = b[1], e = b[2], b = b[3]; try { 0 == a.a ? "function" == typeof c ? e(c.call(void 0, a.b)) : e(a.b) : 1 == a.a && ("function" == typeof d ? e(d.call(void 0, a.b)) : b(a.b)) } catch (h) { b(h) } } }) } n.prototype.g = function (a) { return this.c(void 0, a) }; n.prototype.c = function (a, b) { var c = this; return new n(function (d, e) { c.f.push([a, b, d, e]); v(c) }) };
                function w(a) { return new n(function (b, c) { function d(c) { return function (d) { h[c] = d; e += 1; e == a.length && b(h) } } var e = 0, h = []; 0 == a.length && b(h); for (var k = 0; k < a.length; k += 1)u(a[k]).c(d(k), c) }) } function x(a) { return new n(function (b, c) { for (var d = 0; d < a.length; d += 1)u(a[d]).c(b, c) }) }; window.Promise || (window.Promise = n, window.Promise.resolve = u, window.Promise.reject = t, window.Promise.race = x, window.Promise.all = w, window.Promise.prototype.then = n.prototype.c, window.Promise.prototype["catch"] = n.prototype.g);
            }());

            (function () {
                function m(a, b) { document.addEventListener ? a.addEventListener("scroll", b, !1) : a.attachEvent("scroll", b) } function n(a) { document.body ? a() : document.addEventListener ? document.addEventListener("DOMContentLoaded", function c() { document.removeEventListener("DOMContentLoaded", c); a() }) : document.attachEvent("onreadystatechange", function l() { if ("interactive" == document.readyState || "complete" == document.readyState) document.detachEvent("onreadystatechange", l), a() }) }; function t(a) {
                    this.a = document.createElement("div"); this.a.setAttribute("aria-hidden", "true"); this.a.appendChild(document.createTextNode(a)); this.b = document.createElement("span"); this.c = document.createElement("span"); this.h = document.createElement("span"); this.f = document.createElement("span"); this.g = -1; this.b.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;"; this.c.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
                    this.f.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;"; this.h.style.cssText = "display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;"; this.b.appendChild(this.h); this.c.appendChild(this.f); this.a.appendChild(this.b); this.a.appendChild(this.c)
                }
                function x(a, b) { a.a.style.cssText = "max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;left:-999px;white-space:nowrap;font:" + b + ";" } function y(a) { var b = a.a.offsetWidth, c = b + 100; a.f.style.width = c + "px"; a.c.scrollLeft = c; a.b.scrollLeft = a.b.scrollWidth + 100; return a.g !== b ? (a.g = b, !0) : !1 } function z(a, b) { function c() { var a = l; y(a) && a.a.parentNode && b(a.g) } var l = a; m(a.b, c); m(a.c, c); y(a) }; function A(a, b) { var c = b || {}; this.family = a; this.style = c.style || "normal"; this.weight = c.weight || "normal"; this.stretch = c.stretch || "normal" } var B = null, C = null, E = null, F = null; function I() { if (null === E) { var a = document.createElement("div"); try { a.style.font = "condensed 100px sans-serif" } catch (b) { } E = "" !== a.style.font } return E } function J(a, b) { return [a.style, a.weight, I() ? a.stretch : "", "100px", b].join(" ") }
                A.prototype.load = function (a, b) {
                    var c = this, l = a || "BESbswy", r = 0, D = b || 3E3, G = (new Date).getTime(); return new Promise(function (a, b) {
                        var e; null === F && (F = !!document.fonts); if (e = F) null === C && (C = /OS X.*Version\/10\..*Safari/.test(navigator.userAgent) && /Apple/.test(navigator.vendor)), e = !C; if (e) {
                            e = new Promise(function (a, b) { function f() { (new Date).getTime() - G >= D ? b() : document.fonts.load(J(c, '"' + c.family + '"'), l).then(function (c) { 1 <= c.length ? a() : setTimeout(f, 25) }, function () { b() }) } f() }); var K = new Promise(function (a,
                                c) { r = setTimeout(c, D) }); Promise.race([K, e]).then(function () { clearTimeout(r); a(c) }, function () { b(c) })
                        } else n(function () {
                            function e() { var b; if (b = -1 != g && -1 != h || -1 != g && -1 != k || -1 != h && -1 != k) (b = g != h && g != k && h != k) || (null === B && (b = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent), B = !!b && (536 > parseInt(b[1], 10) || 536 === parseInt(b[1], 10) && 11 >= parseInt(b[2], 10))), b = B && (g == u && h == u && k == u || g == v && h == v && k == v || g == w && h == w && k == w)), b = !b; b && (d.parentNode && d.parentNode.removeChild(d), clearTimeout(r), a(c)) }
                            function H() { if ((new Date).getTime() - G >= D) d.parentNode && d.parentNode.removeChild(d), b(c); else { var a = document.hidden; if (!0 === a || void 0 === a) g = f.a.offsetWidth, h = p.a.offsetWidth, k = q.a.offsetWidth, e(); r = setTimeout(H, 50) } } var f = new t(l), p = new t(l), q = new t(l), g = -1, h = -1, k = -1, u = -1, v = -1, w = -1, d = document.createElement("div"); d.dir = "ltr"; x(f, J(c, "sans-serif")); x(p, J(c, "serif")); x(q, J(c, "monospace")); d.appendChild(f.a); d.appendChild(p.a); d.appendChild(q.a); document.body.appendChild(d); u = f.a.offsetWidth; v = p.a.offsetWidth;
                            w = q.a.offsetWidth; H(); z(f, function (a) { g = a; e() }); x(f, J(c, '"' + c.family + '",sans-serif')); z(p, function (a) { h = a; e() }); x(p, J(c, '"' + c.family + '",serif')); z(q, function (a) { k = a; e() }); x(q, J(c, '"' + c.family + '",monospace'))
                        })
                    })
                }; "undefined" !== typeof module ? module.exports = A : (window.FontFaceObserver = A, window.FontFaceObserver.prototype.load = A.prototype.load);
            }());

            var root = document.documentElement;
            root.classList.add('is-webfont-not-loaded');
            var fontSubset = new FontFaceObserver('RobotoSubset');
            var fontNormal = new FontFaceObserver('Roboto');
            var fontBold = new FontFaceObserver('Roboto', { weight: 700 });
            var fontItalic = new FontFaceObserver('Roboto', { style: 'italic' });
            fontSubset.load(null, 10000).then(function () {
                root.classList.remove('is-webfont-not-loaded');
                root.classList.add('is-webfont-subset');
                Promise.all([fontNormal.load(null, 30000), fontBold.load(null, 30000), fontItalic.load(null, 30000)])
                    .then(function () {
                        root.classList.remove('is-webfont-subset');
                    });
            });

            let url = new URL(window.location.href);
            url.searchParams.delete('ngsw-bypass');
            url.searchParams.delete('w');
            url.searchParams.delete('redirect-times');
            window.history.replaceState(null, document.title, url.pathname + url.search + url.hash);
        })();
    </script>


    <!-- FIXME: all these globals should be replaced by server-data -->
    <script>
        window._t = [];
        window._lt = [];
        window._ttref = [];
        _ttref.push(['_setCookie']);
    </script>

    <style>
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak {
            display: none !important;
        }
    </style>


    <!-- Critical CSS -->

    <script>
        function onStylesheetLoad(linkEl) {
            function listener() {
                if (/^(?:interactive|complete)$/.test(document.readyState)) {
                    document.removeEventListener('DOMContentLoaded', listener);
                    linkEl.rel = 'stylesheet';
                }
            };
            document.addEventListener('DOMContentLoaded', listener);
            listener();
        }
    </script>

    <link rel="stylesheet" href="https://www.f-cdn.com/assets/css/flux/base-8fdbe1a7.css" as="style"
        onload="onStylesheetLoad(this)">
    <link rel="stylesheet" href="https://www.f-cdn.com/assets/compat/en/styles.4576d7b71d2c78c7.css" as="style"
        onload="onStylesheetLoad(this)">

    <link rel="stylesheet" href="https://www.f-cdn.com/assets/css/flux/layout/PageJobs-9d096dbf.css" as="style"
        onload="onStylesheetLoad(this)">
    <link rel="stylesheet" href="https://www.f-cdn.com/assets/compat/en/styles.4576d7b71d2c78c7.css" as="style"
        onload="onStylesheetLoad(this)">

    <noscript>

        <link href="https://www.f-cdn.com/assets/css/flux/base-8fdbe1a7.css" type="text/css" rel="stylesheet" />

        <link href="https://www.f-cdn.com/assets/css/flux/layout/PageJobs-9d096dbf.css" type="text/css"
            rel="stylesheet" />

        <link rel="stylesheet" href="https://www.f-cdn.com/assets/compat/en/styles.4576d7b71d2c78c7.css">
    </noscript>





    <meta name="description" content="Browse jobs and contests on Freelancer. Find programming, web development,
design, writing, data entry jobs and many more. Page - 1">


    <meta property="og:title" content=" Jobs, Employment | Freelancer">
    <meta property="og:description" content="Browse jobs and contests on Freelancer. Find programming, web development,
design, writing, data entry jobs and many more. Page - 1">

    <meta property="og:image"
        content="https://www.f-cdn.com/assets/img/facebook/share-make-it-real-thumbnail-1200x630-221e3b45.jpg">


    <link rel="canonical" href="https://www.freelancer.com/jobs">
    <meta name="robots" content="index, follow">



    <meta name="robots" content="noodp">
    <meta name="verify-v1" content="TTmFSxUJxXuHsKl9kPGeYetHBfsjnO7s87WxaAha8NE=">
    <meta name="verify-v1" content="9ejzgFxg7wuxHdyyiqmdTe3JQgBUfIVvdJiXlVRHkEw=">

    <meta name="alexaVerifyID" content="lOECm39vgYv4N9PwoW6nsSSLiUw">
    <meta name="y_key" content="145378928393bc8d">
    <meta name="msvalidate.01" content="756854B52F963132E377E441F92F1136">
    <meta property="fb:admins" content="100000662403967">


    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.freelancer.com/jobs">




    <link href="https://www.freelancer.com/rss.xml" rel="alternate" type="application/rss+xml" title="Latest projects">


    <link itemprop="sameAs" href="http://en.wikipedia.org/wiki/Freelancer.com">



    <link rel="icon" href="https://www.freelancer.com/favicon.ico" type="image/ico">
    <link rel="shortcut icon" href="https://www.freelancer.com/favicon.ico">







    <!-- <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Organization",
        "name": "Freelancer",
        "url": "http://www.freelancer.com/",
        "logo": "http://www.freelancer.com/static/css/images/logo.jpg",
        "sameAs" : [
        "https://twitter.com/freelancer",
        "https://www.facebook.com/fansoffreelancer",
        "https://www.linkedin.com/company/freelancer-com",
        "https://instagram.com/freelancerofficial"
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "Freelancer",
        "url": "https://www.freelancer.com"
    }
    </script> -->

    <style type="text/css"></style>
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/angular-07d26f0b.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/angular-sanitize-eab366c5.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/angular-route-850ff20f.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/jquery-6798c358.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/angular-resource-7ba99b3f.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/angular-messages-378c068a.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/jquery-6798c358.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/google-maps-0288be4e.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/fuse.js-c2d87d65.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/jquery-6798c358.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/jquery-6798c358.js">
    <link rel="preload" as="script" href="https://www.f-cdn.com/assets/bundles/jquery-6798c358.js">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script async="" src="https://static.hotjar.com/c/hotjar-1223449.js?sv=6"></script>

    <script async="" src="https://script.hotjar.com/modules.429236d560f51d186b8b.js" charset="utf-8"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/56/8/common.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/56/8/util.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/56/8/controls.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/56/8/places_impl.js"></script>

    <style>

    </style>
    <style>

    </style>



    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body data-role="page" style="" cz-shortcut-listen="true">
    <!-- Webapp compat loader. Dynamically load & bootstrap webapp Angular
    components onto server-side pages. Yes, it's awesome -->
    <script>
        window.webappCompat = {};
        window.webappCompat['seo-navbar'] = {};
        window.webappCompat['accessibility'] = {};
        window.webappCompat['tracking'] = {};
        window.webappCompat['toast-alerts'] = {};
        window.webappCompat['modals'] = {};
        window.webappCompat['abtest'] = {};
        window.webappCompat['threatmetrix'] = {};
        window.webappCompat['give-get-footer'] = {};
    </script>

    

   
    <div class="pinky-template">
        <main id="main" class="main-content">

            <header class="SectionHero SectionHero--compact PageJobs-sectionHero">
                <div class="Container">
                    <div class="Grid Grid--verticalCenter">
                        <div class="Grid-col Grid-col--12 Grid-col--desktopSmall-6 Grid-col--desktopLarge-7">
                            <h1 class="SectionHero-heading PageJobs-sectionHero-heading" id="job-hero-location-title">
                                Top Seo
                            </h1>
                        </div>

                        <div
                            class="Grid-col Grid-col--12 Grid-col--desktopSmall-6 Grid-col--desktopLarge-5 PageJobs-sectionHero-ctas">
                            <a href="/post-project" class="btn btn-primary PageJobs-sectionHero-cta">Tôi muốn Bán</a>

                            <a href="/signup" rel="nofollow" class="btn btn-plain-alt PageJobs-sectionHero-cta">Tôi muốn
                                Mua</a>

                        </div>
                    </div>
                </div>
            </header>

            <section class="PageJobs-container">
                <div class="PageJobs-breadCrumb Container">
                    <nav class="Breadcrumbs">
                        <ul itemscope="" itemtype="https://schema.org/BreadcrumbList" class="Breadcrumbs-list">
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"
                                class="Breadcrumbs-item">
                                <a itemprop="item" href="https://www.freelancer.com" class="Breadcrumbs-link">
                                    <span itemprop="name">Tài nguyên</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>

                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"
                                id="breadcrumb-search-page" class="Breadcrumbs-link--last">
                                <span itemprop="name"> <select name="" id="" >
                                    <option>Get link</option>
                                    <option>Get link</option>
                                </select>  </span>
                                <meta itemprop="position" content="4">
                            </li>
                            
                        </ul>
                    </nav>

                </div>
                <div class="PageJobs-breadCrumb  Container">
                    <nav class="Breadcrumbs">
                        <ul itemscope="" itemtype="https://schema.org/BreadcrumbList" class="Breadcrumbs-list">
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"
                                class="Breadcrumbs-item tag">
                                <a itemprop="item" href="https://www.freelancer.com" class="Breadcrumbs-link">
                                    <span itemprop="name">BackLink</span>
                                </a>
                            </li>

                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"
                                class="Breadcrumbs-item tag">
                                <a itemprop="item" href="https://www.freelancer.com" class="Breadcrumbs-link">
                                    <span itemprop="name">Guest Post</span>
                                </a>
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"
                                class="Breadcrumbs-item tag">
                                <a itemprop="item" href="https://www.freelancer.com" class="Breadcrumbs-link">
                                    <span itemprop="name">Intity</span>
                                </a>
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"
                                class="Breadcrumbs-item tag">
                                <a itemprop="item" href="https://www.freelancer.com" class="Breadcrumbs-link">
                                    <span itemprop="name">Banner</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>

                <div class="Container">
                    <form id="search-form" class="ProjectSearch-searchField">
                        <div class="InputCombo InputCombo--highlighted ProjectSearch-searchField-search"
                            id="location-form">
                            <div class="InputCombo-inner ProjectSearch-searchField-combo">
                                <div
                                    class="ProjectSearch-searchField-item ProjectSearch-searchField-item--keyword ProjectSearch-searchField-divider">
                                    <span class="InputCombo-icon Icon Icon--mid">
                                        <svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M21.71 20.29l-5.4-5.39a8 8 0 0 0-12-10.56 8 8 0 0 0 10.56 12l5.39 5.39 1.41-1.41zM10 16a6 6 0 1 1 4.24-1.76A6 6 0 0 1 10 16z">
                                            </path>
                                        </svg>

                                    </span>
                                    <label id="search-label" for="keyword-input" class="is-accessibly-hidden">
                                        Tìm kiếm tài nguyên
                                    </label>
                                    <input id="keyword-input" class="InputCombo-input xlarge-input" type="search"
                                        name="search_keyword" placeholder="Tìm kiếm tài nguyên"
                                        aria-controls="search-form-error" data-uitest-target="input-keyword" value="">
                                </div>
                                <div
                                    class="ProjectSearch-searchField-item ProjectSearch-searchField-item--onlineSearch">
                                    <span class="InputCombo-icon Icon Icon--mid">

                                        <svg class="Icon-image" fill="#d6d6d6" viewBox="0 0 35 35" data-name="Layer 2"
                                            id="Layer_2" xmlns="http://www.w3.org/2000/svg" stroke="#d6d6d6">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M17.5,34.75A17.25,17.25,0,1,1,34.75,17.5,17.27,17.27,0,0,1,17.5,34.75Zm0-32A14.75,14.75,0,1,0,32.25,17.5,14.77,14.77,0,0,0,17.5,2.75Z">
                                                </path>
                                                <path
                                                    d="M33.5,18.75H2.25a1.25,1.25,0,0,1,0-2.5H33.5a1.25,1.25,0,0,1,0,2.5Z">
                                                </path>
                                                <path
                                                    d="M17.5,33.9c-4.86,0-8.66-7.2-8.66-16.4S12.64,1.1,17.5,1.1s8.66,7.2,8.66,16.4S22.36,33.9,17.5,33.9Zm0-30.3c-2.91,0-6.16,5.71-6.16,13.9s3.25,13.9,6.16,13.9,6.16-5.71,6.16-13.9S20.41,3.6,17.5,3.6Z">
                                                </path>
                                            </g>
                                        </svg>

                                    </span>
                                    <label id="location-label" for="location-input" class="is-accessibly-hidden">
                                        Where ?
                                    </label>

                                    <select
                                        class="InputCombo-input xlarge-input pac-target-input js-example-basic-single"
                                        style="border: none;" name="state">
                                        <option value="AL">Guest Post</option>
                                        <option value="WY">Banner</option>
                                        <option value="WY">Intity</option>
                                        <option value="WY">Backlink</option>
                                        <option value="WY">Content/Design</option>
                                    </select>
                                </div>
                            </div>

                            <button id="search-submit"
                                class="InputCombo-btn btn btn-xlarge btn-info ProjectSearch-searchField-button"
                                aria-label="search">
                                Tìm kiếm
                            </button>
                        </div>

                    </form>

                </div>
                <div class="ProjectSearch-filterandresults Container fl-form">
                    <div class="Grid">
                        <div class="Grid-col Grid-col--desktopSmall-3">
                            <div class="ProjectSearch-filter Card">
                                <div class="SectionJobFilter">
                                    <div id="filter-panel" class="SectionJobFilter-inner">
                                        <div class="SectionJobFilter-content">
                                            <div class="SectionJobFilter-header">
                                                <h3 class="SectionJobFilter-header-heading">Filter</h3>
                                                <a href="#" id="filter-close-btn" class="SectionJobFilter-header-link">
                                                    <span class="Icon Icon--small"><svg class="Icon-image"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M20.707 4.707l-1.414-1.414L12 10.586 4.707 3.293 3.293 4.707 10.586 12l-7.293 7.293 1.414 1.414L12 13.414l7.293 7.293 1.414-1.414L13.414 12">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="SectionJobFilter-sectionList">

                                                <div class="SectionJobFilter-section">
                                                    <h5 class="SectionJobFilter-mainHeading">Tìm kiếm theo:</h5>
                                                    <h5 class="SectionJobFilter-heading">Ngân sách</h5>
                                                    <div class="SectionJobFilter-sliderItem">

                                                        <div class="Grid Grid--verticalCenter">
                                                            <div class="Grid-col Grid-col--5">
                                                                <input id="fixed-min" class="default-input"
                                                                    placeholder="min">
                                                            </div>
                                                            <div
                                                                class="Grid-col Grid-col--2 SectionJobFilter-sliderItem-label">
                                                                tới
                                                            </div>
                                                            <div class="Grid-col Grid-col--5">
                                                                <input id="fixed-max" class="default-input"
                                                                    placeholder="max">
                                                            </div>
                                                        </div>
                                                        <div id="fixed-error"
                                                            class="SectionJobFilter-alert alert alert-warning is-hidden">
                                                        </div>
                                                    </div>


                                                </div>



                                                <!-- Static Load Skills, Languages -->


                                            </div>
                                            <div class="SectionJobFilter-footer">
                                                <a id="filter-close-link"
                                                    class="btn btn-large btn-info SectionJobFilter-footer-btn"
                                                    aria-label="search">
                                                    Apply Filter </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="Grid-col Grid-col--desktopSmall-9">
                            <div class="ProjectSearch-result Card">
                                <div class="ProjectSearch-header">
                                    <div class="ProjectSearch-header-sort">
                                        <select id="table-sort-select"
                                            class="default-select SectionJobFilter-header-select">
                                            <option value="[6,&quot;desc&quot;,&quot;newest&quot;]" selected="">Tin mới
                                                nhất</option>
                                            <option value="[9,&quot;asc&quot;,&quot;budget_min&quot;]">Giá thấp nhất
                                            </option>
                                            <option value="[9,&quot;desc&quot;,&quot;budget_max&quot;]">Giá cao nhất
                                            </option>

                                        </select>
                                    </div>
                                    <div class="ProjectSearch-header-info">
                                        <span id="total-results">5,000</span>
                                        <span id="keyword-results"></span> jobs found, pricing in USD
                                    </div>
                                    <div id="filter-btn" class="ProjectSearch-header-setting">
                                        <span class="InputCombo-icon Icon Icon--mid">
                                            <svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <g>
                                                    <path
                                                        d="M14.5 6c0-.346.047-.678.12-1H2v2h12.62c-.073-.324-.12-.656-.12-1zM14.5 18c0-.346.047-.678.12-1H2v2h12.62c-.073-.324-.12-.656-.12-1zM4.5 12c0-.346.047-.678.12-1H2v2h2.62c-.073-.324-.12-.656-.12-1zM13.38 11c.073.322.12.654.12 1 0 .344-.047.676-.12 1H22v-2h-8.62z">
                                                    </path>
                                                    <circle cx="19" cy="5.999" r="3"></circle>
                                                    <circle cx="9" cy="11.999" r="3"></circle>
                                                    <circle cx="19" cy="17.999" r="3"></circle>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div id="" class="ProjectSearch-header-pagination">
                                        <ul id="pagination-1021" class="Pagination">
                                            <li data-link="1" class="Pagination-item">
                                                <a href="https://www.freelancer.com/jobs"
                                                    class="padding-top-bottom btn Pagination-link">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                                                            class="flicon-pagination-first">
                                                            <path
                                                                d="M10 11L5 6l5-5M2.5 11c-.28 0-.5-.22-.5-.5v-9c0-.28.22-.5.5-.5s.5.22.5.5v9c0 .28-.22.5-.5.5z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li data-link="prev_page" class="Pagination-item">
                                                <a href="https://www.freelancer.com/jobs" data-pagination-prev-button=""
                                                    class="btn padding-top-bottom  paginate_button Pagination-link">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                                                            class="flicon-pagination-prev">
                                                            <path d="M8 11L3 6l5-5v10z"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>


                                            <li data-link-id="0" data-link="1" class="Pagination-item">
                                                <a href="https://www.freelancer.com/jobs"
                                                    class="btn number Pagination-link is-active">1</a>
                                            </li>


                                            <li data-link-id="1" data-link="2" class="Pagination-item">
                                                <a href="https://www.freelancer.com/jobs/2"
                                                    class="btn number Pagination-link">2</a>
                                            </li>


                                            <li data-link-id="2" data-link="3" class="Pagination-item">
                                                <a href="https://www.freelancer.com/jobs/3"
                                                    class="btn number Pagination-link">3</a>
                                            </li>



                                            <li data-link="next_page" class="Pagination-item">
                                                <a href="https://www.freelancer.com/jobs/2"
                                                    data-pagination-next-button=""
                                                    class="btn padding-top-bottom  Pagination-link">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                                                            class="flicon-pagination-next">
                                                            <path d="M4 1l5 5-5 5"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li data-link="last_page" class="Pagination-item">
                                                <a href="https://www.freelancer.com/jobs/100"
                                                    class="btn padding-top-bottom Pagination-link">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                                                            class="flicon-pagination-last">
                                                            <path
                                                                d="M2 1l5 5-5 5M9.5 1c.28 0 .5.22.5.5v9c0 .28-.22.5-.5.5s-.5-.22-.5-.5v-9c0-.28.22-.5.5-.5z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="ProjectSearch-content">
                                    <div id="project-list" class="JobSearchCard-list">
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">

                                                        <span class="Icon JobSearchCard-primary-heading-Icon">
                                                            <svg viewBox="0 0 24 24" class="flicon-trophy">
                                                                <g fill="none">
                                                                    <title>Trophy icon</title>
                                                                    <path
                                                                        d="M11.968 3.5l1 2h2L13.35 6.735 13.97 9l-2-1.5-2 1.5.794-2.265L8.968 5.5h2M5.125 10.5c-5 0-4.622-6.62-4.622-8h2.534M18.847 10.5c5 0 4.65-6.62 4.65-8l-2.548.008">
                                                                    </path>
                                                                    <path
                                                                        d="M21.003.5h-18c0 15.434 7.965 11.054 7.965 16.5-.062 3.5-1.704 4.5-4.465 4.5v2h11v-2c-2.762 0-4.535-1-4.535-4.5 0-5.453 8.035-1.13 8.035-16.5z">
                                                                    </path>
                                                                </g>
                                                            </svg>

                                                        </span>




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            Vibrant Telegram Giveaway Banner Design
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">23 hours
                                                            left</span>
                                                        <div class="JobSearchCard-primary-heading-status Tooltip--top"
                                                            data-tooltip="This user has verified their Payment method">
                                                            <span class="Icon is-success"><svg class="Icon-image"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                                    <g>
                                                                        <path
                                                                            d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                                                        </path>
                                                                    </g>
                                                                </svg></span> UY TÍN
                                                        </div>

                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I am searching for a creative freelance graphic designer to
                                                        create a colorful and vibrant giveaway banner for a Telegram
                                                        channel. Your design should incorporate original illustrations
                                                        or graphics that would appeal to our audience and effectively
                                                        communicate the prize details of the giveaway.

                                                        I have some images below.

                                                        The idea is a cartoon fish is giving away boxes. The boxes are
                                                        the prize.

                                                        I would like to have the Fish on the image holding and umbrella
                                                        and Boxes raining down.

                                                        The Heading to read
                                                        "It's raining Fish Boxes"
                                                        "Don't miss this opportunity"

                                                        I have more image. Please ask for them

                                                        Ideal Skills &amp; Experience:
                                                        - Expertise in graphic design and digital illustrations
                                                        - Ability to create vibrant, engaging banners
                                                        - Experience designing graphic...


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/banner-design/">Banner Design</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/graphic-design/">Graphic Design</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/illustrator/">Illustrator</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/logo-design/">Logo Design</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/photoshop/">Photoshop</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">

                                                            $47
                                                            <span class="JobSearchCard-primary-avgBid">(Avg Bid)</span>


                                                        </div>

                                                    </div>


                                                    <div class="JobSearchCard-primary-promotion">





                                                        <span
                                                            class="promotion-tag promotion-guaranteed JobSearchCard-primary-promotion-tag">Đảm
                                                            bảo</span>




                                                    </div>

                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">

                                                        $47



                                                    </div>

                                                    <div class="JobSearchCard-secondary-entry">0 entries</div>




                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/contest/vibrant-telegram-giveaway-banner-design-2392034"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="enter-cta">
                                                            Enter now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            Engaging 2D Animation for Adults
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I'm searching for a proficient animator who can bring to life an
                                                        engaging 2D animation targeted at adults with an emphasis on
                                                        storytelling and entertainment. Your creativity will play a
                                                        vital role in creating a captivating animation that goes beyond
                                                        just visual aesthetics.

                                                        Key responsibilities:

                                                        - Developing a visually captivating 2D animation
                                                        - Executing the project from conception to final product
                                                        - Collaborating on the animation's story and characters

                                                        Ideal skills for the job:

                                                        - Proven experience in 2D animation
                                                        - Ability to work with storytelling and scripts
                                                        - Creativity and imagination
                                                        - Substantial knowledge of animation software and techniques
                                                        - Exceptional attention to detail.

                                                        Your previous experience with adult-targeted animation will be a
                                                        bonus in this process. L...


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/3d-animation/">3D Animation</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/flash/">Adobe Flash</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/after-effects/">After Effects</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/animation/">Animation</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/caricature-cartoons/">Caricature &amp;
                                                            Cartoons</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">


                                                            $7 - $18

                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">


                                                        $7 - $18


                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">0 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/animation/engaging-animation-for-adults-37977989"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            3D Logo Intro and Channel Trailer Creation
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I'm looking to add flair to my YouTube page via a captivating 3D
                                                        logo intro and a thrilling channel trailer.

                                                        - The Logo Intro: I'm after a modern 3D design for my logo
                                                        introduction. I hope to see it come alive using engaging and
                                                        dynamic movements. A bright and colorful theme is preferred to
                                                        align with my channel's energy.

                                                        - The Channel Trailer: I want this to be action-packed, catered
                                                        to leave the viewers at the edge of their seats. Consistency is
                                                        key, so a bright and colorful scheme is important here as well.

                                                        Freelancers with experience in 3D animation, video editing, and
                                                        distinctly vibrant color schemes will be most suited for this
                                                        task. Knowledge of the modern aesthetic and how to create
                                                        suspenseful action scenes is crucial too.


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/3d-animation/">3D Animation</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/3d-modelling/">3D Modelling</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/after-effects/">After Effects</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/animation/">Animation</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/video-services/">Video Services</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">


                                                            $10 - $30

                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">


                                                        $10 - $30


                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">0 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/animation/logo-intro-channel-trailer-creation"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            Global Geographical Design: Country Profiles
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                        <div class="JobSearchCard-primary-heading-status Tooltip--top"
                                                            data-tooltip="This user has verified their Payment method">
                                                            <span class="Icon is-success"><svg class="Icon-image"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                                    <g>
                                                                        <path
                                                                            d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                                                        </path>
                                                                    </g>
                                                                </svg></span> UY TÍN
                                                        </div>

                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I am in need of a designer who can create a 4-page PDF design
                                                        compilation for each country on the planet. The theme of your
                                                        work should follow a minimalist style with moderate attention to
                                                        details.

                                                        Below are the specifics for each page:

                                                        - Page 1: Sketch a minimalist outline or contour of the specific
                                                        country.
                                                        - Page 2: Design a moderately detailed representation of the
                                                        country’s flag.
                                                        - Page 3: Creatively insert the flag from Page 2 into the
                                                        contour from Page 1. The minimalist design should be consistent
                                                        throughout.
                                                        - Page 4: Showcase the outline of the country and its
                                                        neighboring countries, highlighting the country's capital and
                                                        flag.

                                                        You can find below a list of the countries. There are 195
                                                        countries in the world so that we will need a file that will
                                                        contain 195 x 4 pages ...


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/brochure-design/">Brochure Design</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/graphic-design/">Graphic Design</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/illustration/">Illustration</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/illustrator/">Illustrator</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/photoshop/">Photoshop</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">

                                                            $30
                                                            <span class="JobSearchCard-primary-avgBid">(Avg Bid)</span>


                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">

                                                        $30
                                                        <span class="JobSearchCard-secondary-avgBid">
                                                            Avg Bid </span>



                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">6 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/graphic-design/global-geographical-design-country"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            PDF-to-Google Sheet Conversion with Logo
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I'm looking to translate an excel spreadsheet to an easy-to-use
                                                        Google Sheet.

                                                        - Conversion: Translate the full content of the Excel
                                                        spreadsheet to Google Sheet without compromising the quality or
                                                        missing any data points.
                                                        - Functionalities: Ensure all formulas used in the current Excel
                                                        sheet work perfectly on the Google Sheet.
                                                        - Logo Placement: Importantly, I want my logo positioned in the
                                                        top-left corner of the Google Sheet's header, maintaining its
                                                        clarity and visual dominance in the design.

                                                        The ideal freelancer for this task would be someone with
                                                        extensive experience in Excel, Google Sheets, and graphic
                                                        placement. Practical knowledge of maintaining spreadsheet
                                                        functionalities during a transition is critically essential.


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/data-entry/">Data Entry</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/data-processing/">Data Processing</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/excel/">Excel</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/graphic-design/">Graphic Design</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/photoshop/">Photoshop</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">

                                                            $37
                                                            <span class="JobSearchCard-primary-avgBid">(Avg Bid)</span>


                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">

                                                        $37
                                                        <span class="JobSearchCard-secondary-avgBid">
                                                            Avg Bid </span>



                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">11 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/excel/pdf-google-sheet-conversion-with"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            Minimalistic Logo for Brand Recognition
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                        <div class="JobSearchCard-primary-heading-status Tooltip--top"
                                                            data-tooltip="This user has verified their Payment method">
                                                            <span class="Icon is-success"><svg class="Icon-image"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                                    <g>
                                                                        <path
                                                                            d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                                                        </path>
                                                                    </g>
                                                                </svg></span> UY TÍN
                                                        </div>

                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I'm in search of a graphic designer who excels at creating
                                                        minimalistic logos that stand out for brand recognition. The key
                                                        aspects are:
                                                        - Style: The logo should have a minimalistic essence to reflect
                                                        my brand's elegance and simplicity.
                                                        - Colors: The palette should lean on the cooler side,
                                                        incorporating hues of , green and white or something soft with
                                                        the greeb.
                                                        Experience in brand identity design and a strong portfolio in
                                                        minimalistic logo design will be ideal. If you understand how to
                                                        make a simple logo visually captivating, let's connect!


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/graphic-design/">Graphic Design</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/illustrator/">Illustrator</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/logo-design/">Logo Design</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/photoshop/">Photoshop</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">

                                                            $25
                                                            <span class="JobSearchCard-primary-avgBid">(Avg Bid)</span>


                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">

                                                        $25
                                                        <span class="JobSearchCard-secondary-avgBid">
                                                            Avg Bid </span>



                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">25 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/graphic-design/minimalistic-logo-for-brand-recognition-37980601"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            Video Footage Green Screen Keying -- 2
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                        <div class="JobSearchCard-primary-heading-status Tooltip--top"
                                                            data-tooltip="This user has verified their Payment method">
                                                            <span class="Icon is-success"><svg class="Icon-image"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                                    <g>
                                                                        <path
                                                                            d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                                                        </path>
                                                                    </g>
                                                                </svg></span> UY TÍN
                                                        </div>

                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I have shots of an actor filmed in front of a poorly lit green
                                                        screen. I need to have the background and markers properly keyed
                                                        out. The files are BRAW (Black Magic 4K) but the work should be
                                                        done in After Effects. This is for an independent short film.
                                                        The clip is over 5 minutes in length but it is made from
                                                        approximately 20 shots (angles). So the settings can be copied.
                                                        Delivery should be the AE project file.


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/after-effects/">After Effects</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/video-editing/">Video Editing</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">

                                                            $353
                                                            <span class="JobSearchCard-primary-avgBid">(Avg Bid)</span>


                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">

                                                        $353
                                                        <span class="JobSearchCard-secondary-avgBid">
                                                            Avg Bid </span>



                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">13 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/video-editing/video-footage-green-screen-keying"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            Work For @Boardroom and @Complex Business Page ... Find
                                                            &amp; Write About BUSINESS TOPICS In Entertainment. ----&gt;
                                                            NO AUTO GENERATED APPLICATIONS!
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                        <div class="JobSearchCard-primary-heading-status Tooltip--top"
                                                            data-tooltip="This user has verified their Payment method">
                                                            <span class="Icon is-success"><svg class="Icon-image"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                                    <g>
                                                                        <path
                                                                            d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                                                        </path>
                                                                    </g>
                                                                </svg></span> UY TÍN
                                                        </div>

                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        ----&gt; NO AUTO GENERATED APPLICATIONS! &lt;---- WILL BE
                                                        DELETED

                                                        I run a popular Instagram blog where we I want to start covering
                                                        Entertainment business topics.
                                                        It will be a business &amp; brand growth within Entertainment
                                                        I need someone that can come up with very interesting post ideas
                                                        &amp; articles for

                                                        Look at their Instagram account to get an idea of the type of
                                                        posts that they do.
                                                        You are going to have to come up with posts like this.

                                                        It can be:
                                                        -Informative
                                                        -Questions to the audience
                                                        -Hypothetical scenarios to get their opinion
                                                        -Comparisons&nbsp;

                                                        It needs to be articles &amp; post ideas that non business
                                                        lovers will be interested in engaging in!
                                                        This is why its important to come up with topics that matter to
                                                        pop culture fans.

                                                        While writing this job description I came up with...


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/articles/">Article Writing</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/business-strategy/">Business Strategy</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/copywriting/">Copywriting</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/creative-writing/">Creative Writing</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/tiktok/">TikTok</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">

                                                            $3 / hr
                                                            <span class="JobSearchCard-primary-avgBid">(Avg Bid)</span>


                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">

                                                        $3 / hr
                                                        <span class="JobSearchCard-secondary-avgBid">
                                                            Avg Bid </span>



                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">11 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/creative-writing/work-for-boardroom-complex-business"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            Casual Spanish meeting Voiceover for AI(provide scripts)
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                        <div class="JobSearchCard-primary-heading-status Tooltip--top"
                                                            data-tooltip="This user has verified their Payment method">
                                                            <span class="Icon is-success"><svg class="Icon-image"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                                    <g>
                                                                        <path
                                                                            d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                                                        </path>
                                                                    </g>
                                                                </svg></span> UY TÍN
                                                        </div>

                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I need native Spanish speakers include other countries speach
                                                        Spanish as first language who can record a series of scripts for
                                                        me. The recordings will be used to train an AI in natural
                                                        language processing.

                                                        Key Requirements:
                                                        - Fluency in Spanish: I need native speakers three in one group
                                                        for this meeting recording project onlion. Your pronunciation
                                                        and delivery need to be clear and natural.
                                                        - Friendly/Casual Tone: The style should be approachable and
                                                        engaging.
                                                        - Include other countries speach Spanish as first language.
                                                        - We need 150 groups.

                                                        The ideal candidate should be able to provide a clean audio
                                                        recording with no background noise, suitable for AI data
                                                        training in natural language processing. Your participation in
                                                        the project will help improve language understanding for AI
                                                        systems.


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/audio-production/">Audio Production</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/audio-services/">Audio Services</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/spanish-translator/">Spanish Translator</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/voice-talent/">Voice Talent</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">

                                                            $1790
                                                            <span class="JobSearchCard-primary-avgBid">(Avg Bid)</span>


                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">

                                                        $1790
                                                        <span class="JobSearchCard-secondary-avgBid">
                                                            Avg Bid </span>



                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">24 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/voice-talent/casual-spanish-meeting-voiceover-for"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            Python Expert Needed for AutoCAD e-transmit Script
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                        <div class="JobSearchCard-primary-heading-status Tooltip--top"
                                                            data-tooltip="This user has verified their Payment method">
                                                            <span class="Icon is-success"><svg class="Icon-image"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                                    <g>
                                                                        <path
                                                                            d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                                                        </path>
                                                                    </g>
                                                                </svg></span> UY TÍN
                                                        </div>

                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I am in need of an individual proficient in Python, specifically
                                                        with experience in AutoCAD e-Transmit, to rectify some issues
                                                        with a script I possess. Specifically, after analyzing the
                                                        script, it seems that it has a series of syntax and logical
                                                        errors that have impeded proper functioning.

                                                        To achieve the project's goals, you need the following:

                                                        - Intermediate knowledge of Python
                                                        - Familiarity with AutoCAD
                                                        - Proven problem-solving skills in programming

                                                        For your application to be successful, kindly include samples of
                                                        past work related to Python scripting for AutoCAD or similar
                                                        projects. I am particularly interested in examining how you have
                                                        previously utilized your programming skills to rectify
                                                        comparable issues in the past. Please also present a brief
                                                        rundown of how you plan to add...


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/autocad/">AutoCAD</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/data-processing/">Data Processing</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/excel/">Excel</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/python/">Python</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">

                                                            $19
                                                            <span class="JobSearchCard-primary-avgBid">(Avg Bid)</span>


                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">

                                                        $19
                                                        <span class="JobSearchCard-secondary-avgBid">
                                                            Avg Bid </span>



                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">44 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/python/python-expert-needed-for-autocad"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            Google Service URL Redirection
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                        <div class="JobSearchCard-primary-heading-status Tooltip--top"
                                                            data-tooltip="This user has verified their Payment method">
                                                            <span class="Icon is-success"><svg class="Icon-image"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                                    <g>
                                                                        <path
                                                                            d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                                                        </path>
                                                                    </g>
                                                                </svg></span> UY TÍN
                                                        </div>

                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I need expertise in utilizing Google Service at for website
                                                        redirection. This is for the specific purpose of redirecting to
                                                        a different URL. I'm seeking a professional with a strong
                                                        understanding of website redirection, preferably with prior
                                                        experience working with Google Services.

                                                        Key Tasks:
                                                        - Implement a redirection solution using Google Service
                                                        - Ensure the purpose of this redirection is clearly identified
                                                        and achieved


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/google-analytics/">Google Analytics</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/html/">HTML</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/javascript/">JavaScript</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/php/">PHP</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/software-architecture/">Software
                                                            Architecture</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">

                                                            $29
                                                            <span class="JobSearchCard-primary-avgBid">(Avg Bid)</span>


                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">

                                                        $29
                                                        <span class="JobSearchCard-secondary-avgBid">
                                                            Avg Bid </span>



                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">47 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/php/google-service-url-redirection"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="JobSearchCard-item ">
                                            <div class="JobSearchCard-item-inner" data-project-card="true">
                                                <div class="JobSearchCard-primary">
                                                    <div class="JobSearchCard-primary-heading">




                                                        <a href="/detai.html"
                                                            class="JobSearchCard-primary-heading-link"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-job"
                                                            data-qtsb-label="link-project-title"
                                                            data-heading-link="true">
                                                            Dynamic Video Editor for Social Media Ads
                                                        </a>


                                                        <span class="JobSearchCard-primary-heading-days">6 days
                                                            left</span>


                                                        <div class="JobSearchCard-primary-heading-status Tooltip--top"
                                                            data-tooltip="This user has verified their Payment method">
                                                            <span class="Icon is-success"><svg class="Icon-image"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                                    <g>
                                                                        <path
                                                                            d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                                                        </path>
                                                                    </g>
                                                                </svg></span> UY TÍN
                                                        </div>

                                                    </div>

                                                    <p class="JobSearchCard-primary-description">



                                                        I'm in search of a skilled video editor, capable of producing a
                                                        fast-paced and dynamic video for social media advertising. The
                                                        final output should be 1-2 minutes in length or under 1 minute,
                                                        crafted meticulously from clips that we will provide. Although
                                                        there wasn't a specific color scheme chosen, I want an editor
                                                        who can use their professional judgement to select a color
                                                        scheme that enhances the content and serves the dynamic style.

                                                        Ideally, you will have:
                                                        - Significant experience with video editing.
                                                        - A knack for creating engaging, fast-paced content.
                                                        - Ability to deliver within tight deadlines.
                                                        - Proficiency with color correction and grading.

                                                        Your creativity and professional judgment will be key to the
                                                        success of this project. I look forward to seeing your portfolio
                                                        and dis...


                                                    </p>

                                                    <div class="JobSearchCard-primary-tags"
                                                        data-qtsb-section="page-job-search-new"
                                                        data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/after-effects/">After Effects</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/video-editing/">Video Editing</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/video-production/">Video Production</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/video-services/">Video Services</a>

                                                        <a class="JobSearchCard-primary-tagsLink"
                                                            href="/jobs/videography/">Videography</a>

                                                    </div>
                                                    <div class="JobSearchCard-primary-hidden">

                                                        <div class="JobSearchCard-primary-price">

                                                            $33
                                                            <span class="JobSearchCard-primary-avgBid">(Avg Bid)</span>


                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="JobSearchCard-secondary">

                                                    <div class="JobSearchCard-secondary-price">

                                                        $33
                                                        <span class="JobSearchCard-secondary-avgBid">
                                                            Avg Bid </span>



                                                    </div>


                                                    <div class="JobSearchCard-secondary-entry">6 bids</div>



                                                    <div class="JobSearchCard-ctas ">

                                                        <a href="/projects/video-editing/dynamic-video-editor-for-social-37980603"
                                                            class="JobSearchCard-ctas-btn btn btn-mini btn-success"
                                                            data-qtsb-section="page-job-search-new"
                                                            data-qtsb-subsection="card-cta-button"
                                                            data-qtsb-label="bid-cta">
                                                            Bid now </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="ProjectSearch-footer">
                        <div class="ProjectSearch-footer-resultCounting">
                            Showing <span id="first-entry">1</span> to <span id="last-entry">50</span> of <span
                                id="total-results-bottom">5,000 entries</span>
                        </div>
                        <div class="ProjectSearch-footer-label">Results per page</div>
                        <div class="ProjectSearch-footer-pageTotal">
                            <select id="table-row-count-select" class="default-select ProjectSearch-footer-select">
                                <option value="20" selected="">20</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div id="" class="ProjectSearch-footer-pagination">
                            <ul id="" class="Pagination">
                                <li data-link="1" class="Pagination-item">
                                    <a href="https://www.freelancer.com/jobs"
                                        class="btn padding-top-bottom Pagination-link">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                                                class="flicon-pagination-first">
                                                <path
                                                    d="M10 11L5 6l5-5M2.5 11c-.28 0-.5-.22-.5-.5v-9c0-.28.22-.5.5-.5s.5.22.5.5v9c0 .28-.22.5-.5.5z">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li data-link="prev_page" class="Pagination-item">
                                    <a href="https://www.freelancer.com/jobs" data-pagination-prev-button=""
                                        class="btn paginate_button padding-top-bottom Pagination-link">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                                                class="flicon-pagination-prev">
                                                <path d="M8 11L3 6l5-5v10z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>


                                <li data-link-id="0" data-link="1" class="Pagination-item">
                                    <a href="https://www.freelancer.com/jobs"
                                        class="btn number Pagination-link is-active">1</a>
                                </li>


                                <li data-link-id="1" data-link="2" class="Pagination-item">
                                    <a href="https://www.freelancer.com/jobs/2" class="btn number Pagination-link">2</a>
                                </li>


                                <li data-link-id="2" data-link="3" class="Pagination-item">
                                    <a href="https://www.freelancer.com/jobs/3" class="btn number Pagination-link">3</a>
                                </li>



                                <li data-link="next_page" class="Pagination-item">
                                    <a href="https://www.freelancer.com/jobs/2" data-pagination-next-button=""
                                        class="btn Pagination-link padding-top-bottom">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                                                class="flicon-pagination-next">
                                                <path d="M4 1l5 5-5 5"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li data-link="last_page" class="Pagination-item">
                                    <a href="https://www.freelancer.com/jobs/100"
                                        class="btn Pagination-link padding-top-bottom">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                                                class="flicon-pagination-last">
                                                <path
                                                    d="M2 1l5 5-5 5M9.5 1c.28 0 .5.22.5.5v9c0 .28-.22.5-.5.5s-.5-.22-.5-.5v-9c0-.28.22-.5.5-.5z">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
    </div> <!-- End Grid -->
    </div>



    <div class="PageJobs-tags Container">
        <div id="other_related">
        </div>
    </div>

    </section>


    </main>
    </div>
    <div class="pinky-template">

        <footer class="FooterNew">
            <div class="FooterNew-content">
                <div class="FooterNew-content-inner">
                    <div class="FooterNew-section">
                        <div class="Container">
                            <div class="Grid">
                                <div class="Grid-col Grid-col--desktopSmall-4">
                                    <div class="FooterNew-info-section">
                                        <a href="/" class="FooterNew-logo">
                                            <img class="FooterNew-logo-img"
                                                src="https://www.f-cdn.com/assets/img/footer/Freelancer-footer-logo-522454d7.svg"
                                                alt="Freelancer Logo" width="62" height="40" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="FooterNew-info-section">
                                        <a id="locale-selector" class="FooterNew-subTitle" href="/choose-your-country/"
                                            data-robots="LocaleSelector" data-qtsb-section="footer"
                                            data-qtsb-subsection="LanguageSelector"
                                            data-qtsb-label="GoToLanguageSelector" role="button">
                                            <span class="Icon--light Icon FooterNew-subTitle-icon"><svg
                                                    class="Icon-image" height="24" viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z">
                                                    </path>
                                                </svg>
                                            </span>
                                            English - US (International)
                                        </a>







                                    </div>

                                    <div class="FooterNew-info-section">
                                        <a href="/support/" class="FooterNew-subTitle"> <span
                                                class="Icon--light Icon FooterNew-subTitle-icon"><svg class="Icon-image"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 2C6.486 2 2 6.487 2 12c0 5.515 4.486 10 10 10s10-4.485 10-10c0-5.513-4.486-10-10-10zm0 16.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25zm1-4.375V15h-2v-3h1c1.104 0 2-.897 2-2 0-1.104-.896-2-2-2s-2 .896-2 2H8c0-2.205 1.795-4 4-4s4 1.795 4 4c0 1.86-1.277 3.43-3 3.875z">
                                                    </path>
                                                </svg>
                                            </span> Help &amp; Support</a>
                                    </div>
                                    <div class="FooterNew-info-section">
                                        <div id="triggerAccessibility"
                                            class="FooterNew-subTitle FooterNew-accessibility">
                                            <span class="Icon--light Icon FooterNew-subTitle-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                    <path
                                                        d="M20.5 6c-2.61.7-5.67 1-8.5 1s-5.89-.3-8.5-1L3 8c1.86.5 4 .83 6 1v13h2v-6h2v6h2V9c2-.17 4.14-.5 6-1l-.5-2zM12 6c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z">
                                                    </path>
                                                </svg>

                                            </span>
                                            Accessibility
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="Grid-col Grid-col--tablet-3 Grid-col--desktopSmall-2 FooterNew-link-section">
                                    <h5 class="FooterNew-link-title" data-footerlink="footer-link">Freelancer
                                        <span
                                            class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--disable"><svg
                                                class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 16c-.3 0-.5-.1-.7-.3l-6-6 1.4-1.4 5.3 5.3 5.3-5.3 1.4 1.4-6 6c-.2.2-.4.3-.7.3z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span
                                            class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--active"><svg
                                                class="Icon-image" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 8.3a.91.91 0 0 1 .7.3l6 6-1.4 1.4-5.3-5.3L6.7 16l-1.4-1.4 6-6a.91.91 0 0 1 .7-.3z">
                                                </path>
                                            </svg>
                                        </span>
                                    </h5>
                                    <div class="FooterNew-link-content">
                                        <ul class="FooterNew-links">
                                            <li>
                                                <a class="FooterNew-link" href="/job/"
                                                    data-uitest-target="GoToCategories" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Network" data-qtsb-label="GoToCategories">
                                                    Categories
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/jobs/"
                                                    data-uitest-target="GoToProjects" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Network" data-qtsb-label="GoToProjects">
                                                    Projects
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/contest/"
                                                    data-uitest-target="GoToContest" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Network" data-qtsb-label="GoToContest">
                                                    Contests
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/freelancers/"
                                                    data-uitest-target="GoToFreelancers" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Network" data-qtsb-label="GoToFreelancers">
                                                    Freelancers
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/enterprise/"
                                                    data-uitest-target="GoToEnterprise" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Enterprise" data-qtsb-label="GoToEnterprise">
                                                    Enterprise
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/membership"
                                                    data-uitest-target="GoToMembership" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Membership" data-qtsb-label="GoToMembership">
                                                    Membership
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/preferred-freelancer-program"
                                                    data-uitest-target="GoToPreferredFreelancerProgram"
                                                    data-qtsb-section="footer" data-qtsb-subsection="Network"
                                                    data-qtsb-label="GoToPreferredFreelancerProgram">
                                                    Preferred Freelancer Program
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/project-management"
                                                    data-uitest-target="GoToProjectManager" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Network" data-qtsb-label="GoToProjectManager">
                                                    Project Management
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/local"
                                                    data-uitest-target="GoToFreelancerLocal" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Network"
                                                    data-qtsb-label="GoToFreelancerLocal">
                                                    Local Jobs
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="https://www.photoanywhere.com"
                                                    target="_blank" data-uitest-target="GoToPhotoAnywhere"
                                                    data-qtsb-section="footer" data-qtsb-subsection="Network"
                                                    data-qtsb-label="GoToPhotoAnywhere">
                                                    Photo Anywhere
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/showcase"
                                                    data-uitest-target="GoToShowcase" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Network" data-qtsb-label="GoToShowcase">
                                                    Showcase
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="https://developers.freelancer.com"
                                                    data-uitest-target="GoToAPIDevelopers" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Network" data-qtsb-label="GoToAPIDevelopers">
                                                    API for Developers
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="Grid-col Grid-col--tablet-3 Grid-col--desktopSmall-2 FooterNew-link-section">
                                    <h5 class="FooterNew-link-title" data-footerlink="footer-link">About
                                        <span
                                            class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--disable"><svg
                                                class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 16c-.3 0-.5-.1-.7-.3l-6-6 1.4-1.4 5.3 5.3 5.3-5.3 1.4 1.4-6 6c-.2.2-.4.3-.7.3z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span
                                            class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--active"><svg
                                                class="Icon-image" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 8.3a.91.91 0 0 1 .7.3l6 6-1.4 1.4-5.3-5.3L6.7 16l-1.4-1.4 6-6a.91.91 0 0 1 .7-.3z">
                                                </path>
                                            </svg>
                                        </span>
                                    </h5>
                                    <div class="FooterNew-link-content">
                                        <ul class="FooterNew-links">
                                            <li>
                                                <a class="FooterNew-link" href="/about" data-uitest-target="GoToAboutUs"
                                                    data-qtsb-section="footer" data-qtsb-subsection="About"
                                                    data-qtsb-label="GoToAboutUs">
                                                    About us
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/info/how-it-works/"
                                                    data-uitest-target="GoToHowItWorks" data-qtsb-section="footer"
                                                    data-qtsb-subsection="About" data-qtsb-label="GoToHowItWorks">
                                                    How it Works
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/security"
                                                    data-uitest-target="GoToSecurity" data-qtsb-section="footer"
                                                    data-qtsb-subsection="About" data-qtsb-label="GoToSecurity">
                                                    Security
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/investor"
                                                    data-uitest-target="GoToInvestor" data-qtsb-section="footer"
                                                    data-qtsb-subsection="About" data-qtsb-label="GoToInvestor">
                                                    Investor
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/sitemap"
                                                    data-uitest-target="GoToSitemap" data-qtsb-section="footer"
                                                    data-qtsb-subsection="Network" data-qtsb-label="GoToSitemap">
                                                    Sitemap
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/stories"
                                                    data-uitest-target="GoToStories" data-qtsb-section="footer"
                                                    data-qtsb-subsection="About" data-qtsb-label="GoToStories">
                                                    Stories
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/media"
                                                    data-uitest-target="GoToNews" data-qtsb-section="footer"
                                                    data-qtsb-subsection="About" data-qtsb-label="GoToNews">
                                                    News
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/management"
                                                    data-uitest-target="GoToManagement" data-qtsb-section="footer"
                                                    data-qtsb-subsection="About" data-qtsb-label="GoToManagement">
                                                    Team
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/awards"
                                                    data-uitest-target="GoToAwards" data-qtsb-section="footer"
                                                    data-qtsb-subsection="About" data-qtsb-label="GoToAwards">
                                                    Awards
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/about/press"
                                                    data-uitest-target="GoToPress" data-qtsb-section="footer"
                                                    data-qtsb-subsection="About" data-qtsb-label="GoToPress">
                                                    Press Releases
                                                </a>
                                            </li>
                                            <li>
                                                <a class="FooterNew-link" href="/careers"
                                                    data-uitest-target="GoToCareers" data-qtsb-section="footer"
                                                    data-qtsb-subsection="About" data-qtsb-label="GoToCareers">
                                                    Careers
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="Grid-col Grid-col--tablet-3  Grid-col--desktopSmall-2 FooterNew-link-section">
                                    <h5 class="FooterNew-link-title" data-footerlink="footer-link">Terms
                                        <span
                                            class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--disable"><svg
                                                class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 16c-.3 0-.5-.1-.7-.3l-6-6 1.4-1.4 5.3 5.3 5.3-5.3 1.4 1.4-6 6c-.2.2-.4.3-.7.3z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span
                                            class="Icon Icon--small Icon--light FooterNew-link-icon FooterNew-link-icon--active"><svg
                                                class="Icon-image" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 8.3a.91.91 0 0 1 .7.3l6 6-1.4 1.4-5.3-5.3L6.7 16l-1.4-1.4 6-6a.91.91 0 0 1 .7-.3z">
                                                </path>
                                            </svg>
                                        </span>
                                    </h5>
                                    <div class="FooterNew-link-content">
                                        <ul class="FooterNew-links">
                                            <li>
                                                <a rel="nofollow" class="FooterNew-link" href="/about/privacy"
                                                    data-uitest-target="GoToPrivacyPolicy" data-qtsb-section="footer"
                                                    data-qtsb-subsection="CorporateLinks"
                                                    data-qtsb-label="GoToPrivacyPolicy">
                                                    Privacy Policy
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" class="FooterNew-link" href="/about/terms"
                                                    data-uitest-target="GoToTermsAndConditions"
                                                    data-qtsb-section="footer" data-qtsb-subsection="CorporateLinks"
                                                    data-qtsb-label="GoToTermsAndConditions">
                                                    Terms and Conditions
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" class="FooterNew-link" href="/dmca"
                                                    data-uitest-target="GoToCopyrightInfringementPolicy"
                                                    data-qtsb-section="footer" data-qtsb-subsection="CorporateLinks"
                                                    data-qtsb-label="GoToCopyrightInfringementPolicy">
                                                    Copyright Policy
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" class="FooterNew-link" href="/info/codeofconduct"
                                                    data-uitest-target="GoToCodeOfConduct" data-qtsb-section="footer"
                                                    data-qtsb-subsection="CorporateLinks"
                                                    data-qtsb-label="GoToCodeOfConduct">
                                                    Code of Conduct
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow" class="FooterNew-link" href="/feesandcharges"
                                                    data-uitest-target="GoToFeesAndCharges" data-qtsb-section="footer"
                                                    data-qtsb-subsection="CorporateLinks"
                                                    data-qtsb-label="GoToFeesAndCharges">
                                                    Fees and Charges
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="Grid-col Grid-col--tablet-3  Grid-col--desktopSmall-2 FooterNew-link-section">
                                    <h5 class="FooterNew-link-title FooterNew-link-title--hideMobile">Apps</h5>
                                    <div class="FooterNew-appStoreIcons">
                                        <a href="https://cdn3.f-cdn.com/download" class="FooterNew-appStoreIcon"
                                            target="_blank" title="Download on the App Store" data-qtsb-section="footer"
                                            data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToAppleStore">
                                            <img class="FooterNew-appStoreIcon-image"
                                                src="https://www.f-cdn.com/assets/img/footer/app-store-1f36bbd8.svg"
                                                alt="Apple App Store Badge" loading="lazy" width="300" height="89">
                                        </a>
                                        <a href="https://cdn3.f-cdn.com/download" class="FooterNew-appStoreIcon"
                                            target="_blank" title="Get it on Google Play" data-qtsb-section="footer"
                                            data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToPlayStore">
                                            <img class="FooterNew-appStoreIcon-image"
                                                src="https://www.f-cdn.com/assets/img/footer/google-play-66442243.svg"
                                                alt="Google Play Store Badge" loading="lazy" width="300" height="88">
                                        </a>
                                    </div>

                                    <div class="FooterNew-social">
                                        <a class="FooterNew-social-icon Icon Icon--light" rel="nofollow"
                                            href="https://www.facebook.com/fansoffreelancer" target="_blank"
                                            title="Freelancer on Facebook" data-qtsb-section="footer"
                                            data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToFacebook">
                                            <svg class="Icon-image" width="24px" height="24px" viewBox="0 0 24 24"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                                    <polygon id="Mask" opacity="0" fill="none"
                                                        points="2 2 22 2 22 22 2 22"></polygon>
                                                    <path
                                                        d="M22,12 C22,6.47714844 17.5228516,2 12,2 C6.47714844,2 2,6.47714844 2,12 C2,16.9912891 5.65685547,21.1283203 10.4375,21.8785156 L10.4375,14.890625 L7.8984375,14.890625 L7.8984375,12 L10.4375,12 L10.4375,9.796875 C10.4375,7.290625 11.9304297,5.90625 14.2146484,5.90625 C15.3087305,5.90625 16.453125,6.1015625 16.453125,6.1015625 L16.453125,8.5625 L15.1921484,8.5625 C13.9499023,8.5625 13.5625,9.33333984 13.5625,10.1241602 L13.5625,12 L16.3359375,12 L15.8925781,14.890625 L13.5625,14.890625 L13.5625,21.8785156 C18.3431445,21.1283203 22,16.9912891 22,12">
                                                    </path>
                                                </g>
                                            </svg>

                                        </a>
                                        <a class="FooterNew-social-icon Icon Icon--light" rel="nofollow"
                                            href="https://www.twitter.com/freelancer" target="_blank"
                                            title="Freelancer on Twitter" data-qtsb-section="footer"
                                            data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToTwitter">
                                            <svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <path
                                                    d="M8.192 21c-2.28 0-4.404-.668-6.192-1.815 2.144.252 4.282-.342 5.98-1.672-1.768-.034-3.26-1.202-3.772-2.806.633.12 1.256.085 1.823-.07-1.942-.39-3.282-2.14-3.24-4.01.545.302 1.17.484 1.83.505C2.822 9.93 2.313 7.555 3.37 5.738c1.992 2.444 4.97 4.053 8.326 4.22C11.106 7.434 13.024 5 15.63 5c1.163 0 2.212.49 2.95 1.276.92-.18 1.785-.517 2.565-.98-.3.944-.942 1.736-1.775 2.235.817-.097 1.596-.314 2.32-.635-.542.807-1.228 1.52-2.016 2.088C19.93 14.665 15.694 21 8.192 21z">
                                                </path>
                                            </svg>

                                        </a>
                                        <a class="FooterNew-social-icon Icon Icon--light" rel="nofollow"
                                            href="https://www.youtube.com/freelancerchannel" target="_blank"
                                            title="Freelancer on Youtube" data-qtsb-section="footer"
                                            data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToYoutube">
                                            <svg class="Icon-image" width="24px" height="24px" viewBox="0 0 24 24"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g transform="translate(2.000000, 5.000000)" fill-rule="nonzero"
                                                    stroke="none" stroke-width="1">
                                                    <path
                                                        d="M16.3458333,0.153435525 C13.3425,-0.0515616237 6.65333333,-0.0507283019 3.65416667,0.153435525 C0.406666667,0.375099108 0.0241666667,2.33673849 0,7.5 C0.0241666667,12.654095 0.403333333,14.6240676 3.65416667,14.8465645 C6.65416667,15.0507283 13.3425,15.0515616 16.3458333,14.8465645 C19.5933333,14.6249009 19.9758333,12.6632615 20,7.5 C19.9758333,2.34590503 19.5966667,0.37593243 16.3458333,0.153435525 Z M7.5,10.833287 L7.5,4.16671303 L14.1666667,7.49416675 L7.5,10.833287 L7.5,10.833287 Z"
                                                        id="Shape"></path>
                                                </g>
                                            </svg>

                                        </a>
                                        <a class="FooterNew-social-icon Icon Icon--light" rel="nofollow"
                                            href="https://instagram.com/freelancerofficial" target="_blank"
                                            title="Freelancer on Instagram" data-qtsb-section="footer"
                                            data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToInstagram">
                                            <svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <path
                                                    d="M15 12c0 1.657-1.343 3-3 3s-3-1.342-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3zm4.327-3.636c.043.948.052 1.233.052 3.636s-.01 2.688-.053 3.637c-.112 2.42-1.248 3.58-3.69 3.69-.948.042-1.233.052-3.637.052-2.403 0-2.69-.01-3.636-.053-2.446-.11-3.58-1.273-3.69-3.69-.043-.95-.053-1.234-.053-3.637s.01-2.688.054-3.636c.11-2.42 1.248-3.58 3.69-3.69.948-.043 1.233-.052 3.636-.052s2.69.01 3.637.052c2.44.11 3.578 1.27 3.69 3.69zM16.62 12c.002-2.553-2.07-4.622-4.62-4.622-2.553 0-4.622 2.07-4.622 4.622 0 2.553 2.07 4.622 4.622 4.622 2.553 0 4.622-2.07 4.622-4.622zm1.264-4.804c0-.596-.484-1.08-1.08-1.08-.596 0-1.08.484-1.08 1.08 0 .597.483 1.08 1.08 1.08.597 0 1.08-.483 1.08-1.08zM21 12c0-2.444-.01-2.75-.054-3.71-.147-3.265-1.963-5.085-5.235-5.235C14.75 3.01 14.446 3 12 3c-2.445 0-2.75.01-3.71.054-3.27.15-5.085 1.963-5.236 5.235C3.01 9.25 3 9.556 3 12c0 2.445.01 2.75.054 3.71.15 3.27 1.964 5.086 5.236 5.236.96.044 1.265.054 3.71.054 2.445 0 2.75-.01 3.71-.054 3.266-.15 5.09-1.963 5.236-5.236.044-.96.054-1.265.054-3.71z">
                                                </path>
                                            </svg>

                                        </a>
                                        <a class="FooterNew-social-icon Icon Icon--light" href="/rss.xml"
                                            target="_blank" title="Latest Projects" data-qtsb-section="footer"
                                            data-qtsb-subsection="AppsAndSocial" data-qtsb-label="GoToRSS">
                                            <svg class="Icon-image" width="24" height="24" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.168 20C4.97 20 4 19.03 4 17.835c0-1.196.97-2.165 2.168-2.165 1.197 0 2.167.97 2.167 2.165 0 1.196-.97 2.165-2.167 2.165zm5.18 0c-.04-4.03-3.314-7.298-7.348-7.34V9.455c5.814.04 10.518 4.74 10.56 10.546h-3.212zm5.44 0C16.77 12.937 11.054 7.24 4 7.208V4c8.83.03 15.98 7.18 16 16h-3.21z"
                                                    fill-rule="evenodd"></path>
                                            </svg>

                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Statistics -->
                    <div class="FooterNew-section">
                        <div class="Container">
                            <div class="Grid">
                                <div class="Grid-col Grid-col--12 Grid-col--tablet-6 Grid-col--desktopSmall-3">
                                    <div class="SiteStat FooterNew-siteStat">
                                        <div id="footerRegisteredUsersCount"
                                            class="SiteStat-value FooterNew-siteStat-value">72,543,643</div>
                                        <div class="SiteStat-name FooterNew-siteStat-name">
                                            <span class="SiteStat-name-text">Registered Users</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="Grid-col Grid-col--12 Grid-col--tablet-6 Grid-col--desktopSmall-3">
                                    <div class="SiteStat FooterNew-siteStat">
                                        <div id="footerTotalJobsPostedCount"
                                            class="SiteStat-value FooterNew-siteStat-value">23,623,439</div>
                                        <div class="SiteStat-name FooterNew-siteStat-name">
                                            <span class="SiteStat-name-text">Total Jobs Posted</span>
                                            <span
                                                class="SiteStat-name-icon Icon Icon--small Tooltip--light Tooltip--top Tooltip--large"
                                                data-tooltip="Jobs Posted (Filtered) is defined as the sum of Total Posted Projects and Total Posted Contests,
                        filtered for spam, advertising, test projects, unawardable or otherwise projects that are deemed bad and unable to be
                        fulfilled.">
                                                <span class="Icon Icon--small"><svg class="Icon-image"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 2C6.486 2 2 6.487 2 12c0 5.515 4.486 10 10 10s10-4.485 10-10c0-5.513-4.486-10-10-10zm0 16.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25zm1-4.375V15h-2v-3h1c1.104 0 2-.897 2-2 0-1.104-.896-2-2-2s-2 .896-2 2H8c0-2.205 1.795-4 4-4s4 1.795 4 4c0 1.86-1.277 3.43-3 3.875z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="Grid-col Grid-col--desktopSmall-6">
                                    <p class="FooterNew-siteStat-term">Freelancer ® is a registered Trademark of
                                        Freelancer Technology
                                        Pty Limited (ACN 142 189 759)</p>
                                    <p class="FooterNew-siteStat-term">
                                        Copyright © 2024 Freelancer Technology Pty Limited (ACN 142 189 759)
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </footer>








    </div>

    <!-- FIXME: please get rid of that, that should be lazy loaded through SystemJS -->








    <fl-modal-container class="pinky-template"></fl-modal-container>

    <!-- JS SDKs: think twice before adding something here -->
    <!-- SHOULD NEVER EVER include synchronous scripts. -->
    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');


        ga('create', 'UA-223765-6', 'auto');

        // Set User ID if exist


        // ga('require', 'displayfeatures');
        // This is to differentiate different links to the same page - one in nav bar, one in side bar
        // ga('require', 'linkid', 'linkid.js');

        // This is page group like tags, PVP, CVP, Profiles

        // This is domain group

        ga('set', 'contentGroup2', 'Freelancer.com');


        // Use canonical URL as the url of the page if exist

        ga('set', 'location', 'https://www.freelancer.com/jobs');


        // Gets cookie for `event` and sends it if exist
        var allCookies = document.cookie.split(';');
        for (var i in allCookies) {
            cookie = allCookies[i].trim();
            var cookieArr = cookie.split('=');
            // check if there's ga event cookie
            var cookieKey = cookieArr[0];
            var cookieValue = cookieArr[1];
            if (cookieKey === 'gaevent' && cookieValue) {
                var gaData = decodeURIComponent(cookieValue);
                var gaEventData = JSON.parse(gaData.replace(/\+/g, ' '));
                for (var j in gaEventData) {
                    var event = gaEventData[j];
                    event.hitType = 'event';
                    ga('send', event);
                }
                // clear `gaevent` cookie afterwards
                document.cookie = 'gaevent=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                break;
            }
        };

        // Send Pageview after everything is set
        ga('send', 'pageview');


    </script>
    <!-- End Google Analytics -->
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-G7FX" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-G7FX');</script>
    <!-- End Google Tag Manager -->
    <!-- Start Alexa Certify Javascript -->
    <script type="text/javascript">
        _atrk_opts = {
            atrk_acct: '+QLxh1acBa0089',
            domain: 'freelancer.com',
            dynamic: true
        };
        (function () {
            var as = document.createElement('script');
            as.type = 'text/javascript';
            as.async = true;
            as.src = 'https://d31qbv1cthcecs.cloudfront.net/atrk.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(as, s);
        })();
    </script>
    <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=+QLxh1acBa0089" style="display:none"
            height="1" width="1" alt="" /></noscript>
    <!-- End Alexa Certify Javascript -->
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', "530993107478103");
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=530993107478103&ev=PageView
    &noscript=1" />
    </noscript>
    
    <script defer="" src="https://www.f-cdn.com/assets/compat/en/polyfills.566fe329a01da07a.js"></script>
    <script defer="" src="https://www.f-cdn.com/assets/polyfills-f96587f8.js"></script>

    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_freelancer_ui_button_button-size_ts-src_freelancer_ui_heading_heading_component_ts-src_fr-5d5082.1bd5ad5321e0fdb4.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-seo-navbar_module_ts.cacdbf38e94690e4.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-accessibility_component_ts.250cb1bbcad3b782.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-accessibility_module_ts.eb4b9a425a9d1a78.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-tracking_component_ts.62d1252c7253191b.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-tracking_module_ts.b54419c3abbb454c.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-toast-alerts_component_ts.76f84a1335696920.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-toast-alerts_module_ts.c3104b098d098fce.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-modals_component_ts.b482826f6100902b.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-modals_module_ts.4f7a8a330f9a1164.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-abtest_component_ts.089e3415c2f7cd9f.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-abtest_module_ts.ed003a419669058c.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-accessibility_component_ts.250cb1bbcad3b782.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-accessibility_module_ts.eb4b9a425a9d1a78.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-threatmetrix_component_ts.1d6188a3add8eea6.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-threatmetrix_module_ts.e66988034d85e677.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-give-get-footer_component_ts.237f096aa06785c9.js"
        as="script">
    <link rel="preload"
        href="https://www.f-cdn.com/assets/compat/en/src_compat_compat-give-get-footer_module_ts.a32732739690e3ba.js"
        as="script">
    <script defer="" src="https://www.f-cdn.com/assets/compat/en/runtime.1d9a4cadee6b40ee.js"></script>
    <script defer="" src="https://www.f-cdn.com/assets/compat/en/main.050830de820da56e.js"></script>

    <script defer="" id="systemjs-loader" src="https://www.f-cdn.com/assets/systemjs-83712958.js"></script>
    <script defer="" id="systemjs-config" src="https://www.f-cdn.com/assets/systemjs-config-e37fd3fe.js"></script>
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/modules/login-signup-angular-34c8d763.js"
        as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/angular-07d26f0b.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/angular-sanitize-eab366c5.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/angular-route-850ff20f.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/jquery-6798c358.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/angular-resource-7ba99b3f.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/angular-messages-378c068a.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/modules/header-0cb3eab5.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/modules/post-project-banner-656fe983.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/modules/job-search-new-189ef35f.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/google-maps-0288be4e.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/fuse.js-c2d87d65.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/modules/footer-locale-selector-1c8f1fd8.js"
        as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/modules/footer-site-stats-093cf754.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/modules/footer-new-70820df1.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/modules/tracking-15289a28.js" as="script">
    <link rel="preload" href="https://www.f-cdn.com/assets/bundles/modules/gdpr-consent-fb1fd964.js" as="script">
    <script>
        document.getElementById('systemjs-loader').addEventListener('load', function () {
            System.config({
                baseURL: "https:\/\/www.f-cdn.com" + "/assets"
            });
            window.define = SystemJS.amdDefine;
            window.require = window.requirejs = SystemJS.amdRequire;
            System.config({
                packages: {
                    bundles: {
                        meta: {
                            "*": {
                                scriptLoad: true
                            }
                        }
                    }
                }
            });
            if (window.performance && window.performance.mark) {
                window.performance.mark('systemjs_loader_ready');
            }
        });

        document.getElementById('systemjs-config').addEventListener('load', function () {
            if (window.performance && window.performance.mark) {
                window.performance.mark('systemjs_config_ready');
            }

            System.register(
                'server-data/login-signup-angular', [], function (__export) {
                    var pageName;
                    var showSignup;
                    var redirectUrl;
                    var isLoggedOutHeader;
                    return {
                        setters: [],
                        execute: function () {
                            __export('pageName', "JobsPage");
                            __export('showSignup', null);
                            __export('redirectUrl', null);
                            __export('isLoggedOutHeader', true);
                        }
                    };
                }
            );
            System.register(
                'server-data/header', [], function (__export) {
                    var disappearingLinksOnScroll;
                    return {
                        setters: [],
                        execute: function () {
                            __export('disappearingLinksOnScroll', null);
                        }
                    };
                }
            );
            System.register(
                'server-data/job-search-new', [], function (__export) {
                    var exchangerate;
                    var gotoUrl;
                    var pageName;
                    var showAlertModal;
                    var initialTotalEntries;
                    var resultSetSize;
                    var defaultResultSetSize;
                    var initialPageNumber;
                    var showPostBtn;
                    var showBidBtn;
                    return {
                        setters: [],
                        execute: function () {
                            __export('exchangerate', 1);
                            __export('gotoUrl', null);
                            __export('pageName', "JobsPage");
                            __export('showAlertModal', null);
                            __export('initialTotalEntries', 5000);
                            __export('resultSetSize', 50);
                            __export('defaultResultSetSize', 50);
                            __export('initialPageNumber', 1);
                            __export('showPostBtn', null);
                            __export('showBidBtn', 1);
                        }
                    };
                }
            );
            System.register(
                'server-data/footer-locale-selector', [], function (__export) {
                    var isAuth;
                    var currentRegion;
                    var currentDomain;
                    var currentLanguage;
                    return {
                        setters: [],
                        execute: function () {
                            __export('isAuth', "");
                            __export('currentRegion', "North America");
                            __export('currentDomain', "US (International)");
                            __export('currentLanguage', "English");
                        }
                    };
                }
            );
            System.register(
                'server-data/flconfigs', [], function (__export) {
                    var sslBaseUrl;
                    var cookieBase;
                    var notifyServer;
                    var flnBillingBaseUrl;
                    var languageCode;
                    var cookieDomain;
                    var siteName;
                    var cdnUrls;
                    var facebookAppId;
                    var enterprise;
                    var userJobs;
                    var messagingABTests;
                    var globalMatchmakingABTests;
                    var recaptchaPublicKey;
                    return {
                        setters: [],
                        execute: function () {
                            __export('sslBaseUrl', "https:\/\/www.freelancer.com");
                            __export('cookieBase', "GETAFREE");
                            __export('notifyServer', "\/\/notifications.freelancer.com");
                            __export('flnBillingBaseUrl', "https:\/\/api.freelancerbilling.com");
                            __export('languageCode', "en");
                            __export('cookieDomain', ".freelancer.com");
                            __export('siteName', "Freelancer.com");
                            __export('cdnUrls', ["cdn2.f-cdn.com", "cdn3.f-cdn.com", "cdn5.f-cdn.com", "cdn6.f-cdn.com"]);
                            __export('facebookAppId', "120131118061981");
                            __export('enterprise', null);
                            __export('userJobs', null);
                            __export('messagingABTests', []);
                            __export('globalMatchmakingABTests', []);
                            __export('recaptchaPublicKey', "6Lc1CCcTAAAAABxlulYmWJj_ZNAHHegrhLV3vS2Z");
                        }
                    };
                }
            );
            System.register(
                'server-data/tracking', [], function (__export) {
                    var qtsHttpEndpoint;
                    return {
                        setters: [],
                        execute: function () {
                            __export('qtsHttpEndpoint', "\/\/t.freelancer.com\/");
                        }
                    };
                }
            );

            System.register(
                'angular-server-data/flconfigs',
                ['angular'],
                function (__export) {
                    var angular;
                    var messagingABTests;
                    var globalMatchmakingABTests;
                    return {
                        setters: [
                            function (ng) {
                                angular = ng.default;
                            }
                        ],
                        execute: function () {
                            angular.module('flconfigs/messagingABTests', []).constant(
                                'messagingABTests', []
                            );
                            __export('messagingABTests', 'flconfigs/messagingABTests');
                            angular.module('flconfigs/globalMatchmakingABTests', []).constant(
                                'globalMatchmakingABTests', []
                            );
                            __export('globalMatchmakingABTests', 'flconfigs/globalMatchmakingABTests');
                        }
                    };
                }
            );

            System.import('modules/login-signup-angular');
            System.import('modules/header');
            System.import('modules/post-project-banner');
            System.import('modules/job-search-new');
            System.import('modules/footer-locale-selector');
            System.import('modules/footer-site-stats');
            System.import('modules/footer-new');
            System.import('modules/tracking');
            System.import('modules/gdpr-consent');
        });
    </script>

    <!--// SystemJS  -->




    <script type="text/javascript" id="">(function () {
            var c = function (a) {
                a = a.target; var b = {}; a.getAttribute("data-qtsb-label") && (b.label = a.getAttribute("data-qtsb-label")); a.getAttribute("data-qtsb-name") && (b.name = a.getAttribute("data-qtsb-name")); a.getAttribute("data-qtsb-value") && (b.value = a.getAttribute("data-qtsb-value")); a.getAttribute("data-qtsb-section") && (b.section = a.getAttribute("data-qtsb-section")); a.getAttribute("data-qtsb-subsection") && (b.subsection = a.getAttribute("data-qtsb-subsection")); for (; a.parentNode && a.parentNode.getAttribute &&
                    !(b.section && b.subsection && b.label && b.name && b.value);)a = a.parentNode, !b.label && a.getAttribute("data-qtsb-label") && (b.label = a.getAttribute("data-qtsb-label")), !b.name && a.getAttribute("data-qtsb-name") && (b.name = a.getAttribute("data-qtsb-name")), !b.value && a.getAttribute("data-qtsb-value") && (b.value = a.getAttribute("data-qtsb-value")), !b.section && a.getAttribute("data-qtsb-section") && (b.section = a.getAttribute("data-qtsb-section")), !b.subsection && a.getAttribute("data-qtsb-subsection") && (b.subsection = a.getAttribute("data-qtsb-subsection"));
                if (b.label || b.name) window._lt = window._lt || [], window._lt.push(["user_action", b])
            }; document.body.addEventListener("click", c, !0)
        })();</script>
    <script type="text/javascript"
        id="">var visit_data = {}, send_visit_data = !1, program = google_tag_manager["rm"]["31609"](2); program && (send_visit_data = !0, visit_data.program = program, visit_data.track_code = google_tag_manager["rm"]["31609"](3), visit_data.program_id = google_tag_manager["rm"]["31609"](4)); var uid = google_tag_manager["rm"]["31609"](5); uid && (send_visit_data = !0, visit_data.uid = uid); var utm_source = google_tag_manager["rm"]["31609"](6);
            utm_source && (send_visit_data = !0, visit_data.utm_source = utm_source, visit_data.utm_medium = google_tag_manager["rm"]["31609"](7), visit_data.utm_term = google_tag_manager["rm"]["31609"](8), visit_data.utm_content = google_tag_manager["rm"]["31609"](9), visit_data.utm_campaign = google_tag_manager["rm"]["31609"](10)); if (send_visit_data) { var _t = _t || []; _t.push(["campaign_visit", visit_data]) };</script>
    <div class="Card CookieBanner">
        <a href="#" class="CookieBanner-close" id="close-cookie-banner">
            <span class="Icon">
                <svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M20.707 4.707l-1.414-1.414L12 10.586 4.707 3.293 3.293 4.707 10.586 12l-7.293 7.293 1.414 1.414L12 13.414l7.293 7.293 1.414-1.414L13.414 12">
                    </path>
                </svg>
            </span>
        </a>
        <p class="CookieBanner-copy">
            We use technologies, such as cookies, to customise content, to provide features through third parties and to
            analyse traffic to the site. We also share information about your use of our site with our trusted social
            media, advertising and analytics partners.
            <a class="CookieBanner-link" href="/about/privacy">See details.</a>
        </p>
    </div>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?callback=__google_maps_api_provider_initializator__&amp;key=AIzaSyAWB_zZMjdwNlu8-9xZ8RyNRbCERQTWSR8&amp;libraries=places&amp;language=en"></script>
    <div id="locale-selector-modal" class="Modal LocaleSelector Modal--large " data-modal="" aria-hidden="true">
        <div class="Modal-inner" data-modal-outbound="">
            <div class="Modal-dialog" role="dialog">
                <div class="Modal-content Card" role="document">

                    <button class="Modal-close" type="button" data-modal-hide="" aria-label="Close this modal window">
                        <span class="Icon Icon--small"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M20.707 4.707l-1.414-1.414L12 10.586 4.707 3.293 3.293 4.707 10.586 12l-7.293 7.293 1.414 1.414L12 13.414l7.293 7.293 1.414-1.414L13.414 12">
                                </path>
                            </svg></span>
                    </button>


                    <header class="Modal-header">
                        <div class="Card-heading">
                            Select Country Site
                        </div>

                    </header>


                    <div class="Modal-body">

                        <div class="LocaleSelector-region">
                            <h3 class="LocaleSelector-region-title">North America</h3>
                            <ul class="LocaleSelector-countries">

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.com"
                                        class="LocaleSelector-country  LocaleSelector-country--default "
                                        data-country="">
                                        <span class="small-flag usa"></span> US (International)
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.ca" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag canada"></span> Canada
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.com.jm" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag jamaica"></span> Jamaica
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="LocaleSelector-region">
                            <h3 class="LocaleSelector-region-title">Europe</h3>
                            <ul class="LocaleSelector-countries">

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.co.uk" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag uk"></span> United Kingdom
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.fr.freelancer.com" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag france"></span> France
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.de" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag germany"></span> Germany
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.gr" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag greece"></span> Greece
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.pt" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag portugal"></span> Portugal
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.es" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag spain"></span> Spain
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.cz" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag czech-republic"></span> Czech Republic
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.se" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag sweden"></span> Sweden
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.is" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag iceland"></span> Iceland
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.ie" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag ireland"></span> Ireland
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.co.it" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag italy"></span> Italy
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.tr.freelancer.com" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag turkey"></span> Turkey
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.pl" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag poland"></span> Poland
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.co.ro" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag romania"></span> Romania
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.com.ua" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag ukraine"></span> Ukraine
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.no" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag norway"></span> Norway
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.hu" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag hungary"></span> Hungary
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.fi.freelancer.com" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag finland"></span> Finland
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.dk.freelancer.com" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag denmark"></span> Denmark
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.com.al" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag albania"></span> Albania
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.si" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag slovenia"></span> Slovenia
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="LocaleSelector-region">
                            <h3 class="LocaleSelector-region-title">Asia Pacific</h3>
                            <ul class="LocaleSelector-countries">

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.com.au" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag australia"></span> Australia
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.co.nz" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag new-zealand"></span> New Zealand
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.hk" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag hong-kong"></span> Hong Kong
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.com.bd" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag bangladesh"></span> Bangladesh
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.in" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag india"></span> India
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.co.id" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag indo"></span> Indonesia
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.jp" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag japan"></span> Japan
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.co.kr" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag korea-republic-of"></span> Korea, Republic of
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.my.freelancer.com" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag malaysia"></span> Malaysia
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.pk" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag pakistan"></span> Pakistan
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.ph" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag philippines"></span> Philippines
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.cn" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag china"></span> P.R. China
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.sg" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag singapore"></span> Singapore
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.co.th" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag thailand"></span> Thailand
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.vn.freelancer.com" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag vietnam"></span> Vietnam
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="LocaleSelector-region">
                            <h3 class="LocaleSelector-region-title">Latin America</h3>
                            <ul class="LocaleSelector-countries">

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.com.ar" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag argentina"></span> Argentina
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.br.freelancer.com" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag brazil"></span> Brazil
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.cl" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag chile"></span> Chile
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.com.co" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag colombia"></span> Colombia
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.ec" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag ecuador"></span> Ecuador
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.mx" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag mexico"></span> Mexico
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.com.pe" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag peru"></span> Peru
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.uy" class="LocaleSelector-country " data-country="">
                                        <span class="small-flag uruguay"></span> Uruguay
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="LocaleSelector-region">
                            <h3 class="LocaleSelector-region-title">Africa</h3>
                            <ul class="LocaleSelector-countries">

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.co.za" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag south-africa"></span> South Africa
                                    </a>
                                </li>

                                <li class="LocaleSelector-countries-item">
                                    <a href="https://www.freelancer.co.ke" class="LocaleSelector-country "
                                        data-country="">
                                        <span class="small-flag kenya"></span> Kenya
                                    </a>
                                </li>

                            </ul>
                        </div>


                    </div>


                </div>
            </div>
        </div>
        

    </div>
   
</body>
<script>
    $(document).ready(function () {
        $('.js-example-basic-single').select2();

    });
</script>

</html>
@endsection
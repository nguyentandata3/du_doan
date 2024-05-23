<?php
session_start();
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

?>

<!DOCTYPE html>
<html lang="vi" class="loading-site no-js">

<!-- Mirrored from euro.gmkb.live/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2024 21:38:33 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="xmlrpc.php" />

    <script>
    (function(html) {
        html.className = html.className.replace(/\bno-js\b/, 'js')
    })(document.documentElement);
    </script>
    <title>Euro 2024 &#8211; HOLA BET &#8211; Đồng hành Euro 2024 cùng HOLA BET</title>
    <meta name='robots' content='noindex, nofollow' />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel='prefetch'
        href='https://euro.gmkb.live/wp-content/themes/flatsome/assets/js/flatsome.js?ver=a0a7aee297766598a20e' />
    <link rel='prefetch'
        href='https://euro.gmkb.live/wp-content/themes/flatsome/assets/js/chunk.slider.js?ver=3.18.7' />
    <link rel='prefetch'
        href='https://euro.gmkb.live/wp-content/themes/flatsome/assets/js/chunk.popups.js?ver=3.18.7' />
    <link rel='prefetch'
        href='https://euro.gmkb.live/wp-content/themes/flatsome/assets/js/chunk.tooltips.js?ver=3.18.7' />
    <link rel="alternate" type="application/rss+xml" title="Dòng thông tin Euro 2024 - GMKB.LIVE &raquo;"
        href="https://euro.gmkb.live/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Euro 2024 - GMKB.LIVE &raquo; Dòng bình luận"
        href="https://euro.gmkb.live/comments/feed/" />
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="stylesheet" href="css/popup.css">
    <script type="text/javascript">
    /* <![CDATA[ */
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/euro.gmkb.live\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.3"
        }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                    .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
                return e === r[t]
            })
        }

        function u(e, t, n) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                        n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                        );
                case "emoji":
                    return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
            }
            return !1
        }

        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                    300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function(e) {
                o[e] = t(a, e, n)
            }), o
        }

        function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
        }), new Promise(function(t) {
            var n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                        e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                    typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                            .toString()
                        ].join(",") + "));",
                        r = new Blob([e], {
                            type: "text/javascript"
                        }),
                        a = new Worker(URL.createObjectURL(r), {
                            name: "wpTestEmojiSupports"
                        });
                    return void(a.onmessage = function(e) {
                        c(n = e.data), a.terminate(), t(n)
                    })
                } catch (e) {}
                c(n = f(s, u, p))
            }
            t(n)
        }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                    .everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                .DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
        }).then(function() {
            return e
        }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
    /* ]]> */
    </script>
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://euro.gmkb.live/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-main-css'
        href='https://euro.gmkb.live/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.18.7' type='text/css'
        media='all' />
    <link rel='stylesheet' id='flatsome-style-css'
        href='https://euro.gmkb.live/wp-content/themes/euro-2024/style.css?ver=3.0' type='text/css' media='all' />
    <link rel="https://api.w.org/" href="https://euro.gmkb.live/wp-json/" />
    <link rel="alternate" type="application/json" href="https://euro.gmkb.live/wp-json/wp/v2/pages/8" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://euro.gmkb.live/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.5.3" />
    <link rel="canonical" href="https://euro.gmkb.live/" />
    <link rel='shortlink' href='https://euro.gmkb.live/' />
    <link rel="alternate" type="application/json+oembed"
        href="https://euro.gmkb.live/wp-json/oembed/1.0/embed?url=https%3A%2F%2Feuro.gmkb.live%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://euro.gmkb.live/wp-json/oembed/1.0/embed?url=https%3A%2F%2Feuro.gmkb.live%2F&amp;format=xml" />
    <link rel="icon" href="https://euro.gmkb.live/wp-content/uploads/2024/03/cropped-icon-32x32.gif" sizes="32x32" />
    <link rel="icon" href="https://euro.gmkb.live/wp-content/uploads/2024/03/cropped-icon-192x192.gif"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://euro.gmkb.live/wp-content/uploads/2024/03/cropped-icon-180x180.gif" />
    <meta name="msapplication-TileImage"
        content="https://euro.gmkb.live/wp-content/uploads/2024/03/cropped-icon-270x270.gif" />

</head>

<body
    class="home page-template page-template-page-blank page-template-page-blank-php page page-id-8 lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">


    <a class="skip-link screen-reader-text" href="#main">Chuyển đến nội dung</a>

    <div id="wrapper">


        <header id="header" class="header has-sticky sticky-jump">
            <div class="header-wrapper">
                <div id="masthead" class="header-main nav-dark">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                        <!-- Mobile Left Elements -->
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left ">
                                <li class="nav-icon has-icon">
                                    <div class="header-button"> <a href="#" data-open="#main-menu" data-pos="center"
                                            data-bg="main-menu-overlay" data-color="dark"
                                            class="icon button circle is-outline is-small" aria-label="Menu"
                                            aria-controls="main-menu" aria-expanded="false">

                                            <i class="icon-menu"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Left Elements -->
                        <div class="flex-col hide-for-medium flex-left
            flex-grow">
                            <ul
                                class="header-nav header-nav-main nav nav-left  nav-line-bottom nav-size-medium nav-spacing-medium nav-uppercase">
                                <li id="menu-item-24"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-24 active menu-item-design-default">
                                    <a href="#" aria-current="page" class="nav-top-link">HOME PAGE</a>
                                </li>
                                <li id="menu-item-20"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 menu-item-design-default">
                                    <a href="#" class="nav-top-link">FIXTURES</a>
                                </li>
                                <li id="menu-item-23"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23 menu-item-design-default">
                                    <a href="#" class="nav-top-link">Event</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium flex-right">
                            <ul
                                class="header-nav header-nav-main nav nav-right  nav-line-bottom nav-size-medium nav-spacing-medium nav-uppercase">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                            <form method="get" class="searchform" action="#" role="search">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <input type="search" class="search-field mb-0" name="s" value=""
                                                            id="s" placeholder="Tìm kiếm..." />
                                                    </div>
                                                    <div class="flex-col">
                                                        <button type="submit"
                                                            class="ux-search-submit submit-button secondary button icon mb-0"
                                                            aria-label="Nộp">
                                                            <i class="icon-search"></i> </button>
                                                    </div>
                                                </div>
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Mobile Right Elements -->
                        <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                            </ul>
                        </div>

                    </div>

                    <div class="container">
                        <div class="top-divider full-width"></div>
                    </div>
                </div>

                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div>
            </div>
        </header>


        <main id="main" class="">


            <div id="content" role="main" class="content-area">

                <section class="section dark" id="section_599866460">
                    <div class="bg section-bg fill bg-fill  ">


                        <div class="section-bg-overlay absolute fill"></div>


                    </div>

                    <div
                        class="ux-shape-divider ux-shape-divider--top ux-shape-divider--style-waves-opacity-3 ux-shape-divider--flip">
                        <svg viewBox="0 0 1000 300" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                            <path class="ux-shape-fill" opacity="0.05"
                                d="M1014 264V386H206L34 300C34 300 344.42 277.16 436 221C542 156 590 160 704 209C811 255 899.11 214.94 979 346L1014 264Z" />
                            <path class="ux-shape-fill" opacity="0.1"
                                d="M-302 55C-302 55 -66.73 263.25 50 214C178 160 283 116 353 141C445.68 174.1 534.28 256.19 588 249C692.9 235 764.52 75.94 855 131C940.61 183.09 1000 254 1000 254V328L-306 338L-302 55Z" />
                            <path class="ux-shape-fill" opacity="0.15"
                                d="M-286 255C-286 255 -72 152 52 126C176 100 255 155 436 227C581.57 284.91 614.7 277.79 708 227C787 184 1009 3.0001 1093 164C1146 265.63 1031 293 1031 293L924 377L-288 389L-286 255Z" />
                            <path class="ux-shape-fill" opacity="0.3"
                                d="M-24 69C-24 69 275.68 370.66 389 314C397 310 622 316 673 356C690.47 369.7 845 224 890 182C944.8 130.85 1018 92 1078 143C1154.12 207.7 1196 242 1196 242L1184 374L-28 386L-24 69Z" />
                            <path class="ux-shape-fill"
                                d="M-12 201C-12 201 58 284 182 258C306 232 342.29 221.23 456 264C565 305 640.82 288.36 721 249C776 222 837.5 191.31 935 253C984 284 1030 279 1030 279L1024 430L-12 440V201Z" />
                        </svg>
                    </div>


                    <div class="section-content relative">

                        <div class="row" id="row-458381024">

                            <div id="col-113988690" class="col medium-6 small-12 large-6">
                                <div class="col-inner text-center">


                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_295702217">
                                        <div data-animate="fadeInLeft">
                                            <div class="img-inner dark">
                                                <img fetchpriority="high" decoding="async" width="998" height="1080"
                                                    src="photo/img-header.png"
                                                    class="attachment-original size-original" alt=""
                                                    srcset="photo/img-header.png 998w, img-header.png 277w, photo/img-header.png 946w, photo/img-header.png 768w"
                                                    sizes="(max-width: 998px) 100vw, 998px" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div id="col-1100752330" class="col medium-6 small-12 large-6">
                                <div class="col-inner">
                                    <p>Giải vô địch bóng đá châu Âu, thường được biết đến với tên gọi UEFA Euro hay
                                        Euro, là giải bóng đá quốc tế dành cho các Team tuyển quốc gia nam của các thành
                                        viên Liên đoàn bóng đá châu Âu, nhằm xác định nhà vô địch châu lục của châu Âu
                                    </p>
                                    <a href="#sukiendudoan"
                                        class="button primary is-gloss is-larger box-shadow-2 expand"
                                        style="border-radius:10px;">
                                        <span>PREDICTION EVENT</span>
                                    </a>

                                </div>
                            </div>


                        </div>
                    </div>

                </section>

                <span class="scroll-to" data-label="Scroll to: #sukiendudoan" data-bullet="false"
                    data-link="#sukiendudoan" data-title="Sukiendudoan"><a name="sukiendudoan"></a></span>

                <section class="section dark" id="section_833233726">
                    <div class="bg section-bg fill bg-fill  ">


                        <div class="section-bg-overlay absolute fill"></div>


                    </div>



                    <div class="section-content relative">

                        <span class="scroll-to" data-label="Scroll to: #dudoan1" data-bullet="false"
                            data-link="#dudoan1" data-title="dudoan1"><a name="dudoan1"></a></span>
                        <div class="row" id="row-1603114019">

                            <div id="col-1522368423" class="col medium-6 small-12 large-6" data-animate="fadeInLeft">
                                <div class="col-inner">


                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_518081423">
                                        <div data-animate="fadeInLeft">
                                            <div class="img-inner dark">
                                                <img loading="lazy" decoding="async" width="2344" height="261"
                                                    src="photo/every-day.png"
                                                    class="attachment-original size-original" alt=""
                                                    srcset="photo/every-day.png 2344w, photo/every-day-300x33.png 300w, photo/every-day-1024x114.png 1024w, photo/every-day-768x86.png 768w, photo/every-day-1536x171.png 1536w, photo/every-day-2048x228.png 2048w"
                                                    sizes="(max-width: 2344px) 100vw, 2344px" />
                                            </div>
                                        </div>
                                    </div>

                                    <p style="text-align: justify;">– Dự đoán 8 Team mạnh nhất lọt vào Vòng Tứ kết. Đúng
                                        1 Team được <span style="color: #ffff00;"><strong>100.000 đồng</strong></span>,
                                        nếu trúng cả 8 Team Hội viên sẽ nhận được <span
                                            style="color: #ffff00;"><strong>2.000.000 đồng</strong></span>.<br />&#8211;
                                        Thời gian dự đoán đến hết <span
                                            style="color: #00ffff;"><strong>28/06</strong></span><br />&#8211; <span
                                            style="color: #00ffff;"><strong>200 giải</strong></span> (Tính từ tài khoản
                                        dự đoán chính xác nhất)</p>
                                </div>
                            </div>

                            <div id="col-365686457" class="col medium-6 small-12 large-6" data-animate="fadeInRight">
                                <div class="col-inner">
                                    <div id="timer-246813316" class="ux-timer light" data-text-plural="s"
                                        data-text-hour="HOUR" data-text-day="DAY" data-text-week="WEEK"
                                        data-text-min="MINUTE" data-text-sec="SECOND" data-text-hour-p="HOUR"
                                        data-text-day-p="DAY" data-text-week-p="WEEK" data-text-min-p="MINUTE"
                                        data-text-sec-p="SECOND" data-countdown="2024/06/28 23:59"><span>&nbsp;<div
                                                class="loading-spin dark centered"></div><strong>&nbsp;</strong></span>
                                    </div>
                                    <div class="wpcf7 no-js" id="wpcf7-f273-p8-o1" lang="vi" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form id="every-day" onsubmit="return everyday();">
                                                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                            <div id="responsive-form" class="clearfix">
                                                <div class="form-row">
                                                    <div class="column-half" style="width: 100%">
                                                        <p>Username <span class="wpcf7-form-control-wrap"
                                                                data-name="your-name"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    aria-required="true" aria-invalid="false" value=""
                                                                    type="text" name="tu_ket_tk_hola" required /></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Date Time</th>
                                                                <th>Home Team</th>
                                                                <th>Away Team</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>03:00 15/06</th>
                                                                <th>Germany</th>
                                                                <th>Scotland</th>
                                                            </tr>
                                                            <tr>
                                                                <th><button type="button" class="result-button" id="Germany" onclick="selectResult('Germany', 'result1')">Home</button></th>
                                                                <th><button type="button" class="result-button" id="draw1" onclick="selectResult('draw1', 'result1')">Draw</button></th>
                                                                <th><button type="button" class="result-button" id="Scotland" onclick="selectResult('Scotland', 'result1')">Away</button></th>
                                                                <input type="hidden" id="result1" name="result1" required>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table>
                                                        <tbody>
                                                            <tr style="margin-top: 10px">
                                                                <th>20:00 15/06</th>
                                                                <th>Hungary</th>
                                                                <th>Switzerland</th>
                                                            </tr>
                                                            <tr>
                                                                <th><button type="button" class="result-button" id="Hungary" onclick="selectResult('Hungary', 'result2')">Home</button></th>
                                                                <th><button type="button" class="result-button" id="draw2" onclick="selectResult('draw2', 'result2')">Draw</button></th>
                                                                <th><button type="button" class="result-button" id="Switzerland" onclick="selectResult('Switzerland', 'result2')">Away</button></th>
                                                                <input type="hidden" id="result2" name="result2" required>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table>
                                                        <tbody>
                                                            <tr style="margin-top: 10px">
                                                                <th>20:00 15/06</th>
                                                                <th>Spain</th>
                                                                <th>Croatia</th>
                                                            </tr>
                                                            <tr>
                                                                <th><button type="button" class="result-button" id="Spain" onclick="selectResult('Spain', 'result3')">Home</button></th>
                                                                <th><button type="button" class="result-button" id="draw3" onclick="selectResult('draw3', 'result3')">Draw</button></th>
                                                                <th><button type="button" class="result-button" id="Croatia" onclick="selectResult('Croatia', 'result3')">Away</button></th>
                                                                <input type="hidden" id="result3" name="result3" required>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="form-row">
                                                    <div class="column-full"><input style="width:100%" class="button-submit2" type="submit" value="SUBMIT"/>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </section>

                <section class="section dark" id="section_2103704594">
                    <div class="bg section-bg fill bg-fill  ">
                        <div class="section-bg-overlay absolute fill"></div>
                    </div>

                    <div class="section-content relative">

                        <span class="scroll-to" data-label="Scroll to: #dudoan2" data-bullet="false"
                            data-link="#dudoan2" data-title="dudoan2"><a name="dudoan2"></a></span>
                        <div class="row" id="row-1236141473">

                            <div id="col-1071399622" class="col medium-6 small-12 large-6" data-animate="fadeInLeft">
                                <div class="col-inner">


                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1496252401">
                                        <div data-animate="fadeInLeft">
                                            <div class="img-inner dark">
                                                <img loading="lazy" decoding="async" width="2438" height="256"
                                                    src="photo/1-16.png"
                                                    class="attachment-original size-original" alt=""
                                                    srcset="photo/1-16.png 2438w, photo/1-16.png 300w, photo/1-16.png 1024w, photo/1-16.png 1536w, photo/1-16.png 2048w"
                                                    sizes="(max-width: 2438px) 100vw, 2438px" />
                                            </div>
                                        </div>
                                    </div>

                                    <p>– Dự đoán 4 Team mạnh nhất lọt vào Vòng Bán kết. Hội viên dự đoán đúng 3/4 Team sẽ
                                        nhận được <span style="color: #ffff00;"><strong>1.000.000 đồng</strong></span>.
                                        Nếu đúng cả 4 Team sẽ nhận được <span style="color: #ffff00;"><strong>3.000.000
                                                đồng</strong></span>.</p>
                                    <p>Thời gian dự đoán đết hết <span
                                            style="color: #00ffff;"><strong>04/07</strong></span>.<br />Giới hạn <span
                                            style="color: #00ffff;"><strong>10 tài khoản</strong></span> dự đoán đúng và
                                        nhEngland nhất.</p>
                                </div>
                            </div>



                            <div id="col-1320714753" class="col medium-6 small-12 large-6" data-animate="fadeInRight">
                                <div class="col-inner">
                                    <div id="timer-464647548" class="ux-timer light" data-text-plural="s"
                                        data-text-hour="HOUR" data-text-day="DAY" data-text-week="WEEK"
                                        data-text-min="MINUTE" data-text-sec="SECOND" data-text-hour-p="HOUR"
                                        data-text-day-p="DAY" data-text-week-p="WEEK" data-text-min-p="MINUTE"
                                        data-text-sec-p="SECOND" data-countdown="2024/07/04 23:59"><span>&nbsp;<div
                                                class="loading-spin dark centered"></div><strong>&nbsp;</strong></span>
                                    </div>

                                    <div class="wpcf7 no-js" id="wpcf7-f280-p8-o2" lang="vi" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form id="every-day" onsubmit="return everyday();">
                                                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                            <div id="responsive-form" class="clearfix">
                                                <div class="form-row">
                                                    <div class="column-half" style="width: 100%">
                                                        <p>Username <span class="wpcf7-form-control-wrap"
                                                                data-name="your-name"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    aria-required="true" aria-invalid="false" value=""
                                                                    type="text" name="tu_ket_tk_hola" required /></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                <table class="match-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="th1">Date Time</th>
                                                            <th class="th2">Home Team</th>
                                                            <th class="th3">Away Team</th>
                                                            <th class="th4">Prediction</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td  class="th1">12 Dec - 04:00</td>
                                                            <td  class="th2">Germany</td>
                                                            <td  class="th3">Scotland</td>
                                                            <td  class="th4">
                                                            <select
                                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                                    aria-required="true" aria-invalid="false"
                                                                    name="doi-vo-dich">
                                                                    <option value="home">Home</option>
                                                                    <option value="draw">Draw</option>
                                                                    <option value="away">Away</option>
                                                                </select>
                                                            </td>
                                                    </tbody>
                                                </table>
                                                </div>
                                                <div class="form-row">
                                                    <div class="column-full"><input style="width:100%" class="button-submit2" type="submit" value="SUBMIT"/>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </section>

                <section class="section dark">
                    <div class="bg section-bg fill bg-fill  ">
                        <div class="section-bg-overlay absolute fill"></div>
                    </div>

                    <div class="section-content relative">

                        <span class="scroll-to" data-label="Scroll to: #dudoan2" data-bullet="false"
                            data-link="#dudoan2" data-title="dudoan2"><a name="dudoan2"></a></span>
                        <div class="row" id="row-1236141473">

                            <div id="col-1071399622" class="col medium-6 small-12 large-6" data-animate="fadeInLeft">
                                <div class="col-inner">


                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1496252401">
                                        <div data-animate="fadeInLeft">
                                            <div class="img-inner dark">
                                                <img loading="lazy" decoding="async" width="2438" height="256"
                                                    src="photo/tu-ket.png"
                                                    class="attachment-original size-original" alt=""
                                                    srcset="photo/tu-ket.png 2438w, photo/tu-ket.png 300w, photo/tu-ket.png 1024w, photo/tu-ket.png 1536w, photo/tu-ket.png 2048w"
                                                    sizes="(max-width: 2438px) 100vw, 2438px" />
                                            </div>
                                        </div>
                                    </div>

                                    <p>– Dự đoán 4 Team mạnh nhất lọt vào Vòng Bán kết. Hội viên dự đoán đúng 3/4 Team sẽ
                                        nhận được <span style="color: #ffff00;"><strong>1.000.000 đồng</strong></span>.
                                        Nếu đúng cả 4 Team sẽ nhận được <span style="color: #ffff00;"><strong>3.000.000
                                                đồng</strong></span>.</p>
                                    <p>Thời gian dự đoán đết hết <span
                                            style="color: #00ffff;"><strong>04/07</strong></span>.<br />Giới hạn <span
                                            style="color: #00ffff;"><strong>10 tài khoản</strong></span> dự đoán đúng và
                                        nhEngland nhất.</p>
                                </div>
                            </div>



                            <div id="col-1320714753" class="col medium-6 small-12 large-6" data-animate="fadeInRight">
                                <div class="col-inner">
                                    <div id="timer-464647548" class="ux-timer light" data-text-plural="s"
                                        data-text-hour="HOUR" data-text-day="DAY" data-text-week="WEEK"
                                        data-text-min="MINUTE" data-text-sec="SECOND" data-text-hour-p="HOUR"
                                        data-text-day-p="DAY" data-text-week-p="WEEK" data-text-min-p="MINUTE"
                                        data-text-sec-p="SECOND" data-countdown="2024/07/04 23:59"><span>&nbsp;<div
                                                class="loading-spin dark centered"></div><strong>&nbsp;</strong></span>
                                    </div>

                                    <div class="wpcf7 no-js" id="wpcf7-f280-p8-o2" lang="vi" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form id="every-day" onsubmit="return everyday();">
                                                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                            <div id="responsive-form" class="clearfix">
                                                <div class="form-row">
                                                    <div class="column-half" style="width: 100%">
                                                        <p>Username <span class="wpcf7-form-control-wrap"
                                                                data-name="your-name"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    aria-required="true" aria-invalid="false" value=""
                                                                    type="text" name="tu_ket_tk_hola" required /></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Date Time</th>
                                                                <th>Home Team</th>
                                                                <th>Away Team</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>03:00 15/06</th>
                                                                <th>Germany</th>
                                                                <th>Scotland</th>
                                                            </tr>
                                                            <tr>
                                                                <th><button type="button" class="result-button" id="Germany" onclick="selectResult('Germany', 'result1')">Home</button></th>
                                                                <th><button type="button" class="result-button" id="draw1" onclick="selectResult('draw1', 'result1')">Draw</button></th>
                                                                <th><button type="button" class="result-button" id="Scotland" onclick="selectResult('Scotland', 'result1')">Away</button></th>
                                                                <input type="hidden" id="result1" name="result1" required>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table>
                                                        <tbody>
                                                            <tr style="margin-top: 10px">
                                                                <th>20:00 15/06</th>
                                                                <th>Hungary</th>
                                                                <th>Switzerland</th>
                                                            </tr>
                                                            <tr>
                                                                <th><button type="button" class="result-button" id="Hungary" onclick="selectResult('Hungary', 'result2')">Home</button></th>
                                                                <th><button type="button" class="result-button" id="draw2" onclick="selectResult('draw2', 'result2')">Draw</button></th>
                                                                <th><button type="button" class="result-button" id="Switzerland" onclick="selectResult('Switzerland', 'result2')">Away</button></th>
                                                                <input type="hidden" id="result2" name="result2" required>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table>
                                                        <tbody>
                                                            <tr style="margin-top: 10px">
                                                                <th>20:00 15/06</th>
                                                                <th>Spain</th>
                                                                <th>Croatia</th>
                                                            </tr>
                                                            <tr>
                                                                <th><button type="button" class="result-button" id="Spain" onclick="selectResult('Spain', 'result3')">Home</button></th>
                                                                <th><button type="button" class="result-button" id="draw3" onclick="selectResult('draw3', 'result3')">Draw</button></th>
                                                                <th><button type="button" class="result-button" id="Croatia" onclick="selectResult('Croatia', 'result3')">Away</button></th>
                                                                <input type="hidden" id="result3" name="result3" required>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="form-row">
                                                    <div class="column-full"><input style="width:100%" class="button-submit2" type="submit" value="SUBMIT"/>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </section>

                <section class="section dark" id="section_1057097998">
                    <div class="bg section-bg fill bg-fill  ">


                        <div class="section-bg-overlay absolute fill"></div>


                    </div>



                    <div class="section-content relative">

                        <span class="scroll-to" data-label="Scroll to: #dudoan3" data-bullet="false"
                            data-link="#dudoan3" data-title="dudoan3"><a name="dudoan3"></a></span>
                        <div class="row" id="row-1606988709">

                            <div id="col-1847781390" class="col medium-6 small-12 large-6" data-animate="fadeInLeft">
                                <div class="col-inner">


                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1228512156">
                                        <div data-animate="fadeInLeft">
                                            <div class="img-inner dark">
                                                <img loading="lazy" decoding="async" width="1898" height="265"
                                                    src="https://euro.gmkb.live/wp-content/uploads/2024/04/Du-doan-doi-vo-dich-2.png"
                                                    class="attachment-original size-original" alt=""
                                                    srcset="https://euro.gmkb.live/wp-content/uploads/2024/04/Du-doan-doi-vo-dich-2.png 1898w, https://euro.gmkb.live/wp-content/uploads/2024/04/Du-doan-doi-vo-dich-2-300x42.png 300w, https://euro.gmkb.live/wp-content/uploads/2024/04/Du-doan-doi-vo-dich-2-1024x143.png 1024w, https://euro.gmkb.live/wp-content/uploads/2024/04/Du-doan-doi-vo-dich-2-768x107.png 768w, https://euro.gmkb.live/wp-content/uploads/2024/04/Du-doan-doi-vo-dich-2-1536x214.png 1536w"
                                                    sizes="(max-width: 1898px) 100vw, 1898px" />
                                            </div>
                                        </div>
                                    </div>

                                    <p>– Dự đoán đúng Team VÔ ĐỊCH sẽ nhận được <span
                                            style="color: #ffff00;"><strong>2.000.000 đồng</strong></span>. Đồng thời
                                        nếu dự đoán đúng luôn cả TỶ SỐ trong 90 phút trận Chung kết sẽ nhận được tổng số
                                        tiền là <span style="color: #ffff00;"><strong>5.000.000 đồng</strong></span>.
                                    </p>
                                    <p>Thời gian dự đoán đết hết <span
                                            style="color: #00ffff;"><strong>11/07</strong></span>.<br />Giới hạn
                                        <strong><span style="color: #00ffff;">05 tài khoản</span></strong> dự đoán đúng
                                        và nhEngland nhất.
                                    </p>
                                </div>
                            </div>



                            <div id="col-850134879" class="col medium-6 small-12 large-6" data-animate="fadeInRight">
                                <div class="col-inner">


                                    <div id="timer-1246545593" class="ux-timer light" data-text-plural="s"
                                        data-text-hour="Giờ" data-text-day="Ngày" data-text-week="Tuần"
                                        data-text-min="Phút" data-text-sec="Giây" data-text-hour-p="Giờ"
                                        data-text-day-p="Ngày" data-text-week-p="Tuần" data-text-min-p="Phút"
                                        data-text-sec-p="Giây" data-countdown="2024/07/11 23:59"><span>&nbsp;<div
                                                class="loading-spin dark centered"></div><strong>&nbsp;</strong></span>
                                    </div>


                                    <div class="wpcf7 no-js" id="wpcf7-f281-p8-o3" lang="vi" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form id="vo-dich" onsubmit="return vodich();">
                                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                            <div id="responsive-form" class="clearfix">
                                                <div class="form-row">
                                                    <div class="column-half" style="width: 100%">
                                                        <p>Username<span class="wpcf7-form-control-wrap"><input size="40"
                                                                    class="wpcf7-form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    type="text" name="tk_hola" required/></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="column-half">
                                                        <p>Team vô địch <span class="wpcf7-form-control-wrap"
                                                                data-name="menu-634">
                                                                <select
                                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                                    aria-required="true" aria-invalid="false"
                                                                    name="doi-vo-dich">
                                                                    <option value="">&#8212;Pleasea Select&#8212;
                                                                    </option>
                                                                    <option value="Germany">Germany</option>
                                                                    <option value="Scotland">Scotland</option>
                                                                    <option value="Hungary">Hungary</option>
                                                                    <option value="Switzerland">Switzerland</option>
                                                                    <option value="Spain">Spain</option>
                                                                    <option value="Croatia">Croatia</option>
                                                                    <option value="Italy">Italy</option>
                                                                    <option value="Albania">Albania</option>
                                                                    <option value="Slovenia">Slovenia</option>
                                                                    <option value="Denmark">Denmark</option>
                                                                    <option value="Serbia">Serbia</option>
                                                                    <option value="England">England</option>
                                                                    <option value="Poland">Poland</option>
                                                                    <option value="Netherlands">Netherlands</option>
                                                                    <option value="Austria">Austria</option>
                                                                    <option value="France">France</option>
                                                                    <option value="Belgium">Belgium</option>
                                                                    <option value="Slovakia">Slovakia</option>
                                                                    <option value="Romania">Romania</option>
                                                                    <option value="Ukrainie">Ukrainie</option>
                                                                    <option value="Turkey">Turkey</option>
                                                                    <option value="Georgia">Georgia</option>
                                                                    <option value="Portugal">Portugal</option>
                                                                    <option value="Czech">Czech</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                    <div class="column-half">
                                                        <p>Tỷ số trận đấu <span class="wpcf7-form-control-wrap"
                                                                data-name="text-434"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    aria-required="true" aria-invalid="false" value=""
                                                                    type="text" name="ty-so" placeholder="2-1" required/></span>
                                                        </p>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="column-full">
                                                            <p><input
                                                                    class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                    type="submit" value="GỬI DỰ ĐOÁN" />
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </section>

                
                <section class="section dark" id="section_1172210387">
                    <div class="bg section-bg fill bg-fill  ">





                    </div>



                    <div class="section-content relative">

                        <div class="row" id="row-2099272896">

                            <div id="col-1619616686" class="col small-12 large-12">
                                <div class="col-inner">


                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1957444795">
                                        <div data-animate="fadeInLeft">
                                            <div class="img-inner dark">
                                                <img decoding="async" width="2535" height="254"
                                                    src="https://euro.gmkb.live/wp-content/uploads/2024/04/Su-kien-du-doan-euro-2024-1.png"
                                                    class="attachment-original size-original" alt=""
                                                    srcset="https://euro.gmkb.live/wp-content/uploads/2024/04/Su-kien-du-doan-euro-2024-1.png 2535w, https://euro.gmkb.live/wp-content/uploads/2024/04/Su-kien-du-doan-euro-2024-1-300x30.png 300w, https://euro.gmkb.live/wp-content/uploads/2024/04/Su-kien-du-doan-euro-2024-1-1024x103.png 1024w, https://euro.gmkb.live/wp-content/uploads/2024/04/Su-kien-du-doan-euro-2024-1-768x77.png 768w, https://euro.gmkb.live/wp-content/uploads/2024/04/Su-kien-du-doan-euro-2024-1-1536x154.png 1536w, https://euro.gmkb.live/wp-content/uploads/2024/04/Su-kien-du-doan-euro-2024-1-2048x205.png 2048w"
                                                    sizes="(max-width: 2535px) 100vw, 2535px" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="row" id="row-1836829439">

                            <div id="col-338766187" class="col small-12 large-12">
                                <div class="col-inner">


                                    <h3 style="text-align: justify;">Thể lệ tham gia:</h3>
                                    <p style="text-align: justify;">&#8211; Tất cả tài khoản thuộc hệ thống <span
                                            style="color: #ffff00;"><strong>HOLA BET</strong></span><br />&#8211; Mỗi
                                        tài khoản được tham gia dự đoán tất cả 3 hạng mục, chỉ được dự đoán 1 lần duy
                                        nhất</p>

                                    <div class="accordion">
                                        <div id="accordion-1078620403" class="accordion-item">
                                            <a id="accordion-1078620403-label" class="accordion-title plain"
                                                href="#accordion-item-dỰ-ĐoÁn-8-Team-vÀo-tỨ-kẾt" aria-expanded="false"
                                                aria-controls="accordion-1078620403-content">
                                                <button class="toggle" aria-label="Chuyển đổi"><i
                                                        class="icon-angle-down"></i></button>
                                                <span>GROUP STAGE PREDICTION</span>
                                            </a>
                                            <div id="accordion-1078620403-content" class="accordion-inner"
                                                aria-labelledby="accordion-1078620403-label">

                                                <p style="text-align: justify;">– Dự đoán 8 Team mạnh nhất lọt vào Vòng
                                                    Tứ kết. Đúng 1 Team được <span
                                                        style="color: #ffff00;"><strong>100.000 đồng</strong></span>,
                                                    nếu trúng cả 8 Team Hội viên sẽ nhận được <span
                                                        style="color: #ffff00;"><strong>2.000.000
                                                            đồng</strong></span>.<br />&#8211; Thời gian dự đoán đến hết
                                                    <span
                                                        style="color: #00ffff;"><strong>28/06</strong></span><br />&#8211;
                                                    <span style="color: #00ffff;"><strong>200 giải</strong></span> (Tính
                                                    từ tài khoản dự đoán chính xác nhất)
                                                </p>
                                            </div>
                                        </div>

                                        <div id="accordion-2044041292" class="accordion-item">
                                            <a id="accordion-2044041292-label" class="accordion-title plain"
                                                href="#accordion-item-dỰ-ĐoÁn-4-Team-vÀo-bÁn-kẾt" aria-expanded="false"
                                                aria-controls="accordion-2044041292-content">
                                                <button class="toggle" aria-label="Chuyển đổi"><i
                                                        class="icon-angle-down"></i></button>
                                                <span>1/16 STAGE PREDICTION</span>
                                            </a>
                                            <div id="accordion-2044041292-content" class="accordion-inner"
                                                aria-labelledby="accordion-2044041292-label">

                                                <p>– Dự đoán 4 Team mạnh nhất lọt vào Vòng Bán kết. Hội viên dự đoán đúng
                                                    3/4 Team sẽ nhận được <span style="color: #ffff00;"><strong>1.000.000
                                                            đồng</strong></span>. Nếu đúng cả 4 Team sẽ nhận được <span
                                                        style="color: #ffff00;"><strong>3.000.000 đồng</strong></span>.
                                                </p>
                                                <p>Thời gian dự đoán đết hết <span
                                                        style="color: #00ffff;"><strong>04/07</strong></span>.<br />Giới
                                                    hạn <span style="color: #00ffff;"><strong>10 tài
                                                            khoản</strong></span> dự đoán đúng và nhEngland nhất.</p>
                                            </div>
                                        </div>

                                        <div id="accordion-3546395525" class="accordion-item">
                                            <a id="accordion-3546395525-label" class="accordion-title plain"
                                                href="#accordion-item-dỰ-ĐoÁn-Team-vÔ-ĐỊch-vÀ-tỶ-sỐ-trẬn-ĐẤu"
                                                aria-expanded="false" aria-controls="accordion-3546395525-content">
                                                <button class="toggle" aria-label="Chuyển đổi"><i
                                                        class="icon-angle-down"></i></button>
                                                <span>DỰ ĐOÁN Team VÔ ĐỊCH VÀ TỶ SỐ TRẬN ĐẤU</span>
                                            </a>
                                            <div id="accordion-3546395525-content" class="accordion-inner"
                                                aria-labelledby="accordion-3546395525-label">

                                                <p>– Dự đoán đúng Team VÔ ĐỊCH sẽ nhận được <span
                                                        style="color: #ffff00;"><strong>2.000.000 đồng</strong></span>.
                                                    Đồng thời nếu dự đoán đúng luôn cả TỶ SỐ trong 90 phút trận Chung
                                                    kết sẽ nhận được tổng số tiền là <span
                                                        style="color: #ffff00;"><strong>5.000.000 đồng</strong></span>.
                                                </p>
                                                <p>Thời gian dự đoán đết hết <span
                                                        style="color: #00ffff;"><strong>11/07</strong></span>.<br />Giới
                                                    hạn <strong><span style="color: #00ffff;">05 tài
                                                            khoản</span></strong> dự đoán đúng và nhEngland nhất.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <h3>Điều kiện nhận thưởng:</h3>
                                    <p>&#8211; Chỉ các tài khoản thuộc <span style="color: #ffff00;"><strong>HOLA
                                                BET</strong></span> mới đủ điều kiện
                                        nhận thưởng<br />&#8211; Nếu phát hiện gian lận, hệ thống sẽ tự động hủy tư cách
                                        tham gia.<br />&#8211; Quyết định của <span
                                            style="color: #ffff00;"><strong>HOLABET.COM</strong></span> là quyết định
                                        cuối
                                        cùng.</p>
                                    <h3>Thời gian trả thưởng:</h3>
                                    <p>&#8211; Hạng mục 1: 09/07<br />&#8211; Hạng mục 2: 13/07<br />&#8211; Hạng mục 3:
                                        16/07</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>


                <section class="section dark" id="section_1442483630">
                    <div class="bg section-bg fill bg-fill  ">





                    </div>



                    <div class="section-content relative">


                        <div class="row" id="row-1426078896">


                            <div id="col-1341136802" class="col medium-12 small-12 large-12">
                                <div class="col-inner text-center">



                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_768599716">
                                        <div class="img-inner dark">
                                            <img loading="lazy" decoding="async" width="152" height="190"
                                                src="https://euro.gmkb.live/wp-content/uploads/2024/03/euro2024_onDark.webp"
                                                class="attachment-original size-original" alt="" />
                                        </div>

                                    </div>



                                </div>
                            </div>



                        </div>

                    </div>
                </section>




            </div>



        </main>

        <footer id="footer" class="footer-wrapper">


            <a href="#top"
                class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle"
                id="top-link" aria-label="Lên đầu trang"><i class="icon-angle-up"></i></a>

        </footer>

    </div>

    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">


        <div class="sidebar-menu no-scrollbar text-center">


            <ul class="nav nav-sidebar nav-vertical nav-uppercase nav-anim" data-tab="1">
                <li class="header-search-form search-form html relative has-icon">
                    <div class="header-search-form-wrapper">
                        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                            <form method="get" class="searchform" action="https://euro.gmkb.live/" role="search">
                                <div class="flex-row relative">
                                    <div class="flex-col flex-grow">
                                        <input type="search" class="search-field mb-0" name="s" value="" id="s"
                                            placeholder="Search ..." />
                                    </div>
                                    <div class="flex-col">
                                        <button type="submit"
                                            class="ux-search-submit submit-button secondary button icon mb-0"
                                            aria-label="Nộp">
                                            <i class="icon-search"></i> </button>
                                    </div>
                                </div>
                                <div class="live-search-results text-left z-top"></div>
                            </form>
                        </div>
                    </div>
                </li>
                <li
                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-24">
                    <a href="#" aria-current="page">HOME PAGE</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20"><a href="#">FIXTURES</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23"><a href="#">Event</a>
                </li>
            </ul>


        </div>


    </div>
    <div class="wcbongvipasia-nav">
        <ul>
            <li><a href="#dudoan1" rel="nofollow"><i class="ticon-heart"></i>PREDICTION 1</a></li>
            <li><a href="#dudoan2" rel="nofollow"><i class="ticon-zalo-circle2"></i>PREDICTION 2</a>
            </li>
            <li class="phone-mobile">
                <a href="#" rel="nofollow" class="button">
                    <span class="phone_animation animation-shadow">
                        <i class="icon-phone-w" aria-hidden="true"></i>
                    </span>
                    <span class="btn_phone_txt">HOME PAGE</span>
                </a>
            </li>
            <li><a href="#dudoan3" rel="nofollow"><i class="ticon-messenger"></i>PREDICTION 3</a>
            </li>
            <li><a href="#" class="chat_animation"><i class="bvasia" aria-hidden="true" title="LỊCH THI ĐẤU"></i>FIXTURES</a>
            </li>
        </ul>
    </div>
    <link rel='stylesheet' id='flatsome-countdown-style-css'
        href='https://euro.gmkb.live/wp-content/themes/flatsome/inc/shortcodes/ux_countdown/ux-countdown.css?ver=6.5.3'
        type='text/css' media='all' />
    <script type="text/javascript" src="https://euro.gmkb.live/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript" src="https://euro.gmkb.live/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--primary: #c78d04;--wp--preset--color--secondary: #e3aa0b;--wp--preset--color--success: #7a9c59;--wp--preset--color--alert: #b20000;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}body { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){margin-left: auto !important;margin-right: auto !important;}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}a:where(:not(.wp-element-button)){text-decoration: none;}.wp-element-button, .wp-block-button__link{background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;line-height: inherit;padding: calc(0.667em + 2px) calc(1.333em + 2px);text-decoration: none;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-color{color: var(--wp--preset--color--primary) !important;}.has-secondary-color{color: var(--wp--preset--color--secondary) !important;}.has-success-color{color: var(--wp--preset--color--success) !important;}.has-alert-color{color: var(--wp--preset--color--alert) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-background-color{background-color: var(--wp--preset--color--primary) !important;}.has-secondary-background-color{background-color: var(--wp--preset--color--secondary) !important;}.has-success-background-color{background-color: var(--wp--preset--color--success) !important;}.has-alert-background-color{background-color: var(--wp--preset--color--alert) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-border-color{border-color: var(--wp--preset--color--primary) !important;}.has-secondary-border-color{border-color: var(--wp--preset--color--secondary) !important;}.has-success-border-color{border-color: var(--wp--preset--color--success) !important;}.has-alert-border-color{border-color: var(--wp--preset--color--alert) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
    <script type="text/javascript" src="https://euro.gmkb.live/wp-includes/js/hoverIntent.min.js?ver=1.10.2"
        id="hoverIntent-js"></script>
    <script type="text/javascript" id="flatsome-js-js-extra">
    /* <![CDATA[ */
    var flatsomeVars = {
        "theme": {
            "version": "3.18.7"
        },
        "ajaxurl": "https:\/\/euro.gmkb.live\/wp-admin\/admin-ajax.php",
        "rtl": "",
        "sticky_height": "70",
        "stickyHeaderHeight": "0",
        "scrollPaddingTop": "0",
        "assets_url": "https:\/\/euro.gmkb.live\/wp-content\/themes\/flatsome\/assets\/",
        "lightbox": {
            "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
            "close_btn_inside": false
        },
        "user": {
            "can_edit_pages": false
        },
        "i18n": {
            "mainMenu": "Menu ch\u00ednh",
            "toggleButton": "Chuy\u1ec3n \u0111\u1ed5i"
        },
        "options": {
            "cookie_notice_version": "1",
            "swatches_layout": false,
            "swatches_disable_deselect": false,
            "swatches_box_select_event": false,
            "swatches_box_behavior_selected": false,
            "swatches_box_update_urls": "1",
            "swatches_box_reset": false,
            "swatches_box_reset_limited": false,
            "swatches_box_reset_extent": false,
            "swatches_box_reset_time": 300,
            "search_result_latency": "0"
        }
    };
    /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://euro.gmkb.live/wp-content/themes/flatsome/assets/js/flatsome.js?ver=a0a7aee297766598a20e"
        id="flatsome-js-js"></script>
    <script type="text/javascript"
        src="https://euro.gmkb.live/wp-content/themes/flatsome/inc/shortcodes/ux_countdown/countdown-script-min.js?ver=6.5.3"
        id="flatsome-countdown-script-js"></script>
    <script type="text/javascript"
        src="https://euro.gmkb.live/wp-content/themes/flatsome/inc/shortcodes/ux_countdown/ux-countdown.js?ver=3.2.6"
        id="flatsome-countdown-theme-js-js"></script>
    <script type="text/javascript" src="js/popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showLoadingPopup() {
            Swal.fire({
                title: 'Đang gửi dữ liệu',
                html: 'Vui lòng đợi...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });
        }

        function selectResult(buttonId, resultId) {
            // Xóa lớp 'selected' từ tất cả các nút trong cùng một bảng
            const buttons = document.querySelectorAll(`button.result-button`);
            buttons.forEach(function(button) {
                if (button.parentElement.parentElement === document.getElementById(resultId).parentElement) {
                    button.classList.remove('selected');
                }
            });

            // Thêm lớp 'selected' vào nút được chọn
            document.getElementById(buttonId).classList.add('selected');

            // Đặt giá trị của input ẩn
            document.getElementById(resultId).value = buttonId;
        }

        // Hàm để ẩn popup loading
        function hideLoadingPopup() {
            Swal.close();
        }
        
        // Hàm để gửi dữ liệu form bằng AJAX
        function everyday() {
            // Lấy dữ liệu từ form
            showLoadingPopup();
            var formData = new FormData(document.getElementById("every-day"));

            // Gửi dữ liệu bằng AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "submit-form/every-day.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    hideLoadingPopup();
                    // Xử lItaly kết quả nhận được từ submit.php
                    var response = xhr.responseText;
                    // Hiển thị popup thông bAustria
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công!',
                        text: response,
                        confirmButtonText: 'Xác nhận'
                    });
                }
            };
            xhr.send(formData);

            // Dừng form submit để tránh tải lại trang
            return false;
        }
        function vao16doi() {
            // Lấy dữ liệu từ form
            showLoadingPopup();
            var formData = new FormData(document.getElementById("vao-16-doi"));

            // Gửi dữ liệu bằng AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "submit-form/vao-16-doi.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    hideLoadingPopup();
                    // Xử lItaly kết quả nhận được từ submit.php
                    var response = xhr.responseText;
                    // Hiển thị popup thông bAustria
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công!',
                        text: response,
                        confirmButtonText: 'Xác nhận'
                    });
                }
            };
            xhr.send(formData);

            // Dừng form submit để tránh tải lại trang
            return false;
        }
        function banket() {
            // Lấy dữ liệu từ form
            showLoadingPopup();
            var formData = new FormData(document.getElementById("4-doi-ban-ket"));

            // Gửi dữ liệu bằng AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "submit-form/4-doi-ban-ket.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    hideLoadingPopup();
                    // Xử lItaly kết quả nhận được từ submit.php
                    var response = xhr.responseText;
                    // Hiển thị popup thông bAustria
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công!',
                        text: response,
                        confirmButtonText: 'Xác nhận'
                    });
                }
            };
            xhr.send(formData);

            // Dừng form submit để tránh tải lại trang
            return false;
        }

        function vodich() {
            // Lấy dữ liệu từ form
            showLoadingPopup();
            var formData = new FormData(document.getElementById("vo-dich"));

            // Gửi dữ liệu bằng AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "submit-form/vo-dich.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    hideLoadingPopup();
                    // Xử lItaly kết quả nhận được từ submit.php
                    var response = xhr.responseText;
                    // Hiển thị popup thông bAustria
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công!',
                        text: response,
                        confirmButtonText: 'Xác nhận'
                    });
                }
            };
            xhr.send(formData);

            // Dừng form submit để tránh tải lại trang
            return false;
        }
    </script>

</body>

<!-- Mirrored from euro.gmkb.live/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2024 21:38:34 GMT -->

</html>
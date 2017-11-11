!function(e){"use strict";function t(e){for(var t={},r=t.toString,n="Boolean Number String Function Array Date RegExp Object Error".split(" "),o=0;o<n.length;o++){var i=n[o];t["[object "+i+"]"]=i.toLowerCase()}return null===e?e+"":"object"==typeof e||"function"==typeof e?t[r.call(e)]||"object":typeof e}function r(e){return"function"===t(e)}var n=e._||(e._={}),o=!1,i=/xyz/.test(function(){})?/\bsuper\b/:/.*/;n.Class=function(){},n.Class.extend=function a(e){function t(e,t,r){return function(){return this._super=e[t],r.apply(this,arguments)}}function n(){!o&&r(this.construct)&&this.construct.apply(this,arguments)}var s=this.prototype;o=!0;var c=new this;o=!1;for(var u in e)if("statics"===u){var f=e[u];for(var l in f)n[l]=f[l]}else r(s[u])&&r(e[u])&&i.test(e[u])?c[u]=t(s,u,e[u]):c[u]=e[u];return n.prototype=c,n.prototype.constructor=n,n.extend=a,n}}(window,void 0),function(e){"use strict";function t(e,t,r){var n;return n=t&&t.hasOwnProperty("constructor")?t.constructor:function(){e.apply(this,arguments)},$.extend(n,e),s.prototype=e.prototype,n.prototype=new s,t&&$.extend(n.prototype,t),r&&$.extend(n,r),n.prototype.constructor=n,n.__super__=e.prototype,n}function r(e,r){var n=t(this,e,r);return n.extend=this.extend,n}function n(e){"undefined"!=typeof e&&e.callbacks?this.callbacks=e.callbacks:this.callbacks={}}var o=/\s+/,i=[].slice,a=e._||(e._={}),s=function(){};n.extend=r,n.prototype={on:function(e,t,r){var n,i,a,s,c;if(!t)return this;for(e=e.split(o),n=this.callbacks;i=e.shift();)c=n[i],a=c?c.tail:{},a.next=s={},a.context=r,a.callback=t,n[i]={tail:s,next:c?c.next:a};return this},off:function(e,t,r){var n,i,s,c,u,f;if(i=this.callbacks){if(!(e||t||r))return delete this.callbacks,this;for(e=e?e.split(o):a.keys(i);n=e.shift();)if(s=i[n],delete i[n],s&&(t||r))for(c=s.tail;(s=s.next)!==c;)u=s.callback,f=s.context,(t&&u!==t||r&&f!==r)&&this.on(n,u,f);return this}},trigger:function(e){var t,r,n,a,s,c,u;if(!(n=this.callbacks))return this;for(c=n.all,e=e.split(o),u=i.call(arguments,1);t=e.shift();){if(r=n[t])for(a=r.tail;(r=r.next)!==a;)r.callback.apply(r.context||this,u);if(r=c)for(a=r.tail,s=[t].concat(u);(r=r.next)!==a;)r.callback.apply(r.context||this,s)}return this}},a.Events=n,a.eventCenter=new n}(window,void 0),"object"!=typeof JSON&&(JSON={}),function(){"use strict";function f(e){return e<10?"0"+e:e}function this_value(){return this.valueOf()}function quote(e){return rx_escapable.lastIndex=0,rx_escapable.test(e)?'"'+e.replace(rx_escapable,function(e){var t=meta[e];return"string"==typeof t?t:"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+e+'"'}function str(e,t){var r,n,o,i,a,s=gap,c=t[e];switch(c&&"object"==typeof c&&"function"==typeof c.toJSON&&(c=c.toJSON(e)),"function"==typeof rep&&(c=rep.call(t,e,c)),typeof c){case"string":return quote(c);case"number":return isFinite(c)?String(c):"null";case"boolean":case"null":return String(c);case"object":if(!c)return"null";if(gap+=indent,a=[],"[object Array]"===Object.prototype.toString.apply(c)){for(i=c.length,r=0;r<i;r+=1)a[r]=str(r,c)||"null";return o=0===a.length?"[]":gap?"[\n"+gap+a.join(",\n"+gap)+"\n"+s+"]":"["+a.join(",")+"]",gap=s,o}if(rep&&"object"==typeof rep)for(i=rep.length,r=0;r<i;r+=1)"string"==typeof rep[r]&&(n=rep[r],o=str(n,c),o&&a.push(quote(n)+(gap?": ":":")+o));else for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(o=str(n,c),o&&a.push(quote(n)+(gap?": ":":")+o));return o=0===a.length?"{}":gap?"{\n"+gap+a.join(",\n"+gap)+"\n"+s+"}":"{"+a.join(",")+"}",gap=s,o}}var rx_one=/^[\],:{}\s]*$/,rx_two=/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,rx_three=/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,rx_four=/(?:^|:|,)(?:\s*\[)+/g,rx_escapable=/[\\\"\u0000-\u001f\u007f-\u009f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,rx_dangerous=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g;"function"!=typeof Date.prototype.toJSON&&(Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null},Boolean.prototype.toJSON=this_value,Number.prototype.toJSON=this_value,String.prototype.toJSON=this_value);var gap,indent,meta,rep;"function"!=typeof JSON.stringify&&(meta={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},JSON.stringify=function(e,t,r){var n;if(gap="",indent="","number"==typeof r)for(n=0;n<r;n+=1)indent+=" ";else"string"==typeof r&&(indent=r);if(rep=t,t&&"function"!=typeof t&&("object"!=typeof t||"number"!=typeof t.length))throw new Error("JSON.stringify");return str("",{"":e})}),"function"!=typeof JSON.parse&&(JSON.parse=function(text,reviver){function walk(e,t){var r,n,o=e[t];if(o&&"object"==typeof o)for(r in o)Object.prototype.hasOwnProperty.call(o,r)&&(n=walk(o,r),void 0!==n?o[r]=n:delete o[r]);return reviver.call(e,t,o)}var j;if(text=String(text),rx_dangerous.lastIndex=0,rx_dangerous.test(text)&&(text=text.replace(rx_dangerous,function(e){return"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})),rx_one.test(text.replace(rx_two,"@").replace(rx_three,"]").replace(rx_four,"")))return j=eval("("+text+")"),"function"==typeof reviver?walk({"":j},""):j;throw new SyntaxError("JSON.parse")})}(),define("o2console",function(){"use strict";return{consoleConfig:{staff:"%c本页面由%c 凹凸实验室（JDC-多终端研发部） %c负责开发，你可以通过 https://aotu.io 了解我们。\n\n如果你对我们在做的事情也有兴趣，欢迎加入 %caotu@jd.com%c（注明来自console）\n\n",freshTec:"%c%c",funExp:"%c%c"},consoleConfigFunc:function(){if(window.console&&console.log&&navigator.userAgent.toLowerCase().match(/chrome\/([\d.]+)/)){var e="undefined"!=typeof o2ConsoleConfig?o2ConsoleConfig:this.consoleConfig,t="font-weight: bold;color: #6190e8;",r="font-size: 12px;color: #6190e8;";console.log(e.staff+e.freshTec+e.funExp,"color: #6190e8;",t,r,t,r,t,r,t,r)}}}}),define("store",function(){"use strict";function e(){try{return o in n&&n[o]}catch(e){return!1}}var t,r={},n="undefined"!=typeof window?window:global,o=(n.document,"localStorage");r.disabled=!1,r.version="1.3.20",r.set=function(e,t){},r.get=function(e,t){},r.has=function(e){return void 0!==r.get(e)},r.remove=function(e){},r.clearByReg=function(e){},r.clear=function(){},r.transact=function(e,t,n){null==n&&(n=t,t=null),null==t&&(t={});var o=r.get(e,t);n(o),r.set(e,o)},r.getAll=function(){var e={};return r.forEach(function(t,r){e[t]=r}),e},r.forEach=function(){},r.serialize=function(e){return JSON.stringify(e)},r.deserialize=function(e){if("string"==typeof e)try{return JSON.parse(e)}catch(t){return e||void 0}},e()&&(t=n[o],r.set=function(e,n){return void 0===n?r.remove(e):(t.setItem(e,r.serialize(n)),n)},r.get=function(e,n){var o=r.deserialize(t.getItem(e));return void 0===o?n:o},r.remove=function(e){t.removeItem(e)},r.clearByReg=function(e){var r=new RegExp(e);for(var n in t)r.test(n)&&this.remove(n)},r.clear=function(){t.clear()},r.forEach=function(e){for(var n=0;n<t.length;n++){var o=t.key(n);e(o,r.get(o))}});try{var i="__storejs__";r.set(i,i),r.get(i)!=i&&(r.disabled=!0),r.remove(i)}catch(a){r.disabled=!0}return r.enabled=!r.disabled,r}),define("o2tpl",function(){"use strict";var e=function(t,r){var n=/[^\w\-\.:]/.test(t)?new Function(e.arg+",tmpl","var _e=tmpl.encode"+e.helper+",_s='"+t.replace(e.regexp,e.func)+"';return _s;"):e.cache[t]=e.cache[t]||e(e.load(t));return r?n(r,e):function(t){return n(t,e)}};return e.cache={},e.load=function(e){return document.getElementById(e).innerHTML},e.regexp=/([\s'\\])(?!(?:[^{]|\{(?!%))*%\})|(?:\{%(=|#)([\s\S]+?)%\})|(\{%)|(%\})/g,e.func=function(e,t,r,n,o,i){return t?{"\n":"\\n","\r":"\\r","\t":"\\t"," ":" "}[t]||"\\"+t:r?"="===r?"'+_e("+n+")+'":"'+("+n+"==null?'':"+n+")+'":o?"';":i?"_s+='":void 0},e.encReg=/[<>&"'\x00]/g,e.encMap={"<":"&lt;",">":"&gt;","&":"&amp;",'"':"&quot;","'":"&#39;"},e.encode=function(t){return(null==t?"":""+t).replace(e.encReg,function(t){return e.encMap[t]||""})},e.arg="o",e.helper=",print=function(s,e){_s+=e?(s==null?'':s):_e(s);},include=function(s,d){_s+=tmpl(s,d);}",e}),function(e){"use strict";function t(e){var t=!1,r=e.split("?")[1];if(r)if(r=r.split("#")[0]){r=r.split("&");for(var n=0,o=r.length;n<o;n++){var i=r[n].split("=");t=2===i.length&&("debug"===i[0]&&"true"===i[1])}}else t=!1;else t=!1;return t}for(var r,n=e._||(e._={}),o={},i=["assert","cd","clear","count","countReset","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","select","table","time","timeEnd","timeStamp","timeline","timelineEnd","trace","warn"],a=i.length,s=window.console=window.console||{},c=function(){};a--;)r=i[a],s[r]||(s[r]=c);var u=t(window.location.href);o=function(e){this.debug=u},o.prototype={log:function(e){this.debug&&s.log(e)},warn:function(e){this.debug&&s.warn(e)},error:function(e){this.debug&&s.error(e)},debug:function(e){this.debug&&s.debug(e)},info:function(e){this.debug&&s.debug(e)}},o.prototype.errorReport=function(e,t){},n.console=new o}(window,void 0),function(){var e={getDownloadSpeed:function(){try{var e=(window.performance||window.webkitPerformance||{}).timing;if(e){var t=$("html").html().length,r=t/1024,n=performance.timing.responseEnd-performance.timing.requestStart;return Math.round(.25*r/(n/1e3))}}catch(o){}return 0},getRank:function(){var e=this.getDownloadSpeed();return e<25?31:e<50?32:e<75?33:e<100?34:e<150?35:e<200?36:e<250?37:e<300?38:e<350?39:e<400?40:e<450?41:e<500?42:e<1e3?43:44},getSpeedInfo:function(){var e=Math.floor(100*Math.random()),t=this.getDownloadSpeed(),r=window.pageConfig||{},n=r&&r.O2_REPORT;return void 0!==n&&"number"==typeof n||(n=100),n>0&&e>=0&&e<=n&&t>0?"s"+this.getRank()+"="+t:""},getScreenSection:function(){var e=document.documentElement.clientWidth;return e>=1190?68:e>=990?69:70},getScreenRatio:function(){var e=window.screen.width,t=window.screen.height,r={51:{width:800,height:600},52:{width:960,height:640},53:{width:1024,height:768},54:{width:1136,height:640},55:{width:1152,height:864},56:{width:1280,height:768},57:{width:1280,height:800},58:{width:1280,height:960},59:{width:1280,height:1024},60:{width:1366,height:768},61:{width:1440,height:900},62:{width:1600,height:1024},63:{width:1600,height:1200},64:{width:1920,height:1080},65:{width:1920,height:1200},66:{width:2560,height:1440},67:{width:2560,height:1600}};for(var n in r)if(e===r[n].width&&t===r[n].height)return n},getBrowser:function(){var e,t={},r=navigator.userAgent.toLowerCase();return(e=r.match(/rv:([\d.]+)\) like gecko/))?t.ie=e[1]:(e=r.match(/msie ([\d.]+)/))?t.ie=e[1]:(e=r.match(/firefox\/([\d.]+)/))?t.firefox=e[1]:(e=r.match(/metasr/))?t.sougou=!0:(e=r.match(/qqbrowser/))?t.qq=!0:(e=r.match(/version\/([\d.]+).*safari/))?t.safari=e[1]:(e=r.match(/chrome\/([\d.]+)/))?t.chrome=e[1]:(e=r.match(/opera.([\d.]+)/))?t.opera=e[1]:(e=r.match(/ipad/))?t.ipad=!0:0,t.chrome?11:t.firefox?12:t.safari?13:t.opera?14:t.ie?"6.0"===t.ie?15:"7.0"===t.ie?16:"8.0"===t.ie?17:"9.0"===t.ie?18:"10.0"===t.ie?19:"11.0"===t.ie?20:21:t.sougou?22:t.qq?23:t.ipad?24:25},getBaseData:function(){var e=window._REPORT_,t=e&&e.START,r=[];if(e&&t){var n=e.CSS,o=e.FS,i=e.JS,a=e.DOM;n&&r.push("s72="+(n.getTime()-t.getTime())),o&&r.push("s73="+(o.getTime()-t.getTime())),i&&r.push("s74="+(i.getTime()-t.getTime())),a&&r.push("s75="+(a.getTime()-t.getTime())),r.push("s76="+((new Date).getTime()-t.getTime()))}return r.join("&")},getRetina:function(){return window.devicePixelRatio>1||window.matchMedia&&window.matchMedia("(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-device-pixel-ratio: 1.5), (min-resolution: 144dpi), (min-resolution: 1.5dppx)").matches?"s71=1":""},processRetina:function(){var e=this.getRetina();e&&this.processCore(e)},getSystem:function(){var e=navigator.userAgent.toLowerCase();if(e.indexOf("macintosh")!==-1||e.indexOf("mac os x")!==-1)return 6;if(e.indexOf("linux")!==-1)return 7;var t={"nt 5.1":1,"nt 5.2":1,"nt 6.0":2,"nt 6.1":3,"nt 6.2":4,"nt 6.3":4,"nt 6.4":5,"nt 10.0":5};for(var r in t)if(e.indexOf(r)!==-1)return t[r];return 8},_getErrorInfo:function(e){var t=[];t.push("s"+this.getSystem()+"=1"),t.push("s"+this.getBrowser()+"=1"),t.push("s30=1");var r=this.getDownloadSpeed();return r>0&&t.push("s"+this.getRank()+"="+r),t.push("s"+(50+e)+"=1"),t.join("&")},processBackup:function(e){this.pBackupId&&this.processCore(this._getErrorInfo(e),this.pBackupId)},processHidedFloor:function(e){this.pFloorId&&this.processCore(this._getErrorInfo(e),this.pFloorId)},processTempl:function(e){this.pTemplId&&this.processCore(this._getErrorInfo(e),this.pTemplId)},processSpeed:function(){var e=this.getSpeedInfo();e&&this.processCore(e)},processJsError:function(){var e=window,t=window.pageConfig||{},r=Math.floor(100*Math.random()),n=t&&t.O2_ERROR_REPORT;void 0!==n&&"number"==typeof n||(n=100),n>0&&r>=0&&r<=n&&$(e).bind("error.o2report",function(t,r,n,o,i){var a="";if(o=o||e.event&&e.event.errorCharacter||0,i&&i.stack)t=i.stack.toString();else if(arguments.callee){for(var s=[t],c=arguments.callee.caller,u=3;c&&--u>0&&(s.push(c.toString()),c!==c.caller);)c=c.caller;t=s.join(",")}if(a=JSON.stringify(t)+(r?";URL:"+r:"")+(n?";Line:"+n:"")+(o?";Column:"+o:""),e.lastErrMsg){if(e.lastErrMsg.indexOf(t)>-1)return;e.lastErrMsg+="|"+t}else e.lastErrMsg=t;setTimeout(function(){a=encodeURIComponent(a);var e=new Image;e.src="//wq.jd.com/webmonitor/collect/badjs.json?Content="+a+"&t="+Math.random()},1e3)})},_firstReport:!1,processAllData:function(){if(!this._firstReport){this._firstReport=!0;var e=this.getSpeedInfo(),t=this.getRetina();if(t||e){var r=this.getBaseData(),n=this.getBrowser(),o=this.getScreenRatio(),i=this.getSystem(),a=[];a.push("s"+i+"=1"),a.push("s"+n+"=1"),a.push("s30=1"),e&&a.push(e),o&&a.push("s"+o+"=1"),a.push("s"+this.getScreenSection()+"=1"),t&&a.push(t),r&&a.push(r),this.processCore(a.join("&"))}}},image:null,processCore:function(e,t){var r=t||this.pid;this.image=new Image,this.image.src="//fd.3.cn/cesu/r?pid="+r+"&"+e+"&_="+(new Date).getTime()},debug:function(e){"undefined"!=typeof console.log&&console.log(e)},pid:0,pFloorId:0,pBackupId:0,pTemplId:0,init:function(e,t,r,n){var o=this;return e?(o.pid=e,o.pFloorId=r,o.pBackupId=t,o.pTemplId=n,$(window).bind("load.o2report",function(){o.processAllData()}),void o.processJsError()):void o.debug("pageId must be provided!")}};"function"==typeof define&&(define.amd||define.cmd)?define("report",function(){return e}):window.o2Report=e}(),define("ajax_setup",function(e){var t=e("store");!function(){function e(e,r){var n=r.times,o=e.timeout,i=null;return function(a,s,c){function u(e){e.isBackup&&(e.cache=!0,_.eventCenter.trigger(l.jsonpCallback+":backup",e.url)),l.data=l.__data||{},$.extend(l,{url:l.originalUrl,forceStore:!1},e),$.ajax(l).retry({times:e.times,timeout:r.timeout,statusCodes:r.statusCodes,backup:r.backup}).pipe(p.resolve,p.reject)}function f(){var e=t.get(l.storeKey);e?u({forceStore:!0,times:0}):p.rejectWith(this,arguments)}var l=this,p=new $.Deferred,h=e.getResponseHeader("Retry-After");return i&&clearTimeout(i),l.forceBackup&&(n=0),n>0&&(!e.statusCodes||$.inArray(a.status,e.statusCodes)>-1)?(h&&(o=isNaN(h)?new Date(h).getTime()-$.now():1e3*parseInt(h,10),(isNaN(o)||o<0)&&(o=e.timeout)),void 0!==o&&n!==r.times?i=setTimeout(function(){u({times:n-1})},o):u({times:n-1})):0===n&&(r.backup&&r.backup.length?u({url:r.backup.shift(),times:0,isBackup:!0}):f()),p}}$.ajaxPrefilter(function(r,n,o){function i(e){var n=r.needStore,o=r.storeKey,i=r.storeCheck;if(n=!!n&&t.enabled){var a=t.get(o);if(!a||!i(a)){if("string"==typeof e)try{e=JSON.parse(e)}catch(s){e={}}t.set(o,e)}}}var a=$.Deferred();return o.done(function(e){var t=r.dataCheck;$.isFunction(t)&&!t(e)?(n.url=n.backup,n.dataCheck=null,n.forceBackup=!0,a.rejectWith(n,arguments)):(i(e),a.resolveWith(n,arguments))}),o.fail(a.reject),o.retry=function(t){return t.timeout&&(this.timeout=t.timeout),t.statusCodes&&(this.statusCodes=t.statusCodes),t.backup&&($.isArray(t.backup)?t.backup=Array.prototype.slice.call(t.backup):t.backup=[t.backup]),this.pipe(null,e(this,t))},a.promise(o)}),$.ajaxTransport("+script",function(e){var r=e.needStore,n=e.storeKey,o=e.storeCheck,i=e.dataType,a=e.forceStore;if(r=!!r&&t.enabled){var s=t.get(n);if(s&&(o(s)||a))return{send:function(t,r){var n={};n[i]=e.jsonpCallback+"("+JSON.stringify(s)+")",r(200,"success",n,"")},abort:function(){_.console.log("abort ajax transport for local cache")}}}})}()}),define("load_async",["ajax_setup"],function(e){return e("ajax_setup"),function(e){e=$.extend({url:"",params:{},timeout:3e3,times:2,backup:null,needStore:!1,storeSign:null,cache:!1,dataCheck:null,dataType:"jsonp",type:"get",scriptCharset:"UTF-8"},e);var t=function(e){var t=e;return/forcebot/i.test(location.href)&&(t=$.extend({forceBot:1},t)),t};return $.ajax({type:e.type,url:e.url,scriptCharset:e.scriptCharset,originalUrl:e.url,data:t(e.params),__data:t(e.params),dataType:e.dataType,jsonp:"callback",jsonpCallback:e.jsonpCallback,cache:e.cache,timeout:e.timeout,dataCheck:e.dataCheck,storeKey:e.url,needStore:e.needStore,storeCheck:function(t){return!!t&&t.version&&t.version===e.storeSign}}).retry({timeout:e.timeout,times:e.times,backup:e.backup}).then(function(t){if(t&&(t.__uri=e.url),e.params&&e.params.__trigger){var r=e.jsonpCallback+":end";_.eventCenter.trigger(r,t)}},function(t){_.console.log(e.url),_.console.log("请求接口和兜底都失败了")})}});
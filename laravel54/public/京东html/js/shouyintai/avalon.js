!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):e.avalon=t()}(this,function(){"use strict"
function e(e){this.size=0,this.limit=e,this.head=this.tail=void 0,this._keymap={}}function t(e,t){return Yn[e]&&r.warn(e,"directive have defined! "),Yn[e]=t,t.update||(t.update=function(){}),t.delay&&(Un[e]=1),t}function n(e){for(var t in Un)if("ms-"+t in e)return!0}function r(e){return new r.init(e)}function i(e,t){for(var n in t)e[n]=t[n]
return e}function o(e,t){"string"==typeof e&&(e=e.match(Zn)||[])
for(var n={},r=void 0!==t?t:1,i=0,o=e.length;o>i;i++)n[e[i]]=r
return n}function a(e){return r._quote(e)}function s(){rr&&r.config.debug&&Function.apply.call(console.log,console,arguments)}function c(){if(rr&&r.config.debug){var e=console.warn||console.log
Function.apply.call(e,console,arguments)}}function u(e,t){throw(t||Error)(e)}function l(){}function d(e){return null!==e&&"object"==typeof e}function f(e,t,n){n||(n=1),null==t&&(t=e||0,e=0)
for(var r=-1,i=Math.max(0,Math.ceil((t-e)/n)),o=Array(i);++r<i;)o[r]=e,e+=n
return o}function h(e){return e.replace(ir,"$1-$2").toLowerCase()}function p(e){return!e||e.indexOf("-")<0&&e.indexOf("_")<0?e:e.replace(or,function(e){return e.charAt(1).toUpperCase()})}function v(e,t,n){return ar.call(e,t,n)}function m(e){return e=e||"avalon",(Math.random()+Math.random()+"").replace(sr,e)}function g(e){return e.uuid||(e.uuid=m("e"))}function y(e){return e.uuid||(e.uuid="_"+ ++cr)}function b(e){return(e+"").replace(ur,"\\$&")}function x(){return Bn.createDocumentFragment()}function w(e){for(var t in e){var n=e[t]
"function"==typeof w.plugins[t]?w.plugins[t](n):w[t]=n}return this}function _(e){return Bn.createComment(e)}function k(e){return/\[native code\]/.test(e)}function A(e,t,n){var r="for(var "+e+"i=0,n = this.length; i < n; i++){"+t.replace("_","((i in this) && fn.call(scope,this[i],i,this))")+"}"+n
return Function("fn,scope",r)}function C(e){return e?e==e.document&&e.document!=e:!1}function T(e){return Tr.test(er.call(e))}function $(e,t){if(!e||"object"!==r.type(e)||e.nodeType||r.isWindow(e))return!1
try{if(e.constructor&&!tr.call(e,"constructor")&&!tr.call(e.constructor.prototype,"isPrototypeOf"))return!1
e.$vbthis}catch(n){return!1}if(Er)for(t in e)return tr.call(e,t)
for(t in e);return t===Or||tr.call(e,t)}function E(e){return"[object Object]"===er.call(e)&&Object.getPrototypeOf(e)===Object.prototype}function N(e,t){for(var n,i,o,a=t[0],s=1,c=t.length;c>s;s++){var u=t[s],l=Array.isArray(u)
for(o in u)if(!l||u.hasOwnProperty(o)){try{var d=a[o],f=u[o]}catch(h){continue}a!==f&&(e&&f&&(r.isPlainObject(f)||(n=Array.isArray(f)))?(n?(n=!1,i=d&&Array.isArray(d)?d:[]):i=d&&r.isPlainObject(d)?d:{},a[o]=N(e,[i,f])):f!==Or&&(a[o]=f))}}return a}function O(e){if(!e)return!1
var t=e.length
if(t===t>>>0){var n=er.call(e)
if(Mr.test(n))return!0
if("[object Object]"!==n)return!1
try{return{}.propertyIsEnumerable.call(e,"length")===!1?Cr.test(e.item||e.callee):!0}catch(r){return!e.window}}return!1}function M(e,t){var n=Math.pow(10,t)
return""+(Math.round(e*n)/n).toFixed(t)}function S(e,t,n,r){e=(e+"").replace(/[^0-9+\-Ee.]/g,"")
var i=isFinite(+e)?+e:0,o=isFinite(+t)?Math.abs(t):3,a="string"==typeof r?r:",",s=n||".",c=""
return c=(o?M(i,o):""+Math.round(i)).split("."),c[0].length>3&&(c[0]=c[0].replace(/\B(?=(?:\d{3})+(?!\d))/g,a)),c.join(s)}function V(e){return e.replace(Sr,"").replace(Dr,function(e,t){var n=e.toLowerCase().match(/<(\w+)\s/)
if(n){var r=jr[n[1]]
r&&(e=e.replace(r,function(e,t,n){var r=n.charAt(0)
return t+"="+r+"javascript:void(0)"+r}))}return e.replace(Vr," ").replace(/\s+/g," ")})}function D(e){return parseInt(e,10)||0}function j(e,t,n){var r=""
for(0>e&&(r="-",e=-e),e=""+e;e.length<t;)e="0"+e
return n&&(e=e.substr(e.length-t)),r+e}function L(e,t,n,r){return function(i){var o=i["get"+e]()
return(n>0||o>-n)&&(o+=n),0===o&&-12===n&&(o=12),j(o,t,r)}}function F(e,t){return function(n,r){var i=n["get"+e](),o=(t?"SHORT"+e:e).toUpperCase()
return r[o][i]}}function P(e){var t=-1*e.getTimezoneOffset(),n=t>=0?"+":""
return n+=j(Math[t>0?"floor":"ceil"](t/60),2)+j(Math.abs(t%60),2)}function I(e,t){return e.getHours()<12?t.AMPMS[0]:t.AMPMS[1]}function H(e,t){var n,r,i=H.locate,o="",a=[]
if(t=t||"mediumDate",t=i[t]||t,"string"==typeof e)if(/^\d+$/.test(e))e=D(e)
else if(Pr.test(e))e=+RegExp.$1
else{var s=e.trim(),c=[0,0,0,0,0,0,0],u=new Date(0)
s=s.replace(/^(\d+)\D(\d+)\D(\d+)/,function(e,t,n,r){var i=4===r.length?[r,t,n]:[t,n,r]
return c[0]=D(i[0]),c[1]=D(i[1])-1,c[2]=D(i[2]),""})
var l=u.setFullYear,d=u.setHours
s=s.replace(/[T\s](\d+):(\d+):?(\d+)?\.?(\d)?/,function(e,t,n,r,i){return c[3]=D(t),c[4]=D(n),c[5]=D(r),i&&(c[6]=Math.round(1e3*parseFloat("0."+i))),""})
var f=0,h=0
s=s.replace(/Z|([+-])(\d\d):?(\d\d)/,function(e,t,n,r){return l=u.setUTCFullYear,d=u.setUTCHours,t&&(f=D(t+n),h=D(t+r)),""}),c[3]-=f,c[4]-=h,l.apply(u,c.slice(0,3)),d.apply(u,c.slice(3)),e=u}for("number"==typeof e&&(e=new Date(e));t;)r=Fr.exec(t),r?(a=a.concat(r.slice(1)),t=a.pop()):(a.push(t),t=null)
return a.forEach(function(t){n=Lr[t],o+=n?n(e,i):t.replace(/(^'|'$)/g,"").replace(/''/g,"'")}),o}function R(e,t,n){var i=r.type(e)
if("array"!==i&&"object"!==i)throw"orderBy只能处理对象或数组"
var o="string"==typeof t?function(e){return e&&e[t]}:"function"==typeof t?t:function(e){return e},a={},s=[]
B(e,Array.isArray(e),function(t){var n=e[t],r=o(n,t)
r in a?a[r].push(t):a[r]=[t],s.push(r)}),s.sort(),0>n&&s.reverse()
var c="array"===i,u=c?[]:{}
return W(u,s,function(t){var n=a[t].shift()
c?u.push(e[n]):u[n]=e[n]})}function B(e,t,n){if(t)e.forEach(function(e,t){n(t)})
else if("string"==typeof e.$track)e.$track.replace(/[^☥]+/g,function(e){n(e)})
else for(var r in e)e.hasOwnProperty(r)&&n(r)}function z(e,t){var n=r.type(e)
if("array"!==n&&"object"!==n)throw"filterBy只能处理对象或数组"
var i=r.slice(arguments,2),o=r.type(t)
if("function"===o)var a=t
else{if("string"!==o&&"number"!==o)return e
if(""===t)return e
var s=RegExp(r.escapeRegExp(t),"i")
a=function(e){return s.test(e)}}var c=0,u="array"===n,l=u?[]:{}
return B(e,u,function(t){var n=e[t]
a.apply(n,[n,c].concat(i))&&(u?l.push(n):l[t]=n),c++}),l}function q(e,t,n){if(r.isObject(e)&&!Array.isArray(e)){var i=[]
return W(i,t,function(t){i.push(e.hasOwnProperty(t)?e[t]:n?n[t]:"")})}return e}function G(e,t,n){var i=r.type(e)
if("array"!==i&&"object"!==i)throw"limitBy只能处理对象或数组"
if("number"!=typeof t)return e
if(t!==t)return e
"object"===i&&(e=U(e,!1))
var o=e.length
t=Math.floor(Math.min(o,t)),n="number"==typeof n?n:0,0>n&&(n=Math.max(0,o+n))
for(var a=[],s=n;o>s&&a.length!==t;s++)a.push(e[s])
var c="array"===i
if(c)return a
var u={}
return W(u,a,function(e){u[e.key]=e.value})}function W(e,t,n){for(var r=0,i=t.length;i>r;r++)n(t[r])
return e}function U(e,t){var n=[],r=0
return B(e,t,function(t){n[r]={oldIndex:r,value:e[t],key:t},r++}),n}function Y(e){return null==e?"":(e+"").replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#39;")}function J(e,t){if(1===e.nodeType){var n=e.nodeName.toLowerCase()
if("script"===n)e.text!==t.text&&(e.type="noexec",e.text=t.text,e.type=t.type||"")
else if("object"===n){var i=t.childNodes
if(e.childNodes.length!==i.length){r.clearHTML(e)
for(var o,a=0;o=i[a++];)e.appendChild(o.cloneNode(!0))}}else"input"===n&&Wr.test(t.nodeName)?(e.defaultChecked=e.checked=t.checked,e.value!==t.value&&(e.value=t.value)):"option"===n?e.defaultSelected=e.selected=t.defaultSelected:("input"===n||"textarea"===n)&&(e.defaultValue=t.defaultValue)}}function Z(e){return void 0!==e.getElementsByTagName?e.getElementsByTagName("*"):void 0!==e.querySelectorAll?e.querySelectorAll("*"):[]}function X(e){for(var t=e.cloneNode(!0),n=Z(t),r=Z(e),i=0;i<r.length;i++)J(n[i],r[i])
return t}function K(e,t){try{for(;t=t.parentNode;)if(t===e)return!0}catch(n){}return!1}function Q(){function e(e,t){e in zn||!HTMLElement.prototype.__defineGetter__||HTMLElement.prototype.__defineGetter__(e,t)}10>Gn&&(r.cloneNode=X),Bn.contains||(Bn.contains=function(e){return K(Bn,e)}),r.modern&&(Bn.createTextNode("x").contains||(Node.prototype.contains=function(e){return K(this,e)})),e("outerHTML",function(){var e=Bn.createElement("div")
return e.appendChild(this),e.innerHTML}),e("children",function(){for(var e,t=[],n=0;e=this.childNodes[n++];)1===e.nodeType&&t.push(e)
return t}),e("innerText",function(){return this.textContent})}function ee(e){this.node=e}function te(e){return"classList"in e||(e.classList=new ee(e)),e.classList}function ne(e){var t=e.nodeName
return t.toLowerCase()===t&&!!e.scopeName&&""===e.outerText}function re(e){if("string"==typeof e){if(e=e.trim(),e&&Zr.test(e.replace(Kr,"@").replace(Qr,"]").replace(Xr,"")))return Function("return "+e)()
throw TypeError("Invalid JSON: ["+e+"]")}return e}function ie(e,t){for(var n in t)try{var i=t[n]
if(0===n.indexOf("data-")||ei.test(e))e.setAttribute(n,i)
else{var o=Ur[n]||n
if("boolean"==typeof e[o]&&("checked"===o&&(e.defaultChecked=!!i),e[o]=!!i),i===!1){e.removeAttribute(o)
continue}if(r.msie<8&&/[A-Z]/.test(o)){e[o]=i+""
continue}var a=!r.modern&&ne(e)?!0:oe(e.nodeName,n)
a?(("href"===n||"src"===n)&&r.msie<8&&(i=(i+"").replace(ti,"&")),e[o]=i+""):e.setAttribute(n,i)}}catch(s){r.log((s.message+"").trim(),n,i)}}function oe(e,t){var n=e+":"+t
return n in ni?ni[n]:ni[n]=t in Bn.createElement(e)}function ae(e,t){if(e.offsetWidth<=0){if(ai.test(hr["@:get"](e,"display"))){var n={node:e}
for(var r in oi)n[r]=e.style[r],e.style[r]=oi[r]
t.push(n)}var i=e.parentNode
i&&1===i.nodeType&&ae(i,t)}}function se(e){return e.window||e.defaultView||e.parentWindow||!1}function ce(e){var t=e.tagName.toLowerCase()
return"input"===t?Wr.test(e.type)?"checked":e.type:t}function ue(e){if(e.hasAttribute&&e.hasAttribute("value"))return e.getAttribute("value")
var t=e.getAttributeNode("value")
return t&&t.specified?t.value:e.innerHTML.trim()}function le(e){var t="??"+pi++
return vi.map[t]=e,t+" "}function de(e){var t=vi.map[e]
return t}function fe(e){for(var t=he(e),n=0,r=t.length;r>n;n++)e=e.replace(t[n],le)
return e}function he(e){for(var t,n=0,r=[],i=0,o=e.length;o>i;i++){var a=e.charAt(i)
t?a===t&&(r.push(e.slice(n,i+1)),t=!1):"'"===a?(t="'",n=i):'"'===a&&(t='"',n=i)}return r}function pe(e,t,n){switch(t){case"style":case"script":case"noscript":case"template":case"xmp":e.children=[{nodeName:"#text",nodeValue:n}]
break
case"textarea":var r=e.props
r.type=t,r.value=n,e.children=[{nodeName:"#text",nodeValue:n}]
break
case"option":e.children=[{nodeName:"#text",nodeValue:ve(n)}]}}function ve(e){return(e+"").replace(bi,"").trim()}function me(e){for(var t,n=!1,r=0,i=0,o=e.length,a=0;o>a;a++){var s=e[a]
t?"tr"!==s.nodeName&&s.children?t=!1:(t.children.push(s),r++,e[a]=0):"tr"===s.nodeName&&(t={nodeName:"tbody",props:{},children:[]},t.children.push(s),n=!0,0===i&&(i=a),e[a]=t)}if(n)for(a=i;o>a&&(0!==e[a]||(e.splice(a,1),a--,r--,0!==r));a++);}function ge(e,t){var n=e.nodeName,i=t.nodeName,o=_i[n]
if(o)if("p"===n){if(xi[i])return r.warn("P element can not  add these childlren:\n"+Object.keys(xi)),!1}else if(!o[i])return r.warn(n.toUpperCase()+"element only add these children:\n"+Object.keys(o)+"\nbut you add "+i.toUpperCase()+" !!"),!1
return!0}function ye(e){return o(e+",template,#document-fragment,#comment")}function be(e){return r.unescapeHTML(e.replace(mi,de))}function xe(e){return _e(e)}function we(){}function _e(e){var t=e,n=Ni.get(t)
if(n)return r.mix(!0,[],n)
vi.map={},e=fe(e),Oi.init(e)
var i=Oi.gen()
return Ni.put(t,r.mix(!0,[],i)),i}function ke(e,t){e.setAttribute("avalon-events",t)}function Ae(e,t,n){var i=e.getAttribute("avalon-events")
if(i&&(e.disabled!==!0||"click"!==t)){var o=[],a=Li[t]||(Li[t]=RegExp("\\b"+t+"\\:([^,\\s]+)","g"))
i.replace(a,function(e,t){return o.push(t),e}),o.length&&n.push({elem:e,uuids:o})}e=e.parentNode
var s=r.gestureEvents||{}
e&&e.getAttribute&&(Di[t]||s[t])&&Ae(e,t,n)}function Ce(e){e=new $e(e)
var t=e.type,n=e.target,i=[]
Ae(n,t,i)
for(var o,a,s,c=0;(s=i[c++])&&!e.cancelBubble;){e.currentTarget=s.elem
for(o=0;(a=s.uuids[o++])&&!e.stopImmediate;){var u=r.eventListeners[a]
if(u){var l=Fi.test(a)?s.elem._ms_context_:0
if(l&&l.$hashcode===!1)return r.unbind(n,t,u)
var d=u.call(l||n,e)
d===!1&&(e.preventDefault(),e.stopPropagation())}}}}function Te(e){var t=zn.getAttribute("delegate-events")||""
if(-1===t.indexOf(e)){var n=t.match(r.rword)||[]
n.push(e),zn.setAttribute("delegate-events",n.join(",")),r._nativeBind(zn,e,Ce,!!Pi[e])}}function $e(e){if(e.originalEvent)return e
for(var t in e)Ii[t]||(this[t]=e[t])
this.target||(this.target=e.srcElement)
this.target
this.fixEvent(),this.timeStamp=new Date-0,this.originalEvent=e}function Ee(e){for(r.isReady=!0;e=zi.shift();)e(r)}function Ne(){function e(){try{zn.doScroll("left"),Ee()}catch(t){setTimeout(e)}}if("complete"===Bn.readyState)setTimeout(Ee)
else if(Bn.addEventListener)Bn.addEventListener("DOMContentLoaded",Ee,!1)
else if(Bn.attachEvent){Bn.attachEvent("onreadystatechange",function(){"complete"===Bn.readyState&&Ee()})
try{var t=null===Jn.frameElement}catch(n){}zn.doScroll&&t&&Jn.external&&e()}r.bind(Jn,"load",Ee)}function Oe(e){return[Me(e)]}function Me(e){if(e&&e.nodeName&&"string"==typeof e.nodeName){var t=e.nodeName.toLowerCase()
switch(t){case"#text":case"#comment":return{nodeName:t,dom:e,nodeValue:e.nodeValue}
default:var n=Se(e,e.attributes||[]),r={nodeName:t,dom:e,isVoidTag:!!gi[t],props:n}
if("option"===t&&(n.selected=e.selected),yi[t]||"option"===t)pe(r,t,e.text||e.innerHTML),1===e.childNodes.length&&(r.children[0].dom=e.firstChild)
else if(!r.isVoidTag){r.children=[]
for(var i,o=0;i=e.childNodes[o++];){var a=Me(i);/\S/.test(a.nodeValue)&&r.children.push(a)}}return r}}}function Se(e,t){for(var n={},r=0,i=t.length;i>r;r++){var o=t[r]
o.specified&&(n[o.name.toLowerCase()]=o.value)}if(qi.test(e.nodeName)){n.type=e.type
var a=e.getAttributeNode("value")
a&&/\S/.test(a.value)&&(n.value=a.value)}var s=e.style.cssText
return s&&(n.style=s),"select-one"===n.type&&(n.selectedIndex=e.selectedIndex),n}function Ve(e){this.nodeName="#text",this.nodeValue=e}function De(e){this.nodeName="#comment",this.nodeValue=e}function je(e,t,n,r){this.nodeName=e,this.props=t,this.children=n,this.isVoidTag=r}function Le(e,t,n){switch(t){case"style":e.setAttribute("type","text/css"),e.styleSheet.cssText=n
break
case"xmp":case"noscript":e.textContent=n}}function Fe(e){return e!==!1&&Object(e)!==e}function Pe(e){return Bn.createElementNS("http://www.w3.org/2000/svg",e)}function Ie(e){Bn.styleSheets.length<31?Bn.createStyleSheet().addRule(".rvml","behavior:url(#default#VML)"):Bn.styleSheets[0].addRule(".rvml","behavior:url(#default#VML)")
var t=e.split(":")
1===t.length&&t.unshift("v")
var n=t[1],r=t[0]
return Bn.namespaces[r]||Bn.namespaces.add(r,"urn:schemas-microsoft-com:vml"),Bn.createElement("<"+r+":"+n+' class="rvml">')}function He(e,t,n,r){this.nodeName="#document-fragment",this.children=e,this.key=t,this.val=n,this.index=r,this.props={}}function Re(){if(!(r.isRunningActions===!0||r.inTransaction>0)){r.isRunningActions=!0
for(var e,t=r.pendingActions.splice(0,r.pendingActions.length),n=0;e=t[n++];)e.update(),delete r.uniqActions[e.uuid]
r.isRunningActions=!1}}function Be(e){for(var t,n=e.observers,r=0;t=n[r++];)t.schedule()}function ze(e){var t=r.trackingAction||null
null!==t&&(r.track("征收到",e.expr),t.mapIDs[e.uuid]=e)}function qe(e,t){if(e.observers){var n=r.trackingAction
n&&Zi.push(n),r.trackingAction=e,r.track("【action】",e.type,e.expr,"开始征收依赖项"),e.mapIDs={}
var i,o=!0
try{i=t.call(e),o=!1}finally{if(o)r.warn("collectDeps fail",t+""),e.mapIDs={},r.trackingAction=n
else{r.trackingAction=Zi.pop()
try{Ge(e)}catch(a){r.warn(a)}}return i}}}function Ge(e){var t=e.observers,n=[],i={},o=[]
for(var a in e.mapIDs){var s=e.mapIDs[a]
if(!s.isAction){if(!s.observers){delete e.mapIDs[a]
continue}if(o.push(s.uuid),n.push(s),i[s.uuid]=1,s.lastAccessedBy===e.uuid)continue
s.lastAccessedBy=e.uuid,r.Array.ensure(s.observers,e)}}var o=o.sort().join(",")
if(o!==e.ids){if(e.ids=o,e.isComputed){e.depsCount=n.length,e.deps=r.mix({},e.mapIDs),e.depsVersion={}
for(var c in e.mapIDs){var u=e.mapIDs[c]
e.depsVersion[u.uuid]=u.version}}else e.observers=n
for(var l,d=0;l=t[d++];)i[l.uuid]||r.Array.remove(l.observers,e)}}function We(e,t,n){n=n||[]
var r="transaction "+(e.name||e.displayName||"noop")
Ue(r)
var i=e.apply(t,n)
return Ye(r),i}function Ue(e){r.inTransaction+=1}function Ye(e){0===--r.inTransaction&&(r.isRunningActions=!1,Re())}function Je(e){return e.replace(oo,le).replace(co,function(e){return Ki[e]?e:"__vmodel__."+e})}function Ze(e,t){var n=e+":"+t,i=uo.get(n)
if(i)return i.slice(0)
vi.map={}
var o=e.replace(io,function(e,t){return t+le(e.slice(t.length))})
o=fe(o),o=o.replace(to,le).replace(eo,"$1").replace(ao,function(e,t,n){return t+le(n)+":"}).replace(Qi,"$1__vmodel__.").replace(so,function(e,t){return"|"+le(t)}),o=Je(o)
var a=o.split(ro),s=a.shift().replace(mi,de).trim()
return/\?\?\d/.test(s)&&(s=s.replace(mi,de)),a.length?(a=a.map(function(e){var t=""
e=e.replace(no,function(e,n){return/\S/.test(n)&&(t+=","+n),""})
var n="["+r.quote(e.trim())+t+"]"
return n}),a="avalon.composeFilters("+a+")(__value__)",a=a.replace(mi,de)):a="",uo.put(n,[s,a])}function Xe(e){return lo.test(e)&&(e+="($event)"),9>Gn&&(e=e.replace(fo,function(e,t,n){return"__vmodel__."+t+".call(__vmodel__"+(/\S/.test(n)?","+n:"")+")"})),e}function Ke(e,t){var n,i=Ze(e,t)
n=i[1]?i[1].replace(/__value__\)$/,i[0]+")"):i[0]
try{return Function("__vmodel__","return "+n+";")}catch(o){return r.log("parse getter: [",e,n,"]error"),r.noop}}function Qe(e,t){var n=Ze(e,t),i="try{ "+n[0]+" = __value__}catch(e){}"
try{return Function("__vmodel__","__value__",i+";")}catch(o){return r.log("parse setter: ",e," error"),r.noop}}function et(e,t,n){for(var r in t)1!==po[r]&&(this[r]=t[r])
this.vm=e,this.observers=[],this.callback=n,this.uuid=++ho,this.ids="",this.mapIDs={},this.isAction=!0
var i=this.expr
"function"!=typeof this.getter&&(this.getter=Ke(i,this.type)),"duplex"===this.type&&(this.setter=Qe(i,this.type)),this.value=NaN,this.node||(this.value=this.get())}function tt(e,t,n){if(this.expr=e,t){var r=Kn.createProxy(t,this)
r&&(t=r)}this.value=t,this.vm=n
try{n.$mutations[e]=this}catch(i){}this.uuid=++vo,this.updateVersion(),this.mapIDs={},this.observers=[]}function nt(e){var t=""+e
return t.substring(t.indexOf("{}")+1,t.lastIndexOf("}"))}function rt(e){var t=function(){}
return t.prototype=e,new t}function it(e,t){if("function"==typeof t){var n=e.prototype=rt(t.prototype)
n.constructor=e}}function ot(e,t){r.mix(this,e),r.mix(this,Rr),this.$hashcode=r.makeHashCode("$"),this.$id=this.$id||this.$hashcode,this.$events={__dep__:t||new tt(this.$id)},r.config.inProxyMode?(delete this.$mutations,this.$accessors={},this.$computed={},this.$track=""):this.$accessors={$model:bo},void 0===t?(this.$watch=Kn.watchFactory(this.$events),this.$fire=Kn.fireFactory(this.$events)):(delete this.$watch,delete this.$fire)}function at(e,t,n){return e in Rr?!1:"$"===e.charAt(0)?n?(yo[e]||(yo[e]=1,r.warn("ms-for中的变量"+e+"不再建议以$为前缀")),!0):!1:null==t?(r.warn("定义vmodel时"+e+"的属性值不能为null undefine"),!0):/error|date|function|regexp/.test(r.type(t))?!1:!(t&&t.nodeName&&t.nodeType)}function st(e,t){if(e&&e.$events)return e
var n
return Array.isArray(e)?n=Kn.listFactory(e,!1,t):d(e)&&(n=Kn.modelFactory(e,t)),n}function ct(e,t,n){var r=null,i=n?go:tt
return{get:function(){return r||(r=new i(e,t,this)),r.get()},set:function(n){r||(r=new i(e,t,this)),r.set(n)},enumerable:!0,configurable:!0}}function ut(e){var t=r.type(e)
if("array"===t){for(var n=[],i=0;i<e.length;i++)n[i]=ut(e[i])
return n}if("object"===t&&"string"==typeof e.$track){var o={},a=e.$track.match(/[^☥]+/g)||[]
return a.forEach(function(t){var n=e[t]
o[t]=n&&n.$events?ut(n):n}),o}return e}function lt(e){for(var t in wo)Kn.hideProperty(e,t,wo[t])}function dt(e,t,n){t||(lt(e),Wn&&Object.defineProperty(e,"$model",Kn.modelAccessor),Kn.hideProperty(e,"$hashcode",r.makeHashCode("$")),Kn.hideProperty(e,"$events",{__dep__:n||new tt}))
for(var i=e.$events&&e.$events.__dep__,o=0,a=e.length;a>o;o++){var s=e[o]
d(s)&&(e[o]=Kn.createProxy(s,i))}return e}function ft(e,t,n){ko?Object.defineProperty(e,t,{value:n,writable:!0,enumerable:!1,configurable:!0}):Ao[t]||(e[t]=n)}function ht(e){return function(t,n,i){var o=new et(e.__proxy__,{deep:i,type:"user",expr:t},n)
return e[t]?e[t].push(o):e[t]=[o],function(){o.dispose(),r.Array.remove(e[t],o),0===e[t].length&&delete e[t]}}}function pt(e){return function(t,n){var r=e[t]
if(Array.isArray(r))for(var i,o=0;i=r[o++];)i.callback.call(i.vm,n,i.value,i.expr)}}function vt(e){return"☥"+e+"☥"}function mt(e,t,n,i){function o(t){return vt(e.$track).indexOf(vt(t))>-1}var a=e.$accessors
for(var s in Rr)r.msie<9&&void 0===t[s]||ft(e,s,t[s])
for(var c=0;c<n.length;c++){var u=n[c]
if(!(u in a)){if(i&&"function"==typeof t[u]){e[u]=t[u].bind(e)
continue}e[u]=t[u]}}e.$track=n.join("☥"),r.msie<9&&(e.hasOwnProperty=o),e.$events.__proxy__=e}function gt(e){var t=[]
for(var n in e)t.push(n)
return t}function yt(e,t,n){if(0===n)return e===t
if(null===e&&null===t)return!0
if(void 0===e&&void 0===t)return!0
var r=Array.isArray(e)
return r!==Array.isArray(t)?!1:r?bt(e,t,n):"object"==typeof e&&"object"==typeof t?xt(e,t,n):e===t}function bt(e,t,n){if(e.length!==t.length)return!1
for(var r=e.length-1;r>=0;r--)try{if(!yt(e[r],t[r],n-1))return!1}catch(i){return!1}return!0}function xt(e,t,n){if(null===e||null===t)return!1
if(gt(e).length!==gt(t).length)return!1
for(var r in e){if(!(r in t))return!1
try{if(!yt(e[r],t[r],n-1))return!1}catch(i){return!1}}return!0}function wt(){var e=Jo[0]
e&&e()}function _t(e,t,n){e[t]||(e[t]=n)}function kt(e,t,n){for(var r,i=[].concat(e[t]),o=0;r=i[o++];)"function"==typeof r&&r(n)}function At(e){var t=e.toLowerCase()
return function(n){var i=this.dom,o=r(i),a=isFinite(n.stagger)?1e3*n.stagger:0
if(a&&n.staggerKey){var s=Xo.get(n.staggerKey)||Xo.put(n.staggerKey,{count:0,items:0})
s.count++,s.items++}var c,u=s&&s.count||0,l=function(t){var o=t!==!1
0===--i.__ms_effect_&&(r.unbind(i,Ro),r.unbind(i,Ho)),clearTimeout(c)
var a=o?"Done":"Abort"
kt(n,"on"+e+a,i),s&&0===--s.items&&(s.count=0),n.queue&&(Jo.shift(),wt())}
kt(n,"onBefore"+e,i),n[t]?n[t](i,function(e){l(e!==!1)}):Lo&&(o.addClass(n[t+"Class"]),o.removeClass(Tt(n,t)),i.__ms_effect_?i.__ms_effect_++:(o.bind(Ro,l),o.bind(Ho,l),i.__ms_effect_=1),setTimeout(function(){var e=NaN===r.root.offsetWidth
o.addClass(n[t+"ActiveClass"]),e=Et(i),0===!e?l(!1):a||(c=setTimeout(function(){l(!1)},e+32))},17+a*u))}}function Ct(e){return e.action?void 0:e.action=e.hook.replace(/^on/,"").replace(/Done$/,"").toLowerCase()}function Tt(e,t){var t="leave"===t?"enter":"leave"
return[t+"Class",t+"ActiveClass"].map(function(t){return e[t]}).join(" ")}function $t(e){var t=ea.test(e)?1e3:1
return parseFloat(e)*t}function Et(e){var t=Jn.getComputedStyle(e,null),n=t[Ko],r=t[Qo]
return $t(n)||$t(r)}function Nt(e,t){var n=e.ownerDocument,i=e.nodeName,o="_"+i
if(!Nt[o]){var a=n.body.appendChild(n.createElement(i))
t=r.css(a,"display"),n.body.removeChild(a),t===ta&&(t="block"),Nt[o]=t}return Nt[o]}function Ot(e,t){var n=e.innerRender=r.scan(e.fragment,e.vm)
r.shadowCopy(t,n.root),delete t.nodeValue}function Mt(e){var t=typeof e
return e&&"object"===t?e.$hashcode:t+":"+e}function St(e,t){if(d(t)){var n=Array.isArray(t),i=[],o=[],a=0
return e.isArray=n,e.fragments?(e.preFragments=e.fragments,r.each(t,function(e,t){var r=n?Mt(t):e
o.push({key:r,val:t,index:a++}),i.push(r)}),e.fragments=o):(r.each(t,function(e,t){if(!(e in Rr)){var r=n?Mt(t):e
o.push(new He([],r,t,a++)),i.push(r)}}),e.fragments=o),i.join(";;")}return NaN}function Vt(e){var t=e.fragments.map(function(t,n){return Ft(t,e,n),It(e.cache,t),t}),n=e.parentChildren,r=n.indexOf(e.begin)
n.splice.apply(n,[r+1,0].concat(t))}function Dt(e){var t=e.cache,n={},r=[],i=e.preFragments
i.forEach(function(e){e._dispose=!0}),e.fragments.forEach(function(i,o){var a=Pt(t,i.key)
a?(delete a._dispose,a.oldIndex=a.index,a.index=o,jt(a.vm,e.keyName),a.vm[e.valName]=i.val,a.vm[e.keyName]=e.isArray?o:a.key,It(n,a)):r.push(i)}),r.forEach(function(r){var o=Ht(t,r.key)
if(o){o.oldIndex=o.index,o.key=r.key
var a=o.val=r.val,s=o.index=r.index
o.vm[e.valName]=a,o.vm[e.keyName]=e.isArray?s:o.key,delete o._dispose}else r=new He([],r.key,r.val,r.index),o=Ft(r,e,r.index),i.push(o)
It(n,o)}),e.fragments=i,i.sort(function(e,t){return e.index-t.index}),e.cache=n}function jt(e,t,n){r.config.inProxyMode?e.$accessors[t].value=NaN:e.$accessors[t].set(NaN)}function Lt(e){for(var t,n=e.begin.dom,r=n.parentNode,i=e.fragments,o=e.end.dom,a=0;t=i[a];a++)if(t._dispose)i.splice(a,1),a--,t.dispose()
else{if(t.oldIndex!==t.index){var s=t.toFragment(),c=null===n.nextSibling
r.insertBefore(s,n.nextSibling),c&&!r.contains(o)&&r.insertBefore(o,n.nextSibling)}n=t.split}var u=e.parentChildren,l=u.indexOf(e.begin),d=u.indexOf(e.end)
i.splice.apply(u,[l+1,d-l].concat(i))}function Ft(e,t,n){var i={}
i[t.keyName]=t.isArray?n:e.key,i[t.valName]=e.val,t.asName&&(i[t.asName]=t.value)
var o=e.vm=Kn.itemFactory(t.vm,{data:i})
return t.isArray?o.$watch(t.valName,function(e){t.value&&t.value.set&&t.value.set(o[t.keyName],e)}):o.$watch(t.valName,function(n){t.value[e.key]=n}),e.index=n,e.innerRender=r.scan(t.fragment,o,function(){var t=this.root
nr.push.apply(e.children,t.children),this.root=e}),e}function Pt(e,t){var n=e[t]
if(n){var r=n.arr
if(r){var i=r.pop()
return r.length||(n.arr=0),i}return delete e[t],n}}function It(e,t){var n=t.key
if(e[n]){var r=e[n],i=r.arr||(r.arr=[])
i.push(t)}else e[n]=t}function Ht(e){var t
for(var n in e){var t=n
break}return t?Pt(e,t):void 0}function Rt(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t],r=typeof n
if("string"===r||"number"===r||n===!0)e.push(n)
else if(Array.isArray(n))e.push(Rt.apply(null,n))
else if("object"===r)for(var i in n)n.hasOwnProperty(i)&&n[i]&&e.push(i)}return e.join(" ")}function Bt(e){var t=e.target
r(t).addClass(t.getAttribute(aa[e.type])||"")}function zt(e){var t=e.target,n=aa[e.type]
r(t).removeClass(t.getAttribute(n)||""),"change-active"!==n&&r(t).removeClass(t.getAttribute("change-active")||"")}function qt(e,t){var n=e.getAttribute("change-class")
n!==t&&(r(e).removeClass(n).addClass(t),e.setAttribute("change-class",t))}function Gt(e,t){e.children&&e.children.forEach(function(e){"option"===e.nodeName?Wt(e,t):Gt(e,t)})}function Wt(e,t){var n=e.props
if(!("disabled"in n)){var r=Ut(e,n)
if(r=((r||"")+"").trim(),n.selected=-1!==t.indexOf(r),e.dom){e.dom.selected=n.selected
e.dom.selected}}}function Ut(e,t){if(t&&"value"in t)return t.value+""
var n=[]
return e.children.forEach(function(e){"#text"===e.nodeName?n.push(e.nodeValue):"#document-fragment"===e.nodeName&&n.push(Ut(e))}),n.join("")}function Yt(e,t){return e.children.forEach(function(e){"option"===e.nodeName?e.props.selected===!0&&t.push(Ut(e,e.props)):e.children&&Yt(e,t)}),t}function Jt(e){e.userCb&&e.userCb.call(e.vm,{type:"changed",target:e.dom})}function Zt(e){var t=this,n=t._ms_duplex_
if(!t.composing&&t.value!==n.value){if(t.caret)try{var r=n.getCaret(t)
n.pos=r}catch(i){}if(n.debounceTime>4){var o=new Date,a=o-n.time||0
n.time=o,a>=n.debounceTime?sa[n.dtype].call(n):(clearTimeout(n.debounceID),n.debounceID=setTimeout(function(){sa[n.dtype].call(n)},a))}else sa[n.dtype].call(n)}}function Xt(){var e=this.expr
ca.test(e)&&(this.isChanged=!0,e=e.replace(ca,""))
var t=e.match(ua)
t&&(e=e.replace(ua,""),this.isChanged||(this.debounceTime=parseInt(t[1],10)||300)),this.expr=e}function Kt(){var e=(this.expr,this.node),t=e.props.type
this.parseValue=tn
var n,r=this.param,i=!1
r=r?r.split("-").map(function(e){return"checked"===e&&(i=!0),e}):[],e.duplex=this,Wr.test(t)&&i&&(r=[],n="radio",this.isChecked=i),this.parsers=r,/input|textarea|select/.test(e.nodeName)?n||(n="select"===e.nodeName?"select":"checkbox"===t?"checkbox":"radio"===t?"radio":"input"):"contenteditable"in e.props&&(n="contenteditable"),this.dtype=n,"input"!==n&&"contenteditable"!==n?(delete this.isChange,delete this.debounceTime):this.isChecked||(this.isString=!0)
var o=e.props["data-duplex-changed"]
if(o){var a=Ze(o,"xx"),s=Xe(a[0])
this.userCb=Function("$event","var __vmodel__ = this\nreturn "+s)}}function Qt(e,t){if(Array.isArray(e)){if(e+""!==this.compareVal)return this.compareVal=e+"",!0}else if(e=this.parseValue(e),this.isChecked||(this.value=e+=""),e!==this.compareVal)return this.compareVal=e,!0}function en(e,t){var n=e.dom
this.dom=n,this.vdom=e,this.duplexCb=Zt,n._ms_duplex_=this,t(n,this)}function tn(e){for(var t,n=0;t=this.parsers[n++];){var i=r.parsers[t]
i&&(e=i.call(this,e))}return e}function nn(e,t){var n={}
switch(t.dtype){case"radio":case"checkbox":n.click=Zt
break
case"select":n.change=Zt
break
case"contenteditable":t.isChanged?n.blur=Zt:r.modern?(Jn.webkitURL?n.webkitEditableContentChanged=Zt:Jn.MutationEvent&&(n.DOMCharacterDataModified=Zt),n.input=Zt):(n.keydown=ln,n.paste=on,n.cut=on,n.focus=un,n.blur=cn)
break
case"input":t.isChanged?n.change=Zt:10>Gn?(n.propertychange=rn,n.paste=on,n.cut=on,n.keyup=ln):(n.input=Zt,n.compositionstart=cn,n.compositionend=un,/\[native code\]/.test(Jn.Int8Array)||(n.keydown=ln,n.paste=on,n.cut=on,Jn.netscape&&(n.DOMAutoComplete=Zt)))}/password|text/.test(e.type)&&(n.focus=an,n.blur=sn,t.getCaret=fn,t.setCaret=dn)
for(var i in n)r.bind(e,i,n[i])}function rn(e){"value"===e.propertyName&&Zt.call(this,e)}function on(e){var t=this
setTimeout(function(){Zt.call(t,e)},0)}function an(){this.caret=!0}function sn(){this.caret=!1}function cn(){this.composing=!0}function un(e){this.composing=!1,on.call(this,e)}function ln(e){var t=e.keyCode
91===t||t>15&&19>t||t>=37&&40>=t||Zt.call(this,e)}function dn(e,t){var n
e.createTextRange?ga(function(){e.focus(),n=e.createTextRange(),n.collapse(!0),n.moveEnd("character",t),n.moveStart("character",t),n.select()}):(e.focus(),void 0!==e.selectionStart&&e.setSelectionRange(t,t))}function fn(e){var t,n,r,i,o,a=0
return e.selectionStart+e.selectionEnd>-1?a=e.selectionStart:(n=Bn.selection.createRange(),n&&n.parentElement()===e&&(i=e.value.length,t=e.value.replace(/\r\n/g,"\n"),r=e.createTextRange(),r.moveToBookmark(n.getBookmark()),o=e.createTextRange(),o.collapse(!1),r.compareEndPoints("StartToEnd",o)>-1?a=i:(a=-r.moveStart("character",-i),a+=t.slice(0,a).split("\n").length-1))),a}function hn(e,t){var n=this.dom
if(this.isString&&t&&!e&&!n.valueHijack){n.valueHijack=Zt
var i=setInterval(function(){r.contains(r.root,n)?n.valueHijack({type:"poll"}):clearInterval(i)},30)
return i}}function pn(e){return"regexp"===r.type(e)}function vn(e){if("string"==typeof e&&e){var t=e.split("-")
if(3===t.length&&4===t[0].length){var n=~~t[0],r=~~t[1]-1,i=~~t[2],o=new Date(n,r,i)
return o.getFullYear()===n&&o.getMonth()===r&&o.getDate()===i}}return!1}function mn(e,t,n){for(var r,i=0;r=e[i++];){var o=r.rules&&r.duplex
o?(t.push(o),gn(o,n)):r.children?mn(r.children,t,n):Array.isArray(r)&&mn(r,t,n)}}function gn(e,t){var n=e.dom
e.validator||(e.validator=t,!t.validateInKeyup||e.isChanged||e.debounceTime||r.bind(n,"keyup",function(n){t.validate(e,0,n)}),t.validateInBlur&&r.bind(n,"blur",function(n){t.validate(e,0,n)}),t.resetInFocus&&r.bind(n,"focus",function(r){t.onReset.call(n,r,e)}))}function yn(){var e=this.data||{}
return this.message.replace(_a,function(t,n){return null==e[n]?"":e[n]})}function bn(e,t,n,i){var o=t.type,a=r.directives[o]
if(Rn){var s=r.vdom(n,"toDOM")
1===s.nodeType&&s.removeAttribute(t.attrName),n.dom=s}var c=a.update?function(e){!i.mount&&/css|visible|duplex/.test(o)?i.callbacks.push(function(){a.update.call(l,l.node,e)}):a.update.call(l,l.node,e)}:r.noop
for(var u in a)t[u]=a[u]
t.node=n
var l=new et(e,t,c)
return l.init&&l.init(),l.update(),l}function xn(e,t){var n=t[0],i={},o=[],a=!1
for(var s in e){var c=e[s],u=s.split("-")
if(s in n.props)var l=s
else l=":"+s.slice(3)
ka[u[1]]&&u.splice(1,0,"on"),"on"===u[1]&&(u[3]=parseFloat(u[3])||0)
var d=u[1]
if("controller"!==d&&"important"!==d&&Yn[d]){var f={type:d,param:u[2],attrName:l,name:u.join("-"),expr:c,priority:Yn[d].priority||100*d.charCodeAt(0)}
if("if"===d&&(a=!0),"on"===d&&(f.priority+=u[3]),!i[f.name]&&(i[f.name]=c,o.push(f),"for"===d))return[r.mix(f,t[3])]}}if(o.sort(wn),a)for(var h,p=[],v=0;h=o[v++];)if(p.push(h),"if"===h.type)return p
return o}function wn(e,t){return e.priority-t.priority}function _n(e){var t=/\n\r?/g,n=e.nodeValue.trim().replace(t,""),i=[]
do{var o=n.indexOf(w.openTag)
o=-1===o?n.length:o
var a=n.slice(0,o)
if(/\S/.test(a)&&i.push(r.quote(r._decode(a))),n=n.slice(o+w.openTag.length)){o=n.indexOf(w.closeTag)
var a=n.slice(0,o),s=r.unescapeHTML(a)
if(/\|\s*\w/.test(s)){var c=Ze(s,"expr")
c[1]&&(s=c[1].replace(Ca,c[0]+")"))}Aa&&(s="("+s+")"),i.push(s),n=n.slice(o+w.closeTag.length)}}while(n.length)
return[{expr:i.join("+"),name:"expr",type:"expr"}]}function kn(e){for(var t,n=0,r=0;t=e[r++];)n+="#document-fragment"===t.nodeName?kn(t.children):1
return n}function An(e,t){t&&t.forEach(function(t){if(t){var n=t.children&&kn(t.children)
if("#document-fragment"===t.nodeName)var i=x()
else{i=r.vdom(t,"toDOM")
var o=i.childNodes&&i.childNodes.length
o&&n&&o>n&&(Ta[i.nodeName]||r.clearHTML(i))}if(n&&(An(i,t.children),"select"===t.nodeName)){var a=[]
Yt(t,a),Gt(t,a)}try{Ta[e.nodeName]||e.appendChild(i)}catch(s){}}})}function Cn(e){for(var t;t=e.firstChild;)1===t.nodeType&&Cn(t),e.removeChild(t)}function Tn(e,t){var n,r=e.indexOf(t)+1,i=1,o=[]
for(o.start=r;t=e[r++];)if(o.push(t),"#comment"===t.nodeName)if($n(t.nodeValue,"ms-for:"))i++
else if("ms-for-end:"===t.nodeValue&&(i--,0===i)){n=t,o.pop()
break}return o.end=n,o}function $n(e,t){return 0===e.indexOf(t)}function En(e,t,n){this.root=e,this.vm=t,this.beforeReady=n,this.bindings=[],this.callbacks=[],this.directives=[],this.init()}function Nn(){var e=this.beforeUpdate(),t=this.value=this.get()
if(this.callback&&this.diff(t,e)){this.callback(this.node,this.value)
var n=this.vm,i=n.$render,o=n.$events.onViewChange
o&&i&&i.root&&!r.viewChanging&&($a&&(clearTimeout($a),$a=null),$a=setTimeout(function(){o.forEach(function(e){e.callback.call(n,{type:"viewchange",target:i.root,vmodel:n})})}))}this._isScheduled=!1}function On(e){var e=Kn.toJson(e)
if(Array.isArray(e)){var t={}
return e.forEach(function(e){e&&r.shadowCopy(t,e)}),t}return e}function Mn(e,t){e.innerRender=t
var n=t.root,r=e.node,i=r.props.slot
for(var o in n)r[o]=n[o]
r.props&&i&&(r.props.slot=i),t.root=r,t.vnodes[0]=r}function Sn(e,t,n){var r=e.$events["on"+n]
r&&r.forEach(function(r){setTimeout(function(){r.callback.call(e,{type:n.toLowerCase(),target:t.dom,vmodel:e})},0)})}function Vn(e,t,n){var i=[],o=e.defaults
Dn(o,i),Dn(t,i)
var a={}
for(var s in o){var c=t[s]
null==c?a[s]=o[s]:a[s]=c}a.$id=t.id||t.$id||r.makeHashCode(n),delete a.id
var u=r.mix(!0,{},a),l=r.define(u)
return i.forEach(function(e){l.$watch(e.type,e.cb)}),l}function Dn(e,t){for(var n in e)Na[n]&&"function"==typeof e[n]&&0===n.indexOf("on")&&t.unshift({type:n,cb:e[n]})}function jn(e,t){var n=t&&t[0]&&t[0].forDir
n&&(n.parentChildren=e)}function Ln(e,t){for(var n,r=0;n=e[r];r++){if("slot"===n.nodeName){jn(e,t),e.splice.apply(e,[r,1].concat(t))
break}n.children&&Ln(n.children,t)}}function Fn(e,t){for(var n,r=0;n=e[r];r++)if("slot"!==n.nodeName)n.children&&Fn(n.children,t)
else{var i=n.props.name
jn(e,t[i]),e.splice.apply(e,[r,1].concat(t[i]))}}function Pn(e,t){r.components[e]=t
for(var n,i=0;n=Oa[i];i++)n.is===e&&(Oa.splice(i,1),n.reInit=!0,delete n.value,n.update(),i--)
return t}function In(e){var t=e.displayName
delete e.displayName
var n={defaults:r.mix(!0,{},this.defaults,e.defaults)}
return e.soleSlot&&(n.soleSlot=e.soleSlot),n.template=e.template||this.template,r.component(t,n)}var Hn="object"==typeof window?window:"object"==typeof global?global:{},Rn=!!Hn.location&&Hn.navigator,Bn=Rn?Hn.document:{createElement:Object,createElementNS:Object,documentElement:"xx",contains:Boolean},zn=Rn?Bn.documentElement:{outerHTML:"x"},qn={objectobject:7,objectundefined:6,undefinedfunction:NaN,undefinedobject:NaN},Gn=Bn.documentMode||qn[typeof Bn.all+typeof XMLHttpRequest],Wn=/NaN|undefined/.test(Gn)||Gn>8
e.prototype={put:function(e,t){var n={key:e,value:t}
return this._keymap[e]=n,this.tail?(this.tail.newer=n,n.older=this.tail):this.head=n,this.tail=n,this.size===this.limit?this.shift():this.size++,t},shift:function(){var e=this.head
e&&(this.head=this.head.newer,this.head.older=e.newer=e.older=this._keymap[e.key]=void 0,delete this._keymap[e.key],this.size--)},get:function(e){var t=this._keymap[e]
if(void 0!==t)return t===this.tail?t.value:(t.newer&&(t===this.head&&(this.head=t.newer),t.newer.older=t.older),t.older&&(t.older.newer=t.newer),t.newer=void 0,t.older=this.tail,this.tail&&(this.tail.newer=t),this.tail=t,t.value)}}
var Un={},Yn={},Jn=Hn
r.init=function(e){this[0]=this.element=e},r.fn=r.prototype=r.init.prototype
var Zn=/[^, ]+/g,Xn=/\S+/g,Kn={},Qn=Object.prototype,er=Qn.toString,tr=Qn.hasOwnProperty,nr=Array.prototype,rr="object"==typeof console
r.config={debug:!0}
var ir=/([a-z\d])([A-Z]+)/g,or=/[-_][^-_]/g,ar=nr.slice,sr=/\d\.\d{4}/,cr=1,ur=/[-.*+?^${}()|[\]\/\\]/g,lr={},dr={},fr={},hr={}
Jn.avalon=r
var pr=/&[a-z0-9#]{2,10};/,vr=Bn.createElement("div")
i(r,{Array:{merge:function(e,t){e.push.apply(e,t)},ensure:function(e,t){return-1===e.indexOf(t)?e.push(t):void 0},removeAt:function(e,t){return!!e.splice(t,1).length},remove:function(e,t){var n=e.indexOf(t)
return~n?r.Array.removeAt(e,n):!1}},evaluatorPool:new e(888),parsers:{number:function(e){return""===e?"":parseFloat(e)||0},string:function(e){return null===e||void 0===e?"":e+""},"boolean":function(e){return""===e?e:"true"===e||"1"===e}},_decode:function(e){return pr.test(e)?(vr.innerHTML=e,vr.innerText||vr.textContent):e}})
var mr={interpolate:function(e){var t=e[0],n=e[1]
if(t===n)throw new SyntaxError("interpolate openTag cannot equal to closeTag")
var r=t+"test"+n
if(/[<>]/.test(r))throw new SyntaxError('interpolate cannot contains "<" or ">"')
w.openTag=t,w.closeTag=n
var i=b(t),o=b(n)
w.rtext=RegExp(i+"(.+?)"+o,"g"),w.rexpr=RegExp(i+"([\\s\\S]*)"+o)}}
if(w.plugins=mr,w({interpolate:["{{","}}"],debug:!0}),i(r,{shadowCopy:i,oneObject:o,inspect:er,ohasOwn:tr,rword:Zn,version:"2.2.4",vmodels:{},directives:Yn,directive:t,eventHooks:lr,eventListeners:dr,validators:fr,cssHooks:hr,log:s,noop:l,warn:c,error:u,config:w,modern:Wn,msie:Gn,root:zn,document:Bn,window:Jn,inBrowser:Rn,isObject:d,range:f,slice:v,hyphen:h,camelize:p,escapeRegExp:b,quote:a,makeHashCode:m}),!k("司徒正美".trim)){var gr=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g
String.prototype.trim=function(){return this.replace(gr,"")}}Object.create||(Object.create=function(){function e(){}return function(t){if(1!=arguments.length)throw Error("Object.create implementation only accepts one parameter.")
return e.prototype=t,new e}}())
var yr=!{toString:null}.propertyIsEnumerable("toString"),br=function(){}.propertyIsEnumerable("prototype"),xr=["toString","toLocaleString","valueOf","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","constructor"],wr=xr.length
k(Object.keys)||(Object.keys=function(e){var t=[],n=br&&"function"==typeof e
if("string"==typeof e||e&&e.callee)for(var r=0;r<e.length;++r)t.push(r+"")
else for(var i in e)n&&"prototype"===i||!tr.call(e,i)||t.push(i+"")
if(yr)for(var o=e.constructor,a=o&&o.prototype===e,s=0;wr>s;s++){var c=xr[s]
a&&"constructor"===c||!tr.call(e,c)||t.push(c)}return t}),k(Array.isArray)||(Array.isArray=function(e){return"[object Array]"===Object.prototype.toString.call(e)}),k(k.bind)||(Function.prototype.bind=function(e){if(arguments.length<2&&void 0===e)return this
var t=this,n=arguments
return function(){var r,i=[]
for(r=1;r<n.length;r++)i.push(n[r])
for(r=0;r<arguments.length;r++)i.push(arguments[r])
return t.apply(e,i)}})
try{ar.call(r.document.documentElement)}catch(_r){nr.slice=function(e,t){if(t=void 0!==t?t:this.length,Array.isArray(this))return ar.call(this,e,t)
var n,r,i=[],o=this.length,a=e||0
a=a>=0?a:o+a
var s=t?t:o
if(0>t&&(s=o+t),r=s-a,r>0)if(i=Array(r),this.charAt)for(n=0;r>n;n++)i[n]=this.charAt(a+n)
else for(n=0;r>n;n++)i[n]=this[a+n]
return i}}k(nr.map)||r.shadowCopy(nr,{indexOf:function(e,t){var n=this.length,r=~~t
for(0>r&&(r+=n);n>r;r++)if(this[r]===e)return r
return-1},lastIndexOf:function(e,t){var n=this.length,r=null==t?n-1:t
for(0>r&&(r=Math.max(0,n+r));r>=0;r--)if(this[r]===e)return r
return-1},forEach:A("","_",""),filter:A("r=[],j=0,","if(_)r[j++]=this[i]","return r"),map:A("r=[],","r[i]=_","return r"),some:A("","if(_)return true","return false"),every:A("","if(!_)return false","return true")})
var kr=function(){var e={92:"\\\\",34:'\\"',8:"\\b",12:"\\f",10:"\\n",13:"\\r",9:"\\t"},t="000000",n=function(e,n){return(t+(n||0)).slice(-e)},r="\\u00",i=function(t){var i=t.charCodeAt(0),o=e[i]
return o?o:r+n(2,i.toString(16))},o=/[\x00-\x1f\x22\x5c]/g
return function(e){return o.lastIndex=0,'"'+(o.test(e)?(e+"").replace(o,i):e)+'"'}}()
try{r._quote=JSON.stringify}catch(_r){r._quote=kr}var Ar={}
"Boolean Number String Function Array Date RegExp Object Error".replace(r.rword,function(e){Ar["[object "+e+"]"]=e.toLowerCase()}),r.type=function(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?Ar[er.call(e)]||"object":typeof e}
var Cr=/^\s*\bfunction\b/
r.isFunction="object"==typeof alert?function(e){try{return Cr.test(e+"")}catch(t){return!1}}:function(e){return"[object Function]"===er.call(e)}
var Tr=/^\[object (?:Window|DOMWindow|global)\]$/
r.isWindow=T(r.window)?T:C
var $r,Er
for($r in r({}))break
Er="0"!==$r,r.isPlainObject=/\[native code\]/.test(Object.getPrototypeOf)?E:$
var Nr=/object|function/
r.mix=r.fn.mix=function(){var e=arguments.length,t=!1,n=0,r=[]
for(arguments[0]===!0&&(t=!0,n=1);e>n;n++){var i=arguments[n]
i=i&&Nr.test(typeof i)?i:{},r.push(i)}return 1===r.length&&r.unshift(this),N(t,r)}
var Or,Mr=/(Array|List|Collection|Map|Arguments)\]$/
r.each=function(e,t){if(e){var n=0
if(O(e))for(var r=e.length;r>n&&t(n,e[n])!==!1;n++);else for(n in e)if(e.hasOwnProperty(n)&&t(n,e[n])===!1)break}}
var Sr=/<script[^>]*>([\S\s]*?)<\/script\s*>/gim,Vr=/\s+(on[^=\s]+)(?:=("[^"]*"|'[^']*'|[^\s>]+))?/g,Dr=/<\w+\b(?:(["'])[^"]*?(\1)|[^>])*>/gi,jr={a:/\b(href)\=("javascript[^"]*"|'javascript[^']*')/gi,img:/\b(src)\=("javascript[^"]*"|'javascript[^']*')/gi,form:/\b(action)\=("javascript[^"]*"|'javascript[^']*')/gi},Lr={yyyy:L("FullYear",4),yy:L("FullYear",2,0,!0),y:L("FullYear",1),MMMM:F("Month"),MMM:F("Month",!0),MM:L("Month",2,1),M:L("Month",1,1),dd:L("Date",2),d:L("Date",1),HH:L("Hours",2),H:L("Hours",1),hh:L("Hours",2,-12),h:L("Hours",1,-12),mm:L("Minutes",2),m:L("Minutes",1),ss:L("Seconds",2),s:L("Seconds",1),sss:L("Milliseconds",3),EEEE:F("Day"),EEE:F("Day",!0),a:I,Z:P},Fr=/((?:[^yMdHhmsaZE']+)|(?:'(?:[^']|'')*')|(?:E+|y+|M+|d+|H+|h+|m+|s+|a|Z))(.*)/,Pr=/^\/Date\((\d+)\)\/$/,Ir={AMPMS:{0:"上午",1:"下午"},DAY:{0:"星期日",1:"星期一",2:"星期二",3:"星期三",4:"星期四",5:"星期五",6:"星期六"},MONTH:{0:"1月",1:"2月",2:"3月",3:"4月",4:"5月",5:"6月",6:"7月",7:"8月",8:"9月",9:"10月",10:"11月",11:"12月"},SHORTDAY:{0:"周日",1:"周一",2:"周二",3:"周三",4:"周四",5:"周五",6:"周六"},fullDate:"y年M月d日EEEE",longDate:"y年M月d日",medium:"yyyy-M-d H:mm:ss",mediumDate:"yyyy-M-d",mediumTime:"H:mm:ss","short":"yy-M-d ah:mm",shortDate:"yy-M-d",shortTime:"ah:mm"}
Ir.SHORTMONTH=Ir.MONTH,H.locate=Ir
var Hr,Rr={$id:Hr,$render:Hr,$track:Hr,$element:Hr,$computed:Hr,$watch:Hr,$fire:Hr,$events:Hr,$accessors:Hr,$hashcode:Hr,$mutations:Hr,$vbthis:Hr,$vbsetter:Hr},Br={stop:function(e){return e.stopPropagation(),e},prevent:function(e){return e.preventDefault(),e}},zr={esc:27,tab:9,enter:13,space:32,del:46,up:38,left:37,right:39,down:40}
for(var qr in zr)!function(e,t){Br[e]=function(e){return e.which!==t&&(e.$return=!0),e}}(qr,zr[qr])
var Gr=r.filters={}
r.composeFilters=function(){var e=arguments
return function(t){for(var n,i=0;n=e[i++];){var o=n[0],a=r.filters[o]
if("function"==typeof a){n[0]=t
try{t=a.apply(0,n)}catch(s){}}}return t}},r.escapeHtml=Y,r.mix(Gr,{uppercase:function(e){return(e+"").toUpperCase()},lowercase:function(e){return(e+"").toLowerCase()},truncate:function(e,t,n){return e?(e+="",isNaN(t)&&(t=30),n="string"==typeof n?n:"...",e.length>t?e.slice(0,t-n.length)+n:e):""},camelize:r.camelize,date:H,escape:Y,sanitize:V,number:S,currency:function(e,t,n){return(t||"¥")+S(e,isFinite(n)?n:2)}},{filterBy:z,orderBy:R,selectBy:q,limitBy:G},Br)
var Wr=/^(?:checkbox|radio)$/
r.contains=K,r.cloneNode=function(e){return e.cloneNode(!0)},Rn&&Q(),ee.prototype={toString:function(){var e=this.node,t=e.className,n="string"==typeof t?t:t.baseVal,r=n.match(Xn)
return r?r.join(" "):""},contains:function(e){return(" "+this+" ").indexOf(" "+e+" ")>-1},add:function(e){this.contains(e)||this.set(this+" "+e)},remove:function(e){this.set((" "+this+" ").replace(" "+e+" "," "))},set:function(e){e=e.trim()
var t=this.node
"object"==typeof t.className?t.setAttribute("class",e):t.className=e,e||t.removeAttribute("class")}},"add,remove".replace(Zn,function(e){r.fn[e+"Class"]=function(t){var n=this[0]||{}
return t&&"string"==typeof t&&1===n.nodeType&&t.replace(Xn,function(t){te(n)[e](t)}),this}}),r.shadowCopy(r.fn,{hasClass:function(e){var t=this[0]||{}
return 1===t.nodeType&&te(t).contains(e)},toggleClass:function(e,t){var n="boolean"==typeof t,r=this
return(e+"").replace(Xn,function(e){var i=n?t:!r.hasClass(e)
r[i?"addClass":"removeClass"](e)}),this}})
var Ur={"accept-charset":"acceptCharset","char":"ch",charoff:"chOff","class":"className","for":"htmlFor","http-equiv":"httpEquiv"},Yr="autofocus,autoplay,async,allowTransparency,checked,controls,declare,disabled,defer,defaultChecked,defaultSelected,,isMap,loop,multiple,noHref,noResize,noShade,open,readOnly,selected"
Yr.replace(/\w+/g,function(e){Ur[e.toLowerCase()]=e})
var Jr="accessKey,bgColor,cellPadding,cellSpacing,codeBase,codeType,colSpan,dateTime,defaultValue,contentEditable,frameBorder,longDesc,maxLength,marginWidth,marginHeight,rowSpan,tabIndex,useMap,vSpace,valueType,vAlign"
Jr.replace(/\w+/g,function(e){Ur[e.toLowerCase()]=e})
var Zr=/^[\],:{}\s]*$/,Xr=/(?:^|:|,)(?:\s*\[)+/g,Kr=/\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,Qr=/"[^"\\\r\n]*"|true|false|null|-?(?:\d+\.|)\d+(?:[eE][+-]?\d+|)/g,ei=/^\[object SVG\w*Element\]$/,ti=/&amp;/g,ni={}
try{r.parseJSON=JSON.parse}catch(_r){r.parseJSON=re}r.fn.attr=function(e,t){return 2===arguments.length?(this[0].setAttribute(e,t),this):this[0].getAttribute(e)}
var ri={"float":"cssFloat"}
r.cssNumber=o("animationIterationCount,columnCount,order,flex,flexGrow,flexShrink,fillOpacity,fontWeight,lineHeight,opacity,orphans,widows,zIndex,zoom")
var ii=["","-webkit-","-o-","-moz-","-ms-"]
r.cssName=function(e,t,n){if(ri[e])return ri[e]
t=t||r.root.style||{}
for(var i=0,o=ii.length;o>i;i++)if(n=r.camelize(ii[i]+e),n in t)return ri[e]=n
return null},r.css=function(e,t,n,i){if(e instanceof r&&(e=e[0]),1===e.nodeType){var o=r.camelize(t)
if(t=r.cssName(o)||o,void 0===n||"boolean"==typeof n){i=hr[o+":get"]||hr["@:get"],"background"===t&&(t="backgroundColor")
var a=i(e,t)
return n===!0?parseFloat(a)||0:a}if(""===n)e.style[t]=""
else{if(null==n||n!==n)return
isFinite(n)&&!r.cssNumber[o]&&(n+="px"),i=hr[o+":set"]||hr["@:set"],i(e,t,n)}}},r.fn.css=function(e,t){if(r.isPlainObject(e))for(var n in e)r.css(this,n,e[n])
else var i=r.css(this,e,t)
return void 0!==i?i:this},r.fn.position=function(){var e,t,n=this[0],i={top:0,left:0}
return n?("fixed"===this.css("position")?t=n.getBoundingClientRect():(e=this.offsetParent(),t=this.offset(),"HTML"!==e[0].tagName&&(i=e.offset()),i.top+=r.css(e[0],"borderTopWidth",!0),i.left+=r.css(e[0],"borderLeftWidth",!0),i.top-=e.scrollTop(),i.left-=e.scrollLeft()),{top:t.top-i.top-r.css(n,"marginTop",!0),left:t.left-i.left-r.css(n,"marginLeft",!0)}):i},r.fn.offsetParent=function(){for(var e=this[0].offsetParent;e&&"static"===r.css(e,"position");)e=e.offsetParent
return r(e||r.root)},hr["@:set"]=function(e,t,n){try{e.style[t]=n}catch(r){}},hr["@:get"]=function(e,t){if(!e||!e.style)throw Error("getComputedStyle要求传入一个节点 "+e)
var n,r=Jn.getComputedStyle(e,null)
return r&&(n="filter"===t?r.getPropertyValue(t):r[t],""===n&&(n=e.style[t])),n},hr["opacity:get"]=function(e){var t=hr["@:get"](e,"opacity")
return""===t?"1":t},"top,left".replace(r.rword,function(e){hr[e+":get"]=function(t){var n=hr["@:get"](t,e)
return/px$/.test(n)?n:r(t).position()[e]+"px"}})
var oi={position:"absolute",visibility:"hidden",display:"block"},ai=/^(none|table(?!-c[ea]).+)/
if(r.each({Width:"width",Height:"height"},function(e,t){var n="client"+e,i="scroll"+e,o="offset"+e
hr[t+":get"]=function(t,n,i){var a=-4
"number"==typeof i&&(a=i),n="Width"===e?["Left","Right"]:["Top","Bottom"]
var s=t[o]
return 2===a?s+r.css(t,"margin"+n[0],!0)+r.css(t,"margin"+n[1],!0):(0>a&&(s=s-r.css(t,"border"+n[0]+"Width",!0)-r.css(t,"border"+n[1]+"Width",!0)),-4===a&&(s=s-r.css(t,"padding"+n[0],!0)-r.css(t,"padding"+n[1],!0)),s)},hr[t+"&get"]=function(e){var n=[]
ae(e,n)
for(var r,i=hr[t+":get"](e),o=0;r=n[o++];){e=r.node
for(var a in r)"string"==typeof r[a]&&(e.style[a]=r[a])}return i},r.fn[t]=function(r){var a=this[0]
if(0===arguments.length){if(a.setTimeout)return a["inner"+e]||a.document.documentElement[n]||a.document.body[n]
if(9===a.nodeType){var s=a.documentElement
return Math.max(a.body[i],s[i],a.body[o],s[o],s[n])}return hr[t+"&get"](a)}return this.css(t,r)},r.fn["inner"+e]=function(){return hr[t+":get"](this[0],void 0,-2)},r.fn["outer"+e]=function(e){return hr[t+":get"](this[0],void 0,e===!0?2:0)}}),9>Gn){ri["float"]="styleFloat"
var si=/^-?(?:\d*\.)?\d+(?!px)[^\d\s]+$/i,ci=/^(top|right|bottom|left)$/,ui=/alpha\([^)]+\)/i,li=/(opacity|\d(\d|\.)*)/g,di=8===Gn,fi={thin:di?"1px":"2px",medium:di?"3px":"4px",thick:di?"5px":"6px"}
hr["@:get"]=function(e,t){var n=e.currentStyle,r=n[t]
if(si.test(r)&&!ci.test(r)){var i=e.style,o=i.left,a=e.runtimeStyle.left
e.runtimeStyle.left=n.left,i.left="fontSize"===t?"1em":r||0,r=i.pixelLeft+"px",i.left=o,e.runtimeStyle.left=a}return"medium"===r&&(t=t.replace("Width","Style"),"none"===n[t]&&(r="0px")),""===r?"auto":fi[r]||r},hr["opacity:set"]=function(e,t,n){var r=e.style,i=1>=+n?"alpha(opacity="+100*n+")":"",o=r.filter||""
r.zoom=1,r.filter=(ui.test(o)?o.replace(ui,i):o+" "+i).trim(),r.filter||r.removeAttribute("filter")},hr["opacity:get"]=function(e){for(var t,n=e.style.filter.match(li)||[],r=!1,i=0;t=n[i++];)if("opacity"===t)r=!0
else if(r)return t/100+""
return"1"}}r.fn.offset=function(){var e=this[0],t={left:0,top:0}
if(!e||!e.tagName||!e.ownerDocument)return t
var n=e.ownerDocument,i=n.body,o=n.documentElement,a=n.defaultView||n.parentWindow
if(!r.contains(o,e))return t
e.getBoundingClientRect&&(t=e.getBoundingClientRect())
var s=o.clientTop||i.clientTop,c=o.clientLeft||i.clientLeft,u=Math.max(a.pageYOffset||0,o.scrollTop,i.scrollTop),l=Math.max(a.pageXOffset||0,o.scrollLeft,i.scrollLeft)
return{top:t.top+u-s,left:t.left+l-c}},r.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(e,t){r.fn[e]=function(n){var i=this[0]||{},o=se(i),a=r.root,s="scrollTop"===e
return arguments.length?void(o?o.scrollTo(s?r(o).scrollLeft():n,s?n:r(o).scrollTop()):i[e]=n):o?t in o?o[t]:a[e]:i[e]}})
var hi={"option:get":Gn?ue:function(e){return e.value},"select:get":function(e,t){for(var n,r=e.options,i=e.selectedIndex,o=hi["option:get"],a="select-one"===e.type||0>i,s=a?null:[],c=a?i+1:r.length,u=0>i?c:a?i:0;c>u;u++)if(n=r[u],(n.selected||u===i)&&!n.disabled&&(!n.parentNode.disabled||"OPTGROUP"!==n.parentNode.tagName)){if(t=o(n),a)return t
s.push(t)}return s},"select:set":function(e,t,n){t=[].concat(t)
for(var r,i=hi["option:get"],o=0;r=e.options[o++];)(r.selected=t.indexOf(i(r))>-1)&&(n=!0)
n||(e.selectedIndex=-1)}}
r.fn.val=function(e){var t=this[0]
if(t&&1===t.nodeType){var n=0===arguments.length,r=n?":get":":set",i=hi[ce(t)+r]
if(i)var o=i(t,e)
else{if(n)return(t.value||"").replace(/\r/g,"")
t.value=e}}return n?o:this}
var pi=0,vi={map:{}},mi=/\?\?\d+/g,gi={area:1,base:1,basefont:1,bgsound:1,br:1,col:1,command:1,embed:1,frame:1,hr:1,img:1,input:1,keygen:1,link:1,meta:1,param:1,source:1,track:1,wbr:1},yi={script:1,style:1,textarea:1,xmp:1,noscript:1,template:1},bi=/<\w+(\s+("[^"]*"|'[^']*'|[^>])+)?>|<\/\w+>/gi,xi=o("div,ul,ol,dl,table,h1,h2,h3,h4,h5,h6,form,fieldset"),wi=ye("tr,style,script"),_i={p:xi,select:ye("option,optgroup,#text"),optgroup:ye("option,#text"),option:ye("#text"),tr:ye("th,td,style,script"),tbody:wi,tfoot:wi,thead:wi,colgroup:ye("col"),head:ye("base,basefont,bgsound,link,style,script,meta,title,noscript,noframes"),html:o("head,body")},ki=/^<([-A-Za-z0-9_]+)\s*([^>]*?)(\/?)>/,Ai=/^<\/([^>]+)>/,Ci=/[\!\/a-z]/i,Ti=/\\n\s*/g,$i=/([^=\s]+)(?:\s*=\s*(\S+))?/,Ei=/\S/
r.lexer=xe
var Ni=new e(100)
we.prototype={init:function(e){this.ret=[]
var t=[]
t.last=function(){return t[t.length-1]},this.stack=t,this.str=e},gen:function(){var e=999999
do{this.tryGenText(),this.tryGenComment(),this.tryGenOpenTag(),this.tryGenCloseTag()
var t=this.node
if(this.node=0,!t||0===--e)break
t.end&&("table"===t.nodeName&&me(t.children),delete t.end)}while(this.str.length)
return this.ret},fixPos:function(e,t){for(var n=e.length-t;n--&&!Ci.test(e.charAt(t+1));)t=e.indexOf("<",t+1)
return 0===n&&(t=e.length),t},tryGenText:function(){var e=this.str
if("<"!==e.charAt(0)){var t=e.indexOf("<");-1===t?t=e.length:Ci.test(e.charAt(t+1))||(t=this.fixPos(e,t))
var n=e.slice(0,t).replace(mi,de)
this.str=e.slice(t),this.node={nodeName:"#text",nodeValue:n},Ei.test(n)&&this.tryGenChildren()}},tryGenComment:function(){if(!this.node){var e=this.str,t=e.indexOf("<!--")
if(0===t){var n=e.indexOf("-->");-1===n&&r.error("注释节点没有闭合"+e)
var i=e.slice(4,n).replace(mi,de)
this.str=e.slice(n+3),this.node={nodeName:"#comment",nodeValue:i},this.tryGenChildren()}}},tryGenOpenTag:function(){if(!this.node){var e=this.str,t=e.match(ki)
if(t){var n=t[1],i={};/^[A-Z]/.test(n)&&r.components[n]&&(i.is=n),n=n.toLowerCase()
var o=!!gi[n]||"/"===t[3],a=this.node={nodeName:n,props:{},children:[],isVoidTag:o},s=t[2]
if(s&&this.genProps(s,a.props),this.tryGenChildren(),e=e.slice(t[0].length),o)a.end=!0
else if(this.stack.push(a),yi[n]||"option"===n){var c=e.indexOf("</"+n+">"),u=e.slice(0,c).trim()
e=e.slice(c),pe(a,n,be(u))}this.str=e}}},tryGenCloseTag:function(){if(!this.node){var e=this.str,t=e.match(Ai)
if(t){var n=t[1].toLowerCase(),i=this.stack.last()
if(i){if(i.nodeName!==n){var o=i.nodeName+"没有闭合,请注意属性的引号"
r.warn(o),r.error(o)}}else r.error(t[0]+"前面缺少<"+n+">")
var a=this.stack.pop()
a.end=!0,this.node=a,this.str=e.slice(t[0].length)}}},tryGenChildren:function(){var e=this.node,t=this.stack.last()
t?(ge(t,e),t.children.push(e)):this.ret.push(e)},genProps:function(e,t){for(;e;){var n=$i.exec(e)
if(!n)break
var r=n[1],i=n[2]||""
e=e.replace(n[0],""),i&&0===i.indexOf("??")&&(i=be(i).replace(Ti,"").slice(1,-1)),r in t||(t[r]=i)}}}
var Oi=new we,Mi=/<|&#?\w+;/,Si=new e(128),Vi=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi
r.parseHTML=function(e){var t=x()
if("string"!=typeof e)return t
if(!Mi.test(e))return Bn.createTextNode(e)
e=e.replace(Vi,"<$1></$2>").trim()
var n=Si.get(e)
if(n)return r.cloneNode(n)
for(var i,o=xe(e),a=0;i=o[a++];){var s=r.vdom(i,"toDOM")
t.appendChild(s)}return e.length<1024&&Si.put(e,t),t},r.innerHTML=function(e,t){var n=r.parseHTML(t)
this.clearHTML(e),e.appendChild(n)},r.unescapeHTML=function(e){return(e+"").replace(/&quot;/g,'"').replace(/&#39;/g,"'").replace(/&lt;/g,"<").replace(/&gt;/g,">").replace(/&amp;/g,"&")},r.clearHTML=function(e){for(;e.lastChild;)e.removeChild(e.lastChild)
return e}
var Di={click:!0,dblclick:!0,keydown:!0,keypress:!0,keyup:!0,mousedown:!0,mousemove:!0,mouseup:!0,mouseover:!0,mouseout:!0,wheel:!0,mousewheel:!0,input:!0,change:!0,beforeinput:!0,compositionstart:!0,compositionupdate:!0,compositionend:!0,select:!0,cut:!0,copy:!0,paste:!0,beforecut:!0,beforecopy:!0,beforepaste:!0,focusin:!0,focusout:!0,DOMFocusIn:!0,DOMFocusOut:!0,DOMActivate:!0,dragend:!0,datasetchanged:!0},ji=r.modern&&Bn.ontouchstart
r.fn.bind=function(e,t,n){return this[0]?r.bind(this[0],e,t,n):void 0},r.fn.unbind=function(e,t,n){if(this[0]){var i=ar.call(arguments)
i.unshift(this[0]),r.unbind.apply(0,i)}return this},r.bind=function(e,t,n){if(1===e.nodeType){var i=e.getAttribute("avalon-events")||"",o=y(n),a=lr[t]
"click"===t&&ji&&e.addEventListener("click",r.noop),a&&(t=a.type||t,a.fix&&(n=a.fix(e,n),n.uuid=o))
var s=t+":"+o
r.eventListeners[n.uuid]=n,-1===i.indexOf(t+":")&&(Di[t]||r.modern&&Pi[t]?Te(t):r._nativeBind(e,t,Ce))
var c=i.split(",")
return""===c[0]&&c.shift(),-1===c.indexOf(s)&&(c.push(s),ke(e,c.join(","))),n}var u=function(t){n.call(e,new $e(t))}
return r._nativeBind(e,t,u),u},r.unbind=function(e,t,n){if(1===e.nodeType){var i=e.getAttribute("avalon-events")||""
switch(arguments.length){case 1:r._nativeUnBind(e,t,Ce),e.removeAttribute("avalon-events")
break
case 2:i=i.split(",").filter(function(e){return-1===e.indexOf(t+":")}).join(","),ke(e,i)
break
default:var o=t+":"+n.uuid
i=i.split(",").filter(function(e){return e!==o}).join(","),ke(e,i),delete r.eventListeners[n.uuid]}}else r._nativeUnBind(e,t,n)}
var Li={},Fi=/^e/,Pi={focus:!0,blur:!0},Ii={webkitMovementY:1,webkitMovementX:1,keyLocation:1,fixEvent:function(){},preventDefault:function(){var e=this.originalEvent||{}
e.returnValue=this.returnValue=!1,Wn&&e.preventDefault&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent||{}
e.cancelBubble=this.cancelBubble=!0,Wn&&e.stopPropagation&&e.stopPropagation()},stopImmediatePropagation:function(){this.stopPropagation(),this.stopImmediate=!0},toString:function(){return"[object Event]"}}
if($e.prototype=Ii,"onmouseenter"in zn||r.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(e,t){lr[e]={type:t,fix:function(t,n){return function(r){var i=r.relatedTarget
return i&&(i===t||16&t.compareDocumentPosition(i))?void 0:(delete r.type,r.type=e,n.apply(this,arguments))}}}}),r.each({AnimationEvent:"animationend",WebKitAnimationEvent:"webkitAnimationEnd"},function(e,t){Jn[e]&&!lr.animationend&&(lr.animationend={type:t})}),!("onmousewheel"in Bn)){var Hi=void 0!==Bn.onwheel?"wheel":"DOMMouseScroll",Ri="wheel"===Hi?"deltaY":"detail"
lr.mousewheel={type:Hi,fix:function(e,t){return function(n){var r=n[Ri]>0?-120:120
return n.wheelDelta=~~e._ms_wheel_+r,e._ms_wheel_=n.wheelDeltaY=n.wheelDelta,n.wheelDeltaX=0,Object.defineProperty&&Object.defineProperty(n,"type",{value:"mousewheel"}),t.apply(this,arguments)}}}}Wn||(delete Di.change,delete Di.select),r._nativeBind=Wn?function(e,t,n,r){e.addEventListener(t,n,!!r)}:function(e,t,n){e.attachEvent("on"+t,n)},r._nativeUnBind=Wn?function(e,t,n,r){e.removeEventListener(t,n,!!r)}:function(e,t,n){e.detachEvent("on"+t,n)},r.fireDom=function(e,t,n){if(Bn.createEvent){var i=Bn.createEvent("Events")
i.initEvent(t,!0,!0,n),r.shadowCopy(i,n),e.dispatchEvent(i)}else if(zn.contains(e)){i=Bn.createEventObject(),n&&r.shadowCopy(i,n)
try{e.fireEvent("on"+t,i)}catch(o){r.log("fireDom",t,"args error")}}}
var Bi=/^(?:mouse|contextmenu|drag)|click/
$e.prototype.fixEvent=function(){var e=this
if(null==e.which&&0===e.type.indexOf("key")&&(e.which=null!=e.charCode?e.charCode:e.keyCode),Bi.test(e.type)&&!("pageX"in e)){var t=e.target.ownerDocument||Bn,n="BackCompat"===t.compatMode?t.body:t.documentElement
e.pageX=e.clientX+(n.scrollLeft>>0)-(n.clientLeft>>0),e.pageY=e.clientY+(n.scrollTop>>0)-(n.clientTop>>0),e.wheelDeltaY=~~e.wheelDelta,e.wheelDeltaX=0}},"oninput"in Bn.createElement("input")||(lr.input={type:"propertychange",fix:function(e,t){return function(e){return"value"===e.propertyName?(e.type="input",t.apply(this,arguments)):void 0}}})
var zi=[]
r.ready=function(e){zi.push(e),r.isReady&&Ee()},r.ready(function(){r.scan&&r.scan(Bn.body)}),Rn&&Ne()
var qi=/input|textarea|select/i
Ve.prototype={constructor:Ve,toDOM:function(){if(this.dom)return this.dom
var e=r._decode(this.nodeValue)
return this.dom=Bn.createTextNode(e)},toHTML:function(){return this.nodeValue}},De.prototype={constructor:De,toDOM:function(){return this.dom?this.dom:this.dom=Bn.createComment(this.nodeValue)},toHTML:function(){return"<!--"+this.nodeValue+"-->"}},je.prototype={constructor:je,toDOM:function(){if(this.dom)return this.dom
var e,t=this.nodeName
e=r.modern&&Wi[t]?Pe(t):r.modern||!Yi[t]&&!Ui.test(t)?Bn.createElement(t):Ie(t)
var n=this.props||{}
for(var i in n){var o=n[i]
Fe(o)&&(Gi[i]&&r.msie<8?Gi[i](e,o):e.setAttribute(i,o+""))}var a=this.children||[],s=a[0]?a[0].nodeValue:""
switch(this.nodeName){case"script":e.type="noexec",e.text=s
try{e.innerHTML=s}catch(c){}e.type=n.type||""
break
case"noscript":e.textContent=s
case"style":case"xmp":case"template":try{e.innerHTML=s}catch(c){Le(e,this.nodeName,s)}break
case"option":9>Gn&&(e.text=s)
default:!this.isVoidTag&&this.children&&this.children.forEach(function(t){return a&&e.appendChild(r.vdom(a,"toDOM"))})}return this.dom=e},toHTML:function(){var e=[],t=this.props||{}
for(var n in t){var i=t[n]
Fe(i)&&e.push(n+"="+r.quote(t[n]+""))}e=e.length?" "+e.join(" "):""
var o="<"+this.nodeName+e
return this.isVoidTag?o+"/>":(o+=">",this.children&&(o+=this.children.map(function(e){return e?r.vdom(e,"toHTML"):""}).join("")),o+"</"+this.nodeName+">")}}
var Gi={"class":function(e,t){e.className=t},style:function(e,t){e.style.cssText=t},type:function(e,t){try{e.type=t}catch(n){}},"for":function(e,t){e.setAttribute("for",t),e.htmlFor=t}},Wi=r.oneObject("circle,defs,ellipse,image,line,path,polygon,polyline,rect,symbol,text,use,g,svg"),Ui=/^\w+\:\w+/,Yi=r.oneObject("shape,line,polyline,rect,roundrect,oval,arc,curve,background,image,shapetype,group,fill,stroke,shadow, extrusion, textbox, imagedata, textpath")
He.prototype={constructor:He,toDOM:function(){if(this.dom)return this.dom
var e=this.toFragment()
return this.split=e.lastChild,this.dom=e},dispose:function(){this.toFragment(),this.innerRender&&this.innerRender.dispose()
for(var e in this)this[e]=null},toFragment:function(){var e=x()
return this.children.forEach(function(t){return e.appendChild(r.vdom(t,"toDOM"))}),e},toHTML:function(){var e=this.children
return e.map(function(e){return r.vdom(e,"toHTML")}).join("")}},r.mix(r,{VText:Ve,VComment:De,VElement:je,VFragment:He})
var Ji={"#text":"VText","#document-fragment":"VFragment","#comment":"VComment"}
r.vdomAdaptor=r.vdom=function(e,t){if(!e)return"toHTML"===t?"":x()
var n=e.nodeName
if(!n)return new r.VFragment(e)[t]()
var i=Ji[n]||"VElement"
return r[i].prototype[t].call(e)}
r.domize=function(e){return r.vdom(e,"toDOM")},r.pendingActions=[],r.uniqActions={},r.inTransaction=0,w.trackDeps=!1,r.track=function(){w.trackDeps&&r.log.apply(r,arguments)}
var Zi=[]
r.transaction=We
var Xi=r.oneObject("break,case,catch,continue,debugger,default,delete,do,else,false,finally,for,function,if,in,instanceof,new,null,return,switch,this,throw,true,try,typeof,var,void,while,with,abstract,boolean,byte,char,class,const,double,enum,export,extends,final,float,goto,implements,import,int,interface,long,native,package,private,protected,public,short,static,super,synchronized,throws,transient,volatile"),Ki=r.mix({Math:1,Date:1,$event:1,window:1,__vmodel__:1,avalon:1},Xi),Qi=/(^|[^\w\u00c0-\uFFFF_])(@|##)(?=[$\w])/g,eo=/\s*(\.|\|)\s*/g,to=/\|\|/g,no=/\(([^)]*)\)/,ro=/\|(?=\?\?)/,io=/(^|[^\/])\/(?!\/)(\[.+?]|\\.|[^\/\\\r\n])+\/[gimyu]{0,5}(?=\s*($|[\r\n,.;})]))/g,oo=/\.[\w\.\$]+/g,ao=/(\{|\,)\s*([\$\w]+)\s*:/g,so=/\|(\w+)/g,co=/[$a-zA-Z_][$a-zA-Z0-9_]*/g,uo=new e(300),lo=/^__vmodel__\.[$\w\.]+$/,fo=/__vmodel__\.([^(]+)\(([^)]*)\)/,ho=1
et.prototype={getValue:function(){var e=this.vm
try{return this.getter.call(e,e)}catch(t){r.log(this.getter+" exec error")}},setValue:function(e){var t=this.vm
this.setter&&this.setter.call(t,t,e)},get:function(e){"action track "+this.type
this.deep&&(r.deepCollect=!0)
var t=qe(this,this.getValue)
return this.deep&&r.deepCollect&&(r.deepCollect=!1),t},beforeUpdate:function(){var e=this.value
return this.oldValue=e&&e.$events?e.$model:e},update:function(e,t){var n=this.beforeUpdate(),r=this.value=this.get(),i=this.callback
i&&this.diff(r,n,e)&&i.call(this.vm,this.value,n,this.expr),this._isScheduled=!1},schedule:function(){this._isScheduled||(this._isScheduled=!0,r.uniqActions[this.uuid]||(r.uniqActions[this.uuid]=1,r.pendingActions.push(this)),Re())},removeDepends:function(){var e=this
this.observers.forEach(function(t){r.Array.remove(t.observers,e)})},diff:function(e,t){return e!==t},dispose:function(){this.value=null,this.removeDepends(),this.beforeDispose&&this.beforeDispose()
for(var e in this)delete this[e]}}
var po={vm:1,callback:1,observers:1,oldValue:1,value:1,getValue:1,setValue:1,get:1,removeDepends:1,beforeUpdate:1,update:1,dispose:1},vo=1
tt.prototype={get:function(){if(r.trackingAction){this.collect()
var e=this.value
if(e&&e.$events)if(Array.isArray(e))e.forEach(function(e){e&&e.$events&&e.$events.__dep__.collect()})
else if(r.deepCollect)for(var t in e)if(e.hasOwnProperty(t)){e[t]}}return this.value},collect:function(){r.track(name,"被收集"),ze(this)},updateVersion:function(){this.version=Math.random()+Math.random()},notify:function(){Ue(),Be(this),Ye()},set:function(e){var t=this.value
if(e!==t){if(r.isObject(e)){var n=t&&t.$hashcode,i=Kn.createProxy(e,this)
i&&(n&&(i.$hashcode=n),e=i)}this.value=e,this.updateVersion(),this.notify()}}}
var mo=/(\?|if\b|\(.+\))/,go=function(e){function t(t,n,i){e.call(this,t,void 0,i),delete n.get,delete n.set,r.mix(this,n),this.deps={},this.type="computed",this.depsVersion={},this.isComputed=!0,this.trackAndCompute(),"isStable"in this||(this.isStable=!mo.test(nt(this.getter)))}it(t,e)
var n=t.prototype
return n.trackAndCompute=function(){this.isStable&&this.depsCount>0?this.getValue():qe(this,this.getValue.bind(this))},n.getValue=function(){return this.value=this.getter.call(this.vm)},n.schedule=function(){for(var e=this.observers,t=e.length;t--;){var n=e[t]
n.schedule&&n.schedule()}},n.shouldCompute=function(){if(this.isStable){var e=!1
for(var t in this.deps)this.deps[t].version!==this.depsVersion[t]&&(e=!0,this.deps[t].version=this.depsVersion[t])
return e}return!0},n.set=function(){this.setter&&r.transaction(this.setter,this.vm,arguments)},n.get=function(){return this.collect(),this.shouldCompute()&&(this.trackAndCompute(),this.updateVersion()),this.value},t}(tt)
r.define=function(e){var t=e.$id
t||r.error("vm.$id must be specified"),r.vmodels[t]&&r.warn("error:["+t+"] had defined!")
var n=Kn.modelFactory(e)
return r.vmodels[t]=n},Kn.modelFactory=function(e,t){var n=e.$computed||{}
delete e.$computed
var i=new ot(e,t),o=i.$accessors,a=[]
Kn.hideProperty(i,"$mutations",{})
for(var s in e)if(!(s in Rr)){var c=e[s]
a.push(s),at(s,c)&&(o[s]=ct(s,c))}for(var u in n)if(!(u in Rr)){var c=n[u]
"function"==typeof c&&(c={get:c}),c&&c.get&&(c.getter=c.get,c.setter=c.set,r.Array.ensure(a,u),o[u]=ct(u,c,!0))}var l=Kn.createViewModel(i,o,i)
return Kn.afterCreate(l,i,a,!t),l}
var yo={}
Kn.createProxy=st,Kn.itemFactory=function(e,t){var n=e.$model,i=new ot(n),o=r.shadowCopy(i.$accessors,e.$accessors),a=t.data
for(var s in a){var c=n[s]=i[s]=a[s]
o[s]=ct(s,c)}var u=Object.keys(n),l=Kn.createViewModel(i,o,i)
return Kn.afterCreate(l,i,u),l},Kn.fuseFactory=function(e,t){var n=r.mix(e.$model,t.$model),i=new ot(r.mix(n,{$id:e.$id+t.$id})),o=r.mix(i.$accessors,e.$accessors,t.$accessors),a=Object.keys(n),s=Kn.createViewModel(i,o,i)
return Kn.afterCreate(s,i,a,!1),s}
var bo={get:function(){return ut(this)},set:r.noop,enumerable:!1,configurable:!0}
Kn.toJson=ut,Kn.modelAccessor=bo
var xo=nr.splice,wo={set:function(e,t){if(e>>>0===e&&this[e]!==t){if(e>this.length)throw Error(e+"set方法的第一个参数不能大于原数组长度")
this.splice(e,1,t)}},toJSON:function(){return this.$model=Kn.toJson(this)},contains:function(e){return-1!==this.indexOf(e)},ensure:function(e){return this.contains(e)?!1:(this.push(e),!0)},pushArray:function(e){return this.push.apply(this,e)},remove:function(e){return this.removeAt(this.indexOf(e))},removeAt:function(e){return e>>>0===e?this.splice(e,1):[]},clear:function(){return this.removeAll(),this},removeAll:function(e){var t=(this.length,Array.isArray(e)?function(t){return-1!==e.indexOf(t)}:"function"==typeof e?e:!1)
if(t)for(var n=this.length-1;n>=0;n--)t(this[n],n)&&xo.call(this,n,1)
else xo.call(this,0,this.length)
this.toJSON(),this.$events.__dep__.notify()}},_o=["push","pop","shift","unshift","splice","sort","reverse"]
_o.forEach(function(e){var t=nr[e]
wo[e]=function(){var n=this.$events,r=Kn.listFactory(arguments,!0,n.__dep__),i=t.apply(this,r)
return this.toJSON(),n.__dep__.notify(e),i}}),Kn.listFactory=dt
var ko=!0
try{Object.defineProperty({},"_",{value:"x"}),delete Rr.$vbsetter,delete Rr.$vbthis}catch(_r){ko=!1}var Ao={$vbthis:1,$vbsetter:1}
Kn.hideProperty=ft,Kn.fireFactory=pt,Kn.watchFactory=ht,Kn.afterCreate=mt
var Co,To=Object.defineProperties,$o=new Date-0
if(!ko&&("__defineGetter__"in r&&(Co=function(e,t,n){return"value"in n&&(e[t]=n.value),"get"in n&&e.__defineGetter__(t,n.get),"set"in n&&e.__defineSetter__(t,n.set),e},To=function(e,t){for(var n in t)t.hasOwnProperty(n)&&Co(e,n,t[n])
return e}),9>Gn)){var Eo={}
window.execScript("Function parseVB(code)\n	ExecuteGlobal(code)\nEnd Function","VBScript")
var No=function(e,t,n,r){var i=t[n]
return 4!==arguments.length?i.get.call(e):void i.set.call(e,r)}
To=function(e,t,n){var i=[]
i.push("	Private [$vbsetter]","	Public  [$accessors]","	Public Default Function [$vbthis](ac"+$o+", s"+$o+")","		Set  [$accessors] = ac"+$o+": set [$vbsetter] = s"+$o,"		Set  [$vbthis]    = Me","	End Function")
var o={$vbthis:!0,$vbsetter:!0,$accessors:!0}
for(e in Rr)o[e]||(i.push("	Public ["+e+"]"),o[e]=!0)
for(e in t)o[e]||(o[e]=!0,i.push("	Public Property Let ["+e+"](val"+$o+")",'		Call [$vbsetter](Me, [$accessors], "'+e+'", val'+$o+")","	End Property","	Public Property Set ["+e+"](val"+$o+")",'		Call [$vbsetter](Me, [$accessors], "'+e+'", val'+$o+")","	End Property","	Public Property Get ["+e+"]","	On Error Resume Next","		Set["+e+'] = [$vbsetter](Me, [$accessors],"'+e+'")',"	If Err.Number <> 0 Then","		["+e+'] = [$vbsetter](Me, [$accessors],"'+e+'")',"	End If","	On Error Goto 0","	End Property"))
for(e in n)o[e]||(o[e]=!0,i.push("	Public ["+e+"]"))
i.push("	Public [hasOwnProperty]"),i.push("End Class")
var a=i.join("\r\n"),s=Eo[a]
s||(s=r.makeHashCode("VBClass"),window.parseVB("Class "+s+a),window.parseVB(["Function "+s+"Factory(acc, vbm)","	Dim o","	Set o = (New "+s+")(acc, vbm)","	Set "+s+"Factory = o","End Function"].join("\r\n")),Eo[a]=s)
var c=window[s+"Factory"](t,No)
return c}}Kn.createViewModel=To
var Oo=r.directive("important",{priority:1,getScope:function(e,t){var n=r.vmodels[e]
if(n)return n
throw"error! no vmodel called "+e},update:function(e,t,n){if(r.inBrowser){var i=r.vdom(e,"toDOM")
1===i.nodeType&&(i.removeAttribute(t),r(i).removeClass("ms-controller"))
var o=r.vmodels[n]
o&&(o.$element=i,o.$render=this,o.$fire("onReady"),delete o.$events.onReady)}}}),Mo=Oo.update
r.directive("controller",{priority:2,getScope:function(e,t){var n=r.vmodels[e]
return n?(n.$render=this,t&&t!==n?Kn.fuseFactory(t,n):n):t},update:Mo}),r.directive("skip",{delay:!0})
var So={},Vo=r.directive("css",{diff:function(e,t){if(Object(e)===e){if(e=Kn.toJson(e),Array.isArray(e)){var n={}
e.forEach(function(e){e&&r.shadowCopy(n,e)}),e=n,So[this.type]||(r.warn("ms-"+this.type+"指令的值不建议使用数组形式了！"),So[this.type]=1)}var i=!1,o={}
if(t){if(this.deep){"number"==typeof this.deep?this.deep:6
for(var a in e){if(!yt(e[a],t[a],4))return this.value=e,!0
o[a]=e[a]}}else for(var s in e)e[s]!==t[s]&&(i=!0),o[s]=e[s]
for(var c in t)c in o||(i=!0,o[c]="")}else o=e,i=!0
if(i)return this.value=o,!0}return!1},update:function(e,t){var n=e.dom
if(n&&1===n.nodeType){var i=r(n)
for(var o in t)i.css(o,t[o])}}}),Do=Vo.diff,jo={TransitionEvent:"transitionend",WebKitTransitionEvent:"webkitTransitionEnd",OTransitionEvent:"oTransitionEnd",otransitionEvent:"otransitionEnd"},Lo=void 0,Fo=void 0,Po=void 0,Io=void 0,Ho=void 0,Ro=void 0,Bo=!1,zo=!1
for(Io in jo){if(Jn[Io]){Fo=jo[Io]
break}try{document.createEvent(Io)
Fo=jo[Io]
break}catch(_r){}}"string"==typeof Fo&&(Bo=Lo=!0,Ro=Fo),jo={AnimationEvent:"animationend",WebKitAnimationEvent:"webkitAnimationEnd"}
for(Io in jo)if(Jn[Io]){Po=jo[Io]
break}"string"==typeof Po&&(zo=Lo=!0,Ho=Po)
var qo=r.directive("effect",{priority:5,diff:function(e){var t=this.node
"string"==typeof e&&(this.value=e={is:e},r.warn("ms-effect的指令值不再支持字符串,必须是一个对象")),this.value=t.effect=e
var n=Do.call(this,e,this.oldValue),i=this
return n?(setTimeout(function(){t.animating=!0,qo.update.call(i,t,t.effect)}),t.animating=!1,!0):!1},update:function(e,t,n){var i=e.dom
if(i&&1===i.nodeType){var o=t||n,a=o.is,s=r.effects[a]
if(!s)return void r.warn(a+" effect is undefined")
var c={},u=Yo[o.action]
if("function"!=typeof Zo.prototype[u])return void r.warn("action is undefined")
var l=new r.Effect(i)
return r.mix(c,s,o,{action:u}),c.queue?(Jo.push(function(){l[u](c)}),wt()):l[u](c),!0}}}),Go="move",Wo="leave",Uo="enter",Yo={"true":Uo,"false":Wo,enter:Uo,leave:Wo,move:Go,undefined:Uo},Jo=[]
r.effects={},r.effect=function(e,t){var n=r.effects[e]=t||{}
return Lo&&n.css!==!1&&(_t(n,"enterClass",e+"-enter"),_t(n,"enterActiveClass",n.enterClass+"-active"),_t(n,"leaveClass",e+"-leave"),_t(n,"leaveActiveClass",n.leaveClass+"-active")),n}
var Zo=function(e){this.dom=e}
r.Effect=Zo,Zo.prototype={enter:At("Enter"),leave:At("Leave"),move:At("Move")}
var Xo=new e(128)
r.applyEffect=function(e,t,n){var i=n.cb,o=t.effect
if(o&&e&&1===e.nodeType){var a=n.hook,s=o[a]
i&&(Array.isArray(s)?s.push(i):s?o[a]=[s,i]:o[a]=[i]),Ct(n),r.directives.effect.update(t,o,r.shadowCopy({},n))}else i&&i(e)}
var Ko=r.cssName("transition-duration"),Qo=r.cssName("animation-duration"),ea=/\d+s$/,ta="none"
r.parseDisplay=Nt,r.directive("visible",{diff:function(e,t){var n=!!e
return void 0===t||n!==t?(this.value=n,!0):void 0},ready:!0,update:function(e,t){var n=e.dom
if(n&&1===n.nodeType){var i,o=n.style.display
t?(o===ta&&(i=e.displayValue,i||(n.style.display="",""===n.style.cssText&&n.removeAttribute("style"))),""===n.style.display&&r(n).css("display")===ta&&r.contains(n.ownerDocument,n)&&(i=Nt(n))):o!==ta&&(i=ta,e.displayValue=o)
var a=function(){void 0!==i&&(n.style.display=i)}
r.applyEffect(n,e,{hook:t?"onEnterDone":"onLeaveDone",cb:a})}}}),r.directive("text",{delay:!0,init:function(){var e=this.node
e.isVoidTag&&r.error("自闭合元素不能使用ms-text")
var t={nodeName:"#text",nodeValue:this.getValue()}
e.children.splice(0,e.children.length,t),Rn&&(r.clearHTML(e.dom),e.dom.appendChild(r.vdom(t,"toDOM"))),this.node=t
var n="expr"
this.type=this.name=n
var i=r.directives[n],o=this
this.callback=function(e){i.update.call(o,o.node,e)}}}),r.directive("expr",{update:function(e,t){t=null==t||""===t?"​":t,e.nodeValue=t,e.dom&&(e.dom.data=t)}}),r.directive("attr",{diff:Do,update:function(e,t){var n=e.props
for(var r in t)!!t[r]==!1?delete n[r]:n[r]=t[r]
var i=e.dom
i&&1===i.nodeType&&ie(i,t)}}),r.directive("html",{update:function(e,t){this.beforeDispose(),this.innerRender=r.scan('<div class="ms-html-container">'+t+"</div>",this.vm,function(){var t=this.root
e.children&&(e.children.length=0),e.children=t.children,this.root=e,e.dom&&r.clearHTML(e.dom)})},beforeDispose:function(){this.innerRender&&this.innerRender.dispose()},delay:!0}),r.directive("if",{delay:!0,priority:5,init:function(){this.placeholder=_("if")
var e=this.node.props
delete e["ms-if"],delete e[":if"],this.fragment=r.vdom(this.node,"toHTML")},diff:function(e,t){var n=!!e
return void 0===t||n!==t?(this.value=n,!0):void 0},update:function(e,t){if(void 0===this.isShow&&t)return void Ot(this,e)
this.isShow=t
var n=this.placeholder
if(t){var r=n.parentNode
Ot(this,e),r&&r.replaceChild(e.dom,n)}else{this.beforeDispose(),e.nodeValue="if",e.nodeName="#comment",delete e.children
var i=e.dom,r=i&&i.parentNode
e.dom=n,r&&r.replaceChild(n,i)}},beforeDispose:function(){this.innerRender&&this.innerRender.dispose()}}),r.directive("on",{beforeInit:function(){this.getter=r.noop},init:function(){var e=this.node,t=this.name.replace("ms-on-","e").replace("-","_"),n=t+"_"+this.expr.replace(/\s/g,"").replace(/[^$a-z]/gi,function(e){return e.charCodeAt(0)}),i=r.eventListeners[n]
if(!i){var o=Ze(this.expr),a=o[0],s=o[1]
a=Xe(a),s&&(s=s.replace(/__value__/g,"$event"),s+="\nif($event.$return){\n	return;\n}")
var c=["try{","	var __vmodel__ = this;","	"+s,"	return "+a,'}catch(e){avalon.log(e, "in on dir")}'].filter(function(e){return/\S/.test(e)})
i=Function("$event",c.join("\n")),i.uuid=n,r.eventListeners[n]=i}var u=r.vdom(e,"toDOM")
u._ms_context_=this.vm,this.eventType=this.param.replace(/\-(\d)$/,""),delete this.param,r(u).bind(this.eventType,i)},beforeDispose:function(){r(this.node.dom).unbind(this.eventType)}})
var na=/\s+as\s+([$\w]+)/,ra=/^[$a-zA-Z_][$a-zA-Z0-9_]*$/,ia=/^(null|undefined|NaN|window|this|\$index|\$id)$/,oa=/[$\w_]+/g
r.directive("for",{delay:!0,priority:3,beforeInit:function(){var e,t=this.expr
t=t.replace(na,function(t,n){return!ra.test(n)||ia.test(n)?r.error("alias "+n+" is invalid --- must be a valid JS identifier which is not a reserved name."):e=n,""})
var n=t.split(" in "),i=n[0].match(oa)
1===i.length&&i.unshift("$key"),this.expr=n[1],this.keyName=i[0],this.valName=i[1],this.signature=r.makeHashCode("for"),e&&(this.asName=e),delete this.param},init:function(){var e=this.userCb
if("string"==typeof e&&e){var t=Ze(e,"for"),n=Xe(t[0])
this.userCb=Function("$event","var __vmodel__ = this\nreturn "+n)}this.node.forDir=this,this.fragment="<div>"+this.fragment+"<!--"+this.signature+"--></div>",this.cache={}},diff:function(e,t){if(!this.updating){this.updating=!0
var n=St(this,e)
return void 0===this.oldTrackIds?!0:this.oldTrackIds!==n?(this.oldTrackIds=n,!0):void 0}},update:function(){if(this.preFragments?(Dt(this),Lt(this)):(this.fragments=this.fragments||[],Vt(this)),this.userCb){var e=this
setTimeout(function(){e.userCb.call(e.vm,{type:"rendered",target:e.begin.dom,signature:e.signature})},0)}delete this.updating},beforeDispose:function(){this.fragments.forEach(function(e){e.dispose()})}}),r.directive("class",{diff:function(e,t){var n=this.type,r=this.node,i=r.classEvent||{}
"hover"===n?(i.mouseenter=Bt,i.mouseleave=zt):"active"===n&&(i.tabIndex=r.props.tabindex||-1,i.mousedown=Bt,i.mouseup=zt,i.mouseleave=zt),r.classEvent=i
var o=Rt(e)
return void 0===typeof t||t!==o?(this.value=o,r["change-"+n]=o,!0):void 0},update:function(e,t){var n=e.dom
if(n&&1==n.nodeType){var i=this.type,o="change-"+i,a=e.classEvent
if(a){for(var s in a)"tabIndex"===s?n[s]=a[s]:r.bind(n,s,a[s])
e.classEvent={}}var c=["class","hover","active"]
c.forEach(function(e){if(i===e)if("class"===e)n&&qt(n,t)
else{var a=n.getAttribute(o)
a&&r(n).removeClass(a)
var s="change-"+e
n.setAttribute(s,t)}})}}}),Yn.active=Yn.hover=Yn["class"]
var aa={mouseenter:"change-hover",mouseleave:"change-hover",mousedown:"change-active",mouseup:"change-active"}
g(Bt),g(zt)
var sa={input:function(e){var t=this
e=e||"value"
var n=t.dom,r=n[e],i=t.parseValue(r)
t.value=r,t.setValue(i),Jt(t)
var o=t.pos
n.caret&&t.setCaret(n,o)},radio:function(){var e=this
if(e.isChecked){var t=!e.value
e.setValue(t),Jt(e)}else sa.input.call(e),e.value=NaN},checkbox:function(){var e=this,t=e.value
Array.isArray(t)||(r.warn("ms-duplex应用于checkbox上要对应一个数组"),t=[t])
var n=e.dom.checked?"ensure":"remove"
if(t[n]){var i=e.parseValue(e.dom.value)
t[n](i),Jt(e)}this.__test__=t},select:function(){var e=this,t=r(e.dom).val()
t+""!=this.value+""&&(t=Array.isArray(t)?t.map(function(t){return e.parseValue(t)}):e.parseValue(t),e.setValue(t),Jt(e))},contenteditable:function(){sa.input.call(this,"innerHTML")}},ca=/\|\s*change\b/,ua=/\|\s*debounce(?:\(([^)]+)\))?/,la=!0
try{var da={},fa=HTMLInputElement.prototype,ha=HTMLTextAreaElement.prototype,pa=function(e){da[this.tagName].call(this,e)
var t=this._ms_duplex_
!this.caret&&t&&t.isString&&t.duplexCb.call(this,{type:"setter"})},va=HTMLInputElement.prototype
Object.getOwnPropertyNames(va),da.INPUT=Object.getOwnPropertyDescriptor(fa,"value").set,Object.defineProperty(fa,"value",{set:pa}),da.TEXTAREA=Object.getOwnPropertyDescriptor(ha,"value").set,Object.defineProperty(ha,"value",{set:pa}),la=!1}catch(_r){}var ma={input:function(){var e=this.node,t=this.value+""
e.dom.value=e.props.value=t},updateChecked:function(e,t){e.dom&&(e.dom.defaultChecked=e.dom.checked=t)},radio:function(){var e,t=this.node,n=t.props.value
e=this.isChecked?!!this.value:this.value+""===n,t.props.checked=e,ma.updateChecked(t,e)},checkbox:function(){var e=this.node,t=e.props,n=t.value+"",r=[].concat(this.value),i=r.some(function(e){return e+""===n})
t.defaultChecked=t.checked=i,ma.updateChecked(e,i)},select:function(){var e=Array.isArray(this.value)?this.value.map(String):this.value+""
Gt(this.node,e)},contenteditable:function(){for(var e,t=xe(this.value),n=x(),i=0;e=t[i++];){var o=r.vdom(e,"toDOM")
n.appendChild(o)}r.clearHTML(this.dom).appendChild(n)
var a=this.node.children
a.length=0,Array.prototype.push.apply(a,t),this.duplexCb.call(this.dom)}}
y(an),y(sn),y(cn),y(un),y(Zt),y(rn),y(on),y(ln)
var ga=function(e){setTimeout(e,0)}
if(r.directive("duplex",{priority:9999999,beforeInit:Xt,init:Kt,diff:Qt,update:function(e,t){this.dom||en.call(this,e,nn),hn.call(this,r.msie,la),ma[this.dtype].call(this)}}),r.__pollValue=hn,r.msie<8){var ya=ma.updateChecked
ma.updateChecked=function(e,t){var n=e.dom
n&&setTimeout(function(){ya(e,t),n.firstCheckedIt=1},n.firstCheckedIt?31:16)}}r.directive("rules",{diff:function(e){if(d(e)){var t=this.node
return t.rules=Kn.toJson(e),!0}}})
var ba=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/i,xa=/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/
r.shadowCopy(r.validators,{pattern:{message:"必须匹配{{pattern}}这样的格式",get:function(e,t,n){var r=t.dom,i=t.data
if(!pn(i.pattern)){var o=r.getAttribute("pattern")
i.pattern=RegExp("^(?:"+o+")$")}return n(i.pattern.test(e)),e}},digits:{message:"必须整数",get:function(e,t,n){return n(/^\-?\d+$/.test(e)),e}},number:{message:"必须数字",get:function(e,t,n){return n(!!e&&isFinite(e)),e}},norequired:{message:"",get:function(e,t,n){return n(!0),e}},required:{message:"必须填写",get:function(e,t,n){return n(""!==e),e}},equalto:{message:"密码输入不一致",get:function(e,t,n){var i=t.data.equalto+"",o=r(document.getElementById(i)).val()||""
return n(e===o),e}},date:{message:"日期格式不正确",get:function(e,t,n){var r=t.data
return n(pn(r.date)?r.date.test(e):vn(e)),e}},url:{message:"URL格式不正确",get:function(e,t,n){return n(xa.test(e)),e}},email:{message:"email格式不正确",get:function(e,t,n){return n(ba.test(e)),e}},minlength:{message:"最少输入{{minlength}}个字",get:function(e,t,n){var r=parseInt(t.data.minlength,10)
return n(e.length>=r),e}},maxlength:{message:"最多输入{{maxlength}}个字",get:function(e,t,n){var r=parseInt(t.data.maxlength,10)
return n(e.length<=r),e}},min:{message:"输入值不能小于{{min}}",get:function(e,t,n){var r=parseInt(t.data.min,10)
return n(parseFloat(e)>=r),e}},max:{message:"输入值不能大于{{max}}",get:function(e,t,n){var r=parseInt(t.data.max,10)
return n(parseFloat(e)<=r),e}},chs:{message:"必须是中文字符",get:function(e,t,n){return n(/^[\u4e00-\u9fa5]+$/.test(e)),e}}})
var wa=r.directive("validate",{diff:function(e){var t=this.node
if(!t.validator&&d(e)){t.vmValidator=e,e=Kn.toJson(e),e.vdom=t,t.validator=e
for(var n in wa.defaults)e.hasOwnProperty(n)||(e[n]=wa.defaults[n])
return e.fields=e.fields||[],!0}},update:function(e){function t(){wa.validateAll.call(n,n.onValidateAll)}var n=e.validator,i=n.dom=e.dom
i._ms_validate_=n
var o=n.fields
mn(e.children,o,n),r.bind(document,"focusin",function(e){var t=e.target,i=t._ms_duplex_,a=(i||{}).vdom
i&&a.rules&&!i.validator&&r.Array.ensure(o,i)&&gn(i,n)})
var a=e.vmValidator
try{a.onManual=t}catch(s){}delete e.vmValidator,i.setAttribute("novalidate","novalidate"),n.validateAllInSubmit&&r.bind(i,"submit",function(e){e.preventDefault(),t()})},validateAll:function(e){var t=this,n=this.vdom,r=t.fields=[]
mn(n.children,r,t)
var i="function"==typeof e?e:t.onValidateAll,o=t.fields.filter(function(e){var n=e.dom
return n&&!n.disabled&&t.dom.contains(n)}).map(function(e){return wa.validate(e,!0)}),a={}
return Promise.all(o).then(function(e){var n=e.concat.apply([],e)
t.deduplicateInValidateAll&&(n=n.filter(function(e){var t=e.element,n=t.uniqueID||(t.uniqueID=setTimeout("1"))
return a[n]?!1:a[n]=!0})),i.call(t.dom,n)})},validate:function(e,t,n){var i=[],o=e.value,a=e.dom
if("function"!=typeof Promise&&r.warn("浏览器不支持原生Promise,请下载并<script src=url>引入\nhttps://github.com/RubyLouvre/avalon/blob/master/test/promise.js"),!a.disabled){var s=e.vdom.rules,c=[],u=!0
if(!s.norequired||""!==o)for(var l in s){var d=s[l]
if(d!==!1){var f,h=r.validators[l]
i.push(new Promise(function(e,t){f=e}))
var p=function(t){var n={element:a,data:e.data,message:a.getAttribute("data-"+l+"-message")||a.getAttribute("data-message")||h.message,validateRule:l,getMessage:yn}
t?f(!0):(u=!1,c.push(n),f(!1))}
e.data={},e.data[l]=d,h.get(o,e,p)}}return Promise.all(i).then(function(r){if(!t){var i=e.validator
u?i.onSuccess.call(a,[{data:e.data,element:a}],n):i.onError.call(a,c,n),i.onComplete.call(a,c,n)}return c})}}}),_a=/\\?{{([^{}]+)\}}/gm
wa.defaults={validate:wa.validate,onError:r.noop,onSuccess:r.noop,onComplete:r.noop,onManual:r.noop,onReset:r.noop,onValidateAll:r.noop,validateInBlur:!0,validateInKeyup:!0,validateAllInSubmit:!0,resetInFocus:!0,deduplicateInValidateAll:!1}
var ka=r.oneObject("animationend,blur,change,input,click,dblclick,focus,keydown,keypress,keyup,mousedown,mouseenter,mouseleave,mousemove,mouseout,mouseover,mouseup,scan,scroll,submit","on"),Aa=/[+-\?]/,Ca=/__value__\)$/,Ta={"#text":1,"#comment":1,script:1,style:1,noscript:1}
r.scan=function(e,t,n){return new En(e,t,n||r.noop)},En.prototype={init:function(){var e
if(this.root&&this.root.nodeType>0)e=Oe(this.root),Cn(this.root)
else{if("string"!=typeof this.root)return r.warn("avalon.scan first argument must element or HTML string")
e=xe(this.root)}this.root=e[0],this.vnodes=e,this.scanChildren(e,this.vm,!0)},scanChildren:function(e,t,n){for(var r=0;r<e.length;r++){var i=e[r]
switch(i.nodeName){case"#text":t&&this.scanText(i,t)
break
case"#comment":t&&this.scanComment(i,t,e)
break
case"#document-fragment":this.scanChildren(i.children,t,!1)
break
default:this.scanTag(i,t,e,!1)}}n&&this.complete()},scanText:function(e,t){w.rexpr.test(e.nodeValue)&&this.bindings.push([e,t,{nodeValue:e.nodeValue}])},scanComment:function(e,t,n){$n(e.nodeValue,"ms-for:")&&this.getForBinding(e,t,n)},scanTag:function(e,t,i,o){var a,s,c={},u=e.props
for(var l in u){var d=u[l],f=l
if(":"===l.charAt(0)&&(l="ms-"+l.slice(1)),$n(l,"ms-")){c[l]=d
var h=l.match(/\w+/g)[1]
h=ka[h]||h,Yn[h]||r.warn(l+" has not registered!"),a=!0}"ms-for"===l&&(s=d,delete u[f])}var p=c["ms-important"]||c["ms-controller"]
if(p){var v=r.serverTemplates,m=v&&v[p]
if(m){r.log("前端再次渲染后端传过来的模板")
var g=xe(tmpl)[0]
for(var y in g)e[y]=g[y]
return delete v[p],void this.scanTag(e,t,i,o)}var h=c["ms-important"]===p?"important":"controller",b="ms-"+h in u?"ms-"+h:":"+h
Rn&&delete u[b]
var x=Yn[h]
if(t=x.getScope.call(this,p,t),!t)return
var w=u["class"]
w&&(u["class"]=(" "+w+" ").replace(" ms-controller ","").trim())
var _=this
t.$render=_,this.callbacks.push(function(){x.update.call(_,e,b,p)})}if(s)return e.dom&&e.dom.removeAttribute(f),this.getForBindingByElement(e,t,i,s);/^ms\-/.test(e.nodeName)&&(u.is=e.nodeName),u.is&&(c["ms-widget"]||(c["ms-widget"]="{}"),a=!0),a&&this.bindings.push([e,t,c])
var k=e.children
!yi[e.nodeName]&&k&&k.length&&!n(c)&&this.scanChildren(k,t,!1)},complete:function(){if(this.yieldDirectives(),this.beforeReady(),Rn){var e=this.root
if(Rn){var t=r.vdom(e,"toDOM")
An(t,e.children)}}this.mount=!0
for(var n;n=this.callbacks.pop();)n()
this.optimizeDirectives()},yieldDirectives:function(){for(var e;e=this.bindings.shift();){var t=e[0],n=e[1],r=e[2],i=[]
"nodeValue"in r?i=_n(r):"ms-skip"in r||(i=xn(r,e))
for(var o,a=0;o=i[a++];){var s=Yn[o.type]
if(Rn||!/on|duplex|active|hover/.test(o.type)){s.beforeInit&&s.beforeInit.call(o)
var c=new bn(n,o,t,this)
this.directives.push(c)}}}},optimizeDirectives:function(){for(var e,t=0;e=this.directives[t++];)e.callback=Yn[e.type].update,e.update=Nn,e._isScheduled=!1},update:function(){for(var e,t=0;e=this.directives[t++];)e.update()},dispose:function(){for(var e,t=this.directives||[],n=0;e=t[n++];)e.dispose()
for(var r in this)"dispose"!==r&&delete this[r]},getForBinding:function(e,t,n,i){var o=e.nodeValue.replace("ms-for:","").trim()
e.nodeValue="ms-for:"+o
var a=Tn(n,e),s=a.end,c=r.vdom(a,"toHTML")
n.splice(a.start,a.length),e.props={},this.bindings.push([e,t,{"ms-for":o},{begin:e,end:s,expr:o,userCb:i,fragment:c,parentChildren:n}])},getForBindingByElement:function(e,t,n,r){var i=n.indexOf(e),o=e.props,a={nodeName:"#comment",nodeValue:"ms-for:"+r}
o.slot&&(a.slot=o.slot,delete o.slot)
var s={nodeName:"#comment",nodeValue:"ms-for-end:"}
n.splice(i,1,a,e,s),this.getForBinding(a,t,n,o["data-for-rendered"])}}
var $a,Ea="onInit,onReady,onViewChange,onDispose,onEnter,onLeave",Na=r.oneObject(Ea),Oa=[]
return r.directive("widget",{delay:!0,priority:4,deep:!0,init:function(){var e=this.node
if(this.cacheVm=!!e.props.cached,e.dom&&"#comment"===e.nodeName)var t=e.dom
var n=this.getValue(),i=On(n),o=e.props.is||i.is
this.is=o
var a=r.components[o]
if(!("fragment"in this))if(e.isVoidTag)this.fragment=!1
else{var s=e.children[0]
s&&s.nodeValue?this.fragment=s.nodeValue:this.fragment=r.vdom(e.children,"toHTML")}if(!a)return this.readyState=0,e.nodeName="#comment",e.nodeValue="unresolved component placeholder",delete e.dom,void r.Array.ensure(Oa,this)
var c=i.id||i.$id,u=r.vmodels[c],l=!1
if(u)d=u,this.comVm=d,Mn(this,d.$render),l=!0
else{"function"==typeof a&&(a=new a(i))
var d=Vn(a,i,o)
this.readyState=1,Sn(d,e,"Init"),this.comVm=d
var f=r.scan(a.template,d)
d.$render=f,Mn(this,f)
var h=[],p=[]
if(this.fragment||a.soleSlot){var v=this.fragment?this.vm:d,m=this.fragment||"{{##"+a.soleSlot+"}}",g=r.scan("<div>"+m+"</div>",v,function(){h=this.root.children})
p=g.directives,this.childBoss=g
for(var y in g)delete g[y]}Array.prototype.push.apply(f.directives,p)
var b=[],x={}
a.soleSlot?b=h:h.forEach(function(e,t){if(e.slot){var n=Tn(h,e)
n.push(n.end),n.unshift(e),x[e.slot]=n}else if(e.props){var r=e.props.slot
r&&(delete e.props.slot,Array.isArray(x[r])?x[r].push(e):x[r]=[e])}}),a.soleSlot?Ln(f.vnodes,b):Fn(f.vnodes,x)}if(t){var w=r.vdom(e,"toDOM")
t.parentNode.replaceChild(w,t),d.$element=f.root.dom=w,delete this.reInit}Cn(e.dom),d.$element=e.dom,An(e.dom,e.children),l?Sn(d,e,"Enter"):Sn(d,e,"Ready")},diff:function(e,t){return Do.call(this,e,t)?!0:void 0},update:function(e,t){switch(this.readyState){case 0:this.reInit&&(this.init(),this.readyState++)
break
case 1:this.readyState++
break
default:this.readyState++
var n=this.comVm
r.viewChanging=!0,r.transaction(function(){for(var e in t)n.hasOwnProperty(e)&&(Array.isArray(t[e])?n[e]=t[e].concat():n[e]=t[e])}),Sn(n,e,"ViewChange"),delete r.viewChanging}this.value=r.mix(!0,{},t)},beforeDispose:function(){var e=this.comVm
this.cacheVm?Sn(e,this.node,"Leave"):(Sn(e,this.node,"Dispose"),e.$hashcode=!1,delete r.vmodels[e.$id],this.innerRender&&this.innerRender.dispose())}}),r.components={},r.component=function(e,t){return t.extend=In,Pn(e,t)},r})

// avalon extendComponent 
avalon.extendComponent=function(sComName,sComParentName,sSettings){oDefaults=sSettings.defaults,sTemplate=sSettings.template
var oParent=avalon.components[sComParentName]
if(oParent){sTemplate=sTemplate||null,oDefaults.$parents={},avalon.each(oParent.defaults,function(key,value){oDefaults.$parents[sComParentName+"_"+key]=value}),oDefaults.inherited=function(sPropertyName,sParentName,oParams){return avalon.isString(sPropertyName)&&avalon.isString(sParentName)&&this.$parents[sParentName+"_"+sPropertyName]?this.$parents[sParentName+"_"+sPropertyName]:null}
var oConfig={displayName:sComName,parentName:sComParentName,defaults:oDefaults}
sTemplate&&(oConfig.template=sTemplate),oParent.extend(oConfig)}}

// avalon getOriginObject
avalon.getOriginObject=function(data){var tempObj={}
for(var i in data)data.hasOwnProperty(i)&&(tempObj[i]=data[i])
return tempObj}


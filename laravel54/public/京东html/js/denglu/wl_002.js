var __jrrda= ['122270672.1598165482.1509363203.1509363203.1509363203.1'];
var __jrrdb= ['122270672.10.1598165482|1.1509363203'];
var __jrrdc= ['122270672'];
var __jrrdv= ['122270672|JD|-|referral|-'];
var c_domain='jrclick.jd.com';
(function(){var ag={cdomain:"",getHost:function(l){var s=/.*\:\/\/([^\/|:]*).*/;var g=l.match(s);var p="";if(typeof g!="undefined"&&null!=g){p=g[1]}return p},urlParams:function(g){var l=new RegExp("(^|&)"+g+"=([^&]*)(&|$)");var p=window.location.search.substr(1).match(l);if(p!=null){return unescape(p[2])}return null},setCookie:function(g,l,s){var p=new Date();p.setTime(p.getTime()+s);document.cookie=g+"="+escape(l)+";expires="+p.toGMTString()+";path=/;domain="+this.cdomain},getCookie:function(g){var t="";if(document.cookie&&document.cookie!=""){var s=document.cookie.split(";");for(var p=0;p<s.length;p++){var l=$.trim(s[p]);if(l.substring(0,g.length+1)==(g+"=")){t=decodeURIComponent(l.substring(g.length+1));break}}}return t}};var a1={account:"",visit:function(){var y=ag.getCookie("_jrda");var s=ag.getCookie("_jrdb");var l=new Date().getTime();var g=1;var t=30*60*1000;var p=180*24*60*60*1000;if(!y&&!s){ag.setCookie("_jrda",g,p);ag.setCookie("_jrdb",l,t)}else{if(y&&!s){g=parseInt(y)+1;ag.setCookie("_jrda",g,p);ag.setCookie("_jrdb",l,t)}else{ag.setCookie("_jrdb",l,t)}}},order:function(D){var L=ag.getHost(D),l="",p=null,C=null,t=null,y=null;var K=ag.getHost(document.location.href);if(K=="trade.z.jd.com"||L=="trade.z.jd.com"){y="10002";p=$(".module_item:first dl:first dd").html();t=$("#_projectId").val();var g=$(".f_red28:first").html();if(g!=null){C=g.substr(1,g.length-1)}}else{if(L=="licai.bx.jd.com"){y="102";p=ag.urlParams("orderId");C=ag.urlParams("shouldPay")}else{if(L=="bill.jr.jd.com"){y="10003";p=$("#orderId").val();C=$("#shouldPay").val()}else{if(L==""){L=document.location.href;if(L.match("trade.jr.jd.com")){var s=$("a[href='/centre/jrbpayin.action']").size();if(s==1){y="10000";p=ag.urlParams("order");C=ag.urlParams("amount")}else{$("a[class='loan-pub-btn']").each(function(){var W=this;var O=$(W).attr("href");if(O.indexOf("list.jr.jd.com/detail")){y="101";p=ag.urlParams("order");C=$(".bill-money").html().substr(1);t=$(".loan-pub-btn").last().attr("href").split("/")[4].split(".")[0]}})}}}else{if(L=="jrapp.jd.com"){L=document.location.href;if(L.match("m.z.jd.com")){y="10002";p=ag.urlParams("orderId");C=ag.urlParams("amount")}}}}}}if(p!=null&&C!=null){l=p+"|"+C+"|"+t+"|"+y}return l},req:function(W,t){var K=document.referrer;var D="";for(var a3 in t){D+=((a3+"="+t[a3])+"$")}D=D.substring(0,D.length-1);var y=ag.getCookie("__jdu");if(y==""){var l=ag.getCookie("__jda");if(l!=""){var s=l.split(".");y=s[1]}}var g=ag.getCookie("pin");if(!g){g=ag.getCookie("pt_pin")}if(!g){g=ag.getCookie("pwdt_id")}var p=ag.getCookie("_jrda");var L=ag.getCookie("flow_site_ad");var O=ag.getCookie("flow_outsite_ad");var aa=("https:"==document.location.protocol?"https://":"http://")+"jrclick.jd.com/log.gif?uid="+y+"&p="+g+"&t="+W+"&m="+this.account+"&ref="+encodeURIComponent(K)+"&v="+encodeURIComponent(D)+"&order="+this.order(K)+"&jrda="+p+"&sitead="+L+"&outsitead="+O+"&rm="+(new Date).getTime()+"&__jrrda="+__jrrda+"&__jrrdb="+__jrrdb+"&__jrrdc="+__jrrdc+"&__jrrdv="+__jrrdv;var C=new Image(1,1);C.src=aa;C.onload=function(){C.onload=null;C.onerror=null}}};if("undefined"==typeof _jraq||_jraq.length==0){var ad=document.domain.lastIndexOf(".");var ar=document.domain.substring(0,ad).lastIndexOf(".");if(ar>-1){ag.cdomain=document.domain.substring(ar)}else{ag.cdomain="."+document.domain}a1.account="UA-J2000-1"}else{if(_jraq.length==1){var aj=_jraq.pop();a1.account=aj[1];var ad=document.domain.lastIndexOf(".");var ar=document.domain.substring(0,ad).lastIndexOf(".");if(ar>-1){ag.cdomain=document.domain.substring(ar)}else{ag.cdomain="."+document.domain}}else{var aY=_jraq.pop();ag.cdomain=aY[1];var aj=_jraq.pop();a1.account=aj[1]}}var ak="jr.jd.com,z.jd.com,zbbs.jd.com,baitiao.jd.com,baitiao.ps.jd.com,go.jd.com,loan.jd.com,bao.jd.com,baoxian.jd.com,licai.bx.jd.com,licai.jd.com,8.jd.com,8.jr.jd.com,jinku.pay.jd.com".split(",");var a0=function(W){var y=document.referrer,L=ag.cdomain;var s=y&&y.split("/")[2],O=false;var a3=__jrrdv;var p=/from=jrad_(([0-9]{1,})|JD)/;var g=p.exec(av.location.href);var aa=/&loc=([0-9]{1,})/;var D=aa.exec(av.location.href);if(g!=null&&D!=null&&D[1]==2){W.set(f,"jrad_"+g[1]);W.set(aB,"-");W.set(c,"referral");W.set(ax,"-")}else{if(s&&(s.indexOf(".jd.com")>-1)){for(var a4=ak,C=0;C<a4.length;C++){var K=a4[C].toLowerCase();if(s.indexOf(K)>-1){O=true;break}}if(!O&&(/jrad_(([0-9]{1,})|JD)/.exec(W.get(f))==null)){W.set(f,"JD");W.set(aB,"-");W.set(c,"referral");W.set(ax,"-")}}else{if(!s){if(a3[0]!=null&&"JD"===W.get(f)){W.set(f,"direct");W.set(aB,"-");W.set(c,"none");W.set(ax,"-")}}}}if(window.jrBase&&window.jrBase.navId){W.set(j,window.jrBase.navId)}var l=navigator.userAgent.toLowerCase();if(l&&l.indexOf("deviceid=")!=-1){uas=l.split("&");for(R in uas){if(uas[R].indexOf("deviceid=")!=-1){W.set(v,uas[R].split("=")[1]);break}}}var t=ag.getCookie("qyjr_user");if(t){W.set(m,t)}};var af=window,av=document,aI=encodeURIComponent,ah=decodeURIComponent,U=void 0,R="push",I="join",P="split",T="length",A="indexOf",o="prototype",M="toLowerCase";var w={};w.util={getParameter:function(p,l){var s=new RegExp("(?:^|&|[?]|[/])"+l+"=([^&]*)");var g=s.exec(p);return g?aI(g[1]):""},Wv:function(s,g,p,l){s=s+"="+g+"; path=/; ";l&&(s+="expires="+(new Date(new Date().getTime()+l)).toGMTString()+"; ");p&&(s+="domain="+p+";");av.cookie=s},Vv:function(y){for(var g=[],t=av.cookie[P](";"),l=RegExp("^\\s*"+y+"=\\s*(.*?)\\s*$"),s=0;s<t[T];s++){var p=t[s]["match"](l);p&&g[R](p[1])}return g}};var aO=0;function ao(g){return(g?"_":"")+aO++}var aq=ao(),ai=ao(),an=ao(),N=ao(),d=ao(),aQ=ao(),Z=ao(),aw=ao(),al=ao(),ap=ao(),aF=ao(),aE=ao(),aM=ao(),aV=ao(),ac=ao(),X=ao(),G=ao(),E=ao(),Q=ao(),aH=ao(),q=ao(),F=ao(),i=ao(),a=ao(),aT=ao(),aD=ao(),S=ao(),aR=ao(),f=ao(),aB=ao(),c=ao(),ax=ao(),a2=ao(),b=ao(),j=ao(),v=ao(),m=ao();var aU=function(){var p={};this.set=function(t,s){p[t]=s},this.get=function(s){return p[s]!==U?p[s]:null},this.m=function(t){var s=this.get(t);var C=s==U||s===""?0:1*s;p[t]=C+1};this.set(aq,"UA-J2011-1");this.set(N,ag.cdomain);this.set(an,n());this.set(d,Math.round((new Date).getTime()/1000));this.set(aQ,63072000000);this.set(Z,15768000000);this.set(aw,1800000);this.set(aV,V());var g=ae();this.set(ac,g.name);this.set(X,g.version);this.set(G,J());var l=aP();this.set(E,l.D);this.set(Q,l.C);this.set(aH,l.language);this.set(q,l.javaEnabled);this.set(F,l.characterSet);this.set(aR,au);this.set(a2,new Date().getTime())};var au="baidu:wd,baidu:word,so.com:q,so.360.cn:q,360so.com:q,360sou.com:q,baidu:q1,m.baidu:word,m.baidu:w,wap.soso:key,m.so:q,page.yicha:key,sz.roboo:q,i.easou:q,wap.sogou:keyword,google:q,soso:w,sogou:query,youdao:q,ucweb:keyword,ucweb:word,114so:kw,yahoo:p,yahoo:q,live:q,msn:q,bing:q,aol:query,aol:q,daum:q,eniro:search_word,naver:query,pchome:q,images.google:q,lycos:query,ask:q,netscape:query,cnn:query,about:terms,mamma:q,voila:rdata,virgilio:qs,alice:qs,yandex:text,najdi:q,seznam:q,search:q,wp:szukaj,onet:qt,szukacz:q,yam:k,kvasir:q,ozu:q,terra:query,rambler:query".split(","),aZ=function(){return Math.round((new Date).getTime()/1000)},z=function(){return Math.round(Math.random()*2147483647)},ab=function(){return z()^at()&2147483647},n=function(){return Y(av.domain)},aP=function(){var l={},g=af.navigator,p=af.screen;l.D=p?p.width+"x"+p.height:"-";l.C=p?p.colorDepth+"-bit":"-";l.language=(g&&(g.language||g.browserLanguage)||"-")[M]();l.javaEnabled=g&&g.javaEnabled()?1:0;l.characterSet=av.characterSet||av.charset||"-";return l},V=function(){var D,C,y,t;y="ShockwaveFlash";if((D=(D=window.navigator)?D.plugins:U)&&D[T]>0){for(C=0;C<D[T]&&!t;C++){y=D[C],y.name[A]("Shockwave Flash")>-1&&(t=y.description[P]("Shockwave Flash ")[1])}}else{y=y+"."+y;try{C=new ActiveXObject(y+".7"),t=C.GetVariable("$version")}catch(s){}if(!t){try{C=new ActiveXObject(y+".6"),t="WIN 6,0,21,0",C.AllowScriptAccess="always",t=C.GetVariable("$version")}catch(p){}}if(!t){try{C=new ActiveXObject(y),t=C.GetVariable("$version")}catch(l){}}t&&(t=t[P](" ")[1][P](","),t=t[0]+"."+t[1]+" r"+t[2])}var K=w.util.Vv("_r2");D=t?(t+(K[T]>0?("_"+K[0]):"")):"-";var g=w.util.Vv("limgs");D=D+(g[T]>0?("_"+g[0]):"");return D},ay=function(g){return U==g||"-"==g||""==g},Y=function(l){var g=1,s=0,p;if(!ay(l)){g=0;for(p=l[T]-1;p>=0;p--){s=l.charCodeAt(p),g=(g<<6&268435455)+s+(s<<14),s=g&266338304,g=s!=0?g^s>>21:g}}return g},at=function(){var p=aP();for(var l=p,g=af.navigator,l=g.appName+g.version+l.language+g.platform+g.userAgent+l.javaEnabled+l.D+l.C+(av.cookie?av.cookie:"")+(av.referrer?av.referrer:""),g=l.length,s=af.history.length;s>0;){l+=s--^g++}return Y(l)},ae=function(){var g={name:"other",version:"0"},s=navigator.userAgent.toLowerCase();browserRegExp={jrapp:/jdjr[|\-]([\w.]+)/,jdapp:/jdapp[|\;]([\w.]+)/,weixin:/micromessenger[|\/]([\w.]+)/,walletclient:/[|\/]walletclient/,se360:/360se/,se360_2x:/qihu/,ie:/msie[ ]([\w.]+)/,firefox:/firefox[|\/]([\w.]+)/,chrome:/chrome[|\/]([\w.]+)/,safari:/version[|\/]([\w.]+)(\s\w.+)?\s?safari/,opera:/opera[|\/]([\w.]+)/};for(var p in browserRegExp){var l=browserRegExp[p].exec(s);if(l){g.name=p;g.version=l[1]||"0";break}}return g},J=function(){var g=/(win|android|linux|nokia|ipad|iphone|ipod|mac|sunos|solaris)/.exec(navigator.platform.toLowerCase());if(!g){return"other"}else{if(g[0]=="linux"){var l=/(android)/.exec(navigator.userAgent.toLowerCase());return l==null?g[0]:"android"}else{return g[0]}}},aN=function(){var p="",y=["jwotest_product","jwotest_list","jwotest_cart","jwotest_orderinfo","jwotest_homepage","jwotest_other1","jwotest_other2","jwotest_other3"];for(var t=0,g=y.length;t<g;t++){var s=w.util.Vv(y[t]);if(s[T]==0){continue}var C=ah(s[0]).match(/=(.*?)&/gi),l=[];if(C==null){continue}$.each(C,function(K,D){l.push(K==0?"T"+D.substring(1,D.length-1):D.substring(1,D.length-1))});p+=l[I]("-")+";"}return p},aL=function(l){l.set(al,av.location.hostname);l.set(ap,av.title);l.set(aF,av.location.pathname);l.set(aE,av.referrer);l.set(aM,av.location.href);var C=__jrrda,s=C[T]>0?C[0][P]("."):null;l.set(ai,s?s[1]:ab());l.set(i,s?s[2]:l.get(d));l.set(a,s?s[3]:l.get(d));l.set(aT,s?s[4]:l.get(d));l.set(aD,s?s[5]:1);var t=__jrrdv,g=t[T]>0?t[0][P]("|"):null;l.set(f,g?g[1]:"direct");l.set(aB,g?g[2]:"-");l.set(c,g?g[3]:"none");l.set(ax,g?g[4]:"-");var y=__jrrdb,p=y[T]>0?y[0][P]("."):null;l.set(S,p?p[1]:0);l.set(b,aN()||"-");return !0},aJ=function(){var l=__jrrdb,g=l[T]>0?l[0][P]("."):null;return(g&&g.length==4)?g[1]*1:0},aK=function(bc){var s=av.location.href,D=av.referrer,a9=bc.get(N),C=w.util.getParameter(s,"utm_source"),t=[],aa=bc.get(f),W=bc.get(aB),O=bc.get(c),K=bc.get(ax),g=(__jrrdb.length==0);if(C){var l=w.util.getParameter(s,"utm_campaign"),bb=w.util.getParameter(s,"utm_medium"),a3=w.util.getParameter(s,"utm_term");t[R](C);t[R](l||"-");t[R](bb||"-");t[R](a3||"not set")}else{var p=D&&D[P]("/")[2],ba=false;if(p&&p[A](a9)<0){for(var a4=bc.get(aR),a6=0;a6<a4.length;a6++){var a8=a4[a6][P](":");if(p[A](a8[0][M]())>-1&&D[A]((a8[1]+"=")[M]())>-1){var y=/jrad_([0-9]{1,})/;var a5=y.exec(bc.get(f));if(a5!=null){ba=true;break}var a7=ah(a8[1][M]()),L=w.util.getParameter(D,a7);t[R](a8[0]);t[R]("-");t[R]("organic");t[R](L||"not set");ba=true;break}}if(!ba){if(p[A]("zol.com.cn")>-1){t[R]("zol.com.cn");t[R]("-");t[R]("cpc");t[R]("not set")}else{t[R](p);t[R]("-");t[R]("referral");t[R]("-")}}}}if(t[T]>0&&((t[0]!=aa||t[1]!=W||t[2]!=O)||(g&&t[2]==="referral"))){bc.set(f,t[0]||"direct");bc.set(aB,t[1]||"-");bc.set(c,t[2]||"none");bc.set(ax,t[3]||"-");az(bc)}else{if(g){az(bc)}else{h(bc)}}},k=function(l,g){var p=g.split(".");l.set(i,p[2]);l.set(a,p[4]);l.set(aT,aZ());l.m(aD);l.set(S,1)},H=function(l){var g=l.get(d);l.set(ai,ab());l.set(i,g);l.set(a,g);l.set(aT,g);l.set(aD,1);l.set(S,1)},h=function(g){g.m(S)},x=function(g){return[g.get(an),g.get(ai)||"-",g.get(i)||"-",g.get(a)||"-",g.get(aT)||"-",g.get(aD)||1][I](".")},e=function(g){return[g.get(an),g.get(S)||1,g.get(ai)+"|"+g.get(aD)||1,g.get(aT)||g.get(d)][I](".")},B=function(g){return[g.get(an),g.get(f)||av.domain,g.get(aB)||"(direct)",g.get(c)||"direct",g.get(ax)||"-"][I]("|")},az=function(g){var l=__jrrda;l.length==0?H(g):k(g,l[0])};var u=new aU(),aC=function(){this.a={};this.add=function(g,l){this.a[g]=l};this.get=function(g){return this.a[g]};this.toString=function(){return this.a[I]("&")}},am=function(l,g){function s(y,t){t&&p[R](y+"="+t+";")}var p=[];s("__jrrda",x(l));s("__jrrdv",B(l));g.add("jdcc",p[I]("+"))},r=function(l,g){g.add("jdac",l.get(aq)),g.add("jduid",l.get(ai)),g.add("jdsid",l.get(ai)+"|"+l.get(aD)),g.add("jdje",l.get(q)),g.add("jdsc",l.get(Q)),g.add("jdsr",l.get(E)),g.add("jdul",l.get(aH)),g.add("jdcs",l.get(F)),g.add("jddt",l.get(ap)||"-"),g.add("jdmr",aI(l.get(aE))),g.add("jdhn",l.get(al)||"-"),g.add("jdfl",l.get(aV)),g.add("jdos",l.get(G)),g.add("jdbr",l.get(ac)),g.add("jdbv",l.get(X)),g.add("jdwb",l.get(i)),g.add("jdxb",l.get(a)),g.add("jdyb",l.get(aT)),g.add("jdzb",l.get(aD)),g.add("jdcb",l.get(S)),g.add("jdusc",l.get(f)||"direct"),g.add("jducp",l.get(aB)||"-"),g.add("jdumd",l.get(c)||"-"),g.add("jduct",l.get(ax)||"-"),g.add("jdlt",typeof jdpts!="object"?0:jdpts._st==undefined?0:l.get(a2)-jdpts._st),g.add("jdtad",l.get(b)),g.add("nav",l.get(j)||"-"),g.add("did",l.get(v)||"-"),g.add("qyu",l.get(m)||"-")},aX=function(l,g,p,s){g.add("jdac",l.get(aq)),g.add("jduid",l.get(ai)),g.add("jdsid",l.get(ai)+"|"+l.get(aD)),g.add("jdje","-"),g.add("jdsc","-"),g.add("jdsr","-"),g.add("jdul","-"),g.add("jdcs","-"),g.add("jddt","-"),g.add("jdmr",aI(l.get(aE))),g.add("jdhn","-"),g.add("jdfl","-"),g.add("jdos","-"),g.add("jdbr","-"),g.add("jdbv","-"),g.add("jdwb","-"),g.add("jdxb","-"),g.add("jdyb","-"),g.add("jdzb",l.get(aD)),g.add("jdcb",s?(aJ()+s):l.get(S)),g.add("jdusc","-"),g.add("jducp","-"),g.add("jdumd","-"),g.add("jduct","-"),g.add("jdlt",0),g.add("jdtad",p)},aW=function(){aL(u)&&aK(u);a0(u);var l=new aC(),g=u.get(N);r(u,l);__jrrda=x(u);__jrrdb=e(u);__jrrdc=u.get(an);__jrrdv=B(u);return l.a},aG=function(){var g=new aC();r(u,g);return g.a},aS=function(g,l){var p=new aC();aX(u,p,g,l);return p.a},aA=function(l){if(l instanceof Array){var s="";for(var p=0,g=l.length;p<g;p++){s+=l[p]+((p==g-1)?"":"|||")}return s}return l};w.tracker={bloading:function(p,l,s){var g=aW()}};w.tracker.bloading("J","A",new Date().getTime());$(document).bind("click",function(y){y=y||event;var W=document;var aa=y.srcElement||y.target;var C=$(aa).attr("clstag");var L="";while(!C){aa=aa.parentNode;if(!aa||(aa.nodeName=="BODY")){break}C=$(aa).attr("clstag")}if(C){var l=C.split("|"),g=l[1],K=l[2],O=l[3];if(aa.nodeName=="IMG"){aa=aa.parentNode}var p=$(aa).attr("href");if(p==undefined||p.indexOf("javascript")!=-1){p=""}else{if(p.indexOf("http")==-1){p=window.location.host+p}}switch(g){case"keycount":var D={page:K,location:O,tag:"Q",href:p};a1.req("www.130000",D);L=K+"|"+O;break}}});(function(){var g=function(){var l=aG();var p={je:l.jdje,sc:l.jdsc,sr:l.jdsr,ul:l.jdul,cs:l.jdcs,dt:l.jddt,hn:l.jdhn,fl:l.jdfl,os:l.jdos,br:l.jdbr,bv:l.jdbv,wb:l.jdwb,xb:l.jdxb,yb:l.jdyb,zb:l.jdzb,cb:l.jdcb,usc:l.jdusc,ucp:l.jducp,umd:l.jdumd,uct:l.jduct,lt:l.jdlt,ct:new Date().getTime(),tad:l.jdtad,nav:l.nav,did:l.did,qyu:l.qyu};a1.visit();a1.req("www.110000",p)};g();if(!window.JRTRACKER){window.JRTRACKER={pvlog:g}}})()})();

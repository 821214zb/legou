if(function(){if("undefined"==typeof jsf)var jsf={};if(window.jsf=jsf,jsf.createXMLHttpRequest=function(){if(window.ActiveXObject)for(var a=["MSXML2.XMLHttp.5.0","MSXML2.XMLHttp.4.0","MSXML2.XMLHttp.3.0","MSXML2.XMLHttp","Microsoft.XMLHttp"],b=0;b<a.length;b++)try{return new ActiveXObject(a[b])}catch(a){continue}else if(window.XMLHttpRequest)return new XMLHttpRequest;throw new Error("XMLHttp object could not be created.")},jsf.ajax=function(opts){var _xmlHttp=jsf.createXMLHttpRequest(),query=[],data;for(var key in opts.data)query[query.length]=encodeURI(key)+"="+encodeURIComponent(opts.data[key]);data=query.join("&"),"GET"==opts.method&&""!=data&&(opts.url+="?"+data),_xmlHttp.open(opts.method,opts.url,!0),_xmlHttp.setRequestHeader("cache-control","no-cache"),"POST"==opts.method.toUpperCase()&&_xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),_xmlHttp.onreadystatechange=function(){if(4==_xmlHttp.readyState&&200==_xmlHttp.status){var response=null;switch(opts.dataType.toUpperCase()){case"json":response=eval(_xmlHttp.responseText);break;case"xml":response=_xmlHttp.responseXML;break;case"html":response=_xmlHttp.responseText;break;default:response=_xmlHttp.responseText}"undefined"!=typeof opts.success&&opts.success(_xmlHttp.responseText)}else if(4==_xmlHttp.readyState){var codes=["500","501","502","503","504","505","404"];codes.join(",").indexOf(_xmlHttp.status.toString())>=0&&"undefined"!=typeof opts.error&&opts.error(_xmlHttp.status,_xmlHttp.responseText)}},_xmlHttp.send(data)},jsf.referer=function(){return document.referer?document.referer:""},jsf.insertAfter=function(a,b){var c=b.parentNode;c.lastChild==b?c.appendChild(a):c.insertBefore(a,b.nextSibling)},jsf.ready=function(){function a(a){if(!c&&("onreadystatechange"!==a.type||"complete"===document.readyState)){for(var d=0;d<b.length;d++)b[d].call(document);c=!0,b=null}}var b=[],c=!1;return document.addEventListener?(document.addEventListener("DOMContentLoaded",a,!1),document.addEventListener("readystatechange",a,!1),window.addEventListener("load",a,!1)):document.attachEvent&&(document.attachEvent("onreadystatechange",a),window.attachEvent("onload",a)),function(a){c?a.call(document):b.push(a)}}(),jsf.getPreviousSibling=function(a,b){for(var c=a.previousSibling;1!=c.nodeType;)if(c=c.previousSibling,!c)return null;return c},jsf.getNextSibling=function(a,b){for(var c=a.nextSibling;1!=c.nodeType;)if(c=c.nextSibling,!c)return null;return c},jsf.loadScript=function(a,b){var c=document.getElementsByTagName("head")[0],d=document.createElement("script");d.type="text/javascript",d.src=a,d.onreadystatechange=b,d.onload=b,c.appendChild(d)},jsf.getJsonp=function(){function a(a){var b=document.createElement("script"),d=!1;b.src=a,b.async=!0,b.onload=b.onreadystatechange=function(){!d&&(!this.readyState||"loaded"===this.readyState||"complete"===this.readyState)&&(d=!0,b.onload=b.onreadystatechange=null,b&&b.parentNode&&b.parentNode.removeChild(b))},c||(c=document.getElementsByTagName("head")[0]),c.appendChild(b)}function b(b,c,h,i){d="?",c=c||{};for(e in c)c.hasOwnProperty(e)&&(d+=encodeURIComponent(e)+"="+encodeURIComponent(c[e])+"&");var j="jsf_jsonp_"+ ++f;return g[j]=function(a){h(a);try{delete g[j]}catch(a){}g[j]=null},a(b+d+"callback="+j),j}var c,d,e,f=0,g=this;return b}(),"undefined"==typeof ssp)var ssp={};window.ssp=ssp,ssp.getErrorData=function(a){var b=document.getElementById("sspid"+a),c=b.innerHTML;0==c.length&&(b.innerHTML="")},ssp.getData=function(a,b){var c={};"object"==typeof b&&(b.jd_ad_client&&(b.jd_ad_num?c.ad_ids=b.jd_ad_client+":"+b.jd_ad_num:c.ad_ids=b.jd_ad_client+":1"),b.jd_ad_category&&(c.urlcid3=b.jd_ad_category),b.jd_ad_type?c.ad_type=b.jd_ad_type:c.ad_type=8,b.jd_ad_spread?c.spread_type=b.jd_ad_spread:c.spread_type=1),c.r=a,c.debug=0,c.location_info=0;var d=function(){var b=document.getElementById("sspid"+a);b.innerHTML=""},e=function(a){if(a){if(0==a.errcode){var b=document.getElementById("sspid"+a.id);if(!b)return;var c=/<script\b.*?(?:\bsrc\s?=\s?([^>]*))?>(.*?)<\/script>/gim.exec(a.data);if(a.data.indexOf("<html")>-1)return;if(c){var e=c[1].replace(/"| /g,""),f=a.data;b.innerHTML=f,jsf.loadScript(e)}else b.innerHTML=a.data;a.scriptsrc&&jsf.loadScript(a.scriptsrc)}}else d()},f="//x.jd.com/ShowInterface";setTimeout(function(){jsf.getJsonp(f,c,function(a){e(a)})},0)},ssp.init=function(){for(var a=document.getElementsByTagName("script"),b=0;b<a.length;b++)if(a[b].src&&/ssp.js/.test(a[b].src)){for(var c=jsf.getPreviousSibling(a[b]),d=c.innerHTML.replace(/\s/gim,""),e=d.split(";"),f={},g=0,h=e.length;g<h;g++){var i=e[g],j=i.split("=");""!=j[0]&&!/\/\//.test(j[0])&&(f[j[0]]=j[1])}var j=document.createElement("div"),k=Math.floor(1e8*Math.random());j.id="sspid"+k,f.jd_ad_width&&(j.style.width=f.jd_ad_width+"px"),j.style.overflow="hidden",j.style.margin="0 auto",jsf.insertAfter(j,a[b]),j=null,ssp.getData(k,f),setTimeout(function(){ssp.getErrorData(k)},500)}}}(),"undefined"==typeof sspTag){var sspTag=1;jsf.ready(function(){ssp.init()})}
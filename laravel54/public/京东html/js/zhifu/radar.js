(function () {
    function getQueryString(name){
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if(r!=null)return  unescape(r[2]); return null;
    }
   var pageParamsUtil = {
        toQueryPair: function (key, value) {
            if (typeof value == 'undefined'){
                return key;
            }
            return key + '=' + encodeURIComponent(value === null ? '' : String(value));
        },
        toQueryString:function (obj) {
            var ret = [];
            for(var key in obj){
                key = encodeURIComponent(key);
                var values = obj[key];
                if(values && values.constructor == Array){//数组
                    var queryValues = [];
                    for (var i = 0, len = values.length, value; i < len; i++) {
                        value = values[i];
                        queryValues.push(toQueryPair(key, value));
                    }
                    ret = ret.concat(queryValues);
                }else{ //字符串
                    ret.push(pageParamsUtil.toQueryPair(key, values));
                }
            }
            return ret.join('&');
        }
    };
    function dataPush(eventPsa) {
        try{
            var currentDate=new Date();
            var currentMonth=currentDate.getMonth()+1;
            var currentTime=currentDate.getFullYear()+"-"+currentMonth+"-"+currentDate.getDate()+" "+currentDate.getHours()+":"+currentDate.getMinutes()+":"+currentDate.getSeconds()+"."+currentDate.getMilliseconds();
            var reportParams={
                orderId:getQueryString("orderId"),
                pageId:globalVar.pageId,
                pageSubmitTime:currentTime,
                appSource:globalVar.appSource,
                pageName:globalVar.pageName,
                eventPsa:eventPsa
            }
            var parmas=pageParamsUtil.toQueryString(reportParams);
            var img = new Image();//
            img.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'radar.jd.com/collect/report?'+parmas;
        }catch(e){

        }
    }

    var cnf=null;
    var _UA_BIZ = '';
    var _UA_PAGE ='' ;
    var _Page_Begin=0;

    (function () {
        dataPush("page_init");
    })();

    $(document).bind("click", function (e) {
        try{
            e = e || event;
            var tag = e.srcElement || e.target;
            var d = $(tag).attr('psa');
            while (!d) {
                tag = tag.parentNode;
                if (!tag || (tag.nodeName == 'BODY')) {
                    break;
                }
                d = $(tag).attr('psa');
            }
            if (d) {
                dataPush(d);
            }
        }catch(e){

        }
    });
    window.onunload=function(){
        dataPush('page_quit');
    }

})()
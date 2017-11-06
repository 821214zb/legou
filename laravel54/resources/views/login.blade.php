<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=GBK">
    <meta charset="GBK">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>爱尚乐购-欢迎登录</title>
    <link rel="icon" href="https://www.jd.com/favicon.ico">
    <link type="text/css" rel="stylesheet" href="css/denglu/a.css" source="widget">
    <link type="text/css" rel="stylesheet" href="css/denglu/tinyscrollbar-170524.css">
    <script type="text/javascript" async="" src="js/denglu/wl_002.js"></script><script type="text/javascript" async="" src="js/denglu/wl.js"></script><script type="text/javascript" src="js/denglu/jquery-1.js"></script>
    <script type="text/javascript" src="js/denglu/a"></script>

    <script type="text/javascript">
        $(function(){
            window.SysConfig = {
                encryptInfo:  true ,
                rememberMeShowEnable:  false                 };
        });
    </script>
</head>
<body>
<!-- SDK 登录 -->
<div class="w">
    <div id="logo">
        <a href="https://www.aslegou.com/" clstag="pageclick|keycount|20150112ABD|45">
            <img src="images/denglu/logo2.jpg" alt="爱尚" width="80" height="70">
        </a>
        <b></b>
    </div>
    <a href="https://surveys.jd.com/index.php?r=survey/index/sid/568245/lang/zh-Hans" target="_blank" class="q-link"><b></b>登录页面，调查问卷</a>
</div>
<div id="content">
    <div class="tips-wrapper"><div class="tips-inner"><div class="cont-wrapper"><i class="icon-tips"></i><p>依据《网络安全法》，为保障您的账户安全和正常使用，请尽快完成手机号验证！ 新版<a href="https://about.jd.com/privacy/" target="_blank">《京东隐私政策》</a>已上线，将更有利于保护您的个人隐私。</p></div></div></div><div class="login-wrap">
        <div class="w">
            <div class="login-form">
                <div class="login-tab login-tab-l">
                    <a href="javascript:void(0)" clstag="pageclick|keycount|201607144|1" class=""> 扫码登录</a>
                </div>
                <div class="login-tab login-tab-r">
                    <a href="javascript:void(0)" clstag="pageclick|keycount|201607144|2" style="outline: 0px none rgb(109, 109, 109);" class="checked">账户登录</a>
                </div>
                <div class="login-box" style="display: block; visibility: visible;">
                    <div class="mt tab-h">
                    </div>
                    <div class="msg-wrap">
                        <div class="msg-error hide"><b></b></div>
                    </div>
                    <div class="mc">
                        <div class="form">
                            <form id="formlogin" method="post"  action="login">
                                <input name="_token" id="token" value="{{csrf_token()}}" class="hide" type="hidden">
                                <div class="item item-fore1">
                                    <label for="loginname" class="login-label name-label"></label>
                                    <input id="loginname" class="itxt" name="name" tabindex="1" autocomplete="off" placeholder="邮箱/用户名/已验证手机" type="text">
                                    <span class="clear-btn" style="display: none;"></span>
                                </div>

                                <div id="entry" class="item item-fore2" style="visibility: visible;">
                                    <label class="login-label pwd-label" for="nloginpwd"></label>
                                    <input id="nloginpwd" name="password" class="itxt itxt-error" tabindex="2" autocomplete="off" placeholder="密码" type="password">
                                    <span class="clear-btn"></span>
                                    <span class="capslock" style="display: none;"><b></b>大小写锁定已打开</span>
                                </div>



                                <div id="o-authcode" class="item item-vcode item-fore3  hide " style="display: none;">
                                    <input id="authcode" class="itxt itxt02" name="authcode" tabindex="3" style="ime-mode: disabled;" type="text">
                                    <img id="JD_Verification1" class="verify-code" src2="//authcode.jd.com/verify/image?a=1&amp;acid=27f559af-cbbb-485b-99f8-8e7404b36191&amp;uid=27f559af-cbbb-485b-99f8-8e7404b36191" onclick="this.src= document.location.protocol +'//authcode.jd.com/verify/image?a=1&amp;acid=27f559af-cbbb-485b-99f8-8e7404b36191&amp;uid=27f559af-cbbb-485b-99f8-8e7404b36191&amp;yys='+new Date().getTime();$('#authcode').val('');">
                                    <a href="javascript:void(0)" onclick="$('#JD_Verification1').click();">看不清换一张</a>
                                </div>

                                <div class="item item-fore4">
                                    <div class="safe">
										<span>
                                                                             	</span>
										<span class="forget-pw-safe">
											<a href="https://passport.jd.com/uc/links?tag=safe" class="" target="_blank" clstag="pageclick|keycount|201607144|3">忘记密码</a>
										</span>
                                    </div>
                                </div>

                                <div class="item item-fore5">
                                    <div class="login-btn">
                                        <input type="submit" class="btn-img btn-entry" value="登&nbsp;&nbsp;&nbsp;&nbsp;录">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="qrcode-login" style="display: none; visibility: visible;">
                    <div class="mc">
                        <div class="qrcode-error-2016" style="left: 0px; display: none;">
                            <div class="qrcode-error-mask">
                            </div>
                            <p class="err-cont">服务器出错</p>
                            <a href="javascript:void(0)" class="refresh-btn">刷新</a>
                        </div>
                        <div class="qrcode-main">
                            <div class="qrcode-img" style="left: 64px;">
                                <img src="images/denglu/show.png" alt=""><div class="qrcode-error02 hide" id="J-qrcoderror">							<a href="#none">								<span class="error-icon"></span>								<div class="txt">网络开小差咯<span class="ml10">刷新二维码</span></div>							</a>						</div>
                            </div>
                            <div class="qrcode-help" style="display: none;"></div>
                        </div>
                        <div class="qrcode-panel">
                            <ul>
                                <li class="fore1">
                                    <span>打开</span>
                                    <a href="https://passport.jd.com/uc/links?tag=apps" target="_blank" clstag="pageclick|keycount|201607144|9">
                                        <span class="red">手机京东</span></a>
                                </li>
                                <li>扫描二维码</li>
                            </ul>
                        </div>
                        <div class="coagent qr-coagent" id="qrCoagent">
                            <ul>
                                <li><b></b><em>免输入</em></li>
                                <li><b class="faster"></b><em>更快&nbsp;</em></li>
                                <li><b class="more-safe"></b><em>更安全</em></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="coagent" id="kbCoagent">
                    <ul>
                        <li>
                            <b></b>
                            <a href="javascript:void(0)" onclick="window.location='//qq.jd.com/new/qq/login.aspx'+window.location.search;return false;" clstag="pageclick|keycount|201607144|6" class="pdl"><b class="QQ-icon"></b><span>QQ</span></a>
                            <span class="line">|</span>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="window.location='//qq.jd.com/new/wx/login.action'+window.location.search;return false;" clstag="pageclick|keycount|201607144|7" class="pdl"><b class="weixin-icon"></b><span>微信</span></a>
                        </li>
                        <li class="extra-r">
                            <div>
                                <div class="regist-link"><a href="/zhuce" clstag="pageclick|keycount|201607144|8"><b></b>立即注册</a></div>
                            </div>
                        </li>
                    </ul>
                </div>            </div>
        </div>
        <div class="login-banner" style="background-color: #e93854">		              <div class="w">			         <div id="banner-bg" clstag="pageclick|keycount|20150112ABD|46" class="i-inner" style="background: url(//img13.360buyimg.com/da/jfs/t2749/276/1020747574/33213/870500f1/5731485aN1134b4f0.png) 0px 0px no-repeat;background-color: #e93854"></div>		              </div>		           </div>
    </div>
</div>
<div class="w">
    <div id="footer-2013">
        <div class="links">
            <a rel="nofollow" target="_blank" href="https://www.jd.com/intro/about.aspx">
                关于我们
            </a>
            |
            <a rel="nofollow" target="_blank" href="https://www.jd.com/contact/">
                联系我们
            </a>
            |
            <a rel="nofollow" target="_blank" href="https://zhaopin.jd.com/">
                人才招聘
            </a>
            |
            <a rel="nofollow" target="_blank" href="https://www.jd.com/contact/joinin.aspx">
                商家入驻
            </a>
            |
            <a rel="nofollow" target="_blank" href="https://www.jd.com/intro/service.aspx">
                广告服务
            </a>
            |
            <a rel="nofollow" target="_blank" href="https://app.jd.com/">
                手机京东
            </a>
            |
            <a target="_blank" href="https://club.jd.com/links.aspx">
                友情链接
            </a>
            |
            <a target="_blank" href="https://media.jd.com/">
                销售联盟
            </a>
            |
            <a href="https://club.jd.com/" target="_blank">
                京东社区
            </a>
            |
            <a href="https://gongyi.jd.com/" target="_blank">
                京东公益
            </a>
            |
            <a target="_blank" href="https://en.jd.com/" clstag="pageclick|keycount|20150112ABD|9">English Site</a>
        </div>
        <div class="copyright">
            Copyright&nbsp;&#169;&nbsp;2004-2017&nbsp;&nbsp;京东JD.com&nbsp;版权所有
        </div>
    </div>
</div><script type="text/javascript" src="%E4%BA%AC%E4%B8%9C-%E6%AC%A2%E8%BF%8E%E7%99%BB%E5%BD%95_files/base.js"></script>
<script type="text/javascript" src="%E4%BA%AC%E4%B8%9C-%E6%AC%A2%E8%BF%8E%E7%99%BB%E5%BD%95_files/jdJsencrypt.js"></script>
<script type="text/javascript" src="%E4%BA%AC%E4%B8%9C-%E6%AC%A2%E8%BF%8E%E7%99%BB%E5%BD%95_files/login2016.js"></script>
<script type="text/javascript" src="%E4%BA%AC%E4%B8%9C-%E6%AC%A2%E8%BF%8E%E7%99%BB%E5%BD%95_files/login.js" source="widget"></script>
<script type="text/javascript">	~function () {		var data = [						{			  src:"//img30.360buyimg.com/da/jfs/t10969/52/2160394568/48304/3cdd7a33/59f0432eN307cf4e5.jpg",			  bgColor:"#EB5000",                          weight: ""			}						,			{			  src:"//img12.360buyimg.com/da/jfs/t11953/334/329484404/69356/415f9807/59ed7c49Ne2658647.jpg",			  bgColor:"#ffbf44",                          weight: ""			}						,			{			  src:"//img13.360buyimg.com/da/jfs/t2749/276/1020747574/33213/870500f1/5731485aN1134b4f0.png",			  bgColor:"#e93854",                          weight: "4"			}						,			{			  src:"//img20.360buyimg.com/da/jfs/t9727/102/1867195258/135575/8625dffc/59e801c7Nee46f693.jpg",			  bgColor:"#e99954",                          weight: "4"			}			];						         var getRandom = function (arr) {			var _temp = 0, _random = 0, _weight, _newArr = [];						for (var i = 0; i < arr.length; i++) {				_weight = parseInt(arr[i].weight) ? parseInt(arr[i].weight) : 1;				_newArr[i] = [];				_newArr[i].push(_temp);				_temp += _weight;				_newArr[i].push(_temp);			}						_random = Math.ceil(_temp * Math.random());						for (var i = 0; i< _newArr.length; i++){				if(_random > _newArr[i][0] && _random <= _newArr[i][1]){					return arr[i];				}			}			};				var tpl = '<div class="login-banner" style="background-color: {bgColor}">\		              <div class="w">\			         <div id="banner-bg"  clstag="pageclick|keycount|20150112ABD|46" class="i-inner" style="background: url({imgURI}) 0px 0px no-repeat;background-color: {bgColor}"></div>\		              </div>\		           </div>';							var bgData = getRandom(data);		var bannerHtml = tpl.replace(/{bgColor}/g, bgData.bgColor).replace(/{imgURI}/g, bgData.src);				$('.login-banner').replaceWith(bannerHtml);	}();</script>
<script type="text/javascript">
    (function () {
        var ja = document.createElement('script');
        ja.type = 'text/javascript';
        ja.async = true;
        ja.src = ('https:' == document.location.protocol ? 'https://cscssl' : '//csc') + '.jd.com/wl.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ja, s);
    })();
</script>


<script src="%E4%BA%AC%E4%B8%9C-%E6%AC%A2%E8%BF%8E%E7%99%BB%E5%BD%95_files/td.js"></script><script src="%E4%BA%AC%E4%B8%9C-%E6%AC%A2%E8%BF%8E%E7%99%BB%E5%BD%95_files/y.htm"></script>
<script>
    $(function () {
        getJdEid(function (eid, fpid) {
            var eValue = eid;
            var fpValue = fpid;
            var ee = $("#eid").prop("value", eValue);
            var fp = $("#sessionId").prop("value", fpValue);
        });
    });
</script>

<script type="text/javascript">
    var _jraq = _jraq || [];
    _jraq.push(['account', 'UA-J2011-12']);
    (function () {
        var ja = document.createElement('script');
        ja.type = 'text/javascript';
        ja.async = true;
        ja.src = ('https:' == document.location.protocol ? 'https://jrclick' : '//jrclick') + '.jd.com/wl.dev.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ja, s);
    })();
</script>



<!-- SDK 登录 -->


</body></html>
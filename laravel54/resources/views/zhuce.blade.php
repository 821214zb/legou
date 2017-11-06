<!DOCTYPE html>
<html class="root61"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache,must-revalidate">
    <title>个人注册</title>
    <script type="text/javascript" async="" src="js/s.js"></script><script type="text/javascript" async="" src="js/sdk.js"></script><script type="text/javascript">window.pageConfig = {compatible: true} </script>
    <link rel="stylesheet" type="text/css" href="css/base.css" media="all">
    <link type="text/css" rel="stylesheet" href="css/a.css">
    <link type="text/css" rel="stylesheet" href="css/a_002.css" source="widget">
    <link type="text/css" rel="stylesheet" href="css/foreign-number-layer-170524.css">
    <link type="text/css" rel="stylesheet" href="css/tinyscrollbar-170524.css">
    <script type="text/javascript" src="%E4%B8%AA%E4%BA%BA%E6%B3%A8%E5%86%8C_files/a_002"></script>
    <script type="text/javascript" src="%E4%B8%AA%E4%BA%BA%E6%B3%A8%E5%86%8C_files/a"></script>
    <script type="text/javascript" src="http://www.aslegou.com/js/underscore-min.js"></script>
    <!--<script type="text/javascript" src="//misc.360buyimg.com/user/reg/1.0.0/js/jquery.tinyscrollbar.js"></script>-->
    <script>
        seajs.off('load')
        seajs.off('fetch')
        seajs.data.charset = 'gb2312'
    </script>
    <script>
        (function uncl (t, e) {
            t[e] = t[e] || function () {(t[e].q = t[e].q || []).push(arguments)}, t[e].t = 1 * new Date
            var n = document.createElement('script')
            n.type = 'text/javascript', n.async = !0, n.src = '//static.queit.in/sdk.js'
            var a = document.getElementsByTagName('script')[0]
            a.parentNode.insertBefore(n, a)
        })(window, 'uncl')
        uncl('create', 'jd')
    </script>
    <link charset="gb2312" rel="stylesheet" href="css/dialog.css"></head>
<body>
<div id="form-header" class="header">
    <div class="logo-con w clearfix">
        <div class="logo-title">欢迎注册</div>
        <div class="have-account">已有账号？ <a href="login">请登录</a></div>
    </div>

</div>
<div class="container w">

    <div class="main clearfix" id="form-main">
        <div class="reg-form fl">
            <form action="zhuce" id="register-form" method="post" novalidate="novalidate">
                    {{ csrf_field() }}
                <div class="form-item form-item-account" id="form-item-account">
                    <label>用　户　名</label>
                    <input id="form-account" name="name" class="field" autocomplete="off" maxlength="20" type="text"  value="{{old('name')}}">
                </div>
                <div class="input-tip">
                    <span style="color:red;">
                        @if($errors->has('name'))
                            {{$errors->first('name')}}
                        @endif
                    </span>
                </div>
                <div class="form-item">
                    <label>设 置 密 码</label>
                    <input name="password" id="form-pwd" class="field" maxlength="20" type="password"
                           value="{{old('password')}}"
                    >
                    <div class="capslock-tip tips">大写已开启<b class="arrow"></b><b class="arrow-inner"></b></div><div class="capslock-tip tips">大写已开启<b class="arrow"></b><b class="arrow-inner"></b></div></div>
                <div class="input-tip">
                    <span style="color:red;">
                        @if($errors->has('password'))
                            {{$errors->first('password')}}
                        @endif
                    </span>
                </div>
                <div class="form-item">
                    <label>确 认 密 码</label>

                    <input name="password_confirmation" id="form-equalTopwd" class="field" placeholder=" " maxlength="20"  type="password">
                    <div class="capslock-tip tips">大写已开启<b class="arrow"></b><b class="arrow-inner"></b></div><div class="capslock-tip tips">大写已开启<b class="arrow"></b><b class="arrow-inner"></b></div></div>
                <div class="input-tip">
                     <span style="color:red;">
                        @if($errors->has('password'))
                             {{$errors->first('password')}}
                         @endif
                    </span>
                </div>
                <div class="form-item form-item-account" id="form-item-account">
                    <label>邮　　　箱</label>
                    <input id="form-account" name="email" class="field" autocomplete="off" maxlength="20" type="text" value="{{old('email')}}">
                </div>
                <div class="input-tip">
                    <span style="color:red;">
                        @if($errors->has('email'))
                            {{$errors->first('email')}}
                        @endif
                    </span>
                </div>
                <div class="item-phone-wrap">
                    <div class="form-item form-item-phone">
                        <label class="select-country" id="select-country" country_id="0086">中国 0086<a href="javascript:void(0)" tabindex="-1" class="arrow"></a></label>
                        <input id="form-phone" name="mobile" class="field" placeholder=" " autocomplete="off" maxlength="11" type="text">
                    </div>
                    <div class="input-tip">
                    <span style="color:red;">
                        @if($errors->has('mobile'))
                                 {{$errors->first('mobile')}}
                        @endif
                    </span>
                    </div>
                    <div class="orEmail"><a href="javascript:;" tabindex="-1">邮箱验证</a></div>
                </div>
                <div class="form-item form-item-authcode">
                    <label>验　证　码</label>
                    <input autocomplete="off" name="code" id="code" maxlength="6" class="field form-authcode" placeholder=" "  type="text">
                    <a onclick="javascript:re_captcha();" ><img src="{{ URL('/zhuce/1') }}"  title="刷新图片" width="80" height="30" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>
                </div>
                <div class="input-tip">
                    <span></span>
                </div>
                <div class="form-item form-item-phonecode">
                    <label>手机验证码</label>
                    <txt style="position: absolute; z-index: 2; line-height: 46px; margin-left: 20px; margin-top: 1px; font-size: 14px; font-family: &quot;Microsoft YaHei&quot;,&quot;Hiragino Sans GB&quot;; color: rgb(204, 204, 204); display: inline;">请输入手机验证码</txt><input name="phone" maxlength="6" id="phoneCode" class="field phonecode" placeholder=" " autocomplete="off" type="text" value="{{old('user_name')}}">
                    <button id="getPhoneCode" class="btn-phonecode" type="button">获取验证码</button>
                    <i class="i-status"></i>
                </div>
                <div class="input-tip">

                </div>


                <div>
                    <button type="submit" class="btn-register">立即注册</button>
                </div>

            </form><div id="country_code_layer" style="display: none;"><iframe scrolling="no" style="background-color:transparent; position: absolute; z-index: -1; width: 100%; height: 100%; top: 0; left:0;" frameborder="0"></iframe><div><a class="arrow"></a><div class="search-bar"><b class="search-icon"></b><input placeholder="搜索您的国家和地区" id="inputSearch" type="text"></div><div id="result"><div class="capital-list"><ul></ul></div><div class="current-capital"><span id="currentCapital">A</span><span class="line"></span></div><div class="country-list"><div id="scrollbar2" class="scrollbar_all"><div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div><div class="viewport"><div class="overview"><ul></ul></div></div></div></div></div><div id="no-result">未找到国家或地区</div></div></div>
        </div>
        <div id="form-company" class="reg-other">
            <div class="company-reg">
                <a href="https://reg.jd.com/reg/company" target="_blank" clstag="pageclick|keycount|201612011|3">
                    <i class="i-company"></i>
                    <span>企业用户注册</span>
                </a>
            </div>
            <div class="inter-cust">
                <a href="https://reg.joybuy.com/reg/person.html" target="_blank" clstag="pageclick|keycount|201612011|4">
                    <i class="i-global"></i>
                    <span>INTERNATIONAL<br>CUSTOMERS</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="form-footer" class="footer w">
    <div class="links">
        <a rel="nofollow" target="_blank" href="https://www.jd.com/intro/about.aspx"> 关于我们</a>|
        <a rel="nofollow" target="_blank" href="https://www.jd.com/contact/">联系我们</a>|
        <a rel="nofollow" target="_blank" href="https://zhaopin.jd.com/">人才招聘</a>|
        <a rel="nofollow" target="_blank" href="https://www.jd.com/contact/joinin.aspx">商家入驻</a>|
        <a rel="no  follow" target="_blank" href="https://www.jd.com/intro/service.aspx">广告服务</a>|
        <a rel="nofollow" target="_blank" href="https://app.jd.com/">手机京东</a>|
        <a target="_blank" href="https://club.jd.com/links.aspx">友情链接</a>|
        <a target="_blank" href="https://media.jd.com/">销售联盟</a>|
        <a href="https://club.jd.com/" target="_blank">京东社区</a>|
        <a href="https://gongyi.jd.com/" target="_blank">京东公益</a>|
        <a target="_blank" href="https://en.jd.com/" clstag="pageclick|keycount|20150112ABD|9">English Site</a>
    </div>
    <div class="copyright">
        Copyright&#169;2004-2016&nbsp;&nbsp;京东JD.com&nbsp;版权所有
    </div>
</div>

<script type="text/javascript">
    var localmisc = $('#localmisc')
    if (1 == localmisc.val()) {
        seajs.use('/misc2016/js/localRegister', function (reg) {
            reg.init()
        })
    } else {
        seajs.use('//misc.360buyimg.com/user/reg/1.0.0/js/register-170820', function (reg) {
            reg.init()
        })
    }

    function re_captcha() {
        $url = "{{ URL('/zhuce') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
    }

</script>
<script type="text/javascript" src="%E4%B8%AA%E4%BA%BA%E6%B3%A8%E5%86%8C_files/jseqf.htm"></script>
<script src="%E4%B8%AA%E4%BA%BA%E6%B3%A8%E5%86%8C_files/td.js"></script><script src="%E4%B8%AA%E4%BA%BA%E6%B3%A8%E5%86%8C_files/y.htm"></script>
<script type="text/javascript">
    $(function () {
        getJdEid(function (eid, fpid) {
            $('#eid').val(eid)
            $('#sessionId').val(fpid)
            uncl('set', 'session-id', $('#uuid').val())
        })
    })


</script>
<a target="_blank" href="https://surveys.jd.com/index.php?r=survey/index/sid/447941/lang/zh-Hans" class="feedback" style="margin-top: -85px; position: fixed; right: 0px; bottom: 50%;"></a>


</body>
</html>
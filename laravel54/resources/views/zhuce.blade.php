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
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link type="text/css" rel="stylesheet" href="css/foreign-number-layer-170524.css">
    <link type="text/css" rel="stylesheet" href="css/tinyscrollbar-170524.css">
    {{--<script type="text/javascript" src="%E4%B8%AA%E4%BA%BA%E6%B3%A8%E5%86%8C_files/a_002"></script>--}}
    {{--<script type="text/javascript" src="%E4%B8%AA%E4%BA%BA%E6%B3%A8%E5%86%8C_files/a"></script>--}}
    <script type="text/javascript" src="http://www.aslegou.com/js/underscore-min.js"></script>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function(){
        $('#form-account').blur(function(){
            if ((/^[^x00-xff]|\D{6,8}$/).test($("#form-account").val())){
                $('.user_hint').html("✔").css({"color":"green","font-size":"200%"});
                user_Boolean = true;
            }else {
                $('.user_hint').html("×").css({"color":"red","font-size":"200%"});
                user_Boolean = false;
            }
        });
        // password
        $('#form-pwd').blur(function(){
            if ((/^[0-9a-zA-Z]{4,15}$/).test($("#form-pwd").val())){
                $('.password_hint').html("✔").css({"color":"green","font-size":"200%"});
                password_Boolean = true;
            }else {
                $('.password_hint').html("×").css({"color":"red","font-size":"200%"});
                password_Boolean = false;
            }
        });
        // password_confirm
        $('#form-equalTopwd').blur(function(){
            if (($("#form-pwd").val())==($("#form-equalTopwd").val()) && ($("#form-equalTopwd").val()) != "" ){
                $('.confirm_hint').html("✔").css({"color":"green","font-size":"200%"});
                varconfirm_Boolean = true;
            }else {
                $('.confirm_hint').html("×").css({"color":"red","font-size":"200%"});
                varconfirm_Boolean = false;
            }
        });
        // Email
        $('#form-email').blur(function(){
            if ((/^[a-z\d]+(\.[a-z\d]+)*@([\da-z](-[\da-z])?)+(\.{1,2}[a-z]+)+$/).test($("#form-email").val())){
                $('.email_hint').html("✔").css({"color":"green","font-size":"200%"});
                emaile_Boolean = true;
            }else {
                $('.email_hint').html("×").css({"color":"red","font-size":"200%"});
                emaile_Boolean = false;
            }
        });
        // Mobile
        $('#form-phone').blur(function(){
            if ((/^1[34578]\d{9}$/).test($("#form-phone").val())){
                $('.mobile_hint').html("✔").css({"color":"green","font-size":"200%"});
                Mobile_Boolean = true;
            }else {
                $('.mobile_hint').html("×").css({"color":"red","font-size":"200%"});
                Mobile_Boolean = false;
            }
        });

        });
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
            <form action="/zhuce" id="register-form" method="post" novalidate="novalidate">
                    {{ csrf_field() }}
                <div class="form-item form-item-account" id="form-item-account">
                    <label>用　户　名</label>
                    <input id="form-account" name="name" class="field" autocomplete="off" maxlength="20" type="text"  value="{{old('name')}}" placeholder="5-16位的中文、字母、数字" >
                    <span class="user_hint" style="margin-left: 45px;"></span>
                </div>
                <div class="input-tip">
                    <span style="color:red;">
                        @if($errors->has('name'))
                            {{$errors->first('name')}}
                        @endif
                    </span>
                </div>
                <div class="form-item form-item-account" id="form-item-account">
                    <label>设 置 密 码</label>
                    <input name="password" id="form-pwd" class="field" maxlength="20" type="password" placeholder="5-16位的数字字母" value="{{old('password')}}">
                    <span class="password_hint" style="margin-left: 25px;"></span>
                </div>
                <div class="input-tip">
                    <span style="color:red;">
                        @if($errors->has('password'))
                            {{$errors->first('password')}}
                        @endif
                    </span>
                </div>
                <div class="form-item form-item-account" id="form-item-account">
                    <label>确 认 密 码</label>

                    <input name="password_confirmation" id="form-equalTopwd" class="field" placeholder=" 确认密码" maxlength="20"  type="password">
                    <span class="confirm_hint" style="margin-left: 25px;"></span>
                </div>
                <div class="input-tip">
                     <span style="color:red;">
                        @if($errors->has('password'))
                             {{$errors->first('password')}}
                         @endif
                    </span>
                </div>
                <div class="form-item form-item-account" id="form-item-account">
                    <label>邮　　　箱</label>
                    <input id="form-email" name="email" class="field" autocomplete="off" maxlength="20" type="text" value="{{old('email')}}" placeholder="**@**.(com|cn|edn|gov)"> <span class="email_hint" style="margin-left: 45px;"></span>
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
                        <input id="form-phone" name="mobile" class="field"  token="{{csrf_token()}}" placeholder="输入手机号获取注册验证码" autocomplete="off" value="{{old('mobile')}}"maxlength="11" type="text" ><span class="mobile_hint" style="margin-left: 45px;"></span>
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
                    <input autocomplete="off" name="code" id="code" maxlength="6" class="field form-authcode" placeholder=" 请输入右侧验证码"  type="text">
                    <a onclick="javascript:re_captcha();" ><img src="{{ URL('/zhuce/1') }}"  title="刷新图片" width="80" height="30" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>
                </div>
                <div class="input-tip">
                    <span style="color:red;">
                        @if($errors->has('code'))
                            {{$errors->first('code')}}
                        @endif
                    </span>
                </div>
                <div class="form-item form-item-phonecode">
                    <label>手机验证码</label>
                   <input name="verify"  maxlength="13" type="text" placeholder=" 请填写手机验证码" autocomplete="off" class="field form-authcode" value="{{old('verify')}}">
                    <button id="btn" class="btn-phonecode" type="button" one="false" onclick="sendCode()">获取验证码</button>
                    <i class="i-status"></i>
                </div>
                <div>
                    <button type="submit" class="btn-register">立即注册</button>
                </div>
            </form><div id="country_code_layer" style="display: none;"><iframe scrolling="no" style="background-color:transparent; position: absolute; z-index: -1; width: 100%; height: 100%; top: 0; left:0;" frameborder="0"></iframe><div><a class="arrow"></a><div class="search-bar"><b class="search-icon"></b><input placeholder="搜索您的国家和地区" id="inputSearch" type="text"></div><div id="result"><div class="capital-list"><ul></ul></div><div class="current-capital"><span id="currentCapital">A</span><span class="line"></span></div><div class="country-list"><div id="scrollbar2" class="scrollbar_all"><div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div><div class="viewport"><div class="overview"><ul></ul></div></div></div></div></div><div id="no-result">未找到国家或地区</div></div></div>
        </div>
        <!--手机验证码-->
        <script type="text/javascript">
            var time = 60;
            function sendCode() {
                //避免重复发
                if($("#btn").attr("one")=='true'){
                    return false;
                }
                $('#btn').html("重新获取(" + time + ")");
                $("#btn").attr("one", true);
                var tel = $.trim($('#form-phone').val());//获取手机号码
                var username = $.trim($('#form-account').val());//获取用户名
                var token = $.trim($('#form-phone').attr('token'));//获取口令牌
                $.post('/app', {'tel':tel,'username':username,'_token':token},function(res){
                    if (res) {
                        alert('发生成功！');
                    } else {
                        alert('error');
                    }
                });
                clock = setInterval(aa, 1000);
            }
            function aa(){
                time--;
                if(time >0){
                    $('#btn').html("重新获取("+time+")");

                }else{
                    clearInterval(clock);
                    $("#btn").html("获取验证码");
                    $("#btn").attr("one",false);
                    time = 60;
                }
            }
        </script>
        <div id="form-company" class="reg-other">
            <div class="company-reg">
                <a href="" target="_blank" clstag="pageclick|keycount|201612011|3">
                    <i class="i-company"></i>
                    <span>企业用户注册</span>
                </a>
            </div>
            <div class="inter-cust">
                <a href="https:" target="_blank" clstag="pageclick|keycount|201612011|4">
                    <i class="i-global"></i>
                    <span>INTERNATIONAL<br>CUSTOMERS</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="form-footer" class="footer w">
    <div class="links">
        <a rel="nofollow" target="_blank" href="###"> 关于我们</a>|
        <a rel="nofollow" target="_blank" href="###">联系我们</a>|
        <a rel="nofollow" target="_blank" href="#">人才招聘</a>|
        <a rel="nofollow" target="_blank" href="#">商家入驻</a>|
        <a rel="no  follow" target="_blank" href="">广告服务</a>|
        <a rel="nofollow" target="_blank" href="">手机京东</a>|
        <a target="_blank" href="">友情链接</a>|
        <a target="_blank" href="">销售联盟</a>|
        <a href="" target="_blank">京东社区</a>|
        <a href="" target="_blank">京东公益</a>|
        <a target="_blank" href="" clstag="pageclick|keycount|20150112ABD|9">English Site</a>
    </div>
    <div class="copyright">
        Copyright&#169;2004-2016&nbsp;&nbsp;京东JD.com&nbsp;版权所有
    </div>
</div>
{{--<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>--}}
<script src="/js/JavaScript.js"></script>
<script type="text/javascript">
    function re_captcha() {
        $url = "{{ URL('/zhuce') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
    }
</script>
{{--<script type="text/javascript" src="%E4%B8%AA%E4%BA%BA%E6%B3%A8%E5%86%8C_files/jseqf.htm"></script>--}}
{{--<script src="%E4%B8%AA%E4%BA%BA%E6%B3%A8%E5%86%8C_files/td.js"></script><script src="%E4%B8%AA%E4%BA%BA%E6%B3%A8%E5%86%8C_files/y.htm"></script>--}}
<a target="_blank" href="" class="feedback" style="margin-top: -85px; position: fixed; right: 0px; bottom: 50%;"></a>


</body>
</html>
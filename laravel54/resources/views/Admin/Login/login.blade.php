<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>登录</title>
    <link rel="stylesheet" href="/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <script src="./Public/js/jquery.js"></script>
    <script src="./Public/js/pintuer.js"></script>
</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">
            </div>
            <form action="/login/login" method="post">
                {{ csrf_field() }}
                <div class="panel loginbox">
                    <div class="text-center margin-big padding-big-top"><h1>后台管理中心</h1></div>
                    <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                        <div class="form-group">
                            <div class="field field-icon-right">
                                <input type="text" class="input input-big" name="name" placeholder="登录账号" data-validate="required:请填写账号" />
                                <span class="icon icon-user margin-small"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="field field-icon-right">
                                <input type="password" class="input input-big" name="password" placeholder="登录密码" data-validate="required:请填写密码" />
                                <span class="icon icon-key margin-small"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="field">
                                <input type="text" class="input input-big" maxlength="6" name="code" id="code" placeholder="填写右侧的验证码" autocomplete="off"  data-validate="required:请填写右侧的验证码" />
                                <a onclick="javascript:re_captcha();" ><img src="{{ URL('/login/code/1') }}"  title="刷新图片" id="c2c98f0de5a04167a9e427d883690ff6" border="0" width="100" height="32" class="passcode"style="height:43px;cursor:pointer;"></a>
                            </div>
                        </div>
                    </div>
                    <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录"></div>
                    　　　　　　　　　　　　　　　<a href="#" style="color: grey">还没有账号点击向管理员申请>></a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    function re_captcha() {
        $url = "{{ URL('/login/code') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
    }
</script>
</html>
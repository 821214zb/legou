<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>店铺列表</title>
    <link rel="stylesheet" href="Admin/css/pintuer.css">
    <link rel="stylesheet" href="Admin/css/admin.css">
    <link rel="stylesheet" href="Admin/css/style.css">
    <!--<link rel="stylesheet" href="css/ace.min.css">-->
    <script src="Admin/js/jquery.js"></script>
    <script src="Admin/js/pintuer.js"></script>
    <script src="Admin/js/layer/layer.js"></script>
    <script type="text/javascript" src="Admin/jeDate/jedate.js"></script>
</head>
<script>
    function U_Mobilereg(self) {
    var form = $(self).parents('form'), mobile = form.find('input[name="mobile"]').val();
        if ($.zyb.util.empty(mobile)) {
            $.zyb.tip({content: '请输入手机号码', icon: 'error'});
            return false;
        }
        $(self).find('b:eq(1)').text('提交验证...');
        $.getJSON(GV.logon, {mobile: mobile}, function (rs) {
            if (rs.status == 1) {
                $.zyb.tip({content: rs.msg});
                $(self).find('#J_run_miao').text(60);
                $(self).find('b:eq(1)').text('秒后可重试');
                //重置验证域
                uJrunmiao();
            } else {
                $.zyb.tip({content: rs.msg, icon: 'alert'});
            }
        });
return false;
}
</script>
<body>
<br><br>
<ul class="signlist  J_box"  >
    <form method="post">
        <!--手机验证码登录-->
        <li class="itembd"><i class="user"></i><input type="text" name="mobile"  value="" placeholder="手机号" /></li>
        <li class="itembd"><i class="pwd"></i><input type="text" name="code" value="" placeholder="手机验证码" />
            <a href="javascript:void(0);" onclick="U_Mobilereg(this);" class="btn_a">获取验证码</a></li>
        <li><a href="{:U('user/findpwd')}" class="blue f_r">忘记密码？</a><input type="checkbox" checked="checked" class="check" />记住我</li>
        <li><input type="button" value="登录" class="btn" onclick="uJdoPost(this);" data-url="{:U("user/logins")}" /></li>
    </form>
</ul>
</body>
</html>
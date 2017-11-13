<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <script src="/Admin/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="/Admin/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
    </div>
    <div class="head-l"><a class="button button-little bg-green" href="/" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="/admin/logout"><span class="icon-power-off"></span> 退出登录</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;欢迎登录：<b><font color="#ff4500">{{session('username')}}</font></b> </div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
<<<<<<< Updated upstream
=======
    <h2><span class="icon-home"></span>基本设置</h2>
    <ul>
        <li><a href="info.html" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
        <li><a href="pass.html" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
        <li><a href="page.html" target="right"><span class="icon-caret-right"></span>单页管理</a></li>
        <li><a href="/posid" target="right"><span class="icon-caret-right"></span>推荐位管理</a></li>
        <li><a href="/lunbo/show" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>
        <li><a href="/links/show" target="right"><span class="icon-caret-right"></span>友情链接</a></li>
        <li><a href="book.html" target="right"><span class="icon-caret-right"></span>留言管理</a></li>
        <li><a href="column.html" target="right"><span class="icon-caret-right"></span>栏目管理</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
    <ul>
        <li><a href="list.html" target="right"><span class="icon-caret-right"></span>内容管理</a></li>
        <li><a href="add.html" target="right"><span class="icon-caret-right"></span>添加内容</a></li>
        <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>分类管理</a></li>
    </ul>
    <h2><span class="icon-pencil"></span>文章发布</h2>
    <ul>
        <li><a href="wz-list.html" target="right"><span class="icon-caret-right"></span>文章列表</a></li>
        <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>分类管理</a></li>
    </ul>
    <h2><span class="icon-user"></span>用户管理</h2>
    <ul>
        <li><a href="/user/show" target="right"><span class="icon-caret-right"></span>用户列表</a></li>
        <li><a href="/user/add" target="right"><span class="icon-caret-right"></span>添加会员</a></li>
        {{--<li><a href="djgl.html" target="right"><span class="icon-caret-right"></span>等级管理</a></li>--}}
        {{--<li><a href="hyjl-list.html" target="right"><span class="icon-caret-right"></span>会员记录管理</a></li>--}}
    </ul>
    <h2><span class="icon-reorder (alias)"></span>交易管理</h2>
    <ul>
        <li><a href="/deal/info" target="right"><span class="icon-caret-right"></span>交易信息</a></li>
        <li><a href="/deal/select" target="right"><span class="icon-caret-right"></span>订单查询</a></li>
        <li><a href="/deal/hb" target="right"><span class="icon-caret-right"></span>合并订单</a></li>
        <li><a href="jy-chart.html" target="right"><span class="icon-caret-right"></span>交易订单（图）</a></li>
        <li><a href="ddgl-list-34.html" target="right"><span class="icon-caret-right"></span>缺货登记</a></li>
        <li><a href="cateedit-22.html" target="right"><span class="icon-caret-right"></span>添加订单</a></li>
        <li><a href="ddgl-list-36.html" target="right"><span class="icon-caret-right"></span>发货单列表</a></li>
        <li><a href="ddgl-list-38.html" target="right"><span class="icon-caret-right"></span>退货单列表</a></li>
        <li><a href="ddgl-list-43.html" target="right"><span class="icon-caret-right"></span>退货原因列表</a></li>
        <li><a href="ddgl-list-44.html" target="right"><span class="icon-caret-right"></span>退换货申请列表</a></li>
        <li><a href="ddgl-list.html" target="right"><span class="icon-caret-right"></span>订单管理</a></li>
        <li><a href="jyje.html" target="right"><span class="icon-caret-right"></span>交易金额</a></li>
        <li><a href="ddgl-list-1.html" target="right"><span class="icon-caret-right"></span>订单处理</a></li>
        <li><a href="ddgl-list-2.html" target="right"><span class="icon-caret-right"></span>退款管理</a></li>
        <li><a href="ddgl-list-49.html" target="right"><span class="icon-caret-right"></span>商品库存日志</a></li>
    </ul>
    <h2><span class="icon-group (alias)"></span>用户管理</h2>
    <ul>
        <li><a href="/admin/show" target="right"><span class="icon-caret-right"></span>用户列表</a>
        <li><a href="/role/show" target="right"><span class="icon-caret-right"></span>角色列表</a></li>
        <li><a href="/node/index/0" target="right"><span class="icon-caret-right"></span>权限管理</a></li>
        <li><a href="gly-list.html" target="right"><span class="icon-caret-right"></span>管理员列表</a></li>
        <li><a href="person-info.html" target="right"><span class="icon-caret-right"></span>个人信息</a></li>
        <li><a href="qxgl-1.html" target="right"><span class="icon-caret-right"></span>管理员日志</a></li>
>>>>>>> Stashed changes

    @foreach(session('root_info') as $k=>$vv)
        <h2>{{$vv}}</h2>
        <ul>
            @foreach(session('root_info_secondary') as $kk=>$v)
              @if($k == $v->pid)
                  @if($v->name == 'cate' || $v->name == 'node')
                        <li><a href="/{{$v->name}}/show/0" target="right"><span class="icon-caret-right"></span>{{$v->title}}</a></li>
                  @elseif($v->name == 'check')
                        <li><a href="/{{$v->name}}/show/0/0" target="right"><span class="icon-caret-right"></span>{{$v->title}}</a></li>
                  @else
                        <li><a href="/{{$v->name}}/show" target="right"><span class="icon-caret-right"></span>{{$v->title}}</a></li>
                  @endif
              @endif
           @endforeach
        </ul>
    @endforeach
</div>
<script type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
        $(".leftnav").children("ul:last-child").css("padding-bottom","100px");
    });
</script>
<ul class="bread">
    <li><a href="{:U('Index/info')}" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">网站信息</a></li>
    <li><b>当前语言：</b><span style="color:red;">中文</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
    <iframe scrolling="auto" rameborder="0" src="info" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>欢迎访问爱尚乐购！</title>
    <link rel="stylesheet" href="css/base.css"/>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="shortcut icon" href="favicon.ico" />
    <script type="text/javascript" src="http://www.aslegou.com/Admin/js/jquery-3.2.1.js"></script>
</head>

<style>
    .topbanner{
        height:60px; ;
    }
    .login{
        background-color: white;
        border: 1px solid lightgrey;border-bottom: none;
    }
    .red {
        background-color: red;
    }
</style>

<body>
<!--爱尚的头部导航开始-->
<div id="mask"></div>
<div id="box">
    <span id="close_all">×</span>
</div>
<div class="topbanner" id="top_banner">
    <div class="w tp">
        <img src="images/topbanner.jpg" alt="" style="height:60px"/>
        <a href="javascript:;" class="close-banner" id="jd_close"></a>
    </div>
</div>
<div class="shortcut">
    <div class="w">
        <div class="fl">
           <div class="dt"> 送至：北京
               <i><s>◇</s></i>
           </div>
        </div>
        <div class="fr">
            <ul>
                <li>
                    @if (Auth::guest())
                        <a href="login" id="login">你好，请登录</a> &nbsp;&nbsp;
                        <a href="zhuce" class="col-red">免费注册</a>
                        @else
                        <div class="login2">
                            <div id="login" style="position:relative;width: 115px;margin-left: 5px;">
                                <a >欢迎您！{{ Auth::user()->name }}
                                    <img src="images/pl1.jpg" width="30px" style="position: absolute;top:8px; filter:alpha(Opacity=80);-moz-opacity:0.4;opacity: 0.4;">
                                    <div class='login1' style="border: 1px solid lightgrey;border-top: none; width:235px;height:160px;top:27px;left:-1px;position: absolute; background-color: white;display:none;">
                                        <div style="border-bottom:1px solid lightgrey;height:80px;">
                                            <div style="float: left;margin:11px 0px 0px 15px;">
                                                <img class="J_upic_img" src="images/11.png" width="57" height="57">
                                            </div>
                                            <div style="width:145px;height:50px;float: right;margin:10px 8px 0px 8px;">
                                                <img src="images/pl1.jpg" width="38px;height:15px;" style="filter:alpha(Opacity=80);-moz-opacity:0.4;opacity: 0.4;">
                                                <div style="float: right;font-size: 13px">
                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                        退出
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </div>
                                                <div style="font-size: 11px;margin-bottom: 10px;">
                                                    <a href="//plus.jd.com" target="_blank">试用PLUS会员领免运费券&gt;</a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                </li>
                <li class="line"></li>
                <li><a   @if (Auth::guest()) href="login"  @else href="/user_indent/{{ Auth::user()->id }}" @endif  target="_blank">我的订单</a></li>
                <li class="line"></li>
                <li class="fore"><a  @if (Auth::guest()) href="login"  @else href="/user_indenx/{{ Auth::user()->id }}" @endif  target="_blank">我的爱尚</a>
                    <i><s>◇</s></i>
                </li>
                <li class="line"></li>
                <li>爱尚会员</li>
                <li class="line"></li>
                <li>企业采购</li>
                <li class="line"></li>
                <li class="fore tel-jd">
                    <em class="tel"></em>
                    手机爱尚
                    <i><s>◇</s></i>
                </li>
                <li class="line"></li>
                <li class="fore">
                    关注爱尚
                    <i><s>◇</s></i>
                </li>
                <li class="line"></li>
                <li class="fore">
                    客户服务
                    <i><s>◇</s></i>
                </li>
                <li class="line"></li>
                <li class="fore">
                    网站导航
                    <i><s>◇</s></i>
                </li>
            </ul>
        </div>
    </div>

</div>
<!--爱尚头部导航结束-->
<!--爱尚的topbanner部分-->
<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
        $(".login2").mouseenter(function(){
            $("#login").addClass("login");
            $(".login1").slideDown("fast");
        });
        $(".login2").mouseleave(function(){
            $("#login").removeClass("login");
            $(".login1").slideUp("fast");
        });

    });
    /*事件源： a
    事件  点击
    事件处理程序   topbanner 这个隐藏的意思*/
    /*要做事，先找人*/
    var jd_close = document.getElementById("jd_close"); // 得到a
    var topBanner = document.getElementById("top_banner"); // 得到大的
    //事件源.事件 = function(){}
    jd_close.onclick = function(){
        topBanner.style.display = "none";
    }
</script>
<!--爱尚的topbanner部分 end-->

<div class="w clearfix">
    <div class="logo">
    </div>
    <div class="search">
        <form method="get" action="/cate_goods/0">
            <input type="text" name="keyword" />
            <button>搜索</button>
        </form>
    </div>
    <div class="car">
        @if (Auth::guest())
            <a href="/cart/0/0">我的购物车</a>
        @else
            <a href="/cart/{{Auth::user()->id}}/0">我的购物车</a>
        @endif
        <span class="icon1"></span>
        <span class="icon2">></span>
        <span class="icon3">8</span >
    </div>
    <div class="hotwords">
        <a href="#" class="col-red">11月11天</a>
        <a href="#">11.11秒杀</a>
        <a href="#">买2免1</a>
        <a href="#">Note5 黑</a>
        <a href="#">12期免息</a>
        <a href="#">智能科技</a>
        <a href="#">清仓</a>
        <a href="#">国际服饰</a>
        <a href="#">优惠券</a>
    </div>
</div>

<!--nav 部分开始-->
<!--左侧联动控制右侧分类显示-->
<script>
    //获取首页附导航展示
    $(function(){
        //页面执行完毕加载首页左侧分类数据
        $.ajax({
            url:'/cate_lunBo',
            type:'get',
            dataType:'json',
            success:function(data){
                $('#cate').html(data['cate']);

            },
            error:function(){
                alert('error');
            }
        });

        //获取中间分类展示并覆盖掉轮播图效果
        $(".dd").on('mouseenter','label',function(){
           $(this).parent().addClass('red'). siblings().removeClass('red') ;
            var id = $(this).attr('id');
            var cate_name = $(this).attr('name');
            $('#lunbo').hide(); $('#cat_div').show();
            $.ajax({
                url:'/dev_cate/'+id+'/'+cate_name,
                type:'get',
                dataType:'json',
                success:function(data){
                    $('#cat_div').html(data);
                },
                error:function(){
                    alert('error');
                }
            })
        });
        //获取中间轮播图
        $('#div').mouseleave(function(){
            $('#lunbo').show();
            $('#cat_div').hide();
        })
    })
</script>
<script type="text/javascript">

</script>
<div id='cate_div'>
    <div class="jd-nav">
        <div class="w">
            <div class="dropdown" id="dd">
                <div class="dt">
                    <a>全部商品分类</a>
                </div>
                <div class="dd" id="cate" >

                </div>
            </div>
            <div class="navitems" >
                <ul>
                    <li><a href="#">服装城</a></li>
                    <li><a href="#">美妆馆</a></li>
                    <li><a href="#">超市</a></li>
                    <li><a href="#">全球购</a></li>
                    <li><a href="#">闪购</a></li>
                    <li class="new"><a href="#">团购</a></li>
                    <li><a href="#">拍卖</a></li>
                    <li><a href="#">金融</a></li>
                    <li><a href="#">智能</a></li>
                </ul>
            </div>
            <div class="bike">
                <a href="#"></a>
            </div>
        </div>
    </div>
<!--
大banner 轮播图
-->
    <div class="banner604">
        <a href="#">
        </a>
    </div>
    <div class="w main clearfix" id="div">
        <!-- 轮播图-->
        <div class="slider" id="slide">
            <div id="lunbo">
                <a href='#' id="aaa"><img src='./uploads/IWloI1y4.jpg' alt='' id='img'/></a>
                <ul class="circle" id="ul">
                    @foreach($list as $k=>$v)
                        <li class='' src='{{$v->img}}' name="{{$k+1}}" id='li{{$k+1}}' href='{{$v->img_url}}'  alt='{{$v->alt}}'>{{$k+1}}</li>
                    @endforeach
                </ul>
                <div class="arrow" id="arr">   <!--左右两个三角-->
                    <a href="javascript:;" class="arrow-l"><</a>
                    <a href="javascript:;" class="arrow-r">></a>
                </div>
            </div>
            <div id="cat_div" style="display:none"></div>
        </div>
        <script>
            $(function() {
                //定义全局变量
                var n = 0;
                var t = setInterval(scroll,2000);

                function scroll() {
                    n++;
                    if (n > 6) {
                        n = 1;
                    }
                    //给大图赋值
                    var src  = $('#li' + n).attr("src");
                    var url  = $("#li" + n).attr("href");
//            var target = $("#" + n).attr("target");
                    var alt  = $("#li" + n).attr("alt");

                    $("#img").attr({
                        "src": "./" + src,
                        "alt":alt
                    });
                    $("#aaa").attr({
                        "href":url
//                "target":target
                    });

                    $("li").each(function () {
                        if ($(this).attr("id") == 'li'+n) {
                            $(this).attr("style", 'background-color: red');
                        } else {
                            $(this).attr("style", 'background-color: none');
                        }
                    });
                }
                //图片停止函数;
                $("#img").hover(function () {
                    clearInterval(t);
                }, function () {
                    t = setInterval(scroll, 2000);
                });

                //随机切换图片
                $("#slide").on('mousedown', 'li', function () {
                    n   = $(this).attr('name');
                    src = $(this).attr("src");
                    url = $(this).attr("href");

//            target = $("#" + n).attr("target");
                  var alt = $(this).attr("alt");
                    $("#img").attr({
                        "src": "./" + src,
                        "alt":alt
                    });
                    $("#aaa").attr({
                        "href":url
//                "target":target
                    });
                    $(this).attr("style",'background-color:red').siblings().attr("style",'background-color:none');
                });
                //判断大图片打开链接的方式
            $('#img').click(function(){
            var r = confirm('要在新页面打开此链接吗！');
            if(r == true){
                $(this).parent().attr("target",'_blank');
            }else{
                $(this).parent().attr("target",'_self');
            }
        });
            });
        </script>
        <div class="news">
            <div class="jd-news">
                <div class="dt">
                    <h3>爱尚快报</h3>
                    <a href="#">更多></a>
                </div>
                <div class="dd">
                    <ul>
                        <li><a href="#"><span>[特惠]</span>1元秒杀</a></li>
                        <li><a href="#"><span>[公告]</span>母婴类APP【爱尚宝宝】上线</a></li>
                        <li><a href="#"><span>[特惠]</span>美的品牌日 APP嗨购大放“价”</a></li>
                        <li><a href="#"><span>[公告]</span>爱尚深入蒙牛生产基地进行质检</a></li>
                        <li><a href="#"><span>[特惠]</span>白条购家电 24期免息！</a></li>
                    </ul>
                </div>
            </div>
            <div class="lifeservi">
                <div class="dt">
                    <h3>生活服务</h3>
                </div>
                <div class="dd">
                    <ul>
                        <li class="lifeservi-icon1">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon2">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon1">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon1">
                            <a href="#" class="song">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon1">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon1">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon1">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon1">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon1">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon1">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon1">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                        <li class="lifeservi-icon1">
                            <a href="#">
                                <i></i>
                                <span>话费</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
    <!--双11 的某个活动-->
    <div class="w todays clearfix">
        <div class="night">
            <div class="night-l fl">
                <img src="images/night.jpg" alt=""/>
            </div>
            <div class="night-r">
                <!--商品推荐位置-->
                <ul>
                    @foreach($posid as $k=>$v)
                    <li><a href="#"><img width="240" height="164" src="{{$v->goods_img}}" alt=""/></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

<!--页面底部开始-->
<div class="jd-footer">
    <div class="service">  <!--服务模块-->
        <div class="slogen">
            <span class="item slogen1">
                <img src="images/slogen1.png" alt=""/>
            </span>
            <span class="item slogen2">
                <img src="images/slogen2.png" alt=""/>
            </span>
            <span class="item slogen3">
                <img src="images/slogen3.png" alt=""/>
            </span>
            <span class="item slogen4">
                <img src="images/slogen4.png" alt=""/>
            </span>

        </div>
        <div class="w shopping clearfix">
            <dl>
                <dt><a href="#">购物指南</a></dt>
                <dd><a href="#">购物流程</a></dd>
                <dd><a href="#">会员介绍</a></dd>
                <dd><a href="#">生活旅行/团购</a></dd>
                <dd><a href="#">常见问题</a></dd>
                <dd><a href="#">大家电</a></dd>
                <dd><a href="#">联系客服</a></dd>
            </dl>
            <dl>
                <dt><a href="#">购物指南</a></dt>
                <dd><a href="#">购物流程</a></dd>
                <dd><a href="#">会员介绍</a></dd>
                <dd><a href="#">生活旅行/团购</a></dd>
                <dd><a href="#">常见问题</a></dd>
                <dd><a href="#">大家电</a></dd>
                <dd><a href="#">联系客服</a></dd>
            </dl>
            <dl>
                <dt><a href="#">购物指南</a></dt>
                <dd><a href="#">购物流程</a></dd>
                <dd><a href="#">会员介绍</a></dd>
                <dd><a href="#">生活旅行/团购</a></dd>
                <dd><a href="#">常见问题</a></dd>
                <dd><a href="#">大家电</a></dd>
                <dd><a href="#">联系客服</a></dd>
            </dl>
            <dl>
                <dt><a href="#">购物指南</a></dt>
                <dd><a href="#">购物流程</a></dd>
                <dd><a href="#">会员介绍</a></dd>
                <dd><a href="#">生活旅行/团购</a></dd>
                <dd><a href="#">常见问题</a></dd>
                <dd><a href="#">大家电</a></dd>
                <dd><a href="#">联系客服</a></dd>
            </dl>
            <dl>
                <dt><a href="#">购物指南</a></dt>
                <dd><a href="#">购物流程</a></dd>
                <dd><a href="#">会员介绍</a></dd>
                <dd><a href="#">生活旅行/团购</a></dd>
                <dd><a href="#">常见问题</a></dd>
                <dd><a href="#">大家电</a></dd>
                <dd><a href="#">联系客服</a></dd>
            </dl>
            <div class="coverage">
                <div class="dt">爱尚自营覆盖区县</div>
                <div class="dd">
                   <p> 爱尚已向全国2357个区县提供自营配送服务，支持货到付款、POS机刷卡和售后上门服务。</p>
                    <p class="looklook"><a href="#">查看详情 ></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="w againw">
        <div class="links">
            <a href="#">关于我们</a>|
            <a href="#">联系我们</a>|
            <a href="#">商家入驻</a>|
            <a href="#">营销中心</a>|
            <a href="#">手机爱尚</a>|
            <a href="/links/links_show" target="_blank">友情链接</a>|
            <a href="#">销售联盟</a>|
            <a href="#">爱尚社区</a>|
            <a href="#">爱尚公益</a>|
            <a href="#">English Site</a>|
            <a href="#">Contact Us</a>
        </div>
        <div class="copyright">
            北京市公安局朝阳分局备案编号110105014669  |  京ICP证070359号  |  互联网药品信息服务资格证编号(京)-经营性-2014-0008  |  新出发京零 字第大120007号<br />
            音像制品经营许可证苏宿批005号  |  出版物经营许可证编号新出发(苏)批字第N-012号  |  互联网出版许可证编号新出网证(京)字150号<br />
            网络文化经营许可证京网文[2014]2148-348号  违法和不良信息举报电话：4006561155  Copyright © 2004-2015  爱尚JD.com 版权所有<br />
            爱尚旗下网站：360TOP  拍拍网  网银在线
        </div>
        <div class="message">
            <a href="#"><img src="images/mess.png" alt=""/></a>
            <a href="#"><img src="images/mess2.png" alt=""/></a>
            <a href="#"><img src="images/mess3.png" alt=""/></a>
            <a href="#"><img src="images/mess4.png" alt=""/></a>
            <a href="#"><img src="images/mess5.png" alt=""/></a>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
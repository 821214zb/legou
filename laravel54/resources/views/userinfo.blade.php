<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <title>账户信息</title>
    <link type="text/css" rel="stylesheet" href="/css/userinfo/a.css">
    <script type="text/javascript" async="" src=/js/userinfo/wl_002.js"></script><script type="text/javascript" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/a_002"></script>
    <link type="text/css" rel="stylesheet" href="/css/userinfo/myjd.css" source="combo">
    <link type="text/css" rel="stylesheet" href="/css/userinfo/a_002.css" source="widget">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <script type="text/javascript" async="" src="/css/userinfo/loadFa.htm"></script></head>
    <script src="/Admin/js/jquery.js"></script>
    <script src="/Admin/js/pintuer.js"></script>
    <script type="text/javascript" src="/Admin/jeDate/jedate.js"></script>
    <script language="javascript" type="text/javascript" src="/time/WdatePicker.js"></script>
<!--set|info-->
<body myjd="_MYJD_info" menuid="set">
<div id="shortcut-2014">
    <div class="w">
        <ul class="fl">
        </ul>
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
        <span class="clr"></span>
    </div>
</div>
<div id="o-header-2013"><div id="header-2013" style="display:none;"></div></div>
<div id="nav">
    <div class="w">
        <div class="logo">
            <a href="https://www.jd.com/" target="_blank" class="fore1" clstag="homepage|keycount|home2013|Homejdlogo"></a>
            <a href="https://home.jd.com/" target="_self" class="fore2" clstag="homepage|keycount|home2013|Homebackm">我的爱尚</a>
            <a href="https://www.jd.com/" target="_blank" class="fore3" clstag="homepage|keycount|home2013|Homebackjd">返回爱尚首页</a>
        </div>
        <div class="navitems">
            <ul>
                <li class="fore-1">
                    <a target="_self" href="https://home.jd.com/" clstag="homepage|keycount|home2013|Homeindex">首页</a>
                </li>
                <li class="fore-3">
                    <div class="dl" clstag="click|keycount|myhome|hsz">
                        <div class="dt">
                            <span class="myjd-set">账户设置</span>
                            <b></b>
                        </div>
                        <div class="dd">

                            <a tid="_MYJD_info" clstag="Homeyser" href="###" target="_self"><span>个人信息</span></a>

                            <a tid="_MYJD_safe" clstag="Homesafe" href="https://safe.jd.com/user/paymentpassword/safetyCenter.action" target="_self"><span>账户安全</span></a>
                            <a tid="_MYJD_wdcm" clstag="Homewdcm" href="https://helper.jd.com/IDPlus/pchtml/size-center.html" target="_self"><span>我的尺码</span></a>
                            <a tid="_MYJD_accbinde" clstag="Homezhbd" href="https://safe.jd.com/union/index.action" target="_self"><span>账号绑定</span></a>



                            <a tid="_MYJD_comments" clstag="homeadd" href="/userAddress" target="_self"><span>收货地址</span></a>
                            <a tid="_MYJD_yyrxx" clstag="homeyyrxx" href="https://patient.jd.com/patientInfo" target="_self"><span>用药人信息</span></a>
                            <a tid="_MYJD_share" clstag="Homeshare" href="https://share.jd.com/share/index.html" target="_self"><span>分享绑定</span></a>

                            <a tid="_MYJD_rss" clstag="Homeedm" href="https://i-mkt.jd.com/subscribe/settings" target="_self"><span>邮件订阅</span></a>



                            <a tid="_MYJD_app" clstag="Homeedm" href="https://fw.jd.com/home/auth_list.action" target="_blank"><span>应用授权</span></a>

                            <a tid="_MYJD_pay" clstag="Homequick" href="https://authpay.jd.com/card/queryBindCard.action" target="_blank"><span>快捷支付</span></a>

                            <a tid="_MYJD_zpzz" clstag="Homezpzz" href="https://invoice.jd.com/user/userinfo/zpzz.html" target="_self"><span>增票资质</span></a>
                            <a tid="_MYJD_qyfp" clstag="Homeqyfp" href="https://corp.jd.com/invoice/commonlist" target="_self"><span>企业发票</span></a>
                            <a tid="_MYJD_cgxqd" clstag="Homecgxqd" href="https://kw.jd.com/" target="_self"><span>采购需求单</span></a>
                        </div>
                    </div>
                </li>
                <li class="fore-4">
                    <div class="dl myjd-info" clstag="click|keycount|myhome|hsq">
                        <div class="dt ">
                            <span>社区</span>
                            <b></b>
                        </div>
                        <div class="dd">
                            <a tid="_MYJD_me" clstag="hgr" href="https://me.jd.com/" target="_blank"><span>个人主页</span></a>
                            <a tid="_MYJD_activities" clstag="Homeclub" href="https://luck.jd.com/myjd/myJoinActivity.html" target="_self"><span>我的活动</span></a>

                            <a tid="_MYJD_circle" clstag="Homejoincircle" href="https://group.jd.com/circle/myjoincircle.htm" target="_self"><span>我的圈子</span></a>

                            <a tid="_MYJD_mycollect" clstag="Homethread" href="https://group.jd.com/thread/mythread.htm" target="_self"><span>我的帖子</span></a>
                        </div>
                    </div>
                </li>
                <li class="fore-5">
                    <a tid="_MYJD_joy" href="https://joycenter.jd.com/" target="_self" clstag="homepage|keycount|home2013|Homemsg">消息<i>7</i></a>
                </li>
            </ul>
        </div>
        <div class="nav-r">
            <div id="search-2014">
                <ul id="shelper" class="hide" style="display: none;"></ul>
                <div class="form">
                    <input onkeydown="javascript:if(event.keyCode==13) search('key');" autocomplete="off" id="key" accesskey="s" class="text" value="奶粉" type="text">
                    <button onclick="search('key');return false;" class="button cw-icon" type="button"><i></i>搜索</button>
                </div>
            </div>
            <div id="settleup-2014" class="dorpdown">
                <div class="cw-icon">
                    <i class="ci-left"></i>
                    <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">{{session('carts')}}</i>
                    <a target="_blank" href="https://cart.jd.com/cart.action">我的购物车</a>
                </div>
                <div class="dorpdown-layer"><div class="spacer"></div><div id="settleup-content"><span class="loading"></span></div></div>
            </div>
            <div id="hotwords-2014"><a href="https://sale.jd.com/act/fCpjlzMUSDrxgqP.html" target="_blank" style="color:#C81623;">免费试用</a><a href="https://sale.jd.com/act/MwsDVQXEKlm.html" target="_blank">199减100</a><a href="https://sale.jd.com/act/AL6lOB0RynJE4qp.html" target="_blank">园艺返场</a><a href="https://sale.jd.com/act/fWUTjSnQMclwY.html" target="_blank">运动户外</a><a href="https://sale.jd.com/act/SdnEAhHL72XJk.html" target="_blank">领券狂减</a><a href="https://chaoshi.jd.com/" target="_blank">爱尚超市</a></div>
        </div>
        <div class="clr"></div>
    </div>
</div>

<!--container start-->

<input name="pzNtxTycYj" value="BzskI" id="otherId" type="hidden">
<div id="container">
    <div class="w">
        <div id="content">
            <div id="sub">
                <div id="menu">
                    <dl class="fore1">
                        <dt id="_MYJD_setting">设置</dt>
                        <dd class="fore1_1 curr" id="_MYJD_info">
                            <a clstag="homepage|keycount|home2013|Homeyser" href="https://i.jd.com/user/info" target="_self">个人信息</a>
                        </dd>
                        <dd class="fore1_2" id="_MYJD_safe">
                            <a clstag="homepage|keycount|home2013|Homesafe" href="https://safe.jd.com/user/paymentpassword/safetyCenter.action" target="_self">账户安全</a>
                        </dd>
                        <dd class="fore1_2_1" id="_MYJD_wdcm">
                            <a clstag="homepage|keycount|home2013|Homewdcm" href="https://helper.jd.com/IDPlus/pchtml/size-center.html" target="_self">我的尺码</a>
                        </dd>
                        <dd class="fore1_3" id="_MYJD_accbinde">
                            <a clstag="homepage|keycount|home2013|Homezhbd" href="https://safe.jd.com/union/index.action" target="_self">账号绑定</a>
                        </dd>

                        <dd class="fore1_5" id="_MYJD_comments">
                            <a clstag="homepage|keycount|home2013|homeadd" href="/userAddress" target="_self">收货地址</a>
                        </dd>
                        <dd class="fore1_7" id="_MYJD_share">
                            <a clstag="homepage|keycount|home2013|Homeshare" href="https://share.jd.com/share/index.html" target="_self">分享绑定</a>
                        </dd>
                        <dd class="fore1_8" id="_MYJD_rss">
                            <a clstag="homepage|keycount|home2013|Homeedm" href="https://i-mkt.jd.com/subscribe/settings" target="_self">邮件订阅</a>
                        </dd>

                        <dd class="fore1_10" id="_MYJD_app">
                            <a clstag="homepage|keycount|home2013|Homeedm" href="https://fw.jd.com/home/auth_list.action" target="_blank">应用授权</a>
                        </dd>
                        <dd class="fore1_11" id="_MYJD_pay">
                            <a clstag="homepage|keycount|home2013|Homequick" href="https://authpay.jd.com/card/queryBindCard.action" target="_blank">快捷支付</a>
                        </dd>
                        <dd class="fore1_12" id="_MYJD_zpzz">
                            <a clstag="homepage|keycount|home2013|Homezpzz" href="https://invoice.jd.com/user/userinfo/zpzz.html" target="_self">增票资质</a>
                        </dd>
                        <dd class="fore1_13" id="_MYJD_qyfp">
                            <a clstag="homepage|keycount|home2013|Homeqyfp" href="https://corp.jd.com/invoice/commonlist" target="_self">企业发票</a>
                        </dd>
                        <dd class="fore1_14" id="_MYJD_cgxqd">
                            <a clstag="homepage|keycount|home2013|Homecgxqd" href="https://kw.jd.com/" target="_self">采购需求单</a>
                        </dd>
                    </dl>
                </div>
            </div>

            <div id="main">
                <div class="mod-main">
                    <div class="mt">
                        <ul class="extra-l">
                            <li class="fore-1"><a class="curr" href="https://i.jd.com/user/info">基本信息</a></li>
                            <li class="fore-2"><a href="https://i.jd.com/user/userinfo/showImg.html">头像照片</a></li>
                            <li class="fore-3"><a href="https://i.jd.com/user/userinfo/more.html">更多个人信息</a></li>

                        </ul>
                    </div>
                    <div class="mc">
                        <div class="user-set userset-lcol">
                            <div class="form">
                                <div class="item">
                                    <span class="label"><em>*</em>用户名：</span>
                                    <div class="fl">
                                        <div><input type="text" id="name" value="{{$list->name}}"></div>
                                            <input type="hidden" id="token" value="{{csrf_token()}}">
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="label"><em>*</em>邮箱地址：</span>
                                    <div class="fl">
                                        <input clstag="homepage|keycount|home2013|infoname" class="itxt" maxlength="20"  id="email"  type="text" value="{{$list->email}}">
                                        <div class="clr"></div><div class="prompt-06"><span id="nickName_msg"></span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="label">性别：</span>
                                    <div class="fl" clstag="homepage|keycount|home2013|infoGender">
                                        <input  class="asradio" name="sex" value="1" type="radio"><label >男</label>
                                        <input  class="asradio" value="2" name="sex" type="radio"><label >女</label>
                                        <input  class="asradio" value="0" name="sex" checked="checked" type="radio"><label >保密</label>
                                    </div>
                                </div>
                                <div class="item" clstag="homepage|keycount|home2013|infoBirthday">
                                    <span class="label">生日：</span>
                                    <div class="fl birthday-info">
                                        <input type="text" class="input" id="up_time" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" placeholder=" &nbsp;请填写生日亲" />
                                        <span class="ftx03">填生日有惊喜哦~</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <span class="label">兴趣爱好：</span>
                                    <div class="fl interest-list">
                                        <p>请选择您感兴趣的分类，给您最精准的推荐</p>
                                        <ul class="hobul" clstag="homepage|keycount|home2013|infoInterest">
                                            <li name="hobbyType" value="1">图书/音像/数字商品</li>
                                            <li name="hobbyType" value="2">家用电器</li>
                                            <li name="hobbyType" value="3">手机/数码</li>
                                            <li name="hobbyType" value="4">电脑/办公</li>
                                            <li name="hobbyType" value="5">家居/家具/家装/厨具</li>
                                            <li name="hobbyType" value="6">服饰内衣/珠宝首饰</li>
                                            <li name="hobbyType" value="7">个护化妆</li>
                                            <li name="hobbyType" value="8">鞋靴/箱包/钟表/奢侈品</li>
                                            <li name="hobbyType" value="9">运动健康</li>
                                            <li name="hobbyType" value="10">汽车用品</li>
                                            <li name="hobbyType" value="11">母婴/玩具乐器</li>
                                            <li name="hobbyType" value="12">食品饮料/保健食品</li>
                                            <li name="hobbyType" value="13">彩票/旅行/充值/票务</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="label">&nbsp;</span>
                                    <div class="fl">

                                        <a clstag="homepage|keycount|home2013|infobtn" href="javascript:void(0)" class="btn-5" id="submit">提交</a>
                                    </div>
                                </div>
                                <script>
                                    //提交当前用户基本信息表单
                                  $(function(){
                                      $('#submit').click(function(){
                                          var name=$('#name').val();
                                          var email=$('#email').val();
                                          var birthday=$('#up_time').val();//alert(up_time);
                                          var sex=$('input:radio[name="sex"]:checked').val();
                                          var token=$('#token').val();
                                          var like = '';
                                          $('li[name="hobbyType"]').each(function(){
                                              if($(this).attr('class') == 'selected'){
                                                 like += ','+$(this).html();
                                              }
                                          });
                                          like = like.substr(1);
                                          $.ajax({
                                              url: "/userUpdate",
                                              type: "post",
                                              data: {
                                                  "name": name,
                                                  "email": email,
                                                  "birthday": birthday,
                                                  "sex": sex,
                                                  "like": like,
                                                  "_token":token
                                              },
                                              dataType: 'json',
                                              success: function (data) {
                                                  alert(data);
                                              },
                                              error: function () {
                                                  alert('error');
                                              }
                                          })
                                      })
                                  })
                                </script>
                            </div>
                        </div>
                        <div id="user-info">
                            <div class="u-pic">
                                <img alt="用户头像" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/no-img_mid__002.jpg">
                                <div class="mask"></div>
                                <div class="face-link-box"></div>
                                <a href="https://i.jd.com/user/userinfo/showImg.html" class="face-link">修改头像</a>
                            </div>
                            <div class="info-m">
                                <div><b>用户名：jd_7732522cce128</b></div>
                                <div class="u-level">
                                    <span class="rank jxz">
										<s></s><a href="https://vip.jd.com/" target="_blank" title="1196">京享值1196</a>
                                    </span>

                                </div>
                                <div clstag="pageclick|keycount|201602251|4">小白信用：<a href="https://credit.jd.com/" target="_blank"> </a></div>
                                <div>会员类型：个人用户</div>
                            </div>
                        </div>
                        <div class="fr ac" style="width:280px;">
                            注：修改手机和邮箱请到<a clstag="homepage|keycount|home2013|infopay" class="ml5 ftx05" href="https://safe.jd.com/user/paymentpassword/safetyCenter.action">账户安全</a>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--container end-->

<!--main-->
<div id="service-2014">
    <div class="slogen">
		<span class="item fore1">
			<i></i><b>多</b>品类齐全，轻松购物
		</span>
		<span class="item fore2">
			<i></i><b>快</b>多仓直发，极速配送
		</span>
		<span class="item fore3">
			<i></i><b>好</b>正品行货，精致服务
		</span>
		<span class="item fore4">
			<i></i><b>省</b>天天低价，畅选无忧
		</span>
    </div>
    <div class="w">
        <dl class="fore1">
            <dt>购物指南</dt>
            <dd>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-29.html">购物流程</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-151.html">会员介绍</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-297.html">生活旅行/团购</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue.html">常见问题</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-136.html">大家电</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/index.html">联系客服</a></div>
            </dd>
        </dl>
        <dl class="fore2">
            <dt>配送方式</dt>
            <dd>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-81-100.html">上门自提</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-81.html">211限时达</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/103-983.html">配送服务查询</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/109-188.html">配送费收取标准</a></div>
                <div><a target="_blank" href="https://en.jd.com/chinese.html">海外配送</a></div>
            </dd>
        </dl>
        <dl class="fore3">
            <dt>支付方式</dt>
            <dd>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-172.html">货到付款</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-173.html">在线支付</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-176.html">分期付款</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-174.html">邮局汇款</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-175.html">公司转账</a></div>
            </dd>
        </dl>
        <dl class="fore4">
            <dt>售后服务</dt>
            <dd>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/321-981.html">售后政策</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-132.html">价格保护</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/130-978.html">退款说明</a></div>
                <div><a rel="nofollow" target="_blank" href="https://myjd.jd.com/repair/repairs.action">返修/退换货</a></div>
                <div><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-50.html">取消订单</a></div>
            </dd>
        </dl>
        <dl class="fore5">
            <dt>特色服务</dt>
            <dd>
                <div><a target="_blank" href="https://help.jd.com/user/issue/list-133.html">夺宝岛</a></div>
                <div><a target="_blank" href="https://help.jd.com/user/issue/list-134.html">DIY装机</a></div>
                <div><a rel="nofollow" target="_blank" href="https://fuwu.jd.com/">延保服务</a></div>
                <div><a rel="nofollow" target="_blank" href="https://o.jd.com/market/index.action">爱尚E卡</a></div>
                <div><a rel="nofollow" target="_blank" href="https://mobile.jd.com/">爱尚通信</a></div>
                <div><a rel="nofollow" target="_blank" href="https://s.jd.com/">爱尚JD+</a></div>
            </dd>
        </dl>
        <span class="clr"></span>
    </div>
</div>
<div class="w">
    <div id="footer-2014">
        <div class="links"><a rel="nofollow" target="_blank" href="https://about.jd.com/">关于我们</a>|<a rel="nofollow" target="_blank" href="https://about.jd.com/contact/">联系我们</a>|<a rel="nofollow" target="_blank" href="https://help.jd.com/user/custom.html">联系客服</a>|<a rel="nofollow" target="_blank" href="https://vc.jd.com/cooperation.html">合作招商</a>|<a rel="nofollow" target="_blank" href="https://helpcenter.jd.com/venderportal/index.html">商家帮助</a>|<a rel="nofollow" target="_blank" href="https://jzt.jd.com/">营销中心</a>|<a rel="nofollow" target="_blank" href="https://app.jd.com/">手机爱尚</a>|<a target="_blank" href="https://club.jd.com/links.aspx">友情链接</a>|<a target="_blank" href="https://media.jd.com/">销售联盟</a>|<a href="https://club.jd.com/" target="_blank">爱尚社区</a>|<a href="https://sale.jd.com/act/FTrWPesiDhXt5M6.html" target="_blank">风险监测</a>|<a href="https://about.jd.com/privacy/" target="_blank" clstag="h|keycount|2016|43">隐私政策</a>|<a href="https://gongyi.jd.com/" target="_blank">爱尚公益</a>|<a href="https://en.jd.com/" target="_blank">English Site</a>|<a href="https://corporate.jd.com/" target="_blank">Media &amp; IR</a></div>
        <div class="copyright"><a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002000088"><img src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/56a0a994Nf1b662dc.png"> 京公网安备 11000002000088号</a>&nbsp;&nbsp;|&nbsp;&nbsp;京ICP证070359号&nbsp;&nbsp;|&nbsp;&nbsp;<a target="_blank" href="https://img14.360buyimg.com/da/jfs/t256/349/769670066/270505/3b03e0bb/53f16c24N7c04d9e9.jpg">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a>&nbsp;&nbsp;|&nbsp;&nbsp;新出发京零&nbsp;字第大120007号<br>互联网出版许可证编号新出网证(京)字150号&nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="https://sale.jd.com/act/pQua7zovWdJfcIn.html" target="_blank">出版物经营许可证</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://misc.360buyimg.com/wz/wlwhjyxkz.jpg" target="_blank">网络文化经营许可证京网文[2014]2148-348号</a>&nbsp;&nbsp;|&nbsp;&nbsp;违法和不良信息举报电话：4006561155<br>Copyright&nbsp;&#169;&nbsp;2004-2017&nbsp;&nbsp;爱尚JD.com&nbsp;版权所有&nbsp;&nbsp;|&nbsp;&nbsp;消费者维权热线：4006067733&nbsp;&nbsp;&nbsp;&nbsp;<a class="mod_copyright_license" target="_blank" href="https://sale.jd.com/act/7Y0Rp81MwQqc.html">经营证照</a><br>爱尚旗下网站：<a href="https://www.jdpay.com/" target="_blank">爱尚支付</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.jcloud.com/" target="_blank">爱尚云</a>
        </div>
        <div class="authentication">
            <a rel="nofollow" target="_blank" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202007080200026">
                <img alt="经营性网站备案中心" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/54b8871eNa9a7067e.png" class="err-product" width="103" height="32">
            </a>
            <script type="text/JavaScript">function CNNIC_change(eleId){var str= document.getElementById(eleId).href;var str1 =str.substring(0,(str.length-6));str1+=CNNIC_RndNum(6); document.getElementById(eleId).href=str1;}function CNNIC_RndNum(k){var rnd=""; for (var i=0;i < k;i++) rnd+=Math.floor(Math.random()*10); return rnd;}</script>
            <a rel="nofollow" target="_blank" id="urlknet" tabindex="-1" href="https://ss.knet.cn/verifyseal.dll?sn=2008070300100000031&amp;ct=df&amp;pa=294005">
                <img onclick="CNNIC_change('urlknet')" oncontextmenu="return false;" name="CNNIC_seal" alt="可信网站" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/54b8872dNe37a9860.png" class="err-product" width="103" height="32" border="true">
            </a>
            <a rel="nofollow" target="_blank" href="http://www.cyberpolice.cn/">
                <img alt="网络警察" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/56a89b8fNfbaade9a.jpg" class="err-product" width="103" height="32">
            </a>
            <a rel="nofollow" target="_blank" href="https://search.szfw.org/cert/l/CX20120111001803001836">
                <img src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/54b8875fNad1e0c4c.png" class="err-product" width="103" height="32">
            </a>
            <a target="_blank" href="http://www.12377.cn/"><img src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/5698dc03N23f2e3b8.jpg" width="103" height="32"></a>
            <a target="_blank" href="http://www.12377.cn/node_548446.htm"><img src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/5698dc16Nb2ab99df.jpg" width="103" height="32"></a>
        </div>
    </div>
</div>
<script type="text/javascript" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/wl.js"></script>

<script type="text/javascript" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/a"></script>
<script type="text/javascript" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/a_003" source="widget"></script>
<script type="text/javascript">
    if(1 == 1){
        $("#aliasArea").show();
    }else{
        $("#aliasArea").hide();
    }
    //性别初始化
    if(2==0){
        $("input[name=sex]").get(0).checked=true;
    }else if(2==1){
        $("input[name=sex]").get(1).checked=true;
    }else if(2==2){
        $("input[name=sex]").get(2).checked=true;
    }

    //生日初始化
    var originalBirthday=''.split("-");
    var originalBirthdayYear=originalBirthday[0];  // 原年份
    var originalBirthdayMonth=parseInt(originalBirthday[1],10);// 原月份
    var originalBirthdayDay=parseInt(originalBirthday[2],10);// 原日期

    //地区初始化
    var originalProvince='';//省ID
    if(originalProvince==0){
        originalProvince=1;
    }
    var originalCity='';//市ID
    if(originalCity==0){
        originalCity=72;
    }
    var originalCounty='';//县区ID
    if(originalCounty==0){
        originalCounty=2799;
    }

    $(".hobul").children().click(
            function () {
                if($(this).attr("class")=="" ||$(this).attr("class")==undefined){
                    $(this).addClass("selected");
                }else{
                    $(this).removeClass("selected");
                }
            }
    )
    var hobbyType='';//兴趣爱好
    if(hobbyType!=null||hobbyType!=""){
        var arr=hobbyType.split(",");
        for(var i=0;i<arr.length;i++){
            $(".hobul").children().each(function() {
                if($(this).val()==arr[i]){
                    $(this).addClass("selected");
                }
            });
        }
    }

</script>
<script type="text/javascript" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/common.js"></script>
<script type="text/javascript" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/anchor.htm"></script>
<script type="text/javascript" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/userInfo.js"></script>
<script type="text/javascript" src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/wl.js"></script>
<!--
<script type="text/javascript" src="/js/updatePetName.js"></script>
-->
<script type="text/javascript">
    (function () {
        var ja = document.createElement('script');
        ja.type = 'text/javascript';
        ja.async = true;
        ja.src = ('https:' == document.location.protocol ? 'https://wlssl' : 'http://wl') + '.jd.com/wl.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ja, s);
    })();
</script>


<script src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/td.js"></script><script src="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/y.htm"></script><div style="width:1px;height:1px;background:#FFF;display:inline-block;position:absolute;left:-2000px;top:-2000px;"><object type="application/x-shockwave-flash" data="%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF_files/JdGiaFP.swf" id="jd_jr_td_flash" width="1" height="6"><param name="movie" value="https://gias.jd.com/JdGiaFP.swf"><param name="allowScriptAccess" value="always"></object></div></body></html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class=" jd_retina"><head>
    <title>收货地址</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link type="text/css" rel="stylesheet" href="/css/userAddress/a_002.css">
	<link type="text/css" rel="stylesheet" href="/css/userAddress/myjd.css" source="combo">
	<link type="text/css" rel="stylesheet" href="/css/userAddress/a.css" source="widget">
    <script type="text/javascript">window.pageConfig = { jdfVersion:'2.0.0' };</script>
	<script type="text/javascript" src="/js/userAddress/a_003"></script>
	<script type="text/javascript" src="/js/userAddress/a"></script>
	<script type="text/javascript" src="/js/layer/layer.js"></script>
<link rel="stylesheet" type="text/css" id="SL_Style" href="/css/userAddress/translator.css"><script type="text/javascript" async="" src="/js/userAddress/loadFa.htm"></script><link charset="utf-8" rel="stylesheet" href="/css/userAddress/area.css"></head><body myjd="_MYJD_comments" menuid="set">
<!--shortcut start-->
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
<!--shortcut end-->
<div id="nav">
	<div class="w">
		<div class="logo">
			<a href="http://www.jd.com/" target="_blank" class="fore1" clstag="homepage|keycount|home2013|Homejdlogo"></a>
			<a href="http://home.jd.com/" target="_self" class="fore2" clstag="homepage|keycount|home2013|Homebackm">我的爱尚</a>
			<a href="http://www.jd.com/" target="_blank" class="fore3" clstag="homepage|keycount|home2013|Homebackjd">返回爱尚首页</a>
		</div>
		<div class="navitems">
			<ul>
				<li class="fore-1">
					<a target="_self" href="http://home.jd.com/" clstag="homepage|keycount|home2013|Homeindex">首页</a>
				</li>
				<li class="fore-3">
					<div class="dl" clstag="click|keycount|myhome|hsz">
						<div class="dt">
							<span class="myjd-set">账户设置</span>
							<b></b>
						</div>
						<div class="dd">

							<a tid="_MYJD_info" clstag="Homeyser" href="/userinfo" target="_self"><span>个人信息</span></a>
							
							<a tid="_MYJD_safe" clstag="Homesafe" href="http://safe.jd.com/user/paymentpassword/safetyCenter.action" target="_self"><span>账户安全</span></a>
                                                        <a tid="_MYJD_wdcm" clstag="Homewdcm" href="http://helper.jd.com/IDPlus/pchtml/size-center.html" target="_self"><span>我的尺码</span></a>
							<a tid="_MYJD_accbinde" clstag="Homezhbd" href="http://safe.jd.com/union/index.action" target="_self"><span>账号绑定</span></a>
							
							
							
							<a tid="_MYJD_comments" clstag="homeadd" href="/userAddress" target="_self"><span>收货地址</span></a>
							<a tid="_MYJD_yyrxx" clstag="homeyyrxx" href="http://patient.jd.com/patientInfo" target="_self"><span>用药人信息</span></a>
							<a tid="_MYJD_share" clstag="Homeshare" href="http://share.jd.com/share/index.html" target="_self"><span>分享绑定</span></a>
							
							<a tid="_MYJD_rss" clstag="Homeedm" href="http://i-mkt.jd.com/subscribe/settings" target="_self"><span>邮件订阅</span></a>
							
							
							
							<a tid="_MYJD_app" clstag="Homeedm" href="http://fw.jd.com/home/auth_list.action" target="_blank"><span>应用授权</span></a>
							
							<a tid="_MYJD_pay" clstag="Homequick" href="https://authpay.jd.com/card/queryBindCard.action" target="_blank"><span>快捷支付</span></a>
							
							<a tid="_MYJD_zpzz" clstag="Homezpzz" href="http://invoice.jd.com/user/userinfo/zpzz.html" target="_self"><span>增票资质</span></a>
<a tid="_MYJD_qyfp" clstag="Homeqyfp" href="http://corp.jd.com/invoice/commonlist" target="_self"><span>企业发票</span></a>							
<a tid="_MYJD_cgxqd" clstag="Homecgxqd" href="http://kw.jd.com/" target="_self"><span>采购需求单</span></a>
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
							<a tid="_MYJD_me" clstag="hgr" href="http://me.jd.com/" target="_blank"><span>个人主页</span></a>
							<a tid="_MYJD_activities" clstag="Homeclub" href="http://luck.jd.com/myjd/myJoinActivity.html" target="_self"><span>我的活动</span></a>
							
							<a tid="_MYJD_circle" clstag="Homejoincircle" href="http://group.jd.com/circle/myjoincircle.htm" target="_self"><span>我的圈子</span></a>
							
							<a tid="_MYJD_mycollect" clstag="Homethread" href="http://group.jd.com/thread/mythread.htm" target="_self"><span>我的帖子</span></a>
						</div>
					</div>
				</li>
				<li class="fore-5">
					<a tid="_MYJD_joy" href="http://joycenter.jd.com/" target="_self" clstag="homepage|keycount|home2013|Homemsg">消息<i>7</i></a>
				</li>
			</ul>
		</div>
		<div class="nav-r">
			<div id="search-2014">
					<ul id="shelper" class="hide" style="display: none;"></ul>
					<div class="form">
						<input onkeydown="javascript:if(event.keyCode==13) search('key');" autocomplete="off" id="key" accesskey="s" class="text blurcolor" value="电饭煲" type="text">
						<button onclick="search('key');return false;" class="button cw-icon" type="button"><i></i>搜索</button>
					</div>
			    </div>
			    <div id="settleup-2014" class="dorpdown">
					<div class="cw-icon">
						<i class="ci-left"></i>
						<i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">6</i>
						<a target="_blank" href="http://cart.jd.com/cart.action">我的购物车</a>
					</div>
					<div class="dorpdown-layer"><div class="spacer"></div><div id="settleup-content"><span class="loading"></span></div></div>
				</div>
			    <div id="hotwords-2014"></div>
		</div>
		<div class="clr"></div>
	</div>
</div>
<div id="container">
    <div class="w">
    	<div id="content">
    		<input id="whereFrom" value="" type="hidden">
	        <div id="sub">
	      		<div id="menu">
	<dl class="fore1">
		<dt id="_MYJD_setting">设置</dt>
		<dd class="fore1_1" id="_MYJD_info">
			<a clstag="homepage|keycount|home2013|Homeyser" href="/userinfo" target="_self">个人信息</a>
		</dd>
		<dd class="fore1_2" id="_MYJD_safe">
			<a clstag="homepage|keycount|home2013|Homesafe" href="http://safe.jd.com/user/paymentpassword/safetyCenter.action" target="_self">账户安全</a>
		</dd>
		<dd class="fore1_2_1" id="_MYJD_wdcm">
			<a clstag="homepage|keycount|home2013|Homewdcm" href="http://helper.jd.com/IDPlus/pchtml/size-center.html" target="_self">我的尺码</a>
		</dd>
		<dd class="fore1_3" id="_MYJD_accbinde">
			<a clstag="homepage|keycount|home2013|Homezhbd" href="http://safe.jd.com/union/index.action" target="_self">账号绑定</a>
		</dd>

		<dd class="fore1_5 curr" id="_MYJD_comments">
			<a clstag="homepage|keycount|home2013|homeadd" href="/userAddress" target="_self">收货地址</a>
		</dd>
		<dd class="fore1_7" id="_MYJD_share">
			<a clstag="homepage|keycount|home2013|Homeshare" href="http://share.jd.com/share/index.html" target="_self">分享绑定</a>
		</dd>
		<dd class="fore1_8" id="_MYJD_rss">
			<a clstag="homepage|keycount|home2013|Homeedm" href="http://i-mkt.jd.com/subscribe/settings" target="_self">邮件订阅</a>
		</dd>

		<dd class="fore1_10" id="_MYJD_app">
			<a clstag="homepage|keycount|home2013|Homeedm" href="http://fw.jd.com/home/auth_list.action" target="_blank">应用授权</a>
		</dd>
		<dd class="fore1_11" id="_MYJD_pay">
			<a clstag="homepage|keycount|home2013|Homequick" href="https://authpay.jd.com/card/queryBindCard.action" target="_blank">快捷支付</a>
		</dd>
		<dd class="fore1_12" id="_MYJD_zpzz">
			<a clstag="homepage|keycount|home2013|Homezpzz" href="http://invoice.jd.com/user/userinfo/zpzz.html" target="_self">增票资质</a>
		</dd>
		<dd class="fore1_13" id="_MYJD_qyfp">
			<a clstag="homepage|keycount|home2013|Homeqyfp" href="http://corp.jd.com/invoice/commonlist" target="_self">企业发票</a>
		</dd>
		<dd class="fore1_14" id="_MYJD_cgxqd">
			<a clstag="homepage|keycount|home2013|Homecgxqd" href="http://kw.jd.com/" target="_self">采购需求单</a>
		</dd>
	</dl>
</div>
	      		<div id="menu-ads">
					<!--广告全部放这里-->
				<div><a href="http://c-nfa.jd.com/adclick?keyStr=z5AXFoIimt1jiDK32+w4mZYsU2J35VXuTltSWhYSnymMImvln2Js0HU3q+mnlAr0LpeSNpALCbss46Fg5S8sQYb7iog8VJRd/DurbeYQwISZI7p/OOlX6LABVlykvJwqEKreO71ORAWsytF/0uCxYDFgqtVQIsa4RC8XpQjjHjk+D/mVzAn04NEAtHjPNboqd0FgwJUXGVtlFQqKPtn3bfnye9VHq6RqX2PxQ5QAHtdfZ45WboFYmAv5JPAR/tMbGFFQk7VLNs32CEQYVcHt/3R4BwJzG3j9pildyVaLoDLiRli0RP2gA04xOTTAOy0r&amp;cv=2.0&amp;url=https://wan.jd.com/yeyou/gogame.html" target="_blank"><img alt="" app="image:poster" src="/image/userAddress/59126ae3N1b306e2c.jpg" width="90" height="70"></a></div><div><a href="http://c-nfa.jd.com/adclick?keyStr=z5AXFoIimt1jiDK32+w4mZYsU2J35VXuTltSWhYSnylnazhmxdLa3X4yEngO8OksEPE4mrvodIb0pQt3Nq6M3H0l2mnTpWOpt2Og91N86xVEzEhpsksRzvrhNzN2x68o37bHkB03pouSl7oT8PgJIM+87kvdhpvFEn6Z5AzX4u8XbwwhfZqZdDbYt3o8BVpWar1uS+Z6ugG3uC3qS9+8pO/NJrYgtiCvbWoi+7E/RJWu4RlsNLRgQGdmICV36VDgjVFNxbfjIUmTpQjuLrsnxeMboCctN2uUrp+XibiQ8cf8PtdVKZvHZJQt4ovvbAIGR7U0M9Nz6PImzVN8EL7bN0oOy+ftjNEEtZWadDFWCjL7hR1UMXp8PtIr9RQ6SxG1j0wu1HOLNNkEsVSl1ptLruAf/UXL/INuyvXr/tKMc5lxVvx5mwAS6+wygE1DChRPMrgFjdsdF0S8i5ZJwmM8yfP+lipwPkmdwMRCFiKaICK4ZsYdmNwFPV1K1ZyWNA0WmjZWEeqvOPYT9OmyFbzAK1roh0lSNMgpGbDBSzIrkVJcGSICYTUNkHz/koBe+MjxFq6wPRsAJ/Dzmfmra9QIAg==&amp;cv=2.0&amp;url=//e.cn.miaozhen.com/r/k=2062587&amp;p=79lLZ&amp;dx=__IPDX__&amp;rt=2&amp;ns=__IP__&amp;ni=__IESID__&amp;v=__LOC__&amp;xa=__ADPLATFORM__&amp;tr=__REQUESTID__&amp;nd=__DRA__&amp;np=__POS__&amp;nn=__APP__&amp;nc=__VID__&amp;nf=__FLL__&amp;ne=__SLL__&amp;o=https://sale.jd.com/act/I5E1uWfiBh0sPgLt.html" target="_blank"><img alt="" app="image:poster" src="/image/userAddress/5a0400b6N332e164c.jpg" width="90" height="70"></a></div></div>
	        </div>
	        <div id="main">
	                <div id="addressList" class="mod-main mod-comm">
	    				<div class="mt">
	<a id="edit-add-dialog" onclick="alertAddAddressDiag()" class="e-btn add-btn btn-5" href="javascript:;">新增收货地址</a>
	<span class="ftx-03">您已创建<span id="addressNum_top" class="ftx-02">2 </span>个收货地址，最多可创建<span class="ftx-02">20</span>个</span>
</div>


	<div class="mc">
		@foreach($list as $k=>$v)
			<div class="sm easebuy-m " id="addresssDiv-138569006">
			<div class="smt">
                <h3>
					{{$v->user_name}} 北京
					<!-- 旧地址不可编辑别名 -->
										<a onclick="modifyAliasTipsByoverseas(138569006,event,0);" id="alias-edit-138569006" class="alias-edit" href="javascript:;"></a>
					<span class="ftx-02 ml10">一键购</span>
                	<!-- 地址服务升级  begin -->
			  	      <input id="hid_upArea_138569006" addressid="138569006" isoldaddress="false" ismapping="false" newprovinceid="0" newcityid="0" newcountyid="0" newtownid="0" newprovincename="" newcityname="" newcountyname="" newtownname="" type="hidden">
                     		                     <!-- 地址服务升级  end -->
                </h3>
                <div class="extra">
					<a onclick="alertDelAddressDiag(138569006);" class="del-btn" href="#none">删除</a>
                </div>
                <div id="alias-form-138569006" class="alias-form hide">
					<div class="alias-new">
						<input class="ipt-text" id="ipt-text-138569006" value="{{$v->user_name}} 北京" onblur="checkConsigneeAlias('ipt-text-138569006')" maxlength="20" type="text">
						<button type="button" class="btn-save" onclick="saveAddessAlias(138569006,event)">保存</button>
					</div>
					<div class="alias-common">
						<div class="ac-tip">建议填写常用名称：</div>
						<div class="ac-con">
							<a href="javascript:setAddressAilas(138569006,'home-138569006');" id="home-138569006" class="item">家里</a>
							<a href="javascript:setAddressAilas(138569006,'parentHome-138569006');" id="parentHome-138569006" class="item">父母家</a>
							<a href="javascript:setAddressAilas(138569006,'company-138569006');" id="company-138569006" class="item">公司</a>
						</div>
						<span class="error-msg" id="error_ipt-text-138569006"></span>
					</div>
				</div>
			</div>
			<div class="smc">
				<div class="items new-items">
					<div class="item-lcol">
					<form action="/userAddress" method="post">
                    	<div class="item">
							<span class="label">收货人：</span>
							<div class="fl">
								<input type="text" name="name" value="{{$v->user_name}}">
							</div>
							<div class="clr"></div>
						</div>
                        <div class="item">
							<span class="label">地址：</span>
							<div class="fl">
								<input type="text" name="address" value="{{$v->address}}">
							</div>
							<div class="clr"></div>
						</div>
						<div class="item">
							<span class="label">手机：</span>
							<div class="fl">
								<input  type="text" name="phone" value="{{$v->user_phone}}">
							</div>
							<div class="clr"></div>
						</div>
                        <div class="item">
							<span class="label">电子邮箱：</span>
							<div class="fl">
								<input type="text" name="email" value="{{$v->email}}">
								<input  type="hidden" name="uid" value="{{$v->uid}}">
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="item-rcol">
                        <div class="item">
							<span class="label">配送方式：</span>
							<div class="fl">
								<div>京配区域内由爱尚快递配送</div>
								<div>京配区域外由第三方快递配送</div>
							</div>
							<div class="clr"></div>
						</div>
						<div class="extra">
							<a class="ml10 ftx-05" href="javascript:makeAddressAllDefaultByoverseas('138569006',0);">设为默认</a>
							<a class="ml10 ftx-05" href="javascript:void(0);" id="tan"><button type="submit">提交</button></a>
						</div>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
					</div>
					<div id="aaa"></div>
						<div class="clr"></div>
				</div>
			</div>
		</div>
		</form>
	@endforeach

	    			</div>
	            </div>
	        </div>
		</div>
</div>

<!--service start-->
<div id="service-2017">
	<div class="w">
		<ol class="slogen">
			<li class="item fore1">
				<i>多</i>品类齐全，轻松购物
			</li>
			<li class="item fore2">
				<i>快</i>多仓直发，极速配送
			</li>
			<li class="item fore3">
				<i>好</i>正品行货，精致服务
			</li>
			<li class="item fore4">
				<i>省</i>天天低价，畅选无忧
			</li>
		</ol>
	</div>
	<div class="jd-help">
		<div class="w">
			<div class="wrap">
				<dl class="fore1">
					<dt>购物指南</dt>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-29.html">购物流程</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-151.html">会员介绍</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-297.html">生活旅行/团购</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue.html">常见问题</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-136.html">大家电</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/index.html">联系客服</a></dd>
				</dl>
				<dl class="fore2">		
					<dt>配送方式</dt>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-81-100.html">上门自提</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-81.html">211限时达</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/103-983.html">配送服务查询</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/109-188.html">配送费收取标准</a></dd>				
					<dd><a target="_blank" href="http://en.jd.com/chinese.html">海外配送</a></dd>
				</dl>
				<dl class="fore3">
					<dt>支付方式</dt>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-172.html">货到付款</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-173.html">在线支付</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-176.html">分期付款</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-174.html">邮局汇款</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-175.html">公司转账</a></dd>
				</dl>
				<dl class="fore4">		
					<dt>售后服务</dt>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/321-981.html">售后政策</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-132.html">价格保护</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/130-978.html">退款说明</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://myjd.jd.com/repair/repairs.action">返修/退换货</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://help.jd.com/user/issue/list-50.html">取消订单</a></dd>
				</dl>
				<dl class="fore5">
					<dt>特色服务</dt>	
					<dd><a target="_blank" href="http://help.jd.com/user/issue/list-133.html">夺宝岛</a></dd>
					<dd><a target="_blank" href="http://help.jd.com/user/issue/list-134.html">DIY装机</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://fuwu.jd.com/">延保服务</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://o.jd.com/market/index.action">爱尚E卡</a></dd>				
					<dd><a rel="nofollow" target="_blank" href="http://mobile.jd.com/">爱尚通信</a></dd>
					<dd><a rel="nofollow" target="_blank" href="http://s.jd.com/">爱尚JD+</a></dd>
				</dl>
				<span class="clr"></span>
			</div>
		</div>
	</div>
</div>
<!--service end-->
<!--footer start-->
<div id="footer-2017">
	<div class="w">
		<div class="copyright_links">
		<p><a href="http://about.jd.com/" target="_blank">关于我们</a><span class="copyright_split">|</span><a href="http://about.jd.com/contact/" target="_blank">联系我们</a><span class="copyright_split">|</span><a href="http://help.jd.com/user/custom.html" target="_blank">联系客服</a><span class="copyright_split">|</span><a href="http://vc.jd.com/cooperation.html" target="_blank">合作招商</a><span class="copyright_split">|</span><a href="http://helpcenter.jd.com/venderportal/index.html" target="_blank">商家帮助</a><span class="copyright_split">|</span><a href="http://jzt.jd.com/" target="_blank">营销中心</a><span class="copyright_split">|</span><a href="http://app.jd.com/" target="_blank">手机爱尚</a><span class="copyright_split">|</span><a href="http://club.jd.com/links.aspx" target="_blank">友情链接</a><span class="copyright_split">|</span><a href="http://media.jd.com/" target="_blank">销售联盟</a><span class="copyright_split">|</span><a href="http://club.jd.com/" target="_blank">爱尚社区</a><span class="copyright_split">|</span><a href="http://sale.jd.com/act/FTrWPesiDhXt5M6.html" target="_blank">风险监测</a><span class="copyright_split">|</span><a href="http://about.jd.com/privacy/" target="_blank">隐私政策</a><span class="copyright_split">|</span><a href="http://gongyi.jd.com/" target="_blank">爱尚公益</a><span class="copyright_split">|</span><a href="http://en.jd.com/" target="_blank">English Site</a><span class="copyright_split">|</span><a href="http://en.jd.com/help/question-58.html" target="_blank">Contact Us</a></p>
	</div>	
		<div class="copyright_info">
			<p><a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002000088" target="_blank">京公网安备 11000002000088号</a><span class="copyright_split">|</span><span>京ICP证070359号</span><span class="copyright_split">|</span><a href="http://img14.360buyimg.com/da/jfs/t256/349/769670066/270505/3b03e0bb/53f16c24N7c04d9e9.jpg" target="_blank">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a><span class="copyright_split">|</span><span>新出发京零&nbsp;字第大120007号</span></p><p><span>互联网出版许可证编号新出网证(京)字150号</span><span class="copyright_split">|</span><a href="http://sale.jd.com/act/pQua7zovWdJfcIn.html" target="_blank">出版物经营许可证</a><span class="copyright_split">|</span><a href="http://misc.360buyimg.com/wz/wlwhjyxkz.jpg" target="_blank">网络文化经营许可证京网文[2014]2148-348号</a><span class="copyright_split">|</span><span>违法和不良信息举报电话：4006561155</span></p><p><span class="copyright_text">Copyright&nbsp;©&nbsp;2004&nbsp;-&nbsp;<em id="copyright_year">2017</em>&nbsp;&nbsp;爱尚JD.com&nbsp;版权所有</span><span class="copyright_split">|</span><span>消费者维权热线：4006067733</span><a href="http://sale.jd.com/act/7Y0Rp81MwQqc.html" target="_blank" class="copyright_license">经营证照</a></p><p><span>爱尚旗下网站：</span><a href="https://www.jdpay.com/" target="_blank">爱尚钱包</a><span class="copyright_split">|</span><a href="http://www.jcloud.com/" target="_blank">爱尚云</a></p>
		</div>
		<p class="copyright_auth"><a class="copyright_auth_ico copyright_auth_ico_1" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202007080200026" target="_blank">经营性网站备案中心</a><script type="text/JavaScript">function CNNIC_change(eleId){var str= document.getElementById(eleId).href;var str1 =str.substring(0,(str.length-6));str1+=CNNIC_RndNum(6); document.getElementById(eleId).href=str1;}function CNNIC_RndNum(k){var rnd=""; for (var i=0;i < k;i++) rnd+=Math.floor(Math.random()*10); return rnd;};(function(){var d=new Date;document.getElementById("copyright_year").innerHTML=d.getFullYear()})();</script><a id="urlknet" class="copyright_auth_ico copyright_auth_ico_2" onclick="CNNIC_change('urlknet')" oncontextmenu="return false;" name="CNNIC_seal" href="https://ss.knet.cn/verifyseal.dll?sn=2008070300100000031&amp;ct=df&amp;pa=294005" target="_blank">可信网站信用评估</a><a class="copyright_auth_ico copyright_auth_ico_3" href="http://www.cyberpolice.cn/" target="_blank">网络警察提醒你</a><a class="copyright_auth_ico copyright_auth_ico_4" href="https://search.szfw.org/cert/l/CX20120111001803001836" target="_blank">诚信网站</a><a class="copyright_auth_ico copyright_auth_ico_5" href="http://www.12377.cn/" target="_blank">中国互联网举报中心</a><a class="copyright_auth_ico copyright_auth_ico_6" href="http://www.12377.cn/node_548446.htm" target="_blank">网络举报APP下载</a></p>
	</div>
</div>
<!--footer end-->
<script type="text/javascript" src="/js/userAddress/wl.js"></script>
<script type="text/javascript" src="/js/userAddress/easybuy.js"></script>
<script type="text/javascript" src="/js/userAddress/a_002" source="widget"></script>
 
</body></html>
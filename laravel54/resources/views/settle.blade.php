<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class=" jd_retina"><head><script async="" charset="GBK" src="css/jiesuanye/helloService.htm"></script>
	<meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0"> 
    <meta name="format-detection" content="telephone=no">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>订单结算页 -京东商城</title>
	<!--结算页面样式-->	
	<link rel="stylesheet" href="/css/jiesuanye/bankList.css" charset="utf-8">
						<link type="text/css" rel="stylesheet" href="/css/jiesuanye/a_002.css" source="widget">
				<link type="text/css" rel="stylesheet" href="/css/jiesuanye/a.css">
		<script type="text/javascript" async="" src="/js/jiesuanye/wl.js"></script><script type="text/javascript" src="/js/jiesuanye/jquery-1.js"></script>
		<script type="text/javascript" src="/css/jiesuanye/a"></script>
		<script type="text/javascript" src="/js/jiesuanye/cookieTrack_v4.js"></script>
	
	<script type="text/javascript" src="/js/jiesuanye/order_002.js"></script>
	<script type="text/javascript" src="/js/jiesuanye/jquery.js"></script>
<link charset="utf-8" rel="stylesheet" href="/css/jiesuanye/tips.css"></head>	<body id="mainframe">
		<!--shortcut start-->
<div id="shortcut-2014">
	<div class="w">
    	<ul class="fl">
    		<li id="ttbar-home"><i class="iconfont"></i><a href="https://www.jd.com/" target="_blank">京东首页</a></li>
    		<li class="dorpdown" id="ttbar-mycity">			<div class="dt cw-icon ui-areamini-text-wrap" style="">				<i class="iconfont"></i>				<span class="ui-areamini-text" data-id="1" title="北京">北京</span> 			</div>			<div class="dd dorpdown-layer">				<div class="dd-spacer"></div>				<div class="ui-areamini-content-wrap"> 					<div class="ui-areamini-content"><div class="ui-areamini-content-list"><div class="item"><a data-id="1" href="javascript:void(0)" class="selected">北京</a></div><div class="item"><a data-id="2" href="javascript:void(0)">上海</a></div><div class="item"><a data-id="3" href="javascript:void(0)">天津</a></div><div class="item"><a data-id="4" href="javascript:void(0)">重庆</a></div><div class="item"><a data-id="5" href="javascript:void(0)">河北</a></div><div class="item"><a data-id="6" href="javascript:void(0)">山西</a></div><div class="item"><a data-id="7" href="javascript:void(0)">河南</a></div><div class="item"><a data-id="8" href="javascript:void(0)">辽宁</a></div><div class="item"><a data-id="9" href="javascript:void(0)">吉林</a></div><div class="item"><a data-id="10" href="javascript:void(0)">黑龙江</a></div><div class="item"><a data-id="11" href="javascript:void(0)">内蒙古</a></div><div class="item"><a data-id="12" href="javascript:void(0)">江苏</a></div><div class="item"><a data-id="13" href="javascript:void(0)">山东</a></div><div class="item"><a data-id="14" href="javascript:void(0)">安徽</a></div><div class="item"><a data-id="15" href="javascript:void(0)">浙江</a></div><div class="item"><a data-id="16" href="javascript:void(0)">福建</a></div><div class="item"><a data-id="17" href="javascript:void(0)">湖北</a></div><div class="item"><a data-id="18" href="javascript:void(0)">湖南</a></div><div class="item"><a data-id="19" href="javascript:void(0)">广东</a></div><div class="item"><a data-id="20" href="javascript:void(0)">广西</a></div><div class="item"><a data-id="21" href="javascript:void(0)">江西</a></div><div class="item"><a data-id="22" href="javascript:void(0)">四川</a></div><div class="item"><a data-id="23" href="javascript:void(0)">海南</a></div><div class="item"><a data-id="24" href="javascript:void(0)">贵州</a></div><div class="item"><a data-id="25" href="javascript:void(0)">云南</a></div><div class="item"><a data-id="26" href="javascript:void(0)">西藏</a></div><div class="item"><a data-id="27" href="javascript:void(0)">陕西</a></div><div class="item"><a data-id="28" href="javascript:void(0)">甘肃</a></div><div class="item"><a data-id="29" href="javascript:void(0)">青海</a></div><div class="item"><a data-id="30" href="javascript:void(0)">宁夏</a></div><div class="item"><a data-id="31" href="javascript:void(0)">新疆</a></div><div class="item"><a data-id="52993" href="javascript:void(0)">港澳</a></div><div class="item"><a data-id="32" href="javascript:void(0)">台湾</a></div><div class="item"><a data-id="84" href="javascript:void(0)">钓鱼岛</a></div><div class="item"><a data-id="53283" href="javascript:void(0)">海外</a></div></div></div> 				</div> 			</div>		</li>
    	</ul>
    	<ul class="fr">
			<li class="fore1" id="ttbar-login">
				<a href="javascript:login();" class="link-login">你好，请登录</a>&nbsp;&nbsp;<a href="javascript:regist();" class="link-regist style-red">免费注册</a>
			</li>
			<li class="spacer"></li>
			<li class="fore2">
				<div class="dt">
					<a target="_blank" href="https://order.jd.com/center/list.action">我的订单</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore3 dorpdown" id="ttbar-myjd">
				<div class="dt cw-icon">
					<!-- <i class="ci-right"><s>◇</s></i> -->
					<a target="_blank" href="https://home.jd.com/">我的京东</a><i class="iconfont"></i>
				</div>
				<div class="dd dorpdown-layer"><div class="dd-spacer"></div><div class="dd-inner"><span class="loading"></span></div></div>
			</li>
			<li class="spacer"></li>
			<li class="fore4">
				<div class="dt">
					<a target="_blank" href="https://vip.jd.com/">京东会员</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore5">
				<div class="dt">
					<a target="_blank" href="https://b.jd.com/">企业采购</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore6 dorpdown" id="ttbar-serv">
				<div class="dt cw-icon">
					<!-- <i class="ci-right"><s>◇</s></i> -->
					客户服务<i class="iconfont"></i>
				</div>
				<div class="dd dorpdown-layer"><div class="dd-spacer"></div><div class="dd-inner"><span class="loading"></span></div></div>
			</li>
			<li class="spacer"></li>
			<li class="fore7 dorpdown" id="ttbar-navs">
				<div class="dt cw-icon">
					<!-- <i class="ci-right"><s>◇</s></i> -->
					网站导航<i class="iconfont"></i>
				</div>
				<div class="dd dorpdown-layer"><div class="dd-spacer"></div><div class="dd-inner"><span class="loading"></span></div></div>
			</li>
			<li class="spacer"></li>
			<li class="fore8 dorpdown" id="ttbar-apps">
				<div class="dt cw-icon">
					<!-- <i class="ci-left"></i> -->
					<!-- <i class="ci-right"><s>◇</s></i> -->
					<a target="_blank" href="https://app.jd.com/">手机京东</a>
				</div>
						<div class="dd dorpdown-layer">				<div class="dd-spacer"></div>				<div class="dd-inner" id="ttbar-apps-main"><div class="dd-spacer"></div><div class="dd-inner"><span class="loading"></span></div>				</div>			</div>		</li>
    	</ul>
		<span class="clr"></span>
    </div>
</div>
<div id="o-header-2013"><div id="header-2013" style="display:none;"></div></div>
<!--shortcut end-->
<!--shortcut end-->


<div class="w w1 header clearfix">
    <!--<div id="logo">
                    <a href="http://www.jd.com/" class="link1" target="_blank"><img src="//misc.360buyimg.com/lib/img/e/logo-201305.png" alt="京东商城"></a>
                <a href="#none" class="link2"><b></b>"结算页"</a>
    </div>-->
	    	<div id="logo-2014">
    		<a href="http://www.jd.com/" class="logo" target="_blank"></a>
    		<a href="#none" class="link2"><b></b>"结算页"</a>
    	</div>
</div>

<!-- /header -->
<!--/ /widget/header/header.tpl -->

<div id="consignee_back" name="consignee_back" style="display:none"></div>
<div id="consignee_back_action" name="consignee_back_action" style="display:none"></div>
<div id="part-invoice_back" name="part-invoice_back" style="display:none"></div>
<div id="part-invoice_back_action" name="part-invoice_back_action" style="display:none"></div>
<div id="payment-ship_back_action" name="payment-ship_back_action" style="display:none"></div>
<div id="payment-ship_back" name="payment-ship_back" style="display:none"></div>
<input name="beforePickSiteId" id="beforePickSiteId" type="hidden"><!--自提点-->
<input name="beforePickDate" id="beforePickDate" type="hidden"><!--自提时间-->
<input name="beforePickSiteNum" id="beforePickSiteNum" type="hidden"><!--默认5个-->
<input name="beforePickRegionId" id="beforePickRegionId" value="-1" type="hidden"><!--搜索区域-->
<input name="beforePickSelRegionid" id="beforePickSelRegionid" type="hidden"><!--搜索区域-->
<input id="beforePickName" name="beforePickName" type="hidden">
<input id="sopCartJson" value="[{&quot;id&quot;:5181398,&quot;num&quot;:1,&quot;shopId&quot;:0,&quot;cid&quot;:655,&quot;gift&quot;:false}]" type="hidden">
<input id="showInvoiceSeparate" value="true" type="hidden"><!-- 是否支持货票分离 -->
<input id="invoiceSeparateSwitch" value="1" type="hidden"><!-- 货票分离开关值 -->
<input id="hasBigItem" value="false" type="hidden">
<input id="hasGiftCardSku" value="false" type="hidden">
<input id="sopNotPutInvoice" value="false" type="hidden">
<input id="isChangeItemByArea" value="false" type="hidden">
<input id="hasTang9" value="false" type="hidden">
<input id="isHasSam" value="false" type="hidden">
<input id="needPay" value="2499.00" type="hidden">
<input id="consignee_id" name="consignee_id" value="304105697" type="hidden">
<input id="hideAreaIds" value="1-2901-4136-0" type="hidden">
<input id="isPresale" value="false" type="hidden">
<input id="presaleStepPay" value="" type="hidden">
<input id="flowType" value="" type="hidden">
<input id="flowId" value="" type="hidden">
<input id="cur_payid" value="4" type="hidden">
<input id="showCheckCode" value="false" type="hidden">
<input id="reset_promise_311" value="0" type="hidden">
<input id="resetFlag" value="0000000000" type="hidden">
<input id="easyBuyFlag" value="" type="hidden">
<input id="ui-dialog-close" value="" type="hidden">
<input id="overseaPurchaseCookies" value="" type="hidden">
<input id="isHasSimCard" value="false" type="hidden">
<input id="ignorePriceChange" value="0" type="hidden">
<input id="canBaitiaoDetail" value="true" type="hidden">
<input id="getEquipInfo" value="true" type="hidden">
<input id="selfPickShutDownFlag" value="1" type="hidden">
<input id="selfPickOptimize" value="1" type="hidden">
<input id="TrackID" name="TrackID" value="1NEqvonsVPS3ca6TOQxzD8oFUWNIa-DjjxGi4hzSbuuhn4XKLx1jemhZOkXBvmN_VhqG8Vh_-0v5gohT4CQ8uvc8236G2_vth9Su6eFjBuR0PHzQuHSfxCAvLNvm91duw" type="hidden">
<input id="invokeNewCouponInterface" name="invokeNewCouponInterface" value="true" type="hidden">
<input id="submitButtonABTest" value="0" type="hidden">
<input id="eid" value="QYGVUHOQNDITCA3KYVZL3Z66WMLWXTBQIMDGELUW5K4AG6K7XJJ53B67O6MDPVWMJNUULSAWTOIRTLSHHEMWNN5OH4" type="hidden">
<input id="fp" value="2672b2c945e9f2b30668d10a18b7fb34" type="hidden">
<input id="baitiaoPayRequest" value="plan=1" type="hidden">
<input id="baitiaoPayRepayDateRequest" value="repayDate=" type="hidden">
<input id="jdpy_cardInfo" value="nocard" type="hidden">
<form id="direct_pay" action="https://cashier.jd.com/direct/directPay.action" method="post">
	<input name="orderId" type="hidden">
	<input name="toType" type="hidden">
	<input name="orderType" type="hidden">
	<input name="directPayInfoJson" type="hidden">
	<input name="payMethod" type="hidden">
	<input name="key" type="hidden">
	<input name="countdownTime" type="hidden">
	<input name="orderSubmitTime" type="hidden">
	<input name="sendPayDict" type="hidden">
</form>
<input id="lastneedPay" value="2499.00" type="hidden">
<input id="btNeedPay" value="2499.00" type="hidden">
<input id="isNewVertual" name="isNewVertual" value="true" type="hidden">
<input id="isBestCoupon" name="isBestCoupon" type="hidden">
<input id="agreeNoRefundInMain" value="false" type="hidden">

<input id="allFreightWeight" value="0.440kg" type="hidden">
<input id="overFreightWeight" value="" type="hidden">
<input id="copywritingContent" value="0" type="hidden">
<input id="bigItemCopywritingContent" value="0" type="hidden">
<input id="normalCopywritingContent" value="0" type="hidden">
<input id="calendarCopywritingContent" value="0" type="hidden">
<input id="needForJZD" value="0" type="hidden">
<input id="needForJZDcalendar" value="0" type="hidden">
<input id="supportSelfPick" value="1" type="hidden">
<input id="workdayContent" value="温馨提醒：您的收货时间为工作日，请做好收货准备哦" type="hidden">
<input id="weekendContent" value="温馨提醒：您的收货时间为双休日，请做好收货准备哦" type="hidden">
<input id="supportByDay" value="1" type="hidden">
<input id="supportSop" value="1" type="hidden">
<input id="allSxFreightWeight" value="" type="hidden">
<input id="allWmFreightWeight" value="" type="hidden">
<input id="overSxFreightWeight" value="" type="hidden">
<input id="overWmFreightWeight" value="" type="hidden">
<input id="totalFreightWeightShow" value="0.440" type="hidden">
<input id="topTitleInfoUsed" value="1" type="hidden">
<input id="topTitleInfoFor315" value="1" type="hidden">
<input id="riskControl" value="D0E404CB705B9732C17B9E3D68D53D2771CCFE7D269635EC9CBBD3AE3F85151FE1AE43DA7C7C0384" type="hidden">
<input id="newReplacedFlow" value="true" type="hidden">
<input id="hongKongId" value="52993" type="hidden">
<input id="taiWanId" value="32" type="hidden">
<input id="overSeasId" value="53283" type="hidden">
<div class="replacedSkus hide">[]</div>
<input id="plusStatus" value="0" type="hidden">
<input id="totalPrice" value="0" type="hidden">
<div class="plusInfoConfig hide">{"plusInfos":[{"content":"开通PLUS会员，享受商品
会员价","url":"http://plus.jd.com/order
/page","clstag":"pageclick|keycount|201601152|50","typeContent":"立即开
通","classInfo":null,"configId":0},{"content":"开通PLUS会员，享受商品会员
价","url":"http://plus.jd.com/order
/page","clstag":"pageclick|keycount|201601152|49","typeContent":"立即开
通","classInfo":null,"configId":0},{"content":"开通PLUS会员，享受商品会员
价","url":"http://plus.jd.com/order
/page","clstag":"pageclick|keycount|201601152|48","typeContent":"立即开
通","classInfo":null,"configId":0},{"content":"开通PLUS会员，每月送5张自营运费
券","url":"http://plus.jd.com
/index","clstag":"pageclick|keycount|201601152|47","typeContent":"立省运
费","classInfo":null,"configId":0},{"content":"还在花运费？每月领5张自营运费
券","url":"http://plus.jd.com/order
/page","clstag":"pageclick|keycount|201601152|50","typeContent":"立即开
通","classInfo":null,"configId":0},{"content":"开通会员PLUS，享受商品会员
价","url":"http://plus.jd.com
/index","clstag":"pageclick|keycount|201601152|50","typeContent":"立省运
费","classInfo":null,"configId":0}],"classInfo":"com.jd.trade.app.common.config.PlusConfig","configId":26283}</div>
<input id="totalFreight" value="0" type="hidden">
<div class="plusProductList hide">[]</div>
<input id="closeRefreshSelfpick" value="0" type="hidden">
<input id="enterPriseUser" value="false" type="hidden">
<input id="closeEnterPrisePayment" value="false" type="hidden">
<input id="useBestCoupons" value="0" type="hidden">
<input id="crossRegionalFee" value="0" type="hidden">
<div class="crossSku hide">null</div>
<!-- main -->
<div id="container">
    <div id="content" class="w">
        <!-- <div class="m"> -->
		<div class="orderInfo-tip hide" style="display: none;">
			<span class="wicon"></span>
			<span class="ftx-03"> 温馨提示：订单中存在不支持7天无理由退换商品，请确认相关商品信息后提交订单。</span>
			<span class="cls-btn" onclick="closeorderInfotip()">x</span>
		</div>
            <div class="checkout-tit">
                <span class="tit-txt">填写并核对订单信息</span>
                                                              </div>
                <div class="checkout-steps">
                    <!--  /widget/consignee-step/consignee-step.tpl -->
                    <div class="step-tit">
                        <h3>收货人信息</h3>
                        <div class="tips-new-white hide" id="tariffTip"><b></b><span>目的国/地区如产生关税费用、需客户自行承担、请知悉</span>
                        </div>
                        <div class="extra-r">

							<div id="timeoutBox" style="display: none" class="checkout-steps">
								<form action="/settle/0" method="post">
									{{ csrf_field() }}
									收货人：<input type="text" name="username" style="width:180px;"/><br />
									详细地址：<input type="text" name="dizhi" style="width:180px;"/><br />
									手机号码：<input type="text" name="phone" style="width:180px;"/><br />
									邮箱地址：<input type="text" name="email" style="width:180px;"/><br />
									<input type="submit" value="保存收货人信息" />
								</form>
							</div>
							<a href="###" id="tan" class="ftx-05 J_consignee_global" >新增收货地址</a></div><div class="timeoutrighttxt">
<script  type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script  type="text/javascript" src="/js/layer/layer.js"></script>
<script>
	$(document).ready(function(){
		$('#tan').on('click', function(){
			layer.open({
				type: 1,
				title:'添加收货人地址',
				area: ['500px','310px'],
				shadeClose: false,
				content: $('#timeoutBox')
			});
		})
	});
</script>
		<input id="del_consignee_type" value="0" type="hidden">
	</div>
</div>
<div class="step-cont">
	<div id="consignee-addr" class="consignee-content">
		<div class="consignee-scrollbar">
			<div class="ui-scrollbar-main">
				<div class="consignee-scroll">
					<div class="consignee-cont" id="consignee1" style="height: 42px;">
																	<ul id="consignee-list">

<li class="ui-switchable-panel ui-switchable-panel-selected" style="display: list-item;" id="consignee_index_304105697" selected="selected" c_li_custom_label="consignee_li" >
	<div class="addr-detail" style="overflow:hidden;border:0px solid gray;width:600px;height:30px;" >
		<!--yanwenqi 全球购添加idcard 不是国际购的要不要显示？ -->
		@if(!empty($userInfo))
				 <span class="addr-name" limit="6" title="{{$userInfo->user_name}}">{{$userInfo->user_name}}</span>
		 <span class="addr-info" limit="45" title="">{{$userInfo->address}}</span>
		 <span class="addr-tel">{{$userInfo->user_phone}}</span>
						<span class="addr-default">默认地址</span>
			@else
			<script>alert('请填写收货地址')</script>
		@endif
			</div>

	<div id="timeoutBox2" style="display: none" class="checkout-steps">
		<form action="/up" method="post">
			{{ csrf_field() }}
			收货人：<input type="text" name="username" value="{{$userInfo->user_name}}" style="width:180px;margin-bottom: 20px;" /><br />
			详细地址：<input type="text" name="dizhi" value="{{$userInfo->address}}" style="width:180px;margin-bottom: 20px;"/><br />
			手机号码：<input type="text" name="phone" value="{{$userInfo->user_phone}}" style="width:180px;margin-bottom: 20px;"/><br />
			邮箱地址：<input type="text" name="email" value="{{$userInfo->email}}" style="width:180px;margin-bottom: 20px;"/><br />
			<input type="submit" value="保存收货人信息" />
		</form>
	</div>
	<a href="javascript:viod(0)" id="tan2" class="ftx-05 J_consignee_global" style="margin-left:260px">编辑</a><div class="timeoutrighttxt"></div>
</li>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#tan2').on('click', function(){
				layer.open({
					type: 1,
					title:'编辑收货人信息',
					area: ['500px','310px'],
					shadeClose: false,
					content: $('#timeoutBox2')
				});
			})
		});
	</script>
  </ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div>
<div id="cons" style="margin-left:20px;" >
	@if(!empty($userList))
	@foreach($userList as $v)
		@if($v->id !== $userInfo->id)
		<div  class="addr-detail"  >
		<input type="radio" name="xx">
		<span class="addr-name" limit="6" title="{{$v->user_name}}">{{$v->user_name}}</span>
		<span class="addr-info" limit="45" title="">{{$v->address}}</span>
		<span class="addr-tel">{{$v->user_phone}}</span>
		<a href="###" id="{{$v->id}}" class="global" style="margin-left:850px">删除</a>
		<a href="###" id="edita{{$v->id}}" onclick="getInfo({{$v->id}})" class="ftx-05 J_consignee_global" style="margin-left:850px">编辑</a>
			<a href="###" id="" class="ftx-05 J_consignee_global" style="margin-left:850px">设为默认地址</a>
		</div>
		@endif
	@endforeach
		@else
		<script>alert('请填写收货地址')</script>
		@endif
</div><br />
<span id="sp" >更多地址...</span><b></b>
		</div>
<div id="timeoutBox3" style="display: none" class="checkout-steps">
	<form action="/updateTwo" method="post" >
		{{ csrf_field() }}
		<input type="hidden" name="regId" value="" id="regId">
		收货人：<input type="text" name="username" value="" id="name" style="width:180px;margin-bottom: 20px;" /><br />
		详细地址：<input type="text" name="dizhi" value="" id="dizhi" style="width:180px;margin-bottom: 20px;"/><br />
		手机号码：<input type="text" name="phone" value="" id="phone" style="width:180px;margin-bottom: 20px;"/><br />
		邮箱地址：<input type="text" name="email" value="" id="email" style="width:180px;margin-bottom: 20px;"/><br />
		<input type="submit" value="保存收货人信息" />
	</form>
</div>
<script type="text/javascript">
	//修改更多地址
	function getInfo(id){
		$(document).ready(function(){
			$('#edita'+id).on('click', function(){
				layer.open({
					type: 1,
					title:'编辑收货人信息',
					area: ['500px','310px'],
					shadeClose: false,
					content: $('#timeoutBox3')
				});
			});
			$.ajax({
				url:'/update/'+id,
				type:'get',
				dataType:'json',
				success:function(json){
					$("#name").val(json['user_name']);
					$("#dizhi").val(json['address']);
					$("#phone").val(json['user_phone']);
					$("#email").val(json['email']);
					$("#regId").val(json['id']);
				}
			});
		});
	}
	//删除
	$(document).ready(function() {
		$("#cons").on("click", ".global", function () {
			var id = $(this).attr("id");
			if(confirm("确认删除？")) {
				$.ajax({
					type: "get",
					url: "delete/"+id,
					dataType:'json',
					success(){
						alert('删除成功！');
						window.location.reload("settle");
					}
				});
			}
		});
	});
</script>
<script>
	$(document).ready(function(){
		$("#cons").toggle();
		$('#sp').click(function(){
			$("#cons").toggle();
		});
	});
</script>


                                                    <input id="consigneeList_giftSenderConsigneeMobile" value="" type="hidden">
                            <input id="consigneeList_giftSenderConsigneeName" value="" type="hidden">
                                            </div>
                    <!--/ /widget/consignee-step/consignee-step.tpl -->
                    <div class="hr"></div>
                    <!--/ /widget/shopping-list/shopping-list.tpl -->
                    <div id="shipAndSkuInfo">
                        <div id="payShipAndSkuInfo">
                            <div class="step-tit">
  <h3>支付方式</h3>
</div>
<div type="hide"></div>
<input id="totalPriceVender" value="0" type="hidden">
<input id="totalNumVender" value="0" type="hidden">
<div class="plusProductListVender hide">[]</div>
<input id="crossRegionalFeeVender" value="" type="hidden">
<div class="crossSkuVender hide"></div>
<div class="step-cont">
  <div class="payment-list" id="">
    <div class="list-cont">
          <ul id="payment-list">
			  <input type="radio" name="zhifu" >货到付款
			  <input type="radio" name="zhifu" >在线付款
			  <input type="radio" name="zhifu" >公司转账
			  <input type="radio" name="zhifu" >邮局汇款
				<li id="payment-less" class="hide">
          <div class="payment-item-on" clstag="pageclick|keycount|PaymentLead__2016030411|10">
            <span>收起</span><b></b>
          </div>
        </li>
        <li id="payment-more">
          <div class="payment-item-off" clstag="pageclick|keycount|PaymentLead__2016030411|9">
            <span>更多</span><b></b>
          </div>
        </li>


<script>
$('.online-payment')
.hover(function(){
	$(this).addClass('payment-item-hover');
},function(){
	$(this).removeClass('payment-item-hover');
}); 
if($("#payment-list li").length<=4){
	$('#payment-less').hide();
	$('#payment-more').hide();
	var payid=[5,2,8];
	for(var i in payid){
		$("#payment-list div[payid="+payid[i]+"]").show();
	}
}
$('.payment-item-on').click(function(){
	$('#payment-less').hide();
	$('#payment-more').show();
	var payid=[5,2,8];
	for(var i in payid){
		var payment = $("#payment-list div[payid="+payid[i]+"]");
		if(!payment.hasClass("item-selected")){
			payment.hide(100);
		}
	}
});
$('.payment-item-off').click(function(){
	$('#payment-less').show();
	$('#payment-more').hide();
	var payid=[5,2,8];
	for(var i in payid){
		var payment = $("#payment-list div[payid="+payid[i]+"]");
		if(!payment.hasClass("item-selected")){
			payment.show(100);
		}
	}
});
</script>
              </ul>
          </div>
  </div>
</div>
<div class="hr"></div>
<!--/ /widget/payment-step/payment-step.tpl -->
<div class="step-tit">
  <h3>送货清单</h3>
  <div class="extra-r">
  	<a class="price-desc" id="price-desc" href="#none" data-tips="因可能存在系统缓存、页面更新导致价格变动异常等不确定性情况出现，商品售价以本结算页商品价格为准；如有疑问，请您立即联系销售商咨询。">
  		<i></i>&nbsp;价格说明
  	</a>
          <a href="/cart/{{Auth::user()->id}}" id="cartRetureUrl" class="return-edit ftx-05" clstag="pageclick|keycount|trade_201602181|15">返回修改购物车</a>
      </div>
</div>
<div class="step-cont" id="skuPayAndShipment-cont">
  <!--添加商品清单  zhuqingjie -->
  <div class="shopping-lists" id="shopping-lists"> 
           <!--定义大商品清单LIST-->
    	<div class="shopping-list ABTest">
      <div class="goods-list">
		      <!--购物车单品商品-->
                <!--一般套装商品-->
     <!--满返套装商品-->
   <!--满赠套装商品-->
     <!--配送方式-->
    <div class="goods-tit">
      <h4 class="vendor_name_h" id="0">商家：京东自营</h4>
    </div>

      <!--单品开始-->
      <div class="goods-items">            </div>       
      <!--单品结束-->			         
      <!--一般套装开始-->
           <!--一般套装结束-->
     <!--满返套装开始-->
          <!--满返套装结束-->
     <!--满赠套装开始-->
                       <div class="goods-items">
                        <div class="goods-suit goods-last">
                          <div class="goods-suit-tit">

              </div>
							<div class="goods-item goods-item-extra" goods-id="5181398" sx-type="0">

	@foreach($cartList as $v)
	<div class="p-img">
		<a target="_blank" href="http://item.jd.com/5181398.html?dist="><img src="{{"/".$v->goods_img}}" alt=""></a>
	</div>
	<div class="goods-msg">
	  <div class="goods-msg-gel">
				<div class="p-name">
					 <a href="http://item.jd.com/5181398.html?dist=" target="_blank">
						  {{$v->goods_text}}
					 </a>
				</div>
					<div class="p-price">
						<strong class="jd-price">
							  {{$v->one_price}}
						</strong>
				  <span class="p-num">×{{$v->goods_count}}
																				  </span>
					<span id="pre-state" class="p-state" skuid="5181398">
						@if($v->all_count > 0)
							有货
						@endif
					</span>
														<span class="p-weight">{{$v->goods_weight}}</span>

																										  </div>
	 </div>
					</div>
	@endforeach
<div>
				  <i class="p-icon p-icon-w sevenicon"></i><span class="ftx-07 withouthk seven">支持7天无理由退货</span>
</div>


	<div class="clr"></div>
	 </div>
			   </div>
</div>
<div class="hide service-items ml20 mr20" style="display: block;">
<div class="hide service-item" id="vender_freight_insurance_0" style="display: block;">
	<div class="hr"></div>
	{{--<span class="service-desc">退换无忧</span>--}}
	{{--<strong class="service-price">￥0.00</strong>--}}
</div>
</div>
</div><!--goods-list 结束-->
      <div class="dis-modes" id="11">
		      <!--购物车单品商品-->
		              <!--一般套装商品-->
		   <!--满返套装商品-->
    	 <!--满赠套装商品-->
        <!--以下为京东配送方式-->
           <!--配送方式-->
         <!--配送方式-->
         <!--配送方式-->
        
        <!-- 实物商品搭售虚拟商品 -->
                               <div class="mode-item mode-tab">

                        					<div class="mode-tab-con  hide" id="jd_shipment">  
                                                            <ul class="mode-list">
                                                    						         <li id="shipment_times" class="delivery-info-li-none-border">     										   										
                                           <div class="fore1" id="jd_shipment_calendar_date"><span class="ftx-03">配送时间：</span>工作日、双休日与节假日均可送货</div>
                                           <div class="fore2 hide" id="jdshipdate_eidt_id" onclick="doEdit311Time()" clstag="pageclick|keycount|trade_201602181|14"><a href="#none" class="ftx-05">修改</a></div>
                                           <div id="forcedChoice-sales" class="fresh-tip-cont hide">
                                               <span class="fl fresh-tip-left"><i></i>京准达</span>
                                               <span class="fl fresh-tip-right">限时免费，准时送达</span>
                                           </div>
                                         </li>
                                         <li id="forcedChoice-times" style="display:none">
                                 			<a href="#none" onclick="doEdit311Time(3)" class="fl ftx08 mr15 edit-delivery-time-fresh"><i class="date-icon mr5"></i>选择配送时间</a>
                              			    <span class="fl fresh-tip-left"><i></i>京准达</span>
                              			    <span class="fl fresh-tip-right">限时免费，准时送达</span>
                          			     </li>
                                         <li class="delivery-info-li" id="delivery-info-li-zxj" style="display: none;">
							                  <span class="delivery-tips fr">
												  <i class="d-ico fl mr5"></i><i class="d-arr"></i>							                      <a id="zxj_show_id" href="#none" class="mr5 hide" onclick="doEdit311Time(3)">京准达</a>
							                      <a id="311_show_id" href="#none" class="mr5 hide" onclick="doEdit311Time(1)">标准达</a>
							                      <a id="411_show_id" href="#none" class="mr5 hide" onclick="doEdit311Time(2)">极速达</a>配送服务全面升级							                  </span>
							             </li>	
							             <li style="display:none" id="item_installDate">
        									 <div class="fore1" id="jd_install_date_div">
							                      <span class="mode-label ftx-03">安装时间：</span>
							                      <div class="mode-infor">
							                      </div>    
						                     </div>
        									 <div class="fore2" onclick="doEditJdInstallDate('0')"><a href="#none" class="ftx-05 edit-install-time">修改</a></div>
        								 </li>
		                                 <li class="buyer_insurance hide" id="0" style="display: block;">
                                            <div class="foreAll">
                                                <span class="mode-label ftx-03">退换无忧：</span>
                                                <div class="mode-infor J-mode-infor-tips">
                                                    <label>
                                                        <input id="vender_0" class="fl buyer_freight_insurance" onclick="selectBuyerFreightInsurance(this, 0)" type="checkbox">
                                                        <span id="0" class="fl mode-infor-con buyer_insurance">自签收后7天内退货，15天内换货，可享1次上门取件服务<i class="arrow-down"></i></span>
                                                        <em class="fr">￥0.50</em>
                                                        <span class="mode-infor-tips mode-infor-tips-sec" style="display: none;"><i id="0" class="d-arr d-arr-jd"></i>自签收后7天内退货，15天内换货，可享1次上门取件服务，此服务不再单独收费。不在京东取件范围内可享受相应运费补偿。<a target="_blank" href="https://help.jd.com/user/issue/480-1693.html">查看详情</a></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
    								</ul>
                                       <div class="tips-618 hide tips-618-for-normal" style="z-index:9">
                                           <div class="tips-con">
                                               <i>&nbsp;</i>
                                               <p class="tips-m">
                                                   双11大促恰逢周末，请确认好收货地址和时间以保证货物及时送达。
                                               </p>
                                           </div>
                                       </div>
    							</div>
    						   <!--隐藏自提点开始-->
								<div id="picksite_hidediv" class="hide"><!-- 选择自提点 -->

<div class="form picksite-box">
	<div class="item">
		<span class="label">选择区域：</span>
		<div class="fl">
			<select name="pickRegion" id="pickRegion_select" class="selt pickRegion_select" onchange="doEditPickReigon(this)">
						   <option value="-1" selected="selected">全部区域</option>
						   <option value="1:2901:4136:0">城区</option>
						</select>
		</div>
	</div>
	<div class="item">
		<span class="label">选择自提点：</span>
		<div class="fl">
			<div class="pick-sites pick-sites-more" id="pick-sites">
				<!--循环取出自提点信息开始-->
													<!--选中的自提点-->
											<!--可用自提点-->
    				    <div pickid="899" pickname="昌平站" class="site-item site-item-selected">
    						<div class="site-in-short" style="cursor:pointer" onclick="doSelectPicksite(this)">
    							昌平站 
																																    							<b></b>
    						</div>
    						<div class="field">
    							<span class="tip">地址：北京市昌平区城区火炬街18号对面
 010-56148820</span>
    							<a href="" target="_blank" class="ftx-05 map-link">详细地图</a>  
    						</div>
    						<div class="clr"></div>
    					</div>
										
					
									<!--选中的自提点-->
											<!--可用自提点-->
    				    <div pickid="257287" pickname="北京宁馨苑站" class="site-item">
    						<div class="site-in-short" style="cursor:pointer" onclick="doSelectPicksite(this)">
    							北京宁馨苑站 
																																    							<b></b>
    						</div>
    						<div class="field">
    							<span class="tip">地址：北京市昌平区宁馨园小区南门底商海城锦绣家园装饰 15510736203</span>
    							<a href="" target="_blank" class="ftx-05 map-link">详细地图</a>  
    						</div>
    						<div class="clr"></div>
    					</div>
										
					
									<!--选中的自提点-->
											<!--可用自提点-->
    				    <div pickid="3401" pickname="北京南邵站" class="site-item">
    						<div class="site-in-short" style="cursor:pointer" onclick="doSelectPicksite(this)">
    							北京南邵站 
																																    							<b></b>
    						</div>
    						<div class="field">
    							<span class="tip">地址：北京昌平区南邵镇何营村后街98号 010-60733112</span>
    							<a href="http://help.jd.com/help/question-1006.html#beijingnanshaozhan" target="_blank" class="ftx-05 map-link">详细地图</a>  
    						</div>
    						<div class="clr"></div>
    					</div>
										
					
									<!--选中的自提点-->
											<!--可用自提点-->
    				    <div pickid="156175" pickname="北京安福站" class="site-item">
    						<div class="site-in-short" style="cursor:pointer" onclick="doSelectPicksite(this)">
    							北京安福站 
																																    							<b></b>
    						</div>
    						<div class="field">
    							<span class="tip">地址：北京市昌平区昌平东关朝凤庵村西口公厕对面113号
 010-60785312</span>
    							<a href="http://help.jd.com/o/help/question-1006.html#bjztd1" target="_blank" class="ftx-05 map-link">详细地图</a>  
    						</div>
    						<div class="clr"></div>
    					</div>
										
					
								<!--循环取出自提点信息结束-->
			</div>
			<div class="pick-more">
				<span class="selfpick_more_link open ftx05 hide" style="cursor:pointer;" onclick="open_MorePicksite(this)">展开更多<b></b></span>
			</div>
		</div>
	</div>
	<div class="item">
		<span class="label">&nbsp;</span>
		<div class="fl">
			<div class="op-btns">
				<a class="btn-9" onclick="doSaveDialogPickSite()">保存自提点</a>
				<a class="btn-9 ml10" href="javascript:jQuery.closeDialog();">取消</a>
			</div> 
			<div class="ftx-03 mt10">温馨提示：</div>
			<div class="ftx-03">1、自提时付款，支持现金、POS刷卡、支票支付 <a class="ftx-05" href="http://help.jd.com/user/issue/100-181.html" target="_blank">查看自提流程</a></div>
            <div class="ftx-03"><span class="ftx-04">2、京东将根据您的收货地址显示其范围内的自提点，请确保您的收货地址正确填写。 </span></div>
		</div>
	</div>
</div>
</div>
    						   <!--隐藏自提点结束-->	
							   <!--自提点配送时间开始-->
							   <div id="pickSiteShipDate" class="hide">	<div class="date-box">
		<div class="date-list">
			<ul>
			  			       				       <li class="li_pick_shipment" date="2017-11-01" picksite_date="11-01" picksite_weekday="今天" onclick="doSwithPickShipDate('',this)">
						   11-01
						   <span class="data">今天</span>
					  </li>
			       			  			       				       <li class="li_pick_shipment" date="2017-11-02" picksite_date="11-02" picksite_weekday="周四" onclick="doSwithPickShipDate('',this)">
						   11-02
						   <span class="data">周四</span>
					  </li>
			       			  			       				       <li class="li_pick_shipment" date="2017-11-03" picksite_date="11-03" picksite_weekday="周五" onclick="doSwithPickShipDate('',this)">
						   11-03
						   <span class="data">周五</span>
					  </li>
			       			  			       				       <li class="li_pick_shipment" date="2017-11-04" picksite_date="11-04" picksite_weekday="周六" onclick="doSwithPickShipDate('',this)">
						   11-04
						   <span class="data">周六</span>
					  </li>
			       			  			       				       <li class="li_pick_shipment" date="2017-11-05" picksite_date="11-05" picksite_weekday="周日" onclick="doSwithPickShipDate('',this)">
						   11-05
						   <span class="data">周日</span>
					  </li>
			       			  			</ul>
		</div>
		<div class="ftx-03 mt10">
			温馨提示：<br>
			1、您选择的时间可能会因库存不足等因素导致订单延迟，请您谅解！<br>
			2、我们会在您选定提货日期的前一天处理您的订单，在此之前您的订单处于暂停状态。
	
		</div>
		<div class="op-btns mt20 ac">
			<a href="#none" onclick="doSavePickShipDate('')" class="btn-9">保存</a>
			<a href="javascript:jQuery.closeDialog();" class="btn-9 ml10">取消</a>
		</div>
	</div>

</div>
							   <!--自提点配送时间结束-->
							   <!--非大件对应商品清单开始-->
							   <div class="hide" id="jdItem_surpportSku">
    						        								<div class="tooltip-goods">
    									<div class="tooltip-tit">
    										以下商品为<strong>非大件商品</strong>
    									</div>
    									<div class="goods-items">
    									 	    											    											    											<div class="goods-item">
    												<div class="p-img">
    													<a href="#none"><img src="/images/jiesuanye/593e4f06N4b38b001_002.jpg" alt=""></a>
    												</div>
    												<div class="p-name">
    													<a href="#none">荣耀9 全网通 高配版 6GB+64GB 琥珀金 移动联通电信4G手机 双卡双待</a>
    												</div>
    											</div>
    											    											    										    									</div>
    								</div>		
    						   </div>
							   <!--非大件对应商品清单结束-->
    					 </div>
					 					 <!--以下为京东大家电配送-->
					 					 
			         <!--以下为京东第三方配送-->					
					 				<!--以下为第三方配送-->	 				
				<!--如果是SOP快递或者是京东中小件商品，但是不支持配送，则采用快递运输-->
				<!--sop大件入仓配送-->
				
			</div><!--dis-modes 结束-->
			<div class="clr"></div>
			<!--
			<div class="freight-cont">			   
				   					       <strong class="ftx-01" style="color:#666" freightByVenderId="0"  popJdShipment="false">免运费</strong>
				   			  </div>
	      -->
          		</div><!--shopping-list 结束-->
				<form id="skuAndShipment_submit_form" method="post" action="">
	   <input id="saveParam_paymentId" name="saveParam.paymentId" type="hidden"><!--支付方式id-->
	   <input id="saveParam_otype" name="saveParam.onlinePayType" type="hidden">
	   <!-- 京东配送 -->
	   <input id="saveParam_jdShipmentType" name="saveParam.jdShipmentType" value="65" type="hidden"><!--京东配送-->
	   <input id="saveParam_jdShipTime" name="saveParam.jdShipTime" value="3" type="hidden"><!-- 区分工作日，311，411-->
	   <input id="saveParam_jdPayWayId" name="saveParam.jdPayWayId" value="0" type="hidden"><!--货到付款方式-->
	   <input id="saveParam_jdCheckType" name="saveParam.jdCheckType" value="2" type="hidden"><!--如果是支票这个只是写死的[仅支持京东上门自取]-->
	   <input id="saveParam_jdBigItemShipTimeOffset" name="saveParam.jdBigItemShipTimeOffset" value="0" type="hidden"><!--京东大家电配送时间偏移量-->
	   <input id="saveParam_jdBigItemInstallTimeOffest" name="saveParam.jdBigItemInstallTimeOffest" value="0" type="hidden"><!--京东大家电安装时间偏移量-->	  
	   <input id="saveParam_installTimeOffest" name="saveParam.installTimeOffest" type="hidden"><!--京东自营落地配小件安装时间偏移量-->
	   <!--311-->
	   <input id="saveParam_promiseType" name="saveParam.promiseType" value="" type="hidden"><!--1表示311类型，2表示411-->
	   <input id="saveParam_promiseDate" name="saveParam.promiseDate" type="hidden"><!--日历-->
	   <input id="saveParam_promiseTimeRange" name="saveParam.promiseTimeRange" type="hidden"><!--波次-->
	   <input id="saveParam_promiseSendPay" name="saveParam.promiseSendPay" type="hidden"><!--选择的sendpay-->
	   <input id="saveParam_batchId" name="saveParam.batchId" type="hidden"><!--选择的sendpay-->
	   <input id="saveParam_promiseMessage" name="saveParam.promiseMessage" type="hidden"><!--预约配送提示-->
	   <!--411-->	  
	   <input id="saveParam_jdBigItemNightShip" name="saveParam.jdBigItemNightShip" value="false" type="hidden"><!--大家电是否支持晚间配送-->	   	   
	    <!--京东第三方配送-->
	   <input id="saveParam_otherShipmentType" name="saveParam.otherShipmentType" value="" type="hidden"><!--京东第三方配送-->
	   <input id="saveParam_otherShipTime" name="saveParam.otherShipTime" value="" type="hidden"><!--区分工作日，311，411-->	   
	   <input id="saveParam_otherBigItemShipOffset" name="saveParam.otherBigItemShipOffset" value="" type="hidden"><!--京东大家电安装时间偏移量-->
	   <input id="saveParam_otherBigItemInstallTimeOffset" name="saveParam.otherBigItemInstallTimeOffset" value="" type="hidden"><!--京东大家电配送时间偏移量-->
		<!--sop京东和第三方配送-->
		<input id="saveParam_sopShipment" name="saveParam.sopShipment" value="" type="hidden"><!--sop三方配送-->
	   <input id="saveParam_sopOtherShipmentType" name="saveParam.sopOtherShipmentType" value="" type="hidden"><!--sop第三方配送-->
	   <!-- 自提方式 -->
	   <input id="saveParam_pickShipmentType" name="saveParam.pickShipmentType" value="" type="hidden">
       <!--自提方式-->
	   <input id="saveParam_pickSiteId" name="saveParam.pickSiteId" value="899" type="hidden"><!--自提点-->
	   <input id="saveParam_pickDate" name="saveParam.pickDate" value="2017-11-01" type="hidden"><!--自提时间-->
	   <input id="saveParam_pickSiteNum" name="saveParam.pickSiteNum" value="0" type="hidden"><!--默认5个-->
	   <input id="saveParam_pickRegionId" name="saveParam.pickRegionId" value="" type="hidden"><!--搜索区域-->	   
	   
	   <input id="saveParam_jdBigItemPromiseType" name="saveParam.jdBigItemPromiseType" type="hidden">
	   <input id="saveParam_jdBigItemPromiseDate" name="saveParam.jdBigItemPromiseDate" type="hidden">
	   <input id="saveParam_jdBigItemPromiseTimeRange" name="saveParam.jdBigItemPromiseTimeRange" type="hidden">
	   <input id="saveParam_jdBigItemPromiseSendPay" name="saveParam.jdBigItemPromiseSendPay" type="hidden">  
	   <input id="saveParam_jdBigItemBatchId" name="saveParam.jdBigItemBatchId" type="hidden">
	   
	   <input id="saveParam_otherBigItemPromiseType" name="saveParam.otherBigItemPromiseType" type="hidden">
	   <input id="saveParam_otherBigItemPromiseDate" name="saveParam.otherBigItemPromiseDate" type="hidden">
	   <input id="saveParam_otherBigItemPromiseTimeRange" name="saveParam.otherBigItemPromiseTimeRange" type="hidden">
	   <input id="saveParam_otherBigItemPromiseSendPay" name="saveParam.otherBigItemPromiseSendPay" type="hidden">  
	   <input id="saveParam_otherBigItemBatchId" name="saveParam.otherBigItemBatchId" type="hidden"><!--搜索区域-->	
	   
	   <input id="zxj_promiseTagType" name="saveParam.promiseTagType" value="" type="hidden"><!--中小件京准达时效类型 -->
	   <input id="tdc_cutOrder" name="saveParam.cutOrder" type="hidden"><!--TDC京准达波次 -->
	   
	   
	   <input id="saveParam_venderSelfDeliveryStoreVO_venderId" name="saveParam.venderId" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_storeId" name="saveParam.storeId" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_warehouseId" name="saveParam.warehouseId" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_name" name="saveParam.name" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_businessHours" name="saveParam.businessHours" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_longitude" name="saveParam.longitude" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_latitude" name="saveParam.latitude" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_storeMark" name="saveParam.storeMark" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_stockStatus" name="saveParam.stockStatus" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_distance" name="saveParam.distance" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_storeAddress" name="saveParam.storeAddress" type="hidden">
	   <input id="saveParam_venderSelfDeliveryStoreVO_recentlyMark" name="saveParam.recentlyMark" type="hidden">
	   <input id="saveParam_sopShipmentType" name="saveParam.sopShipmentType" type="hidden">
	</form>
	<input id="mainSkuIdAndNums" value="5181398_1," type="hidden"><!--icon隐藏域,用于更新库存-->
	<input id="calendar_hdata" value="" type="hidden"><!--icon隐藏域，用户存日历控件时间段-->
	<input id="calendar_ddata" value="" type="hidden"><!--icon隐藏域，用户存日历控件日期-->
	<input id="calendar_x" value="" type="hidden"><!--icon隐藏域，存日历控件X坐标-->
	<input id="calendar_y" value="" type="hidden"><!--icon隐藏域，用日历控件Y坐标-->
	<input id="calendar_big_hdata" value="" type="hidden"><!--icon隐藏域，用户存日历控件时间段-->
	<input id="calendar_big_ddata" value="" type="hidden"><!--icon隐藏域，用户存日历控件日期-->
	<input id="calendar_big_bzd_hdata" value="" type="hidden"><!--icon隐藏域，用户存日历控件时间段-->
	<input id="calendar_big_bzd_ddata" value="" type="hidden"><!--icon隐藏域，用户存日历控件日期-->
	<input id="calendar_big_x" value="" type="hidden"><!--icon隐藏域，存日历控件X坐标-->
	<input id="calendar_big_y" value="" type="hidden"><!--icon隐藏域，用日历控件Y坐标-->
	<input id="calendar_big_bzd_x" value="" type="hidden"><!--icon隐藏域，存日历控件X坐标-->
	<input id="calendar_big_bzd_y" value="" type="hidden"><!--icon隐藏域，用日历控件Y坐标-->	
	<input id="last_sel_promiseDate" value="" type="hidden"><!--icon隐藏域，记录上次选中的日期-->	
	<input id="last_sel_promiseTimeRange" value="" type="hidden"><!--icon隐藏域，记录上次选中的时间段-->	
	<input id="last_sel_promiseSendPay" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
	<input id="last_sel_batchId" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->	
	<input id="big_last_sel_promiseDate" value="" type="hidden"><!--icon隐藏域，记录上次选中的日期-->	
	<input id="big_last_sel_promiseTimeRange" value="" type="hidden"><!--icon隐藏域，记录上次选中的时间段-->	
	<input id="big_last_sel_promiseSendPay" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
	<input id="big_last_sel_batchId" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
	<input id="big_last_sel_offset" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
	<input id="big_bzdrl_last_sel_promiseDate" value="" type="hidden"><!--icon隐藏域，记录上次选中的日期-->	
	<input id="big_bzdrl_last_sel_promiseTimeRange" value="" type="hidden"><!--icon隐藏域，记录上次选中的时间段-->	
	<input id="big_bzdrl_last_sel_promiseSendPay" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
	<input id="big_bzdrl_last_sel_offset" value="" type="hidden">
	<input id="big_bzdrl_last_sel_batchId" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
	<input id="big_bzd_last_sel_promiseDate" value="" type="hidden"><!--icon隐藏域，记录上次选中的日期-->	
	<input id="big_bzd_last_sel_promiseTimeRange" value="" type="hidden"><!--icon隐藏域，记录上次选中的时间段-->	
	<input id="big_bzd_last_sel_promiseSendPay" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
	<input id="big_bzd_last_sel_batchId" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
	<input id="bigshipment_bzd_type" value="0" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
    <input id="shipment411_sendpay" value="" type="hidden"><!--411sendpay-->		
	<input id="shipment_support_type" value="0" type="hidden"><!--icon隐藏域，当前311和411支持的类型，0表示311,411都不支持,1表示只支持311,2表示只支持411,3表示311,411都支持-->	
	<input id="shipment_select_support" value="" type="hidden"><!--icon隐藏域，当前311和411选中的是哪一个，1表示选中311,2表示选中411,3表示京准达-->	
	<input id="bigshipment_bzd_support" value="0" type="hidden"><!--icon隐藏域，当前京准达和标准达支持的类型，标准达 0表示不支持,1表示支持-->	
	<input id="bigshipment_bzd_shipAndInstall" value="0" type="hidden"><!--icon隐藏域，大家电标准达是否支持送装一体，1：支持  0不支持不处理,-1不支持-->	
	<input id="bigshipment_jzd_support" value="0" type="hidden"><!--icon隐藏域，当前京准达和标准达支持的类型，京准达 0表示不支持,1表示支持-->	
	<input id="bigshipment_select_support" value="1" type="hidden"><!--icon隐藏域，当前京准达和标准达选中的是哪一个，1表示选中京准达,2表示选中标准达-->
	<input id="shipment_cur411_support" value="" type="hidden"><!--icon隐藏域，当前411是否还支持配送，1支持，2不支持-->	
	<input id="shipment411_msg" value="" type="hidden"><!--icon隐藏域，411提示信息-->	
	<input id="pick_sel_regionid" value="" type="hidden"><!--icon隐藏域，临时存放选中的自提点区域ID-->
	<input id="temp_pick_sel_regionid" value="" type="hidden"><!--icon隐藏域，临时存放选中的自提点区域ID-->
	<input id="pick_sel_id" value="" type="hidden"><!--icon隐藏域，临时存放选中的自提点ID-->
	<input id="is_invoke_pickdate" value="0" type="hidden"><!--自提时间隐藏域，是否要刷新自提点时间-->
	<input id="is_refresh_installdate" value="" type="hidden"><!--icon隐藏域，是否要刷新商品安装时间-->
	<input id="bigItemCodDates" value="" type="hidden"><!--icon隐藏域，是否要刷新商品安装时间-->
	
	<input id="popVenderIdStr" value="0" type="hidden"><!--icon隐藏域，所有店铺ID串-->
	<input id="locShopIdStr" value="" type="hidden"><!--icon隐藏域，所有loc门店ID串 -->
		
	<input id="calendar_hdata_zxj_jzd" value="" type="hidden"><!--icon隐藏域，用户存日历控件时间段-->
	<input id="calendar_ddata_zxj_jzd" value="" type="hidden"><!--icon隐藏域，用户存日历控件日期-->
	<input id="calendar_x_zxj_jzd" value="" type="hidden"><!--icon隐藏域，存日历控件X坐标-->
	<input id="calendar_y_zxj_jzd" value="" type="hidden"><!--icon隐藏域，用日历控件Y坐标-->
	<input id="last_sel_promiseDate_zxj_jzd" value="" type="hidden"><!--icon隐藏域，记录上次选中的日期-->	
	<input id="last_sel_promiseTimeRange_zxj_jzd" value="" type="hidden"><!--icon隐藏域，记录上次选中的时间段-->	
	<input id="last_sel_promiseSendPay_zxj_jzd" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
	<input id="last_sel_batchId_zxj_jzd" value="" type="hidden"><!--icon隐藏域，记录上次选中的sendpay-->
	<input id="promiseSopViewList" value="[]" type="hidden"><!--sop日历弹窗隐藏域-->
	<input id="jzdAmount_hidden" value="京准达" type="hidden"><!--京准达运费收费标准-->
	<input id="jsdAmount_hidden" value="极速达（￥99）" type="hidden"><!--极速达运费收费标准-->
	<input id="djzdAmount_hidden" value="京准达" type="hidden"><!--大家电京准达运费收费标准-->
	<input id="bigItemJzdInstallTimeOffest" value="" type="hidden"><!--大家电京准达安装偏移量-->
	<input id="bigItemInstallTimeOffest" value="" type="hidden"><!--大家电标准达安装偏移量-->
	<input id="forcedChoice" autocomplete="off" value="" type="hidden"><!--生鲜是否显示默认时效-->
	
	<input id="hid_calendar_tag" value="" type="hidden"><!--存取京准达多波次时效tag-->
	
	<!--隐藏的自营落地配小件安装日历开始-->
	<script id="installEdit" type="text/temp">
		  
	</script>
	<!--隐藏的自营落地配小件安装日历结束-->
	<!--隐藏的sop配送日历开始-->
	<script id="sop_shipment_hidediv" type="text/temp">
		  <div class="date-thickbox" >
				<div class="tab-nav">
					<ul>
						<li class="tab-nav-item tab-item-selected" >标准达 <b> </b> </li> 
					</ul>
				</div>
				<div class="tab-con" id="tab_sop_div">
					<div class="date-delivery" id="date-delivery-sop"></div>
					<div class="ftx-03 mt20">
						温馨提示：我们会努力按照您指定的时间配送，但因天气、交通等各类因素影响，您的订单有可能会有延误现象！
					</div>
					<div class="op-btns mt10 ac"> <a id="timeSaveSop" clstag="pageclick|keycount|trade_201602181|52" href="javascript:void(0);"  class="btn-1">确定 </a> <a href="javascript:jQuery.closeDialog();"  class="btn-9 ml10"> 取消 </a> </div>
				</div>
		</div>
	</script>
	<!--隐藏的sop配送日历结束-->
	<!--隐藏的311配送日历开始-->
	<script id="shipment_hidediv" type="text/temp">
		  <div class="date-thickbox" >
				<div class="tab-nav">
					<ul>
						<li class="tab-nav-item" id="li_zxj_id" onclick="doSwith311Tab('zxj')"><span id="jzdAmount"></span> <b> </b> </li>
						<li class="tab-nav-item" id="li_311_id" onclick="doSwith311Tab('311')">标准达 <b> </b> </li> 
						<li class="tab-nav-item" id="li_411_id" onclick="doSwith311Tab('411')"><span id="jsdAmount"></span><b> </b> </li>
					</ul>
				</div>
				<div class="tab-con" id="tab_zxj_div">
				     <div id="jzd_calendar_tag">
                     </div>
					<div class="date-delivery date-delivery-freight" id="date-delivery0"></div>
					<div class="ftx-03 mt20">
						温馨提示：我们会努力按照您指定的时间配送，但因天气、交通等各类因素影响，您的订单有可能会有延误现象！
					</div>
		           	 <div class="tips-618 mt20 hide tips-618-for-calendar">
		              <div class="tips-con">
		                <p class="tips-m">双11大促恰逢周末，请确认好收货地址和时间以保证货物及时送达。</p>
		          	  </div>
		         	 </div>
					<div class="op-btns mt10 ac"> <a id="timeSaveZxj" clstag="pageclick|keycount|trade_201602181|52" href="javascript:void(0);"  class="btn-1">确定 </a> <a href="javascript:jQuery.closeDialog();"  class="btn-9 ml10"> 取消 </a> </div>
				</div>
				<div class="tab-con hide" id="tab_311_div">
					<div class="date-delivery date-delivery-new" id="date-delivery1"></div>
					<div class="ftx-03 mt20">
						温馨提示：我们会努力按照您指定的时间配送，但因天气、交通等各类因素影响，您的订单有可能会有延误现象！
					</div>
		           	 <div class="tips-618 mt20 hide tips-618-for-calendar">
		              <div class="tips-con">
		                <p class="tips-m">双11大促恰逢周末，请确认好收货地址和时间以保证货物及时送达。</p>
		          	  </div>
		         	 </div>
					<div class="op-btns mt10 ac"> <a id="timeSave311" clstag="pageclick|keycount|trade_201602181|51" href="javascript:void(0);"  class="btn-1"> 确定 </a> <a href="javascript:jQuery.closeDialog();"  class="btn-9 ml10"> 取消 </a> </div>
				</div>
				<div class="tab-con hide" id="tab_411_div">
					<div> 下单后或支付成功后2小时送达</div>
					<div class="ftx-03 mt20" id="message_show_411">
						温馨提示：我们会努力按照您指定的时间配送，但因天气、交通等各类因素影响，您的订单有可能会有延误现象！
					</div>
					<div class="op-btns mt10 ac"> <a id="timeSave411" clstag="pageclick|keycount|trade_201602181|53" class="btn-1"> 确定 </a> <a href="javascript:jQuery.closeDialog();" class="btn-9 ml10"> 取消 </a> </div>
				</div>
		</div>
	</script>
	<!--隐藏的311配送日历结束-->
	<!--隐藏的大家电配送日历开始-->
	<script id="bigShipment_hidediv" type="text/temp">
		  <div class="date-thickbox">
				<div class="tab-nav">
					<ul>
						<li class="tab-nav-item tab-item-selected" id="li_djd_id" onclick="doSwithBigTab('djd')"><span id="djzdAmount"></span> <b> </b> </li>
						<li class="tab-nav-item" id="li_bzd_id" onclick="doSwithBigTab('bzd')">标准达 <b> </b> </li> 
					</ul>
				</div>
				<div class="tab-con" id="tab_djd_div">
					<div class="date-delivery date-delivery-freight" id="big-date-delivery0"></div>
					<div class="ftx-03 mt20">
					<i class="date-delivery-icon"></i>
						温馨提示：我们会努力按照您指定的时间配送，但因天气、交通等各类因素影响，您的订单有可能会有延误现象！
					</div>
                    <div class="tips-618 mt20 hide tips-618-for-calendar">
                        <div class="tips-con">
                            <p class="tips-m">双11大促恰逢周末，请确认好收货地址和时间以保证货物及时送达。</p>
                        </div>
                    </div>
					<div class="op-btns mt10 ac"> <a id="timeSaveDjdJzd" clstag="pageclick|keycount|trade_201602181|55" href="javascript:void(0);"  class="btn-1"> 确定  </a> <a href="javascript:jQuery.closeDialog();"  class="btn-9 ml10"> 取消 </a> </div>
		         </div>
				 <div class="tab-con hide" id="tab_bzd_div">
					<div class="date-delivery date-delivery-new" id="big-date-delivery1"></div>
					<div class="ftx-03 mt20">
					<i class="date-delivery-icon"></i>
						温馨提示：我们会努力按照您指定的时间配送，但因天气、交通等各类因素影响，您的订单有可能会有延误现象！
					</div>
                     <div class="tips-618 mt20 hide tips-618-for-calendar">
                         <div class="tips-con">
                             <p class="tips-m">双11大促恰逢周末，请确认好收货地址和时间以保证货物及时送达。</p>
                         </div>
                     </div>
					<div class="op-btns mt10 ac"> <a id="timeSaveBzd" clstag="pageclick|keycount|trade_201602181|54" href="javascript:void(0);"  class="btn-1"> 确定  </a> <a href="javascript:jQuery.closeDialog();"  class="btn-9 ml10"> 取消 </a> </div>
				 </div>
		  </div>
	</script>
	<!--隐藏的大家电配送日历结束-->
	<!--隐藏的sop大件配送日历开始-->
	<script id="sop_bigShipment_hidediv" type="text/temp">
		  <div class="date-thickbox">
				<div class="tab-nav">
					<ul>
						<li class="tab-nav-item tab-item-selected">标准达 <b> </b> </li> 
					</ul>
				</div>
				 <div class="tab-con" id="tab_sop_bzd_div">
					<div class="date-delivery date-delivery-new" id="sop-big-date-delivery"></div>
					<div class="ftx-03 mt20">
					<i class="date-delivery-icon"></i>
						温馨提示：我们会努力按照您指定的时间配送，但因天气、交通等各类因素影响，您的订单有可能会有延误现象！
					</div>
                     <div class="tips-618 mt20 hide tips-618-for-calendar">
                         <div class="tips-con">
                             <p class="tips-m">双11大促恰逢周末，请确认好收货地址和时间以保证货物及时送达。</p>
                         </div>
                     </div>
					<div class="op-btns mt10 ac"> <a id="timeSaveSopBzd" clstag="pageclick|keycount|trade_201602181|54" href="javascript:void(0);"  class="btn-1"> 确定  </a> <a href="javascript:jQuery.closeDialog();"  class="btn-9 ml10"> 取消 </a> </div>
				 </div>
		  </div>
	</script>
	<!--隐藏的sop大件配送日历结束-->
	<script id="nostock-box01" type="text/temp">
    <div class="limited-thickbox">
    	<div class="tip-box icon-box">
    		<span class="warn-icon m-icon"></span>
    		<div class="item-fore">
    			<h3>下手慢了~部分商品被抢空，继续结算其它商品？</h3>
    		</div>
    	</div>
    	<div class="goods-items" id="out-skus">
    	</div>
    	<div class="op-btns ac">
    			<a href="javascript:continueBuy()" class="btn-1" clstag="trade|keycount|sop|bfwhjxjs">继续</a>
    			<a href="javascript:goCart()" class="btn-9 ml10" clstag="trade|keycount|sop|bfwhfhgwc">返回购物车</a>
    	</div>
    </div>
    </script>
    <br><br>
	<div id="trade-nostock-recommendation-render" style="display:none"></div>
    <script id="nostock-box02" type="text/temp">
    <div class="limited-thickbox">
    	<div class="tip-box icon-box">
    		<span class="warn-icon m-icon"></span>
    		<div class="item-fore">
    			<h3>下手慢了~全部商品被抢空了
					<span class="extra">
                        <a href="javascript:goCart()" class="btn-9 ml10" clstag="trade|keycount|sop|qbwhfhgwc">返回购物车</a>
                    </span>
				</h3>
    		</div>
    	</div>
    	<div class="p-lists">
    		<div class="mt">
    			看看其他的...
    		</div>
    		<div class="mc" id="trade-nostock-recommendation">
    		</div>
    	</div>
    </div>
    </script>
    <!--隐藏的无货代下单div-->
<script id="nostock-box03" type="text/temp">
    <div class="nostock-thickbox">
    	<div class="tip-box icon-box-new">
			<span class="warn-icon m-icon"></span>
			<div class="item-fore">
				<h3>下手慢了，部分商品被抢空，是否继续购买？</h3>
				<span>商品可能不满足某些优惠条件</span>
			</div>
		</div>
    	<div class="goods-items" id="out-skus">
    	</div>
    <div class="subs-info" id="detailAddr" style="display:none">
		<span class="sub-tit">到货代下单信息：</span>
		<br>
		<span class="fl">下一个月到货自动为您下单</span>
		<em class="fl ml10 mr10">|</em>
		<span class="fl">在线支付</span>
		<em class="fl ml10 mr10">|</em>
		<span class="fl ml5 mr5" id="name"></span>
		<span class="fl ml5 mr5" id="addrTel"></span>
		<span class="fl addr ml5" id="addrInfo"></span>
		<br>
		<span>可以去<em class="ml5 mr5">我的京东-京东代下单</em><a href="//skunotify.jd.com/storeOrderSubMvc/queryStoreSub.action" target="_blank" class="ftx-05">查看详情</a></span>
	</div>
	<div class="op-btns ar">
		<a href="javascript:continueBuy()" class="btn-1">确定</a>
		<a href="javascript:goCart()" class="btn-9 ml10">取消</a>
	</div>
    </div>
</script>
     <!--无货代下单失败提示div-->
<script id="nostock-failed" type="text/temp">
		<div class="nostock-tipsbox" >
			<div class="tip-box icon-box-new">
				<span class="error-icon m-icon"></span>
				<div class="item-fore">
					<h3>提交失败</h3>
					<span>可能是由于网络问题，导致提交失败，尝试返回填写</span>
				</div>
			</div>
			<div class="op-btns ac mt20 ml30">
				<a href="javascript:goCart()" class="btn-1">返回</a>
				<a href="#nogo" id="nostock-failedClose" class="btn-9 ml10">关闭</a>
			</div>
		</div>
</script>
<!--无货代下单成功提示div-->
<script id="nostock-success" type="text/temp">
<div class="nostock-tipsbox">
	<div class="tip-box tip-box-succ icon-box-new">
		<span class="succ-icon m-icon"></span>
		<div class="item-fore">
			<h3>订阅消息成功！</h3>
		</div>
	</div>
	<div class="op-btns ac mt20 ml80">
		<a href='javascript:goCart()' class="btn-1">返回购物车</a>
		<a href='//skunotify.jd.com/storeOrderSubMvc/queryStoreSub.action' target='_blank' class="btn-9 ml10">查看代下单详情</a>
	</div>
</div>
</script>
<script>
/**
 * 退换无忧浮层
 */
$(".J-mode-infor-tips").hover(
    function() {
        $(this).find(".mode-infor-tips").show();
    },
    function() {
        $(this).find(".mode-infor-tips").hide();
    }
);
</script>
        <div class="clr"></div>
  </div>
  <!--shopping-lists 结束-->  
</div>	                        </div>
                    </div>
                    <!--添加商品清单结束-->
                    <!--添加备注信息-->
                    <div class="order-remarks hide" id="orderRemarkItem">
                    </div>
                    <!--  /widget/invoice-step/invoice-step.tpl -->
                                        <div class="hr"></div>
                    <div class="clr"></div>
                    <!--/ /widget/invoice-step/invoice-step.tpl -->
                    <div class="hr"></div>
                    <!--  /widget/order-coupon/order-coupon.tpl -->
                      <div class="step-tit step-toggle-on" id="virtualdiv" onclick="vertualHidOrShow()" clstag="pageclick|keycount|xunizichan__2016031015|1">
    <h3>使用优惠/礼品卡/抵用</h3>
    <i></i>
  </div>
    <div class="step-cont order-virtual" style="display: block;">
        <div class="order-virtual-tabs">
            <ul>
                            <li class="ui-switchable-item curr" id="couponitem" onclick="query_coupons_vertual()" clstag="pageclick|keycount|xunizichan__2016031015|2"><span>优惠券</span><i></i></li>
                                          <li class="ui-switchable-item" id="giftitem" onclick="query_giftCards_vertual()" clstag="pageclick|keycount|xunizichan__2016031015|3"><span>礼品卡</span><i style="display: none"></i></li>
                                          <li class="ui-switchable-item" id="jdbeanitem" onclick="showOrHideJdBean()" clstag="pageclick|keycount|xunizichan__2016031015|4"><span>京豆</span><i style="display: none"></i></li>
                                          <li class="ui-switchable-item" id="balanceitem" clstag="pageclick|keycount|xunizichan__2016031015|5"><span>余额</span><i style="display: none"></i></li>
                                              <li class="ui-switchable-item" id="consignmentitem" data-type="5" onclick="query_giftCards_type(this)" clstag="pageclick|keycount|xunizichan__2016031015|3"><span>领货码</span><i style="display: none"></i></li>
                          </ul>
        </div>
        <div class="ui-switchable-panel-main" id="">
            <div class="ftx01 virtual-warning ml20 hide" id="safeBalancePart">
              <span>
                为保障您的账户资金安全，请先
                <a target="_blank" href="http://safe.jd.com/user/paymentpassword/safetyCenter.action" class="ftx-05">
                  [开启支付密码]
                </a>
              </span>
            </div>
            <div class="hr hide"></div>
            <!-- coupon  -->
                         <div class="coupon-main ui-switchable-panel ui-switchable-panel-selected" style="display: block;">
              <div class="coupon-optimal ml20" id="bestCouponDiv" style="display: block;">
                  <label clstag="pageclick|keycount|xunizichan__2016031015|13">
                    <input id="bestCouponCheck" onclick="getBastCouponList(this)" type="checkbox">
                    <span id="bestCoupon">优惠组合推荐</span>
                  </label>
              </div>
              <div class="hr" id="couponsplit" style="display: block;"></div>
              <div class="coupon-cont">
                  <div class="coupon-tab ml20">
                    <ul>
                      <li class="coupon-tab-item curr" id="skucoupontit" clstag="pageclick|keycount|xunizichan__2016031015|6">商品优惠券</li>
                      <li class="coupon-tab-item" id="freightcoupontit" clstag="pageclick|keycount|xunizichan__2016031015|7">运费券</li>
                      <li class="coupon-tab-item" id="changecoupontit" clstag="pageclick|keycount|xunizichan__2016031015|8">优惠码兑换</li>
                    </ul>
                  </div>
                  <div class="coupon-tab-panel-main ml20" id="coupons">
<!--coupon tab-->


<div class="hide">
    <input id="pageNum" value="1" type="hidden">
    <input id="hiddenCouponDiscount" value="200.00" type="text" hidden="">
    <input id="couponUseNum" value="1" type="text" hidden="">
    <input id="freeFreightCouponUseNum" value="0" type="text" hidden="">
    <input id="hiddenGiftCardDiscount_coupon" type="text" hidden="">
    <input id="hiddenUsedBalance_coupon" type="text" hidden="">
    <input id="hiddenPayPrice_coupon" value="2499.00" type="text" hidden="">
    <input id="hiddenFreight_coupon" type="text" hidden="">
    <input id="hidden_wasteFlag" value="false" type="text" hidden="">
    <input id="hiddenFreeFreight_coupon" value="0.00" type="text" hidden="">
    <input id="bastCoupon" type="text" hidden="">
    <input id="couponEnableNum" type="text" hidden="">
    <input id="venderFreightCoupon" value="{0=0}" type="text" hidden="">
    <input id="venderFreightCouponJson" value="{'0':'0'}" type="text" hidden="">
    <input id="orderPriceShowViewDetail" value="{'21':'0'}" type="text" hidden="">
    <input id="sxBaseFreightCoupon" type="text" hidden="">
	<input id="hiddenPresale_weikuan" value="0" type="text" hidden="">
    <input id="hiddenPresale_dingjin" value="0" type="text" hidden="">
    <input id="hiddenConsignmentCardDiscount_coupon" type="text" hidden="">
</div>
<div class="coupon-tab-panel ui-switchable-panel-selected" style="display: block;">
    <div class="coupon-scrollbar">
        <div class="ui-scrollbar-main">
            <div class="coupon-scroll">
                <!--可用优惠券 -->
                <div class="coupon-enable">
                    <ul>
                                                                                                  <li>
                                  <div class="coupon-item coupon-item-new">
                                      <div class="c-detail item-selected" onclick="userOrCancelCouponVertual('0000-0216-0622-4689','21606224689')" id="selected_coupon_21606224689">
                                          <div class="c-msg c-dong">
                                              <div class="c-top-dong"></div>
                                              <div class="item-selected-cancel hide">取消勾选</div>
                                              <div class="c-price">
                                                  <em>￥200</em>
                                              </div>
                                              <div class="c-limit">
                                    <span>
                                    满1980
                                    </span>
                                              </div>
                                              <div class="c-time c-time-dong">
                                                  <span>有效期至2017-11-01</span>
                                                                                                  </div>
                                          </div>
                                          <div class="c-type c-type-dong">
                                              <span class="c-type-l">[东券]</span>
                                                                                                <span class="c-type-r" id="21606224689">[限品类]</span>
                                                                                        </div>
                                      </div>
                                      <div class="c-info"></div>
                                  </div>
                              </li>
                                                                        
                                                                        
  <li>
                                  <div class="coupon-item coupon-item-new">
                                      <div class="c-detail-disable" onclick="userOrCancelCouponVertual('0000-0213-8599-9397','21385999397')" id="selected_coupon_21385999397">
                                          <div class="c-msg c-dong">
                                              <div class="c-top-dong"></div>
                                              <div class="item-selected-cancel hide">取消勾选</div>
                                              <div class="c-price">
                                                  <em>￥200</em>
                                              </div>
                                              <div class="c-limit">
                                    <span>
                                    满1111
                                    </span>
                                              </div>
                                              <div class="c-time c-time-dong">
                                                  <span>有效期至2017-11-11</span>
                                                                                                  </div>
                                          </div>
                                          <div class="c-type c-type-dong">
                                              <span class="c-type-l">[东券]</span>
                                                                                                <span class="c-type-r" id="21385999397">[限品类]</span>
                                                                                        </div>
                                      </div>
                                      <div class="c-info"></div>
                                  </div>
                              </li>
                                                                                        </ul>
                </div>
                <!--不可用优惠券 -->
                <div class="coupon-disable">
                    <ul>
                                                                                                          <li>
                                    <div class="coupon-item coupon-item-new">
                                        <div class="c-detail-disable">
                                            <div class="c-msg">
                                                <div class="c-top"></div>
                                                <div class="c-price">
                                                    <em>￥300</em>
                                                </div>
                                                <div class="c-limit">
                                                    <span>
                                                    满1818
                                                    </span>
                                                </div>
                                                                                                <div class="c-time">
                                                    <span>有效期至2017-11-03</span>
                                                </div>
                                            </div>
                                            <div class="c-type">
                                                <span class="c-type-l">[东券]</span>
                                                                                                    <span id="21332947793">[限品类]</span>
                                                                                            </div>
                                        </div>
                                        <div class="c-info">
                                            <i class="c-info-qmark"></i>
                                            <span>
                                                                                                  			<div class="virtual-desc" title="所结算商品中没有符合条件的商品">
			所结算商品中没有符合条件的商品
        </div>
	                                                                                            </span>
                                        </div>
                                    </div>
                                </li>
                                                                                              <ul>
                </ul></ul></div>
            </div>
        </div>
    </div>
</div>
<!--运费券-->
<div class="coupon-tab-panel" style="display: none;">
    <div class="coupon-freefreight">
<!--end-->
        <div class="ui-scrollbar-main">
            <div class="coupon-scroll">
              <!--可用运费券-->
              <div class="coupon-enable">
                <ul>
                    				                          				                                    </ul></div>
              <!--不可用运费券-->
              <div class="coupon-disable">
                <ul>
                                                                        </ul>
              </div>
            </div>
        </div>
    </div>
</div>
<!--兑换优惠券 tab -->
<div class="coupon-tab-panel" style="display: none;">
    <div class="coupon-add" id="entityPanel">
      <div>
        <span class="label">请输入优惠券兑换码：</span>
      </div>
      <div class="form virtual-add-input">
        <input id="couponKeyPressFirst" class="itxt" maxlength="4" type="text">
          <div class="c-gap"></div>
          <input id="couponKeyPressSecond" class="itxt" maxlength="4" type="text">
          <div class="c-gap"></div>
          <input id="couponKeyPressThrid" class="itxt" maxlength="4" type="text">
          <div class="c-gap"></div>
          <input id="couponKeyPressFourth" class="itxt" maxlength="4" type="text">
          <input class="btn-add btn-4" id="entityCouponId" onclick="exchangeVertualCoupons(this);" value="兑换" type="button">
          <span class="succ-msg" style="display: none">添加成功，此优惠券目前可用</span>
          <span class="error-msg" style="display:none;">请输入密码</span>
      </div>
    </div>
</div>


<script id="tooltip-box04" type="text/temp">
  <div class="tooltip-goods">
    <div class="coupon-goods">
      <div class="coupon-tit">
        
      </div>
      <div class="coupon-con" id="v-goods">
         <div class="loading">
            <i></i>加载中...
        </div>
      </div>
    </div>
  </div>    
</script>
</div>
              </div>
            </div>
                        <!-- giftcard -->
                        <div class="giftcard-main ui-switchable-panel" id="gift" style="display: none;">
            </div>
                                    <!-- jdbean-->
            <div class="jdbean-main ui-switchable-panel" style="display: none;">
                <div class="beans-2015 ml20" id="jdBeans-new">   
                </div>
            </div>
                                    <!-- balance -->
            <div class="balance-main ui-switchable-panel" style="display: none;">
                <div class="form v-balance ml20" id="jdBalance" clstag="pageclick|keycount|xunizichan__2016031015|12">
                      <input id="selectOrderBalance" class="jdcheckbox" value="" onclick="useOrCancelBalance(this)" disabled="disabled" type="checkbox">
                      <label id="canUsedBalanceId" for="selectOrderBalance">&nbsp;使用余额（账户当前余额：<span class="ftx-01">0.00</span>元）</label>
                        <div class="ftx01 safeLpkPart hide" id="safeBalancePart">
                            为保障您的账户资金安全，余额暂不可用，请先
                            <a target="_blank" href="https://safe.jd.com/user/paymentpassword/safetyCenter.action">[开启支付密码]</a>
                        </div>
                    
                </div>
            </div>
                        <!-- giftcard -->
                            <div class="giftcard-main ui-switchable-panel" id="consignment" style="display: none;">
                </div>
                        <div class="virtual-usedcont">
              <span class="virtual-usedcont-price">金额抵用<em id="total">￥200.00</em></span>
              <ul>
                <li id="couponTotalShow" style="display: block;">优惠券<em>1</em>张，优惠<em>200.00</em>元 </li>
                <li id="freeFreightShow" style="display: none;">| 使用运费券<em></em>张，抵用运费<em></em>元 </li>
                <li id="giftCardShow" style="display: none;">| 使用京东E卡<em></em>张，抵用<em></em>元</li>
                  <li id="consignmentCardShow" style="display: none;">| 使用领货码<em></em>张，抵用<em></em>元</li>
                <li id="jdBeanShow" style="display: none;">| 使用京豆，抵用<em></em>元</li><li>
                </li><li id="balanceShow" style="display: none;">| 使用余额，抵用<em></em>元</li>
              </ul>
            </div>
        </div>
    </div>

                    <!--/  /widget/order-coupon/order-coupon.tpl -->
                                    </div>
        <!-- </div> -->
        <!-- </div> -->
        <!--  /widget/order-summary/order-summary.tpl -->
        <div class="order-summary">
            <!--  预售 计算支付展现方式 begin -->
                            <div class="statistic fr">
                    <div class="list">
                        <span><em class="ftx-01">1</em> 件商品，总商品金额：</span>
                        <em class="price" id="warePriceId" v="2699">￥2699.00</em>
                    </div>
                    <div class="list">
                        <span>返现：</span>
                        <em class="price" id="cachBackId" v="0"> -￥0.00</em>
                    </div>
                    <div class="list">
                        <span>运费：</span>
                        <em class="price" id="freightPriceId"><i class="freight-icon"></i><font color="#000000"> ￥0.00</font></em>
                    </div>
					<div class="list hide" id="crossRegionalFeetip">
	                    <span>调货服务：</span>
                        <em class="price" id="crossRegionalFeeId"> <i class="freight-icon crossRegionalFee"></i><font color="#FF6600"> ￥0.00 </font></em>
	                </div>
                    <div class="list" style="display:block;">
				        <span>服务费：</span>
				        <em class="price" id="serviceFeeId"><font color="#000000"> ￥0.00</font></em>
				    </div>
				    <div class="list" style="display:block;">
                        <span>退换无忧：</span>
                        <em class="price" id="buyerFreightInsuranceId"><font color="#000000"> ￥0.00</font></em>
                    </div>
                    <div class="list" id="showCouponPrice" style="display:block;">
                        <input id="couponPriceNum" value="1" type="hidden">
                        <input id="couponPricehidden" value="200" type="hidden">
                        <span>商品优惠：</span><em class="price" id="couponPriceId" style="display: block;">-￥200.00</em>
                    </div>
                    <div class="list" id="showFreeFreight" style="display:none;">
                        <input id="freeFreightPriceNum" value="0" type="hidden">
                        <input id="freeFreightPricehidden" value="0" type="hidden">
                        <span>运费优惠：</span><em class="price" id="freeFreightPriceId">-￥0.00</em>
                    </div>
                    <div class="list" id="showGiftCardPrice" style="display:none;">
                        <input id="giftCardPricehidden" value="0" type="hidden">
                        <input id="giftCardPriceNum" value="0" type="hidden">
                        <span> 礼品卡： </span><em class="price" id="giftCardPriceId">-￥0.00</em>
                    </div>
                    <div class="list" id="showUsedJdBean" style="display:none;">
                        <input id="jdBeanexChange" value="0.00" type="hidden">
                        <span>京豆：</span><em class="price" id="usedJdBeanId">-￥0.00</em>
                    </div>
                    <div class="list" id="showUsedOrderBalance" style="display:none;">
                        <input id="useBalanceShowDiscount" value="0.00" type="hidden">
                        <span>余额：</span><em class="price" id="usedBalanceId">-￥0.00</em>
                    </div>
                    <div class="list" id="consignmentCardPrice" style="display:none;">
                        <input id="consignmentCardDiscounthidden" value="0" type="hidden">
                        <input id="consignmentCardNum" value="0" type="hidden">
                        <span>领货码： </span><em class="price" id="gconsignmentCardId">-￥0.00</em>
                    </div>
                    <div class="list" id="showPeriodFee" style="display:none;">
                        <span>分期手续费(由分期银行收取)：</span><em class="price" id="periodFee">￥0.00</em>
                    </div>
                </div>
                <div class="clr"></div>
                    </div>
        <!--/ /widget/order-summary/order-summary.tpl -->
        <!-- 运费弹窗显示 -->
        <div id="tooltip-box06" class="hide">
                    <div class="summary-freight-box-new">
                <div class="sfb-tit">
                  	  <span>店铺运费明细</span>
                  	  <span class="ml5 ftx-03" id="frightDetail"></span>
                </div>
                <div class="sfb-con">
                                                                                                        <!-- 只包含延保商品的商家不显示 -->
                                                                        
                                                                        
                        <div class="sfb-item">
                                              <div class="sfb-item-tit">
                                                                                                                        <span class="vendor_name_freight" id="0">
                                            京东自营                                            </span>
                                                                                <em class="ftx-03 hide" id="xzweight-detail-bak" style="display: none;">（总重0.440kg）</em>
                                        <em class="ftx-03 hide" id="sxweight-detail-bak" style="display: none;"></em>
                                        <em class="ftx-03 hide" id="wmweight-detail-bak" style="display: none;"></em>
                                                                </div>
<!-- begin 运费明细块 -->
                                                        <div class="sfb-item-info" id="normal-freight-container">
                                    <span class="sfb-item-info-tit normal-freight-title" style="display: none;">非生鲜商品
                                        <em class="ftx-03 hide" id="xzweight-detail" style="display: none;">（总重0.440kg）</em>
                                    </span>
                                    <span style="display: none;">基础运费：<b class="ftx-01 base-freight"></b><a href="http://help.jd.com/user/issue/109-188.html" target="_blank" class="ml5 ftx-05 hide" id="freighttips">查看港澳台地区收费标准</a></span>
                                    <span class="hide" style="display: none;">续重运费：<b class="ftx-01 xz-freight"></b><a href="http://help.jd.com/user/issue/109-188.html" target="_blank" class="ml5 ftx-05">查看续重标准&gt;</a></span>
                                    <span class="hide" style="display: none;">续重运费：<b class="ftx-01 overseaxz-freight"></b><a href="http://help.jd.com/user/issue/109-3492.html" target="_blank" class="ml5 ftx-05">查看续重标准&gt;</a></span>
                                    <span class="hide" style="display: none;">海外地区附加燃油费：<b class="ftx-01 fuel-freight"></b></span>
                                    <span class="hide">免运费<b class="ftx-01 free-freight" freightbyvenderid="0" popjdshipment="false"></b></span>
                                </div>
                                <div class="hr" id="sx-freight-split-line" style="display: none;"></div>
                                <div class="sfb-item-info hide" id="sx-freight-container" style="display: none;">
                                    <span class="sfb-item-info-tit sx-freight-title" style="display: none;">生鲜商品
                                        <em class="ftx-03 hide" id="sxweight-detail" style="display: none;"></em>
                                    </span>
                                    <span style="display: none;">基础运费：<b class="ftx-01 base-freight"></b></span>
                                    <span class="hide" style="display: none;">续重运费：<b class="ftx-01 xz-freight">￥20.00</b><a href="http://help.jd.com/user/issue/109-188.html" target="_blank" class="ml5 ftx-05">查看续重标准&gt;</a></span>
                                    <span class="hide">免运费<b class="ftx-01 free-freight" freightbyvenderid="0" popjdshipment="false"></b></span>
                                </div>
                                <div class="hr" id="ext-freight-split-line" style="display: none;"></div>
                                <div class="sfb-item-info hide" id="ext-freight-container" style="display: none;">
                                    <span class="hide" style="display: none;">非生鲜京准达运费：<b class="ftx-01 jzd-freight"></b></span>
                                    <span class="hide" style="display: none;">非生鲜极速达运费：<b class="ftx-01 jsd-freight"></b></span>
                                    <span class="hide" style="display: none;">大件京准达运费：<b class="ftx-01 djzd-freight"></b></span>
                                    <span class="hide" style="display: none;">生鲜京准达运费：<b class="ftx-01 jzdsx-freight"></b></span>
                                    <span class="hide" style="display: none;">生鲜大件极速达运费：<b class="ftx-01 jzdsxdj-freight"></b></span>
                                    <span class="hide" style="display: none;">生鲜极速达运费：<b class="ftx-01 jsdsx-freight"></b></span>
                                </div>
                                                    <div class="sfb-item-goods">
                                 <div class="ui-switchable-body">
                                     <div class="ui-switchable-panel-main">
                                                                        
                                                                        
                       <div class="ui-switchable-panel">
                                                <ul class="sfb-goods-list">
                                                                        
                                                                        
                                                   <li id="5181398" class="sfb-goods-item">
                                                     <a href="#none" title="荣耀9 全网通 高配版 6GB+64GB 琥珀金 移动联通电信4G手机 双卡双待"><img src="/images/jiesuanye/593e4f06N4b38b001.jpg" alt="" width="50" height="50"></a>
                                                                                                          </li>
                                                                        
                                                                        
                                                      </ul>
                                                     </div>
                                                                                                                               </div>
                                 </div>
                                  <div class="sfb-ui-switchable-page">
                                     <a href="javascript:void(0)" class="sfb-prev">&lt;</a>
                                     <a href="javascript:void(0)" class="sfb-next">&gt;</a>
                                 </div>
                             </div>
                        </div>
                                                            </div>
            </div> 
        </div>  
		<div id="tooltip-box10" class="hide">
          <div class="summary-freight-box-new">
            <div class="sfb-tit">
              <span>调货服务费</span>
              <span class="ml5 ftx-03"><em class="ml5 ftx-01" id="totalCrossRegionalFee">总计 ¥0.00</em></span>
            </div>
            <div class="sfb-con">
              <div class="sfb-item">
                <div class="sfb-item-tit">
                    <span>调货商品</span>
                </div>
              </div>
            </div>
			<div class="sfb-item-goods" id="crossSkus">
            </div>
          </div>
        </div>
        <!-- 运费弹窗结束-->
		<div id="tooltip-box09" class="hide">
              <div class="plus-box-cont">
                <div class="pbox-tit">
                  <strong class="fl"><em class="ftx-01" id="totalNum">0</em>件商品有PLUS专享价</strong>
                  <span class="ml5 ftx-03 fr">可省<em class="ml5 ftx-01" id="totalPricetip">￥0</em></span>
                </div>
                <div class="pbox-con" id="plusProducts">
                    <ul>
                                            </ul>
                </div>
              </div>
		</div>
        <!--  /widget/checkout-floatbar/checkout-floatbar.tpl -->
        <div class="trade-foot">
			<div id="plusInfoByFreight" class="hide"></div>
			<div id="plusInfo" class="hide"></div>
			<div class="trade-foot-detail-com">
				                <div class="fc-price-info">
                  <span class="price-tit">应付总额：</span>
                  <span class="price-num" id="sumPayPriceId">￥2499.00</span>
                </div>
                <div class="fc-baitiao-info" style="display: none;">
					<span>白条支付：<em>不分期</em>（不使用优惠）<i class="bt-edit-icon" onclick="javascript:btDetail();" clstag="pageclick|keycount|PaymentLead__2016030411|5"></i></span>
                </div>
                <div class="giftbuy-info">
				<label class="noShowMoney hide" id="giftBuyHidePriceDiv">
                    <input id="giftBuyHidePrice" checked="checked" type="checkbox">包装内不显示礼品价格
                </label>
              </div>
				                <div class="fc-consignee-info">
                  <span class="mr20" id="sendAddr">寄送至： 北京 昌平区 城区   北京市昌平区沙河镇北二村万家灯火创业园C区7206室</span>
                  <span id="sendMobile">收货人：张亚宁 130****2115</span>
                </div>
              </div>
			   <!-- 支付密码 -->
              <div class="pay-pwd mt10 hide" id="paypasswordPanel" style="display: none;">
      			<div id="payPassword_container" class="alieditContainer clearfix" data-busy="0">
          			<label for="i_payPassword" class="i-block">支付密码：</label>
          				<div class="i-block">
  	         				<div class="i-block six-password">
                  				<input class="i-text sixDigitPassword" id="txt_paypassword" autocomplete="off" required="required" value="" name="payPassword_rsainput" data-role="sixDigitPassword" tabindex="" maxlength="6" minlength="6" aria-required="true" onchange="clearError()" type="password">
                  			<div tabindex="0" class="sixDigitPassword-box">
	                      <i><b></b></i>
	                      <i><b></b></i>
	                      <i><b></b></i>
	                      <i><b></b></i>
	                      <i><b></b></i>
	                      <i><b></b></i>
	                      <span id="cardwrap" data-role="cardwrap"></span>
                  		</div>
              		</div>
	              <span class="forgot-password">
	                  <a target="_blank" href="https://safe.jd.com/user/paymentpassword/getBackPassword.action">
	                 	 忘记密码？
	                  </a>
	              </span>
          		</div>
      		</div>
		      <div id="no-pwd-error" class="pay-pwd-error hide">
		          <label class="error-msg" for="">请输入6位数字密码</label>
		      </div>
		      <div id="pwd-error" class="pay-pwd-error hide" style="margin-right:16px;">
		           <label class="error-msg" for=""></label>
		      </div>
		      <div class="payment-bt-tips hide">
		          <span class="bt-tips-cont">结算金额变动，请重新选择白条分期以及白条优惠</span><i class="bt-tips-close" onclick="closebtErrorTip();">×</i>
		      </div>
  			</div>
			    <!-- 预售 -->
			  
            <!---->
            <div class="pay-pwd" id="paypasswordPanel" style="display: none">
              <div class="pay-pwd-cont">
                <span class="label">
                  支付密码
                </span>
                <input class="itxt" id="txt_paypassword" type="password">
                <span class="forgot-password">
                  <a target="_blank" href="http://safe.jd.com/user/paymentpassword/getBackPassword.action">
                    忘记支付密码？
                  </a>
                </span>
              </div>
            </div>
            <!-- 支付密码 -->

  			<!-- 全球售、台湾售、香港售 -->
			<div class="hkmtbuy-con hide" id="overseamtbuy-area">
                <div class="hkmtbuy-chk">
                   <label for=""><input checked="checked" id="overseamtbuy" name="" type="checkbox">已阅读并同意</label><a href="" class="ftx05" onclick="javascript:return openOverseaAgree();">《售全球服务协议》</a>
    			</div>
  			</div>
  			
            <div id="checkout-floatbar" class="group">
                <div class="ui-ceilinglamp checkout-buttons">
                    <div class="sticky-placeholder hide" style="display: none;">
                    </div>
                    <div class="sticky-wrap">
                        <div class="inner">
                        	                            <button type="submit" class="checkout-submit" id="order-submit" onclick="javascript:submit_Order();" clstag="pageclick|keycount|trade_201602181|25">
                               	 提交订单<b></b>
                            </button>
                                                        								<button type="submit" id="enterPriseUserPaymentSubmit" style="display:none;" class="checkout-submit-combine" onclick="javascript:submit_Order(1);" data-tips="若您要下多个订单，可以先提交订单再去订单中心合并支付，效率更高哟~">
								            提交订单暂不支付
								</button>
                                                        <span id="checkCodeDiv"></span>

                            <div class="checkout-submit-tip" id="changeAreaAndPrice" style="display: none;">
                                由于价格可能发生变化，请核对后再提交订单
                            </div>
                            <!--div style="display:none" id="factoryShipCodShowDivBottom" class="dispatching">
                              部分商品货到付款方式：先由京东配送“提货单”并收款，然后厂商发货。
                            </div-->
                        </div>
                        <span id="submit_message" style="display:none" class="submit-error"></span>

                        <div class="submit-check-info" id="submit_check_info_message" style="display:none"></div>
                    </div>
                </div>
            </div>

        </div>
        <!--/ /widget/checkout-floatbar/checkout-floatbar.tpl -->

        <!--  /widget/backpanel/backpanel.tpl -->
        <div id="backpanel">
            <div id="backpanel-inner" class="hide" style="right: 224.5px;">
                <div class="bp-item bp-item-survey">
                    <a href="http://surveys.jd.com/index.php?r=survey/index/sid/416587/lang/zh-Hans" class="survey" target="_blank">我要反馈</a>
                </div>
                <div class="bp-item bp-item-backtop" data-top="0">
                    <a href="#none" class="backtop" target="_self">返回顶部</a>
                </div>
            </div>
        </div>
        <!--/ /widget/backpanel/backpanel.tpl -->

    </div>

</div>
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
				<dl class="fore3">
					<dt>支付方式</dt>
					<dd><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-172.html">货到付款</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-173.html">在线支付</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-176.html">分期付款</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-174.html">邮局汇款</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-175.html">公司转账</a></dd>
				</dl>
				<dl class="fore4">		
					<dt>售后服务</dt>
					<dd><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/321-981.html">售后政策</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-132.html">价格保护</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/130-978.html">退款说明</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://myjd.jd.com/repair/repairs.action">返修/退换货</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://help.jd.com/user/issue/list-50.html">取消订单</a></dd>
				</dl>
				<dl class="fore5">
					<dt>特色服务</dt>	
					<dd><a target="_blank" href="https://help.jd.com/user/issue/list-133.html">夺宝岛</a></dd>
					<dd><a target="_blank" href="https://help.jd.com/user/issue/list-134.html">DIY装机</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://fuwu.jd.com/">延保服务</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://o.jd.com/market/index.action">京东E卡</a></dd>				
					<dd><a rel="nofollow" target="_blank" href="https://mobile.jd.com/">京东通信</a></dd>
					<dd><a rel="nofollow" target="_blank" href="https://s.jd.com/">京东JD+</a></dd>
				</dl>
				<span class="clr"></span>
			</div>
		</div>
	</div>
</div>
<!--service end-->

<script type="text/javascript" rel="stylesheet" src="/css/jiesuanye/a_002" source="widget"></script>
<script type="text/javascript" rel="stylesheet" src="/js/jiesuanye/paypwd.js"></script>
<script>
    $("#consignee_id").val('304105697');
    $("#hideAreaIds").val('1-2901-4136-0');
</script>
<!-- 不支持自提商品列表隐藏域  -->
<script id="noSupSkus_hideDiv" type="text/temp"></script>
<!-- 港澳售项目 -->
<script id="hkmt-box01" type="text/temp">
<div class="hkmt-thickbox-warn">
	<div class="tip-box icon-box-new">
		<span class="warn-icon-yellow m-icon"></span>
		<div class="item-fore">
			<span>订单中部分商品不支持对当前地址的配送<br>请返回购物车修改</span>
		</div>
	</div>
	<div class="op-btns ac mt30 mb30">
		<a href="//cart.jd.com" class="btn-1">返回购物车</a>
		<a href="#none" class="btn-9 ml10" onclick="javascript:closeDialog();">取消</a>
	</div>
</div>
</script>
<!-- 海外、台湾协议 -->
<style>
.overseaConfirmBtn a {
	padding:5px 50px;
	margin-top:15px;
	color:#fff;
	background:#e22;
	border:0;
	font-size:16px;
	font-family:"Microsoft YaHei","Hiragino Sans GB";
}
.hkbuy-dialog p {
	line-height:20px;
	margin:10px;
}
</style>
<script id="overseabuy-box01" type="text/temp">
	<div class="hkbuy-dialog" style="height: 450px; width: 
910px;overflow:auto;margin:10px;">
		<p class="agreement-cont">
			<h3>一、协议内容与效力</h3>
			
<p>本服务协议由您与广州晶东贸易有限公司共同缔结，本协议具有合同效力。本协议中协议双方合称协议方，广州晶东贸易有限公司在本协议中亦称为京东。 
</p>
			
<p>您在JD.COM购买页面上勾选《售全球服务协议》前，请您仔细阅读本协议的全部内容。如果您对本协议的条款有疑问的，请通过京东客服渠道进行询
问，京东将向您解释条款内容。如果您不同意本协议的任意内容，或者无法准确理解京东对条款的解释，请不要勾选《售全球服务协议》和进行后续操作。您通过网
络页面点击勾选、确认或以其他方式选择接受本协议，即表示您同意接受本协议的全部内容。 </p>
			
<p>您勾选该服务时，相应服务费用将向您进行相应展示，您勾选该服务，即视为您接受该服务的相应价格。服务商有权不定时修订该价格，服务商修改价格后，
如您继续选择《售全球服务协议》，视为您接受修改后的价格。 </p>
			
<p>如您不同意相关变更，应停止使用本服务。经修订的协议及规则一经公布后，立即自动生效，成为本协议的有效组成部分。登陆或继续使用“本服务”将表示
您接受经修订的协议。如果您不同意本协议之内容，或者您所属的国家或地方排除本协议内容之一部或全部时，请您立即停止使用本服务。 </p>
			
<p>您同意于使用本服务时，您全部之意思表示，均以电子文件作为表示方法，如您于各项服务与功能等页面点选同意或确认等功能键时，即视为您正式之意思表
示。 </p>
			
<p>本协议是京东为向您提供售全球服务而与您特别订立的协议。本协议的生效不代表您与京东订立的其他协议失去效力。除非另有特别约定，您与京东订立的包
括《用户注册协议》在内的任何协议均继续有效，您仍然应当遵守各协议的相关约定。各协议之间约定存在冲突的，以特别约定优先于一般约定，后订立的约定优先
于先订立的约定为原则进行处理。</p>
			<br/>
			<h3>二、服务及相关约定</h3>
			<p>1. 京东向您提供售全球服务，服务模式为：</p>
			<p>（1）如您在京东商城提交订单时填写港澳、台湾、海外收货地址，则系统默认使用港澳、台湾、海外直运。 </p>
			<p>（2）合作承运商按照您的收货地址信息安排运输并配送到您指定的港澳、台湾、海外收货地址。</p>
			<p>2. 在您选择直运服务过程中，您承诺遵守以下约定： </p>
			<p>（1） 您同意一旦使用本服务即同意您所授权京东的合作承运商有权知晓及使用您的相关交易信息，包括收件人姓名，身份证件号码及联系方式等。
 </p>
			
<p>（2）您同意在领取包裹时需确认外包装完好后方进行签收，您签收包裹即表示包裹外包装完好；您同意并在此确认，如您收货时包裹外包装完好，则直运服
务即符合本协议相应约定。签收后发生的包裹损坏、毁损、遗失等情况京东不承担相关责任。</p>
			<p>3、本网站提供的商品说明</p>
			<p>（1）本网站所售商品（包含电器类商品），除特别说明的商品外，均为中国大陆地区版本；</p>
			
<p>（2）非中国大陆地区用户购买使用3C数码及电器类商品，如商品使用地区插头插座与商品所附插头插座标准不一致，用户需单独购买符合当地标准的“转
换器”配套使用；</p>
			
<p>（3）本网站所售商品均符合中国大陆地区安全标准，如若商品使用地区安全标准与中国大陆地区不一致，请谨慎购买使用，因此可能造成的损失，京东不承
担相关责任。</p>
			<br/>
			<h3>三、用户行为规则</h3>
			
<p>用户通过京东账户操作的各种行为应符合法律法规规定、平台规则规定及注册协议约定，当出现（包含但不限于）以下行为时，视为用户自愿同意接受京东或
商家进行权益降级，扣除京豆，冻结或关闭京东账户，取消订单，不再提供服务等操作，且同意京东或商家不进行任何赔偿或补偿。如给京东或相关方造成损失，用
户愿意承担相应责任：</p>
			<p>（1） 注册资料内容含虚假信息；</p>
			<p>（2） 虚假交易、虚假好评,发布无根据的恶意评价；</p>
			<p>（3） 购买正品商品，退货时退回非京东平台对应订单中销售的商品、以次充好、以假乱真等行为；</p>
			<p>（4） 无故、无正常理由拒收签收订单货物的行为；</p>
			<p>（5） 符合非正常订单中的行为；</p>
			<br/>
			<h3>四、下单</h3>
			<p>1. 订购的商品价格以您下订单时京东网上价格为准。</p>
			<p>2. 请您清楚准确地填写您的真实姓名、送货地址及联系方式。因如下情况造成订单延迟或无法配送等，京东将不承担责任：</p>
			<p>A. 客户提供错误信息和不详细的地址； </p>
			<p>B. 货物送达无人签收，由此造成的重复配送所产生的费用及相关的后果； </p>
			<p>C. 不可抗力，例如：自然灾害、交通戒严、突发战争等。</p>
			<br/>
			<h3>五、配送</h3>
			<p>1、费用</p>
			<p>售全球运费将按照商品重量收取（限重30kg及以上或单边长度大于等于55厘米不销售），具体订单的运费以订单结算页公示金额为准。 
如对运费收取有任何异议，请联系京东客服进行咨询沟通。</p>
			
<p>京东不承担目的国的进口关税，京东商城销售的商品价格均未包含进口税金。如遇海关查验、查扣等情景，请您根据要求配合缴纳税金，否则京东无法保证配
送成功。</p>
			<p>2 
在正常派件失败后，会联系您协调再次派送的时间，并承诺免费派送3次；如若3次派送后仍无法签收的，则需要您主动联系，前往承运商在收件地附近的派送点进
行自提或联系承运商进行再次派送，并承担因此而产生的额外配送费用；从您的包裹三次派送失败后承运商将为您在派送点免费保管包裹15个自然日。逾期如您仍
未到派送点自提或联系承运商进行再次派送，则京东有权按照当地的法律、行业惯例自行处理，不再对该包裹的存储，灭失等风险承担责任。 
（注：根据承运商提供的实际承运方式的不同，部分承运方式在正常派件失败后，则需要您主动联系，前往包裹被存放的邮局进行自提；邮局保管包裹之时间与费用
视您当地邮局政策所定，京东将不再另行通知于您；逾期行为之处理办法同上文所述。）</p>
			<p>3. 
因非承运商原因而需要从港澳、台湾、海外退回包裹时，您需要自行联系承运商将包裹退回中国大陆境内。该退运服务的收费由您和承运商自行结算。</p>
			<br/>
			<h3>六、争议解决</h3>
			
<p>本协议之解释与适用，以及与本协议有关的争议，均应依照中华人民共和国法律（不包括香港、澳门、台湾法律）予以处理。如发生任何争议，双方应尽力友
好协商解决；协商不成时，任何一方均可向有管辖权的中华人民共和国大陆地区法院提起诉讼。 </p>
			<br/>
			<h3>七、售后服务总则（只适用于港澳、台湾、海外地区）</h3>
			<p>京东全球售商品支持订单完成后7天内退货、补发，不支持换货和维修。</p>
			<table cellspacing="0" cellpadding="0" class="oversea-table">
				<tbody>
					<tr>
	                    <th><b>退货类别</b></th>
	                    <th><b>具体描述</b></th>
	                    <th><b>申请时间期限</b></th>
	                    <th><b>是否收取返回运费</b></th>
	                    <th><b>退回方式</b></th>
	                    <th><b>退回金额</b></th>
	                    <th><b>退款方式</b></th>
	                    <th><b>备注</b></th>
	                </tr>
	                <tr>
	                    <td>到货物流损、缺件或商品描述与网站不符等京东原因</td>
	                    
<td>物流损指在运输过程中造成的损坏、漏液、破碎、性能故障，于收到货后24小时内反馈，经售后人员核查情况属实。缺件指商品原装配件缺失。
</td>
	                    <td>收货后（且订单状态为完成）7天内申请售后退货</td>
	                    <td>否</td>
	                    <td>客户寄回</td>
	                    <td>全额（包括退回运费）</td>
	                    <td>退至账户余额</td>
	                    <td>京东审核期间可能需要您提供实物照片、视频等，以便售后人员快速做出判断并及时处理。</td>
	                </tr>
	                <tr>
	                    <td>不支持7天无理由退货</td>
	                    <td>非京东原因造成的，不支持顾客7天无理由退货</td>
	                    <td>不 支 持</td>
	                    <td>不 支 持</td>
	                    <td>不 支 持</td>
	                    <td>不 支 持</td>
	                    <td>不 支 持</td>
	                    <td>不 支 持</td>
	                </tr>
				</tbody>
			</table>
			<p>说明：</p>
			<p>1. 实际收货日期按照第三方物流平台显示的实际签收日期为准。</p>
			<p>2. 
在商品退货时，需扣除购买该商品时通过评价或晒单所获得的京豆及相应优惠，如账户京豆已使用，则从商品退款金额中相应扣除；有赠品的主商品发生退货时，需
将赠品一并提交退货返回，如赠品未退回，则主商品无法全额退款。</p>
			<p>3. 以下商品不支持“非京东原因”退货</p>
			<p>（1） 个人定作类商品；</p>
			<p>（2）鲜活易腐类商品；</p>
			<p>（3）在线下载或者您拆封的音像制品，计算机软件等数字化商品； </p>
			<p>（4）交付的报纸期刊类商品；</p>
			<p>（5）其他根据商品性质不适宜退货，经您在购买时确认不宜退货的商品。</p>
		</p>
	</div>
	<div id="overseabuy-box01-btn" class="op-btns overseaConfirmBtn ac">
		<a href="#none" class="btn-1">同意并继续</a>
	</div>
</script>
<script id="virtual-box01" type="text/temp">
    <div class="submit-warn-thickbox">
        <div class="tip-box icon-box-new">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3>视频会员商品在实物订单妥投后不支持退货和退款，是否继续付款</h3>
            </div>
        </div>
        <div class="op-btns ac mt20 mb10">
            <a href="#none" 
onclick="javascript:parent.continue_SubmitOrder_for_norefund();closeDialog();"
 class="btn-1">继续支付</a>
            <a href="#none" class="btn-9 ml20" 
onclick="javascript:closeDialog();">取消</a>
        </div>
    </div>
</script>
<script type="text/javascript">
   function clearError(){
		$(".pay-pwd-error").hide();
	}
	/**
     * 关闭温馨提示
     */
    function closeorderInfotip(){
    	$(".orderInfo-tip").hide();
    }
    
    $('.J_picksite_disable_info').hover(function() {
                    $(this).next('.picksite-nosuport-box').show().css({
                        left: $(this).offset().left - 17,
                        top: $(this).offset().top + 28
                    });
                });
                
                //$('.picksite-nosuport-box').mouseleave(function(event) {
                 //   $(this).hide();
                //});
                $('.picksite-nosuport-cont').mouseleave(function(event) {
                    $('.picksite-nosuport-box').hide();
                });
                
</script>

		<!--footer start-->
<div id="footer-2017">
	<div class="w">
		<div class="copyright_links">
		<p><a href="https://about.jd.com/" target="_blank">关于我们</a><span class="copyright_split">|</span><a href="https://about.jd.com/contact/" target="_blank">联系我们</a><span class="copyright_split">|</span><a href="https://help.jd.com/user/custom.html" target="_blank">联系客服</a><span class="copyright_split">|</span><a href="https://vc.jd.com/cooperation.html" target="_blank">合作招商</a><span class="copyright_split">|</span><a href="https://helpcenter.jd.com/venderportal/index.html" target="_blank">商家帮助</a><span class="copyright_split">|</span><a href="https://jzt.jd.com/" target="_blank">营销中心</a><span class="copyright_split">|</span><a href="https://app.jd.com/" target="_blank">手机京东</a><span class="copyright_split">|</span><a href="https://club.jd.com/links.aspx" target="_blank">友情链接</a><span class="copyright_split">|</span><a href="https://media.jd.com/" target="_blank">销售联盟</a><span class="copyright_split">|</span><a href="https://club.jd.com/" target="_blank">京东社区</a><span class="copyright_split">|</span><a href="https://sale.jd.com/act/FTrWPesiDhXt5M6.html" target="_blank">风险监测</a><span class="copyright_split">|</span><a href="https://about.jd.com/privacy/" target="_blank">隐私政策</a><span class="copyright_split">|</span><a href="https://gongyi.jd.com/" target="_blank">京东公益</a><span class="copyright_split">|</span><a href="https://en.jd.com/" target="_blank">English Site</a><span class="copyright_split">|</span><a href="https://en.jd.com/help/question-58.html" target="_blank">Contact Us</a></p>
	</div>	
		<div class="copyright_info">
			<p><a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002000088" target="_blank">京公网安备 11000002000088号</a><span class="copyright_split">|</span><span>京ICP证070359号</span><span class="copyright_split">|</span><a href="https://img14.360buyimg.com/da/jfs/t256/349/769670066/270505/3b03e0bb/53f16c24N7c04d9e9.jpg" target="_blank">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a><span class="copyright_split">|</span><span>新出发京零&nbsp;字第大120007号</span></p><p><span>互联网出版许可证编号新出网证(京)字150号</span><span class="copyright_split">|</span><a href="https://sale.jd.com/act/pQua7zovWdJfcIn.html" target="_blank">出版物经营许可证</a><span class="copyright_split">|</span><a href="https://misc.360buyimg.com/wz/wlwhjyxkz.jpg" target="_blank">网络文化经营许可证京网文[2014]2148-348号</a><span class="copyright_split">|</span><span>违法和不良信息举报电话：4006561155</span></p><p><span class="copyright_text">Copyright&nbsp;©&nbsp;2004&nbsp;-&nbsp;<em id="copyright_year">2017</em>&nbsp;&nbsp;京东JD.com&nbsp;版权所有</span><span class="copyright_split">|</span><span>消费者维权热线：4006067733</span><a href="https://sale.jd.com/act/7Y0Rp81MwQqc.html" target="_blank" class="copyright_license">经营证照</a></p><p><span>京东旗下网站：</span><a href="https://www.jdpay.com/" target="_blank">京东钱包</a><span class="copyright_split">|</span><a href="http://www.jcloud.com/" target="_blank">京东云</a></p>
		</div>
		<p class="copyright_auth"><a class="copyright_auth_ico copyright_auth_ico_1" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202007080200026" target="_blank">经营性网站备案中心</a><script type="text/JavaScript">function
 CNNIC_change(eleId){var str= document.getElementById(eleId).href;var 
str1 =str.substring(0,(str.length-6));str1+=CNNIC_RndNum(6); 
document.getElementById(eleId).href=str1;}function CNNIC_RndNum(k){var 
rnd=""; for (var i=0;i < k;i++) rnd+=Math.floor(Math.random()*10); 
return rnd;};(function(){var d=new 
Date;document.getElementById("copyright_year").innerHTML=d.getFullYear()})();</script><a id="urlknet" class="copyright_auth_ico copyright_auth_ico_2" onclick="CNNIC_change('urlknet')" oncontextmenu="return false;" name="CNNIC_seal" href="https://ss.knet.cn/verifyseal.dll?sn=2008070300100000031&amp;ct=df&amp;pa=294005" target="_blank">可信网站信用评估</a><a class="copyright_auth_ico copyright_auth_ico_3" href="http://www.cyberpolice.cn/" target="_blank">网络警察提醒你</a><a class="copyright_auth_ico copyright_auth_ico_4" href="https://search.szfw.org/cert/l/CX20120111001803001836" target="_blank">诚信网站</a><a class="copyright_auth_ico copyright_auth_ico_5" href="http://www.12377.cn/" target="_blank">中国互联网举报中心</a><a class="copyright_auth_ico copyright_auth_ico_6" href="http://www.12377.cn/node_548446.htm" target="_blank">网络举报APP下载</a></p>
	</div>
</div>
<!--footer end-->

<!-- footer end -->
	<script type="text/javascript" src="/js/jiesuanye/json2.js"></script>
	<script type="text/javascript" src="/js/jiesuanye/payAndShipment.js"></script>
	<script type="text/javascript" src="/js/jiesuanye/order_virtual.js"></script>
	<script type="text/javascript" src="/js/jiesuanye/order.js"></script>
	<script type="text/javascript" src="/js/jiesuanye/jdpay.js"></script>


<!-- 不降级  -->
<script src="/js/jiesuanye/td.js"></script><script src="/css/jiesuanye/y.htm"></script><div style="width:1px;height:1px;background:#FFF;display:inline-block;position:absolute;left:-2000px;top:-2000px;"><object type="application/x-shockwave-flash" data="/css/jiesuanye/JdGiaFP.swf" id="jd_jr_td_flash" width="1" height="6"><param name="movie" value="https://gias.jd.com/JdGiaFP.swf"><param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="AllowNetworking" value="all"></object></div>


	<!--/ /widget/footer-2015/footer-2015.tpl -->
	<script type="text/javascript">
	//<![CDATA[
	var couponToggle = (function(){
		var obj = $('[data-bind="coupon"]'),
			tObj = obj.find(".item");

		var init = function(){
			tObj.each(function(){
				var that = $(this);
				var toggler = $(this).find(".toggler");
				var toggled = false;

				toggler.bind("click", function(e){
					e.preventDefault();
					toggled = !toggled;

					toggler.parent().parent()[toggled ? "addClass" : 
"removeClass"]("toggle-active");

					that.find(".toggle-wrap")[toggled ? "removeClass" : 
"addClass"]("hide").css("display", toggled ? "block" : "none");
				});
			});
		};

		return {
			init: init
		};
	})();


	var invoiceMore = (function(){
		var expandHolder = $("#invoice-list"),
			expandHandle = $("#invoice-more-btn"),
			item = expandHolder.find(".item-fore");
			expand = false;

		var init = function(){
			expandHandle.bind("click", function(){
				expand = !expand;

				item[expand ? "removeClass" : "addClass"]("hide").css("display", 
expand ? "block" : "none");


				expandHandle.removeClass(expand ? "select-expand" : 
"select-collapse").addClass(expand ? "select-collapse" : 
"select-expand").find("span").html(expand ? "\u6536\u8D77" : 
"\u66F4\u591A\u5E38\u7528\u5730\u5740");

				if(expand) {

				} else {

				}
			});
		};

		return {
			init: init
		};
	})();
	$(function(){
		$("input.textbox").focus(function(){
			$(this).addClass("focus");
		}).blur(function(){
			$(this).removeClass("focus");
		});

		couponToggle.init();

		invoiceMore.init();

		$(".step-action a").bind("click", function(){
			$("#step-3").expose();
		});
	});
	//]]>
	//统计js	
    (function() {
        var ja = document.createElement('script');
        ja.type = 'text/javascript';
        ja.async = true;
        ja.src = ('https:' == document.location.protocol ? 
'https://wlssl' : 'http://wl') + '.jd.com/wl.js';
		        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ja, s);
    })();

	
	//防止窗口变换，弹窗错位
	$(window).resize(function(){
           var obj=$("#freightSpan");	
           if($("#transport").html()!=null){
	           $("#transport").css({
					position:"absolute",
					top:obj.offset().top+"px",
					left:(obj.offset().left-345)+"px"
	           })
           }
	});
	</script>	
	
<script src="/css/jiesuanye/r.htm"></script></body></html>
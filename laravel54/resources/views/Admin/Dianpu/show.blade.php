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
<body>
<form action="/shop" method="post">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 店铺列表</strong> <a href="/shop/add" style="float:right; ">➕添加店铺</a></div>

	  <div class="padding border-bottom">
		  <ul class="search" style="padding-left:10px;">
			<!--<li> <a class="button border-main icon-plus-square-o" href="add.html"> 发布文章</a> </li>-->
		   <li>店铺类型</li>
		   <if condition="$iscid eq 1">
			  <li>
				<select name="goods_cate" class="input" style="width:200px; line-height:17px;" onchange="changesearch()">
				  <option value="0">全部商品分类</option>
					@foreach($cate as $k=>$v)
						<option value="{{$v->id}}">{{$v->cate_title}}</option>
					@endforeach
				</select>
			  </li>
			</if>
		  </ul>
		</div>
		<div class="padding border-bottom">
		  <ul class="search" style="padding-left:10px;">
			<li>店铺名称</li>
			<li>
			  <input type="text" placeholder="店铺名称" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
			  <input type="hidden"  name="_token"  value="{{csrf_token()}}" />
			</li>
			<li>添加时间</li>
			<li>
			  <input type="text" placeholder=""  name="zhuce_time" class="input" style="width:250px; line-height:17px;display:inline-block" id="dateinfo"/>
				<button type="submit">查询</button>
			</li>
		  </ul>
		</div>
		</div>
</form>
    <table class="table table-hover text-center">
		<tr>
			<th width="80" style="text-align:left; padding-left:20px;"></th>
			<th>店铺名称</th>
			<th>商品所属分类</th>
			<th>店铺简介</th>
			<th width="10%">订单时间</th>
			<th>审核状态</th>
			<th colspan="2">操作</th>
		</tr>
		@foreach($list as $k=>$v)
		<tr>
			<td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" /></td>
			<td>{{$v->name}}</td>
			<td>{{$v->cate_title}}</td>
			<td>{{$v->shop_notice}}</td>
			<td><?php echo  date('Y-m-d',$v->zhuce_time) ?></td>
			@if( $v->shop_status == 2)
				<td><span class="text-green">已通过</span></td>
			@elseif( $v->shop_status == 1)
				<td><span class="text-green">待审核</span></td>
			@else
				<td><span class="text-green">未通过</span></td>
			@endif
			<td><div class="button-group"><a class="button border-red" href="/shop/update/{{$v->shop_id}}" ><span ></span>修改 </a> </div></td>
		</tr>
		@endforeach
        
      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选 </td>
        <td colspan="8" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 批量删除</a> 
      </tr>
      <tr>
		<td colspan="6"  class="pagelist"> {!! $list->render() !!}</td>
	  </tr>
    </table>
  </div>

<!--发货-->
 <div id="Delivery_stop" style=" display:none">
  <div class=".container-layout">
    <div class="content_style-fh">
  <div class="form-group"><label class="bf25 " for="form-field-1">快递公司 </label>
       <div class="bf75"><select class="form-control" id="form-field-select-1">
																<option value="">--选择快递--</option>
																<option value="1">天天快递</option>
																<option value="2">圆通快递</option>
																<option value="3">中通快递</option>
																<option value="4">顺丰快递</option>
																<option value="5">申通快递</option>
																<option value="6">邮政EMS</option>
																<option value="7">邮政小包</option>
																<option value="8">韵达快递</option>
															</select></div>
	</div>
   <div class="form-group"><label class="bf25" for="form-field-1"> 快递号 </label>
    <div class="bf75"><input type="text" id="form-field-1" placeholder="快递号" class="col-xs-10 xb5" style="margin-left:0px;"></div>
	</div>
    <div class="form-group"><label class="bf25" for="form-field-1">货到付款 </label>
     <div class="bf75"><label><input name="checkbox" type="checkbox" class="ace" id="checkbox"><span class="lbl"></span></label></div>
	</div>
 </div>
  </div>
 </div>
<script type="text/javascript">

//搜索
function changesearch(){	
		
}

//单个删除
function del(id,mid,iscid){
	if(confirm("您确定要删除吗?")){
		
	}
}
//单个置顶
function zd(id){
	$(id).click(function(){
		$(this).css("background","#2c7").css("color","#fff");
	});
	
}
//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;		
		$("#listform").submit();		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");	
		
		return false;
	}
}








</script>
<script type="text/javascript">
    //jeDate.skin('gray');
    jeDate({
		dateCell:"#dateinfo",
		format:"YYYY-MM-DD hh:mm:ss",
		isinitVal:true,
		isTime:true, //isClear:false,
		minDate:"2017-01-08 00:00:00",
	})
</script>
</body>
</html>
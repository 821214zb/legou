<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>店铺列表</title>
<link rel="stylesheet" href="http://www.aslegou.com/Admin/css/pintuer.css">
<link rel="stylesheet" href="http://www.aslegou.com/Admin/css/admin.css">
<link rel="stylesheet" href="http://www.aslegou.com/Admin/css/style.css">
<!--<link rel="stylesheet" href="css/ace.min.css">-->
<script src="http://www.aslegou.com/Admin/js/jquery.js"></script>
<script src="http://www.aslegou.com/Admin/js/pintuer.js"></script>
<script src="http://www.aslegou.com/Admin/js/layer/layer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 店铺列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
	  <table class="table table-hover text-center">
		  <tr>
			  <th width="80" style="text-align:left; padding-left:20px;"></th>
			  <th>店铺名称</th>
			  <th>商品所属分类</th>
			  <th>店铺简介</th>
			  <th width="10%">订单时间</th>
			  <th>审核状态</th>
			  <th width="110" colspan="2">操作</th>
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
				  <td><div class="button-group"><a class="button border-red" href="/shop/check/2/{{$v->shop_id}}" ><span ></span> 通过</a> </div></td>
				  <td><div class="button-group"><a class="button border-red" href="/shop/check/0/{{$v->shop_id}}" ><span ></span> 不通过</a> </div></td>
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
</form>
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

//批量置顶
function changeistop(o){
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


//批量移动
function changecate(o){
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

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}		
	    });
		if(i>1){ 
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{
		
			$("#listform").submit();		
		}	
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

/**发货**/
function Delivery_stop(obj,id){
	layer.open({
        type: 1,
        title: '发货',
		maxmin: true, 
		shadeClose:false,
        area : ['500px' , ''],
        content:$('#Delivery_stop'),
		btn:['确定','取消'],
		yes: function(index, layero){		
		if($('#form-field-1').val()==""){
			layer.alert('快递号不能为空！',{
               title: '提示框',				
			  icon:0,		
			  }) 
			
			}else{			
			 layer.confirm('提交成功！',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style=" display:none" class="btn btn-xs btn-success" onClick="member_stop(this,id)" href="javascript:;" title="已发货"><i class="fa fa-cubes bigger-120"></i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发货</span>');
		$(obj).remove();
		layer.msg('已发货!',{icon: 6,time:1000});
			});  
			layer.close(index);    		  
		  }
		
		}
	})
};

</script>
</body>
</html>
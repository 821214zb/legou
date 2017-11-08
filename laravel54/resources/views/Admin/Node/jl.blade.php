<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>会员记录</title>
<link rel="stylesheet" href="./Public/css/pintuer.css">
<link rel="stylesheet" href="./Public/css/admin.css">
<script src="./Public/js/jquery.js"></script>
<script src="./Public/js/pintuer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 会员记录管理</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <!--<li> <a class="button border-main icon-plus-square-o" href="add.blade.php"> 发布文章</a> </li>-->
        <li>会员名称</li>
        <li>
          <input type="text" placeholder="输入会员电话、名称、邮箱" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a></li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th width="10%">用户名</th>
        <th>头像</th>
        <th>积分</th>
        <th>浏览（条）</th>
        <th>购物比</th>
        <th width="150">操作</th>
      </tr>
      <volist name="list" id="vo">
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           111111</td>
          <td>蜡笔小新</td>
          <td width="10%"><img src="./Public/images/11.jpg" alt="" width="70" height="50" /></td>
          <td style="color: #F60;">200</td>
          <td>300</td>
          <td>34</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           111111</td>
          <td>蜡笔小新</td>
          <td width="10%"><img src="./Public/images/11.jpg" alt="" width="70" height="50" /></td>
          <td style="color: #F60;">200</td>
          <td>300</td>
          <td>34</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           111111</td>
          <td>蜡笔小新</td>
          <td width="10%"><img src="./Public/images/11.jpg" alt="" width="70" height="50" /></td>
          <td style="color: #F60;">200</td>
          <td>300</td>
          <td>34</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           111111</td>
          <td>蜡笔小新</td>
          <td width="10%"><img src="./Public/images/11.jpg" alt="" width="70" height="50" /></td>
          <td style="color: #F60;">200</td>
          <td>300</td>
          <td>34</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           111111</td>
          <td>蜡笔小新</td>
          <td width="10%"><img src="./Public/images/11.jpg" alt="" width="70" height="50" /></td>
          <td style="color: #F60;">200</td>
          <td>300</td>
          <td>34</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           111111</td>
          <td>蜡笔小新</td>
          <td width="10%"><img src="./Public/images/11.jpg" alt="" width="70" height="50" /></td>
          <td style="color: #F60;">200</td>
          <td>300</td>
          <td>34</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           111111</td>
          <td>蜡笔小新</td>
          <td width="10%"><img src="./Public/images/11.jpg" alt="" width="70" height="50" /></td>
          <td style="color: #F60;">200</td>
          <td>300</td>
          <td>34</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           111111</td>
          <td>蜡笔小新</td>
          <td width="10%"><img src="./Public/images/11.jpg" alt="" width="70" height="50" /></td>
          <td style="color: #F60;">200</td>
          <td>300</td>
          <td>34</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
           111111</td>
          <td>蜡笔小新</td>
          <td width="10%"><img src="./Public/images/11.jpg" alt="" width="70" height="50" /></td>
          <td style="color: #F60;">200</td>
          <td>300</td>
          <td>34</td>
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选 </td>
        <td colspan="7" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 批量删除</a> 
      </tr>
      <tr>
        <td colspan="7"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
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

</script>
</body>
</html>
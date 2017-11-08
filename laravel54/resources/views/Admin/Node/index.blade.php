<!DOCTYPE html>
<html lang="zh-cn" xmlns="http://www.w3.org/1999/html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>权限列表</title>
<link rel="stylesheet" href="/css/pintuer.css">
<link rel="stylesheet" href="/css/admin.css">
<script src="/js/jquery.js"></script>
<script src="/js/pintuer.js"></script>
</head>
<body>
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 权限列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
  <form method="post" action="/node/index/0" id="listform">
	  {{ csrf_field() }}
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li>关键词：<input type="text" placeholder="输入会员电话、名称、邮箱" name="keywords" id="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" /> <input type="submit" class="button border-main icon-search" value="搜索" /></li>
		  <li><a class="button border-main" href="/node/add"><span class="icon-plus"></span> 新增</a></li>
      </ul>
    </div>
  </form>
    <table class="table table-hover text-center" id="k">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">编号</th>
        <th width="10%">组名</th>
	  	<th width="10%">显示名</th>
	  	<th width="10%">排序</th>
        <th width="10%">状态</th>
        <th width="310">操作</th>
      </tr>
	  @foreach ($data as $v)
	  <tr>
		  <td style="text-align:left; padding-left:20px;"><input type="checkbox" class="box" ids="{{$v->id}}">{{$v->id}}</td>
		  <td><a href="index.php?s=Home/Node/index/id/{$v.id}">{{ $v->name }}</a></td>
		  <td>{{ $v->title }}</td>
		  <td><input type="text" class='input' value="{{$v->sort}}" ids="{{$v->id}}"></td>
		  <td>
			  @if($v->status == 3 )
				  <img src="/images/ok.gif" alt="禁用" height="20" border="0" width="20" />
			  @elseif($v->status == 0 )
				  <img src="/images/del.gif" alt="删除" height="20" border="0" width="20" />
			  @elseif($v->status == 1)
				  <img src="/images/locked.gif" alt="禁用" height="20" border="0" width="20" />
			  @elseif($v->status == 2)
				  <img src="/images/locked.gif" alt="禁用" height="20" border="0" width="20" />
			  @else
				  <img src="/images/locked.gif" alt="恢复" height="20" border="0" width="20" />
			  @endif
		  </td>
		  <td>
			  <div class="button-group">
				  <a class="button border-main" href="/node/update/{{$v->id}}"><span class="icon-wrench"></span> 编辑</a>
				  @if($v->status == 3 )
					  <a class="button border-red" href="/node/status/{{$v->id}}/3"><span class="icon-trash-o"></span> 禁用</a>
				  @elseif($v->status == 1 )
					  <a class="button border-red" href="/node/status/{{$v->id}}/1"><span class="icon-trash-o"></span> 删除</a>
				  @elseif($v->status == 0 )
					  <a class="button border-red" href="/node/status/{{$v->id}}/0"><span class="icon-trash-o"></span> 恢复</a>
				  @elseif($v->status == 2 )
					  <a class="button border-red" href="/node/status/{{$v->id}}/2"><span class="icon-trash-o"></span> 正常</a>
					  </div>
			      @endif
		  </td>
	</tr>
		@endforeach
      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input class='all' type="checkbox" id="checkall"/>
          全选 </td>
        <td colspan="8" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" id="del"> 批量删除</a><a href="javascript:void(0)" class="button border-green icon-check" style="padding:5px 15px;" id="sort"> 批量排序</a></td>
      </tr>
      <tr>
		  <td colspan="8"><div class="pagelist">{!! $data->appends(['keywords'=>$keywords])->render() !!}</div></td>
      </tr>
    </table>
  </div>
</body>
<script src="/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(function(){
		//ajax排序
		$("#sort").click(function () {
			var ids = "";
			var sorts = "";
			$(".input").each(function () {
				ids += "," + $(this).attr("ids");
				sorts += "," + $(this).val();
			});
			ids = ids.substr(1);
			sorts = sorts.substr(1);
			//alert(sorts);
			$.ajax({
				url:"/node/sort/"+ids+'/'+sorts,
				type: "get",
				dataType:'json',
				success: function(data){
					alert(data);
					window.location.reload("Admin/node/index/0");
				},
				error:function(){
					alert('error');
				}
			})
		});

		//批量删除
		$('#del').click(function(){
			var ids = "";
			$(".box").each(function () {
				if(this.checked) {
					ids += "," + $(this).attr("ids");
				}
			});
			ids = ids.substr(1);
			$.ajax({
				url:"/node/del/"+ids,
				type: "get",
				dataType:'json',
				success: function(data){
					alert(data);
					window.location.reload("Admin/node/index/0");
				},
				error:function(){
					alert('error');
				}
			})
		});
		//全选反选
		$(".all").click(function(){
			$(".box").each(function(){
				if(this.checked)
				{
					this.checked = false;
				}else{
					this.checked = true;
				}
			});
		});

		//修改状态
		$('.a').click(function(){
			id = $(this).children().attr("id");
			status = $(this).children().attr("status");
			$.ajax({
				url:"/node/status/"+id+status,
				type: "get",
				dataType:"json",
				success: function(aa){
					var options_html="";
					for(var i=0;i<aa.length;i++){
						options_html+="<option value='"+aa[i].id+"'>"+aa[i].title+"</option>";
					}
					document.getElementById("pid").innerHTML = options_html;
				},
				error: function () {
					alert('error');
				}
			})
		});
	})

</script>
</html>
<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<html lang="zh-cn">
<style>
    .pagination li{
        float:left;
        margin:1px;
        list-style:none;
    }
</style>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>轮播图列表</title>
    <link rel="stylesheet" href="/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <link rel="stylesheet" href="/Admin/css/style.css">
    <!--<link rel="stylesheet" href="css/ace.min.css">-->
    <script src="/Admin/js/jquery.js"></script>
    <script src="/Admin/js/pintuer.js"></script>
    <script src="/Admin/js/layer/layer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 自营品牌</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="border-b border-bno clearfix">
        <a href="/lunbo/add" class="button bg-yellow button-small"><span class="icon-plus"></span>添加轮播图</a>
    </div>
    <div class="padding border-bottom">
        <form action="/lunbo/show" method="get">
            关键字：<input type="text" name="keyword" />
            <input type="submit" value="搜索" />
        </form>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th>删除？<input type="checkbox" name="box" id="checkAll"></th>
            <th>轮播图名称</th>
            <th>轮播图排序</th>
            <th>轮播图状态</th>
            <th>轮播图URL</th>
            <th>轮播图描述</th>
            <th>轮播图原图</th>
            <th width="200">操作</th>
        </tr>
        @foreach($lunbo as $v)
            <tr>
                <td><input class="input" type="checkbox" value="{{$v->id}}" id="check{{$v->id}}" name="check">{{$v->id}}</td>
                <td>{{$v->img_name}}</td>
                <td><input class="input1" type="text" name="sort" value="{{$v->img_sort}}"></td>
                <td>
                    @if($v->img_status == 3 ) <img src="/images/lunbo/ok.gif" alt="正常" height="20" border="0" width="20" />
                    @elseif($v->img_status == 0 )<img src="/images/lunbo/del.gif" alt="删除" height="20" border="0" width="20" />
                    @elseif($v->img_status == 1)<img src="/images/lunbo/locked.gif" alt="禁用" height="20" border="0" width="20" />
                    @else<img src="/images/lunbo/locked.gif" alt="恢复" height="20" border="0" width="20" />
                    @endif
                </td>
                <td>{{$v->img_url}}</td>
                <td>{{$v->img_text}}</td>
                <td><img src="{{'/'.$v->img}}" width="100"></td>
                <td>
                    <a href="/lunbo/update/{{$v->id}}">修改</a>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="9" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red" style="padding:5px 15px;" id="del">提交</a></td>
    </table>
</div>
<div id="delete"></div>
<div class="page">
    {!!$lunbo->render()!!}
</div>
</body>
</html>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
        //全选反选
        $("#checkAll").click(function(){
            $("input[name='check']").each(function(){
                if(this.checked){
                    this.checked = false
                }else{
                    this.checked = true;
                }
            })
        });
        //删除
        $("#del").click(function(){
            //获取删除数据的ID
            var ids="";
            $("input[name='check']:checked").each(function(){
                ids +=','+$(this).attr('value');
            });
            ids = ids.substr(1);
            //获取排序的ID
            var id = "";
            $(".input").each(function(){
                id += $(this).val()+",";
            });
            //获取排序值
            var sort = "";
            $(".input1").each(function(){
                sort+=$(this).val()+",";
            });
            if(ids!=""){
                if(confirm('确定要删除吗？')){
                    $.ajax({
                        type:"get",
                        url:"delete/"+ids,
                        dataType:'json',
                        success(){
                            window.location.reload("Admin/lunbo/show");
                        }
                    })
                }
            }else{
                $.ajax({
                    type:"post",
                    url:"sort",
                    data:{"id":id,"sort":sort},
                    headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                    success:function(ok){
                        window.location.reload("Admin/lunbo/show");
                    }
                })
            }
        })
    })
</script>
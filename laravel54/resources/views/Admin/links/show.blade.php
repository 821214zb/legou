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
    <title>友情链接列表</title>
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
    <table class="table table-hover text-center">
        <tr>
            <th>删除？<input type="checkbox" name="box" id="checkAll"></th>
            <th>友情链接名称</th>
            <th>URL</th>
            <th>邮箱</th>
            <th>图片</th>
            <th>状态</th>
            <th>网站介绍</th>
            <th>排序</th>
            <th width="300">操作</th>
        </tr>
        @foreach($links as $v)
            <tr>
                <td><input class="input" type="checkbox" value="{{$v->id}}" id="check{{$v->id}}" name="check">{{$v->id}}</td>
                <td>{{$v->link_name}}</td>
                <td>{{$v->link_url}}</td>
                <td>{{$v->link_email}}</td>
                <td><img src="{{'/'.$v->link_image}}" width="100"></td>
                <td>
                @if($v->link_status == 1 ) <img src="/images/lunbo/ok.gif" alt="审核通过" height="20" border="0" width="20" />
                @else<img src="/images/lunbo/locked.gif" alt="审核未通过" height="20" border="0" width="20" />
                @endif
                </td>
                <td>{{$v->link_remark}}</td>
                <td><input class="input1" type="text" name="sort" value="{{$v->link_sort}}"></td>
                <td>
                    @if($v->link_status == 0)<a href="/links/check/{{$v->id}}/1" class="button border-red" >审核通过</a>
                    @else <a href="/links/check/{{$v->id}}/0" class="button border-red" >审核未通过</a>
                    @endif
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="9" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red" style="padding:5px 15px;" id="del">提交</a></td>
    </table>
</div>
<div id="delete"></div>
<div class="page">
    {!!$links->render()!!}
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
            //获取排序的ID
            var id = "";
            $(".input").each(function(){
                id += $(this).val()+",";
            });
//            alert(id);
            //获取排序值
            var sort = "";
            $(".input1").each(function(){
                sort+=$(this).val()+",";
            });
//            alert(sort);
            $.ajax({
                type:"post",
                url:"sort",
                data:{"id":id,"sort":sort},
                headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                success:function(ok){
                    window.location.reload("Admin/links/show");
                }
            })
        })
    })
</script>
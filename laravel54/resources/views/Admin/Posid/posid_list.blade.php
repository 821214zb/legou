<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <script type="text/javascript" src="http://www.aslegou.com/Admin/js/jquery-3.2.1.js"></script>
    <script src="/Admin/js/jquery.js"></script>
    {{--<script src="/Admin/js/pintuer.js"></script>--}}
    <script>
        $(document).ready(function(){
            //全选反选
            $('#box').click(function(){
               $('.inputs').each(function(){
                   if(this.checked){
                       this.checked = false
                   }else {
                       this.checked = true;
                   }
               })
            });

            //删除/批量删除
            $('#del').click(function(){
                var ids   = '';
                var level = '';
                var name  = '';
                $('.inputs').each(function(){
                    if(this.checked){
                        ids+= ","+$(this).attr("ids");
                        level= $(this).attr("level");
                        name+= $(this).attr("name");
                    }
                });
                ids = ids.substr(1);
                if(ids == ""){
                    alert('请选择要删除的图片！');
                    return false;
                }
                var r= confirm('确定要批量删除图片吗！');
                if(r == true){
                    $.ajax({
                        url:"/cate/delete/"+ids+'/'+level+'/'+name,
                        type: "get",
                        dataType:'json',
                        success: function(data){
                            alert(data);
                        },
                        error:function(){
                            alert('error');
                        }
                    })
                }
            });

            //批量排序
            $('#sort').click(function(){
                var ids   = '';
                var sorts = '';
                var posid_id = '';
                $('.inputs').each(function(){
                    if(this.checked){
                        ids+= ","+$(this).attr("ids");
                    }
                });
                $('.sort').each(function(){
                    sorts += ","+$(this).val();
                    posid_id = $(this).attr('posid_id');
                });

                ids = ids.substr(1);
                sorts = sorts.substr(1);
                if(ids == ""){
                    alert('请选择要排序的图片！');
                    return false;
                }
                var r= confirm('确定要排序吗！');
                if(r == true){
                    $.ajax({
                        url:"/posid/sort/"+ids+'/'+sorts+'/'+posid_id,
                        type: "get",
                        dataType:'json',
                        success: function(data){
                            alert(data);
                            window.location.reload("Admin/posid");
                        },
                        error:function(){
                            alert('error');
                        }
                    })
                }
            })
        })
    </script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 推荐位详情管理</strong><a style="float: right;font-size: 14px;font-weight: bold;" href="/posid">返回推荐位列表</a></div>
    <div class="padding border-bottom">
        <form action="show" method="get">
            <input type="text" placeholder=""  name="cate_title" class="input" style="width:250px; line-height:17px;display:inline-block" />
            <button type="submit" class="button border-main icon-search"> 查询</button>
            <a class="button border-yellow" href="/posid/add"><span class="icon-plus-square-o"></span> 添加推荐位置</a>
            <a class="button border-yellow" id="sort" href="javascript:void(0)"><span class="icon-plus-square-o"></span>批量排序</a>
        </form>

    </div>
    <table class="table table-hover text-center">
        <tr>
            <th>全选<input type="checkbox" id="box"></th>
            <th>商品id</th>
            <th>推荐位类型id</th>
            <th>商品排序</th>
            <th>推荐位状态</th>
            <th width="310" colspan="2">操作</th>
        </tr>
        @foreach($list as $k)
        <tr>
            <td><input type="checkbox" class="inputs" ids="{{$k->goods_id}}"></td>
            <td><span class="icon-plus-square padding-right text-main zhankai"></span>{{$k->goods_id}}</td>
            <td>{{$k->posids_id}}</td>
            <td><input type="text" value="{{$k->sort}}" class="sort" posid_id="{{$k->posids_id}}"></td>
            <td> @if($k->status == 1 )
                    <img src="/images/brand/ok.gif" alt="禁用" height="20" border="0" width="20" />
                @else
                    <img src="/images/brand/locked.gif" alt="正常" height="20" border="0" width="20" />
                @endif</td>
            <td><a class="button border-red" href="/posid/upload/{{$k->goods_id}}">编辑图片</a></td>
            <td> @if($k->status == 1 )
                    <a class="button border-red" href="/posid/status/{{$k->id}}/0">禁用</a>
                @else
                    <a class="button border-red" href="/posid/status/{{$k->id}}/1">恢复</a>
                @endif
        </tr>
        @endforeach
    </table>
</div><br>

<div style="margin:30px 0 0 450px;">
    {!! $list->render() !!}
</div>
<script type="text/javascript">
    function del(id,mid){
        if(confirm("您确定要删除吗?")){

        }
    }
    $(function(){
        $(".zhankai").click(function(){
            $(this).parent().parent().next(".hidden-tr").toggle();
        });

    });



</script>

</body>
</html>
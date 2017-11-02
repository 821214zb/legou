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
                var ids = '';
                $('.inputs').each(function(){
                    if(this.checked){
                        ids+= ","+$(this).attr("ids");
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
                        url:"/cate/delete/"+ids,
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
            })
        })
    </script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 分类管理</strong></div>
    <div class="padding border-bottom">
        <form action="show" method="get">
            <input type="text" placeholder=""  name="cate_title" class="input" style="width:250px; line-height:17px;display:inline-block" />
            <button type="submit" class="button border-main icon-search"> 查询</button>
            <a class="button border-yellow" href="/cate/add"><span class="icon-plus-square-o"></span> 添加分类</a>
            <a class="button border-yellow" id="del" href="javascript:void(0)"><span class="icon-plus-square-o"></span>删除</a>
        </form>

    </div>
    <table class="table table-hover text-center">
        <tr>
            <th>全选<input type="checkbox" id="box"></th>
            <th>分类ID</th>
            <th>分类名称</th>
            <th>分类排序</th>
            <th>分类等级</th>
            <th width="310">操作</th>
        </tr>
        @foreach($data as $k)
        <tr>
            <td><input type="checkbox" class="inputs" ids="{{$k->id}}"></td>
            <td><span class="icon-plus-square padding-right text-main zhankai"></span>{{$k->id}}</td>
            <td><a href="{{$k->id}}">{{$k->cate_title}}</a></td>
            <td>{{$k->cate_sort}}</td>
            <td>{{$k->cate_level}}</td>
            <td><div class="button-group"><a class="button border-green" href="cate-2.html"><span class="icon-exchange"></span>转移</a> <a class="button border-main" href="cateedit-1.html"><span class="icon-edit"></span> 编辑</a> <a class="button border-red" href="delete"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        @endforeach
    </table>
</div>
<div style="margin:30px 0 0 450px;">
    {!! $data->appends(['cate_title'=>$cate_title])->render() !!}
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
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>商品列表</title>
    <link rel="stylesheet" href="/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <link rel="stylesheet" href="/Admin/css/style.css">
    <!--<link rel="stylesheet" href="css/ace.min.css">-->
    <script src="/Admin/js/jquery.js"></script>
    <script src="/Admin/js/pintuer.js"></script>
    <script src="/Admin/js/layer/layer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 商品列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
        <div class="border-b border-bno clearfix">
            <a href="add" class="button bg-yellow button-small"><span class="icon-plus"></span>添加新商品</a>
        </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <!--<li> <a class="button border-main icon-plus-square-o" href="add.html"> 发布文章</a> </li>-->
                <if condition="$iscid eq 1">
                    <li>
                        <select name="cid" class="input" style="width:150px; line-height:17px;" onchange="changesearch()">
                            <option value="">所有分类</option>
                            <option value="">衣服</option>
                            <option value="">食品</option>
                            <option value="">电子</option>
                            <option value="">旅游</option>
                        </select>
                    </li>
                </if>
                <if condition="$iscid eq 1">
                    <li>
                        <select name="cid" class="input" style="width:100px; line-height:17px;" onchange="changesearch()">
                            <option value="">所有品牌</option>
                            <option value="">自营品牌</option>
                            <option value="">商家品牌</option>
                        </select>
                    </li>
                </if>
                <if condition="$iscid eq 1">
                    <li>
                        <select name="cid" class="input" style="width:100px; line-height:17px;" onchange="changesearch()">
                            <option value="">精品</option>
                            <option value="">特价</option>
                            <option value="">热销</option>
                        </select>
                    </li>
                </if>
                <if condition="$iscid eq 1">
                    <li>
                        <select name="cid" class="input" style="width:100px; line-height:17px;" onchange="changesearch()">
                            <option value="">全部</option>
                            <option value="">供货商</option>
                            <option value="">供货商</option>
                        </select>
                    </li>
                </if>
                <if condition="$iscid eq 1">
                    <li>
                        <select name="cid" class="input" style="width:100px; line-height:17px;" onchange="changesearch()">
                            <option value="">全部</option>
                            <option value="">上架</option>
                            <option value="">下架</option>
                        </select>
                    </li>
                </if>
                <if condition="$iscid eq 1">
                    <li>
                        <select name="cid" class="input" style="width:100px; line-height:17px;" onchange="changesearch()">
                            <option value="">全部</option>
                            <option value="">审核</option>
                            <option value="">未审核</option>
                        </select>
                    </li>
                </if>
                <li>
                    <input type="text" placeholder=""  class="input" style="width:250px; line-height:17px;display:inline-block" />
                    <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 查询</a></li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th width="100" style="text-align:left; padding-left:20px;">编号</th>
                <th>商品名称</th>
                <th>商品数量</th>
                <th>现价</th>
                <th>原价</th>
                <th>商品排序</th>
                <th>上线时间</th>
                <th>下线时间</th>
                <th>缩列图</th>
                <th>商品描述</th>
                <th>商品状态</th>
                <th width="310">操作</th>
            </tr>
            @foreach($goods as $v)
                <tr>
                    <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
                        {{$v->id}}</td>
                    <td>{{$v->goods_name}}</td>
                    <td>{{$v->goods_count}}</td>
                    <td>{{$v->new_price}}</td>
                    <td>{{$v->old_price}}</td>
                    <td>{{$v->goods_sort}}</td>
                    <td>{{date('Y-m-d H:i:s',$v->up_time)}}</td>
                    <td>{{date('Y-m-d H:i:s',$v->down_time)}}</td>
                    <td><img src="<?php echo "/".$v->goods_img; ?>" width="70" height="70"></td>
                    <td>{{$v->goods_text}}</td>
                    <td>
                        @if($v->status == 0)
                            已删除
                        @elseif($v->status == 1)
                            禁用
                        @elseif($v->status == 2)
                            恢复
                        @elseif($v->status == 3)
                            正常
                        @endif
                    </td>
                    <td><div class="button-group"><a class="button border-yellow" href="add-product.html"><span class="icon-edit (alias)"></span>编辑</a><a class="button border-main" href=""><span class="icon-eye"></span> 查看</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
                </tr>
            @endforeach
                <tr>
                    <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
                        全选 </td>
                    <td colspan="10" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 批量删除</a>
                </tr>
        </table>
        <div class="pagelist">  {{ $goods->links() }}</div>

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

</script>
</body>
</html>
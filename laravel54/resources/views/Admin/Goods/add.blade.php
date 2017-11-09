<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>添加商品</title>
    <link rel="stylesheet" href="/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <link rel="stylesheet" href="/Admin/js/umeditor/themes/default/css/umeditor.css">
    <link rel="stylesheet" href="/Admin/css/style.css">
    <!--<link rel="stylesheet" href="css/ace.min.css">-->
    <script src="/Admin/js/jquery.js"></script>
    <script src="/Admin/js/pintuer.js"></script>
    <script type="text/javascript" src="/Admin/jeDate/jedate.js"></script>
    <script language="javascript" type="text/javascript" src="/time/WdatePicker.js"></script>
</head>
<style type="text/css">
    .div_li{border: grey solid 1px;width: 200px;height: 40px;float: left;text-align: center;line-height: 40px;}
    .ul{border: lightcyan solid 1px;width: 1120px;height: 40px;background-color: lightcyan;}
</style>
<body>
<div class="panel admin-panel">
    <ul class="ul">
        <li><div class="div_li"><a href="" class="icon-reorder">商品通用信息</a></div></li>
        <li><div class="div_li"><a href="addTwo" class="icon-reorder">商品属性信息</a></div></li>
    </ul>
    <div class="tab-box">
        <div class="tab">
    <div class="tab-panel" id="tab-b">
        <div class="common-info">
            <form class="form-x" action="add" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="label">
                        <label>商品名称：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" name="goods_name" placeholder=" &nbsp;请填写商品信息"  />
                    </div>
                </div>
                <ul class="search" style="padding-left:10px;">
                <div class="form-group">
                    <div class="label">
                        <label>一级分类：</label>
                    </div>
                    <li>
                        <select name="pid1" id="cate" class="input" style="width:100px; line-height:17px;" onchange="category(1)">
                            <option value="">--请选择--</option>
                           @foreach($cate as $v)
                                <option value="{{$v->id}}">{{$v->cate_title}}</option>
                           @endforeach
                        </select>
                    </li>

                    <div class="label">
                    <label>二级分类：</label>
                    </div>
                    <li>
                    <select name="pid2" id="name2" class="input" style="width:100px; line-height:17px;" onchange="category(2)">
                        <option value="">--请选择--</option>
                    </select>
                    </li>
                    <div class="label">
                    <label>三级分类：</label>
                    </div>
                    <li>
                    <select name="pid3" id=name3  class="input" style="width:100px; line-height:17px;" >
                        <option value="">--请选择--</option>
                    </select>
                    </li>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>品牌名称：</label>
                    </div>
                    <li>
                    <select name="brand_id" id="brand_id" class="input" style="width:100px; line-height:17px;" >
                        <option value="" >--请选择--</option>
                        @foreach($row as $v)
                            <option value="{{$v->id}}">{{$v->brand_name}}</option>
                        @endforeach
                    </select>
                    </li>
                </div>
                    <div class="form-group">
                        <div class="label">
                            <label>店铺名称：</label>
                        </div>
                        <li>
                            <select name="shop_id" id="brand_id" class="input" style="width:100px; line-height:17px;" >
                                <option value="" >--请选择--</option>
                                @foreach($shop as $v)
                                    <option value="{{$v->shop_id}}">{{$v->name}}</option>
                                @endforeach
                            </select>
                        </li>
                    </div>

                    </ul>
                <div class="form-group">
                    <div class="label">
                        <label>库存：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="goods_count" placeholder=" &nbsp;请填写商品库存信息" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品现价：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="new_price" placeholder=" &nbsp;请填写商品现价" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品原价：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="old_price" placeholder=" &nbsp;请填写商品原价" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品风格：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="style" placeholder=" &nbsp;请填写商品风格" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>邮费：</label>
                    </div>
                    <div class="field field-tsa">
                        <select name="Postage" class="input" style="width:100px; line-height:17px;">
                            <option value="">--请选择--</option>
                            <option value="0">8</option>
                            <option value="1">10</option>
                            <option value="3">包邮</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品排序：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="sort" placeholder=" &nbsp;请给商品排序" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>上线时间：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="up_time" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" placeholder=" &nbsp;商品上线时间" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>下线时间：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="end_time" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" placeholder=" &nbsp;商品下线时间" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>促销日期：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="promotion_date" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" placeholder=" &nbsp;商品促销时间" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>上传图片：</label>
                    </div>
                    <div class="field field-tsa">
                        <img src="" width="80" height="80" id="img_a">
                        <input type="file" name="img" id="img_b" onchange="up_img()" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>供货商：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="supplier" placeholder=" &nbsp;请填写供货商" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品积分：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="integral" placeholder=" &nbsp;请填写商品积分" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>积分购买金额：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="integral_moeny" placeholder=" &nbsp;使用积分购买需要多少金额" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>会员价格：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="member_price" placeholder=" &nbsp;请填写商品会员价格" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>优惠价格：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="pre_price" placeholder=" &nbsp;商品优惠价格" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>市场价格：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="market_price" placeholder=" &nbsp;商品市场价格" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>促销价格：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="chuxiao" placeholder=" &nbsp;请填写商品促销价" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>状态：</label>
                    </div>
                    <div class="field field-tsa">
                        <select name="status" class="input" style="width:100px; line-height:17px;">
                            <option value="">--请选择--</option>
                            <option value="0">删除</option>
                            <option value="1">禁用</option>
                            <option value="3">正常</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品描述：</label>
                    </div>
                    <div>
                        <textarea style="width:400px;height:200px;" name="goods_text" class="input" placeholder=" &nbsp;描述一下商品吧" ></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>推荐位：</label>
                    </div>
                    <div class="field field-tsa">
                        @foreach($res as $v)
                        <input type="checkbox" name="posid[]" value="{{$v->id}}" />{{$v->type}}
                        @endforeach
                    </div>
                </div>

            <div class="text-center">
                <div class="field">
                    <input class="button bg-green" type="submit" name='one' value="确认提交" />
                    <a class="button bg-red">重置</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    function up_img(){
        //利用files获得被上传附件（图片）信息
        var img_b = document.getElementById('img_b').files[0];
        document.getElementById('img_a').src = window.URL.createObjectURL(img_b);
    }
</script>
<script  type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script  type="text/javascript">
    /*
    * 分类联动
    * */
    function category(pid){
        var  id = "";
        if(pid == 1){
            id = $("#cate").val();
        }
        if(pid == 2){
            id = $("#name2").val();
        }
        $.ajax({
            url:'add',
            type:'get',
            data:{"pid":id},
            dataType:'json',
            success:function(json){
                var $str = '';
                for(var i = 0; i<json.length; i++){
                    $str = $str+"<option value='"+json[i].id+"' >"+json[i].cate_title+"</option>";
                }
                if(pid == 1){
                    var $str1="<option value=''>请选择</option>"+$str;
                    $("#name2").html($str1);
                }
                if(pid == 2){
                    var $str2="<option value=''>请选择</option>"+$str;
                    $("#name3").html($str2);
                }
            }
        });
    }
//    $(document).ready(function(){
//        $("#but").click(function(){
//            alert("请继续填写商品属性信息！");
//            window.location.href="addTwo";
//        });
//    });
</script>




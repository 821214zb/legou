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
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">添加新商品</strong></div>
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
                        <input type="text" class="input" name="goods_name" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>一级分类：</label>
                    </div>
                    <select name="pid1" id="cate" onchange="category(1)">
                        <option value="">--请选择--</option>
                       @foreach($cate as $v)
                            <option value="{{$v->id}}">{{$v->cate_title}}</option>
                       @endforeach
                    </select>
                    <label>二级分类：</label>
                    <select name="pid2" id="name2" onchange="category(2)">
                        <option value=""></option>
                    </select>
                    <label>三级分类：</label>
                    <select name="pid3" id=name3 >
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>品牌名称：</label>
                    </div>
                    <select name="brand_id" id="brand_id">
                        <option value="">--请选择--</option>
                        @foreach($row as $v)
                            <option value="{{$v->id}}">{{$v->brand_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品数量：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="goods_count" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品现价：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="new_price" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品原价：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="old_price" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品重量：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="weight" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品规格：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="size" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品排序：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="sort" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>上线时间：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="up_time" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>下线时间：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="end_time" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
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
                        <label>商品颜色：</label>
                    </div>
                    <div class="field field-tsa">
                        <input type="text" class="input" name="color" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>状态：</label>
                    </div>
                    <div class="field field-tsa">
                        <select name="status" >
                            <option value="">--请选择--</option>
                            <option value="0">删除</option>
                            <option value="1">禁用</option>
                            <option value="2">恢复</option>
                            <option value="3">正常</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>商品描述：</label>
                    </div>
                    <div>
                        <textarea style="width:400px;height:200px;" name="goods_text" class="input" ></textarea>
                    </div>
                </div>
            <div class="text-center">
                <div class="field">
                    <input class="button bg-green" type="submit" value="确定" >
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
    $(document).ready(function(){
        $("#brand_id").click()
    });


</script>




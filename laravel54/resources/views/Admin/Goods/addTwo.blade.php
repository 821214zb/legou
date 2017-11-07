<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>添加商品属性</title>
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
        <li><div class="div_li"><a href="add" class="icon-reorder">商品通用信息</a></div></li>
        <li><div class="div_li"><a href="" class="icon-reorder">商品属性信息</a></div></li>
    </ul>
    <div class="tab-box">
        <div class="tab">
            <div class="tab-panel" id="tab-b">
                <div class="common-info">
                    <form class="form-x" action="add" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="label">
                                <label>选择分类：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="shuxing" id="category" class="input" style="width:100px; line-height:17px;" onchange="getInfo()">
                                    <option value="">--请选择--</option>
                                    <option value="1" id="cate1">箱包</option>
                                    <option value="2" id="cate2">家电</option>
                                    <option value="3" id="cate3">服装</option>
                                    <option value="4" id="cate4">鞋子</option>
                                    <option value="5" id="cate5">护肤</option>
                                    <option value="6" id="cate6">数码</option>
                                    <option value="7" id="cate7">食品</option>
                                </select>
                            </div>
                        </div>
                        <div id="box"></div>
                        <div class="text-center">
                            <div class="field">
                                <input class="button bg-green" type="submit" name="one" value="提交" >
                                <a class="button bg-red">重置</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
<script  type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    function getInfo(){
        num1 = $("#category").val();
        $.ajax({
            url:'addTwo',
            type:'post',
            data:{"cate":num1},
            headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
            dataType:'json',
            success:function(json){
                $("#box").html(json);
            }
        });
    }
</script>





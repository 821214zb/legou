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
        <li><div class="div_li"><a href="/goods/update/{{$goodsInfo->id}}" class="icon-reorder">修改商品通用信息</a></div></li>
        <li><div class="div_li"><a href="" class="icon-reorder">修改商品属性信息</a></div></li>
    </ul>
    <div class="tab-box">
        <div class="tab">
            <div class="tab-panel" id="tab-b">
                <div class="common-info">
                    <form class="form-x" action="update" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div id="bel">
                            <label style="margin-left: 70px;">鞋子尺码：</label>
                            <input type="text"  name="size[]" />
                            <input type="button" value="+ 添加" id="btn2" ><br />
                        </div><br />
                        <div class="form-group">
                            <div class="label">
                                <label>鞋子重量：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="weight" />
                            </div>
                        </div>
                        <div id="label">
                            <label style="margin-left: 70px;">鞋子颜色：</label>
                            <input type="text" name="color[]" />
                            <input type="button" value="+ 添加" id="yanse" ><br />
                        </div><br />
                        <div class="form-group">
                            <div class="label">
                                <label>面料：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="fabric" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>风格：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="style" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>适合季节：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="season" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="四季">四季</option>
                                    <option value="春季">春季</option>
                                    <option value="夏季">夏季</option>
                                    <option value="秋季">秋季</option>
                                    <option value="冬季">冬季</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>适合人群：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="crowd" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="18-24周岁">18-24周岁</option>
                                    <option value="25-29周岁">25-29周岁</option>
                                    <option value="35-39周岁">35-39周岁</option>
                                    <option value="40-49周岁">40-49周岁</option>
                                    <option value="17周岁以下">17周岁以下</option>
                                </select>
                            </div>
                        </div>


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
<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
        $("#btn2").click(function(){
            $("#bel").append(" <span><input type='text' name='size[]' style='margin-left:138px;margin-top: 10px; '><input type='button' value='-' id='del'><br /></span>");
        });
        $("#yanse").click(function(){
            $("#label").append(" <span><input type='text' name='color[]' style='margin-left:138px;margin-top: 10px; '><input type='button' value='-' id='del'><br /></span>");
        });
        $("div").on("click","#del",function () {
            $(this).parent().remove();
        });
    });
</script>





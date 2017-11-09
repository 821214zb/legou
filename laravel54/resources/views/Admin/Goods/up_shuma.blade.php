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
                            <label style="margin-left: 75px;">数码尺寸：</label>
                            <input type="text"  name="size[]" />
                            <input type="button" value="+ 添加" id="btn2" ><br />
                        </div><br />
                        <div class="form-group">
                            <div class="label">
                                <label>重量：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="weight" />
                            </div>
                        </div>
                        <div id="label">
                            <label style="margin-left: 100px;">颜色：</label>
                            <input type="text" name="color[]" />
                            <input type="button" value="+ 添加" id="yanse" ><br />
                        </div><br />
                        <div class="form-group">
                            <div class="label">
                                <label>材料：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="material" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>款式：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="style" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>系统：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="system" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="安卓（Android）">安卓（Android）</option>
                                    <option value="苹果（IOS）">苹果（IOS）</option>
                                    <option value="微软（WindowsPhone）">微软（WindowsPhone）</option>
                                    <option value="基础功能机系统">基础功能机系统</option>
                                    <option value="其它">其它</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>适合人群：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="crowd" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>版本：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="version" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>操作方式：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="control_mode" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>CPU核数：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="cpu" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="十核">十核</option>
                                    <option value="八核">八核</option>
                                    <option value="双四核">双四核</option>
                                    <option value="双核">双核</option>
                                    <option value="单核">单核</option>
                                    <option value="功能机">功能机</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>网络：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="network" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="移动4G/联通4G/电信4G">移动4G/联通4G/电信4G</option>
                                    <option value="移动4G">移动4G</option>
                                    <option value="联通4G">联通4G</option>
                                    <option value="电信4G">电信4G</option>
                                    <option value="双卡双4G">双卡双4G</option>
                                    <option value="双卡单4G">双卡单4G</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>SIM卡尺寸：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="sim_size" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>CPU型号：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="cpu_model" />
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
            $("#bel").append(" <span><input type='text' name='size[]' style='margin-left:143px;margin-top: 10px; '><input type='button' value='-' id='del'><br /></span>");
        });
        $("#yanse").click(function(){
            $("#label").append(" <span><input type='text' name='color[]' style='margin-left:143px;margin-top: 10px; '><input type='button' value='-' id='del'><br /></span>");
        });
        $("div").on("click","#del",function () {
            $(this).parent().remove();
        });
    });
</script>





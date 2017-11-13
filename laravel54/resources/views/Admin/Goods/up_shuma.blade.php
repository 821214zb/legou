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
        <li><div class="div_li"><a href="/goods/update/{{$goods_id}}" class="icon-reorder">修改商品通用信息</a></div></li>
        <li><div class="div_li"><a href="" class="icon-reorder">修改商品属性信息</a></div></li>
    </ul>
    <div class="tab-box">
        <div class="tab">
            <div class="tab-panel" id="tab-b">
                <div class="common-info">
                    <form class="form-x" action="update" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div id="bel">
                            <div>
                                <label>屏幕尺码：</label>
                            </div>
                            <?php foreach (isset($cate_shuma['size'])?$cate_shuma['size']:["请输入"] as $v){?>
                            <span>
                                <input type="text"  name="size[]" value="<?php echo $v; ?>" />
                                <input type="button" value="-" class="delete" class="sda" /> <br />
                            </span>
                            <?php } ?>
                        </div>
                        <input type="button" value="+ 添加" id="btn2" style="margin-left: 180px;"/><br />
                        <div class="form-group">
                            <div>
                                <label>重量：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="weight" value="<?php echo isset($cate_shuma['weight']['0']) ? $cate_shuma['weight']['0'] : ""; ?>"/>
                            </div>
                        </div>

                        <div id="label">
                            <div>
                                <label>商品颜色：</label>
                            </div>
                            <?php foreach (isset($cate_shuma['color'])?$cate_shuma['color']:["请输入"] as $v){?>
                            <span>
                                <input type="text" name="color[]" value="<?php echo $v; ?>"/>
                                <input type="button" value="-" class="delete" /> <br />
                            </span>
                            <?php } ?>
                        </div>
                        <input type="button" value="+ 添加" id="yanse" style="margin-left: 180px;" /><br />

                        <div class="form-group">
                            <div>
                                <label>材料：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="material" value="<?php echo isset($cate_shuma['material']['0']) ? $cate_shuma['material']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>款式：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="style" value="<?php echo isset($cate_shuma['style']['0']) ? $cate_shuma['style']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
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
                            <div>
                                <label>适合人群：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="crowd" value="<?php echo isset($cate_shuma['crowd']['0']) ? $cate_shuma['crowd']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>版本：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="version" value="<?php echo isset($cate_shuma['version']['0']) ? $cate_shuma['version']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>操作方式：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="control_mode" value="<?php echo isset($cate_shuma['control_mode']['0']) ? $cate_shuma['control_mode']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
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
                            <div>
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
                            <div>
                                <label>SIM卡尺寸：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="sim_size" value="<?php echo isset($cate_shuma['sim_size']['0']) ? $cate_shuma['sim_size']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>CPU型号：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="cpu_model" value="<?php echo isset($cate_shuma['cpu_mode']['0']) ? $cate_shuma['cpu_mode']['0'] : ""; ?>"/>
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
            $("#bel").append(" <span><input type='text' name='size[]' /><input type='button' value='-' id='del'><br /></span>");
        });
        $("#yanse").click(function(){
            $("#label").append(" <span><input type='text' name='color[]' /><input type='button' value='-' id='del'><br /></span>");
        });
        $("div").on("click","#del",function () {
            $(this).parent().remove();
        });

        $(".delete").click(function () {
            $(this).parent().remove();
        })
    });
</script>





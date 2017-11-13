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
                            <label>尺码：</label>
                                </div>
                            <?php foreach (isset($box_arr['size'])?$box_arr['size']:["请输入"] as $v){?>
                            <span>
                                <input type="text"  name="size[]" value="<?php echo $v; ?>" />
                                <input type="button" value="-" class="delete" /> <br />
                            </span>
                            <?php } ?>
                        </div>
                        <input type="button" value="+ 添加" id="btn2" style="margin-left: 180px;"/><br />

                        <div class="form-group">
                            <div >
                                <label>商品重量：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="weight" value="<?php echo isset($box_arr['weight']['0']) ? $box_arr['weight']['0'] : ""; ?>" />
                            </div>
                        </div>

                        <div id="label">
                            <div>
                            <label>商品颜色：</label>
                                </div>
                            <?php foreach (isset($box_arr['color'])?$box_arr['color']:["请输入"] as $v){?>
                            <span>
                                <input type="text" name="color[]" value="<?php echo $v; ?>"/>
                                <input type="button" value="-" class="delete" /> <br />
                            </span>
                            <?php } ?>
                        </div>
                        <input type="button" value="+ 添加" id="yanse" style="margin-left: 180px;" /><br />

                        <div class="form-group">
                            <div >
                                <label>箱包容积：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="volume" value="<?php echo isset($box_arr['volume']['0']) ? $box_arr['volume']['0'] : ""; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div >
                                <label>商品风格：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="style" value="<?php echo isset($box_arr['style']['0']) ? $box_arr['style']['0'] : "" ; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div >
                                <label>材料：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="material" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="铝合金">铝合金</option>
                                    <option value="ABS">ABS</option>
                                    <option value="布">布</option>
                                    <option value="PC">PC</option>
                                    <option value="皮">皮</option>
                                    <option value="PVC">PVC</option>
                                    <option value="PP">PP</option>
                                    <option value="ABS&PC">ABS&PC</option>
                                    <option value="铝镁合金">铝镁合金</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div >
                                <label>人群：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="crowd" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="女士">女士</option>
                                    <option value="男士">男士</option>
                                    <option value="中性">中性</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div >
                                <label>拉杆分类：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="draw_bar" value="<?php echo isset($box_arr['draw-bar_box']['0']) ? $box_arr['draw-bar_box']['0'] : ""; ?>" />
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
            $("#bel").append(" <span><input type='text' name='size[]' ><input type='button' value='-' id='del'><br /></span>");
        });
        $("#yanse").click(function(){
            $("#label").append(" <span><input type='text' name='color[]' ><input type='button' value='-' id='del'><br /></span>");
        });
        $("div").on("click","#del",function () {
            $(this).parent().remove();
        });

        $(".delete").click(function () {
            $(this).parent().remove();
        })
    });
</script>





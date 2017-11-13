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
                        <div class="form-group">
                            <div>
                                <label>国产/进口：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="chandi" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="国产">国产</option>
                                    <option value="其它">其它</option>
                                    <option value="进口">进口</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>重量：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="weight" value="<?php echo isset($cate_food['weight']['0']) ? $cate_food['weight']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>酒精度：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="alcohol_content" value="<?php echo isset($cate_food['Alcohol_content']['0']) ? $cate_food['Alcohol_content']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>包装：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="packing" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="礼盒装">礼盒装</option>
                                    <option value="组合装">组合装</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>香型：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="liquor" value="<?php echo isset($cate_food['Liquor_flavor_type']['0']) ? $cate_food['Liquor_flavor_type']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>保质期：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="shelf_time" value="<?php echo isset($cate_food['shelf_time']['0']) ? $cate_food['shelf_time']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>适用人群：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="crowd" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="通用">通用</option>
                                    <option value="成人">成人</option>
                                    <option value="儿童">儿童</option>
                                    <option value="中老年">中老年</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>产地：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="origin" value="<?php echo isset($cate_food['origin']['0']) ? $cate_food['origin']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>功效：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="efficacy" value="<?php echo isset($cate_food['Efficacy']['0']) ? $cate_food['Efficacy']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>净含量：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="net" value="<?php echo isset($cate_food['Net_content']['0']) ? $cate_food['Net_content']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>包装件数：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="num" value="<?php echo isset($cate_food['number_of_packages']['0']) ? $cate_food['number_of_packages']['0'] : ""; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>食品添加剂：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="food_addi" value="<?php echo isset($cate_food['food_additives']['0']) ? $cate_food['food_additives']['0'] : ""; ?>" />
                            </div>
                        </div>

                        <div id="la">
                            <div>
                            <label>口味：</label>
                            </div>
                            <?php foreach (isset($cate_food['Flavor'])?$cate_food['Flavor']:["请输入"] as $v){?>
                            <span>
                            <input type="text" name="flavor[]" value="<?php echo $v; ?>" />
                            <input type="button" value="-" class="delete" ><br />
                            </span>
                            <?php } ?>
                        </div>
                        <input type="button" value="+ 添加" id="kou" style="margin-left: 180px;" /><br />

                        <div class="form-group">
                            <div>
                                <label>存储方式：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="sto" value="<?php echo isset($cate_food['Storage method']['0']) ? $cate_food['Storage method']['0'] : ""; ?>"/>
                            </div>
                        </div>

                        <div id="label">
                            <div>
                                <label>颜色：</label>
                            </div>
                            <?php foreach (isset($cate_food['color'])?$cate_food['color']:["请输入"] as $v){?>
                            <span>
                            <input type="text" name="color[]" value="<?php echo $v; ?>"/>
                            <input type="button" value="-" class="delete" /> <br />
                            </span>
                            <?php } ?>
                        </div>
                        <input type="button" value="+ 添加" id="yanse" style="margin-left: 180px;" /><br />

                        <div class="form-group">
                            <div>
                                <label>适用场景：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="applicable" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="日常">日常</option>
                                    <option value="节日">节日</option>
                                    <option value="休闲娱乐">休闲娱乐</option>
                                    <option value="送礼">送礼</option>
                                    <option value="聚会">聚会</option>
                                    <option value="其他">其他</option>
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
        $("#kou").click(function(){
            $("#la").append(" <span><input type='text' name='flavor[]' ><input type='button' value='-' id='del'><br /></span>");
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





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
                            <?php foreach (isset($cate_cloth['size'])?$cate_cloth['size']:["请输入"] as $v){?>
                            <span>
                                <input type="text"  name="size[]" value="<?php echo $v; ?>" />
                                <input type="button" value="-" class="delete" /> <br />
                            </span>
                            <?php } ?>
                        </div>
                        <input type="button" value="+ 添加" id="btn2" style="margin-left: 180px;"/><br />

                        <div class="form-group">
                            <div>
                                <label>服装重量：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="weight" value="<?php echo isset($cate_cloth['weight']['0']) ? $cate_cloth['weight']['0'] : ""; ?>" />
                            </div>
                        </div>

                        <div id="label">
                            <div>
                                <label>商品颜色：</label>
                            </div>
                            <?php foreach (isset($cate_cloth['color'])?$cate_cloth['color']:["请输入"] as $v){?>
                            <span>
                                <input type="text" name="color[]" value="<?php echo $v; ?>"/>
                                <input type="button" value="-" class="delete" /> <br />
                            </span>
                            <?php } ?>
                        </div>
                        <input type="button" value="+ 添加" id="yanse" style="margin-left: 180px;" /><br />

                        <div class="form-group">
                            <div>
                                <label>服装面料：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="fabric" value="<?php echo isset($cate_cloth['fabric']['0']) ? $cate_cloth['fabric']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>版型：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="type_version" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="高腰型">高腰型</option>
                                    <option value="修身">修身</option>
                                    <option value="斗篷型">斗篷型</option>
                                    <option value="直筒">直筒</option>
                                    <option value="宽松">宽松</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>袖型：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="sleeve_type" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="常规">常规</option>
                                    <option value="喇叭袖">喇叭袖</option>
                                    <option value="蝙蝠袖">蝙蝠袖</option>
                                    <option value="插肩袖">插肩袖</option>
                                    <option value="飞飞袖">飞飞袖</option>
                                    <option value="荷叶袖">荷叶袖</option>
                                    <option value="泡泡袖">泡泡袖</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>领型：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="collar_type" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="连帽">连帽</option>
                                    <option value="可脱卸帽">可脱卸帽</option>
                                    <option value="西装领">西装领</option>
                                    <option value="圆领">圆领</option>
                                    <option value="立领">立领</option>
                                    <option value="双层领">双层领</option>
                                    <option value="高领">高领</option>
                                    <option value="娃娃领">娃娃领</option>
                                    <option value="一字领">一字领</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>裤长：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="long_pants" value="<?php echo isset($cate_cloth['long_pants']['0']) ? $cate_cloth['long_pants']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>服装风格：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="style" value="<?php echo isset($cate_cloth['style']['0']) ? $cate_cloth['style']['0'] : ""; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label>货号：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="article_number" value="<?php echo isset($cate_cloth['article_number']['0']) ? $cate_cloth['article_number']['0'] : ""; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
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
                            <div>
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





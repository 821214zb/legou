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


                        <div class="form-group">
                            <div class="label">
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
                            <div class="label">
                                <label>重量：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="weight" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>酒精度：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="alcohol_content" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
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
                            <div class="label">
                                <label>香型：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="liquor" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>保质期：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="shelf_time" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
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
                            <div class="label">
                                <label>产地：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="origin" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>功效：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="efficacy" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>净含量：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="net" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>包装件数：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="num" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>食品添加剂：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="food_addi" />
                            </div>
                        </div>

                        <div id="la">
                            <label style="margin-left: 100px;">口味：</label>
                            <input type="text" name="flavor[]" />
                            <input type="button" value="+ 添加" id="kou" ><br />
                        </div><br />

                        <div class="form-group">
                            <div class="label">
                                <label>存储方式：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="sto" />
                            </div>
                        </div>

                        <div id="label">
                            <label style="margin-left: 100px;">颜色：</label>
                            <input type="text" name="color[]" />
                            <input type="button" value="+ 添加" id="yanse" ><br />
                        </div><br />
                        <div class="form-group">
                            <div class="label">
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
            $("#la").append(" <span><input type='text' name='flavor[]' style='margin-left:143px;margin-top: 10px; '><input type='button' value='-' id='del'><br /></span>");
        });

        $("#yanse").click(function(){
            $("#label").append(" <span><input type='text' name='color[]' style='margin-left:143px;margin-top: 10px; '><input type='button' value='-' id='del'><br /></span>");
        });
        $("div").on("click","#del",function () {
            $(this).parent().remove();
        });
    });
</script>




